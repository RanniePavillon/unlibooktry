<style>
    .contnt{
        height: 100%;
        margin: 0 auto;
        padding-top: 30px;
    }

    .optcontent{
        width: 563px;
        margin: 0 auto;
        background-color: #fff;
        padding: 15px;
        font-family:verdana;
        font-size:12px;
        margin-top: 18px;
        padding-top: 35px;
    }

    input[type="submit"]{
        display: block;
        margin: 0 auto;
        width:63px;
        height:25px;
        background-color:#C51400;
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
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
            <form method="post" action="<?php echo URL ?>invoice/taxtype">
                Select Tax Type per Certificate of Registration (BIR form 2303):
                <ul>
                    <li style="padding-top: 10px;"><input type="radio" id="percent" name="typeOfTax" value="percentage" checked required><label for="percent">Percentage (If the income is below 1,919,500 or may opt to register as VAT)</label></li>
                    <li style="margin-top:17px;"><input type="radio" id="vat" name="typeOfTax" value="vat" required><label for="vat">VAT (If your income is over 1,919,500)</label></li>
                </ul>
                <input type="submit" value="OK" style="margin-top: 37px;margin-bottom: 9px;cursor:pointer;" />
            </form>
        </div>
    </div>
</div>