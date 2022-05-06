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

<?php
if ($this->params['controller'] == 'searchresults') {
    $privacy_menus = explode(',', $userDetails['other']);
}
?>

<!doctype html>
<html>

<head>
    <title><?php echo $langs['Movesbook']; ?></title>
    <meta charset="utf-8"/>
    <!--  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="//malsup.github.com/jquery.form.js"></script> -->
    <?php
    // echo $this->HTML->Script('form_validation');
    echo $this->Html->css('temp');
    echo $this->Html->css('style');
    echo $this->Html->css('style_sb');
    echo $this->Html->css('style.nilesh');
    echo $this->Html->css('style.sheetal');
    echo $this->Html->css('logout_panel');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('tab_style');
    echo $this->Html->css('timeline');
    echo $this->Html->css('flexisel_slider');
    echo $this->Html->css('tab');
    echo $this->Html->css('portBox');
    echo $this->Html->css('polyglot-language-switcher');
    echo $this->Html->css('colorbox');
    echo $this->Html->css('pop-style');
    echo $this->Html->css('mintScrollbar.css');
    echo $this->Html->css('jquery.ad-gallery');
    echo $this->Html->css('spinners');
    echo $this->Html->css('loading-takeover');


    // echo $this->Minify->css([
    //     'temp',
    //     'style',
    //     'style_sb',
    //     'style.nilesh',
    //     'style.sheetal',
    //     'logout_panel',
    //     'font-awesome.min',
    //     'tab_style',
    //     'timeline',
    //     'flexisel_slider',
    //     'tab',
    //     'portBox',
    //     'polyglot-language-switcher',
    //     'colorbox',
    //     'pop-style',
    //     'mintScrollbar.css',
    //     'jquery.ad-gallery'
    // ]);
    ?>
    <style>

    </style>

    <input type="hidden" id="scroll" value="0">
    <!--Fixed post bar header-->
    <!------end middel section welcome bar fixed on scroll conditions---->
    <?php
    echo $this->HTML->Script('tab');
    // echo $this->Html->css('tab');
    
    //echo $this->Html->script('jquery_002');//For ColorBox
    if (($this->params['controller'] == 'events') && ($this->params['action'] == 'add')) {
        ?>
        <!-- <script type="text/javascript" src="<?php //echo $this->webroot 
        ?>timeandDate/jquery-1.11.1.min.js"></script> Important for TimePicker in Add event page -->
        <?php
    } else {
        
        echo $this->Html->script('jquery.min'); // !!!!! important for fancybox
    }
    // echo $this->Html->css('colorbox');//For colorbox
    //echo $this->Html->Script('jquery-1.7.min');
    /* if(($this->params['controller']=='musics') && ($this->params['action']=='addsong')) { 
      echo $this->Html->script('jquery-1.7.2.min');
      } */
    //echo $this->Html->script('jquery.form');
    echo $this->Html->script('ckeditor/ckeditor.js');
    //Ck Editor Strat
    //echo $this->Html->script('kcfinder');//KC Editor Strat
    ?>
    <!--DatePicker Start-->
    <link rel="stylesheet" href="<?php echo $this->webroot ?>new_date_picker/themes/all.css">
    <script type="text/javascript" src="//malsup.github.com/jquery.form.js"></script>
    <!-- <script src="<?php echo $this->webroot ?>new_date_picker/ui/core.js"></script>
    <script src="<?php echo $this->webroot ?>new_date_picker/ui/widget.js"></script>
    <script src="<?php echo $this->webroot ?>new_date_picker/ui/datepicker.js"></script> -->
    <script>
        //$(function() {
        //  $("#datepicker,#datepicker2,#datepicker3,#datepicker4").datepicker();
        //});
    </script>
    <?php
    echo $this->Html->script('new_date_picker/ui/core.js');
    echo $this->Html->script('new_date_picker/ui/widget.js');
    echo $this->Html->script('new_date_picker/ui/datepicker.js');
    echo $this->Html->script('jquery-ui-1.10.3.custom.min');
    echo $this->Html->script('portBox.slimscroll.min');
    echo $this->Html->script('jquery.cookie');
    echo $this->Html->script('jquery.polyglot.language.switcher');
    // echo $this->Minify->script([
    //     'new_date_picker/ui/core.js',
    //     'new_date_picker/ui/widget.js',
    //     'new_date_picker/ui/datepicker.js',
    //     'jquery-ui-1.10.3.custom.min',
    //     'portBox.slimscroll.min',
    //     'jquery.cookie',
    //     'jquery.polyglot.language.switcher'
    // ]);
    ?>
    <script>
        var RootURL = '<?php echo $this->webroot; ?>';
    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            $(".pm-link").each(function () {

                $(this).click(function () {

                    tabeId = $(this).attr('id');
                    $(".pm-link").removeClass("active");
                    $(this).addClass("active");
                    $(".pm-content").addClass("hide");
                    $("#" + tabeId + "-1").removeClass("hide")
                    return false;
                });
            });

        });
    </script>
    <!-- script for tabs end -->
    <!-- FancyBox Code Start-->
    <?php echo $this->element('common_elements/crop_fancybox'); ?>
    <!-- FancyBox Code End -->
    <!-- Language switcher JS -->
    <?php
    /* if(($this->params['controller']!='musics')&&($this->params['action']!='addsong')){ 
      echo $this->Html->script('jquery-1.7.min.js');
      } */
    // echo $this->Html->script('jquery.cookie');
    // echo $this->Html->css('polyglot-language-switcher');
    // echo $this->Html->script('logoutPanel');
    ?>
    <?php
    // echo $this->HTML->Script('jquery.polyglot.language.switcher');
    // echo $this->Html->css('polyglot-language-switcher');
    //echo $this->HTML->Script('jquery-1.7.min'); 
    ?>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
                effect: 'fade',
                testMode: true,
                onChange: function (evt) {
                    // alert("The selected language is: " + evt.selectedItem);
                    document.getElementById(evt.selectedItem).className = 'current active';
                    $.cookie("lg", evt.selectedItem);
                    window.location.href = '<?php echo $this->here; ?>';
                    // alert("The selected language is: " + evt.selectedItem);
                }
            });

        });
    </script>
    <!-- Language switcher JS End -->
    <!--<script src="js/jquery-1.8.2.min.js"></script> jQuery -->
    <!--For photo gallery start-->
    <?php #echo $this->Html->css('jquery.ad-gallery'); 
    ?>
    <?php echo $this->Html->script('jquery.ad-gallery'); ?>

    <script type="text/javascript">
        $(function () {

            $('img.image1').data('ad-desc', '');
            $('img.image2').data('ad-title', '');
            $('img.image3').data('ad-desc', '');
            $('img.image4').data('ad-desc', '');
            var galleries = $('.ad-gallery').adGallery();

            $('#switch-effect').change(
                function () {
                    galleries[0].settings.effect = $(this).val();
                    return false;
                }
            );

            $('#toggle-slideshow').click(
                function () {
                    galleries[0].slideshow.toggle();
                    return false;
                }
            );

            $('#toggle-description').click(
                function () {
                    if (!galleries[0].settings.description_wrapper) {
                        galleries[0].settings.description_wrapper = $('#descriptions');
                    } else {
                        galleries[0].settings.description_wrapper = false;
                    }
                    return false;
                }
            );

        });
    </script>
    <!--For photo gallery end-->
    <?php
    // echo $this->Html->css('colorbox');
    //echo $this->Html->script('jquery.ad-gallery'); 
    #echo $this->Html->script('jquery.colorbox');
    #echo $this->Html->script('jquery.colorbox-min');
    #echo $this->HTML->Script('jquery.popupoverlay'); //jQuery Popup Overlay -->    
    // echo $this->Html->css('pop-style'); //css Popup Overlay --> 
    #echo $this->HTML->Script('jquery.flexisel'); //<!--For Submenu slider Only-->
    #echo $this->HTML->Script('show_hide_panel');
    ?>
    <!--  Right  column scroll items  -->
    <?php
    // echo $this->Html->css('mintScrollbar.css');
    #echo $this->Html->script('jquery.mousewheel.min');
    #echo $this->Html->script('jquery.mintScrollbar.min');
    ?>
    
    
    <?php
    // scripts base
    echo $this->Html->script('jquery.colorbox');
    echo $this->Html->script('jquery.colorbox-min');
    echo $this->Html->script('jquery.popupoverlay');
    echo $this->Html->script('jquery.flexisel');
    echo $this->Html->script('jquery.mousewheel.min');
    echo $this->Html->script('jquery.mintScrollbar.min');
    echo $this->Html->script('show_hide_panel');
    echo $this->Html->script('logoutPanel');
    echo $this->Html->script('form_validation');
    // echo $this->Minify->script([
    //     'jquery.colorbox',
    //     'jquery.colorbox-min',
    //     'jquery.popupoverlay',
    //     'jquery.flexisel',
    //     'jquery.mousewheel.min',
    //     'jquery.mintScrollbar.min',
    //     'show_hide_panel',
    //     'logoutPanel',
    //     'form_validation'
    // ]);
    ?>


    <script>
        jQuery(function ($) {
            $(".right-col-scroll").mintScrollbar({
                onChange: function (scrollTop) {
                    // console.log("[mintScrollbar.onChange]", {
                    //     scrollTop: this.scrollTop,
                    //     scrollLeft: this.scrollLeft
                    // });
                }
            });
        });
    </script>
    <!--  Right  column scroll items  -->
    <!-- chat-col scroll -->
    <script>
        jQuery(function ($) {
            $(".ns-chat-list-scroll").mintScrollbar({
                onChange: function (scrollTop) {
                    // console.log("[mintScrollbar.onChange]", {
                    //     scrollTop: this.scrollTop,
                    //     scrollLeft: this.scrollLeft
                    // });
                }
            });
        });
    </script>
    <!-- chat-col scroll -->


    <script>
        $(document).ready(function () {

            /* Uploading Profile BackGround Image */
            /*$('body').on('change', '#bannerimg', function () {
             $("#bgimgfrm").ajaxForm({
             target: '#timelineBackground',
             beforeSubmit: function () {
             $("#timelineShade").hide();
             },
             success: function (data) {
             
             $("#timelineShade").hide();
             $("#bgimgfrm").hide();
             },
             error: function () {
             }}).submit();
             });*/

            /* Banner position drag */
            $("body").on('mouseover', '.headerimage', function () {
                var y1 = $('#timelineBackground').height();
                var y2 = $('.headerimage').height();
                $(this).draggable({
                    scroll: false,
                    axis: "y",
                    drag: function (event, ui) {
                        if (ui.position.top >= 0) {
                            ui.position.top = 0;
                        } else if (ui.position.top <= y1 - y2) {

                            ui.position.top = y1 - y2;
                        }
                    },
                    stop: function (event, ui) {
                    }
                });
            });
            /* Bannert Position Save*/

            $("body").on('click', '.bgSave', function () {
                var id = $(this).attr("id");
                var p = $("#timelineBGload").attr("style");
                var Y = p.split("top:");
                var Z = Y[1].split(";");
                var dataString = 'roleid=5&position=' + Z[0];
                $.ajax({
                    type: "POST",
                    url: "<?php echo $this->webroot; ?>clubs/image_saveBG_ajax/",
                    data: dataString,
                    cache: false,
                    beforeSend: function () {
                    },
                    success: function (html) {
                        if (html != '') {
                            $(".bgImage").fadeOut('slow');
                            $(".bgSave").fadeOut('slow');
                            $("#timelineShade").fadeIn("slow");
                            $("#timelineBGload").removeClass("headerimage");
                            $("#timelineBGload").css({
                                'margin-top': html
                            });
                            return false;
                        }
                    }
                });
                return false;
            });
        });

        function selectpic() {
            alert("sfs");
            //$("#bannerimg").click();
        }
    </script>
    <script>
        $(window).scroll(function (event) {

            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                // alert(scroll);
            }
        });
    </script>
    <!-- script for tabs -->
    <!--Fixed post bar header-->
    <!--middel section welcome bar fixed on scroll conditions-->
    <script>
        $(window).bind('scroll', function () {

            $('#scroll').val($(window).scrollTop());
            if ($(window).scrollTop() > 287) {

                $('.fixed-wellcome-bar').addClass('fixed');
                var leftarea = $('#col_left').css('display');
                var rightarea = $('#col_right').css('display');

                if (rightarea === 'none' && leftarea === 'none') {
                    $('.wb-content').addClass('left');
                    $('.wb-content').addClass('right');
                } else if ((rightarea === 'none' && leftarea === 'block')) {
                    $('.wb-content').addClass('right');
                } else if ((rightarea === 'block' && leftarea === 'none')) {
                    $('.wb-content').addClass('left');
                } else if (rightarea === 'block' && leftarea === 'block') {
                    $('.wb-content').removeClass('right');
                    $('.wb-content').removeClass('left');
                }

                if (rightarea === 'none' && leftarea === 'none') {
                    $('.wb-content').addClass('left');
                    $('.wb-content').addClass('right');
                }

            } else {

                $('.fixed-wellcome-bar').removeClass('fixed');
                $('.wb-content').removeClass('right');
                $('.wb-content').removeClass('left');
                // $('.main_footer').css({'margin-top':'54.4%'});
            }

        });
    </script>
