<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="collected_report.xls"');
?>
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
.reportHolderOR{
	width: 50% !important;
	text-align:center !important;
	padding-left:30px !important;
}
.tblShowReport{
	width:50% !important;
	text-align:center !important;
}
.exportHolder{
	font-family: Verdana !important;
	margin-left: 15px !important;
	text-align: center !important;
	height:auto!important !important;
	margin-top:20px !important;
	font-size:12px !important;
	font-weight:bold !important;
}
.orgName{
	font-size:14px !important;
	font-family:Verdana !important;
	text-transform: uppercase !important;
	font-weight: bold !important;
}
.reportTh{
	background-color: #BE3323 !important;
	color: white !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.reportTd{
	color: #000 !important;
	padding: 5px !important;
	height: 27px !important;
	border: solid 1px #000 !important;
}
.titleUp{
	font-weight:bold !important;
}
.tdTotal{
	border: solid 1px #000 !important;
}
</style>
<div class="collection_holder">
	<div class="reportHolderOR">
		<div class="fromReg exportHolder">
			<div class="nameText orgNameNew" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
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
			
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php
				if($_POST['client'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_POST['client']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Customers';
				}
				?>
			</div>
				
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d, Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
			</div>
		</div>
		<br>
		<?php
			if($report){
				if($_POST['collection'] == 'billing'){
		?>
		<table class="tblShowReport">
			<tr>
				<th style="text-align: left;" class="reportTh">
					Payment Date
				</th>
				<th style="text-align: left;" class="reportTh">
					Billing/OR No.
				</th>
				<th style="text-align: left;" class="reportTh">
					Collection/Trans No.
				</th>
				<th style="text-align: left;" class="reportTh">
					Customer Name
				</th>
				<th style="text-align: left;" class="reportTh">
					Status
				</th>
				<th style="text-align: left;" class="reportTh">
					Reversed Date
				</th>
				<th style="text-align: right;border:solid 1px #000;" class="reportTh">
					Amount
				</th>
				
			</tr>
		<?php
			$amountTotal = '';
				foreach($report as $each){
					$amountTotal =(float)$amountTotal +  round((float)($each['amount_received']),2);
		?>
			<tr>
				<td style="text-align: left;" class="reportTd">
					<?= date('m/d/Y',strtotime($each['date_received'])) ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['invoice_number'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['col_num'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['client_name'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= ucfirst($each['status']) ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= 
						($each['date_reversed'] != '0000-00-00') ? 
							date('m/d/Y',strtotime($each['date_reversed'])) : ''
					?>
				</td>
				<td class="tr reportTd" style="text-align: right;border:solid 1px #000;" class="">
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
				<th style="text-align: left;" class="reportTh">
					Payment Date
				</th>
				<th style="text-align: left;" class="reportTh">
					SI No.
				</th>
				<th style="text-align: left;" class="reportTh">
					CM/Ref. SR No.
				</th>
				<th style="text-align: left;" class="reportTh">
					Customer Name
				</th>
				<th style="text-align: left;" class="reportTh">
					Status
				</th>
				<th style="text-align: left;" class="reportTh">
					Reversed Date
				</th>
				<th style="text-align: right;" class="reportTh">
					Amount
				</th>
				
			</tr>
		<?php
			$amountTotal = '';
				foreach($report as $each){
					$amountTotal = (float)$amountTotal + round((float)($each['amount_received']),2);
		?>
			<tr>
				<td style="text-align: left;" class="reportTd">
					<?= date('m/d/Y',strtotime($each['date_received'])) ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['sales_invoice_no'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['sales_col_num'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= $each['client_name'] ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= ucfirst($each['status']) ?>
				</td>
				<td style="text-align: left;" class="reportTd">
					<?= 
						($each['date_reversed'] != '0000-00-00') ? 
							date('m/d/Y',strtotime($each['date_reversed'])) : ''
					?>
				</td>
				<td class="tr reportTh" style="text-align: right;border:solid 1px #000;">
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