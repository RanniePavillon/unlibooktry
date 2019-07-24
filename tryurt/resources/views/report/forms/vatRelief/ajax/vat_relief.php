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
				SALES TRANSACTION
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
				ADDRESS:
			</div>
			
			<table class="tblCRB">
				<tr>
					<th>Taxable Month</th>
					<th>Taxpayer Identification No.</th>
					<th>Registered Name</th>
					<th>Name of Customer</th>
					<th>Customer's Address</th>
					<th>Amount of Gross Sales</th>
					<th>Amount of Exempt Sales</th>
					<th>Amount of Zero Rated Sales</th>
					<th>Amount of Taxable Sales</th>
					<th>Amount of Output Tax</th>
					<th>Amount of Gross Taxable Sales</th>
				</tr>
			<?php
			// if(isset($report) && !empty($report)){
				// foreach($report as $each){
			?>
				<tr>
					<td><?//= date('m/t/Y', strtotime($each['trans_date']))?></td>
					<td style="width:190px;"><?//= $each['tin_num']?></td>
					<td><?//= $each['name']?></td>
					<td><?//= $each['name']?></td>
					<td><?//= $each['address']?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['gross_sales'])?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['Exempt'])?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['Zero'])?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['Taxable'])?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['output_vat'])?></td>
					<td style="text-align:right;"><?//= Controller::getFloat($each['gross_taxable'])?></td>
				</tr>
			<?php
				// }
			// }
			?>
			<tr class="footertable">
				<td colspan="5" style="text-align:center;">Grand Total:</td>
				<td style="text-align:right;"><?//= Controller::getFloat($grossSales)?></td>
				<td style="text-align:right;"><?//= Controller::getFloat($exemptSales)?></td>
				<td style="text-align:right;"><?//= Controller::getFloat($zeroRatedSales)?></td>
				<td style="text-align:right;"><?//= Controller::getFloat($taxableSales)?></td>
				<td style="text-align:right;"><?//= Controller::getFloat($outputSales)?></td>
				<td style="text-align:right;"><?//= Controller::getFloat($grossTaxableSales)?></td>
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