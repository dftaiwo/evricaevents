<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */

?>
<?php echo $this->Form->create('Event',array('type'=>'file', 'url'=> isset($eventId)? "editEvent/$eventId" : 'createEvent')); ?>

<?php

      echo $this->Form->input('name');
      echo $this->Form->input('description',array('type'=> 'textarea'));
      echo $this->Form->input('EventDate.start_date',array('type'=> 'text','id'=>'EventDateStart'));
      echo $this->Form->input('EventDate.end_date',array('type'=> 'text','id'=>'EventDateEnd'));
      echo $this->Form->input('Category');
      echo $this->Form->input('Tag');
      echo $this->Form->input('is_free',array('type'=>'checkbox','label'=>'Are Participants Required to Pay to Attend?'));
      echo $this->Form->input('is_private',array('type'=>'checkbox','label'=>'Hide the Event from the Search Engine/Public View'));
      echo $this->Form->input('country_id',array('label'=>'Event Location - Country'));
      echo $this->Form->input('state_id',array('label'=>'Event Location - State'));
      echo $this->Form->input('address');
//      echo $this->Form->input('gps_coords');
      echo $this->Form->input('event_url');
      echo $this->Form->input('event_slug');
      echo $this->Form->input('event_company',array('label'=>"Organizer's Name"));
      echo $this->Form->input('event_company_info',array('label'=>"Organizer's Profile",'type'=>'textarea'));
      echo $this->Form->input('total_seats');
      echo $this->Form->input('event_logo',array('type'=>'file'));
      echo $this->Form->input('active',array('type'=>'checkbox','label'=>'Active?'));
?>

<?php echo $this->Form->submit('Next!'); ?>
<?php echo $this->Form->end(); ?>

<script>
	$(function() {
		$( "#EventDateStart" ).datepicker("option", "dateFormat", 'yy-mm-dd');
		$( "#EventDateEnd" ).datepicker("option", "dateFormat", 'yy-mm-dd');
	});
	</script>