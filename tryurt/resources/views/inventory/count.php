
<style>
    .cnitableAllInvoice{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        height:auto!important;
    }
    .cnitableAllInvoice, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
    }
    .cnitableAllInvoice a{
        color:blue;
        font-size:11px;
        font-weight: normal;
        cursor: pointer;
        text-decoration: underline;
        font-family:Verdana;
    }

    .cnitableAllInvoice tr th:nth-child(){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(6){
        text-align: right;
    }
    .cnitableAllInvoice tr th:nth-child(7){
        text-align: right;
    }
    .cnitableAllInvoice tr td:nth-child(5){
        text-align: left;
    }
    .cnitableAllInvoice tr td:nth-child(6){
        text-align: right;
        padding:5px;
    }
    .cnitableAllInvoice tr td:nth-child(7){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr th:nth-child(8){
        text-align: center;
    }
    .cnitableAllInvoice tr td:nth-child(2){
        text-decoration: none;
        /* font-family: Agency FB; */
    }
    #hoverTr:hover{
        background-color: #E8E8E8;
    }
    .dateInputText{
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.27);;
        padding: 5px 5px 5px 5px;
        margin-top: 8px;
    }
    .center2 a{
        color: black;
    }
    .tablecni a{
        text-decoration: none;
    }
    .tablecni a:hover{
        text-decoration: underline;
    }
    .cnitableAllInvoiceTr a{
        text-decoration: none;
        color: white;
        font-size:12px;
        font-family:Verdana;
        font-weight: bold;
    }
    .cnitableAllInvoiceTr a:hover{

    }
    .ui-datepicker-calendar th{

    }
    .ui-datepicker {  
        width: 216px;  
        height: auto;  
        font: 9pt Arial, sans-serif;  
        -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
        -moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, .5);  
    }  
    .ui-datepicker a {  
        text-decoration: none;  
    }  
    .ui-datepicker table {  
        width: 100%;  
        background-color: white;
    }  
    .ui-datepicker-header {  
        background-image: url('<?= URL ?>public/images/prevNext.png');
        color: #e0e0e0;
        font-weight: bold;
        -webkit-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, 2);
        -moz-box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
        box-shadow: inset 0px 1px 1px 0px rgba(250, 250, 250, .2);
        /* text-shadow: 1px -1px 0px #000; */
        filter: dropshadow(color=#000, offx=1, offy=-1);
        line-height: 30px;
        border-width: .1px 0 0 0;
        border-style: solid;
        border-color: #A29A9A;
    }  
    .ui-datepicker-title {  
        text-align: center; 
    }  
    .ui-datepicker-prev, .ui-datepicker-next {  
        display: inline-block;  
        width: 30px;  
        height: 30px;  
        text-align: center;  
        cursor: pointer; 
        background-repeat: no-repeat;  
        line-height: 600%;  
        overflow: hidden;  
    }  

    .ui-datepicker-prev {  
        float: left;  
        background-position: center -30px;  
    }  
    .ui-datepicker-next {  
        float: right;  
        background-position: center 0px;  
    }  
    .ui-datepicker thead {  
        background-color: #f7f7f7;  
        background-image: -moz-linear-gradient(top,  #f7f7f7 0%, #f1f1f1 100%);  
        background-image: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%,#f7f7f7), color-stop(100%,#f1f1f1));  
        background-image: -webkit-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: -o-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: -ms-linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        background-image: linear-gradient(top,  #f7f7f7 0%,#f1f1f1 100%);  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f7f7', endColorstr='#f1f1f1',GradientType=0 );  
        border-bottom: 1px solid #bbb;  
    }  
    .ui-datepicker th {  
        text-transform: uppercase;  
        font-size: 6pt;  
        color: #666666;  
        text-shadow: 1px 0px 0px #fff;  
        filter: dropshadow(color=#fff, offx=1, offy=0);  
        text-align: center;
        background-color: white;
    }  
    .ui-datepicker tbody td {  
        padding: 0;  
        border-right: 1px solid #bbb;  
    }  
    .ui-datepicker tbody td:last-child {  
        border-right: 0px;  
    }  
    .ui-datepicker tbody tr {  
        border-bottom: 1px solid #bbb;  
    }  
    .ui-datepicker tbody tr:last-child {  
        border-bottom: 0px;  
    }  
    .ui-datepicker td span, .ui-datepicker td a {  
        display: inline-block;  
        font-weight: bold;  
        text-align: center;  
        width: 30px;  
        height: 30px;  
        line-height: 30px;  
        color: #666666;  
        text-shadow: 1px 1px 0px #fff;  
        filter: dropshadow(color=#fff, offx=1, offy=1);  
    }  
    .ui-datepicker-calendar .ui-state-default {  
        background: #ededed;  
        background: -moz-linear-gradient(top,  #ededed 0%, #dedede 100%);  
        background: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%,#ededed), color-stop(100%,#dedede));  
        background: -webkit-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: -o-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: -ms-linear-gradient(top,  #ededed 0%,#dedede 100%);  
        background: linear-gradient(top,  #ededed 0%,#dedede 100%);  
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#dedede',GradientType=0 );  
        -webkit-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
        -moz-box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
        box-shadow: inset 1px 1px 0px 0px rgba(250, 250, 250, .5);  
    }  
    .ui-datepicker-unselectable .ui-state-default {  
        background: #f4f4f4;  
        color: #b4b3b3;  
    }  
    .ui-datepicker-calendar .ui-state-hover {  
        background: #f7f7f7;  
    }  
    .ui-datepicker-calendar .ui-state-active {  
        background: #6eafbf;  
        -webkit-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        -moz-box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        box-shadow: inset 0px 0px 10px 0px rgba(0, 0, 0, .1);  
        color: #e0e0e0;  
        text-shadow: 0px 1px 0px #4d7a85;  
        filter: dropshadow(color=#4d7a85, offx=0, offy=1);  
        border: 1px solid #55838f;  
        position: relative;  
        margin: -1px;  
    } 
    .ui-datepicker-calendar td:first-child .ui-state-active {  
        width: 29px;  
        margin-left: 0;  
    }  
    .ui-datepicker-calendar td:last-child .ui-state-active {  
        width: 29px;  
        margin-right: 0;  
    }  
    .ui-datepicker-calendar tr:last-child .ui-state-active {  
        height: 29px;  
        margin-bottom: 0;  
    } 
    .search2{
        font-family:agency fb2!important;
    }
    .date{
        width: 104px;
        height: 28px;
        font-family: agency fb2;
        font-size:16px;
        font-weight: bold;
        padding: 5px;
        border: 1px solid #C51400;
    }  
    .invoiceText{
        border: none;
        text-align: right;
        background: none;
        font-size: 12px;
        color: black;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
    }
    .balinvoices{
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align:right;
        border:none;
        background:none;

    }
    .balTotal{
        margin-left: 63px;
        width: 115px;
        text-align: center;
        font-size: 12px;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        border:none;
        border-top: solid 1px #000;
    }
    .createNI{

    }

    .cnitableAllInvoice2{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
        margin-top: -96px;
    }
    .cnitableAllInvoice2, th{
        background-color: #55C768;
        padding: 2px 2px 2px 2px;
        font-size: 13px;
        color:white;
        font-family: Arial, Helvetica, verdana, sans-serif, tahoma;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice2, td{
        font-size: 12px;
        color:black;
        font-family:Verdana;
        text-align: left;
        /* height: 30px; */
    }	
    .tfootTable{
        border-collapse:collapse;
        width: 99%;
        margin:auto;
        margin-top: 5px;
    }
    .tfootTable, th{
        background-color: #183867;
        font-size:12px;
        color: white;
        font-family:Verdana;
        text-align: left;
        padding: 5px;
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
        text-decoration:underline;
    }
    .tfootTable select{
        width: 65px;
        height: 18px;
        margin-left: 10px;
        margin-right: 10px;
        /* background-image: url('<?= URL ?>public/images/dropSelect.png');
        background-size: 65px 18px;
        background-repeat: no-repeat;
        -webkit-appearance: none; */
    }
    .statInputnew{
        font-family:Arial, Helvetica, verdana, sans-serif, tahoma;
        font-size:12px;
        width:100%;
        text-align:center;
        border:none;
        background:none;
    }
    .invNoOption{
        background-color: #fff;
        color: #000;
        font-weight: bold!important;
    }
    .buttonHover:hover{
        color:#B13C56;
    }
    .classPadd{
        padding:5px;
    }
</style>

<script>
    $(function () {
        $('#searchby').change(function () {
            if ($(this).val() == 3) {
                $('input[type="search"]').addClass('hidden');
                $('.date').removeClass('hidden');
                $('.search2').removeClass('hidden');
                $('.search2Col').addClass('hidden');
            } else {
                $('input[type="search"]').removeClass('hidden');
                $('.date').addClass('hidden');
                $('.search2').addClass('hidden');
                $('.search2Col').removeClass('hidden');

            }
        });
        $('#searchby').change();
        $(".date").datepicker({
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        });
    })

</script>
<?php
require_once ('public/paginator.php');
$pages = new Paginator;
//echo $var = TblNewInvoiceMySqlExtDAO::getMaxNumId();
$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?>
<title>
    ALL PURCHASE ORDER
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice footerHeight">
    <form method='post' action='<?php echo URL ?>invoice/invoices?page=<?= $page ?>&ipp=<?= $ipp ?>' id='form'>
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings">
                <label class="headText">COUNTING LIST</label>
                <a href="">	
                    <!-- <label class="crossiNVENTORY">  -->
                        <a href="<?php echo URL ?>inventory/enterCount"><input type="button" class="createNI buttonslarge newcount" value="NEW COUNT" ></a>
                    <!-- </label> -->
                </a>
            </div>	

            <div style="clear:both;"></div>
            <div class="center2" style="height: 22px;">

                <?php $searchby = isset($_POST['searchby']) ? $_POST['searchby'] : ''; ?>
                <div style="float:right;margin-right:30px;margin-top:4px;" class="hidden">
                    <span class="filteredby">Filtered By:</span>
                    <label class="labelclass">
                        <select class="inumber" name="searchby" id="searchby">
                            <option class="invNoOption" value="1" <?php echo ($searchby == 1) ? 'selected' : '' ?>>PO NO.</option>
                            <option class="invNoOption" value="2" <?php echo ($searchby == 2) ? 'selected' : '' ?>>CUSTOMER NAME</option>
                            <option class="invNoOption" value="3" <?php echo ($searchby == 3) ? 'selected' : '' ?>>DATE</option>
                            <option class="invNoOption" value="4" <?php echo ($searchby == 4) ? 'selected' : '' ?>>STATUS</option>
                        </select>
                    </label>
                    <input type="search" name="search" placeholder="SEARCH" class="searchindex
                           <?php echo ($searchby == 3) ? 'hidden' : '' ?>" value="<?= ISSET($_POST['search']) ? $_POST['search'] : '' ?>"> 

                    <input type="text" name="startdate" value="<?= ISSET($_POST['startdate']) ? $_POST['startdate'] : '' ?>" 
                           placeholder="From Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="text" name="enddate" value="<?= ISSET($_POST['enddate']) ? $_POST['enddate'] : '' ?>"
                           placeholder="To Date" class="date dateInputText hasDate <?php echo ($searchby != 3) ? 'hidden' : '' ?>" style="width:104px;height: 29px;"/>

                    <input type="submit" name="search2" value="SEARCH" class="search2 <?php echo ($searchby != 3) ? 'hidden' : '' ?>">

                    <div><input type="submit" name="search2" value="" class="search2Col <?php // echo ($searchby != 3) ? 'hidden' : ''      ?>" style="margin-left:331px;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div class="moduleHeight">
            <?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?>
            <table class="cnitableAllInvoice">
                <tr class="cnitableAllInvoiceTr" id="hoverTr">
                    <!--<th style="text-align:center; width:1%"><input type="checkbox" class='toggle' ></th>
                    <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a onclick="sort('invoice', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Inventory Id.</a></th>
                    <th style="text-align:left;padding-left: 5px;width:10%;">Date</th>
                    <th style="text-align:center;padding-left: 5px;width:11%;">Total COUNT Quantity</th>-->
                                        <!--<th style="text-align:center; width:1%"><input type="checkbox" class='toggle' ></th>-->
                    <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a onclick="sort('invoice', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Item No.</a></th>
                    <th style="text-align:left;padding-left: 5px;width:10%;">Item Description</th>
                    <th style="text-align:center;padding-left: 5px;width:11%;">Available Qty</th>
                    <!--<th style="text-align:center;padding-left: 5px;width:11%;">New Count</th>-->
                </tr>
                <?php
                if ($this->data) {
                    foreach ($this->data as $item) {
                        $itm = DAOFactory::getTblItemDAO()->load($item->itemId);
                        ?>
                        <tr class="tablecni" id="hoverTr">
                                <!--<td style="text-align:center;" class="" class="classPadd"><input type="checkbox" name='chk[]' class='chk' value=""></td>-->
                            <td style="text-align:left;padding-left: 5px;"  class="classPadd"><?php echo $itm->itemCode ?></td>
                            <td style="text-align:left;padding-left: 5px;"  class="classPadd"><?php echo $itm->description ?></td>
                            <td style="text-align:center;padding-right: 5px;"  class="classPadd"><?php echo $item->countingQty ?></td>
                            <!--<td style="text-align:center;padding-right: 5px;"  class="classPadd">100</td>-->
                        </tr>
        <?php
    }
}
?>

            </table>
        </div>

        <table class="cnitableAllInvoice2" style="margin-top:40px;">
            <tr class="cnitableAllInvoice2">
                    <!--<th style="text-align:center; width:3%"></th>-->
                <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"></th>
                <th style="text-align:left;padding-left: 5px;width:11%;"></th>
                <th style="text-align:right;width:20%;font-family:Verdana;font-size:12px;">Total : </th>
                <th style="text-align:right;padding-right:9px;width:14%;font-family:Verdana;font-size:12px;"></th>
                <th style="text-align:right;padding-right: 5px;width:12%;font-family:Verdana;font-size:12px;"></th>
                <th style="text-align:center;padding-right:5px;width:11%;"></th>
                <th style="text-align:center;padding-right:5px;width:11%;"></th>
            </tr>
        </table>

        <div class="tcollect1 hidden">
            <div>Total:<input readonly="readonly" type="text" value="<?= number_format((float) $invoicetotal, 2, '.', '') ?> PHP" class="php1 numeric"></div>
            <div style="margin-top: -25px;margin-left: 180px;"><input readonly="readonly" type="text" class="balTotal" value="0.00"></div>
        </div>

        <table class="tfootTable">
            <tfoot>
                <tr class="under">
                    <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="under">
<?php
// echo $pages->display_pages();
echo "<span style=\"margin-left:25px\width:120px\"> " . $pages->display_jump_menu()
 . $pages->display_items_per_page() . "</span>";
echo "Page $pages->current_page of $pages->num_pages";
?>
                    </td>
                </tr>
            </tfoot>
        </table>


        <input type='hidden' name='task' value=''/>
        <input type="hidden" name="sortorder" value=""/>	
        <input type="hidden" name="sortdirection" value=""/>	
    </form>
</div>
<div class="popBack hidden"></div>

