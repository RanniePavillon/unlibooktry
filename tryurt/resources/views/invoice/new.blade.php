@include('layouts.header')
@extends('layouts.footer')2
<style>
    .table3 {
        width: 37%;
        border-collapse: collapse;
        background-color: #E8E8E8;
        /* margin-left: 481px; */
        margin-top: 10px;
        font-family: Verdana;
        font-size: 12px;
        float: right;
        margin-right: 25px;
        font-weight: bold;

    }

    .container {
        background-color: white;
        max-width: 1000px;
        width: 100%;
        padding-right: 15px;
        padding-top: 1px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        border-style: solid;
        border-color: #A21414;
        margin-top: 70px;
        margin-bottom: 10px;
    }

    .popBack {
        overflow: auto;
    }

    .addNewTaskButton {

        border-radius: 5px;
        margin-top: 10px;
        margin-top: 10px;
        cursor: pointer;
        height: 25px;
        width: 80px;
        border: none;
        outline-style: none;
    }

    .trnewInvoice {
        padding-top: 15px;
        font-size: 12px;
        font-family: Verdana;
        color: #000000;
        /* font-weight: bold; */
    }

    .newsc {
        /*  margin-top:17px;
        margin-left:-284px; */
    }

    .trnewInvoice2 {
        padding-top: 33px;
    }

    .NewRecurTable2 {
        float: right;
        margin-right: 20px;
        margin-top: 15px;
    }

    .NewRecurTable2 td {
        color: #000000;
        font-size: 12px;
        font-family: Verdana;
        /* font-weight: bold; */
    }

    .invoiceNumberTb {
        float: right;
        padding-right: 40px;
    }

    .invoiceNumberTb2 {
        float: right;
    }

    .table2New {
        margin-top: -2px;
    }

    .taskid {
        width: 155px;
        height: 25px;
        padding: 0;
        border: none;
        padding-left: 5px;
        font-family: Verdana;
        font-size: 12px;

    }

    .descNewInvoice {}

    .table2-new tr:hover {
        background-color: #c8c8c8;
    }

    .table1-new tr:hover {
        background-color: #c8c8c8;
    }

    .table1-new tr:hover {
        background-color: #c8c8c8;
    }

    .buttonsInvoices {
        margin-left: 290px;
        margin-top: 15px;
    }

    .newcost {
        margin-top: -12px;
        width: 128px;
        margin-left: -2px;
    }

    .taskCheck {
        /*position: absolute;*/
        margin-top: 4px;
        font-family: verdana;
        font-size: 12px;

    }

    .taskCheck2 {
        color: #000000;
        ;
        font-size: 12px;
        font-family: verdana;

    }

    .taskCheck2 {
        /*position: absolute;*/
        margin-top: -22px;
        font-weight: normal;
        font-family: Agency FB;
        font-size: 15px;
    }

    .taskCheck3 {
        color: #000000;
        font-size: 15px;
        font-family: Agency FB;
        /* font-weight: bold; */
        margin-top: -19px;

    }

    .additional {
        margin-left: 25px;
    }

    .lt {
        text-align: left;
    }

    .recid {}

    #container1 {
        margin-left: 25px;
    }

    .search-box {
        margin-left: 10px;
        margin-top: 20px;
    }

    .niPadd {
        padding: 0 !important;
        border-bottom: 1px solid #c8c8c8;
    }

    .createNI {
        background-color: #C06464;
        width: 210px;
        height: 32px;
        border: none;
        background-image:url('{{asset('images/cnbButtonNew.png')}}');
        background-repeat: no-repeat;
        cursor: pointer;
        border-radius: 5px;
        background-size: 100% 100%;
        outline-style: none;
    }

    .loadingHolder {
        margin-top: 15%;
        margin-left: 45%;
    }

    .company-form {
        width: 47% !important;

    }

    .companyHolderNew {
        width: 551px !important;
        padding-bottom: 29px !important;
    }

    .linesettings {
        width: 521px !important;
    }

    .linesettingsstart {
        margin-top: 5px;
    }

    .tableCompany {
        width: 475px !important;
    }

    .loadingimg {
        width: 50px;
        height: 50px;
    }

    .discountline {
        width: 90% !important;
    }

    .percentNew {
        position: absolute;
        margin-top: -21px;
        margin-left: 250px;
    }

    .tobehidden {
        display: none !important;
    }

    .terms {
        margin-left: 23px;
        width: 248px;
        height: 27px;
        font-size: 12px;
        font-family: Verdana;
        margin-top: 3px;
    }

    .acer {
        margin-left: 3px;
        width: 200px;
        height: 27px;
    }

    .currency {
        margin-left: 3px;
        width: 200px;
        height: 27px;
    }

    .termsCurrency {
        font-size: 12px;
        font-family: Verdana;
        color: #000000;
        /* font-weight: bold; */
    }

    .tbl2Invoice2,
    tr th {
        background: #c51400 !important;
        border: none !important;
    }

    .dueDate {
        font-family: Verdana;
        font-style: normal;
        font-size: 12px;
        height: 27px;
        width: 248px;
        background-color: white;
        border: 1px solid #C8C8C8;
        margin-left: 5px;
        padding: 5px;
        margin-top: 3px;
    }

    #company-newcompany2 {
        padding-top: 15px !important;
    }

    .addressText {
        position: relative;
        margin-top: -54px;
    }

    .invoiceHolderNewInvoiceForm {
        /* margin-top: -31px;  */
        background-color: white;
        padding-bottom: 192px;
    }

    .form-new {
        padding-bottom: 40px;
        /* margin-top: -77px!important; */
    }

