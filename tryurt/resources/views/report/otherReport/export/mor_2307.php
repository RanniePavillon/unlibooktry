<?php
	header('Content-type: application/excel');
	header('Content-Disposition: attachment; filename="mor_2307.xls"');
?>
<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getMOR_2307;
?>
<style>

.reportHolderOR{
		width: 50%;
		text-align:center;
		padding-left:30px;
}
.tblCRB{
	padding-top:100px;
	width:50%;
	
}
</style>
<div class="reportHolderOR">
	<?php
	if($report):
	?>
	<div class="fromReg" style="font-family: verdana;margin-left: 15;text-align: center;height:auto!important;padding-top:20px;"> 
		<div style="font-size: 19px;text-transform: uppercase;font-weight: bold;letter-spacing: 1;font-family: verdana;">
			<?= $org->orgName ?>
		</div>
		<div style="letter-spacing:1;font-size:12px;font-family:Verdana;font-weight: bold;">
			<?= $info->address ?>
		</div>
		<div style="letter-spacing:1;font-size:12px;font-family:Verdana;font-weight: bold;">
			VAT Reg. TIN: <?= $info->tinNum ?>
		</div>
		<br/>
		<div style="letter-spacing:1;font-size:12px;font-family:Verdana;font-weight: bold;">
			Monitoring of Received 2307
		</div>
		<div style="letter-spacing:1;font-size:12px;font-family:Verdana;font-weight: bold;">
			<?php echo (isset($_GET['startdate']))? date('F d,Y',strtotime($_GET['startdate'])) : date('F d,Y') ?> - 
			<?php echo (isset($_GET['enddate']))? date('F d,Y',strtotime($_GET['enddate'])) : date('F d,Y')?>
		</div>
		
		<table class="tblCRB" style="margin-top:20px;border-collapse:collapse;font-family:Verdana;font-size:12px;">
		
			<tr>
				<td colspan="5">
				</td>
			</tr>
			<tr>
				<td colspan="5">
				</td>
			</tr>
			<tr>
				<th style="background:#BE3323;color:#fff;padding:2px;border:1px solid #000;text-align:left;">Collection Date</th>
				<th style="background:#BE3323;color:#fff;padding:2px;border:1px solid #000;text-align:left;">Collection No.</th>
				<th width="15%" style="background:#BE3323;color:#fff;padding:2px;border:1px solid #000;text-align:left;">OR No.</th>
				<th width="18%" style="background:#BE3323;color:#fff;padding:2px;border:1px solid #000;text-align:left;">Received From</th>
				<th width="11%" style="background:#BE3323;color:#fff;padding:2px;border:1px solid #000;text-align:center;">Received 2307</th>
			</tr>
			<?php
			foreach($report as $each){
			?>		
				<tr>
					<td style="border:1px solid #000;text-align:left;"><?= date('m/d/Y', strtotime($each['trans_date']))?></td>
					<td style="text-align:center;border:1px solid #000;text-align:left;"><?= $each['col_num']?></td>
					<td style="text-align:center;border:1px solid #000;text-align:left;"><?= $each['or_num']?></td>
					<td style="text-align:center;border:1px solid #000;text-align:left;"><?= ucwords($each['received_from'])?></td>
					<td style="text-align:center;border:1px solid #000;text-align:center;"><?= ucwords($each['received_2307'])?></td>
				</tr>
			<?php
			}
			?>
		</table>
		
	</div>
	<?php else:?>		
		<div class="TC" style="margin-top: 80px;font-family: Verdana;font-size: 15px;text-align: center;width:720px;" >
			Monitoring of Received 2307
		</div>
	<?php
	endif;
	?>
</div>
