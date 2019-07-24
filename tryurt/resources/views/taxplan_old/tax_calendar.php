<?php
	$data = false;
	// require_once 'tax_calendar/sql.php';
?><style>
.taxCalendarHolder{
	width:100%;
	margin:0;
	padding:0;
}
.taxCalCont{
	width:1000px;
	margin:auto;
	height:820px;
	background:#fff;
	margin-top: -31px;
	padding-top: 31px;
	margin-bottom: 25px;
}
.taxCalCont2{
	box-shadow: 0px 0px 23px 5px #c8c8c8;
	width:365px;
	/* margin:auto; */
	float:right;
	margin-right:25px;
	margin-top:25px;
}
.taxCalCont3{
	width: 950px;
    margin: auto;
    border:2px solid #183867;
    height: 97%;
    border-radius: 5px;
}
.divTableCal{
	width:365px;
	borders:1px solid #000;
	float:left;
}
.topBlue{
	height:8px;
	/* background:rgb(0, 100, 255); */
	background:rgb(59, 130, 243);
}
.topViolet{
	height:13px;
	background:rgb(69, 70, 225);
	margin-top:5px;
}
.topBlueGreen{
	height:17px;
	background:rgb(0, 128, 123);
}
.taxCalText{
	position: absolute;
	/* color: #9CD8EE; */
	color: #93DFFB;
	font-size: 24px;
	margin-top: 14px;
	margin-left:92px;
	font-weight: bold;
	text-shadow: 1px 0px 0px #fff;
	font-family:Cambria;
}
.dateHolder{
	margin-top: 10px;
	padding: 15px;
	width: 321px;
	height: 41px;
	margin-left: 7px;
	background-image: url('<?=URL?>public/images/ribbonOrig2.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
.tblCal{
	width: 349px;
	margin-top: 10px;
	padding: 23px;
	margin-left: 8px;
}
.tblCal tr td:nth-child(1) a{
	color: red;
}
.tdTextCenter:hover{
	background:#c8c8c8;
	cursor:pointer;
}
.linkDate{
	text-decoration:none;
	color: #183867;
	font-weight:bold;
	font-family:Arial;
	font-size:13px;
}/* 
.linkDate:hover{
	text-decoration:underline;
	font-weight:bold;
	color:#000;
}  
.linkDateRed:hover{
	text-decoration:underline;
	font-weight:bold;
	color:#000;
} */
.linkDateRed{
	text-decoration:none;
	color:red;
	font-weight:bold;
	font-family:Arial;
	font-size:13px;
}
.thText{
	font-family: Arial;
	font-size: 15px;
	font-weight:bold;
}
.tdTextCenter{
	text-align:center;
	padding: 11px;
}
.buttonleftRight{
	background:none;
	border: none;
	color: transparent;
	font-size: 16px;
	font-family: Verdana;
	font-weight: bold;
	cursor:pointer;
	outline-style:none;
	width:15px;
}
.monthText{
	margin-left:20px;
	color: #fff;
	font-size: 17px;
	/* font-family: Verdana; */
	font-family: Cambria;
	font-weight:bold;
}
.yearText{
	color: #fff;
	font-size: 17px;
	/* font-family: Verdana; */
	font-family: Cambria;
	margin-right:20px;
	font-weight:bold;
}
.birDeadlines{
	width: 500px;
	margin: auto;
	font-family: Verdana;
	font-size: 12px;
	margin-top: 23px;
	margin-left:25px;
}
.deadLineInfo li{
	padding-top:14px;
}
.deadLineInfo2{
	
}
.reminder{
	margin: 20px 20px;
	text-align: justify;
    font-size: 11px;
    font-family: Verdana;
	font-style: italic;
	font-weight: bold;
}/* 
a:hover{
	text-shadow:none;
    color: none !important;
    font-weight: none;
    border: none;
} */
.hasHoliday a{
	color: red !important;
}
</style>
<?php	
	$year = isset($_GET['date']) ? date('Y',strtotime($_GET['date'])) : date('Y') ;
	$month = isset($_GET['date']) ? date('m',strtotime($_GET['date'])) : date('m') ;
	
	$groupResult = $this->groupResult;
	$deadlines = $this->deadlines;
	$holiday = $this->holiday;
	
	$date = date('Y-m-d',strtotime($year.'-'.$month.'-01'));
	$lastmonth = date('Y-m-d',mktime(0, 0, 0, date("m",strtotime($date))-1, date("d",strtotime($date)),   date("Y",strtotime($date))));
	$nextmonth = date('Y-m-d',mktime(0, 0, 0, date("m",strtotime($date))+1, date("d",strtotime($date)),   date("Y",strtotime($date))));
?>
<form>	
	<div class="taxCalendarHolder">
		<div class="taxCalCont">
			<div class="taxCalCont3">
				<div style="float:left;">
					<div class="birDeadlines">
						<label style="font-size:17px;"><u>BIR Deadlines</u></label>
						<!--DEADLINE ON OR BEFORE THE 10th DAY OF THE MONTH-->
						<?php
							if(isset($groupResult) && !empty($groupResult)){
								foreach($groupResult as $group){
						?>
							<div class="deadlineView" date="<?= $group['deadline'] ?>">
								<ul class="deadLineInfo" style="padding:0px;">
								<?php
									$forms = getdeadlinesByDate($group['deadline'], $deadlines); 
									foreach($forms as $form){
										$forDate = $form['year'];
										if($form['month'] != 0){
											$forDate = date('F Y',strtotime($forDate.'-'.$form['month'].'-01'));
										}
								?>
									<li> <?= date('F d l',strtotime($form['deadline'])) ?> -
										<b><?= $form['code'] ?></b> for <?= $forDate ?><br/>
										<sup> <?= $form['description'] ?> </sup>
									</li>
								<?php
									}
								?>
								</ul>
							</div>
						<?php
								}
							}
						?>
					</div>
					
					<br>
					<div class="reminder">
						<label style="color:red;">REMINDER:</label><br/><br/>
						Deadlines which fall on Weekends, Holidays and Non Working Days 
						<br>shall automatically be moved to the next working day.
					</div>
				</div>
				
				
				<div class="taxCalCont2">
					<div class="divTableCal">
						<div class="topBlue"></div>
						<div class="topViolet"></div>
						<div class="topBlueGreen"></div>
						<div class="topBlue" style="margin-top:5px;"></div>
					</div>
					<div class="taxCalText">TAX CALENDAR</div>
					<div style="clear:both;"></div>
					<div class="dateHolder">
						<div style="float:left;margin-top:14px;">
							<input type="button" value="<?= $lastmonth ?>" class="buttonleftRight changeDate" style="margin-left:-5px;">
							<label class="monthText"><?php echo date('F',strtotime($date))?></label>
						</div>	
						<div style="float:right;margin-top:4px;">
							<label class="yearText"><?php echo date('Y',strtotime($date))?></label>
							<input type="button" value="<?= $nextmonth ?>" class="buttonleftRight changeDate" style="float:right;margin-right:-5px;">
						</div>	
						<div style="clear:both;"></div>
					</div>
					<?php
						$day = '';
						if ($day == '1'){
							$day++;
						}
					?>
					<div>
						<table class="tblCal">
							<tr>
								<th class="thText" style="color:red;">S</th>
								<th class="thText">M</th>
								<th class="thText">T</th>
								<th class="thText">W</th>
								<th class="thText">T</th>
								<th class="thText">F</th>
								<th class="thText">S</th>
							</tr>
							<tr>
								<th colspan="7" style="background:#183867;padding:2px;"></th>
							</tr>
					<?php
						$firstDay = date('N',strtotime($year . '-'.$month.'-01'));
						if($firstDay != 7){
							echo '<tr>';
							for($x = 0; $x < $firstDay; $x++){
								echo '<td></td>';
							}
						}
						for($d = 1; $d <= date('t',strtotime($date)); $d++){
							$dateCalendar = date('Y-m-d',strtotime($year . '-'.$month.'-'.$d));
							if(date('D',strtotime($dateCalendar)) == 'Sun'){
								echo '<tr>';
							}
							$hasHoliday = hasHoliday($holiday,$dateCalendar);
						?>
							<td class="tdTextCenter <?= $hasHoliday ? 'hasHoliday' : '' ?>" >
								<a class="linkDate prePare" value="<?= $dateCalendar ?>">
									<?= $d ?>
								</a>
								</br>
								<?php
									$forms = getdeadlinesByDate($dateCalendar, $deadlines); 
									if(isset($forms) && !empty($forms)){
								?>
									<label class="linkDate prePare" style="font-size: 8px;">
								<?php
										foreach($forms as $form){
											echo preg_replace('/\bForm\b/', '',$form['code']);
											// echo $form['code'];
											echo '<br/>';
										}
								?>
									</label>
								<?php 
									}
								
								?>
							</td>
						<?php
							if(date('D',strtotime($dateCalendar)) == 'Sat'){
								echo '</tr>';
							}
						}
						?>
						</table>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
</form>
<script>
	$(function(){
		// $('.birDeadlines').addClass('hidden');
		/* 
		$('.tblCal tbody tr td').click(function(){
			myDate = $(this).find('a').attr('value');
			if(typeof myDate === 'undefined'){
				return false;
			}
			$('.deadlineView').addClass('hidden');
			$('.birDeadlines').addClass('hidden');
			if($('.birDeadlines').find('div[date="'+myDate+'"]').length != 0){
				$('div[date="'+myDate+'"]').removeClass('hidden');
				$('.birDeadlines').removeClass('hidden');
			}
		});
		 */
		$('.changeDate').click(function(){
			myDate = $(this).val();
			location = '?date='+myDate;
		});
	});
</script>
<?php
	function getdeadlinesByDate($date, $deadlines){
		if($deadlines){
			$array = array();
			foreach($deadlines as $deadline){
				if($deadline['deadline'] == $date){
					$array[] = $deadline;
				}
			}
			return !empty($array) ? $array : false;
		}
		return false;
	}
	function hasHoliday($holidays,$date){
		if($holidays){
			$array = array();
			foreach($holidays as $holiday){
				if($holiday['date'] == $date){
					$array[] = $holiday;
				}
			}
			return !empty($array) ? $array : false;
		}
		return false;
	}