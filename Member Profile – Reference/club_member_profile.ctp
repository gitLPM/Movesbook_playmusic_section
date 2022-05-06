<?php
if ((!empty($type)) && ($type == 'details')) {
    $memberdtl = true;
    echo $this->element('club_member_user/member_menu', array('memberdtl' => $memberdtl));
}
?>

<?php
echo $this->element('club/club_newmember_tab_edit');
?>
<?php
echo $this->Html->script('js_object');
?>
<style>
    .font_size_2 {
        font-size: 15px !important;
        padding: 5px;
    }

    #display1 {
        /*  background: none repeat scroll 0 0 #1092a0;*/
        left: 10px;
        margin-top: 27px;
        position: absolute;
        width: 68.5%;
        cursor: pointer;
    }

    .tab_validation1 {
        color: #c60028;
        float: right;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        line-height: 18px;
        text-align: left;
        width: 100%;
    }

    .ul_auto {
        list-style: none;
        margin: 17px 20px 20px 24px;
        width: 330px;
    }

    li_auto {
        display: block;
        padding: 5px;
        background-color: #ccc;
        border-bottom: 1px solid #367;
    }

    .pprfield_generated {
        margin-bottom: 7px;
        text-align: center;
    }

    .user_generated,
    .system_generated {
        cursor: pointer;
        width: 46%;
        margin: 0 2%;
        float: left;
        text-align: center;
        box-sizing: border-box;
        padding: 8px 10px;
        background: #555;
        border-radius: 4px;
        color: #fff;
        display: inline-block;
        font-family: "segoe_uibold";
    }

    .system_generated {
    }

    .theme-bg {
        width: 148px;
        right: -156px;
    }
</style>

