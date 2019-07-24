<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->auditTrial;
	// print_r($report);
	// exit;
?>
<style>
.tblCRB{
	margin-top:20px;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
	width:100%;
}
.tblCRB th{
	background:#183867;
	color:#fff;
	padding:2px;
	border:1px solid gray;
}
.tblCRB tr td{
	border:1px solid gray;
	padding:5px;
	font-size:11px;
}
.tdTotal{
	background:#183867;
	color:#fff;
	font-size:12px!important;
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
</style>
<div class="reportHolderOR">
	<div class="fromReg">
		<div class="nameText">
			<?= $org->orgName ?>
		</div>
		<div class="ORCompanyInfo">
			<input type="text" class="inpAddress" value="<?= ucwords($info->address) ?>" readonly="readonly"/>
		</div>
		<div class="ORCompanyInfo">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div class="ORCompanyInfo">
			AUDIT TRAIL REPORT
		</div>
		<div class="ORCompanyInfo">
			<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> -
			<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB">
		<?php
		// if($report):
		?>
			<tr>
				<th>No.</th>
				<th>Creation Date</th>
				<th>Time</th>
				<th>User ID</th>
				<th>Module</th>
				<th>Type of Transaction</th>
				<th>Action</th>
			</tr>
			
			<tr>
				<td>sdfsdf</td>
				<td>sdfsdf</td>
				<td>sdfdsf</td>
				<td>sdfdsf</td>
				<td>sdfsdf</td>
				<td>sdfdsf</td>
				<td>sgfsdg</td>
			</tr>
		</table>
		<!--?php else:?>	-->	
			<div class="TC noJournal">
				NO AUDIT TRAIL.
			</div>
		<!--?php
		endif;
		?>-->
	</div>
</div>
