<?php
error_reporting(E_ALL ^ E_NOTICE);
//require_once 'excel_reader2.php';
$file="sample.xls";
$new = 0;
ini_set('max_execution_time', 123456);
if(isset($_FILES[file])){
	$file = $_FILES['file']['name'];
	$ext = explode('.',$file);
	$ext = end($ext);
	if($ext != 'xlsx'){
		echo 'File Error!';
		exit;
	}
	$file = 'haha.'.$ext;
	$_FILES['file']['name'] = $file;
	if(copy($_FILES['file']['tmp_name'], $file)){
		echo 'success!';
	}
	$new = 1;
}
//$data = new Spreadsheet_Excel_Reader($file);
//require_once '../../../../include_dao.php';
?>
<html>
<head>
<style>
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:12px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align:bottom;
}
table.excel tbody th {
	text-align:center;
	width:20px;
}
table.excel tbody td {
	vertical-align:bottom;
}
table.excel tbody td {
    padding: 0 3px;
	border: 1px solid #EEEEEE;
}
</style>
</head>

<body>
<form enctype="multipart/form-data" 
  action="" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
  file:<input type="file" name="file" />
  <br/>
  <!--<tr>
  <td>row</td>
  <td><input type="text" name="row" value="<?php echo isset($_POST['row']) ? $_POST['row'] : ''; ?>"/></td>
  </tr>-->
  <input type="submit" value="Upload" />
  </form>
  <!--
  <form  action="" method="get">
  <table width="600">
  <tr><
  <td>Coordinate</td>
  <td><input type="text" name="c" placeholder="c"/></td>
  <td><input type="text" name="r" placeholder="r"/></td>
  <td><input type="submit" value="Upload" /></td>
  </tr>
  </table>
  </form>-->