</style>
<script>
    $(function () {
        $('.deltask').first().();
        $('#addtasks').click(function () {
            $.ajaxSetup({
                async: true
            });
            $.post("{{('invoice/invoiceTask')}}",
                function (result) {
                    $('.table1-new > tbody:last').append(result);
                });
            $.ajaxSetup({
                async: true
            });
        });
        $(document).on("click", "#additem", function () {
            additem($(this));
        });

        function additem($object) {
            $.ajaxSetup({
                async: false
            });
            $.post("{{('invoice/invoiceItems')}}",
                function (result) {
                    $('.table2-new > tbody:last').append(result);
                    eventLoader();
                });

        }

        $(document).on("click", "#addtask", function () {
            addtask($(this));
        });

        function addtask($object) {
            $.ajaxSetup({
                async: false
            });
            $.post("{{('invoice/invoiceTask')}}",
                function (result) {
                    $('.table1-new > tbody:last').append(result);
                    eventLoader();
                });
            $.ajaxSetup({
                async: true
            });
            /* $($object).parents('tr').find('.adel').remove();
             $($object).parents('tr').find('.slash').remove();
             $($object).parents('tr').find('.addtask').remove(); */
            getAllTask();
        }

        $("#size").change(function () {
            if ($(this).val() == "addtask") {
                addtask($('.taskid').last());
            } else if ($(this).val() == "additem") {
                additem($('.items').last());
            }
        })

        //        $(document).on("keyup", ".rate", function() {
        //            $(this).parents('tr').find('.tasknet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.hour').val().replace(/,/g, ''), 2));
        //            subTotal();
        //        });
        //        $(document).on("keyup", ".hour", function() {
        //            $(this).parents('tr').find('.tasknet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.rate').val().replace(/,/g, ''), 2));
        //            subTotal();
        //        });
        //        $(document).on("keyup", ".unitCost", function() {
        //            $(this).parents('tr').find('.itemnet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.quantity').val().replace(/,/g, ''), 2));
        //            //alert($(this).val());
        //            subTotal();
        //        });
        //        $(document).on("keyup", ".quantity", function() {
        //            $(this).parents('tr').find('.itemnet').val($.number($(this).val().replace(/,/g, '') * $(this).parents('tr').find('.unitCost').val().replace(/,/g, ''), 2));
        //            subTotal();
        //        });

        $(document).on("keyup, focusout", ".rate, .hour, .discountline", function () {
            computeNetLine($(this));
            computeAmount();

        });

        $(document).on("change", "#taxId", function () {
            //            alert('test');
            computeNetLine($(this));
            computeAmount();
            //            subTotal();
        });


        $('select[name="termsId"]').change(function () {
            var days = $('select[name="termsId"]').find('option:selected').attr('title');
            if (days == 'Cash on Delivery' || days == '' || typeof days == 'undefined') {
                // alert(days);
                $('input[name="dueDate"]').val($('input[name="dateIssued"]').val());
                return false;
            }

            days = days.split(" ");
            // alert(days);
            days = parseInt(days[0]);

            var date = new Date($('input[name="dateIssued"]').val());
            // alert(date);
            var numberOfDaysToAdd = days;

            // var date = new Date($('input[name="dateIssued"]').val());
            // days = parseInt($('input[name="dateIssued"]').val(), days);
            // alert(date);
            if (!isNaN(date.getTime())) {
                date.setDate(date.getDate() + numberOfDaysToAdd);

                var dd = date.getDate();
                var mm = date.getMonth() + 1;
                var y = date.getFullYear();

                var someFormattedDate = dd + '/' + mm + '/' + y;
                // alert(someFormattedDate);
                // date.setDate(date.getDate() + days);

                mydate = $.datepicker.formatDate('mm/dd/yy', new Date(date));
                $('input[name="dueDate"]').val(mydate);
                // alert(mydate);
                // alert(date.toInputFormat());
            } else {
                alert("Invalid Date");
            }
        });


        $(document).on("change", "#client", function () {
            //            $('.popBack').empty();

            $('#address').text('');
            if ($(this).val() === 'addclient') {
                //                $('.popBack').html($htmlclient);
                $('#client option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
                /* added by belle 4 30 2015 */
                addNewClient();
                /* end-added by belle 4 30 2015 */
                $('.popBack').removeClass('hidden');
                $('.clientfrm').removeClass('hidden');
                $('.returnurl').val('invoice');
                $('body').css('overflow', 'hidden');
                $('.close1Client').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.clientfrm').addClass('hidden');
                    $('.returnurl').val('');
                    $('body').css('overflow', 'auto');
                });
            }

            /*  currency = 0;
             if (typeof $(this).find('option:selected').attr('currencyId') != 'undefined') {
                 currency = $(this).find('option:selected').attr('currencyId');
             } */
            // $('#currencyId').val(currency);
            $('#currencyId').change();
        });
        $(document).on("keyup", "input[name='discount'],input[name='discountPesoAmount']", function () {
            subTotal();
        });
        $(document).on("click", ".deltask", function () {
            $(this).parents('tr').remove();
            subTotal();
        });
        $(document).on("click", ".delitem", function () {
            $(this).parents('tr').remove();
            subTotal();
        });
        $(document).on("click", ".delitem", function () {
            $(this).parents('tr').remove();
        });
        $(document).on("change", ".taskid", function () {
            $('.objSelected').removeClass('objSelected');
            $(this).addClass('objSelected');
            object = $(this);
            $activeobjct = $(this);
            $(object).parents('tr').find('.description').val('');
            $(object).parents('tr').find('.rate').val('');
            $(object).parents('tr').find('.hour').val(1);
            $(object).parents('tr').find('.tasknet').val('');
            if ($(this).val() == 'addtask') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
                $('.popBack').removeClass('hidden');
                $('.taskfrm').removeClass('hidden');
                createNewTask();
                $('.returnurl').val('invoice');
                $('body').css('overflow', 'hidden');
                $('.closeCNTs').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.taskfrm').addClass('hidden');
                    $('.returnurl').val('');
                    $('body').css('overflow', 'auto');
                });
            } else {
                $.ajax({
                    url: "{{('invoice/getTaskDescription')}}",
                    type: "POST",
                    data: {
                        taskid: $(this).val()
                    },
                    dataType: "JSON",
                    async: false,
                    success: function (jsonStr) {
                        particular = jsonStr.particular;
                        rate = jsonStr.rate;
                        $(object).parents('tr').find('.description').val(particular);
                        $(object).parents('tr').find('.rate').val($.number(rate, 2));
                        $(object).parents('tr').find('.tasknet').val($.number(rate * $(
                            object).parents('tr').find('.hour').val(), 2));
                    }
                });
            }
            subTotal();
            return false;
        });

        function createNewTask() {
            $.post(URL + 'invoice/task', {
                    view: 'invoice'
                })
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('body').css('overflow', 'hidden');
                    $('.popBack').removeClass('hidden');
                    // $('.taskfrm').html(returnData);
                    $('.forTaskTask').val('addTaskOption');
                    // $('#saveAddNew').hide();

                    $('.closeCNTs').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        // $('.taskfrm').addClass('hidden');
                        // $('.returnurl').val('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        }

        $(document).on("change", ".items", function () {
            $('.objSelected').removeClass('objSelected');
            $(this).addClass('objSelected');
            object = $(this);
            $activeobjct = $(this);
            $(object).parents('tr').find('.description').val('');
            $(object).parents('tr').find('.unitcost').val('');
            $(object).parents('tr').find('.quantity').val(1);
            $(object).parents('tr').find('.itemnet').val('');
            if ($(this).val() === 'additem') {
                $(this).addClass('activeObj');
                $('.activeObj option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
                $('.popBack').removeClass('hidden');
                $('.itemfrm').removeClass('hidden');
                $('.returnurl').val('invoice');
                $('body').css('overflow', 'hidden');
                $('.closeNewItem').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.itemfrm').addClass('hidden');
                    $('body').css('overflow', 'auto');
                });
            }
            if ($(this).val() !== 'additem') {
                $.ajax({
                    url: "{{('invoice/getItemDescription')}}",
                    type: "POST",
                    data: {
                        itemid: $(this).val()
                    },
                    dataType: "JSON",
                    async: false,
                    success: function (jsonStr) {
                        description = jsonStr.description;
                        unitcost = jsonStr.unitcost;
                        $(object).parents('tr').find('.description').val(description);
                        $(object).parents('tr').find('.unitcost').val($.number(unitcost,
                            2));
                        $(object).parents('tr').find('.itemnet').val($.number(unitcost * $(
                            object).parents('tr').find('.quantity').val(), 2));
                    }
                });
            }

            subTotal();
        });

        $('input[name="dueDate"]').change(function () {
            date1 = new Date($('input[name="dateIssued"]').val());
            date2 = new Date($(this).val());
            diff = (Math.floor((date2.getTime() - date1.getTime()) / 86400000)); // ms per day);

            if (diff < 0) {
                alert('Due date should be 7 days or more ahead from start date');
            }
        });
        $('#taskcheck').click(function () {
            //            alert($(this).val());
            //            $(this).removeAttr('checked');
            if ($(this).is(':checked')) {
                $('.table1-new').removeClass('hidden');
                $('.taskid').each(function (i) {
                    $(this).prop('required', 'required');
                });
                //                $(this).attr('checked', 'checked');
            } else {
                $('.table1-new').addClass('hidden');
                $('.taskid').each(function (i) {
                    $(this).removeAttr('required');
                });
            }
            //            $(this).removeAttr('checked');
            //            return false;
        });
        $('#itemcheck').click(function () {
            if ($(this).is(':checked')) {
                $('.table2-new').removeClass('hidden');
                $('.items').each(function (i) {
                    $(this).prop('required', 'required');
                });
            } else {
                $('.table2-new').addClass('hidden');
                $('.items').each(function (i) {
                    $(this).removeAttr('required');
                });
            }
        });
        // /*
        // 		 $('.form-new').submit(function(){
        //			if($('input[name="status"]').val() == 'post'){
        //				confirmPost = confirm('Do you want to post this billing?');
        //				if(confirmPost){
        //					return true;
        //				}
        //			} else {
        //				confirmation101 = confirm('Are you sure you want to save this billing?');
        //				if (confirmation101) {
        //					return true;	
        //				}
        //			}
        //			$('input[name="status"]').val('');
        //            return false;
        //        });
        //       
        $('.form-new').submit(function () {

            stat = false;

            if ($('#client').val() == '') {
                $('.bPost').prop('disabled', false);
                $('input[name="status"]').val('');
                alert('Please add/select client');
                return false;
            }

            $('.netAmountLine').each(function () {
                if (getInt($(this).val()) == 0) {
                    $('.bPost').prop('disabled', false);
                    $('input[name="status"]').val('');
                    stat = true;
                    return false;
                }
            });
            if ($('[name="termsId"]').val() == '') {
                alert('Please add/select Terms');
                $('[name="termsId"]').click();
                return false;
            }

            if (stat) {
                alert('Net amount lines should not be equal to 0');
                $('.bPost').prop('disabled', false);
                $('input[name="status"]').val('');
                return false;
            }

            $.post(URL + 'invoice/getInfoForm')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.logoUploadHolder').addClass('hidden');
                    $('.popBack').removeClass('hidden');
                    // $('.seconds').show();
                    $('.top').addClass('hidden');
                    $('.poRequest').addClass('hidden');
                    $('.footerHolderNew').addClass('hidden');
                    $('.tableCompany22').addClass('hidden');
                    $('.tableCompany222').addClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.company-form').submit(function () {
                        if ($('.company-form input[name="tinNum"]').val() != '') {
                            $.post(URL + 'invoice/setCompany?type=ajax', $('.company-form')
                                    .serialize())
                                .done(function (returns) {
                                    if (returns == 0) {
                                        // alert('done');
                                        saveBilling();
                                    } else {
                                        alert(returns);
                                        location.reload();
                                    }
                                })
                                .fail(function () {
                                    location.reload();
                                });
                        } else {
                            alert('Pls fill-up the required fields.');
                            $('.company-form input[name="tinNum"]').focus();
                        }
                        return false;
                    });
                });

            if ($('input[name="status"]').val() == 'post') {
                confirmation101 = confirm('Do you want to post the Billing?');
                if (confirmation101) {
                    saveBilling();
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingHolder"><img src="' + URL +
                        'public/images/processing2.gif" class="loadingimg" /></div>');

                    $('.popBack').removeClass('hidden');
                }
            } else {
                confirmation101 = confirm('Are you sure you want to save the Billing?');
                if (confirmation101) {
                    saveBilling();
                    $('body').css('overflow', 'hidden');
                    $('.popBack').html('<div class="loadingHolder"><img src="' + URL +
                        'public/images/processing2.gif" class="loadingimg" /></div>');
                    $('.popBack').removeClass('hidden');
                }
            }

            return false;
            //            return false;
        });
        // */
        $('.bPost').click(function () {
            $('.bPost').prop('disabled', true);
            $('input[name="status"]').val('post');
            $('.form-new').submit();
            $('.bPost').prop('disabled', false);
        });
        $('#currencyId, select[name="currencyId"]').change(function () {
            if ($(this).find('option:selected').text() == "PHP" || $(this).find('option:selected')
                .text() == "") {
                $("input[name='crate']").addClass('hidden');
                $("select[name='acer']").addClass('hidden');
                $(".applyCER").addClass('hidden');
                $("input[name='crate']").removeAttr('required');
                $('#ratetxt').addClass('hidden');
                $('input[name="crate"]').val('0.00');
            } else {
                $("input[name='crate']").removeClass('hidden');
                $("select[name='acer']").removeClass('hidden');
                $(".applyCER").removeClass('hidden');
                $("input[name='crate']").prop('required', 'required');
                $('#ratetxt').removeClass('hidden');
            }
        });
    })

    $('.taxId').change(function () {
        if ($(this).val() == 'addtax') {
            $('.popup').html($htmltax);
            $('.popup').removeClass('hidden');
            $('.closeNTaxes').click(function () {
                $('.popup').addClass('hidden');
                $('.popup').html('');
            });
        }
    });
    /* 
        function saveBilling() {
            status = $('input[name="status"]').val();
            // alert(status); 		// return false;
    		// alert('asdf');
    		// return false;
            $.post(URL + 'invoice/setinvoice', $('.form-new').serialize())
                    .done(function (returnData) {
                        $('body').css('overflow', 'hidden');
                       alert(returnData);
                        if (returnData == '') {
                            location = URL + 'invoice/invoice';
                        } else if (returnData == 'add') {
                            location = URL + 'invoice/add';
                        } else {
                            if (status == '') {
                                location = URL + 'invoice/invoice';
                            } else {
                                location = URL + 'invoice/add';
                            }
                            return false;
                            $('.popBack').html($('.popBack').html() + returnData);
                            $('.popBack').removeClass('hidden');
                            $('.seconds').show();
                            $('body').css('overflow', 'hidden');
                            return false;
                            //                            alert(returnData);
                        }
                    });

        }
    	 */
    function recurring(recurringid, status) {
        $().redirect(URL + 'invoice/newRecurring', {
            recurringid: recurringid,
            status: status
        });
    }

    /* added by belle - 4 30 2015 */
    function addNewClient() {

        $.post(URL + 'invoice/newcustomer', {
                view: 'invoice'
            })
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    // if (confirm('Are you sure, you want to leave this page without saving?')) {
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                    //}
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
        return false;
    }
    /*-end- added by belle - 4 30 2015 */

    function subTotal() {
        subtotal1 = 0;
        discounttotal = 0;
        rate = 0;
        vattotal = 0;

        discountClass = getDiscount();

        if ($('#taskcheck').is(':checked')) {
            $('.taskid').each(function (i) {
                object = $(this);
                $.ajaxSetup({
                    async: false
                });
                $.ajax({
                    url: "{{('invoice/calcVat')}}",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(),
                        type: 'task'
                    },
                    dataType: "JSON",
                    success: function (jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.tasknet').val()
                            .replace(/,/g, '')) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.tasknet').val()
                            .replace(/,/g, '')) - discountamt;
                        discountline = $(object).parents('tr').find('.discountline').val() / 100;
                        discounttotal += discountamt;
                        vat = discount * rate / 100;
                        vattotal += vat;
                        //                        vat += parseFloat($(object).parents('tr').find('.tasknet').text()) * result / 100;
                        if (isvatable == 'yes') {
                            subtotal1 += parseFloat($(object).parents('tr').find('.tasknet').val()
                                .replace(/,/g, '')) - vat;
                        } else {
                            subtotal1 += parseFloat($(object).parents('tr').find('.tasknet').val()
                                .replace(/,/g, ''));
                        } //alert($(object).parents('tr').find('.tasknet').text());
                    }
                });
                $.ajaxSetup({
                    async: true
                });
            });
        }

        if ($('#itemcheck').is(':checked')) {
            $('.items').each(function (i) {
                object = $(this);
                $.ajaxSetup({
                    async: false
                });
                $.ajax({
                    url: "{{('invoice/calcVat')}}",
                    type: "POST",
                    data: {
                        clientId: $('#client').val(),
                        type: 'item'
                    },
                    dataType: "JSON",
                    success: function (jsonStr) {
                        isvatable = jsonStr.vatable;
                        rate = jsonStr.rate;
                        discountamt = parseFloat($(object).parents('tr').find('.itemnet').val()
                            .replace(/,/g, '')) * $('input[name="discount"]').val() / 100;
                        discount = parseFloat($(object).parents('tr').find('.itemnet').val()
                            .replace(/,/g, '')) - discountamt;
                        discounttotal += discountamt;
                        //                        vat = parseFloat($(object).parents('tr').find('.itemnet').text()) * rate / 100;
                        vat = discount * rate / 100;
                        vattotal += vat;
                        if (isvatable == 'yes') {
                            subtotal1 += parseFloat($(object).parents('tr').find('.itemnet').val()
                                .replace(/,/g, '')) - vat;
                        } else {
                            subtotal1 += parseFloat($(object).parents('tr').find('.itemnet').val()
                                .replace(/,/g, ''));
                        }

                    }
                });
                $.ajaxSetup({
                    async: true
                });
            });
        }
        /*
         $('#subtotal').val(parseFloat(subtotal).toFixed(2));
         $('#vat').val(parseFloat(vattotal).toFixed(2));
         $('#discount').val(parseFloat(discounttotal).toFixed(2));
         $('
		 ').val(parseFloat(subtotal + vattotal - discounttotal).toFixed(2));
         */
        computeAmount();
    }

    function getDiscount() {
        discountClass = 0;
        if ($('input[name="discounttype"]:checked').val() == 'percent') {
            discountClass = getInt($('input[name="discount"]').val());

            return discountClass;
        } else {
            amount = 0;
            $('.taskid').each(function (i) {
                rate = getInt($(this).parents('tr').find('.rate').val());
                hour = getInt($(this).parents('tr').find('.hour').val());
                //            if ($(this).parent('td').parent('tr').find('.vatselectInvoice option:selected').text() == 'Vatable') {
                //                amount += (rate * hour) * 1.12;
                //            } else {
                amount += rate * hour;
                //            }
            });
            discountClass = getInt($('input[name="discountPesoAmount"]').val()) / amount * 100;
            //        alert(discountClass);
            return discountClass / 100;
            //        return Math.round(discountClass.toFixed(2));
        }
    }

