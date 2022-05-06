	
 Task:  Logos of the Club	
	
  --->  C:\wamp\www\movesbook\app\View\Users\club_user_faccess.ctp
  
			<?php echo $this->Html->link($this->Html->image('profile_images/' . $_SESSION['Auth']['User']['image'], array('width' => '104', 'height' => '113')), "#", array('escape' => false)); ?>
   
  ---> C:\wamp\www\movesbook\app\View\Layouts\single_user.ctp  
   
			<img alt="" src="<?php echo $this->webroot; ?>img/profile_image_1.jpg">
	
  ---> C:\wamp\www\movesbook_\app\View\Elements\club\club_banner.ctp