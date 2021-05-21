<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>
  
</head>
<body style="background-image: url('images/j.jpg'); background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:  #75a3a3">
 <a class="navbar-brand" href="#">
    <img src="images/bank.png" width="30" height="30" class="d-inline-block align-top" alt="">
   <!--  <i class="d-inline-block  fa fa-building fa-fw"></i> --><?php echo 'Wardha Bank'; ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="statements.php">Account Statements</a></li>
      <li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li>
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'sideButton.php'; ?>
    
  </div>
</nav><br><br><br>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/h.jpg" alt="First slide" style="max-height: 280px; padding-right: 25px; padding-left: 25px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/api.png" alt="Second slide" style="max-height: 280px; padding-right: 25px; padding-left: 25px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/23.png" alt="Third slide" style="max-height: 280px; padding-right: 25px; padding-left: 25px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/21.jpg" alt="Second slide" style="max-height: 280px; padding-right: 25px; padding-left: 25px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/6.jpg" alt="Second slide" style="max-height: 280px; padding-right: 25px; padding-left: 25px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          <div class="row w-100" >
  <div class="col" style="padding: 50px;padding-top: 50px">
    <div class="jumbotron shadowBlack" style="padding: 25px;min-height: 241px;max-height: 241px; background-image: url(images/b.jpg);">
  <h4 class="display-5" style="color: #ffffff"><b>Welcome To The Wardha Bank</b></h4>
  <p  class="lead alert alert-warning"><b>Latest Notification:</b>

  <?php 
      $array = $con->query("select * from notice where userId = '$_SESSION[userId]' order by date desc");
      if ($array->num_rows > 0)
      {
        $row = $array->fetch_assoc();
        // {
          echo $row['notice'];
        // }
      }
      else
        echo "<div class='alert alert-info'>Notice box empty</div>";
     ?></p>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>

  
</div>
<div class="col">
    <div class="row" style="padding: 50px;padding-top: 0">
      <div class="col">
        <div class="card shadowBlack" style="background: linear-gradient(to bottom, #ffffff 0%, #669999 100%)">
          <img class="card-img-top" src="images/A.jpg" style="max-height: 155px;min-height: 155px" alt="Card image cap">
          <div class="card-body">
            <a href="accounts.php" class="btn btn-outline-success btn-block" style="color: black"><b>Account Summary</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack " style="background: linear-gradient(to bottom, #ffffff 0%, #669999 100%)">
          <img class="card-img-top" src="images/cash.jpg" alt="Card image cap" style="max-height: 155px;min-height: 155px">
        <div class="card-body">
          <a href="transfer.php" class="btn btn-outline-success btn-block" style="color: black"><b>Transfer Money</b></a>
         </div>
        </div>
      </div>
    </div>
    <div class="row" style="padding: 50px">
      <div class="col">
        <div class="card shadowBlack " style="background: linear-gradient(to bottom, #ffffff 0%, #669999 100%)">
          <img class="card-img-top" src="images/notification.jpg" style="max-height: 155px;min-height: 155px" alt="Card image cap">
          <div class="card-body">
            <a href="notice.php" class="btn btn-outline-primary btn-block" style="color: black"><b>Check Notification</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack " style="background: linear-gradient(to bottom, #ffffff 0%, #669999 100%)">
          <img class="card-img-top" src="images/contact.jfif" alt="Card image cap" style="max-height: 155px;min-height: 155px">
        <div class="card-body">
          <a href="feedback.php" class="btn btn-outline-primary btn-block" style="color: black"><b>Contact Us</b></a>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>