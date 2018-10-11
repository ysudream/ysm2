<?php
include 'connect.php';

/*
 * Fetching Join Information from login.php
 * Team Ranking will be trimmed as INT with specific order due to subtraction of abs(), which will be the main method of ranking data. 
 */

	// Basic Information (METHOD: POST)
	$new_id = $_POST["new_id"];
	$new_pw = $_POST["new_pw"];
	$new_name = $_POST["new_name"];

	// password encryption
	$hash_pw = password_hash($new_pw,PASSWORD_DEFAULT);

	// Rank Prospect Information
	$one =	$_POST["ri1"];
	$two =	$_POST["ri2"];
	$three=	$_POST["ri3"];
	$four =	$_POST["ri4"];
	$five =	$_POST["ri5"];
	$six =	$_POST["ri6"];
	$seven=	$_POST["ri7"];
	$eight =$_POST["ri8"];
	$nine = $_POST["ri9"];
	$ten =	$_POST["ri10"];

	//Profile Image
	$pic_dir='/img';
	$target_file=$pic_dir.basename($_FILES["customfile"]['name']);
	$allowed_ext=array('jpg','jpeg','png','gif');
	$profile_picture = $_FILES[""]["name"]
	
	//img variables
	$error= $_FILES['customfile']['error'];
	$name = $_FILES['customfile']['name'];


	// Ranking Array -> This will be replaced as ranking number using array_search()
	// Page will skip fetching manual team rank data, as this page will use fixed rank
	// REPLACE Korean words with ENG Alias
	// METHOD: str_replace()
	
	$ranking = array("",$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten);
	$rank_ko = array("킅","엘","롯","기","엔","넥","한","두","슼","삼");
	$rank_eng = array("KT","LG","LT","KI","NC","NX","HW","DO","SK","SM");
	
	$eng_ranking = str_replace($rank_ko, $rank_eng, $ranking);
	/*  Trim data
	 *	Team Order => 킅엘롯기엔넥한두슼삼
	 *	Algorithm => Find Team->Lable Ranking->Place in Order
	 */

	$rkt = array_search("KT",$eng_ranking);
	$rlg = array_search("LG",$eng_ranking);
	$rlt = array_search("LT",$eng_ranking);
	$rki = array_search("KI",$eng_ranking);
	$rnc = array_search("NC",$eng_ranking);
	$rnx = array_search("NX",$eng_ranking);
	$rhw = array_search("HW",$eng_ranking);
	$rdo = array_search("DO",$eng_ranking);
	$rsk = array_search("SK",$eng_ranking);
	$rsm = array_search("SM",$eng_ranking);

	$pre_input = $rkt.$rlg.$rlt.$rki.$rnc.$rnx.$rhw.$rdo.$rsk.$rsm;
	$input_ranking = str_replace("10","t",$pre_input); //replace 10 with t

	// Check for ID and NAME usage
	

	// INSERT USER DATA QUERY
	$sql = "INSERT INTO users (num,id,pass,name,ranks)
	VALUES ('','".$new_id."','".$hash_pw."','".$new_name."','".$input_ranking."')";
	if(mysqli_query($query,$sql)){
		echo"User Data Input Success";
	}else{
		echo"error:".$sql."<br>".mysqli_error($query);
	}
	



?>