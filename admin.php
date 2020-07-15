<?php
session_start();

error_reporting(1);
if($_SESSION['user'] != 'Socialight'){
  echo "<script>";
  echo "window.location.href='404';";
  echo "</script>";
}
else{

?>

<!DOCTYPE html>
<html>
<head>

	   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Socialight -Digital Marketing Company</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
      <link rel="stylesheet" href="assets/css/global.css" >
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />



      <link rel="stylesheet" href="assets/css/font-awesome.min.css" >
     
</head>
<body>
  <section class="bg-half bg-primary">

  </section>
<section class="login-half scroll-y">
 <p  class="text-right px-4 py-2"> <a  href="logout" title="Logout"><i class="fa fa-sign-out fa-2x"></i></a></p>
  <div class="container error_page error_page-acces m-auto p-4" >
    <a href="#" class="text-right close-error"><i class="fa fa-close fa-2x "></i></a>
    <div class="col-md-12 eror_content m-auto  text-center" style="margin-top: -50px">
    <h3 ><span style="font-size: 40px;">O</span>OOPS!</h3>
    <img src="assets/img/aceesdenide.png" class="img-fluid px-4">
    <h5  style="line-height: 30px">You Dont Have Access to Insert Data!</h5>
  </div>
  </div>
  <div class="container login-mobile insert p-5">
    <div class="login-content" style="    position: relative;
    top: ;">
     <img src="assets/img/app.png" class="img-fluid phoneimage position-absolute " style="top:0;    transform: scale(1.2);">
      <div class="row m-auto">
        <div class="col-lg-10 pt-5 pb-5 col-md-12 m-auto mobile-dimen" style="border-radius: 20px; ">
          <div class="col-md-12 m-auto text-center">
            <img src="assets/img/insights.png" class="img-fluid" style="max-width: 200px">
          </div>
          <form class="pt-2 mt-4 pb-2 px-3 row"  action="#" method="post" id="insertform" autocomplete="off">
            <div class="col-md-6">
           <div class="form-group">
                  <input type="text" id="clientname" class="form-control" autocomplete="off"  name="clientname" value="" required="">
                   <label class="form-control-placeholder" for="clientname">Client Name</label>
               </div>
             </div>
             <div class="col-md-6">
            <div class="form-group">
                                            <input type="Password" id="loginpwd" autocomplete="off"  name="clientpassword" class="form-control" value="" required="">
                                            <label class="form-control-placeholder" for="loginpwd">Clent Password</label>
                                            <span class="eyevisble">
                                                <i class="fa fa-eye " id="openeye"></i>
                                          <i id="closedeye" class="fa fa-eye-slash  "></i>
                                            </span>
                                       

              </div>
            </div>
               <div class="col-md-12">
            <div class="form-group">
                                            <input type="text" id="clienturl" autocomplete="off"  name="clienturl" class="form-control" value="" required="">
                                            <label class="form-control-placeholder" for="clienturl">Clent Url</label>
                                          
                                       

              </div>
            </div>
             <div class="col-md-12">

            <div class="form-group">
              <button type="submit" class="btn btn-primary loginsubmit" name="loginsubmit">Submit</button>
              <p class="error_message mt-2"></p>
            </div>
          </div>
          </form>
        </div>
      </div>
 
  </div>
</section>








    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

   <script type="text/javascript" src="assets/js/home.js"></script>




	
</body>
</html>
<?php
} 

?>