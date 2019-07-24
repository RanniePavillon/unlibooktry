<style>

</style>
<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">

<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/forms.css"/>
<div>
    <div class="linereport"> 
        <div class="BSForm">
            <!--<div class="BSText">Form 2550M - Report Under Development</div>-->
            <div class="BSText">Form 2550M</div>
            <div class="buttonFS">
				<input type="button" class="FSPrint hidden addsavebuttonreports" value="EXPORT">
				<input type="button" class="FSPrint printPdf2 hidden addsavebuttonreports" value="PRINT">
            </div>
			<div style="clear:both;"></div>
            <div class="DFs">
                <div style="float:left;">
				   <label class="txtMOnthYear formscolor">Month:</label>
				   <select name="month" style="margin-top:10px;" class="yearname selectMonth">
                        <?php
								for($x = 1; $x <= 12; $x++){
							?>
								<option value="<?= strtolower(date('F', strtotime('2014-'.$x.'-01'))) ?>"
								<?= $x == date('m') && $x % 3 != 0 ? ' selected ' : '' ?>>
								<?= date('F', strtotime('2014-'.$x.'-01')) ?></option>
							<?php
								}
							?>
                    </select>
					<label class="txtMOnthYear formscolor">Year:</label>
                    <input type="number" name="year" value="<?= isset($_POST['year'])? $_POST['year'] : date('Y') ?>"  class="yearname selectYear"/>
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
    <form class="hidden form2550mHolderForm">
        
		<div style="float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
		<div class="buttonHolder itrbutton" style="float:right;">
			<input type="button" value="VIEW IN NEW TAB" class="viewMode addsavebuttonreports"/>
            <input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
            <input type="button" value="POST" class="postform2550m addsavebutton buttonstyles2 addsavebuttonreports"/>
        </div>
		<div style="clear:both;"></div>
		
		<div class="gen101Holder">
			<div class="gen101">
				<div class="form2550mHolder">

				</div>
			</div>
		</div>
		<div style="margin-top:15px;float:left;margin-left:8px;">
			<input type="button" class="fileAndPayOnline" value="FILE AND PAY ONLINE">
		</div>
        <div class="buttonHolder buttonbelow">
            <input type="submit" value="SAVE" class="addsavebutton buttonstyles addsavebuttonreports"/>
            <input type="button" value="POST" class="postform2550m addsavebutton buttonstyles2 addsavebuttonreports"/>
        </div>
    </form>
	<div class="formLoading hidden"></div>
</div>

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
			$('.form2550mHolderForm').addClass('hidden');
            if ($.inArray(month, ["march", "june", "september", "december"]) != -1) {
                $.post(URL + 'report/form2550q',{month:month,year:year,status:'redirect'})
                        .done(function(returnData) {
                            $('.newformcl').html(returnData);
                            $('.newformcl').removeClass('hidden');
                        });
            } else 
            {
                $.post(URL + 'report/form2550m/getReport', {'month': month, 'year': year})
                        .done(function(returnData) {
                            $('.form2550mHolder').html(returnData);
                            $('form').removeClass('hidden');

							$('.formLoading').addClass('hidden');
                            $('.isFloat').each(function() {
                                if ($(this).val() != '') {
                                    $(this).val($.number($(this).val(), 2));
                                }
                            });
                            $('.isFloat').change(function() {
                                $('.isFloat').change(function() {
                                    if ($(this).val() != '') {
                                        $(this).val($.number($(this).val(), 2));
                                    }
                                });
                            });
							
							$('body').css('overflow', 'auto');
							$('.popBack').addClass('hidden');

                        })
            }
        });

        $('form').submit(function() {
            $.post(URL + 'report/form2550m/setReport', $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            $('.generate').click();
                        } else {
                            alert(returnData);
                        }
                    });
            return false;
        });

        $('.postform2550m').click(function() {
            confirmPost = confirm('Are you sure you want to post?');
            if (confirmPost) {
                $.post(URL + 'report/form2550m/setReport?status=post', $('form').serialize())
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
			
			window.open(URL + 'report/newtab_form2550m?month=' + month + '&year=' + year);
			
			return false;
		});
		
		$('.printPdf2').click(function(){
			month = $('select[name="month"]').val();
			year = $('input[name="year"]').val();

			window.open(URL + 'report/form2550m/printReport?month=' + month + '&year=' + year);
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