</script>

<!-- <script>
        $(function () {
            //var status = '';
            //alert (765);
            $().redirect(URL + 'invoice/add', {'invoiceid': '', 'status': 'posted', 'task101': 'postedinvoice'})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('.popBack').removeClass('hidden');
                        $('.closeNewItem').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
            return false;
        })
    </script> -->
<title>
    ALL BILLING
</title>
<link rel="stylesheet" href="{{asset('css/overall.css')}}" />
<link rel="stylesheet" href="{{asset('css/popup.css')}}" />
<link rel="stylesheet" href="{{asset('css/loading.css')}}" />
<link rel="stylesheet" href="{{asset('invoice/css/template.css')}}" />
<div class="container">
    <div class="invoiceHolderNewInvoiceForm">
        <div id="new2s" style="margin-left:10!important;">
            <label class="headTextNewInvoice headings">NEW BILLING</label>
        </div>
        <div style="float:right;margin-right:80px;">
            <a href="{{('invoice/add')}}">
                <label class="crossbillingNew" style="left:22px;"> <input type="button" class="createNI buttonslarge"
                        value="CREATE NEW BILLING" style="padding-left:34px;margin-right:0px;"></label>
            </a>
        </div>
        <div style="clear:both;"></div>

        <form method="post" action="" class="form-new">
            <div style="float:left">
                <table class="newI_table">	
                    <tbody><tr class="trnewInvoice">
                        <td class="trnewInvoice">Customer:</td>
                        <td>
                            <input type="hidden" name="token" value="5949430c871d803ff0f04b6953214d00">
                            <select class="sc newsc" name="clientId" id="client" required="">
                                <option></option>
                                <option value="addclient">[Add Customer]</option>
                                
                            </select>
							<span style="color:red;">*</span>
                        </td>
                    </tr>
                    <tr class="trnewInvoice">
                        <td class="trnewInvoice2"><div style="margin-top:-44px;">Address:</div></td>
                        <td><textarea class="add" id="address" name="address" readonly="" x=""></textarea></td>
                    </tr>
                    <tr>
                            <td class="termsCurrency">Terms:</td>
                            <td>
                                <select class="terms" name="termsId" required="">
                                    <option value="">--Select--</option>
                                    <option value="1" title="Cash on Delivery">COD</option>
                                    <option value="2" title="7 Days">7D</option>
                                    <option value="3" title="15 Days">15D</option>
                                    <option value="4" title="30 Days">30D</option>
                                    <option value="5" title="45 Days">45D</option>
                                    <option value="6" title="60 Days">60D</option>
                                </select>
                            </td>
                        </tr>
					<tr class="trnewInvoice">
                       <td class="termsCurrency">Currency:</td>
						<td>
							<select class="terms" name="currencyId">
								                                    <option style="text-align: right;" value="1" title="United Arab Emirates dirham">AED</option>
                                                                            <option style="text-align: right;" value="2" title="Australian dollar">AUD</option>
                                                                            <option style="text-align: right;" value="3" title="Bulgarian leva">BGL</option>
                                                                            <option style="text-align: right;" value="4" title="Brunei Darussalem dollar">BND</option>
                                                                            <option style="text-align: right;" value="5" title="Brazilian real">BRL</option>
                                                                            <option style="text-align: right;" value="6" title="Canadian dollar">CAD</option>
                                                                            <option style="text-align: right;" value="7" title="Swiss franc">CHF</option>
                                                                            <option style="text-align: right;" value="8" title="Serbian Dinar">CSD</option>
                                                                            <option style="text-align: right;" value="9" title="Czech koruna">CZK</option>
                                                                            <option style="text-align: right;" value="10" title="Danish krone">DKK</option>
                                                                            <option style="text-align: right;" value="11" title="Algerian dinar">DZD</option>
                                                                            <option style="text-align: right;" value="12" title="Estonian kroon">EEK</option>
                                                                            <option style="text-align: right;" value="13" title="Euro">EUR</option>
                                                                            <option style="text-align: right;" value="14" title="Fiji dollar">FJD</option>
                                                                            <option style="text-align: right;" value="15" title="Pound Sterling">GBP</option>
                                                                            <option style="text-align: right;" value="16" title="Hong Kong dollar">HKD</option>
                                                                            <option style="text-align: right;" value="17" title="Croatian Kuna">HRK</option>
                                                                            <option style="text-align: right;" value="18" title="Hungarian forint">HUF</option>
                                                                            <option style="text-align: right;" value="19" title="Indonesian rupiah">IDR</option>
                                                                            <option style="text-align: right;" value="20" title="Indian rupee">INR</option>
                                                                            <option style="text-align: right;" value="21" title="Icelandic krona">ISK</option>
                                                                            <option style="text-align: right;" value="22" title="Japanese yen">JPY</option>
                                                                            <option style="text-align: right;" value="23" title="Kenyan Shilling">KES</option>
                                                                            <option style="text-align: right;" value="24" title="Lithuanian litas">LTL</option>
                                                                            <option style="text-align: right;" value="25" title="Latvian lats">LVL</option>
                                                                            <option style="text-align: right;" value="26" title="Moroccan dirham">MAD</option>
                                                                            <option style="text-align: right;" value="27" title="Mexican peso">MXP</option>
                                                                            <option style="text-align: right;" value="28" title="Malaysian ringgit">MYR</option>
                                                                            <option style="text-align: right;" value="29" title="Mozambique metical">MZM</option>
                                                                            <option style="text-align: right;" value="30" title="Nigerian naira">NGN</option>
                                                                            <option style="text-align: right;" value="31" title="Norwegian krone">NOK</option>
                                                                            <option style="text-align: right;" value="32" title="New Zealand dollar">NZD</option>
                                                                            <option style="text-align: right;" value="33" title="Philippines" selected="">PHP</option>
                                                                            <option style="text-align: right;" value="34" title="Polish zloty">PLN</option>
                                                                            <option style="text-align: right;" value="35" title="Romanian leu">ROL</option>
                                                                            <option style="text-align: right;" value="36" title="Russian ruble">RUR</option>
                                                                            <option style="text-align: right;" value="37" title="Saudi Arabian ryial">SAR</option>
                                                                            <option style="text-align: right;" value="38" title="Solomon Islands dollar">SBD</option>
                                                                            <option style="text-align: right;" value="39" title="Swedish krona">SEK</option>
                                                                            <option style="text-align: right;" value="40" title="Singapore dollar">SGD</option>
                                                                            <option style="text-align: right;" value="41" title="Slovenian tolar">SIT</option>
                                                                            <option style="text-align: right;" value="42" title="Slovak Koruna">SKK</option>
                                                                            <option style="text-align: right;" value="43" title="Swaziland lilangeni">SZL</option>
                                                                            <option style="text-align: right;" value="44" title="Thai baht">THB</option>
                                                                            <option style="text-align: right;" value="45" title="Tunesian dinar">TND</option>
                                                                            <option style="text-align: right;" value="46" title="New Turkish lira">TRY</option>
                                                                            <option style="text-align: right;" value="47" title="Ugandan Shilling">UGS</option>
                                                                            <option style="text-align: right;" value="48" title="US dollar">USD</option>
                                                                            <option style="text-align: right;" value="49" title="Vanuatu vatu">VUV</option>
                                                                            <option style="text-align: right;" value="50" title="Western Samoan tala">WST</option>
                                                                            <option style="text-align: right;" value="51" title="South African rand">ZAR</option>
                                        							</select>
						</td>
                    </tr>
					
					<tr class="trnewInvoice">
						<td class="hidden termsCurrency">Term:</td>
						<td class="hidden">
							<select class="terms" name="termsId">
								<option value="">--Select--</option>
															</select>
						</td>
					</tr>
					
					<tr class="trnewInvoice">
						<td id="ratetxt" class="termsCurrency hidden">Currency Exchange Rate:</td>
						<td>
							<input type="text" style="width:248px;height:27px;font-weight:normal!important;border: 1px solid #C8C8C8; text-align: right;margin-top:3px;margin-left:20px;" name="crate" id="ratetxt" class="termsCurrency isNumeric hidden" value="">
						</td>
					</tr>
					
					<tr>
						<td id="ratetxt" class="termsCurrency applyCER hidden">Apply Currency Exchange Rate:</td>
						<td>
							<select name="acer" id="ratetxt" style="width: 248px;height: 27px;font-size: 12px;font-family: Verdana;margin-left: 20px;margin-top: 3px;" class="acer hidden">
								<option value="monthly">Monthly</option>
								<option value="quarterly">Quarterly</option>
								<option value="yearly">Yearly</option>
								<option value="Daily">Daily</option>
							</select>
						</td>
					</tr>
				</tbody></table>	
				
                <table class="currencyTable hidden">
                    <tbody><tr>
                        <td>Currency:</td>
                        <td><select class="exchange" name="currencyIds" id="currencyIds"><option></option>
                                                                    <option style="text-align: right;" value="1">AED</option>
                                                                            <option style="text-align: right;" value="2">AUD</option>
                                                                            <option style="text-align: right;" value="3">BGL</option>
                                                                            <option style="text-align: right;" value="4">BND</option>
                                                                            <option style="text-align: right;" value="5">BRL</option>
                                                                            <option style="text-align: right;" value="6">CAD</option>
                                                                            <option style="text-align: right;" value="7">CHF</option>
                                                                            <option style="text-align: right;" value="8">CSD</option>
                                                                            <option style="text-align: right;" value="9">CZK</option>
                                                                            <option style="text-align: right;" value="10">DKK</option>
                                                                            <option style="text-align: right;" value="11">DZD</option>
                                                                            <option style="text-align: right;" value="12">EEK</option>
                                                                            <option style="text-align: right;" value="13">EUR</option>
                                                                            <option style="text-align: right;" value="14">FJD</option>
                                                                            <option style="text-align: right;" value="15">GBP</option>
                                                                            <option style="text-align: right;" value="16">HKD</option>
                                                                            <option style="text-align: right;" value="17">HRK</option>
                                                                            <option style="text-align: right;" value="18">HUF</option>
                                                                            <option style="text-align: right;" value="19">IDR</option>
                                                                            <option style="text-align: right;" value="20">INR</option>
                                                                            <option style="text-align: right;" value="21">ISK</option>
                                                                            <option style="text-align: right;" value="22">JPY</option>
                                                                            <option style="text-align: right;" value="23">KES</option>
                                                                            <option style="text-align: right;" value="24">LTL</option>
                                                                            <option style="text-align: right;" value="25">LVL</option>
                                                                            <option style="text-align: right;" value="26">MAD</option>
                                                                            <option style="text-align: right;" value="27">MXP</option>
                                                                            <option style="text-align: right;" value="28">MYR</option>
                                                                            <option style="text-align: right;" value="29">MZM</option>
                                                                            <option style="text-align: right;" value="30">NGN</option>
                                                                            <option style="text-align: right;" value="31">NOK</option>
                                                                            <option style="text-align: right;" value="32">NZD</option>
                                                                            <option style="text-align: right;" value="33" selected="">PHP</option>
                                                                            <option style="text-align: right;" value="34">PLN</option>
                                                                            <option style="text-align: right;" value="35">ROL</option>
                                                                            <option style="text-align: right;" value="36">RUR</option>
                                                                            <option style="text-align: right;" value="37">SAR</option>
                                                                            <option style="text-align: right;" value="38">SBD</option>
                                                                            <option style="text-align: right;" value="39">SEK</option>
                                                                            <option style="text-align: right;" value="40">SGD</option>
                                                                            <option style="text-align: right;" value="41">SIT</option>
                                                                            <option style="text-align: right;" value="42">SKK</option>
                                                                            <option style="text-align: right;" value="43">SZL</option>
                                                                            <option style="text-align: right;" value="44">THB</option>
                                                                            <option style="text-align: right;" value="45">TND</option>
                                                                            <option style="text-align: right;" value="46">TRY</option>
                                                                            <option style="text-align: right;" value="47">UGS</option>
                                                                            <option style="text-align: right;" value="48">USD</option>
                                                                            <option style="text-align: right;" value="49">VUV</option>
                                                                            <option style="text-align: right;" value="50">WST</option>
                                                                            <option style="text-align: right;" value="51">ZAR</option>
                                                                    </select></td>
                    </tr>
                    <tr>
                        <td id="ratetxt" class="hidden">
                            Exchange Rate:</td>
                        <td>
                            <input type="text" class="exchange isNumeric 
                                   hidden" name="crates">
                        </td>
                        
                    </tr>
                </tbody></table>
                <table class="currencyTable" style="margin-top:3px!important;">
                    <tbody><tr>
                    <td>
							<label style="float:left;margin-top:8px;margin-left:25px;">Inclusive of VAT</label>
							<div style="float:left;">
								<input type="checkbox" class="" name="inclusiveOfVat" style="-webkit-transform: scale(1.2);margin-top:10px;margin-left:10px;" checked="">
							</div>
							<div style="clear:both;"></div>
                        </td>
                        <td>
							<label style="float:left;margin-top:8px;margin-left:25px;">Send Email</label>
							<div style="float:left;">
								<input type="checkbox" name="sendByEmail" value="yes" style="margin-top:10px;margin-left:10px;-webkit-transform: scale(1.2);" checked="">
							</div>
						</td>
                    </tr>
                </tbody></table>
                                <div class="additional hidden">
                    <div class="invoiceNoTextNew">Billing for:</div>
                    <div class="taskCheck2" for="taskcheck" style="margin-left:71px;">
                        <input type="checkbox" name="taskcheck" class="taskCheck" id="taskcheck" checked=""> 
                        <label>Task</label>
                        <input type="checkbox" name="itemcheck" class="taskCheck2" id="itemcheck" checked=""> 
                        <label class="taskCheck3" for="itemcheck">Item</label>
                    </div>
                </div>
            </div>

            <table class="NewRecurTable2">
                                                    <tbody><tr class="i">
                        <td class="">Transaction No:</td>
                        <td class=""><input type="text" style="background:#c8c8c8;border:none;" class="in" required="" name="invoiceNumber" readonly="" value="TN-0000000001"></td>
                    </tr>	
                                <tr class="i">
                    <td class="">OR No.:</td>
                    <td class="">
						<input type="text" class="in" required="" name="orNum" value="OR-0000000001">
						<span style="color:red;">*</span>
					</td>
                </tr>	
                <tr class="i">
                        <td class="table2New">Date Issued:</td>
                        <td class="table2New">
                            <input type="text" class="di" id="di" name="dateIssued" required value="">
                            <span style="color:red;">*</span>
                        </td> 
                    </tr>
                <tr class="hidden i">
                    <td>Due Date:</td>
                    <td><input type="text" class="dd hasDatepicker" name="dueDate" required="" value="07/30/2019" id="dp1564455753112"></td>
                </tr>
                <tr class="i">
                    <td>Date Created:</td>
                    <td><input type="text" class="dd hasDatepicker" name="dateCreated" required="" value="07/30/2019" style="background:#c8c8c8;border:none;" disabled="" id="dp1564455753113"></td>
                </tr>
                <tr class="i">
                    <td>Ref. No.:</td>
                    <td><input type="text" class="poso" name="pOSO" value=""></td>
                </tr>
				<tr>
                    <td>Discount:</td>
                    <td></td>
                </tr>
                <tr class="i">
                    <td colspan="2">
						<input type="radio" id="percent" name="discounttype" value="percent"><label for="percent">In percent</label>
						<input type="radio" id="amount" name="discounttype" value="amount" checked=""><label for="amount">In amount</label>
						<div class="percentNew">%</div>
						<input type="text" class="dsc isNumeric  discountsenior hidden" x="" style="border: 1px solid #C8C8C8; text-align:left;width:100px;" name="discountPesoAmount" value="0.00">
						<input type="text" class="dsc nodecimal discountsenior" x="" style="border: 1px solid #C8C8C8; text-align:left;width:100px;padding-right:18px;" name="discount" value="0">
                    </td>
                </tr>
                
				<!--	<tr class="i">
						<td><div style="margin-top: -37px;">Particulars:</div></td>
						<td class="textPart"><textarea input type="text" class="mm" name="particular"   ></textarea></td>
				</tr>-->
            </tbody></table>
            <!--<div style="border-bottom:2px solid gray;"></div>-->
            <div style="clear:both;"></div>
            <div style="height:5px;"></div>
                            <table class="table1-new ">

                    <tbody><tr class="t">
                        <th style="width:3%;"></th>
                        <th class="textleft" width="9%">Service Item</th>
                        <th class="textleft" width="22%">Particular</th>
                        <th class="textrights" width="11%">Vat</th>
                        <th class="textcenter" width="8%">Qty</th>
                        <th class="textright" width="15%">Amount</th>
                        <th width="12%" style="padding-left:33px;">Discount</th>
                        <th class="textright" width="15%">Net Amount</th>
                        <th style="width:5%;"></th>
                    </tr>
                    <tr class="row-item">
                        <td class="niPadd" style="background:#fff;"></td>
                        <td class="tasknoNinvoice niPadd">
                            <select name="taskid[]" class="taskid" required="">
                                <option></option>
                                <option value="addtask">[Add Service Item]</option>
                                
                            </select>
                            <!--<a href="/unlibooks/000002">000002 </a>-->
                        </td>
                        <td class="niPadd"><input type="text" name="taskParticular[]" class="description" value="" id="description"></td>
                        <td class="niPadd">
                            <select class="vatcontainer" name="taskvatId[]" id="taxId">
                                                                        <option rate="12" value="1">Vatable</option>
                                                                                <option rate="0" value="2">Vat-Exempt</option>
                                                                                <option rate="0" value="3">Non-Vat</option>
                                                                                <option rate="0" value="4">Zero Rated</option>
                                                                    </select>
                        </td>
                        <td class="niPadd"><input type="text" name="hour[]" class="hour nodecimal2 linetext" value="0.00" required=""></td>
                        <td class="niPadd"><input type="text" name="rate[]" class="rate isNumeric linetext" value="0.00"></td>
                        <td class="mystyle" style="background-color: #fff;height:25px !important;"><input type="text" name="discountline[]" class="discountline nodecimal linetext" value="0" maxlength="3">%</td>
                        <td class="niPadd"><input type="text" class="tasknet linetext RateTH isNumeric netAmountLine" value="0" style="width: 145px;" readonly=""></td>
                        <td class="niPadd">
                            <div class="adel">
                                <input type="button" name="add" class="a addtask" id="addtask">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
                            <div class="search-box">
                            <div class="size-container" style="display: none"></div>
                <input type="button" id="addtask" class="addNewTaskButton addsavebuttonbody" value="ADD LINE">     
            </div>

            <div style="margin-left: 10px;font-weight: bold;float:left;">	
                <input type="hidden" name="id" value="">
                <div class="remarksinv">REMARKS:</div>
                <div style="margin-top:15px;margin-left:10px;">
                    <textarea class="tm" name="remarks" style="background:none;"></textarea>
                </div>

                <div class="buttonsInvoices">
                   <!-- <input class="bn bPrintSend" type="button" name="pp" value="Print Preview">
                        <input class="bn bPrintSend" type="button" name="stm" value="Send to Mail">-->
                                            <input class="bn3 addsavebuttonbody" type="submit" name="save" value="SAVE" id="save">
                        <input class="bn bPost addsavebuttonbody" type="button" name="post" value="POST">
                                        <input type="hidden" name="task" value="addReceipt">
                    <input type="hidden" name="status" value="">
                </div>
            </div>

            <div style="">	
                <table class="table3">
                    <tbody><tr class="sv">
                        <td style="padding: 5px;">Sub Total:</td>
                        <td class="sa">
                            <input type="text" id="subtotal" name="subTotalAmount" class="numeric" style="border: none;text-align:right;width:100%;padding-right:16px;font-family:Verdana;background:none;" value="0.00" readonly="">
                        </td>
                    </tr>
                                        <tr class="v">
                        <td style="padding: 5px;">Vat:</td>
                        <td class="sa">
                            <input type="text" id="vat" name="vatAmount" class="numeric" style="border: none;text-align:right;width:100%;padding-right:16px;font-family:Verdana;background:none;" value="0" readonly="">
                            <!--<span id="vat" class="isNumeric">0.00</span>--> 
                        </td>
                    </tr>
                                        <tr class="v">
                        <td style="padding: 5px;">Discount:
						</td>
                        <td class="sa">
                            <input type="text" id="discount" name="discountAmount" style="border: none;text-align:right;width:100%;padding-right:16px;font-family:Verdana;font-size:12px;background:none;" class="numeric" value="0.00" readonly=""></td>
                    </tr>
                                        <tr class="gtotal">
                        <td class="gt" style="padding: 5px;">Total Cash Receipt:</td>
                        <td class="sa" id="gt">
                            <input type="text" id="invoicetotal" name="grandTotal" style="text-align:right;width:100%;padding-right:16px;font-family:Verdana;background:none;font-weight:bold;" class="numeric" value="0.00" readonly="">
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div style="clear:both"></div>
        </form> 

    </div>
