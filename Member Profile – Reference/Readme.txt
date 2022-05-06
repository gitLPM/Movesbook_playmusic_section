C:\wamp\www\movesbook\app\View\Clubs\club_member_profile.ctp
	
	
======> C:\wamp\www\movesbook\app\View\Elements\club\club_newmember_tab_edit.ctp

		
		---->	// ZST Edit  From 
				$member_references = "";
				
				
			
		---->	else if ($params["action"] == "club_member_references") {
				$member_references = "active";
					// $id="";
				}
				
				
		---->	<li>
				<?php
				
				echo $this->Html->link("References", array("controller" => "clubs", "action" => "new_member_references_edit", $id), array('class' => $member_references));
				?>
				</li>
			
=====>C:\wamp\www\movesbook\app\View\Clubs\new_member_otherdetails_edit.ctp

		 Remove Below Code :-
		---------------------
			   <div class="vip-section">
            <h3>Refrences</h3>
            <div class="reference-ck">
                <?php
                echo $this->Form->input('MemberOtherdetail.reference', array('type' => 'textarea', 'class' => 'ckeditor', 'label' => false, 'div' => array('class' => '')));
                ?>
            </div>
            <div class="vip-star">
                <div class="col-30">Reference level</div>
                <div class="col-30">
                    <div class="custom-select">
                        <?php
                        $referenceLevelArray = array(1 => 'First ', 2 => 'Second', 3 => 'Third', 4 => 'Fourth', 5 => 'Fifth', 6 => 'Sixth');
                        $TempreferenceLevelArray = array(1 => '<img src="' . $this->webroot . 'img/star-small.png">');
                        echo $this->Form->input('MemberOtherdetail.reference_level', array('options' => $referenceLevelArray, 'label' => false, 'div' => false, 'escape' => false));
                        ?>
                    </div>
                </div>

                <div class="col-30">

                    <img src="<?= $this->webroot; ?>img/vip-start.jpg">
                </div>

            </div>
            <div class="clear"></div>
        </div>
		
		
		Add To:--
		--------
		<div class="savecancel">
            <p>“I permit to display my photo in the ‘last logged’ option in the VIP banner”</p>
            <div class="text-center mt-10 mb-10">

                <?php echo $this->Form->input($langs['Save'], array('type' => 'button', 'id' => '', 'class' => 'btn-red', 'onclick' => 'return(submit_memeber())', 'div' => false, 'label' => false, 'name' => 'submit', 'value' => 'submit')); ?>
                <?php echo $this->Form->input("Skip", array('type' => 'button', 'id' => '', 'class' => 'btn-red', 'label' => false, 'name' => 'skip', 'div' => false, 'value' => 'skip')); ?>

                <!--<button type="submit" name="submit" class="btn" onclick="onclick=>return(submit_memeber())" id="submit_form">Save</button>        
                                <button type="submit" name="skip" class="btn" id="submit_form">Skip</button>        -->
            </div>
        </div>
		
=====> C:\wamp\www\movesbook\app\Controller\ClubsController.php

		new_member_references_edit
		
		public function new_member_references_edit(){
		.....}

=====> C:\wamp\www\movesbook\app\View\Clubs\new_member_references_edit.ctp
