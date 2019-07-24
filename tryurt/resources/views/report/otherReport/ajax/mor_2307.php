<?php
	$org = $this->org;
	$info = $this->info;
	$report = $this->getMOR_2307;
	
	// print_r($report);
?>
<style>
.tblCRBmor{
	margin-top:20px;
	border-collapse:collapse;
	font-family:Verdana;
	font-size:12px;
	width:100%;
}
.tblCRBmor th{
	background:#0299a2;
	color:#fff;
	padding:6px;
	border:1px solid gray;
}
.tblCRBmor tr td{
	border:1px solid gray;
	padding:5px;
	font-size:11px;
}
.textRight{
	text-align:right;
}
.textLeft{
	text-align:left;
}
.tdTotal{
	background:#0299a2;
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
.textCenter{
	text-align:center;
}
</style>
<div class="summartBilling_holder">
	<?php
	if($report){
	?>
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="nameText">
				<?= $org->orgName ?>
			</div>
			<div class="ORCompanyInfo inpAddress" readonly="readonly">
				<?= ucwords($info->address) ?>
			</div>
			<div class="ORCompanyInfo">
				VAT Reg. TIN: <?= $info->tinNum ?>
			</div>
			<br/>
			<div class="ORCompanyInfo">
				Monitoring of Received 2307
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			
			<table class="tblCRBmor">
			
				<tr>
					<th><input type="checkbox"></th>
					<th>Payment Date</th>
					<th>Payment No.</th>
					<th width="15%">OR No.</th>
					<th width="11%">Received From</th>
					<th width="11%">Received 2307</th>
				</tr>
				<?php
				foreach($report as $each){
				?>
					<tr>
						<td style="width:3%;text-align: center;"><input type="checkbox"></td>
						<td style="width:13%;" class="textCenter">
							<?= date('m/d/Y', strtotime($each['trans_date']))?>
						</td>
						<td style="width:12%;" class="textCenter">
							<?= $each['col_num']?>
						</td>
						<td class="textCenter">
							<?= $each['or_num']?>
						</td>
						<td class="textCenter">
							<?= ucwords($each['received_from'])?>
						</td>
						<td class="textCenter">
							<?= ucwords($each['received_2307'])?>
						</td>
					</tr>
				<?php
				}
				?>
				<!--<tr>
					<td></td>
					<td class="tdTotal">
						
					</td>
					<td class="textRight tdTotal">
						
					</td>
					<td class="textRight tdTotal">
						
					</td>
					<td class="textRight tdTotal">
						
					</td>
					<td class="textRight tdTotal">
						
					</td>
				</tr>-->
			</table>
			
		</div>
	</div>
	<?php
	}else{
	?>
		<div class="TC" style="margin-top:80px;font-family: Verdana;font-size:14px;color:#c51400;text-align:center;font-weight:bold;" >
			No Monitoring of Received 2307.
		</div>
	<?php	
	}
	?>
</div>