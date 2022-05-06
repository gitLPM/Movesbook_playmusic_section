<?php

$arrayPost = $this->requestAction('Clubs/findclub_post'); // This function return club post define in clubs
///pr($arrayPost);exit; 
?>

<style>
    .panelsocial {
        display: none;
    }

    .mc_social .sublinks li a {
        position: none;
    }

    .hepre img {
        width: 100px !important
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $(".clicksocial").click(function() {
            $(".panelsocial").slideToggle("slow");
        });
    });
</script>

<script type="text/javascript">
    var togglestatus = false;

    function togglemenu(id) {
        switch (togglestatus) {
            case true:
                $("#togglesubmenu").slideToggle(1000);
                togglestatus = false;
                break;
            case false:
                $("#togglesubmenu").slideToggle(1000);
                togglestatus = true;
                break;
            default:
                break;
        }
    }
</script>
<script type="text/javascript">
    var togglestatus = false;

    function togglemenu4(id) {
        switch (togglestatus) {
            case true:
                $("#togglesubmenu4").slideToggle(1000);
                togglestatus = false;
                break;
            case false:
                $("#togglesubmenu4").slideToggle(1000);
                togglestatus = true;
                break;
            default:
                break;
        }
    }
    function togglemenu4_1(id) {
        switch (togglestatus) {
            case true:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = false;
                break;
            case false:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = true;
                break;
            default:
                break;
        }
    }
    function togglemenu4_2(id) {
        switch (togglestatus) {
            case true:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = false;
                break;
            case false:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = true;
                break;
            default:
                break;
        }
    }

    function togglemenu4_3(id) {
        switch (togglestatus) {
            case true:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = false;
                break;
            case false:
                $("#togglesubmenu4_1").slideToggle(1000);
                togglestatus = true;
                break;
            default:
                break;
        }
    }
</script>

<div class="mc_social tab_content_menu">

<ul>
        <li>           
            <a class="tabBtnMenu darkbtn" style="background: #004040;color: #fff;" href="javascript:void(0)" onclick="togglemenu4_3()">
                <img class="icon" src="/img/messages.png" alt="">  <span class="text">Music Channel  <span class="rightarrow"><i class="fa fa-caret-down"></i></span><br></span> </a>
            <ul style="display:block;" id="togglesubmenu4_1" class="sublinks">  
                      <div style="padding-left:5px">   
            
            <li>               
            <span class="pl_title" style="padding-left:5px" >Club Music</span>
            </li> <br>   
            
            <li>               
            <span class="pl_title" style="padding-left:5px" >- Mood Music</span>
            </li> <br>   

         
            </div>
            </ul>
            <!--------// Posts //-------->

        </li>
    </ul>

<!-- ZST Add New Session "Club Admin Info" Start !-->
            <?php 
                $currentUrl = $this->here;
                $currentUrl;
                $pieces = explode("/", $currentUrl);
                $current_page = $pieces[3];
                ?>
<?php 

if($current_page=="editclubinfo")
{?>     
 <ul>
        <li>
           
            <a class="tabBtnMenu darkbtn" style="background: #004040;color: #fff;" href="javascript:void(0)" onclick="togglemenu4_1()">
                <img class="icon" src="/img/messages.png" alt="">  <span class="text_yellow">Club admin info<br></span> </a>
            <ul style="display:block;" id="togglesubmenu4_1" class="sublinks">  
                      <div style="padding-left:5px">   
            <li>
                <i class="fa fa-exclamation-circle" style="font-size:28px;color:gray"></i> 
            <span class="pl_title" style="padding-left:5px" ><?php echo $langs['Address']; ?></span>
            <br>
            <span class="pl_title social_address" style="padding-left:35px;font-size:12px;color:#FFFFFF"></span>
                </li> <br>

            <li><i class="fa fa-phone" style="font-size:28px;color:gray"></i> 
            <span>
            <a href="tel:<?php echo $this->Session->read('Auth.User.mobile_number')?>">
            <span class="pl_title pl-5"  style="margin-left: -23px;"><?php echo $langs['Phone']; ?></span>
            <br>
            <span class="pl_title social_phone" style="padding-left:35px;font-size:12px;color:#FFFFFF"></span>
            </a>
            </span>
                </li><br>

            <li><i class="fa fa-send" style="font-size:28px;color:gray"></i> 
            <span>
            <a href="mailto:<?php echo $this->Session->read('Auth.User.email'); ?>">
            <span class="pl_title pl-5"  style="margin-left: -25px;"><?php echo $langs['Mail']; ?></span><br>
            <span class="pl_title social_mail" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>
            </a>
            </span>
                </li><br>         

            <div id="website_area">
            <li >
                <i class="fa fa-globe" style="font-size:28px;color:gray"></i> 
            <span class="pl_title pl-5" style="padding-left:5px" ><?php echo $langs['Website']; ?></span><br>
            <span class="pl_title social_website" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span> 
            <br></li>
            </div>
          
            <div id="facebook_area">
            <li><i class="fa fa-facebook-square" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Facebok']; ?></span><br>
            <span class="pl_title social_facebook" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span> 
            </li><br>
            </div>

            <div id="twitter_area">
            <li><i class="fa fa-twitter" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Twiter']; ?></span><br>
            <span class="pl_title social_twitter" style="padding-left:35px;font-size:8px;color:#FFFFFF"></span> 
            </li><br>
</div>
<div id="whatsapp_area">
            <li><i class="fa fa-whatsapp" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Whatsapp']; ?></span>
            <br>
            <span class="pl_title social_whatsapp" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>
           </li><br>
</div>

<div id="instagram_area">
            <li><i class="fa fa-instagram" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Instagram']; ?></span><br>
            <span class="pl_title social_instagram" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>            
            </li><br>
</div>

<div id="youtube_area">
            <li><i class="fa fa-youtube-play" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['You Tube']; ?></span><br>
            <span class="pl_title social_youtube" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>            
            </li><br>
</div>
<div id="linkedin_area">
            <li><i class="fa fa-linkedin-square" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Linkedin']; ?></span><br>
            <span class="pl_title social_linkedin" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>
            </li><br>
</div>
<div id="blog_area">
            <li><i class="fa fa-bookmark-o fa-rotate-180" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">&nbsp;<?php echo $langs['Blog site']; ?></span><br>
            <span class="pl_title social_blog" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>
            </li><br>
</div>
<div id="google_area">

            <li><i class="fa fa-arrows" style="font-size:26px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"><?php echo $langs['Google map']; ?></span><br>
            <span class="pl_title social_google" style="padding-left:35px;font-size:10px;color:#FFFFFF"></span>
            </li><br>
</div>


            <li><i class="fa fa-share-alt" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">share page</span>
            </li><br>

            <li><i class="fa fa-bookmark-o" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">open profile</span>
            </li><br>

            <li><i class="fa fa-ellipsis-h" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"></span>
            </li><br>
            </div>
            </ul>
            <!--------// Posts //-------->

        </li>
    </ul>
    <?php
    }
?>
<!-- ZST Add New Session "Club Admin Info" End !-->


<!-- ZST Add New Session "Club Info" Start !-->
<?php 

if($current_page=="club_profile")
{?>     
 <ul>
        <li>           
            <a class="tabBtnMenu darkbtn" style="background: #004040;color: #fff;" href="javascript:void(0)" onclick="togglemenu4_2()">
                <img class="icon" src="/img/messages.png" alt="">  <span class="text_yellow">Club  info <br></span> </a>
            <ul style="display:block;" id="togglesubmenu4_1" class="sublinks">  
                      <div style="padding-left:5px">   
            <li>
                <i class="fa fa-exclamation-circle" style="font-size:28px;color:gray"></i> 
            <span class="pl_title" style="padding-left:5px" >address</span>
                </li> <br>

            <li><i class="fa fa-phone" style="font-size:28px;color:gray"></i> 
            <span>
            <a href="tel:<?php echo $this->Session->read('Auth.User.mobile_number')?>">
            <span class="pl_title pl-5"  style="margin-left: -23px;">phone</span>
            </a>
            </span>
                </li><br>

            <li><i class="fa fa-send" style="font-size:28px;color:gray"></i> 
            <span>
            <a href="mailto:<?php echo $this->Session->read('Auth.User.email'); ?>">
            <span class="pl_title pl-5"  style="margin-left: -25px;">mail</span>
            </a>
            </span>
                </li><br>         

            <li><i class="fa fa-globe" style="font-size:28px;color:gray"></i> 
            <span class="pl_title pl-5" style="padding-left:5px" >website</span>
                </li><br>

            <li><i class="fa fa-facebook-square" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">facebook</span>
            </li><br>

            <li><i class="fa fa-twitter" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">twitter</span>
            </li><br>

            <li><i class="fa fa-whatsapp" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">whatsapp</span>
            </li><br>

            <li><i class="fa fa-instagram" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">instagram</span>
            </li><br>

            <li><i class="fa fa-youtube-play" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">you tube</span>
            </li><br>

            <li><i class="fa fa-linkedin-square" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">linkedin</span>
            </li><br>

            <li><i class="fa fa-bookmark-o fa-rotate-180" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">&nbsp;blog site</span>
            </li><br>

            <li><i class="fa fa-arrows" style="font-size:26px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">google map</span>
            </li><br>

            <li><i class="fa fa-share-alt" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">share page</span>
            </li><br>

            <li><i class="fa fa-clock-o" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">Calender Courses</span>
            </li><br>

            <li><i class="fa fa-bookmark-o" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px">open profile</span>
            </li><br>

            <li><i class="fa fa-ellipsis-h" style="font-size:28px;color:gray"></i>
            <span class="pl_title pl-5" style="padding-left:5px"></span>
            </li><br>
            </div>
            </ul>
            <!--------// Posts //-------->

        </li>
    </ul>
    <?php
    }
?>
<!-- ZST Add New Session "Club Info" End !-->


    
    <ul>
        <li>
            <a class="tabBtnMenu darkbtn" style="background: #004040;color: #fff;" href="javascript:void(0)" onclick="togglemenu4()">
                <img class="icon" src="/img/messages.png" alt=""> Messages

            </a>
            <ul style="display:none;" id="togglesubmenu4" class="sublinks">
                <li>
                    <a class="cm_cma_sublinks" href="<?= $this->webroot; ?>clubs/messages" data-toogle-panel=".postClubsContainer">
                        Alerts to members
                    </a>
                </li>

                <li>
                    <a class="cm_cma_sublinks" href="javascript:void(0)" data-toogle-panel=".postClubsContainer">
                        Messages among staff and members
                    </a>
                </li>
            </ul>
            <!--------// Posts //-------->
        </li>
    </ul>
</div>

