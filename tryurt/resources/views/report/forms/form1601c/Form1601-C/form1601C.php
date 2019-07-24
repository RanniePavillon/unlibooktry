<?php
	$form1601C = isset($this->form1601c) ? $this->form1601c : '';
?>
<style>
	.textAlignCenter{
		text-align:center !important;
	}
	.textAlignLeft{
		text-align:left !important;
		padding-left: 5px;
	}
	input[type="text"] {
		font-weight: bold !important;
		font-size: 16px !important;
	}
</style>
<html>
<head>
	<link rel="stylesheet" href="<?= $this->cssUrl?>1601c.css">
	<link rel="stylesheet" href="<?= $this->cssUrl?>modal.css">
	<!--<script src="<?= URL ?>views/report/forms/form1601c/Form1601-C/form1601c.js"></script> -->
	<script src="<?= $this->imageUrl ?>js/custom.js"></script>
</head>
<body>
<div class="container" style="margin-top:409px!important;">
	<div class="form-holder">
		<div class="header">
			<div class="topleft fl">
				<img style="float:left;" src="<?= $this->imageUrl?>img/logo.png">
				<div id="banner" class="fl">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
			</div>
			<div class="mid fl tc">
				<h1>Monthly Remittance Return<br/>
				of Income Taxes Withheld<br/>
				on Compensation</h1>
			</div>
			<div class="topright fr	">
				<div class="formNo">BIR Form No.
				<h1>1601-C</h1>
				July 2008 (ENCS)
				</div>
			</div>
		</div>
	<div class="section">
		<div class="one">
			<div class="topleft fl one">
				<b>1</b><small id="space"> For the Month (MM/YYYY)</small>
				<br/>
				<input type="text" name="item1" readonly style="width: 50px;margin-left: 148px;margin-top: -11px;" class="textAlignCenter" maxlength="4" value="<?= setData($form1601C, 'item1M'); ?>">
				<input type="text" readonly style="width: 50px;margin-top: -31px;" class="textAlignCenter" maxlength="4" name="item1" value="<?= setData($form1601C, 'item1Y'); ?>">
			</div>
		</div>
		<div class="two" style="border:0;">
			<div class="topleft fl two">
				<b>2</b><small id="space"> Amended Return?</small>
				<br/>
				<div class="indent mdd box">
					<input type="radio" name="item2" id="item2_yes" value="yes" <?= $form1601C->item2 == 'yes' ? 'checked' : '' ?> > 
					<label for="item2_yes">Yes</label>
					<input type="radio"name="item2" id="item2_no" value="no" <?= $form1601C->item2 == 'no' ? 'checked' : '' ?> > 
					<label for="item2_no">No</label>
				</div>
			
			</div>
		</div>
		<div class="three" style="border:0;">
			<div class="topleft fl three">
				<b>3</b><small id="space"> No. of Sheets Attached?</small>
				<br/>
				<div class="indent mdd">
					<input type="text" style="width: 100px;height: 21px;font-size: 15px;"class="textAlignCenter" name="item3" value="<?= setData($form1601C, 'item3'); ?>"> 
					
				</div>
			
			</div>
		</div>
			<div class="four" style="border:0;">
			<div class="topleft fl four">
				<b>4</b><small id="space">Any Taxes Withheld?</small>
				<br/>
				<div class="indent mdd box" style="padding-left: 30px;">
					<input type="radio" name="item4" id="item4_yes" value="yes" <?= $form1601C->item4 == 'yes' ? 'checked' : '' ?>>
					<label for="item4_yes">Yes</label>
					<input type="radio" name="item4" id="item4_no" value="no" <?= $form1601C->item4 == 'no' ? 'checked' : '' ?>>
					<label for="item4_no">No</label>
					
				</div>
			
			</div>
		</div>
	</div>
	<div class="section1">
		<div class="fl">
			<b>Part I	
		</div>
		<div class="mid1">
			Background Information</b>
		</div>
	</div>
	<div class="section2">
		<div class="five">
			<div class="topleft fl five" style="border:0;">
				<b>5</b><small id="space"> TIN</small>
				<?php
					$tin1 = setData($form1601C, 'item5');
					$tin = explode('-',$tin1);
				?>
				<input type="text" size=2 maxlength=3  class="textAlignCenter" name="item5[]" readonly value="<?= isset($tin[0]) ? $tin[0] : ''?>" >
				<input type="text" size=2 maxlength=3  class="textAlignCenter" name="item5[]" readonly value="<?= isset($tin[1]) ? $tin[1] : '' ?>">
				<input type="text" size=2 maxlength=3  class="textAlignCenter" name="item5[]" readonly value="<?= isset($tin[2]) ? $tin[2] : '' ?>" >
				<input type="text" size=2 maxlength=3  class="textAlignCenter" name="item5[]" readonly value="<?= isset($tin[3]) ? $tin[3] : '' ?>" >
			</div>
		</div>
		<div class="six">
			<div class="topleft fl six" style="border:0;">
				<b>6</b><small id="space"> RDO </small>
				<input type="text" name="item6" value="<?= setData($form1601C, 'item6'); ?>" readonly class="textAlignCenter" style="width:50px;height: 25px;">
				
				<br/><small id="space">Code</small>
				
			</div>
		</div>
		<div class="seven">
			<div class="topleft fl seven" style="border:0;">
				<b>7</b><small id="space"> Line of Business/Occupation</small>
				<input type="text" size=15 name="item7" class="textAlignLeft" readonly value="<?= setData($form1601C, 'item7'); ?>" style="height:21px;margin-left: 0px;font-size: 15px;width: 350px;">
				
			</div>
		</div>
	</div>
	<div class="section3">
		<div class="fl eight">
			<b>8</b> <small>Withholding Agent's Name (Last Name, First Name, Middle Name for Individuals) /(Registered Name for Non-Individuals)</small>
		<br/><input type="text" class="indent textAlignLeft" size=50 name="item8" readonly value="<?= setData($form1601C, 'item8'); ?>">
		</div>
		<div class="fl nine">
			<b>9</b> <small>Telephone Number</small>
			<br/><input type="text" class="indent textAlignCenter" size=20 name="item9" readonly value="<?= setData($form1601C, 'item9'); ?>">
		</div>
	</div>
	<div class="section4">
		<div class="fl ten">
			<b>10</b> <small>Registered Address</small>
		<br/><input type="text" class="indent textAlignLeft" size=60 name="item10" readonly value="<?= setData($form1601C, 'item10'); ?>">
		</div>
		<div class="fl eleven">
			<b>11</b> <small>Zip Code</small>
			<input type="text" class="indent textAlignCenter" size=3 name="item11" readonly value="<?= setData($form1601C, 'item11'); ?>">
		</div>
	</div>
	<div class="section5">
		<div class="fl twelve">
			<b>12</b> <small>Category of Withholding Agent</small><br/>
			<div class="box" style="  height: 25px;width: 190px;">
				<div class="indent mdd twelve" style="float:left;border:0px;">
						<input type="radio" name="item12" id="item12_private" value="private" <?= $form1601C->item12 == 'private' ? 'checked' : '' ?>> 
						<label for="item12_private">Private</label>
						<input type="radio" name="item12" id="item12_government" value="government" <?= $form1601C->item12 == 'government' ? 'checked' : '' ?>>
						<label for="item12_government">Government</label>
				</div>	
			</div>
		</div>
		<div class="fl thirteen">
			<b>13</b> <small>Are there payees availing of tax relief under 
			Special Law or International<br/>Tax Treaty?</small><br/>
			<center>
					<input type="radio" name="item13" id="item13_yes" value="yes" <?= $form1601C->item13 == 'yes' ? 'checked' : '' ?>> 
						<label style="margin-right:105px;" for="item13_yes">Yes</label>
					<input type="radio" name="item13" id="item13_no" value="no" <?= $form1601C->item13 == 'no' ? 'checked' : '' ?>>
						<label style="margin-right:105px;" for="item13_no">No</label><br/>
					If yes, specify
					<select name="item13Specify">
						<option></option>
						<option <?= setData($form1601C,'item13Specify') == 'Special Rate' ? 'selected' : '' ?>>Special Rate</option>
						<option <?= setData($form1601C,'item13Specify') == 'International Tax Treaty' ? 'selected' : '' ?>>International Tax Treaty</option>
					</select>
			</center>
		</div>
		<div class="fl fourteen">
			<b>14</b> <small>ATC</small><br/>
			<input type="text" size=20 class="indent textAlignCenter" style="margin-left: 20px;" name="item14" value="<?= $form1601C->item14?>">
		</div>
		
	</div>
	<div class="section1">
		<div class="fl">
			<b>Part II	</b>
		</div>
		<div class="mid1">
			<b>Computation of Tax</b>
		</div>
	</div>
	<div class="section6">
		<div style=" width: 385px;float: left;">
			<center><b>Particulars</b></center>
			<br/><label class="fl"><b class="mr">15</b>Total Amount of Compensation</label><br/>
			<br/><label class="fl"><b class="mr">16</b>Less Non Taxable Compensation</label>
			<br/><label class="fl"><b class="ml"></b><b class="ml"> 16A </b> Statutory Minimum Wage (MWEs)
			<br/><b class="ml"></b><b class="ml"></b><b class="ml"></b> &nbsp;&nbsp;Holiday Pay, Overtime Pay, Night Shift,
			<br/><b class="ml"></b><b class="ml">16B</b>&nbsp;Differential Pay, Hazard Pay (Minimum <br/>
			<label class="ml"><b class="ml"></b><b class="ml"></b>&nbsp;&nbsp;&nbsp;Wage Earner</label>) </label>
			<br/><b class="ml"></b><b class="ml">16C</b>&nbsp;Other Non Taxable Compensation </label>
			<br/><br/><label class="fl"><b class="mr">17</b>Taxable Compensation</label>
		</div>
		
		<div class="aoc	">
			<center><b>Amount of Compensation</b></center>
			<br/><label class="fl"><b class="mr" style="margin-right:10px">15 &nbsp;</b><input type="text" size="10" name="part2Item15" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item15'), 2) ?>">
			<br/><br/><label class="fl"><b class="mr"></b></label>
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16A</b><input type="text" size="10" name="part2Item16A" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item16A'), 2) ?>">
			<br/><b class="ml"></b><b class="ml"></b><b class="ml"></b> 
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16B</b><input type="text" size="10" name="part2Item16B" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item16B'), 2) ?>">
			<br/><label class="ml"><b class="ml"></b><b class="ml"></b></label> </label>
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16C</b><input type="text" size="10" name="part2Item16C" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item16C'), 2) ?>">
			<br/><br/><label class="fl"><b class="mr" style="margin-right:10px">17 &nbsp;</b><input type="text" size="10" name="part2Item17" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item17'), 2) ?>">
			
		</div>
		<div class="taxd">
			<center><b>Tax Due</b></center>
		</div>
		<div class="fl" style="padding-left:0px;width:560px;">
		<b class="mr  dsp">18</b>Tax Required to be Withheld</label>
		<br/><b class="mr  dsp">19</b> Add/Less: Adjustment (from Item 25 of Section A)</label>
		<br/><b class="mr  dsp">20</b> Tax Required to be Withheld for Remittance</label>
		<br/><b class="mr  dsp">21</b> Less: Tax Remitted In Return Previously Filed, if this is an amended return 21A </label>
		<br/><b class="mr dsp"></b>Other Payments Made (please attach proof of payment BIR Form No. 0605) 21B </label>
		<br/><b class="mr dsp">22</b> Total Tax Payments Made (Sum of Item Nos. 21A & 21B) 22 </label>
		<br/><b class="mr dsp">23</b> Tax Still Due/(Overremittance) (Item No. 20 less item No. 22) </label>
		<br/><b class="mr dsp">24</b> Add: Penalties   </label>
	
		<br/><label class="fl" style="  width: 850px;"><b class="ml"></b><b class="ml"></b><b class="ml"></b><b class="ml"> </b><small> Surcharge</small>
		<b class="ml"></b><b class="ml"></b><b class="ml"></b><b class="ml"> </b><b class="ml"> </b><small> Interest</small>
		<label class="fl"><b class="ml"></b><br/><b class="ml"> 24A </b><input type="text" size=10 name="part2Item24A" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item24A'), 2) ?>" >
		<b class="ml"> 24B </b><input type="text" size=10 name="part2Item24B" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item24B'), 2) ?>"  >
		<b class="ml"> 24C </b><input type="text" size=10  name="part2Item24C" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item24C'), 2) ?>" >
		<label><b class="ml" > 24D </b><input type="text" size=10 name="part2Item24D" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item24D'), 2) ?>" ></label>
		<label class="fl" style="width:50%"><br/><b class="mr dsp">25</b>Tax Amount Still Due(Overremittance)  </label>
		<label class="fr" ><br/><b class="" style="margin-right:18px;"> 25 </b><input type="text" size=10 name="part2Item25" style="margin-right: 27px;" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item25'), 2) ?>"></label>
		
		
		</div>
		<div class="fr" style="padding-left:0px;">
		<label class="fr dsp"><b class="mr" style="margin-right:10px">18 &nbsp;&nbsp;</b><input type="text"  size="10" name="part2Item18" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item18'), 2) ?>"><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">19 &nbsp;&nbsp;</b><input type="text" size="10" name="part2Item19" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item19'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">20 &nbsp;&nbsp;</b><input type="text"  size="10" name="part2Item20" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item20'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">21A</b><input type="text" size="10" name="part2Item21A" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item21A'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">21B</b><input type="text" size="10" name="part2Item21B" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item21B'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">22 &nbsp;</b><input type="text" size="10" name="part2Item22" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item22'), 2) ?>"><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">23 &nbsp;</b><input type="text" size="10" name="part2Item23" class="isInt" value="<?= number_format((float) setData($form1601C, 'part2Item23'), 2) ?>"><br/>
		
		</div>
	</div>
	<div class="section1">
		<div class="fl">
			<label style="color:blue">Section A</label> <a href="#openModal">more...</a>
		</div>
		<div class="mid1">
			<small><b>Adjustment of Taxes Withheld on Compensation For Previous Months</b></small>
		</div>
	</div>
	<div class="section1">
		<table>
			<tr>
				<th>Monthly/Yearly</th>
				<th>Previous Month(s)/Year1<br/>(MM/YYYY)</th>
				<th>Date Paid (2) (MM/DD/YYYY)</th>
				<th>Bank Validation/ROR No. (3)</th>
				<th>Bank Code(4)</th>
			</tr>
			<tr>
				<td width="10%"><div class="box"><input type="radio" name="1"><input type="radio" name="1"></div></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="30%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
			</tr>
			<tr>
				<td width="10%"><div class="box"><input type="radio" name="2"><input type="radio" name="2"></div></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="30%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
			</tr>
			<tr>
				<td width="10%"><div class="box"><input type="radio" name="3"><input type="radio" name="3"></div></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="30%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
				<td width="20%"><input type="text" size="10"></td>
			</tr>
		</table>
	</div>
	<div class="section1">
		<div class="fl">
			<label style="color:blue">Section A Continuation</label>
		</div>
		<div class="mid1">
			<small><b>Adjustment of Taxes Withheld on Compensation For Previous Months</b></small>
		</div>
	</div>
	<div class="section1">
		<table>
			<tr>
				<th>Tax Paid(Excluding Penalties) for the <br/>Month/Year (5)</th>
				<th>Should Be Tax Due for the Month Year <Br/>(6)</th>
				<th>From Current Year (7a)</th>
				<th>From Year-End Adjustment of the<br/>Immediately Preceding Year (7b)</th>

			</tr>
			<tr>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				
			</tr>
			<tr>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15 ></td>
				
			</tr>
			<tr>
				<td width="25%"><input type="text" size=15></td>
				<td width="25%"><input type="text" size=15 ></td>
				<td width="25%"><input type="text" size=15></td>
				<td width="25%"><input type="text" size=15 ></td>
				
			</tr>
			
		</table>
	</div>
	<div class="section1" style="  padding-top: 5px; padding-bottom: 20px;">
		<small style="margin-left:120px">26 Total(7 a plus 7B) (To Item 19)</small>
		<input type="text" disabled style="float:right;margin-right:120px;" class="deci">
	</div>
	
	
	
		
		
	</div>

	
	
	
