<?php
	// $form1601C = isset($this->form1601c) ? $this->form1601c : '';
?>
<html>
<head>

<link rel="stylesheet" href="css/1601c.css">
<link rel="stylesheet" href="css/modal.css">


</head>
<body>
<div class="container">
	<div class="form-holder">
		<div class="header">
			<div class="topleft fl">
				<img src="img/logo.png">
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
				<select class="indent mdd" name="item1" value="<?= setData($form1601C, 'item1M'); ?>">
					
								<option value="Jan">01 - January</option>
								<option value="Feb">02 - February</option>
								<option value="Mar">03 - March</option>
								<option value="Apr">04 - April</option>
								<option value="May">05 - May</option>
								<option value="Jun">06 - June</option>
								<option value="Jul">07 - July</option>
								<option value="Aug">08 - August</option>
								<option value="Sep">09 - September</option>
								<option value="Oct">10 - October</option>
								<option value="Nov">11 - November</option>
								<option value="Dec">12 - December</option>
				</select>
				<input type="text" size=4   maxlength="4" name="item1" value="<?= setData($form1601C, 'item1Y'); ?>">
			</div>
		</div>
		<div class="two" style="border:0;">
			<div class="topleft fl two">
				<b>2</b><small id="space"> Amended Return?</small>
				<br/>
				<div class="indent mdd box">
					<input type="radio" name="item2" value="<?= $form1601C->item2 == 'yes' ? 'x' : '' ?>"> Yes
					<input type="radio"name="item2" value="<?= $form1601C->item2 == 'no' ? 'x' : '' ?>"> No
				</div>
			
			</div>
		</div>
		<div class="three" style="border:0;">
			<div class="topleft fl three">
				<b>3</b><small id="space"> No. of Sheets Attached?</small>
				<br/>
				<div class="indent mdd">
					<input type="text" size=6   name="item3" value="<?= setData($form1601C, 'item3'); ?>"> 
					
				</div>
			
			</div>
		</div>
			<div class="four" style="border:0;">
			<div class="topleft fl four">
				<b>4</b><small id="space">Any Taxes Withheld?</small>
				<br/>
				<div class="indent mdd box" style="padding-left: 30px;">
					<input type="radio" name="item4"  value="<?= $form1601C->item4 == 'yes' ? 'x' : '' ?>"> Yes
					<input type="radio" name="item4"  value="<?= $form1601C->item4 == 'no' ? 'x' : '' ?>"> No
					
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
				<input type="text" size=2 maxlength=3  name="item5" value="<?= setData($form1601C, 'item5'); ?>" >
				<input type="text" size=2 maxlength=3   name="item5" value="<?= setData($form1601C, 'item5'); ?>">
				<input type="text" size=2 maxlength=3  name="item5" value="<?= setData($form1601C, 'item5'); ?>" >
				<input type="text" size=2 maxlength=3  name="item5" value="<?= setData($form1601C, 'item5'); ?>" >
			</div>
		</div>
		<div class="six">
			<div class="topleft fl six" style="border:0;">
				<b>6</b><small id="space"> RDO </small>
				<select name="item6" value="<?= setData($form1601C, 'item6'); ?>">
					<option></option>
					<option>001</option>
					<option>002</option>
					<option>003</option>
					<option>004</option>
					<option>005</option>
					<option>006</option>
					<option>007</option>
					<option>008</option>
					<option>009</option>
					<option>010</option>
					<option>011</option>
					<option>012</option>
					<option>013</option>
					<option>014</option>
					<option>015</option>
					<option>016</option>
					<option>17A</option>
					<option>17B</option>
					<option>018</option>
					<option>019</option>
					<option>020</option>
					<option>21A</option>
					<option>21B</option>
					<option>022</option>
					<option>23A</option>
					<option>23B</option>
					<option>024</option>
					<option>25A</option>
					<option>25B</option>
					<option>026</option>
					<option>027</option>
					<option>028</option>
					<option>029</option>
					<option>030</option>
					<option>031</option>
					<option>032</option>
					<option>033</option>
					<option>034</option>
					<option>035</option>
					<option>036</option>
					<option>037</option>
					<option>038</option>
					<option>039</option>
					<option>040</option>
					<option>041</option>
					<option>042</option>
					<option>43A</option>
					<option>43B</option>
					<option>044</option>
					<option>045</option>
					<option>046</option>
					<option>047</option>
					<option>048</option>
					<option>049</option>
					<option>050</option>
					<option>051</option>
					<option>052</option>
					<option>53A</option>
					<option>53B</option>
					<option>54A</option>
					<option>54B</option>
					<option>055</option>
					<option>056</option>
					<option>057</option>
					<option>058</option>
					<option>059</option>
					<option>060</option>
					<option>061</option>
					<option>062</option>
					<option>063</option>
					<option>064</option>
					<option>065</option>
					<option>066</option>
					<option>067</option>
					<option>068</option>
					<option>069</option>
					<option>070</option>
					<option>071</option>
					<option>072</option>
					<option>073</option>
					<option>074</option>
					<option>075</option>
					<option>076</option>
					<option>077</option>
					<option>078</option>
					<option>079</option>
					<option>080</option>
					<option>081</option>
					<option>082</option>
					<option>083</option>
					<option>084</option>
					<option>085</option>
					<option>086</option>
					<option>087</option>
					<option>088</option>
					<option>089</option>
					<option>090</option>
					<option>091</option>
					<option>092</option>
					<option>93A</option>
					<option>93B</option>
					<option>094</option>
					<option>095</option>
					<option>096</option>
					<option>097</option>
					<option>098</option>
					<option>099</option>
					<option>100</option>
					<option>101</option>
					<option>102</option>
					<option>103</option>
					<option>104</option>
					<option>105</option>
					<option>106</option>
					<option>107</option>
					<option>108</option>
					<option>109</option>
					<option>110</option>
					<option>111</option>
					<option>112</option>
					<option>113</option>
					<option>114</option>
					<option>115</option>
					<option>116</option>
					<option>117</option>
					<option>118</option>
					<option>119</option>
					<option>120</option>
					<option>121</option>
					<option>122</option>
					<option>123</option>
					<option>124</option>
					<option>125</option>
					<option>126</option>
					<option>132</option>
				</select>
				<br/><small id="space">Code</small>
				
			</div>
		</div>
		<div class="seven">
			<div class="topleft fl seven" style="border:0;">
				<b>7</b><small id="space"> Line of Business/Occupation</small>
				<input type="text" size=22 name="item7" value="<?= setData($form1601C, 'item7'); ?>">
				
			</div>
		</div>
	</div>
	<div class="section3">
		<div class="fl eight">
			<b>8</b> <small>Withholding Agent's Name (Last Name, First Name, Middle Name for Individuals) /(Registered Name for Non-Individuals)</small>
		<br/><input type="text" class="indent" size=75 name="item8" value="<?= setData($form1601C, 'item8'); ?>">
		</div>
		<div class="fl nine">
			<b>9</b> <small>Telephone Number</small>
			<br/><input type="text" class="indent" size=14 name="item9" value="<?= setData($form1601C, 'item9'); ?>">
		</div>
	</div>
	<div class="section4">
		<div class="fl ten">
			<b>10</b> <small>Registered Address</small>
		<br/><input type="text" class="indent" size=95 name="item10" value="<?= setData($form1601C, 'item10'); ?>">
		</div>
		<div class="fl eleven">
			<b>11</b> <small>Zip<br/>Code</small>
			<br/><input type="text" class="indent" size=3 name="item11" value="<?= setData($form1601C, 'item11'); ?>">
		</div>
	</div>
	<div class="section5">
		<div class="fl twelve">
			<b>12</b> <small>Category of Withholding Agent</small><br/>
			<div class="box" style="  height: 25px;width: 190px;">
				<div class="indent mdd twelve" style="float:left;border:0px;">
						<input type="radio" name="item12" value="<?= $form1601C->item12 == 'private' ? 'x' : '' ?>"> Private
						<input type="radio" name="item12" value="<?= $form1601C->item12 == 'government' ? 'x' : '' ?>"> Government
				</div>	
			</div>
		</div>
		<div class="fl thirteen">
			<b>13</b> <small>Are there payees availing of tax relief under 
			Special Law or International<br/>Tax Treaty?</small><br/>
			<center><input type="radio" name="item13"  value="Yes" value="<?= $form1601C->item13 == 'yes' ? 'x' : '' ?>"> <label style="margin-right:105px;">Yes</label>
					<input type="radio" name="item13"  value="No" value="<?= $form1601C->item13 == 'no' ? 'x' : '' ?>"> No<br/>
					If yes, specify
					<select  disabled>
						<option></option>
						<option>Special Rate</option>
						<option>International Tax Treaty</option>
					</select>
			</center>
		</div>
		<div class="fl fourteen">
			<b>14</b> <small>ATC</small><br/>
			<input type="text" size=20 class="indent" style="margin-left: 20px;" name="item14">
		</div>
		
	</div>
	<div class="section1">
		<div class="fl">
			<b>Part II	
		</div>
		<div class="mid1">
			Computation of Tax</b>
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
			<br/><label class="fl"><b class="mr" style="margin-right:10px">15 &nbsp;</b><input type="text" name="part2Item15" value="<?= number_format((float) setData($form1601C, 'part2Item15'), 2) ?>">
			<br/><br/><label class="fl"><b class="mr"></b></label>
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16A</b><input type="text" name="part2Item16A" value="<?= number_format((float) setData($form1601C, 'part2Item16A'), 2) ?>">
			<br/><b class="ml"></b><b class="ml"></b><b class="ml"></b> 
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16B</b><input type="text" name="part2Item16B" value="<?= number_format((float) setData($form1601C, 'part2Item16B'), 2) ?>">
			<br/><label class="ml"><b class="ml"></b><b class="ml"></b></label> </label>
			<br/><label class="fl"><b class="mr" style="margin-right:10px">16C</b><input type="text" name="part2Item16C" value="<?= number_format((float) setData($form1601C, 'part2Item16C'), 2) ?>">
			<br/><br/><label class="fl"><b class="mr" style="margin-right:10px">17 &nbsp;</b><input type="text" name="part2Item17" value="<?= number_format((float) setData($form1601C, 'part2Item17'), 2) ?>">
			
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
		<label class="fl"><b class="ml"></b><br/><b class="ml"> 24A </b><input type="text" size=15 name="part2Item24A" value="<?= number_format((float) setData($form1601C, 'part2Item24A'), 2) ?>" >
		<b class="ml"> 24B </b><input type="text" size=15 name="part2Item24B" value="<?= number_format((float) setData($form1601C, 'part2Item24B'), 2) ?>"  >
		<b class="ml"> 24C </b><input type="text" size=15  name="part2Item24C" value="<?= number_format((float) setData($form1601C, 'part2Item24C'), 2) ?>" >
		<label style="margin-left: 30px;"><b class="ml" style="margin-right:10px;"> 24D </b><input type="text" size=20 name="part2Item24D" value="<?= number_format((float) setData($form1601C, 'part2Item24D'), 2) ?>" ></label>
		<label class="fl" style="width:50%"><br/><b class="mr dsp">25</b>Tax Amount Still Due(Overremittance)  </label>
		<label class="fl" style="margin-left: 195px;"><br/><b class="" style="margin-right:18px;"> 25 </b><input type="text" size=20 name="part2Item25" value="<?= number_format((float) setData($form1601C, 'part2Item25'), 2) ?>"></label>
		
		
		</div>
		<div class="fr" style="padding-left:0px;">
		<label class="fr dsp"><b class="mr" style="margin-right:10px">18 &nbsp;&nbsp;</b><input type="text"  name="part2Item18" value="<?= number_format((float) setData($form1601C, 'part2Item18'), 2) ?>"><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">19 &nbsp;&nbsp;</b><input type="text" name="part2Item19" value="<?= number_format((float) setData($form1601C, 'part2Item19'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">20 &nbsp;&nbsp;</b><input type="text"  name="part2Item20" value="<?= number_format((float) setData($form1601C, 'part2Item20'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">21A</b><input type="text" name="part2Item21A" value="<?= number_format((float) setData($form1601C, 'part2Item21A'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">21B</b><input type="text" name="part2Item21B" value="<?= number_format((float) setData($form1601C, 'part2Item21B'), 2) ?>" ><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">22 &nbsp;</b><input type="text" name="part2Item22" value="<?= number_format((float) setData($form1601C, 'part2Item22'), 2) ?>"><br/>
		<label class="fr dsp"><b class="mr" style="margin-right:10px">23 &nbsp;</b><input type="text" name="part2Item23" value="<?= number_format((float) setData($form1601C, 'part2Item23'), 2) ?>"><br/>
		
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
				<td width="20%"><input type="text" ></td>
				<td width="30%"><input type="text" ></td>
				<td width="20%"><input type="text"></td>
				<td width="20%"><input type="text" ></td>
			</tr>
			<tr>
				<td width="10%"><div class="box"><input type="radio" name="2"><input type="radio" name="2"></div></td>
				<td width="20%"><input type="text" ></td>
				<td width="30%"><input type="text" ></td>
				<td width="20%"><input type="text"></td>
				<td width="20%"><input type="text" ></td>
			</tr>
			<tr>
				<td width="10%"><div class="box"><input type="radio" name="3"><input type="radio" name="3"></div></td>
				<td width="20%"><input type="text" ></td>
				<td width="30%"><input type="text" ></td>
				<td width="20%"><input type="text" ></td>
				<td width="20%"><input type="text" ></td>
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
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				
			</tr>
			<tr>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20 ></td>
				
			</tr>
			<tr>
				<td width="25%"><input type="text" size=20></td>
				<td width="25%"><input type="text" size=20 ></td>
				<td width="25%"><input type="text" size=20></td>
				<td width="25%"><input type="text" size=20 ></td>
				
			</tr>
			
		</table>
	</div>
	<div class="section1" style="  padding-top: 5px; padding-bottom: 10px;">
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
