<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
  <div class="abtev">
        	<p class="dropcap">W<strong>hy Evrica? <br/></strong> <img src="<?php echo $this->Html->url('/img/img_index.jpg'); ?>" width="130" height="159" class="image_right"/> is an online event Management hub for africa and events  around africa.<br/>

                    Evrica helps to reduce time and expense required to manage events such as conferences, competitions, trade shows, training seminars, travel, press tours and customer briefings,  events publicity and  participation management.
                    <span class="readmore"> more + </span> </p>

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
    <div class="opac">
		<div class="leftside">
			<div class="note blue rounded">
				<h4><img src="<?php echo $this->Html->url('/img/categories.png'); ?>" border="0"/></h4>
                	<ul>
                   	 <?php foreach($mainCategories as $catId => $catName){ ?>
                        <li><?php echo $this->Html->link($catName,"#/Evrivents/search/:category_id=$catId"); ?></li>
                       <?php } ?>
              </ul>
                    <span class="readmore">
                        more +</span>
		  </div>
		</div>

		<div class="centerside">
                    
        	<div class="ggl">
                    <img src="<?php echo $this->Html->url('/img/google_ads.png'); ?>" /></div>
			<div class="note blue rounded">
				<h4><img src="<?php echo $this->Html->url('/img/upcoming.png'); ?>" width="172" height="33" border="0"/></h4>
                <ul><?php foreach($events as $event){ ?>
                   	  <li>
                        	<div class="evt">
                                <div class="evtName"><?php echo $this->Html->link($event['Event']['name'],"/evrivents/viewEvent/{$event['Event']['id']}"); ?></div>
                                <div class="catDate">Category &raquo; *** <?php echo date('M dS',strtotime($event['EvDate']['start_date'])); ?><?php if($event['EvDate']['start_date']!=$event['EvDate']['end_date']){?> - <?php echo date('dS',strtotime($event['EvDate']['end_date'])); }?>. <a href="<?php echo $this->Html->url("/evrivents/viewEvent/{$event['Event']['id']}"); ?>"><span class="readmore">+ more</span></a>

                                </div>
                            </div>
                        </li>
                        <?php } ?>
                         
                    </li>
              </ul>
		  </div>
		 </div>

		<div class="rightside">
        	<div class="signup"><a href="<?php echo $this->Html->url('/users/add')?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('signup','',<?php echo $this->Html->url('/img/')?>+'signupII.png',1)"><img src="<?php echo $this->Html->url('/img/')?>signup.png" alt="Sign Up" name="signup" width="155" height="44" border="0" id="signup" /></a></div>
			<div class="login">
				<?php  echo $form->create('User', array('action'=>'login'));?>
                	<fieldset>
                    	<legend><img src="<?php echo $this->Html->url('/img/login_img.png'); ?>" width="170" height="32" border="0"/></legend>
                	<label>Email Address</label>
                    <?php echo $form->text('User.email',array('class'=>'input'));?>
                    <label>Password</label>
                   <?php echo $form->password('User.password',array('class'=>'input'));?>
                    <div class="clear">&nbsp;</div>
                    Forgort Password? <input type="submit" name="submit" class="btt" value="Sign in" />
                    </fieldset>
                <?php  echo $form->end();?>
			</div>
		</div>
    </div>
    </div>