<!DOCTYPE html>
<html><!-- [Head] start -->

<head>
    <?php echo view('admin/shared/view_links'); ?>
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/admin/style1.css">
</head><!-- [Head] end --><!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="tab" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light"><!-- [ Pre-loader ] start --><!-- [ Pre-loader ] End -->
    <div class="auth-main">
        <div class="auth-wrapper v2">
            <div class="auth-sidecontent"><img src="<?php echo ASSETS_PATH; ?>images/admin/authentication/img-auth-sideimg.jpg"
                    alt="images" class="img-fluid img-auth-side"></div>
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <form id="login-form" autocomplete="off">
                            <div class="text-center">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo ASSETS_PATH; ?>images/admin/logo-dark.svg" alt="img">
                                </a>
                                <div class="d-grid my-3">
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?php echo ASSETS_PATH; ?>images/admin/authentication/facebook.svg" alt="img">
                                        <span>Sign In with Facebook</span>
                                    </button>
                                    <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?php echo ASSETS_PATH; ?>images/admin/authentication/twitter.svg" alt="img">
                                        <span>Sign In with Twitter</span></button>
                                    <button type="button"
                                        class="btn mt-2 btn-light-primary bg-light text-muted">
                                        <img src="<?php echo ASSETS_PATH; ?>images/admin/authentication/google.svg" alt="img">
                                        <span>Sign In with Google</span>
                                    </button>
                                </div>
                            </div>
                            <div class="saprator my-3"><span>OR</span></div>
                            <h4 class="text-center f-w-500 mb-3">Login with your Email or Username</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Email Address or Username">
                            </div>
                            <div class="mb-3 position-relative">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <span class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                                    <i class="fa fa-eye-slash" id="togglePasswordIcon"></i>
                                </span>
                            </div>
                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" id="customCheckc1"
                                        checked="">
                                    <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                                </div>
                                <h6 class="text-secondary f-w-400 mb-0">
                                    <a href="javascript:void(0)">Forgot Password?</a>
                                </h6>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo view('admin/shared/view_script'); ?>
    <script src="<?php echo ASSETS_PATH; ?>js/custom.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/admin/login.js"></script>
</body>

</html>