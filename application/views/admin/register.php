<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-3">

    <!-- <form class="user" action="register.php" method="POST"> -->
        <?php echo form_open('admin/register',['class'=>'user', 'id'=>'form','method'=>'POST']) ?>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="fname" placeholder="First Name" name="fname"><span class="error">
                                                <h6></h6>
                                            </span></div>
                                        <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="lname" placeholder="Last Name" name="lname"></div>
                                    </div>
                                    <div class="form-group"><input class="form-control form-control-user" type="email" id="email" name="email" aria-describedby=" emailHelp" placeholder="Email Address"><span class="error">
                                            <h6></h6>
                                        </span></div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="tel" id="phone" placeholder="phone" name="phone" ><span class="error">
                                               
                                            </span></div>
                                        <div class="col-sm-6"><input class="form-control form-control-user" type="date" id="dob" placeholder="date of birth" name="dob"><span class="error">
                                                
                                            </span></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" placeholder="Password" id="pass1" name="pass1"><span class="error">
                                              
                                            </span></div>
                                        <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="pass2" name="pass2" placeholder="Repeat Password"><span class="error">
                                              
                                            </span></div>
                                    </div><button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
                                    <!-- <hr><a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a> -->
                                    <hr>
                                <!-- </form> -->
                                <?php echo form_close() ?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>


