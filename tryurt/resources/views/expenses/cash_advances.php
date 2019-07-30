<style>
    .cnitableExp{
        border-collapse:collapse;
        width: 98%;
        margin:5px auto;
    }

    .cnitableExp, th{
        background-color: #183867;
        padding: 2px 2px 2px 2px;
        font-size: 12px;
        color: white;
        font-family: verdana;
        text-align: left;
        font-weight: bold;
        padding:5px;
    }
    .cnitableExp, td{
        font-size: 12px;
        color: black;
        font-family:Verdana;
        text-align: left;
        padding: 5px;
        font-weight: normal;
        border-left:none!important;
        border-right:none!important;
    }
    .cnitableExp a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
        font-family:Verdana;
    }
    .cnitableExp a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }

    .cnitableExp tr th:nth-child(6){
        text-align: right;
    }
    .cnitableExp tr th:nth-child(7){
        text-align: center;
    }
    .cnitableExp tr td:nth-child(6){
        text-align: right;
    }
    .cnitableExp tr td:nth-child(7){
        text-align: center;
    }
    .cnitableExp tr:HOVER{
        background-color: #E8E8E8;
    }
    .cnitableExpHolderPage{
        background-color:#C51400;
        margin: auto;
        margin-top: 6px;
        width: 98%;
    }
    .optioncolor {
        color: #fff;
    }
    .totalCashAdBottom{
        margin:15px auto;
        width: 98%;
    }
    .totalCashAdBottom td{
        background-color: #c51400;
    }
    
    .createAllcASH{
        background-color: #C51400 !important;
        width: 223px;
        height: 44px;
        border: none;
        /*background-image: url('<?= URL?>public/images/whitecross.png');*/
        background-repeat: no-repeat;
        background-position: 31px;
        background-size: 21px;
        cursor: pointer;
        border-radius: 5px;
        outline-style: none;
        font-family: agency fb2;
        font-size: 19px;
        /*padding: 0px 0px 0px 30px !important;*/
        color: #fff;
        text-shadow: 1px 1px 2px #282927;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0px -1px 1px rgb(111, 111, 111) inset;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
    /*.inumber{
        background-color: #C51400 !important;
        margin-left: 5px;
        width: 145px;
        height: 29px;
        border: none;
        border-radius: 2px;
        color: white;
        font-family: agency fb2;
        font-size: 15px;
        background-image: url('<?= URL?>public/images/backselect.png') !important;
        background-repeat: no-repeat !important;
        background-position: 116px 0 !important;
        font-weight: bold;
        padding-left: 10px;
        -webkit-appearance: none;
        -moz-appearance: none;
        outline-style: none;
        cursor: pointer;
        text-shadow: 1px 1px 2px #282927;
    }*/
    
    .searchindex{
        color: #FFF !important;
        float:left !important;
        background: #C51400 !important;
        border:1px solid rgb(13, 60, 126) !important;
    }
    .searchindex::-moz-placeholder{
        color:#FFF;
        padding-left:5px;
        font-family:agency fb2;
        font-size: 15px;
        letter-spacing:.5;
    }
    .searchindex::-webkit-input-placeholder{
        color:#b3b5bb;
        padding-left:5px;
        font-family:agency fb2;
        font-size: 15px;
        letter-spacing:.5;
    }
    .search2Col{
        width: 31px !important;
        height: 27px !important;
        float: left;
        margin-left: -31px !important;
        margin-top: 1px !important;
        border-radius:0px !important;
    }
</style>

<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<script>
    $(function () {
        $('#searchby').change(function () {
            if ($(this).val() == 'date_issued') {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
            }
        });
        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
    })
</script>



<div class="mainbodyExpenses footerHeight footerHighlight">
    <div class="invoiceHolderAllExp" style="padding-bottom:0px!important;">
        <div>
            <div class="invoiceHolderCollection">
                <div class="headings">
                    <div id="newAllExp" class="newInvoice formcontainernew" style="float:none!important;">
                        <label class="allexp fontall headTextCollection" style="float:left;">ALL CASH ADVANCES</label>
                        <a href="<?php URL ?>addCashAdvance" style="float:right;margin-right:83px;text-decoration:none;">	
                            <!-- <label class="largebuttonsconcash"> -->
                                <input type="button" class="createAllcASH buttonslargeSs" value="NEW CASH ADVANCE">
                            <!-- </label> -->
                        </a>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            <div id="search3" style="margin-left: 11px;height: 45px;font-size: 13px;font-family: Agency FB;">
                <div style="float:left; margin-left: 15px;margin-top: 15px;">
                    <?php if ($useraccess->Edit == 'yes') { ?>
                        <input type="button" name="edit" value="EDIT" class="edit2aAllExp buttoninvoices">
                    <?php }if ($useraccess->Add == 'yes') { ?>
                        <input type="button" name="copy" value="COPY" class="copy2aAllExp buttoninvoices">
                    <?php }if ($useraccess->Delete == 'yes') { ?>
                        <input type="button" name="del" value="CANCEL" class="deleteAllExp buttoninvoices">
                    <?php } ?>
                    <input type="button" name="print" value="PRINT PREVIEW" class="printPreview buttoninvoices">
                    <input type="button" name="liquidation" value="LIQUIDATION" class="liquidation buttoninvoices">
                </div>
                <div style="float:right;margin-top: 10px;margin-right:54px;">
                    <label style="float:left;margin-right: 5px;">   
                        <span class="filteredby">Filtered by:</span>
                        <label class="labelclass">
                            <select class="inumber" id="searchby">
                                <option value="cash_advance_num" class="invNoOption">CA NO.</option>
                                <option value="name" class="invNoOption">EMPLOYEE NAME</option>
                                <option value="date_issued" class="invNoOption">DATE</option>
                            </select>
                        </label>
                    </label>
                    
                    <span style="float:left;">
                        <input type="search" name="search" placeholder="SEARCH" class="searchindexAllE searchindex" > 
                        <input type="text" name="startdate" value="" 
                               placeholder="From Date" class="date dateInputText" style="width:104px;height: 29px;"/>
                        <input type="text" name="enddate" value=""
                               placeholder="To Date" class="date dateInputText" style="width:104px;height: 29px;"/>
                        <input type="button" name="addpayment" value="" class="searchB search2Col">
                    </span>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </div>
        <div class="tablecontainerform">
			<div class="moduleHeightUrgent">
				<table class="cnitableExp">
					<thead class="headinvoice">
					<th width="1%"><!-- <input type="checkbox" class="toggle"> --></th>
					<th width="12%">CA No.</th>
					<th width="12%">Date</th>
					<th width="20%">Employee Name</th>
					<th width="10%">CV No.</th>
					<th width="12%">Total Amount</th>
					<th width="10%">Status</th>
					<th width="12%">Date Reversed</th>
					</thead>
				</table>
			</div>
        </div>
        <div style="margin-bottom:-10px;">
        
            <table class="totalCashAdBottom">
                <tr class="tablecnis">
                    <td colspan="6" style="text-align: right;width:52.3%;color:#fff;font-size:12px;font-family:Verdana;border:none;"><b>Total : </b></td>
                    <td style="width:23%;text-align: right;color:#fff;font-size:12px;font-family:Verdana;border:none;width: 23%;"><b class="theTotalCashAd"></b></td>
                    <td style="border:none;"></td>
                </tr>
            </table>
        </div>
        <div class="cnitableExpHolderPage">

        </div>
        </div>
   
</div>

<div class="popBack hidden">

</div>

<script>
    $(function () {
        $('.toggle').click(function () {
            if ($(this).is(':checked')) {
                $('input[type="checkbox"]').prop('checked', true);
            } else {
                $('input[type="checkbox"]').prop('checked', false);
            }
        });

        $('.printAllExp').click(function () {
            $.post(URL + 'views/invoice/print_invoice.php')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.closePrint').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');

                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });
/* 
        $('.deleteAllExp').click(function () {
            myArray = new Array();

            if ($('input[name="trig[]"]:checked').length == 0) {

                alert('Please select item to delete.');

                return false;

            }

            $('input[name="trig[]"]:checked').each(function () {
                myArray.push($(this).val());
            });

            // status = $('input[name="trig[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
            status = '';

            $('input[name="trig[]"]:checked').parent('td').parent('tr').each(function () {
                values = $(this).find('td:nth-child(7)').html();
                if (values == 'Posted' || values == 'Reversed') {
                    status = 'Posted';
                }
            });
            if (status == 'Posted' || status == 'Reversed') {
                alert('Cash Advance(s) may be posted/reversed. You can no longer delete the Cash Advance(s).');
                $('input[name="trig[]"]:checked').prop('checked', false);
                return false;
            }

            confirmation = confirm('Are you sure you want to cancel Cash Advance(s)?');
            if (confirmation) {
                $.post(URL + 'expenses/deleteCashAdvance', {'array': myArray})
                        .done(function (returnData) {
                            if (returnData == 0) {
                                location.reload();
                            } else {
                                alert(returnData);
                                loadEapenseList();
                            }
                        });
            }
            $('input[name="trig[]"]:checked').prop('checked', false);
        });
 */
        setPagenation();
        $('.searchindexAllE').keyup(function () {
            setPagenation();
        });

        $('input[name="enddate"], input[name="startdate"]').change(function () {
            setPagenation();
        });

        $('.inumber').change(function () {
            setPagenation();
        });

        $('.edit2aAllExp').click(function () {
            if ($('input[name="trig[]"]:checked').length == 0) {
                alert('Please select item to edit.');
                return false;
            } else if ($('input[name="trig[]"]:checked').length > 1) {
                alert('Please select only 1 item to edit.');
                $('input[name="trig[]"]:checked').prop('checked', false);
                return false;
            }

            status = '';

            $('input[name="trig[]"]:checked').parent('td').parent('tr').each(function () {
                values = $(this).find('td:nth-child(7)').html();
                if (values == 'Posted' || values == 'Reversed') {
                    status = 'Posted';
                }
            });
            if (status == 'Posted' || status == 'Reversed') {
                alert('Sorry, unable to edit posted transaction.');
                $('input[name="trig[]"]:checked').prop('checked', false);
                return false;
            }

            id = $('input[name="trig[]"]:checked').val();

            edit(id);
        });

        $('.copy2aAllExp').click(function () {
            if ($('input[name="trig[]"]:checked').length == 0) {
                alert('Please select item to copy.');
                return false;
            } else if ($('input[name="trig[]"]:checked').length > 1) {
                alert('Please select only 1 item to copy.');
                $('input[name="trig[]"]:checked').prop('checked', false);
                return false;
            }

            id = $('input[name="trig[]"]:checked').val();

            copy(id);
        });


    })


    // setPagenation();
    function setPagenation() {
        search = $('.searchindexAllE').val();
        type = $('.inumber').val();
        startdate = $('input[name="startdate"]').val();
        enddate = $('input[name="enddate"]').val();

        $.post(URL + 'expenses/cashAdvancePagenation', {'search': search, 'type': type, 'pageNumber': 25, 'startdate': startdate, 'enddate': enddate})
                .done(function (returnData) {
                    $('.cnitableExpHolderPage').html(returnData);
                });

    }

    function edit(id) {

        $.post(URL + 'expenses/editCashAdvance', {'expenseId': id})
                .done(function (returnData) {
                    $('.invoiceHolderAllExp').html(returnData);
					
					address = $('select[name="supplierId"] option:selected').attr('address');
					tin = $('select[name="supplierId"] option:selected').attr('tin');
					$('textarea[name="address"]').val(address);
					$('input[name="tin"]').val(tin);
					
                    $('.form1NExpense').unbind();
                    $('.form1NExpense').submit(function () {
						
						return false;
                        allowWithHolding = false;
                        obj = false;
                        count = 0;
                        if (obj && count > 1) {
                            alert('Account is not allowed for multiple selection.');
                            $(obj).focus();
                            return false;
                        }
                        $('body').css('overflow', 'hidden');
                        //$('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                        $('.popBack').removeClass('hidden');

                        $.post(URL + 'expenses/setCashAdvance?id=' + id, $('.form1NExpense').serialize())
                                .done(function (returnData) {
                                    if (returnData == 0) {
                                        location.reload();
                                    } else {
                                        alert(returnData);
                                        $('.popBack').addClass('hidden');
                                        $('body').css('overflow', 'auto');
                                        $('.popBack').addClass('hidden');
                                    }
                                });
                        return false;
                    });


                    $('.postExpense, .bnSend, .bnexpense').unbind();

                    $('.bnSend').click(function () {
                        $('input[name="approvalStatus"]').val('pending');
                    });

                    $('.postExpense, .bnSend, .bnexpense').click(function () {
                        allowWithHolding = false;
                        obj = false;
                        count = 0;
                        if (obj && count > 1) {
                            alert('Account is not allowed for multiple selection.');
                            $(obj).focus();
                            return false;
                        }

                        ext = $('input[name="approvalStatus"]').val() == 'pending' ? 'pending' : 'posted';
                        $('input[name="approvalStatus"]').val('');

                        msg = ext == 'pending' ? 'post' : 'save';
                        confirmation = confirm('Are you sure you want to ' + msg + ' the Cash Advance(s)?');

                        if (confirmation) {
                            $('body').css('overflow', 'hidden');
                            $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                            $('.popBack').removeClass('hidden');
                            $('#supplierId, select[name="costCenter[]"]').prop('disabled', false);
							type = msg == 'post' ? 'posted' : 'open';
							// alert(type);
                            $.post(URL + 'expenses/setCashAdvance?type=' + type + '&id=' + id, $('.form1NExpense').serialize())
                                    .done(function (returnData) {
                                        if (returnData == 0) {
                                            location.reload();
                                        } else {
                                            alert(returnData);
                                            $('.popBack').addClass('hidden');
                                            $('body').css('overflow', 'auto');
                                        }
                                    });
                        } else {
							$('body').css('overflow', 'auto');
                            $('.popBack').html('');
                            $('.popBack').addClass('hidden');
                            // $('#supplierId, select[name="costCenter[]"]').prop('disabled', true);
							// return false;
						}
						return false;
                    });
                });
    }
    function copy(id) {
        $.post(URL + 'expenses/copyCashAdvance', {'expenseId': id})
                .done(function (returnData) {
					$('.popBack').remove();
                    $('.invoiceHolderAllExp').html(returnData);

					address = $('select[name="supplierId"] option:selected').attr('address');
					tin = $('select[name="supplierId"] option:selected').attr('tin');
					$('textarea[name="address"]').val(address);
					$('input[name="tin"]').val(tin);
					
                    $('.form1NExpense').unbind();
                    $('.form1NExpense').submit(function () {

                        $('body').css('overflow', 'hidden');
                        $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                        $('.popBack').removeClass('hidden');

                        $.post(URL + 'expenses/addCashAdv', $('.form1NExpense').serialize())
                                .done(function (returnData) {
                                    if (returnData == 0) {
                                        location.reload();
                                    } else {
                                        alert(returnData);
                                        $('.popBack').addClass('hidden');
                                    }
                                });
                        return false;
                    });

                    $('.postExpense').unbind();
                    $('.postExpense').click(function () {
                        confirmation = confirm('Are you sure you want to post the Expense(s)?');
                        if (confirmation) {
                            $('body').css('overflow', 'hidden');
                            $('.popBack').html('<div class="loadingevent2"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
                            $('.popBack').removeClass('hidden');
                            $.post(URL + 'expenses/addCashAdv?type=posted', $('form').serialize())
                                    .done(function (returnData) {
                                        if (returnData == 0) {
                                            location = URL + 'expenses';
                                        } else {
                                            alert(returnData);
                                        }
                                    });
                        }
                    });
					$('#supplierId').change();
                });
    }

    function printPreview(id) {
        $('.popupBack').removeClass('hidden');
        $.post(URL + 'expenses/printPreviewCashAdvance', {'id': id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    $('.xButton').click(function () {
                        $('.popBack').html('');
                        $('.popBack').addClass('hidden');
                        $('body').css('overflow', 'auto');
                        $('input[name="trig[]"]').removeAttr('checked');
                    });
                })
    }

    function printPreview2(id) {
        
//        $.post(URL + 'expenses/printPreviewLiquidation', {'id': id})
        $.post(URL + 'expenses/printPreviewLiquidation', {'id': id})
                .done(function (returnData) {
                    if (returnData != '') { 
                        $('.popupBack').removeClass('hidden');
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.xButton').click(function () {
                            $('input[name="trig[]"]:checked').prop('checked', false);
                            $('.popBack').html('');
                            $('.popBack').addClass('hidden');
                            $('body').css('overflow', 'auto');
                        });
                    }
                })
    }