<div id="add_member_form">
    <div class="blue_row1 m_top_ten text-center"><?php echo $langs["Edit membership profile"]; ?></div>
    <?php echo $this->Form->create('User', array('type' => 'file', 'id' => 'single_user_registration_formID1', 'url' => array('action' => 'club_member_profile', 'controller' => 'clubs', $id))); ?>
    
    <?php echo $this->Form->input('User.id', array('type' => 'hidden', 'label' => false, 'div' => false, 'id' => 'id')); ?>
    <?php echo $this->Form->input('User.role_id', array('type' => 'hidden', 'label' => false, 'div' => false)); ?>
    <div class="create-new-member-block mt-10">
        <div class="take-photo">
            <div class="" style="float:left;">
                <a class="" href="JavaScript:void(0)" id="open_browser">
                    <?php
                    if (!empty($this->request->data["User"]["image"])) {
                        $image_name = $this->request->data["User"]["image"];
                    } else {
                        $image_name = "no_image_found.jpg";
                    }
                    ?>
                    <img alt="" id="blah"
                         src="<?php echo $this->webroot; ?>img/profile_images/<?php echo $image_name; ?>">
                </a>
            </div>
            <div class="upload_button1 f-left ml-10" id="open_browser1">
                <div class="fileUpload">
                    <span><?php echo $langs['Upload Image']; ?></span>
                    <!--<input type="file" class="browse" />-->
                </div>
            </div>
            <div style="display:none">
                <?php echo $this->Form->input('User.image', array('type' => 'file', 'id' => 'member_photo', "onchange" => "readURL(this)")); ?>
            </div>
        </div>

        <div class="discript mt-10">
            
            <?php //echo $this->Form->input('User.created_by',array('type'=>'hidden','label'=>false,'div'=>false,'value'=>"5"));?>
            <!--form one row start-->
            <div class="ppro_form_bg ">
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Member Type</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="custom-select">
                                        <?php echo $this->Form->input('User.clubSetting_memberType_id', array('type' => 'select', 'id' => 'clubSetting_memberType_id', 'label' => false, 'empty' => 'Select', 'div' => false, 'options' => $member_type)); ?>
                                    </div>
                                    <div class='tab_validation1' id="valid_clubSetting_memberType_id_new"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['Username']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.username', array('type' => 'text', 'id' => 'username', 'label' => false, 'class' => 'font_size_2', 'div' => false, 'Placeholder' => $langs['Please enter username'])); ?>
                                    <!--                                        <input type="text">-->
                                    <div class='tab_validation1' id="valid_username" style="display: none;"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['First_name']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.firstname', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => $langs['Please enter first name'])); ?>
                                    <!--                                        <input type="text">-->
                                    <div class='tab_validation1' id="valid_surname" style="display: none;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['Last_Name']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.lastname', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => $langs['Please enter lastname'])); ?>
                                    <!--                                        <input type="text">-->
                                    <div class='tab_validation1' id="valid_lastname" style="display: none;"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['Email']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.email', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => $langs['Please enter email'])); ?>
                                    <!--                                        <input type="text">-->
                                    <div class='tab_validation1' id="valid_email" style="display: none;"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--                <div id="user_generated_password" class="pprfield_generated">
                                    <div onclick="user_generated()" class="user_generated">User Generated</div>
                                    <div onclick="system_generated()" class="system_generated">System Generated</div>
                                    <div class="clear"></div>
                
                                </div>    -->
                <div class="pprfield_row" style="display: none" id="user_generated">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><a id="password_popup_open" class="btn-password"
                                                               href="JavaScript:void(0)">Password</a></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.password', array('type' => 'password', 'id' => 'password_value', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => "Please enter password", "readonly" => "readonly")); ?>
                                    <!--<input type="password" id="password_value" >-->
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">* Repeat Pass.</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <input type="password" id="password_repeat_value" readonly="readonly">
                                </div>
                                <div style="display:none" class="validation">Please enter repeat password.</div>
                                <div style="display:none" class="validation">Password and repeat password not match.
                                </div>
                                <div class="ppr_reset_pass">
                                        <span style="display: none" id="loader">
                                        <?php echo $this->Html->image("loader.gif"); ?>
                                        </span>
                                    <!--<span id="reset_passOrg">
                                        <a onclick="change_password()" href="JavaScript:void(0)">Reset Password</a>
                                    </span>-->
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!--password popup section-->
                <div class="password-popup" style="display: none;">
                    <div class="ppro_form_bg pass-popup-box">
                        <div class="pprfield_row">
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td class="ppr_fieldleft">
                                        <div class="ppr_fieldtitle">Password</div>
                                    </td>
                                    <td class="ppr_fieldright">
                                        <div class="ppr_fieldcontent">
                                            <!--<input type="password" placeholder="Minimum four digits">-->
                                            <?php echo $this->Form->input('User.club_user_password', array('type' => 'password', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'id' => 'password_id', 'Placeholder' => 'Please enter Password')); ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ppr_fieldleft">
                                        <div class="ppr_fieldtitle">* Repeat Pass.</div>
                                    </td>
                                    <td class="ppr_fieldright">
                                        <div class="ppr_fieldcontent">
                                            <!--<input type="password" placeholder="Minimum four digits"> -->
                                            <?php echo $this->Form->input('User.club_user_repeat', array('type' => 'password', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'id' => 'password_repeat_id', 'Placeholder' => 'Repeat password')); ?>
                                        </div>
                                        <div style="display:none" class="validation">Please enter repeat password.</div>
                                        <div style="display:none" class="validation">Password and repeat password not
                                            match.
                                        </div>
                                        <div class="ppr_reset_pass">
                                                <span style="display: none" id="loader">
                                                    <img src="<?= $this->webroot; ?>img/loader.gif" alt="">
                                                </span>
                                            <span id="reset_passOrg">
                                                    <!--<a onclick="change_password()" href="JavaScript:void(0)">Reset Password</a>-->
                                                </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr style="display: none" id="club_admin_password">
                                    <td class="ppr_fieldleft">
                                        <div class="ppr_fieldtitle">* Admin Pass.</div>
                                    </td>
                                    <td class="ppr_fieldright">
                                        <div class="ppr_fieldcontent">
                                            <!--<input type="password" placeholder="Minimum four digits"> -->
                                            <?php echo $this->Form->input('club_admin_password', array('type' => 'password', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'id' => 'club_admin_password_value', 'Placeholder' => 'Enter password')); ?>
                                        </div>
                                        <div style="display:none" class="validation">Please enter repeat password.</div>
                                        <div class="ppr_reset_pass">
                                                <span style="display: none" id="loader">
                                               <?php echo $this->Html->image('loader.gif'); ?>
                                                </span>
                                            <span id="reset_passOrg">
                                                    <!--<a onclick="change_password()" href="JavaScript:void(0)">Reset Password</a>-->
                                                </span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mmtype-btn-row mtop10">
                            <span>
                                <button type="button" class="btn" id="save_button">Save</button>
                             <?php echo $this->Html->image('loader.gif', array('style' => 'display:none', 'id' => 'loaderSave')); ?>
                            </span>
                            <a class="btn" href="JavaScript:void(0)" id="password_popup_close">Cancel</a>
                            <a class="btn" href="JavaScript:void(0)" id="password_reset_id">Reset</a>
                        </div>
                    </div>
                </div>
                <!--password popup section-->
                <!-- <div class="pprfield_row">
                         <table width="100%" cellpadding="0" cellspacing="0">
                             <tr>
                                 <td class="ppr_fieldleft"><div class="ppr_fieldtitle"> < ?php //echo $this->Form->input('Password', array('type' => 'button','value'=>'Password','class'=>'find-btn','label' =>false,'name'=>'submit')); ?></div></td>
                                 <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                                         < ?php //echo $this->Form->input('User.club_user_password',array('type'=>'text','class'=>'font_size_2','label'=>false,'div'=>false,'Placeholder'=>'Please enter Password'));?>
                <!--input type="text">
                <div class='tab_validation1' id="valid_email"  style="display: none;"></div>
            </div>
        </td>
    </tr>
    <tr>
        <td class="ppr_fieldleft"><div class="ppr_fieldtitle">Repeat</div></td>
        <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                < ?php //echo $this->Form->input('User.club_user_repeat',array('type'=>'text','class'=>'font_size_2','label'=>false,'div'=>false,'Placeholder'=>'Repeat password'));?>
        <!--<input type="text">
                <div class='tab_validation1' id="valid_email"  style="display: none;"></div>
            </div>
        </td>
    </tr>
