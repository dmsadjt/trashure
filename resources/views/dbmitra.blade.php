<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<style>
    #navv {
   background-color: rgb(7, 207, 7);
   color: whitesmoke;
   font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
   font-size: 18px;
   padding-left: 200px;
   padding-right: 200px;
   }

</style>
<body>
    <nav id ="navv" class="navbar navbar-expand-sm  navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">TrashSure</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Peta</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse justify-content-end" id="navbarlog">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"><span class ="glyphicon glyphicon-user"></span>Profile </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
          </div>

      </nav>
<br>
      <div class="container">
        <div id= "statistik" class="d-flex p-3 bg-secondary text-white">
           <h2>Statistik Sesuatu</h2>
        </div>
        <div id= "statistik" class="d-flex p-3 bg-secondary text-white">
            <p>Penjelasan statistik sesuatu</p>
          <i class='fas fa-user-alt' style='font-size:36px'></i>
        </div>
        <br>
  <div class="row">
    <div class="col-sm-6">
        <div class="d-flex  pt-4 pb-3 justify-content-center bg-success mb-3">
            <img src="{{URL::asset('/image/truck.png')}}" alt="profile Pic" height="125" width="125">
            <div class="d-flex align-items-center " style="height:125px" ><h1>&nbsp;&nbsp;&nbsp;Trash Pickups</h1>
            </div>
</div>
</div>

    <div class="col-sm-6">
        <div class="d-flex pt-3 pb-4 justify-content-center bg-success mb-3">
        <img src="{{URL::asset('/image/map.png')}}" alt="profile Pic" height="125" width="125">
        <div class="d-flex align-items-center " style="height:125px" ><h1>&nbsp;&nbsp;&nbsp;Map</h1>
        </div>

  </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
    <h2> Hot News </h2>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="d-flex pt-2 pb-2 justify-content-center bg-success mb-3">
            <img src="{{URL::asset('/image/sampah1.png')}}" >

</div>
</div>
</div>
</body>
</html>