</script>

<script>
    $(function () {
        $('.addAllExp').click(function () {
            $.post(URL + 'views/invoice/enter_payment_new.php')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');


                        $('.closeENTERPayment').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.liquidation').click(function () {
            id = $('input[name="trig[]"]:checked').val();
            if (typeof id === 'undefined') {
                alert('Please select item to Liquidate.');
                return false;
            }
            $.post(URL + 'expenses/liquidation', {'id': id})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('popBack').css('overflow', 'auto');
                        $('body').css('overflow', 'hidden');

                        $('.closeNewVendor').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                            $('input[name="trig[]"]').removeAttr('checked');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        });

        $('.printPreview').click(function () {
            if ($('input[name="trig[]"]:checked').length == 0) {
                alert('Please select item to preview.');
                return false;
            } else if ($('input[name="trig[]"]:checked').length > 1) {
                alert('Please select only 1 item to preview.');
                return false;
            }

            status = '';

            $('input[name="trig[]"]:checked').parent('td').parent('tr').each(function () {
                values = $(this).find('td:nth-child(7)').html();
                if (values == 'Posted' || values == 'Reversed' || values == 'Liquidated') {
                    status = 'Posted';
                }
            });
            if (status == 'Posted' || status == 'Reversed') {
                /* $('.closeCNTsexp').click(function () {
                 $('input[name="trig[]"]:checked').prop('checked', false);
                 }); */

            } else {
                alert('Sorry, unable to preview open transaction.');
                $('input[name="trig[]"]:checked').prop('checked', false);
                return false;
            }

            id = $('input[name="trig[]"]:checked').val();

            printPreview(id);
        });

<?php if (Session::getSession('postedCashAdvanceId')) { ?>
            printPreview('<?= Session::getSession('postedCashAdvanceId') ?>');
    <?php
    Session::setSession('postedCashAdvanceId', false);
}
?>
<?php if (Session::getSession('postedLiquidationId')) { ?>
            printPreview2('<?= Session::getSession('postedLiquidationId') ?>');
    <?php
    Session::setSession('postedLiquidationId', false);
}
?>
    })
</script>