<?php 
unset($_COOKIE['is_remembered']);
if (isset($_COOKIE['is_remembered']) && $_COOKIE['is_remembered'] == true) {
    //header('Location: http://tw.yahoo.com');
}
    // save cookie for 2 hrs
    //setcookie('cookie_'.CC::CITY, $VARS[CC::CITY], time()+60*60*2);
?>


<!DOCTYPE html>
<html>
	<head>
        <title>Index</title>
        <link href="css/index.css" type="text/css" rel="stylesheet"  />
        <!--<link rel="stylesheet" href="css/global.css">-->
	</head>
<body>
    <div id="content">
        <div class="login" >
            <h1 id="project_name">Project  P.Y.S</h1>
            <form method="POST" action="#">
            	<label for="account">Account</label> 
            	<input id="account" name="account" />
            	<label for="password">Password</label> 
            	<input id="password" name="password" />
                <ul>
                    <li><input type="button" value="Login" /></li>
            	    <li><input type="button" value="create account" /></li> 
            	</ul>
    	 	 	<a href="#">Forgot password? </a>
        	</form>
        </div>
        <div class="menu">
            <h1>Welcome to project PYS</h1>
            <p>Register now to enjoy the following features</p>
            <font size=5 face="Courier New">
                <ul>
            	    <li>Increase your productivity</li>	
                    <li>Plan your life </li>
                    <li>Monitor your personal schedule</li>
                </ul>
            </font>
        </div>
        <hr noshade />
        <footer><p>&copy; All rights reserved by Wesley, Kai, James</p></footer>
    </div>

<!--TODO: try to put background information on background div, learn how to build background first, for Wesley -->


    <div id="data_div">
        <input type="hidden" value="images/slides/slide-1.jpg" class="slideshow active">
        <input type="hidden" value="images/slides/slide-2.jpg" class="slideshow">
        <input type="hidden" value="images/slides/slide-3.jpg" class="slideshow">
        <input type="hidden" value="images/slides/slide-4.jpg" class="slideshow">
        <input type="hidden" value="images/slides/slide-5.jpg" class="slideshow">
        <input type="hidden" value="images/slides/slide-6.jpg" class="slideshow">
        <input type="hidden" value="images/slides/slide-7.jpg" class="slideshow">
    </div>


    
<!-- 
<div id="container">
  <div id="example">
   <div id="slides">
    <div class="slides_container">
     <div class="slide">
      <a href="http://www.flickr.com/photos/jliba/4665625073/" title="145.365 - Happy Bokeh Thursday! | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-1.jpg" width="570" height="270" alt="Slide 1"></a>
      <div class="caption" style="bottom:0">
       <p>Happy Bokeh Thursday!</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/stephangeyer/3020487807/" title="Taxi | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-2.jpg" width="570" height="270" alt="Slide 2"></a>
      <div class="caption">
       <p>Taxi</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/childofwar/2984345060/" title="Happy Bokeh raining Day | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-3.jpg" width="570" height="270" alt="Slide 3"></a>
      <div class="caption">
       <p>Happy Bokeh raining Day</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/b-tal/117037943/" title="We Eat Light | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-4.jpg" width="570" height="270" alt="Slide 4"></a>
      <div class="caption">
       <p>We Eat Light</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/bu7amd/3447416780/" title="&ldquo;I must go down to the sea again, to the lonely sea and the sky; and all I ask is a tall ship and a star to steer her by.&rdquo; | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-5.jpg" width="570" height="270" alt="Slide 5"></a>
      <div class="caption">
       <p>&ldquo;I must go down to the sea again, to the lonely sea and the sky...&rdquo;</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/streetpreacher/2078765853/" title="twelve.inch | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-6.jpg" width="570" height="270" alt="Slide 6"></a>
      <div class="caption">
       <p>twelve.inch</p>
      </div>
     </div>
     <div class="slide">
      <a href="http://www.flickr.com/photos/aftab/3152515428/" title="Save my love for loneliness | Flickr - Photo Sharing!" target="_blank"><img src="images/slides/slide-7.jpg" width="570" height="270" alt="Slide 7"></a>
      <div class="caption">
       <p>Save my love for loneliness</p>
      </div>
     </div>
    </div>
    <a href="#" class="prev"><img src="images/slides/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
    <a href="#" class="next"><img src="images/slides/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
   </div>
   <img src="images/slides/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
  </div>
 </div>
  -->



    <script type="text/javascript" src="js/lib/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/lib/slides/slides.min.jquery.js"></script>
    <script type="text/javascript" src="js/index.inc.js"></script>
</body>
</html>

