<script type="text/javascript">
	$(document).ready(function(){
		$(".show").click(function(){
			$(".advanced").hide();
			$(".advanced_options").show();					
			return false;
		});
	});
</script>

<?php if(isset($this->validation->error_string)){ echo $this->validation->error_string; }?>
<div class="grid_16 box box-shadow alpha clear-both navigation">
		<?php if(!isset($page['instructions'])){ ?>
			<h2 class="box-header">Here you can create your paste:</h2>
		<?php } else { ?>
			<h2 class="box-header"><?php echo $page['instructions']; ?></h2>
		<?php } ?></p>								
		
	<form action="<?=base_url()?>" method="post">
		<div class="item_group">
			<div class="item">
				<label for="name">Author
					<span class="instruction">What's your name?</span>
				</label>
				
				<?php $set = array('name' => 'name', 'id' => 'name', 'value' => $name_set, 'maxlength' => '32', 'tabindex' => '1');
				echo form_input($set);?>
			</div>
			
			<div class="item">
				<label for="title">Title
					<span class="instruction">Give your paste a title.</span>
				</label>
				
				<input value="<?php if(isset($title_set)){ echo $title_set; }?>" type="text" id="title" name="title" tabindex="2"/>
			</div>
																		
			<div class="item" style="float: right;">
				<label for="lang">Language
					<span class="instruction">What language is your paste written in?</span>
				</label>
				
				<?php $lang_extra = 'id="lang" class="select" tabindex="3"'; echo form_dropdown('lang', $languages, $lang_set, $lang_extra); ?>
			</div>								
		</div>							
		
		<div class="item_group">
			<label for="paste">Your paste
				<span class="instruction">Paste your paste here</span>
			</label>
			
			<textarea name="code" cols="40" rows="20" tabindex="4"><?php if(isset($paste_set)){ echo $paste_set; }?></textarea>
		</div>																											
		
		<div class="item_group">

			<div class="item">
				<label for="remember">Remember You
					<span class="instruction">Remember your settings for next time?</span>
				</label>
				<div class="text_beside">
					<?php
						$set = array('name' => 'remember', 'id' => 'remember', 'tabindex' => '9', 'value' => '1', 'checked' => $remember_set);
						echo form_checkbox($set);
					?>
				</div>
			</div>

			<div class="item">
				<label for="private">Private
					<span class="instruction">Private paste aren't shown in recent listings.</span>
				</label>
				<div class="text_beside">
					<?php
						$set = array('name' => 'private', 'id' => 'private', 'tabindex' => '6', 'value' => '1', 'checked' => $private_set);
						echo form_checkbox($set);
					?>
				</div>
			</div>						
		
			<div class="item" style="float:right;">
				<label for="expire">Delete After
					<span class="instruction">When should we delete your paste?</span>
				</label>
				<?php 
					$expire_extra = 'id="expire" class="select" tabindex="7"';
					$options = array(
									"30" => "30 Minutes",
									"60" => "1 hour",
									"360" => "6 Hours",
									"720" => "12 Hours",
									"1440" => "1 Day",
									"100080" => "1 Week",
									"40320" => "4 Weeks"
								);
				echo form_dropdown('expire', $options, $expire_set, $expire_extra); ?>
			</div>
		</div>
		
		
		<?php if($reply){?>
		<input type="hidden" value="<?php echo $reply; ?>" name="reply" />
		<?php }?>

		<div class="clear"/>

		<div style="float: right;"><button type="submit" value="submit" name="submit">Create</button></div>
	</form>
</div>
