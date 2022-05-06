<?php

$params = $this->params;
$other_details = "";
$member_profile = "";
$member_setting = "";
// ZST Edit  From 
$member_references = "";

if ($params["action"] == "new_member_otherdetails_edit") {
    $other_details = "active";
    
} else if ($params["action"] == "club_member_profile") {
    $member_profile = "active";
    // $id="";
}
else if ($params["action"] == "new_member_references_edit") {
    $member_references = "active";
    // $id="";
}
else  {
    $member_setting = "active";
}

?>


<div class="social_item_tabs mtop10">
    <ul>
        <li>
            <?php
            /*if(!empty($member_profile)){
               echo $this->Html->link("Member profile",array("controller"=>"clubs","action"=>"create_club_member"),array('class'=>$member_profile));
            }else{
                echo $this->Html->link("Member profile","JavaScript:void(0)",array('class'=>$member_profile));
            }*/
            echo $this->Html->link("Member profile", array("controller" => "clubs", "action" => "club_member_profile", $id), array('class' => $member_profile));
            ?>
        </li>
        <li>
            <?php
            /*if(!empty($other_details)){
                echo $this->Html->link("Other details",array("controller"=>"clubs","action"=>"new_member_otherdetails",$id),array('class'=>$other_details));
            } else {
                echo $this->Html->link("Other details","JavaScript:void(0)",array('class'=>$other_details));
            }*/
            
            echo $this->Html->link("Other details", array("controller" => "clubs", "action" => "new_member_otherdetails_edit", $id), array('class' => $other_details));
            ?>
        </li>
        <li>
            <?php
            /*if(!empty($member_setting)){
             
             echo $this->Html->link("Setting",array("controller"=>"clubs","action"=>"new_member_additional_setting",$id),array('class'=>$member_setting));
            }else{
             echo $this->Html->link("Setting","JavaScript:void(0)",array('class'=>$member_setting));
            }*/
            
            echo $this->Html->link("Setting", array("controller" => "clubs", "action" => "new_member_additional_setting_edit", $id), array('class' => $member_setting));
            ?>
        </li>

        <li>
            <?php
            
            echo $this->Html->link("References", array("controller" => "clubs", "action" => "new_member_references_edit", $id), array('class' => $member_references));
            ?>
        </li>

    </ul>
    <div class="clear"></div>
</div>