</div>
</div>
<script>
    $(function () {
        // valValue = $('.vatValue option:selected').html();
        // if(valValue != 'Vatable'){
        // $('.iovinvoice').addClass('hidden');
        // }
        /*
         $('.vatValue').change(function(){
         valVat = $('.vatValue option:selected').html();
         
         if(valVat == 'Vatable'){
         $('.iovinvoice').removeClass('hidden');
         }else{
         $('.iovinvoice').addClass('hidden');
         }
         });
         */
        if (status == 'posted') {
            $.post(URL + 'invoice/printPreview', {
                    invoiceid: ""
                })
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.closePrint').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
            // return false;
        }


        $('#size').focus(function () {
            $('#sizeLabel').addClass('hidden');
        });
        $('#size').change(function () {
            $('#sizeLabel').removeClass('hidden');
            $('#size').val(0);
            $('#size').blur();
        });
        eventLoader();

        $('#reverseNewInvoice').click(function () {
            let token = $('input[name="token"]').val();

            if (confirm('Are you sure you want to reverse the Billing?')) {
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL +
                    'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
                $.post(URL + 'invoice/reverseInvoice', {
                        'id': '',
                        'status': 'reverse',
                        'token': token
                    })
                    .done(function (returnData) {
                        if (returnData == 0) {
                            $('#reverseNewInvoice').attr('disable', 'disable');
                            window.location.href = URL + 'invoice/invoice';
                        } else {
                            alertWithoutNotice('Unable to reverse collected billings.');
                            $('body').css('overflow', 'auto');
                            $('.popBack').addClass('hidden');
                        }
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });

            }
            return false;
            // }
        });
    });

    function eventLoader() {
        $('.table1-new').find('tr').mouseover(function () {
            $(this).find('#addtask').addClass('a-hover');
            $(this).find('.deltask').addClass('del-hover');
        });
        $('.table1-new').find('tr').mouseout(function () {
            $(this).find('#addtask').removeClass('a-hover');
            $(this).find('.deltask').removeClass('del-hover');
        });
        $('.table2-new').find('tr').mouseover(function () {
            $(this).find('#additem').addClass('a-hover');
            $(this).find('.delitem').addClass('del-hover');
        });
        $('.table2-new').find('tr').mouseout(function () {
            $(this).find('#additem').removeClass('a-hover');
            $(this).find('.delitem').removeClass('del-hover');
        });
    }

