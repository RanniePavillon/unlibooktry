<style>
.eTypeHolder2 input[type="text"],.eTypeHolder2 select{
	width: 120px;
}
.eTypeHolder2{
	margin-top: 40px;
}
.eType2{
	padding: 3px 10px;
}
.eType{
	width: 200px;
	height:25px;
	font-family:Verdana;
	font-size:12px;
}
.import-form{
	/* width: 90%; */
	height: 405px;
	/* margin-left: 50px; */
	/* margin-top: 10px; */
	margin-bottom: 50px;
	padding-left: 30px;
	padding-right: 30px;
}
.export-div{
	margin-top: 5px;
}
.export{
	font-family:agency fb2;
	font-size: 24px;
	font-weight: bold;
	color: #CF1400;
}
#im-ex-new{
	padding-top:5px;
}
.step1{
	/* margin-left: 10px; */
	margin-top: 20px;
	font-size:12px;
	font-family:Verdana;
}
.Demo{
	margin-left: 847px;
	margin-top: -22px;
	font-size: 17px;
	font-family: Agency FB;
}
.demolink{
	color: #183867;
	text-decoration: none;
}
.sampleT{
	margin-top: 15px;
	font-size:12px;
	font-family:Verdana;
}
.eText{
	font-family:Verdana;
	font-size:12px;
}
.eTypeimport{
	width: 180px;
	height: 25px;
	border: 1px solid #C8C8C8;
	background-color: white;
	margin-top: -25px;
	font-size:12px;
	font-family:Verdana;
}
.eType{
	width: 180px;
	height: 25px;
	border: 1px solid #C8C8C8;
	background-color: white;
	margin-left:5px;
	font-size:11px;
	font-family:Verdana;
}
.exButton{
	width: 100px;
	height: 30px;
	border: none;
	border-radius:4px;
	margin-left:5px;
	background: #C51400;
	color: white;
	font-family: agency fb2;
	font-size: 17px;
	font-weight: bold;
	outline-style: none;
	cursor:pointer;
}
.export2-div{
	margin-top: 60px;
	margin-bottom: 10px;
}
.SelectText{
	font-family:Verdana;
	font-size:12px;
}
.buttonBrowse{
	width:169px;
	height: 20px;
	font-size: 13px;
	font-weight: bold;
	font-family: calibri;
	font-style: italic;
}
.BankText{
	font-family: Calibri;
	font-size: 12px;
	margin-top: -22px;
	margin-left: 251px;
}
.imButton{
	background: #C51400;
	border-radius: 4px;
	width: 100px;
	height: 30px;
	border: none;
	margin-left:5px;
	outline-style: none;
	color: white;
	font-family: agency fb2;
	font-size: 17px;
	font-weight: bold;
	cursor:pointer;
}
.im-ex-new2{
	margin-left: 15px;
	
}

.fileUpload {
}
.fileUpload input.buttonBrowse {
	font-size: 12px;
	cursor: pointer;
	font-family: Agency FB;
	font-weight: normal;
}
.headTextUse{
	font-family:agency fb2;
	color: #c51400;
	margin-left: 20px;
	font-weight: bold;
	font-size:28px;
	margin-top: 0px;
}
</style>
<?php
	$selected = '';
	if(isset($this->type)){
		$selected = $this->type;
	}
	
?>
<title>
	Import & Export
</title>
<div class="companyHolderNew1">
	<p class="headTextUse">IMPORT AND EXPORT</p>
<div class="import-form">
	<div id="im-ex-new">
		<div class="export-div">
			<div class="export">EXPORT</div>
			<div class="step1">Step 1. Export your master data to be used as sample template on  how to format your file for importing.</div>	
			<div class="hidden Demo"> Click Here for <a href class="demolink">DEMO</a></div>
			<div class="sampleT"><span class="sampleSpan">Sample Template</span>: Customer, Vendor, Service Item and Quick Expenses</div>	
		
			<form method="post" action="<?php echo URL ?>setting/export" >
				<div style="margin-top:40px;">
					<label class="eText">Template File:</label>
					<select class="eType" name="type">
						<option value="Client" <?= $selected == 'Client' ? ' selected ' : '' ?>>Customer</option>
						<option value="Vendor" <?= $selected == 'Vendor' ? ' selected ' : ''  ?>>Vendor</option>
						<option value="Service Item" <?= $selected == 'Service Item' ? ' selected ' : ''  ?>>Service Item</option>
						<option class="hidden" value="Quick Expenses" <?= $selected == 'Quick Expenses' ? ' selected ' : ''  ?>>Quick Expenses</option>
					</select>
					<input type="submit" class="exButton" value="EXPORT FILE">
				</div>
			</form>
		</div>
	</div>
	<div id="im-ex-new2">
		<div class="export2-div">
			<div class="export">IMPORT</div>
			<div class="step1">Step 2. Import your master data using  sample template from export file.</div>	
			<div class="hidden Demo"> Click Here for <a href class="demolink">DEMO</a></div>
			<div class="sampleT"><span class="sampleSpan">Sample Template</span>: Customer, Vendor, Service Item and Quick Expenses</div>	
			
			<form method="post" action="<?php echo URL ?>setting/importfile" enctype="multipart/form-data" >
				<div class="eTypeHolder2">
					<label class="SelectText">Select Your File:</label>
					<input type="file" class="buttonBrowse" id="" name="file">
					<select class="eTypeimport" name="type">
						<option value="client" <?= $selected == 'client' ? ' selected ' : '' ?>>Customer</option>
						<option value="supplier" <?= $selected == 'supplier' ? ' selected ' : ''  ?>>Vendor</option>
						<option value="task" <?= $selected == 'task' ? ' selected ' : ''  ?>>Service Item</option>
						<option class="hidden" value="quickExpense" <?= $selected == 'quickExpense' ? ' selected ' : ''  ?>>Quick Expenses</option>
					</select>
					<input type="submit" class="imButton" value="IMPORT FILE">
				</div>
				
			</form>
		</div>
	</div>
	
	
</div>	
</div>
<script>
	$(function(){
		<?php
			if($selected != ''){
		?>
			$('.eType').replaceWith('<input class="eType2 eType" type="text" name="type" value="<?= $selected ?>" readonly />');
			$('.eTypeimport').replaceWith('<input class="eType2 eTypeimport" type="text" name="type" value="<?= $selected ?>" readonly />');
		<?php
			}
		?>
	})
</script>