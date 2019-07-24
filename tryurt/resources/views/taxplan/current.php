<style>
.taxPlanHolder{
	width:1000px;
	margin:auto;
	height:820px;
	background:#fff;
	margin-top: -31px;
	padding-top: 31px;
	margin-bottom: 25px;
}
.currentCont{
	width: 950px;
    margin: auto;
    border:2px solid #E2180F;
    height: 97%;
    border-radius: 5px;
}
.monthYear{
	font-family:Verdana;
	font-size:12px;
	color:#183867;
}
.selectMonth {
    width: 133px;
    height: 25px;
    font-size: 12px;
    font-family: Verdana;
    padding-left: 5px;
    box-shadow: none;
    border: 1px solid gray;
    margin-left: 5px;
    margin-right: 5px;
    outline-style: none;
	border-radius:5px;
}
.selectYear {
    width: 68px;
    height: 25px;
    font-family: Verdana;
    font-size: 12px;
    padding-left: 5px;
    border: 1px solid gray;
    outline-style: none;
	border-radius:5px;
}
.FSGen{
	width: 100px;
	height: 28px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	background-image: url('<?=URL?>public/images/generate.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	outline-style: none;
}
.lineDivider{
	height:2px;
	background:#E2180F;
	
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
<form>
<div class="taxPlanHolder">
	<div class="currentCont">
		<div style="margin:25px;font-family:agency fb2;">
			<div style="font-size:23.4px;color:#183867;">
				Current
			</div>
			<div style="margin-top:5px;color:#183867;font-family:Verdana;font-size:12px;">
				BIR Reports:
				<select style="height:25px;width:147px;"name="preview_mode">
					<option value="form1601c">1601C</option>
					<option value="form1601e">1601E</option>
					<option value="form2550m">2550M</option>
					<option value="form2550q">2550Q</option>
					<option value="form2551m">2551m</option>
					<option value="form1701q">1701Q</option>
					<option value="form1701">1701</option>
				</select>
			</div>
			<div style="margin-top:10px;float:left;">
				<label class="monthYear month">Month:</label>
				<select class="selectMonth" name="month">
					<?php
						for ($x = 1; $x <= 12; $x++) {
					?>
					<option value="<?= strtolower(date('F', strtotime('2014-' . $x . '-01'))) ?>"
						<?= intval(Date('m')) == $x ? ' selected ' : '' ?>><?= date('F', strtotime('2014-' . $x . '-01')) ?>
					</option>
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
				<label class="monthYear year">Year:</label>
				<input type="number" class="selectYear" name="year" value="<?= date('Y') ?>" required />
			</div>
			<div style="float:left;margin-left:15px;margin-top:8px;">
				<input type="submit" class="FSGen" value="" >
			</div>
			<div style="clear:both;"></div>
		</div>
		<div class="lineDivider"></div>
		<div class="tblShowReport_div">
		
		</div>
			
		<div class="reportHolderContainer trhidden">
		
		</div>
	</div>
</div>
</form>
<script>
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

$(function(){
	$('.buttonFS').addClass('hidden');
    $('select[name="preview_mode"]').change(function() {

        form = $(this).val();

        if (form == 'form1601c' || form == 'form1601e' || form == 'form2550m' || form == 'form2551m') {
            $('.monthPreview').removeClass('hidden');
            $('select[name="month"]').removeClass('hidden');
            $('select[name="month2"]').addClass('hidden');
        }
        if (form == 'form2550q' || form == 'form1701q') {
            $('select[name="month2"]').removeClass('hidden');
            $('.monthPreview').removeClass('hidden');
            $('select[name="month"]').addClass('hidden');
        }
        if (form == 'form1701') {
            $('select[name="month"]').addClass('hidden');
            $('select[name="month2"]').addClass('hidden');
            $('.monthPreview').addClass('hidden');
        }
    })
	
	 $('form').submit(function() {
		 // alert('asd');
		
        type = $('.preview_mode').val();
        month = $('select[name="month"]').val();
        form = $('select[name="preview_mode"]').val();

        if (form == 'form2550q' || form == 'form1701q') {
            month = $('select[name="month2"]').val();
        }

        year = $('input[name="year"]').val();
        $('.reportHolderContainer').html('<div class="loadingeventreport"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreport" /></div>');
        $.post(URL + 'taxplan/genCurrentPreviewMode',
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
	
});

</script>












