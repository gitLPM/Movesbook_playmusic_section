<?php ?>
<script type="text/javascript">

    function validateinfo() {    

        if (document.getElementById("UserUsername").value == '' || !(isNaN(document.getElementById("UserUsername").value))) {
            document.getElementById("username1").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#username1").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("username1").style.display = "none";
        }

        if (document.getElementById("UserFirstname").value == '' || !(isNaN(document.getElementById("UserFirstname").value))) {
            document.getElementById("name1").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#UserFirstname").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("name1").style.display = "none";
        }
        if (document.getElementById("UserLastname").value == '' || !(isNaN(document.getElementById("UserLastname").value))) {
            document.getElementById("lastname1").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#lastname1").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("lastname1").style.display = "none";
        }
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (document.getElementById("UserEmail").value == '' || !filter.test(document.getElementById("UserEmail").value)) {
            document.getElementById("email1").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#email1").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("email1").style.display = "none";
        }

        if (document.getElementById("pass1").value == "") {

            // document.getElementById("confirmpass1").disabled=true; 
            document.getElementById("passerr1").style.display = "none";
        } else {
            //document.getElementById("confirmpass1").disabled=false;         
            document.getElementById("passerr1").style.display = "block";
            if (document.getElementById("confirmpass1").value != '') {

                if (document.getElementById("pass1").value != document.getElementById("confirmpass1").value) {
                    document.getElementById("passerr1").style.display = "none";
                    document.getElementById("passerr11").style.display = "block";
                    $('html, body').animate({
                        scrollTop: $("#passerr11").offset().top
                    }, 500);
                    return false;
                } else {
                    document.getElementById("passerr11").style.display = "none";
                }

                document.getElementById("passerr1").style.display = "none";
            } else {

                document.getElementById("passerr1").style.display = "block";
                $('html, body').animate({
                    scrollTop: $("#passerr1").offset().top
                }, 500);
                return false;
            }
        }

        if (document.getElementById("pass2").value == "") {

            // document.getElementById("confirmpass1").disabled=true; 
            document.getElementById("passerr2").style.display = "none";
        } else {

            //document.getElementById("confirmpass1").disabled=false;         
            document.getElementById("passerr2").style.display = "block";
            if (document.getElementById("confirmpass2").value != '') {

                if (document.getElementById("pass2").value != document.getElementById("confirmpass2").value) {

                    document.getElementById("passerr2").style.display = "none";
                    document.getElementById("passerr12").style.display = "block";
                    $('html, body').animate({
                        scrollTop: $("#passerr12").offset().top
                    }, 500);
                    return false;
                } else {

                    document.getElementById("passerr12").style.display = "none";
                }
                document.getElementById("passerr2").style.display = "none";
            } else {
                document.getElementById("passerr2").style.display = "block";
                $('html, body').animate({
                    scrollTop: $("#passerr2").offset().top
                }, 500);
                return false;
            }
        }

        if (document.getElementById("ClubClubAddress").value == '') {
            document.getElementById("addrerr").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#addrerr").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("addrerr").style.display = "none";
        }
        if (document.getElementById("UserZipcode").value == '') {
            document.getElementById("zipnumerr").style.display = "none";
            document.getElementById("zipcodeerr").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#zipcodeerr").offset().top
            }, 500);
            return false;
        } else if (isNaN(document.getElementById("UserZipcode").value)) {
            document.getElementById("zipcodeerr").style.display = "none";
            document.getElementById("zipnumerr").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#zipnumerr").offset().top
            }, 500);
            return false;
        } else {

            document.getElementById("zipcodeerr").style.display = "none";
            document.getElementById("zipnumerr").style.display = "none";
        }
        if (document.getElementById("UserAlternateEmail").value != '' && !filter.test(document.getElementById("UserAlternateEmail").value)) {

            document.getElementById("altemailvalid").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#altemailvalid").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("altemailvalid").style.display = "none";
        }
        if (document.getElementById("UserMobileNumber").value == '') {
            document.getElementById("phonenum").style.display = "none";
            document.getElementById("phone1").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#phone1").offset().top
            }, 500);
            return false;
        } else if (isNaN(document.getElementById("UserMobileNumber").value)) {

            document.getElementById("phone1").style.display = "none";
            document.getElementById("phonenum").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#phonenum").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("phone1").style.display = "none";
            document.getElementById("phonenum").style.display = "none";
        }

        if (isNaN(document.getElementById("UserMobileNumber1").value) && document.getElementById("UserMobileNumber1").value != '') {
            document.getElementById("phone1num").style.display = "block";
            $('html, body').animate({
                scrollTop: $("#phone1num").offset().top
            }, 500);
            return false;
        } else {
            document.getElementById("phone1num").style.display = "none";
        }


    }

    function removeadmphoto() {
        window.location.href = "<?php echo $this->webroot; ?>clubs/removephoto";
    }

    function close_popupbox() {
        $("#ecpp_popup").hide();
    }

    function change_mail() {

        $("#ecpp_popup").show();
    }
