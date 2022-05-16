<!DOCTYPE html>
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
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .fullpage {
            height: 100vh;
        }

        .sidebarelement {
            background-color: #F9F9F9;
            box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
            -webkit-box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
            -moz-box-shadow: -7px 2px 25px -8px rgba(148, 137, 137, 0.75);
        }

        .sidebarlinks {
            padding-left: 6px !important;
        }

        .sidebarlinks:hover {
            border-radius: 10px;
            background-color: #F0F0F0 !important;

        }
    </style>

</head>

<body>
    <div class="row fullpage ">
        <div class="col-md-2  sidebarelement h-100">
            <div class="container pt-5">
                <p> <b> User Ben User </b></p>
                <hr>

                <div class="pt-5">
                    <a href="">
                        <p class="sidebarlinks py-1 "> <i class="bi bi-journal-text"></i> My Courses</p>
                    </a>
                    <a href="">
                        <p class="sidebarlinks py-1 ">My Courses</p>
                    </a>
                    <a href="">
                        <p class="sidebarlinks py-1 ">My Courses</p>
                    </a>
                    <a href="">
                        <p class="sidebarlinks py-1 ">My Courses</p>
                    </a>
                    <a href="">
                        <p class="sidebarlinks py-1 ">My Courses</p>
                    </a>
                    <a href="">
                        <p class="sidebarlinks py-1 ">My Courses</p>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-10">
            <div class="container mt-5">
                <h1>My Courses</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quisquam accusamus necessitatibus nulla mollitia quis!</p>
                <div class="container">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Course name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your cours description..."
                                data-sb-validations="required" />
                            <label for="name">Course description</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                         <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="image" type="image" placeholder="enter the image.."
                                data-sb-validations="required" />
                            <label for="phone">Course image</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="20DT"
                                data-sb-validations="required" />
                            <label for="phone">Price course</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                     
                        <!-- Message input-->
                        <!--  <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
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
        </div>

    </div>
</body>

</html>