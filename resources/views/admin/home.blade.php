
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css"> <!-- not known -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css"><!-- not known -->
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!--side bar 6 -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
         
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"></a>
        </div>
          <!-- top nav side-bar  4 -->
     @include('admin.navigation');
      </nav>
      <!-- top nav bar 3 -->
      <div class="container page-body-wrapper">
     
       @include('admin.navbar');
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <p class="text-success ml-2 mb-0 font-weight-medium">+{{$count}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Appointment</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <p class="text-success ml-2 mb-0 font-weight-medium">+{{$count1}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Users</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <p class="text-success ml-2 mb-0 font-weight-medium">+{{$count2}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Doctors</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <p class="text-success ml-2 mb-0 font-weight-medium">+{{$count3}}</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">News</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
            <div class="col-12">
              <div class="card table-row">
                <div class="card-body">
                  <div class="card-title"> Appointment List</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="text-center">
                          <th class=" col-md-2 text-success font-weight-bold">Client</th>
                          <th class=" col-md-2 text-success font-weight-bold">Client's Email</th>
                          <th class=" col-md-1 text-success font-weight-bold">doctor</th>
                          <th class=" col-md-1 text-success font-weight-bold">Reason</th>
                          <th class=" col-md-2 text-success font-weight-bold">Date</th>
                          <th class=" col-md-2 text-success font-weight-bold">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach($data1 as $data1)
                        <tr class="text-light">
                          <td class="text-center">{{$data1->name}}</td>
                          <td class="text-center">{{$data1->email}}</td>
                          <td class="text-center">{{$data1->doctor}}</td>
                          <td class="text-center">{{$data1->message}}</td>
                          <td class="text-center">{{$data1->date}}</td>
                          <td class="text-center">{{$data1->status}}</td>
                        </tr>
                        @endforeach
                        </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer');
  </body>
</html>