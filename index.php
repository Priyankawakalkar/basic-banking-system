<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>
<style>
  .content{
    margin-top: 30px;
  }
  h2{
    text-align: center;
    font-family: sans-serif;
  }
  h3,h5{
    text-align: center;
  }
  .about{
    margin-top: 30px;
  }
</style>
  <body>
  <!-- navbar --> 
      <nav class="navbar navbar-expand-md navbar-light" style="background:linear-gradient(to right,skyblue,magenta);">
      <a class="navbar-brand" href="index.php">
        <img style='width:120px;' src="images/rupees.jpg">
      SPARKS BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
          </div>
       </nav>
     
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  
                  <h1><br><br>Bank of <br>Sparks Foundation</h1>
                  <h3>Fastest way to send Money Worldwide</h3><br>
                  <a href="#sec1"><button>Get Started</button></a>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="images/bank2.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
      <a name="sec1">
            <div class="row activity text-center" style="padding-top: 60px;">
                  <div class="col-md act">
                    <img src="images/user5.jpg" class="img-fluid" height="55%" width="55%">
                    <br>
                    <a href="viewcustomers.php"><button>View Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/transfer3.jpg" class="img-fluid"height="58%" width="58%">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="images/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
          </a>
      </div>
      <!-- About section -->
<a name="about">
<div class="content">
 
  <h2 style="padding-top: 100px;"><b>ABOUT SPARKS BANK</b><br><br> </h2>
  <div class="about">
  <div class="row"  style="margin-right:0%;">
    <div class="col-lg-4">
        <h3><img src="images/call4.jpg" height="100">
         <b> Phone / Fax</b> </h3>
         <h5>+65-8402-8590 <br>
        (+91) 9975122309 </h5>
    </div>
    <div class="col-lg-4">
        <h3><img src="images/mail3.png" height="100"><b>E-mail</b></h3>
        <h5>info@thesparksfoundation.sg <br>
            support@sparks.in</h5>
    </div>
    <div class="col-lg-4">
        <h3><img src="images/location.png" height="100"> <b>Location</b> </h3>
        <h5>Anuja villa, Dhule-424311<br>Maharashtra(India)
        </h5>
    </div>
 </div>
</div>
</div>
      </a>
      <footer class="text-center mt-5 py-2" style="background:linear-gradient(to left,skyblue,magenta);">
        <p>&copy 2021 The Sparks Foundation. All Rights Reserved.<br> Made by <b>PRIYANKA WAKALKAR</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>