<?php
	$form2551mData = (isset($this->form2551m) && !empty($this->form2551m)) ? $this->form2551m : ''; 
	// print_r($$this->form2551m);
	// exit;
?>

<style>
	
	.textAlignLeft{
		text-align: left !important;
		padding-left:5px;
	}
	.textAlignCenter{
		text-align: center !important;
	}
	input[type="text"] {
		font-size: 16px!important;
		font-weight: bold !important;
	}
	.container{
		margin-top: 12px!important;
	}
</style>

<html>
<head>
	<link rel="stylesheet" href="<?= $this->cssUrl ?>style.css">
	<link rel="stylesheet" href="<?= $this->cssUrl ?>modal.css">
</head>
<body>
<div class="container">
<div id="header">
	<div class="topleft fl">
		<img src="<?= $this->imageUrl ?>img/logo.png">
		<div id="banner" class="fl" style="font-size: 13px;">Republika ng Pilipinas<br/>Kagawaran ng Pananalapi<br/>Kawanihan ng Rentas Internas</div>
	</div>
	<div class="mid fl tc">
		<h1>Monthly Percentage Tax Return</h1>
	</div>
	<div class="topright fr	">
		<div class="formNo">BIR Form No.</div>
		<div class="formNo"><h1>2551M</h1></div>
		<div class="formNo" style="font-size: 13px;">September 2005 (ENCS)</div>
	</div>
</div>

