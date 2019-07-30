<style>
    .contnt{
        height: 100%;
        margin: 0 auto;
        padding-top: 30px;
    }

    .optcontent{
        width: 393px;
        margin: 0 auto;
        background-color: #fff;
        padding: 18px;
        font-family:verdana;
        font-size:12px;
        margin-top: 18px;
    }

    input[type="submit"]{
        display: block;
        margin: 0 auto;
        width: 54px;
        height: 21px;
        background-color: rgb(100, 165, 6);
        border: none;
        color: #fff;
        font-weight: bold;
        border-radius: 3px;
        margin-top:20px;
    }
    .linestand {
        z-index:-1;
    }
    .hrlink{
        z-index:-1;
    }
    .buttonNo{
        margin-top: 19px;
        padding-left: 167px;
    }
    .submitcas {
        float:left;
        margin-left: 98px;
    }
    .textform{
        font-size: 15px;
        font-weight: bold;
        margin-top: 10px;
    }
    .no{
        width: 51px;
        color: #fff;
        border: none;
        height: 22px;
    }
    .atptext{
        font-size:12px;
        font-family:verdana;
        width:250px;
        padding:5px;
        height:50px;
        margin-top: 25px;
        margin-left: 35px;
    }

    .subBIR{
        display: block;
        margin: 0 auto;
        width: 106px !important;
        height: 36px !important;
        /* background-color: rgb(100, 165, 6); */
        border: none;
        color: #fff;
        font-weight: bold;
        border-radius: 3px;
        margin-top: 20px;
    }
    .formcontainernew{
        text-align: left;
        width: 340px;
        margin: auto;
        margin-top: 25px;
    }
    .headlist{
        width:50px;
        text-align:left;
        font-size:12px;
        font-family:verdana;
    }
    .divfonts{
        font-family:verdana;
        font-size:12px;
    }
    .permitdaw{
        width:159px;
    }
    .formcontainernew input[type="text"]{
        font-family:verdana;
        font-size:12px;
    }
    .dateissuedtxt{
        width: 139px;
    }
    .valid{
        width:139px;
    }
    .lowerinput{
        width: 360px;
        margin: auto;
        text-align: left;
        margin-left: 30px;
    }
    .lowerinput input[type="text"]{
        width: 363px;
        margin: auto;
        text-align: left;
        margin-left: 5px;
        margin-top: 20px;
        height: 30px;
        padding-left:5px;
    }
    .classdivpad placeholder{
        color:#000 !important;
    }
    .validuntil{
        text-decoration:underline;
        color:red;
    }
    .classdivpad{
        margin-top:5px;
    }
    .underlining{
        border:none;
        border-bottom:solid 1px #000;
    }
    /* placeholder */
    ::-webkit-input-placeholder {
        color: #c8c8c8;
        font-style: italic;
        font-size:12px;
        font-family:verdana;
    }

    :-moz-placeholder { /* Firefox 18- */
        color: #c8c8c8;
        font-style: italic;
        font-size:12px;
        font-family:verdana;
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        color: #c8c8c8;
        font-style: italic;
        font-size:12px;
        font-family:verdana; 
    }

    :-ms-input-placeholder {  
        color: #c8c8c8;
        font-style: italic;
        font-size:12px;
        font-family:verdana;
    }
	.close1Client {
		    background: transparent;
			color: black;
			border: none;
			border-radius: 2px;
			font-family: Arial black;
			font-weight: bold;
			font-size: 24px;
			/* right: 240px; */
			/* top: 25px; */
			outline-style: none;
			cursor: pointer;
			float: right;
			margin-right: -10px;
			margin-top: -18px;
	}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<script src="<?php echo URL; ?>views/invoice/js/mask.js"></script>
<?php //$atp = DAOFactory::getTblAtpDAO()->queryByUserId(Session::getSession('meduser')) ? DAOFactory::getTblAtpDAO()->queryByUserId(Session::getSession('meduser'))[0] : new tblAtp(); ?>
<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
            <input type="button" class="closePrints popx close1Client" value="x">
            <div class="textform">CAS/POS Accreditation No.</div>
            <div style="clear:both"></div>
            <form method="post" id="frmatp">
                <div class="formcontainernew">
                    <div class="divfonts classdivpad" style="">CAS/POS Accreditation no. <input type="text" name="atpNo" value="<?php //echo $atp->atpNo ?>" class="permitdaw underlining" required></div>
                    <div class="divfonts classdivpad"><span class="">Valid until</span> <input type="date" name="dateValidity" value="<?php //echo $atp->dateValidity ?>" class="valid underlining" style="width: 165px; border: none; border-bottom: solid 1px #000;" placeholder="01/25/2015" required></div>
                   
                    <!--<input type="text" class="atptext hidden" name="atpPermit" maxlength="100">-->
                    <input type="submit" class="addsavebutton subBIR" value="REPLACE">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('.popx').click(function () {
            if (confirm('Are you sure you want to close this window?')) {
                $('.popBack').html('').addClass('hidden');
            }
        });

        $('#frmatp').submit(function () {
            $.post(URL + 'receipt/setAtp', $(this).serialize())
                    .done(function (returnData) {
                        if (returnData == '') {
//                           $('.birReg').text($('input[name="atpPermit"]').val());
                            $('.popBack').html('').addClass('hidden');

//                            if (invoiceprintview != '' || paymentpreview !='') {
                                if (typeof invoiceprintview != 'undefined' || typeof paymentpreview != 'undefined') {
                                    printPreview(typeof invoiceprintview != 'undefined' ? invoiceprintview : paymentpreview);
                                }
//                            }//collectionprintview(collectionprintview);
                            invoiceprintview = paymentpreview ='';
                        }
                    }).fail(function () {
                alert('Failed to set ATP Permit.');
            })

            return false;
        });

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