<div class="panelLeft">
    	<div class="note blue rounded">
        	<h4 class="white"><b>Hi, <?php echo $userInfo['User']['firstname'].' '.$userInfo['User']['lastname']; ?></b></h4>

                <a href="#">Account Settings</a><br />
                <a href="<?php echo $html->url('/users/logout')?>">Logout</a>
        </div>
    </div>


    <div class="panelRight">
    	<strong class="faqsize">Dashboard</strong>
    	<div class="dashb">
	    <a href="<?php echo $this->Html->url('/ManageEvents'); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('My Event','','<?php echo $html->url('/img');?>/myEventii.png',1)">
                <img src="<?php echo $html->url('/img');?>/myEvent.png" alt="My Event" name="My Event" width="94" height="99" border="0" id="My Event" />
            </a>  
            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('View Events','','<?php echo $html->url('/img');?>/viewEvntsii.png',1)">
                <img src="<?php echo $html->url('/img');?>/viewEvnts.png" alt="View Events" name="View Events" width="100" height="86" border="0" id="View Events" />
            </a> 
            <a href="<?php echo $this->Html->url('myEvents'); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('My Participation','','<?php echo $html->url('/img');?>/myparticipationii.png',1)">
                <img src="<?php echo $html->url('/img');?>/myparticipation.png" alt="My Participation" name="My Participation" width="121" height="83" border="0" id="My Participation" />
            </a> 
            <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('My Profile','','<?php echo $html->url('/img');?>/myProfileii.png',1)">
                <img src="<?php echo $html->url('/img');?>/myProfile.png" alt="My Profile" name="My Profile" width="102" height="88" border="0" id="My Profile" /></a>
        </div>
    </div>
  <div class="clear">&nbsp;</div>