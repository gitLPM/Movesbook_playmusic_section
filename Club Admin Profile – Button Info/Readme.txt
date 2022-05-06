Task: 

	Club Admin Profile – Button Info 
	
	
	
===> C:\wamp\www\movesbook\app\View\Elements\club\clubprofile.ctp

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
				