	<?php
	if (isset($this->css)) {
		foreach ($this->css as $css) {
			echo '<link rel="stylesheet" href="' . URL . 'views' . $css . '"/>';
		}
	}
	?>
	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery.redirect.min.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery.price_format.1.8.js"></script>
	<script src="<?php echo URL; ?>public/js/jquery.number.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery.maskedinput.js"></script>
	<script>
		URL = '<?php echo URL; ?>';
	</script>
	<!--<script src="<?php echo URL; ?>/public/views/report/form1701q/form1701q-001/custom.js" type="text/javascript"></script>-->
	<!--
	<script>taxyears = [<?php //echo Controller::getTaxableYears()?>];</script>-->
	<script src="<?php echo URL; ?>public/js/custom.js"></script>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/jquery-ui.css" type="text/css"/>

        <?php
	if (isset($this->js)) {
		foreach ($this->js as $js) {
			echo '<script src="' . URL . 'views' . $js . '"></script>';
		}
	}
	?>