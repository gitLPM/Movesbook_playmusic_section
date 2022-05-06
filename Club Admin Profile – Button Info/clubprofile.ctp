<div id="profile_wrap">
    <div class="mc_flike">
        <?php echo $this->Html->link($this->Html->image('f_like.png'), '#', array('escape' => false)); ?>
    </div>
    <div class=" clear"></div>
    <div class="profile_title">        
        <?php echo $this->Html->image('profile_icon.png'); ?>
        <!-- ZST Hide Start 
        <b><?php //echo ucwords($_SESSION['Auth']['User']['username']); ?><?php //echo $langs["Club"]; ?></b>
        ZST Hide End!-->

         <!-- ZST Add line Start !-->
        <b><?php echo ucwords($_SESSION['Auth']['User']['firstname']); ?>
        <?php echo ucwords($_SESSION['Auth']['User']['lastname']); ?></b>
         <!-- ZST Add line End !-->

    </div>
    <div class="mtop5">
        <div class="profile_img">
            <div class="profile_img_thumb">
              
         <!-- ZST Replace Code From !-->
            <?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '63', 'height' => '64')), "#", array('escape' => false)); ?>

        <!-- ZST Replace code End !-->

            <!-- ZST Hide From !-->
                <?php /*if ($_SESSION['Auth']['User']['logo'] != '') { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/' . $_SESSION['Auth']['User']['logo'], array('width' => '63px', 'height' => '64px')), "#", array('escape' => false)); ?>
                <?php } else { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/no_image.jpg', array('width' => '63px', 'height' => '64px')), "#", array('escape' => false)); ?>
                <?php } */?>
            <!-- ZST Hide End !-->

            </div>
            <div>
                <?php //echo $this->Html->link('Change Photo','#',array('class'=>'mc_changephoto')); ?>
                <a id="iframe" rel="" class="mc_changephoto"
                   href="<?php echo $this->webroot; ?>users/logo_pic/<?php echo $_SESSION['Auth']['User']['id']; ?>"
                   title="">Change Logo</a>
            </div>
        </div>
     
        <!-- ZST Change Start !-->
        <div class="profile_list">
            <span class="pl_title"><?php echo $langs["Club Type"]; ?></span>
            <p id="usertype_show"></p>
            <?php //echo $clubInfo[0]['Club']['usertype']; ?><br>           
            <span class="pl_title">Country</span><br>
            <span id="clubusercountry" style="line-height:0px"></span>
            <?php //echo $clubInfo[0]['Club']['CountryName']; ?><br>
            <span class="pl_title">Locality</span><br>
            <?php echo $clubInfo[0]['Club']['StateName']; ?><br>
        </div>
    </div>
    <div class="clear"></div>
</div>
 <!-- ZST Change End !-->

<!-- ZST Create Script Start !-->
<script>   
    setTimeout(function(){
        $uu = $("#ClubUsertypeId option:selected").text();
        $("#usertype_show").html($uu);

        $uu = $("#UserCountryId option:selected").text();
        $("#clubusercountry").html($uu);
    }, 1000); 
</script>

<!-- ZST Create Script End !-->