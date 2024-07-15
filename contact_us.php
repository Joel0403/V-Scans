<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="icon" type="image/x-icon" href="./Images/tab_icon.png">
    <!-- bootstrap link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <!-- css link -->
    <!-- fa fa icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fa fa icon -->
</head>
<body>
<?php include('header.php');?>
    <div class="contact-us-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <div class="contact-us-banner-description ">
                        <h2 class="">Feel free to reach out to us</h2>
                        <p>Welcome to VSCAN and Labs, where your health and well-being are our top priorities. 
                            We are here to assist you in every possible way. If you have any questions, concerns, 
                            or if you would like to schedule an appointment using the contact information below</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!---------------------------------------- section 2 -------------------------->
<section class="mt-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group contact-us-form-group">
                    <label for="exampleFormControlInput1">YOUR NAME</label>
                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Name, Surname">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group contact-us-form-group">
                    <label for="exampleFormControlInput1">YOUR EMAIL ADDRESS</label>
                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Email">
                </div>
            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                <div class="form-group contact-us-form-group">
                    <label for="exampleFormControlInput1">I'M INTERESTED IN</label>
                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                <div class="form-group contact-us-form-group">
                    <label for="exampleFormControlInput1">YOUR PHONE NUMBER</label>
                    <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Phone">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                <div class="form-group contact-us-form-group">
                    <label for="exampleFormControlTextarea1">YOUR MESSAGE</label>
                    <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 text-center">
                <div class="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!---------------------------------------- section 2 -------------------------->

<!---------------------------------------- footer -->
<?php include('footer.php');?>



</body>
</html>