<div class="card" style="max-width:100%;margin:10px!important">
    <div class="card-content">
	<h4>WP Meta and Date Remover</h4>
	<a href="http://wpxlearn.com/wordpress-on-mobile/" style="margin-left:63%; " class="waves-effect violet wpmdr-hover waves-light btn">Get App for your Site</a>
<br/>
<br/>

	</div>
</div>
<div class="row">
	<div class="col  m9">
        <div class="card" style="max-width:100%;height:1000px">
				<div class="card-content">
				<form method="post" action="<?php echo $action_url;?>">
					<input type="hidden" name="submitted" value="1" />
					<?php echo wp_nonce_field('acc_nonce_wpmdr','acc_nonce_field_wpmdr') ?>
						<p>
							<div class="switch">
							    <label>
							      Disable
							      <input value="1" <?php if(get_option('wpmdr_individual_post',"0")=="1") echo "checked='checked'" ;?> name="wpmdr_individual_post"  type="checkbox">
							      <span class="lever"></span>
							      Enable
							    </label>
							</div>
							<p><blockquote style="font-size:18px">Individual post option. Enable this if you want to show meta on some posts by setting individual setting for that post.</blockquote></p>

						</p>
						<p>
							<input type="checkbox" value="1" <?php if($from_['home']=="1") echo "checked='checked'" ;?> name="wpmdr_from_home" id="home_remove" />
							<label for="home_remove">Remove from Home Page</label>
							<p><blockquote style="font-size:18px">Uncheck this if you want to show dates on Home Page or Post list page.</blockquote></p>
						</p>
						<p>
							<input type="checkbox" value="1" <?php if(get_option('wpmdr_disable_php')=="1") echo "checked='checked'" ;?> name="wpmdr_disable_php" id="php_remove" />
							<label for="php_remove">Disable PHP removal</label>
							<p><blockquote style="font-size:18px">Clicking this will disable php filter for your dates and other meta data.
							Search engines will show your dates in snippet.</blockquote></p>
						</p>
						<br/>
						<p>
							<input type="checkbox" value="1" <?php if(get_option('wpmdr_disable_css')=="1") echo "checked='checked'" ;?> name="wpmdr_disable_css" id="css_remove" />
							<label for="css_remove">Disable CSS removal</label>
							<p><blockquote style="font-size:18px">Clicking this will disable CSS filter for your dates and other meta data.
							Sometimes disabling this leaves unwanted text, icons on page that were added by theme.</blockquote></p>
						</p>
						<p>
							<blockquote style="font-size:18px">Also Read <a target="_blank" href="http://bit.ly/wpmdrplugin">How to remove additional text like <b>"by", "posted by"</b> etc</a></blockquote>
						</p>
						
						
						<br/>
						<p>
							<p><label style="font-size:18px">
								Set Custom CSS
					
								<a style="margin-left:65.5%" href="https://bit.ly/WPFiverr" class="btn purpule wpmdr-hover">I need help to setup this</a>
							</label></p>
							 
							<textarea id="ct" name='wpmdr_css'><?php echo $css; ?></textarea>
							<a href="http://bit.ly/2sHInch" target="_blank" class="btn orange grey side-btn">Advanced Custom CSS</a>
							<script>
								jQuery(window).on("load",function(){
									 var se = CodeMirror.fromTextArea(document.getElementById("ct"), {
									
									matchBrackets: true,
									autofocus: true,
									theme:"dracula",
									mode: "css"
								  });
								});
							</script>
						</p>
					<p>
					
					
					
					<br/>
					<input value="Save Changes" type="submit"  style="float:right" class="waves-effect waves-light btn" />
					</p>
				</form>	
				</div>
			</div>
      </div>
		<div class="col  m3">
			<div class="card">
				<div class="card-content">
					<a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/wp-meta-and-date-remover?rate=5#postform" class="btn green pulse side-btn">Vote Up</a>
					<br/><br/>
					<a  href="http://bit.ly/PKDonate" class="btn blue pulse side-btn">Donate</a>
					<br/><br/>
					<a target="_blank" href="https://track.fiverr.com/visit/?bta=102069&brand=fiverrcpa&landingPage=https%3A%2F%2Fwww.fiverr.com%2Fprasadkirpekar%2Fdevelop-custom-feature-plugin-for-your-wordpress-site" class="btn purple pulse side-btn">Make Plugin</a>
					<br/><br/>
					<a target="_blank" href="https://bit.ly/WPFiverr" class="btn orange pulse side-btn">Get Support</a>
					
				</div>
			</div>
      </div>
    </div>
	