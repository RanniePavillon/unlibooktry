<style>
.mainformitemsum{
	width: 720px;
	margin-top: 10px;
	margin-left: 15px;
	font-family: Agency FB;
	font-size: 19px;
	color: #c51400;
}
.sbis{
	font-size:24px;
	font-family: agency fb2;
	color:#c51400;
	float: left;
}
.parameteritem{
	padding-top:15px;
	margin-left:20px;
}	
div.scroll {
    height: 463px;
	overflow: scroll;
	margin-left: 4px;
	width: 756px;
	margin-top: 20px;
	overflow-x: hidden;
}
.fromtodate{
	margin-top:15px;
	margin-left:60px;
}
.fromtodatetable{
	margin-top:5px;
	font-size: 12px;
	font-family: verdana;
	font-weight: bold;
	margin-top:20px;
	margin-left:0px;
}
.fromtodatetable input[type="date"]{
	font-size: 12px;
	font-family: verdana;
	width:140px;
	padding:5px;
	height:27px;
}
.tblmainsumlist{
	font-size: 12px;
	font-family: Verdana;
	color: black;
	border-collapse: collapse;
	width:100%;
	margin-top:30px;
}
.tblmainsumlist th{
	text-align: left;
	background-color: #183867;
	color: white;
	padding: 6px;
	height: 27px;
	border: 1px solid gray;
}
.tblmainsumlist td{
	text-align:left;
	background-color:white;
	color:black;
	padding:5px;
	height:27px;
	border:solid 1px rgb(197, 196, 196);
	font-size:11px;
}

.tblmainsumlist input[type="text"]{
	width:100%;
	border:none;
	background:none;
	font-size: 11px;
	font-family: verdana;
	color: black;
}

.buttonFS{
	float:right;
	margin-top:4px;
	margin-right:5px;
}
.DFstask{
	margin-top:5px;
	font-size:19px;
	font-family: Agency FB;
	border-radius: 10px;
	color:#183867;
}
.dateDivtask{
	margin-top:5px;
}
.dateDiv2task{
	padding-top: 5px;
	margin-bottom: 10px;
	padding-bottom: 10px;
	font-weight:normal;
}
.ButInputtask::-webkit-inner-spin-button{
	background-color:#c8c8c8;
	height:24px;
}	
.ButInputtask::-webkit-input-date{
	-webkit-appearance: none;
} 

.ButInputtask{
	width: 125px;
	height: 25px;
	font-size: 11px;
	font-family: Verdana;
	padding-left: 5px;
	box-shadow: none;
	border-radius: 5px;
	border: 1px solid gray;
	margin-left: 5px;
	margin-right: 5px;
	outline-style:none;
}

.isNumeric{
	text-align: right;
}
.reportHolderOR{
	width: 720px;
	height:640px;
	box-shadow: 2px 2px 15px #3A3434;
	margin-left:9px;
	overflow:scroll;
	float:left;
}

.selectFormSawt{
    height: 25px;
    width:94px;
    margin-left: 10px;
}
.monthSawt{
    font-size: 12px;
    font-weight: normal;
    font-family: Verdana;
}
.yearSawt{
    font-size: 12px;
    font-weight: normal;
    font-family: Verdana;
}
.selectMonth{
    width: 126px;
    height: 25px;
    font-size: 11px;
    font-family: Verdana;
    padding-left: 5px;
    box-shadow: none;
    border: 1px solid gray;
    margin-left: 0;
    margin-right: 5px;
    outline-style: none;
}


.multiselect {
    width: 200px;
}
.selectBox {
    position: relative;
    margin-top:2px;
}
.selectBox select {
    width:193px;
    font-weight: bold;
}
.overSelect {
    position: absolute;
    left: 0;
    right: 0; 
    top: 0; 
    bottom: 0;
}
#checkboxes {
    display: none;
    border: 1px solid #c8c8c8;
    border: 1px solid #c8c8c8;
    position: absolute;
    width: 198px;
    background: #fff;
}
#checkboxes label {
    display: block;
    color:#000;
	font-family: Verdana;
	font-size: 12px;
	color: #183867;
	font-weight:bold;
}
#checkboxes label:hover {
    background-color: #1e90ff;
    color:#fff;
    font-weight:bold;
}
.hidden{
    display:none;
}
.colorSelect{
    color:#183867;
    height:25px;
}
.selectAll{
    color:#000;
}
.reportTitle {
	font-size:24px;
	font-family:agency fb2!important;
	color: #c51400;
	float:left;
}
</style>

