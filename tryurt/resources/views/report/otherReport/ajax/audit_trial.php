<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->auditTrial;
	// $report = $this->auditTrial;
?>
<style>
.inpAddressAT{
	width: 310px;
	word-break: break-word;
	border: none;
	text-align: center;
	font-weight: bold;
	padding-bottom: 5px;
	font-family: Verdana;
	font-size: 12px;
	margin-left:185px;
}
</style>
<div class="reportHolderOR reportHolderORaudit">
	<?php
		if($this->auditTrial){
			$num = 0;
	?>
	<div class="fromReg fromRegaudit">
		<div class="nameText orgNameNew">
			<?= ucwords($org->orgName) ?>
		</div>
		<div class="ORCompanyInfo inpAddressAT" readonly="readonly">
			<?= ucwords($info->address) ?>
		</div>
		<div class="ORCompanyInfo">
			<?= $info->typeOfTax == 'vat' ? 'Vat' : 'Non-Vat'?> Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div class="ORCompanyInfo">
			AUDIT TRAIL
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d, Y',strtotime($_POST['startdate'])) : date('F d, Y') ?> - 
			<?php echo (isset($_POST['enddate']))? date('F d, Y',strtotime($_POST['enddate'])) : date('F d, Y')?>
		</div>
		
		<table class="tblCRB tblCRBcash audittableprint">
		
			<tr>
				<th>No.</th>
				<th>Creation Date</th>
				<th>Time</th>
				<th class="hidden">User ID</th>
				<th>Module</th>
				<th>Type of Transaction</th>
				<th>Action</th>
			</tr>
		<?php foreach($this->auditTrial as $each){ ?>
			<tr>
				<td><?= ++$num ?></td>
				<td><?= date('m/d/Y',strtotime($each->dateTime)) ?></td>
				<td><?= date('h:i a',strtotime($each->dateTime)) ?></td>
				<td class="hidden"><?= $each->userId ?></td>
				<td><?= getModule($each->typeOfTransaction) ?></td>
				<td><?= $each->typeOfTransaction ?></td>
				<td><?= $each->action ?></td>
			</tr>
		<?php } ?>
		</table>
		<!--?php else:?>-->		
			<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
				<!--NO AUDIT TRAIL.-->
			</div>
		<?php
		}else{
		?>
			<div style="margin-top: 80px;font-weight:bold;color:#183867;font-family: Verdana;font-size:14px;text-align:center;">
				No Audit Trail Report.
			</div>
		<?php
		}
		?>
	</div>
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