<?php echo $html->docType();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Evrica Events :: Events Hub for Africa!</title>
        <link rel="shortcut icon" href="images/favicon.png"/>
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/img/favicon.png'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/css/bare.cake.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/css/styles.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url('/css/ui-lightness/jquery-ui-1.8.12.custom.css'); ?>" />


        <script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-1.5.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo $this->Html->url('/js/jquery-ui-1.8.12.custom.min.js'); ?>"></script>
        <?php if ($this->name == 'Pages') {
 ?>
            <script type="text/javascript" src="<?php echo $this->Html->url('/js/s3Slider.js'); ?>"></script>
             
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
</script><script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>

    </head>
    <body>
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

                    <li><a href="<?php echo $this->Html->url('/'); ?>">Home</a></li>

                    <li><a href="<?php echo $html->url('/pages/about');?>">About Evrica</a></li>
 <li><a href="<?php echo $html->url('/pages/services');?>">Services</a>
                    </li>
                    <li><a href="#">Find Events</a></li>

                    <!--<li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Web Management</a></li>
                            <li><a href="#">Database Management</a></li>
                            <li><a href="#">Graphic Designers</a></li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                    </li>-->

                    <li><a href="#">FAQ</a></li>

                    <li><a href="#">Contact Us</a></li>

                </ul>
            </div>


            <div class="wrap">

                <div id="content">

<?php echo $this->Session->flash(); ?>

                    <?php echo $content_for_layout; ?>
                </div>
            
                <div class="clear">&nbsp;</div>
                <div class="clear">&nbsp;</div>

            <div class="clear" style="padding-left:30px;"><img src="<?php echo $this->Html->url('/img'); ?>/garage.jpg" width="150" height="38" />
                <img src="<?php echo $this->Html->url('/img'); ?>/google.png" width="100" height="35" /> <img src="<?php echo $this->Html->url('/img'); ?>/nokia.jpg" width="100" height="45" /> <img src="<?php echo $this->Html->url('/img'); ?>/blackberry.jpg" width="125" height="26" /></div>
                <div class="clear">&nbsp;</div>
                <div class="clear">&nbsp;</div>
</div>


        <div class="footer">
            <div class="wrapfoot">
                <div class="siteinfo">
                    <a href="<?php echo $this->Html->url('/');?>">Home</a>
                    <a href="<?php echo $this->Html->url('/pages/about');?>">About Evrica</a>
                     <a href="<?php echo $html->url('/pages/services');?>">Services</a>

                    <a href="">Find Events</a>
                    
                    <a href="">FAQ</a>
                    <a href="">Contact Us</a>
<?php echo $this->Html->link('Manage Events', "/ManageEvents/index"); ?>

                </div>
                <div class="team"></div>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
        </div>
    </body>
</html>
