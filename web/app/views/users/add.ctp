<div class="wrap">
	<div class="form">
  	<?php echo $this->Form->create('User',array('action'=>'add'));?>

    	<fieldset>
        	<legend><img src="<?php echo $this->Html->url('/img/');?>create_account.png" width="182" height="45" border="0"/></legend>
       	  <label>First Name</label>
               <?php echo $this->Form->input('User.firstname',array('class'=>'input','div'=>false,'label'=>false));?>
                <label>Last Name</label>
               <?php
               echo $this->Form->input('User.lastname',array('class'=>'input','div'=>false,'label'=>false));?>
                <label>Email Address</label>
                <?php echo $this->Form->input('User.email',array('class'=>'input','div'=>false,'label'=>false));?>
                <label>Password</label>
              <?php  echo $this->Form->password('pass',array('class'=>'input','div'=>false,'label'=>false));?>
                <label>Verify Password</label>
               <?php      echo $this->Form->password('passV',array('class'=>'input','div'=>false,'label'=>false));?>
                <label>4 + 2 = ?</label>
                <input type="text" name="rst" class="rst" size="4" />
                <label>I have read the Terms of Condition <input name="terms" type="checkbox" /></label>
                <div class="clear">&nbsp;</div>
                <?php  echo $this->Form->submit('Submit',array('class'=>'btt','div'=>false,'label'=>false));?>

                <?php echo $this->Form->end();?>
        </fieldset>
    
    </div>


    <div class="rightside">
        <form action="<?php echo $html->url('/users/login')?>" method="post">
        	<fieldset>
            <legend><img src="<?php echo $html->url('/img');?>/login_img.png" width="170" height="32" /></legend>
        	<label>Email Address</label>
            <input type="text" name="data[User][email]" class="input" />
            <label>Password</label>
            <input type="password" name="data[User][password]" class="input" />
            <div class="clear">&nbsp;</div>
            <a href="#">Forgot Password?</a> &nbsp;&nbsp;&nbsp;<input name="" type="submit" class="btt" value="Sign in"/>
          </fieldset>
        </form>
    </div>

    <div class="clear">&nbsp;</div>
</div>
 

 
  