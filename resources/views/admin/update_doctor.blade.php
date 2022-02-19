

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Admin</title>
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
            <form action="{{url('edit_doctor',$data->id)}}" enctype="multipart/form-data" method="post"> 
                @csrf
                @if(Session::has('message'))
                <div class="alert alert-success ">
                  <button  type="button" class="x" data-dismiss="alert"></button>
                  {{Session::get('message')}}
                </div>
                @endif
                <div class="form-row">
                    <div class="col-6 form-group">
                        <label for="name">Doctor's Name</label>
                        <input type="text" name="name" class="form-control" value="{{$data->name}}">
                        <span style=color:red;>
                        @error('name')
                        {{$message}}
                        @enderror
                        </span>
                    </div>
                    <div class="col-6 form-group">
                        <label for="phone">Doctor's Phone_no</label>
                        <input type="number" name="phone" class="form-control focus" value="{{$data->phone}}">
                        <span style=color:red;>
                        @error('phone')
                        {{$message}}
                        @enderror
                        </span>
                    </div>
                </div>
             </div>
             <div class="container">
             <div class="form-row">
                 <div class="col-6 form-group">
                     <label for="room">Doctor's Room</label>
                     <select name="room" id="room" class="form-control">
                         <option value="{{$data->room}}">{{$data->room}}</option>
                         <option value="One">One</option>
                         <option value="Two">Two</option>
                         <option value="Three">Three</option>
                         <option value="Four">Four</option>
                     </select>
                 </div>
                 <div class="col-6 form-group">
                     <label for="room">Doctor's specialty</label>
                     <select name="specialty" id="specialty" class="form-control">
                         <option value="{{$data->specialty}}">{{$data->specialty}}</option>
                         <option value="skin">skin</option>
                         <option value="heart">heart</option>
                         <option value="eye">eye</option>
                         <option value="nose">nose</option>
                     </select>
                 </div>
                 <div class="col-6 form-group form-inline">
                     <label for="room">Doctor's Current Image:</label>
                     <img src="./doctorImage/{{$data->image}}" alt="doctor's image" width=200rem>
                 </div> 
                 <div class=" col-6 form-row my-3 form-inline">
                     <label for="rooms">Upload new Image:</label>
                     <input type="file" name="image" class="form-control text-light">
                     <span style=color:red;>
                     @error('image')
                     {{$message}}
                     @enderror
                     </span>
                     </div> 
             </div>
             <div class="row">
                     <input type="submit" name="image" class="btn btn-primary w-100 py-3" value="Update">
             </div>
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