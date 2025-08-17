<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('shared/admin/view_links'); ?>
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <?php echo view('shared/admin/view_sidebar'); ?>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <?php echo view('shared/admin/view_header'); ?>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Orders</h1>
                        <p>Manage customer orders and fulfillment</p>
                    </div>
                    <div class="page-actions">
                        <button class="btn btn-outline-primary me-2">
                            <i class="fas fa-download me-1"></i> Export
                        </button>
                        <a href="add-order.html" class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i> Create Order
                        </a>
                    </div>
                </div>

                <!-- Order Stats -->
                <div class="stats-grid mb-4">
                    <div class="stat-card">
                        <div class="stat-header">
                            <h3>Total Orders</h3>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-content">
                            <h2>1,205</h2>
                            <p><i class="fas fa-arrow-up text-success me-1"></i> 8% this month</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <h3>Pending Orders</h3>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-content">
                            <h2>45</h2>
                            <p><i class="fas fa-arrow-down text-success me-1"></i> 12% decrease</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <h3>Completed Orders</h3>
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-content">
                            <h2>1,089</h2>
                            <p><i class="fas fa-arrow-up text-success me-1"></i> 90% completion rate</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-header">
                            <h3>Revenue</h3>
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-content">
                            <h2>$24,589</h2>
                            <p><i class="fas fa-arrow-up text-success me-1"></i> 15% increase</p>
                        </div>
                    </div>
                </div>

                <!-- Filters -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <select class="form-control">
                                    <option>All Status</option>
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Shipped</option>
                                    <option>Delivered</option>
                                    <option>Cancelled</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control">
                                    <option>All Payment</option>
                                    <option>Paid</option>
                                    <option>Pending</option>
                                    <option>Failed</option>
                                    <option>Refunded</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="date" class="form-control" placeholder="From Date">
                            </div>
                            <div class="col-md-2">
                                <input type="date" class="form-control" placeholder="To Date">
                            </div>
                            <div class="col-md-2">
                                <select class="form-control">
                                    <option>All Customers</option>
                                    <option>VIP Customers</option>
                                    <option>Regular Customers</option>
                                    <option>New Customers</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-primary w-100">
                                    <i class="fas fa-filter me-1"></i> Apply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Orders Table -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Order List</h3>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-sort me-1"></i> Sort
                            </button>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-columns me-1"></i> Columns
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input">
                                        </th>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Date</th>
                                        <th>Items</th>
                                        <th>Total</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <strong>#ORD-0045</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Customer" class="avatar me-2" style="width: 32px; height: 32px;">
                                                <div>
                                                    <h6 class="mb-0">John Doe</h6>
                                                    <small class="text-muted">john.doe@email.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>Jun 1, 2025</div>
                                                <small class="text-muted">10:30 AM</small>
                                            </div>
                                        </td>
                                        <td>3 items</td>
                                        <td>$245.99</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-outline-primary" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="Print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <strong>#ORD-0044</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Customer" class="avatar me-2" style="width: 32px; height: 32px;">
                                                <div>
                                                    <h6 class="mb-0">Jane Smith</h6>
                                                    <small class="text-muted">jane.smith@email.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>May 31, 2025</div>
                                                <small class="text-muted">2:15 PM</small>
                                            </div>
                                        </td>
                                        <td>2 items</td>
                                        <td>$189.50</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td><span class="badge badge-info">Shipped</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-outline-primary" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="Print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <strong>#ORD-0043</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Customer" class="avatar me-2" style="width: 32px; height: 32px;">
                                                <div>
                                                    <h6 class="mb-0">Robert Johnson</h6>
                                                    <small class="text-muted">robert.johnson@email.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>May 30, 2025</div>
                                                <small class="text-muted">9:45 AM</small>
                                            </div>
                                        </td>
                                        <td>5 items</td>
                                        <td>$312.75</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-outline-primary" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="Print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <strong>#ORD-0042</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Customer" class="avatar me-2" style="width: 32px; height: 32px;">
                                                <div>
                                                    <h6 class="mb-0">Emily Davis</h6>
                                                    <small class="text-muted">emily.davis@email.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>May 30, 2025</div>
                                                <small class="text-muted">11:20 AM</small>
                                            </div>
                                        </td>
                                        <td>1 item</td>
                                        <td>$89.99</td>
                                        <td><span class="badge badge-danger">Failed</span></td>
                                        <td><span class="badge badge-danger">Cancelled</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-outline-primary" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="Print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <strong>#ORD-0041</strong>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="<?php echo ASSETS_PATH; ?>images/admin/avatar-1.png" alt="Customer" class="avatar me-2" style="width: 32px; height: 32px;">
                                                <div>
                                                    <h6 class="mb-0">Michael Wilson</h6>
                                                    <small class="text-muted">michael.wilson@email.com</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>May 29, 2025</div>
                                                <small class="text-muted">3:30 PM</small>
                                            </div>
                                        </td>
                                        <td>4 items</td>
                                        <td>$156.25</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-outline-primary" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-info" title="Print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="pagination">
                            <button class="pagination-btn"><i class="fas fa-chevron-left"></i></button>
                            <button class="pagination-btn active">1</button>
                            <button class="pagination-btn">2</button>
                            <button class="pagination-btn">3</button>
                            <span class="pagination-ellipsis">...</span>
                            <button class="pagination-btn">12</button>
                            <button class="pagination-btn"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php echo view('shared/admin/view_footer'); ?>
</body>

</html>