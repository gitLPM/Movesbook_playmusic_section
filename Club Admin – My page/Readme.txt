Task:
	Club Admin – My page 
	
=====> C:\wamp\www\movesbook\app\View\Clubs\editclubinfo.ctp

			  <!-- ZST Add New row for "Region" section Start !--->
			<div class="pprfield_row">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="ppr_fieldleft">
							<div class="ppr_fieldtitle"><?php echo $langs['Region']; ?></div>
						</td>
						<td class="ppr_fieldright">
							<div class="ppr_fieldcontent">                        
							<div class="editselect_field cc_field su_fd_select">
							<?php echo $this->Form->input('User.state_id', array('label' => false, 'div' => false, 'selected' => $this->Session->read('Auth.User.state_id'))); ?>
							</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!-- ZST Add New row for "Region" section End !--->
			
			 <!-- ZST Add new row for "Sport" Section Start !--->
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Sport']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="custom-select select100">
                            <?php echo $this->Form->input('User.sport_id', array('label' => false, 'div' => false, 'selected' => $this->Session->read('Auth.User.sport_id'))); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "Sport" Section End !--->
				
		
			 Whatsapp, Instagram, You tube, Google map, Blog site,Linkedin ---> Fields are added code in Word document.
			 
		Database Update:
			
			-->Table Name: usertypes
			
			  role_id -- 8; title = Club admin
			  role_id -- 8; title = Club owner
			  role_id -- 8; title = CEO
			  role_id -- 8; title = President
			  role_id -- 8; title = Director
			  role_id -- 8; title = General Manager
			  role_id -- 8; title = Manager
			  
		Database Update:
			
			-->Table Name: languages
			
			   Add translations for : Whatsapp, Instagram, You tube, Google map, Blog site,Linkedin 


