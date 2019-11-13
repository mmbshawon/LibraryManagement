<div class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-top">
            	<div class=" container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
                            <span>Menu&nbsp;<i class="fa fa-bars" aria-hidden="true"></i></span>
                        </button>
                        <a class="navbar-brand" href="../public/index.php"><i class="fa fa-university" aria-hidden="true">&nbsp;Library</i></a>
                    </div>
                	<div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav nav-pills">
                        	<li><a href="index_user.php">Home</a></li>
                        	<li><a href="#">Profile</a></li>
                            <li><a href="#">Collection</a></li>
                            <li><a href="#">Find Book</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Search by Dept&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left nav-stacked nav-pills">
                                    <li><a href="cse_book.php">CSE</a></li>
                                    <li><a href="eee_book.php">EEE</a></li>
                                    <li><a href="bba_book.php">BBA</a></li>
                                    <li><a href="low_book.php">LOW</a></li>
                                    <li><a href="english_book.php">Einglish</a></li>
                                    <li><a href="bangla_book.php">Bangla</a></li>
                                    <li><a href="fashiondesign_book.php">Fashion Design</a></li>
                                    <li><a href="islamicstudies_book.php">Islamic Studies</a></li>
                                </ul>
                        	</li>
                            <li><a href="request_book.php">Book Borrow</a></li>
                            <li><a href="#">Fine details</a></li>
                        </ul>
                    	<ul class="nav navbar-nav navbar-right">
                            <?php if(isset($_SESSION["member_id"])){?> 
                        	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; <?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right nav-stacked nav-pills">
                                    <li><a href="#"><i class="fa fa-fw fa-user"></i>&nbsp;Profile</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-envelope"></i>&nbsp;Inbox</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-gear"></i>&nbsp;Settings</a></li>
                                    <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a></li>
                                </ul>
                        	</li>
                        <?php }?>
                    	</ul>	                            
                	</div>
                </div>
            </nav>
        </div>
 