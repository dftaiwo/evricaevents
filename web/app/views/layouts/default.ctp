<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Evrica Events :: Events Hub for Africa!</title>
<link rel="shortcut icon" href="images/favicon.png"/>
<link rel="stylesheet" type="text/css" href="css/styles.css" />

<script type="text/javascript" src="<?php echo $this->Html->url('js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('js/s3Slider.js'); ?>"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider1').s3Slider({
            timeOut: 3000
        });
    });
</script>
<script type="text/javascript">
$(window).load(function() {

	$('#slider').nivoSlider();

});
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onload="MM_preloadImages('<?php echo $this->Html->url('/img/signupII.png'); ?>')">
<div class="container">
	<div class="head">
    	<div class="logo">&nbsp;</div>
        <div  class="sontwk">
        <label>
        	<input type="text" id="txt1" onkeyup="showHint(this.value)" size="30" class="inputs" onfocus="if (this.value=='search events') this.value=''" onblur="if (this.value=='') this.value = 'search events'" value="search events" />
                    <input name="search" type="button" value="Go!" class="btt"/>

        </label>
        <label>Online Connect</label>
        <img src="<?php echo $this->Html->url('/img/social_networks.png'); ?>" width="209" height="34" /></div>
        <div class="clear">&nbsp;</div>
    </div>
    <div class="uppernav">
    	<ul class="sf-menu">

					<li><a href="">Home</a></li>

					<li><a href="">About Evrica</a></li>

					<li><a href="#">Find Events</a></li>

					<li><a href="#">Services</a>
                    							<ul>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Web Management</a></li>
							<li><a href="#">Database Management</a></li>
							<li><a href="#">Graphic Designers</a></li>
							<li><a href="#">Branding</a></li>
						</ul>
</li>

					<li><a href="#">FAQ</a></li>

					<li><a href="#">Contact Us</a></li>

			</ul>
    </div>


<div class="wrap">
         

  </div>
                    <div class="clear">&nbsp;</div>


    <div class="wrap">

    <div class="clear">&nbsp;</div>

    </div>

    <div class="clear">&nbsp;</div>
</div>
<div class="footer">
	<div class="wrapfoot">
	<div class="siteinfo">
    <a href="">Home</a>
    <a href="">About Evrica</a>
    <a href="">Find Events</a>
    <a href="">Services</a>
    <a href="">FAQ</a>
    <a href="">Contact Us</a>

</div>
	<div class="team"></div>
    </div>
</div>
</body>
</html>
<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework', true), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>