<?php
	// $typeoftax = $this->available;
    $info = new TblOrganizationInfo();
    $org  = new TblOrganization();
    
    if(Session::getSession('user')){
        $info = DAOFactory::getTblOrganizationInfoDAO()->load(DAOFactory::getTblUserDAO()->load(Session::getSession('user'))->orgInfoId);
        $org  = DAOFactory::getTblOrganizationDAO()->load($info->orgId);
        Session::setSession('infoid', $info->id);
    }
	
?>
<script>
    var expanded = false;
    function showCheckboxes() {
        // alert(showCheckboxes);
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }

    $(document).ready(function() {
        $('#one').click(function(event) {
            if (this.checked) {
                $('.selectAll').each(function() {
                    this.checked = true;
                });
            } else {
                $('.selectAll').each(function() {
                    this.checked = false;
                });
            }
        });
    });
</script>

<title>
	REPORTS
</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/ubServices_titleLogo.png">
<link rel="stylesheet" href="<?php echo URL; ?>public/css/report.css"/>
<form method='post' action='<?php echo URL ?>report/new_salestask' id='form'>
	<div class="mainformitemsum">
		<div class="reportTitle">
            <label class="sbis">SAWT Form</label> 
            <span>
                <select name="sawtForm" class="selectFormSawt">
                    <?php
                    if ($info->typeOfTax == 'vat') {
                        ?>	
                        <option value="form2550m">2550M</option>
                        <option value="form2550q">2550Q</option>
                        <?php
                    } elseif ($info->typeOfTax != 'vat') {
                        ?>
                        <option value="form2551m">2551M</option>
                        <?php
                    }
                    ?>
                    <option value="form1701q">1701Q</option>
                    <option value="form1701">1701</option>
                </select>
            </span>
            <span style="padding-left:5px;">
                <label class="monthSawt">Month:</label>
                <label class="yearSawt hidden">Year:</label>
                <select name="month" class="selectMonth">
                    <?php
                    for ($x = 1; $x <= 12; $x++) {
                        ?>
                        <option value="<?= strtolower(date('Y-' . $x . '-01')) ?>"
                                <?= intval(Date('m')) == $x ? ' selected ' : '' ?>><?= date('F Y', strtotime(date('Y-' . $x . '-01'))) ?></option>
                                <?php
                            }
                            ?>
                </select>
                <select name="quarterSelectSawt" class="quarterWidth hidden">
                    <option value="<?= date('Y-03-d') ?>">First Quarter</option>
                    <option value="<?= date('Y-06-d') ?>">Second Quarter</option>
                    <option value="<?= date('Y-09-d') ?>">Third Quarter</option>
                    <option value="<?= date('Y-12-d') ?>">Fourth Quarter</option>
                </select>
                <input type="number" class="selectYear hidden" name="year" value="<?= date('Y') ?>" required />
            </span>
        </div>
		<div class="buttonFS">
			<input type="button" value="VIEW" class="viewMode addsavebuttonreports" style="margin-right:5px;"/>
			<input type="button" class="FSPrintsalestask printSPS addsavebuttonreports" value="PRINT">
			<input type="button" class="FSPrintsalestask2 exportSalesTask exportButton addsavebuttonreports" value="EXPORT">
		</div>
		<div style="clear:both;"></div>
		<div class="DFstask">
			<div style="float:left;">
                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <span>
                            <select class="monthSawt colorSelect">
                                <option class="selectBg">--Select--</option>
                            </select>
                        </span>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <label for="one"><input type="checkbox" id="one" name="checkboxes[]" class="selectAll" value=""/>Select All</label>
                       <!--?php if (!empty($get1701SawtNames) && isset($get1701SawtNames)) { ?>-->
                            <label class="hmoHospitalSelect">CLIENT NAME</label>
                        <!--?php
                            foreach ($get1701SawtNames as $each) {
                                // if($each['col_type'] == 'HMO'){
                                ?>-->
                                <label><input type="checkbox" id="two" name="hmo_id" class="selectAll" value="<!--?= $each['hmo_id'] ?>"/><!--?= $each['col_type'] == 'HMO' ? $each['name'] : '' ?--></label>

                                <!--?php
                                // }
                            }
                        }-->
                        <!--if ($get1701SawtNames2 && !empty($get1701SawtNames2) && isset($get1701SawtNames2)) {
                            // ECHO '<pre>';
                            // print_r($get1701SawtNames2);
                            ?-->
                           
                            <!--?php
                            foreach ($get1701SawtNames2 as $each) {
                                // if($each['col_type'] == 'Hospital'){
                                ?-->
                              

                                <!--?php
                                //} 
                            }
                        }
                        ?-->
                    </div>
                </div>
            </div>	
			 <div style="float:left;margin-left:4px;">	
				<input type="submit" class="FSGentask searchsalestask addsavebuttonreports" value="GENERATE" id="searchsalestask" disabled>
			</div>
			<div style="clear:both;"></div>
			<div class="lineDivider"></div>
		</div>
		<!--<div class="hmoDivider"></div>-->
	</div>
