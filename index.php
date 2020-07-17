<!DOCTYPE html>
<html>
<head>

	   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Socialight -Digital Marketing Company</title>
	<link rel="manifest" href="manifest.webmanifest" />

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
      <link rel="stylesheet" href="assets/css/global.css" >
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />



      <link rel="stylesheet" href="assets/css/font-awesome.min.css" >

	  <script>
		if ('serviceWorker' in navigator) {
			window.addEventListener('load', function() {
				navigator.serviceWorker.register('sw.js').then(function(reg) {
					console.log("App Registered");
				}, function(err) {
					console.log("error registering app");
				});
			});
		} else {
			console.log("service worker not supported");
		}
 	</script>
     
</head>
<body>
  <section class="bg-half">

  </section>
<section class="login-half scroll-y">
  <div class="container error_page m-auto p-4" >
    <a href="#" class="text-right close-error"><i class="fa fa-close fa-2x text-light"></i></a>
    <div class="col-md-12 eror_content m-auto  text-center">
    <h3 class="text-light"><span style="font-size: 40px;">O</span>OOPS!</h3>
    <h5 class="text-light " style="line-height: 30px">Looks like something went wrong.Please Check Your Details.</h5>
    <img src="assets/img/bulb.png" class="img-fluid  w-75 ">
  </div>
  </div>
  <div class="container login-mobile p-5">
    <div class="login-content " style="    position: relative;
    top: ;">
     <img src="assets/img/app.png" class="img-fluid phoneimage position-absolute " style="top:0;    transform: scale(1.2);">
      <div class="row m-auto">
        <div class="col-lg-7 pt-5 pb-5 col-md-12 m-auto mobile-dimen" style="border-radius: 20px; ">
          <div class="col-md-12 m-auto text-center">
            <img src="assets/img/insights.png" class="img-fluid w-75">
          </div>
          <form class="pt-4 mt-4 pb-4" action="#" method="post" id="loginform" autocomplete="off">
            <div class="col-md-12">
           <div class="form-group">
                                    <input type="text" id="uname" class="form-control" autocomplete="off"  name="uname" value="" required="">
                                    <label class="form-control-placeholder" for="uname">User Name</label>
               </div>
             </div>
             <div class="col-md-12">
            <div class="form-group">
                                            <input type="Password" id="loginpwd" autocomplete="off"  name="pwd" class="form-control" value="" required="">
                                            <label class="form-control-placeholder" for="loginpwd">Password</label>
                                            <span class="eyevisble">
                                                <i class="fa fa-eye " id="openeye"></i>
                                          <i id="closedeye" class="fa fa-eye-slash  "></i>
                                            </span>
                                       

              </div>
            </div>
             <div class="col-md-12">

            <div class="form-group">
              <button type="submit" class="btn btn-warning loginsubmit" name="loginsubmit">Submit</button>
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