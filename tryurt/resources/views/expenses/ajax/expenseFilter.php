<?php
	$pageNumber = isset($_POST['pageNumber']) ? $_POST['pageNumber'] : '';
	
?>
<style>
	.tfootTable{
		padding: 2px 2px 2px 2px;
		font-size: 13px;
		color: white;
		font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
		text-align: left;
		margin: 0 auto;
		width: 350px;
	}
	.paginateLinkAll, .paginateLink{
		color: #fff !important;
		text-decoration: none;
	}
	.paginateLink:hover{
		text-decoration:underline;
	}
	.paginateLinkAll:hover{
		text-decoration:underline;
	}
<style>
	.tr{
		text-align: right;
	}
</style>

<table class="tfootTable">

<tfoot>
	<tr class="under">
		<td colspan="5" style="color:#fff;font-weight:bold;text-align:center;font-family:Verdana;font-size:11px;" class="under">
			<span style="margin-left:25px\width:120px">
				<span>
					<?php
						if(isset($this->pages)){
							for($num = 1; $num <= $this->pages; $num++){ ?>
								<!--<a href="#" class="paginateLink"><?= $num ?></a>  -->
						<?php }
						?>
							<!--<a href="#" class="paginateLinkAll">All</a>-->
						<?php
						} else {
							?>
							<a href="#" class="paginateLink">1</a>  
							<a href="#" class="paginateLinkAll">All</a>
							<?php
						}
						?>
				</span>
				<span class="<?= ($this->pages > 1) ? '' : '' ?>">
					<span class="paginate">Page</span>
					<select class="paginate paginateSelect ">
						<?php
						if(isset($this->pages)){
							for($num = 1; $num <= $this->pages; $num++){ ?>
								<option value="<?= $num ?>"><?= $num ?></option>
						<?php }
						} else {
							?>
							<option value="1">1</option>
							<?php
						}
						?>
					</select>
					 
				</span>
				<span style="">
					<span class="paginate">Items per page:</span>
					<select class="paginateNumber" >
						<option value="10" <?= $pageNumber == 10 ? 'selected="selected"' : '' ?>>10</option>
						<option value="25" <?= $pageNumber == 25 ? 'selected="selected"' : '' ?>>25</option>
						<option value="50" <?= $pageNumber == 50 ? 'selected="selected"' : '' ?>>50</option>
						<option value="100" <?= $pageNumber == 100 ? 'selected="selected"' : '' ?>>100</option>
						<option value="" <?= $pageNumber == '' ? 'selected="selected"' : '' ?>>All</option>
					</select>
				</span>
				<span style="">
					Page: <span class="pagenumberHolder">1</span> of <?= isset($this->pages) ? $this->pages : 1 ?>
				</span>
			</span>
		</td>
	</tr>
</tfoot>
</table>
<script>
	$(function(){
		$('.paginateLinkAll').click(function(){
			$('.paginateNumber').val('All');
			$('.paginateNumber').change();
			return false;
		});
		$('.paginateLink').click(function(){
			$('.paginateSelect').val($(this).html());
			$('.paginateSelect').change();
			return false;
		});
		loadExpenseList();
		$('.paginateSelect').change(function(){
			$('.pagenumberHolder').html($(this).val());
		});
		function loadExpenseList(){
			search = $('.searchindexAllE').val();
			type = $('.inumberAllExp').val();
			pageNumber = $('.paginateNumber').val();
			page = $('.paginateSelect').val();
			$.post(URL + 'expenses/loadList',{'search':search, 'type':type, 'pageNumber': pageNumber, 'page' : page})
				.done(function(returnData){
					$('.tablecni').remove();
					$('.cnitableExp').append(returnData);
					
					$('.edits').click(function(){
						id = this.id;
						edit(id);
						return false;
					});
					
					checkTrig();
				});
		}
		
		$('.paginateSelect').change(function(){
			loadExpenseList();
		});
		
		$('.paginateNumber').change(function(){
			setPagenation();
		});
		
		function setPagenation(){
			search = $('.searchindexAllE').val();
			type = $('.inumberAllExp').val();
			pageNumber = $('.paginateNumber').val();
			$.post(URL + 'expenses/expensePagenation',{'search':search, 'type':type, 'pageNumber': pageNumber})
				.done(function(returnData){
					$('.cnitableExpHolderPage').html(returnData);
				});
		}
		function checkTrig(){
			
			$('input[name="trig[]"]').change(function(){
				$('input[name="edit"]').addClass('hidden');
				$('input[name="copy"]').addClass('hidden');
				$('input[name="del"]').addClass('hidden');
				$('input[name="print"]').addClass('hidden');
				$('.sendEmail').addClass('hidden');
				
				if($('input[name="trig[]"]:checked').length == 0){
					$('input[name="edit"]').removeClass('hidden');
					$('input[name="copy"]').removeClass('hidden');
					$('input[name="del"]').removeClass('hidden');
					$('input[name="print"]').removeClass('hidden');
					$('.sendEmail').removeClass('hidden');
					return false;
				}
				
				if($('input[name="trig[]"]:checked').length == 1){
					$('input[name="copy"]').removeClass('hidden');
					transStatus = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
					if(transStatus == 'Posted'){
						$('input[name="print"]').removeClass('hidden');
						$('.sendEmail').removeClass('hidden');
					} else if(transStatus == 'Open'){
						$('input[name="edit"]').removeClass('hidden');
						$('input[name="del"]').removeClass('hidden');
					}
				} else {
					canCancel = true;
					$('input[name="trig[]"]:checked').each(function(){
						transStatus = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
						if(transStatus != 'Open'){
							canCancel = false;
						}
					});
					if(canCancel){
						$('input[name="del"]').removeClass('hidden');
					}
			}
			});
		}
	})
</script>