</form>
<div class="reportHolderContainer trhidden">
	<?php
	// if(!$report){
	?>
		<div class="noSales noclass">
			REPORT IS UNDER DEVELOPMENT.
		</div>
	<?php
	// }
	?>
</div>

<script>

	$('.buttonFS').addClass('hidden');
	$('form').submit(function() {
			$('body').css('overflow', 'hidden');
			$('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/service_loading5.gif" class="loadingimg" /></div>');
			$('.popBack').removeClass('hidden');
		// $('.reportHolderContainer').html(loading);
			$.post(URL + 'report/genSawtForm', 
				{
					startdate: $('input[name="startdate"]').val(), 
					enddate: $('input[name="enddate"]').val()}
				)
				.done(function(returnData) {
					$('.buttonFS').removeClass('hidden');
					$('.reportHolderContainer').html(returnData);
					$('body').css('overflow', 'auto');
					$('.popBack').addClass('hidden');
				}).fail(function() {
					alert('Connection Error!');
			});
			return false;
	});
	
	$('.exportSalesTask').click(function(){
		location = URL + 'report/exportSalesPerService?from='+$('input[name="startdate"]').val()+'&to='+$('input[name="enddate"]').val();
	});
	
	$('.printSPS').click(function(){
		window.print();
	});
	
	/* viewMode codes */
		<?php
		if (isset($_GET['startdate'])) {
			?>
				$('input[name="startdate"]').val('<?= $_GET['startdate'] ?>');
				$('input[name="enddate"]').val('<?= $_GET['enddate'] ?>');
				$('.FSGentask').click();

		<?php
		}
		?>
		$('.viewMode').click(function() {
			
			startdate =($('input[name="startdate"]').val());
			enddate =($('input[name="enddate"]').val());
			
			window.open(URL + 'report/newtab_salesPerService?startdate=' + startdate + '&enddate=' + enddate);
			
			return false;
		});
		
	<?php
	if(!$report){
	?>
		$('.mainformitemsum input').prop('disabled',true);
		// $('.DFs select').prop('disabled',true);
	<?php
	}
	?>
				
</script>

<script>
$(function(){
	$('select[name="sawtForm"]').change(function() {
        form = $(this).val();

        if (form == "form2551m") {
            $('.quarterWidth').addClass('hidden');
            $('.selectYear').addClass('hidden');
            $('.monthSawt').removeClass('hidden');
            $('.selectMonth').removeClass('hidden');
            $('.yearSawt').addClass('hidden');
        }
		if (form == "form2550m") {
            $('.quarterWidth').addClass('hidden');
            $('.selectYear').addClass('hidden');
            $('.monthSawt').removeClass('hidden');
            $('.selectMonth').removeClass('hidden');
            $('.yearSawt').addClass('hidden');
        }
        if (form == 'form1701q') {
            $('.selectMonth').addClass('hidden');
            $('.selectYear').addClass('hidden');
            $('.monthSawt').removeClass('hidden');
            $('.yearSawt').addClass('hidden');
            $('.quarterWidth').removeClass('hidden');
        }
		if (form == 'form2550q') {
            $('.selectMonth').addClass('hidden');
            $('.selectYear').addClass('hidden');
            $('.monthSawt').removeClass('hidden');
            $('.yearSawt').addClass('hidden');
            $('.quarterWidth').removeClass('hidden');
        }
        if (form == "form1701") {
            $('.quarterWidth').addClass('hidden');
            $('.monthSawt').addClass('hidden');
			$('.selectMonth').addClass('hidden');
            $('.selectYear').removeClass('hidden');
            $('.yearSawt').removeClass('hidden');
        }
    });
});
</script>
