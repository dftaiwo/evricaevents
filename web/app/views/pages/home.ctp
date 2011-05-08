<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
  <div class="abtev">
        	<p class="dropcap">W<strong>hy Evrica? <br/></strong> <img src="<?php echo $this->Html->url('/img/img_index.jpg'); ?>" width="130" height="159" class="image_right"/> is an online event Management hub for africa and events  around africa.<br/>

                    Evrica helps to reduce time and expense required to manage events such as conferences, competitions, trade shows, training seminars, travel, press tours and customer briefings,  events publicity and  participation management.
                    <span class="readmore"> <a href="<?php echo $html->url('/pages/services'); ?>">more + </a></span> </p>

    </div>
   	<div class="slideshow">
		<div id="slider1">
		<ul id="slider1Content">
		<li class="slider1Image">
			<a href=""><img src="<?php echo $this->Html->url('/img/img1.jpg'); ?>" alt="1" /></a>
			<span class="left"><strong><h4>My Evrica</h4></strong>
            <p>
            This tool helps you create your event, track and manage event(s) variables like ticketing, seats/slots and participants etc.
            </p>
            </span>
            </li>
		<li class="slider1Image">
			<a href=""><img src="<?php echo $this->Html->url('/img/img2.jpg'); ?>" alt="2" /></a>
			<span class="right"><strong><h4>Strategy in Delivery</h4></strong>
            <p>
               The Evrica Strategy is to create a platform where you can freely create your event and provide details of timing, speakers, location in africa,publicise your event wall, and a one-off publicity on your social media network(s) wall (s).
            </p></span></li>
		<li class="slider1Image">
			<img src="<?php echo $this->Html->url('/img/img3.jpg'); ?>">
			<span class="left"><strong><h4>We Cover Africa</h4></strong>
            <p>
               Evrica is indeed a pilot test project (startup) and we do intend to cover africa and provide a genuine hub where you follow events happening across industries and organizations in and around Africa
            </p></span>
        </li>
         <li class="slider1Image">
			<img src="<?php echo $this->Html->url('/img/img4.jpg'); ?>">
			<span class="left"><strong>Dedicated to you</strong>
            <p>
                Our Commitment to you is unparalleled.
            </p></span>
        </li>
		<div class="clear slider1Image"></div>
		</ul>
		</div>
    </div>

  </div>
                    <div class="clear">&nbsp;</div>


    <div class="wrap">
     	<div class="listcountry">
		<div class="note blue rounded">
        <img src="<?php echo $html->url('/img');?>/event_country.png" width="200" height="30" alt="Events By Country" />
        <div class="clear">&nbsp;</div>
<div class="listL">
			<div class="listLB">
			<a href="">Angola</a>                                                                                       
<a href="">Benin</a>
<a href="">Botswana</a>
<a href="">Burkina Faso</a>
<a href="">Burundi</a>

<a href="">Cameroon</a>
<a href="">Cape Verde</a>

		  </div>
		  


			<div class="listRs">
			<a href="">Central African Republic</a>
<a href="">Chad</a>
			<a href="">Democratic Republic of Congo</a>
<a href="">Republic of Congo</a>
<a href="">Cote d'Ivoire</a>
<a href="">Djibouti</a>
		<a href="">Egypt</a>
<a href="">Equatorial Guinea</a>
<a href="">Eritrea</a>

			</div>
		  </div>
		  
		 <div class="listC">
<a href="">Ethiopia</a>
<a href="">Gabon</a>
<a href="">Gambia</a>
<a href="">Ghana</a>
<a href="">Guinea</a>
<a href="">Guinea Bissau</a>
<a href="">Kenya</a>
<a href="">Lesotho</a>

		</div>
		
		<div class="listRL">
			<div class="listL">
<a href="">Liberia</a>
<a href="">Madagascar</a>
<a href="">Malawi</a>
<a href="">Mali</a>
<a href="">Mauritania</a>
<a href="">Mauritius</a>
<a href="">Morocco</a>
<a href="">Mozambique</a>
				<a href="">Libya</a>


<a href="">Namibia</a>


			</div>
			<div class="listRn">
			<a href="">Niger</a>
<a href="">Nigeria</a>
<a href="">Reunion</a>
			<a href="">Rwanda</a>
 <a href="">Seychelles</a>
<a href="">Somalia</a>
			<a href="">Sierra Leone</a>
<a href="">South Africa</a>
		<a href="">Senegal</a>

			<div style="float:right; width:47%; margin-top:-185px;">
			<a href="">South Sudan</a>
<a href="">Sudan</a>
<a href="">Swaziland</a>
<a href="">Tanzania</a>
<a href="">Togo</a>
<a href="">Tunisia</a>
<a href="">Uganda</a>
<a href="">Zambia</a>
<a href="">Zimbabwe</a>
			</div>
			
		</div>
		<div class="clear">&nbsp;</div>
	  </div>
	</div>

	<div class="leftside">
	<div class="note blue rounded">
		<h4><img src="<?php echo $html->url('/img');?>/categories.png" border="0"/></h4>
			<ul>
			   <?php foreach($mainCategories as $catId => $catName){ ?>
                        <li><?php echo $this->Html->link($catName,"#/Evrivents/search/:category_id=$catId"); ?></li>
                       <?php } ?>
	  </ul>
			<span class="readmore">more +</span>
  </div>
</div>

<div class="rightside">
			        	<!-- <div class="ggl"><img src="<?php echo $html->url('/img');?>/google_ads.png" /> <BR /><strong>UNDER CONSTRUCTION</strong></div> -->
			<div class="note blue rounded">
				<h4><img src="<?php echo $html->url('/img');?>/upcoming.png" width="172" height="33" border="0"/></h4>
                <ul>
                   	  <?php foreach($events as $event){ ?>
                   	  <li>
                        	<div class="evt">
                                <div class="evtName"><?php echo $this->Html->link($event['Event']['name'],"/evrivents/viewEvent/{$event['Event']['id']}"); ?></div>
                                <div class="catDate">Category &raquo; *** <?php echo date('M dS',strtotime($event['EvDate']['start_date'])); ?><?php if($event['EvDate']['start_date']!=$event['EvDate']['end_date']){?> - <?php echo date('dS',strtotime($event['EvDate']['end_date'])); }?>. <a href="<?php echo $this->Html->url("/evrivents/viewEvent/{$event['Event']['id']}"); ?>"><span class="readmore">+ more</span></a>

                                </div>
                            </div>
                        </li>
                        <?php } ?>
                        

              </ul>
                                <?php echo $this->Html->link('Browse Events',"/Evrivents"); ?>
		  </div>
		</div>

    <div class="clear">&nbsp;</div>
	
		
    </div>

    