</script>
<?php echo $this->element('club/clubinfotab'); ?>

<style>

</style>

<div class="fixed-center" id="ecpp_popup" style="display: none">
    <div style="" class="club-pass-popup">
        <a class="ecpp-close" href="javascript:void(0)" onclick="close_popupbox()"><i class="fa fa-times"
                                                                                      aria-hidden="true"></i></a>
        <div class="clear"></div>
        <div class="inline-block"> Password&nbsp;
        </div>
        <div class="inline-block"><input type="password" name="password" placeholder="Enter password"
                                         id="email_checksubmit_box">
        </div>
        <div class="clear"></div>
        <div class="submit-row">
            <span id="loader_pass" style="display: none"> <img alt=""
                                                               src="<?php echo $this->webroot; ?>img/ajax-loader-new.gif"> </span>
            <input type="submit" name="submit" value="Submit" id="submit_box">
        </div>

    </div>

</div>
<div class="clear middle_block_pad"></div>
<!--Admin profile content start-->
<div class="pm-content" id="cont-1-1">

    <div class="personal_profile_row">
        <?php echo $langs["Admin"]; ?><br>
        <span class="pp_main_title"><?php echo $langs["Personal Profile"]; ?></span>
    </div>
    <br>
    <div style="color:red"><?php echo $this->Session->flash(); ?></div>
    <div class="current_photo_row">
        <div class="cpr_photo">
            <div class="current_photo">
                <?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '63', 'height' => '63')), "#", array('escape' => false)); ?>
            </div>
            <div class="remove"><a href="JavaScript:void(0)"
                                   onclick="removeadmphoto();">[<?php echo $langs["Remove photo"]; ?>]</a></div>
        </div>
        <div class="cpr_discription">
            <div>
                <?php echo $langs['To upload your photo, click on the "upload Photo" button.']; ?>
            </div>
            <div class="select_row">
                <div class="pp_col2">
                    <a id="iframe" rel=""
                       href="<?php echo $this->webroot; ?>users/profile_pic/<?php echo $_SESSION['Auth']['User']['id'] . "/user"; ?>"
                       title="" class="gray_tab">Upload Photo</a>
                </div>
                <div class="pp_col2"><a class="gray_tab"
                                        href="JavaScript:void(0)"><?php echo $langs['Recongnition']; ?></a></div>
                <div class="pp_col3"><a class="pp_delete"
                                        href="JavaScript:void(0)"><?php echo $langs['Delete Account']; ?></a></div>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
    <?php echo $this->Form->create('User', array('onsubmit' => 'return validateinfo()')); ?>
    <?php
    echo $this->Form->input('User.id', array('type' => 'hidden', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.id')));
    echo $this->Form->input('Club.cid', array('type' => 'hidden', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.id')));
    ?>
    <!--form one row start-->
    <div class="ppro_form_bg">
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Username']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php 
                           /*echo "<pre>";
                            print_r($this->Session->read('Auth.User')); 
                            echo "</pre>";*/?>
                            <?php
                            echo $this->Form->input('User.username', array('maxlength' => 8, 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.username')));
                            ?>
                        </div>
                        <div class="validation" id="username1"
                             style="display:none"><?php echo $langs['Please enter valid username.']; ?></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Name']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php
                            echo $this->Form->input('User.firstname', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.firstname')));
                            ?>
                        </div>
                        <div class="validation" id="name1"
                             style="display:none"><?php echo $langs['Please enter valid first name.']; ?></div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['SurName']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php
                            echo $this->Form->input('User.lastname', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.lastname')));
                            ?>
                        </div>
                        <div class="validation" id="lastname1"
                             style="display:none"><?php echo $langs['Please enter valid surname.']; ?></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle">My Password</div>
                    </td>
                    <td class="ppr_fieldright">

                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.Mypassword', array('type' => 'password', 'id' => 'mypass2', 'label' => false, 'div' => false)); ?>
                        </div>
                        <!-- <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>-->
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Email']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php
                            echo $this->Form->input('User.email', array('label' => false, 'div' => false, 'class'=>'email_club', 'value' => $this->Session->read('Auth.User.email'), 'id' => "email_id", "readonly" => "readonly"));
                            ?>
                        </div>
                        <div class="validation" id="email1"
                             style="display:none"><?php echo $langs['Please enter valid email-Id.']; ?></div>
                        <div class="ppr_reset_pass">
                            <span id="loader" style="display: none">
                                <img alt="" src="<?php echo $this->webroot; ?>img/ajax-loader-new.gif">
                            </span>
                            <span id="reset_email">
                                <a href="JavaScript:void(0)"
                                   onclick="change_mail()"><?php echo $langs['Reset Email']; ?></a>
                            </span>
                        </div>

                    </td>
                </tr>


            </table>
        </div>
        <div class="main_pass"><?php echo $langs['Main Password']; ?></div>
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle">My Password</div>
                    </td>
                    <td class="ppr_fieldright">

                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.Mypassword', array('type' => 'password', 'id' => 'mypass', 'label' => false, 'div' => false)); ?>
                        </div>
                        <!-- <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>-->
                    </td>
                </tr>


                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Password']; ?></div>
                    </td>
                    <td class="ppr_fieldright">

                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.password', array('type' => 'password', 'id' => 'pass1', 'label' => false, 'div' => false)); ?>
                        </div>
                        <!-- <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>-->
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Repeat Pass.']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.retype_pass', array('type' => 'password', 'id' => 'confirmpass1', 'label' => false, 'div' => false)); ?>
                        </div>
                        <div class="validation" id="passerr1"
                             style="display:none"><?php echo $langs['Please enter repeat password.']; ?></div>
                        <div class="validation" id="passerr11"
                             style="display:none"><?php echo $langs['Password and repeat password not match.']; ?></div>
                        <div class="ppr_reset_pass">
                            <span id="loader" style="display: none">
                                <img alt="" src="<?php echo $this->webroot; ?>img/ajax-loader-new.gif">
                            </span>
                            <span id="reset_passOrg">
                                <a href="JavaScript:void(0)"
                                   onclick="change_password()"><?php echo $langs['Reset Password']; ?></a>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="main_pass"><?php echo $langs['Alternative Password']; ?> <span
                    class="red">(<?php echo $langs['you can give it to others for temporary use']; ?>)</span></div>
        <div class="main_pass" style="text-align: right;"><input type="checkbox" id="chkalt" checked>
            &nbsp; <?php echo $langs['Set as 1 access only']; ?></div>
        <div class="pprfield_row" id="altpasspanel">
            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle">My Password</div>
                    </td>
                    <td class="ppr_fieldright">

                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.Mypassword', array('type' => 'password', 'id' => 'mypass1', 'label' => false, 'div' => false)); ?>
                        </div>
                        <!-- <div class="ppr_reset_pass"><a href="#">Reset Password</a></div>-->
                    </td>
                </tr>


                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Password']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.alternate_pass', array('type' => 'password', 'id' => 'pass2', 'label' => false, 'div' => false)); ?>
                            <?php echo $this->Form->input('User.access_only_once', array('type' => 'hidden', 'label' => false, 'div' => false, 'value' => 'N')); ?>
                        </div>
                        <!--<div class="ppr_reset_pass"><a href="#">Reset Password</a></div>-->
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Repeat Pass.']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.altreppass', array('type' => 'password', 'id' => 'confirmpass2', 'label' => false, 'div' => false)); ?>
                        </div>
                        <div class="validation" id="passerr2"
                             style="display:none"><?php echo $langs['Please enter repeat password.']; ?></div>
                        <div class="validation" id="passerr12"
                             style="display:none"><?php echo $langs['Alternative password and repeat password not match.']; ?></div>

                        <div class="ppr_reset_pass">
                            <span id="loader1" style="display: none">
                                <img alt="" src="<?php echo $this->webroot; ?>img/ajax-loader-new.gif">
                            </span>
                            <span id="reset_passalt">
                                <a href="JavaScript:void(0)"
                                   onclick="altreppass()"><?php echo $langs['Reset Password']; ?></a>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--form one row end-->

    <div class="clear top_pad"></div>

    <!--form two row start-->
    <div class="ppro_form_bg">
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Country']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="custom-select pprselect"> <!--dropbox-->
                                <?php echo $this->Form->input('User.country_id', array('label' => false, 'div' => false, 'selected' => $this->Session->read('Auth.User.country_id'))); ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

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

        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Address']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                        <?php 
                          echo "<pre>";
                           // print_r($this->Session->read('Auth.Club')); 
                            echo "</pre>";?>

                            <?php echo $this->Form->input('Club.club_address', array('label' => false, 'div' => false, 'class'=>'address_club','value' => $this->Session->read('Auth.Club.club_address'))); ?>
                        </div>
                        <div class="validation" id="addrerr"
                             style="display:none"><?php echo $langs['Please enter valid address.']; ?></div>
                    </td>
                </tr>
                 <!-- ZST Add New row for "Locality" section Start !--->
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Locality']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                    <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('Club.club_locality', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_locality'))); ?>
                        </div>
                    </td>
                </tr>
                   <!-- ZST Add New row for "Locality" section End !--->
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Zip Code']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('User.zipcode', array('type' => 'text', 'maxlength' => 6, 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.zipcode'))); ?>
                        </div>
                        <div class="validation" id="zipcodeerr"
                             style="display: none"><?php echo $langs['Please enter zipcode.']; ?></div>
                        <div class="validation" id="zipnumerr"
                             style="display:none"><?php echo $langs['Please enter numeric character.']; ?></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle">Gender</div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="custom-select select45">
                                <?php echo $this->Form->input('User.gender', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.gender'), 'options' => array('M' => 'Male', 'F' => 'Female'))); ?>
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
                        <div class="ppr_fieldtitle"><?php echo $langs['Birthday']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="custom-select select25">
                                <?php
                                echo $this->Form->input('Club.dob', array('type' => 'date',
                                    'label' => false,
                                    'div' => false,
                                    'dateFormat' => 'D',
                                    'selected' => $this->Session->read('Auth.Club.dob')
                                ));
                                ?>
                            </div>
                            <div class="custom-select select25">
                                <?php
                                echo $this->Form->input('Club.dob', array('type' => 'date',
                                    'label' => false,
                                    'div' => false,
                                    'dateFormat' => 'M',
                                    'selected' => $this->Session->read('Auth.Club.dob')
                                ));
                                ?>
                            </div>
                            <div class="custom-select select25">
                                <?php
                                echo $this->Form->input('Club.dob', array('type' => 'date',
                                    'label' => false,
                                    'div' => false,
                                    'dateFormat' => 'Y',
                                    'selected' => $this->Session->read('Auth.Club.dob')
                                ));
                                ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['User Type']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                          
                            <div class="custom-select select100 usertype_sel">
                                <?php
                                echo $this->Form->input('Club.usertype_id', array(
                                    'label' => false,
                                    'div' => false,
                                    'options' => $clubusertype,
                                    'selected' => $this->Session->read('Auth.Club.usertype_id')
                                ));
                                ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>

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
            </table>
        </div>

    </div>
    <!--form two row end-->

    <div class="clear top_pad"></div>

    <!--form two new row start-->
    <div class="ppro_form_bg">
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Annotations']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <?php echo $this->Form->input('Club.annotations', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.annotations'))) ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="ppr-field-tr-div">
                            <div class="ppr_fieldleft-div ppr_fieldtitle">
                                <span class="add"><?php echo $langs['Add']; ?></span> <?php echo $langs['Coaches']; ?>
                            </div>
                            <div class="ppr_fieldright-div subsc"><?php echo $langs['Your subscription allows']; ?><span
                                        class="red"><?php echo $coach_limit; ?></span> <?php echo $langs['Coaches']; ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle">&nbsp;</div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="list-member">
                                <div class="member-thumb">
                                    <img alt="" src="<?= $this->webroot; ?>img/profile_image_4.jpg">
                                </div>
                                <div class="profile_detail">
                                    <b>Carl Stratton</b> <span
                                            style="float: right"><?php echo $langs['Member']; ?></span> <br>
                                    <span class="red1">Fitnesss and Aerobics</span> <br>
                                    Open Prefix
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="list-member">
                                <div class="member-thumb">
                                    <img alt="" src="<?= $this->webroot; ?>img/profile_image_4.jpg">
                                </div>
                                <div class="profile_detail">
                                    <b>Carl Stratton</b> <span
                                            style="float: right"><?php echo $langs['Member']; ?></span> <br>
                                    <span class="red1">Fitnesss and Aerobics</span> <br>
                                    Open Prefix
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="list-member">
                                <div class="member-thumb">
                                    <img alt="" src="<?= $this->webroot; ?>img/profile_image_4.jpg">
                                </div>
                                <div class="profile_detail">
                                    <b>Carl Stratton</b> <span
                                            style="float: right"><?php echo $langs['Member']; ?></span> <br>
                                    <span class="red1">Fitnesss and Aerobics</span> <br>
                                    Open Prefix
                                </div>
                                <div class="clear"></div>
                            </div>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Operators']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class=" select45">
                                <div class="custom-select">
                                    <select name="">
                                        <option placeholder=""><?php echo $langs['Network Team Type']; ?></option>
                                    </select>
                                </div>
                                <div class="validation"
                                     style="display:none"><?php echo $langs['Plz enter name']; ?></div>
                            </div>
                            <div class="select45">
                                <a class="add_operator"
                                   href="JavaScript:void(0)"><?php echo $langs['Add operator']; ?></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--form two new row end-->

    <div class="clear top_pad"></div>

    <!--form three row start-->
    <!--  <div class="ppro_form_bg">
        <div class="pprfield_row">                        
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft"><div class="ppr_fieldtitle">< ?php //echo $langs['Annotations'];?></div></td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">                                       
                                < ?php echo $this->Form->input('Club.annotations',array('label'=>false,'div'=>false,'value'=>$this->Session->read('Auth.Club.annotations'))) ?>
                        </div>                                    
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft"><div class="ppr_fieldtitle">< ?php echo $langs['Coaches'];?></div></td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="dropbox select25">
                                <select name="">
                                    <option placeholder="">1</option>                                                
                                </select>
                            </div>
                            <div class="dropbox select25">
                                <select name="">
                                    <option placeholder="">2</option>
                                </select>
                            </div>
                            <div class="dropbox select40">
                                <select name="">
                                    <option placeholder="">3</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft"><div class="ppr_fieldtitle">< ?php echo $langs['Operators'];?></div></td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class=" select45">
                                <div class="dropbox">
                                <select name="">
                                    <option placeholder="">< ?php echo $langs['Network Team Type'];?></option>
                                </select>
                                </div>
                                <div class="validation" style="display:none">< ?php echo $langs['Please enter name'];?></div>
                            </div>                                        
                            <div class="select45">
                                <a class="add_operator" href="JavaScript:void(0)">< ?php echo $langs['Add operator'];?></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>-->
    <!--form three row end-->

    <div class="clear top_pad"></div>

    <!--form four row start-->
    <div class="ppro_form_bg">
        <div class="pprfield_row">
            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Alternate Email']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('User.alternateEmail', array('label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.alternateEmail'))); ?>
                            </div>
                            <div class="validation" id="altemailvalid"
                                 style="display: none"><?php echo $langs['Please enter valid alternate email.']; ?></div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Phone']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="input45 whatsapp_phone" >      
                                <?php echo $this->Form->input('User.mobile_number', array('maxlength' => 10, 'label' => false, 'div' => false, 'placeholder' => 'Phone no', 'class'=>'phone_club', 'value' => $this->Session->read('Auth.User.mobile_number'))); ?>
                                <div class="validation" id="phone1"
                                     style="display:none"><?php echo $langs['Please enter phone no.']; ?></div>
                                <div class="validation" id="phonenum"
                                     style="display:none"><?php echo $langs['Please enter numeric character.']; ?></div>
                            </div>
                            <div class="input50">
                                <?php echo $this->Form->input('User.mobile_number1', array('maxlength' => 10, 'label' => false, 'div' => false, 'placeholder' => 'Alternate phone no', 'value' => $this->Session->read('Auth.User.mobile_number1'))); ?>
                                <div class="validation" id="phone1num"
                                     style="display:none"><?php echo $langs['Please enter numeric character.']; ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Social Site']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class=" select25">
                                <div class="custom-select">
                                    <select name="">
                                        <option placeholder=""><?php echo $langs['Facebook']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class=" input50">
                                <?php echo $this->Form->input('Club.fb_webaddr', array('label' => false, 'div' => false, 'placeholder' => 'Web address','class'=>'facebook_club', 'value' => $this->Session->read('Auth.Club.fb_webaddr'))); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Social Site']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class=" select25">
                                <div class="custom-select">
                                    <select name="">
                                        <option placeholder=""><?php echo $langs['Twitter']; ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class=" input50">
                                <?php echo $this->Form->input('Club.tw_webaddr', array('label' => false, 'div' => false, 'placeholder' => 'Web address', 'class'=>'twitter_club','value' => $this->Session->read('Auth.Club.tw_webaddr'))); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['My Website']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.website_addr', array('label' => false, 'div' => false,'class'=>'website_club', 'value' => $this->Session->read('Auth.Club.website_addr'))); ?>
                                <input type="checkbox" class="website_checkbox" checked > <span>Show in Club admin info</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>

                <!-- ZST Add new row for "Whatsapp" Secion Start !-->   
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Whatsapp']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.whatsapp', array('label' => false, 'div' => false, 'class'=>'whatsapp_club', 'value' => $this->Session->read('Auth.Club.whatsapp'))); ?>
                            </div>
                            <input type="checkbox" class="whatsapp_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "Whatsapp" Secion End !-->      
                
                 <!-- ZST Add new row for "Instagram" Secion Start !-->   
                 <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Instagram']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.intsagram', array('label' => false, 'div' => false, 'class'=>'instagram_club', 'value' => $this->Session->read('Auth.Club.instagram'))); ?>
                            </div>
                            <input type="checkbox" class="instagram_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "Instagram" Secion End !-->      
                 <!-- ZST Add new row for "You Tube" Secion Start !-->   
                 <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['You Tube']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.youtube', array('label' => false, 'div' => false,'class'=>'youtube_club', 'value' => $this->Session->read('Auth.Club.youtube'))); ?>
                            </div>
                            <input type="checkbox" class="youtube_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "You Tube" Secion End !-->   
                 <!-- ZST Add new row for "Linkedin" Secion Start !-->   
                 <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Linkedin']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.linkedin', array('label' => false, 'div' => false, 'class'=>'linkedin_club', 'value' => $this->Session->read('Auth.Club.linkedin'))); ?>
                            </div>
                            <input type="checkbox" class="linkedin_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "Linkedin" Secion End !-->      

                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['My blog site']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.blog_site', array('label' => false, 'div' => false,'class'=>'blog_club', 'value' => $this->Session->read('Auth.Club.blog_site'))); ?>
                            </div>
                            <input type="checkbox" class="blog_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
               
                     <!-- ZST Add new row for "Google map" Secion Start !-->   
                <tr>
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Google map']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.googlemap', array('label' => false, 'div' => false, 'class'=>'google_club','value' => $this->Session->read('Auth.Club.googlemap'))); ?>
                            </div>
                            <input type="checkbox" class="google_checkbox" checked > <span>Show in Club admin info</span>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
                <!-- ZST Add new row for "Google map" Secion End !-->      
                   <tr style="display:none">
                    <td class="ppr_fieldleft">
                        <div class="ppr_fieldtitle"><?php echo $langs['Other Site']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.other_site', array('label' => false, 'div' => false,'class'=>'site_club', 'value' => $this->Session->read('Auth.Club.other_site'))); ?>
                            </div>
                            <input type="checkbox" class="site_checkbox" checked > <span>Show in Club admin info</span>
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
                        <div class="ppr_fieldtitle"><?php echo $langs['About Me']; ?></div>
                    </td>
                    <td class="ppr_fieldright">
                        <div class="ppr_fieldcontent">
                            <div class="">
                                <?php echo $this->Form->input('Club.about_me', array('type' => 'textarea', 'rows' => 3, 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.about_me'))); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!--form four row end-->

    <div class="clear"></div>


    <!-- start
    <input type="button" name="add" value="add" onclick="addRow();" />
    <div class="pprfield_row">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr class="newTr1">
                <td class="ppr_fieldleft"><input id="skillId1" type="text" name="skills[]" class="skillCls" /></td>
                <td class="ppr_fieldleft"><input id="yearsId1" type="text" name="years[]" /></td>
            </tr>
            
        </table>
    </div>
    
    <script>
        var cnti = 2;
        function addRow(){
            alert(cnti);
            var htmlTxt='<tr class="newTr'+cnti+'"><td class="ppr_fieldleft"><input id="skillId'+cnti+'" type="text" name="skills[]" class="skillCls" /></td><td class="ppr_fieldleft"><input type="text" id="yearsId'+cnti+'" name="years[]" /></td></tr>';
            prev = cnti-1;
            $( ".newTr"+prev ).after( htmlTxt );
            cnti=cnti+1;
             callFun1();
        }
    /**************Autocomplete start ******************/
    
     $(function() {            
            callFun1();
        
    });
    
    
    
    function callFun1(){
        
        $(".skillCls").each(function(){//alert('hello');
            
            $(this).autocomplete({
              source: function(request, response) { 
        Idname=$(this.element).prop("id"); // OR a2=this.element[0].id;      
        var data = $('#date').text();
        var arr = Idname.split('skillId');
        //console.log(Idname);  console.log(arr[0]+' , '+arr[1]);
        thisCnt=arr[1];//return false;
                $.ajax({
                  url: '<?php echo $this->webroot; ?>Campaigns/ajaxreq',
                  data: {'q':request.term},
                  dataType: "json",
                  type: "POST",
                  success: function(data){
                      console.log(data);//return false;
                    response(data);
                  }
                });
              },
              focus: function( event, ui ) {
               $(this).val(ui.item.name);
              
               
                return false;
              },
              select: function( event, ui ) {  console.log(ui.item);alert('hey selected id='+ui.item.id+" and value="+ui.item.value);
                $(this).val(ui.item.value);
                //yaha select ke bad aata hai
                 $('#yearsId'+thisCnt).val(ui.item.id);
                return false;
              }
            })._renderItem = function (ul, item) {
              return $( "<li></li>" )
              .data( "item.autocomplete", item )
              .append( "<a>" + item.value + "</a>" )
              .appendTo( ul );
            };
          });
        
        
    }
    public function ajaxreq() {
        $this->autoRender = false;
        //$term = trim($_GET['q']);
        $a_json = array();
        $a_json_row = array();
        $sql = "select id,name from sports";
        $resquery = $this->Campaign->query($sql);
        //while($row = $resquery->fetch_assoc($resquery)) {
        foreach ($resquery as $resquery_key => $resquery_value) {
            //print_r($resquery_value);exit;
            $a_json_row["id"] = $resquery_value['sports']['id'];
            $a_json_row["value"] = $resquery_value['sports']['name'];
            //$a_json_row["label"] = $row['post_title'];
            array_push($a_json, $a_json_row);
        }
        echo json_encode($a_json);
        exit;
    }
    /*************************************************/
    </script>
    <!-- end  -->


    <!--form buttons start-->
    <div class="ppr_btn_box">
        <div class="btn_box_save">
            <?php echo $this->Form->submit($langs['Save'], array('label' => false, 'div' => false, 'class' => 'btn_red')); ?>
        </div>
        <div class="btn_box_save">
            <!--<a class="btn_black" href="#.">< ?php echo $langs['Cancel'];?></a>-->
            <input class="btn_red" type="reset" value="<?php echo $langs['Cancel']; ?>"/>
        </div>
    </div>
    <!--form buttons end-->
    <?php echo $this->Form->end(); ?>

</div>
<!--Admin profile content end-->
<script>
    function change_password() {

        var ask = confirm("Do you want really to reset your password");

        if (ask == true) {
            Mypassword = $("#mypass").val();
            passwordOrg = $("#pass1").val();
            passwordCon = $("#confirmpass1").val();


            if (Mypassword == "") {

                alert("Please enter the password field");
                return false;

            } else if (passwordOrg == "" || passwordCon == "") {
                alert("Please enter password");
                if (passwordOrg == "") {
                    $("#pass1").focus();
                } else if (passwordCon == "") {
                    $("#confirmpass1").focus();
                }
                return false;
            } else if (passwordOrg != passwordCon) {
                alert("password does not match please try again");
                return false;

            } else {

                $('#reset_passOrg').hide();
                $("#loader").show();

                $.post("club_reset_passwrod", {"password": passwordOrg, "Mypassword": Mypassword}, function (data) {
                    $("#loader").hide();
                    $('#reset_passOrg').show();

                    if (parseInt(data) == 1) {
                        $("#mypass").val('');
                        $("#pass1").val('');
                        $("#confirmpass1").val('');
                        alert("Password has been change successfully");
                    } else if (parseInt(data) == 0) {
                        alert("Something happen wrong please try again");
                    } else if (parseInt(data) == 2) {
                        alert("Sorry the My password field is not matched");
                    }
                });
            }
        }

    }


    function altreppass() {
        var ask = confirm("Do you want realy to reset your password");
        if (ask == true) {
            Mypassword = $("#mypass1").val();
            passwordOrg = $("#pass2").val();
            passwordCon = $("#confirmpass2").val();

            if (Mypassword == "") {

                alert("Please enter the password field");
                return false;

            } else if (passwordOrg == "" || passwordCon == "") {
                alert("Please enter password");
                if (passwordOrg == "") {
                    $("#pass2").focus();
                } else if (passwordCon == "") {
                    $("#confirmpass2").focus();
                }
                return false;
            } else if (passwordOrg != passwordCon) {
                alert("password does not match please try again");
                return false;

            } else {

                $('#reset_passalt').hide();
                $("#loader1").show();

                $.post("club_reset_passwrodalt", {
                    "alternate_pass": passwordOrg,
                    "Mypassword": Mypassword
                }, function (data) {
                    $("#loader1").hide();
                    $('#reset_passalt').show();

                    if (parseInt(data) == 1) {
                        $("#mypass1").val('');
                        $("#pass2").val('');
                        $("#confirmpass2").val('');
                        alert("Password has been change successfully");
                    } else if (parseInt(data) == 0) {
                        alert("Something happen wrong please try again");
                    } else if (parseInt(data) == 2) {
                        alert("Sorry the My password field is not matched");
                    }
                });
            }
        }
    }

    $(document).ready(function () {

        $("#submit_box").click(function () {

            Mypassword = $("#email_checksubmit_box").val();

            if (Mypassword == "") {
                alert("Please enter password");
                return false;
            } else {

                $("#submit_box").hide()
                $("#loader_pass").show();

                $.post("club_reset_email", {
                    "email": "<?php echo $_SESSION["Auth"]["User"]["email"];?>",
                    "Mypassword": Mypassword
                }, function (data) {
                    $("#loader_pass").hide();
                    $("#submit_box").show()
                    if (parseInt(data) == 1) {
                        $("#email_id").prop('readonly', false);
                        $(".club-pass-popup").hide();
                    } else if (parseInt(data) == 0) {
                        alert("Something happen wrong please try again");
                    } else if (parseInt(data) == 2) {
                        alert("Sorry the My password field is not matched");
                    }

                });

            }
        });
    })
    //

    //
    //                 var ask =confirm("Do you want realy to reset your email");
    //                 if(ask==true){
    //                 var Mypassword= $("#mypass2").val();
    //                 var email= $("#email_id").val();
    //
    //                   $('#reset_email').hide();
    //                   $("#loader1").show();
    //                  if(Mypassword == ""){
    //
    //                      alert("please enter password field");
    //                       $("#loader1").hide();
    //                      return false;
    //                  }else{
    //
    //
    //                   $.post("club_reset_email",{"email":email,"Mypassword":Mypassword},function(data){
    //                       $("#loader1").hide();
    //                       $('#reset_email').show();
    //
    //                       if(parseInt(data)== 1){
    //                            $("#mypass2").val('');
    //                           $("#email_id").val('');
    //                            alert("Email has been change successfully");
    //                       }else if(parseInt(data)== 0){
    //                            alert("Something happen wrong please try again");
    //                       }else if(parseInt(data)==  2){
    //                                  alert("Sorry the My password field is not matched");
    //                        }
    //                    });
    //
    //                  }
    //             }
    //           }

/// ZST Script

$(document).ready(function(){


$whatsapp_club = $(".whatsapp_club").val();
$(".social_whatsapp").html($whatsapp_club);

$instagram_club = $(".instagram_club").val();
$(".social_instagram").html($instagram_club);

$youtube_club = $(".youtube_club").val();
$(".social_youtube").html($youtube_club);


$linkedin_club = $(".linkedin_club").val();
$(".social_linkedin").html($linkedin_club);


$google_club = $(".google_club").val();
$(".social_google").html($google_club);


$blog_club = $(".blog_club").val();
$(".social_blog").html($blog_club);

$website_club = $(".website_club").val();
$(".social_website").html($website_club);


$address_club = $(".address_club").val();
$(".social_address").html($address_club);

$phone_club = $(".phone_club").val();
$(".social_phone").html($phone_club);

$email_club = $(".email_club").val();
$(".social_mail").html($email_club);

alert("sadfsf");




});


</script>