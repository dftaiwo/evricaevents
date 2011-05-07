<?php

/**
 * Created by Femi TAIWO
 * dftaiwo@gmail.com
 */

?>
<div class="form">
<?php echo $this->Form->create('Event',array('type'=>'file', 'url'=> isset($eventId)? "editEvent/$eventId" : 'createEvent')); ?>
<fieldset>
    <legend><img src="<?php echo $this->Html->url('/img/create_events.png'); ?>" width="162" height="40" /></legend>
<?php

      echo $this->Form->input('name',array('class'=>'input','label'=>'Event Name','div'=>false));
      echo $this->Form->input('description',array('type'=> 'textarea','class'=>'input','div'=>false));
      echo $this->Form->input('EventDate.start_date',array('type'=> 'text','id'=>'EventDateStart','class'=>'rst','div'=>false,'value'=>isset($eventInfo['EvDate']['start_date']) ? $eventInfo['EvDate']['start_date']:''  ));
      echo $this->Form->input('EventDate.end_date',array('type'=> 'text','id'=>'EventDateEnd','class'=>'rst','div'=>false,'value'=>isset($eventInfo['EvDate']['end_date']) ? $eventInfo['EvDate']['end_date']:''  ));
      echo $this->Form->input('Category',array('class'=>'input','div'=>false));
      echo $this->Form->input('Tag',array('class'=>'input','div'=>false));
      echo $this->Form->input('is_free',array('type'=>'checkbox','label'=>'Are Participants Required to Pay to Attend?','div'=>false));
      echo $this->Form->input('is_private',array('type'=>'checkbox','label'=>'Hide the Event from the Search Engine/Public View','div'=>false));
      echo $this->Form->input('country_id',array('label'=>'Event Location - Country','class'=>'input','div'=>false));
      echo $this->Form->input('state_id',array('label'=>'Event Location - State','class'=>'input','div'=>false));
      echo $this->Form->input('address',array('class'=>'input','div'=>false));
//      echo $this->Form->input('gps_coords');
      echo $this->Form->input('event_url',array('class'=>'input','div'=>false));
//      echo $this->Form->input('event_slug',array('class'=>'input'));
      echo $this->Form->input('event_company',array('label'=>"Organizer's Name",'class'=>'input','div'=>false));
      echo $this->Form->input('event_company_info',array('label'=>"Organizer's Profile",'type'=>'textarea','class'=>'input','div'=>false));
      echo $this->Form->input('total_seats',array('class'=>'rst','div'=>false));
      echo $this->Form->input('event_logo',array('type'=>'file','class'=>'rst','div'=>false));
      echo $this->Form->input('active',array('type'=>'checkbox','label'=>'Active?','div'=>false));
?>

<?php echo $this->Form->submit('Next!'); ?>
<?php echo $this->Form->end(); ?>


</fieldset>
</div>

<div class="alignright">
    	<div class="note blue rounded">

        	<img src="<?php echo $this->Html->url('/img'); ?>/tos.png" width="205" height="33" border="0" />
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


<script>
	$(function() {
            $( "#EventDateStart" ).datepicker();
            $( "#EventDateStart" ).datepicker("option", "dateFormat", 'yy-mm-dd');
            $( "#EventDateEnd" ).datepicker();
            $( "#EventDateEnd" ).datepicker("option", "dateFormat", 'yy-mm-dd');

            <?php if(isset($eventInfo['EvDate']['start_date'])){ ?>
                    $( "#EventDateStart" ).val('<?php echo $eventInfo['EvDate']['start_date']; ?>');
                    $( "#EventDateEnd" ).val('<?php echo $eventInfo['EvDate']['end_date']; ?>');

             <?php  } ?>

	});
</script>