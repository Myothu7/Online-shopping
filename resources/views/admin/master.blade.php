<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online shopping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <style>
        body{
            height: 100%;
            /* background-color: rebeccapurple; */
        }
        .h{
            height: 630px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row g-0">
            <nav class="col-2 bg-light pe-3 h">
                <h1 class="h4 py-3 text-center text-primary">
                    <i class="fas fa-ghost me-2"></i>
                    <span class="d-none d-lg-inline">
                        Admin Panel
                    </span>
                </h1>
                <div class="list-group text-center text-lg-start mt-1">
                    <span class="list-group-item disabled d-none d-lg-block">
                    <small>CONTROLS</small>
                    </span>
                    <a href="{{url('/items')}}" class="list-group-item list-group-item-action">
                        <i class="far fa-calendar-alt"></i>
                        <span class="d-none d-lg-inline">Item</span>
                    </a>
                    <a href="{{url('/categories')}}" class="list-group-item list-group-item-action">
                        <i class="fas fa-edit"></i>
                        <span class="d-none d-lg-inline">Category</span>
                    </a>
                </div>
                    
            </nav>
            <main class="col-10 bg-secondary">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="flex-fill"></div>
                    <div class="navbar nav dropdown">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="dropdown-item">User Profile</a>
                                </li>
                                <li>
                                    <a href="/" class="dropdown-item">Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fas fa-home me-2"></i>Home Page</a>
                        </li>
                    </div>
                </nav>
                @yield('content')
            </main>
        </div>
    </div>
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>