<div class="content">
	<div class="rows" style="padding: 0 0 8.5% 0;">
		<div class="fl" style="margin-left: .5%;">
			<div style="width: 5%; margin: 75% 0 0 0;">
				<strong>1</strong>
			</div>
			<div style="width: 5%; margin: 250% 0 0 0;">
				<strong>2</strong>
			</div>
		</div>
		<div class="fl" style="width: 7%; margin: 0 0 0 1%;">
			<div style="margin: 5% 0 0 0;">
				<span style="font-size: 10px; margin: 0 0 0 5%;"> For the</span>
			</div>
			<div style="margin: 25% 0 0 0;">
				<span style="font-size: 10px; margin: 0 0 0 5%;"> Year Ended (MM/YYYY)</span>
			</div>
		</div>
		
		<div class="fl" style="margin: .5% 0 0 3%; padding: 0 .5% 0 0;">
			<div>
				<input type="radio" name="item1" id="calendar" value="calendar">
				<label for="calendar">Calendar</label>
				<input type="radio" name="item1" id="fiscal" value="fiscal">
				<label for="fiscal">Fiscal</label>
			</div>
			<div style="margin-top: 13%;">
				<input type="text" name="item2M" readonly class="inset textAlignCenter" maxlength="2" size="3" value="<?= date('m',strtotime($_POST['month']))?>">
				<input type="text" name="item2F" readonly class="inset textAlignCenter" maxlength="4" size="3" value="<?= $_POST['year']?>">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 25%; padding: .5% 0 2.2% 1%;">
			<strong>3</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> For the month (MM/YYYY)</span>
			<div style="padding: 0 0 0 3%;">
				<!--<select name="item3" class="select" value="<?= getF2551p1Data($form2551mData,'item3M') ?>">
					<option></option>
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
				</select>-->
				 <select name="item3" class="select" style="margin-left:5px;margin-top:20px;" class="yearname">

					<?php
					$currentMonth = date("m");
					for ($x = 1; $x <= 12; $x++) {
						if ($x == $currentMonth) {
					?>
								<option selected='selected' value="<?= strtolower(date('m', strtotime(date('Y'). '-' . $x . '-01'))) ?>">
									<?= date('m', strtotime(date('Y'). '-' . $x . '-01')) . '-' . date('F', strtotime(date('Y'). '-' . $x . '-01')) ?></option>

						<?php
						} else {
							
							?>
						<option value="<?= strtolower(date('F', strtotime(date('Y') . '-' . $x . '-01'))) ?>">
							<?= date('m', strtotime(date('Y'). '-' . $x . '-01')) . '-' . date('F', strtotime(date('Y'). '-' . $x . '-01')) ?></option>
					<?php
						}
					}
					?>
				</select>
				<input type="text" class="inset textAlignCenter" name="item3" maxlength="4" size="3" value="<?= getF2551p1Data($form2551mData,'item3Y') ?>">
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 20%; padding-bottom: .8%;">
			<strong>4</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> Amended Return?</span>
			<div style="float: left; border: #777 solid 1px; margin: 0 0 0 40%; padding: 3% 5% 3% 5%;">
				<input type="radio" name="item4" id="item4_yes" value="yes" <?= getF2551p1Data($form2551mData,'item4') == 'yes' ? 'checked' : ''?>> 
				<label for="item4_yes">Yes</label> <br/>
				<input type="radio" name="item4" id="item4_no" value="no" <?= getF2551p1Data($form2551mData,'item4') == 'no' ? 'checked' : ''?>>
				<label for="item4_no">No</label>
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 15%; padding: .5% 0 2.5% 1%;">
			<strong>5</strong><span style="font-size: 10px; margin: 0 0 0 5%;"> No. of Sheets Attached</span>
			<div style="border: ; margin: 0 0 0 0;">
				<input type="text" name="item5" class="inset textAlignCenter" size="5" style="margin: 5% 0 0 30%;" value="<?= getF2551p1Data($form2551mData,'item5') ?>">
			</div>
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 44%;">
			<strong>Part I</strong>
		</div>
		
		<span style="">
			<strong>Background Information</strong>
		</span>
	</div>
	
	<div class="rows" style="padding: 0 0 6% 0;">
		<div class="fl" style="width: 35%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>6</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">TIN</span>
			<?php
				$tin_1 = getF2551p1Data($form2551mData,'item6');
				$tin_2 = explode('-',$tin_1);
			?>
			
			
			<input type="text" name="item6[]" readonly value="<?= isset($tin_2[0]) ? $tin_2[0] : '' ?>" class="inset textAlignCenter" maxlength="3" size="1" >
			<input type="text" name="item6[]" readonly value="<?= isset($tin_2[1]) ? $tin_2[1] : '' ?>" class="inset textAlignCenter" maxlength="3" size="1">
			<input type="text" name="item6[]" readonly value="<?= isset($tin_2[2]) ? $tin_2[2] : '' ?>" class="inset textAlignCenter" maxlength="3" size="1">
			<input type="text" name="item6[]" readonly value="<?= isset($tin_2[3]) ? $tin_2[3] : '' ?>" class="inset textAlignCenter" maxlength="3" size="1">
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 26%; padding: .5% 0 1.9% 1%;">
			<strong>7</strong><div style="width: 10%; margin: -10% 0 0 10%;"><span style="font-size: 10px; padding: 0 3% 0 3%;"><br/>RDO Code</span></div>
			<div style="width: 35%; margin: -5% 0 0 25%;">
				<select name="item7" class="select" disabled>
					<option <?= getF2551p1Data($form2551mData,'item7') == '001' ? 'selected' : ''?>>001</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '002' ? 'selected' :  ''?>>002</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '003' ? 'selected' :  ''?>>003</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '004' ? 'selected' :  ''?>>004</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '005' ? 'selected' :  ''?>>005</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '006' ? 'selected' :  ''?>>006</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '007' ? 'selected' :  ''?>>007</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '008' ? 'selected' :  ''?>>008</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '009' ? 'selected' :  ''?>>009</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '010' ? 'selected' :  ''?>>010</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '011' ? 'selected' :  ''?>>011</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '012' ? 'selected' :  ''?>>012</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '013' ? 'selected' :  ''?>>013</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '014' ? 'selected' :  ''?>>014</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '015' ? 'selected' :  ''?>>015</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '016' ? 'selected' :  ''?>>016</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '17A' ? 'selected' :  ''?>>17A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '17B' ? 'selected' :  ''?>>17B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '018' ? 'selected' :  ''?>>018</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '019' ? 'selected' :  ''?>>019</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '020' ? 'selected' :  ''?>>020</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '21A' ? 'selected' :  ''?>>21A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '21B' ? 'selected' :  ''?>>21B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '022' ? 'selected' :  ''?>>022</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '23A' ? 'selected' :  ''?>>23A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '23B' ? 'selected' :  ''?>>23B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '024' ? 'selected' :  ''?>>024</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '25A' ? 'selected' :  ''?>>25A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '25B' ? 'selected' :  ''?>>25B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '026' ? 'selected' :  ''?>>026</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '027' ? 'selected' :  ''?>>027</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '028' ? 'selected' :  ''?>>028</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '029' ? 'selected' :  ''?>>029</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '030' ? 'selected' :  ''?>>030</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '031' ? 'selected' :  ''?>>031</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '032' ? 'selected' :  ''?>>032</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '033' ? 'selected' :  ''?>>033</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '034' ? 'selected' :  ''?>>034</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '035' ? 'selected' :  ''?>>035</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '036' ? 'selected' :  ''?>>036</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '037' ? 'selected' :  ''?>>037</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '038' ? 'selected' :  ''?>>038</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '039' ? 'selected' :  ''?>>039</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '040' ? 'selected' :  ''?>>040</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '041' ? 'selected' :  ''?>>041</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '042' ? 'selected' :  ''?>>042</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '43A' ? 'selected' :  ''?>>43A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '43B' ? 'selected' :  ''?>>43B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '044' ? 'selected' :  ''?>>044</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '045' ? 'selected' :  ''?>>045</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '046' ? 'selected' :  ''?>>046</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '047' ? 'selected' :  ''?>>047</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '048' ? 'selected' :  ''?>>048</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '049' ? 'selected' :  ''?>>049</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '050' ? 'selected' :  ''?>>050</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '051' ? 'selected' :  ''?>>051</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '052' ? 'selected' :  ''?>>052</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '53A' ? 'selected' :  ''?>>53A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '53B' ? 'selected' :  ''?>>53B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '54A' ? 'selected' :  ''?>>54A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '54B' ? 'selected' :  ''?>>54B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '055' ? 'selected' :  ''?>>055</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '056' ? 'selected' :  ''?>>056</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '057' ? 'selected' :  ''?>>057</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '058' ? 'selected' :  ''?>>058</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '059' ? 'selected' :  ''?>>059</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '060' ? 'selected' :  ''?>>060</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '061' ? 'selected' :  ''?>>061</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '062' ? 'selected' :  ''?>>062</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '063' ? 'selected' :  ''?>>063</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '064' ? 'selected' :  ''?>>064</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '065' ? 'selected' :  ''?>>065</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '066' ? 'selected' :  ''?>>066</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '067' ? 'selected' :  ''?>>067</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '068' ? 'selected' :  ''?>>068</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '069' ? 'selected' :  ''?>>069</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '070' ? 'selected' :  ''?>>070</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '071' ? 'selected' :  ''?>>071</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '072' ? 'selected' :  ''?>>072</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '073' ? 'selected' :  ''?>>073</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '074' ? 'selected' :  ''?>>074</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '075' ? 'selected' :  ''?>>075</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '076' ? 'selected' :  ''?>>076</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '077' ? 'selected' :  ''?>>077</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '078' ? 'selected' :  ''?>>078</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '079' ? 'selected' :  ''?>>079</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '080' ? 'selected' :  ''?>>080</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '081' ? 'selected' :  ''?>>081</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '082' ? 'selected' :  ''?>>082</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '083' ? 'selected' :  ''?>>083</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '084' ? 'selected' :  ''?>>084</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '085' ? 'selected' :  ''?>>085</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '086' ? 'selected' :  ''?>>086</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '087' ? 'selected' :  ''?>>087</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '088' ? 'selected' :  ''?>>088</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '089' ? 'selected' :  ''?>>089</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '090' ? 'selected' :  ''?>>090</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '091' ? 'selected' :  ''?>>091</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '092' ? 'selected' :  ''?>>092</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '93A' ? 'selected' :  ''?>>93A</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '93B' ? 'selected' :  ''?>>93B</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '094' ? 'selected' :  ''?>>094</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '095' ? 'selected' :  ''?>>095</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '096' ? 'selected' :  ''?>>096</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '097' ? 'selected' :  ''?>>097</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '098' ? 'selected' :  ''?>>098</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '099' ? 'selected' :  ''?>>099</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '100' ? 'selected' :  ''?>>100</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '101' ? 'selected' :  ''?>>101</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '102' ? 'selected' :  ''?>>102</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '103' ? 'selected' :  ''?>>103</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '104' ? 'selected' :  ''?>>104</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '105' ? 'selected' :  ''?>>105</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '106' ? 'selected' :  ''?>>106</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '107' ? 'selected' :  ''?>>107</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '108' ? 'selected' :  ''?>>108</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '109' ? 'selected' :  ''?>>109</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '110' ? 'selected' :  ''?>>110</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '111' ? 'selected' :  ''?>>111</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '112' ? 'selected' :  ''?>>112</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '113' ? 'selected' :  ''?>>113</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '114' ? 'selected' :  ''?>>114</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '115' ? 'selected' :  ''?>>115</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '116' ? 'selected' :  ''?>>116</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '117' ? 'selected' :  ''?>>117</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '118' ? 'selected' :  ''?>>118</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '119' ? 'selected' :  ''?>>119</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '120' ? 'selected' :  ''?>>120</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '121' ? 'selected' :  ''?>>121</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '122' ? 'selected' :  ''?>>122</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '123' ? 'selected' :  ''?>>123</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '124' ? 'selected' :  ''?>>124</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '125' ? 'selected' :  ''?>>125</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '126' ? 'selected' :  ''?>>126</option>
					<option <?= getF2551p1Data($form2551mData,'item7') == '132' ? 'selected' :  ''?>>132</option>
				</select>
			</div>
		</div>
		
		<div class="fl" style="border-left: #777 solid 1px; width: 35%; padding: .5% 0 .4% 1%;">
			<strong>8</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Line of Business / Occupation</span><input type="text" name="item8" readonly class="inset textAlignLeft" style="margin: 1% 0 0 5%;" value="<?= getF2551p1Data($form2551mData,'item8') ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>9</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Taxpayer's Name (For Individual) Last Name, First Name, Middle Name/ (For Non-individual) Registered Name</span>
			<input type="text" name="item9" readonly class="inset textAlignLeft" size="50" style="margin: 1% 0 0 4%;" value="<?= getF2551p1Data($form2551mData,'item9') ?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% 1.5% .5%;">
			<strong>10</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Telephone Number</span>
			<input type="text" name="item10" readonly class="inset textAlignCenter" size="14" style="margin: 1% 0 0 10%;font-size:18px;" value="<?= getF2551p1Data($form2551mData,'item10') ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 0 0 7% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>11</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Registered Address</span><br/>
			<input type="text" name="item11" readonly class="inset textAlignLeft" size="50" style="margin: 1% 0 0 4%;" value="<?= getF2551p1Data($form2551mData,'item11') ?>">
		</div>
		<div class="fl" style="border-left: #777 solid 1px; width: 24%; margin: 0 0 0 0; padding: .5% .5% 1.5% .5%;">
			<strong>12</strong><span style="font-size: 10px; padding: 0 3% 0 3%;">Zip Code</span><br/>
			<input type="text" name="item12" readonly class="inset" size="13" style="margin: 1% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'item12') ?>">
		</div>
	</div>
	
	<div class="rows" style="padding: 1% 0 1% .1%;">
		<strong>13</strong><span style="font-size: 10px; padding: 0 15% 0 1.2%;">Are you availing of tax relief under under Special Law / International Tax Treaty?</span>
		<input type="radio" name="item13" id="item13_yes" value="yes"<?= getF2551p1Data($form2551mData,'item13') ?>>
		<label for="item13_yes">Yes</label>
		<input type="radio" name="item13" id="item13_no" value="no" <?= getF2551p1Data($form2551mData,'item13') ?>>
		<label for="item13_no">No</label>
		<span style="font-size: 10px; padding: 0 0 0 %;">If yes, specify</span>
		<select name="item13Specify" class="select" value="<?= getF2551p1Data($form2551mData,'item13Specify') ?>">
			<option></option>
			<option>Special Rate</option>
			<option>International Tax Treaty</option>
		</select>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Part II</strong>
		</div>
		
		<span style="padding-left: 32%;">
			<strong>Computation of Tax</strong>
		</span>
		
		<span style="padding-left: 15%; font-size: 10px;">
			<a href="#openModal">ATC</a>
		</span>
	</div>
	
	<div style="padding: 0 0 0 0; width: 100%; border-bottom: #777 solid 1px; font-size: 10px; text-align: left;">
		<table>
			<tr>
				<th style="width: 50%;">Taxable Transaction  / Industry Classification</th>
				<th style="width: 5%;">ATC</th>
				<th style="width: 8%;">Taxable Amount</th>
				<th style="width: 7%;">Tax Rate</th>
				<th style="width: 5%;">Tax Due</th>
			</tr>
			<tr>
				<td>ON DIVIDENDS AND EQUITY SHARES AND NET INCOME OF SUBSIDIARIES</td>
				<td>PT102</td>
				<td><input type="text" name="" class="inset tr" size="3" style="margin: 1% 0 0 10%;"></td>
				<td><input type="text" name="" class="inset tr" size="3" style="margin: 1% 0 0 10%;"></td>
				<td><input type="text" name="" class="inset tr" size="3" style="margin: 1% 0 0 10%;"></td>
			</tr>
		</table>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: 2% 0 3% 0;">
		<div class="fl" style="width: 65%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>19</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Total Due</span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>19</strong>
			<input type="text" name="iTR2551M19" class="inset tr isInt" size="20" style="margin: -10% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M19') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; margin: -1% 0 0 0; padding: 0 0 3% 0;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: 0 .5% 0 .5%;">
			<strong>20</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Less: Tax Credits/Payments</span><br/>
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; margin: -1% 0 0 0; padding: 2% 0 3% 3%;">
		<div class="fl" style="width: 66.3%; margin: 0 0 0 0; padding: 0 .5% 0 .5%;">
			<strong>20A</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Creditable Percentage Tax Withheld Per BIR Form No. 2307 (See Schedule 1)</span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: -1% 0 0 -4.2%; padding: .5% .5% .5% .5%;">
			<strong style="margin-left: -5%;">20A</strong>
			<input type="text" name="iTR2551M20A" class="inset tr isInt" size="20" style="margin: -10% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M20A') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; margin: -1% 0 0 0; padding: 2% 0 3% 3%;">
		<div class="fl" style="width: 66.3%; margin: 0 0 0 0; padding: 0 .5% 0 .5%;">
			<strong>20B</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Tax Paid in Return Previously Filed, if this is an amended return </span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: -1% 0 0 -4.2%; padding: .5% .5% .5% .5%;">
			<strong style="margin-left: -5%;">20B</strong>
			<input type="text" name="iTR2551M20B" class="inset tr isInt" size="20" style="margin: -10% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M20B') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: 1% 0 3% 0;">
		<div class="fl" style="width: 65%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>21</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Total Tax Credit/Payments (Sum of Items 20A & 20B)</span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>21</strong>
			<input type="text" name="iTR2551M21" class="inset tr isInt" size="20" style="margin: -10% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M21') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: 1% 0 3% 0;">
		<div class="fl" style="width: 65%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>22</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Tax Payable (Overpayment) (Item 19 less Item 21)</span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>22</strong>
			<input type="text" name="iTR2551M22" class="inset tr isInt" size="20" style="margin: -10% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M22') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: 1% 0 5% 0;">
		<div class="fl" style="width: 100%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>23</strong><span style="font-size: 10px; padding: 0 3% 0 2.5%;">Add Penalties</span>
			<span style="font-size: 10px; padding: 0 3% 0 8%;">Surchange</span>
			<span style="font-size: 10px; padding: 0 3% 0 14%;">Interest</span>
			<span style="font-size: 10px; padding: 0 3% 0 13%;">Compromise</span>
			<span style="font-size: 10px; padding: 0 3% 0 12%;"></span><br/>
		</div>
		<div class="fl" style="width: 90%; margin: -2% 0 0 15%; padding: .5% .5% .5% .5%;">
			<strong>23A</strong><input type="text" name="iTR2551M23A" class="inset tr isInt" size="8" style="margin: 1% 3% 0 1%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M23A') ?>">
			<strong>23B</strong><input type="text" name="iTR2551M23B" class="inset tr isInt" size="8" style="margin: 1% 3% 0 1%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M23B') ?>">
			<strong>23C</strong><input type="text" name="iTR2551M23C" class="inset tr isInt" size="8" style="margin: 1% 3% 0 1%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M23C') ?>">
			<strong>23D</strong><input type="text" name="iTR2551M23D" class="inset tr isInt" size="8" style="margin: 1% 3% 0 1%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M23D') ?>">
		</div>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: 3% 0 3% 0;">
		<div class="fl" style="width: 65%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>24</strong><span style="font-size: 10px; padding: 0 3% 0 1.5%;">Total Amount Payable (Overpayment) (Sum of Items 22 and 23D)</span><br/>
		</div>
		<div class="fl" style="width: 24%; margin: 0 0 0 0; padding: .5% .5% .5% .5%;">
			<strong>24</strong>
			<input type="text" name="iTR2551M24" class="inset tr isInt" size="20" style="margin: -11% 0 0 10%;" value="<?= getF2551p1Data($form2551mData,'iTR2551M24') ?>">
		</div>
	</div>
	
	<div class="rows" style="width: 98%; margin: -1% 0 0 0; padding: 0 0 5% 2%;">
		<div class="fl" style="width: 70%; margin: 0 0 0 0; padding: 0 .5% 0 .5%;">
			<span style="font-size: 10px; padding: 0 3% 0 1.5%;">If Overpayment, mark one box only</span><span style="font-size: 10px; padding: 0 3% 0 1.5%;"><input type="radio" name="op1" value="refund">To be Refunded<input type="radio" name="op1" value="tcc">To be issued a Tax Credit Certificate</span>
		</div>
	</div>
	
	<div class="rows" style="padding: .2% 0 0.2% 1%; width: 99%;">
		<div class="fl" style="width: 10%;">
			<strong>Schedule 1</strong>
		</div>
		
		<span style="padding-left: 25%;">
			<strong>Tax Withheld Claimed as Tax Credit</strong>
		</span>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: .2% 0 0.2% 1%; width: 99%; font-size: 10px; text-align: left;">
		<table>
			<tr>
				<th style="width: 15%;"></th>
				<th style="width: 15%;">Period Covered</th>
				<th style="width: 20%;">Name of Withholding Agent</th>
				<th style="width: 7%;">Income Payments</th>
				<th style="width: 15%;">Tax Withheld</th>
				<th style="width: 15%;">Applied</th>
			</tr>
			<tr>
				<td><button value="Delete">Delete</button></td>
				<td  class="tc"><input type="text" name="" class="inset" size="15" style="margin: 1% 0 0 0;"></td>
				<td  class="tc"><input type="text" name="" class="inset" size="15" style="margin: 1% 0 0 0;"></td>
				<td  class="tc"><input type="text" name="" class="inset tr" size="5" style="margin: 1% 0 0 0;"></td>
				<td  class="tc"><input type="text" name="" class="inset tr" size="5" style="margin: 1% 0 0 0;"></td>
				<td  class="tc"><input type="text" name="" class="inset tr" size="5" style="margin: 1% 0 0 0;"></td>
			</tr>
		</table>
	</div>
	
	<div class="rows" style="border-bottom: 0; padding: .2% 0 0.2% 1%; width: 99%; font-size: 10px; text-align: right;">
		<button value="Add" style="margin-right: 1%; padding: 1% 5% 1% 5%;">Add</button>
	</div>
	
	<div class="rows" style="border-bottom: 0; width: 98%; margin: -1% 0 0 0; padding: 0 0 7% 2%;">
		<div class="fl" style="width: 100%; margin: 0 0 0 0; padding: 3% .5% 0 .5%;">
			<span style="font-size: 10px; padding: 0 57% 0 1.5%;">Total Amount(to item 20A).................</span><span class="fr" style="font-size: 10px; padding: 0 3% 0 9.5%;"><input type="text" name="" class=" demo2" size="10"></span>
		</div>
	</div>
