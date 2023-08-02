<!-- This page - User logins to access course  -->

<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'; ?> 

    <!-- login form-->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Welcome</h6>
                        <h1 class="display-4">Login</h1>
                    </div>
                    <div class="contact-form">
                        <form action=""  method="POST">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Email"  name="log_email" value ="" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Password" name="log_password" required="required">
                                </div>
                            </div>
                      
                        
                        
                         
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="login_button">Login </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- login form  End -->

    
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