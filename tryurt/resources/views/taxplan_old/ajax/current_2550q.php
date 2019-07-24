<?php
	// $org = $this->org;
	// $info = $this->info;
	// $report = $this->form2550q;
	// $report2 = $this->form2550qOpen;
?>
<style>
.currentHolder{
	width: 895px;
	box-shadow: 1px 1px 2px 2px #c8c8c8;
	margin:30px auto;
	overflow: scroll;
	height:590px !important;
}
.transHistory{
	background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 140px;
    height: 25px;
    font-weight: bold;
    cursor: pointer;
}
.containerForm{
	font-family:Verdana;
	font-size:12px;
	width: 96%;
	margin-left: 15px;
	text-align: center;
	height: auto!important;
	padding-top: 20px;
}
.tblCRB{
	margin-top: 20px;
	border-collapse: collapse;
	font-family: Verdana;
	font-size: 12px;
	border: 1px solid #c8c8c8;
	width: 100%;
}
.tblCRB th {
    background: #183867;
    color: #fff;
    padding:0px;
    border: 1px solid #c8c8c8;
}
.tblCRB td{
	border:1px solid #c8c8c8;
	padding:5px;	
}
.viewPreviewMode {
    background-color: #183867;
    color: #fff;
    font-family: Verdana;
    font-size: 12px;
    border: none;
    border-radius: 5px;
    width: 130px;
    height: 25px;
    font-weight: bold;
}
</style>
<div class="currentHolder">
	<div style="margin-top:20px;margin-left:15px;">
		<input type="button" value="Transaction History" class="transHistory">
	</div>
	<div class="containerForm">
			<!---?php
				if ($report){
			?-->
		<div class="ORCompanyInfo">
			QUARTERLY VALUE-ADDED TAX DECLARATION - 2550Q
		</div>
		<table class="tblCRB">
			<tr>
				<th colspan="2">SALES</th>
				<th>Open</th>
				<th>Posted</th>
				<th>Total Sales/Receipt <br/>for the Quarter (Exc. of VAT)</th>
				<th>Output Tax Due for the Quarter</th>
			</tr>
			
			<!--?php if($report->part2Item15A || $report2->part2Item15A){
					
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Vatable Sales/Reciept - Private (sch.1)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item15A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item15A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item15A + $report->part2Item15A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item15B + $report2->part2Item15B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item16A || $report2->part2Item16A){
				
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Sales to Government</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item16A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16A + $report2->part2Item16A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item16B + $report2->part2Item16B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item17){
				
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Zero Rated Sales/Receipts</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item17) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item17) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item17 + $report->part2Item17) ?--></td>
				<td></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item18){
				
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Exempt Sales/Receipts</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item18) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item18 + $report2->part2Item18) ?--></td>
				<td></td>
			</tr>
			<!--?php } ?-->
		
			<!--?php if($report->part2Item19A || $report2->part2Item19A){
				
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Sales Receipt and Output Tax Due</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item19A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19A + $report2->part2Item19A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19B + $report2->part2Item19B) ?--></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item15A || $report->part2Item16A || $report->part2Item17 || $report->part2Item18 || 
				$report2->part2Item15A || $report2->part2Item16A || $report2->part2Item17 || $report2->part2Item18
			){
				$report->part2Item19A = $report->part2Item15A + $report->part2Item16A + $report->part2Item17 + $report->part2Item18;
				$report2->part2Item19A = $report2->part2Item15A + $report2->part2Item16A + $report2->part2Item17 + $report2->part2Item18;
				$report->part2Item19B = $report->part2Item15B + $report->part2Item16B;
				$report2->part2Item19B = $report2->part2Item15B + $report2->part2Item16B;
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Sales Receipt and Output Tax Due</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19A + $report2->part2Item19A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item19B + $report2->part2Item19B) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php
				if(
					$report->part2Item20A  || $report->part2Item20B || $report->part2Item20C || $report->part2Item20D || $report->part2Item20E || $report->part2Item20F || 
					$report2->part2Item20A  || $report2->part2Item20B || $report2->part2Item20C || $report2->part2Item20D || $report2->part2Item20E || $report2->part2Item20F
				){
			?-->
			<tr>
				<td class="leftAlign" colspan="6">Less: Allowable Input Tax</td>
			</tr>
			<!--?php
				}
			?-->
			<!--?php if($report->part2Item20A || $report->part2Item20A){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Carried Over from Previous Quarter</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20A) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20A + $report2->part2Item20A) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item20B || $report2->part2Item20B){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax Deferred on Capital Goods Exceeding 1Million from Previous Quarter</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20B) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20B + $report2->part2Item20B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item20C || $report2->part2Item20C){
			
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Transitional Input Tax</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20C) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20C + $report2->part2Item20C) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item20D || $report2->part2Item20D){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Presumptive Input Tax</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20D) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20D) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20D + $report2->part2Item20D) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item20E || $report2->part2Item20E){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20E) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20E + $report2->part2Item20E) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item20F || $report->part2Item20F){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 20A,20B,20C,20D & 20E)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item20F) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F + $report2->part2Item20F) ?--></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item20A + $report->part2Item20B + $report->part2Item20C + $report->part2Item20D + $report->part2Item20E || 
				$report2->part2Item20A + $report2->part2Item20B + $report2->part2Item20C + $report2->part2Item20D + $report2->part2Item20E 
			) {
				$report->part2Item20F = $report->part2Item20A + $report->part2Item20B + $report->part2Item20C + $report->part2Item20D + $report->part2Item20E;
				$report2->part2Item20F = $report2->part2Item20A + $report2->part2Item20B + $report2->part2Item20C + $report2->part2Item20D + $report2->part2Item20E;
			?-->	
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 20A,20B,20C,20D & 20E)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item20F + $report2->part2Item20F) ?--></td>
			</tr>		
			<!--?php } ?-->
			
			<tr>
				<th colspan="2">PURCHASES</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			
			<!--?php
				if(
				$report->part2Item21A || $report->part2Item21C || $report->part2Item21E || $report->part2Item21G || 
				$report->part2Item21I|| $report->part2Item21K || $report->part2Item21M || $report->part2Item21N || $report->part2Item21P || 
				$report2->part2Item21A || $report2->part2Item21C || $report2->part2Item21E || $report2->part2Item21G || 
				$report2->part2Item21I|| $report2->part2Item21K || $report22->part2Item21M || $report2->part2Item21N || $report2->part2Item21P
				){
			?-->
			<tr>
				<td class="leftAlign" colspan="6">Current Transactions</td>
			</tr>
			<!--?php
				}
			?-->
			
			<!--?php if($report->part2Item21A || $report2->part2Item21A){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods not exceeding 1Million (see sch.2)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21A + $report2->part2Item21A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21B + $report2->part2Item21B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21C || $report2->part2Item21C){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchase of Capital of Goods exceeding 1Million (see sch.3)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21C + $report2->part2Item21C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21D + $report2->part2Item21D) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21E || $report2->part2Item21E){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchases of Goods Other than Capital Goods</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21E + $report2->part2Item21E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21F + $report2->part2Item21F) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21G || $report2->part2Item21G){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Importation of Goods Other than Capital Goods</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21G) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21G) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21G + $report2->part2Item21G) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21H + $report2->part2Item21H) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21I || $report2->part2Item21I){
			
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Domestic Purchase of Services</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21I) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21I) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21I + $report2->part2Item21I) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21J + $report2->part2Item21J) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21K || $report2->part2Item21K){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Services rendered by Non-residents</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21K) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21K) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21K + $report2->part2Item21K) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21L + $report2->part2Item21L) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21M || $report2->part2Item21M){
			
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Purchases not Qualified for Input Tax</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21M) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21M) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21M + $report2->part2Item21M) ?--></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21N || $report->part2Item21N){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21N) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21N) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21N + $report2->part2Item21N) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21O + $report2->part2Item21O) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item21P || $report2->part2Item21P){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Current Purchases</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item21P) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21P) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21P + $report2->part2Item21P) ?--></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item21A || $report->part2Item21C || $report->part2Item21E || $report->part2Item21G || $report->part2Item21I || $report->part2Item21K || $report->part2Item21M || $report->part2Item21N ||
				$report2->part2Item21A || $report2->part2Item21C || $report2->part2Item21E || $report2->part2Item21G || $report2->part2Item21I || $report2->part2Item21K || $report2->part2Item21M || $report2->part2Item21N
			){
				$report->part2Item21P = $report->part2Item21A + $report->part2Item21C + $report->part2Item21E + $report->part2Item21G + $report->part2Item21I + $report->part2Item21K + $report->part2Item21M + $report->part2Item21N;
				$report2->part2Item21P = $report2->part2Item21A + $report2->part2Item21C + $report2->part2Item21E + $report2->part2Item21G + $report2->part2Item21I + $report2->part2Item21K + $report2->part2Item21M + $report2->part2Item21N;
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Current Purchases</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item21P + $report2->part2Item21P) ?--></td>
				<td class="rightAlign"></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item22 || $report2->part2Item22){ ?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Available Input Tax</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item22) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item20F || $report->part2Item21B || $report->part2Item21D || $report->part2Item21F || $report->part2Item21H || $report->part2Item21J || $report->part2Item21L || $report->part2Item21O ||
				$report2->part2Item20F || $report2->part2Item21B || $report2->part2Item21D || $report2->part2Item21F || $report2->part2Item21H || $report2->part2Item21J || $report2->part2Item21L || $report2->part2Item21O
			){
				$report->part2Item22 = $report->part2Item20F + $report->part2Item21B + $report->part2Item21D + $report->part2Item21F + $report->part2Item21H + $report->part2Item21J + $report->part2Item21L + $report->part2Item21O;
				$report2->part2Item22 = $report2->part2Item20F + $report2->part2Item21B + $report2->part2Item21D + $report2->part2Item21F + $report2->part2Item21H + $report2->part2Item21J + $report2->part2Item21L + $report2->part2Item21O;
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Available Input Tax</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item22 + $report2->part2Item22) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php
				if(
			$report->part2Item23A || $report->part2Item23B || $report->part2Item23C || $report->part2Item23D || $report->part2Item23E || $report->part2Item23F ||
			$report2->part2Item23A || $report2->part2Item23B || $report2->part2Item23C || $report2->part2Item23D || $report2->part2Item23E || $report2->part2Item23F
				){
			?-->
			<tr>
				<td class="leftAlign" colspan="6">Less: Deductions from Input Tax</td>
			</tr>
			<!--?php
				}
			?-->
			<!--?php if($report->part2Item23A || $report2->part2Item23A){
			
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Purchases of Capital Goods exceeding 1Million deferred for the succeeding period (sch.3)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23A) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23A + $report2->part2Item23A) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23B || $report2->part2Item23B){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax on Sale to Govt. closed to expense (sch.4)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23B) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23B || $report2->part2Item23B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23C || $report2->part2Item23C){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Input Tax allocable to Exempt Sales</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23C) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23C + $report2->part2Item23C) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23D || $report2->part2Item23D){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT Refund/TCC claimed</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23D) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23D) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23D + $report2->part2Item23D) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23E || $report2->part2Item23E){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23E) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23E + $report2->part2Item23E) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item23F || $report2->part2Item23F){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 23A,23B,23C,23D & 23E</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item23F) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23F) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23F + $report2->part2Item23F) ?--></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item23A || $report->part2Item23B || $report->part2Item23C || $report->part2Item23D || $report->part2Item23E || 
				$report2->part2Item23A || $report2->part2Item23B || $report2->part2Item23C || $report2->part2Item23D || $report2->part2Item23E
				){
				$report->part2Item23F = $report->part2Item23A + $report->part2Item23B + $report->part2Item23C + $report->part2Item23D + $report->part2Item23E;
				$report2->part2Item23F = $report2->part2Item23A + $report2->part2Item23B + $report2->part2Item23C + $report2->part2Item23D + $report2->part2Item23E;
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total(Sum of Item 23A,23B,23C,23D & 23E</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item23F + $report2->part2Item23F) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item24 || $report2->part2Item24){
				
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Allowable Input Tax (Item 22 less Item 23F)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item24) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24 + $report2->part2Item24) ?--></td>
			</tr>
			<!--?php } elseif( $report->part2Item22 || $report->part2Item23F || $report2->part2Item22 || $report2->part2Item23F ){
				$report->part2Item24 = $report->part2Item22 - $report->part2Item23F;
				$report2->part2Item24 = $report2->part2Item22 - $report2->part2Item23F;
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Total Allowable Input Tax (Item 22 less Item 23F)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item24 + $report2->part2Item24) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item25 || $report2->part2Item25){ ?-->
			<tr>
				<td class="leftAlign" colspan="2">Net VAT Payable (Item 19B less Item 24)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item25) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25 + $report2->part2Item25) ?--></td>
			</tr>
			<!--?php } elseif( $report->part2Item19B || $report->part2Item24  || $report2->part2Item19B || $report2->part2Item24 ){
				$report->part2Item25 = $report->part2Item19B - $report->part2Item24;
				$report2->part2Item25 = $report2->part2Item19B - $report2->part2Item24;
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Net VAT Payable (Item 19B less Item 24)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item25 + $report2->part2Item25) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php
				if(
				$report->part2Item26A || $report->part2Item26B || $report->part2Item26C || $report->part2Item26D || $report->part2Item26E || 
				$report->part2Item26F || $report->part2Item26G || $report->part2Item26H || 
				$report2->part2Item26A || $report2->part2Item26B || $report2->part2Item26C || $report2->part2Item26D || $report2->part2Item26E || 
				$report2->part2Item26F || $report2->part2Item26G || $report2->part2Item26H
				){
			?-->
			<tr>
				<td class="leftAlign" colspan="6">Less: Tax Credits/Payments</td>
			</tr>
			<!--?php
				}
			?-->
			
			<!--?php if($report->part2Item26A || $report2->part2Item26A){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Monthly VAT Payments - previous two months</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26A) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26A) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26A + $report2->part2Item26A) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26B || $report->part2Item26B){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Creditable Value-Added Tax Withheld (sch.6)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26B) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26B) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26B + $report2->part2Item26B) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26C || $report2->part2Item26C){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments for Sugar and Flour Industries (sch.7)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26C) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26C) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26C + $report2->part2Item26C) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26D || $report2->part2Item26D){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT withheld on Sales to Government (sch.8)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26D) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26D) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26D + $report2->part2Item26D) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26E || $report2->part2Item26E){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">VAT paid in return previously filed, if this is an amended return</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26E) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26E) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26E + $report2->part2Item26E) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26F || $report2->part2Item26F){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Advance Payments made (please attach proof of payments -BIR Form No. 0605)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26F) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26F) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26F + $report->part2Item26F) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item26G || $report2->part2Item26G){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Others</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26G) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26G) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26G + $report2->part2Item26G) ?--></td>
			</tr>
			<!--?php } ?-->
			<!--?php if($report->part2Item26H || $report2->part2Item26H){
				
			?-->
			<tr>
				<td class="leftAlign" style="padding-left:20px;" colspan="2">Total Tax Credits/Payments (Sum of Item 26A,26B,26C,26D,26E & 26F)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item26H) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26H) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item26H + $report2->part2Item26H) ?--></td>
			</tr>
			<!--?php } ?-->
			
			<!--?php if($report->part2Item27 || $report2->part2Item27){
			
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Tax Still Payable (Overpayment)(Item 25 less Item 26H)</td>
				<td class="rightAlign"><!--?= Controller::getFloat($report2->part2Item27) ?--></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item27) ?--></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item27 || $report2->part2Item27) ?--></td>
			</tr>
			<!--?php } elseif(
				$report->part2Item25 || $report->part2Item26H || $report2->part2Item25 || $report2->part2Item26H
			) {
				$report->part2Item27 = $report->part2Item25 - $report->part2Item26H;
				$report2->part2Item27 = $report2->part2Item25 - $report2->part2Item26H;
			?-->
			<tr>
				<td class="leftAlign" colspan="2">Tax Still Payable (Overpayment)(Item 25 less Item 26H)</td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item27 + $report2->part2Item27) ?--></td>
			</tr>
			<!--?php } ?-->
			
			
			<!--NAKA COMMENT TALAGA TO!-->
			<!--?php
				if($report->part2Item28A || $report->part2Item28B || $report->part2Item28C || $report->part2Item28D){
			?->
			<!--<tr>
				<td class="leftAlign" colspan="4">Add: Penalties</td>
			</tr>-->
			<!--<tr>
				<td class="leftAlign">Surcharge</td>
				<td class="leftAlign">Interest</td>
				<td class="leftAlign">Compromise</td>
				<td class="rightAlign"></td>
			</tr>-->
			<!--?php
				}
			?-->
		
			<!--?php if($report->part2Item28A || $report->part2Item28B ||  $report->part2Item28C ||  $report->part2Item28D){
				
			?-->
			<!--<tr>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item28A) ?></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item28B) ?></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item28C) ?></td>
				<td class="rightAlign"><!--?= Controller::getFloat($report->part2Item28D) ?></td>
			</tr>-->
			<!--?php } ?-->
			<!--?php if($report->part2Item29){
				
			?-->
			<!--<tr>
				<td class="leftAlign grayBg" colspan="2">Total Amount Payable (Overpayment)(Sum of Item 27 and 28D)</td>
				<td class="rightAlign grayBg"></td>
				<td class="rightAlign grayBg"><!--?= Controller::getFloat($report->part2Item29) ?></td>
			</tr>-->
			<!--?php } ?-->
			<!--END OF COMMENT!-->
			
			
			<!--?php
				}
			?-->
		</table>
		
	</div>
	<div style="float:right;margin-top:20px;margin-bottom:20px;margin-right:19px;">
		<input type="button" value="VIEW TAX FORM" class="viewPreviewMode">
	</div>
</div>
<div class="popback hidden">

<script>
$(function(){
	$('.viewPreviewMode').click(function() {
			month = $('select[name="month"]').val(); 
			year = $('input[name="year"]').val();
			window.open(URL + 'report/form2550q_newtab?month='+month+'&year='+year);
			return false;
		});
		<?php
			if(isset($_GET['month'])){
		?>
			
				$('select[name="month"]').val('<?= $_GET['month'] ?>'); 
				$('input[name="year"]').val('<?= $_GET['year'] ?>'); 
				
				$('.reportgenerate').click();
		<?php
			}
		?>
		$('.buttonStyles2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			$('.popback').removeClass('hidden');
			$('body').css('overflow','hidden');
			$('.popback').css('overflow','auto');
			
			$.post(URL + 'taxplan/getVatQHistory',{'month':month, 'year':year})
				.done(function(returnData){
					$('.popback').html(returnData);
					
					$('.closeJournal').click(function(){
						$('.popback').addClass('hidden');
						$('.popback').html('');
						$('body').css('overflow','auto');
					});
				});
		});
})
</script>
