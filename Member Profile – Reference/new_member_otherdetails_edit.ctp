<?php
echo $this->element('club/club_newmember_tab_edit');
?>
<div class="clear"></div>
<?php echo $this->Form->create('MemberOtherdetail', array('type' => 'file', 'id' => 'single_user_registration_formID1', 'url' => array('action' => 'new_member_otherdetails_edit', 'controller' => 'clubs', $id))); ?>
<div class="mp-profile mtop10">
    <?php echo $this->Form->input('MemberOtherdetail.id', array('type' => 'hidden', 'label' => false, 'div' => false, 'id' => 'id')); ?>
    <!--left section start-->
    <div class="mp-pro-left">

        <div class="proleftleft">
            <div class="click-to-change-box">
                <?php echo $this->Html->image("profile_images/" . $userImage, array('id' => "blah")); ?>
                <a href="JavaScript:void(0)" class="click-to-change" id="open_browser1">
                    <span>Click here <br> to change photo</span>
                </a>
            </div>
            <div class="photo-img">
                <div class="take-photo">
                    <?php echo $this->Html->image("photoshop.jpg"); ?>
                    <!--<img src="<?= $this->webroot; ?>img/profile_images/no_image_found.jpg" alt="">-->
                    <div style="display:none">
                        <?php echo $this->Form->input('User.image', array('type' => 'file', 'id' => 'member_photo', "onchange" => "readURL(this)")); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="proleftright">
            <div class="member-pay-col">
                <div class="mp-title">
                    Member pay for <a href="#" class="mp-link-menu">...</a>
                </div>
                <div class="mp-bor-bot"></div>
                <div class="mp-content">
                    <div class="mp-row">
                        <span class="mp-img"></span>
                        Name <br> Surname
                        <a class="mp-delete" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                    </div>
                    <div class="mp-row">
                        <span class="mp-img"></span>
                        Name <br> Surname
                        <a class="mp-delete" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="mp-bor-bot"></div>
                <div class="mp-footer">
                    <span class="mp-img"></span>
                    <a class="mp-add-new" href="#"><i class="fa fa-plus" aria-hidden="true"></i> Add new</a>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>


    </div>
    <!--left section start end-->
    <!--right section start-->
    <div class="mp-pro-right mt-10">
        <div class="ppro_form_bg">
            <div class="ppr_fieldtitle ppr-inner-title">Identification</div>

            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?= $langs['dynamic_user_qr_code']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div id="qrcode" class="d-flex d-flex-center"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Document</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('MemberOtherdetail.document', array('type' => 'text', 'label' => false, 'div' => false, 'id' => 'document_name')); ?>
                                </div>
                                <div class="validation" id="valid_document_name"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Name Day</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="custom-select11">
                                        <?php
                                        //$nameDay=array("andorra"=>"andorra");

                                        echo $this->Form->input('MemberOtherdetail.name_day', array(
                                            'type' => 'date', 'empty' => "select", 'div' => false, 'label' => false,
                                            'between' => '<div class="tab_select sel_mm">',
                                            'separator' => '</div><div class="tab_select sel_dd" >',
                                            'after' => '</div>',
                                            'minYear' => date('Y') - 100,
                                            'maxYear' => date('Y') - 1
                                        ));

                                        // echo $this->Form->input('MemberOtherdetail.name_day',array('type'=>'select','id'=>'name_day','label'=>false,'empty'=>'select option','div'=>false,'options'=>$nameDay));
                                        ?>
                                    </div>
                                    <div class="validation" id="valid_name_day"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Blood group</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input60">
                                        <?php echo $this->Form->input('MemberOtherdetail.blood_group', array('type' => 'text', 'id' => 'blood_group', 'label' => false, 'div' => false)); ?>
                                        <div class="validation" id="valid_blood_group"></div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Medical Examination</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input60">
                                        <?php echo $this->Form->input('MemberOtherdetail.medical_examination', array('type' => 'text', 'id' => 'medical_examination', 'label' => false, 'div' => false, 'maxlength' => '10')); ?>
                                        <div class="validation" id="valid_medical_examination"></div>
                                    </div>
                                    <div class="input30">
                                        Deadline
                                        <?php echo $this->Form->input('MemberOtherdetail.examination_exp_date', array('type' => 'text', 'id' => 'examination_exp_date', 'label' => false, 'div' => false, 'maxlength' => '10')); ?>
                                        <div class="validation" id="valid_examination_exp_date"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Outcome</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('MemberOtherdetail.out_come', array('type' => 'text', 'id' => 'out_come', 'label' => false, 'div' => false)); ?>
                                </div>
                                <div class="validation" id="valid_out_come"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ppr_fieldtitle ppr-inner-title">Last Membership to the Club</div>
            <div class="pprfield_row">
                <div class="pprfield_link">
                    <div class="ppr_fiellink"><a href="">Edit</a></div>
                    <div class="ppr_fiellink link-right"><a href="">Renew</a></div>
                </div>
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Membership</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input15 text-right"> from</div>
                                    <div class="input30">
                                        <?php echo $this->Form->input('MemberOtherdetail.membership_from', array('type' => 'text', 'id' => 'membership_from', 'label' => false, 'div' => false)); ?>
                                    </div>
                                    <div class="input15 text-right"> to</div>
                                    <div class="input30">
                                        <?php echo $this->Form->input('MemberOtherdetail.membership_to', array('type' => 'text', 'id' => 'membership_to', 'label' => false, 'div' => false)); ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clear"></div>
                <div class="ppr_redtext">
                    Last membership is not editable here, the data displayed will be loaded from the Archive of
                    Memberships related to the
                    current member If the operator edit these dates he will also modify the data in the archive of
                    membership. Making a renew
                    of membership these dates will be updated.
                </div>
            </div>
            <div class="ppr_fieldtitle ppr-inner-title">Privacy</div>
            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Privacy</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <label class="ppr-checkboxe">
                                        <?php
                                        echo $this->Form->input('MemberOtherdetail.data_treatment', array('id' => 'data_treatment', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                        ?>
                                        User authorizes data treatments
                                    </label>
                                    <label class="ppr-checkboxe">
                                        <?php
                                        echo $this->Form->input('MemberOtherdetail.persion_data', array('id' => 'persion_data', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                        ?>
                                        User authorizes Club’s admin to furnish personal data to third party firms</label>
                                </div>
                                <div class="validation" style="display:none">Please enter</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">User underage</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent input15">
                                    <label>
                                        <?php
                                        echo $this->Form->input('MemberOtherdetail.user_underage', array('id' => 'user_underage', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                        ?>Yes
                                    </label>
                                </div>
                                <div class="input60">
                                    <?php echo $this->Form->input('MemberOtherdetail.name_of_family', array('type' => 'text', 'label' => false, 'div' => false, 'maxlength' => '10')); ?>
                                </div>
                                <div class="validation" style="display:none">Please enter</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ppr_fieldtitle ppr-inner-title">Tutors</div>
            <div class="pprfield_row">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Vendors</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="ppr_yes"><label>
                                            <?php
                                            echo $this->Form->input('MemberOtherdetail.vendor_status', array('id' => 'vendor_status', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                            ?>
                                            Yes</label></div>
                                    <div class="ppr_yesfield">
                                        <div class="custom-select">
                                            <?php
                                            $nameDay = array("1" => "andorra");
                                            echo $this->Form->input('MemberOtherdetail.load_from_vendor', array('type' => 'select', 'label' => false, 'empty' => 'Select', 'div' => false, 'options' => $nameDay));
                                            ?>


                                        </div>
                                        <div class="ppr_commi">
                                            <label>
                                                <?php
                                                echo $this->Form->input('MemberOtherdetail.enable_commision', array('id' => 'enable_commision', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                                ?>
                                                Enable Commission
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ppr_max"><img src="<?= $this->webroot; ?>img/max.jpg"> Max 3</div>
                                </div>
                                <div class="validation" style="display:none">Please enter</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Coach</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="ppr_yes"><label>

                                            <?php
                                            echo $this->Form->input('MemberOtherdetail.coach_status', array('id' => 'coach_status', 'empty' => 'Select', 'div' => false, 'type' => 'checkbox', 'label' => false));
                                            ?>

                                            Yes</label></div>
                                    <div class="ppr_yesfield ">
                                        <div class="custom-select">
                                            <?php
                                            $nameDay = array("1" => 'andorra');
                                            echo $this->Form->input('MemberOtherdetail.load_from_coach', array('type' => 'select', 'label' => false, 'empty' => 'Select', 'div' => false, 'options' => $nameDay));
                                            ?>
                                        </div>

                                    </div>
                                    <div class="ppr_max"> Max 1</div>
                                </div>
                                <div class="validation" style="display:none">Please enter</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Insurance Company</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="ppr_company1">
                                        <?php echo $this->Form->input('MemberOtherdetail.insurance_company', array('type' => 'text', 'label' => false, 'div' => false)); ?>

                                    </div>
                                    <div class="ppr_company2">
                                        <div class="ppr_dead"> Deadline</div>
                                        <div class="ppr_emptyf">
                                            <?php echo $this->Form->input('MemberOtherdetail.insurance_deadline', array('type' => 'text', 'id' => 'insurance_deadline', 'label' => false, 'div' => false)); ?>

                                        </div>
                                        <div class="ppr_dotimg"><img src="<?= $this->webroot; ?>img/max.jpg"></div>
                                    </div>
                                </div>
                                <div class="validation" style="display:none">Please enter</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Badges Federation</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="ppr_company1">
                                        <?php echo $this->Form->input('MemberOtherdetail.badges_name', array('type' => 'text', 'label' => false, 'div' => false)); ?>

                                    </div>
                                    <div class="ppr_company2">
                                        <div class="ppr_dead"> Deadline</div>
                                        <div class="ppr_emptyf">
                                            <?php echo $this->Form->input('MemberOtherdetail.badges_deadline', array('type' => 'text', 'id' => 'badges_deadline', 'label' => false, 'div' => false)); ?>

                                        </div>
                                        <div class="ppr_dotimg"><img src="<?= $this->webroot; ?>img/max.jpg"></div>
                                        <div class="validation" style="display:none">Please enter</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="ppr_fieldcontent">
                                    <div class="ppr_company1">
                                        <?php echo $this->Form->input('MemberOtherdetail.federation_name', array('type' => 'text', 'label' => false, 'div' => false)); ?>

                                    </div>
                                    <div class="ppr_company2">
                                        <div class="ppr_dead"> Deadline</div>
                                        <div class="ppr_emptyf">
                                            <?php
                                            echo $this->Form->input('MemberOtherdetail.federation_deadline', array('type' => 'text', 'id' => 'federation_deadline', 'label' => false, 'div' => false));
                                            ?>

                                        </div>
                                        <div class="ppr_dotimg"><img src="<?= $this->webroot; ?>img/max.jpg"></div>
                                        <div class="validation" style="display:none">Please enter</div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- <div class="vip-section">
             <h3>VIP Section in the Movesbook mainpage</h3>
             <div class="vip-checkbox"> 
        <?php
        echo $this->Form->input('MemberOtherdetail.add_in_mainpage_vip', array('id' => 'add_in_mainpage_vip', 'div' => false, 'type' => 'checkbox', 'label' => false));
        ?>
                 Add in Mainpage in the VIP section <a href="">My Club’s members</a> </div>
             <div class="vip-checkbox">
        <?php
        echo $this->Form->input('MemberOtherdetail.permision_to_display', array('id' => 'permision_to_display', 'div' => false, 'type' => 'checkbox', 'label' => false));
        ?>
                 Permission to display photo in the <a href="">Last logged</a> of the VIP section</div>
         </div>-->

        <div class="vip-section">
            <div class="red_row1">Private settings</div>
            <div class="vip-checkbox">
                <?php
                echo $this->Form->input('AdminSettingForUser.allow_display_profile_pic', array(
                    'type' => 'checkbox',
                    'id' => 'allow_display_profile_pic_id',
                    'label' => false,
                    'div' => false,
                    'format' => array('before', 'input', 'between', 'label', 'after', 'error')
                ));
                ?> Disallow the operators to modify my data in the personal profile
            </div>
            <div class="vip-checkbox">
                <?php
                echo $this->Form->input('AdminSettingForUser.allow_to_modify_data', array(
                    'type' => 'checkbox',
                    'id' => 'allow_to_modify_data_id',
                    'label' => false,
                    'div' => false,
                    'format' => array('before', 'input', 'between', 'label', 'after', 'error')
                ));
                ?> I allow to display my photo in the Movesbook Mainpage at the section "see who's using Movesbook"
            </div>
            <div class="prs-setting">
                <div class="prstitle"> Settings</div>
                <div class="">
                    <div class="mtop5 ">
                        <div class="chk_sts1 ml_chk" style="display: inline-block; margin: 5px;">
                            <div class="chk_bx"> <?php echo $this->Form->input('AdminSettingForUser.access_vip_main_data', array('type' => 'radio', 'label' => false, 'options' => array('N' => 'N', 'Y' => 'Y'), 'div' => false, 'legend' => false)); ?> </div>
                        </div>
                        <div class="chk_sts3" style="display: inline-block; margin: 5px;">Allow to my visitors to access
                            to my profile
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="vip_page_data" class="error_message"></div>
                    <div class="mtop5 ">
                        <div class="chk_sts1 ml_chk" style="display: inline-block; margin: 5px;">
                            <div class="chk_bx"> <?php echo $this->Form->input('AdminSettingForUser.access_vip_other_data', array('type' => 'radio', 'label' => false, 'options' => array('N' => 'N', 'Y' => 'Y'), 'div' => false, 'legend' => false)); ?> </div>
                        </div>
                        <div class="chk_sts3" style="display: inline-block; margin: 5px;">Allow to my visitors to open
                            my biography
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="vip_page_other_data" class="error_message"></div>
                    <div class="mtop5 ">
                        <div class="chk_sts1 ml_chk" style="display: inline-block; margin: 5px;">
                            <div class="chk_bx"> <?php echo $this->Form->input('AdminSettingForUser.allow_ask_to_friendship', array('type' => 'radio', 'label' => false, 'options' => array('N' => 'N', 'Y' => 'Y'), 'div' => false, 'legend' => false)); ?> </div>
                        </div>
                        <div class="chk_sts3" style="display: inline-block; margin: 5px;">Allow to my visitors to the
                            friendship
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="asked_to_friendship" class="error_message"></div>
                    <div class="mtop5 ">
                        <div class="chk_sts1 ml_chk" style="display: inline-block; margin: 5px;">
                            <div class="chk_bx"> <?php echo $this->Form->input('AdminSettingForUser.allow_visitors_send_mail', array('type' => 'radio', 'label' => false, 'options' => array('N' => 'N', 'Y' => 'Y'), 'div' => false, 'legend' => false)); ?> </div>
                        </div>
                        <div class="chk_sts3" style="display: inline-block; margin: 5px;">Allow to my visitors to mail
                            me
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear" style="padding-top:20px;"></div>

                </div>
            </div>
        </div>

        <div class="vip-section" style="display:none">
            <h3>Refrences </h3>
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

        <div class="savecancel">
            <p>“I permit to display my photo in the ‘last logged’ option in the VIP banner”</p>
            <div class="text-center mt-10 mb-10">

                <?php echo $this->Form->input($langs['Save'], array('type' => 'button', 'id' => '', 'class' => 'btn-red', 'onclick' => 'return(submit_memeber())', 'div' => false, 'label' => false, 'name' => 'submit', 'value' => 'submit')); ?>
                <?php echo $this->Form->input("Skip", array('type' => 'button', 'id' => '', 'class' => 'btn-red', 'label' => false, 'name' => 'skip', 'div' => false, 'value' => 'skip')); ?>

                <!--<button type="submit" name="submit" class="btn" onclick="onclick=>return(submit_memeber())" id="submit_form">Save</button>        
                                <button type="submit" name="skip" class="btn" id="submit_form">Skip</button>        -->
            </div>
        </div>
    </div>
    <!--right section end-->
</div>
<?php
echo $this->Form->end();
?>
<?php echo $this->Html->script('js_object'); ?>

<script>
    function submit_memeber() {

        document_name = $('#document_name').val();
        name_day = $('#name_day').val();
        blood_group = $('#blood_group').val();

        medical_examination = $('#medical_examination').val();
        out_come = $('#out_come').val();

        var validatation_form1 = new validation1();
        var status = true;
        status = validatation_form1.name_validation1('document_name', document_name, 'valid_document_name');
        status = validatation_form1.name_validation1('name_day', name_day, 'valid_name_day');
        status = validatation_form1.name_validation1('blood_group', blood_group.trim(), 'valid_blood_group');
        status = validatation_form1.name_validation1('medical_examination', medical_examination.trim(), 'valid_medical_examination');
        status = validatation_form1.name_validation1('out_come', out_come.trim(), 'valid_out_come');

        if (status == true) {
            return true;
        } else {
            return false;
        }
    }

    $(document).ready(function() {

        $('#open_browser,#open_browser1').bind('click', function() {
            $('#member_photo').click();
        });

    })

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {

        var dates = $("#membership_from,#membership_to,#federation_deadline,#insurance_deadline,#badges_deadline,#examination_exp_date").datepicker({
            changeDay: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2050',
            dateFormat: 'dd-mm-yy'
        });
        $('#ui-datepicker-div').css({
            'height': '230px'
        });
    });
</script>

<?= $this->start('footer_scripts'); ?>
<?= $this->Html->Script('qrcode.min'); ?>
<script type="text/javascript">
    let QR_CODE = new QRCode("qrcode", {
        width: 220,
        height: 220,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
    });
    QR_CODE.makeCode("<?= $this->webroot; ?>qrcodes/profile/<?= md5($userRecord[0]['User']['username']); ?>");
</script>
<?= $this->end(); ?>