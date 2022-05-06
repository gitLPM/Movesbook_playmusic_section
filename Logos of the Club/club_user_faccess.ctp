<?php
$date_less31 = strtotime(date('Y-m-d', strtotime($_SESSION['Auth']['User']['subscription_end_date'] . ' - 30 day')));
$date = strtotime(date('Y-m-d'));
$end_date = strtotime($_SESSION['Auth']['User']['subscription_end_date']);
if ($date <= $date_less31) {
    $color = "#29AF4D";
    $display = 'none';
    $Exp_status = "Current";
} else if ($date > $date_less31 && $date <= $end_date) {
    $color = "#FF7E29";
    $display = 'block';
    $Exp_status = "Expiring";
} else {
    $color = "#EC2327";
    $display = 'block';
    $Exp_status = "Expired";
}
?>
<?php ?>
<?php
if (($statusMagneticbadge == "Y" || $statusRfidbadge_date == "Y" || $statusRfidbracelets_date == "Y" || $statuSmartcards_date == "Y")) {
    ?>
    <script type="text/javascript">
        //-----------------------------------5 day alert box------------------------------------------//

        $(document).ready(function () {
            if (!readCookie('five_day_message_box_hide_show')) {
                // console.log(readCookie('hide'));
                $('.five_day_message_box_hide_show').show();
            }
            $('.five_day_message_box').click(function () {
                $('.five_day_message_box_hide_show').hide();
                createCookie('five_day_message_box_hide_show', true, 1);
            });
        });
    </script>
<?php } ?>
<script type="text/javascript">
    function saveInfo(val, fname, val1) {

        if (fname != "dob") {

            var dtr = "val=" + val + "&fname=" + fname + "&pos=" + val1;
        } else {

            var dat = $("#ClubDobYear").val() + "-" + $("#ClubDobMonth").val() + "-" + $("#ClubDobDay").val();
            var dtr = "val=" + dat + "&fname=" + fname + "&pos=" + val1;
        }
        $.ajax({
            url: '<?php echo $this->webroot; ?>users/saveclubinfo',
            type: 'POST',
            data: dtr,
            success: function (data) {
                if (data == 1) {
                    $("#msg1").html('');
                    $("#msg").html('Profile updated successfully.');
                } else {
                    $("#msg").html('');
                    $("#msg1").html('Club information updated successfully.');
                }
                return false;
            },
            error: function (message) {
                //alert(message);
            }
        });

    }

    function valInfo(val, fname, val1) {

        if (document.getElementById("UserMobileNumber").value == "" || isNaN(document.getElementById("UserMobileNumber").value) || document.getElementById("UserMobileNumber").value.length != 10) {

            document.getElementById("moberr").innerHTML = "Please enter valid mobile no.";
            document.getElementById("UserMobileNumber").focus();
            return false;

        } else {

            document.getElementById("moberr").innerHTML = "";
            saveInfo(val, fname, val1);

        }

    }

    function valInfo1(val, fname, val1) {

        if (document.getElementById("UserMobileNumber1").value == "" || isNaN(document.getElementById("UserMobileNumber1").value) || document.getElementById("UserMobileNumber1").value.length != 10) {

            document.getElementById("moberr1").innerHTML = "Please enter valid mobile no.";
            document.getElementById("UserMobileNumber1").focus();
            return false;

        } else {
            document.getElementById("moberr1").innerHTML = "";
            saveInfo(val, fname, val1);
        }

    }

    var values = [];
    $(document).ready(function () {

        $(".chkcltype").click(function () {
            values = [];
            $(".chkcltype").each(function () {
                if ($(this).is(":checked"))
                    values.push($(this).val());
            });
            //alert(values);
            saveInfo(values, 'club_feature', '2');
        });
    });

    function removelogo() {
        window.location.href = "<?php echo $this->webroot; ?>users/removelogo";
    }

    $(function () {
        $.fn.bix = function (option) {
            var option_v = {
                color: 'red'
            }
            option_v = $.extend(option_v, option);
            // console.log(option_v);
            $(this).css({
                "color": option_v.color
            });
        }
    });

    $(document).ready(function () {
        $("#text").bix({
            "color": "black"
        });
    });
