<?php
//print_r($this->request->data['Rostersettings1']);echo'<br/>==============<br/><br/>';
//print_r($this->request->data['public_profile_option_settings1']);//exit;  
// print_r($this->Session->read('Auth.User'));

echo $this->element('club/clubinfotab'); ?>
<?php echo $this->Form->create(); ?>
<div class="pm-content" id="cont-1-1">
    <div class="set_password_row">
        <div class="sp_col1">
            <!--            <img src="images/users.jpg">-->
            <?php echo $this->Html->image('users.jpg'); ?>
        </div>
        <div class="sp_col2">
            <?php echo $langs["Please give us some information about your new Club After you have created your Club you can begin inviting other users to become members.."]; ?>
        </div>
        <div class="sp_col3">
            <?php
            echo $this->Html->link('Set Password', array('controller' => 'clubs', 'action' => 'set_password', 'escape' => false), array('class' => 'gray_tab'));
            ?>
            <!--      <a class="gray_tab" href="#">Set Password</a>-->

        </div>
        <div class="clear"></div>
    </div>


    <div class="sp_input_block">
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Name"]; ?> :</div>
            <div class="spfield_input1">
                <!--                <input type="text" value="" >-->
                <?php echo $this->Form->input('name', array('name' => 'data[User][username]', 'readonly' => 'readonly', 'value' => $this->Session->read('Auth.User.username'), 'type' => 'text', 'label' => false, 'div' => false)); ?>
                <?php //echo $this->Form->input('sport_id',array('type'=>'text','label'=>false,'div'=>false,'value'=>$this->request->data['clubs']['firstname'])); ?>
                <!--                <div class="validation" style="display: none;">Please enter name</div>-->
            </div>
        </div>
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Category"]; ?> :</div>
            <div class=" spfield_select1">
                <div class="dropbox ">
                    <?php
                    
                    echo $this->Form->input('type_id', array(
                        'name' => 'data[Club][clubtype_id]',
                        'type' => 'select',
                        'empty' => 'Select type',
                        'options' => $clubtypes,
                        'div' => false,
                        'label' => false,
                        'id' => 'clubtypeID',
                        'selected' => $this->Session->read('Auth.Club.clubtype_id')
                    ));
                    ?>
                </div>
                <div class="validation" id='clubtypeIDval'
                     style="display: none;"><?php echo $langs["Please select type"]; ?> </div>


            </div>
        </div>
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Country"]; ?>:</div>
            <div class="spfield_select1">
                <div class="dropbox">
                    <?php
                    
                    echo $this->Form->input('country_id', array(
                        'name' => 'data[User][country_id]',
                        'type' => 'select',
                        'empty' => 'Select country',
                        'options' => $countries,
                        'div' => false,
                        'label' => false,
                        'id' => 'countryID',
                        'onchange' => 'countryChng(this.value)',
                        'selected' => $this->Session->read('Auth.User.country_id')
                    ));
                    
                    ?>
                </div>
                <div class="validation" id='countryIDval'
                     style="display: none;"><?php echo $langs["Please select country"]; ?></div>


            </div>
            <div class="spfield_region"><?php echo $langs["Region"]; ?> </div>
            <div class="spfield_select2">
                <div class="dropbox" id="selectStateID">
                    <!--                    <select><option>Select state</option></select>-->
                    <?php
                    echo $this->Form->input('state_id', array(
                        'name' => 'data[User][state_id]',
                        'type' => 'select',
                        'empty' => 'Select state',
                        'options' => $states,
                        'div' => false,
                        'label' => false,
                        'id' => 'stateID',
                        'selected' => $this->Session->read('Auth.User.state_id')
                    ));
                    ?>

                </div>
                <?php echo $this->Html->image('loader.gif', array('class' => 'state_loading', 'style' => 'display:none; position: absolute;right: 390px;top: 649px;height: 27.4px;')); ?>
                <div class="validation" id='stateIDval'
                     style="display: none;"><?php echo $langs["Please select state"]; ?></div>
            </div>
        </div>
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Location"]; ?>:11</div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('location', array('name' => 'data[User][location]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.location'))); ?>
                <!--                 <div class="validation"  style="display: none;">Please enter location</div>     -->
            </div>
            <div class="spfield_region"><?php echo $langs["Zip Code"]; ?> </div>
            <div class="spfield_input2">
                <?php echo $this->Form->input('zip', array('name' => 'data[User][zipcode]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.User.zipcode'))); ?>
                <!--                <div class="validation" style="display: none;">Please enter zipcode</div>-->
            </div>
        </div>
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Address"]; ?>:</div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('address1', array('id' => 'addrID', 'name' => 'data[Club][club_address]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_address'))); ?>
                <div class="validation" id='addrIDval'
                     style="display: none;"><?php echo $langs["Please enter address"]; ?></div>
            </div>
        </div>

        <!-- ZST Add New Row  Start!-->
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Phone"]; ?>:</div>
            <div class="spfield_input1">          
                          
           <div class="bg-primary" style="max-width:120px;background-color:red;display:inline-block">
           
           <?php echo $this->Form->input('User.mobile_number', array('maxlength' => 10, 'label' => false, 'div' => false, 'placeholder' => 'Phone no', 'value' => $this->Session->read('Auth.User.mobile_number'))); ?>
                                <div class="validation" id="phone1"
                                     style="display:none"><?php echo $langs['Please enter phone no.']; ?></div>
                                <div class="validation" id="phonenum"
                                     style="display:none"><?php echo $langs['Please enter numeric character.']; ?></div>
        </div>
           
           <div class="bg-secondary" style="max-width:110px;display:inline-block">
           <?php echo $this->Form->input('User.mobile_number', array('maxlength' => 10, 'label' => false, 'div' => false, 'placeholder' => 'Phone no', 'value' => $this->Session->read('Auth.User.mobile_number'))); ?>
                                <div class="validation" id="phone1"
                                     style="display:none"><?php echo $langs['Please enter phone no.']; ?></div>
                                <div class="validation" id="phonenum"
                                     style="display:none"><?php echo $langs['Please enter numeric character.']; ?></div>   
           
        </div>
                             
                </div>        
        </div>
        <!-- ZST Add New Row  End!-->

        <!-- ZST Add New Row Email Start !-->     
        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Email"]; ?>:</div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('email', array('id' => 'emailid', 'name' => 'data[Club][club_email]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_address'))); ?>
                <div class="validation" id='addrIDval'
                     style="display: none;"><?php echo $langs["Please enter email address"]; ?></div>
            </div>
        </div>
        <!-- ZST Add New Row Email End !--->

        <div class="spfield_row">
            <div class="spfield_title"><?php echo $langs["Description"]; ?>:</div>
            <div class="spfield_textarea1">
                <?php echo $this->Form->input('description', array('id' => 'descID', 'name' => 'data[Club][club_info]', 'type' => 'textarea', 'class' => '', 'div' => false, 'label' => false, 'value' => $this->Session->read('Auth.Club.club_info'))); ?>
                <div class="validation" id='descIDval'
                     style="display: none;"><?php echo $langs["Please enter description"]; ?></div>
            </div>
        </div>

        <div class="" style="margin-left:20px">
          <!-- ZST Add New Row Facebook Start !-->     
          <div class="spfield_row">      
          <div class="spfield_title" style="max-width:25px;"><i class="fa fa-facebook-square" style="font-size:28px;color:gray"></i> </div>   
            <div class="spfield_title" style="text-align:left;">            
            <?php echo $langs["Facebook"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'facebook', 'name' => 'data[Club][club_facebook]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_facebook'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row Facebook End !--->


          <!-- ZST Add New Row twitter Start !-->     
          <div class="spfield_row">    

            
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-twitter" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Twitter"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'twitter', 'name' => 'data[Club][club_twitter]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_twitter'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row twitter End !--->


         <!-- ZST Add New Row twitter Start !-->     
         <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-whatsapp" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Whatsapp"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'whatsapp', 'name' => 'data[Club][club_whatsapp]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_whatsapp'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row twitter End !--->


         <!-- ZST Add New Row instagram Start !-->     
         <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-instagram" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Instagram"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'instagram', 'name' => 'data[Club][club_instagram]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_instagram'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row instagram End !--->


           <!-- ZST Add New Row youtube Start !-->     
           <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-youtube-play" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["You Tube"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'youtube', 'name' => 'data[Club][club_youtube]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_youtube'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row youtube End !--->


            <!-- ZST Add New Row linkedin Start !-->     
            <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-linkedin-square" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Linkedin"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'linkedin', 'name' => 'data[Club][club_linkedin]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_linkedin'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row linkedin End !--->


             <!-- ZST Add New Row blog site Start !-->     
             <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-bookmark-o fa-rotate-180" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Blog site"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'blog site', 'name' => 'data[Club][club_blog]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.club_blog'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row blog site End !--->

           <!-- ZST Add New Row google map Start !-->     
           <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-arrows" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Google map"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'blog site', 'name' => 'data[Club][club_google map]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.google_map'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row google map End !--->

         <!-- ZST Add New Row share page Start !-->     
         <div class="spfield_row">    
              <div class="spfield_title" style="max-width:25px"><i class="fa fa-share-alt" style="font-size:28px;color:gray"></i></div>     
            <div class="spfield_title" style="text-align:left">            
            <?php echo $langs["Share"]; ?></div>
            <div class="spfield_input1">
                <?php echo $this->Form->input('text', array('id' => 'share page', 'name' => 'data[Club][club_share page]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.share page'))); ?>                
            </div>
        </div>
        <!-- ZST Add New Row share page End !--->
                </div>






        <div class="clear"></div>
    </div>
    <div class="groupsport">
        <div class="gs-heading"><?php echo $langs["Group Sport"]; ?><br>
            <span class="gs-tagline"><?php echo $langs["Note"]; ?>*: <?php echo $langs["For select Main sport click on star"]; ?></span>
        </div>
        <?php
        //print_r($sports);exit;
        foreach ($sports as $key => $value) {
            //print_r($value['sports']['image']);exit;
            $n = explode(',', $this->Session->read('Auth.Club.sports'));
            //if(in_array($value['sports']['id'],$this->request->data['selected_sport'] )){
            
            $MainchkclsSel = '';
            $chkclsSel = '';
            
            if ($value['sports']['id'] == $this->Session->read('Auth.User.sport_id')) {
                $MainchkclsSel = 'redchecked';
                $starSelCls = "fa-star";
                $optAns = "checked='checked'";
            } else {
                $optAns = '';
                $starSelCls = "fa-star-o";
                $MainchkclsSel = '';
                if (in_array($value['sports']['id'], $n)) {
                    $chkclsSel = 'checked';
                } else {
                    $chkclsSel = '';
                }
            }
            ?>
            <!--        <div class="gsport_box checked">-->
            <div class="gsport_box <?php echo $chkclsSel; ?> <?php echo $MainchkclsSel; ?>"
                 onclick="chkimgfun(<?php echo $value['sports']['id']; ?>);"
                 id="spchkimgID<?php echo $value['sports']['id']; ?>">
                <div class="sportbx">
                    <?php
                    if ($value['sports']['image'] != '') {
                        echo $this->Html->image($value['sports']['image']);
                    } ?>
                    <div class="stardiv" onclick="chkMainSprt(<?php echo $value['sports']['id']; ?>)"><i
                                id="starNewId<?php echo $value['sports']['id']; ?>"
                                class="newClrStar fa <?php echo $starSelCls; ?>"></i></div>
                </div>
                <!--            <div>< ?php echo $value['sports']['id'].'- '.ucfirst($value['sports']['name']); ?></div>-->
                <div class="name"><?php echo ucfirst($value['sports']['name']); ?></div>
                <div style=" display: none; ">
                    <input type="checkbox" <?php echo $chkclsSel; ?> name="chk12[]"
                           value="<?php echo $value['sports']['id']; ?>"
                           id="chkbxID<?php echo $value['sports']['id']; ?>"/>

                    <input <?php echo $optAns; ?> type="radio" name="MainSport"
                                                  id="MainSportID<?php echo $value['sports']['id']; ?>"
                                                  value="<?php echo $value['sports']['id']; ?>"/>
                </div>

            </div>
        <?php }
        ?>
        <div class="gsport_box">
            <div class="sportbx">
                <!--                <div class="stardiv"><i class="fa fa-star-o"></i></div>-->
            </div>
            <div class="name">Others</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear bb_gray1">&nbsp;</div>
    <div class="address_row">
        <!--        <div class="address_left">
                    <div class="">Address</div>
                    <div class="">
                      < ?php   echo $this->Form->input('address2',array('type'=>'textarea','class'=>'','div'=>false,'id'=>'','label'=>false)); ?>
                         <div class="validation" style="display: none;">Please enter address</div>
        
                    </div>
                </div>-->
        <div class="address_right">
            <div class=""><?php echo $langs["Public profile web address"]; ?></div>
            <div class="address_spf"><?php echo $langs["Please use letter, numbers and hyphens ( - ) only"]; ?></div>
            <div class="">
                <?php //echo $this->Form->input('web_address',array('readonly'=>'readonly','name'=>'data[User][public_view_address]','type'=>'text','label'=>false,'div'=>false,'value'=>$this->Session->read('Auth.User.public_view_address'))); ?>
                <?php
                
                $publicAddr = FULL_BASE_URL . '/' . MAIN_FOLDER_NAME . '/searchresults/search/' . $this->Session->read('Auth.User.username');
                //exit;
                echo $this->Form->input('', array('readonly' => 'readonly', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $publicAddr)); ?>
            </div>
        </div>
        <div class="clear"></div>
        <div class="roster">
            <b><?php echo $langs["Roster Options"]; ?>:</b><br>
            <?php
            if ($this->request->data['Rostersettings1']['Show_phone_numbers_of_members'] == '1') {
                echo $this->Form->input('Show_phone_numbers_of_members', array('checked' => 'checked', 'name' => 'data[Rostersettings][Show_phone_numbers_of_members]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Show_phone_numbers_of_members', array('name' => 'data[Rostersettings][Show_phone_numbers_of_members]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?><?php echo $langs["Show phone numbers of members"]; ?>
            <br>
            <?php
            if ($this->request->data['Rostersettings1']['Show_email_addresses_of_members'] == '1') {
                echo $this->Form->input('Show_email_addresses_of_members', array('checked' => 'checked', 'name' => 'data[Rostersettings][Show_email_addresses_of_members]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Show_email_addresses_of_members', array('name' => 'data[Rostersettings][Show_email_addresses_of_members]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?> <?php echo $langs["Show email addresses of members"]; ?> <br>
            <b><?php echo $langs["Public Profile Options"]; ?>:</b><br>
            <?php
            if ($this->request->data['public_profile_option_settings1']['Public_profile_available'] == '1') {
                echo $this->Form->input('Public_profile_available', array('checked' => 'checked', 'name' => 'data[Publicsettings][Public_profile_available]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Public_profile_available', array('name' => 'data[Publicsettings][Public_profile_available]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?> <?php echo $langs["Public profile available"]; ?> <br>
            <?php
            if ($this->request->data['public_profile_option_settings1']['Show_group_rosters'] == '1') {
                echo $this->Form->input('Show_group_rosters', array('checked' => 'checked', 'name' => 'data[Publicsettings][Show_group_rosters]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Show_group_rosters', array('name' => 'data[Publicsettings][Show_group_rosters]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?><?php echo $langs["Show group rosters ( names and pictures )"]; ?> <br>
            <?php
            if ($this->request->data['public_profile_option_settings1']['Show_one_week_calender'] == '1') {
                echo $this->Form->input('Show_one_week_calender', array('checked' => 'checked', 'name' => 'data[Publicsettings][Show_one_week_calender]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Show_one_week_calender', array('name' => 'data[Publicsettings][Show_one_week_calender]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?> <?php echo $langs["Show one week calender"]; ?> <br>
            <?php
            if ($this->request->data['public_profile_option_settings1']['Show_picture_gallery'] == '1') {
                echo $this->Form->input('Show_picture_gallery', array('checked' => 'checked', 'name' => 'data[Publicsettings][Show_picture_gallery]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Show_picture_gallery', array('name' => 'data[Publicsettings][Show_picture_gallery]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?> <?php echo $langs["Show picture gallery"]; ?> <br>
            <?php
            if ($this->request->data['public_profile_option_settings1']['Allow_athletes_to_join_group_on_profile'] == '1') {
                echo $this->Form->input('Allow_athletes_to_join_group_on_profile', array('checked' => 'checked', 'name' => 'data[Publicsettings][Allow_athletes_to_join_group_on_profile]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            } else {
                echo $this->Form->input('Allow_athletes_to_join_group_on_profile', array('name' => 'data[Publicsettings][Allow_athletes_to_join_group_on_profile]', 'type' => 'checkbox', 'div' => false, 'label' => false));
            }
            ?> <?php echo $langs["Allow athletes to join group on profile"]; ?> <br>


            <b><?php echo $langs["External website address"]; ?>:</b><br>
            <div class="">
                <?php
                
                echo $this->Form->input('other_site', array('name' => 'data[Club][other_site]', 'type' => 'text', 'label' => false, 'div' => false, 'value' => $this->Session->read('Auth.Club.other_site')));
                
                
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear bb_gray1">&nbsp;</div>
    <div class="current_photo_row mtop10">
        <div class="cpr_photo">
            <div class="remove"><?php echo $langs["Club Logo"]; ?></div>
            <div class="current_photo">
                <!--                <img src="images/profile_image_1.jpg">-->
                <?php //echo $this->Html->image('profile_image_1.jpg'); ?>
                <?php if ($_SESSION['Auth']['User']['logo'] != '') { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/' . $_SESSION['Auth']['User']['logo'], array('width' => '200', 'height' => '200')), "JavaScript:void(0)", array('escape' => false)); ?>
                <?php } else { ?>
                    <?php echo $this->Html->link($this->Html->image('logo/no_image.jpg', array('width' => '200', 'height' => '200')), "JavaScript:void(0)", array('escape' => false)); ?>
                <?php } ?>


            </div>
            <div class="remove">[ <a
                        href="javascript: window.location.href='<?php echo $this->webroot; ?>users/removelogo';"
                        onclick="removelogo();"><?php echo $langs["Remove Logo"]; ?></a> ]
            </div>
        </div>
        <div class="cpr_discription">
            <div></div>
            <div class="">
                <!--                <input type="submit" value="Upload">-->
                <a class="black_btn cr_upload" id="iframe" rel=""
                   href="<?php echo $this->webroot; ?>users/logo_pic/<?php echo $_SESSION['Auth']['User']['id']; ?>"
                   title=""><?php echo $langs["Upload Logo"]; ?></a>
            </div>
            <div class="upload_logo_info">
                <!--                <img src="images/logo_info.jpg">-->
                <?php echo $this->Html->image('logo_info.jpg'); ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="clear bb_gray1">&nbsp;</div>

    <div class="coadmin_row mtop10">
        <div class=""><span class="coadm_title">Co-administrators</span> <span
                    class="redcoadmin">( <?php echo $langs["only main administrators can manage co-administrators"]; ?> )</span><span
                    class="add_coadmin"><a
                        href="javascript: window.location.href='<?php echo $this->webroot; ?>clubs/club_subadmin_add';"><i
                            class="fa fa-plus-circle"></i> <?php echo $langs["Add a Co-Admin"]; ?></a></span></div>
        <div id="Successcoadmin"
             style="display:none;color: red;"><?php echo $langs["Co-admin Deleted Successfully."]; ?></div>
        <div id="Failcoadmin"
             style="display:none;color: red;"><?php echo $langs["Co-admin not Deleted, Please try again."]; ?></div>
        <div class="coadmin_box mtop10">
            <?php
            foreach ($coadminarray as $key => $value) { //print_r($value['id']);exit;
                $imgCoadmin = $value['image'];
                if ($imgCoadmin == '') {
                    $imgCoadmin = "no_image.jpg";
                } else {
                    $imgCoadmin = 'profile_images/' . $imgCoadmin;
                }
                
                ?>


                <!------------------------- -->
                <div id="coadmindivID<?php echo $value['id']; ?>">
                    <div class="coadmin_col1">
                        
                        <?php echo $this->Html->image($imgCoadmin); ?>
                    </div>
                    <div class="coadmin_col2"><?php echo $value['firstname'] . ' ' . $value['lastname']; ?>
                        (<?php echo $value['username'] ?>)
                    </div>
                    <!-- <div class="coadmin_col3"><input type="text" value=""></div>-->
                    <div class="coadmin_col4"><a href="javascript:void(0);"
                                                 onclick="delcoadmin(<?php echo $value['id']; ?>);"><?php echo $langs["Delete"]; ?></a><a
                                href="javascript: window.location.href='<?php echo $this->webroot; ?>clubs/club_subadmin_edit/<?php echo $value['id']; ?>';"><?php echo $langs["Modify"]; ?></a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!------------------------- -->
            <?php } ?>

        </div>


    </div>
    <!--form buttons start-->
    <div class="ppr_btn_box">
        <!--        <div class="btn_box_save"><a class="btn_red" href="#.">Save</a></div>-->
        <div class="clb_btn">
            <input class="btn_box_save btn_red" type="button" onclick="validatefrmprofile();"
                   value="<?php echo $langs["Save"]; ?>" name=""></div>
    </div>
    <div class="clb_btn">
        <div class="btn_box_save"><a class="btn_black"
                                     href="javascript:window.location.reload();"><?php echo $langs["Cancel"]; ?></a>
        </div>
    </div>
    <!--form buttons end-->
    
    
    <?php echo $this->Form->end(); ?>


</div>
<script>
    function countryChng(a) {
        var RootURL;
        //var __element = document.getElementById(elementId);
        $.ajax({
            beforeSend: function () {
                $(".state_loading").show();
            },
            url: RootURL + 'users/getStates/' + a,
            async: false,
            success: function (data) {
                //alert(data);return false;
                $(".state_loading").hide();
                $('#selectStateID').html(data);

                //  __element.innerHTML = data;
            }
        });
    }
</script>

<script>
    function validatefrmprofile() {

        //clubtypeIDval clubtypeID  countryIDval countryID   stateIDval stateID   addrIDval addrID  descIDval descID
        var status = new Array();
        var clubtype = $('#clubtypeID').val();
        var country = $('#countryID').val();
        var state = $('#stateID').val();
        var addr = $('#addrID').val();
        var desc = $('#descID').val();
        //alert(desc);return false;
        if (clubtype == '') {
            $('#clubtypeIDval').show();
            $('#clubtypeID').focus();
            status[0] = 'false';

        } else {
            status[0] = 'true';
            $('#clubtypeIDval').hide();
        }
        if (country == '') {
            $('#countryIDval').show();
            $('#countryID').focus();
            status[1] = 'false';

        } else {
            status[1] = 'true';
            $('#countryIDval').hide();
        }
        if (state == '') {
            $('#stateIDval').show();
            $('#stateID').focus();
            status[2] = 'false';

        } else {
            status[2] = 'true';
            $('#stateIDval').hide();
        }
        if (addr == '') {
            $('#addrIDval').show();
            $('#addrID').focus();
            status[3] = 'false';

        } else {
            status[3] = 'true';
            $('#addrIDval').hide();
        }
        if (desc == '') {
            $('#descIDval').show();
            $('#descID').focus();
            status[4] = 'false';

        } else {
            status[4] = 'true';
            $('#descIDval').hide();
        }
        console.log(status);
        if ((jQuery.inArray('false', status)) >= 0) {
            return false;
        } else {
            //return true;
            //alert('ttttttt');//return false;
            $('#UserClubProfileForm').submit();
        }

    }
</script>
<script>
    function chkimgfun(a) {

        var val = $('#chkbxID' + a).prop('checked');
        //alert(val);
        if (val == false) {
            $('#spchkimgID' + a).addClass('checked');
            $('#chkbxID' + a).prop('checked', true);
        } else {
            $('#spchkimgID' + a).removeClass('checked');
            $('#chkbxID' + a).prop('checked', false);
        }
    }

    function chkMainSprt(a) {

        var sel = $('#MainSportID' + a).prop('checked');
        //alert(sel);
        $('#chkbxID' + a).prop('checked', false);
        if (sel == true) {
            $('#spchkimgID' + a).removeClass('redchecked');
            $('#starNewId' + a).removeClass('fa-star');
            $('#starNewId' + a).addClass('fa-star-o');
            $('#MainSportID' + a).prop('checked', false);
        } else {
            $(".gsport_box").removeClass("redchecked");
            $(".newClrStar").removeClass("fa-star");
            $(".newClrStar").addClass("fa-star-o");
            $('#spchkimgID' + a).addClass('redchecked');
            $('#starNewId' + a).addClass('fa-star');
            $('#starNewId' + a).removeClass('fa-star-o');
            $('#MainSportID' + a).prop('checked', true);

        }

    }

    function delcoadmin(uid) {
        //alert(uid);
        if (confirm("Are you sure to delete this co-admin?")) {

            $.ajax({
                url: <?php echo $this->webroot;?>+'clubs/club_subadmin_delete/' + uid,
                type: 'post',
                success: function (data) {
                    // alert(data);
                    if (data == 1) {
                        $('#coadmindivID' + uid).hide();
                        $('#Successcoadmin').show();

                        setTimeout(function () {
                            $('#Successcoadmin').hide();
                        }, 3000);

                    } else {
                        $('#Failcoadmin').show();
                        setTimeout(function () {
                            $('#Failcoadmin').hide();
                        }, 3000);
                    }
                    // alert('Success');return false;

                }, error: function () {
                    //  alert('Error');return false;
                }
            });

        } else {
            return false;
        }
    }
</script>