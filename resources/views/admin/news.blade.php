

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Admin</title>
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    .error{
      
        visibility:hidden;
      
    }
 
    input,textarea{
      background-color:black !important;
      color:white !important;
      
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
    .close{
display:none;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @include('admin.logo');
      @include('admin.navigation');
    </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
<div class="container" style="margin-top:100px" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Add News
                    <div class="card-body">
                      
                        <form action="{{route('add_news')}}" method="post" enctype="multipart/form-data">
                         @csrf
                         @if(Session::has('News_uploaded'))
                         <div class="alert alert-success " id="close" role="alert">
                         <div class="x" onclick="myfunction()"></div>
                           {{Session::get('News_uploaded')}}
                           @endif
                         </div>
                         </div>
                         @if($errors->any())
                     <div class="alert alert-warning"  id="close">
                     <div class="x" onclick="myfunction()"></div>
                       <ul>
                         @foreach($errors->all() as $errors)
                         <li>{{$errors}}</li>
                         @endforeach
                         @endif
                      </ul> 
                      </div>  
                         <div class="form-group">
                             <label for="title">News head</label>
                            <input type="text" Name="head" class="form-control  " placeholder="Enter news's head"
                             value="{{ old('head') }}" >
                         </div>

                         <div class="form-group">
                             <label for="title">News details</label>
                            <textarea type="text" name="details" class="form-control " placeholder="Enter news's details" 
                           >{{ old('details') }}</textarea>
                         
                         </div>
                         <div class="form-group">
                             <label for="title">News editor</label>
                            <input type="text" name="editor" class="form-control " placeholder="Enter news's editor"
                             value="{{ old('editor') }}">
                         </div>
                   
                         <div class="form-group">
                             <label for="title">news Image</label>
                            <input type="file" name="photo" class="form-control  " >
                         </div>
                         <div class="form-group">
                             <label for="title">Editor_Image</label>
                            <input type="file" name="editor_photo" class="form-control  " >
                         </div>
                         <button type="submit" class="btn btn-primary ml-2 my-4">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
function myfunction(){
  var element=document.getElementById('close');
  element.classList.add('close');
}

</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" 
     integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
  </div>
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>