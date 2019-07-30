<style>
	.popup{
		z-index: 10;
	}
    .cnitableCollection{
        width: 99%;
        border-collapse: collapse;
        margin: auto;
        margin-top: 5px;
		height:auto!important;
    }
    .headinvoiceCollection{
        font-family: Calibri;
        font-size: 13px;
        font-weight: bold;
        color: white;
        text-align: left;
        padding-left: 5px;
    }
    .cnitableCollection, th{
        /* text-align: left; */
        padding: 5px;
        font-size: 13px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        font-weight: bold;
        color: white;
    }
    .cnitableCollection,td{
        text-align: left;
        padding: 5px;
        font-size:12px;
        font-family:Verdana;
        font-weight: normal;
		padding:7px 11px;
    }
    .cnitableCollection tr th:nth-child(4)(5){
        text-align: right;
    }
    .cnitableCollection tr th:nth-child(6){
        text-align: left;
    }
    .cnitableCollection tr td:nth-child(4)(5){
        text-align: right;
    }
    .cnitableCollection tr td:nth-child(6){
        text-align: left;
    }
    .cnitableCollection a{
        text-align: left;
        font-size: 11px;
        font-family: Verdana;
        color: blue;
        text-decoration: none;
    }
    .cnitableCollection a:hover{
        text-align: left;
        font-size: 11px;
        font-family: Verdana;
        color: blue;
        font-weight: normal;
        text-decoration: underline;
    }
    .cnitableCollection tr:HOVER{
        background-color:#E8E8E8;
    }	
    .totalA{
        border:none;
        width:100%;
        height:100%;
        background:none;
        text-align:right;
		font-family:Verdana;
		font-size: 11px;
    }
    .createNPAyment{
        width:210px;
        height:32px;
        border: none;
        background-image:url('<?= URL ?>public/images/rnpButton.png');
        background-repeat:no-repeat;
        cursor: pointer;
		border-radius:5px;
		background-size:100% 100%;
		outline-style:none;
    }
    .search2Col{
		/* width: 35px;
		height: 33px;
		margin-left: 301px;
		cursor: pointer;
		border: none;
		background-image: url('<?=URL?>public/images/searchButton.png');
		background-repeat: no-repeat;
		border-radius: 2px 2px 2px 2px;
		font-size: 14px;
		font-family:Agency FB;
		cursor: pointer;
		border: none;
		color: whitesmoke;
		border: solid 1px #c8c8c8;
		background-color: rgb(230, 250, 222);
		background-repeat: no-repeat;
		background-position: 3px;
		position: absolute;
		margin-top:-33px;
		margin-left:305px;
		background-size: 100%;
		opacity: -8; */
    }
    /*  */
    .tfootTable{
        border-collapse:collapse;
        width: 99% !important;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
       background-color: #183867;
		font-size: 12px;
		color: white;
		font-family:Verdana;
		/* text-align: left; */
		padding: 11px!important;
    }
    .tfootTable a{
        color: #fff;
		text-decoration: none;
		cursor: pointer;
		font-family:Verdana;
		font-size: 9px;
		font-weight: bold;
    }
    .tfootTable a:hover{
        font-weight:bold;
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
		height: 18px;
		margin-left: 10px;
		margin-right: 10px;
		/* background-image: url('<?=URL?>public/images/dropSelect.png');
		background-size: 65px 18px;
		background-repeat: no-repeat;
		-webkit-appearance: none; */
    }
    .reversecol{
		/* background: none;
		width: 92px;
		height: 33px;
		font-size: 17px;
		font-family:agency fb2;
		cursor: pointer;
		border: none;
		color: #183867;
		font-weight: bold;
		outline-style:none; */
    }
	.printPrevcol{
		background: none;
		width: 92px;
		height: 33px;
		font-size: 17px;
		font-family:agency fb2;
		cursor: pointer;
		border: none;
		color: #183867;
		font-weight: bold;
		outline-style:none;
    }
    .formcollectionNew{
        box-shadow: 10px 4px 7px -9px rgba(50, 50, 50, 0.75), -6px 5px 11px -7px rgba(50, 50, 50, 0.75);
        margin-top: -32px;
    }
	.searchindex22::-webkit-input-placeholder{
			color:#fff;
			padding-left:35px;
	}
	.searchindex22{
		margin-left: 10px;
		margin-top: 6px;
		width: 160px;
		height:29px;
		border: none;
		background-image: url('<?=URL?>public/images/searchButtonNew2.png');
		background-repeat: no-repeat;
		padding-left:5px;
		padding-right:40px;
		text-align: left;
		font-family:agency fb2;
		font-size:16px;
		font-weight: bold;
		color: #fff;
		outline-style:none;
		border-radius:5px;
	}
	.dateInputText{
		width: 104px;
		height: 28px;
		font-family: Agency FB;
		font-size: 19;
		font-weight: bold;
		padding: 5px;
		border: 1px solid #183867;
	}
	.under{
		font-weight:bold;
	}
	.invNoOption{
		background-color: #fff;
		color: #000;
		font-weight: bold!important;
	}
	.buttonHover:hover{
		color:#B13C56;
	}
	.searchB{
		/* width: 35px;
		height: 33px;
		background-image: url('<?= URL ?>public/images/searchButton.png');
		background-repeat: no-repeat;
		border-radius: 2px 2px 2px 2px;
		font-size: 14px;
		font-family: Agency FB;
		cursor: pointer;
		border: none;
		color: #fff;
		background-color: rgb(230, 250, 222);
		background-position: 3px;
		position: absolute;
		margin-top: -33px;
		margin-left: 372px;
		background-size: 100%;
		opacity: -8; */
	}
	.cnitableExpHolderPage{
		background-color:#C51400;
		margin: auto;
		margin-top: 6px;
		width: 99%;
	}
	.cnitableExp th{
		padding:5px !important;
	}
	.cnitableExp td{
		border:none;
		padding:5px;
	}
