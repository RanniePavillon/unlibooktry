<?php
$form1701q = isset($this->form1701q) ? $this->form1701q : '';

// echo '<pre>';
// print_r($form1701q);
// exit;
	
?>
<script>
	paymentmode = "<?php echo DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->modeOfPayment; ?>";
</script>
<style>
	.textAlignCenter{
		text-align:center !important;
	}
	.textAlignLeft{
		text-align:left !important;
		padding-left:5px;
	}
	input[type="text"] {
		font-weight: bold !important;
		font-size: 16px !important;
	}
</style>
<html>
<head>

<link rel="stylesheet" href="<?= $this->cssUrl?>1701q.css">
<link rel="stylesheet" href="<?= $this->cssUrl?>modal.css">
<script src="<?= $this->imageUrl ?>js/custom.js"></script>
</head>
<body>
<div class="container" style="margin-top:40px!important;">
	<div class="form-holder">
		<div class="fl" style="border-bottom:1px solid #aaa;width: 100%;">
				(To be filled up by the BIR)
				<br/>>DLN
				<label class="ml"></label>
				<label class="ml"></label>
				<label class="ml"></label>
				<label class="ml"></label>
				> Taxpayer PSOC:
				<label class="ml"></label>
				> PSIC:
				<label class="ml"></label>
				<label class="ml"></label>
				<label class="ml"></label>
				> Spouse PSOC:
				<label class="ml"></label>
				
				> PSIC:
				
			</div>
		<div class="header">
			
			<div class="topleft fl">
				<img src="<?= $this->imageUrl?>img/logo.png">
				<div id="banner" class="fl">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
				
			</div>
			<div class="mid fl tc">
				<h1>Quarterly Income<br/>
					Tax Return
			</div>
			<div class="topright fr	">
				<div class="formNo">BIR Form No.
				<h1>1701Q</h1>
				July 2008 (ENCS)
				</div>
			</div>
				<br/>
			
		
		</div>
		<div class="fl" style="border-bottom:1px solid #aaa;width:100%">
				For Self-Employed Individuals, Estates, and Trusts<br/>
				(Including those with both Business & Compensation Income) 
		</div>
		<div class="fl">
		Fill in all applicable spaces. Mark all appropriate boxes with an X.
		</div>
	<div class="section" style="margin-top: 55px;">
		<div class="one">
			<div class="topleft fl one">
				<b>1</b><small id="space"> For the Year (YYYY)</small>
			
				<input type="text" size=4  class="textAlignCenter" maxlength="4" name="item1" value="<?= setData($form1701q, 'item1'); ?>">
			</div>
		</div>
		<div class="two" style="border:0;">
			<div class="topleft fl two">
				<b>2</b><small id="space">Quarter</small>
				<br/>
				<div class="box">
					<input type="radio" name="item2" value="1st" id="1st" <?= setData($form1701q, 'item2') == '1st' ? 'checked' : ''?>> 
					<label for="1st">1st</label>
					<input type="radio" name="item2" value="2nd" id="2nd" <?= setData($form1701q, 'item2') == '2nd' ? 'checked' : ''?>> 
					<label for="2nd">2nd</label>
					<input type="radio" name="item2" value="3rd" id="3rd" <?= setData($form1701q, 'item2') == '3rd' ? 'checked' : ''?>> 
					<label for="3rd">3rd</label>
				</div>
			
			</div>
		</div>
		<div class="three" style="border:0;">
			<div class="topleft fl three">
				<b>3</b><small id="space"> Amended Return?</small>
				<br/>
				<div class="indent mdd box">
					<input type="radio" name="item3" id="item3_yes" value="yes" <?= setData($form1701q, 'item3') == 'yes' ? 'checked' : ''?>>
					<label for="item3_yes">Yes</label>
					<input type="radio"name="item3" id="item3_no" value="no" <?= setData($form1701q, 'item3') == 'no' ? 'checked' : ''?>> 
					<label for="item3_no">No</label>
				</div>
			
			</div>
		</div>
			<div class="four" style="border:0;">
			<div class="topleft fl four">
				<b>4</b><small id="space"> No. of Sheets Attached?</small>
				<br/>
				<div class="indent mdd">
					<input type="text" size=6 name="item4" class="textAlignCenter" value="<?= setData($form1701q, 'item4'); ?>"> 
					
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
		
			<table  style="border-bottom:1px solid #aaa">
				<tr>
					<th>Taxpayer/Filer</th>
					<th>Spouse</th>
				</tr>
			</table>
			<table style="width:100%;border-right: 1px solid #aaa; ">
				<tr>
					<td width="35%" style="border-right: 1px solid #aaa; padding-left: 20px;">
						<b>5</b> TIN
						<?php
						 $tin1 = setData($form1701q, 'item5');
						 $tin = explode('-',$tin1);
						?>
						
						<input type="text" size=1 maxlength="3"  name="item5[]" class="textAlignCenter" value="<?= isset($tin[0]) ? $tin[0] : ''?>">
						<input type="text" size=1 maxlength="3"  name="item5[]" class="textAlignCenter" value="<?= isset($tin[1]) ? $tin[1] : ''?>">
						<input type="text" size=1 maxlength="3"  name="item5[]" class="textAlignCenter" value="<?= isset($tin[2]) ? $tin[2] : ''?>">
						<input type="text" size=1 maxlength="3" name="item5[]" class="textAlignCenter" value="<?= isset($tin[3]) ? $tin[3] : ''?>" >
					</td>
					<td width="15%" style="border-right: 1px solid #aaa;">
						<b>6</b> RDO
						<input type="text" name="item6" value="<?= setData($form1701q, 'item6'); ?>" class="textAlignCenter" style="width:50px;">
						<br/>code
					</td>
					<td width="35%" style="border-right: 1px solid #aaa;padding-left:20px;">
						<b>7</b> TIN
						
						<?php
							$spouseTin1 = setData($form1701q, 'item7');
							$spouseTin = explode('-', $spouseTin1);
						?>
						
						<input type="text" size=1 maxlength="3" class="textAlignCenter" name="item7[]" value="<?= isset($spouseTin[0]) ? $spouseTin[0] : ''?>">
						<input type="text" size=1 maxlength="3" class="textAlignCenter"  name="item7[]" value="<?= isset($spouseTin[1]) ? $spouseTin[1] : ''?>">
						<input type="text" size=1 maxlength="3" class="textAlignCenter" name="item7[]" value="<?= isset($spouseTin[2]) ? $spouseTin[2] : ''?>">
						<input type="text" size=1 maxlength="4" class="textAlignCenter" name="item7[]" value="<?= isset($spouseTin[3]) ? $spouseTin[3] : ''?>">
						
					</td>
					<td width="15%">
						<b>8</b> RDO
						<select name="item8">
							<option></option>
							<option <?= setData($form1701q, 'item8') == '001' ? 'selected' : ''?>>001</option>
							<option <?= setData($form1701q, 'item8') == '002' ? 'selected' : ''?>>002</option>
							<option <?= setData($form1701q, 'item8') == '003' ? 'selected' : ''?>>003</option>
							<option <?= setData($form1701q, 'item8') == '004' ? 'selected' : ''?>>004</option>
							<option <?= setData($form1701q, 'item8') == '005' ? 'selected' : ''?>>005</option>
							<option <?= setData($form1701q, 'item8') == '006' ? 'selected' : ''?>>006</option>
							<option <?= setData($form1701q, 'item8') == '007' ? 'selected' : ''?>>007</option>
							<option <?= setData($form1701q, 'item8') == '008' ? 'selected' : ''?>>008</option>
							<option <?= setData($form1701q, 'item8') == '009' ? 'selected' : ''?>>009</option>
							<option <?= setData($form1701q, 'item8') == '010' ? 'selected' : ''?>>010</option>
							<option <?= setData($form1701q, 'item8') == '011' ? 'selected' : ''?>>011</option>
							<option <?= setData($form1701q, 'item8') == '012' ? 'selected' : ''?>>012</option>
							<option <?= setData($form1701q, 'item8') == '013' ? 'selected' : ''?>>013</option>
							<option <?= setData($form1701q, 'item8') == '014' ? 'selected' : ''?>>014</option>
							<option <?= setData($form1701q, 'item8') == '015' ? 'selected' : ''?>>015</option>
							<option <?= setData($form1701q, 'item8') == '016' ? 'selected' : ''?>>016</option>
							<option <?= setData($form1701q, 'item8') == '17A' ? 'selected' : ''?>>17A</option>
							<option <?= setData($form1701q, 'item8') == '17B' ? 'selected' : ''?>>17B</option>
							<option <?= setData($form1701q, 'item8') == '018' ? 'selected' : ''?>>018</option>
							<option <?= setData($form1701q, 'item8') == '019' ? 'selected' : ''?>>019</option>
							<option <?= setData($form1701q, 'item8') == '020' ? 'selected' : ''?>>020</option>
							<option <?= setData($form1701q, 'item8') == '21A' ? 'selected' : ''?>>21A</option>
							<option <?= setData($form1701q, 'item8') == '21B' ? 'selected' : ''?>>21B</option>
							<option <?= setData($form1701q, 'item8') == '022' ? 'selected' : ''?>>022</option>
							<option <?= setData($form1701q, 'item8') == '23A' ? 'selected' : ''?>>23A</option>
							<option <?= setData($form1701q, 'item8') == '23B' ? 'selected' : ''?>>23B</option>
							<option <?= setData($form1701q, 'item8') == '024' ? 'selected' : ''?>>024</option>
							<option <?= setData($form1701q, 'item8') == '25A' ? 'selected' : ''?>>25A</option>
							<option <?= setData($form1701q, 'item8') == '25B' ? 'selected' : ''?>>25B</option>
							<option <?= setData($form1701q, 'item8') == '026' ? 'selected' : ''?>>026</option>
							<option <?= setData($form1701q, 'item8') == '027' ? 'selected' : ''?>>027</option>
							<option <?= setData($form1701q, 'item8') == '028' ? 'selected' : ''?>>028</option>
							<option <?= setData($form1701q, 'item8') == '029' ? 'selected' : ''?>>029</option>
							<option <?= setData($form1701q, 'item8') == '030' ? 'selected' : ''?>>030</option>
							<option <?= setData($form1701q, 'item8') == '031' ? 'selected' : ''?>>031</option>
							<option <?= setData($form1701q, 'item8') == '032' ? 'selected' : ''?>>032</option>
							<option <?= setData($form1701q, 'item8') == '033' ? 'selected' : ''?>>033</option>
							<option <?= setData($form1701q, 'item8') == '034' ? 'selected' : ''?>>034</option>
							<option <?= setData($form1701q, 'item8') == '035' ? 'selected' : ''?>>035</option>
							<option <?= setData($form1701q, 'item8') == '036' ? 'selected' : ''?>>036</option>
							<option <?= setData($form1701q, 'item8') == '037' ? 'selected' : ''?>>037</option>
							<option <?= setData($form1701q, 'item8') == '038' ? 'selected' : ''?>>038</option>
							<option <?= setData($form1701q, 'item8') == '039' ? 'selected' : ''?>>039</option>
							<option <?= setData($form1701q, 'item8') == '040' ? 'selected' : ''?>>040</option>
							<option <?= setData($form1701q, 'item8') == '041' ? 'selected' : ''?>>041</option>
							<option <?= setData($form1701q, 'item8') == '042' ? 'selected' : ''?>>042</option>
							<option <?= setData($form1701q, 'item8') == '43A' ? 'selected' : ''?>>43A</option>
							<option <?= setData($form1701q, 'item8') == '43B' ? 'selected' : ''?>>43B</option>
							<option <?= setData($form1701q, 'item8') == '044' ? 'selected' : ''?>>044</option>
							<option <?= setData($form1701q, 'item8') == '045' ? 'selected' : ''?>>045</option>
							<option <?= setData($form1701q, 'item8') == '046' ? 'selected' : ''?>>046</option>
							<option <?= setData($form1701q, 'item8') == '047' ? 'selected' : ''?>>047</option>
							<option <?= setData($form1701q, 'item8') == '048' ? 'selected' : ''?>>048</option>
							<option <?= setData($form1701q, 'item8') == '049' ? 'selected' : ''?>>049</option>
							<option <?= setData($form1701q, 'item8') == '050' ? 'selected' : ''?>>050</option>
							<option <?= setData($form1701q, 'item8') == '051' ? 'selected' : ''?>>051</option>
							<option <?= setData($form1701q, 'item8') == '052' ? 'selected' : ''?>>052</option>
							<option <?= setData($form1701q, 'item8') == '53A' ? 'selected' : ''?>>53A</option>
							<option <?= setData($form1701q, 'item8') == '53B' ? 'selected' : ''?>>53B</option>
							<option <?= setData($form1701q, 'item8') == '54A' ? 'selected' : ''?>>54A</option>
							<option <?= setData($form1701q, 'item8') == '54B' ? 'selected' : ''?>>54B</option>
							<option <?= setData($form1701q, 'item8') == '055' ? 'selected' : ''?>>055</option>
							<option <?= setData($form1701q, 'item8') == '056' ? 'selected' : ''?>>056</option>
							<option <?= setData($form1701q, 'item8') == '057' ? 'selected' : ''?>>057</option>
							<option <?= setData($form1701q, 'item8') == '058' ? 'selected' : ''?>>058</option>
							<option <?= setData($form1701q, 'item8') == '059' ? 'selected' : ''?>>059</option>
							<option <?= setData($form1701q, 'item8') == '060' ? 'selected' : ''?>>060</option>
							<option <?= setData($form1701q, 'item8') == '061' ? 'selected' : ''?>>061</option>
							<option <?= setData($form1701q, 'item8') == '062' ? 'selected' : ''?>>062</option>
							<option <?= setData($form1701q, 'item8') == '063' ? 'selected' : ''?>>063</option>
							<option <?= setData($form1701q, 'item8') == '064' ? 'selected' : ''?>>064</option>
							<option <?= setData($form1701q, 'item8') == '065' ? 'selected' : ''?>>065</option>
							<option <?= setData($form1701q, 'item8') == '066' ? 'selected' : ''?>>066</option>
							<option <?= setData($form1701q, 'item8') == '067' ? 'selected' : ''?>>067</option>
							<option <?= setData($form1701q, 'item8') == '068' ? 'selected' : ''?>>068</option>
							<option <?= setData($form1701q, 'item8') == '069' ? 'selected' : ''?>>069</option>
							<option <?= setData($form1701q, 'item8') == '070' ? 'selected' : ''?>>070</option>
							<option <?= setData($form1701q, 'item8') == '071' ? 'selected' : ''?>>071</option>
							<option <?= setData($form1701q, 'item8') == '072' ? 'selected' : ''?>>072</option>
							<option <?= setData($form1701q, 'item8') == '073' ? 'selected' : ''?>>073</option>
							<option <?= setData($form1701q, 'item8') == '074' ? 'selected' : ''?>>074</option>
							<option <?= setData($form1701q, 'item8') == '075' ? 'selected' : ''?>>075</option>
							<option <?= setData($form1701q, 'item8') == '076' ? 'selected' : ''?>>076</option>
							<option <?= setData($form1701q, 'item8') == '077' ? 'selected' : ''?>>077</option>
							<option <?= setData($form1701q, 'item8') == '078' ? 'selected' : ''?>>078</option>
							<option <?= setData($form1701q, 'item8') == '079' ? 'selected' : ''?>>079</option>
							<option <?= setData($form1701q, 'item8') == '080' ? 'selected' : ''?>>080</option>
							<option <?= setData($form1701q, 'item8') == '081' ? 'selected' : ''?>>081</option>
							<option <?= setData($form1701q, 'item8') == '082' ? 'selected' : ''?>>082</option>
							<option <?= setData($form1701q, 'item8') == '083' ? 'selected' : ''?>>083</option>
							<option <?= setData($form1701q, 'item8') == '084' ? 'selected' : ''?>>084</option>
							<option <?= setData($form1701q, 'item8') == '085' ? 'selected' : ''?>>085</option>
							<option <?= setData($form1701q, 'item8') == '086' ? 'selected' : ''?>>086</option>
							<option <?= setData($form1701q, 'item8') == '087' ? 'selected' : ''?>>087</option>
							<option <?= setData($form1701q, 'item8') == '088' ? 'selected' : ''?>>088</option>
							<option <?= setData($form1701q, 'item8') == '089' ? 'selected' : ''?>>089</option>
							<option <?= setData($form1701q, 'item8') == '090' ? 'selected' : ''?>>090</option>
							<option <?= setData($form1701q, 'item8') == '091' ? 'selected' : ''?>>091</option>
							<option <?= setData($form1701q, 'item8') == '092' ? 'selected' : ''?>>092</option>
							<option <?= setData($form1701q, 'item8') == '93A' ? 'selected' : ''?>>93A</option>
							<option <?= setData($form1701q, 'item8') == '93B' ? 'selected' : ''?>>93B</option>
							<option <?= setData($form1701q, 'item8') == '094' ? 'selected' : ''?>>094</option>
							<option <?= setData($form1701q, 'item8') == '095' ? 'selected' : ''?>>095</option>
							<option <?= setData($form1701q, 'item8') == '096' ? 'selected' : ''?>>096</option>
							<option <?= setData($form1701q, 'item8') == '097' ? 'selected' : ''?>>097</option>
							<option <?= setData($form1701q, 'item8') == '098' ? 'selected' : ''?>>098</option>
							<option <?= setData($form1701q, 'item8') == '099' ? 'selected' : ''?>>099</option>
							<option <?= setData($form1701q, 'item8') == '100' ? 'selected' : ''?>>100</option>
							<option <?= setData($form1701q, 'item8') == '101' ? 'selected' : ''?>>101</option>
							<option <?= setData($form1701q, 'item8') == '102' ? 'selected' : ''?>>102</option>
							<option <?= setData($form1701q, 'item8') == '103' ? 'selected' : ''?>>103</option>
							<option <?= setData($form1701q, 'item8') == '104' ? 'selected' : ''?>>104</option>
							<option <?= setData($form1701q, 'item8') == '105' ? 'selected' : ''?>>105</option>
							<option <?= setData($form1701q, 'item8') == '106' ? 'selected' : ''?>>106</option>
							<option <?= setData($form1701q, 'item8') == '107' ? 'selected' : ''?>>107</option>
							<option <?= setData($form1701q, 'item8') == '108' ? 'selected' : ''?>>108</option>
							<option <?= setData($form1701q, 'item8') == '109' ? 'selected' : ''?>>109</option>
							<option <?= setData($form1701q, 'item8') == '110' ? 'selected' : ''?>>110</option>
							<option <?= setData($form1701q, 'item8') == '111' ? 'selected' : ''?>>111</option>
							<option <?= setData($form1701q, 'item8') == '112' ? 'selected' : ''?>>112</option>
							<option <?= setData($form1701q, 'item8') == '113' ? 'selected' : ''?>>113</option>
							<option <?= setData($form1701q, 'item8') == '114' ? 'selected' : ''?>>114</option>
							<option <?= setData($form1701q, 'item8') == '115' ? 'selected' : ''?>>115</option>
							<option <?= setData($form1701q, 'item8') == '116' ? 'selected' : ''?>>116</option>
							<option <?= setData($form1701q, 'item8') == '117' ? 'selected' : ''?>>117</option>
							<option <?= setData($form1701q, 'item8') == '118' ? 'selected' : ''?>>118</option>
							<option <?= setData($form1701q, 'item8') == '119' ? 'selected' : ''?>>119</option>
							<option <?= setData($form1701q, 'item8') == '120' ? 'selected' : ''?>>120</option>
							<option <?= setData($form1701q, 'item8') == '121' ? 'selected' : ''?>>121</option>
							<option <?= setData($form1701q, 'item8') == '122' ? 'selected' : ''?>>122</option>
							<option <?= setData($form1701q, 'item8') == '123' ? 'selected' : ''?>>123</option>
							<option <?= setData($form1701q, 'item8') == '124' ? 'selected' : ''?>>124</option>
							<option <?= setData($form1701q, 'item8') == '125' ? 'selected' : ''?>>125</option>
							<option <?= setData($form1701q, 'item8') == '126' ? 'selected' : ''?>>126</option>
							<option <?= setData($form1701q, 'item8') == '132' ? 'selected' : ''?>>132</option>
						</select>
						<br/>code
					</td>
				</tr>

			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;">
				<tr>
					<td width="50%" style="border-right: 1px solid #aaa;">
						<b>9</b><small id="space">Taxpayer's Name (Last Name, First Name, Middle Name) (Estates & Trusts)</small>
						<br/><label id="space"></label><input type="text" size=30 name="item9" class="textAlignLeft" value="<?= setData($form1701q, 'item9'); ?>">
					</td>
					<td width="50%" style="padding-left:20px;">
						<b>10</b><small id="space">Spouse's Name(Last Name,FirstName,Middle Name) (if applicable)</small>
						<br/><label id="space"></label><input type="text" size=30 name="item10" class="textAlignLeft" value="<?= setData($form1701q, 'item10'); ?>">
					</td>
				</tr>
			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;">
				<tr>
					<td width="50%" style="border-right: 1px solid #aaa;">
						<b>11</b><small class="ml">Registered Address</small>
						<br/><label id="space"></label><input type="text" size=30 name="item11" class="textAlignLeft" value="<?= setData($form1701q, 'item11'); ?>">
					</td>
					<td width="50%" style="padding-left:20px;">
						<b>12</b><small class="ml">Registered Address</small>
						<br/><label id="space"></label><input type="text" size=30 name="item12" class="textAlignLeft" value="<?= setData($form1701q, 'item12'); ?>">
					</td>
				</tr>
			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;padding-right: 20px;">
				<tr>
					<td width="20%" style="border-right: 1px solid #aaa;">
						<b>13</b><small id="space">Date of Birth (mm/dd/yyyy)</small>
						<br/><label id="space"></label>
						<input type="text" size=1 maxlength="2" name="item13M" class="textAlignCenter" value="<?= setData($form1701q, 'item13') != '0000-00-00' ? date('m',strtotime(setData($form1701q, 'item13'))) : ''?>">
						<input type="text" size=1 maxlength="2" name="item13D" class="textAlignCenter" value="<?= setData($form1701q, 'item13') != '0000-00-00' ? date('d',strtotime(setData($form1701q, 'item13'))) : ''?>">
						<input type="text" size=1 maxlength="4" name="item13Y" class="textAlignCenter" value="<?= setData($form1701q, 'item13') != '0000-00-00' ? date('Y',strtotime(setData($form1701q, 'item13'))) : ''?>">
					</td>
					<td width="5%"  style="border-right: 1px solid #aaa;padding-left:5px">
						<b>14</b>
						<small> ZIP code</small><br/>
						<input type="text" size=4 maxlength="4" name="item14" class="textAlignCenter" value="<?= setData($form1701q, 'item14'); ?>">
					</td>
					<td width="2.5%" style="border-right: 1px solid #aaa;padding-left:25px">
						<b>15</b>
						<small> Tel. No.</small><br/>
						<input type="text" style="width:133px; font-size:13px;" name="item15" class="textAlignCenter" value="<?= setData($form1701q, 'item15'); ?>">
					</td>
					<td width="20%" style="border-right: 1px solid #aaa;padding-left:20px;">
						<b>16</b><small id="space">Date of Birth (mm/dd/yyyy)</small>
						<br/><label id="space"></label>
						<input type="text" size=1 maxlength="2" class="textAlignCenter" name="item16M" value="<?= setData($form1701q, 'item16') != '0000-00-00' ? date('m',strtotime(setData($form1701q, 'item16'))) : ''?>">
						<input type="text" size=1 maxlength="2" class="textAlignCenter" name="item16D" value="<?= setData($form1701q, 'item16') != '0000-00-00' ? date('d',strtotime(setData($form1701q, 'item16'))) : ''?>">
						<input type="text" size=1 maxlength="4" class="textAlignCenter" name="item16Y" value="<?= setData($form1701q, 'item16') != '0000-00-00' ? date('Y',strtotime(setData($form1701q, 'item16'))) : ''?>">
					</td>
					<td width="2.5%"  style="border-right: 1px solid #aaa;padding-left:5px">
						<b>17</b>
						<small> ZIP code</small><br/>
						<input type="text" size=3  maxlength="4" class="textAlignCenter" name="item17" value="<?= setData($form1701q, 'item17'); ?>" >
					</td>
					<td width="5%" style="padding-left:15px">
						<b>18</b>
						<small> Tel. No.</small><br/>
						<input type="text" size=5 class="textAlignLeft" name="item18" value="<?= setData($form1701q, 'item18'); ?>">
					</td>
				</tr>

			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;padding-right: 20px;">
				<tr>
					<td width="20%" style="border-right:1px solid #aaa">
						<b>19</b>
						<small id="space">Line of </small><br/>
						<small class="indent"> Business/Occupation</small><br/>
						<label id="space"></label>
						<input type="text" size=10 class="textAlignLeft" name="item19" value="<?= setData($form1701q, 'item19'); ?>">
					</td>
					<td width="30%" style="border-right:1px solid #aaa;padding-left:5px">
						<b>20</b>
						<small id="space">ATC</small>
						<input type="text" size=3 class="textAlignCenter" name="item20Atc1" value="<?= setData($form1701q, 'item20Atc1'); ?>">
						<small>Compensation</small>
						<input type="radio" name="item20Compensation">
						<label style="margin-left:50px;"></label>
						<input type="text" size=3 class="textAlignCenter" name="item20Atc2" value="<?= setData($form1701q, 'item20Atc2'); ?>">
						<small>Business</small>
						<label style="padding-left:23px;"></label>
						<input type="radio"  name="item20Business">
						<label style="margin-left:50px;"></label>
						<input type="text" size=3 class="textAlignCenter" name="item20Atc3" value="<?= setData($form1701q, 'item20Atc3'); ?>">
						<small>Mixed Income</small>
						<label style="padding-left:3px;"></label>
						<input type="radio"  name="item20MixedIncome" >
					</td>
					
					<td width="20%" style="border-right:1px solid #aaa;padding-left:20px;">
						<b>21</b>
						<small id="space">Line of </small><br/>
						<small class="indent"> Business/Occupation</small><br/>
						<label id="space"></label>
						<input type="text" class="textAlignLeft" size=10 name="item21" value="<?= setData($form1701q, 'item21'); ?>">
					</td>
					<td width="30%" style="border-right:1px solid #aaa;padding-left:5px">
					<b>22</b><small id="space">ATC</small>
						<input type="text" size=3 class="textAlignCenter" name="item22Atc1" value="<?= setData($form1701q, 'item22Atc1'); ?>">
						<small>Compensation</small>
						<input type="radio" name="item22Compensation" value="yes" <?= setData($form1701q, 'item22Compensation') == 'yes' ? 'checked' : ''?>>
						<label style="margin-left:50px;"></label>
						<input type="text" size=3 class="textAlignCenter" name="item22Atc2"value="<?= setData($form1701q, 'item22Atc2'); ?>">
						<small>Business</small>
						<label style="padding-left:23px;"></label>
						<input type="radio" name="item22Business" value="yes" <?= setData($form1701q, 'item22Business') == 'yes' ? 'checked' : ''?>>
						<label style="margin-left:50px;"></label>
						<input type="text" size=3 class="textAlignCenter" name="item22Atc3" value="<?= setData($form1701q, 'item22Atc3'); ?>">
						<small>Mixed Income</small>
						<label style="padding-left:3px;"></label>
						<input type="radio" name="item22MixedIncome" value="yes" <?= setData($form1701q, 'item22MixedIncome') == 'yes' ? 'checked' : ''?>>
					</td>
					
				</tr>
			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;">
				<tr>
					<td width="50%" style="border-right:1px solid #aaa;padding-right:5px">
						<b>23</b><small id="space">Method of Deduction</small>
						<br/>
						<div class="box">
							<input type="radio" name="item23" id="itemized" value="itemized" <?= setData($form1701q, 'item23Itemized') == 'itemized' ? 'checked' : ''?>>
							<label style="font-size:14px" for="itemized">Itemized Deduction</label>
							<input type="radio" name="item23" id="osd" value="osd" <?= setData($form1701q, 'item23Osd') == 'osd' ? 'checked' : ''?>>
							<label for="osd">40% Optional Standard Deduction</label>
						</div>
					
					</td>
						<td width="50%" style="padding-left:20px;">
						<b>24</b><small id="space">Method of Deduction</small>
						<br/>
						<div class="box">
							<input type="radio" name="item24" id="itemized2" value="itemized" <?= setData($form1701q, 'item24Itemized') == 'itemized' ? 'checked' : ''?>> 
							<label style="font-size:14px" for="itemized2">Itemized Deduction</label>
							<input type="radio" name="item24" id="osd2" value="osd" <?= setData($form1701q, 'item24Osd') == 'osd' ? 'checked' : ''?>> 
							<label for="osd2">40% Optional Standard Deduction</label>
						</div>
					
					</td>
				</tr>
			</table>
			<table style="width:100%;border-top: 1px solid #aaa;padding-left: 20px;">
				<tr>
					<td width="50%" style="padding-right:5px">
						<b>25</b><small id="space">Are you availing of tax relief under Special Law or International 
						<br/>Tax Treaty?</small>
					
					</td>
						<td width="50%" style="padding-left:20px;">
							<input type="radio" name="item25" id="item25_yes" value="yes" <?= setData($form1701q, 'item25') == 'yes' ? 'checked' : ''?>>
								<label for="item25_yes">Yes</label>
							<input type="radio" name="item25" id="item25_no" value="no" <?= setData($form1701q, 'item25') == 'no' ? 'checked' : ''?>>
								<label for="item25_no">No</label>
						<small id="space"  name="item25Specify">If yes, specify</small>
						<select style="width:210px">
							<option></option>
							<option <?= setData($form1701q, 'item25Specify') == 'Special Rate' ? 'selected' : ''?>>Special Rate</option>
							<option <?= setData($form1701q, 'item25Specify') == 'International Tax Treaty' ? 'selected' : ''?>>International Tax Treaty</option>
						</select>
					
					</td>
				</tr>
			</table>

	<div class="section1">
		<div class="fl">
			<b>Part II	
		</div>
		<div class="mid1">
			Computation of Tax</b>	
		</div>
		
	</div>
	<div class="section1">
		<table>
			<tr>
				<th width="40%">Declaration This Quarter</th>
				<th width="30">Taxpayer/Filer</th>
				<th width="30%">Spouse</th>
			</tr>
			
			<tr>
				<td><b>26</b><small id="space">Sales/Revenues/Receipts/Fees</small></td>
				<td><b id="space">26A</b><input type="text" size="20" class="isInt" name="iTR1701Q26A" value="<?= $form1701q->iTR1701Q26A ?>"></td>
				<td><b id="space">26B</b><input type="text" size="20" class="isInt" name="iTR1701Q26B" value="<?= setData($form1701q, 'iTR1701Q26B') ?>"></td>
			</tr>
			<tr>
				<td><b>27</b><small id="space">Add: Amount Rec'd by a partner from General Professional Partnership (except loans)</small></td>
				<td><b id="space">27A</b><input type="text" size="20" class="isInt" name="iTR1701Q27A" value="<?= setData($form1701q, 'iTR1701Q27A') ?>"></td>
				<td><b id="space">27B</b><input type="text" size="20" class="isInt" name="iTR1701Q27B" value="<?= setData($form1701q, 'iTR1701Q27B') ?>"></td>
			</tr>
			<tr>
				<td><b>28</b><small id="space">Total</small></td>
				<td><b id="space">28A</b><input type="text" size="20" class="isInt" name="iTR1701Q28A" value="<?= setData($form1701q, 'iTR1701Q28A') ?>"></td>
				<td><b id="space">28B</b><input type="text" size="20" class="isInt" name="iTR1701Q28B" value="<?= setData($form1701q, 'iTR1701Q28B') ?>"></td>
			</tr>
			<tr>
				<td><b>29</b><small id="space">Less: Cost of Sales/Service</small></td>
				<td><b id="space">29A</b><input type="text" size="20" class="isInt" name="iTR1701Q29A" value="<?= setData($form1701q, 'iTR1701Q29A') ?>"></td>
				<td><b id="space">29B</b><input type="text" size="20" class="isInt" name="iTR1701Q29B" value="<?= setData($form1701q, 'iTR1701Q29B') ?>"></td>
			</tr>
			<tr>
				<td><b>30</b><small id="space">Gross Income from Operation</small></td>
				<td><b id="space">30A</b><input type="text" size="20" class="isInt" name="iTR1701Q30A" value="<?= setData($form1701q, 'iTR1701Q30A') ?>"></td>
				<td><b id="space">30B</b><input type="text" size="20" class="isInt" name="iTR1701Q30B" value="<?= setData($form1701q, 'iTR1701Q30B') ?>"></td>
			</tr>
			<tr>
				<td><b>31</b><small id="space">Add: Other Income 31A</small></td>
				<td><b id="space">31A</b><input type="text" size="20" class="isInt" name="iTR1701Q31A" value="<?= $form1701q->iTR1701Q31A ?>"></td>
				<td><b id="space">31B</b><input type="text" size="20" class="isInt" name="iTR1701Q31B" value="<?= setData($form1701q, 'iTR1701Q31B') ?>"></td>
			</tr>
			<tr>
				<td><b>32</b><small id="space">Total Gross Income</small></td>
				<td><b id="space">32A</b><input type="text" size="20" class="isInt" name="iTR1701Q32A" value="<?= setData($form1701q, 'iTR1701Q32A') ?>"></td>
				<td><b id="space">32B</b><input type="text" size="20" class="isInt" name="iTR1701Q32B" value="<?= setData($form1701q, 'iTR1701Q32B') ?>"></td>
			</tr>
			<tr>
				<td><b>33</b><small id="space">Less: Deductions</small></td>
				<td><b id="space">33A</b><input type="text" size="20" class="isInt" name="iTR1701Q33A" value="<?= $form1701q->iTR1701Q33A ?>"></td>
				<td><b id="space">33B</b><input type="text" size="20" class="isInt" name="iTR1701Q33B" value="<?= setData($form1701q, 'iTR1701Q33B') ?>"></td>
			</tr>
			<tr>
				<td><b>34</b><small id="space">Taxable Income This Quarter</small></td>
				<td><b id="space">34A</b><input type="text" size="20" class="isInt" name="iTR1701Q34A" value="<?= setData($form1701q, 'iTR1701Q34A') ?>"></td>
				<td><b id="space">34B</b><input type="text" size="20" class="isInt" name="iTR1701Q34B" value="<?= setData($form1701q, 'iTR1701Q34B') ?>"></td>
			</tr>
			<tr>
				<td><b>35</b><small id="space">Add: Taxable Income Previous Quarter(s)</small></td>
				<td><b id="space">35A</b><input type="text" size="20" class="isInt" name="iTR1701Q35A" value="<?= setData($form1701q, 'iTR1701Q35A') ?>"></td>
				<td><b id="space">35B</b><input type="text" size="20" class="isInt" name="iTR1701Q35B" value="<?= setData($form1701q, 'iTR1701Q35B') ?>"></td>
			</tr>
			<tr>
				<td><b>36</b><small id="space">Taxable Income To Date</small></td>
				<td><b id="space">36A</b><input type="text" size="20" class="isInt" name="iTR1701Q36A" value="<?= setData($form1701q, 'iTR1701Q36A') ?>"></td>
				<td><b id="space">36B</b><input type="text" size="20" class="isInt" name="iTR1701Q36B" value="<?= setData($form1701q, 'iTR1701Q36B') ?>"></td>
			</tr>
			<tr>
				<td><b>37</b><small id="space">Tax Due</small></td>
				<td><b id="space">37A</b><input type="text" size="20" class="isInt" name="iTR1701Q37A" value="<?= $form1701q->iTR1701Q37A ?>"></td>
				<td><b id="space">37B</b><input type="text" size="20" class="isInt" name="iTR1701Q37B" value="<?= setData($form1701q, 'iTR1701Q37B') ?>"></td>
			</tr>
			<tr>
				<td><b>38</b><small id="space">Less: Tax Credits/Payments</small></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td><small class="indent">38A/B</small><small id="space">Prior Years' Excess Credits</small></td>
				<td><b id="space">38A</b><input type="text" size="20" class="isInt" name="iTR1701Q38A" value="<?= setData($form1701q, 'iTR1701Q38A') ?>"></td>
				<td><b id="space">38B</b><input type="text" size="20" class="isInt" name="iTR1701Q38B" value="<?= setData($form1701q, 'iTR1701Q38B') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38C/D</small><small id="space">Tax Payment/s for the Previous Quarter(s)</small></td>
				<td><b id="space">38C</b><input type="text" size="20" class="isInt" name="iTR1701Q38C" value="<?= setData($form1701q, 'iTR1701Q38C') ?>"></td>
				<td><b id="space">38D</b><input type="text" size="20" class="isInt" name="iTR1701Q38D" value="<?= setData($form1701q, 'iTR1701Q38D') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38E/F</small><small id="space">Creditable Tax Withheld for the Previous Quarter(s)</small></td>
				<td><b id="space">38E</b><input type="text" size="20" class="isInt" name="iTR1701Q38E" value="<?= setData($form1701q, 'iTR1701Q38E') ?>"></td>
				<td><b id="space">38F</b><input type="text" size="20" class="isInt" name="iTR1701Q38F" value="<?= setData($form1701q, 'iTR1701Q38F') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38G/H</small><small id="space">Creditable Tax Withheld per BIR Form 2307 for this Quarter</small></td>
				<td><b id="space">38G</b><input type="text" size="20" class="isInt" name="iTR1701Q38G" value="<?= $form1701q->iTR1701Q38G ?>"></td>
				<td><b id="space">38H</b><input type="text" size="20" class="isInt" name="iTR1701Q38H" value="<?= setData($form1701q, 'iTR1701Q38H') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38I/J</small><small id="space">Tax Paid in Return Previously Filed, if this is an Amended Return</small></td>
				<td><b id="space">38I </b><input type="text" size="20" class="isInt" name="iTR1701Q38I" value="<?= setData($form1701q, 'iTR1701Q38I') ?>"></td>
				<td><b id="space">38J</b><input type="text" size="20" class="isInt" name="iTR1701Q38J" value="<?= setData($form1701q, 'iTR1701Q38J') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38K/L</small><small id="space">Other Payment/s Made (please attach proof of payment-BIR Form</small></td>
				<td><b id="space">38K</b><input type="text" size="20" class="isInt" name="iTR1701Q38K" value="<?= setData($form1701q, 'iTR1701Q38K') ?>"></td>
				<td><b id="space">38L</b><input type="text" size="20" class="isInt" name="iTR1701Q38L" value="<?= setData($form1701q, 'iTR1701Q38L') ?>"></td>
			</tr>
			<tr>
				<td><small class="indent">38M/N</small><small id="space">Total Tax Credits/Payments (Sum of 38A,C,E,G,I & K/38B,D,F,H,J & L)</small></td>
				<td><b id="space">38M</b><input type="text" size="20" class="isInt" name="iTR1701Q38M" value="<?= setData($form1701q, 'iTR1701Q38M') ?>"></td>
				<td><b id="space">38N</b><input type="text" size="20" class="isInt" name="iTR1701Q38N" value="<?= setData($form1701q, 'iTR1701Q38N') ?>"></td>
			</tr>
			<tr>
				<td><b>39</b><small id="space">Tax Payable/(Overpayment) (37A less 38M & 37B less 38N)</small></td>
				<td><b id="space">39A</b><input type="text" size="20" class="isInt" name="iTR1701Q39A" value="<?= setData($form1701q, 'iTR1701Q39A') ?>"></td>
				<td><b id="space">39B</b><input type="text" size="20" class="isInt" name="iTR1701Q39B" value="<?= setData($form1701q, 'iTR1701Q39B') ?>"></td>
			</tr>
			<tr>
				<td><b>40</b><small id="space"> Add: Penalties <label class="indent">Surcharge</label></small></td>
				<td><b id="space">40A</b><input type="text" size="20" class="isInt" name="iTR1701Q40A" value="<?= setData($form1701q, 'iTR1701Q40A') ?>"></td>
				<td><b id="space">40B</b><input type="text" size="20" class="isInt" name="iTR1701Q40B" value="<?= setData($form1701q, 'iTR1701Q40B') ?>"></td>
			</tr>
			<tr>
				<td><b class="indent"></b><b class="indent"></b><b class="indent"></b><small id="space"> <label class="indent">Interest</label></small></td>
				<td><b id="space">40C</b><input type="text" size="20" class="isInt" name="iTR1701Q40C" value="<?= setData($form1701q, 'iTR1701Q40C') ?>"></td>
				<td><b id="space">40D</b><input type="text" size="20" class="isInt" name="iTR1701Q40D" value="<?= setData($form1701q, 'iTR1701Q40D') ?>"></td>
			</tr>
			<tr>
				<td><b class="indent"></b><b class="indent"></b><b class="indent"></b><small id="space"> <label class="indent">Compromise</label></small></td>
				<td><b id="space">40E</b><input type="text" size="20" class="isInt" name="iTR1701Q40E" value="<?= setData($form1701q, 'iTR1701Q40E') ?>"></td>
				<td><b id="space">40F</b><input type="text" size="20" class="isInt" name="iTR1701Q40F" value="<?= setData($form1701q, 'iTR1701Q40F') ?>"></td>
			</tr>
			<tr>
				<td><b class="indent"></b><small id="space"> <label class="indent">Total Penalties (Sum of Items 40A,C,E/40B,D,F)</label></small></td>
				<td><b id="space">40G</b><input type="text" size="20" class="isInt" name="iTR1701Q40G" value="<?= setData($form1701q, 'iTR1701Q40G') ?>"></td>
				<td><b id="space">40H</b><input type="text" size="20" class="isInt" name="iTR1701Q40H" value="<?= setData($form1701q, 'iTR1701Q40H') ?>"></td>
			</tr>
			<tr>
				<td><b>41</b><small id="space"> Total Amount Payable/(Overpayment) (39A+40G/39B+40H)</small></td>
				<td><b id="space">41A</b><input type="text" size="20" class="isInt" name="iTR1701Q41A" value="<?= setData($form1701q, 'iTR1701Q41A') ?>"></td>
				<td><b id="space">41B</b><input type="text" size="20" class="isInt" name="iTR1701Q41B" value="<?= setData($form1701q, 'iTR1701Q41B') ?>"></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="55%"><b class="indent"></b><small>Aggregate Amount Payable/(Overpayment) (Sum of Items 41A & 41B)</small></td>
				<td width="45%"><b id="space">41C</b><input type="text" size="20" class="isInt" name="iTR1701Q41C" value="<?= setData($form1701q, 'iTR1701Q41C') ?>"></td>
				<td></td>
			</tr>
			
		</table>
			
	</div>
		
	</div>
	

	
	
	
	
		
		
	
	
	
	
</div>

<?php

function setData($array, $data, $index = '') {
    if (!empty($array)) {
        if ($index != '') {
            if (!empty($array[$index]->$data)) {
                return $array[$index]->$data;
            }
        } else {
            if (!empty($array->$data)) {
                return $array->$data;
            }
        }
    }
}
?>		




</body>
</html>
