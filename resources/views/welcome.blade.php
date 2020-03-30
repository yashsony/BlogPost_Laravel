<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <script src="{{ asset('js/home.js') }}" defer></script>
    </head>
    <body>
    
        <div >
        <div class="container" style="background-color:white;">
    <div class="row">
                
                <div class="col-12">                
                        <div class="text-center p-3 animateText1" style="font-size:30px; letter-spacing: 7px;
                        font-weight:450;">
                            OLD BOOK
                            
                        </div>
                        <hr style="height:1px; transform:translate(0px,-10px); background-color:grey; opacity: 0.2;box-shadow: 0px 0px 2px grey;">
                </div>

    </div>
</div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/tasks') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>







        



        <div class="container" style="background:white">
            <div class="row">
                <div id="lb3" class="col-12 my-5" style="background:#101010">
                    <div class="row my-5">

                        <div id="lb2" class="col-lg-5 col-md-5 col-sm-12 text-center my-5 animateLogo">
                            <!-- <img src="Images/logo.png" id="l1" style="height:300px; width:200px"> -->
                            <img src="{{URL('/images/logo.png')}}" id="l1" style="height:300px; width:200px" >
                        </div>

                        <div id="lb1" class="col-lg-6 col-md-6 col-sm-12 col-12  text-left my-5 animateLogoInfo">
                            <p class="text-light text-sm-center text-lg-left text-md-left text-center" id="lb5" style="font-size:60px; line-height:60px; font-weight:600; letter-spacing:1px">What is Old Book</p>
                            <p class="text-justify pl-2 " style="font-size:19px; color:lightgrey" id="lb6"><br>Old Book is a platform where you can sell your old books
                                at your own value and can buy used or new books at rates
                                cheaper than market.<br>

                            <div class="text-sm-center text-lg-left text-md-left text-center"><input id="lb4" type="button" value="Discover" class="mt-5 buttonDiscover"></div>
                        </div>

                        <div class="col-lg-1 col-0"></div>

                    </div>

                </div>
            </div>
    </div>





    <div class="container" style="background:white">
        <div class="row animateNavBar">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-4 mt-md-4 mt-2">
                
                <div class="row mt-lg-4 mt-md-4 mt-sm-3 my-3">
                        <div class="col-lg-5 col-md-6 col-sm-6 col-6 text-center">
                            <a href="{{ route('login') }}" class="feature">
                            <div id="sb1" class="sellBox w-100 feature" style="display: inline-block; position: relative;">
                          

                                <div style="position: absolute; transform:translate(30px,30px)">
                                    <img id="sellimg1" src="Images/b1.png" style="" class="img1specs">                    
                                </div>

                                <div id="sbText" style="position: absolute; width:100%; color:black;  height:100%">
                                    <p align="center" style="" class="sellHover mt-lg-4 mt-md-3 mt-sm-4 mt-3" id="sText1">Sell
                                    <p align="center" style="" class="sellHover2" id="sText2">your book
                                </div>


                            </div></a>
                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-6 col-6 text-center">
                        <a href="{{ route('login') }}" class="feature">
                        <div id="bb1" class="buyBox w-100 " style="display: inline-block; position: relative;">
                            
                            <div style="position: absolute; transform:translate(50px,50px)">
                                <img id="buyimg1" src="Images/b2.png" style="" class="img2specs">                    
                            </div>

                            <div id="bbText" style="position: absolute; width:100%; color:black;  height:100%">
                                <p align="center" style="" class="buyHover mt-lg-4 mt-md-3 mt-sm-4 mt-3" id="bText1">Buy
                                <p align="center" style="" class="buyHover2" id="bText2">used book
                            </div>


                            </div></a>
                        </div>

                        <div class="col-lg-2 col-0">
                            
                        </div>
                </div>
                  
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-4 mt-md-4 mt-sm-3 mt-3">
                <p class="mt-lg-4 mt-md-4 mt-2" style="font-size:20px; font-weight:400; letter-spacing:1px; color:black;" id="dash">DASHBOARD
                <hr style="height:1px;  background-color:grey; opacity: 0.2;box-shadow: 0px 0px 2px grey;">

                <div class="row m-0" style="transform:translate(0px,-15px)">
                    <div class="col-4 p-lg-3 p-sm-2 p-2 p-md-2">
                        <div id="db1" class="dashbox w-100">
                            <p id="dt1" style="color:black; font-weight:500" class="text-center"> {{ $userCount }}
                            <p id="dt2" style="color:black; transform:translate(0px,-20px)" class="text-center">Total Users                            
                        </div>
                    </div>

                    <div class="col-4 p-lg-3 p-sm-2 p-2 p-md-2">
                        <div id="db2" class="dashbox w-100">
                            <p id="dt3" style="color:black; font-weight:500" class="text-center">{{ $bookCount }}
                            <p id="dt4" style="color:black; transform:translate(0px,-20px)" class="text-center">Total Books                            
                        </div>
                    </div>

                    <div class="col-4 p-lg-3 p-sm-2 p-2 p-md-2">
                        <div id="db3" class="dashbox w-100">
                            <p id="dt5" style="color:black; font-weight:500" class="text-center">00
                            <p id="dt6" style="color:black; transform:translate(0px,-20px)" class="text-center">Books Sold                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <div class="container" style="background:white">
        <div class="row">
            <div class="col-12 mt-5" style="background:rgba(00,255,100,0.1)">
                <p class="mt-lg-4 mt-md-4 mt-2 mb-4" style="font-size:20px; font-weight:500; letter-spacing:1px; color:black;" id="tt1">OLD BOOK IS ALL ABOUT
                <hr style="height:1px;  background-color:grey; opacity: 0.2;box-shadow: 0px 0px 2px grey;">
                
                <ul style="font-size:17px">
                <li class="text-justify"><b>Old Book</b> is a platform which would enable users to sell or buy old or used books
                at low prices than market and is especially focused on Students and Book Readers.</li><br>
                <li class="text-justify">Best thing about this platform is that, it is useful for any age group and for the persons who loves to
                read books. In coming time, this platform will be further extended.</li></ul>
            </div>
        </div>

    </div>





    <div class="container" style="background:white">
        <div class="row">
            <div class="col-12 mt-5">
            <hr style="height:1px; transform:translate(0px,0px); background-color:grey; opacity: 0.2;box-shadow: 0px 0px 2px grey;">
            <div class="text-center my-4">
                <a href="#top" class="mx-4 text-dark"><span style="opacity:0.5" class="fa fa-arrow-up"></span> Go to Top</a>
                <a href="#" class="mx-4 text-dark"><span style="opacity:0.5" class="fa fa-user"></span> Contact Us</a>
            </div>
            </div>
        </div>

    </div>







    </body>
</html>