</style>
<title>
	ALL PAYMENT
</title>
<!--<script src="<?= URL?>public/js/jquery.min.js"></script>
<script src="<?= URL?>public/js/jquery.ui.js"></script>
<script src="<?= URL?>public/js/custom.js"></script>-->
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<div class="mainbodyInvoice footerHeight">
<form method="post" action="<?php echo URL ?>expenses/collection?page=<?= $page ?>&ipp=<?= $ipp ?>" style="margin-bottom: -4px;" class="formcollectionNew">
    <div class="invoiceHolderCollection">
        <div id="new" class="headings">
            <label class="headTextCollection">ALL PAYMENT</label>
			 <?php if ($useraccess->Add == 'yes') { ?>
				<!-- <label class="crosspaymentexp"> -->
					<input type="button"  class="createNPAyment buttonslarge" value="RECORD NEW PAYMENT">
				<!-- </label> -->
			<?php } ?>
        </div>
       
		<div style="clear:both;"></div>
        <div class="div2Col">
            <div id="button_container" style="float:left">
                <input type="button" value="REVERSE" name="reverse" class="reversecol buttonHover buttoninvoices" id="reversecol">
                <input type="button" value="PRINT PREVIEW" name="print" class="printPrevcol buttonHover buttoninvoices" id="printPrevcol">
			</div>
            <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>

			<div style="float:right;margin-right:30px;margin-top: 3px;">	
				<span class="filteredby">Filtered By:</span>
				<label class="labelclass">
				   <select class="inumber" name="searchby" id="searchby">
						<option class="invNoOption" value="col_num" <?php echo ($searchby == 1) ? 'selected' : '' ?>>PAYMENT NO.</option>
						<option class="invNoOption" value="name" <?php echo ($searchby == 2) ? 'selected' : '' ?>>VENDOR NAME</option>
						<option class="invNoOption" value="date_received" <?php echo ($searchby == 3) ? 'selected' : '' ?>>PAYMENT DATE</option>
					</select>
				</label>
				<input type="search" placeholder="SEARCH" name="search" class="searchindex22 
				<?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>">
				<input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" placeholder="From Date" class="date dateInputText <?php echo ($searchby != 3) ? 'hidden' : '' ?>"/>
				<input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>" placeholder="To Date" class="date dateInputText <?php echo ($searchby != 3) ? 'hidden' : '' ?>"/>
				<!--<input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">-->
				
				<input type="button" name="addpayment" value="" class="searchB search2Col mar_left">
			</div>
            <div style="clear:both;"></div>
        </div>
        <div class="moduleHeight">
            <table class="cnitableExp" style="margin:auto;width:99%;">
                <thead class="headinvoice">
                    <th width="1%"><!-- <input type="checkbox" class="toggle"> --></th>
                    <th  style="text-align:left!important;">Payment No.</th>
                    <th  style="text-align:left!important;">Payment Date</th>
                    <th  style="text-align:left!important;">Vendor Name</th>
                    <th style="text-align:right;">Amount Received</th>
                    <th style="text-align:right;">Status</th>
                    <th  style="text-align:center!important;">Date Reversed</th>
                </thead>
            </table>
        </div>
		<div class="cnitableExpHolderPage">
			
		</div>
    </div>
    <input type='hidden' name='task' value=''/>
    <input type="hidden" name="sortorder" value=""/>	
    <input type="hidden" name="sortdirection" value=""/>	
