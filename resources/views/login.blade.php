<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/asset/template/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/asset/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="/asset/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/asset/template/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/asset/template/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/asset/template/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/asset/template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/asset/template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <h2>Kaseer</h2>
                            </div>

                            <form action="{{route('loginproses')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="email" name="email">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password">
                                </div>

                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Sign
                                        In</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/asset/template/vendors/js/vendor.bundle.base.js"></script>

    <!-- Plugin j/asset/template/this page -->
    <script src="/asset/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plug/asset/template/for this page -->

    <script src="/asset/template/js/off-canvas.js"></script>
    <script src="/asset/template/js/hoverable-collapse.js"></script>
    <script src="/asset/template/js/template.js"></script>
    <script src="/asset/template/js/settings.js"></script>
    <script src="/asset/template/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>