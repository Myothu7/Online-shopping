<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();

        return view('admin.category.category',[
            'categories' => $data
        ]);
    }
    
    public function add(){
        return view('admin.category.add_category');
    }



    public function create(){

        $validator = validator(request()->all(), [
            'name' => 'required',
            'image' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $fileName = time().request()->file('image')->getClientOriginalName();
        $path = request()->file('image')->storeAs('category-images', $fileName,'public');

        $category = new Category();
        $category->name = request()->name;
        $category->image = '/storage/'.$path;
        $category->save();
        

        return redirect('categories/add')->with('success','Upload successfully');

    }

    public function edit($id){
        $data = Category::find($id);
        return view('admin.category.edit',[
            'category' => $data
        ]);

    }

    public function update($id){
        $data = Category::find($id);
        $data ->name = request()->name;
        $data->save();

        return redirect('/categories')->with('success','Update Successfully!');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        
        $category_path = public_path($category->image);

        function all_delete($path, $db)
        {
            if(file_exists($path))
            {
                unlink($path);
            }
            $db->delete();
        }
        all_delete($category_path,$category);  // category table delete

        $item_id = Item::where("category_id",$id)->get();

        if (count($item_id) != 0)
        {
            for($i=0;$i<count($item_id);$i++){
                $item = Item::find($item_id[$i]['id']);
                $path = public_path($item->image);
                if(file_exists($path))
                {
                    unlink($path);
                }
                $item->delete();
            }
        }
        return back()->with('delete','Delete Successfully!');
      
    }

}