</div>

<div id="openModal" class="modalDialog">
	<div style="overflow-x: hidden; overflow-y: scroll;">
		<center>ATC</center>
		<table style="border: solid 1px #000; width: 100%;">
			<tr>
				<th style="width: 10%; border: solid 1px #777;">Code</th>
				<th style="width: 60%; border: solid 1px #777;">Description</th>
				<th style="width: 10%; border: solid 1px #777;">Rate</th>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT010</td>
				<td style="border: solid 1px #777;">PERSON EXEMPT FROM VAT UNDER SEC. 109V (SEC. 16)</td>
				<td style="border: solid 1px #777;">3.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT040</td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX ON COMMON CARRIERS - AUTOCALESA (MA)</td>
				<td style="border: solid 1px #777;">3.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT041</td>
				<td style="border: solid 1px #777;">TAX ON INTERNATIONAL CARRIERS</td>
				<td style="border: solid 1px #777;">3.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT060</td>
				<td style="border: solid 1px #777;">PERCENTAGE TAX ON FRANCHISES - GAS AND WATER SUPPLIES</td>
				<td style="border: solid 1px #777;">2.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT070</td>
				<td style="border: solid 1px #777;">TAX ON FRANCHISE OF RADIO/TV BROADCASTING WHOSE ANNUAL GROSS RECEIPTS DOES NOT EXCEED P10M</td>
				<td style="border: solid 1px #777;">3.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT101</td>
				<td style="border: solid 1px #777;">TAX ON BANKS AND NON-BANK FIS - INTEREST, COMMISSIONS AND DISCOUNTS FROM LENDING ACT., MATURITY IS MORE THAN 5 YEARS</td>
				<td style="border: solid 1px #777;">1.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT102</td>
				<td style="border: solid 1px #777;">ON DIVIDENDS AND EQUITY SHARES AND NET INCOME OF SUBSIDIARIES</td>
				<td style="border: solid 1px #777;">0.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT103</td>
				<td style="border: solid 1px #777;">ON ROYALTIES, RENTALS OF PROPERTY, RELA OR PERSONAL, PROFITS FROM EXCHANGE AND ALL OTHER GROSS INCOME</td>
				<td style="border: solid 1px #777;">7.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT104</td>
				<td style="border: solid 1px #777;">AGE ON NET TRDNG GAINS WITHIN THE TXBLE YR ON FRGN CURR, DEBT SECURITIES, DERIVATIVES, AND OTHER FINANCIAL INSTRUMENTS</td>
				<td style="border: solid 1px #777;">7.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT105</td>
				<td style="border: solid 1px #777;">TAX ON BANKS AND NON-BANK FIS - INTEREST, COMMISSIONS AND DISCOUNTS FROM LENDING ACT., MATURITY IS 5 YEARS OR LESS</td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT113</td>
				<td style="border: solid 1px #777;">AGE TAX ON OTHER NON BANK FINANCIAL MATURITY PERIOD IS 5 YEARS OR LESS</td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT114</td>
				<td style="border: solid 1px #777;">AGE TAX ON OTHER NON BANK FINANCIAL MATURITY PERIOD IS MORE THAN 5 YEARS</td>
				<td style="border: solid 1px #777;">1.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT115</td>
				<td style="border: solid 1px #777;">AGE TAX ON OTHER NON BANK FINANCIAL FROM ALL OTHER ITEMS TREATED AS GROSS INCOME UNDER THE CODE</td>
				<td style="border: solid 1px #777;">5.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT120</td>
				<td style="border: solid 1px #777;">TAX ON LIFE INSURANCE PREMIUMS</td>
				<td style="border: solid 1px #777;">2.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT130</td>
				<td style="border: solid 1px #777;">TAX ON AGENTS OF FOREIGN INSURANCE COMPANIES LIFE INSURANCE PREMIUMS</td>
				<td style="border: solid 1px #777;">10.0</td>
			</tr>
			<tr>
				<td style="border: solid 1px #777;"><input type="checkbox" name="" value="">PT132</td>
				<td style="border: solid 1px #777;">TAX ON OWNERS OF PROPERTY OBTAINING INSURANCE DIRECTLY WITH FOREIGN COMPANIES</td>
				<td style="border: solid 1px #777;">5.0</td>
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
	function getF2551p1Data($obj, $name){
		$return = '';
		
		if($obj != ''){
			foreach($obj as $var=>$each){
				if($var == $name){
					$return = $each;
				}
			}
		}
		return $return;
	}
?>