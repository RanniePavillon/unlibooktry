<style>
body{
	overflow:hidden;
}
.popBack, .popup{
	background: black;
	position: fixed;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: rgba(1, 1, 1, 0.3);
	overflow:auto;
}
.evCont{
	width:100%;
	margin:auto;
	padding:0;
	margin-bottom:30px;
}
.evHolder{
	width:800px;
	border:1px solid #c8c8c8;
	height:auto!important;
	margin:auto;
	font-family:Verdana;
	font-size:12px;
	background: #fff;
	margin-top:30px;
	padding-bottom:15px;
}
li{
	list-style-type:none;
}
.companyInfo li{
	padding-top:5px;
}
.xButton{
	cursor:pointer;
}
.buttonRight{
	cursor:pointer;
	border: none;
	color: #fff;
	padding:4px 13px;
	border-radius: 3px;
	font-weight: bold;
	font-size: 12px;
	background: gray;
}
.inpEV{
	border-bottom:1px solid #000!important;
	border:none;
	outline-style: none;
	margin-top:2px;
}
.inpEV2{
	width:300px;
	outline-style: none;
}
.particularsTA{
	width: 748px;
	height: 83px;
	padding: 7px;
	border: 1px solid #000;
	font-size:12px;
	font-family:Verdana;
	padding-left:5px;
}
.tblAcctExpense{
	border-collapse:collapse;
	font-size:12px;
	font-weight:Verdana;
	width:100%;
	margin-top:20px;
}
.tblAcctExpense tr,td{
	border-right:1px solid #000;
	border-left:1px solid #000;
	padding:10px;
}
.tblAcctExpense th{
	border:1px solid #000;
	padding:6px;
	font-size:13px;
	background:rgb(170, 169, 169);
}
.amountRight{
	text-align:right;
}
.totalTD{
	padding:10px;
	border:1px solid #000;
}
.ulSignatory{
	display:inline-block;
	margin-top:30px;
}
.img2 {
	position: absolute;
	margin-left: 24px;
	height: 17px;
	z-index: -1;
	top: 210px;
}
@media print{
		.mainbodyInvoice, #container, .mainBody, #footer, #header, .invoiceHolderAllExp, input[type=button], #accpClickToOpen, .timerFoot{
			display: none;
		}
		#lowerLink{
			display: none;
		}
		.mainformcollection{
			margin-top:-80px;
		}
		.Main{
			background: none;
		}
		
		.receiptform{
			width: 100%;
		}
		.receiptform{
			width: 805px;
		}
		
		.oftable{
			margin-left:-15px;
			width:655px;
		}
		.popBack{
			width: 100%;
			overflow: hidden;
			position: static;
			background-color: #fff;
		} 
		.cvHolder{
			margin:0 !important;
		}
		#header, .mainbodyExpenses{
			display:none;
		}
		.evHolder{
			width:100%;
			border:none;
			margin-top:0px;
		}
		.tblAcctExpense th{
			color:#000;
		}
		.signatories{
			width:100%;
		}
		.inpEV{
			width:142px;
		}
		.cvInfoCompany{
			text-align: left !important;
			margin-top: -61px !important;
			float: left !important;
			margin-left: 170px !important;
		}
		.companyInfo li{
			padding-top:0px !important;
		}
		.address{
			margin-left: 0 !important;;
		}
		body{
			background-image: none !important;
		}
		
		.vouch{
			margin-top:30px !important;
		}
}
	@page {
		size: portrait;
	}
	thead   {display: table-header-group;   }

	tfoot   {display: table-footer-group;   }
	
	
	
	.closeCNTsexp{
		background-image:url('<?= URL ?>public/images/popx.png');
		background-size: 100% 100%;
		border: none;
		width: 23px;
	}
	.cfcLogoReport{
		width: 165px;
		text-align: right;
		float: left;
	}
	.aspbu{
		color:#2D3492;
		margin-right:5px;
		font-family: Comic Sans MS;
		font-size: 12px;
	}
	.descMemo{
		margin-top: 7px;
		border: 1px solid #000;
		height: 63px;
		/* width:848px; */
		padding: 5px;
	}
	.cvInfoCompany{
		text-align: left;
		/* width: 100%; */
		margin-top: 5px;
		margin-top: -61px;
		margin-left: 173px;
	}
	ul{
		padding:0px;
	}
</style>
<?php
	$expense = $this->getExpense;
	$expenseLine = DAOFactory::getTblCashAdvanceLinesDAO()->queryByNewCashAdvanceId($expense->id);
	$expenseLine = $expenseLine[0];
	// print_r($expenseLine);
	// exit;
	$vendor = $this->getVendor;
	$trialBalance = $this->getTrialBalance;
	// print_r($trialBalance);
	$orgInfo = $this->orgInfo;
	$org = $this->org;
