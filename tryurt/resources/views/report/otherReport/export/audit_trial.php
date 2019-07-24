<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="audit_trail.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->auditTrial;
	// $report = $this->auditTrial;
?>
<style>
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
.tr-bg
{
	background-color: #BE3323;
	color: #fff;
	font-weight: 600;
}
</style>
<div class="reportHolderOR reportHolderORaudit">
	<?php
		if($this->auditTrial){
			$num = 0;
	?>
	<div class="fromReg fromRegaudit" style="font-family: verdana;text-align: center !important;height:auto!important;padding-top:20px;">
		<div class="exportHolder">
			<div style="font-weight:bold;">
				<?= $org->orgName ?>
			</div>
			<div style="font-weight:bold;">
				<?= ucwords($info->address) ?>
			</div>
			<div style="font-weight:bold;">
				<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div style="font-weight:bold;">
				AUDIT TRAIL
			</div>
			<div style="font-weight:bold;">
				<?php echo (isset($_GET['from']))? date('F d,Y',strtotime($_GET['from'])) : date('F d,Y') ?> - 
				<?php echo (isset($_GET['to']))? date('F d,Y',strtotime($_GET['to'])) : date('F d,Y')?>
			</div>
		</div>
		
		<table class="tblCR" style="font-family:Verdana;font-size:12px;width: 70% !important;">
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr>
				<td colspan="6">
				</td>
			</tr>
			<tr class="tr-bg">
				<th style="text-align: left;" class="reportTh">No.</th>
				<th style="text-align: left;" class="reportTh">Creation Date</th>
				<th style="text-align: left;" class="reportTh">Time</th>
				<th style="text-align: left;" class="reportTh">Module</th>
				<th style="text-align: left;" class="reportTh">Type of Transaction</th>
				<th style="text-align: left;" class="reportTh">Action</th>
			</tr>
		<?php foreach($this->auditTrial as $each){ ?>
			<tr>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= ++$num ?></td>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= date('m/d/Y',strtotime($each->dateTime)) ?></td>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= date('h:i a',strtotime($each->dateTime)) ?></td>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= getModule($each->typeOfTransaction) ?></td>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= $each->typeOfTransaction ?></td>
				<th style="text-align: left;font-weight:normal;" class="reportTd"><?= $each->action ?></td>
			</tr>
		<?php } ?>
		</table>
		
		
	</div>
	<?php
	}else{
	?>
		<div style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;">
			YOU DON'T HAVE AUDIT TRAIL REPORT
		</div>
	<?php
	}
	?>
</div>
<?php
	function getModule($type){
		$type = strtolower($type);
		if(
			$type == 'cash receipt' ||
			$type == 'billing' ||
			$type == 'collection' ||
			$type == 'client' ||
			$type == 'service item'
			){
			return 'BILLINGS';
		} elseif (
			$type == 'expense' ||
			$type == 'vendor'
			){
			return 'EXPENSES';
		}
		return 'USER';
	}