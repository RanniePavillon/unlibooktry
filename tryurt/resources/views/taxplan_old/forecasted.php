<style>
.taxPlanHolder{
	width:1000px;
	margin:auto;
	height:auto;
	background:#fff;
	margin-top: -31px;
	padding-top: 31px;
	padding-bottom: 25px;
	margin-bottom: 25px;
}
.currentCont{
	width: 950px;
    margin: auto;
    border:2px solid #183867;
    height:860px;
    border-radius: 5px;
}
</style>
<link rel="stylesheet" href="<?= URL?>views/taxplan/css/forecasted.css" type="text/css">
<div class="taxPlanHolder">
	<div class="currentCont">
		<div style="margin:23px 10px;font-family:agency fb2;">
			<?php
				require_once  'views/report/forms/preview/preview_mode.php';
			?>
		</div>
	</div>
</div>