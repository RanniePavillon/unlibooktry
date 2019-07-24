<?php
$form0605 = isset($this->form0605) ? $this->form0605 : '';
?>
<style>
	.textAlignLeft{
		text-align:left !important;
		padding-left:5px;
	}
	.textAlignCenter{
		text-align:center !important;
	}
	.headers{
		padding:0 !important;
	}
	#banner{
		margin-top:4px !important;
		margin-left:12px !important;
	}
	.formNo1{
		margin-top:0px !important;
	}
	.formNo2{
		margin-top:0px !important;
	}
	.formNo3{
		margin-top:0px !important;
	}
</style>
<html>
<head>
	<link rel="stylesheet" href="<?= $this->cssUrl?>style.css">
	<link rel="stylesheet" href="<?= $this->cssUrl?>modal.css">
	<script src="<?= URL?>views/report/forms/form0605/Form0605/0605.js"></script>
</head>
<body>
<div class="container">
<div class="headers">
	<div class="topleft fl">
		<img src="<?= $this->imageUrl?>img/logo.png" style="float:left;">
		<div id="banner" class="fl" style="font-size: 13px;">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
	</div>
	<div class="mid fl">
		<h1>Payment Form</h1>
	</div>
	<div class="topright2 fr	">
		<div class="formNo1">BIR Form No.</div>
		<div class="formNo2"><h1>0605</h1></div>
		<div class="formNo3" style="font-size: 13px;">September 2003 (ENCS)</div>
	</div>
</div>

