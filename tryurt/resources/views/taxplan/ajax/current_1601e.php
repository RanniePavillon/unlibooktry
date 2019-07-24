<?php
	// $org = $this->org;
	// $info = $this->info;
	// $report = $this->form1601e;
	// $report2 = $this->form1601eOpen;
?>
<style>
.currentHolder{
	width: 895px;
	box-shadow: 1px 1px 2px 2px #c8c8c8;
	margin:30px auto;
	overflow: scroll;
	height:570px !important;
}
.containerForm{
	font-family:Verdana;
	font-size:12px;
	width: 96%;
	margin-left: 15px;
	text-align: center;
	height: auto!important;
	padding-top: 20px;
}
.tblCRB{
	margin-top: 20px;
	border-collapse: collapse;
	font-family: Verdana;
	font-size: 12px;
	border: 1px solid #c8c8c8;
	width: 100%;
}
.tblCRB th {
    background: #183867;
    color: #fff;
    padding: 6px;
    border: 1px solid #c8c8c8;
}
.tblCRB td{
	border:1px solid #c8c8c8;
	padding:5px;	
}
.viewPreviewMode {
    background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 130px;
    height: 25px;
    font-weight: bold;
}
</style>
<div class="currentHolder">
	<div style="margin-top:20px;margin-left:15px;">
		<input type="button" value="Transaction History" class="transHistory">
	</div>
	<!--?php
		 if (!empty($report)){
	?-->
	<div class="containerForm">
		<div>
			MONTHLY REMITTANCE RETURN OF CREDITABLE INCOME TAXES WITHHELD (EXPANDED) - 1601E
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="3">Particulars</th>
				<th>Open</th>
				<th>Posted</th>
				<th>Tax Required To be Withheld</th>
			</tr>
			
			<!--?php if($report->item14 || $report2->item14){
			?-->
			<tr>
				<td class="leftAlign" colspan="3">Total Tax Required to be Withheld and Remitted</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->item14) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item14) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item14 + $report2->item14) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if(
				$report->item15A || $report->item15B || $report->item15C || 
				$report2->item15A || $report2->item15B || $report2->item15C
				){
			?-->
			<tr>
				<td class="leftAlign" colspan="6" style="border-right:1px solid #c8c8c8;">Less: Tax/Credits Payment</td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->item15A || $report2->item15A){
			?-->
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Tax Remitted in Return Previously Filed, if this is an Amended Return</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->item15A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15A + $report2->item15A) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->item15B || $report2->item15B){
			?-->
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Advance Payments Made (please attach proof of payments - BIR Form No. 0605)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->item15B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15B + $report2->item15B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->item15C || $report2->item15C){
			?-->
			<tr>
				<td class="leftAlign" colspan="3" style="padding-left:17px;">Total Tax Credits/Payments (Sum of Items 15A & 15B)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->item15C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item15C + $report2->item15C) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->item16 || $report2->item16){
			?-->
			<tr>
				<td class="leftAlign" colspan="3">Tax Still Due (Over remittance) (Item 14 less Item 15C)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->item16) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item16) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item16 + $report->item16) ?--></td>
			</tr>
			<!--?php } elseif($report->item14 || $report->item15C || $report2->item14 || $report2->item15C){
				$report->item16 = $report->item14 - $report->item15C;
				$report2->item16 = $report2->item14 - $report2->item15C;
				?-->
			<tr>
				<td class="leftAlign" colspan="3">Tax Still Due (Over remittance) (Item 14 less Item 15C)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->item16 + $report2->item16) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php
				if($report->item18){
			?-->
			<tr>
				<td class="leftAligN grayBg" colspan="3">Total Amount Still Due (Over remittance) (Sum of Item 16 less Item 17D)</td>
				<td class="rightAlign grayBg"><!--?= Controller::getFloat($report->item18) ?--></td>
				<td class="rightAlign grayBg"><!--?= Controller::getFloat($report->item18) ?--></td>
				<td class="rightAlign grayBg"><!--?= Controller::getFloat($report->item18) ?--></td>
			</tr>
			<!--?php
				}
			?-->
		</table>
	</div>
	
	<!--?php
		}
	?-->
	
	<div style="float:right;margin-top:20px;margin-right:13px;">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode">
	</div>
</div>

<div class="popback hidden">
<script>
$(function(){
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/form1601e_newtab?month='+month+'&year='+year);
			return false;
		});
		<?php
			if(isset($_GET['month'])){
		?>
			
				$('select[name="month"]').val('<?= $_GET['month'] ?>'); 
				$('input[name="year"]').val('<?= $_GET['year'] ?>'); 
				
				$('.reportgenerate').click();
		<?php
			}
		?>
		$('.buttonStyles2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			$('.popback').removeClass('hidden');
			$('body').css('overflow','hidden');
			$('.popback').css('overflow','auto');
			
			$.post(URL + 'taxplan/getExpendedHistory',{'month':month, 'year':year})
				.done(function(returnData){
					$('.popback').html(returnData);
					
					$('.closeJournal').click(function(){
						$('.popback').addClass('hidden');
						$('.popback').html('');
						$('body').css('overflow','auto');
					});
				});
		});
})
</script>