<div class="div1">

    <div class="mc_social tab_content_menu  base-sprite-menu">
        <!-- <ul>
     <li>
            <a class="tabBtnMenu darkbtn" href="javascript:void(0)" onclick="togglemenu4()">
                <img class="icon" src="<?= $this->webroot; ?>img/message-icon-white.png" alt=""> Messages
                
            </a>    
            <ul style="display:none;" id="togglesubmenu4" class="sublinks"> -->
        <!--------// Posts //-------->
        <!-- </li>
            </ul> -->
        <ul>

            <li>
                <a class="tabBtnMenu darkbtn" style="background: #7d0420;color:white;" href="javascript:void(0)" onclick="togglemenu()">
                    <img class="icon" src="/img/globe-white-icon.png" alt=""> SOCIAL AND TRAINING
                    <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                </a>
                <ul style="display:none;" id="togglesubmenu" class="sublinks">

                    <!-- User guides -->

                    <li>
                        <a class="tabBtnMenu colorbtn" href="JavaScript:void(0)" data-toogle-panel="#userGuidesTabMenu">
                            User guides
                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                        </a>

                        <div id="userGuidesTabMenu">
                            <ul class="sublinks p-left-0">
                                <li>
                                    <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                        <span class="image-menu base-icons icon-info" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_s&t_help'">
                                        </span>
                                        <span class="text" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/Info_Man_Help'"><?= $langs['help_documents']; ?></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/social-section-help-documents">
                                        Social section
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/training-section-help-documents">
                                        Training section
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                        <span class="image-menu base-icons icon-message" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_st_faq'"></span>
                                        <span class="text" style="font-size:9px;" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/Info_Man_Faq'"><b style="font-size:13px;"><?= $langs['FAQs']; ?></b> <?= $langs['frequently_asked_questions']; ?></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/social-section-faq">
                                        Social section
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/training-section-faq">
                                        Training section
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                        <span class="image-menu base-icons icon-video" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_st_tut'"></span>
                                        <span class="text" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/Info_Man_Tut'"><?= $langs['video_tutorials']; ?></span>
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/social-section-video">
                                        Social section
                                    </a>
                                </li>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/user_guides/training-section-video">
                                        Training section
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--------// Posts //-------->
                    <li>
                        <a class="tabBtnMenu colorbtn" href="javascript:void(0)" data-toogle-panel=".postClubsContainer">
                            <img class="icon" src="<?= $this->webroot; ?>img/right-tag-white.png" alt="">
                            <?php echo $langs["Posts"]; ?>
                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                        </a>
                        <?php
                        echo $this->Html->link($this->Html->tag("i", "", array("class" => "fa fa-cog ml5 internetLinkIocn")), "javascript:void(0)", array("class" => "postSettingButton", "escape" => false, "onclick" => "togglemngmenu('postSettingContainer')"));
                        ?>
                        <div style="display:none;" id="postSettingContainer" class="dashboardsetting dashopen1 postSettingContainer">
                            <div class="titlebox">
                                Alerts and Notices
                                <?php
                                echo $this->Html->link($this->Html->tag('i', '', array("class" => "fa fa-times-circle")), "javascript:void(0)", array("onclick" => "togglemngmenu('postSettingContainer')", "class" => "fright", "escape" => false));
                                ?>
                            </div>
                            <div class="dashsetting">
                                <ul>
                                    <li>
                                        <a class="memberpanel" href="<?php echo $this->webroot; ?>clubmembers/alert_member_login">
                                            Alerts and notices for the members at the login
                                        </a>
                                    </li>
                                    <li>
                                        <a class="memberpanel" href="<?php echo $this->webroot; ?>clubmembers/alert_member_logout">
                                            Alerts for the members at the logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="postClubsContainer" style="display:none;">
                            <ul id="togglesubmenu" class="sublinks">
                                <li>
                                    <?php
                                    if ($this->params['controller'] != "searchresults" && $this->params['action'] != "search") {
                                    ?>
                                        <?php
                                        /* <span class="rightarrow"><span class="red circle"></span><span class="yellow circle"></span><span class="green circle"></span></span> */
                                        //echo $this->Html->link('Members',array('controller'=>'clubs','action'=>'club_members','all'),array( 'escape' => false)); 
                                        ?>
                                    <?php
                                    } else {
                                        //  if($userResult[0]['User']['Clubmember_cnt']!=1 && in_array('Members',$sadmallowarr)) { 
                                    ?>
                                        <!--<a href="javascript:void(0)"><?php //echo $langs["members"]; 
                                                                            ?> </a>-->
                                    <?php
                                        // }
                                    }
                                    ?>
                                </li>
                                <?php
                                /*                 * *******This code is used to find url as per key value in arrayPost************************* */
                                $urlLinkArray = array(
                                    "members" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Blog" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Photos" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Videos" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Trainings" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Events" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Music" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Club's and coaches" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Race" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Record" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Sport events" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Club statistics" => array('controller' => 'clubs', 'action' => 'club_social_items'),
                                    "Thoughts" => array('controller' => 'clubs', 'action' => 'club_social_items')
                                );
                                /*                 * ************************************END************************************************* */
                                ////////For icons/////////////
                                $iconsLinkArray = array(
                                    "Anniversary" => 'anniversary.png',
                                    "Appoinments" => 'appointments.png',
                                    "Blog" => 'blog.png',
                                    "Bacheca" => 'bacheka.png',
                                    "Body measure" => 'body-measures.png.png',
                                    "Club's and coaches" => 'members.png',
                                    "Clubs and coaches" => 'members.png',
                                    "Club statistics" => 'statistics.png',
                                    "Club's coaches" => 'my-clubs.png',
                                    "Club's groups" => 'my-groups.png',
                                    "Club's photos" => 'photo.png',
                                    "Club's teams" => 'my-coaches2.png',
                                    "Club's statistics" => 'statistics.png',
                                    "Diet" => 'diet.png',
                                    "Events" => 'events.png',
                                    "Favourite friends" => 'Favourite-friends.png',
                                    "Followed friends" => 'followed-friends.png',
                                    "Followed fiends" => 'followed-friends.png',
                                    "Feeling status" => 'feeling-status.png',
                                    "Friends" => 'friends.png',
                                    "Health injury" => 'health-injury.png',
                                    "info" => 'info.png',
                                    "Info" => 'info.png',
                                    "Locations" => 'locations.png',
                                    "Location" => 'locations.png',
                                    "My clubs" => 'my-clubs.png',
                                    "My coaches" => 'my-coaches.png',
                                    "My groups" => 'my-groups.png',
                                    "My lists" => 'my-lists.png',
                                    "My teams" => 'my-coaches2.png',
                                    "My items" => 'my-items.png',
                                    "Music" => 'music.png',
                                    "members" => 'members.png',
                                    "Members" => 'members.png',
                                    "Pages that I like" => 'pages-ilike.png',
                                    "Photos" => 'photo.png',
                                    "Race" => 'races.png',
                                    "Record" => 'records.png',
                                    "Routes" => 'routes.png',
                                    "Sport events" => 'spot-events.png',
                                    "Shared friends" => 'shared-friends.png',
                                    "Statistics" => 'statistics.png',
                                    "Trainings" => 'workouts.png',
                                    "Travels" => 'travels.png',
                                    "Thoughts" => 'thoughts.png',
                                    "Things to buy" => 'things-tobuy.png',
                                    "Things to do" => 'things-todo.png',
                                    "Video" => 'video.png',
                                    "Videos" => 'video.png',
                                    "Workouts" => 'workouts.png',
                                    "Workouts list" => 'workouts.png',
                                    "Weight measure" => 'weight.png',
                                    "Weight" => 'weight.png',
                                );
                                foreach ($arrayPost as $key => $row) {

                                    if ($this->params['controller'] != "searchresults" && $this->params['action'] != "search") {
                                        if (array_key_exists($key, $urlLinkArray)) {

                                            $url = $urlLinkArray[$key];
                                        } else {

                                            $url = 'javascript:void(0)';
                                        }
                                    } else {
                                        $url = 'javascript:void(0)';
                                    }

                                ?>
                                    <li><?php
                                        if (array_key_exists($key, $iconsLinkArray)) {
                                            echo $this->Html->link($this->Html->image('black-icons/' . $iconsLinkArray[$key]) . ' ' . $row, $url, array('escape' => false));
                                        } else {
                                            echo $this->Html->link($row, $url, array('escape' => false));
                                        }
                                        ?>

                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                    <!----------// End Posts //--------------->
                    <!----------// Start Options //--------------->
                    <li>
                        <a class="tabBtnMenu colorbtn" href="javascript:void(0)" data-toogle-panel="#optionContainerTab">
                            <img class="icon" src="<?= $this->webroot; ?>img/option-menu-white.png" alt=""> Options
                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                        </a>
                        <div id="optionContainerTab">
                            <ul class="sublinks">
                                <?php
                                if ($this->params['controller'] != "searchresults" && $this->params['action'] != "search") {
                                ?>

                                    <?php if (!in_array($_SESSION['Auth']['User']['role_id'], $admin_users)) { ?>
                                        <li>
                                            <?php //echo $this->Html->image('clubpost-icon.png');
                                            ?>
                                            <?php echo $this->html->link('<img src="' . $this->webroot . 'img/user-circle-dark-icon.png" class="icon" /> Profile & permissions <span class="rightarrow"><i class="fa fa-caret-right"></i></span>', array('controller' => 'clubs', 'action' => 'editclubinfo'), array('class' => 'link_1 sub_item_tab_menu', 'escape' => false)); ?>
                                        </li>
                                    <?php } ?>

                                <?php } ?>

                                <?php
                                if ($this->params['controller'] != "searchresults" && $this->params['action'] != "search") {
                                ?>
                                    <li>
                                        <a class="link_1 sub_item_tab_menu" href="javascript:void(0)" onclick="togglemenu_option('toggle_other_options')">
                                            <?php echo $this->Html->image('other-option-icon.png'); ?> <?php echo $langs["Other options"]; ?>
                                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                                        </a>
                                        <ul style="display:none;" id="toggle_other_options" class="sublinks other_option_links">
                                            <!--
                                     <li>
                                         <a href="JavaScript:void(0)">  Profile</a>
                                     </li> 
                                    -->
                                            <li style="position: relative">
                                                <div class="on_click dropdwn" id="profile" style="position: absolute; background: #000 !important; display: none">
                                                    <?php
                                                    $admin_id = $this->Session->read('Auth.User.id');
                                                    $club_id = $this->Session->read('Auth.Club.id');
                                                    $co_admin_check = $this->Link->checkCoadmin($admin_id);
                                                    $member_check = $this->Link->checkMember($club_id);
                                                    ?>
                                                    <ul>
                                                        <li>
                                                            <a href="JavaScript:void(0)" style="background: #000 !important"><?php echo $langs["Info"]; ?>
                                                                <!--Current User's club lists-->
                                                            </a>
                                                        </li>
                                                        <?php if ($_SESSION['Auth']['User']['role_id'] == "8" || $member_check == true) { ?>
                                                            <li>
                                                                <a href="JavaScript:void(0)"><?php echo $langs["Details"]; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                        <?php if ($_SESSION['Auth']['User']['role_id'] == "8" || $co_admin_check == true) { ?>
                                                            <li>
                                                                <a href="JavaScript:void(0)"><?php echo $langs["Preferences"]; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                        <?php if ($_SESSION['Auth']['User']['role_id'] == "8") { ?>
                                                            <li>
                                                                <a href="JavaScript:void(0)"><?php echo $langs["Password"]; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                        <!-- <li><a href="#">Create a new club</a></li>-->
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="JavaScript:void(0)" class="text-bold"><span class="clubicon"><?php echo $this->Html->image('icon-img/profile.png'); ?></span>
                                                    Profile</a>
                                            </li>
                                            <li>
                                                <a href="JavaScript:void(0)" class="text-bold"><span class="clubicon"><?php echo $this->Html->image('icon-img/suggestion-to-friend.png'); ?></span><?php echo $langs["Suggest to friends"]; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="JavaScript:void(0)" class="text-bold"><span class="clubicon"><?php echo $this->Html->image('icon-img/fanclub.png'); ?></span><?php echo $langs["Clubs fan clubs"]; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="JavaScript:void(0)" class="text-bold"><span class="clubicon"><?php echo $this->Html->image('icon-img/polls.png'); ?></span><?php echo $langs["Polls"]; ?>
                                                </a>
                                            </li>
                                            <!--
                                    <?php //if ($this->Session->read('Auth.User.Role.id') == 8) { 
                                    ?>
                                    <li>
                                        <a href="<?php //echo $this->webroot; 
                                                    ?>assistance/user_bug_problem"><span class="clubicon"><i class="fa fa-star"></i></span> Feedbacks for club staff <span class="clubicon-right"><a href="<?php //echo $this->webroot;
                                                                                                                                                                                                            ?>feedbacks/feedback_delete"><i class="fa fa-trash"></i></a></span></a>
                                    </li>
                                    <?php //} 
                                    ?>
                                    -->
                                            <li>
                                                <a href="JavaScript:void(0)" class="text-bold">
                                                    <span class="clubicon">
                                                        <img src="<?= $this->webroot; ?>img/qans-icon-dark.png" />
                                                    </span>
                                                    <?php echo $langs["Questions and Answers"]; ?></a>
                                            </li>
                                            <!--  <li>
                                        <a href="JavaScript:void(0)"><span class="clubicon"><?php //echo $this->Html->image('icon-img/social-link.png'); 
                                                                                            ?></span><?php //echo $langs["Social Links"];
                                                                                                        ?></a>
                                    </li> -->
                                            <li>
                                                <a href="JavaScript:void(0)" style="color:#FFF10D;" class="text-bold">
                                                    <span class="clubicon">
                                                        <img src="<?= $this->webroot; ?>img/leave-club-white.png" />
                                                    </span>
                                                    <?php echo $langs["Leave the club"]; ?> </a>
                                            </li>
                                        </ul>
                                    </li>


                                <?php } ?>

                                <li>
                                    <a class="sub_item_tab_menu link_1" href="javascript:void(0)" onclick="togglemenu_option('toggle_catalog_exercises')">
                                        <img class="icon" src="<?= $this->webroot; ?>img/trash-white-icon.png" alt="" style="width: 19px;"> Catelog exercises
                                        <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                                    </a>
                                    <ul style="display:none;" id="toggle_catalog_exercises" class="sublinks other_option_links">
                                        <li>
                                            <a href="<?= $this->webroot; ?>exercises/display/movie">Moovie of
                                                Movesbook</a>
                                        </li>

                                        <li>
                                            <a href="<?= $this->webroot; ?>exercises/display/muscles">Muscles
                                                interested</a>
                                        </li>

                                        <li>
                                            <a href="<?= $this->webroot; ?>exercises/display/youtube?id=czKTzoUxZe8">Moovie
                                                linked from youtube #1</a>
                                        </li>

                                        <li>
                                            <a href="<?= $this->webroot; ?>exercises/display/youtube?id=mSOuL3E6ZCU">Moovie
                                                linked from youtube #2</a>
                                        </li>
                                    </ul>
                                </li>


                                <li>
                                    <a class="sub_item_tab_menu link_1" href="javascript:void(0)">
                                        <img class="icon" src="<?= $this->webroot; ?>img/trash-white-icon.png" alt="" style="width: 19px;"> Feedbacks for Club staff
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <!----------// End Options //--------------->
                    <!----------// Start News //--------------->
                    <li>
                        <a class="tabBtnMenu colorbtn" href="javascript:void(0)" data-toogle-panel="#newsTabContainer">
                            <img class="icon" src="<?= $this->webroot; ?>img/message-icon-white.png" alt=""> News
                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                        </a>
                        <div id="newsTabContainer">
                            <ul class="sublinks">
                                <li>
                                    <a class="sub_item_tab_menu link_1" href="JavaScript:void(0)">
                                        <?php echo $this->Html->image('menuicon/clubnews.png', array('class' => 'icon')); ?>
                                        <?php echo $langs["Club News"]; ?>
                                        <span class="rightarrow">
                                            <i class="fa fa-caret-right"></i>
                                            <i class="fa fa-caret-down" style="display:none;"></i>
                                        </span>
                                    </a>
                                </li>
                                <?php
                                //print_r($loggedUserRecord['User']['id']['role_id']); exit;

                                if ($loggedUserRecord['User']['id'] == $this->Session->read('Auth.User.id') || $loggedUserRecord['User']['role_id'] == 2 || $loggedUserRecord['User']['role_id'] == 3) {
                                ?>
                                    <li>
                                        <a class="sub_item_tab_menu link_1" href="JavaScript:void(0)">
                                            <?php echo $this->Html->image('menuicon/newseditor.png', array('class' => 'icon')); ?>
                                            <?php echo $langs["News editor"]; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                    <!----------// End News //--------------->
                    <!----------// Start Internet Links //--------------->
                    <li>
                        <a class="tabBtnMenu colorbtn" href="JavaScript:void(0)" data-toogle-panel="#internetLinksTabMenu">
                            <?php echo $this->Html->image('globe-white-icon.png', array('class' => 'icon')); ?>
                            Internet links
                            <i class="fa fa-cog ml5 internetLinkIocn"></i>
                            <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                        </a>
                        <div id="internetLinksTabMenu">
                            <ul class="sublinks">
                                <li>
                                    <a class="sub_item_tab_menu link_1" href="javascript:void(0);" onclick="return showOfficialWeb();">
                                        <?php echo $this->Html->image('globe-white-icon.png', array('class' => 'icon')); ?>
                                        Official website
                                        <!-- <i class="fa fa-cog" onclick="return openOfficialBox();" style="float: right; font-size: 22px; margin-top: 5px;"></i> -->
                                    </a>
                                    <div class=" official-web" id="newOfficialBox" style="display:none;">
                                        <!--<div class="popup-close">
                                <a href="javascript:void(0);" onclick="return closeOfficialBox();"><i class="fa fa-close"></i></a>
                            </div>-->
                                        <!--<div class="col-15 text-center">
                                <span onclick="showOfficialWeb();" style="font-size: 24px;"><i class="fa fa-cog"></i></span>
                            </div>-->
                                        <div class="col-80">
                                            <ul>
                                                <li><a href="javascript:void(0);" onclick="open_other_option();">Select
                                                        option&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                                                </li>
                                                <div style="display:none;" id="other_option">
                                                    <div style="display:none;" id="official_loader">
                                                        <?php echo $this->Html->image('ajax-loader-new.gif', array('style' => 'text-align:center')); ?>
                                                    </div>
                                                    <li><a href="javascript:void(0);" onclick="return openInNewTab('1');">Open in new lable</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);" onclick="return openInNewTab('2');">Open in new window</a>
                                                    </li>
                                                    <li><input type="hidden" id="open_id" value="<?php echo $clubsiteSetting['club_site_settings']['display_setting']; ?>">
                                                        <a href="javascript:void(0);" onclick="return open_display_box();">Display setting&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                                                        <ul style="display:none;" id="header_display_setting">
                                                            <div style="display:none;" id="official_loader_id">
                                                                <?php echo $this->Html->image('ajax-loader-new.gif', array('style' => 'text-align:center')); ?>
                                                            </div>

                                                            <li>
                                                                <div class="col-50">Top banner
                                                                </div>
                                                                <div class="col-50" style="background:#fff;">
                                                                    <div class="custom-select">
                                                                        <?php if ($clubsiteSetting['club_site_settings']['top_banner'] == 1) {
                                                                            $selected_option_yes = "selected";
                                                                            $selected_option_no = "";
                                                                        } else {
                                                                            $selected_option_no = "selected";
                                                                            $selected_option_yes = "";
                                                                        } ?>

                                                                        <select class="display_setting_top" onchange="return set_display_officialsite('top');">
                                                                            <option value="1" <?php echo $selected_option_yes; ?>>
                                                                                Yes
                                                                            </option>
                                                                            <option value="0" <?php echo $selected_option_no; ?>>
                                                                                No
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </li>
                                                            <li>
                                                                <div class="col-50">Left frame
                                                                </div>
                                                                <div class="col-50" style="background:#fff;">
                                                                    <div class="custom-select">
                                                                        <?php if ($clubsiteSetting['club_site_settings']['left_frame'] == 1) {
                                                                            $selected_left_yes = "selected";
                                                                            $selected_left_no = "";
                                                                        } else {
                                                                            $selected_left_no = "selected";
                                                                            $selected_left_yes = "";
                                                                        } ?>
                                                                        <select class="display_setting_left" onchange="return set_display_officialsite('left');">
                                                                            <option value="1" <?php echo $selected_left_yes; ?>>
                                                                                Yes
                                                                            </option>
                                                                            <option value="0" <?php echo $selected_left_no; ?>>
                                                                                No
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </li>
                                                            <li>
                                                                <div class="col-50">Right frame
                                                                </div>
                                                                <div class="col-50" style="background:#fff;">
                                                                    <div class="custom-select">
                                                                        <?php if ($clubsiteSetting['club_site_settings']['right_frame'] == 1) {
                                                                            $selected_right_yes = "selected";
                                                                            $selected_right_no = "";
                                                                        } else {
                                                                            $selected_right_no = "selected";
                                                                            $selected_right_yes = "";
                                                                        } ?>
                                                                        <select class="display_setting_right" onchange="return set_display_officialsite('right');">
                                                                            <option value="1" <?php echo $selected_right_yes; ?>>
                                                                                Yes
                                                                            </option>
                                                                            <option value="0" <?php echo $selected_right_no; ?>>
                                                                                No
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </div>
                                            </ul>
                                            <!--  
                            <select id="website_official_link">
                                <option>Select option</option>
                                <option value="1">Open in new lable</option>
                                <option value="2">Open in new window</option>
                            </select>
                                -->
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                                <li>
                                    <a class="sub_item_tab_menu link_1" id="open_website_link" href="javascript:void(0);">
                                        <?php echo $this->Html->image('menuicon/movesbookwebsite.png'); ?>
                                        <span onclick="return openWebsiteLink();">Movesbook website</span>
                                        <?php //if ($countClubMember <= 0) { 
                                        ?>
                                        <?php //if ($_SESSION['Auth']['User']['role_id'] == 8) { 
                                        ?>
                                        <!-- <i class="fa fa-cog" onclick="return openBox();" style="float: right; font-size: 22px; margin-top: 5px;"></i> -->
                                        <?php //} else { 
                                        ?>
                                        <!-- <i class="fa fa-cog" onclick="return closeBox();" style="float: right; font-size: 22px; margin-top: 5px;"></i> -->
                                        <?php //} 
                                        ?>
                                        <? php // } 
                                        ?>
                                    </a>
                                    <div class="official-web" id="newBox" style="display:none; width: 420px;">
                                        <div class="text-right popup-close"><a href="javascript:void(0);" onclick="closeBox();"><i class="fa fa-times"></i></a></div>
                                        <div class="" style="padding: 7px;">
                                            <input type="text" value="<?php echo $this->webroot; ?>WebsiteSettings/display" readonly>
                                        </div>
                                        <div class="pt-10">
                                            <div class="col-40" style="padding-top:5px;">
                                                Open in new window
                                            </div>
                                            <div class="rtoggle col-20" style=" padding-top: 0px;">
                                                <label class="switch">
                                                    <?php
                                                    $checked1 = "";
                                                    if (empty($clubwebsiteSetting) || $clubwebsiteSetting['movesbook_website_settings']['display_status'] == 1) {
                                                        $checked1 = "checked";
                                                    }
                                                    ?>

                                                    <input id="website_setting_id" <?php echo $checked1; ?> class="checkbox_class" type="checkbox">
                                                    <div class="slider round"></div>
                                                </label>
                                            </div>
                                            <div class="col-40" style="padding-top:7px;">
                                                Open in new lable
                                            </div>
                                            <div class="clear pt-10"></div>
                                        </div>
                                        <div class="text-center pt-10">
                                            <a class="btn-gray" href="#">Website settings</a>
                                        </div>
                                        <div style="display:none;" id="website_loader">
                                            <?php echo $this->Html->image('ajax-loader-new.gif', array('style' => 'text-align:center')); ?>
                                        </div>

                                    </div>

                                </li>
                                <li>
                                    <a class="sub_item_tab_menu web-editor" href="<?php echo $this->webroot; ?>websiteSettings/index">
                                        <?php echo $this->Html->image('home-white.png', array('class' => 'icon')); ?>
                                        <span class="text">Website editor</span>
                                        <span style="float: right; font-size: 28px;" class="">
                                            <i class="fa fa-cog"></i>
                                        </span>
                                    </a>
                                    <div class="box-area" id="load_html"></div>
                                </li>
                                <li>
                                    <a class="sub_item_tab_menu link_1" href="#">
                                        <?php echo $this->Html->image('menuicon/facebookwebsite.png'); ?>
                                        Facebook website
                                    </a>
                                </li>
                                <li>
                                    <a class="sub_item_tab_menu link_1 clicksocial" onclick="displayDropMenu('social_section')" href="javascript:void(0);">

                                        <?php echo $this->Html->image('menuicon/officialwebsite.png', array('class' => 'icon')); ?>
                                        Social sites
                                        <span class="rightarrow">
                                            <i class="fa fa-caret-right"></i>
                                            <i class="fa fa-caret-down" style="display:none;"></i>
                                        </span>
                                    </a>

                                    <?php if ($_SESSION['Auth']['User']['role_id'] == 8) { ?>
                                        <div class="on_click dropdwn" id="social_section" style="display: none;">
                                            <ul>
                                                <?php if (!empty($socialIcons)) { ?>
                                                    <?php foreach ($socialIcons as $key => $icon) { ?>
                                                        <li>
                                                            <a class="link_1" style="padding-left: 45px !important" href="#">
                                                                <span class="imgicon">
                                                                    <i class="fa <?php echo $icon['SocialSite']['font_icon']; ?>">
                                                                    </i>
                                                                </span>
                                                                <?php echo $icon['SocialSite']['name']; ?>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                                <li>
                                                    <a class="link_1" data-action="show" id="action-current-social" onclick="displayDropIcon('sectionAppAuth', 'action-current-social')" href="javascript:void(0);" style="padding-left: 45px !important" href="#">
                                                        <span class="imgicon">
                                                            <?php echo $this->Html->image('menuicon/officialwebsite.png'); ?>
                                                        </span>
                                                        Share data of social sites
                                                        <span class="f-right"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                    </a>
                                                </li>
                                                <div id="sectionAppAuth" style="display: none;">
                                                    <li>
                                                        <a class="" href="#" style="text-align: center; font-size: 15px;"> Apps
                                                            authorised </a>
                                                    </li>
                                                    <li>
                                                        <a class="link_1 enadata" style="padding-left: 45px !important" href="<?php echo $this->webroot; ?>clubSettings/enable_to_export_data_permission"><img src="<?php echo $this->webroot; ?>img/menuicon/enabletoexport.png" alt=""> Enable to export my data</a>
                                                    </li>
                                                    <li>
                                                        <a class="link_1 enadata" style="padding-left: 45px !important" href="<?php echo $this->webroot; ?>clubSettings/enable_to_read_data_permission"><img src="<?php echo $this->webroot; ?>img/menuicon/enabletoread.png" alt=""> Enable to read my data</a>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </li>
                                <li class="club_favourite_li">
                                    <a class="sub_item_tab_menu link_1" href="JavaScript:void(0)">
                                        <?php echo $this->Html->image('globe-with-star.png', array('class' => 'icon')); ?>
                                        Club favourite links
                                        <?php if ($countClubMember <= 0) { ?>
                                            <span style="float: right; font-size: 22px;" class="">
                                                <i class="fa fa-cog"></i>
                                            </span>
                                        <?php } ?>
                                    </a>
                                    <div class="links_block_div" style="overflow: visible !important;display: block !important;">
                                        <ul class="toggle_1">
                                            <li>
                                                <a href="#">Sort for category</a>
                                            </li>
                                            <li>
                                                <a href="#">Sort alphabetical</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <!----------// End Internet Links //--------------->

                </ul>
            </li>

            <?php
            //print_r($countClubMember); exit;
            if ($countClubMember > 0) {
            ?>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/blog.png'); ?>
                        Blog </a>
                </li>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/messages.png'); ?>
                        Messages </a>
                </li>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/events.png'); ?> Events </a>
                </li>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/blog.png'); ?>
                        Bacheca </a>
                </li>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/feedbacks.png'); ?>
                        Feedbacks </a>
                </li>
                <li>
                    <a class="link_1" href="JavaScript:void(0)"> <?php echo $this->Html->image('menuicon/polls.png'); ?>
                        Polls </a>
                </li>

            <?php } ?>


            <!-- social toggle -->

            <!------------- social toggle --------------->
            <!--
            <li>            
                <a style="background: rgb(128,0,0);" >Club's Official Website <span class="rightarrow"><i class="fa fa-caret-right"></i><i class="fa fa-caret-right" style="display:none;"></i></span></a>
            </li>        
            <li>
        <?php //echo $this->Html->link("Club's Website (at movesbook)",array('controller'=>'clubs','action'=>'club_profile'),array( 'escape' => false,'style' => 'background: rgb(128,0,0);'));    
        ?>
                <a style="background: rgb(128,0,0);" >Club's Website (at movesbook)<span class="rightarrow"><i class="fa fa-caret-right"></i><i class="fa fa-caret-down" style="display:none;"></i></span></a>
            </li>        
            <li>
                <a style="background: rgb(163,73,164);" href="JavaScript:void(0)"> <span class="rightarrow"><i class="fa fa-caret-right"></i><i class="fa fa-caret-down" style="display:none;"></i></span></a>
            </li>
        -->


            <?php if ($this->params['controller'] == "searchresults" && $this->params['action'] == "search") { ?>
                <?php if ($userResult[0]['User']['Clubmember_cnt'] != 1 && in_array($langs['Messages'], $sadmallowarr)) { ?>
                    <!-- <li>
                    <a href="#">Messages <span class="rightarrow"><i class="fa fa-caret-right"></i><i class="fa fa-caret-down" style="display:none;"></i></span></a>
                </li>-->
                <?php
                }
            } else {
                ?>
                <!-- <li>
                 <a href="#">Messages <span class="rightarrow"><i class="fa fa-caret-right"></i><i class="fa fa-caret-down" style="display:none;"></i></span></a>
             </li>-->
            <?php } ?>


            <!--------------------------------->


        </ul>
    </div>

    <script>
        function displayDropMenu(id) {
            $("#" + id).toggle();
        }

        function displayDropIcon(id, iconId) {

            var action = $("#" + iconId).data('action');
            if (action == 'show') {
                $("#" + iconId + " i").addClass('fa-minus').removeClass('fa-plus');
                $("#" + iconId).data('action', 'hide');
                $("#" + id).slideDown();
            } else {
                $("#" + iconId + " i").addClass('fa-plus').removeClass('fa-minus');
                $("#" + iconId).data('action', 'show');
                $("#" + id).slideUp();
            }
        }

        function openOfficialBox() {
            $("#newOfficialBox").toggle();
            return false;
        }

        function closeOfficialBox() {
            $("#website_official_link option:selected").prop("selected", false);
            $("#newOfficialBox").hide();
            return false;
        }

        function open_other_option() {
            $("#other_option").toggle();
        }

        function openInNewTab(open_link_val) {
            $("#official_loader").show();
            $("#open_id").val(open_link_val);
            $.ajax({
                async: true,
                type: "POST",
                url: webroot + 'clubs/official_website_setting',
                data: {
                    "ajax": "true",
                    display_status: open_link_val
                },
                success: function(status) {
                    $("#official_loader").hide();
                    if (status == 1) {
                        alert("Succesfully apply setting");
                    } else {
                        alert("Fail to apply setting. please try again");
                    }
                },
                error: function() {
                    $("#website_loader").hide();
                    alert("Please try again.");
                    return false;
                }
            });
        }

        function showOfficialWeb() {
            var website_link_value = $("#open_id").val();
            var website_link = "<?php echo $this->webroot; ?>clubs/club_site";
            if (website_link_value == 1) {
                window.open(website_link);
            } else {
                window.open(website_link, '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');
            }
        }

        function open_display_box() {
            $("#header_display_setting").toggle();
        }

        function set_display_officialsite(display_value) {
            $("#official_loader_id").show();
            var display_status = $(".display_setting_" + display_value).val();
            $.ajax({
                async: true,
                type: "POST",
                url: webroot + 'clubs/change_display_official_status',
                data: {
                    "ajax": "true",
                    display_status: display_status,
                    display_value: display_value
                },
                success: function(status) {
                    $("#official_loader_id").hide();
                    if (status == 1) {
                        alert("Succesfully apply setting");
                    } else {
                        alert("Fail to apply setting. please try again");
                    }
                },
                error: function() {
                    alert("Please try again.");
                    return false;
                }
            });
        }

        function openBox() {
            $("#newBox").toggle();
            return false;
        }

        function closeBox() {
            $("#website_link option:selected").prop("selected", false);
            $("#newBox").hide();
            return false;
        }


        function openWebsiteLink() {
            var website_link = "<?php echo $this->webroot; ?>WebsiteSettings/display";
            if ($("#website_setting_id").prop('checked') == true) {
                window.open(website_link);
            } else {
                window.open(website_link, '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');
            }
        }

        var togglemngstatus = false;

        function togglemngmenu(id) {

            switch (togglemngstatus) {
                case true:
                    $("#" + id).slideToggle(1000);
                    togglemngstatus = false;
                    break;
                case false:
                    $("#" + id).slideToggle(1000);
                    togglemngstatus = true;
                    break;
                default:
                    break;
            }
        }

        $("#website_setting_id").change(function() {
            $("#website_loader").show();
            if ($("#website_setting_id").prop('checked') == true) {
                var display_status = "1";
            } else {
                var display_status = "0";
            }
            $.ajax({
                async: true,
                type: "POST",
                url: webroot + 'clubs/movesbook_website_setting',
                data: {
                    "ajax": "true",
                    display_status: display_status
                },
                success: function(status) {
                    $("#website_loader").hide();
                    if (status == 1) {
                        alert("Succesfully apply setting");
                    } else {
                        alert("Fail to apply setting. please try again");
                    }
                },
                error: function() {
                    $("#website_loader").hide();
                    alert("Please try again.");
                    return false;
                }
            });
        });
    </script>
</div>

<div class="div2">
    <?php
    $clubDashboardResult = $this->requestAction('/ClubSettings/clubSettingDashboard');
    // $setting_id = $this->requestAction('/ClubSettings/clubSettingDashboard/dashboard_setting');
    // $summaryPanel = $this->requestAction('/ClubSettings/clubSettingDashboard/summary_panel');
    $setting_id = Hash::extract($clubDashboardResult, '{n}.dashboard_settings[setting_name=dashboard_setting].setting_id');
    $setting_id = !empty($setting_id) ? explode(',', $setting_id[0]) : array();
    $summaryPanel = Hash::extract($clubDashboardResult, '{n}.dashboard_settings[setting_name=summary_panel].setting_id');
    $summaryPanel = !empty($setting_id) ? explode(',', $summaryPanel[0]) : array();

    $clubMemberClass = "disable";
    $manageClass = "disable";
    $accountClass = "disable";
    $controller = array('clubs');
    $action = array(
        'account_subscription',
        'summary_overview',
        'club_purchase_account',
        'create_member',
        'manage_club_member'
    );
    if (in_array($this->request->params['controller'], $controller) && in_array($this->request->params['action'], $action)) {
        $clubMemberClass = "active";
    }
    $manageAction = array(
        'create_member',
        'summary_overview',
        'club_account_current',
        'manage_club_member'
    );
    if (in_array($this->request->params['controller'], $controller) && in_array($this->request->params['action'], $manageAction)) {
        $manageClass = "active";
    }

    $manageAction = array('club_purchase_account', 'create_member');
    if (in_array($this->request->params['controller'], $controller) && in_array($this->request->params['action'], $manageAction)) {
        $accountClass = "active";
    }
    $UserListArray = $this->requestAction('Clubs/findclub_admin_and_operator');

    ?>
    <script type="text/javascript">
        var togglemngstatus = false;

        function togglemngmenu(id) {

            switch (togglemngstatus) {
                case true:
                    $("#" + id).slideToggle(1000);
                    togglemngstatus = false;
                    break;
                case false:
                    $("#" + id).slideToggle(1000);
                    togglemngstatus = true;
                    break;
                default:
                    break;
            }
        }

        function mainContainerToggle(id) {
            $("#" + id).slideToggle();
        }

        function displayDrop(a) {
            $("#" + a).slideToggle();
        }

        function toggel_button(value, id) {
            if (id == "operater") {
                if ($("#show_more_2").text() == "show more") {
                    $("#show_more_2").text("show less");
                } else {
                    $("#show_more_2").text("show more");
                }
            } else {
                if ($("#show_more_1").text() == "show more") {
                    $("#show_more_1").text("show less");
                } else {
                    $("#show_more_1").text("show more");
                }
            }
            for (i = 2; i <= value; i++) {
                $("#" + id + i).slideToggle();
            }
        }
    </script>
    <?php

    // TODO If current device enabled should ask for password
    $deviceEnableCount = 0;
    if (!empty($deviceCount) && $deviceCount > 0) {
        $deviceEnableCount = $deviceCount;
    } else if ($managementOpen == true) {
        $deviceEnableCount = 1;
    }
    ?>
    <!-- <div style="position: relative;">
    <div  id="show_setting_box" style="cursor:pointer"> Website Editor</div>
    <div class="box-area" id="load_html"></div>
</div> -->
    <!-- <div style="position:relative;">
    <div  id="topic_setting" style="cursor:pointer; padding: 8px;"><b><?php echo $section; ?></b></div>
     <div class="topic-setting" id="load_html1">
     </div>
</div> -->
    <div class="mc_social cm_tab_panel">
        <?php
        if (
            $_SESSION['Auth']['User']['role_id'] == 1 ||
            ($_SESSION['Auth']['User']['id'] == $userResult[0]['User']['id'] &&
                $this->params['controller'] != "searchresults" &&
                $this->params['action'] != "search")
        ) {
        ?>
            <div class="mc_manage_section cm_tab_action_btn">
                <div class="cm_tab_title">
                    <a href="javascript:void(0)">
                        <?php echo $langs["CLUB'S MANAGEMENT"]; ?>
                    </a>
                    <span class="rightcog">
                        <?php if ($this->Session->read('management_access')) : ?>
                            <a href="<?php echo $this->webroot . 'clubs/enable_password'; ?>" style="color:#fff">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                        <?php else : ?>
                            <a href="javascript:void(0)" onclick="showDevicePopup('0')" style="color:#fff">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                        <?php endif; ?>
                    </span>
                </div>
                <?php if ($deviceEnableCount > 0) { ?>
                    <span class="rightarrow">
                        <a href="javascript:void(0)" onclick="togglemngmenu('main-menu-container')" style="color:#fff">
                            <i class="fa fa-caret-down" style="display:block;"></i>
                        </a>
                    </span>
                <?php } else { ?>
                    <span class="rightarrow">
                        <a href="javascript:void(0)" data-id="main-menu-container" data-status="false" class="action-main-container" id="" style="color:#fff">
                            <i class="fa fa-caret-down" style="display:block;"></i>
                        </a>
                    </span>
                <?php } ?>

            </div>
        <?php } ?>
        <?php
        if ($_SESSION['Auth']['User']['role_id'] == 1 || ($_SESSION['Auth']['User']['id'] == $userResult[0]['User']['id'] && $this->params['controller'] != "searchresults" && $this->params['action'] != "search" && $deviceEnableCount > 0)) {
        ?>
            <ul id="main-menu-container" style="display:block;">
                <li>
                    <!-- <div class="delelete_managment_cookies" onclick="paused_managment_section('club_managment_section')"> -->
                    <div class="delelete_managment_cookies">
                        <?php
                        $current_class_for_link = $this->Session->check('management_access_paused') ? 'class2beta' : 'class1beta';
                        ?>
                        <a href="<?= $this->webroot; ?>devices/put_device_paused" class="<?= $current_class_for_link; ?> "></a>


                        <script type="text/javascript">
                            function classToggle() {
                                this.classList.toggle('class1beta');
                                this.classList.toggle('class2beta');
                            }

                            document.querySelector('.class1beta').addEventListener('click', classToggle);
                        </script>
                        <style>
                            .delelete_managment_cookies {
                                min-height: 24px;
                                padding: 0;
                                text-align: right;
                                display: inline-flex;
                                width: 48%;
                                justify-content: center;
                                align-items: center;
                            }


                            .panens {
                                min-height: 24px;
                                padding: 0;
                                text-align: right;
                                display: inline-flex;
                                width: 44% !important;
                                justify-content: flex-end !important;
                                align-items: flex-end !important;
                                text-align: right !important;
                                float: right !important;
                            }

                            .class1beta {
                                background: url(../img/putpause.jpg) no-repeat;
                                width: 110px;
                                height: 19px;
                                display: inline-block;
                                background-size: 78%;
                            }

                            .class2beta {
                                background: url(../img/restoresection.jpg) no-repeat;
                                width: 110px;
                                height: 19px;
                                display: inline-block;
                                background-size: 99%;


                            }
                        </style>


                    </div>
                    <div class="delelete_managment_cookies panens" onclick="delelete_managment_cookies('club_managment_section')">
                        <span style="position:relative;top:-7px;">
                            <i class="fa fa-times" aria-hidden="true"></i> <?php echo $langs["Close Section"]; ?>
                        </span>
                    </div>

                    <div class="tab_content_menu">
                        <ul>
                            <li>
                                <a class="tabBtnMenu colorbtn" href="JavaScript:void(0)" data-toogle-panel="#userGuideManagementMenu">
                                    User guides
                                    <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                                </a>

                                <div id="userGuideManagementMenu" class="base-sprite-menu">
                                    <ul class="sublinks p-left-0">

                                        <li>
                                            <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                                <span class="image-menu base-icons icon-info" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_man_help'">
                                                </span>
                                                <span class="text" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_man_help'"><?= $langs['help_documents']; ?></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/management_guides/management-section-help-documents">
                                                Management section
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                                <span class="image-menu base-icons icon-message" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_man_faq'"></span>
                                                <span class="text" style="font-size:9px;" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/Info_Man_Faq'"><b style="font-size:13px;"><?= $langs['FAQs']; ?></b> <?= $langs['frequently_asked_questions']; ?></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/management_guides/management-section-faq">
                                                Management section
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sub_item_tab_menu web-editor icon-menu" href="javascript:void(0);">
                                                <span class="image-menu base-icons icon-video" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/info_man_tut'"></span>
                                                <span class="text" onclick="window.location.href = '<?= $this->webroot; ?>clubs/helpPage/Info_Man_Tut'"><?= $langs['video_tutorials']; ?></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sub_item_tab_menu link_1" href="<?= $this->webroot; ?>helps/management_guides/management-section-video">
                                                Management section
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <a class="cm_panel_tab_btn" onclick="togglemngmenu('curoper')">
                        <?php echo $this->Html->image('co-user-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">Current Operators</span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down" style="display:block;"></i>
                        </span>
                    </a>

                    <div class="mtop5 sublinks cm_co_heading_block" id="curoper" style="display:none;">
                        <!--Current Admin start-->
                        <div class="mc_admintitle cm_admintitle cm_admin_bg">
                            <?php echo $this->Html->image('user-circle-dark-icon.png', array('class' => 'icon')); ?>
                            <span class="text">
                                <?php echo $langs["Administrator"]; ?>
                            </span>
                        </div>

                        <div class=" m_top_ten">
                            <div class="profile_img">
                                <div class="profile_img_thumb">
                                    <?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '63', 'height' => '63')), array('controller' => 'clubs', 'action' => 'editclubinfo'), array('escape' => false)); ?>
                                </div>
                            </div>

                            <div class="profile_list">

                                <?php echo $this->Html->link($this->Html->image('profile_status_online.png', array('width' => '14', 'height' => '14', 'align' => 'absmiddle')), "#", array('escape' => false)); ?> <?php echo $langs["Online"]; ?>
                                <br>

                                <span class="pl_title"><?php echo $langs["Admin"]; ?></span><br>

                                <b><?php
                                    echo $this->Session->read('Auth.User.firstname');
                                    echo __(' ');
                                    echo $this->Session->read('Auth.User.lastname');
                                    ?></b><br>
                                <span class="pl_title"><?php echo $langs["Country"]; ?></span><br>

                                <?php echo isset($clubInfo[0]['clubs']['CountryName']) ? $clubInfo[0]['clubs']['CountryName'] : "-"; ?>
                                <br>

                            </div>
                        </div>
                        <div class="clear"></div>

                        <!--list of operator start-->
                        <div class="current_log cm_cl_selector">
                            <div class="custom-select">
                                <span class="cm_cl_icon">
                                    <?php echo $this->Html->image('cl-white-icon.png'); ?>
                                </span>
                                <select onchange="search_by_staff_log(this.value)">
                                    <option value="current_log"><?php echo $langs["Current Logged"]; ?></option>
                                    <option value="logged_today"><?php echo $langs["Staff who logged today"]; ?></option>
                                    <option value="logged_three_day"><?php echo $langs["Staff who logged in the last 3 days"]; ?></option>
                                    <option value="logged_last_week"><?php echo $langs["Staff who logged in the last week"]; ?></option>
                                    <option value="all_staff"><?php echo $langs["all the staff"]; ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="mc_admintitle cm_co_admin">
                            <a href="<?php echo $this->webroot; ?>clubs/club_coadmin_list">
                                <?php echo $this->Html->image('icon-img/profile.png', array('class' => 'icon')); ?>
                                <span class="text"><?php echo $langs["Co-admins"]; ?></span>
                            </a>
                            <span class="btn">
                                <a href="JavaScript:void(0)" onclick='add_co_admin("co_admin")'>
                                    <i class="fa fa-plus"></i>
                                    <?php echo $langs["Add"]; ?>
                                </a>
                            </span>
                            <div class="co_admin_password_box" id="co_admin_password_box">
                                <table>
                                    <tr>
                                        <td>
                                            <?php echo $langs["Password"]; ?>
                                        </td>
                                        <td>
                                            <input type="password" name="" value="" id="operator_password">
                                        </td>
                                        <td colspan="2">
                                            <input type="button" value="Submit" name="submit" onclick="return(co_validation())">
                                        </td>
                                        <td colspan="2">
                                            <span style="color: #000;float: right; margin-top: -7px;">
                                                <a href="JavaScript:void(0)" onclick="close_co_admin_box()"> X</a>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="load_club_subadin">
                            <?php
                            $club_subadmins = array();
                            $club_subadmins = $UserListArray["club_co_admin"];
                            $sr = 0;
                            foreach ($club_subadmins as $club_row) {
                                $sr++;
                            ?>
                                <div class="mc_operator" id="club_subadmins<?php echo $sr; ?>" style="<?php if ($sr > 2) { ?>display: none<?php } ?>">
                                    <div class="operator_member">
                                        <?php if ($club_row['image'] != '') { ?>
                                            <?php echo $this->Html->image('profile_images/' . $club_row['image'], array('width' => '30px', 'height' => '30px')); ?>
                                        <?php } else { ?>
                                            <?php echo $this->Html->image('profile_images/no_image.jpg', array('width' => '30px', 'height' => '30px')); ?>
                                        <?php } ?>
                                    </div>
                                    <div class="operator_detail">
                                        <span class="od_close">
                                            <a onclick="return confirm('Are you sure you want to delete this Club Co-Admin?');" href="<?php echo $this->webroot; ?>clubs/club_co_admin_delete/<?php echo $club_row['club_subadmins_id']; ?>">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </span>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_co_admin/<?php echo $club_row['club_subadmins_id']; ?>"><span style="color:yellow"><?php echo $club_row['firstname'] . " " . $club_row['lastname']; ?></span></a>
                                        <!--                        <a href="JavaScript:void(0)">
                                                                <span style="color:yellow">< ?php echo $club_row['users']['firstname']." ".$club_row['users']['lastname']; ?></span>
                                                            </a>-->

                                        <br>90 <?php echo $langs["members"]; ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            <?php
                            }

                            if ($sr == "0") {
                            ?>
                                <div class="mc_operator">
                                    <div class="operator_member">
                                        <?php echo $langs["No record for Co-admin"]; ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            <?php } ?>

                            <?php if ($sr > 2) { ?>
                                <div class="sub-content-btn" id="show_more_1" style="color: #fff;
                                 cursor: pointer;
                                 float: right;
                                 font-size: 12px;
                                 text-decoration: underline;" onclick="toggel_button('<?php echo $sr; ?>', 'club_subadmins')">
                                    <?php echo $langs["show more"]; ?>
                                </div>
                            <?php } ?>

                            <div class="clear"></div>
                            <!---end list of operator -->

                            <!--Current operators start-->
                            <div class="mc_admintitle cm_operators_btn">
                                <a href="<?php echo $this->webroot; ?>clubs/club_operator_list">
                                    <?php echo $this->Html->image('icon-img/two-user-dark-icon.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["Operators"]; ?></span>
                                </a>
                                <span class="btn">
                                    <a class="mc_add" style="display:block;" href="JavaScript:void(0)" onclick='add_co_admin("operator")'>
                                        <i class="fa fa-plus"></i>
                                        <?php echo $langs["Add"]; ?>
                                    </a>
                                </span>
                            </div>
                            <!--//   Staff & collaborators   //-->
                            <div class="mc_admintitle cm_staff_coll">
                                <a href="JavaScript:void(0)">
                                    <?php echo $this->Html->image('icon-img/id-car-icon.png', array('class' => 'icon')); ?>
                                    <span class="text">Staff & collaborators</span>
                                </a>
                            </div>

                            <?php
                            $sr1 = 0;
                            foreach ($club_subadmins as $club_row) {
                                $sr1++;
                            ?>
                                <div class="mc_operator" id="operater<?php echo $sr1; ?>" style="<?php if ($sr1 > 2) { ?>display: none<?php } ?>">
                                    <div class="operator_member">
                                        <?php if ($club_row['image'] != '') { ?>
                                            <?php echo $this->Html->image('profile_images/' . $club_row['image'], array('width' => '30px', 'height' => '30px')); ?>
                                        <?php } else { ?>
                                            <?php echo $this->Html->image('profile_images/no_image.jpg', array('width' => '30px', 'height' => '30px')); ?>
                                        <?php } ?>
                                    </div>

                                    <div class="operator_detail">
                                        <span class="od_close">
                                            <a onclick="return confirm('Are you sure you want to delete this Club operator?');" href="<?php echo $this->webroot; ?>clubs/club_operator_delete/<?php echo $club_row['club_subadmins_id']; ?>">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </span>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_operator_edit/<?php echo $club_row['club_subadmins_id']; ?>"><span style="color:yellow"><?php echo $club_row['firstname'] . " " . $club_row['lastname']; ?></span></a>
                                        <!--<br>90 members-->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            <?php
                            }
                            if ($sr1 == "0") {
                            ?>
                                <div class="mc_operator">
                                    <div class="operator_member">
                                        <?php echo $langs["No record for Operator"]; ?>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            <?php } ?>
                            <?php if ($sr1 > 2) { ?>
                                <div class="sub-content-btn" style="color: #fff;
                                 cursor: pointer;
                                 float: right;
                                 font-size: 12px;
                                 text-decoration: underline;" id="show_more_2" onclick="toggel_button('<?php echo $sr1; ?>', 'operater')"> <?php echo $langs["show more"]; ?></div>
                            <?php } ?>
                        </div>
                        <div class="clear"></div>
                        <!--Current operators end-->
                    </div>

                </li>
                <div class="hline"></div>
                <li>
                    <a onclick="togglemngmenu('account_ident')" class="cm_panel_tab_btn cm_btn_cma">
                        <!--Account & identification devices-->
                        <?php echo $this->Html->image('icon-img/shield-border-icon.png', array('class' => 'icon')); ?>
                        <span class="text">Club's & Members accounts</span>
                        <span class="rightarrow"><i class="fa fa-caret-down" style="display:block;"></i></span>
                    </a>
                    <div class="mtop5 sublinks account-identification <?= $clubMemberClass ?> cm_ama_container" id="account_ident">
                        <!--Current Admin start-->
                        <ul class="top-title">
                            <li>
                                <?php //echo $this->Html->link('Club account & Subscriptions', array('controller' => 'clubs', 'action' => 'account_subscription')) 
                                ?>
                                <a href="<?php echo $this->webroot; ?>clubs/account_subscription" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/bookmark-white-icon.png', array('class' => 'icon')); ?>
                                    <?php echo $this->Html->tag('span', 'Club account & Subscriptions', array('class' => 'text')); ?>
                                </a>
                            </li>
                        </ul>
                        <ul class="top-title">
                            <li onclick="displayDrop('manageAccount');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/board-check-white.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["Manage accounts"]; ?></span>
                                    <span class="rightarrow"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt="" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>
                            <div class="link-box  <?= $manageClass ?> cm_ma_sublink_menu" id="manageAccount">
                                <ul>
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            $this->Html->tag('span', '', array('class' => 'yellow circle', 'style' => 'background: yellow')) . 'Enable members',
                                            array('controller' => 'clubs', 'action' => 'create_member'),
                                            array('escape' => false)
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?php
                                        //echo $this->Html->link($this->Html->tag('span', '', array('class' => 'orange circle', 'style' => 'background: orange')) . 'Members', array('controller' => 'clubs', 'action' => 'manage_club_member', 'all'), array('escape' => false));
                                        echo $this->Html->link($this->Html->tag('span', '', array('class' => 'orange circle', 'style' => 'background: orange')) . 'Members', array('controller' => 'clubMembers', 'action' => 'memberList'), array('escape' => false));
                                        ?>
                                    </li>
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            $this->Html->tag('span', '', array('class' => 'red circle', 'style' => 'background: red')) . 'Summary & Renewals',
                                            array('controller' => 'clubs', 'action' => 'summary_overview'),
                                            array('escape' => false)
                                        );
                                        ?>
                                    </li>
                                    <li>
                                        <?php
                                        echo $this->Html->link(
                                            $this->Html->tag('span', '', array('class' => 'blue circle')) . 'Account Status',
                                            array('controller' => 'clubs', 'action' => 'club_account_current'),
                                            array('escape' => false)
                                        );
                                        ?>
                                    </li>
                                    <!-- <li>
                                    <?php
                                    //echo $this->Html->link($this->Html->tag('span', '', array('class' => 'blue circle', 'style' => 'background: blue')) . 'Staff & Guests', '#', array('escape' => false));
                                    ?>
                                </li> -->
                                </ul>
                            </div>
                        </ul>
                        <ul class="top-title">
                            <li onclick=" displayDrop('account');">
                                <a href="javascript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/bookmark-color-icon.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["Accounts"]; ?></span>
                                    <span class="rightarrow"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt="" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>

                            <div class="link-box <?= $accountClass ?> cm_ma_sublink_menu" id="account">
                                <ul>
                                    <li><a href="<?php echo $this->webroot; ?>clubs/club_purchase_account"><span class="yellow circle" style="background: yellow;"></span> Price list</a>
                                    </li>
                                    <li><a href="JavaScript:void(0)"><span class="red circle" style="background: red;"></span> Requests of
                                            accounts </a></li>
                                    <li><a href="<?php echo $this->webroot; ?>clubs/purchase_account_history">
                                            <span class="green circle"></span>
                                            <?php echo $langs["Accounts purchased"]; ?>
                                        </a></li>
                                    <li>
                                        <?php echo $this->Html->link("<span class='greentwo circle' style='margin-bottom: 10px;'></span>Manage member's accounts", array("controller" => "clubs", "action" => "create_member"), array('escape' => false)); ?>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                        <div class="clear"></div>
                        <!--Current operators end-->
                    </div>
                </li>

                <!--device for identification starts-->
                <li>
                    <a onclick="togglemngmenu('device_identification')" class="cm_panel_tab_btn cm_btn_cma">
                        <?php echo $this->Html->image('icon-img/card-border-icon.png', array('class' => 'icon')); ?>
                        <span class="text">Device for identification</span>
                        <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                    </a>
                    <div class="mtop5 sublinks account-identification cm_ama_container" id="device_identification" style="display:none;">

                        <!--Current Admin start-->
                        <ul class="top-title">
                            <li onclick="displayDrop('Magnetic');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/card-border-icon.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["Magnetic"]; ?></span>
                                    <span class="rightarrow" onclick=" displayDrop('funcoachID');"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt=""  class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>
                            <div class="link-box cm_ma_sublink_menu" style="display: none" id="Magnetic">
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_price_list">
                                            <span class="bg_yellow circle"></span>
                                            Price list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:void(0)">
                                            <span class="bg_red circle"></span>
                                            Requests of badges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/magnetic badges">
                                            <span class="green circle"></span>
                                            Badges purchased
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/manage_card_lists">
                                            <span class="blue circle mb5"></span>
                                            <span>Manage magnetic assignement</span>
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                        <ul class="top-title">

                            <li onclick=" displayDrop('RFID_badges');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/rfid-icon-white.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["Rfid Badges"]; ?> </span>
                                    <span class="rightarrow" onclick=" displayDrop('funcoachID');"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt="" onclick=" displayDrop('funcoachID');" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>

                            <div class="link-box cm_ma_sublink_menu" style="display: none" id="RFID_badges">
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_price_list">
                                            <span class="bg_yellow circle"></span>
                                            Price list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:void(0)">
                                            <span class="bg_red circle"></span>
                                            Requests of Rfids
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/RFID badges">
                                            <span class="green circle"></span>
                                            Rfids purchased
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/manage_card_lists/rfidbadge">
                                            <span class="blue circle mb5"></span>
                                            <span>
                                                Manage rfidbadge assignement
                                            </span>
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                        <ul class="top-title">
                            <li onclick=" displayDrop('RFID_bracelets');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/qr-code-white.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo "QR Codes" ?></span>
                                    <span class="rightarrow" onclick=" displayDrop('funcoachID');"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt="" onclick=" displayDrop('funcoachID');" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>
                            <div class="link-box cm_ma_sublink_menu" style="display: none" id="RFID_bracelets">
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_price_list">
                                            <span class="bg_yellow circle"></span>
                                            Price list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:void(0)">
                                            <span class="bg_red circle"></span>
                                            Requests of QR Code
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/RFID bracelets">
                                            <span class="green circle"></span>
                                            QR Code purchased
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/manage_card_lists/rfidbracelet">
                                            <span class="blue circle mb5"></span>
                                            <span>
                                                Manage QR Code assignement
                                            </span>
                                            <div class="clear"></div>
                                            <div class="clear"></div>
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>


                        <ul class="top-title">
                            <li onclick=" displayDrop('Smartcards');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/smartcard-border-icon.png', array('class' => 'icon')); ?>
                                    <span class="text">Smartcards</span>
                                    <span class="rightarrow" onclick=" displayDrop('funcoachID');"><i class="fa fa-caret-down" style="display:block;"></i></span>
                                    <!-- <img style="float:right" height="5" align="absmiddle" width="9" alt="" onclick=" displayDrop('funcoachID');" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png"> -->
                                </a>
                            </li>
                            <div class="link-box cm_ma_sublink_menu" style="display: none" id="Smartcards">
                                <ul>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/club_price_list">
                                            <span class="bg_yellow circle"></span>
                                            <?php echo $langs["Price list"]; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="JavaScript:void(0)">
                                            <span class="bg_red circle"></span>
                                            <?php echo $langs["Requests of badges"]; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/smartcards">
                                            <span class="green circle"></span>
                                            <?php echo $langs["Badges purchased"]; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $this->webroot; ?>clubs/manage_card_lists/smartcard">
                                            <span class="blue circle mb5"></span>
                                            <span>
                                                <?php echo $langs["Manage smartcard assignement"]; ?>
                                            </span>
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                        <!-- <ul  class="top-title">
                        <li onclick=" displayDrop('Hardware');">
                            <a href="JavaScript:void(0)"> 
                                Hardware
                                <img style="float:right" height="5" align="absmiddle" width="9" alt="" onclick=" displayDrop('funcoachID');" class="show_hide" src="<?php echo $this->webroot; ?>img/show_hide_arrow_down.png">
                            </a>
                        </li>
                        <div class="link-box" style="display: none" id="Hardware">
                            <ul>
                                <li>
                                    <a href="JavaScript:void(0)" >
                                        <span class="yellow circle"></span> 
                                        <?php //echo $langs["Price list"]; 
                                        ?>
                                    </a>
                                </li>

                                <li>
                                    <a href="JavaScript:void(0)" >
                                        <span class="green circle"></span>
                                        <?php //echo $langs["Hardwares purchased"]; 
                                        ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul> -->

                        <!-- <ul class="">
                        <li onclick=" displayDrop('Hardware_temp_1');">
                            <a href="JavaScript:void(0)"> 
                                <?php //echo $langs["General list of product purchased"]; 
                                ?>
                            </a>
                        </li>
                    </ul>
                    <ul  class="">
                        <li onclick=" displayDrop('Hardware_temp');">
                            <a href="JavaScript:void(0)"> 
                                <?php //echo $langs["List of payment"]; 
                                ?>
                            </a>
                        </li>
                    </ul> -->
                        <div class="clear"></div>
                        <!--Current operators end-->
                    </div>
                </li>
                <li>
                    <a onclick="togglemngmenu('hardwareTabSection')" class="cm_panel_tab_btn cm_btn_cma">
                        <?php echo $this->Html->image('icon-img/car-steering-white-icon.png', array('class' => 'icon')); ?>
                        <span class="text">Hardware</span>
                        <span class="rightarrow"><i class="fa fa-caret-down"></i></span>
                    </a>
                    <div class="mtop5 sublinks account-identification cm_ama_container" id="hardwareTabSection" style="display:none;">
                        <ul class="top-title">
                            <li onclick=" displayDrop('Hardware_temp_1');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks spr0">
                                    <?php echo $this->Html->image('icon-img/basket-dark-icon.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["General list of product purchased"]; ?></span>
                                </a>
                            </li>
                            <li onclick=" displayDrop('Hardware_temp');">
                                <a href="JavaScript:void(0)" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/notepad-white-con.png', array('class' => 'icon')); ?>
                                    <span class="text"><?php echo $langs["List of payment"]; ?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <!---device and identification end-->
                <!-- <li>
                <a href="JavaScript:void(0)">
                    Dashboard 
                    <span class="rightarrow">
                        <i class="fa fa-caret-right"></i>
                        <i class="fa fa-caret-down" style="display:none;"></i>
                    </span>
                </a>
            </li> -->

                <script>
                    $(document).ready(function() {
                        $(".dashclick1").click(function() {
                            $(".dashopen1").addClass("intro1");
                        });

                        $(".dashclidk2 .rightarrow .fa.fa-caret-right").click(function() {
                            $(".dashopen1").removeClass("intro1");
                        })
                    });
                </script>
                <style>
                    .intro1 {
                        overflow: inherit !important;
                    }
                </style>

                <li>
                    <a class="cm_panel_tab_btn cm_administration_btn_col" href="javascript:void(0)">
                        <?php echo $this->Html->image('icon-img/joystick-white-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text"><?php echo "Administration"; ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <div class="cm_panel_tab_btn cm_dashboard_btn_col">
                        <?php echo $this->Html->image('/img/icon-subscript.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php $u_id = $this->Session->read('Auth.User.id') . '_0'; ?>
                            <?php echo $this->Html->link('Expiration Checking', array('controller' => 'clubs', 'action' => 'exhaustionStatus', $u_id)) ?>
                        </span>
                        <!-- <span class="rightarrow">
                        <i class="fa fa-cog" onclick="togglemngmenu('dashboardSetting')"></i> 
                        <i class="fa fa-caret-right" style="margin-left:10px;"></i>
                    </span> -->
                    </div>
                </li>
                <!--//  End Administration Section  //-->
                <!--//  Start Dashboard Section  class="club-dashboard dashclidk2" //-->
                <li style="position:relative;">
                    <div class="cm_panel_tab_btn cm_dashboard_btn_col">
                        <?php echo $this->Html->image('icon-img/star-white-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo $this->Html->link('Dashboard', array('controller' => 'clubSettings', 'action' => 'club_dashboard')) ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa-cog" onclick="togglemngmenu('dashboardSetting')"></i>
                            <i class="fa fa-caret-right" style="margin-left:10px;"></i>
                        </span>
                    </div>
                    <div style="display:none;" id="dashboardSetting" class="dashboardsetting dashopen1">
                        <div class="titlebox">
                            Dashboard setting <a href="#" class="fright"><i class="fa fa-times-circle"></i></a>
                        </div>
                        <div class="dashsetting">
                            <ul class="">
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'summer_panel',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'summer_panel',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '1',
                                                'checked' => in_array(1, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-list-ul"></i> <strong>Summary panels</strong>
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <a class="dashclick1" id="dachClick1" data-action="close" href="javascript:void(0)" onclick="togglemngmenu('summaryPanel')"><i class="fa fa-cog"></i></a>
                                        </span>
                                    </div>
                                    <div style="display:none;" id="summaryPanel" class="summarysetting">
                                        <div class="titlebox">
                                            Summary panels
                                            <a href="#" class="fright"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                        <div class="dashsetting">
                                            <ul class="">

                                                <li>
                                                    <span class="checkbox">
                                                        <?php

                                                        echo $this->Form->input(
                                                            'total_member',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'total_member',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '1',
                                                                'checked' => in_array(1, $setting_id) ? 'checked' : ''

                                                            )
                                                        );

                                                        ?>
                                                        <!-- <input type="checkbox"> -->
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Total members</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#">
                                                                <?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php

                                                        echo $this->Form->input(
                                                            'archive_member',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'archive_member',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '2',
                                                                'checked' => in_array(2, $setting_id) ? 'checked' : ''
                                                            )
                                                        );

                                                        ?>
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Archive Members</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php

                                                        echo $this->Form->input(
                                                            'present_today',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'present_today',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '3',
                                                                'checked' => in_array(3, $setting_id) ? 'checked' : ''
                                                            )
                                                        );

                                                        ?>
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Present today</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php
                                                        echo $this->Form->input(
                                                            'payment_overdue',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'payment_overdue',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '4',
                                                                'checked' => in_array(4, $setting_id) ? 'checked' : ''
                                                            )
                                                        );
                                                        ?>

                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Payment overdue</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php
                                                        echo $this->Form->input(
                                                            'message',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'message',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '5',
                                                                'checked' => in_array(5, $setting_id) ? 'checked' : ''
                                                            )
                                                        );
                                                        ?>

                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Messages</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php
                                                        echo $this->Form->input(
                                                            'next_appointment',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'next_appointment',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '6',
                                                                'checked' => in_array(6, $setting_id) ? 'checked' : ''
                                                            )
                                                        );
                                                        ?>
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Next appointments</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php
                                                        echo $this->Form->input(
                                                            'birthdays',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'birthdays',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '7',
                                                                'checked' => in_array(7, $setting_id) ? 'checked' : ''
                                                            )
                                                        );
                                                        ?>
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Birthdays</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="checkbox">
                                                        <?php

                                                        echo $this->Form->input(
                                                            'day_names',
                                                            array(
                                                                'type' => 'checkbox',
                                                                'id' => 'day_names',
                                                                'label' => false,
                                                                'div' => false,
                                                                'class' => 'setdashBoardSetting',
                                                                'value' => '8',
                                                                'checked' => in_array(8, $setting_id) ? 'checked' : ''
                                                            )
                                                        );

                                                        ?>
                                                    </span>
                                                    <div class="memberpanel">
                                                        <i class="fa fa-list-ul"></i> <strong>Day names</strong>
                                                        <span class="rightsection">
                                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                                        </span>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="footerbox">
                                            <a href="JavaScript:void(0)" onclick="saveSetting()" class="btn-gray">
                                                Save </a>
                                            <a href="JavaScript:void(0)" onclick="togglemngmenu('summaryPanel')" class="btn-gray"> Cancel </a>
                                            <a href="JavaScript:void(0)" class="btn-gray"> Reset default </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'new_member',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'new_member',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '2',
                                                'checked' => in_array(2, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> New members
                                        <span class="rightsection">
                                            <a class="position-changer" href="JavaScript:void(0)"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <a class="dashclick1" href="javascript:void(0)" onclick="togglemngmenu('newMembers')"><i class="fa fa-cog"></i></a>
                                        </span>
                                    </div>
                                    <div style="display:none; width: 260px;" id="newMembers" class="newmembersetting">

                                        <div class="mem-color-box">
                                            <div class="" style="position: relative; padding-right: 32px;">
                                                <div class="custom-select">
                                                    <select onchange="setRowValue(this.value,'field_value')">
                                                        <option value="5">5 rows (def)</option>
                                                        <option value="3">3 rows</option>
                                                        <option value="5">5 rows</option>
                                                        <option value="10">10 rows</option>
                                                        <option value="15">15 rows</option>
                                                    </select>
                                                </div>
                                                <div style="position:absolute; right: 0; top: 4px;">
                                                    <a href="#" class=""><i class="fa fa-times-circle"></i></a>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="alternate-color-box mt-10">
                                                <div class="altcolor-row">Alternate row color</div>
                                                <a href="#" class="menubox"><i class="fa fa-ellipsis-h"></i></a>
                                                <div class="mt-10">
                                                    <div class="altbox alt-gray" style="cursor: pointer;" onclick="setRowValue('color_1','color_value');">
                                                    </div>
                                                    <div class="altbox alt-sky" style="cursor: pointer;" onclick="setRowValue('color_2','color_value'); ">
                                                    </div>
                                                    <div class="altbox alt-yellow" style="cursor: pointer;" onclick="setRowValue('color_3','color_value');">
                                                    </div>
                                                    <div class="altbox alt-lemon" style="cursor: pointer;" onclick="setRowValue('color_4','color_value');">
                                                    </div>
                                                    <div class="altbox alt-pink" style="cursor: pointer;" onclick="setRowValue('color_5','color_value');">
                                                    </div>
                                                    <div class="altbox alt-orange" style="cursor: pointer;" onclick="setRowValue('color_6','color_value');">
                                                    </div>
                                                    <div class="altbox alt-brown" style="cursor: pointer;" onclick="setRowValue('color_7','color_value');">
                                                    </div>
                                                    <div class="altbox alt-blue" style="cursor: pointer;" onclick="setRowValue('color_8','color_value');">
                                                    </div>
                                                    <div class="altbox alt-purple" style="cursor: pointer;" onclick="setRowValue('color_9','color_value');">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_member',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_member',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '3',
                                                'checked' => in_array(3, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Last memberships
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_subscription',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_subscription',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '4',
                                                'checked' => in_array(4, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Last subscriptions
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'recent_deadline',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'recent_deadline',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '5',
                                                'checked' => in_array(5, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Recent deadlines
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_payment',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_payment',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '6',
                                                'checked' => in_array(6, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Last payments
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_service_purchase',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_service_purchase',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '7',
                                                'checked' => in_array(7, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Last services purchased
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_selling',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_selling',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '8',
                                                'checked' => in_array(8, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i>Last Sellings
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'access_of_today',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'access_of_today',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '9',
                                                'checked' => in_array(9, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Accesses of today
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'last_adding_of_credit',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'last_adding_of_credit',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '10',
                                                'checked' => in_array(10, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Last addings of credit
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'reservation_of_today',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'reservation_of_today',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '11',
                                                'checked' => in_array(11, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Reservation of today
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'marketing_appointment_of_today',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'marketing_appointment_of_today',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '12',
                                                'checked' => in_array(12, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Marketing appointements of today
                                        <span class="rightsection">
                                            <a class="position-changer" href="#"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <span class="checkbox">
                                        <?php

                                        echo $this->Form->input(
                                            'monthly_subscription_stattics',
                                            array(
                                                'type' => 'checkbox',
                                                'id' => 'monthly_subscription_stattics',
                                                'label' => false,
                                                'div' => false,
                                                'class' => 'summaryPanel',
                                                'value' => '13',
                                                'checked' => in_array(13, $summaryPanel) ? 'checked' : ''
                                            )
                                        );
                                        ?>
                                    </span>
                                    <div class="memberpanel">
                                        <i class="fa fa-star"></i> Monthly subscription statistis
                                        <span class="rightsection">
                                            <a class="position-changer" href="JavaScript:void(0)"><?php echo $this->Html->image('brr_arrow_up_down.png'); ?></a>
                                            <!--<a href="#"><i class="fa fa-cog"></i></a>-->
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="footerbox">
                            <a href="JavaScript:void(0)" class="btn-gray" onclick="summaryPanel()"> Save </a>
                            <a href="JavaScript:void(0)" class="btn-gray" onclick="togglemngmenu('dashboardSetting')">
                                Cancel </a>
                            <a href="JavaScript:void(0)" class="btn-gray"> Save default </a>
                            <a href="JavaScript:void(0)" class="btn-gray"> Load default </a>
                        </div>
                    </div>
                </li>
                <!--//  End Dashboard  //-->
                <!--//  Subscription  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_dashboard_btn_col" onclick="togglemngmenu('subscriptionContainer')">
                        <?php echo $this->Html->image('icon-img/subscription-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">

                            <?php echo "Subscription"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                    <div class="cm_ama_container" style="display:none;" id="subscriptionContainer">
                        <ul class="sublinks">
                            <li style="padding-left: 15px;">
                                <a href="<?= $this->webroot; ?>reviews/vertical" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/sub-month-icon.png', array('class' => 'icon')); ?>
                                    <span class="text">
                                        Overview of the courses or areas in a year
                                        <?php //echo $this->Html->link('Overview of the courses or areas in a year', array('controller' => 'reviews', 'action' => 'vertical')) 
                                        ?>
                                    </span>
                                </a>
                            </li>
                            <li style="padding-left: 15px;">
                                <a href="<?= $this->webroot; ?>reviews/vertical_month" class="cm_cma_sublinks">
                                    <?php echo $this->Html->image('icon-img/sub-year-icon.png', array('class' => 'icon')); ?>
                                    <span class="text">
                                        Overview of the courses or areas in a month
                                        <?php //echo $this->Html->link('Overview of the courses or areas in a month', array('controller' => 'reviews', 'action' => 'vertical_month')) 
                                        ?>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  End subscription  //-->
                <!--//  Start General overview  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_dashboard_btn_col">
                        <?php echo $this->Html->image('icon-img/camera-wite-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "General overview"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa-cog"></i>
                        </span>
                    </a>
                </li>
                <!--//  End General overview  //-->
                <!--//  Start Insert a new item  //-->
                <li>
                    <a href="javascript:void(0)" onclick="togglemngmenu('insnewitm')" class="cm_panel_tab_btn cm_insert_item_col 456">
                        <span class="rightarrow">
                            <i class="fa fa-caret-down" style="display:block;"></i>
                        </span>
                        <?php echo $this->Html->image('icon-img/plus-white-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo $langs["Insert a new item"]; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                    <div class="cm_ama_container" style="display:none;" id="insnewitm">
                        <?php
                        $loadComponent = new CommonComponent();
                        $loadDetails = $loadComponent->loadCommonDetails();
                        ?>
                        <ul class="sublinks insnewitm">

                            <?php if ($loadDetails['count_of_current_mambers'] < $loadDetails['count_of_max_users']) { ?>
                                <li class="newuser" style="padding-left: 10px;">
                                    <a href="<?= $this->webroot; ?>clubs/create_member">
                                        <span class="icon">
                                            <?php echo $this->Html->image('data-icons-white/new-user.png'); ?>
                                        </span>
                                        New user
                                    </a>
                                    <?php
                                    //echo $this->Html->link('» New user', array('controller' => "clubs",'action' => "create_member"));
                                    ?>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="<?= $this->webroot; ?>clubMembers/memberList">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/affiliate.png'); ?>
                                    </span>
                                    New affiliate to the club
                                    <?php //echo $this->Html->link('New affiliate to the club',array( 'controller' => "clubMembers", 'action' => "memberList" )); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubMembers/add_subscription">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/subscription-to-club.png'); ?>
                                    </span>
                                    New subscription to the Club
                                    <?php
                                    //echo $this->Html->link('New subscription to the Club', array('controller' => "clubMembers",'action' => "add_subscription"));
                                    ?>
                                </a>

                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/quick-renew-subscription.png'); ?>
                                    </span>
                                    Quick renew subscription
                                    <?php
                                    //echo $this->Html->link('New subscription to the Club', array('controller' => "clubMembers",'action' => "add_subscription"));
                                    ?>
                                </a>
                                <?php //echo $this->Html->link('Quick renew subscription', '#'); 
                                ?>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubs/payment_of_deadline">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/payment-deadline.png'); ?>
                                    </span>
                                    Payment of deadlines
                                    <?php
                                    //echo $this->Html->link('New subscription to the Club', array('controller' => "clubMembers",'action' => "add_subscription"));
                                    ?>
                                </a>
                                <?php
                                //echo $this->Html->link('Payment of deadlines', array( 'controller' => 'clubs', 'action' => 'payment_of_deadline'));
                                ?>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>Products/sell_product">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/sell-product.png'); ?>
                                    </span>
                                    Sell products
                                    <?php //echo $this->Html->link('Sell products', array('controller' => 'Products', 'action' => 'sell_product')); 
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/new_moment_cash">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/insert-moment-sell-service.png'); ?>
                                    </span>
                                    Insert a movement/Sell service
                                    <?php //echo $this->Html->link('Insert a movement/Sell service', array('controller' => 'clubs', 'action' => 'new_moment_cash')); 
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/archive_service_list">
                                    <span class="icon">
                                        <?php echo $this->Html->image('data-icons-white/insert-new-debit.png'); ?>
                                    </span>
                                    Payment other deadlines
                                    <?php //echo $this->Html->link('Payment of an expenses', array('controller' => 'clubs', 'action' => 'addNewExpense')); 
                                    ?>
                                    <?php //echo $this->Html->link('Payment other deadlines', array('controller' => 'clubs', 'action' => 'archive_service_list')); 
                                    ?>
                                </a>
                            </li>
                            <!-- <li>
                            <?php //echo $this->Html->link('Pay a member/employee', array('controller' => 'clubs', 'action' => 'pay_emp_member')); 
                            ?> 
                        </li> -->
                            <li>
                                <a href="<?= $this->webroot; ?>clubSettings/insertCredit">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/credits.png'); ?>
                                    </span>
                                    Add a new credit
                                    <?php
                                    //echo $this->Html->link('Add a new credit', array( 'controller' => 'clubSettings', 'action' => 'insertCredit' ));
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubmembers/debt_member">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/insert-new-debit.png'); ?>
                                    </span>
                                    Insert a new debit
                                    <?php
                                    //echo $this->Html->link('Insert a new debit', array( 'controller' => 'clubmembers','action' => 'debt_member', ));
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/payment-expenses.png'); ?>
                                    </span>

                                    <?php
                                    echo $this->Html->link('Payment expenses', array("controller" => "clubSettings", "action" => "expenses"));
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/payment-expenses.png'); ?>
                                    </span>
                                    Pay a member
                                    <?php //echo $this->Html->link('Pay a member', '#');  
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubs/cardToAssign/members">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/card-assignment.png'); ?>
                                    </span>
                                    Card to a member
                                    <?php
                                    //echo $this->Html->link('Card to a member', array( 'controller' => 'clubs', 'action' => 'cardToAssign', 'members' ));
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/cardToAssign/operators">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/accesses.png'); ?>
                                    </span>
                                    Card for operator
                                    <?php
                                    //echo $this->Html->link('Card for operator', array( 'controller' => 'clubs', 'action' => 'cardToAssign', 'operators' ));
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/cardToAssign/card_replace">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/card-replacement.png'); ?>
                                    </span>
                                    Card replacement
                                    <?php
                                    //echo $this->Html->link('Card replacement', array( 'controller' => 'clubs', 'action' => 'cardToAssign', 'card_replace' ));
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/reservation.png'); ?>
                                    </span>
                                    Insert a Reservation
                                    <?php //echo $this->Html->link('Insert a Reservation', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/marketing-contact.png'); ?>
                                    </span>
                                    Marketing contact
                                    <?php //echo $this->Html->link('Marketing contact', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/insert-event-in-agenda.png'); ?>
                                    </span>
                                    Insert event in Agenda
                                    <?php //echo $this->Html->link('Insert event in Agenda', '#'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/assign-alert-to-user.png'); ?>
                                    </span>
                                    Assign alert to an user
                                    <?php //echo $this->Html->link('Assign alert to an user', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/track-an-access-manually.png'); ?>
                                    </span>
                                    Track an access manually
                                    <?php //echo $this->Html->link('Track an access manually', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/record-alert-to-user.png'); ?>
                                    </span>
                                    Record an alert to an user
                                    <?php //echo $this->Html->link('Record an alert to an user', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/quick-door-block.png'); ?>
                                    </span>
                                    Quick door block
                                    <?php //echo $this->Html->link('Quick door block', '#'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/employee.png'); ?>
                                    </span>
                                    New Employee/Operator
                                    <?php //echo $this->Html->link('New Employee/Operator', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/new-poll.png'); ?>
                                    </span>
                                    New Poll
                                    <?php //echo $this->Html->link('New Poll', '#'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/new-advertising-compaign.png'); ?>
                                    </span>
                                    New Advertising campaign
                                    <?php //echo $this->Html->link('New Advertising campaign', '#'); 
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  End Insert a new item  //-->
                <li>
                    <a href="javascript:void(0)" onclick="togglemngmenu('archvsubmencls')" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/archives-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text"><?php echo $langs["Archives"]; ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down" style="display:block;"></i>
                        </span>
                    </a>
                    <div class="cm_ama_container" style="display:none;" id="archvsubmencls">
                        <ul class="sublinks insnewitm">

                            <li style="padding-left: 10px;">
                                <a href="<?= $this->webroot; ?>clubs/expiring_member">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/overview.png'); ?>
                                    </span>
                                    » Overview
                                    <?php //echo $this->Html->link('» Overview', array('controller' => 'clubs', 'action' => 'expiring_member')); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubMembers/memberList">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/members.png'); ?>
                                    </span>
                                    Members
                                    <?php //echo $this->Html->link('Members', array('controller' => 'clubMembers', 'action' => 'memberList')); 
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/club_operator_list">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/operator.png'); ?>
                                    </span>
                                    Operators
                                    <?php //echo $this->Html->link('Operators', array('controller' => 'clubs', 'action' => 'club_operator_list')); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/employee.png'); ?>
                                    </span>
                                    Employees
                                    <?php //echo $this->Html->link('Employees', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubMembers/membership">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/affiliate.png'); ?>
                                    </span>
                                    Affiliations
                                    <?php //echo $this->Html->link('Affiliations', array('controller' => 'clubMembers', 'action' => 'membership')); 
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubs/subscription">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/subscription-to-club.png'); ?>
                                    </span>
                                    Subscriptios to the club
                                    <?php //echo $this->Html->link('Subscriptios to the club', array('controller' => 'clubs', 'action' => 'subscription')); 
                                    ?>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/accesses.png'); ?>
                                    </span>
                                    Accesses
                                    <?php //echo $this->Html->link('Accesses', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>users/deadline">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/deadline-of-payment.png'); ?>
                                    </span>
                                    Deadlines of payment
                                    <?php //echo $this->Html->link('Deadlines of payment', array('controller' => 'users', 'action' => 'deadline')); 
                                    ?>
                                </a>
                                <a href="<?= $this->webroot; ?>clubSettings/creditCustomer">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/credits.png'); ?>
                                    </span>
                                    Credits
                                    <?php
                                    //echo $this->Html->link('Credits', array( 'controller' => 'clubSettings', 'action' => 'creditCustomer' ));
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/other-debs.png'); ?>
                                    </span>
                                    Other debts
                                    <?php //echo $this->Html->link('Other debts', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>ArchiveSeles/product_sale_list">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/shop-products.png'); ?>
                                    </span>
                                    Shop/Selling of products
                                    <?php //echo $this->Html->link('Shop/Selling of products', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/services-for-customers.png'); ?>
                                    </span>
                                    Services for the customers
                                    <?php //echo $this->Html->link('Services for the customers', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>

                            <li>
                                <?php //echo $this->Html->link('Cash In',  array('controller'=>'users','action'=>'cash_in'));  
                                ?>
                                <a href="/clubs/movement_cash_details/IN">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/cash-in.png'); ?>
                                    </span>
                                    Cash In
                                </a>
                                <a href="/clubs/movement_cash_details/OUT">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/cash-out.png'); ?>
                                    </span>
                                    Cash Out
                                    <?php //echo $this->Html->link('Cash Out', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="/clubs/movement_cash_details">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/cash-all.png'); ?>
                                    </span>
                                    Cash(all movements)
                                </a>
                            </li>

                            <li>
                                <a href="/clubMembers/movement_cash">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/payment-receipt.png'); ?>
                                    </span>
                                    Payment receipts
                                    <?php //echo $this->Html->link('Payment receipts', array('controller' => 'users', 'action' => 'payment_receipts')); 
                                    ?>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/payment-receipt.png'); ?>
                                    </span>
                                    Cards assignments
                                    <?php //echo $this->Html->link('Cards assignments', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/payment-receipt.png'); ?>
                                    </span>
                                    Alert assigned
                                    <?php //echo $this->Html->link('Alert assigned', 'javascript:void(0);'); 
                                    ?>
                                </a>

                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/reservation.png'); ?>
                                    </span>
                                    Reservations
                                    <?php //echo $this->Html->link('Reservations', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/marketing-contact.png'); ?>
                                    </span>
                                    Contacts of marketing
                                    <?php //echo $this->Html->link('Contacts of marketing', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/events.png'); ?>
                                    </span>
                                    Events
                                    <?php //echo $this->Html->link('Events', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/new-poll.png'); ?>
                                    </span>
                                    Polls
                                    <?php //echo $this->Html->link('Polls', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/new-advertising-compaign.png'); ?>
                                    </span>
                                    Advertising campaigns
                                    <?php //echo $this->Html->link('Advertising campaigns', 'javascript:void(0);'); 
                                    ?>
                                </a>
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/queries-to-staff.png'); ?>
                                    </span>
                                    Queries to the staff ...
                                    <?php //echo $this->Html->link('Queries to the staff  ...', 'javascript:void(0);'); 
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  Start Agenda and Planner  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/agenda-and-planner-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Agenda and Planner"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Agenda and Planner  //-->
                <!--//  Start Staff attendances  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/staff-attendances-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Staff attendances"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Staff attendances  //-->
                <!--//  Start Shop  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/shop-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Shop"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Shop  //-->
                <!--//  Start Notice-board  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/notice-board-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Notice-board"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Notice-board  //-->
                <!--//  Start Statistics & Trends  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/statistics-and-trends-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Statistics & Trends"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Statistics & Trends  //-->
                <!--//  Start Print reports  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col" onclick="togglemngmenu('insertanewitemmenu')">
                        <?php echo $this->Html->image('icon-img/print-reports-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "Print reports"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Print reports  //-->
                <!--//  Start General settings  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col action-sub-container" data-id="settingsOptionID" data-status="false">
                        <?php echo $this->Html->image('icon-img/general-settings-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text">
                            <?php echo "General settings"; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa fa-caret-down"></i>
                        </span>
                    </a>
                    <div class="cm_ama_container" id="settingsOptionID" style="display:none">
                        <ul class="sublinks insnewitm">
                            <li style="padding-left: 10px;">
                                <a href="javascript:void(0);">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/default-for-members-profiles.png'); ?>
                                    </span>
                                    <?php echo $langs["Default for member's profiles"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="JavaScript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/identification-devices.png'); ?>
                                    </span>
                                    <?php echo $langs["Identification devices"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubSettings/clubsetting_typology_subscription">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/typologies-of-subscription.png'); ?>
                                    </span>
                                    Typologies of subscription
                                </a>
                                <?php
                                //echo $this->Html->link('Typologies of subscription', array('controller' => 'clubSettings', 'action' => 'clubsetting_typology_subscription'));
                                ?>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>ClubSettings/card_reader_list">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/system-settings.png'); ?>
                                    </span>
                                    <?php echo $langs["System settings"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>clubSettings/club_access_setting">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/accesses-controls.png'); ?>
                                    </span>
                                    <?php echo $langs["Accesses controls"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot; ?>clubSettings/club_other_setting">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/other-settings.png'); ?>
                                    </span>
                                    <?php echo $langs["Other settings"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubSettings/areas">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/tables.png'); ?>
                                    </span>
                                    Tables
                                    <?php
                                    //echo $this->Html->link('Tables', array('controller' => 'clubSettings', 'action' => 'areas'));
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $this->webroot; ?>clubSettings/accesses_of_outcome_settings">
                                    <span class="icon">
                                        <i class="fa fa-volume-up"></i>

                                    </span>
                                    <?= $langs['access_of_outcome_settings']; ?>
                                </a>
                            </li>
                            <li>
                                <a href="JavaScript:void(0)">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/audio-messages.png'); ?>
                                    </span>
                                    <?php echo $langs["Audio messages"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot . 'club_settings/presetSettings'; ?>">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/load-preset-settings.png'); ?>
                                    </span>
                                    <?php //echo $langs["Load preset settings"];  
                                    ?>
                                    <?php echo "Load dbase from other apps"; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->webroot . 'club_settings/enableDisableFunctions'; ?>">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/enable-disable-functions.png'); ?>
                                    </span>
                                    <?php echo $langs["Enable-disable functions"]; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  End General settings  //-->
                <!--//  Start Security  //-->
                <li>
                    <a href="JavaScript:void(0)" onclick="displayDrop('security_yellow')" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/security-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text_yellow text">
                            <?php echo $langs["Security"]; ?>
                        </span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-right"></i>
                        </span>
                    </a>
                    <!-- Popup start -->
                    <div class="on_click dropdwn" id="security_yellow" style="display:none;">
                        <ul class="sublinks">
                            <li class="togg-heading">
                                <span>
                                    <?php echo $langs["Security"]; ?>
                                </span>
                            </li>
                            <li>
                                <a href="JavaScript:void(0)" onclick="displayDrop_security()" style="cursor: pointer">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/access-to-security-menu.png'); ?>
                                    </span>
                                    <?php echo $langs["Access to Security menu"]; ?>
                                    <span class="rightarrow">
                                        <i class="fa fa-caret-right"></i>
                                    </span>
                                </a>
                                <!--Enter password here-->
                                <div class="fixed-center" id="display_ask_pswdID" style="display:none;">
                                    <div class="popup-block enter-password">
                                        <button type='button' class="popup-block-close" onclick="displayask_security_hide();">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        </button>
                                        <div class="lock-icon">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </div>
                                        <div class="pass-title">
                                            Password
                                        </div>
                                        <div class="input-pass">
                                            <input type="text" id="admin_pswdID">
                                        </div>
                                        <div class="en-pass-proceed-btn-row">
                                            <button id="" class="btn" onclick="show_security_password();" type="button">
                                                <?php echo $langs["Proceed"]; ?>
                                            </button>
                                            <?php echo $this->Html->image('ajax-loader-new.gif', array('id' => 'loader_pswd_securityID', 'style' => 'display:none;')); ?>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <!--Enter password here end-->
                                <div class="on_click subdropdwn" id="security_password" style="display:none;">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $this->webroot; ?>clubs/enable_disable_password">
                                                <?php echo $langs["Enable/disable Security"]; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $this->webroot; ?>clubs/club_admin_system_pswd">
                                                <?php echo $langs["Admin’s system password"]; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $this->webroot; ?>clubSettings/operator_access_level_security">
                                                <?php echo $langs["Employee-staff settings"]; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $this->webroot; ?>clubs/club_setting_for_each_level">
                                                <?php echo $langs["Setting functions for each level of access"]; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $this->webroot; ?>clubSettings/club_security_other_settings">
                                                <?php echo $langs["Other settings"]; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="JavaScript:void(0)">
                                                <?php echo $langs["Activity log"]; ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </li>

                            <li>
                                <a href="<?php echo $this->webroot; ?>clubs/club_operator_security_password">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/change-my-password.png'); ?>
                                    </span>
                                    <?php echo $langs["Change my password"]; ?>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $this->webroot; ?>clubSettings/dbaseManagement">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/management-of-database.png'); ?>
                                    </span>
                                    <?php echo $langs["Management of your database"]; ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <?php
                                        echo $this->Html->image('data-icons-white/authorizes-this-computer.png'); ?>
                                    </span>
                                    <?php echo $langs["Authorizes this computer"]; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  End Security  //-->
                <!--//  Start Access Control  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/access-control-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text text_green"><?php echo $langs["Access Control"]; ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Access Control  //-->
                <!--//  Start CMR  //-->
                <li>
                    <a href="javascript:void(0);" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/crm-customer-care-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text"><?php echo 'CRM Customer care' ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End CMR  //-->
                <!--//  Start Utilities  //-->
                <li>
                    <a href="javascript:void(0);" onclick="togglemenu_option('toggle_other_Utilities')" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/utilities-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text"><?php echo $langs["Utilities"]; ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                    <div class="cm_ama_container" style="display:none">
                        <ul>
                            <li>
                                <a href="<?php echo $this->webroot . 'club_settings/presetSettings'; ?>"> Import
                                    Database</a>
                            </li>
                            <li>
                                <a href="#"> Import settings from default settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--//  End Utilities  //-->
                <!--//  Start Other options  //-->
                <li>
                    <a href="javascript:void(0)" onclick="togglemenu_option('toggle_other_options1')" class="cm_panel_tab_btn cm_insert_item_col">
                        <?php echo $this->Html->image('icon-img/other-options-icon.png', array('class' => 'iconcunstome')); ?>
                        <span class="text"><?php echo $langs["Other options"]; ?></span>
                        <span class="rightarrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                </li>
                <!--//  End Other options  //-->
            </ul>
        <?php } ?>
    </div>
    <input type="hidden" value="<?php echo $deviceEnableCount; ?>" id="hdnDeviceCount">
    <?php if ($deviceCount == 0 || $show_modal_by_default || !$this->Session->read('management_access')) { ?>

        <div class="popup-overlay" id="showAjaxDeviceOverlay" style="display:none"></div>
        <div class="fixed-center fixed-center-pop acceed-popup" style="display:none" id="showAjaxDevicePopup" data-t="1">
            <div class="popup-close"><a href="JavaScript::void(0)" onclick="closedevicePopup()"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <div class="clear"></div>
            <div>
                <?php
                echo $this->Form->input('code_status', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['id'], 'id' => 'current_device_id_device'));

                echo $this->Form->input('device_code', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['ip_address'], 'id' => 'unique_device_code'));

                echo $this->Form->input('block_status', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['block_status'], 'id' => 'block_status_value_device'));
                ?>
                <div class="blue_row1">Put password to accede to the management section</div>
                <div class="text-center mt-10">
                    <?php echo $this->Html->image('security-menu.png'); ?>
                </div>
                <div class="device-success" style="display:none"></div>
                <div class="col-10" style="float: left;width: 4%;margin: 4px 0 0 34%;">
                    <?php echo $this->Html->Image('pc-icon.jpg', array('style' => 'vertical-align:middle;')); ?>
                </div>

                <div class="col-0"> <?php echo $deviceData['Device']['device_name']; ?> </div>
                <div class="col-60" style="float: left; width: 28%;margin: 0 1%;">
                    <input type="password" value="" placeholder="" id="deviceTextbox">
                    <input type="hidden" id="device_status" class="device_status" />
                </div>
                <div class="clear"></div>
                <div class="device-error"></div>
                <div class="clear"></div>
                <div class="text-center mt-20">
                    <div style="display:none" id="showAjaxDeviceLoader"><i class="fa fa-spinner fa-pulse"></i></div>
                    <div id="actionConfirmButton">
                        <a class="btn-red" href="" id="confirmDevicePassword">Confirm</a>
                        <a class="btn-gray" href="JavaScript::void(0)" onclick="closedevicePopup()">Cancel</a>
                    </div>
                </div>


                <div class="slatecol">

                    <?php echo $this->Html->image('secimge.jpg'); ?>

                    <p>You have to enter password according to authorize user to open management section which is listed
                        below</p>

                    <div class="slatecolblock">
                        <p>
                            -If you are club-admin: Type your password<br>

                            -If you have alternative password: Type alternative password<br>

                            -If you are club coadmin or club operator: Type your password.<br>

                            -If you have the password to access to the Management Section.<br>


                        </p>

                    </div>


                </div>


            </div>
        </div>
    <?php } ?>
    <!--popup added by kaushik-->
    <div class="popup-overlay" id="showAjaxDevicePauseOverlay" style="display:none"></div>
    <div class="fixed-center fixed-center-pop acceed-popup" style="display:none" id="showAjaxDevicePausPopup">
        <div class="popup-close"><a href="JavaScript::void(0)" onclick="closedevicePopup()"><i class="fa fa-times" aria-hidden="true"></i></a>
        </div>
        <div class="clear"></div>
        <div>
            <?php
            echo $this->Form->input('code_status', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['id'], 'id' => 'current_device_id_device'));

            echo $this->Form->input('device_code', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['ip_address'], 'id' => 'unique_device_code'));

            echo $this->Form->input('block_status', array('div' => false, 'label' => false, 'type' => 'hidden', 'value' => $deviceData['Device']['block_status'], 'id' => 'block_status_value_device'));
            ?>
            <div class="blue_row1">Type a valid password to put the Management section in pause</div>
            <div class="text-center mt-10 hepre">
                <?php echo $this->Html->image('security-menu.png'); ?>
            </div>
            <div class="device-success" style="display:none"></div>
            <div class="col-10" style="float: left;width: 4%;margin: 4px 0 0 34%;">
                <?php echo $this->Html->Image('pc-icon.jpg', array('style' => 'vertical-align:middle;')); ?>
            </div>

            <div class="col-0"> <?php echo $deviceData['Device']['device_name']; ?> </div>
            <div class="col-60" style="float: left; width: 28%;margin: 0 1%;">
                <input type="password" value="" placeholder="" id="deviceTextbox">
                <input type="hidden" id="device_status" class="device_status" />
            </div>
            <div class="clear"></div>
            <div class="device-error" style="padding: 0px!important"></div>
            <div class="clear"></div>
            <div class="text-center mt-10">
                <div style="display:none" id="showAjaxDeviceLoader"><i class="fa fa-spinner fa-pulse"></i></div>
                <div id="actionConfirmButton">
                    <a class="btn-red" href="" id="confirmDevicePassword">Confirm</a>
                    <a class="btn-gray" href="JavaScript::void(0)" onclick="closedevicePopup()">Cancel</a>
                </div>
            </div>


            <div class="slatecol">

                <?php echo $this->Html->image('secimge.jpg'); ?>

                <p>You have to enter password according to authorize user to open management section which is listed
                    below</p>

                <div class="slatecolblock">
                    <p>
                        -If you are club-admin: Type your password<br>

                        -If you have alternative password: Type alternative password<br>

                        -If you are club coadmin or club operator: Type your password.<br>

                        -If you have the password to access to the Management Section.<br>


                    </p>

                </div>


            </div>


        </div>
    </div>
    <!--popup end-->
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                if ($("#hdnDeviceCount").val() == 0) {
                    $('#hideInsert').hide();
                    $('#hideArchive').hide();
                } else {
                    $('#hideInsert').show();
                    $('#hideArchive').show();
                }
            }, 2000);
        });
        //action-main-container
        $(".action-paused-container").on("click", function(e) {
            //alert("hi");
            e.preventDefault();
            $("#showAjaxDevicePausPopup").show();
            $("#showAjaxDevicePauseOverlay").show();

        });
        $(".action-main-container").on("click", function(e) {

            e.preventDefault();
            var deviceCount = $("#hdnDeviceCount").val();
            if (deviceCount > 0) {
                var action = $(this).data("id");
                var status = $(this).data("status");
                if (status == false) {
                    $("#" + action).show();
                    $(this).data("status", true);
                } else {
                    $("#" + action).hide();
                    $(this).data("status", false);
                }
            } else {
                showDevicePopup(1);
            }

        });

        function closedevicePopup() {
            $("#deviceTextbox").val("");
            $("#showAjaxDevicePopup").hide();
            $("#showAjaxDeviceOverlay").hide();
            $("#showAjaxDevicePausPopup").hide();
            $("#showAjaxDevicePauseOverlay").hide();
            return false;
        }

        function showDevicePopup(validate = null) {
            $(".device-success").html('');
            $(".device-error").html('');
            $("#showAjaxDevicePopup").show();
            $("#showAjaxDeviceOverlay").show();
            $("input.device_status").val(validate);
            return false;
        }

        $("#confirmDevicePassword").on("click", function(e) {
            e.preventDefault();

            var textbox = $("#deviceTextbox").val();
            var deviceCode = $("#unique_device_code").val();
            var deviceId = $("#current_device_id_device").val();
            var block_status = $("#block_status_value_device").val();
            var validate = $("#device_status").val();
            if (textbox == "") {
                $(".device-error").html("Please enter your device code.");
                $("#deviceTextbox").focus();
                return false;
            }
            if (block_status == 2) {
                $(".device-error").html("Your pc is temporarily suspended. You are not able to access club management section.");
                return false;
            }
            $("#showAjaxDeviceLoader").show();
            $("#actionConfirmButton").hide();
            if (deviceCode != undefined) {
                var dataString = "password=" + textbox + "&mac_id=" + deviceCode + "&device_id=" + deviceId + "&device=" + validate;
                $.ajax({
                    type: "POST",
                    url: "<?php echo $this->webroot ?>devices/check_managment_password",
                    data: dataString,
                    success: function(data1) {
                        //alert("here");
                        $("#showAjaxDeviceLoader").hide();
                        $("#actionConfirmButton").show();

                        if (parseInt(data1) === parseInt(1)) {
                            createCookie_new("club_managment_section", 'club', 1);
                            $("#deviceTextbox").val("");
                            togglemngmenu('mngsecdiv');
                            $(".device-success").show().html("Password is match. Now you can access the club management section.");
                            $(".device-error").html("");
                            if (validate == '0') {
                                window.location.href = '<?= $this->webroot; ?>clubs/enable_password';
                            } else {
                                location.reload();
                            }
                        } else if (parseInt(data1) === parseInt(2)) {
                            $(".device-error").html("Your club expiration limit is finish please renew the subscription.");
                            return false;
                        } else if (parseInt(data1) === parseInt(3)) {
                            $(".device-error").html("Password is not match. Please write the correct password.");
                            return false;
                        } else if (parseInt(data1) === parseInt(4)) {
                            $(".device-error").html('Your device is not enabled. Please ask the club admin to enable your device');
                        } else if (parseInt(data1) === parseInt(5)) {
                            $(".device-error").html('Your device is expired. Please ask the club admin to enable your device.');
                        } else {
                            $(".device-error").html("Something is going wrong.");
                            return false;
                        }
                    }
                });

            } else {

                $(".device-error").html("Your device not registerd !");
                $("#showAjaxDeviceLoader").hide();
                $("#actionConfirmButton").show();
                $("#deviceTextbox").val("");
                return false;
            }

        });

        $(".action-sub-container").on("click", function(e) {
            e.preventDefault();
            var action = $(this).data("id");
            var status = $(this).data("status");
            if (status == false) {
                $("#" + action).show();
                $(this).data("status", true);
            } else {
                $("#" + action).hide();
                $(this).data("status", false);
            }
        });
        var enableStaff = "<?php echo $staffEnabled; ?>";

        function displayDrop_security() {
            if (enableStaff == '1') {
                $('#security_password').show();
            } else {
                $('#display_ask_pswdID').show();
            }
        }

        function displayask_security_hide() {
            $('#admin_pswdID').val('');
            $('#display_ask_pswdID').hide();
        }

        function show_security_password() {
            var pswd = $('#admin_pswdID').val();
            $('#loader_pswd_securityID').show();
            $.ajax({
                async: false,
                type: "POST",
                url: '<?php echo $this->webroot; ?>club_settings/chk_admin_pswd',
                data: "ajax=true&pswd=" + pswd,
                success: function(msg) {
                    $('#loader_pswd_securityID').hide();
                    if (msg == parseInt(1)) {
                        $('#security_password').show();
                    } else {
                        $('#security_password').hide();
                    }
                    displayask_security_hide();
                },
                error: function() {
                    $('#loader_pswd_securityID').hide();
                    displayask_security_hide();
                }
            });
        }

        /*----serach current staff or login staff or all staff member:-swap----*/
        function search_by_staff_log(value) {

            $('.opacity_box').show();
            $.ajax({
                async: false,
                type: "POST",
                url: '<?php echo $this->webroot; ?>clubs/search_by_staff_log',
                data: {
                    "value": value
                },
                success: function(data) {
                    $("#load_club_subadin").html(data);
                    $('.opacity_box').hide();
                },
                error: function() {
                    alert("Something happen wrong");
                    return false;
                }
            });
        }

        function co_validation() {
            $('.opacity_box').show();
            var url_value = $("#url_value").val();
            var operator_password = $("#operator_password").val();
            if (operator_password == "") {
                alert("Please enter passowrd");
                return false;
            } else {

                $.ajax({
                    type: "POST",
                    url: "<?php echo $this->webroot; ?>users/check_password",
                    data: {
                        "old_password": operator_password
                    },
                    beforeSend: function() {},
                    success: function(data) {
                        $('.opacity_box').hide();
                        if (parseInt(data) == parseInt(1)) {
                            $("#operator_password").val("");
                            $("#co_admin_password_box").hide();
                            window.open(url_value, '_blank');
                        } else {
                            alert("Please enter valid password");
                            return false
                        }
                    }
                });

            }
        }

        /*---------------End:-swap-----------------------------*/
        function close_co_admin_box() {
            $("#co_admin_password_box").hide();
        }

        function add_co_admin(tabName) {
            if (enableStaff == '1') {
                if (tabName == "co_admin") {
                    window.open("<?php echo $this->webroot; ?>clubs/club_subadmin_add", '_blank');
                } else {
                    window.open("<?php echo $this->webroot; ?>clubs/club_operator_add", '_blank');
                }

            } else {

                if (tabName == "co_admin") {

                    $("#url_value").val("<?php echo $this->webroot; ?>clubs/club_subadmin_add");
                    $('.co_admin_password_box').css({
                        "margin-top": "0px"
                    });
                } else {

                    $("#url_value").val("<?php echo $this->webroot; ?>clubs/club_operator_add");
                    $('.co_admin_password_box').css({
                        "margin-top": "58px"
                    });

                }
                $("#co_admin_password_box").toggle();
            }
        }
    </script>

    <?php if ($show_modal_by_default) :
    ?>
        <script>
            showDevicePopup(1);
        </script>
    <?php endif; ?>

    <input type="hidden" value="" id="url_value">
    <!---------swap---------------------->
    <?php
    echo $this->Html->script('pages/element/clubmanagment/clubmanagment');
    ?>
    <script type="text/javascript">
        var msg = {
            'webroot': '<?php echo $this->webroot; ?>',
            'user_id': '<?php echo $user_id; ?>'
        };
        $(document).ready(function() {
            clubmanagment.init(msg);
        });


        function returnCheckArray(className) {
            var arrayDashboardSetting = [];
            $('.' + className).each(function(index, iteam) {
                valueData = $(this).val();
                if ($(this).is(':checked')) {
                    arrayDashboardSetting.push(valueData);
                } else {
                    arrayDashboardSetting.splice(index, 1);
                }
            });
            return arrayDashboardSetting;
        }

        function saveSetting() {

            checkArray = returnCheckArray('setdashBoardSetting');
            $.ajax({
                type: "POST",
                url: "<?php echo $this->webroot ?>clubSettings/ajax_update_club_setting",
                data: {
                    "arrayDashboardSetting": checkArray,
                    'field_name': 'dashboard_setting'
                },
                success: function(data1) {
                    alert('Your setting has been save successfull');
                }
            });

        }

        function summaryPanel() {

            checkArray = returnCheckArray('summaryPanel');
            $.ajax({
                type: "POST",
                url: "<?php echo $this->webroot ?>clubSettings/ajax_update_club_setting",
                data: {
                    "arrayDashboardSetting": checkArray,
                    'field_name': 'summary_panel'
                },
                success: function(data1) {
                    alert('Your setting has been save successfull');
                }
            });
        }

        function setRowValue(rowValue, field_name) {

            $.ajax({
                type: "POST",
                url: "<?php echo $this->webroot ?>clubSettings/ajax_update_club_setting",
                data: {
                    "arrayDashboardSetting": rowValue,
                    'field_name': field_name
                },
                success: function(data1) {
                    alert('Your setting has been save successfull');
                    //location.reload();
                }
            });


        }


        

$(document).on("click",".website_checkbox",function(){
    if($(this).is(':checked')){
        $("#website_area").show();
        }
    else{        
        $("#website_area").hide();
    }    
});

$(document).on("click",".whatsapp_checkbox",function(){
    if($(this).is(':checked')){
        $("#whatsapp_area").show();
        }
    else{        
        $("#whatsapp_area").hide();
    }    
});
     

$(document).on("click",".instagram_checkbox",function(){
    if($(this).is(':checked')){
        $("#instagram_area").show();
        }
    else{        
        $("#instagram_area").hide();
    }    
});



$(document).on("click",".youtube_checkbox",function(){
    if($(this).is(':checked')){
        $("#youtube_area").show();
        }
    else{        
        $("#youtube_area").hide();
    }    
});



$(document).on("click",".linkedin_checkbox",function(){
    if($(this).is(':checked')){
        $("#linkedin_area").show();
        }
    else{        
        $("#linkedin_area").hide();
    }    
});



$(document).on("click",".blog_checkbox",function(){
    if($(this).is(':checked')){
        $("#blog_area").show();
        }
    else{        
        $("#blog_area").hide();
    }    
});



$(document).on("click",".google_checkbox",function(){
    if($(this).is(':checked')){
        $("#google_area").show();
        }
    else{        
        $("#google_area").hide();
    }    
});

    </script>

    <!---------swap---------------------->
</div>