<div class="content">
	<div class="rows" style="padding: 0 0 8.2% 0;">
		<div class="fl" style="margin-left: .5%; width: 23%;">
			<table style="width: 90%;">
				<tr>
					<td>
						<strong>1</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> For the</span>
						<div style="margin: -10% 0 0 33%;">
							<input type="radio" name="item1" id="Calendar" value="Calendar" <?= setData($form0605, 'item1') == 'Calendar' ? 'checked' : ''?>>
								<span style="font-size: 10px; margin: 0 0 0 0;">
									<label for="Calendar">Calendar</label>
								</span>
							<input type="radio" name="item1" id="Fiscal" value="Fiscal" <?= setData($form0605, 'item1') == 'Fiscal' ? 'checked' : ''?>>
								<span style="font-size: 10px; margin: 0 0 0 0;">
									<label for="Fiscal">Fiscal</label>
								</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<strong>2</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> Year Ended (MM/YYYY)</span>
						<div>
							<input type="text" name="item2" class="inset textAlignCenter" size="3" maxlength="2" value="<?= date('m',strtotime($_POST['month']))?>">
							<input type="text" name="item2" class="inset textAlignCenter" size="3" maxlength="4" value="<?= $_POST['year']?>">
						</div>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 17%; padding: .5% 0 3.8% 1%;">
			<strong>3</strong><span style="font-size: 10px; margin: 0 0 0 5%;">Quarter</span>
			<div>
				<input type="radio" name="item3" id="1" value="1st" <?= setData($form0605, 'item3') == '1st' ? 'checked' : ''?>> 
				<label for="1">1</label> 
				<input type="radio" name="item3" id="2" value="2nd" <?= setData($form0605, 'item3') == '2nd' ? 'checked' : ''?>>
				<label for="2">2</label>
				<input type="radio" name="item3" id="3" value="3rd" <?= setData($form0605, 'item3') == '3rd' ? 'checked' : ''?>>
				<label for="3">3</label>
				<input type="radio" name="item3" id="4" value="4th" <?= setData($form0605, 'item3') == '4th	' ? 'checked' : ''?>>
				<label for="4">4</label>
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; padding: .5% 0 1.4% 1%;">
			<strong>4</strong><span style="font-size: 10px; margin: 0 0 0 5%;">Due Date (MM/DD/YYYY) </span>
			<div style="margin: 0 0 0 3%; padding: 3% 5% 3% 5%;">
				<input type="text" name="item4M" size="1" maxlength="2" class="textAlignCenter" value="<?= setData($form0605,'item4') != '0000-00-00' ? date('m',strtotime(setData($form0605, 'item4'))) : ''?>">
				<input type="text" name="item4D" size="1" maxlength="2" class="textAlignCenter" value="<?= setData($form0605,'item4') != '0000-00-00' ? date('d',strtotime(setData($form0605, 'item4'))) : ''?>">
				<input type="text" name="item4Y" size="2" maxlength="4" class="textAlignCenter" value="<?= setData($form0605,'item4') != '0000-00-00' ? date('Y',strtotime(setData($form0605, 'item4'))) : ''?>">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 15%; padding: .5% 0 2.3% 1%;">
			<strong>5</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> No. of Sheets Attached</span>
			<div style="border: ; margin: 0 0 0 0;">
				<input type="text" name="item5" class="inset textAlignCenter" size="5" maxlength="2" style="margin: 5% 0 0 10%;" >
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 15%; padding: .5% 0 2.3% 1%;">
			<strong>6</strong><span style="font-size: 10px; margin: 0 0 0 5%;"><a href="#openModal">ATC</a></span>
			<div style="border: ; margin: 0 0 0 0;">
				<input type="text" name="item6" class="inset textAlignCenter" size="5" style="margin: 5% 0 0 10%;">
			</div>
		</div>
	</div>
	
	<div class="rows" style="padding: 0 23% 4% 0; width: 77%;">
		<div class="fl" style="width: 60.5%; padding: .5% 0 0 0;">
			<strong>7</strong><span style="font-size: 10px; margin: 0 0 0 5%;">Return Period (MM / DD / YYYY)</span>
			<input type="text" name="item7M" size="2" maxlength="2" class="textAlignCenter" value="<?= setData($form0605,'item7') ? date('m',strtotime(setData($form0605, 'item7'))) : ''?>">
			<input type="text" name="item7D" size="2" maxlength="2" class="textAlignCenter" value="<?= setData($form0605,'item7') ? date('d',strtotime(setData($form0605, 'item7'))) : ''?>">
			<input type="text" name="item7Y" size="4" maxlength="4" class="textAlignCenter" value="<?= setData($form0605,'item7') ? date('Y',strtotime(setData($form0605, 'item7'))) : ''?>">
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 30%; padding: .5% 0 .5% .5%;">
			<strong>8</strong><span style="font-size: 10px; margin: 0 0 0 5%;"><a href="#taxtype">Tax Type</a></span>
			<input type="text" name="item8" size="4" class="textAlignCenter" value="<?= setData($form0605, 'item8')?>">
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part I</strong>
		</div>
		
		<span style="padding-left: 30%;">
			<strong>Background Information</strong>
		</span>
	</div>
	
	<div class="rows" style="padding: 0 0 6% 0;">
		<div class="fl" style="width: 27%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>9</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer Identification No.</span>
			<div style="margin-left: 7%;">
				<?php
					$tin = explode('-', setData($form0605, 'item9'));
				?>
				<input type="text" name="item9[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[0]) ? $tin[0] : ''?>">
				<input type="text" name="item9[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[1]) ? $tin[1] : ''?>">
				<input type="text" name="item9[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[2]) ? $tin[2] : ''?>">
				<input type="text" name="item9[]" class="inset textAlignCenter" maxlength="3" size="1" value="<?= isset($tin[2]) ? $tin[3] : ''?>">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 10%; padding: .5% 0 .8% 1%;">
			<strong>10</strong><div style="width: 21%; margin: -16% 0 0 31%;"><span style="font-size: 10px;">RDO Code</span></div>
			<div style="width: 35%; margin: 1% 0 0 30%;">
				<select name="item10" class="select">
					<option <?= setData($form0605,'item10') == '001' ? 'selected' : ''?>>001</option>
					<option <?= setData($form0605,'item10') == '002' ? 'selected' : ''?>>002</option>
					<option <?= setData($form0605,'item10') == '003' ? 'selected' : ''?>>003</option>
					<option <?= setData($form0605,'item10') == '004' ? 'selected' : ''?>>004</option>
					<option <?= setData($form0605,'item10') == '005' ? 'selected' : ''?>>005</option>
					<option <?= setData($form0605,'item10') == '006' ? 'selected' : ''?>>006</option>
					<option <?= setData($form0605,'item10') == '007' ? 'selected' : ''?>>007</option>
					<option <?= setData($form0605,'item10') == '008' ? 'selected' : ''?>>008</option>
					<option <?= setData($form0605,'item10') == '009' ? 'selected' : ''?>>009</option>
					<option <?= setData($form0605,'item10') == '010' ? 'selected' : ''?>>010</option>
					<option <?= setData($form0605,'item10') == '011' ? 'selected' : ''?>>011</option>
					<option <?= setData($form0605,'item10') == '012' ? 'selected' : ''?>>012</option>
					<option <?= setData($form0605,'item10') == '013' ? 'selected' : ''?>>013</option>
					<option <?= setData($form0605,'item10') == '014' ? 'selected' : ''?>>014</option>
					<option <?= setData($form0605,'item10') == '015' ? 'selected' : ''?>>015</option>
					<option <?= setData($form0605,'item10') == '016' ? 'selected' : ''?>>016</option>
					<option <?= setData($form0605,'item10') == '17A' ? 'selected' : ''?>>17A</option>
					<option <?= setData($form0605,'item10') == '17B' ? 'selected' : ''?>>17B</option>
					<option <?= setData($form0605,'item10') == '018' ? 'selected' : ''?>>018</option>
					<option <?= setData($form0605,'item10') == '019' ? 'selected' : ''?>>019</option>
					<option <?= setData($form0605,'item10') == '020' ? 'selected' : ''?>>020</option>
					<option <?= setData($form0605,'item10') == '21A' ? 'selected' : ''?>>21A</option>
					<option <?= setData($form0605,'item10') == '21B' ? 'selected' : ''?>>21B</option>
					<option <?= setData($form0605,'item10') == '022' ? 'selected' : ''?>>022</option>
					<option <?= setData($form0605,'item10') == '23A' ? 'selected' : ''?>>23A</option>
					<option <?= setData($form0605,'item10') == '23B' ? 'selected' : ''?>>23B</option>
					<option <?= setData($form0605,'item10') == '024' ? 'selected' : ''?>>024</option>
					<option <?= setData($form0605,'item10') == '25A' ? 'selected' : ''?>>25A</option>
					<option <?= setData($form0605,'item10') == '25B' ? 'selected' : ''?>>25B</option>
					<option <?= setData($form0605,'item10') == '026' ? 'selected' : ''?>>026</option>
					<option <?= setData($form0605,'item10') == '027' ? 'selected' : ''?>>027</option>
					<option <?= setData($form0605,'item10') == '028' ? 'selected' : ''?>>028</option>
					<option <?= setData($form0605,'item10') == '029' ? 'selected' : ''?>>029</option>
					<option <?= setData($form0605,'item10') == '030' ? 'selected' : ''?>>030</option>
					<option <?= setData($form0605,'item10') == '031' ? 'selected' : ''?>>031</option>
					<option <?= setData($form0605,'item10') == '032' ? 'selected' : ''?>>032</option>
					<option <?= setData($form0605,'item10') == '033' ? 'selected' : ''?>>033</option>
					<option <?= setData($form0605,'item10') == '034' ? 'selected' : ''?>>034</option>
					<option <?= setData($form0605,'item10') == '035' ? 'selected' : ''?>>035</option>
					<option <?= setData($form0605,'item10') == '036' ? 'selected' : ''?>>036</option>
					<option <?= setData($form0605,'item10') == '037' ? 'selected' : ''?>>037</option>
					<option <?= setData($form0605,'item10') == '038' ? 'selected' : ''?>>038</option>
					<option <?= setData($form0605,'item10') == '039' ? 'selected' : ''?>>039</option>
					<option <?= setData($form0605,'item10') == '040' ? 'selected' : ''?>>040</option>
					<option <?= setData($form0605,'item10') == '041' ? 'selected' : ''?>>041</option>
					<option <?= setData($form0605,'item10') == '042' ? 'selected' : ''?>>042</option>
					<option <?= setData($form0605,'item10') == '43A' ? 'selected' : ''?>>43A</option>
					<option <?= setData($form0605,'item10') == '43B' ? 'selected' : ''?>>43B</option>
					<option <?= setData($form0605,'item10') == '044' ? 'selected' : ''?>>044</option>
					<option <?= setData($form0605,'item10') == '045' ? 'selected' : ''?>>045</option>
					<option <?= setData($form0605,'item10') == '046' ? 'selected' : ''?>>046</option>
					<option <?= setData($form0605,'item10') == '047' ? 'selected' : ''?>>047</option>
					<option <?= setData($form0605,'item10') == '048' ? 'selected' : ''?>>048</option>
					<option <?= setData($form0605,'item10') == '049' ? 'selected' : ''?>>049</option>
					<option <?= setData($form0605,'item10') == '050' ? 'selected' : ''?>>050</option>
					<option <?= setData($form0605,'item10') == '051' ? 'selected' : ''?>>051</option>
					<option <?= setData($form0605,'item10') == '052' ? 'selected' : ''?>>052</option>
					<option <?= setData($form0605,'item10') == '53A' ? 'selected' : ''?>>53A</option>
					<option <?= setData($form0605,'item10') == '53B' ? 'selected' : ''?>>53B</option>
					<option <?= setData($form0605,'item10') == '54A' ? 'selected' : ''?>>54A</option>
					<option <?= setData($form0605,'item10') == '54B' ? 'selected' : ''?>>54B</option>
					<option <?= setData($form0605,'item10') == '055' ? 'selected' : ''?>>055</option>
					<option <?= setData($form0605,'item10') == '056' ? 'selected' : ''?>>056</option>
					<option <?= setData($form0605,'item10') == '057' ? 'selected' : ''?>>057</option>
					<option <?= setData($form0605,'item10') == '058' ? 'selected' : ''?>>058</option>
					<option <?= setData($form0605,'item10') == '059' ? 'selected' : ''?>>059</option>
					<option <?= setData($form0605,'item10') == '060' ? 'selected' : ''?>>060</option>
					<option <?= setData($form0605,'item10') == '061' ? 'selected' : ''?>>061</option>
					<option <?= setData($form0605,'item10') == '062' ? 'selected' : ''?>>062</option>
					<option <?= setData($form0605,'item10') == '063' ? 'selected' : ''?>>063</option>
					<option <?= setData($form0605,'item10') == '064' ? 'selected' : ''?>>064</option>
					<option <?= setData($form0605,'item10') == '065' ? 'selected' : ''?>>065</option>
					<option <?= setData($form0605,'item10') == '066' ? 'selected' : ''?>>066</option>
					<option <?= setData($form0605,'item10') == '067' ? 'selected' : ''?>>067</option>
					<option <?= setData($form0605,'item10') == '068' ? 'selected' : ''?>>068</option>
					<option <?= setData($form0605,'item10') == '069' ? 'selected' : ''?>>069</option>
					<option <?= setData($form0605,'item10') == '070' ? 'selected' : ''?>>070</option>
					<option <?= setData($form0605,'item10') == '071' ? 'selected' : ''?>>071</option>
					<option <?= setData($form0605,'item10') == '072' ? 'selected' : ''?>>072</option>
					<option <?= setData($form0605,'item10') == '073' ? 'selected' : ''?>>073</option>
					<option <?= setData($form0605,'item10') == '074' ? 'selected' : ''?>>074</option>
					<option <?= setData($form0605,'item10') == '075' ? 'selected' : ''?>>075</option>
					<option <?= setData($form0605,'item10') == '076' ? 'selected' : ''?>>076</option>
					<option <?= setData($form0605,'item10') == '077' ? 'selected' : ''?>>077</option>
					<option <?= setData($form0605,'item10') == '078' ? 'selected' : ''?>>078</option>
					<option <?= setData($form0605,'item10') == '079' ? 'selected' : ''?>>079</option>
					<option <?= setData($form0605,'item10') == '080' ? 'selected' : ''?>>080</option>
					<option <?= setData($form0605,'item10') == '081' ? 'selected' : ''?>>081</option>
					<option <?= setData($form0605,'item10') == '082' ? 'selected' : ''?>>082</option>
					<option <?= setData($form0605,'item10') == '083' ? 'selected' : ''?>>083</option>
					<option <?= setData($form0605,'item10') == '084' ? 'selected' : ''?>>084</option>
					<option <?= setData($form0605,'item10') == '085' ? 'selected' : ''?>>085</option>
					<option <?= setData($form0605,'item10') == '086' ? 'selected' : ''?>>086</option>
					<option <?= setData($form0605,'item10') == '087' ? 'selected' : ''?>>087</option>
					<option <?= setData($form0605,'item10') == '088' ? 'selected' : ''?>>088</option>
					<option <?= setData($form0605,'item10') == '089' ? 'selected' : ''?>>089</option>
					<option <?= setData($form0605,'item10') == '090' ? 'selected' : ''?>>090</option>
					<option <?= setData($form0605,'item10') == '091' ? 'selected' : ''?>>091</option>
					<option <?= setData($form0605,'item10') == '092' ? 'selected' : ''?>>092</option>
					<option <?= setData($form0605,'item10') == '93A' ? 'selected' : ''?>>93A</option>
					<option <?= setData($form0605,'item10') == '93B' ? 'selected' : ''?>>93B</option>
					<option <?= setData($form0605,'item10') == '094' ? 'selected' : ''?>>094</option>
					<option <?= setData($form0605,'item10') == '095' ? 'selected' : ''?>>095</option>
					<option <?= setData($form0605,'item10') == '096' ? 'selected' : ''?>>096</option>
					<option <?= setData($form0605,'item10') == '097' ? 'selected' : ''?>>097</option>
					<option <?= setData($form0605,'item10') == '098' ? 'selected' : ''?>>098</option>
					<option <?= setData($form0605,'item10') == '099' ? 'selected' : ''?>>099</option>
					<option <?= setData($form0605,'item10') == '100' ? 'selected' : ''?>>100</option>
					<option <?= setData($form0605,'item10') == '101' ? 'selected' : ''?>>101</option>
					<option <?= setData($form0605,'item10') == '102' ? 'selected' : ''?>>102</option>
					<option <?= setData($form0605,'item10') == '103' ? 'selected' : ''?>>103</option>
					<option <?= setData($form0605,'item10') == '104' ? 'selected' : ''?>>104</option>
					<option <?= setData($form0605,'item10') == '105' ? 'selected' : ''?>>105</option>
					<option <?= setData($form0605,'item10') == '106' ? 'selected' : ''?>>106</option>
					<option <?= setData($form0605,'item10') == '107' ? 'selected' : ''?>>107</option>
					<option <?= setData($form0605,'item10') == '108' ? 'selected' : ''?>>108</option>
					<option <?= setData($form0605,'item10') == '109' ? 'selected' : ''?>>109</option>
					<option <?= setData($form0605,'item10') == '110' ? 'selected' : ''?>>110</option>
					<option <?= setData($form0605,'item10') == '111' ? 'selected' : ''?>>111</option>
					<option <?= setData($form0605,'item10') == '112' ? 'selected' : ''?>>112</option>
					<option <?= setData($form0605,'item10') == '113' ? 'selected' : ''?>>113</option>
					<option <?= setData($form0605,'item10') == '114' ? 'selected' : ''?>>114</option>
					<option <?= setData($form0605,'item10') == '115' ? 'selected' : ''?>>115</option>
					<option <?= setData($form0605,'item10') == '116' ? 'selected' : ''?>>116</option>
					<option <?= setData($form0605,'item10') == '117' ? 'selected' : ''?>>117</option>
					<option <?= setData($form0605,'item10') == '118' ? 'selected' : ''?>>118</option>
					<option <?= setData($form0605,'item10') == '119' ? 'selected' : ''?>>119</option>
					<option <?= setData($form0605,'item10') == '120' ? 'selected' : ''?>>120</option>
					<option <?= setData($form0605,'item10') == '121' ? 'selected' : ''?>>121</option>
					<option <?= setData($form0605,'item10') == '122' ? 'selected' : ''?>>122</option>
					<option <?= setData($form0605,'item10') == '123' ? 'selected' : ''?>>123</option>
					<option <?= setData($form0605,'item10') == '124' ? 'selected' : ''?>>124</option>
					<option <?= setData($form0605,'item10') == '125' ? 'selected' : ''?>>125</option>
					<option <?= setData($form0605,'item10') == '126' ? 'selected' : ''?>>126</option>
					<option <?= setData($form0605,'item10') == '132' ? 'selected' : ''?>>132</option>
				</select>
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 25%; padding: .5% 0 1.3% 1%;">
			<strong>11</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer Classification </span>
			<div style="margin: 1% 0 0 20%;">
				<input type="radio" name="item11" id="I" value="I" <?= setData($form0605,'item11') == 'I' ? 'checked' : ''?>> 
				<label for="I">I</label>
				<input type="radio" name="item11" id="N" value="N" <?= setData($form0605,'item11') == 'N' ? 'checked' : ''?>>
				<label for="N">N</label>
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 25%; padding: .5% 0 .6% 1%;">
			<strong>12</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Line of Business/Occupation</span>
			<input type="text" name="item12" class="inset textAlignLeft" style="margin: 1% 0 0 5%;" value="<?= setData($form0605, 'item12')?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7% 0;">
		<div class="fl" style="width: 72.2%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>13</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer's Name (For Individual) Last Name, First Name, Middle Name/ (For Non-individual) Registered Name</span>
			<input type="text" name="item13" class="inset textAlignLeft" size="50" style="margin: 1% 0 0 4%;" value="<?= setData($form0605, 'item13')?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% 1.5% .5%;">
			<strong>14</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Telephone Number</span>
			<input type="text" name="item14" class="inset textAlignCenter" size="13" style="margin: 1% 0 0 10%;" value="<?= setData($form0605, 'item14')?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7% 0;">
		<div class="fl" style="width: 72.2%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>15</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Registered Address</span><br/>
			<input type="text" name="item15" class="inset textAlignLeft" size="50" style="margin: 1% 0 0 4%;" value="<?= setData($form0605, 'item15')?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% 1.5% .5%;">
			<strong>16</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span><br/>
			<input type="text" name="item16" class="inset textAlignCenter" size="13" style="margin: 1% 0 0 10%;" value="<?= setData($form0605, 'item16')?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 2.9% 0;">
		<div class="fl" style="width: 72.2%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>17</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Manner of Payment </span>
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>18</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Type of Payment </span>
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 16% 0;">
		<div class="fl" style="width: 72.2%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<table style="font-size: 10px;">
				<tr>
					<td style="width: 50%;">Voluntary Payment</td>
					<td style="width: 50%;">Per Audit/Delinquent Account</td>
				<tr>
				<tr>
					<td>
						<input type="radio" name="item17" id="Self-Assessment" value="Self-Assessment" <?= setData($form0605,'item17') == 'Self-Assessment' ? 'checked' : ''?>> 
						<label for="Self-Assessment">Self-Assessment</label> <br/>
						<input type="radio" name="item17" id="Penalties" value="Penalties" <?= setData($form0605,'item17') == 'Penalties' ? 'checked' : ''?>>
						<label for="Penalties">Penalties</label> <br/>
						<input type="radio" name="item17" id="Tax Deposit/Advance Payment" value="Tax Deposit/Advance Payment" <?= setData($form0605,'item17') == 'Tax Deposit/Advance Payment' ? 'checked' : ''?>>
						<label for="Tax Deposit/Advance Payment">Tax Deposit/Advance Payment</label> <br/>
						<input type="radio" name="item17" id="Income Tax Second Installment(Individual)" value="Income Tax Second Installment(Individual)" <?= setData($form0605,'item17') == 'Income Tax Second Installment(Individual)' ? 'checked' : ''?>>
						<label for="Income Tax Second Installment(Individual)">Income Tax Second Installment(Individual)</label> <br/>
						<input type="radio" name="item17" id="Others(Specify)" value="Others(Specify)" <?= setData($form0605,'item17') == 'Others(Specify)' ? 'checked' : ''?>>
						<label for="Others(Specify)">Others(Specify)</label> <br/>
						<input type="text" name="item17PaymentOthers" value="<?= setData($form0605,'item17PaymentOthers')?>">
					</td>
					<td style="padding-bottom: 17%;">
						<input type="radio" name="item17" id="Preliminary/Final Assess/Deficiency Tax" value="Preliminary/Final Assess/Deficiency Tax" <?= setData($form0605,'item17') == 'Preliminary/Final Assess/Deficiency Tax' ? 'checked' : ''?>>
						<label for="Preliminary/Final Assess/Deficiency Tax">Preliminary/Final Assess/Deficiency Tax</label><br/>
						<input type="radio" name="item17" id="Accounts Receivable/Delinquent Account" value="Accounts Receivable/Delinquent Account" <?= setData($form0605,'item17') == 'Accounts Receivable/Delinquent Account' ? 'checked' : ''?>>
						<label for="Accounts Receivable/Delinquent Account">Accounts Receivable/Delinquent Account</label>
					</td>
				<tr>

			</table>
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% 6.8% .5%; font-size: 10px;">
			<input type="radio" name="item18" id="Installment" value="Installment" <?= setData($form0605,'item18') == 'Installment' ? 'checked' : ''?>>
				<label for="Installment">Installment</label><br/>
				
			<input type="text" name="item18Installment" size="5" maxlength="2" value="<?= setData($form0605,'item18Installment')?>">No. of Installment<br/>
			
			<input type="radio" name="item18" id="Partial Payment" value="Partial Payment" <?= setData($form0605,'item18') == 'Partial Payment' ? 'checked' : ''?>>
				<label for="Partial Payment">Partial Payment</label><br/>
			<input type="radio" name="item18" id="Full Payment" value="Full Payment" <?= setData($form0605,'item18') == 'Full Payment' ? 'checked' : ''?>>
				<label for="Full Payment">Full Payment</label> 
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part II</strong>
		</div>
		
		<span style="padding-left: 32%;">
			<strong>Computation of Tax</strong>
		</span>
	</div>
	
	<div style="padding: 0 0 0 0; width: 100%; border-bottom: #777 solid 1px; font-size: 10px; text-align: left;">
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>19</strong></td>
				<td style="width: 71%;"> Basic Tax/Deposit/Advance Payment </td>
				<td style="width: 20%;">
					<strong>19</strong>
					<input type="text" name="item19" class="inset isInt" size="25" style="margin: 1% 0 0 0;" value="<?= setData($form0605,'item19')?>">
				</td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>20</strong></td>
				<td style="width: 74.1%;">Add Penalties</td>
				<td style="width: 30%;"></td>
			</tr>
		</table>
		
		<table style="width: 100%;">
			<tr>
				<td style="width: 5%;"></td>
				<td style="width: 20%; padding-left: 8%;">Surcharge</td>
				<td style="width: 20%; padding-left: 8%;">Interest</td>
				<td style="width: 20%; padding-left: 8%;">Compromise</td>
				<td style="width: 20%;"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<strong>20A</strong>
					<input type="text" name="item20A" class="inset isInt" size="13" style="margin: 1% 0 0 0;" value="<?= setData($form0605,'item20A')?>">
				</td>
				<td>
					<strong>20B</strong>
					<input type="text" name="item20B" class="inset isInt" size="13" style="margin: 1% 0 0 0;" value="<?= setData($form0605,'item20B')?>">
				</td>
				<td>
					<strong>20C</strong>
					<input type="text" name="item20C" class="inset isInt" size="13" style="margin: 1% 0 0 0;"value="<?= setData($form0605,'item20C')?>">
				</td>
				<td>
					<strong>20D</strong>
					<input type="text" name="item20D" class="inset isInt" size="13" style="margin: 1% 0 0 0;" value="<?= setData($form0605,'item20D')?>">
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="width: 1%;"><strong>21</strong></td>
				<td style="width: 71%;"> Total Amount Payable(Sum of Items 19 & 20D)</td>
				<td style="width: 20%;">
					<strong>21</strong>
					<input type="text" name="item21" class="inset isInt" size="25" style="margin: 1% 0 0 0;" value="<?= setData($form0605,'item21')?>">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="rows" style="width: 98%; padding: 0 0 2.5% 2%;">
		<table style="width: 100%; text-align: center;">
			<tr>
				<td style="width: 49%;">
					<span style="font-size: 10px; padding: 0 3% 0 1.5%;">
						<input type="radio" name="approvedBy" id="Pre-approved" value="pre" <?= setData($form0605,'approvedBy') == 'pre' ? 'checked' : ''?>> 
						<label  for="Pre-approved">Pre-approved by Investigating Office</label>
					</span>
				</td>
				<td style="width: 49%;">	
					<span style="font-size: 10px; padding: 0 3% 0 1.5%;">
						<input type="radio" name="approvedBy" id="Not approved" value="not" <?= setData($form0605,'approvedBy') == 'not' ? 'checked' : ''?>>
						<label  for="Not approved">Not approved by Investigating Office</label>
					</span>
				</td>
			</tr>
			
		</table>
	</div>

