

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
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
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
      .x{
  position: absolute;
  width:23px;
  height:2px;
  right:9px;
  left:;
  opacity: 0.8;
  cursor:pointer;

    }
    .x::before{
      position: absolute;
      content: ' ';
      height:20px;
      width: 3px;
      right:6px;
     
      transform: rotate(45deg);
      background-color: red;

    }
    .x::after{
      position: absolute;
      content: ' ';
      height:20px;
      width: 3px;
      right:6px;
      color:red;
      background-color: red;
      transform: rotate(-45deg);

    }
      input{
        color:black !important;
        align:inline-block;
      } 
     .label{
         display:block !important;
     }
     input:focus {
    color: white !important;
}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
       @include('admin.navigation');
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
     @include('admin.navbody');
        <!-- partial -->
        <h1>App</h1>
        <div class="main-panel">
          <div class="content-wrapper">
        <h1 style="text-align:center; color:white" 
              class="mb-3  font-weight-bold "> Update Doctor</h1>
            <div class="container">
            <form action="{{url('sendemail',$data->id)}}" enctype="multipart/form-data" method="post"> 
                @csrf
            <div class="form-group">
                <label for="" class="label"> greeting</label>
                <input type="text" name="greeting" class="form-control ">
            </div>
            <div class="form-group">
            <label for="" class="label"> body</label>
                <input type="text" name="body" class="form-control ">
            </div>
            <div class="form-group">
            <label for="" class="label">actiontext</label>
                <input type="text" name="actiontext" class="form-control ">
            </div>
            <div class="form-group">
            <label for="" class="label">actionurl</label>
                <input type="text" name="actionurl" class="form-control ">
            </div>
            <div class="form-group">
            <label for="" class="label">endpart</label>
                <input type="text" name="endpart" class="form-control ">
            </div>
            <div class="form-group">
                <input type="submit" name="greeting" class=" btn btn-success  ">
            </div>
            </form>      
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