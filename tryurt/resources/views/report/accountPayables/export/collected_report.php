<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="collected_report.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->collectedReport;
	// echo '<pre>';
	// print_R($report);
	// echo '</pre>';
?>
<style>
	.reportHolderOR{
		width: 50%;
		text-align:center;
		padding-left:30px;
	}
	.tblShowReport{
		width:50%;
		text-align:center;
	}
</style>
<div class="reportHolderOR">
	<div style="font-family: Agency FB;width: 695px;text-align: center;padding-top: 20px;height: auto!important;">
		<div style="font-size:14px;font-family:Verdana;text-transform: uppercase;font-weight: bold;">
			<?= $org->orgName ?>
		</div>
		<div style="font-size:12px;font-family:Verdana;font-weight: bold;">
			<?= $info->address ?>
		</div>
		<div style="font-size:12px;font-family:Verdana;font-weight: bold;">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="font-size:12px;font-family:Verdana;font-weight: bold;">
			Collected Report
		</div>
		<div style="font-size:12px;font-family:Verdana;font-weight: bold;">
			<?php
				if($_GET['client'] != '%%'){
					$clientName = DAOFactory::getTblClientDAO()->load($_GET['client']);
					echo 'For Client ' . $clientName->clientName;
				}else{
					echo 'For All Clients';
				}
			?>
		</div>
		<div style="font-size:12px;font-family:Verdana;font-weight: bold;">
			<?php echo (isset($_GET['startdate']))? date('F d,Y',strtotime($_GET['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_GET['enddate']))? date('F d,Y',strtotime($_GET['enddate'])) : date('F d,Y')?>
		</div>
	</div>
	
	<table class="tblShowReport" style="border-collapse: collapse;margin-top: 30px;font-family: Verdana;font-size: 12px;margin-left: 10px;">
		<tr>
			<td colspan="5">
			</td>
		</tr>
		<tr>
			<td colspan="5">
			</td>
		</tr>
	<?php
		if($report){
	?>
		<tr>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: left;font-family: Verdana;">
				Payment Date
			</th>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: left;font-family: Verdana;">
				Invoice No.
			</th>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: left;font-family: Verdana;">
				Collected No.
			</th>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: left;font-family: Verdana;">
				Status
			</th>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: left;font-family: Verdana;">
				Reversed Date
			</th>
			<th style="border: 1px solid #000;font-size: 12px;font-weight: bold;background:#183867;padding: 6px;color: #fff;text-align: right;font-family: Verdana;">
				Amount
			</th>
			
		</tr>
	<?php
		$amountTotal = '';
			foreach($report as $each){
				$amountTotal += round(floatval($each['amount_received']),2);
	?>
		<tr>
			<td style="border:1px solid #000;padding:5px; text-align:right!important;">
				<?= date('F d, Y',strtotime($each['date_received'])) ?>
			</td>
			<td style="float:left!important;border:1px solid #000;padding:5px;">
				<?= $each['invoice_number'] ?>
			</td>
			<td style="float:left!important;border:1px solid #000;padding:5px;">
				<?= $each['col_num'] ?>
			</td>
			<td style="float:left!important;border:1px solid #000;padding:5px;">
				<?= ucfirst($each['status']) ?>
			</td>
			<td style="float:left!important;border:1px solid #000;padding:5px;">
				<?= 
					($each['date_reversed'] != '0000-00-00') ? 
						date('F d, Y',strtotime($each['date_reversed'])) : ''
				?>
			</td>
			<td style="text-align: right !important;border:1px solid #000;padding:5px;">
				<?= Controller::getFloat($each['amount_received']) ?>
			</td>
		</tr>
	<?php
			}
	?>
		 <tr>
			<td colspan="5" style="border:1px solid #000;">
				Total
			</td>
			<td style="text-align:right;border:1px solid #000;">
				<?= Controller::getFloat($amountTotal)?>
			</td>
		</tr>
	</table>
	<?php
		} else {
			echo'<div style="margin-top:-250px;margin-left: 80px; position:absolute;left:50%; text-align:center;" >';
			echo 'NO Report.';
			echo'</div>';
		}
	?>
</div>		