<div id="openModal" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<table style="border: solid 1px #000; width: 100%;">
			<tr>
				<th style="width: 10%; border: solid 1px #777;">Code</th>
				<th style="width: 90%; border: solid 1px #777;">Description</th>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP010</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON TAX ON INCOME</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP020</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON TAX ON TRANSFERS OF PROPERTY</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP030</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON VALUE-ADDED TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP040</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON OTHER PERCENTAGE TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP042</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON STOCK TRANS (IPO) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP050</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON EXCISE TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP051</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON EXCISE SPECIFIC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP060</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON DOCUMENTARY STAMP TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP070</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON MISCELLANEOUS TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP071</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON ENERGY TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP090</td>
				<td style="border: solid 1px #777;">OTHERS FINES AND PENALTIES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP100</td>
				<td style="border: solid 1px #777;">OTHERS FINES AND PENALTIES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP110</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON COMPENSATION </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP120</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON COMPENSATION </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP130</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ON EXPANDED </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP140</td>
				<td style="border: solid 1px #777;">FINES AND PEN - GOVERNMENT MONEY</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP141</td>
				<td style="border: solid 1px #777;">FINES AND PEN - WINNING AND PRIZES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP150</td>
				<td style="border: solid 1px #777;">FINES AND PEN - BANKS AND FINANCIAL INSTITUTION </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP160</td>
				<td style="border: solid 1px #777;">FINES AND PEN - ESTATE TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP170</td>
				<td style="border: solid 1px #777;">FINES AND PEN - DONORS TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP180</td>
				<td style="border: solid 1px #777;">FINES AND PEN - W/T ON REAL PROP/M VEHICLES NOT SUBJ TO CG </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP190 </td>
				<td style="border: solid 1px #777;">FINES AND PEN - REGISTRATION FEE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">FP930 </td>
				<td style="border: solid 1px #777;">FINES AND PEN - INSPECTION FEES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">II012 </td>
				<td style="border: solid 1px #777;">RESIDENT ALIEN - PURE BUSINESS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC010 </td>
				<td style="border: solid 1px #777;">TAX AMNESTY ON INCOME (INDIVIDUAL) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC020 </td>
				<td style="border: solid 1px #777;">TAX AMNESTY ON INCOME (CORPORATE) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC030 </td>
				<td style="border: solid 1px #777;">COMP. PYMTS ON DELQNT. ACCOUNTS AND DISP. ASSESSMENTS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC031 </td>
				<td style="border: solid 1px #777;">DEFICIENCY TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC040 </td>
				<td style="border: solid 1px #777;">INCOME FROM FORFEITED PROPERTIES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC050 </td>
				<td style="border: solid 1px #777;">PROCEEDS FROM RESALE OF ESTATE TAKEN FOR TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC060 </td>
				<td style="border: solid 1px #777;">ENERGY TAX ON EXCESS ELECTRIC POWER CONSUMPTION </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC090 </td>
				<td style="border: solid 1px #777;">TIN CARD FEES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC180 </td>
				<td style="border: solid 1px #777;">REGISTRATION FEE FOR VAT/NON-VAT TAXPAYERS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC190 </td>
				<td style="border: solid 1px #777;">TRAVEL TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC200 </td>
				<td style="border: solid 1px #777;">OTHER MISCELLANEOUS TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC210 </td>
				<td style="border: solid 1px #777;">MISCELLANEOUS TAXES - OTHER TAX REVENUE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">VM160 </td>
				<td style="border: solid 1px #777;">VAT ON MANUFACTURING - SUGAR </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA010 </td>
				<td style="border: solid 1px #777;">DIST SPIR PROD FR SAP OF NIPA, ETC UND SEC 138(a) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA020 </td>
				<td style="border: solid 1px #777;">DIST SPIRIT PROD IN A POT STILL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA031 </td>
				<td style="border: solid 1px #777;">DIST SPRT O.T. SAP OF NIPA, ETC UND SEC. 141 (B)(1) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA032 </td>
				<td style="border: solid 1px #777;">DIST SPRT O.T. SAP OF NIPA, ETC UND SEC. 141 (B)(2) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA033 </td>
				<td style="border: solid 1px #777;">DIST SPRT O.T. SAP OF NIPA, ETC UND SEC. 141 (B)(3) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA040 </td>
				<td style="border: solid 1px #777;">MEDICINAL PREP FLAVORING EXTRACTS AND ALL OTHER PREP </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA051 </td>
				<td style="border: solid 1px #777;">BEER, LGR BEER, ALE, PRTR FERMIN LIQ, ETC UND SEC 143 (A) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value=""> XA052 </td>
				<td style="border: solid 1px #777;">BEER, LGR BEER, ALE, PRTR FERMIN LIQ, ETC UND SEC 143 (B) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA053 </td>
				<td style="border: solid 1px #777;">BEER, LGR BEER, ALE, PRTR FERMIN LIQ, ETC UND SEC 143 (C) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA061 </td>
				<td style="border: solid 1px #777;">SPARKLING WINES/CHAMPAGNE, ETC UND SEC 142 (A)(1) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA062 </td>
				<td style="border: solid 1px #777;">SPARKLING WINES/CHAMPAGNE, ETC UND SEC 142 (A)(2) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA070 </td>
				<td style="border: solid 1px #777;">STILL WINES CONTAINING 14% ALCOHOL OR LESS ALCOHOL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XA080 </td>
				<td style="border: solid 1px #777;">STILL WINES CONTAINING OVER 14% ALCOHOL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG020 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (GASOLINE), ENGINE DISPL UP TO 1600CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG030 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (GASOLINE), ENGINE DISPL OF 1601 TO 2000CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG040 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (GASOLINE), ENGINE DISPL OF 2001 TO 2700CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG050 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (GASOLINE), ENG DISPL 2701 OR OVER </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG060 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (DIESEL), ENG DISPL UP TO 1800CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG070 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (DIESEL), ENG DISPL OF 1801 TO 2300CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG080 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (DIESEL), ENG DISPL OF 2301 TO 3000CC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value=""> XG090 </td>
				<td style="border: solid 1px #777;">AUTOMOBILES (DIESEL), ENG DISPL OF 3001CC OR OVER </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG100 </td>
				<td style="border: solid 1px #777;">JEWELRY </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG110 </td>
				<td style="border: solid 1px #777;">PERFUMES AND TOILET WATERS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XG120 </td>
				<td style="border: solid 1px #777;">YACHTS AND OTHER VESSELS INTENDED FOR PLEASURE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM010 </td>
				<td style="border: solid 1px #777;">COAL AND COKE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM020 </td>
				<td style="border: solid 1px #777;">NON-METALLIC MINERALS AND QUARRY RESOURCES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM030 </td>
				<td style="border: solid 1px #777;">GOLD AND CHROMITE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM040 </td>
				<td style="border: solid 1px #777;">COPPER AND OTHER METALLIC MINERALS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM050 </td>
				<td style="border: solid 1px #777;">INDIGENOUS PETROLEUM </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XM051 </td>
				<td style="border: solid 1px #777;">LOCALLY EXTRACTED NATURAL GAS AND LIQUIFIED NATURAL GAS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP010 </td>
				<td style="border: solid 1px #777;">LUBRICATING OIL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP020 </td>
				<td style="border: solid 1px #777;">GREASE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP030 </td>
				<td style="border: solid 1px #777;">PROCESSED GAS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP040 </td>
				<td style="border: solid 1px #777;">WAXES AND PETROLATUM </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP060 </td>
				<td style="border: solid 1px #777;">PREMIUM GASOLINE - UNLEADED </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP070 </td>
				<td style="border: solid 1px #777;">PREMIUM GASOLINE - LEADED </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value=""> XP080 </td>
				<td style="border: solid 1px #777;">REGULAR GASOLINE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP090 </td>
				<td style="border: solid 1px #777;">NAPTHA </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP100 </td>
				<td style="border: solid 1px #777;">NAPTHA TO USED FOR PETRO-CHEMICAL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP110 </td>
				<td style="border: solid 1px #777;">AVIATION GASOLINE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP120 </td>
				<td style="border: solid 1px #777;">AVIATION TURBO JET FUEL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP130 </td>
				<td style="border: solid 1px #777;">KEROSENE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP131 </td>
				<td style="border: solid 1px #777;">KEROSENE USED AS AVIATION FUEL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP140 </td>
				<td style="border: solid 1px #777;">DIESEL FUEL AND SIMILAR FUEL OILS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP150 </td>
				<td style="border: solid 1px #777;">LPG USED FOR MOTIVE POWER </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP160 </td>
				<td style="border: solid 1px #777;">LPG </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP170 </td>
				<td style="border: solid 1px #777;">ASPHALTS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP180 </td>
				<td style="border: solid 1px #777;">BUNKER/REFINERY FUEL/FEEDSTOCK </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XP190 </td>
				<td style="border: solid 1px #777;">BASESTOCKS FOR LUBRICATING OIL SAND GREASES, HVD, ETC. </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT010 </td>
				<td style="border: solid 1px #777;">SMOKING TOBACCO AND OTHER PARTIALLY MANUF TOBACCO </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT020 </td>
				<td style="border: solid 1px #777;">CHEWING TOBACCO </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT030 </td>
				<td style="border: solid 1px #777;">CIGARS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT040 </td>
				<td style="border: solid 1px #777;">CIGARETTES PACKED BY HAND </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT050 </td>
				<td style="border: solid 1px #777;">CIGARETTES PACKED BY MACHINE, SEC 145 (C)(1) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT060 </td>
				<td style="border: solid 1px #777;">CIGARETTES PACKED BY MACHINE, SEC 145 (C)(2) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT070 </td>
				<td style="border: solid 1px #777;">CIGARETTES PACKED BY MACHINE, SEC 145 (C)(3) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT080 </td>
				<td style="border: solid 1px #777;">TOBACCO INSPECT FEES FOR EACH THOUSAND CIGARS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT090 </td>
				<td style="border: solid 1px #777;">TOBACCO INSPECT FEES FOR EACH THOUSAND CIGARETTES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT100 </td>
				<td style="border: solid 1px #777;">TOBACCO INSPECT FEE PER KG OF LEAF TOBACCO AND OTHER </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT110 </td>
				<td style="border: solid 1px #777;">PER KG OF SCRAPS AND OTHER MANUF TOBACCO PROD </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT120 </td>
				<td style="border: solid 1px #777;">ADDL IMPT BLENDING TOBACCO INSPECT AND MONITOR FEE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">XT130 </td>
				<td style="border: solid 1px #777;">CIGARETTES PACKED BY MACHINE, SEC. 145 (C)(4) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">WI555 </td>
				<td style="border: solid 1px #777;">SALE, EXCHANGE OR TRANSFER OF REAL PROPERTY OTHER THAN CAPITAL ASSETS, SOLD BY AN INDIVIDUAL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC220 </td>
				<td style="border: solid 1px #777;">ADVANCE PAYMENT OF VALUE ADDED TAX ON PRIVILEGE STORE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC230 </td>
				<td style="border: solid 1px #777;">ADVANCE PAYMENT OF INCOME TAX ON PRIVILEGE STORE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605atc" value="">MC240 </td>
				<td style="border: solid 1px #777;">ADVANCE PAYMENT OF PERCENTAGE TAX ON PRIVILEGE STORE </td>
			</tr>
		</table>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

