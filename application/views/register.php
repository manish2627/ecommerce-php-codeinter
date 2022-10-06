
<div id="mainBody">
	<div class="container-fluid">
	<div class="row">

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	<!-- <form class="form-horizontal" > -->
        <?php echo form_open('Welcome/signup', ['class'=>'form-horizontal', 'method'=>'POST'])  ?>

		<h4>Your personal information</h4>
		
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" name="fname" placeholder="First Name">
              <?php echo form_error('fname')?>
             
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLnam" name="lname" placeholder="Last Name">
              <?php echo form_error('lname')?>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email"  >Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="input_email" name="email" placeholder="Email">
          <?php echo form_error('email')?>
		</div>
	  </div>
      <div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
        <input type="date" name="dob"  id="dob" placeholder="Date Of Birth">
        <?php echo form_error('dob')?>
		
	  </div>		  
      <div class="control-group">
		<label class="control-label">Phone <sup>*</sup></label>
        <input type="tel" name="phone"  id="phone" placeholder="Phone no.">
        <?php echo form_error('dob')?>
		
	  </div>		  
	<div class="control-group">
		<label class="control-label" for="inputPassword1" >Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password"  id="inputPassword1" placeholder="Password">
          <?php echo form_error('password')?>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1" > Confirm Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="cpassword"  id="inputPassword1" placeholder="Confirm Password">
          <?php echo form_error('cpassword')?>
		</div>
	  </div>	  
		
	<div class="control-group">
			<div class="controls">
				<!-- <input type="hidden" name="email_create" value="1"> -->
				<!-- <input type="hidden" name="is_new_customer" value="1"> -->
				<input class="btn btn-large btn-success" name="register" type="submit" value="Register" />
			</div>
		</div>		
	<!-- </form> -->
    <?php echo form_close()?>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
