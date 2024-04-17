@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    
    <div class="page-header">
    <div class="row">
    <div class="col-sm-12">
    <h3 class="page-title">Welcome Admin!</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
    </ul>
    </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
    <div class="card-body">
    <div class="dash-widget-header">
    <span class="dash-widget-icon text-primary border-primary">
    <i class="fe fe-users"></i>
    </span>
    <div class="dash-count">
    <h3>168</h3>
    </div>
    </div>
    <div class="dash-widget-info">
    <h6 class="text-muted">Members</h6>
    <div class="progress progress-sm">
    <div class="progress-bar bg-primary w-50"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
    <div class="card-body">
    <div class="dash-widget-header">
    <span class="dash-widget-icon text-success">
    <i class="fe fe-credit-card"></i>
    </span>
    <div class="dash-count">
    <h3>487</h3>
    </div>
    </div>
    <div class="dash-widget-info">
    <h6 class="text-muted">Appointments</h6>
    <div class="progress progress-sm">
    <div class="progress-bar bg-success w-50"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
    <div class="card-body">
    <div class="dash-widget-header">
    <span class="dash-widget-icon text-danger border-danger">
    <i class="fe fe-star-o"></i>
    </span>
    <div class="dash-count">
    <h3>485</h3>
    </div>
    </div>
    <div class="dash-widget-info">
    <h6 class="text-muted">Mentoring Points</h6>
    <div class="progress progress-sm">
    <div class="progress-bar bg-danger w-50"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card">
    <div class="card-body">
    <div class="dash-widget-header">
    <span class="dash-widget-icon text-warning border-warning">
    <i class="fe fe-folder"></i>
    </span>
    <div class="dash-count">
    <h3>$62523</h3>
    </div>
    </div>
    <div class="dash-widget-info">
    <h6 class="text-muted">Revenue</h6>
    <div class="progress progress-sm">
    <div class="progress-bar bg-warning w-50"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-lg-6">
    
    <div class="card card-chart">
    <div class="card-header">
    <h4 class="card-title">Revenue</h4>
    </div>
    <div class="card-body">
    <div id="morrisArea"></div>
    </div>
    </div>
    
    </div>
    <div class="col-md-12 col-lg-6">
    
    <div class="card card-chart">
    <div class="card-header">
    <h4 class="card-title">Status</h4>
    </div>
    <div class="card-body">
    <div id="morrisLine"></div>
    </div>
    </div>
    
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 d-flex">
    
    <div class="card card-table flex-fill">
    <div class="card-header">
    <h4 class="card-title">Mentor List</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Mentor Name</th>
    <th>Course</th>
    <th>Earned</th>
    <th>Reviews</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
    <a href="profile.html">James Amen</a>
    </h2>
    </td>
    <td>Maths</td>
    <td>$3200.00</td>
    <td>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star-o text-secondary"></i>
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
    <a href="profile.html">Jessica Fogarty</a>
    </h2>
    </td>
    <td>Business Maths</td>
    <td>$3100.00</td>
    <td>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star-o text-secondary"></i>
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
    <a href="profile.html">Jose Anderson</a>
    </h2>
    </td>
    <td>Algebra</td>
    <td>$4000.00</td>
    <td>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star-o text-secondary"></i>
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
    <a href="profile.html">Sofia Brient</a>
    </h2>
    </td>
    <td>Integrated Sum</td>
    <td>$3200.00</td>
    <td>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star-o text-secondary"></i>
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
    <a href="profile.html">Marvin Campbell</a>
    </h2>
    </td>
    <td>Flow chart</td>
    <td>$3500.00</td>
    <td>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star text-warning"></i>
    <i class="fe fe-star-o text-secondary"></i>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
    </div>
    <div class="col-md-6 d-flex">
    
    <div class="card  card-table flex-fill">
    <div class="card-header">
    <h4 class="card-title">Mentee List</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Mentee Name</th>
    <th>Phone</th>
    <th>Last Visit</th>
    <th class="text-end">Paid</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user.jpg" alt="User Image"></a>
    <a href="profile.html">Jonathan Doe </a>
    </h2>
    </td>
    <td>8286329170</td>
    <td>20 Oct 2019</td>
    <td class="text-end">$100.00</td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user1.jpg" alt="User Image"></a>
    <a href="profile.html">Julie Pennington </a>
    </h2>
    </td>
    <td>2077299974</td>
    <td>22 Oct 2019</td>
    <td class="text-end">$200.00</td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user2.jpg" alt="User Image"></a>
    <a href="profile.html">Tyrone Roberts</a>
    </h2>
    </td>
    <td>2607247769</td>
    <td>21 Oct 2019</td>
    <td class="text-end">$250.00</td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user3.jpg" alt="User Image"></a>
    <a href="profile.html">Allen Davis </a>
    </h2>
    </td>
    <td>5043686874</td>
    <td>21 Sep 2019</td>
    <td class="text-end">$150.00</td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user4.jpg" alt="User Image"></a>
    <a href="profile.html">Patricia Manzi </a>
    </h2>
    </td>
    <td>9548207887</td>
    <td>18 Sep 2019</td>
    <td class="text-end">$350.00</td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    
    <div class="card card-table">
    <div class="card-header">
    <h4 class="card-title">Booking List</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-hover table-center mb-0">
    <thead>
    <tr>
    <th>Mentor Name</th>
    <th>Course</th>
    <th>Mentee Name</th>
    <th>Booking Time</th>
    <th>Status</th>
    <th class="text-end">Amount</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
    <a href="profile.html">James Amen</a>
    </h2>
    </td>
    <td>Maths</td>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user.jpg" alt="User Image"></a>
    <a href="profile.html">Jonathan Doe </a>
    </h2>
    </td>
    <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
    <td>
    <div class="status-toggle">
    <input type="checkbox" id="status_1" class="check" checked>
    <label for="status_1" class="checktoggle">checkbox</label>
    </div>
    </td>
    <td class="text-end">
    $200.00
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
    <a href="profile.html">Jessica Fogarty</a>
    </h2>
    </td>
    <td>Business Maths</td>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user1.jpg" alt="User Image"></a>
    <a href="profile.html">Julie Pennington </a>
    </h2>
    </td>
    <td>5 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
    <td>
    <div class="status-toggle">
    <input type="checkbox" id="status_2" class="check" checked>
    <label for="status_2" class="checktoggle">checkbox</label>
    </div>
    </td>
    <td class="text-end">
    $300.00
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
    <a href="profile.html">Jose Anderson</a>
    </h2>
    </td>
    <td>Algebra</td>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user2.jpg" alt="User Image"></a>
    <a href="profile.html">Tyrone Roberts</a>
    </h2>
    </td>
    <td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
    <td>
    <div class="status-toggle">
    <input type="checkbox" id="status_3" class="check" checked>
    <label for="status_3" class="checktoggle">checkbox</label>
    </div>
    </td>
    <td class="text-end">
    $150.00
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
    <a href="profile.html">Sofia Brient</a>
    </h2>
    </td>
    <td>Integrated Sum</td>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user3.jpg" alt="User Image"></a>
    <a href="profile.html">Allen Davis </a>
    </h2>
    </td>
    <td>7 Nov 2019<span class="text-primary d-block">1.00 PM - 1.20 PM</span></td>
    <td>
    <div class="status-toggle">
    <input type="checkbox" id="status_4" class="check" checked>
    <label for="status_4" class="checktoggle">checkbox</label>
    </div>
    </td>
    <td class="text-end">
    $150.00
    </td>
    </tr>
    <tr>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
    <a href="profile.html">Marvin Campbell</a>
    </h2>
    </td>
    <td>Flow chart</td>
    <td>
    <h2 class="table-avatar">
    <a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="admin/assets/img/user/user4.jpg" alt="User Image"></a>
    <a href="profile.html">Patricia Manzi </a>
    </h2>
    </td>
    <td>15 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
    <td>
    <div class="status-toggle">
    <input type="checkbox" id="status_5" class="check" checked>
    <label for="status_5" class="checktoggle">checkbox</label>
    </div>
    </td>
    <td class="text-end">
    $200.00
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    @endsection