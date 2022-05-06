<?php
echo $this->element('club/club_newmember_tab_edit');
?>
<div class="clear"></div>
<?php echo $this->Form->create('MemberOtherdetail', array('type' => 'file', 'id' => 'single_user_registration_formID1', 'url' => array('action' => 'new_member_otherdetails_edit', 'controller' => 'clubs', $id))); ?>
<div class="mp-profile mtop10">
    <?php echo $this->Form->input('MemberOtherdetail.id', array('type' => 'hidden', 'label' => false, 'div' => false, 'id' => 'id')); ?>
    <!--left section start-->
    <div class="mp-pro-left">



        <div class="vip-section">
            <h3>Refernce </h3>
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