</table>
</div>-->
                
                
                <?php
                /*
                   comment password fields give autogenereated password durring assing account first time
                
                  <div class="main_pass">Main Password</div>
                  <div class="pprfield_row">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="ppr_fieldleft"><div class="ppr_fieldtitle"><?php echo $langs['Password']; ?></div></td>
                                        <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                                                        <?php echo $this->Form->input('User.password',array('type'=>'password','class'=>'font_size_2','label'=>false,'id'=>'password','div'=>false,'Placeholder'=>'Please enter password'));?>
                                                        <input type="password">
                                                <div class='tab_validation1' id="valid_password"  style="display: none;"></div>
                                            </div>
                                                                                <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ppr_fieldleft"><div class="ppr_fieldtitle"><?php echo $langs['Repeat_Password']; ?></div></td>
                                        <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                                                        <?php echo $this->Form->input('repeat_password',array('type'=>'password','class'=>'font_size_2','label'=>false,'id'=>'confirmpassword','div'=>false,'Placeholder'=>'Please enter confirm password '));?>
                                                        <input type="password">
                                                <div class='tab_validation1' id="valid_confirmpassword"  style="display: none;"></div>
                                            </div>
                                                                                <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                 */
                
                
                ?>

                <!--<div class="main_pass">Alternative Password <span class="red">(you can give it to others for temporary use)</span></div>-->
                <!--<div class="main_pass" style="text-align: right;"><input type="checkbox"> &nbsp; Set as 1 access only</div>-->
                <!--                    <div class="pprfield_row">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td class="ppr_fieldleft"><div class="ppr_fieldtitle">Password</div></td>
                                                <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                                                        < ?php echo $this->Form->input('',array('type'=>'text','label'=>false,'id'=>'alternate_password','div'=>false,'Placeholder'=>'Please enter alternate password ','name'=>'alternate_pass'));?>
                                                        <input type="password">
                                                    </div>
                                                    <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ppr_fieldleft"><div class="ppr_fieldtitle">Repete Pass.</div></td>
                                                <td class="ppr_fieldright"><div class="ppr_fieldcontent">
                                                         < ?php echo $this->Form->input('',array('type'=>'text','label'=>false,'id'=>'alternate_confipass','div'=>false,'Placeholder'=>'Please enter alternate password ','name'=>'alternate_confipass'));?>
                                                        <input type="password">
                                                    </div>
                                                    <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>-->
            </div>
            <!--form one row end-->
            <div class="clear top_pad"></div>
            <!--form two row start-->
            <div class="ppro_form_bg">
                <div class="pprfield_row">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">* <?php echo $langs['Country']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="select45">
                                        <div class="custom-select">
                                            <?php echo $this->Form->input('User.country_id', array('type' => 'select', 'label' => false, 'empty' => 'Select', 'id' => 'country_id', 'div' => false, 'options' => $country_option, 'onchange' => 'get_state(this.value)')); ?>
                                        </div>
                                        <div class="tab_validation1" id="valid_country_id"></div>
                                    </div>
                                    <div class="input25 text-right">
                                        Pro
                                    </div>
                                    <div class="input20">
                                        <?php echo $this->Form->input('User.club_prov', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false)); ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['regions']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent" id="load_state">
                                    <div class="custom-select">
                                        <?php echo $this->Form->input('User.state_id', array('type' => 'select', 'label' => false, 'empty' => 'Select', 'id' => 'state_id', 'div' => false, 'options' => $states)); ?>
                                        <!--<input type="text">-->
                                    </div>
                                    <div class='tab_validation1' id="valid_state_id" style="display: none;"></div>
                                    <!--                                        <div class=" input45">
                                                                                 < ?php echo $this->Form->input(array('type'=>'text','label'=>false,'id'=>'city_name','div'=>false,'Placeholder'=>'Please enter alternate address ','name'=>'city_name'));?>
                                                                                <input type="text">
                                                                            </div>  -->
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"> City</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class=" select45">
                                        <?php echo $this->Form->input('User.city_name', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => 'Please enter City')); ?>
                                    </div>
                                    <div class="input25 text-right">
                                        Zip code
                                    </div>
                                    <div class="input20">
                                        <?php echo $this->Form->input('User.zipcode', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'id' => 'zipcode', 'div' => false, 'Placeholder' => $langs['Please enter Zip code'])); ?>

                                        <div class='tab_validation1' id="valid_zipcode"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Address</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="">
                                        <?php echo $this->Form->input('User.location', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'id' => 'club_user_address', 'div' => false, 'Placeholder' => 'Please enter Address')); ?>
                                    </div>
                                    <div style="display: none" class="validation">Please enter address.</div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Phone</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input45">
                                        <?php echo $this->Form->input('User.mobile_number1', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'maxlength' => 12, 'id' => 'mobile_number1', 'div' => false, 'Placeholder' => $langs["Please enter Phone/cell"])); ?>
                                        <div style="display:none" class="validation">Please enter phone no.</div>
                                    </div>
                                    <div class="input50">
                                        <?php echo $this->Form->input('User.mobile_number1', array('type' => 'text', 'class' => 'font_size_2', 'maxlength' => 12, 'label' => false, 'id' => 'mobile_number1', 'div' => false, 'Placeholder' => $langs["Please enter Phone/cell"])); ?>
                                        <div style="display:none" class="validation">Please enter numeric character.
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs["Gender"]; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="custom-select">
                                        <?php
                                        $gender = array('M' => 'Male', 'F' => 'Female');
                                        echo $this->Form->input('User.gender', array('type' => 'select', 'label' => false, 'empty' => 'Select', 'id' => 'gender_id', 'div' => false, 'name' => 'gender', 'options' => $gender)); ?>
                                    </div>
                                    <div class='tab_validation1' id="valid_gender" style="display: none;"></div>
                                    <!--<div class="dropbox select45">
                                    <select name="">
                                    <option placeholder="">--Please select--</option></select>
                                    </div>-->
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">
                                    <?php echo $langs['Date_of_Birth']; ?>
                                    <div class='tab_validation1' id="valid_Date_of_Birth" style="display: none;"></div>
                                </div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php
                                    //                               $day=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13"
                                    //                                   ,"14"=>"14","15"=>"15","16"=>"16","17"=>"1","15"=>"15","16"=>"16");
                                    //                               echo $this->Form->input(array('type'=>'select','empty'=>'Day','id'=>'day_id','div'=>false,'name'=>'day','option'=>$day));
                                    echo $this->Form->input('Athlete.dob', array('type' => 'text', 'label' => false, 'id' => 'dob', 'div' => false, 'Placeholder' => $langs['Please enter DOB'])); ?>
                                    <!--                                            <select name="">
                                        <option placeholder="">Day</option>
                                    </select>-->
                                    <!--                                        <div class="dropbox select25">
                                                                                <select name="">
                                                                                    <option placeholder="">Month</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="dropbox select25">
                                                                                <select name="">
                                                                                    <option placeholder="">Year</option>
                                                                                </select>
                                                                            </div>-->
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        <!--<tr>
                            <td class="ppr_fieldleft"><div class="ppr_fieldtitle">Birthday Place</div></td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="dropbox select100">
                                        < ?php echo $this->Form->input('Athlete.usertype_id', array('type' => 'select', 'div' => false, 'label' => false, 'options' => 'Birthplace')); ?>
                                         <select name="">
                                <option placeholder="">Network Team Type</option>
                                </select>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle"><?php echo $langs['User Type']; ?></div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="dropbox select100">
                                        <?php echo $this->Form->input('Athlete.usertype_id', array('type' => 'select', 'div' => false, 'label' => false, 'options' => $singleUserTypes)); ?>
                                        <!--<select name="">
                                        <option placeholder="">Network Team Type</option>
                                        </select>-->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Occupation</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="dropbox select100">
                                        <?php echo $this->Form->input('Athlete.usertype_id', array('type' => 'select', 'div' => false, 'label' => false, 'options' => $profession)); ?>
                                        <!--<option placeholder="">Network Team Type</option>
                                        </select>-->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">
                                    Skills
                                    <div class='tab_validation1' id="valid_Date_of_Birth" style="display: none;"></div>
                                </div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('Athlete.skill', array('type' => 'text', 'label' => false, 'id' => 'skill', 'div' => false, 'Placeholder' => "Please enter skill")); ?>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Employer</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input30">
                                        <?php echo $this->Form->input('User.club_user_qualification', array('type' => 'text', 'placeholder' => 'Qualification', 'label' => false, 'div' => false)); ?>
                                        <div style="display:none" class="validation">Please enter qualification</div>
                                    </div>
                                    <div class="input30">
                                        <?php echo $this->Form->input('User.club_user_start', array('type' => 'text', 'placeholder' => 'Start', 'label' => false, 'div' => false)); ?>

                                        <div style="display:none" class="validation">Please enter start</div>
                                    </div>
                                    <div class="input30">
                                        <?php echo $this->Form->input('User.club_user_end', array('type' => 'text', 'placeholder' => 'End', 'label' => false, 'div' => false)); ?>
                                        <div style="display:none" class="validation">Please enter end</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <!--form two row end-->
            <div class="clear top_pad"></div>
            <!--form three row start-->
            <div class="ppro_form_bg">
                <div class="pprfield_row">
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Fiscal Code</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <?php echo $this->Form->input('User.club_uesr_fiscal_code', array('type' => 'text', 'class' => 'font_size_2', 'label' => false, 'div' => false, 'Placeholder' => 'Enter fiscal Code')); ?>
                                    <!--<input type="text">-->
                                    <div class='tab_validation1' id="valid_email" style="display: none;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Club ID Code</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="custom-select">
                                        <?php
                                        /* $club_customer_category=array("From-settings"=>"From-settings","General-customer"=>"General-customer","category"=>"category");
                                         echo $this->Form->input('User.club_customer_category', array('type' => 'select', 'empty' => 'Select', 'div' => false, 'label' => false, 'options' => $club_customer_category));*/
                                        
                                        $club_customer_category = array("From-settings" => "From-settings", "General-customer" => "General-customer", "category" => "category");
                                        
                                        echo $this->Form->input('User.club_id_code', array(
                                            'div' => false,
                                            'label' => false
                                        ));
                                        ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td class="ppr_fieldleft">
                                <div class="ppr_fieldtitle">Contact type</div>
                            </td>
                            <td class="ppr_fieldright">
                                <div class="ppr_fieldcontent">
                                    <div class="input30">
                                        <?php
                                        $contactArray = array(
                                            'Public Advertisings' => 'Public Advertisings',
                                            'Radio' => 'Radio',
                                            'Friends' => 'Friends',
                                            'Phone Contact' => 'Phone Contact',
                                            'Mail Contact' => 'Mail Contact',
                                            'Internet' => 'Internet',
                                            'Vendors' => 'Vendors'
                                        );
                                        echo $this->Form->input('User.club_contact_type_qualification', array('type' => 'select', 'placeholder' => 'Qualification', 'label' => false, 'div' => false, 'empty' => '-Select-dat', 'options' => $contactArray)); ?>
                                        <div style="display:none" class="validation">Please enter qualification</div>
                                    </div>
                                    <div class="input30">
                                        <?php echo $this->Form->input('User.club_contact_type_start', array('type' => 'text', 'placeholder' => 'Start', 'label' => false, 'div' => false)); ?>
                                        <div style="display:none" class="validation">Please enter start</div>
                                    </div>
                                    <!-- <div class="input30">
                                        <?php //echo $this->Form->input('User.club_contact_type_end', array('type' => 'text', 'placeholder' => 'End', 'label' => false, 'div' => false)); ?>
                                        <div style="display:none" class="validation">Please enter end</div>
                                    </div> -->
                                    <div class="clear"></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--form three row end-->
            <div class="clear top_pad"></div>

            <!--form four row end-->
            <div class="clear top_pad"></div>

            <div class="clear"></div>
            <!--form buttons start-->
            <?php
            if (!empty($check_club_member)) {
                ?>
                <div class="ppr_btn_box">
                    <div class="btn_box_save">
                        <span>
                            <?php echo $this->Html->image('loader.gif', array('style' => 'display:none', 'id' => 'loaderbutton')); ?>

                        </span>
                        <span id="saveID">
                            <?php echo $this->Form->input($langs['Save'], array('type' => 'button', 'value' => 'Find', 'class' => 'btn_red', 'onclick' => 'return(submit_memeber())', 'label' => false, 'name' => 'submit_member')); ?>
                        </span>
                        <!--<a class="btn_red" href="#.">Save</a>--></div>
                    <div class="btn_box_save">
                        <input type="button" value="<?php echo $langs['Cancel']; ?>" class="btn_red"
                               onclick="cancel()"/>
                        <?php
                        //echo $this->Form->input('Cancel',array('type' => 'button','value'=>'','class'=>'btn_red','label' =>false,'name'=>'Cancel',"onclick"=>"cancel()"));
                        ?>
                        <!--<a class="btn_black" href="#.">Cancel</a>-->
                    </div>
                </div>
            <?php } ?>
            <!--form buttons end-->
        </div>
        <div class="clear"></div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>


