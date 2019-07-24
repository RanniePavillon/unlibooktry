<?php
	$org = $this->org;
	$info = $this->info;
	// $report = $this->getMOR_2307;
	// print_r($report);
?>
<style>

.textRight{
	text-align:right;
}
.textLeft{
	text-align:left;
}
.inpAddress{
	width: 310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family:Verdana;
	font-size:12px;
	margin-left:185px;
}
.textCenter{
	text-align:center;
}
</style>
<div class="summartBilling_holder">
	<?php
	//if($report){
	?>
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="ORCompanyInfo">
				PURCHASE TRANSACTION
			</div>
			<div class="ORCompanyInfo">
				RECONCILIATION OF LISTING FOR ENFORCEMENT
			</div>
			<div class="ORCompanyInfo">
				TIN:
			</div>
			<br/>
			<div class="ORCompanyInfo">
				OWNER'S NAME:
			</div>
			<div class="ORCompanyInfo">
				OWNER'S TRADE NAME:
			</div>
			<div class="ORCompanyInfo">
				OWNER'S ADDRESS:
			</div>
			
			<table class="tblCRB_purchases">
				<tr>
					<th width="90px;">Taxable Month</th>
					<th width="130px;">Taxpayer Identification Number</th>
					<th width="130px;">Registered Name</th>
					<th width="130px;">Name of Supplier</th>
					<th width="130px;">Supplier's Address</th>
					<th width="130px;">Amount of Gross Purchase</th>
					<th width="130px;">Amount of Exempt Purchase</th>
					<th width="130px;">Amount of Zero Rated Purchase</th>
					<th width="130px;">Amount of Taxable Purchase</th>
					<th width="130px;">Amount of Purchase of Services</th>
					<th width="130px;">Amount of Purchase of Capital Goods</th>
					<th width="130px;">Amount of Purchase of Goods other than Capital Goods</th>
					<th width="130px;">Amount of Input Tax</th>
					<th width="130px;">Amount of Gross Taxable Purchase</th>
				</tr>
			<?php
			// if(isset($report) && !empty($report)){
				// foreach($report as $each){
			?>
			<tr>
				<td class="leftside" ><?//= date('m/t/Y', strtotime($each['trans_date']))?></td>
				<td class="leftside" style="width:130px;"><?//= $each['tin']?></td>
				<td class="leftside" ><?//= $each['name']?></td>
				<td class="leftside"><?//= $each['name']?></td>
				<td class="leftside"><?//= $each['address']?></td>
				<td><?//= Controller::getFloat($each['gross_purch'])?></td>
				<td><?//= Controller::getFloat($each['exempt'])?></td>
				<td><?//= Controller::getFloat($each['zero'])?></td>
				<td><?//= Controller::getFloat($each['taxable'])?></td>
				<td><?//= Controller::getFloat($each['service'])?></td>
				<td><?//= Controller::getFloat($each['capital_goods'])?></td>
				<td><?//= Controller::getFloat($each['other_capital'])?></td>
				<td><?//= Controller::getFloat($each['input'])?></td>
				<td><?//= Controller::getFloat($amountOfTP)?></td>
			</tr>
			<?php
				// }
			// }
			?>
			<tr class="footertable">
				<td colspan="5" style="text-align:center;">Grand Total:</td>
				<td><?//= Controller::getFloat($grossPurchase)?></td>
				<td><?//= Controller::getFloat($exemptPurchase)?></td>
				<td><?//= Controller::getFloat($zeroRatedPurchase)?></td>
				<td><?//= Controller::getFloat($taxablePurchase)?></td>
				<td><?//= Controller::getFloat($servicePurchase)?></td>
				<td><?//= Controller::getFloat($capitalGoodsPurchase)?></td>
				<td><?//= Controller::getFloat($otherThanPurchase)?></td>
				<td><?//= Controller::getFloat($inputTaxPurchase)?></td>
				<td><?//= Controller::getFloat($grandTotal)?></td>
			</tr>
		</table>
		</div>
	</div>
	<?php
	//}else{
	?>
		<!--<div class="TC" style="margin-top:80px;font-family: Verdana;font-size:14px;color:#183867;text-align:center;font-weight:bold;" >
			No 1601E - Map.
		</div>-->
	<?php	
	//}
	?>
</div>