?>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="evCont">
	<div class="evHolder">
		<div class="cvHolder" style="margin:20px;">
			<div class="cfcLogoReport">	
				<div>
					<img class="logoss" src="<?= URL ?>public/images/SCP NEW LOGO.png" style="width:165px;">
				</div>	
				<div class="aspbu">Accounting System</div>
				<div class="aspbu">(Powered By: unlibooks.com)</div>
			</div>
			<div style="float:right;margin-top:10px;" class="voucher">
				<span><input type="button" value="PDF" class="buttonRight hidden"></span>
				<span><input type="button" value="Print" class="buttonRight addsavebutton" onClick="window.print()"></span>
				<input type="button" class="xButton closeCNTsexp" value="">
			</div>
			<div style="clear:both;"></div>
			<!--<div class="cvInfoCompany">
				<ul class="companyInfo" style="padding:0px!important;">
					<li class="orgName"><?= $org->orgName ?></li>
					<li>TIN: <?= $orgInfo->tinNum ?></li>
					<li class="address" style="word-break:break-word;width:300px;margin:auto;"><?= $orgInfo->address ?></li>
					<li>Phone No.:<?= $orgInfo->phoneNum ?></li>
				</ul>
			</div>-->
			<div class="cvInfoCompany">
				<div class="companyInfo" style="padding:0px!important;">
					<div class="orgName" style="text-transform: capitalize;"><?= $org->orgName ?></div>
					<div>Non-VAT Reg. TIN: <?= $orgInfo->tinNum ?></div>
					<div class="address" style="word-break:break-word;width:204px;text-align:left;"><?= $orgInfo->address ?></div>
					<div>Phone No.:<?= $orgInfo->phoneNum ?></div>
				</div>
			</div>
			<div style="text-align:center; margin-top:5px;" class="vouch">
			<label style="font-size:22px;">CASH ADVANCE VOUCHER</label>
				<?php
//					$coa = DAOFactory::getTblCoaDAO()->load($expense->glPosting);
//					if($coa->accountNum == '1000-002'){
				?>
					<!--<label style="font-size:22px;">CASH VOUCHER</label>-->
				<?php // } else { ?>
					<!--<label style="font-size:22px;">CHECK VOUCHER</label>-->	
				<?php // } ?>
			</div>
			<div style="text-align:right;width:100%;margin-top:30px;">
				<ul>
					<li>CA No.: <input type="text" class="inpEV" style="margin-left:38px;" value="<?= $expense->cashAdvanceNum ?>" readonly /></li>
					<li>Date: <input type="text" class="inpEV" style="margin-left:49px;" value="<?= date('M. d, Y',strtotime($expense->dateIssued)) ?>" readonly /></li>
					<li>CV No.: <input type="text" class="inpEV" style="margin-left:37px;"
						value="<?= $expense->referenceNumber ?>" readonly />
					</li>
					<li>Check No.:  <input type="text" class="inpEV" value="<?= $expense->particular?>" style="margin-left:17px;" readonly /></li>
				</ul>
			</div>
			<div style="clear:both;"></div>
			<div>
				<label>Payee Name:</label> <input type="text" class="inpEV inpEV2" value="<?= $vendor->name ?>" readonly />
			</div>
			<div style="margin-top:15px;">
				Particulars:
			</div>
			<div class="descMemo">
				<?= $expenseLine->particular ?>
			</div>
			<div>
				<table class="tblAcctExpense">
					<tr>
						<th style="text-align:left;">Account Code</th>
						<th style="text-align:left;">Account Title</th>
						<th class="amountRight">Debit</th>
						<th class="amountRight">Credit</th>
					</tr>
					<?php
						$debit = 0;
						$credit = 0;
						
						if($trialBalance){
							foreach($trialBalance as $each){
								$debit += $each['debit'];
								$credit += $each['credit'];
					?>
					
						<tr>
							<td style="border-right:1px solid #000!important;border-left:1px solid #000!important;"><?= $each['account_num'] ?></td>
							<td style="border-right:1px solid #000!important;"><?= $each['accont_name'] ?></td>
							<td style="border-right:1px solid #000!important;" class="amountRight"><?= Controller::getFloat($each['debit']) ?></td>
							<td style="border-right:1px solid #000!important;" class="amountRight"><?= Controller::getFloat($each['credit']) ?></td>
						</tr>
					<?php
							}
						}
					?>
					<tr>
						<td class="totalTD" style="border-right:none!important;"></td>
						<td class="totalTD amountRight" style="border-right:1px solid #000!important;"><b>Total</b></td>
						<td class="totalTD amountRight" style="border-right:1px solid #000!important;"><b><?= Controller::getFloat($debit) ?></b></td>
						<td class="totalTD amountRight" style="border-right:1px solid #000!important;"><b><?= Controller::getFloat($credit) ?></b></td>
					</tr>
				</table>
			</div>
			<div class="signatories">
				<div class="ulSignatory">
					<ul>
						<li><label>Prepared By:</label></li>
						<li>
						<?php 
						//$user = DAOFactory::getTblUserDAO()->load(Session::getSession('user'));
						//$user = DAOFactory::getTblUserDAO()->load($expense->modifiedBy);
						//$modifiedBy = $user->fullName;
						//$user = DAOFactory::getTblUserDAO()->load($expense->reviewedBy);
						//$reviewedBy = $user->fullName;
						//$user = DAOFactory::getTblUserDAO()->load($expense->approvedBy);
						//$approvedBy = $user->fullName;
						?>
						<input type="text" class="inpEV" style="margin-top:10px;" value="<?= ucwords($expense->modifiedBy) ?>" readonly>
						
						</li>
					</ul>
				</div>	
				<div class="ulSignatory" style="margin-left:23px;">
					<ul>
						<li><label>Reviewed By:</label></li>
						<li><input type="text" class="inpEV" style="margin-top:10px;" value="<?= ucwords ($expense->preapprovedBy) ?>" readonly></li>
					</ul>
				</div>
				<div class="ulSignatory" style="margin-left:23px;">
					<ul>
						<li><label>Approved By:</label></li>
						<li><input type="text" class="inpEV" style="margin-top:10px;" value="<?= ucwords($expense->approvedBy) ?>" readonly></li>
					</ul>
				</div>
				<div class="ulSignatory" style="margin-left:23px;">
					<ul>
						<li><label>Received By:</label></li>
						<li><input type="text" class="inpEV" style="margin-top:10px;" value="" readonly></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>










