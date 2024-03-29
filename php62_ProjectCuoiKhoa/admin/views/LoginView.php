<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Login</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
     <link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free-6.2.0-web/css/fontawesome.min.css" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- ../assets/vendor/ CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../assets/backend/layout1/css/theme.css" rel="stylesheet" media="all">
  </head>
  <body class="animsition">
    <div class="page-wrapper">
      <div class="page-content--bge5">
        <div class="container">
          <div class="login-wrap">
            <div class="login-content">
              <div class="login-logo">
                <a href="#">
                  <img src="../images/logoshop.png" alt="NhungPP">
                </a>
              </div>
              <?php if(isset($_GET["notify"]) && $_GET["notify"]=="invalid"): ?>
              <div class="alert alert-danger">Đăng nhập không thành công</div>
              <?php endif; ?>
              <div class="login-form">
                <form action="index.php?area=admin&controller=login&action=doLogin" method="post">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="login-checkbox">
                    <label>
                      <input type="checkbox" name="remember">Remember Me
                    </label>
                    <label>
                      <a href="#">Forgotten Password?</a>
                    </label>
                  </div>
                      <!--   <input type="submit" class="btn btn-primary" style="width:50%"><input type="reset" value="Reset" class="btn btn-danger" style="width:cacular(50%)"></div> -->
                      <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                  <div class="social-login-content">
                    <div class="social-button">
                      <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                      <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                    </div>
                  </div>
                </form>
                <div class="register-link">
                  <p>
                    Don't you have account?
                    <a href="./login.html">Sign Up Here</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- ../assets/vendor/ JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>
    <!-- Main JS-->
    <script src="../assets/layout1/js/main.js"></script>
  </body>
</html>
<!-- end document-->