</script>
<script>
    function createCookie(name, value, days) {

        name = '<?php echo $_SESSION['Auth']['User']['id']; ?>' + name;
        if (days) {

            var date = new Date();
            date.setTime(date.getTime() + (days * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else
            var expires = "";

        document.cookie = name + "=" + value + expires + "; path=/";

    }

    function readCookie(name) {

        name = '<?php echo $_SESSION['Auth']['User']['id']; ?>' + name;
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0)
                return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        name = '<?php echo $_SESSION['Auth']['User']['id']; ?>' + name;
        createCookie(name, "", -1);
    }
</script>
<?php
$date = date('Y-m-d');
if ($account_current_date <= $date && $date <= $account_display_date) {
    ?>
    <script>
        $(document).ready(function () {
            // If the 'hide cookie is not set we show the message
            if (!readCookie('accounthide')) {

                // console.log(readCookie('hide'));
                $('.cuf-alert-popup-account').show();

            }
            // Add the event that closes the popup and sets the cookie that tells us to
            // not show it again until one day has passed.
            $('.close_div_alert-account').click(function () {

                $('.cuf-alert-popup-account').hide();
                createCookie('accounthide', true, 1);

            });
        });
    </script>
    <?php
} else {
    ?>
    <script>


    </script>
<?php } ?>
<?php
$date = date('Y-m-d');
if (($card_current_date <= $date && $date <= $card_display_date) || ($card_current_date_rfid_badges <= $date && $date <= $card_display_date_rfid_badges) || ($card_current_date_rfid_bracelets <= $date && $date <= $card_display_date_rfid_bracelets) || ($card_current_date_smartcards <= $date && $date <= $card_display_date_smartcards)) {
    ?>
    <script>
        $(document).ready(function () {

            // If the 'hide cookie is not set we show the message
            if (!readCookie('cardhide')) {
                $('.cuf-alert-popup-card-payment').show();
            }

            $('.close_div_alert-card').click(function () {

                $('.cuf-alert-popup-card-payment').hide();
                createCookie('cardhide', true, 1);
            });

            if (!readCookie('card_div')) {
                $('.card_div').show();
            }

            $('.close_carddiv').click(function () {

                $('.card_div').hide();
                createCookie('card_div', true, 1);
            });
        });
    </script>
    <?php
} else {
    ?>
    <script>

    </script>
<?php } ?>
<?php
if ($display == "block") {
    ?>
    <script>
        $(document).ready(function () {
            // If the 'hide cookie is not set we show the message
            if (!readCookie('hide')) {
                // console.log(readCookie('hide'));
                $('.cuf-alert-popup').show();
            }
            // Add the event that closes the popup and sets the cookie that tells us to
            // not show it again until one day has passed.
            $('.close_div_alert').click(function () {
                $('.cuf-alert-popup').hide();
                createCookie('hide', true, 1);
            });

        });
        $(document).ready(function () {
            $('.close_div_alert').click(function () {
                $('.cuf-alert-popup').hide();
            });
        });
    </script>
    <?php
} else {
    ?>

    <script>
        $(document).ready(function () {
            $('.close_div_alert').click(function () {
                $('.cuf-alert-popup').hide();

            });

            $('#h1').click(function () {
                alert("ok");
            });

        });
    </script>
<?php } ?>

<!--Column middle-->
<div class="">
    <div class="su_continue_btn"><input class="black_btn" name="" type="button" value="Continue"></div>
    <div class="clear"></div>
</div>
<?php
echo $this->Form->create('User');
?>
<div class="">

    <!--Your profile start-->
    <div class="border-b9 padding-10">
        <div class="su_row_no">1</div>
        <div class="su_row_title">
            <div><?php echo $langs['Complete Your Profile'] ?></div>
            <div class="su_subtext"><?php echo $langs['Complete your profile to find friends in your area with which to share routes or workouts'] ?></div>
        </div>
        <div class="clear"></div>
        <div id="msg" style="color:red;margin-left:321px;"></div>
        <div class="su_row_content" style="position:relative">
            <div class="left" style="position:relative;">
                <?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '104', 'height' => '113')), "#", array('escape' => false)); ?>
                <div class="pimg_click">
                    <a id="iframe" rel=""
                       href="<?php echo $this->webroot; ?>users/profile_pic/<?php echo $_SESSION['Auth']['User']['id'] . "/user"; ?>"
                       title=""><i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="right">
                <div class="su_fd_title"><?php echo $langs['Region'] ?></div>
                <div class="editselect_field cc_field su_fd_select">
                    <?php
                    echo $this->Form->input('User.state_id', array('label' => false, 'div' => 'false', 'default' => $userData['User']['state_id'], 'onchange' => 'saveInfo(this.value,"state_id","1");', 'option' => $states));
                    
                    //echo $this->Form->input('User.state_id', array('label' => false,'div'=>'false','default'=>$userData['User']['state_id'],'onchange'=>'saveInfo(this.value,"state_id","1");'));
                    ?>
                </div>
                <div class="su_fd_title"><?php echo $langs['Sport'] ?></div>
                <div class="editselect_field cc_field su_fd_select">
                    <?php echo $this->Form->input('User.sport_id', array('label' => false, 'div' => 'false', 'default' => $userData['User']['sport_id'], 'onchange' => 'saveInfo(this.value,"sport_id","1");')); ?>
                </div>
                <div class="su_selectbox1">
                    <div class="su_fd_title"><?php echo $langs['Gender'] ?></div>
                    <div class="editselect_field cc_field su_fd_select">
                        <?php echo $this->Form->input('User.gender', array('label' => false, 'div' => false, 'options' => array('M' => 'Male', 'F' => 'Female'), 'value' => $userData['User']['gender'], 'onchange' => 'saveInfo(this.value,"gender","1");')); ?>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="su_fd_title"><?php echo $langs['Birthday'] ?></div>
                <div class="su_selectbox1 su_date">
                    <div class="editselect_field cc_field su_fd_select">
                        <?php
                        echo $this->Form->input('Club.dob', array(
                            'type' => 'date',
                            'label' => false,
                            'div' => false,
                            'dateFormat' => 'D',
                            'empty' => "select",
                            'selected' => ($userDataCountry['Club']['dob']),
                            'onchange' => 'saveInfo(this.value,"dob","1");'
                        ));
                        ?>
                    </div>
                </div>
                <div class="su_selectbox2 su_month">
                    <div class="editselect_field cc_field su_fd_select ">
                        <?php
                        echo $this->Form->input('Club.dob', array(
                            'type' => 'date',
                            'label' => false,
                            'div' => false,
                            'dateFormat' => 'M',
                            'empty' => "select",
                            'selected' => ($userDataCountry['Club']['dob']),
                            'onchange' => 'saveInfo(this.value,"dob","1");'
                        ));
                        ?>
                    </div>
                </div>
                <div class="su_selectbox2 su_month">
                    <div class="editselect_field cc_field su_fd_select">
                        <?php
                        echo $this->Form->input('Club.dob', array(
                            'type' => 'date',
                            'label' => false,
                            'div' => false,
                            'dateFormat' => 'Y',
                            'empty' => "select",
                            'minYear' => date('Y'),
                            'maxYear' => date('Y') - 50,
                            'selected' => ($userDataCountry['Club']['dob']),
                            'onchange' => 'saveInfo(this.value,"dob","1");'
                        ));
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear mtop20">&nbsp;</div>
    </div>


    <!--Your profile end-->
    <!-- Info on your club start -->
    <div class="border-b9 padding-10 m_top_ten">
        <div class="info_onclub">
            <div class="info_onclub_title">
                 <!-- ZST Hide From !-->    
                <?php //echo $langs['Birthday'] ?>
                 <!-- ZST Hide End !-->    
            </div>
            <div class="club_info">
                <div class="clubinfo_left">
                    <div class="info_smalltitle"><?php echo $langs['Club logos'] ?></div>
                    <div class="infoclub_logo">
                        <?php if ($_SESSION['Auth']['User']['logo'] != '') { ?>
                            <?php echo $this->Html->link($this->Html->image('logo/' . $_SESSION['Auth']['User']['logo'], array('width' => '200', 'height' => '200')), "#", array('escape' => false)); ?>
                        <?php } else { ?>
                            <?php echo $this->Html->link($this->Html->image('logo/no_image.jpg', array('width' => '200', 'height' => '200')), "JavaScript:void(0)", array('escape' => false)); ?>
                        <?php } ?>
                    </div>
                    <div class="info_smalltitle"><a href="JavaScript:void(0)"
                                                    onclick="removelogo();">[<?php echo $langs['Remove photo']; ?>]</a>
                    </div>
                </div>
                <div class="clubinfo_right">
                    <div id="msg1" style="color:red;margin-bottom:10px;"></div>
                    <a class="black_btn cr_upload" id="iframe" rel=""
                       href="<?php echo $this->webroot; ?>users/logo_pic/<?php echo $_SESSION['Auth']['User']['id']; ?>"
                       title=""><?php echo $langs['Upload Logo']; ?></a>
                    <div class="clear">&nbsp;</div>
                    <div class="infoclub_field logo_info"><img src="<?php echo $this->webroot; ?>img/logo_info.jpg">
                    </div>
                    <div><?php echo $langs['Info on the club'] ?></div>
                    <div class="infoclub_field">
                        <?php echo $this->Form->input('Club.club_info', array('label' => false, 'div' => 'false', 'type' => 'textarea', 'default' => $userDataCountry['Club']['club_info'], 'onchange' => 'saveInfo(this.value,"club_info","2");')); ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clubinfo_checks nmt-10">
                <?php $featurearr = explode(",", $userDataCountry['Club']['club_feature']); ?>
                <?php for ($i = 0; $i < count($clubfeaturesList); $i++) { ?>
                    <div class="infochekbox">
                        <input name="chkcltype[]" class="chkcltype" type="checkbox" <?php
                        for ($y = 0; $y < count($featurearr); $y++) {
                            if ($featurearr[$y] == $clubfeaturesList[$i]['clubfeatures']['id']) {
                                echo "checked";
                            }
                        }
                        ?>
                               value="<?php echo $clubfeaturesList[$i]['clubfeatures']['id']; ?>">&nbsp;<?php echo $clubfeaturesList[$i]['clubfeatures']['feature_name']; ?>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </div>

            <div class="infoclub_mater mt-20">
                <div class="icf1 edit_field ">
                    <?php echo $this->Form->input('Club.club_address', array('label' => false, 'style' => array('width:100%'), 'div' => 'false', 'placeholder' => 'type here address for club', 'default' => $userDataCountry['Club']['club_address'], 'onchange' => 'saveInfo(this.value,"club_address","2");')); ?>
                </div>
                <div class="icf2 edit_field ">
                    <?php echo $this->Form->input('User.mobile_number', array('maxlength' => '10', 'label' => false, 'div' => 'false', 'placeholder' => 'Phone number 1', 'default' => $userData['User']['mobile_number'], 'onchange' => 'valInfo(this.value,"mobile_number","2");')); ?>
                    <div id="moberr" style="color:red"></div>
                </div>
                <div class="icf2 edit_field ">
                    <?php echo $this->Form->input('User.mobile_number1', array('maxlength' => '10', 'label' => false, 'div' => 'false', 'placeholder' => 'Phone number 2', 'default' => $userData['User']['mobile_number1'], 'onchange' => 'valInfo1(this.value,"mobile_number1","2");')); ?>
                    <div id="moberr1" style="color:red"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php
    echo $this->Form->end();
    ?>
    <!-- Info on your club end -->
    <div class="clear mtop10">&nbsp;</div>
    <!--Find Your friends start-->
    <div class="border-b9 padding-10 m_top_ten">
        <div class="su_row_no">2</div>
        <div class="su_row_title">
            <div><?php echo $langs['Find Your Friends']; ?></div>
        </div>
        <div class="clear"></div>
        <div class="fyf_row ">
            <div class="fyf_row_sr"><?php echo $langs['A']; ?></div>
            <div class="fyf_row_right">
                <span class="su_subtext"><?php echo $langs['See what friends in Facebook are using Sportbook']; ?></span><br><br>
                <a href="JavaScript:void(0)"><img src="<?php echo $this->webroot; ?>img/facebook_connected.jpg"></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="fyf_row ">
            <div class="fyf_row_sr"><?php echo $langs['B']; ?></div>
            <div class="fyf_row_right">
				<span class="su_subtext"><?php echo $langs['You do not know anyone on Sportbook?']; ?><br>
					<?php echo $langs['Invite your friends and compared with them']; ?> </span><br><br>
                <a href="JavaScript:void(0)"><img src="<?php echo $this->webroot; ?>img/invite_mail.jpg"></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="fyf_row ">
            <div class="fyf_row_sr"> <?php echo $langs['C']; ?></div>
            <div class="fyf_row_right">
                <span class="su_subtext"><?php echo $langs['Find your friends on Sportbook?']; ?></span><br><br>
                <span class="search_friend_box"><input class="black_btn" name="" type="button"
                                                       value="<?php echo $langs['Search and invite your friends']; ?>"></span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--Find Your friends end-->
    <div class="border-b9 padding-10 m_top_ten">
        <!--choose Your favorite device start-->
        <div class="su_row_no">3</div>
        <div class="su_row_title">
            <div><?php echo $langs['Choose Your Favorite Device']; ?></div>
        </div>
        <div class="clear"></div>
        <div class="fd_row ">
            <div class="fd_left su_subtext">
                <?php echo $langs['Use your GPS device to upload your workouts and keep track of your improvements']; ?>
                <br><br>
                <span class="search_friend_box"><a href="<?php echo $this->webroot; ?>users/club_user_select_device"
                                                   class="black_btn"><?php echo $langs['Select your device']; ?></a></span><br>
                <span class="clear"></span><br><br>
                <?php echo $langs['You do not have a GPS  device? Download our app for smartphones']; ?><br><br>
                <img src="<?php echo $this->webroot; ?>img/iphonandro.jpg">
            </div>
            <div class="fd_right">
                <img src="<?php echo $this->webroot; ?>img/favorite_device.jpg">
            </div>
            <div class="clear"></div>
        </div>
        <!--choose Your favorite device end-->
        <!--partner icons start-->
        <div style="padding-bottom: 20px;">
            <div class="p-logo">
                <div class="p-logo-in"><img src="<?php echo $this->webroot; ?>img/garmin_b.jpg"></div>
            </div>
            <div class="p-logo">
                <div class="p-logo-in"><img src="<?php echo $this->webroot; ?>img/suunto_b.jpg"></div>
            </div>
            <div class="p-logo">
                <div class="p-logo-in"><img src="<?php echo $this->webroot; ?>img/timex_b.jpg"></div>
            </div>
            <div class="p-logo">
                <div class="p-logo-in"><img src="<?php echo $this->webroot; ?>img/tomtom_b.jpg"></div>
            </div>
            <div class="p-logo">
                <div class="p-logo-in"><img src="<?php echo $this->webroot; ?>img/soleus_b.jpg"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--partner icons end-->
    </div>
    <!--set Your preference start-->
    <div class="border-b9 padding-10 m_top_ten">
        <div class="su_row_no">4</div>
        <div class="su_row_title">
            <div><?php echo $langs['Set Your Preferences and Privacy']; ?></div>
        </div>
        <div class="clear"></div>
        <div class="fd_row su_subtext">
            <?php echo $langs['Determine_what_Data_show']; ?>
        </div>
        <div class="gosetting_btn"><input class="black_btn" name="" type="button"
                                          value="<?php echo $langs['Go to my setting section']; ?>"></div>
    </div>
    <!--set Your preference end-->
    <!-- club link start-->
    <div class="border-b9 padding-10 m_top_ten">
        <div class="su_row_no">5</div>
        <div class="su_row_title">
            <div><?php echo $langs['Link your other club']; ?></div>
        </div>
        <div class="clear"></div>
        <div class="validation" id="email_error"
             style="display: none; padding: 0 0 0 169px; height: 30px;"><?php echo $langs['username or Password does not match please try again']; ?></div>
        <div style="padding: 10px 0" class=" su_subtext">
            <div style="float: left; width: 35%; text-align: right; padding-right: 10px;">
                <?php echo $langs['Username']; ?>
            </div>
            <div style="float: left; width: 50%;">
                <?php echo $this->Form->input("users.username", array("type" => "text", "id" => "username", "div" => false, "label" => false, "style" => array("width:200px"))); ?>
            </div>
            <div class="clear ptop10"></div>
            <div style="text-align: center; margin: -5px 0 5px;" class="validation" id="valid_username"></div>
            <div style="float: left; width: 35%; text-align: right; padding-right: 10px;">
                <?php echo $langs['Password']; ?>
            </div>
            <div style="float: left; width: 50%;">
                <?php echo $this->Form->input("users.password", array("type" => "password", "id" => "password", "div" => false, "label" => false, "style" => array("width:200px"))); ?>
                <!-- <input style="width: 200px;" type="password">-->
            </div>
            <div class="clear ptop10"></div>
            <div style="text-align: center; margin: -5px 0 5px;" class="validation" id="valid_password"></div>
        </div>
        <div class="gosubmit_btn" style="padding-top: 15px">
            <input class="black_btn" name="" type="button" value="Submit" onclick="return(validation())"
                   id="submit_button">
            <span id="loader" style="display: none"> <?php echo $this->Html->image('ajax-loader-new.gif'); ?> </span>
        </div>
        <div class="tabular-list">
            <div style="">
                <?php if (count($club_pending_users) >= 1) { ?><span
                        style="float:right; cursor: pointer; text-decoration: underline;">
                    <string><a href="JavaScript:void(0)"
                               onclick="pending_request()"><?php echo $langs['Pending Request']; ?></a>
                    </span><?php } ?>
                <div class="clear"></div>
            </div>
            <div style="display: none" id="pending_request">
                <?php
                if (isset($club_pending_users)) {
                    
                    foreach ($club_pending_users as $club_pending_name) {
                        if (!empty($club_pending_name['users']['logo'])) {
                            $club_pending_image = $club_pending_name['users']['logo'];
                        } else {
                            $club_pending_image = "no_image.jpg";
                        }
                        ?>
                        <div style=" padding: 5px 0; border-bottom: 1px solid #cfcfcf;">
                            <div class="member_img_thumb">
                                <?php echo $this->Html->image("logo/" . $club_pending_image); ?>
                            </div>
                            <div class="profile_detail">
                                <span class="new_member_title"><?php echo ucfirst($club_pending_name['users']['username']); ?></span><br>
                                <span style="float: left; color: #ccc; font-size: 13px;"><?php echo $langs['Total Members']; ?></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <?php
            if (isset($club_users)) {
                foreach ($club_users as $club_name) {
                    if (!empty($club_name['users']['logo'])) {
                        $club_image = $club_name['users']['logo'];
                    } else {
                        $club_image = "no_image.jpg";
                    }
                    ?>
                    <div style=" padding: 5px 0; border-bottom: 1px solid #cfcfcf;">
                        <div class="member_img_thumb">
                            <?php echo $this->Html->image("logo/" . $club_image); ?>
                        </div>
                        <div class="profile_detail">
                            <span class="new_member_title"><?php echo ucfirst($club_name['users']['username']); ?></span><br>
                            <span style="float: left; color: #ccc; font-size: 13px;"><?php echo $langs['Total Members']; ?></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php
                }
            }
            ?>
            <!--<div style=" padding: 5px 0; border-bottom: 1px solid #cfcfcf;">
					<div class="member_img_thumb"> <img alt="" src="<?= $this->webroot; ?>img/profile_image_6.jpg"> </div>
					<div class="profile_detail">
					<span class="new_member_title">Il Mattino</span><br>                               
					<span style="float: left; color: #ccc; font-size: 13px;">Total Members</span>
					</div>
					<div class="clear"></div>
				</div>-->
        </div>
    </div>
    <!-- club link end-->
</div>
<?php ?>
<!--Column middle end-->

<!--monika 04/05/2020-->

<?php
$enabled = $deviceAccessControl['AccessControlPanel']['access_control_secondary'] == 1;
$link_for_access_modal = $enabled ? ['vertical', 'horizontal'] : [];
$link_for_access_modal[] = 'my_club';
$link_for_access_modal[] = 'shop';
echo $this->element('club/club_user_access_modal', [
    'links' => $link_for_access_modal
]); ?>

<?php foreach ($userResult as $value) { ?>
    <input type="hidden" class="directaccess" value="<?php echo $value['Role']['name'] ?>">
<?php } ?>

<script>
    $(document).ready(function () {
        $(".pop-outer").hide();
        var Access = $(".directaccess").val();
        //console.log(Access);
        if (Access == 'Club') {
            //console.log(Access);
            $(".pop-outer").show();
            $(".close").click(function () {
                $(".pop-outer").hide();
            });
        }
    });


    function validation() {
        //             else if(!namePat.test(vname.trim())){
        //                   $("#valid_username").text("Please enter valid name");
        //                   return false;
        //             }
        var vname = $("#username").val();
        var vpassword = $("#password").val();
        var namePat = /^[a-zA-Z ]{2,30}$/;
        ;
        if (vname == "") {

            $("#valid_username").text("Please enter name");
            return false;
        } else {
            $("#valid_username").text("");
        }
        if (vpassword == "") {

            $("#valid_password").text("Please enter password");
            return false;
        } else {
            $("#valid_password").text("");

        }
        $("#submit_button").hide();
        $("#loader").show();
        // alert("< ?php echo $this->webroot;?>users/link_your_other_club"); return false;
        $.post("<?php echo $this->webroot; ?>users/link_your_other_club", {
            username: vname,
            passowrd: vpassword
        }, function (data) {
            $("#loader").hide();
            $("#submit_button").show();
            if (data == 0) {
                $("#password").val('');
                $("#email_error").text("username or Password does not match please try again").css({
                    "padding": "padding: 0 0 0 169px",
                    "height": "30px"
                }).fadeIn();
                setTimeout(function () {
                    $("#email_error").fadeOut();

                }, 2500);

            } else if (data == 1) {

                $("#username").val('');
                $("#password").val('');
                $("#email_error").css({
                    "padding": "0 0 0 213px",
                    "height": "30px"
                }).text("The request has been send successfully").fadeIn();
                setTimeout(function () {
                    $("#email_error").fadeOut();

                }, 2500);

            } else {

                $("#email_error").css({
                    "padding": "0 0 0 213px",
                    "height": "30px"
                }).text(data).fadeIn();
                setTimeout(function () {
                    $("#email_error").fadeOut();

                }, 2500);

            }
        });
    }
</script>
<script>
    function pending_request() {
        $("#pending_request").slideToggle();
    }


    function updateMessageStatus() {

        $.ajax({
            url: '<?php echo $this->Html->Url(array('controller' => 'users', 'action' => 'ajax_update_message_userids')); ?>',
            type: 'POST',
            success: function (data) {
                alert(data);
            }
        });
    }
</script>
<!--monika 04/05/2020-->