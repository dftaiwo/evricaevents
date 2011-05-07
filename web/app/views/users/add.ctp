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
 <div class="alignright">
    	<div class="note blue rounded">
        	<img src="<?php echo $this->Html->url('/img');?>/tos.png" width="205" height="33" border="0" />
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
 

 
  