</div>



<div id="openModal" class="modalDialog">
	<div class="modaltbl">
		<a href="#close" title="Close" class="close">X</a>
			<center>Please choose from the checkbox if you want to delete a row.</center>
		<table style="border:1px solid #aaa">
			<tr>
				<th style="border:1px solid #aaa">Month/Year</th>
				<th style="border:1px solid #aaa">Previous Month(s)/Year(1)<br/>(MM/YYYY)</th>
				<th style="border:1px solid #aaa">Date Paid(2)<br/>(MM/DD/YYYY)</th>
				<th style="border:1px solid #aaa">Bank Validation/ROR No</th>
				<th style="border:1px solid #aaa">Bank Code</th>
				<th style="border:1px solid #aaa">Tax Paid(Excluding Penalties)</th>
				<th style="border:1px solid #aaa">Should Be Tax Due</th>
				<th style="border:1px solid #aaa">From Current Year(7a)</th>
				<th style="border:1px solid #aaa">From Year-End</th>

			</tr>
		</table>
		<br/>
			<label style="float:right">
				Total Amount (total 7a plus 7b) <input type="text">
				<br/>
				<button>Add</button>
				<button>Delete</button>
			</label>
			<div style="margin-top:100px">
				<center>
					<button>OK</button>
					<a href="#close"><button>CANCEL</button></a>
				</center>
			</div>
			
	</div>
</div>

<?php

function setData($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index == '') {
            if (!empty($array->$data)) {
                return $array->$data;
            }
        } else {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        }
    }
}
?>


</body>
</html>
