<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/dcode.css">
<link rel="shortcut icon" href="/assets/favicon.ico">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<meta name="viewport" content="width=device-width,initial-scale=1.0">


</head>

<body>


<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>
<?php include'ticker.php'; ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="resource/slide1-min.jpg" alt="resource/slide1-min.jpg" width="100%" height="500">
      </div>
      <div class="carousel-item">
        <img src="resource/Did you know(2)-min.png" alt="resource/Did you know(2)-min.png" width="100%" height="500">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<br>
        <h1 style="text-align:center;font-size:45px ; font-family: Poppins, sans-serif;">Welcome to Plasma Plus</h1>
        <h1 style="text-align:center;font-size:45px ; font-family: Poppins, sans-serif;">A streamlined,user-friendly,and straightforward web platform for blood donation . </h1>

<br>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                <h4 class="card-header text-white" style="background-color: #F75D58;" >The need for blood</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                <h4 class="card-header text-white" style="background-color: #F75D58;" >Blood Tips</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" >
             


                <h4 class="card-header text-white" style="background-color: #F75D58;" >Who you could Help</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div>
            </div>
</div>

        <h2>Blood Donor Names</h2>

        <div class="row">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-lg-5 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px"> 
            <?php if ($row['donor_gender']=='Male')
            {?> <img class="card-img-top"  src="image\male.png" style="width:100%;height:300px"> <?php } 
            else 
            {?> <img class="card-img-top"  src="image\female.jpg" style="width:100%;height:300px"> <?php } 

            ?>
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                    <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                    <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                    <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                    <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>
</div>
<br>
       
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="resource/info.png" alt="" >
            </div>
        </div>
        

        <hr>

       
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
              <!-- <style type="text/css">
		.btn-circle.btn-xl {
			width: 50px;
			height: 50px;
			padding: 13px 18px;
			border-radius: 60px;
			font-size: 15px;
			text-align: right;
		}
	</style> -->
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color: #F75D58;color:#FFFFFF ">Become a Donor </a>
                <!-- <a class="btn btn-lg btn-secondary btn-block" href="chat/index.php" style=" background-color: #F75D58;color:#FFFFFF ">Chat With Donor </a> -->
            </div>
           
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>