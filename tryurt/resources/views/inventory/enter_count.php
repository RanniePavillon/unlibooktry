
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
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice, td{
        font-size: 12px;
        color:black;
        font-family: verdana;
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
        font-family: verdana;
    }
    .balinvoices{
        font-size: 12px;
        font-family: verdana;
        text-align:right;
        border:none;
        background:none;

    }
    .balTotal{
        margin-left: 63px;
        width: 115px;
        text-align: center;
        font-size: 12px;
        font-family: verdana;
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
        font-family: verdana;
        text-align: left;
        padding: 5px;
    }
    .cnitableAllInvoice2, td{
        font-size: 12px;
        color:black;
        font-family:Verdana;
        text-align: left;
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
    }
    .statInputnew{
        font-family:verdana;
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
    .cnitableAllInvoice input[type="text"]{
        height:25px;
        width:100%;
        font-family:verdana;
        font-size:12px;
        text-align:center;
        border:solid 1px #c8c8c8;
    }
	.transdateClass{
		font-family:verdana;
        font-size:12px;
		padding-left:10px;
		padding-top:10px;
		font-weight:bold;
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
//require_once ('public/paginator.php');
//$pages = new Paginator;
//echo $var = TblNewInvoiceMySqlExtDAO::getMaxNumId();
//$page = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : ($_GET['page'])) : 1;
//$ipp = isset($_GET['ipp']) ? (($_GET['ipp'] == "All") ? '' : $_GET['ipp']) : 25;
?>
<title>
    COUNT
</title>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<div class="mainbodyInvoice footerHeight">
    <form method='post' id='form'>
        
        <div class="invoiceHolderInvoice">
            <div id="newInvoice" class="headings">
                <label class="headText">NEW COUNT</label>
            </div>
            <div style="clear:both;"></div>				
        </div>
        <div class="transdateClass">
			Transaction date: <input type="text" class="di" id="di" name="transdate"  required /> 
            <input type="hidden" name="token" value="<?=$this->token;?>">
            <input class="bn3 addsavebuttonpop addsavebuttonbody" style="margin-left:10px;" type="submit" name="save" value="Save">
		</div>		
        <div class="moduleHeight" style="margin-top:10px;">
            <?php $sortdirection = isset($_POST['sortdirection']) ? $_POST['sortdirection'] : '' ?>
            <table class="cnitableAllInvoice">
                <tr class="cnitableAllInvoiceTr" id="hoverTr">
                    <th  width="2%">#</th>
                    <th style="text-align:left;padding:5px;padding-left: 5px;width:11%;"><a onclick="sort('invoice', '<?php echo ($sortdirection == 'desc') ? 'asc' : 'desc' ?>')">Item No.</a></th>
                    <th style="text-align:left;padding-left: 5px;width:10%;">Item Description</th>
                    <th style="text-align:center;padding-left: 5px;width:11%;">Available Qty</th>
                    <th style="text-align:center;padding-left: 5px;width:11%;">New Count</th>
                    <th style="text-align:right;padding-left: 5px;width:11%;">Variance</th>
                </tr>
                <?php foreach ($this->data as $i => $item) { ?>
                    <tr class="tablecni" id="hoverTr">
                        <td style="padding-left:5px;"><?php echo $i + 1 ?>
                            <input type="hidden" name="itemId[]" value="<?php echo $item->itemId ?>" />
                            <input type="hidden" name="availableQty[]" value="<?php echo $item->totalQty ?>" />
                        </td>
                        <td style="text-align:left;padding-left: 5px;" class=""><a href="<?= URL ?>Inventory/itemTransaction?itemid=<?php echo $item->itemId ?>" target="_blank"><?php echo $item->itemCode ?></a></td>
                        <td style="text-align:left;padding-left: 5px;" class=""><?php echo $item->description ?></td>
                        <td style="text-align:center;padding-right: 5px;"><span class="qty"><?php echo $item->totalQty ?></span></td>
                        <td><input type="text" name="countingQty[]" value="" class="newcount" /></td>
                        <td><span class="variance"></span></td>
                    </tr>
                <?php } ?>			

            </table>
        </div>

        <table class="tfootTable">
            <tfoot>
                <tr class="under">
                    <td colspan="5" style="font-family:Verdana;font-size:11px;color:#fff;font-weight:bold;text-align: center" class="under">
                        <?php
//                        echo "<span style=\"margin-left:25px\width:120px\"> " . $this->pages->display_jump_menu()
//                        . $this->pages->display_items_per_page() . "</span>";
//                        echo "Page " . $this->pages->current_page . " of " . $this->pages->num_pages;
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>


        <input type='hidden' name='task' value='setcount'/>
        <input type="hidden" name="sortorder" value=""/>	
        <input type="hidden" name="sortdirection" value=""/>	
    </form>
</div>
<div class="popBack hidden"></div>

