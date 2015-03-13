<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/test.css">
        <link type="text/css" rel="stylesheet" href="css/navtest.css">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top ">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-2" href="index.html"><h1>LOGO</h1></a>
                        <div class='navigation2 col-sm-10'>
                            <ul>
                                <li><a href="index.html">Home</a></li>  
                                <li class="dropdown">

                                    <a href="shop.html" class="dropdown-toggle" >Shop<b class="caret"></b></a>                      

                                    <ul class="dropdown-menu mega-menu droppdown">

                                        <li class="mega-menu-column ">
                                            <ul>
                                                <li class="nav-header">Kille</li>
                                                <li class="undermen"><a href="#">Hoodie</a></li>
                                                <li class="undermen"><a href="#">T-shirt</a></li>
                                                <li class="undermen"><a href="#">Shirt</a></li>
                                                <li class="undermen"><a href="#">Shorts</a></li>
                                                <li class="undermen"><a href="#">Jeans</a></li>
                                                <li class="undermen"><a href="#">Trousers</a></li>
                                            </ul>
                                        </li>    

                                        <li class="mega-menu-column">
                                            <ul>
                                                <li class="nav-header">Tjej</li>
                                                <li class="undermen"><a href="#">Hoodie</a></li>
                                                <li class="undermen"><a href="#">T-shirt</a></li>
                                                <li class="undermen"><a href="#">Shirt</a></li>
                                                <li class="undermen"><a href="#">Shorts</a></li>
                                                <li class="undermen"><a href="#">Jeans</a></li>
                                                <li class="undermen"><a href="#">Trousers</a></li>
                                            </ul>
                                        </li> 

                                        <li class="mega-menu-column">
                                            <ul>                            
                                                <li class="nav-header">Barn</li>
                                                <li class="undermen"><a href="#">Hoodie</a></li>
                                                <li class="undermen"><a href="#">T-shirt</a></li>
                                                <li class="undermen"><a href="#">Shirt</a></li>
                                                <li class="undermen"><a href="#">Shorts</a></li>
                                                <li class="undermen"><a href="#">Jeans</a></li>
                                                <li class="undermen"><a href="#">Trousers</a></li>
                                            </ul>
                                        </li> 

                                    </ul>


                                </li>

                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#" class="cartlightbox cartlightboxdesign"><img src="img/CART.png"></a>
                                    <div class="cartpbox">
                                        <div class="cartlightbox-container">
                                            <div class="closecart">x</div>
                                           
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <button id="buybutton" class="addprodukt"><a href="Shop.html">Buy (OBS A tag inuti)</a></button>
                                        </div>


                                    </div></li>
                                <li class="login"><a href="#contact">Registrate</a></li>
                                <li class="login dropdown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>                      
                                    <ul class="dropdown-menu login-menu droppdown">

                                        <form>
                                            <h3 class="top user">Username:</h3> 
                                            <input type="text" name="FirstName" value=""><br>
                                            <h3 class="user">Password:</h3>
                                            <input type="text" name="LastName" value=""><br>
                                            <input class="send" type="submit" value="Login">
                                        </form>


                                    </ul>
                                </li>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container ">

                <div class="row top-product ">
                    <div class="col-sm-6 pimg ">
                        <div id="slider1" >
                            <img border="0" src="img/img1.jpg"  alt="" />
                            <img  border="0" src="img/img2.jpg"  alt="" />
                            <img  border="0" src="img/img3.jpg"  alt="" />
                            <img border="0" src="img/img4.jpg"  alt="" />
                            <img  border="0" src="img/img5.jpg"  alt="" />
                            <img border="0" src="img/img6.jpg"  alt="" />
                        </div>
                        <ul id="thumb"> </ul>

                        <div class="col-sm-12 productslist similarproducts">
                            <p class="similarproductstitle" > <span>Similar Products</span></p>
                            <a href="Product.html">    
                                <div class="col-sm-3">
                                    <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                    <h3>VANTE-MICROSOFT</h3>
                                    <h4>19999KR</h4>

                                </div>
                            </a>
                            <a href="Product.html">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                    <h3>VANTE-MICROSOFT</h3>
                                    <h4>19999KR</h4>
                                </div>
                            </a>
                            <a href="Product.html">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                    <h3>VANTE-MICROSOFT</h3>
                                    <h4>19999KR</h4>
                                </div>
                            </a>
                            <a href="Product.html">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                    <h3>VANTE-MICROSOFT</h3>
                                    <h4>19999KR</h4>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-1 sidebar ">
                        <a href="#" class="lightbox lightboxdesign"><p>< ></p></a>
                        <a href="#" class="sharelightbox lightboxdesign2"><p>Share</p></a>
                    </div>




                    <div class="col-sm-5 ">
                        <div class="producttitledesign">
                            <h2>PRODUKT 2000</h2>
                        </div>
