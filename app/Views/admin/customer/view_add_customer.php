<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admin/shared/view_links'); ?>
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <?php echo view('admin/shared/view_sidebar'); ?>

    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <?php echo view('admin/shared/view_header'); ?>
    <!-- [ Header ] end -->

    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/customers'); ?>">Customers</a></li>
                                <li class="breadcrumb-item" aria-current="page">Add Customer</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Add Customers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>New Customer Form</h5>
                            </h5><a href="<?php echo base_url('admin/customers'); ?>" class="btn btn-sm btn-primary"><- All Customers</a>
                        </div>
                        <form id="add-customer-form" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="alert" style="display: none;">
                                    <div class="d-flex align-items-center"><i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                                        <div class="flex-grow-1 ms-3 alert-msg"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="fname" class="form-label">First Name <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter First Name">
                                    </div>
                                    <div class="col-6">
                                        <label for="lname" class="form-label">Last Name <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="number" class="form-label">Number <span style="color: red;">*</span></label>
                                        <input class="form-control" type="text" id="number" name="number" placeholder="+91 99999-99999">
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="password" class="form-label">Password <span style="color: red;">*</span></label>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter Passowrd">
                                    </div>
                                    <div class="col-6">
                                        <label for="confirm_pass" class="form-label">Confirm Password <span style="color: red;">*</span></label>
                                        <input class="form-control" type="password" id="confirm_pass" name="confirm_pass" placeholder="Enter Confirm Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="demo-multi-input-file" class="form-label">Profile Photo</label>
                                        <input class="form-control" type="file" id="demo-multi-input-file" name="profile"> <small>Try selecting
                                            one file when browsing for files.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary me-2 save-btn">Submit</button>
                                <button type="reset" class="btn btn-light">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div><!-- [ Main Content ] end -->
    </div>

    <?php echo view('admin/shared/view_footer'); ?>
    <?php echo view('admin/shared/view_script'); ?>
    <script src="<?php echo ASSETS_PATH . 'js/admin/customer.js'; ?>"></script>

</body>

</html>