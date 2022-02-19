

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
  
    .table{
        width:900px;
        background:#fff;
        max-height:470px;
        overflow-y:auto;
        box-shadow: 0px 10px 50px 0px rgba(0,0,0,0.5);
        padding:0;
        box-sizing:border-box;
        text-align:center;
        margin:0 auto 2rem;
    } 

    table{
        width:100%;
        text-align:center;
        border-collapse:collapse;
    }
    table thead th,table tbody td{
        padding:15px !important;
        font-weight:600 !important;
        font-size:14px !important;
    }
    table thead th{
        background:#454ac4;
        color:#fff !important;
        font-size:16px;
        width:100%;
        top:0rem;
        position:sticky !important;
    }
    table tbody td{
     border-bottom:1px solid rgba(0,0,0,0.1) !important;
    }
    table thead th:nth-child(1),table tbody td:nth-child(1){
        width:50px; 
        text-align:center;
    }
table tbody tr:hover,table tbody tr:nth-child(odd){
    background:rgba(0,0,0,0.05);
}

    </style>
  </head>