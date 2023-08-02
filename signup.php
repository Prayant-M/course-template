<!-- This page - We capture the users information   -->

<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; 

session_start();

if(isset($_POST['pay'])){

    $u_FirstName = strip_tags($_POST['FirstName']);
    $u_FirstName = str_replace(' ','',$u_FirstName);
    $_SESSION['FirstName'] = $u_FirstName;

    $u_LastName = strip_tags($_POST['LastName']);
    $u_LastName = str_replace(' ','',$u_LastName);
    $_SESSION['LastName'] = $u_LastName;

    $u_email = strip_tags($_POST['email']);
    $u_email = str_replace(' ','',$u_email);
    $_SESSION['email'] = $u_email;

    $u_pwd = strip_tags($_POST['pwd']);
    $u_pwd = str_replace(' ','',$u_pwd);
    $_SESSION['pwd'] = $u_pwd;

    header('Location: paymentgateway.php');
}

?> 




    <!-- Sign up form -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Invest in your Financial Future</h6>
                        <h1 class="display-4">Register</h1>
                    </div>
                    <div class="contact-form">
                        <form action="signup.php"  method="POST">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="First Name"  name="FirstName" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Last name" name="LastName" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Email" name="Email" required="required">
                            </div>

                            <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Create password" name="Pwd" required="required">
                                </div>
                        
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="pay">PAY </button>
                            </div>
                            <BR>
                             <img class="" src="img/payment banner.png" style="">
                             <BR>
                           


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Sign up form -->




    <?php require 'footer.php'; ?> 

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>