<?php
                        include "cart.php";
                        ?> 
                        <div class="panel-heading productbuttondesign" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <p>Produkt Beskrivning</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body productdetails">
                                <h4>Beskrivning</h4>
                                <p>En Byxa i snabbtorkande funktionsmaterial som andas. Slim fit. Byxan är delvis tillverkad av återvunnen polyester.</p>
                                <h4>Detaljer</h5>             
                                    <p>Snabbtorkande, 83% polyester, 17% elastan. Maskintvätt 40˚
                                        Art.nr. 47-0779</p>
                            </div>
                        </div>
                        <div class="panel-heading productbuttondesign " role="tab" id="headingTwo">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                <p>Size Guide</p>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body productdetails">
                                <p>   STOEOREOREORAOAFASDFJDSPFJSFSDFIJ</p>
                            </div>
                        </div>
                        

                        <button class="addprodukt"><p>Add to Cart</p></button>
                    </div>
                </div>

                <div class="backdrop"></div>
                <div class="pbox">
                    <div class="close">x</div>
                    <div class="lightbox-container">

                        <div class="lightbox-slider">
                            <ul class="slides">
                                <li>
                                    <a href="#"><img src="img/img1.jpg" /></a>
                                </li>

                                <li>
                                    <img src="img/img2.jpg" />
                                </li>

                                <li>
                                    <img src="img/img3.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="sharebackdrop"></div>
                <div class="sharepbox">
                    <div class="closeshare">x</div>
                    <div class="sharelightbox-container">
                        <div id="fb-root"></div>
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="icon"></div>

                    </div>
                </div>







            </div>




            <div class="jumbotron backgroundfooter">
                <div class="container">

                    <div class="col-sm-4 footercontent">
                        <h2>© 2014 Clothes Store </h2>
                        <p>By David KB, Viktor RT <br>
                            Albin S, Tony T</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Find us</h2>
                        <p>Adress:</p>
                        <p>City:</p>
                        <p>Phone nr:</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Follow us</h2>
                    </div>

                </div>
            </div>

        </div>
        <script>

            $(document).ready(function() {

                $('.lightbox').click(function() {
                    $('.backdrop').animate({'opacity': '.50'}, 300, 'linear');
                    $('.pbox').animate({'opacity': '1.00'}, 300, 'linear');
                    $('.backdrop, .pbox').css('display', 'block');
                });

                $('.close').click(function() {
                    close_box();
                });

                $('.backdrop').click(function() {
                    close_box();
                });

            });

            function close_box()
            {
                $('.backdrop').animate({'opacity': '0'}, 300, 'linear', function() {
                    $('.backdrop, .pbox').css('display', 'none');
                });
            }


            $(document).ready(function() {

                $('.sharelightbox').click(function() {
                    $('.sharebackdrop').animate({'opacity': '.50'}, 300, 'linear');
                    $('.sharepbox').animate({'opacity': '1.00'}, 300, 'linear');
                    $('.sharebackdrop, .sharepbox').css('display', 'block');
                });

                $('.closeshare').click(function() {
                    close_share();
                });

                $('.sharebackdrop').click(function() {
                    close_share();
                });

            });

            function close_share()
            {
                $('.sharebackdrop, .sharepbox').animate({'opacity': '0'}, 300, 'linear', function() {
                    $('.sharebackdrop, .sharepbox').css('display', 'none');
                });
            }




            $(document).ready(function() {

                $('.cartlightbox').click(function() {
                    $('.cartpbox').animate({'opacity': '1.00'}, 300, 'linear');
                    $('.cartpbox').css('display', 'block');
                });

                $('.closecart').click(function() {
                    close_cart();
                });



            });

            function close_cart()
            {
                $('.cartpbox').animate({'opacity': '0'}, 300, 'linear', function() {
                    $('.cartpbox').css('display', 'none');
                });
            }







            $(document).ready(function() {
                $('.lightbox-slider').flexslider({
                    animation: 'fade',
                    controlsContainer: '.lightbox-slider'
                });
            });

        </script>
    </body>
