	<script type="text/javascript" src="https://ssl.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php"></script> 
	<script type="text/javascript">FB.init('<?= $user->write('facebook_api'); ?>','/xd_receiver_ssl.htm');</script>	

	<div id="connect_form">

			
			<h1>Connect with OpenID</h1>
			

			<? if ($user->get('openid')) { ?>
				<div class="connect_details">
				
					<p>
						<strong>OpenID:</strong> <a href="<? $user->write('openid'); ?>"><? $user->write('openid'); ?></a>
						&nbsp;&nbsp;<a href="<? $POD->siteRoot(); ?>/openid?rod=1">Remove</a>
					</p>
				</div>
			<? } else { ?>
			
				<p>When you connect, you'll be able to login with your OpenID account!</p>

				<form method="post" action="<? $POD->siteRoot(); ?>/openid">
					<p class="input">
						<input name="openid" id="openid" class="text" value="Your OpenID goes here." onfocus="repairField(this,'Your OpenID goes here.');" onblur="repairField(this,'Your OpenID goes here.');" style="color:#CCC;"/>
					</p>
					<p><input type="submit" value="Login via OpenID" class="littlebutton" /></p>
					<div class="clearer"></div>
				</form>
			
			<? } ?>
			<? if ($POD->isAuthenticated()) { ?>
				<p class="right_align"><a href="<? $POD->siteRoot(); ?>/editprofile#connect">Return to Connect Preferences &#187;</a></p>
			<? } else { ?>
				<br />
				<p><a href="<? $POD->siteRoot(); ?>/login">&larr; Return to Login</a></p>
			<? } ?>
				

				
	</div>