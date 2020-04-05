@extends('layouts.app')
@section('content')
<div class="container" style="background:white">
        <div class="row animateNavBar">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-4 mt-md-4 mt-2">
                
                <div class="row mt-lg-4 mt-md-4 mt-sm-3 my-3">
                        <div class="col-lg-5 col-md-6 col-sm-6 col-6 text-center">
                        <a href="{{ url('buy') }}" class="feature">
                            <div id="sb1" class="sellBox w-100 " style="display: inline-block; position: relative;">
                          

                                <div style="position: absolute; transform:translate(30px,30px)">
                                    <img id="sellimg1" src="Images/b1.png" style="" class="img1specs">                    
                                </div>

                                <div id="sbText" style="position: absolute; width:100%; color:black;  height:100%">
                                    <p align="center" style="" class="sellHover mt-lg-4 mt-md-3 mt-sm-4 mt-3" id="sText1">Sell
                                    <p align="center" style="" class="sellHover2" id="sText2">your posts
                                </div>


                            </div>
                        </a>
                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-6 col-6 text-center">
                        <a href="{{ url('sell') }}" class="feature">
                        <div id="bb1" class="buyBox w-100 " style="display: inline-block; position: relative;">
                            
                            <div style="position: absolute; transform:translate(50px,50px)">
                                <img id="buyimg1" src="Images/b2.png" style="" class="img2specs">                    
                            </div>

                            <div id="bbText" style="position: absolute; width:100%; color:black;  height:100%">
                                <p align="center" style="" class="buyHover mt-lg-4 mt-md-3 mt-sm-4 mt-3" id="bText1">Buy
                                <p align="center" style="" class="buyHover2" id="bText2">posts
                            </div>


                            </div>
                            </a>
                 
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
                            <p id="dt1" style="color:black; font-weight:500" class="text-center">{{ $taskCount }}
                            <p id="dt2" style="color:black; transform:translate(0px,-20px)" class="text-center">Posts Added                             
                        </div>
                    </div>

                    <div class="col-4 p-lg-3 p-sm-2 p-2 p-md-2">
                        <div id="db2" class="dashbox w-100">
                            <p id="dt3" style="color:black; font-weight:500" class="text-center">{{ $bookCount }}
                            <p id="dt4" style="color:black; transform:translate(0px,-20px)" class="text-center">Total posts                            
                        </div>
                    </div>

                    <div class="col-4 p-lg-3 p-sm-2 p-2 p-md-2">
                        <div id="db3" class="dashbox w-100">
                            <p id="dt5" style="color:black; font-weight:500" class="text-center">00
                            <p id="dt6" style="color:black; transform:translate(0px,-20px)" class="text-center">posts Sold                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container" style="border:0px solid black;margin-top:10px ">
<div class=" col-12">
                <div class="card-header  text-center" style="font-size:20px; font-weight:700; letter-spacing:2px; color:black;background:darkgray">Your Post Details</div>

                <div class="card-body ">
                
                   <table class="table table-striped">
                       <tr style="font-size:15px; font-weight:300; letter-spacing:2px; color:black;background:lightgray">
                       <th>Post_title</th>
                       <th>POst Author</th>
                       <th>Price</th>
                        </tr>
                        @foreach ($tasks as $task)
                           <tr style="font-size:15px; font-weight:500; letter-spacing:2px;color:#111111;">
                           <td style="border:0px solid black">
                               {{$task->post_title}}
                               </td>
                               <td class="" style="">
                               {{$task->Post_author}}
                               </td>
                               
                               <td class="" style="border:0px solid black">
                                Rs:{{ $task->price }}
                                   
                               </td>
                               
                           </tr>
                       @endforeach
                   </table>

                    {{ $tasks->links() }}
                </div>
           
            </div>
            
        
        
@endsection
