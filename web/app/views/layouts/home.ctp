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
        <div class="abtev">
        	<p class="dropcap">W<strong>hy Evrica?</strong> <img src="<?php echo $this->Html->url('/img/img_index.jpg'); ?>" width="130" height="159" class="image_right"/> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<span class="readmore"> more + </span> </p>
        
    </div>
   	<div class="slideshow">	
		<div id="slider1">
		<ul id="slider1Content">
		<li class="slider1Image">
			<a href=""><img src="<?php echo $this->Html->url('/img/img1.jpg'); ?>" alt="1" /></a>
			<span class="left"><strong><h4>My Evrica</h4></strong>
            <p>
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            </span>
            </li>
		<li class="slider1Image">
			<a href=""><img src="<?php echo $this->Html->url('/img/img2.jpg'); ?>" alt="2" /></a>
			<span class="right"><strong><h4>Strategy in Delivery</h4></strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></span></li>
		<li class="slider1Image">
			<img src="<?php echo $this->Html->url('/img/img3.jpg'); ?>">
			<span class="left"><strong><h4>We Cover Africa</h4></strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></span>
        </li>
         <li class="slider1Image">
			<img src="<?php echo $this->Html->url('/img/img4.jpg'); ?>">
			<span class="left"><strong>Dedicated to you</strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></span>
        </li>   
		<div class="clear slider1Image"></div>
		</ul>
		</div>
    </div>
	
  </div>
                    <div class="clear">&nbsp;</div>
                    

    <div class="wrap">
    <div class="opac">
		<div class="leftside">
			<div class="note blue rounded">
				<h4><img src="<?php echo $this->Html->url('/img/categories.png'); ?>" border="0"/></h4>
                	<ul>
                   	  <li>Agriculture</li>
                        <li>Announcement &amp; Events</li>
                        <li>Automobile</li>
                        <li>Banking</li>
                        <li>Energy</li>
                        <li>Entertainment</li>
                        <li>Health</li>
                        <li>Information Technology</li>
              </ul>
                    <span class="readmore">more +</span>
		  </div>
		</div>
    
		<div class="centerside">
        	<div class="ggl"><img src="<?php echo $this->Html->url('/img/google_ads.png'); ?>" /></div>
			<div class="note blue rounded">
				<h4><img src="<?php echo $this->Html->url('/img/upcoming.png'); ?>" width="172" height="33" border="0"/></h4>
                <ul>
                   	  <li>
                        	<div class="evt">
                                <div class="evtName">Event &raquo; Garage48</div>
                                <div class="catDate">Category &raquo; ICT May 13th-15th, 2011. <span class="readmore">more +</span>
                                
                                </div>
                            </div>
                        </li>
                        
                        <li>
                        	<div class="evt">
                                <div class="evtName">Event &raquo; Garage48</div>
                                <div class="catDate">Category &raquo; ICT May 13th-15th, 2011. <span class="readmore">more +</span></div>
                            </div>
                        </li>
                        
                        <li>
                        	<div class="evt">
                                <div class="evtName">Event &raquo; Garage48</div>
                                <div class="catDate">Category &raquo; ICT May 13th-15th, 2011. <span class="readmore">more +</span>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                        	<div class="evt">
                                <div class="evtName">Event &raquo; Garage48</div>
                                <div class="catDate">Category &raquo; ICT May 13th-15th, 2011. <span class="readmore">more +</span>
                               
                                </div>
                            </div>
                        </li>
                    </li>
              </ul>
		  </div>
		 </div>
    
		<div class="rightside">
        	<div class="signup"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('signup','','images/signupII.png',1)"><img src="images/signup.png" alt="Sign Up" name="signup" width="155" height="44" border="0" id="signup" /></a></div>
			<div class="login">
				<form name="auth" action="" method="post">
                	<fieldset>
                    	<legend><img src="<?php echo $this->Html->url('/img/login_img.png'); ?>" width="170" height="32" border="0"/></legend>
                	<label>Email Address</label>
                    <input type="text" name="email" class="input" />
                    <label>Password</label>
                    <input type="password" name="pword" class="input" />
                    <div class="clear">&nbsp;</div>
                    Forgort Password? <input type="submit" name="submit" class="btt" value="Sign in" />
                    </fieldset>
                </form>
			</div>
		</div>
    </div>
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