<script>
    function cancel() {
        window.location.href = "<?php echo $this->webroot;?>clubs/club_member_profile/<?php echo $id;?>";
    }

    $("#password_reset_id").click(function () {
        $("#club_admin_password").fadeIn();
    });
    $('#password_popup_open').click(function () {
        $('.password-popup').show();
        password_value = $('#password_value').val();
        password_repeat_value = $('#password_repeat_value').val();

        if (password_value.trim() != "" && password_repeat_value.trim() != "") {

            $("#password_id").attr("disabled", true);
            $("#password_repeat_id").attr("disabled", true);
            $("#password_reset_id").show();

        } else {

            $("#password_reset_id").hide();

        }
        //$('#sevice_id').focus();
    });

    $('#password_popup_close').click(function () {

        $('.password-popup').hide();
        $('#password_id').val('');
        $('#password_repeat_id').val('');
        $("#club_admin_password").hide();
        //$('#sevice_id').focus();
    });
    $('#password_reset_id').click(function () {
        //$('#sevice_id').focus();
        $("#reset_password_status").val(1);
    });
    //  $('#save_button').click(function () {
    //     $('.password-popup').hide();
    //     var password_value =$('#password_id').val();
    //     var password_repeat_value=$('#password_repeat_id').val();
    //
    //     $('#password_value').val(password_value);
    //     $('#password_repeat_value').val(password_repeat_value);
    //  });

    function user_generated() {
        $("#user_generated").fadeIn();

    }

    function system_generated() {

        $("#password_value").val("");
        $("#password_repeat_value").val("");
        $("#user_generated").hide();

    }
