@include('admin.style')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @include('admin.logo');
      @include('admin.navigation')
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
                    Add Doctor
                    <div class="card-body">
                     
                        <form action="{{route('upload_doctors')}}" method="post" enctype="multipart/form-data">
                         @csrf
                         @if(Session::has('doctor_uploaded'))
                         <div class="alert alert-success"  >
                           <button type="button"class="x" data-dismiss="alert" role="alert" ></button>
                           {{Session::get('doctor_uploaded')}}
                           @endif
                         </div>
                         <div class="form-group">
                             <label for="title">Doctor Name</label>
                            <input type="text" name="name" class="form-control " placeholder="Enter Doctor's name"
                             value="{{ old('name') }}"
>
                            <span style=color:red;>
                              @error('name')
                              {{$message}}
                              @enderror
                            </span>
                         </div>
                         <div class="form-group">
                             <label for="title">Doctor phone</label>
                            <input type="number" name="phone" class="form-control  " placeholder="Enter Doctor's phone"
                            value="{{ old('phone') }}">
                            <span style=color:red;>
                              @error('phone')
                              {{$message}}
                              @enderror
                            </span>
                         </div>
                         <div class="col-auto my-1">
                             <label for="room" class=" mr-4">Doctor's room</label>
                             <select name="room" id="room" class="custom-select mr-4" >
                                 <option selected>choose...</option>
                                 <option value="One">One</option>
                                 <option value="Two">Two</option>
                                 <option value="Three">Three</option>
                                 <option value="Four">Four</option>
                             </select>
                         </div>

                         <div class="col-auto my-1">
                             <label for="specialty" class=" mr-4">Specialty</label>
                             <select name="specialty" id="specialty" class="custom-select  mr-4">
                                 <option selected>choose...</option>
                                 <option value="skin">skin</option>
                                 <option value="heart">heart</option>
                                 <option value="eye">eye</option>
                                 <option value="nose">nose</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="title">Doctor Image</label>
                            <input type="file" name="image" class="form-control  "value="{{ old('image') }}" >
                            <span style=color:red;>
                              @error('image')
                              {{$message}}
                              @enderror
                            </span>
                         </div>
                         <button type="submit" class="btn btn-primary ml-2 my-4">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="row col-12 mx-auto">
            <h1 class="text-center p-3">Doctors</h1>
                        <div class="table">
                        <table class=" table-bordered ">
                        <thead>
                          <tr class="" >
                        
                          <th class="">Doctor Name</th>
                          <th class="">Phone No.</th>
                          <th class="">Specialty</th>
                          <th class="">Room</th>
                          <th class="">Image</th>
                          <th class="">Action</th>
                          @foreach($data as $data)
                         
                          </tr>
                          </thead>
                          <tbody>
                          <tr class="">
                             <td class="">{{$data->name}}</td>
                             <td class="">{{$data->phone}}</td>
                             <td class="">{{$data->specialty}}</td>
                             <td class="">{{$data->room}}</td>
                             <td>
                             <img  style="" src="doctorImage/{{$data->image}}" alt="doctor-image" 
                             class="">
                            </td>
                             <td class="text-center">
                               <a href="{{url('delete_doctor',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('do you want to cancel this appointment?')">Delete</a>
                               <a href="{{url('update_doctor',$data->id)}}" class="btn btn-primary" >Update</a>
                          </td>
                          </tr>
                          </tbody>    
                          @endforeach
                        </table>
                        </div>
                        </div>
        </div>
    </div>
</div>

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