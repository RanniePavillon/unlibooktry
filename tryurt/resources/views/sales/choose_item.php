<style>
    .journalBody{
        width:100%;
        overflow: auto;

    }
    .journalform{
        width: 900px;
        margin:auto !important;
        border: 2px solid #24b6ef;
        background-color:white;
        padding-bottom:96px;
        margin-top:70px !important;
    }
    .tbJournalform{
        border-collapse:collapse;
        width:98%;
        margin:auto;
        margin-top:20px;
        margin-left:9px;
    }

    .tbJournalform th{
        background-color:#C51400;
        color:white;
        font-size:12px;
        font-family:Verdana;
        font-weight:bold;
        text-align:center;
        padding: 6px;
    }
    .tbJournalform td{
        padding: 5px !important;
        border: 1px solid #c8c8c8;
    }

    .tbJournalform select{
        width: 100%;
        padding: 5px;
        height: 29px;
        font-size: 11px;
        font-family:Verdana;
        border:none;
    }
    body{
        overflow:hidden;
    }
    .popBack{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }

    .clientJournal td{
        border:none;
    }
    .clientJournal2 td{
        border:none;
    }
    .tdJournal{
        border: solid 1px #c8c8c8; 
    }
    .mystyle{
        border-bottom: solid 1px #c8c8c8;
    }
    .tbJournalform tr th:nth-child(5){
        text-align: right;
    }
    .close1Client{
        background: transparent;
        color: black;
        border: none;
        border-radius: 2px;
        font-family: Arial black;
        font-weight: bold;
        font-size: 24px;
        position: absolute;
        left: 50%;
        margin-left: 418px;
        top: 67px;
        outline-style: none;
        cursor: pointer;
    }
    .tbJournal{
        border:1px solid #c8c8c8;
    }
    .loadingHolder{
        margin-top:15%;
        margin-left:45%;
    }
    .loadingimg{
        width:140px;
        height:140px;
    }
    .journalBody{
        z-index: 99999999;
    }
    .tbJournalform button.coaSelect{
        border-radius: 0px;
        color: #C51400;
        background-color: #fff;
    }   
    /* .tbJournalform button.coaSelect:hover{
        color: #fff;
        background-color: #C51400;        
    }  */
    .tbJournalform td{
        font-size: 12px;
        color: #333;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .journalBody .searchHolder{
        float: right;
        margin-right: 9px;
        margin-bottom: 10px;
    }
    .journalBody .searchHolder .searchItems,
    .journalBody .addHolder .addItem{
        width: 200px;
        height: 35px;
        padding: 5px;
        font-size: 12px;
        font-family: verdana;
        background-color: #C51400;
        font-weight: 700;
        color: #fff;
    }
    tr:hover {
        background-color: rgba(0,0,0,.05);
    }
    tr:hover button.coaSelect{
        background-color: #C51400;
        color: #fff;
    }

    .journalBody .addHolder{
        float: left;
        margin-left: 10px;
    }
    .journalBody .addHolder .addItem{
        border-radius: 0px;
        color: #fff;
    }
    .journalBody .buttonHolder{
        margin-top: 17px;
        margin-bottom: 75px;
    }

   
</style>

<title>
    Purchase Order
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?= URL ?>public/js/custom.js"></script>
<div class="journalBody">
    <form method="post" class="journalform journalentryform boxshadow">
        <div class="journalTitle headingspop">
            Select ITEM
        </div>
        <hr>
        <input type="button" class="close1Client ekis" value="x">

        <div class="buttonHolder">
            <div class="addHolder">
                <button type="button" class="btn addItem "> 
                    <i class="pe-7s-plus pe-lg pe-v"></i> Add Item <span class="mini-loader"></span> 
                </button>
            </div>
            <div class="searchHolder">
                <input type="text" name="searchItems" class="searchItems" placeholder="SEARCH ITEM">
            </div>
        </div>

        <table class="tbJournalform" id="tbJournalform">
            <thead>
                <tr>
                    <th width="90%" style="text-align:left">Item list</th>
                    <th width="5%"> <i class="pe-7s-config pe-lg pe-v"></i></th>
                </tr>
            </thead>
            <tbody id="itemTableBody">
                <?php
                    $getItemList = $this->getItemList;

                    foreach($getItemList as $item):
                ?>
                    <tr>
                        <td>
                            <?= $item->itemCode.' - '.$item->description ?>
                            <input type="hidden" value="<?=$item->description?>" name="description">
                            <input type="hidden" value="<?=$item->itemCode?>" name="itemCode">
                            <input type="hidden" value="<?=$item->purchaseCost?>" name="unitPrice">
                            <input type="hidden" value="<?=$item->uomId?>" name="uomId">
                        </td>
                        <td>
                            <input type="hidden" value="<?=$item->id?>" name="id">
                            <button type="button" class="btn coaSelect "> 
                                <i class="pe-7s-like2 pe-lg pe-v"></i> <span class="mini-loader"></span> 
                            </button>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </form>