</script>
<script>
    $(function () {
        // $('input[name="discount"]').change(function(){
        // computeAmount();
        // });
        $('input[name="inclusiveOfVat"]').change(function () {
            computeAmount();
        });
    });

    function saveBilling() {
        status = $('input[name="status"]').val();
        // alert(status);
        // return false;
        $.post(URL + 'invoice/setinvoice', $('.form-new').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');
                if (returnData == '') {
                    location = URL + 'invoice/invoice';
                } else if (returnData == 'add') {
                    location = URL + 'invoice/add';
                } else {
                    if (status == '') {
                        location = URL + 'invoice/invoice';
                    } else {
                        location = URL + 'invoice/add';
                    }
                    return false;
                    $('.popBack').html($('.popBack').html() + returnData);
                    $('.popBack').removeClass('hidden');
                    $('.seconds').show();
                    $('body').css('overflow', 'hidden');
                    return false;
                    //                            alert(returnData);
                }
            });
    }

    $('select[name="currencyId"], input[name="crate"]').change(function () {
        computeAmount();
    });

    function computeAmount() {
        total = 0;
        vat = 0;
        discountAmount = 0;

        discountClass = getDiscount();
        if (discountClass == '') {
            discountClass = 0;
        }

        discount = $('input[name="discounttype"]:checked').val() == 'percent' ? parseFloat(discountClass) /
            parseInt(100) : discountClass;

        if ($('input[name="inclusiveOfVat"]').is(':checked')) {
            $('.netAmountLine').each(function () {
                rate = getInt($(this).parent('td').parent('tr').find(
                    'td:nth-child(4) select option:selected').attr('rate'));
                discountline = $(this).parents('tr').find('.discountline').val() / 100;
                vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();

                value = getInt($(this).parents('tr').find('.rate').val()) * getInt($(this).parents('tr')
                    .find('.hour').val());
                amount = getInt(value / ((parseInt(100) + 12) / parseInt(100)));
                if (vattype == 'Vatable') {
                    total += amount;
                    discountAmount += (amount * discount) + (amount * discountline);
                    vat += getInt((amount - (amount * discount) - (amount * discountline)) * 0.12);
                } else {
                    total += value;
                    discountAmount += (value * discount) + (value * discountline);
                }
            });
        } else {
            $('.netAmountLine').each(function () {
                rate = getInt($(this).parent('td').parent('tr').find(
                    'td:nth-child(4) select option:selected').attr('rate'));
                discountline = $(this).parents('tr').find('.discountline').val() / 100;
                vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();
                value = getInt($(this).parents('tr').find('.rate').val()) * getInt($(this).parents('tr')
                    .find('.hour').val());
                amount = getInt(value / ((parseInt(100) + 12) / parseInt(100)));
                if (vattype == 'Vatable') {
                    total += value;
                    discountAmount += (value * discount) + (value * discountline);
                    vat += (value - (value * discount) - (value * discountline)) * 0.12;
                } else {
                    total += value;
                    discountAmount += (value * discount) + (value * discountline);
                }
            });
        }
        $('input[name="subTotalAmount"]').val(roundFloat(total));

        $('input[name="vatAmount"]').val(roundFloat(vat));
        $('input[name="discountAmount"]').val(roundFloat(discountAmount));
        $('input[name="grandTotal"]').val(roundFloat((total + vat) - discountAmount));
    }

    function computeAmount2() {
        // alert('asdf');
        total = 0;

        vat = 0;
        //        discount = getInt($('input[name="discount"]').val());
        discountAmount = 0;

        discountClass = getDiscount();
        if (discountClass == '') {
            discountClass = 0;
        }

        discount = $('input[name="discounttype"]:checked').val() == 'percent' ? parseFloat(discountClass) /
            parseInt(100) : discountClass;


        currency = getInt($('input[name="crate"]').val());
        crrncy = $('select[name="currencyId"]').find('option:selected').html();
        if (crrncy == 'PHP') {
            currency = 1;
        }

        if ($('input[name="inclusiveOfVat"]').is(':checked')) {
            $('.netAmountLine').each(function () {
                //                rate = getInt($(this).parent('td').parent('tr').find('td:nth-child(4) select option:selected').attr('rate'));
                //                value = getInt($(this).val());
                //                value = value / (1 + (rate / 100));
                //                total += value;
                //                if (discount != 0) {
                //                    discountAmount += value * (discount / 100);
                //                    
                //                    vat += (value - (value * (discount / 100))) * (rate / 100);
                //                } else {
                //                    vat += (value * (rate / 100));
                //                }

                rate = getInt($(this).parent('td').parent('tr').find(
                    'td:nth-child(4) select option:selected').attr('rate'));
                discountline = $(this).parents('tr').find('.discountline').val() / 100;
                vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();

                value = getInt($(this).parents('tr').find('.rate').val()) * getInt($(this).parents('tr')
                    .find('.hour').val());
                value = currency * value;
                // amount = value / ((parseInt(100) + 12) / parseInt(100));
                amount = getInt((value / ((parseInt(100) + 12) / parseInt(100))).toFixed(2));
                //                alert(vattype);
                if (vattype == 'Vatable') {
                    total += amount;
                    //                    vattotal += (amount - (amount * discount)) * 0.12;
                    discountAmount += (amount * (discount / 100)) + (amount * discountline);
                    vat += getInt(((amount - (amount * (discount / 100)) - (amount * discountline)) * 0.12)
                        .toFixed(2));
                } else {
                    total += value;
                    discountAmount += (value * (discount / 100)) + (value * discountline);
                }
            });
        } else {
            $('.netAmountLine').each(function () {
                //                
                //                rate = getInt($(this).parent('td').parent('tr').find('td:nth-child(4) select option:selected').attr('rate'));
                //                value = getInt($(this).val());
                //                total += value;
                //                if (discount != 0) {
                //                    discountAmount += value * (discount / 100);
                //                    vat += ((value * (rate / 100)) - ((value * (discount / 100)) * (rate / 100)));
                //                } else {
                //                    vat += (value * (rate / 100));
                //                }

                rate = getInt($(this).parent('td').parent('tr').find(
                    'td:nth-child(4) select option:selected').attr('rate'));
                discountline = $(this).parents('tr').find('.discountline').val() / 100;
                vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();
                value = getInt($(this).parents('tr').find('.rate').val()) * getInt($(this).parents('tr')
                    .find('.hour').val());
                value = currency * value;


                amount = getInt((value / ((parseInt(100) + 12) / parseInt(100))).toFixed(2));

                if (vattype == 'Vatable') {
                    total += value;
                    //                    vattotal += (amount - (amount * discount)) * 0.12;
                    discountAmount += (value * (discount / 100)) + (value * discountline);
                    //                    vat += getInt(((value - (value * (discount / 100)) - (value * discountline)) * 0.12).toFixed(2));
                    vat += (value - (value * (discount / 100)) - (value * discountline)) * 0.12;

                } else {
                    total += value;
                    discountAmount += (value * (discount / 100)) + (value * discountline);
                }
            });
        }
        // alert(vat);
        $('input[name="subTotalAmount"]').val(roundFloat(total));
        // alert(vat);
        $('input[name="vatAmount"]').val(roundFloat(vat));
        $('input[name="discountAmount"]').val(roundFloat(discountAmount));
        $('input[name="grandTotal"]').val(roundFloat((total + vat) - discountAmount));
    }

    function computeNetLine($object) {
        rate = getInt($($object).parents('tr').find('.rate').val());
        hour = getInt($($object).parents('tr').find('.hour').val());
        discount = $($object).parents('tr').find('.discountline').val();
        net = 0;
        vattype = $($object).parents('tr').find('.vatselectInvoice option:selected').text();

        if (vattype == '') {
            vattype = $($object).parent('td').parent('tr').find('.vatselectInvoice').val();
        }
        //            alert($('.seniorpwd:checked').length);

        if (vattype == 'Vat-Exempt') {
            net = (rate * hour) / 1.12 - (((rate * hour) / 1.12) * discount / 100);
        } else {
            net = (rate * hour) - ((rate * hour) * discount / 100);
        }

        //            alert(net);
        $($object).parents('tr').find('.tasknet').val(roundFloat(net));

    }

    function roundFloat(intVal) {
        intVal = parseFloat(intVal);
        intVal = Number((intVal).toFixed(2));
        array = intVal.toString().split('.');
        if (array[1]) {
            if (array[1].length == 1) {
                array[1] += '0';
            }
        } else {
            array[1] = '00';
        }

        intVal = array.join('.');
        hasComma = commafy(intVal);
        if (hasComma[0] == '-') {
            hasComma = hasComma.toString().replace(/-/g, '');
            hasComma = '(' + hasComma + ')';
        }
        return hasComma;
    }

    function commafy(num) {
        var n = num.toString().split(".");
        n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return n.join(".");
    }

    function getInt(intVal) {
        if (typeof (intVal) == 'undefined') {
            intVal = 0;
        }
        if (intVal != '') {
            intVal = intVal.toString().replace(/,/g, '');
        }
        if (intVal[0] == '(') {
            intVal = intVal.toString().replace(/\(/g, '');
            intVal = intVal.toString().replace(/\)/g, '');
            intVal *= -1;
        }
        intVal = parseFloat(intVal);
        if (isNaN(intVal)) {
            return 0;
        }
        return intVal;
    }

    $(function () {
        $('.newClientTask').val('addNewClientOption');
        $('.forTaskTask').val('addTaskOption');
        $('#addtask, .deltask, .addNewTaskButton').show();
    })

    function getAllTask() {
        $.ajaxSetup({
            async: false
        });
        returns = $.ajax({
            url: "{{('invoice/getTaskOptions')}}",
            type: "POST",
            dataType: "JSON",
            success: function (jsonStr) {
                // alert(jsonStr.length);
                $('select[name="taskid[]"]').each(function () {
                    value = $(this).val();
                    str = '<option></option>';
                    str = str + '<option value="addtask">[Add Service Item]</option>';
                    for (x = 0; x < jsonStr.length; x++) {
                        str = str + '<option value="' + jsonStr[x].id + '" ' + (value ==
                                jsonStr[x].id ? ' selected ' : '') + '>' +
                            '' + jsonStr[x].description + '</option>';
                    }

                    $(this).html(str);
                });
            }
        });
        $.ajaxSetup({
            async: true
        });
    }

    $(function () {
        $('.newClientTask').val('addNewClientOption');
        $('.forTaskTask').val('addTaskOption');
    })


    $('input[name="discounttype"]').click(function () {
        if ($(this).val() == 'percent') {
            $('input[name="discount"],.percentNew').removeClass('hidden');
            $('input[name="discountPesoAmount"]').addClass('hidden');
            $('input[name="discountPesoAmount"]').val(0);
        } else {
            $('input[name="discountPesoAmount"]').val('0.00').removeClass('hidden');
            $('input[name="discount"], .percentNew').addClass('hidden');
            $('input[name="discount"]').val(0);
        }

        // subTotal();
    });

    /* $.post(URL + 'invoice/setinvoice', $('#formNewInvoice').serialize())
     .done(function(returnData) {
     $('body').css('overflow', 'hidden');
     if (returnData == '') {
     location = URL + 'invoice/invoice';
     //location = URL + 'invoice';
     } else if (returnData == 'add') {
     location = URL + 'invoice/add';
     } else {
     $('.popBack').html($('.popBack').html() + returnData);
     $('.popBack').removeClass('hidden');
     $('.seconds').show();
     $('body').css('overflow', 'auto');
     return false;
     //                            alert(returnData);
     }
     });
     
     return false;
     });
     */

    // })

</script>
