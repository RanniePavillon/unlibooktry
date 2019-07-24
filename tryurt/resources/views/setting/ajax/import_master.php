<?php
	if($_POST['type'] == 'client')
	{$type = 'Customer';}
	elseif($_POST['type'] == 'supplier')
	{$type = 'Vendor';}
	elseif($_POST['type'] == 'task')
	{$type = 'Service Item';}
	elseif($_POST['type'] == 'item')
	{$type = 'Item';}
?>
<script>
	$(function(){
		$('.close').click(function(){
			$('.popBack').addClass('hidden');
			$('.popBack').html('');
			$('body').css('overflow','auto');
		})
	})
</script>
<div class="cus-modal-holder">
	<div class="cus-modal-header">
		<span class="text-600">Import <?=$type?></span>
	</div>
	<div class="cus-modal-body">
		<form method="post" action="<?php echo URL ?>setting/importfile" enctype="multipart/form-data" >
				<div class="cus-form-group">
					<span>
						Attach your File..
					</span>
				</div>
				<div class="cus-form-group">
					<input type="hidden" name="type" value="<?=$_POST['type']?>"/>
					<input type="file" class="buttonBrowse" id="" name="file" style="width: 100%" />
				</div>
				<div class="text-right">
					<input type="submit" class="imButton" value="IMPORT FILE">
					<input type="button" class="close imButton" value="CANCEL">
				</div>
		</form>
	</div>
</div>