<style>
    .nif1Clienthmo{
        padding:10px;
    }

    .popx{
        float:right;
        font-size: 25px;
        background: none;
        border: none;
        font-weight: bold;
        cursor: pointer;
    }
    #subdiarytable{
        width: 100%;
        margin: auto;
        margin-top:15px;
    }
    #subdiarytable th{
        padding:7px!important;
    }
    #subsidiaryform{
        font-size:12px;
        font-family:verdana;
        padding-bottom:40px;
        background:#fff;
        margin: auto!important;
        margin-top: 31px!important;
    }
    .fontalltd{
        padding:9px;
        font-size:12px!important;
    }
    .parameter input[type="text"]{
        width:125px;
        height:27px;
        font-size:12px;
        font-family:verdana;
        margin-left: 5px;
        padding:5px;
    }
    .parameter{
        margin-left: 10px;
    }
    .named{
        margin-left: 10px;
    }
    .searchsub{
        width: 80px;
        border: none;
        height: 27px;
        color: #fff;
        cursor:pointer;
        background-color:#183867;
        font-weight:bold;
        font-family: Verdana;
        border-radius: 3px;
    }
    .collect_tableCharts, th{
        padding:3px 9px!important;
    }
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/overall.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/loading.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/invoice/css/hmo.css"/>
<?php
$getGLBalance_name = $this->getGLBalance;
?>
<div class="invoiceHolderCNWClient" >	
    <form class="nif1Clienthmo boxshadow" id="subsidiaryform" style="width:934px">
        <div id="new1Client" >
            <input type="button" class="close1Client close1Clienthmo popx" value="x">
        </div><div style="clear: both "></div>
        <div class="parameter">
            From Date: <input type="text" name="fromdate" class="hasDate" value="<?= date('m/01/Y') ?>" />
            To Date: <input type="text" name="todate" class="hasDate" value="<?= date('m/t/Y') ?>"/>
            <input type="button" value="Search" id="btnsearch" class="addsavebutton searchsub"/>
        </div>
        <br>
        <span class="named">Account Name: <?= ucwords($getGLBalance_name[0]['accont_name']) ?></span>

        <div id="container_ccpClient" style="">


            <div style="clear:both"></div>
        </div>
    </form>
</div>

<script>
    $(function () {

        $('#btnsearch').click(function () {
            fromdate = $('input[name="fromdate"]').val();
            todate = $('input[name="todate"]').val();
            accountNum = '<?= $_POST['accountNum'] ?>';

            $.post('accounting/genGlBalance', {
                'fromdate': fromdate,
                'todate': todate,
                'accountNum': accountNum
            })
                    .done(function (returnData) {
                        $('#container_ccpClient').html(returnData);
                    })

                    .fail(function () {
                        alert('Connection Error!');
                    });

            return false;
        });
        $('#btnsearch').click();
        //important
        $('.hasDate').prop('readonly', true);
        $('.hasDate').datepicker({
            dateFormat: 'mm/dd/yy'
        });
        $('.hasDate').change(function () {
            dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
            $(this).val(dates);
        });
    })

</script>