<?php //echo $data->dump(true,true);
	
	/*$projectID = $data->value(1,1) ;
	$projectName =  $data->value(1,2) ;*/
	
	//$project = DAOFactory::getTblProjectActivitiesDAO()->queryByProjectId($projectID);
	//echo '<>';
	if(isset($_FILES[file])){
		include 'simplexlsx.class.php';
		$file = $_FILES['file']['name'];
		$xlsx = new SimpleXLSX($file);
		//print_r( $xlsx->rows() );
		/*
		//////////////////////see methods here
		$class_methods = get_class_methods($xlsx);
		foreach ($class_methods as $method_name) {
			echo $method_name."<br>";
		}
		*/
		echo '<hr/>';
		//echo $xlsx->sheets();
		$sheets = $xlsx->sheets();
		//echo count($sheets[1]);
		$data = $xlsx->rows();
		$rows = count($data);
		$count = 1;
		echo '<table class="excel">';
		echo '<tr>';
		echo '<th>'.$count.'</th>';
		foreach($data[0] as $each3){
			echo '<th>'.$each3.'</th>';
		}
		echo '</tr>';
		/*
		echo '<tr>
			<th>#</th>
			<th>Project ID</th>
			<th>Activity ID</th>
			<th>Activity</th>
			<th>Activity Group<br/> Description</th>
			<th>Group Group<br/> ID</th>
			<th>Status</th>
		</tr>';
		*/
		
		
		unset($data[0]);
		foreach($data as $each){
			//if($each[0] != '' && $each[1] != '' && $each[2] != '' && $each[3] != '' && $each[4] != '' ){
				//$projectId = $each[0];
				//$activityId = $each[1];
				
				//$project = DAOFactory::getTblClientProjectDAO()->queryByProjectId($projectId);
				
				//$activity = TblProjectActivitiesMySqlExtDAO::getActivityByProjectId($projectId, $activityId);
				//$actGroup = DAOFactory::getTblGroupActivityDAO()->queryByGroupId($each[4]);
				//$purpose = DAOFactory::getTblActivityPurposeDAO()->queryByPurpose($each[0]);
				$count++;
				/*
				echo '<tr>';
				echo '<td>'.$count.'</td>';
				echo '<td>'.$each[0].'</td>';
				echo '<td>'.$each[1].'</td>';
				echo '<td>'.$each[2].'</td>';
				echo '<td>'.$each[3].'</td>';
				echo '<td>'.$each[4].'</td>';
				echo '<td>';*/
					echo '<tr>';
					echo '<td>'.$count.'</td>';
				foreach($each as $each2){
					echo '<td>'.$each2.'</td>';
				}
				echo '</tr>';
			//}
		}
		echo '</table>';
		//echo $xlxs->value();
		//echo $data;
	}
	//print_r();
	/*//////////////////////////////////
if(isset($_FILES[file])){
$column = isset($_GET['c'])? $_GET['c'] : 1;
	$row = isset($_GET['r'])? $_GET['r'] : 1;

	if($data->value($column,$row) == ''){
		echo 'wla';
	} else {
		//echo $data->value($column,$row);
	}
	echo '<hr/>';
	//echo $data->value($row,$column);
	echo '<hr/>';
	$max = $data->rowcount();
	$width = $data->colcount();
	echo 'row: '.$max;
	echo '<br>';
	echo 'column: '.$width;
	echo '<hr/>';
	$title = 'asd';
	$project_id = 0;
	echo '<table border="1">';
	echo '<tr><th>#</th><th>Project Id</th><th>Project Name</th><th>act number</th><th>purpose</th><th>status</th></tr>';

	for($i=1; $i<=$max; $i++){
		/*if($title != $data->value($i,1) && $data->value($i,1) != ''){
			$title = $data->value($i,1);
			$project = DAOFactory::getTblClientProjectDAO()->queryByProjectName($title);
			$project_id = $project[0]->id;
		}/*/
		/*if($data->value($i,1) != 'Total' && $data->value($i,2) != ''){
			echo '<tr>';
			echo '<td>'.$i.'</td>';
			echo '<td>'.$project_id.'</td>';
			echo '<td>'.$title.'</td>';
			for($j = 2; $j<=$width; $j++){
				echo '<td>'.$data->value($i,$j).'</td>';
			}
			$activity = DAOFactory::getTblActivityPurposeDAO()->queryByPurpose($data->value($i,3));
			$projectAct = new TblProjectActivitie();
			$projectAct->actNumber = $data->value($i,2);
			$projectAct->projectId = $project_id;
			$projectAct->actId = $activity[0]->id;
			echo '<td>';
			print_r($projectAct);
			echo '</td>';
			echo '<td>';
			//echo $return = DAOFactory::getTblProjectActivitiesDAO()->insert($projectAct);
			echo '</td>';
			echo '</tr>';
		}*/
		/*
		$project = DAOFactory::getTblClientProjectDAO()->queryByProjectId();
		if(!empty($project)){
			$project = $project[0];
			$act = new TblProjectActivitie();
			echo '<tr>';
			echo '<td>'.$i.'</td>';
			echo '<td>'.$data->value($i,1).'</td>';
			$activity = DAOFactory::getTblActivityPurposeDAO()->queryByPurpose($data->value($i,3));
			
			if(empty($activity)){
				$act1 = new TblActivityPurpose();
				$act1->purpose = $data->value($i,3);
				//$act1->id = DAOFactory::getTblActivityPurposeDAO()->insert($act1);
				$activity = $act1;
			} else {
				$activity = $activity[0];
			}
			echo '<td>'.$activity->purpose.'</td>';
			echo '</tr>';
			
			$act->actNumber = $data->value($i,1);
			$act->projectId = $project->id;
			$act->actId = $activity->id;
			//DAOFactory::getTblProjectActivitiesDAO()->insert($act);
		}
		*/
		/*///////////////////////////////////////////////////////////
		if($data->value($i,1) == ''){
			$projectID = $projectID;
		} else {
			$projectID = $data->value($i,1);
		}
		
		if($data->value($i,2) == ''){
			$projectName = $projectName;
		} else {
			$projectName = $data->value($i,2);
		}
		
		if($data->value($i,3) == '' || $data->value($i,4) == ''){
		
		} else {
			$project = DAOFactory::getTblClientProjectDAO()->queryByProjectId($projectID);
			//$project = DAOFactory::getTblProjectActivitiesDAO()->queryByProjectId($projectID);
			
			if(empty($project)){
			echo '<tr>';
			echo '<td colspan="6">Walang '.$projectID.'</td>';
			echo '</tr>';
			} else {
				$activityIdExist = TblProjectActivitiesMySqlExtDAO::actNumberExist($project[0]->id,$data->value($i,3));
				$project = $project[0];
				$act = new TblProjectActivitie();
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$projectID.'</td>';
				echo '<td>'.$projectName.'</td>';
				
				$activity = DAOFactory::getTblActivityPurposeDAO()->queryByPurpose($data->value($i,4));
				
				if(empty($activity)){
					$act1 = new TblActivityPurpose();
					$act1->purpose = $data->value($i,4);
					$act1->id = DAOFactory::getTblActivityPurposeDAO()->insert($act1);
					$activity = $act1;
				} else {
					$activity = $activity[0];
				}
				echo '<td>'.$data->value($i,3).'</td>';
				echo '<td title="'.$activity->id.'">'.$activity->purpose.'</td>';
				
				$act->actNumber = $data->value($i,3);
				$act->projectId = $project->id;
				$act->actId = $activity->id;				
				$act->grpId = 0;
				if($activityIdExist){
					echo '<td>already exist!</td>';
				} else {
					$paId = DAOFactory::getTblProjectActivitiesDAO()->insert($act);
					
					echo '<td>'.(($paId) ? 'saved!' : 'failed').'</td>';
				}
				echo '</tr>';
				
			}
			/*
			echo '<tr>';
			echo '<td>'.$projectID.'</td>';
			echo '<td>'.$projectName.'</td>';
			echo '<td>'.$data->value($i,3).'</td>';
			echo '<td>'.$data->value($i,5).'</td>';
			echo '</tr>';*/
			/*//////////////////////////////////////////////////////
		}
	}
}
	echo '</table>';
	
	/* see methods
	$class_methods = get_class_methods($data);
	foreach ($class_methods as $method_name) {
		echo $method_name."<br>";
	}*/
	//echo $data->getSheet(0)->getCell('A1')->getCalculatedValue()

//echo $data->dump(true,true);
if($new > 0){
	unlink($file);
}
 ?>
</body>
</html>