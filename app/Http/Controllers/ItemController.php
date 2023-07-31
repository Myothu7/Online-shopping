<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
class ItemController extends Controller
{
    public function index(){
        $item = Item::all();
        return view('admin.item.index',[
            'items' => $item
        ]);
    }

    public function show(){
        $category = Category::all();

        return view('admin.item.add_item',[
            "categories" => $category
        ]);
    }

    public function create(){
        
        $validator = validator(request()->all(), [
            'item' => 'required',
            'category_id'=> 'required',
            'price' => 'required',
            'image' => 'required',
            'owner' => 'required',
            'type' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $fileName = time().request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('item-images', $fileName,'public');

        if(request()->description == NULL){
            request()->description = " ";
        }
        if(request()->phone == NULL){
            request()->phone = " ";
        }
        if(request()->address == NULL){
            request()->address = " ";
        }
        $item = new Item();
        $item->category_id = request()->category_id;
        $item->item = request()->item;
        $item->price = request()->price;
        $item->description = request()->description;
        $item->type = request()->type;
        $item->image = '/storage/'.$path;
        $item->owner = request()->owner;
        $item->phone = request()->phone;
        $item->address = request()->address;
        $item->save();
        return back()->with('success','Upload successfully!');
    }

    public function delete($id){
        $item = Item::find($id);
        $path = public_path($item->image);

        if(file_exists($path))
        {
            unlink($path);
        }
        $item->delete();

        return back()->with('delete', 'Delete Successfully!');
    }

    public function edit($id){
        $item = Item::find($id);
        $category = Category::all();

        return view('admin.item.edit',[
            "item" => $item,
            "category" => $category
        ]);
    }

    public function update($id){
        $item = Item::find($id);
        $item->item = request()->item;
        $item->category_id = request()->category_id;
        $item->description = request()->description;
        $item->owner = request()->owner;
        $item->save();
        return redirect("/items")->with('update',"Update Successfully!");
    }

}
