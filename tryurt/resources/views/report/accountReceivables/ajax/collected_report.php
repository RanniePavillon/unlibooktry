<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->collectedReport;
?>
<style>
.tdTotal{
	background:#BE3323;
	color:#fff;
	font-size:12px!important;
	font-weight:bold;
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
</style>
<div class="collection_holder">
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText orgNameNew">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				<?php
				if($report){
					if($_POST['collection'] == 'billing'){
						echo 'BILLING COLLECTION REPORT'
				?>
				<?php
				} else{
					echo 'SALES COLLECTION REPORT'
				?>
				<?php
				} 
				?>
				<?php
				} 
				?>
			</div>
			
			<div class="ORCompanyInfo">
				<?php
				if($_POST['client'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_POST['client']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Customers';
				}
				?>
			</div>
				
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d, Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<?php
			if($report){
				if($_POST['collection'] == 'billing'){
		?>
		<table class="tblShowReport">
			<tr>
				<th>
					Payment Date
				</th>
				<th style="text-align:center;">
					Billing/OR No.
				</th>
				<th style="text-align:center;">
					Collection/Trans No.
				</th>
				<th>
					Customer Name
				</th>
				<th>
					Status
				</th>
				<th>
					Reversed Date
				</th>
				<th style="text-align:right!important;">
					Amount
				</th>
				
			</tr>
		<?php
			$amountTotal = '';
				foreach($report as $each){
					$amountTotal = (float)$amountTotal + round((float)($each['amount_received']),2);	
		?>
			<tr>
				<td>
					<?= date('m/d/Y',strtotime($each['date_received'])) ?>
				</td>
				<td>
					<?= $each['invoice_number'] ?>
				</td>
				<td>
					<?= $each['col_num'] ?>
				</td>
				<td>
					<?= $each['client_name'] ?>
				</td>
				<td>
					<?= ucfirst($each['status']) ?>
				</td>
				<td>
					<?= 
						($each['date_reversed'] != '0000-00-00') ? 
							date('m/d/Y',strtotime($each['date_reversed'])) : ''
					?>
				</td>
				<td class="tr">
					<?= Controller::getFloat($each['amount_received']) ?>
				</td>
			</tr>
		
		<?php
				}
		?>
			<tr>
				<td colspan="6" class="tdTotal">
					Total
				</td>
				<td style="text-align:right" class="tdTotal">
					<?= Controller::getFloat($amountTotal)?>
				</td>
			</tr>
		
		</table>
		
		<!--for sales-->
		<?php
		}else{
		?>	
		<table class="tblShowReport">
			<tr>
				<th>
					Payment Date
				</th>
				<th style="text-align:center;">
					SI No.
				</th>
				<th style="text-align:center;">
					CM/Ref. SR No.
				</th>
				<th>
					Customer Name
				</th>
				<th>
					Status
				</th>
				<th>
					Reversed Date
				</th>
				<th style="text-align:right!important;">
					Amount
				</th>
				
			</tr>
		<?php
			$amountTotal = '';
				foreach($report as $each){
					$amountTotal = (float)$amountTotal +  round((float)($each['amount_received']),2);
		?>
			<tr>
				<td>
					<?= date('m/d/Y',strtotime($each['date_received'])) ?>
				</td>
				<td>
					<?= $each['sales_invoice_no'] ?>
				</td>
				<td>
					<?= $each['sales_col_num'] ?>
				</td>
				<td>
					<?= $each['client_name'] ?>
				</td>
				<td>
					<?= ucfirst($each['status']) ?>
				</td>
				<td>
					<?= 
						($each['date_reversed'] != '0000-00-00') ? 
							date('m/d/Y',strtotime($each['date_reversed'])) : ''
					?>
				</td>
				<td class="tr">
					<?= Controller::getFloat($each['amount_received']) ?>
				</td>
			</tr>
		
		<?php
				}
		?>
			<tr>
				<td colspan="6" class="tdTotal">
					Total
				</td>
				<td style="text-align:right" class="tdTotal">
					<?= Controller::getFloat($amountTotal)?>
				</td>
			</tr>
		
		</table>
		<?php
			}
			} else {
				echo'<div style="margin-top:80px;font-weight:bold;color:#183867;font-family:Verdana;font-size:14px;text-align:center;" >';
				echo 'NO COLLECTION.';
				echo'</div>';
			}
		?>
	</div>
</div>	