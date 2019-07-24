<style>


</style>
<title>
	REPORTS
</title>


<?php
	$cMonth = intVal(Date('m'));
	$selectedQtr = 'march';
	
	if(in_array($cMonth,array(1,2,3))){
		$selectedQtr = 'march';
	} elseif(in_array($cMonth,array(4,5,6))){
		$selectedQtr = 'june';
	} elseif(in_array($cMonth,array(7,8,9))){
		$selectedQtr = 'september';
	} elseif(in_array($cMonth,array(10,11,12))){
		$selectedQtr = 'december';
	}
	
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/forms.css"/>
<div>
    <div class="linereport"> 
        <div class="BSForm">
            <div class="BSText">Form 2550Q</div>
            <div class="buttonFS">
				<input type="button" class="FSPrint hidden addsavebuttonreports" value="EXPORT">
				<input type="button" class="FSPrint printPdf2 hidden addsavebuttonreports" value="PRINT">
            </div>
			<div style="clear:both;"></div>
            <div class="DFs">
                <div style="float:left;">
                    <?php
                    $month = isset($_POST['month']) ? $_POST['month'] : '';
                    $year = isset($_POST['year']) ? $_POST['year'] : '';
                    ?>
                    <label class="txtMOnthYear">Period:</label>
					<select name="month" style="margin-top:10px;" class="yearname selectMonth">
                        <option value="march" <?php echo ($month == "march") ? 'selected' : '' ?>>First Quarter</option>
                        <option value="june" <?php echo ($month == "june") ? 'selected' : '' ?>>Second Quarter</option>
                        <option value="september" <?php echo ($month == "september") ? 'selected' : '' ?>>Third Quarter</option>
                        <option value="december" <?php echo ($month == "december") ? 'selected' : '' ?>>Fourth Quarter</option>
                    </select>
					<label class="txtMOnthYear">Year:</label>
                    <input type="number" name="year" value="<?= $year != '' ? $year : date('Y') ?>"  class="yearname selectYear"/>
					<input type="button" value="GENERATE" class="generate reportgenerate addsavebuttonreports"/>
                </div>
				
				<div style="clear:both;"></div>
				<div class="lineDivider">
				</div>
            </div>
        </div>
        <!--<div class="hmoDivider"></div>-->
    </div>


    <!--<div>
            <select name="month">
    <?php
    for ($x = 1; $x <= 12; $x++) {
        ?>
                                <option value="<?= strtolower(date("F", mktime(null, null, null, $x))); ?>">
        <?= date("F", mktime(null, null, null, $x)); ?>
                                </option>
        <?php
    }
    ?>
            </select>
            <input type="number" name="year" value="<?= date('Y') ?>"/>
            <input type="button" value="GENERATE" class="generate"/>
    </div>-->
    <form class="hidden form2550qHolderForm">
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
        <div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
            <input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
            <input type="button" value="POST" class="postform2550q addsavebutton buttonstyles2 addsavebuttonreports"/>
        </div>
		<div style="clear:both;"></div>
		
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form2550qHolder">
			
				</div>
			</div>
		</div>
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
        <div class="buttonHolder buttonbelow">
            <input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
            <input type="button" value="POST" class="postform2550q addsavebutton buttonstyles2 addsavebuttonreports"/>
        </div>
    </form>
	<div class="formLoading hidden"></div>
</div>

<?php if (isset($_POST['status']) && $_POST['status'] == 'redirect') { ?>
    <script>
        month = '<?php echo $_POST['month'] ?>';
        year = '<?php echo $_POST['year'] ?>';
        $.post(URL + 'report/form2550q/getReport', {'month': month, 'year': year})
                .done(function(returnData) {
                    $('.form2550qHolder').html(returnData);
                    $('form').removeClass('hidden');
                    $('.isNumeric').each(function() {
                        $(this).val($.number($(this).val(), 2));
                    });

                })
    </script>
<?php } ?>

<script>
    $(function() {

		// $('.formLoading').html(loading);
        $('.generate').click(function() {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
			
            month = $('select[name="month"]').val();
            year = $('input[name="year"]').val();

			$('.formLoading').removeClass('hidden');
			$('.form2550qHolderForm').addClass('hidden');
            $.post(URL + 'report/form2550q/getReport', {'month': month, 'year': year})
                    .done(function(returnData) {
							$('.formLoading').addClass('hidden');
                        $('.form2550qHolder').html(returnData);
                        $('form').removeClass('hidden');
                        $('.isNumeric').each(function() {
                            $(this).val($.number($(this).val(), 2));
                        });
						$('body').css('overflow', 'auto');
						$('.popBack').addClass('hidden');
                    })
        });

        $('form').submit(function() {
            $.post(URL + 'report/form2550q/setReport', $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            $('.generate').click();
                        } else {
                            alert(returnData);
                        }
                    });
            return false;
        });

        $('.postform2550q').click(function() {
            confirmPost = confirm('Are you sure you want to post?');
            if (confirmPost) {
                $.post(URL + 'report/form2550q/setReport?status=post', $('form').serialize())
                        .done(function(returnData) {
                            if (returnData == 0) {
                                $('.generate').click();
                            } else {
                                alert(returnData);
                            }
                        });
            }
        });
		
		/* viewMode codes */
		$('.viewMode').click(function() {
		
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();
			
			window.open(URL + 'report/newtab_form2550q?month=' + month + '&year=' + year);
			
			return false;
		});
		
		$('.printPdf2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();

			window.open(URL + 'report/form2550q/printReport?month=' + month + '&year=' + year);
			return false;
		});
	
	
	
		<?php
		if (isset($_GET['month'])) {
			?>
			$('select[name="month"]').val('<?= $_GET['month']?>');
			$('input[name="year"]').val('<?= $_GET['year']?>');
			$('.generate').click();
		<?php
		}
		?>
		
    });
</script>