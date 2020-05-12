<?php
	$con = mysqli_connect("localhost", "root", "", "2020_aptitude_madan");

	$response = array();

	$sql = "SELECT category.*, GROUP_CONCAT(question.q_id) as q_ids FROM `question` LEFT JOIN category ON category.c_id = question.c_id GROUP BY question.c_id ";
	//echo $sql;
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0){
		$data = array();
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			//echo $i++;
			$cat = array();
			$cat['c_name'] = $row['c_name'];
			$cat['c_id'] = $row['c_id'];

			//temporary question storage
			$qa_temp = array();
			$sql1 = "SELECT * FROM `question` WHERE q_id IN (".$row['q_ids'].")";
			$result1 = mysqli_query($con, $sql1);
			while($row1 = mysqli_fetch_assoc($result1))
				$qa_temp[$row1['q_id']] = $row1;

			$question = array();
			$q_ids = explode(",", $row['q_ids']);

			//Store Question ID
			$s_q_id = array();
			while (sizeof($s_q_id) != 10) {
				$q_id = mt_rand(0, sizeof($q_ids) -1);
				if(!in_array($q_id, $s_q_id)){
					array_push($s_q_id, $q_id);
					//array_push($s_q_id, $q_ids[$q_id]);
				}
			}
			//print_r($q_ids);
			//echo min($q_ids); 	echo "<br/><br/>";
			//print_r($q_ids[0]); exit
			//echo sizeof($s_q_id);
			for($i=0; $i<sizeof($s_q_id); $i++){
				$s_q_id[$i] += min($q_ids);
			}
			//echo json_encode($s_q_id); echo "<br/><br/>";
			$sql2 = "SELECT * FROM `question` WHERE q_id IN (".implode(',', $s_q_id).")";
			//echo $sql2;
			$result2 = mysqli_query($con, $sql2);
			while ($row2 = mysqli_fetch_assoc($result2)) {
				array_push($question, $row2);
			}
			//echo json_encode($question); echo "<br/><br/><br/><br/>";
			$cat['questions'] = $question;
			array_push($data, $cat);
			//print_r(json_encode($cat)); echo "<br/>test<br/>";
			//array_push(array, var)
		}
		$response['success'] = '1';
		$response['message'] = 'Question category available.';
		$response['data'] = $data;
	}else{
		$response['success'] = '0';
		$response['message'] = 'No category available in system.';
	}

	echo json_encode($response);

?>