</head>

<style>
    .outside {
        width: 500px;
        height: 300px;
        overflow: hidden;
    }
</style>

<body class="bodyStyleClass">

<?=
$this->element('Messages/flash_message_modal', [
    'foreground_messages' => $foreground_messages
]);
?>

<div class="loading-takeover fixed" style="display: none;">
    <div class="spin"></div>
    <div class="loading-text">
        <span>Loading...</span><br/>
    </div>
</div>

<!--Add his (+) For Share page -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-551f97ed758f7b9c"
        async="async"></script>
<!--Add his (+) For Share page -->

<!-- Header File Start -->
<?php echo $this->element('single_user/header'); ?>
<!-- Header File Start -->

<div class="clear"></div>


<!--main start-->
<?php echo $this->element("help_edit_page/right_bug_side_icon_menu"); ?>

<div id="main" class="main-pad-top">
    <!--main content -->
    <div id="content">
        <!--Banner -->
        <div class="content-pad">
            <!--Main navigation start-->
            <?php //echo $this->element('common_elements/common_menus');
            ?>
            <!--Main navigation end-->
            <!--main  navigation-->
            <div class="clear"></div>
            <!-- new section start-->
            <div class="new-section-top">
                <div class="ns-left" id="ns-left">
                    <!--banner section start-->
                    <div class="sprtbook_banner single_user ">
                        <div id="timelineBackground">
                            <?php
                            if (count($subannerInfo) != 0 && $this->Session->read('Auth.User.username') != 'Usertest_alessia') {
                                if ($subannerInfo[0]['Banner']['profile_background'] != '') {
                                    ?>
                                    <img src="<?php echo $this->webroot; ?>img/banner/<?php echo $subannerInfo[0]['Banner']['profile_background']; ?>"
                                         class="bgImage"
                                         style="margin-top: <?php echo $subannerInfo[0]['banners']['profile_background_position']; ?>;height: 100%;">
                                <?php }
                            } else {
                                if ($this->Session->read('Auth.User.username') == 'Usertest_alessia'):
                                    echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/1ZFplZ93oXY?controls=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                else:
                                    echo $this->Html->image('user-experience.jpg', array('class' => 'bgImage'));
                                endif;
                                ?>
                            <?php } ?>
                        </div>
                        <div class="upload_newuserbanner"
                             style="background:url('<?php echo $this->webroot; ?>img/timeline_shade.png');"
                             id="timelineShade"><a href="#" onclick="selectpic();"><i class="fa fa-camera"></i></a>
                            <?php //echo $this->Html->script('jquery-ui.min.js');
                            ?>
                            <?php // echo $this->Html->script('jquery.wallform.js');
                            ?>
                            <form id="bgimgfrm" method="post" enctype="multipart/form-data"
                                  action="<?php echo $this->webroot; ?>clubs/image_upload_ajax/5">
                                <input type="file" name="bannerimg" id="bannerimg" style="display:none"
                                       original-title="Change Cover Picture">
                            </form>
                        </div>
                        <div class="newimage_block">
                            <?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '170', 'height' => '127')), "#", array('escape' => false)); ?>
                        </div>
                        <div class="upload_newimage">
                            <a id="iframe" rel="" style=" color: #FFFFFF;font-size: 9px;"
                               href="<?php echo $this->webroot; ?>users/profile_pic/<?php echo $_SESSION['Auth']['User']['id'] . "/" . "user"; ?>"
                               title="">
                                <i class="fa fa-camera"></i>
                            </a>
                        </div>

                        <div class="upgrade_info">
                            <a target="_blank"
                               href="<?php echo $this->webroot; ?>news/versionnews_list_user/club/<?php echo base64_encode($this->Session->read('Auth.User.subscription_setting_id')); ?>"><?php echo $langs['Upgrade Informations']; ?></a>
                            <a href="JavaScript:void(0)"><?php echo $langs['Logger of activities']; ?></a>
                        </div>
                        <div class="username_banner add"><?php echo $this->Session->read('Auth.User.firstname');
                            echo __(' ');
                            echo $this->Session->read('Auth.User.lastname'); ?></div>
                    </div>
                    <div class="clear"></div>
                    <!--banner section end-->
                    <!-- ns nmenu row -->

                    <!-- ns nmenu row -->
                </div>
                <div class="ns-right" id="ns-right">
                    <div class="ns-sponsored">
                        <div class="ns_sponsor_title"><?php echo $langs['Sponsored']; ?></div>
                        <div class="ns-sponsor-block">
                            <div class="ns-member_img"><img alt=""
                                                            src="<?php echo $this->webroot; ?>img/profile_image_1.jpg">
                            </div>
                            <div class="ns-member-detail">
                                <span class="nsm-title"><?php echo $langs['Build your store on FBI']; ?></span><br>
                                <span class="nsm-blue"><?php echo $langs['r.shopify.com']; ?></span><br>
                                <span class="nsm-gray"><?php echo $langs['This is a real life']; ?></span>
                            </div>
                        </div>
                        <div class="ns-sponsor-block">
                            <div class="ns-member_img"><img alt="" src="/img/profile_image_1.jpg"></div>
                            <div class="ns-member-detail">
                                <span class="nsm-title"><?php echo $langs['Build your store on FBI']; ?></span><br>
                                <span class="nsm-blue"><?php echo $langs['r.shopify.com']; ?></span><br>
                                <span class="nsm-gray"><?php echo $langs['This is a real life']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="ns-chat-col">
                        <div class="ns-chat-list-box">
                            <div class="ns-chat-list-scroll">
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"><i class="fa fa-circle"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="mobile"><i class="fa fa-mobile"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"><i class="fa fa-circle"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="mobile"><i class="fa fa-mobile"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"><i class="fa fa-circle"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="mobile"><i class="fa fa-mobile"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"><i class="fa fa-circle"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="mobile"><i class="fa fa-mobile"></i></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="chat-list-row">
                                    <div class="img"><img alt="" src="/img/profile_image_1.jpg"></div>
                                    <div class="list-title">Calio Napolitano</div>
                                    <div class="status"><span class="online"></span></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!--Search box-->
                            <div class="club-user-search-box">
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <span class="input-span">
                                        <input type="text" placeholder="" value="">
                                    </span>
                                <a href="#" id="action-user-option-setting" data-action="true"><i class="fa fa-cog"
                                                                                                  aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                <div class="club-user-option-box" id="show-user-option-bx" style="display:none">
                                    <ul>
                                        <div class="li-section">
                                            <li><a href="#">Sounds of the chat</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Show all friends</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Show only friends shared</a></li>
                                            <li><a href="#">Show only friends online</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Show only my teammates</a></li>
                                            <li><a href="#">Show only my clubmates</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Show mates in training</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Choose a category from the list of friends</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Hide the lateral bar</a></li>
                                            <li><a href="#">Hide the groups</a></li>
                                            <li><a href="#">Hide the teams and clubs</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Close all tabs of the chat</a></li>
                                            <li><a href="#">Off all calls</a></li>
                                        </div>
                                        <div class="li-section">
                                            <li><a href="#">Disable chat</a></li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <!--Search box end-->
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="ns-menu-row">
                <?php $guestuser = 'N'; ?>
                <?php if ($guestuser == 'Y') { ?>
                    <!--Submenus start-->
                    <?php
                    echo $this->element('single_user/guestuser_submenu');
                    ?>
                    <!--Submenus end-->
                <?php } else { ?>
                    <!--Submenus start-->
                    <?php echo $this->element('single_user/submenu'); ?>
                    <!--Submenus end-->
                <?php } ?>
            </div>
            <div id="supportDisplayNoneID" style="display:none;">
                <!--Popular workout & sponsor-->
                <?php echo $this->element('home/support'); ?>
                <!--Popular workout & sponsor End-->
            </div>

            <!-- new section start-->
            <?php if ($this->params['controller'] != 'searchresults') { ?>
            <!--Content wrap-->
            <div id="content_wrap">
                <!--Column left-->
                <div id="col_left">
                    <?php
                    if ($this->Session->read('Auth.User.role_id') == '8') {
                        ?>
                        <?php //echo $_SESSION['official_result'];  exit;
                        ?>
                        <div class="left_panel_tabs">
                            <ul>
                                <?php ?>
                                <li><a class="active"
                                       href="<?php echo $this->webroot; ?>users/club_user_faccess"><?php echo $langs['My Page']; ?></a>
                                </li>

                                <li>
                                    <a href="<?php echo $this->webroot; ?>clubs/clubindex"><?php echo $langs['My Club']; ?></a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                    <div class="clear"></div>
                    <!--profile block-->
                    <?php
                    echo $this->element('single_user/profile');
                    ?>


                    <!---------------------------->
                    <a href="javascript:void(0)" onclick="togglemsg1('currentuserlist')">
                        <div class="mainbar_title mupage-tab-menu">
                            <img src="/img/icon-img/bacheca-messages-icon.png" class="icon"/>
                            <span>
                                        My clubs
                                    </span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </a>
                    <div id="profile_links" class="currentuserlist bacheca_messages_links"
                         style="display:none; color:#fff;">
                        <ul>
                            <?php
                            if ($_SESSION['Auth']['User']['role_id'] != 8) {
                                
                                foreach ($submenususerList as $menu_value1) {
                                    $sr_no = 0;
                                    ?>
                                    <li>
                                        <?php echo $this->Html->link(__(ucfirst($menu_value1['User']['username'])), array("action" => "club_member_user", $menu_value1['User']['id'])); ?>
                                    </li>
                                    <?php
                                    $sr_no++;
                                }
                                if ($sr_no == 0) {
                                    echo "Not yet join any club";
                                }
                            } else {
                                $club_users = $_SESSION['Auth']['User']['club_users'];
                                foreach ($club_users as $club_name) {
                                    ?>
                                    <li>
                                        <?php echo ucfirst($club_name['users']['username']); ?><span
                                                style="color: #FFC31C; padding-right: 10px; float: right; font-size: 16px;">Admin</span>
                                    </li>
                                <?php }
                            }
                            ?>
                        </ul>
                    </div>
                    <!---------------------------->


                    <!--profile block end-->
                    <a href="javascript:void(0)" onclick="togglemaintoolbar('maintooldiv')">
                        <div class="mainbar_title mupage-tab-menu">
                            <img src="/img/icon-img/main-toolbar-icon.png" class="icon"/>
                            <span>
                                        <?php echo $langs['Main Toolbar']; ?>
                                    </span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    </a>
                    <div id="maintooldiv" style="display:none;">
                        <!--profile menu-->
                        <?php //echo $this->element('single_user/profile_menus');
                        ?>
                        <!--profile menu end-->
                        <!--profile category-->
                        <?php echo $this->element('single_user/profile_category'); ?>
                        <!--profile category end-->
                    </div>


                    <!--profile links-->
                    <!--<div class="community_title">Other Items</div>-->
                    <?php echo $this->element('single_user/profile_links'); ?>
                    <!--profile links end-->


                    <!--communities-->
                    <?php
                    echo $this->element('single_user/community_block');
                    ?>
                    <!--communities end-->
                    <div class="clear" style="margin-top:1px;"></div>
                    <!--friends block-->
                    <?php
                    echo $this->element('single_user/friends_block');
                    ?>
                    <!--friends block-->
                </div>
                <!--Column left end-->
                <!--Column middle-->
                <div id="col_middle">
                    <?php
                    //echo $this->element('posts/add_post_bar');
                    //echo $this->element('posts/welcome_bar');
                    ?>

                    <script type="text/javascript">
                        $("#menuToolbar").click(function () {
                            $("#welcomBarRow").slideToggle();
                        })
                    </script>
                    <!--welcome bar row start welcome-bar-row-1-->
                    <div id="welcomBarRow"
                         class="welcome-bar-row-1" <?php if ($this->params['action'] == 'track_visitor' || $this->params['action'] == 'track_user_visitor') { ?> style="min-height: 49px !important" <?php } ?>>
                        <div class="fixed-wellcome-bar">
                            <div class="wb-row">
                                <div class="wb-content" style="position:relative;">
                                    <?php
                                    if ($this->params['action'] == 'track_visitor' || $this->params['action'] == 'track_user_visitor') {
                                        echo $this->element('posts/add_post_bar_user_track');
                                    } else {
                                        echo $this->element('posts/add_post_bar');
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" <?php if ($this->params['action'] == 'track_visitor' || $this->params['action'] == 'track_user_visitor') { ?> style="min-height: 49px !important" <?php } ?>>
                        <div class="">
                            <div class="wb-row">
                                
                                <?php if ($this->Session->check('Message.flash')) { ?>
                                    <div id="errors-popup">
                                        <div class="popup-overlay"></div>
                                        <div class="fixed-center">
                                            <div class="fixed-center-pop" style="width:400px;">
                                                <div class="popup-close">
                                                    <a href="Javascript:void(0)" onclick="closeErrorPopups()">
                                                        <i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="text-center"><?php echo $this->Session->flash(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--model by amol-->
                                <?php } ?>
                                <div class="wb-content" style="position:relative;">
                                    <?php if ($this->params['action'] != 'my_sportbook') { ?>
                                    <?php if ($this->params['controller'] == 'posts') { ?>
                                    <!--if else 4 div on condition -->
                                    <div style="border-top:1px solid #fff;"></div>
                                    <?php echo $this->element('single_user/welcome_bar'); ?>
                                    <div style="border-top:1px solid #fff;"></div>
                                    <?php
                                    echo $this->element('posts/welcome_bar');
                                    
                                    echo $this->fetch('content');
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--if else 4 div on condition -->
                    <?php } else { ?>
                    <!--welcome bar-->
                    <div style="border-top:1px solid #fff;"></div>
                    
                    <?php echo $this->element('single_user/welcome_bar'); ?>

                    <!--==============Popup section start===============-->
                    <div class="popup-overlay" id="hidewhenallpopup" style="display:none"></div>
                    <div class="fixed-center">

                        <div class="club-user-access-popup-scroll" style="">
                            <div style="margin-top:-10px; margin-bottom:-10px; padding-right:17px;">
                                <div class="display-table">
                                    <div class="display-table-cell">

                                        <!-- <div class="cuf-alert-popup-card-payment-five-day-msg five_day_message_box_hide_show" style="display:none">
                                                    <span class="cuf-alert-close five_day_message_box" style="cursor: pointer;">
                                                        <i class="fa fa-times-circle"></i>
                                                    </span>
                                                    <div class="title" style="font-size: 16px">
                                                            < ?php echo $test_message1[$language_knw]; ?>
                                                    </div>
                                                </div>-->

                                        <!--card payment popup message-->
                                        <div class="cuf-alert-popup-card-payment" style="display: none; ">
                                                    <span class="cuf-alert-close close_div_alert-card"
                                                          style="cursor: pointer;">
                                                        <i class="fa fa-times-circle"></i>
                                                    </span>
                                            <?php
                                            if (!empty($card_display_date)) {
                                                $param = "magnetic badges";
                                                ?>
                                                <div class="title" style="font-size: 16px">
                                                    <!--<span class="cross f-right close_div_alert-account" style="cursor: pointer;">
                                                                <i class="fa fa-times-circle"></i>
                                                            </span> -->
                                                    <?php
                                                    echo $langs["Your Magnetic Card Subscription Last Date Is"];
                                                    ?>
                                                    <span class="date" style="background: <?php echo $color; ?>">
                                                                <?php echo !empty($block_magneticbadge_date) ? $block_magneticbadge_date : '-' ?>
                                                            </span>
                                                    <!--Sorry ! Your Account Subscription Last Date Is!-->
                                                    <!--<span class="date" style="background: <?php //echo $color;
                                                    ?>">-->
                                                    <?php //echo !empty($account_display_date)?$account_display_date:'-'
                                                    ?>
                                                    <!--</span>-->
                                                </div>
                                                <div class="text"><?php //echo $langs['exp_dec1'];
                                                    ?></div>
                                                <div class="subtitle">
                                                    <?php echo $magnetic_card_message_unserialize[$language_knw]; ?>
                                                </div>
                                            <?php } ?>
                                            <!--<div class="btn-row">
                                                                <a href="JavaScript:void(0)" class="btn-red f-left m-lr-5">
                                                                        < ?php //echo //$langs['Renew my account'];?>
                                                                    Renew my account
                                                                </a>
                                                                <a href="JavaScript:void(0)" class="btn-gray f-left m-lr-5 close_div_alert">< ?php echo $langs['Ask it later'];?></a>
                                                                        < ?php if($_SESSION['Auth']['User']['role_id']==5){?>
                                                                <a href="< ?php echo $this->webroot;?>users/detail_about_version" class="btn-gray f-left m-lr-5"><?php echo $langs['Renew my subscription']; ?></a>            
                                                                       < ?php }else if($_SESSION['Auth']['User']['role_id']==8){?>
                                                                <a href="< ?php echo $this->webroot;?>clubs/club_account_current" class="btn-gray f-left m-lr-5"><?php echo $langs['Detail about your version']; ?></a>
                                                                       < ?php }?>
                                                            </div>-->
                                            
                                            <?php
                                            if ($rfid_badges_card_display_status == "Y") {
                                                $param = "RFID badges";
                                                ?>
                                                <div class="title" style="font-size: 16px">
                                                    <!--<span class="cross f-right close_div_alert-account" style="cursor: pointer;">
                                                                            <i class="fa fa-times-circle"></i>
                                                                            </span>-->
                                                    Your RFIDs badges Card Subscription Last Date Is
                                                    <span class="date"
                                                          style="background: <?php echo $color; ?>"><?php echo !empty($block_rfid_badges_date) ? $block_rfid_badges_date : '-' ?></span>
                                                    <!--Sorry ! Your Account Subscription Last Date Is!-->
                                                    <!--<span class="date" style="background: <?php //echo $color;
                                                    ?>">-->
                                                    <!--</span>-->
                                                </div>
                                                <div class="text"><?php //echo $langs['exp_dec1'];
                                                    ?></div>

                                                <div class="subtitle">
                                                    <?php echo $rfid_badges_message_unserialize[$language_knw]; ?>
                                                </div>
                                            <?php } ?>
                                            <!--                            <div class="btn-row">
                                                                                            <a href="JavaScript:void(0)" class="btn-red f-left m-lr-5">
                                                                <?php //echo //$langs['Renew my account'];
                                            ?>
                                                                                                Renew my account
                                                                                            </a>
                                                                                            <a href="JavaScript:void(0)" class="btn-gray f-left m-lr-5 close_div_alert">< ?php echo $langs['Ask it later'];?></a>
                                                                                                    < ?php if($_SESSION['Auth']['User']['role_id']==5){?>
                                                                                            <a href="< ?php echo $this->webroot;?>users/detail_about_version" class="btn-gray f-left m-lr-5"><?php echo $langs['Renew my subscription']; ?></a>            
                                                                                                   < ?php }else if($_SESSION['Auth']['User']['role_id']==8){?>
                                                                                            <a href="< ?php echo $this->webroot;?>clubs/club_account_current" class="btn-gray f-left m-lr-5"><?php echo $langs['Detail about your version']; ?></a>
                                                                                                   < ?php }?>
                                                                                        </div>-->
                                            <?php
                                            if ($bracelets_card_display_status == "Y") {
                                                $param = "RFID bracelets";
                                                ?>

                                                <div class="title" style="font-size: 16px">
                                                    <!--<span class="cross f-right close_div_alert-account" style="cursor: pointer;">
                                                                               <i class="fa fa-times-circle"></i>
                                                                    </span>-->
                                                    <?php echo $langs["Your RFIDs bracelet Card Subscription Last Date Is"]; ?>
                                                    <span class="date"
                                                          style="background: <?php echo $color; ?>"><?php echo !empty($block_rfid_bracelets_date) ? $block_rfid_bracelets_date : '-' ?></span>
                                                    <!--Sorry ! Your Account Subscription Last Date Is!-->
                                                    <!--<span class="date" style="background: <?php //echo $color;
                                                    ?>">-->
                                                    <!--</span>-->
                                                </div>
                                                <div class="text"><?php //echo $langs['exp_dec1'];
                                                    ?>
                                                </div>
                                                <div class="subtitle">
                                                    <?php echo $rfid_bracelets_message_unserialize[$language_knw]; ?>
                                                </div>
                                            <?php } ?>
                                            <!--<div class="btn-row">
                                                                <a href="JavaScript:void(0)" class="btn-red f-left m-lr-5">
                                                                        < ?php //echo //$langs['Renew my account'];?>
                                                                    Renew my account
                                                                </a>
                                                                <a href="JavaScript:void(0)" class="btn-gray f-left m-lr-5 close_div_alert">< ?php echo $langs['Ask it later'];?></a>
                                                                        < ?php if($_SESSION['Auth']['User']['role_id']==5){?>
                                                                <a href="< ?php echo $this->webroot;?>users/detail_about_version" class="btn-gray f-left m-lr-5"><?php echo $langs['Renew my subscription']; ?></a>            
                                                                       < ?php }else if($_SESSION['Auth']['User']['role_id']==8){?>
                                                                <a href="< ?php echo $this->webroot;?>clubs/club_account_current" class="btn-gray f-left m-lr-5"><?php echo $langs['Detail about your version']; ?></a>
                                                                       < ?php }?>
                                                            </div>-->
                                            <?php
                                            if ($smart_card_display_status == "Y") {
                                                
                                                $param = "smartcards";
                                                ?>
                                                <div class="title" style="font-size: 16px">
                                                    <!--<span class="cross f-right close_div_alert-account" style="cursor: pointer;">
                                                                                   <i class="fa fa-times-circle"></i>
                                                                        </span>-->
                                                    <?php echo $langs["Your Smartcard Card Subscription Last Date Is"]; ?>
                                                    <span class="date"
                                                          style="background: <?php echo $color; ?>"><?php echo !empty($block_smartcards_date) ? $block_smartcards_date : '-' ?></span>
                                                </div>
                                                <div class="text"><?php //echo $langs['exp_dec1'];
                                                    ?>
                                                </div>
                                                <div class="subtitle">
                                                    <?php echo $smartcards_message_unserialize[$language_knw]; ?>
                                                </div>
                                            <?php } ?>
                                            <div class="btn-row">
                                                <a href="<?php echo $this->webroot; ?>clubs/summary_renewal/<?php //echo $param;
                                                ?>" class="btn-red f-left m-lr-5">Renew my
                                                    account<?php //echo $langs['Detail about your version'];
                                                    ?></a>
                                                <!--<a href="JavaScript:void(0)" class="btn-red f-left m-lr-5"> <?php //echo //$langs['Renew my account'];
                                                ?>
                                                                Renew my account
                                                                </a>-->
                                                <a href="JavaScript:void(0)"
                                                   class="btn-gray f-left m-lr-5 close_div_alert-card"><?php echo $langs['Ask it later']; ?></a>
                                                
                                                <?php if ($_SESSION['Auth']['User']['role_id'] == 5) { ?>

                                                    <a href="<?php echo $this->webroot; ?>users/detail_about_version"
                                                       class="btn-gray f-left m-lr-5">
                                                        <?php echo $langs['Renew my subscription']; ?>
                                                    </a>
                                                
                                                <?php } else if ($_SESSION['Auth']['User']['role_id'] == 8) { ?>

                                                    <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/<?php echo $param; ?>"
                                                       class="btn-gray f-left m-lr-5"><?php echo $langs['Detail about your version']; ?></a>
                                                
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!---------end of card payment popup message------>
                                        <div class="clear mtop10"></div>
                                        <?php
                                        echo $this->element('message_display');
                                        ?>

                                        <div class="clear mtop10"></div>
                                        <!--card purchesed delivery pop up-->

                                        <div class="cuf-alert-popup-card-payment_card card_div 123"
                                             style="display:none;">
                                                    <span class="cuf-alert-close close_carddiv"
                                                          style="cursor: pointer;">
                                                        <i class="fa fa-times-circle"></i>
                                                    </span>
                                            <div class="text">
                                                <?php //echo $langs['exp_dec1'];
                                                ?>
                                            </div>
                                            <div class="subtitle subtitle-smartcard">
                                                
                                                <?php echo $langs["Dear_Customer"]; ?>
                                                <?php //echo $smartcards_message_unserialize[$language_knw];
                                                ?>

                                            </div>
                                            <?php
                                            $block_magic = 0;
                                            foreach ($card_paidstatus as $row) {
                                                
                                                $card_type = "";
                                                switch ($row["card_types"]["name"]) {
                                                    case "magnetic badges":
                                                        $card_type = "block_magneticbadge_date";
                                                        break;
                                                    case "RFID badges":
                                                        $card_type = "block_rfidbadge_date";
                                                        break;
                                                    case "RFID bracelets":
                                                        $card_type = "block_rfidbracelets_date";
                                                        break;
                                                    case "smartcards":
                                                        $card_type = "block_smartcards_date";
                                                        break;
                                                }
                                                if ($row["admin_setting_for_users"][$card_type] != "0000-00-00" && strtotime($row["admin_setting_for_users"][$card_type]) >= strtotime(date('Y-m-d'))) {
                                                    $block_magic = 1;
                                                }
                                                
                                                //echo "tt";  print_r($row);//exit;
                                                ?>
                                                <div class="title" style="font-size: 16px">
                                                    <?php echo $langs["Your"]; ?>
                                                    &nbsp;<?php echo $row["card_types"]["name"]; ?> <?php echo $langs["Card Subscription Last Date Is"]; ?>
                                                    <span class="date" style="background: <?php echo $color; ?>">
                                                                <?php echo isset($row["admin_setting_for_users"][$card_type]) && $row["admin_setting_for_users"][$card_type] != "0000-00-00" ? $row["admin_setting_for_users"][$card_type] : "-"; ?>
                                                            </span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!----------end card purchesed delivery pop up------------->
                                        <div class="clear mtop10"></div>
                                        <?php
                                        if (!empty($account_display_date)) {
                                            ?>
                                            <!--Alert popup box-->
                                            <div class="cuf-alert-popup-account" id="single_user_alert_box"
                                                 style="display: none; ">
                                                <div class="title" style="font-size: 16px;">
                                                            <span class="cuf-alert-close close_div_alert-account"
                                                                  style="cursor: pointer;">
                                                                <i class="fa fa-times-circle"></i>
                                                            </span>
                                                    <?php echo $langs["Sorry ! Your Account Subscription Expiring Date  Is"]; ?>
                                                    <!--Sorry ! Your Account Subscription Last Date Is! -->
                                                    <span class="date" style="background: <?php //echo $color;
                                                    ?>">
                                                                <?php
                                                                if ($_SESSION['Auth']['User']['role_id'] == 8) {
                                                                    echo !empty($account_display_date) ? $account_display_date : '-';
                                                                } else {
                                                                    echo !empty($_SESSION["Auth"]["User"]["subscription_end_date"]) ? $_SESSION["Auth"]["User"]["subscription_end_date"] : "";
                                                                }
                                                                ?>
                                                            </span>
                                                    <div style="margin-top: 25px">
                                                        <?php echo $langs["But you can continue to use Movesbook for what concern the social feature beside continue to"]; ?>
                                                        <br>
                                                        <?php echo $langs["monitoring your previous workouts"]; ?>

                                                    </div>
                                                    <div style="margin-top: 10px">
                                                        <?php echo $langs["Renew therefore now yours subscription and you will still enjoy of the unique features of Movesbook"]; ?>
                                                    </div>
                                                </div>
                                                <div class="text"><?php //echo $langs['exp_dec1'];
                                                    ?></div>
                                                <div class="subtitle">
                                                    <?php
                                                    if ($_SESSION['Auth']['User']['role_id'] == 8) {
                                                        
                                                        echo !empty($accont_message_unserialize[$language_knw]) ? $accont_message_unserialize[$language_knw] : "";
                                                    }
                                                    ?>
                                                </div>

                                            </div>
                                        <?php } ?>
                                        <!--Alert popup box-->
                                        <div class="clear mtop10" f></div>
                                        <!--Alert popup box-->
                                        <div class="cuf-alert-popup" style="display: none">
                                            <div class="title">
                                                <span class="cuf-alert-close close_div_alert"
                                                      style="cursor: pointer;"><i class="fa fa-times-circle"></i></span>
                                                <?php
                                                if ($Exp_status == "Expired") {
                                                    
                                                    echo $langs['Sorry ! Your subscription is'];
                                                    ?><?php
                                                    echo $Exp_status;
                                                } else {
                                                    echo $langs['Your subscription is'];
                                                    ?><?php
                                                    echo $Exp_status;
                                                }
                                                ?>!
                                                <span class="date"
                                                      style="background: <?php echo $color; ?>"><?php echo !empty($_SESSION['Auth']['User']['subscription_end_date']) ? $_SESSION['Auth']['User']['subscription_end_date'] : '-' ?></span>
                                            </div>
                                            <?php if ($Exp_status == "Expired") { ?>
                                                <div class="text">
                                                    <?php echo $langs['exp_dec1']; ?>
                                                </div>
                                                <div class="subtitle">
                                                    <?php echo $langs['exp_dec2']; ?>
                                                </div>
                                            <?php } ?>


                                            <div class="btn-row">
                                                <?php if ($Exp_status == "Expired") { ?>

                                                    <!--  <a href="<?php //echo $this->webroot;
                                                    ?>clubs/summary_renewal/<?php //echo $param;
                                                    ?>" class="btn-red f-left m-lr-5">Renew my account</a> -->

                                                    <a href="<?php echo $this->webroot; ?>clubs/summary_renewal/<?php //echo $param;
                                                    ?>" class="btn-red f-left m-lr-5">Upgrade my account</a>
                                                    <a href="JavaScript:void(0)"
                                                       class="btn-gray f-left m-lr-5 close_div_alert-card"><?php echo $langs['Ask it later']; ?></a>
                                                
                                                <?php } else { ?>
                                                    <a href="<?php echo $this->webroot; ?>blogs/club_card_purchase_list/<?php echo $param; ?>"
                                                       class="btn-gray f-left m-lr-5"><?php echo $langs['Detail about your version']; ?></a>
                                                <?php } ?>

                                            </div>
                                        </div>
                                        <!--Alert popup box-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--==============Popup section end===============-->
                </div>
            </div>
        </div>
        <!--welcome bar end -->
    </div>
    <!--welcome bar row end -->
    <!--profile menu bar start-->
    <?php
    echo $this->element('single_user/middle_menu_&_container');
    ?>
    <!--profile menu bar end-->
    <?php
    }
    } else {
        //  echo $this->fetch('content');
    }
    ?>

    <!--welcome bar
                <div id="welcome_bar">
                    <div class="left_new"><a href="#"><img src="images/center_nav.png" align="absmiddle"></a></div>
                    <div class="left_new"><a href="#"><img src="images/back_b.png"></a></div>
                    <div class="right_new"><a href="#"><img src="images/setting_b.png"></a>
                            <div class="activity_setting" style="display:block;">
                                <div class="title">Activity settings & targets</div>
                                <div class="as_link">
                                    <ul>
                                    <li><a href="#">- Workouts and sessions</a></li>
                                    <li><a href="#">- Quick Weekly plan</a></li>
                                    <li><a href="#">- Weight and body targets</a></li>
                                    <li><a href="#">- Diet Targets</a></li>
                                    <li><a href="#">- Workouts and sessions</a></li>
                                    <li><a href="#">- Objectives</a></li>
                                    <li><a href="#">- My followers</a></li>
                                    <li class="last"><a href="#">- Go to my general setting page</a></li>
                                    </ul>
                                </div>
                            </div>
                   </div>
                   <div class="right_new"><a href="#"><img src="images/my_posts.png"></a></div>
                   <div class="right_new"><a href="#"><img src="images/new_post.png"></a></div>
                   <div class="clear"></div>
                   </div>-->
    <!--welcome bar end -->
    <!--profile menu bar
                <div id="profile_menu_bar">
                <div class="new_pfl_menu">
                         <a href="#" class="active" ><img src="images/workout-16.png" align="absmiddle">Workouts</a>
                         <a href="#"><img src="images/events-16.png" align="absmiddle">Events</a>
                         <a href="#"><img src="images/thoughts-16.png" align="absmiddle">Thoughts</a>
                         <a href="#"><img src="images/photo-16.png" align="absmiddle">Photo</a>
                         <a href="#"><img src="images/video-16.png" align="absmiddle">Video</a>
                         <a href="#"><img src="images/music-16.png" align="absmiddle">Music</a>
                         <a href="#"><img src="images/location-16.png" align="absmiddle">Location</a>
                </div>
                <div class="down"><a href="#"><img src="images/down_c.jpg" width="24" height="18"></a></div>
                <div class="clear"></div>
                </div><!--profile menu bar end -->
    <!--
                <div class="clear middle_block_pad"></div>
                <!--Account content-->
    <!--
                <div class="pm-content" id="cont-1-1">
                     <form>
                <!--form block-->
    <!--
                <div class="clear top_pad"></div>
                <!--form block end-->
    <!--
                 </form>
                </div><!--Account content end-->
</div>

<!--Column middle end-->
<!--Column right-->
    <div id="col_right">

        <!--groups start-->
        <?php
        echo $this->element('single_user/right_side_nextevent');
        ?>
        <!--groups end-->
        <div class="clear" style="margin-top:1px;"></div>
        <div class="right-col-scroll">
            <!--groups start-->
            <?php
            if (!empty($keyVal)) {
                echo $this->element('single_user/right_side_friend_new');
            } else {
                echo $this->element('single_user/right_side_friend_group');
            }
            ?>
            <!--groups end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--button for your website start-->
            <?php echo $this->element('single_user/right_side_button_website'); ?>
            <!--button for your website end-->
            <!--button for your website end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--share this page start-->
            <?php echo $this->element('single_user/right_side_share'); ?>
            <!--share this page end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Newest members start-->
            <?php echo $this->element('single_user/right_side_newest_member'); ?>
            <!--Newest members end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Members last logged in start-->
            <?php echo $this->element('single_user/right_side_member_last_login'); ?>
            <!--Members last logged in end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Recommended pages start-->
            <?php echo $this->element('single_user/right_side_recommended_pages'); ?>
            <!--Recommended pages end-->
            <div class="clear" style="margin-top:1px;"></div>
        </div>
        <!--Find new friends start-->
        <?php //echo $this->element('single_user/right_side_find_friends'); 
        ?>
        <!--Find new friends end-->
    </div>
<!--Column right end-->
    <div class="clear"></div>
    </div>

    <!--Content wrap-->
<?php
} //end if part of search people
else {
    ?>
    <!--Content wrap-->
    <div id="content_wrap">
        <!--Column left-->
        <div id="col_left">
            <!--profile block-->
            <?php echo $this->element('search_people/profile'); ?>
            <!--profile block end-->
            <!--profile category-->
            <?php echo $this->element('search_people/profile_category'); ?>
            <!--profile category end-->
            <!--profile menu-->
            <?php
            if (in_array(4, $privacy_menus)) {
                echo $this->element('search_people/profile_menus');
            }
            ?>
            <!--profile menu end-->
            <!--profile links-->
            <?php echo $this->element('search_people/profile_links'); ?>
            <!--profile links end-->
            <!--communities-->
            <?php
            if ((in_array(19, $privacy_menus)) || (in_array(20, $privacy_menus)) || (in_array(21, $privacy_menus))) {
                echo $this->element('search_people/community_block');
            }
            ?>
            <!--communities end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--friends block-->
            <?php
            if (in_array(22, $privacy_menus)) {
                echo $this->element('search_people/friends_block');
            }
            ?>
            <!--friends block-->
        </div>
        <!--Column left end-->
        <!--Column middle-->
        <div id="col_middle">
            <!--profile menu bar start-->
            <?php echo $this->element('search_people/middle_menu_&_container'); ?>
            <!--profile menu bar end-->
        </div>
        <!--Column middle end-->
        <!--Column right-->
        <div id="col_right">
            <!--groups start-->
            <?php echo $this->element('single_user/right_side_friend_group'); ?>
            <!--groups end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--button for your website start-->
            <?php echo $this->element('single_user/right_side_button_website'); ?>
            <!--button for your website end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--share this page start-->
            <?php echo $this->element('single_user/right_side_share'); ?>
            <!--share this page end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Newest members start-->
            <?php echo $this->element('single_user/right_side_newest_member'); ?>
            <!--Newest members end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Members last logged in start-->
            <?php echo $this->element('single_user/right_side_member_last_login'); ?>
            <!--Members last logged in end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Recommended pages start-->
            <?php echo $this->element('single_user/right_side_recommended_pages'); ?>
            <!--Recommended pages end-->
            <div class="clear" style="margin-top:1px;"></div>
            <!--Find new friends start-->
            <?php echo $this->element('single_user/right_side_find_friends'); ?>
            <!--Find new friends end-->
        </div>
        <!--Column right end-->
    </div>
    <!--Content wrap-->
<?php } //end else part of search people 
?>
<div class="clear"></div>
<div class="clear" style="padding-top:10px;"></div>
</div>
<!--End of content-pad-->
</div>
<!--main content end-->
</div>
<div class="clear"></div>
<!--End of main-->
<!-- Footer Start-->
<?php
echo $this->element('openSetPage/openSetPage');
?>
<?php
echo $this->element('common_elements/footer');
?>
<!--End of main_footer-->

<div id="popup" style="display: none;position: fixed"></div>
<div class="custom_overlay">&nbsp;</div>
<?php echo $this->Html->image('ajax-loader(1).gif', array('class' => 'ajax_loading_image')); ?>
<script>
    function getBugAndErrorForm() {
        $.ajax({
            beforeSend: function () {
                $(".custom_overlay").show();
                $(".ajax_loading_image").show();
            },
            url: '<?php echo $this->Html->Url(array('controller' => 'admins', 'action' => 'error_and_bug_reports')); ?>',
            success: function (data) {

                $(".ajax_loading_image").hide();
                $("#popup").html(data);
                $("#popup").css({
                    "display": "block",
                    "left": "28%",
                    "top": "20%",
                    "z-index": "999999"
                });
            }
        });
    }

    function closeBugForm() {

        $(".custom_overlay").hide();
        $(".ajax_loading_image").hide();
        $("#popup").html("");
        $("#popup").css({
            "display": "none"
        });
    }
</script>
<script>
    $(document).ready(function () {
        $('#basic').popup();
    });
</script>
<!-- Basic -->
<?php
// echo $this->element('sql_dump');
?>

<?= $this->Html->script('ca2');?>
<?= $this->fetch('footer_scripts');?>
</body>

</html>
<script>
    $(document).mouseup(function (e) {

        // Check if the click is outside the popup
        if ($(e.target).parents("#privacylinksID").length == 0 && !$(e.target).is("#privacylinksID")) {
            // Hide the popup
            $("#privacylinksID").slideUp("slow");
        }

        if ($(e.target).parents("#post_drop").length == 0 && !$(e.target).is("#post_drop")) {

            // Hide the popup
            $("#post_drop").slideUp("slow");
        }

        if ($(e.target).parents("#post_droplist").length == 0 && !$(e.target).is("#post_droplist")) {
            // Hide the popup
            $("#post_droplist").slideUp("slow");
        }
    });
</script>
<script type="text/javascript">
    function closeErrorPopups() {
        $("#errors-popup").hide();
    }

    $(window).load(function () {

        $("#flexiselDemo1").flexisel();
        $("#flexiselDemo2").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });

    });

    var togglemtoolbarstatus = false;

    function togglemaintoolbar(id) {
        switch (togglemtoolbarstatus) {
            case true:
                $("#" + id).slideToggle(1000);
                togglemtoolbarstatus = false;
                break;
            case false:
                $("#" + id).slideToggle(1000);
                togglemtoolbarstatus = true;
                break;
            default:
                break;
        }
    }
</script>
<script>
    <?php if (count($card_paidstatus) > 0) { ?>
    $(document).ready(function () {
        if (!readCookie('message_intro')) {
            $('.message_intro').show();
        }
        $('.close_message_intro').click(function () {
            $('.message_intro').hide();
            createCookie('message_intro', true, 1);
        });


        if (!readCookie('panel_control')) {
            $('.panel_control').show();
        }
        $('.close_panel_control').click(function () {
            $('.panel_control').hide();
            createCookie('panel_control', true, 1);
        });
        // alert('<?php echo $block_magic; ?>');
        <?php if ($block_magic == 1) { ?>

        if (!readCookie('card_div')) {
            $("#hidewhenallpopup").show();
            $('.card_div').show();
        }
        <?php } ?>

        $('.close_carddiv').click(function () {
            $("#hidewhenallpopup").hide();
            $('.card_div').hide();
            createCookie('card_div', true, 1);
        });
    });
    <?php } ?>
</script>
<?php
$date = date('Y-m-d');
$account_current_date = $_SESSION["Auth"]["User"]["subscription_end_date"];
if ($account_current_date <= $date) {
    ?>
    <script>
        $(document).ready(function () {
            $('.close_div_alert,.close_div_alert-account').click(function () {
                $('#single_user_alert_box,.cuf-alert-popup').hide();
                createCookie('accounthide', true, 1);
            });
            // If the 'hide cookie is not set we show the message
            if (!readCookie('accounthide')) {
                // console.log(readCookie('hide'));
                $('#single_user_alert_box,cuf-alert-popup').show();
            }
            // Add the event that closes the popup and sets the cookie that tells us to
            // not show it again until one day has passed.
        });
    </script>
<?php } ?>
<script>
    $(document).ready(function () {

        $('.close_div_alert').click(function () {
            $('#single_user_alert_box, .cuf-alert-popup').hide();
            createCookie('accounthide', true, 1);
        });
    });

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

    $("#setting_btn").on("click", function (e) {
        e.preventDefault();
        var status = $(this).data('status');
        if (status == false) {
            $(this).data('status', true);
            $("#welcome_bar_box_hide_show").slideUp();
        } else {
            $(this).data('status', false);
            $("#welcome_bar_box_hide_show").slideDown();
        }
    });
    //show-user-option-bx"
    $("#action-user-option-setting").on("click", function (e) {
        e.preventDefault();

        var action = $(this).data('action');
        if (action == true) {
            $("#show-user-option-bx").show();
            $(this).data('action', false);
        } else {
            $("#show-user-option-bx").hide();
            $(this).data('action', true);
        }

    });
</script>