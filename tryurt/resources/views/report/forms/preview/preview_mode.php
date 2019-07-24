<style>

.viewButton{
	float:right;
	margin-top:20px;
	margin-right:13px;
}
@media print{ 
	.top, #container, .hrdashreport, .listType, .fsReport, #accpClickToOpen, .listForm, .BSText, .incomestate,.buttonFSbalanceTB,
	.outstanding_button,.DFs, .cr_button, .buttonFSbalanceBS, .monthlyExpensesCont, .DFs, .buttonFS, .addsavebuttonreports{
		display:none !important;
	}
	
	.reportForm{
		border:none !important;
	}
	.reportHolderOR{
		width:755px !important;
		overflow:hidden !important;
		box-shadow:none !important;
		border:none !important;
		margin-left:-12px !important;
		zoom:140%
		
	}
	.reportContainer{
		box-shadow:none !important;
	}
	
	.tblCRB th{
		color:#000 !important;
	}
	.fromReg{
		width:755px !important;
		/* margin-left:-5px !important; */
	}
	.tblCRB{
		width:95% !important;
	}
}
@page {
    size: 8" x 13";
	margin:0.29in 0.44in 0.44in 0.29in;
}
</style>
<?php
$cMonth = intVal(Date('m'));
$selectedQtr = 'march';

if (in_array($cMonth, array(1, 2, 3))) {
    $selectedQtr = 'march';
} elseif (in_array($cMonth, array(4, 5, 6))) {
    $selectedQtr = 'june';
} elseif (in_array($cMonth, array(7, 8, 9))) {
    $selectedQtr = 'september';
} elseif (in_array($cMonth, array(10, 11, 12))) {
    $selectedQtr = 'december';
}
?>
<title>
    Preview Mode
</title>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<form>
	<div class="monthlyExpensesCont">
		<div class="reportTitle">
			Preview Mode
		</div>
		<div class="buttonFS hidden">
			<input type="button" value="VIEW" class="viewMode addsavebuttonreports"/>
			<input type="button" class="FSPrint printME addsavebuttonreports" value="PRINT">
			<input type="button" class="FSExport exportButton addsavebuttonreports" value="EXPORT">
		</div>
		<div style="clear:both;"></div>
		<div style="font-family:Verdana;font-size:12px;margin-top:5px;" class="reportcolor">
			BIR Reports: 
			<select name="preview_mode" class="BS_IS preview_mode" style="height:25px;width:147px;">

				<option value="form1601c">1601C</option>
				<option value="form1601e">1601E</option>
				<?php if ($this->info->typeOfTax == 'vat' || $this->info->typeOfTax != 'percentage'){
					
				?>
				<option value="form2550m">2550M</option>
				<option value="form2550q">2550Q</option>
				<?php
					}else if ($this->info->typeOfTax != 'vat' || $this->info->typeOfTax == 'percentage'){
				?>
				<option value="form2551m">2551M</option>
				<?php
					}
				?>
				<option value="form1701q">1701Q</option>
				<option value="form1701">1701</option>
			</select>
		</div>
		<div style="float:left;">
			<div class="dateDiv2 txtRadio reportcolor" style="margin-top:10px;"> 
				<div>	
					<label class="monthPreview">Month:</label>
					<label class="periodPreview hidden">Period:</label>
					<select name="month" class="selectMonth">
						<?php
						for ($x = 1; $x <= 12; $x++) {
							?>
							<option value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>"
									<?= intval(Date('m')) == $x ? ' selected ' : '' ?>><?= date('F', strtotime('2014-' . $x . '-01')) ?></option>
									<?php
								}
								?>
					</select>
					<select name="month2" class="select2 hidden">
						<option value="march" <?= 'march' == $selectedQtr ? ' selected ' : '' ?>>First Quarter</option>
						<option value="june" <?= 'june' == $selectedQtr ? ' selected ' : '' ?>>Second Quarter</option>
						<option value="september" <?= 'september' == $selectedQtr ? ' selected ' : '' ?>>Third Quarter</option>
						<option value="december" <?= 'december' == $selectedQtr ? ' selected ' : '' ?>>Fourth Quarter</option>
					</select>
					Year: <input type="number" class="selectYear" name="year" value="<?= date('Y') ?>" required />
					<input type="submit" class="FSGen addsavebuttonreports" value="GENERATE" >
				</div>
			</div>
		</div>
		
		<div style="clear:both;"></div>
		<div class="lineDivider"></div>

		<div class="tblShowReport_div"></div>
	</div>
</form>

<div class="reportHolderContainer trhidden"></div>


<script>
$(function() {
    $('select[name="preview_mode"]').change(function() {
        form = $(this).val();

        if (form == 'form1601c' || form == 'form1601e' || form == 'form2550m' || form == 'form2551m') {
            $('.monthPreview').removeClass('hidden');
            $('.periodPreview').addClass('hidden');
            $('select[name="month"]').removeClass('hidden');
            $('select[name="month2"]').addClass('hidden');
        }
        if (form == 'form2550q' || form == 'form1701q') {
            $('select[name="month2"]').removeClass('hidden');
            $('.monthPreview').addClass('hidden');
			 $('.periodPreview').removeClass('hidden');
            $('select[name="month"]').addClass('hidden');
        }
        if (form == 'form1701') {
            $('select[name="month"]').addClass('hidden');
            $('select[name="month2"]').addClass('hidden');
            $('.monthPreview').addClass('hidden');
			$('.periodPreview').addClass('hidden');
        }
    });

    $('form').submit(function() {

        type = $('.preview_mode').val();

        month = $('select[name="month"]').val();
        form = $('select[name="preview_mode"]').val();

        if (form == 'form2550q' || form == 'form1701q') {
            month = $('select[name="month2"]').val();
        }

        year = $('input[name="year"]').val();
        $('.reportHolderContainer').html('<div class="loadingeventreport"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreport" /></div>');
        $.post(URL + 'report/genPreviewMode',
                {
                    'type': type,
                    'month': month,
                    'year': year
                }).done(function(returnData) {
            $('.buttonFS').removeClass('hidden');
            $('.reportHolderContainer').html(returnData);

        }).fail(function() {
            alertWithoutNotice('Connection Error!');
        });
        return false;
    });

    $("#datepicker").focus(function() {
        $(".ui-datepicker-month").hide();
    });

    $('.viewMode').click(function() {
        form101 = $('select[name="preview_mode"]').val();
        month = $('select[name="month"]').val();
        qtr = $('select[name="month2"]').val();
        year = $('input[name="year"]').val();


        window.open(URL + 'report/preview_newtab?form=' + form101 + '&month=' + month + '&qtr=' + qtr + '&year=' + year);
        return false;
    });

    $('.printME').click(function() {
        window.print();
    });
	
	
	<?php
	if (isset($_GET['form'])) {
		?>
		
					$('select[name="preview_mode"]').val('<?= $_GET['form'] ?>');
					$('select[name="preview_mode"]').change();

					$('select[name="month"]').val('<?= $_GET['month'] ?>');
					$('select[name="month2"]').val('<?= $_GET['qtr'] ?>');
					$('input[name="year"]').val('<?= $_GET['year'] ?>');

					$('.FSGen').click();
		<?php
	}
	?>
});
</script>