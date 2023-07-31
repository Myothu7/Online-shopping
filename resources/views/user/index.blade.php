<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        img{
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="container-fluid h-100 w-100">
                    <img src="{{URL::asset('/storage/ui-image/home.jpg')}}" alt="image" class="img-thumbnail h-25 w-100">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="">
                    <img src="{{URL::asset('/storage/item-images/1.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</body>
</html>