<div class="container-fluid" id="slider-div">
				<div class="col-md-12" id="home-page-1st-div">
					<div class="col-md-5" id="home-page-login">
                            <div class="login">
                                <h5 class="text-center"><br><b>Wellcome</b><br>_____________<br></h5>
                                <h4 class="text-center" style="color:#FFF; font-weight:900;">
                                    <?php if(isset($_SESSION["member_id"])) {
									echo $_SESSION["firstname"]." ".$_SESSION["lastname"];
									}
									?>
                                </h4>
                                <h5 class="text-center"><br><b>Need Help?</b><br>_____________<br></h5>
                                <h5 class="text-center"><a href="#">Ask a Librarian</a></h5>
                                <h5 class="text-center"><a href="#">Report a Problem</a></h5>
                                <br />
                                <form action="logout.php" method="post">
                                	<button class="center-block" type="submit" name="submit">Sign out</button>
                                </form>
                                <br />
                            </div>
	                </div>
	            	<div class="col-md-7" id="home-page-slider">
                    	<div class="col-md-10 pull-right">
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
