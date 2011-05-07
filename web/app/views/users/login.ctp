<div>
<?php


e($form->create('User',array('action'=>'login')));
e($form->input('email'));
e($form->input('password'));
e($form->submit('Login'));
e($form->end());
?>
</div>


 



 