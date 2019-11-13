<div class="container-fluid" id="slider-div">
<div class="container">
	<div class="row" id="home-page-1st-div">
		<div class="col-md-5 col-sm-5 col-xs-12" id="home-page-login">
        	<form action="" class="login-form" method="post">
                <div class="login">
                    <h2>Login</h2>
                    <center style="color:#F90;"><?php if($message!="") { echo $message; } ?></center>
                    <div class="form" align="center">
                        <div class="input-group" id="login-from-searchbar">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input name="email" class="form-control" type="email" placeholder="User email" required="required">
                        </div>
                        <div class="input-group" id="login-from-searchbar">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                            <input name="password" class="form-control" type="password" placeholder="Password" required="required">
                        </div>
                        <p><a href="#">Forgot password?</a></p>
                        <button class="center-block" type="submit" name="submit">Sign in</button>
                        <p><a href="register.php"><em>Don't have an account? Register</em></a></p>
                    </div>
                </div>
            </form>
        </div>
    	<div class="col-md-7 col-sm-7 col-xs-12" id="home-page-slider">
        	<div class="col-md-2 col-sm-2"></div>
        	<div class="col-md-10 col-sm-10">
    		<div class="carousel slide" id="carousel-1234" data-ride="carousel" data-interval="8000">
    			<div class="carousel-inner">
    				<div class="item active">
    			        <h5><b>Welcome to Our Library</b><br>____________<br><br></h5>
                        <h4>We will Help You to Learn</h4>
                        <p>There are hundreds of digital skills sessions every month in Leeds Libraries. Whether you want to read a book or book a holiday, keep in touch with friends and family or find a new hobby, you can do it online.</p><br>
                        <p><a href="#" class="btn btn-primary">Read More</a></p>
    				</div>
    			    <div class="item">
    			        <h5><b>When You Need Help</b><br>____________<br><br></h5>
                        <h4>Ask a Librarian</h4>
                        <p>librarians are available to help with your research needs whatever they may be! Here are all the ways you can reach us. If you fix a problem, there are many ways to contact a librarian when you would like assistance.</p><br>
                        <p><a href="#" class="btn btn-primary">Read More</a></p>
    				</div>
    				<div class="item">
    			        <h5><b>Become a Library Member</b><br>____________<br><br></h5>
                        <h4>join with Us</h4>
                        <p>Explore our extensive collection of learning resources and contemporary literature. Get involved in our activities and events.Our library is more than just books. Join of our libraries and be inspired by our collection.</p><br>
                        <p><a href="#" class="btn btn-primary">Read More</a></p>
    				</div>
                </div>
    		</div>
            </div>
    	</div>
        
        
    </div>
</div>
</div>
