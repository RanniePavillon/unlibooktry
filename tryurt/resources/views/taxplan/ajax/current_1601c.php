<style>
.currentHolder{
	width: 895px;
	box-shadow: 1px 1px 2px 2px #c8c8c8;
	margin:30px auto;
	overflow: scroll;
	height:570px !important;
}
.transHistory{
	background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 140px;
    height: 25px;
    font-weight: bold;
    cursor: pointer;
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
    padding:0px;
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
<?php
	// $org = $this->org;
	// $info = $this->info;
	// $report = $this->form1601c;
	// $report2 = $this->form1601cOpen;
?>
<div class="currentHolder">
	<div style="margin-top:20px;margin-left:15px;">
		<input type="button" value="Transaction History" class="transHistory">
	</div>
	<!--?php
		if (!empty($report)){
	?-->
	<div class="containerForm">
		<div>
			MONTHLY REMITTANCE RETURN OF INCOME TAXES WITHHELD COMPENSATION - 1601C
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="2">Particulars</th>
				<th>Open</th>
				<th>Posted</th>
				<th>Total Amount <br>of <br>Compensation</th>
				<th>Tax Due</th>
			</tr>
			<!--?php if($report->part2Item15 || $report2->part2Item15){ ?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2">Total Amount of Compensation</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item15) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item15) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if(
				($report->part2Item16A && $report->part2Item16B && $report->part2Item16C) || 
				($report2->part2Item16A && $report2->part2Item16B && $report2->part2Item16C)
				){
			?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2">Less: Non-Taxable Compensation</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item16A || $report2->part2Item16A){ ?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Total Amount of Compensation</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item16A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item16B || $report2->part2Item16B){ ?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Holiday Pay, Overtime Pay, Night Shift Differential Pay, Hazard Pay (Minimum Wage Earner)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item16B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16B) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item16C || $report2->part2Item16C){ ?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Other Non-Taxable Compensation</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item16C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16C) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item17 || $report2->part2Item17){
			?-->
			<tr class="autCompute">
				<td class="leftAlign" colspan="2">Taxable Compensation</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item17) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } elseif($report->part2Item15 || $report2->part2Item15 || $report->part2Item16C || $report2->part2Item16C){
				$report->part2Item17 = $report->part2Item15 - $report->part2Item16C;
				$report2->part2Item17 = $report2->part2Item15 - $report2->part2Item16C;
			?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Taxable Compensation</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item17 + $report->part2Item17) ?--></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item18 || $report2->part2Item18){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Required to be Withheld</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18 + $report2->part2Item18) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item19 || $report2->part2Item19){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Add/Less: Adjustment</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item19) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item19 + $report->part2Item19) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item20 || $report2->part2Item20){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Required to be Withheld for Remittance</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20 + $report2->part2Item20) ?--></td>
			</tr>
			<!--?php } elseif($report->part2Item19 || $report2->part2Item19 || $report->part2Item18 || $report2->part2Item18) {
				$report->part2Item20 = $report->part2Item18 + $report->part2Item19;
				$report2->part2Item20 = $report2->part2Item18 + $report2->part2Item19;
			?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Required to be Withheld for Remittance</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20 + $report2->part2Item20) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21A || $report2->part2Item21A){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2" style="padding-left:17px;">Less: Tax Remitted in Return Previously Filed, if this is an amended return</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21A) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21A + $report->part2Item21A) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21B || $report2->part2Item21B){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Other Payments Made</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21B) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21B + $report2->part2Item21B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item22 || $report2->part2Item22){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Payments Made</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item22) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
			</tr>
			<!--?php }elseif($report->part2Item21A || $report2->part2Item21A || $report->part2Item21B || $report2->part2Item21B){
				$report->part2Item22 = $report->part2Item21A + $report->part2Item21B;
				$report2->part2Item22 = $report2->part2Item21A + $report2->part2Item21B;
				?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Payments Made</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23 || $report2->part2Item23){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Still Due</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23 + $report->part2Item23) ?--></td>
			</tr>
			<!--?php }elseif($report->part2Item22 || $report2->part2Item22 || $report->part2Item20 || $report2->part2Item20){ 
				$report->part2Item23 = $report->part2Item20 - $report->part2Item22;
				$report2->part2Item23 = $report2->part2Item20 - $report2->part2Item22;
			?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Still Due</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23 + $report->part2Item23) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item25 || $report2->part2Item25){ ?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Tax Still Due</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23 + $report->part2Item23) ?--></td>
			</tr>
			<!--?php }elseif($report->part2Item24D || $report2->part2Item24D || $report->part2Item23 || $report2->part2Item23){ 
				$report->part2Item25 = $report->part2Item23 - $report->part2Item24D;
				$report2->part2Item25 = $report2->part2Item23 - $report2->part2Item24D;
			?-->
			<tr class="">
				<td class="leftAlign" colspan="2">Total Amount Still Due</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item25 + $report->part2Item25) ?--></td>
			</tr>
			<?php 
				// }
			?>
		</table>
	</div>
	<?php 
		// }
	?>
	<div style="float:right;margin-top:20px;margin-right:13px;margin-bottom:15px;">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode">
	</div>
</div>









