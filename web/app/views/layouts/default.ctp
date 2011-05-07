<?php  echo $html->docType();?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<title>Evrica Events :: <?php  echo $title_for_layout ; ?> </title>
<?php echo $html->meta('keywords',null,array('content'=>'Evrica,Events'));?>
 <?php echo $html->meta(array('name'=>'developers','content'=>'Garage 48 Lagos Team 10.'));?>
<link rel="shortcut icon" href="<?php echo $html->url('/img/favicon.jpg');?>"/>
<link rel="stylesheet" href="<?php echo $html->url('/css/styles.css');?>" type="text/css" />

<script type="text/javascript">

</script>
  
</head>
<body>
 
    <?php  echo $content_for_layout;?>
 
    <div class="clear">&nbsp;</div>
     

 
<div class="footer">
	
</div>




</body>

</html>
 