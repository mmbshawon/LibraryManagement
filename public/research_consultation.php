<?php include ('../recruit/includes/page_header.php');?>
<?php include ('../recruit/includes/public_menu.php');?>

<div class="container-fluid" id="link-page-body">
<div class="container well">
    <div class="breadcrumb" id="section-div">
        <li><a href="index.php">Home</a></li>
        <li><a href="research_overview.php">Research</a></li>
        <li class="active">Research Consultation</li>
    </div>
		<div class="row">
			<div class="col-md-4" id="section-div-menu">
				<div class="well">
                    <p><br></p>
                    <ul style="list-style:none">
    	      			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    	      		</ul>
    	      		<ul style="list-style:none">
			        	<li><i class="fa fa-graduation-cap" aria-hidden="true"></i> Research
		          			<ul style="list-style:none">
		            			<li><a href="research_overview.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Research Overview</a></li>
		            			<li><a href="introduction_research.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Introduction to Research</a></li>   
                                <li><a href="research_guides.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Research Guides</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i> Research Consultation</li>
                                <li><a href="open_access.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Open Access</a></li>
                                <li><a href="current_awareness.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Current Awareness</a></li>
		            			<li><a href="reasearch_management.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Reasearch Data Management</a></li>
		          			</ul>
			        	</li>
			        </ul>
                </div>
            </div>
			<div class="col-md-8" id="section-div-sub">                    
				<div>
                    <h3 class="text-center">Research Consultation</h3>
					<p>To request a research consultation appointment, please use the form below.<br><br>
					<i class="fa fa-angle-right" aria-hidden="true"></i> Whenever possible, requests will be responded to within two business days.<br>
					<i class="fa fa-angle-right" aria-hidden="true"></i> A library staff member, or subject librarian with expertise in your research area, will then schedule an appointment with you, which may require a few more days.<br>
					<i class="fa fa-angle-right" aria-hidden="true"></i> If you need assistance more quickly, please stop by a reference desk or contact us via<a href="#"> phone, chat, IM or e-mail.</a><br>
					<i class="fa fa-angle-right" aria-hidden="true"></i> In general, priority is given to members of the Cornell community.</p>
                    <div class="well">
						<form class="form-horizontal" action="../linkpage/ " method="post"  id="contact_form">
							<fieldset>
								<div class="form-group">
								  	<label class="col-md-3 control-label">Your Name</label>  
								  	<div class="col-md-9 inputGroupContainer">
								  		<div class="input-group">
									  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									  		<input  name="Your_name" placeholder="Your Name" class="form-control"  type="text">
									    </div>
								  	</div>
								</div>
							    <div class="form-group">
							  		<label class="col-md-3 control-label">E-Mail</label>  
							    	<div class="col-md-9 inputGroupContainer">
							    		<div class="input-group">
							        		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							  				<input name="email" placeholder="sample@gmail.com" class="form-control"  type="text">
							    		</div>
							  		</div>
								</div>								       
								<div class="form-group">
							  		<label class="col-md-3 control-label">Contract</label>  
							    	<div class="col-md-9 inputGroupContainer">
							    		<div class="input-group">
							        		<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							  				<input name="Contract" placeholder="Your Contract Number" class="form-control" type="text">
							    		</div>
							  		</div>
								</div>								      
								<div class="form-group">
								  	<label class="col-md-3 control-label">Address</label>  
								    <div class="col-md-9 inputGroupContainer">
								    	<div class="input-group">
								        	<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
								  			<textarea name="comment" placeholder="city, state, zip-code.........." class="form-control"></textarea>
								    	</div>
								  	</div>
								</div>								   
								<div class="form-group"> 
							  		<label class="col-md-3 control-label">status</label>
							    	<div class="col-md-9 selectContainer">
							    		<div class="input-group">
							        		<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							    			<select name="status" class="form-control selectpicker" >
							      				<option value=" " >Please select your state</option>
							      				<option>UU Undergraduate Student</option>
							      				<option>UU graduate Student</option>
							      				<option >UU B.Sc Holder Student</option>
							      				<option >UU Deploma Holder Student</option>
							      				<option >UU staff</option>
							      				<option >UU Faculty</option>
							      				<option >Others</option>      
							    			</select>
							  			</div>
									</div>
								</div>
								<div class="form-group"> 
								  <label class="col-md-3 control-label">Department</label>
								    <div class="col-md-9 selectContainer">
									    <div class="input-group">
									        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										    <select name="status" class="form-control selectpicker" >
											    <option value=" " >Please select your dept.</option>
											    <option>C.S.E</option>
											    <option>E.E.E</option>
											    <option >Bangla</option>
											    <option >English</option>
											    <option >B.B.A</option>
											    <option >Management</option>
											    <option >History</option>
											    <option >LAW</option>
											    <option >Accounting</option>
											    <option >Fashion Design</option>    
										    </select>
									  	</div>
									</div>
								</div>
								<div class="form-group"> 
								  <label class="col-md-3 control-label">Type of Research</label>
								    <div class="col-md-9 selectContainer">
									    <div class="input-group">
									        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
										    <select name="status" class="form-control selectpicker" >
										      	<option value=" "></option>
										       	<option>Short Paper (10 page or less)</option>
										      	<option>Longer Paper (More then 10page)</option>
										      	<option >Thesis</option>
										      	<option >Presentation</option>
										      	<option >Faculty Research</option>
										      	<option >Others</option>   
										    </select>
									  	</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Your Deadline</label>
								    <div class="col-md-9 inputGroupContainer">
									    <div class="input-group">
									        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									        <input type="date" class="form-control" id="example-date">
									    </div>
								    </div>
								</div>								 
							 	<div class="form-group">
			                        <label class="col-md-4 control-label">Do you have an assignment, the course?</label>
			                        <div class="col-md-4">
			                            <div class="radio">
			                                <label><input type="radio" name="hosting" value="yes" /> Yes</label>
			                            </div>
			                            <div class="radio">
			                                <label><input type="radio" name="hosting" value="no" /> No</label>
			                            </div>
			                        </div>
			                    </div>								  
								<div class="form-group">
								  	<label class="col-md-4 control-label">Describe your topic or project and the types of resources you need </label>
								    <div class="col-md-8 inputGroupContainer">
								    	<div class="input-group">
								        	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
								  		</div>
								  	</div>
								</div>
								<div class="alert alert-info" role="alert" id="success_message">
									<i class="glyphicon glyphicon-thumbs-up"></i> By submitting this form, you accept the UU <a href="#">privacy policy</a>.
								</div>
								<div class="form-group">
								  	<label class="col-md-4 control-label"></label>
								  	<div class="col-md-8">
								    	<button type="submit" class="btn btn-primary" >Submit <span class="glyphicon glyphicon-send"></span></button>
								  	</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>      

<?php include ('../recruit/includes/page_footer.php');?>
