<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<meta name="viewport" content="width=device-width,initial-scale=1.0">


  <!-- <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
  #footer {
    font-family: "Poppins", sans-serif;

  position:relative;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 50px;
  background-color:#F75D58;
  color:white;
  text-align: center;
}
  </style> -->
  <style>
      .floating-btn{
    width:80px;
    height: 80px;
    background-color:#ff2800 ;
    display: flex;
    border-radius: 50%;
    color:aliceblue;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size:40px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, .25);
    position: fixed;
    right: 20px;
    bottom:20px;


    outline: blue;
    border: none;
    cursor: pointer;
    
    
}


        .floating-btn:active{
            background: #800000;

        }
    
    </style>
  
</head>
<body>
<!-- <button class="material-icons floating-btn">chat</button> -->

<button id="myButton46" class="material-icons floating-btn" type="button" >chat</button>
                            <script type="text/javascript">
                               document.getElementById("myButton46").onclick = function () {
                               window.location = "chat/index.php";
                                 };
                            </script>
  <div id="footer" >
  <!-- <b><center>COPYRIGHT © IUT SWE <br>
  PLASMA PLUS
  <br>
  ALL RIGHTS RESERVED.
  </center>
  </div> -->


</body>

</html>
