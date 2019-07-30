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
    <style>
    .tr{
        text-align: right;
    }
</style>

<table class="tfootTable">

    <tfoot>
        <tr class="under">
            <td colspan="5" style="color:#fff;font-weight:bold;text-align:center;font-family:Verdana;font-size:12px;" class="under">
                <span style="margin-left:25px\width:120px">
                    <span class="<?= ($this->pages > 1) ? '' : '' ?>">
                        <span class="paginate">Page:</span>
                        <select class="paginate paginateSelect ">
                            <?php
                            if (isset($this->pages)) {
                                for ($num = 1; $num <= $this->pages; $num++) {
                                    ?>
                                    <option value="<?= $num ?>"><?= $num ?></option>
                                <?php
                                }
                            } else {
                                ?>
                                <option value="1">1</option>
                                <?php
                            }
                            ?>
                        </select>
                        of <?= isset($this->pages) ? $this->pages : 1 ?>
                    </span>
                    <span style="float:right">
                        <span class="paginate">Items per page:</span>
                        <select class="paginateNumber" >
                            <option value="10" <?= $pageNumber == 10 ? 'selected="selected"' : '' ?>>10</option>
                            <option value="25" <?= $pageNumber == 25 ? 'selected="selected"' : '' ?>>25</option>
                            <option value="50" <?= $pageNumber == 50 ? 'selected="selected"' : '' ?>>50</option>
                            <option value="100" <?= $pageNumber == 100 ? 'selected="selected"' : '' ?>>100</option>
                            <option class="hidden

                            " value="" <?= $pageNumber == '' ? 'selected="selected"' : '' ?>>All</option>
                        </select>
                    </span>
                </span>
            </td>
        </tr>
    </tfoot>
</table>
<script>
    $(function () {
        loadExpenseList();
        
        function loadExpenseList() { 
//            ftn2 = ftn; alert(ftn2);
            ftn = typeof (ftn) == 'undefined' ? '' : ftn; 
            search = $('.searchindexAllE').val();
            type = $('.inumber').val();
            pageNumber = $('.paginateNumber').val();
            page = $('.paginateSelect').val();
            startdate = $('input[name="startdate"]').val();
            enddate = $('input[name="enddate"]').val();
            $.post(URL + 'expenses/loadCashAdvanceList', {
                'search': search,
                'type': type,
                'pageNumber': pageNumber,
                'page': page,
                'startdate': startdate,
                'enddate': enddate,
                'ftn':ftn
            })
                    .done(function (returnData) {
                        $('.tablecni').remove();
                        $('.cnitableExp').append(returnData);
						checkboxPress();
                        $('.edits').click(function () {
                            id = this.id;
                            edit(id);
                            return false;
                        });
                    });
        }

        $('.paginateSelect').change(function () {
            loadExpenseList();
        });

        $('.paginateNumber').change(function () {
            setPagenation();
        });

        function setPagenation() {
            search = $('.searchindexAllE').val();
            type = $('.inumberAllExp').val();
            pageNumber = $('.paginateNumber').val();
            $.post(URL + 'expenses/cashAdvancePagenation', {'search': search, 'type': type, 'pageNumber': pageNumber})
                    .done(function (returnData) {
                        $('.cnitableExpHolderPage').html(returnData);
                    });
        }
		function checkboxPress(){
			$('input[name="trig[]"]').on('change',function(){
				$('input[name="edit"]').addClass('hidden');
				$('input[name="copy"]').addClass('hidden');
				$('input[name="del"]').addClass('hidden');
				$('input[name="print"]').addClass('hidden');
				$('input[name="liquidation"]').addClass('hidden');
				
				if($('input[name="trig[]"]:checked').length == 0){
					$('input[name="edit"]').removeClass('hidden');
					$('input[name="copy"]').removeClass('hidden');
					$('input[name="del"]').removeClass('hidden');
					$('input[name="print"]').removeClass('hidden');
					$('input[name="liquidation"]').removeClass('hidden');
					return false;
				}
				
				
				if($('input[name="trig[]"]:checked').length == 1){
					$('input[name="copy"]').removeClass('hidden');
					transStatus = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
					allowLiquidate = $('input[name="trig[]"]:checked').attr('catype');
					// alert(transStatus);
					if((transStatus == 'Posted' || transStatus == 'Liquidated')){
						if(allowLiquidate == 'Officer Employee'){
							$('input[name="liquidation"]').removeClass('hidden');
						}
						$('input[name="print"]').removeClass('hidden');
					} else if(transStatus == 'Open' || transStatus == 'Approved'){
						$('input[name="edit"]').removeClass('hidden');
						$('input[name="del"]').removeClass('hidden');
					} else if(transStatus == 'Open' || transStatus == 'Pending'){
						$('input[name="edit"]').removeClass('hidden');
					} else if(transStatus == 'Liquidated'){
						$('input[name="print"]').removeClass('hidden');
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