<div id="taxtype" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<center>ATC</center>
		<table style="border: solid 1px #000; width: 100%;">
			<tr>
				<th style="width: 10%; border: solid 1px #777;">Tax Type</th>
				<th style="width: 90%; border: solid 1px #777;">Description</th>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">CG </td>
				<td style="border: solid 1px #777;">CAPITAL GAINS TAX-Real Property </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">CS </td>
				<td style="border: solid 1px #777;">CAPITAL GAINS TAX-Stocks </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">DN </td>
				<td style="border: solid 1px #777;">DONORS TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">DO </td>
				<td style="border: solid 1px #777;">DOCUMENTARY STAMP TAX-ONE TIME </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">DS </td>
				<td style="border: solid 1px #777;">DOCUMENTARY STAMP TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">ES </td>
				<td style="border: solid 1px #777;">ESTATE TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">ET </td>
				<td style="border: solid 1px #777;">ENERGY TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">IE </td>
				<td style="border: solid 1px #777;">IMPROPERLY ACCUMULATED EARNINGS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">IT </td>
				<td style="border: solid 1px #777;">INCOME TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">MC </td>
				<td style="border: solid 1px #777;">MISCELLANEOUS TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">PM</td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX-MONTHLY </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">PT</td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX-QUARTERLY </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">QP </td>
				<td style="border: solid 1px #777;">QUALIFYING FEES-PAGCOR </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">RF </td>
				<td style="border: solid 1px #777;">REGISTRATION FEE </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">SL </td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX-SPECIAL LAWS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">SO </td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX-STOCKS(IPO) </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">ST </td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX-STOCKS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">TR </td>
				<td style="border: solid 1px #777;">TRAVEL TAX-PTA </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">VT </td>
				<td style="border: solid 1px #777;">VALUE ADDED TAX </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WB </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-BANKS AND OTHER FINANCIAL INSTITUTIONS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WC </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-COMPENSATION </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WE</td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-EXPANDED </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WF </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-FINAL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WG </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-VAT AND OTHER PERCENTAGE TAXES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WO </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-OTHERS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WR </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-FRINGE BENEFITS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">WW </td>
				<td style="border: solid 1px #777;">WITHHOLDING TAX-PERCENTAGE TAX ON WINNING AND PRIZES </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XA </td>
				<td style="border: solid 1px #777;">EXCISE TAX-ALCOHOL </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XF </td>
				<td style="border: solid 1px #777;">EXCISE TAX-TOBACCO INSPECTION AND MONITORING FESS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XG </td>
				<td style="border: solid 1px #777;">EXCISE TAX-AUTOMOBILES AND NON-ESSENTIALS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XM </td>
				<td style="border: solid 1px #777;">EXCISE TAX-MINERALS </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XP </td>
				<td style="border: solid 1px #777;">EXCISE TAX-PETROLEUM </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XS </td>
				<td style="border: solid 1px #777;">EXCISE TAX-SPECIFIC </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XT </td>
				<td style="border: solid 1px #777;">EXCISE TAX-TOBACCO </td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="radio" name="0605type" value="">XV </td>
				<td style="border: solid 1px #777;">EXCISE TAX-AD VALOREM </td>
			</tr>
		</table>
		<div style="margin-top: 5%">
			<center>
				<button>OK</button>
				<a href="#close"><button>CANCEL</button></a>
			</center>
		</div>
	</div>
</div>

</div>

</body>
</html>
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