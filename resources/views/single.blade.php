<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('page.nav')
<body>
@include('page.container')
<!--content-->
<div class="blog">
    <div class="container">

        <div class="col-md-9 ">
            <!--content-->
            <div class="single">

                <div class="single-top">
                    <img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="images/ss.jpg" alt="" />
                    <div class="lone-line">
                        <h4>Social Sense Perception of Loneliness</h4>
                        <ul class="grid-blog">
                            <li><span><i class="glyphicon glyphicon-time"> </i>08.09.2014</span></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Comment</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share"> </i>Share</a></li>
                        </ul>
                        <p class="wow fadeInLeft animated" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
                    </div>
                </div>
                <div class="comment">
                    <h3>Comments</h3>
                    <div class="media wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#">Andey</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                    <div class="media media-1 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#"> Rackham</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                    <div class="media wow fadeInRight animated" data-wow-delay=".5s">
                        <div class="code-in">
                            <p class="smith"><a href="#">Clara</a> <span>02 June 2014, 15:20</span></p>
                            <p class="reply"><a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="images/si2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        </div>
                    </div>
                </div>
                <div class="leave">
                    <h3>Leave a comment</h3>
                    <form>
                        <div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

                            <input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">

                            <input type="text" value="E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'E-mail';}">


                            <input type="text" value="Web site" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Web site';}">

                            <textarea value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Comment';}">Comment</textarea>
                            <label class="hvr-rectangle-out">
                                <input type="submit" value="Send">
                            </label>
                        </div>
                    </form>
                </div>

            </div>
            <!---->
            <!--//content-->

        </div>
        <div class="col-md-3 categories-grid">
            <div class="search-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Search</h4>
                <div class="search">
                    <form>
                        <input type="text" placeholder="Search" required="" >
                        <input type="submit" value="" >
                    </form>
                </div>
            </div>
            <div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Categories</h4>
                <ul class="popular">
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a></li>

                </ul>
            </div>
            <div class="blog-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h4>Recent Posts</h4>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo1.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <a href="single.html" class="fashion"><img class="img-responsive " src="images/bo2.jpg" alt=""></a>
                    <div class="grid-product">
                        <a href="single.html" class="elit">Consectetuer adipiscing</a>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//content-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-head">
            <div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <ul class=" in">
                    <li><a href="index.html">Home</a></li>
                    <li><a  href="menu.html">Menu</a></li>
                    <li><a  href="blog.html">Blog</a></li>
                    <li><a  href="events.html">Events</a></li>
                    <li><a  href="contact.html">Contact</a></li>
                </ul>
                <span>There are many variations of passages</span>
            </div>
            <div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h2>Follow Us</h2>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                <ul class="social-ic">
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic"></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>

        </div>
        <p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!--//footer-->

</body>
</html>

