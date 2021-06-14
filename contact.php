<!Doctype html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
    <style>
footer{
    color:black;
    letter-spacing: 0.5px;
}
footer p{
    margin: 0;
    font-size: 15px;
}
    </style>
    </head>
    <body>
<?php
  include 'navbar.php';
?>
<h2 class="text-center pt-4">Contact Us</h2>
<div class="container">
   <form id="contact-form" method="post" role="form">
            <div class="controls">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="form_name">Firstname *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname " required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="form_lastname">Lastname *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname " required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>
       <div class="col-md-2"></div> 
    </div>
    </div>
</form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'contact_data.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>



        </div> <!-- /.container-->
        <footer class="text-center mt-5 py-2" style="background:linear-gradient(to left,skyblue,magenta);">
        <p>&copy 2021 The Sparks Foundation. All Rights Reserved.<br> Made by <b>PRIYANKA WAKALKAR</b></p>
      </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </body>
</html>
