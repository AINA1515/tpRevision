<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/corona-free/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/corona-free/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/corona-free/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/corona-free/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/corona-free/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/corona-free/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <!-- message -->
            <?php if(isset($message)) { ?>
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                    <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                        <div class="ps-lg-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium me-3 buy-now-text">
                                    <?= $message ?>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="/admin"><i class="mdi mdi-home me-3 text-white"></i></a>
                            <button id="bannerClose" class="btn border-0 p-0">
                                <i class="mdi mdi-close text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- END -->
            <div class="row w-100">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-start mb-3">Login</h3>
                            <form method="post" action="/admin/login">
                                <div class="form-group">
                                    <label>Username or email *</label>
                                    <input type="text" class="form-control p_input" name="username" value="<?= $adminCredentials["username"] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" class="form-control p_input" name="password" value="<?= $adminCredentials["password"] ?>">
                                </div>
                                <div class="text-center d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script nonce="<?= $csp_nonce ?>" src="/corona-free/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script nonce="<?= $csp_nonce ?>" src="/corona-free/assets/js/off-canvas.js"></script>
    <script nonce="<?= $csp_nonce ?>" src="/corona-free/assets/js/misc.js"></script>
    <script nonce="<?= $csp_nonce ?>" src="/corona-free/assets/js/settings.js"></script>
    <script nonce="<?= $csp_nonce ?>" src="/corona-free/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>