</script>

<script>
    $(document).ready(function () {

        /***************************privacy function*****************************/

        var privacy_textbox_value = $('#privacy_textbox').val();

        if (privacy_textbox_value == "") {
            $('#privacy_textbox').val('Only myself');
        } else {
            arr = privacy_textbox_value.split(',');
            $.each(arr, function (i, val) {
                $("input[value='" + val + "']").prop('checked', true);
            });
        }

        $('#remove_privacy').click(function () {
            $('#privacy_checkbox').hide();
            $('#privacy_textbox').val('Only myself');
            $(".privacy_chk_value:checked").each(function () {
                this.checked = false;

            });
            $(".privacy_chk_value_spcl").attr('checked', true);
        });

        $(".privacy_chk_value").change(function () {
            if (this.checked) {
                var values = (function () {
                    var a = [];
                    $(".privacy_chk_value:checked").each(function () {
                        a.push(this.value);
                        $('#privacy_textbox').val(a);

                    });

                })()
            }

        });


        $('#privacy_textbox').click(function () {

            $('#privacy_checkbox').toggle();

        });

        /***************************privacy function*****************************/


        $("#password_popup_close").bind('click', function () {
            password_value = $("#password_value").val();
            password_repeat_value = $("#password_repeat_value").val();
            if (password_value == "" && password_repeat_value == "") {
                $("#password_id").val("");
                $("#password_repeat_id").val("");
            } else {
                password_id = $("#password_id").val(password_value);
                password_repeat_id = $("#password_repeat_id").val(password_repeat_value);
            }

        });


        $("#save_button").bind('click', function () {

            reset_password_status = $("#reset_password_status").val();
            password_id = $("#password_id").val();
            password_repeat_id = $("#password_repeat_id").val();
            if (password_id == "") {
                alert("Please enter password");
                $("#password_id").focus();
                return false;
            }
            if (password_repeat_id == "") {
                alert("Please enter confirm password");
                $("#password_repeat_id").focus();
                return false;
            }

            if (password_repeat_id != password_id) {
                alert("Password does not match");
                return false;
            }
            if (reset_password_status == 1) {

                club_admin_password_value = $("#club_admin_password_value").val();
                if (club_admin_password_value.trim() == "") {

                    alert("Please enter password");
                    return false;
                } else {


                    $('#save_button').hide();
                    $('#loaderSave').show();
                    $.post('<?php echo $this->webroot;?>clubs/check_admin_password', {"admin_password": club_admin_password_value.trim()}, function (data) {
                        $('#loaderSave').hide();
                        $('#save_button').show();
                        if (data == 1) {

                            $("#club_admin_password_value").val("");
                            $("#password_id").val("");
                            $("#password_repeat_id").val("");
                            $("#reset_password_status").val(0);
                            $("#club_admin_password").hide();
                            $("#password_id").attr("disabled", false);
                            $("#password_repeat_id").attr("disabled", false);


                        } else {
                            alert("Password does not match please enter correct passwrd");
                            return false;
                        }
                    });
                }
            } else {
                $("#password_value").val(password_id);
                $("#password_repeat_value").val(password_repeat_id);
                $('.password-popup').hide();
            }
        })
    });
    var status8 = true;

    function submit_memeber() {

        username = $('#username').val();
        first_name = $('#UserFirstname').val();
        last = $('#UserLastname').val();
        email = $('#UserEmail').val();
        password = $('#password').val();
        confirmpassword = $('#confirmpassword').val();
        clubSetting_memberType = $('#clubSetting_memberType_id').val();
        country_id = $('#country_id').val();
        state_id = $('#state_id').val();
        zipcode = $('#zipcode').val();
        var validatation_form1 = new validation1();
        status1 = validatation_form1.name_validation1('clubSetting_memberType', clubSetting_memberType, 'valid_clubSetting_memberType_id_new');
        status2 = validatation_form1.name_validation1('name', username, 'valid_username');
        status3 = validatation_form1.name_validation1('first', first_name, 'valid_surname');
        status4 = validatation_form1.name_validation1('last', last, 'valid_lastname');
        status5 = validatation_form1.name_validation1('email', email, 'valid_email');
        status6 = validatation_form1.name_validation1('country_id', country_id, 'valid_country_id');
        status7 = validatation_form1.name_validation1('zipcode', zipcode, 'valid_zipcode');
        //for(var i=1;i<8;i++){
        //console.log(status+i);
        //}
        if (status1 == true && status2 == true && status3 == true && status4 == true && status5 == true && status6 == true && status7 == true) {

            if (status8) {

                status8 = false;
                $("#loaderbutton").show();
                $("#saveID").hide();

                $.post("<?php echo $this->webroot;?>clubs/checkuser_name_edit", {
                    "id": "<?php echo $id;?>",
                    "user_name": username,
                    "user_email": email
                }, function (data) {

                    $("#loaderbutton").hide();
                    $("#saveID").show();
                    obj = JSON.parse(data);
                    $("#valid_username").text("");
                    $("#valid_email").text("");

                    if (obj[0].status == 1) {

                        if (obj[1].statusResult == "userenamemail") {
                            $("#valid_username").text("Username already exits").show();
                            $("#valid_email").text("Email already exits").show();
                            status8 = true;
                            return false;
                        } else if (obj[1].statusResult == "username") {
                            $("#valid_username").text("Username already exits").show();
                            status8 = true;
                            return false;
                        } else if (obj[1].statusResult == "email") {

                            $("#valid_email").text("Email already exits").show();
                            status8 = true;
                            return false;
                        }
                    } else {
                        status8 = false;
                        $("#single_user_registration_formID1").submit();
                        return false;
                    }
                });
                return false;
            }
        } else {

            return false;
        }
    }

    $(document).ready(function () {
        $('#open_browser,#open_browser1').bind('click', function () {

            $('#member_photo').click();
        });
    });

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function get_state(id) {

        $.post('<?php echo $this->webroot;?>clubs/get_state', {"id": id}, function (data) {
            $('#load_state').html(data);
        })
    }

    $(function () {

        var dates = $("#dob, #club_user_start, #club_user_end").datepicker({
            changeDay: true,
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2016',
            dateFormat: 'dd-mm-yy'
        });
        var dates = $("#UserClubContactTypeStart").datepicker({
            dateFormat: 'dd-mm-yy'
        });
        $('#ui-datepicker-div').css({'height': '230px'});

    });

</script>
<input type="hidden" id="reset_password_status" value="0">

<script>
    function previewThemeFun(vid, tp, nme) {
        $('#liCls' + vid).addClass('check-selected');
        $('#radioCls' + vid).attr('checked', 'checked');


        if (tp != 'texture') {
            nme = '<?php echo $this->webroot;?>img/background-theme/' + nme;
            $('#themePreviewDisplayID').attr('src', nme);
            $('#previewDIVID').show();
        } else {
            $('#themePreviewDisplayID').attr('src', '');
            $('#previewDIVID').hide();
        }
    }
</script>