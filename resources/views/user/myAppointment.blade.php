
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
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

  <!-- Back to top button -->
  <div class="back-to-top"></div>

 @include('menu');

 <h1 class="font-weight-bold mt-3 text-center">My Appointments</h1>
 @if(Session::has('message'))
 <div class="alert alert-danger col-6 text-center m-auto" id="message">
  <button data-dismiss="alert" class="x" role="alert"></button>
 {{Session::get('message')}}
 </div>
@endif
@if(Session::has('message_update'))
 <div class="alert alert-success container text-center m-auto">
   <button class="x" data-dismiss="alert" role="alert"></button>
   {{Session::get('message_update')}}
 </div>
 @endif
 <div class="container d-flex justify-content-center">
     <table class="table-bordered m-2 " >
      <tr class="text-center">
          <th class="p-3">name</th>
          <th class="p-3">email</th>
          <th class="p-3">date</th>
          <th class="p-3">doctor</th>
          <th class="p-3">status</th>
          <th class="p-3">action</th>
      </tr>
      @foreach($data as $data)
      <tr class="">
        <td class="p-3">{{$data->name}}</td>
        <td class="p-3">{{$data->email}}</td>
        <td class="p-3">{{$data->date}}</td>
        <td class="p-3">{{$data->doctor}}</td>
        <td class="p-3">{{$data->status}}</td>
        <td class="p-3">
          <div class="row">
        <div class="col-6">
         <a href="{{url('cancel_appointment_user',$data->id)}}" class="btn btn-danger"
          onclick="return confirm('do you want to cancel this appointment?')">Cancel</a> 
    </div>
    <div class="col-6">
         <a href="{{url('User_Update_appointment',$data->id)}}" class="btn btn-success">Update</a> 
    </div>
    </div>
    </td>
      </tr>
     @endforeach
     </table>
 </div>

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>

