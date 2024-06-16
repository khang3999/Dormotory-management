<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'TDC-Dormitory'}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-2 px-0">
                <div class="slide-bar container-fluid pt-3">
                    <ul class="nav justify-content-center flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white w-100" href="#" aria-current="page">Logo</a>
                            <div class="text-white">
                                <hr>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-buildings-fill"></i><span class="mx-1">Phòng</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-people-fill"></i><span class="mx-1">Sinh viên</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-postcard-fill"></i><span class="mx-1">Biểu mẫu</span><i class="bi bi-caret-right-fill"></i></a>
                            <ul class="">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-graph-up-arrow"></i><span class="mx-1">Thống kê</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-gear-fill"></i><span class="mx-1">Cài đặt</span></a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-10 px-0">
                <div class="wrapper-content container-fluid py-3 d-flex justify-content-between px-4">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <div class="profile d-flex align-items-center">
                        <span class="mx-2">Admin</span>
                        <a class="logout fs-4"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    {{$slot}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{$script ?? ''}}
</body>

</html>