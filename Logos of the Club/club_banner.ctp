<!--banner section start-->
<div class="sprtbook_banner">
    <div id="timelineBackground">
        <?php
        $emptyBackground = (empty($bannerInfo['Banner']['profile_background']));
        $bannerImage = ($emptyBackground ? 'user-experience.jpg' : "{$this->webroot}img/banner/{$bannerInfo['Banner']['profile_background']}");
        $customStyle = ($emptyBackground ? '' : "margin-top: {$bannerInfo['Banner']['profile_background_position']}");

        $emptyBackground = (empty($bannerInfo['Banner']['profile_background']));
        $bannerImage = ($emptyBackground ? 'user-experience.jpg' : "{$this->webroot}img/banner/{$bannerInfo['Banner']['profile_background']}");
        $position = $bannerInfo['Banner']['profile_background_position'];
        $customStyle = ($emptyBackground ? '' : "margin-top: {$bannerInfo['Banner']['profile_background_position']}");
        $customClass = ($emptyBackground ? '' : ($position == 'center' ? 'abs' : ''));
        $haveHtml = $this->App->haveHtml($bannerInfo['Banner']['profile_background']);
        $isJson = (!empty($bannerInfo['Banner']['file_type']) && $bannerInfo['Banner']['file_type'] == 'json');

        if (!$emptyBackground && !empty($bannerInfo['Banner']['file_type'])):
            switch (explode('/', $bannerInfo['Banner']['file_type'])[0]):
                case 'image':
                    echo $this->Html->image($bannerImage, array('class' => 'bgImage ' .$customClass, 'style' => $customStyle));
                    break;
                case 'video':
                    echo "<video autoplay muted loop><source src='" . $bannerImage . "' type='" . $bannerInfo['Banner']['file_type'] . "' /></video>";
                    break;
                case 'json':
                    echo $this->element(
                        'club/banner_slider', [
                        'data' => json_decode($bannerInfo['Banner']['profile_background'])]);
                    break;
                default:
                    echo $this->Html->image($bannerImage, array('class' => 'bgImage ' .$customClass, 'style' => $customStyle));
                    break;
            endswitch;
        else:
            if ($this->App->haveHtml($bannerInfo['Banner']['profile_background'])):
                echo $bannerInfo['Banner']['profile_background'];
            else:
                echo $this->Html->image($bannerImage, array('class' => 'bgImage', 'style' => $customStyle));
            endif;
        endif;
        ?>
    </div>
    <?= $this->element(
        'club/upload_banner_popup', [
        'open_button_class' => '.change_banner_open',
        'currentImage' => (($haveHtml || $isJson) ? $bannerInfo['Banner']['profile_background'] : $bannerImage),
        'isHtml' => $haveHtml,
        'isJson' => $isJson,
        'currentType' => $bannerInfo['Banner']['file_type'],
        'allImages' => $imagesForBannerSequence,
        'position' => $bannerInfo['Banner']['profile_background_position']
    ]); ?>

    <div class="upload_newuserbanner" style="background:url('<?php echo $this->webroot; ?>img/timeline_shade.png');"
         id="timelineShade">
        <a href="javascript:void(0);" class="change_banner_open"><i class="fa fa-camera"></i></a>
        <form id="bgimgfrm" method="post" enctype="multipart/form-data"
              action="<?php echo $this->webroot; ?>clubs/image_upload_ajax/8">
            <input type="file" name="bannerimg" id="bannerimg" style="display:none"
                   original-title="Change Cover Picture">
        </form>
    </div>

    <div class="newimage_block">

    <!-- ZST Replace Code From !-->
    <?php if ($_SESSION['Auth']['User']['logo'] != '') { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/' . $_SESSION['Auth']['User']['logo'], array('width' => '170', 'height' => '127')), "#", array('escape' => false)); ?>
                <?php } else { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/no_image.jpg', array('width' => '170', 'height' => '127')), "#", array('escape' => false)); ?>
                <?php } ?>
<!-- ZST Replace Code End !-->

<!-- ZST Hide Code From !-->

        <?php
       // $imageLink = ($_SESSION['Auth']['User']['logo'] != '' ? $_SESSION['Auth']['User']['logo'] : 'no_image.jpg');
        //$this->Html->link($this->Html->image('logo/' . $imageLink, array('width' => '170', 'height' => '127')), "#", array('escape' => false));
        ?>
<!-- ZST Hide Code End !-->

    </div>
    <div class="upload_newimage">
        <a id="iframe" rel="" style=" color: #FFFFFF;font-size: 9px;"
           href="<?= $this->webroot; ?>users/profile_pic/<?= $_SESSION['Auth']['User']['id'] . "/" . "club"; ?>"
           title=""><i class="fa fa-camera"></i></a>
    </div>
    <div class="upgrade_info">
        <a target="_blank"
           href="<?= $this->webroot; ?>news/versionnews_list_user/club/<?= base64_encode($this->Session->read('Auth.User.subscription_setting_id')); ?>"><?= $langs['Upgrade Informations']; ?></a>
        <?= $this->Html->link($langs['Logger of activities'], 'JavaScript:void(0)'); ?>
    </div>
    <div class="username_banner">
        <?= ucfirst($this->Session->read('Auth.User.official_clubname')) . " Club"; ?>
    </div>
</div>

<!--banner section end-->

<?php $this->start('footer_scripts'); ?>
<?php echo $this->Html->script('jquery-ui.min.js'); ?>
<?php echo $this->Html->script('jquery.wallform.js'); ?>
<script type="text/javascript">
    function selectpic() {
        $("#bannerimg").click();
    }

    $(document).ready(function () {
        $('body').on('change', '#bannerimg', function () {
            $("#bgimgfrm").ajaxForm({
                target: '#timelineBackground',
                beforeSubmit: function () {
                    $("#timelineShade").hide();
                },
                success: function () {
                    $("#timelineShade").hide();
                    $("#bgimgfrm").hide();
                },
                error: function () {

                }
            }).submit();
        });

        $("body").on('click', '.bgSave', function () {
            var id = $(this).attr("id");
            var p = $("#timelineBGload").attr("style");
            var Y = p.split("top:");
            var Z = Y[1].split(";");
            var dataString = 'roleid=8&position=' + Z[0];
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
    })
</script>
<?php $this->end(); ?>