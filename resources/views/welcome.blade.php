
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Showera</title>
     {{-- favicon --}}
    <link rel="shortcut icon" href="{{asset('logo_white.png')}}" type="image/x-icon">
    <meta name="keywords" content="event management, event planning, event tickets, ticket booking, event scheduling, event organization, event registration, event management software, event management system, event management platform, ticket sales, event booking software, event booking platform, event ticketing, event management solutions, event booking solutions, ticket booking software, ticket booking platform, ticket booking solutions.">
    <link rel="stylesheet" href="{{asset('customcss/new.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>
<body>

<div class="container-fluid pt-4 rounded shadow page-bg site-nav">

    <div class="row vh-100 mobile-height ">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!--Navbar-Start-->
                    <div class="">
                        <nav class="navbar navbar-expand-lg navbar-light  align-items-center flex  ">
                            <a class="navbar-brand" href="#">
                                <img width="80px" src="./Assets/logo2.png" alt="">
                            </a>
                            <!-- <button id="submit" class="mb-0 btn btn-primary mobile-btn float-right"> Join Waitlist</button> -->
                        </nav>

                    </div>
                    <!--Navbar-End-->
                </div>

            </div>
            <!--                 home-page-start&ndash;&gt;-->
            <div class="row mt-md-5 ">
                <div class="col-12 col-md-7 mt-5">
                    <div class="text-center text-md-left">

                        <h2 style="font-weight: 800;" class="text-primary display-4 mt-4 text-center text-md-left">Be the First to Experience the Future of Event Ticketing</h2>
                        <p style="font-size:20px" class="text-black-50">Are you tired of waiting in long lines to get tickets for your favorite events? Say goodbye to the hassle with Showera. Join our waitlist now. </p>
                        <div class="form-inline form-mobile mb-2">


                            <input type="text" class="form-control input-mobile w-50 mr-md-3 mx-0 rounded border-dark" id="email" placeholder="Enter Your e-mail address">
                            <br>
                           
                            <button id="submit" type="submit" class="mb-0 btn btn-primary mobile-btn "> Join Waitlist</button>

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-5 d-flex justify-content-center ">
                    <img style="    margin-left: 90px;" width="700px" src="./Assets/hero.png" class=" mt-3 d-none d-md-block" alt="">
                </div>
            </div>
            <!--            home=page-end-->
            <div class="row mt-md-3">
                <div class="col-12 mt-md-5">
                    <h5 class="footer-text mt-4 mt-md-0">Social handles:</h5>
                    <div class="mt-3">
                        <a href="https://instagram.com/showera.in?igshid=ZDdkNTZiNTM=">


                        <img width="40px" src="./Assets/insta.svg"  class="mr-3 "  alt="">
                        </a>
                        <a href="https://www.linkedin.com/company/showera/">
                            <img width="40px" src="./linkdein.svg"  class="mr-3 "  alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="{{asset('jquery.js')}}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-62C4S3TT4C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-62C4S3TT4C');
</script>
<script>
    $(document).ready(function () {
        $('#submit').click(function (e) {

            var email = $('#email').val();


            if ( email == "" ) {
                Toastify({
                            text: "Please fill all the fields",
                            duration: 3000,

                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "red",
                            },
                            onClick: function(){} // Callback after click
                        }).showToast();
                return;
                return;
            }
            // email reges check
            var reges = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            if (!reges.test(email)) {
              Toastify({
                            text: "Enter the email correctly",
                            duration: 3000,

                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                    background: "linear-gradient(to right, #D82E2F, #EB4D4B)",
                                // background: "#D82E2F    ",
                            },
                            onClick: function(){} // Callback after click
                        }).showToast();
                return;
            }

            $.ajax({
                type: "POST",
                url: "/join-the-waitlist",
                data: {
                    email: email,
                    // csrf token
                    _token: "{{ csrf_token() }}",

                },
                success: function (response) {
                    console.log(response);
                    if (response.success == 1) {
                        Toastify({
                            text: "You have joined the waitlist successfully",
                            duration: 3000,
                            destination: "https://github.com/apvarun/toastify-js",
                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "green  ",
                            },
                            onClick: function(){} // Callback after click
                        }).showToast();
                    }
                    else if(response.exists == 1){
                        Toastify({
                            text: "Email already exists",
                            duration: 3000,
                            destination: "https://github.com/apvarun/toastify-js",
                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "linear-gradient(to right, blue, #lightblue )",
                            },
                            onClick: function(){} // Callback after click
                        }).showToast();
                    }
                    else {
                        Toastify({
                            text: "Something went wrong",
                            duration: 3000,
                            destination: "",
                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            },
                            onClick: function(){} // Callback after click
                        }).showToast();
                    }
                    $('#success').text(response.success);
                    $('#email').val('');

                }
            });

        });
    });
</script>
<script src="{{asset('bootstrap.js')}}"></script>

</body>

</html>
