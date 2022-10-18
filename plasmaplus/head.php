<html>

<head>


<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

.header {
  font-family: "Poppins", sans-serif;

  overflow:hidden;
  background-color: #FF9494;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF9494 ;
}


.header a {
  font-family: "Poppins", sans-serif;
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}


.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
}


.header a:hover {
  background-color: #FFF5E4;
  color: black;
}





.header-right {
  float: right;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Plasma Plus </a>
    <div class="header-right">
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
      <a href="/login/index.php"  <?php if($active=='about') echo "class='act'"; ?> >Log Out</a>
    </div>
  </div>

</body>
</html>
