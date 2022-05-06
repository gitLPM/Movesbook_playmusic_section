	
 Task:  Logos of the Club	
	
  --->  C:\wamp\www\movesbook\app\View\Users\club_user_faccess.ctp
  
			<?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '104', 'height' => '113')), "#", array('escape' => false)); ?>
   
  ---> C:\wamp\www\movesbook\app\View\Layouts\single_user.ctp  
   
			<img alt="" src="<?php echo $this->webroot; ?>img/profile_image_1.jpg">
	
  ---> C:\wamp\www\movesbook\app\View\Elements\club\club_banner.ctp
  
  ---> C:\wamp\www\movesbook\app\View\Elements\club\clubprofile.ctp 

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

				
 ---> C:\wamp\www\movesbook\app\View\Elements\club\club_banner.ctp	
			
			
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
 