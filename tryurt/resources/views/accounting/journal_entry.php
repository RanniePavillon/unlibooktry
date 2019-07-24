<style>
    .bodyJournalMain{
        background-color: white;
    } 
    .journalMainForm{
        background-color:white;
    }
    #newJournal{
        margin-left:10px;
        float:left;
        width:100%;
    }
    .hrClass4Journal{
        width:985px;
        border: 2px solid gray;
        margin-left: -15px;
        margin-top: -8px;
    }
    .collect_tableJournal{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .collect_tableJournal, th{
        background-color:#183867;
        font-size:12;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 5px;
    }
    .collect_tableJournal, td{
        font-size: 12px;
        color: black;
        font-family:Verdana;
        text-align: left;
        background-color: white;
        border-bottom: solid 1px #c8c8c8;
        padding: 5px;
    }
    .collect_tableJournal a{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: none;
        font-family:Verdana;
    }
    .collect_tableJournal a:hover{
        color:blue;
        font-size: 12px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
    }
    .tblHoverJE tr:hover{
        background: #E8E8E8;
    }
    .centerAllExp {
        margin-left:11px;
        height: 45px;
        font-size: 13px;
        font-family: Agency FB;
    }
    .search3Journal{
        margin-left: 10px;
        width: 200px;
        text-align: center;
        height: 28px;
        margin-top: 20px;
    }

    .searchindexAllE::-webkit-input-placeholder{
        color:#fff;
        padding-left:35px;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTableTd{
        background-color: #A70C0C;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding:7px 11px;
    }
    .tfootTable a{
        color: #FFF;
        text-decoration: none;
        cursor: pointer;
        font-family:Verdana;
        font-size: 9px;
        font-weight: bold;
    }
    .tfootTable a:hover{
        font-weight: bold;
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .tblTotal{
        background: #183867;
        width: 99%;
        margin-top: 30px;
        margin-left: 5px;
        margin-right: 5px;

    }
    .tTh{
        padding:7px 11px;
    }
    .inpTotalJE{
        background: transparent;
        border: none;
        color: #fff;
        outline-style: none;
        text-align: right;
        font-weight: bold;
        width: 132px;
        font-family: Verdana;
        font-size: 12px;
    }
    .delete1{
        background: none;
        width:65px;
        height: 33px;
        font-size: 17px;
        font-family:agency fb2;
        cursor: pointer;
        border: none;
        color: #183867;
        font-weight: bold;
        outline-style:none;
    }
    .copyNew{
        background: none;
        width:65px;
        height: 33px;
        font-size: 17px;
        font-family:agency fb2;
        cursor: pointer;
        border: none;
        color: #183867;
        font-weight: bold;
        outline-style:none;
    }
    .copy1{
        background: none;
        width:65px;
        height: 33px;
        font-size: 17px;
        font-family:agency fb2;
        cursor: pointer;
        border: none;
        color: #183867;
        font-weight: bold;
        outline-style:none;
    }
    .moduleHeight{
        width:100%;
        margin:auto;
    }
</style>
<?php
require_once ('public/paginator.php');
$pages = new Paginator;
?>
<?php
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?>
<title>
    JOURNAL ENTRY
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyAccounting">
    <div class="bodyJournalMain">
        <form class="journalMainForm" action='<?php echo URL ?>accounting/journal_entry?page=<?= $page ?>&ipp=<?= $ipp ?>' id='form'>
            <div id="newJournal" class="headings">
                <label class="headTextJournal">JOURNAL ENTRY</label>
                <?php if ($useraccess->Add == 'yes') { ?>
                    <a href="<?= URL ?>invoice/newRecurring">
                        <!-- <label class="crossJournal"> -->
                            <input type="button"  class="createNewJournal buttonslarge" value="CREATE NEW ENTRY">
                        <!-- </label> -->
                    </a>
                <?php } ?>
            </div>


            <div style="clear:both;"></div>
            <div class="centerAllExp">
                <div style="float:left;margin-top: 5px;">
                    <?php if ($useraccess->Edit == 'yes') { ?>
                        <input type="button"  name="sendinvoice" value="EDIT" class="delete1 buttoninvoices" id="edit" onclick="editrec('', '')">
                    <?php }if ($useraccess->Add == 'yes') { ?>
                        <input type="button" name="sendinvoice" value="COPY" class="copy1 buttoninvoices" onclick="viewRecord('', 'copy')">
                    <?php }if ($useraccess->Delete == 'yes') { ?>
                        <input type="button" name="del" value="CANCEL" class="copyNew buttoninvoices" id="delete" onclick="deleterec()">
                    <?php } ?>
				<input type="button" name="print" value="PRINT PREVIEW" class="printPreview buttonHover buttoninvoices">

                </div>
                <div id="search3Journal" style="float:right;margin-right:30px;margin-top:10px;">
                    <span class="filteredby">Filtered By:</span>
                    <label class="labelclass">
                        <select class="inumberAllExp inumber">
                            <option class="invNoOption">JOURNAL NO.</option>
                            <option class="invNoOption">DATE</option>
                        </select>
                    </label>
                    <input type="search" name="search" placeholder="SEARCH" class="searchindexAllE searchindex">
                    <input type="button" name="addpayment" value="" class="searchBJournal search2Col">
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="moduleHeight">
                <table class="collect_tableJournal tblHoverJE">
                    <tr class="">
                        <th width="1%"></th>
                        <th width="15%">Journal No.</th>
                        <th width="15%">Date</th>
                        <th width="20%" style="text-align:right">Amount</th>
                        <th width="20%" style="text-align:right">Status</th>
                        <th width="20%"></th>
                    </tr>
                    <?php
                    $journals = TblJournalEntryMySqlExtDAO::getData(($_GET['ipp'] == "All") ? '' : $_GET['ipp'], ($_GET['ipp'] == "All") ? '' : $_GET['ipp'] * ($_GET['page'] - 1));
                    $pages->items_total = count(TblJournalEntryMySqlExtDAO::getData('', -1));
                    $pages->mid_range = 9;
                    $pages->paginate();
                    $totalJE = '';
                    if ($journals) {

                        foreach ($journals as $item) {
                            $totalJE = (float)$totalJE + (float)$item->appliedAmount;
                            ?>
                            <tr class="jEhoverTr">
                                <td><input type="checkbox" name='chk[]' class='chk' value="<?php echo $item->id ?>" /></td>
                                <td><a onclick="viewRecord(<?php echo $item->id ?>)"><?php echo $item->journalNumber ?></a></td>
                                <td><?php echo date('m/d/Y', strtotime($item->transDate)) ?></td>
                                <td style="text-align:right"><?php echo number_format((float) $item->appliedAmount, 2) ?></td>
                                <td style="text-align:right"><?= ucwords($item->status) ?></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>

            </div>

            <table class="tblTotal">
                <tr>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh" style="width:25px;">
                        Total:
                    </th>
                    <th class="tTh" style="width:280px;">
                        <input type="text" class="inpTotalJE"  value= <?php echo number_format((float) $totalJE, 2) ?>>
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>
                    <th class="tTh">
                    </th>

                </tr>
            </table>

            <table class="tfootTable">
                <tfoot>
                    <tr class="under">
                        <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="tfootTableTd">
                            <?php
                            echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
                            . $pages->display_items_per_page() . "</span>";
                            echo "Page $pages->current_page of $pages->num_pages";
                            ?>
                        </td>
                    </tr>
                </tfoot>
            </table>


        </form>

    </div>
</div>
<div class="popBack hidden">

</div>

<script>
    $(function(){ 
        $('[name="chk[]"]').change(function(){

            $('#edit').removeClass('hidden');    
            $('#delete').removeClass('hidden'); 
            $('[name="print"]').removeClass('hidden');  

            if($('[name="chk[]"]').is(':checked')){
                var CHKcollect = [];
                $('[name="chk[]"]:checked').each(function()
                {
                    CHKcollect.push($(this).val());
                });

                status = '';

                if(CHKcollect.length == 1){
                    status = $(this).closest('tr').find('td:nth-child(5)').text();
                    status = $.trim(status).toLowerCase();

                    if(status == 'posted' || status == 'reversed'){
                        $('#edit').addClass('hidden');    
                        $('#delete').addClass('hidden');    
                    }else{
                        $('[name="print"]').addClass('hidden');  
                    }
                }else{
                    alert('Please select one record only to preview.');
                    $('[name="chk[]"]').prop('checked',false);
                }
            }
        });

        $('[name="print"]').click(function(){
            id = $('[name="chk[]"]:checked').val();
            // alert(id);
            $('.popupBack').removeClass('hidden');
            $('input[type="checkbox"]').prop('checked',false);
            $.post( URL + 'accounting/printPreview',{'id':id})
                .done(function(returnData){
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    
                    $('.xButton').click(function(){
                        $('.popBack').html('');
                        $('.popBack').addClass('hidden');
                        $('body').css('overflow', 'auto');
                    });
                })

        });

        

    });
    function printPreview(id) {
        $.post(URL + 'invoice/printReceipt', {invoiceid: id})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popx').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        $('.chk').removeAttr('checked');
                        invoiceprintview = paymentpreview ='';
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    }

    $(function () {
        $('.createNewJournal').click(function () {
            $.post(URL + 'accounting/journal')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');

                        closeJournal();
                    });
            return false;
        });
    })

    function closeJournal() {
        $('.close1Client, .closeJournal').click(function () {
            //if (confirm('Are you sure you want to leave this page without posting?')) {
                $(document).off('click','#addtask');
                $('.popBack').addClass('hidden');
                $('.popBack').html('');
                $('body').css('overflow', 'auto');
           // }
            $('input[name="chk[]"]:checked').prop('checked', false);
        });
    }
    function editrec(journalid, stat) {
        if ($('.chk').is(':checked') || journalid != '') {
            var checked = "";
            count = 0;
            myThis = '';

            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                count++;
                myThis = $(this);
                return false;
            });

            if (journalid != '') {
                checked = parseInt(journalid);
            }

            if ($('.chk:checked').length > 1) {
                alertWithoutNotice('Please select only one item.');
                $("input[name='chk[]']:checked").prop('checked', false);
                return false;
            }

            status = $(myThis).parent('td').parent('tr').find('td:nth-child(5)').html();
            if (status == 'Posted' && stat != 'copy') {
                alertWithoutNotice('Journal is posted. You can no longer edit the journal.');
                return false;
            }

            $.post(URL + 'accounting/journal', {journalid: checked, status: status})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');



                        closeJournal();
                    });

            return false;
        } else {
            alertWithoutNotice('Please select record to edit');
        }
    }

    function viewRecord(journalid, status) {
        if (status == 'copy' && $("input[name='chk[]']:checked").length > 1) {
            alert('Please select only one item.');
            $("input[name='chk[]']:checked").prop('checked', false);
            return false;
        } else if (status == 'copy' && $('input[name="chk[]"]:checked').length == 0) {
            alertWithoutNotice('Please select item to copy.asdf');
            return false;
        }
        $("input[name='chk[]']:checked").each(function ()
        {
            checked = parseInt($(this).val());
            return false;
        });

        if ($.isNumeric(journalid)) {
            checked = journalid;
        }

        $.post(URL + 'accounting/journal', {journalid: checked, status: status})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');


                    closeJournal();
                });
    }

    function deleterec() {
        status = '';
        if ($('.chk').is(':checked')) {
            $("input[name='chk[]']:checked").each(function () {
                status = $(this).parent('td').parent('tr').find('td:nth-child(5)').html();
                if (status == 'Posted') {
                    return false;
                }
            });

            if (status == 'Posted' || status == 'Reversed') {
                alertWithoutNotice('Journal(s) may be posted/reversed. You can no longer delete the Journal(s).');
                $("input[name='chk[]']:checked").prop('checked', false);
                return false;
            }

            if (confirm('Are you sure you want to delete the following record(s)?')) {
                $.post(URL + 'accounting/deleteJournal', $('.journalMainForm').serialize())
                        .done(function (returnData) {
                            if (returnData == '') {
                                location.reload();
                            } else {
                                alertWithoutNotice(returnData);
                            }
                        });
            }
            $('input[name="chk[]"]:checked').prop('checked', false);
        } else {
            alertWithoutNotice('Please select record to delete');
        }
    }
</script>
