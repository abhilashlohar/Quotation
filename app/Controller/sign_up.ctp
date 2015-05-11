<!-- BEGIN LOGO -->
  <div class="logo">
	<h3 style="color:white;">Growth-Hacker</h3>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form id="contact-form" method="post" class="form-vertical login-form"  />
    <fieldset>
      <h3 class="form-title">Growth-Hacker free Sign up</h3>
      <div class="control-group">
	  	<div class="controls">
        	<div class="input-icon left"><i class="icon-user"></i>
			<input type="text"  class="m-wrap" name="username" style="font-size:16px;" value="<?php echo @$bgColor ; ?>"  placeholder="Your email ID or mobile*">	
             </div>
		</div>
	  </div>
       <div class="control-group">
	  	<div class="controls">
        	<div class="input-icon left"><i class="icon-lock"></i>
			<input type="password"   class="m-wrap" placeholder="Password*" style="font-size:16px;" value="<?php echo @$txtColor; ?>" name="password" >
           
             </div>
		</div>
	  </div>  
      <div class="form-actions">
       <label class="checkbox">
        <div class="checker" id="uniform-undefined"><span><input type="checkbox" <?php if(!empty($bgColor)){?> checked="checked" <?php } ?> name="rememberme" value="1" style="opacity: 0;"></span></div> Remember me
        </label>
			<button type="submit" name="login" class="btn green  pull-right" style="font-size:16px; width:45%">Login  <i class="m-icon-swapright m-icon-white"></i></button>
      </div>
      <center>
      <a href="" class="btn blue " style="font-size:16px;" >Sign up for free</a> </center>
      </fieldset>
    </form>
    <!-- END LOGIN FORM -->        
 </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    Growth-Hacker
  </div>
  <!-- END COPYRIGHT -->
