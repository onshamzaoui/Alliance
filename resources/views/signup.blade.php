<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="../lms/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="../lms/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Alliance </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="../lms/js/html5shiv.min.js"></script>
	<script src="../lms/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../lms/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="../lms/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="../lms/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../lms/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../lms/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(../lms/images/background/bg2.jpg);">
			<a href="index.html"><img src="../lms/images/logo-white-2.png" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="/login">Click here</a></p>
				</div>	
				<form class="contact-bx" method="POST" action="{{ route('registerPost') }}">
                    @csrf <!-- {{ csrf_field() }} -->					
                    <div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your First Name </label>
									<input id="first_name" name="first_name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Last Name </label>
									<input id="last_name" name="last_name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input id="email" name="email" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Company</label>
									<input id="company" name="company" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input id="password" name="password" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Confirm Password</label>
									<input id="confirmpassword" name="confirmpassword" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
						{{-- <div class="col-lg-12">
							<h6>Sign Up with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
							</div>
						</div> --}}
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="../lms/js/jquery.min.js"></script>
<script src="../lms/vendors/bootstrap/js/popper.min.js"></script>
<script src="../lms/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../lms/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../lms/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="../lms/vendors/magnific-popup/magnific-popup.js"></script>
<script src="../lms/vendors/counter/waypoints-min.js"></script>
<script src="../lms/vendors/counter/counterup.min.js"></script>
<script src="../lms/vendors/imagesloaded/imagesloaded.js"></script>
<script src="../lms/vendors/masonry/masonry.js"></script>
<script src="../lms/vendors/masonry/filter.js"></script>
<script src="../lms/vendors/owl-carousel/owl.carousel.js"></script>
<script src="../lms/js/functions.js"></script>
<script src="../lms/js/contact.js"></script>
<script src='../lms/vendors/switcher/switcher.js'></script>
</body>

</html>



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Alliance</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <style>
        .fullpage {
            height: 100vh;
        }

        .studentimage {
            background: url("{{ asset('assets/./assets/img/business.jpg') }}");
            background-size: cover !important;
            background-repeat: no-repeat;
            box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
            -webkit-box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
            -moz-box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
        }

    </style>
</head>

<body>
    <div class="row m-0 p-0">
        <div class="col-md-6 fullpage">
            <div class="d-flex flex-column justify-content-center  h-100 container">
                <div class=" text-center">
                    <h2 class="mt-0">Sign up</h2>
                    <hr class="divider" />
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif

                <form method="POST" action="{{ route('registerPost') }}" id="contactForm"
                    data-sb-form-api-token="API_TOKEN">
                    {{ csrf_field() }}
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="first_name" name="first_name" type="text"
                            placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">first name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="last_name" name="last_name" type="text"
                            placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">last name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="company" name="company" type="tel"
                            placeholder="(216) 58671630" data-sb-validations="required" />
                        <label for="phone">Company</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A Company Name is required.
                        </div>
                    </div>
                    <!-- password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" name="password" type="password"
                            placeholder="Enter your password..." data-sb-validations="required" />
                        <label for="name">password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.
                        </div>
                    </div>
                    <!-- password confirmation-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" name="password_confirmation" type="password"
                            placeholder="confirm your password..." data-sb-validations="required" />
                        <label for="name">confirm password</label>
                        <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="mr-3"><input type="radio" name="user_as" value="student" {{old('user_as') ? (old('user_as') == 'student') ? 'checked' : '' : 'checked' }}> {{__t('student')}} </label>
                        <label><input type="radio" name="user_as" value="instructor" {{old('user_as') == 'instructor' ? 'checked' : ''}} > {{('instructor')}} </label>
                    </div> --}}
                    <!-- Message input-->
                    <!--  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"
                        data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>-->
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton"
                            type="submit">Submit</button></div>
                </form>

            </div>
        </div>
        <div class="col-md-6 fullpage bg-dark studentimage ">

            <!-- <img src="./Student.jpg" class="studentimage"  alt=""> -->
        </div>

    </div>
</body>

</html> --}}