</form>
</div>
<div class="popBack hidden">

</div>

<div class="popup hidden">

</div>
<script>
    $(function() {
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
		$('#searchby').change(function () {
			// alert($(this).val());search2Col
            if ($(this).val() == 'date_received') {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('[name="addpayment"]').css('margin-left','422px');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('[name="addpayment"]').css('margin-left','324px');
            }
			setPagenation();
        });
        // $('#searchby').change();
		// $('#searchby').change(function(){
		// 	setPagenation();
		// });
        $('.createNPAyment').click(function() {
            validateSeries2('expenses');
        });
		
		setPagenation();
		$('.searchindex22').keyup(function(){
			setPagenation();
		});

		$('input[name="enddate"], input[name="startdate"]').change(function () {
            setPagenation();
        });

		
		
		$('#reversecol').click(function(){
			if ($("input[name='trig[]']").is(':checked') && confirm("Are you sure you want to reverse this payments?")) {
				var checked = [];
				$("input[name='trig[]']:checked").each(function()
				{
					checked.push(parseInt($(this).val()));
				});
				$('body').css('overflow', 'hidden');
				$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
				$('.popBack').removeClass('hidden');
				
				$.post(URL + 'expenses/reversePayment', {paymentids: checked})
					.done(function(returnData) { 
						status = returnData;
						
						if (status == 'reversed') {
							alert('Selected record(s) status already reversed');
							$('body').css('overflow', 'auto');
							$('.popBack').addClass('hidden');
						} else {
							// alert(status);
							alert('Selected record reversed');
							
						}
						setPagenation();
						$('body').css('overflow', 'auto');
						$('.popBack').addClass('hidden');
						// $("input[name='chk[]']").removeAttr('checked');
					})
					.fail(function() {
						alert('Connection Error!');
					});
				return false;
			}
		});
		
		$("#printPrevcol").click(function(){
			if ($('input[name="trig[]"]').is(':checked')) {
                var checked = '';
                if ($('input[name="trig[]"]:checked').length > 1) {
                    alert('Please select one record only to view.');
                    $('input[type="checkbox"]').prop('checked', false);
//                    $("input[name='chk[]']:checked").each(function(){ $(this).removeAttr('checked'); });
                    return false;
                } else {
					id = $('input[name="trig[]"]:checked').val();
					printPreview(id);
                }
            } else {
                alert('Please select record to preview');
            }
		});
		<?php if(Session::getSession('paymentId')){ ?>
			printPreview('<?= Session::getSession('paymentId') ?>');
		<?php } ?>
    });
	
	function printPreview(id){
		$.post(URL + 'expenses/printPreviewCollection', {'id': id})
				.done(function(returnData) {
					$('.popBack').html(returnData);
					$('.popBack').removeClass('hidden');
					$('body').css('overflow', 'hidden');
					$('.popBack').css('overflow', 'auto');
					$('.closePrint').click(function() {
						
						$('.popBack').addClass('hidden');
						$('.popBack').html('');
						$('body').css('overflow', 'auto');
						$('.chk').removeAttr('checked');
					});
				})
				.fail(function() {
					alert('Connection Error!');
				});
		return false;
	}
	
	function setPagenation(){
		search = $('.searchindex22').val();
		type = $('#searchby').val();
		startdate = $('input[name="startdate"]').val();
        enddate = $('input[name="enddate"]').val();

		$.post(URL + 'expenses/paymentPagenation',{'search':search, 'type':type, 'startdate':startdate, 'enddate':enddate , 'pageNumber': 25})
			.done(function(returnData){
				$('.cnitableExpHolderPage').html(returnData);
			});
	}
</script>

<script>
    function view(paymentid) {
        $.post(URL + 'expenses/paymentview', {paymentid: paymentid})
                .done(function(returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
					$('.popBack').css('overflow', 'auto');

                    $('.close').click(function() {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function() {
                    alert('Connection Error!');
                });
        return false;
    }
</script>