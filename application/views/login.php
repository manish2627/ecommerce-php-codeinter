
<div id="mainBody">
	<div class="container">
	<div class="row">

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<!-- <div class="span4">
			<div class="well">
			<h5>CREATE YOUR ACCOUNT</h5><br/>
			Enter your e-mail address to create an account.<br/><br/><br/>
			<form action="register.html">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">E-mail address</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail0" placeholder="Email">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>-->
		
        <div class="span1"> &nbsp;</div> 
		<div class="span4">
			<!-- <div class="well"> -->
			<!-- <h5>ALREADY REGISTERED ?</h5> -->
			<!-- <form> -->
				
			<?php echo form_open('login/user_login', ['class'=>'form-horizontal', 'method'=>'POST'])  ?>
			<?php if($this->session->userdata('msg')) { echo '<div class="alert alert-warning" role="alert">'.$this->session->userdata('msg').'</div>'; $this->session->unset_userdata('msg'); }?>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" name="email" id="inputEmail1" placeholder="Email">
				  <?php echo form_error('email');?>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3" name="password"  id="inputPassword1" placeholder="Password">
				  <?php echo form_error('password');?>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="forgetpass.html">Forget password?</a>
				</div>
			  </div>
			<!-- </form> -->
			<?php echo form_close()?>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->

