<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
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
  <div class="gmap" style="display:block;float:right; width:300px;margin-left:20px;margin-bottom: 20px;">
      <?php
if($eventInfo['Event']['event_logo_url']){

    
echo $this->Html->image("/uploads/logos/{$eventInfo['Event']['event_logo_url']}",array('width'=>300));
    
    
}

?>

      <div id="map_canvas" style="width: 300px; height: 300px;border:1px solid #888">
        Loading Map. Please wait...
      </div>
      
      
  </div>

<div class="fullevents" style="text-align:justify;">
    <b>Publisher:</b> <?php echo $eventInfo['Event']['event_company']; ?> <br />
    <b>Total seat:</b> <?php echo $eventInfo['Event']['total_seats']; ?>
  <p><b>Start Date:</b> <?php echo $eventInfo['EvDate']['start_date']; ?>  :  <b>End Date:</b><?php echo $eventInfo['EvDate']['end_date']; ?></p>
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
 
    <div class="actions">
        <ul>
            <li>
                <?php echo $this->Html->link('Edit Event',"editEvent/$eventId"); ?>
                <?php echo $this->Html->link('View Participants List',"viewParticipants/$eventId"); ?>
            </li>
        </ul>
    </div>
  
<div class="related">
	<h3><?php __('Related Event Images');?></h3>
	<?php if (!empty($eventInfo['EventImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Photo Url'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventImage'] as $eventInfoImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoImage['id'];?></td>
			<td><?php echo $eventInfoImage['event_id'];?></td>
			<td><?php echo $eventInfoImage['name'];?></td>
			<td><?php echo $eventInfoImage['description'];?></td>
			<td><?php echo $eventInfoImage['sort_order'];?></td>
			<td><?php echo $eventInfoImage['photo_url'];?></td>
			<td><?php echo $eventInfoImage['active'];?></td>
			<td><?php echo $eventInfoImage['created'];?></td>
			<td><?php echo $eventInfoImage['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_images', 'action' => 'view', $eventInfoImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_images', 'action' => 'edit', $eventInfoImage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_images', 'action' => 'delete', $eventInfoImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Event Image', true), array('controller' => 'event_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Seats');?></h3>
	<?php if (!empty($eventInfo['EventSeat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Total Seats'); ?></th>
		<th><?php __('Fee'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventSeat'] as $eventInfoSeat):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoSeat['id'];?></td>
			<td><?php echo $eventInfoSeat['event_id'];?></td>
			<td><?php echo $eventInfoSeat['name'];?></td>
			<td><?php echo $eventInfoSeat['description'];?></td>
			<td><?php echo $eventInfoSeat['total_seats'];?></td>
			<td><?php echo $eventInfoSeat['fee'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_seats', 'action' => 'view', $eventInfoSeat['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_seats', 'action' => 'edit', $eventInfoSeat['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_seats', 'action' => 'delete', $eventInfoSeat['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoSeat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Event Seat', true), array('controller' => 'event_seats', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Speakers');?></h3>
	<?php if (!empty($eventInfo['EventSpeaker'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Profile'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventSpeaker'] as $eventInfoSpeaker):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoSpeaker['id'];?></td>
			<td><?php echo $eventInfoSpeaker['event_id'];?></td>
			<td><?php echo $eventInfoSpeaker['name'];?></td>
			<td><?php echo $eventInfoSpeaker['profile'];?></td>
			<td><?php echo $eventInfoSpeaker['sort_order'];?></td>
			<td><?php echo $eventInfoSpeaker['created'];?></td>
			<td><?php echo $eventInfoSpeaker['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_speakers', 'action' => 'view', $eventInfoSpeaker['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_speakers', 'action' => 'edit', $eventInfoSpeaker['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_speakers', 'action' => 'delete', $eventInfoSpeaker['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoSpeaker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php 
                        //echo $this->Html->link(__('New Event Speaker', true), array('controller' => 'event_speakers', 'action' => 'add'));
                        ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	 
</div> 
    <script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAZz9OUXAp4931Hx1ucTYu4xRkvmT_3GFeETHWAyZ-loBPdQqlexRM5wdmzhWmkMomdIHkPe5HYfHcXA" type="text/javascript"></script>

    <script>
        
        
        
        $(function() {
               initialize();

	});
     
        
        </script>