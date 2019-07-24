<?php //require $_SERVER['DOCUMENT_ROOT'] .'/unlibooks/libs/Server.php';  ?>
<style>
    input[type="checkbox checked"]{

    }
	.popBack, .popup{
        background: black;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgba(1, 1, 1, 0.3);
        overflow:auto;
    }
	.popback:parent{
		overflow:hidden;
	}
	
	
	.invoiceHolderNTaxes{
	width: 100%;
	margin-top: 50px;
}
#newNTaxes{
	font-family: Calibri;
	margin-left: 20px;
	font-style: italic;
	font-weight: none;
	
	
}
.cnt-formNTaxes{
	width: 735px;
	margin: auto;
	background-color: white;
}
.cnt-headNTaxes{
	margin-top: -15px;
	font-size: 30px;
}

.hrNTaxes{
	width: 733px;
	border: 2px solid gray;
	margin-left: -21px;
	margin-top: -20px;
	border-radius: 3px;
	height: 4px;
	background-color: gray;
	
}
.closeNTaxes{
	background-color: gray;
	color: white;
	border: none;
	border-radius: 2px;
	font-family: Cambria;
	font-style: bold;
	font-size: 16px;
	height: 25px;
	margin-left: 695px;
	
}
.taskANTaxes{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
	padding-left: 20px;
	padding-top: 10px;
}
.tAccountNTaxes{
	width: 150px;
	height: 27px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	margin-top: 10px;
	margin-left: 35px;
	
}
.descTNTaxes{
	position: absolute;
	margin-left: 10px;
	margin-top: 70px;
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
}
.tblaTaxesNew{
	float: right;
	margin-right: 100px;
	margin-top: -95px;
}
.taskANTaxesDesc{
	margin-top: -90px;
	font-family: Calibri;
	font-size: 12px;
	color: #003366;
	margin-left: 20px;
	
}
.rphNTaxes{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
}
.rphINTaxes{
	width: 130px;
	height: 30px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	padding-left: 5px;
	margin-left: 20px;
}
.rphNTaxes2{
	padding-top: 13px;
}
.vatNTaxesnEW2{
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
	font-style: italic;
	float: right;
	margin-top: -51px;
	padding-right: 186px;
}
.vatSNTaxes{
	position: absolute;
	margin-top: 42px;
	margin-left: 570px;
	width: 130px;
	height: 30px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
}
.saveBNTaxes{
	position: absolute;
	margin-top: 7px;
	margin-left: 452px;
	width: 105px;
	height:31px;
	border-radius: 5px;
	font-family: Calibri;
	font-style: bold;
	font-size: 13px;
	color: white;
	background-color:#008B8B;
	border: none;
	cursor: pointer;
}
.saanBNTaxes{
	position: absolute;
	margin-top: 7px;
	margin-left: 565px;
	width: 150px;
	height:31px;
	border-radius: 5px;
	font-family: calibri;
	font-style: bold;
	font-size: 12px;
	color: white;
	background-color:#008B8B;
	border: none;
	cursor: pointer;
}
.taskANTaxesName{
	position: absolute;
	margin-top: 40px;
	margin-left: 10px;
	color: #003366;
	font-family: Calibri;
	font-size: 12px;
}
.tAccountNTaxesName2{
	margin-top: 5px;
	width: 300px;
	height: 27px;
	background-color: white;
	font-family: Calibri;
	font-size: 12px;
	border: solid 1px #C8C8C8;
	margin-left: 35px;
}
.ActiveAccountTax{
	margin-right: 10px;
}
.buttonTaxes{
	background-color: #E5F1CE;
	width: 735px;
	height: 45px;
	margin-top:95px;
}
	
	
	
</style>
<link href="/unlibooks/views/setting/css/ajax.css" rel="stylesheet" type="text/css">

<script>
    returnurl = "<?php echo (isset($_GET['returnurl'])) ? $_GET['returnurl'] : '' ?>";
</script>

<script>
    $(function() {
        $('#frmtax').submit(function() {
            if (returnurl == "client") {
                $.ajax({
                    url: "<?= URL ?>setting/addtaxOption",
                    type: "POST",
                    data: {
                        taxCode: $('input[name="taxCode"]').val(),
                        description: $('#frmtax #description').val(),
                        taxName: $('input[name="taxName"]').val(),
                        rate: $('#frmtax input[name="rate"]').val(),
                        active: $('#frmtax input[name="active"]').val(),
                        returnurl: 'addoption'
                    },
                    dataType: "JSON",
                    success: function(jsonStr) {
                        $('#taxId option:last').before($('<option/>', {
                            value: jsonStr.value,
                            text: jsonStr.text
                        }));

                        $('#taxId option').removeAttr('selected')
                                .filter('[value="' + jsonStr.value + '"]')
                                .attr('selected', true);

                        $('.popup').addClass("hidden");
                        return false;
                    }, error: function(xhr, textStatus, errorThrown) {
//                        alert('resf');
                        alert(xhr.responseText);
                    }
                });
                return false;
            }
        });
    })
</script>

<?php
$tax = new TblTax();
$task = 'addtax';
if (isset($_POST['taxid'][0])) {
    $taxid = $_POST['taxid'][0];

    $tax = DAOFactory::getTblTaxDAO()->load($taxid);
    Session::setSession('taxid', $taxid);
    $task = 'updatetax';
}
?>
<div class="invoiceHolderNTaxes">
    <form method="post" action="<?php echo URL ?>setting" class="cnt-formNTaxes" id="frmtax">
        <div id="newNTaxes">
            <input type="button" class="closeNTaxes" value="X">
            <p class="cnt-headNTaxes">New Taxes</p>
            <hr class="hrNTaxes">
        </div>

        <div>
            <table>	
                <tr>
                    <td class="taskANTaxes">Tax Code:</td>
                    <td><input type="text" class="tAccountNTaxes" name="taxCode" required value="<?php echo $tax->taxCode?>"></td>
                </tr>
                <tr>
                    <td class="taskANTaxes">Tax Name:</td>
                    <td><input type="text" class="tAccountNTaxesName2" name="taxName" value="<?php echo $tax->description ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><textarea class="itemINTaxes" id="description" ><?php echo $tax->description ?></textarea></td>
                </tr>	

            </table>
            <div class="taskANTaxesDesc" >Description:</div>
            <table class="tblaTaxesNew">
                <tr>	
                    <td class="rphNTaxes">Rate:</td>
                    <td><input type="text" class="rphINTaxes" placeholder="%" name="rate" value="<?php echo $tax->rate ?>" required></td>
                </tr>	
                <tr>
                    <td class="rphNTaxes2" ><input type="checkbox" checked  value="yes" name="active"></td>
                    <td><div style="margin-top: 10px; color: #003366; font-size:12px;">Active Account</div></td>	
                </tr>
            </table>


        </div>
        <div class="buttonTaxes">	
            <input type="submit" value="Save" class="saveBNTaxes">
			<?php if(Session::getSession('function')!='add' && Session::getSession('function')!='newRecurring'){ ?>
            <input type="button" value="Save and Add New" <?php echo Session::getSession('function') ?> class="saanBNTaxes">
				<?php } ?>
        </div>



    </form>

</div>
