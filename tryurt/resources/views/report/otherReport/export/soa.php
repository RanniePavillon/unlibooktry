<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="statement_of_account.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	// $report = $this->outstandingReceivable;
	// echo '<pre>';
	// print_R($report);
	// echo '</pre>';
?>
<style>
.tdTotal{
	background: #BE3323;
	color:#fff;
	font-size:13px!important;
	font-weight:bold;
}
.inpAddress{
	width: 227px;
	height: 40px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
}
.tblShowReport{
	border-collapse: collapse;
	margin-top: 30px;
	width: 97%;
	font-family: Tahoma;
	font-size: 13px;
	margin-left: 10px;
}
.tblShowReport th{
	border: 1px solid gray;
	font-size: 12px;
	font-weight: bold;
	background-color:#BE3323;
	padding: 6px;
	color: #fff;
	text-align: left;
	font-family: Verdana;
}
.tdTotal{
	background-color:#BE3323;
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
.outstanding_holder{
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
<?php
	$soa = $this->genClient_soa;
	
?>
<div class="outstanding_holder">
	<?php
		if($soa){
	?>
	<div class="reportHolderOR">
		
		<div class="fromReg exportHolder">
			<div class="nameText" style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				STATEMENT OF ACCOUNT
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php
				if($_GET['clientId'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_GET['clientId']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Clients';
				}
				?>
			</div>
			<div class="ORCompanyInfo" style="font-weight:bold;">
				<?php echo (isset($_GET['from']))? date('F d, Y',strtotime($_GET['from'])) : date('F d, Y') ?> - 
				<?php echo (isset($_GET['to']))? date('F d, Y',strtotime($_GET['to'])) : date('F d, Y')?>
			</div>
		</div>
		<br>
		<table class="tblShowReport">
			<tr>
				<td colspan="10">
				</td>
			</tr>
			<tr>
				<th class="reportTh" style="text-align:left !important;">
					Date
				</th>
				<th class="reportTh" style="text-align:left !important;">
					Particulars
				</th>
				<th class="reportTh" style="text-align:left !important;">
					Billing No.
				</th>
				<th class="reportTh" style="text-align:left !important;">
					Client Name
				</th>
				<th class="reportTh" style="text-align:right !important;">
					Professional Fee
				</th>
				<th class="reportTh" style="text-align:right !important;">
					VAT
				</th>
				<!--<th class="th hidden" style="text-align:center!important;">
					OPE
				</th>-->
				<th class="reportTh" style="text-align:right !important;">
					Advance Payment
				</th>
				<th class="reportTh" style="text-align:right !important;">
					Payment
				</th>
				<th class="reportTh" style="text-align:right !important;">
					Date Collected
				</th>
				<th class="reportTh" style="text-align:right !important;">
					Amount
				</th>
			</tr>
		<?php
		$totalProf = '';
		$totalVAT = '';
		$totalOPE = '';
		$totalAP = '';
		$totalP = '';
		$totalA = '';
		foreach($soa as $each){
			$totalProf = (float)$totalProf + round((float)$each['professional_fee']);
			$totalVAT = (float)$totalVAT + round((float)$each['vat_amount']);
			$totalOPE = (float)$totalOPE  + round((float)$each['OPE']);
			$totalAP = (float)$totalAP + round((float)$each['advance_payment']);
			$totalP = (float)$totalP + round((float)$each['payment']);
			$totalA = (float)$totalA + round((float)$each['amount']);
		?>
		<tr>
			<td style="text-align: left;" class="reportTd">
				<?= date('m/d/Y',strtotime($each['date_issued']))?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?= $each['particular']?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?= $each['invoice_number']?>
			</td>
			<td style="text-align: left;" class="reportTd">
				<?= ucwords($each['client_name'])?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= Controller::getFloat($each['professional_fee'])?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= Controller::getFloat($each['vat_amount'])?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= Controller::getFloat($each['advance_payment'])?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= Controller::getFloat($each['payment'])?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= $each['date_received']?>
			</td>
			<td style="text-align: right;" class="reportTd">
				<?= Controller::getFloat($each['amount'])?>
			</td>
		</tr>
		<?php
		}
		?>
		<tr>
			<td colspan="3" style="text-align:left;" class="tdTotal">
				Total
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalProf)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalVAT)?>
			</td>
			<td class="hidden" style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalOPE)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalAP)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalP)?>
			</td>
			<td style="text-align:right;" class="tdTotal">
				
			</td>
			<td style="text-align:right;" class="tdTotal">
				<?= Controller::getFloat($totalA)?>
			</td>
		</tr>
		<tr>
			<td colspan="10">
			</td>
		</tr>
		<tr>
			<td colspan="10">
			</td>
		</tr>
		<tr>
			<td colspan="2" style="font-family:Arial;font-size:13px;font-weight:bold;">
				Received By:
			</td>
		</tr>
		<tr>
			<td colspan="10">
			</td>
		</tr>
		<tr>
			<td colspan="2" style="font-family:Arial;font-size:13px;font-weight:bold;border-bottom: 1px solid black;">
			</td>
		</tr>
		<tr>
			<td colspan="2" style="font-family:Arial;font-size:13px;font-weight:bold;">
				Signature Over Printed Name/Date
			</td>
		</tr>
		
		</table>
		
		
	</div>
	<?php
	}else{
	?>
		<div style="  margin-top: 80px;font-weight: bold;color: #183867;font-family: Verdana;font-size: 14px;text-align: center;">
			YOU DON'T HAVE STATEMENT OF ACCOUNT
		</div>
	<?php
	}
	?>
</div>	