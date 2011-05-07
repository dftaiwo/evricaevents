<div>
<?php


e($form->create('User',array('action'=>'login')));
?>
    <fieldset style="-moz-border-radius:10px;
	-moz-box-shadow:0 0 10px #999;
	-webkit-border-radius: 10px;
	-webkit-box-shadow: 0 0 10px #999; "> <legend>  </legend>
   <table>
       <tr><td> <label>Email </label></td><td>
               <input type="text" name="data[User][email]" class="login"/></td></tr>
<tr><td><label>Password  </label></td><td><input type="password" name="data[User][password]" class="login"/></td></tr>
<tr><td>&nbsp;</td><td>  <input type="submit" value="login"/></td></tr>
<?php
e($form->end());

?></table></fieldset>
</div>


 



 