<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */


?>
<script type="text/javascript">

    var map = null;
    var geocoder = null;

    function initialize() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map_canvas"));
          map.setUIToDefault();
        //map.setCenter(new GLatLng(3.4165641,6.4418316), 13);
        //map.setZoom(23);
        geocoder = new GClientGeocoder();
      }

      <?php
	  $address = $eventInfo['Event']['address'];
	  
	  
      $address = ucwords($address. ' Nigeria');
      ?>
      showAddress('<?php echo $address; ?>');
    }

    function showAddress(address) {
      if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              //alert(address + " is currently unavailable on our maps.");
            } else {
              map.setCenter(point, 15);
              var marker = new GMarker(point);
              map.addOverlay(marker);
              marker.openInfoWindowHtml(address);
            }
          }
        );
      }
    }
    </script>

<div style="font-size:16px;font-weight:bold;border:2px dotted #fff;background:#ddd;padding:6px 8px;margin-bottom:6px;">
    <?php echo $eventInfo['Event']['name']; ?>
    
</div>
  <div class="bigButton">
        <?php echo $this->Html->link('Register',"register/{$eventInfo['Event']['id']}",array('class'=>'bigButton')); ?>
    </div>
    
    <div class="gmap" style="display:block;float:right; width:300px;margin-left:20px;margin-bottom: 20px;">
      <?php
if($eventInfo['Event']['event_logo_url']){

    
echo $this->Html->image("/uploads/logos/{$eventInfo['Event']['event_logo_url']}",array('width'=>300));
    
    
}

?>

      <div id="map_canvas" style="width: 300px; height: 300px;border:1px solid #888">
        Loading Map. Please wait ...
      </div>
      
      
  </div>

<div class="fullevents" style="text-align:justify;">
    <b>Publisher:</b> <?php echo $eventInfo['Event']['event_company']; ?> <br />
    <b>Total seat:</b> <?php echo $eventInfo['Event']['total_seats']; ?>
  <p><b>Start Date:</b> 
  
  <?php echo date('l M dS',strtotime($eventInfo['EvDate']['start_date'])); 
if($eventInfo['EvDate']['start_date']!=$eventInfo['EvDate']['end_date']){
    echo ' to ' .date('l M dS, Y',strtotime($eventInfo['EvDate']['end_date']));
}

?>
  
  </p>
  <p><b>Categories:</b> <?php
		$i = 0;
		foreach ($eventInfo['Category'] as $category):
			
		?>
			
			<?php echo $category['name'];?>,
	<?php endforeach; ?>
  </p>
  <p><b>Tags:</b>
  <?php
		$i = 0;
		foreach ($eventInfo['Tag'] as $category):
			
		?>
			
			<?php echo $category['name'];?>,
	<?php endforeach; ?>
  </p>
  <p>
      <?php echo $eventInfo['Event']['description']; ?>
  </p>
   <p><B>Location:</B> <?php echo $eventInfo['Event']['address']; ?></p>
   <p><B>Event Website:</B> <?php echo $this->Html->link($eventInfo['Event']['event_url'],$eventInfo['Event']['event_url'],true); ?></p>
  </div>
 
      
    <script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAZz9OUXAp4931Hx1ucTYu4xRkvmT_3GFeETHWAyZ-loBPdQqlexRM5wdmzhWmkMomdIHkPe5HYfHcXA" type="text/javascript"></script>

    <script>
        
        
        
        $(function() {
               initialize();

	});
     
        
        </script>