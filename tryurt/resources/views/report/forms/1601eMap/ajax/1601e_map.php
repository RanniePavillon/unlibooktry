<?php
	$org = $this->org;
	$info = $this->info;
	// $report = $this->getMOR_2307;
	
	// print_r($report);
?>
<style>


</style>
<div class="summartBilling_holder">
	<?php
	//if($report){
	?>
	<div class="reportHolderOR">
		<div class="fromReg">
			<div class="ORCompanyInfo">
				BIR FORM 1601E - SCHEDULE I
			</div>
			<div class="ORCompanyInfo">
				ALPHABETICAL LIST OF PAYEES FROM WHOM TAXES WERE WITHHELD
			</div>
			<div class="ORCompanyInfo" readonly="readonly">
				FOR THE MONTH OF July , 2015
			</div>
			<br/>
			<div class="ORCompanyInfo">
				TIN: <?= $info->tinNum ?>
			</div>
			<div class="ORCompanyInfo">
				WITHHOLDING AGENT'S NAME:
			</div>
			<div class="ORCompanyInfo">
				<?php echo (isset($_POST['startdate']))? date('F d,Y',strtotime($_POST['startdate'])) : date('F d,Y') ?> - 
				<?php echo (isset($_POST['enddate']))? date('F d,Y',strtotime($_POST['enddate'])) : date('F d,Y')?>
			</div>
			
			<table class="tblCRB">
			<tr>
				<th>Seq No.</th>
				<th>Taxpayer Identification Number</th>
				<th>Corporation</th>
				<th>Individual</th>
				<th>ATC Code</th>
				<th>Nature of Payment</th>
				<th>Amount of Income Payment</th>
				<th>Tax Rate</th>
				<th>Amount of Tax Withheld</th>
			</tr>
			<?php
			// if(isset($report) && !empty($report)){
				// foreach($report as $each){
			?>
					<tr>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= $each['itr_code']?></td>
						<td class="textCenter"><?//= ucwords($each['final'])?></td>
					</tr>
			<?php
				// }
			// }
			?>
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