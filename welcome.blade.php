<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                            <nav class="navbar navbar-expand-lg navbar-light  align-items-center  ">
                                <a class="navbar-brand" href="#">
                                    <img width="80px" src="./Assets/logo2.png" alt="">
                                </a>
                                <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <img src="./Assets/Hamburger%20Menu.svg" alt="">
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav ">

                                        {{--                                    <li class="nav-item">--}}
                                        {{--                                        <button class="mb-0 btn btn-primary  px-3 py-2 mb-nav"> Join Waitlist</button>--}}
                                        {{--                                    </li>--}}
                                    </ul>

                                </div>
                            </nav>
                        </div>
                        <!--Navbar-End-->
                    </div>

                </div>
                <!--                 home-page-start&ndash;&gt;-->
                <div class="row mt-md-5 ">
                    <div class="col-12 col-md-7 mt-5">
                        <div class="text-center text-md-left">
                            <p class="btn btn-primary rounded-pill mb-0 p-2 px-4 text-color">We are now allowing
                                early-access for users. <u>Learn More</u></p>
                            <h1 class="text-primary display-4 mt-4 text-center text-md-left">Build a highly engaged
                                community with no effort.</h1>
                            <p class="text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                aperiam aut culpa deleniti ea eaque enim facere, fugiat id laudantium magni nesciunt
                                qui, quia quidem quis quo tempora voluptas voluptates?</p>
                            <div class="form-inline form-mobile mb-2">
                                <form action="{{url('join-the-waitlist')}}" method="post">
                                

                                    <input type="text" class="form-control input-mobile w-50 mr-md-3 mx-0  " id="email"
                                        placeholder="Enter Your e-mail address">
                                    <button id="subit" class="mb-0 btn btn-primary mobile-btn "> Join Waitlist</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-5 d-flex justify-content-center ">
                        <img style="    margin-left: 105px;" width="700px" src="./Assets/hero.png"
                            class=" mt-3 d-none d-md-block" alt="">
                    </div>
                </div>
                <!--            home=page-end-->
                <div class="row mt-md-3">
                    <div class="col-12 mt-md-5">
                        <h5 class="footer-text mt-4 mt-md-0">Social handles:</h5>
                        <div class="mt-3">
                            <img width="50px" src="./Assets/insta.svg" class="mr-3 " alt="">
                            <img width="50px" src="./Assets/fb.svg" class="mr-3 " alt="">
                            <img width="50px" src="./Assets/twitter.svg" class="mr-3 " alt="">



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{asset('jquery.js')}}"></script>
    {{-- <script>
        $(document).ready(function () {
        $('#ubmit').click(function (e) {
            // e.preventDefault();

            var email = $('#email').val();


            if ( email == "" ) {
                alert("Please fill all the fields");
                return;
            }
            // email reges check
            // var reges = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            // if (!reges.test(email)) {
            //     alert("Please enter a valid email");
            //     return;
            // }

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
                background: "linear-gradient(to right, #00b09b, #96c93d)",
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
                background: "linear-gradient(to right, #00b09b, #96c93d)",
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
    }); --}}
    {{-- </script> --}}
    <script src="{{asset('bootstrap.js')}}"></script>

</body>

</html>