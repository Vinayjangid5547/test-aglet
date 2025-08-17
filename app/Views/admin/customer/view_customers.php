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
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Customers</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Customers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5 class="mb-0">Customer List</h5>
                            </h5><a href="<?php echo base_url('admin/add-customer'); ?>" class="btn btn-sm btn-primary">+ Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover dataTable" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Add Date</th>
                                            <th>Update Date</th>
                                            <th class="text-end" style="width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($customer_detail)) {
                                            foreach ($customer_detail as $row) { ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"><img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.jpg" alt="user image"
                                                                    class="img-radius wid-40"></div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="mb-0"><?php echo $row->fname . ' ' . $row->lname; ?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td>
                                                        <span class="badge <?php echo $row->status == 1 ? 'text-bg-success' : 'text-bg-danger' ?>">
                                                            <?php echo $row->status == 1 ? 'Active' : 'Inactive' ?>
                                                        </span>
                                                    </td>
                                                    <td><?php echo $row->add_date; ?></td>
                                                    <td><?php echo $row->update_date; ?></td>
                                                    <td class="text-end">
                                                        <a href="javascipt:void(0)" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-eye f-20"></i></a>
                                                        <a href="javascipt:void(0)" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-edit f-20"></i><a>
                                                                <a href="javascipt:void(0)" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-trash f-20"></i></a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } else { ?>
                                            <tr>
                                                <td colspan="10" class="no-record-found text-center"><span> No record found</span></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="dt-layout-row">
                                <div class="dt-layout-cell dt-start ">
                                    <div class="dt-info" aria-live="polite" id="base-style_info" role="status">Showing 1 to 10 of 30
                                        entries</div>
                                </div>
                                <div class="dt-layout-cell dt-end ">
                                    <div class="dt-paging paging_full_numbers">
                                        <ul class="pagination">
                                            <li class="dt-paging-button page-item disabled"><button class="page-link first" role="link"
                                                    type="button" aria-controls="base-style" aria-disabled="true" aria-label="First"
                                                    data-dt-idx="first" tabindex="-1">«</button></li>
                                            <li class="dt-paging-button page-item disabled"><button class="page-link previous" role="link"
                                                    type="button" aria-controls="base-style" aria-disabled="true" aria-label="Previous"
                                                    data-dt-idx="previous" tabindex="-1">‹</button></li>
                                            <li class="dt-paging-button page-item active"><button class="page-link" role="link"
                                                    type="button" aria-controls="base-style" aria-current="page" data-dt-idx="0"
                                                    tabindex="0">1</button></li>
                                            <li class="dt-paging-button page-item"><button class="page-link" role="link" type="button"
                                                    aria-controls="base-style" data-dt-idx="1" tabindex="0">2</button></li>
                                            <li class="dt-paging-button page-item"><button class="page-link" role="link" type="button"
                                                    aria-controls="base-style" data-dt-idx="2" tabindex="0">3</button></li>
                                            <li class="dt-paging-button page-item"><button class="page-link next" role="link"
                                                    type="button" aria-controls="base-style" aria-label="Next" data-dt-idx="next"
                                                    tabindex="0">›</button></li>
                                            <li class="dt-paging-button page-item"><button class="page-link last" role="link"
                                                    type="button" aria-controls="base-style" aria-label="Last" data-dt-idx="last"
                                                    tabindex="0">»</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ Main Content ] end -->
        </div>


        <!-- [ Main Content ] start -->

        <!-- [ Main Content ] end -->
        <?php echo view('admin/shared/view_footer'); ?>

        <?php echo view('admin/shared/view_script'); ?>

</body>

</html>