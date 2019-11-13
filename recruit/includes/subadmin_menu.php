<div class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
        	<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
                        <span>Menu <i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>
                    <a class="navbar-brand" href="../public/index.php"><i class="fa fa-university" aria-hidden="true">&nbsp;Library</i></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav nav-pills">
                      <li><a href="index_subadmin.php">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Member&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        	<ul class="dropdown-menu dropdown-menu-left nav-stacked nav-pills">
                                <li><a href="members_all.php">Member All</a></li>
                                <li><a href="active_member.php">Active Member</a></li>
                                <li><a href="banned_member.php">Banned Member</a></li>
                                <li><a href="student.php">Student</a></li>
                                <li><a href="teacher.php">Teacher</a></li>
                                <li><a href="member.php">Member</a></li>
                                <li><a href="staff.php">Staff</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Book&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        	<ul class="dropdown-menu dropdown-menu-left nav-stacked nav-pills">
                                <li><a href="books_all.php">Book All</a></li>
                                <li><a href="books_add.php">Add Book</a></li>
                                <li><a href="books_new.php">New Book</a></li>
                                <li><a href="books_old.php">Old Book</a></li>
                                <li><a href="books_damage.php">Damage Book</a></li>
                                <li><a href="books_lost.php">Lost Book</a></li>
                                <li><a href="books_replacement.php">Book Replacement</a></li>
                                <li><a href="books_order.php">Order Book</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Department&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
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
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Transaction&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        	<ul class="dropdown-menu dropdown-menu-left nav-stacked nav-pills">
                                <li><a href="borrow.php">Borrow</a></li>
                                <li><a href="borrow_view.php">View Borrowed Book</a></li>
                                <li><a href="borrow_return.php">View Return Book</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Request&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        	<ul class="dropdown-menu nav-stacked nav-pills">
                                <li><a href="request_member.php">Request for member</a></li>
                                <li><a href="request_book_view.php">Request for Book</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    	<?php if(!isset($_SESSION["sub_admin_id"])){?>
                        <li><a href="index_subadmin.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Sign In</a></li>
					   <?php }?>
						<?php if(isset($_SESSION["sub_admin_id"])){?> 
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
 
 
 
 
