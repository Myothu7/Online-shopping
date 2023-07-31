<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                @if(session('fail'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session('fail') }}
                    </div>
                @endif
                <form action="" method ="post">
                    @csrf
                    <div class="card">
                        <div class="card-title">
                            <h4 class="text-center">Log in to your account</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" placeholder = "Email" class ="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder = "Password" class ="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Login" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</body>
</html>