</div>
<div class="hidden popup"></div>

<script>

    $(function () {
        $('.close1Client').click(function(){
            $('.journalBody').addClass('hidden');
            $('.popBack').addClass('hidden');
            $('body').css('overflow', 'auto');

        });

        $('.coaSelect').on("click",function(){
            let id = $(this).closest('tr').find('input[name="id"]').val();
            let description = $(this).closest('tr').find('input[name="description"]').val();
            let itemCode = $(this).closest('tr').find('input[name="itemCode"]').val();
            let unitPrice = $(this).closest('tr').find('input[name="unitPrice"]').val();
            let uomId = $(this).closest('tr').find('input[name="uomId"]').val();
            // alert(uomId);
            $('.tablesalesnew').find('select[name="itemId[]"].activeObj').find('option[value="' + id + '"]').prop('selected',true).change();
            $('.tablesalesnew').find('input[name="itemDescription[]"].activeObj').val(description);
            $('.tablesalesnew').find('input[name="unitPrice[]"].activeObj').val(roundFloat(unitPrice));
            $('.tablesalesnew').find('select[name="uomId[]"].activeObj').removeAttr('selected').val(uomId)
                .find('option[value="' + uomId + '"]')
                .attr('selected', true);
            // console.log(code);
            $('.journalBody').addClass('hidden');
            $('.popBack').addClass('hidden');
            $('body').css('overflow', 'auto');

            
            $('.tablesalesnew').find('select[name="itemId[]"].activeObj').removeClass('activeObj');
            $('.tablesalesnew').find('input[name="itemDescription[]"].activeObj').removeClass('activeObj');
            $('.tablesalesnew').find('input[name="unitPrice[]"].activeObj').removeClass('activeObj');
            $('.tablesalesnew').find('select[name="uomId[]"].activeObj').removeClass('activeObj');
        });

        $('.addItem').click(function(){
            $(this).addClass('clickItem');
            $('.clickItem option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewItem();
        });

        $('[name="searchItems"]').on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#itemTableBody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // $('.journalSave').click(function () {
        //     $('input[name="status"]').val('open');
        // });

        // $('.journalEntryPost').click(function () {
        //     $('input[name="status"]').val('posted');
        // });

        $('.journalentryform').submit(function () {
            // if (getInt($('input[name="totaldebit"]').val()) == 0 && getInt($('input[name="totalcredit"]').val()) == 0) {
            //     alert('Total debit and credit should not be zero.');
            //     return false;
            // }
            // if ($('input[name="totaldebit"]').val().replace(/,/g, '') != $('input[name="totalcredit"]').val().replace(/,/g, '')) {
            //     alert('Total debit should be equal total credit');
            //     return false;
            // }

            // journalStatus = $('input[name="status"]').val();
            // journalStatus2 = '';
            // if (journalStatus == 'open') {
            //     journalStatus2 = 'save';
            // } else {
            //     journalStatus2 = 'post';
            // }


            // confirmSubmit = confirm('Do you want to ' + journalStatus2 + ' the transaction?');
            // if (confirmSubmit) {
                $('body').css('overflow', 'hidden');
                $('.popup').html('<div class="loadingHolder"><img src="<?= URL ?>public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popup').removeClass('hidden');
                
                $var = $(this).serialize();


                console.log($var);return false;
                // saveForm();
            // }
            return false;
        });
        // $('.journalEntryPost').click(function () {
        //     $('input[name="status"]').val('posted');
        // });

        

        function saveForm() {

            $.post(URL + 'accounting/setJournal', $('.journalentryform').serialize())
                    .done(function (returnData) {
                        if (returnData == 0) {
                            location.reload();
                        } else {
                            alert(returnData);
                            $('body').css('overflow', 'auto');
                            $('.popup').addClass('hidden');
                        }
                    });
        }


        $(document).on("keyup", ".debit", function (event) {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.credit').val("0.00");
            }
            myIndex = $(".debit").index(this);
            lastIndex = $(".debit").length;
            let key = event.which;                
                    switch(key) {
                      case 37:
                          // Key left.
                          
                          break;
                      case 38:
                          // Key up.
                          if(myIndex > 0) {
                            $(".debit:eq("+(myIndex-1)+")").focus();
                          }
                          break;
                      case 39:
                          // Key right.
                          $(".credit:eq("+(myIndex)+")").focus();
                          break;
                      case 40:
                          // Key down.
                          if(myIndex < lastIndex) {
                            $(".debit:eq("+(myIndex+1)+")").focus();
                          }
                          break;
                }   
            computeTotal();
        });

        $(document).on("keyup", ".credit", function (event) {
            if ($(this).val().replace(/,/g, '') > 0) {
                $(this).parents('tr').find('.debit').val("0.00");
            }
            myIndex = $(".credit").index(this);
            lastIndex = $(".credit").length;
            let key = event.which;                
                    switch(key) {
                      case 37:
                          // Key left.
                          $(".debit:eq("+(myIndex)+")").focus();
                          break;
                      case 38:
                          // Key up.
                          if(myIndex > 0) {
                            $(".credit:eq("+(myIndex-1)+")").focus();
                          }
                          break;
                      case 39:
                          // Key right.
                          break;
                      case 40:
                          // Key down.
                          if(myIndex < lastIndex) {
                            $(".credit:eq("+(myIndex+1)+")").focus();
                          }
                          break;
                }   
            computeTotal();
        });


        accountCodeChange();
    });

    function addNewItem(){
        $.post(URL + 'sales/newItems', {view: 'invoice'})
        .done(function (returnData) {
            $('.popBack').html(returnData);
            $('.popBack').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('#saveAddNew').hide();
            $('#formtask input[name="task"]').val('additemr');

            $('.closeCNTs').click(function () {
                $('.itemid').removeClass('activeObj');
                $('.popBack').addClass('hidden');
                $('.popBack').html('');
                $('body').css('overflow', 'auto');
            });
        })
        .fail(function () {
            alertWithoutNotice('Connection Error!');
        });
    return false;     
    }

    function accountCodeChange() {
        $(".accountCode").unbind("change");
        $(".accountCode").bind("change",function(){
            $object = $(this);
            let code = $(this).find('option:selected').attr('title');
            alert($($object).closest('tr').find("input[name='jdJournalCode']").html());return false;

            $objtype = $($object).parents('tr').find('.type').val();
            $('.accountCode').each(function () {
                $currtype = $(this).parents('tr').find('.type').val();
                if ($(this).closest('td').parent()[0].sectionRowIndex != $($object).closest('td').parent()[0].sectionRowIndex) {
                    if ($(this).val() == $($object).val() && $objtype == $currtype) {
                        alert('Account name already selected!');
                        $($object).parents('tr').find(".accountCode option:first").attr('selected', 'selected');
                        return false;
                    }
                }
            });
        });
    }
    function computeTotal() {
        totaldebit = totalcredit = 0;
        $('.accountCode').each(function (i) {
            totaldebit += parseFloat($(this).parents('tr').find('.debit').val().replace(/,/g, ''));
            totalcredit += parseFloat($(this).parents('tr').find('.credit').val().replace(/,/g, ''));
        });

        $('input[name="totaldebit"]').val($.number(totaldebit, 2));
        $('input[name="totalcredit"]').val($.number(totalcredit, 2));

        if (totaldebit != totalcredit) {
            $('input[name="totaldebit"]').css('color', 'red');
            $('input[name="totalcredit"]').css('color', 'red');
        } else {
            $('input[name="totaldebit"]').css('color', 'black');
            $('input[name="totalcredit"]').css('color', 'black');
        }
    }
</script>