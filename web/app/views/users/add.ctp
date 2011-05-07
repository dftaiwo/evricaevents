<div class="wrap">
	<div class="form">
  	<?php echo $this->Form->create('User',array('action'=>'add'));?>

    	<fieldset>
        	<legend><img src="<?php echo $this->Html->url('/img');?>/create_account.png" width="182" height="45" border="0"/></legend>
       	  <label>First Name</label>
               <?php echo $this->Form->input('User.firstname');?>
                <label>Last Name</label>
               <?php
               echo $this->Form->input('User.lastname');?>
                <label>Email Address</label>
                <?php echo $this->Form->input('User.email');?>
                <label>Password</label>
              <?php  echo $this->Form->password('pass');?>
                <label>Verify Password</label>
               <?php      echo $this->Form->password('passV');?>
                <label>4 + 2 = ?</label>
                <input type="text" name="rst" class="rst" size="4" />
                <label>I have read the Terms of Condition <input name="terms" type="checkbox" /></label>
                <div class="clear">&nbsp;</div>
                <?php echo $this->Form->end(__('Submit', true));?>
        </fieldset>
    
    </div>
 <div class="alignright">
    	<div class="note blue rounded">
        	<img src="images/tos.png" width="205" height="33" border="0" />
            <div class="clear">&nbsp;</div>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua;
<ol>
       	  		<li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
                <li>Duis aute irure dolor in reprehenderit in voluptater</li>
          </ol>
      </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>
                    <div class="clear">&nbsp;</div>
  <div class="clear" style="padding-left:30px;"><img src="<?php echo $this->Html->url('/img');?>/garage.jpg" width="150" height="38" /> <img src="<?php echo $this->Html->url('/img');?>/google.png" width="100" height="35" /> <img src="<?php echo $this->Html->url('/img');?>/nokia.jpg" width="100" height="45" /> <img src="<?php echo $this->Html->url('/img');?>/blackberry.jpg" width="125" height="26" /></div>

    <div class="wrap">&nbsp;</div>

 
  