

<!DOCTYPE html>
<html lang="en">
  <head>
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
         class="mb-3  text-uppercase font-weight-bold ">
         Appointment List</h1>
         @if(Session::has('message'))
        <div class=" alert alert-success "  >
          <button class="x" data-dismiss="alert"></button>
          {{Session::get('message')}}
          </div>
        @endif
        <div class="d-flex justify-content-center">
        <table class=" table table-striped  table-borderless w-75 border-light ">
        <tr class="text-primary">
        <thead class="text-center thead-light ">
          <th class="p-3  text-dark font-weight-bold">Client</th>
          <th class="p-3  text-dark font-weight-bold">Client's Email</th>
          <th class="p-3  text-dark font-weight-bold">doctor</th>
          <th class="p-3  text-dark font-weight-bold">Reason</th>
          <th class="p-3  text-dark font-weight-bold">Date</th>
          <th class="p-3  text-dark font-weight-bold">Status</th>
          <th class="w-25 text-dark font-weight-bold" >Actions</th>
          </thead>
        </tr>
        
        @foreach($data as $data)
        <tr class="text-light "> 
          <td class="text-center" style="width: 16.66%" >{{$data->name}}</td>
          <td class="text-center" style="width: 16.66%">{{$data->email}}</td>
          <td class="text-center" style="width: 16.66%">{{$data->doctor}}</td>
          <td class="text-center" style="width: 16.66%">{{$data->message}}</td>
          <td class="text-center" style="width: 16.66%">{{$data->date}}</td>
          <td class="text-center" style="width: 16.66%">{{$data->status}}</td>
          <td class="text-center w-auto">
          <div class="d-flex justify-content-center">
          <div class="text-center d-flex justify-content-end w-25 mx-2">
            <a class="btn btn-danger" onclick="return confirm('do you want to cancel this appointment?')" 
               href="{{url('cancel_appoint',$data->id)}}"> Cancel</a>
               </div>
               <div class="text-center d-flex justify-contents-start w-25 mx-3">
            <a class=" btn btn-success text-center" href="{{url('approve_appoint',$data->id)}}">Approved</a>
           </div>
           <div class="text-center d-flex justify-contents-center w-25 mx-3">
            <a class=" btn btn-primary text-center" href="{{url('emailNote',$data->id)}}">send mail</a>
           </div>
           </div>
          </td>
        </tr>
       @endforeach
       </div>
        </table> 
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