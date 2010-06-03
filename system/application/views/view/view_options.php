<?php $this->load->view("defaults/header"); ?>

<div class="grid_16 box box-shadow alpha">
<h2 class="box-header">Viewing options:</h2>
	
	<form action="<?=site_url("view/options")?>" method="post">

		<p class="explain border">Here you can change your preferences for viewing pastes. Requires cookies to be enabled.</p>								
										
		<div class="grid_15">
			<label for="view_raw">View Raw
				<span class="instruction">This changes the default paste view to the raw view. Useful for dialup + low bandwith users.</span>
			</label>
			<div class="text_beside"><?php
			$set = array('name' => 'view_raw', 'id' => 'view_raw', 'class' => 'checkbox', 'value' => '1', 'checked' => $view_raw_set);
			echo form_checkbox($set);
			?><p>Use the raw view by default</p>
			</div>
		</div>			
			
		<div style="float: right;"><button type="submit" value="submit" name="submit">Save</button></div>
	</form>
</div>

<?php $this->load->view("defaults/footer.php"); ?>
