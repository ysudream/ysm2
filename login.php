<?php

?>

<html style='  overflow-x: hidden; overflow-y: auto;'>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<script>
	
	// Navigation Menu Shift
	function join_display(){
		document.getElementById('join_form').style.display='flex';
		document.getElementById('login_form').style.display='none';
	}
	function login_display(){
		document.getElementById('join_form').style.display='none';
		document.getElementById('login_form').style.display='flex';
	}
   

	</script>
	<script>
//JQuery

	$(document).ready(function(){
		$("#submit_ysm").click(function(){

			var idcheck = $("#id_input").val();
			var pwcheck = $("#pw_input").val();
			var	namecheck = $("#name_input").val();
			
			var data1 = $("#ri1").val();
			var data2 = $("#ri2").val();
			var data3 = $("#ri3").val();
			var data4 = $("#ri4").val();
			var data5 = $("#ri5").val();
			var data6 = $("#ri6").val();
			var data7 = $("#ri7").val();
			var data8 = $("#ri8").val();
			var data9 = $("#ri9").val();
			var data10 = $("#ri10").val();
		
			var raw_igo = ['',$("#rith1"),$("#rith2"),$("#rith3"),$("#rith4"),$("#rith5"),$("#rith6"),$("#rith7"),$("#rith8"),$("#rith9"),$("#rith10")];
			var igo = ['',data1,data2,data3,data4,data5,data6,data7,data8,data9,data10];
			var trigger =0;

			for (i=1;i<11;i++){
				raw_igo[i].removeClass('table-danger');
				if (igo[i].match(/킅|엘|롯|기|엔|넥|한|두|슼|삼/g) == null){
					if (trigger == 1){ trigger--;}
					raw_igo[i].addClass('table-danger');
					raw_igo[i].addClass('is-invalid');
					$("#teamrank_input_info").removeClass('text-muted');
					$("#teamrank_input_info").addClass('text-danger');
					$("#alerting_bar").fadeIn();
					$("#alerting_bar").html("팀명을 정확히 입력해주세요.")
					trigger++;
				}
				
			}
			/*
			이거 Switch문으로 바꿔야
			*/
			if (idcheck =='' && pwcheck == ''){
				$("#alerting_bar").fadeIn();
				$("#alerting_bar").html("양식을 모두 채워주세요.");
				$("#id_input").addClass('is-invalid');
				$("#pw_input").addClass('is-invalid');
			}else if(idcheck != '' && pwcheck == ''){
				$("#alerting_bar").fadeIn();
				$("#alerting_bar").html("비밀번호를 입력해주세요.")
				$("#id_input").removeClass('is-invalid')
				$("#pw_input").addClass('is-invalid');
			}else if(idcheck == '' && pwcheck != ''){ 
				$("#alerting_bar").fadeIn();
				$("#alerting_bar").html("아이디를 입력해주세요.")
				$("#id_input").addClass('is-invalid');
				$("#pw_input").removeClass('is-invalid');
			}
			else if(namecheck == ''){
				$("#alerting_bar").fadeIn();
				$("#alerting_bar").html("이름을 입력해주세요.")
				$("#id_input").removeClass('is-invalid');
				$("#pw_input").removeClass('is-invalid');
				$("#name_input").addClass('is-invalid');
			}else if(trigger ==0){

			$.post("ysm_join.php",
			{new_id:idcheck,
			new_pw:pwcheck,
			new_name:namecheck,
			ri1:data1,
			ri2:data2,
			ri3:data3,
			ri4:data4,
			ri5:data5,
			ri6:data6,
			ri7:data7,
			ri8:data8,
			ri9:data9,
			ri10:data10
			},
			function(response,status){
				alert("RESULT IS:"+response+"nnStatus:"+status);
			});
			}
		});
	});
	</script>
	
	<!--LOGIN MAIN PAGE-->
	<div class='row no-gutter h-100' id='login_form' style='display:flex;'>
		<div class='col align-self-center' style='background: url('img/login1.jpg') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;'>
			<div class='container'>
				<div class='row justify-content-center'><p class='h2 font-weight-bold'>YASILMO 2018</p>
				</div>
				<div class='row justify-content-center'><p class='h6 text-muted'> Version Alpha</p>
				</div>
			</div>
		</div>

		<div class='col bg-dark'>
			
			<div class='container h-100'>

				<div class='row justify-content-center h-100'>
				
					<div class='col-5 align-self-center card form-group p-4'>
						<p class='h3 font-weight-bold'>LOGIN</p>
						<label for='identify'>Name</label>
						<input type='text' id='identify' class='form-control'>
						<label for='pass' class='mt-2'>Password</label>
						<input type='password' id='pass' class='form-control'>
						<input type='submit' class='btn btn-primary mt-2' value='Login'>
						<p class='h6 mt-3 text-muted'>Not a member? <a href='#' onclick='join_display()'>JOIN IN</a></p>
					</div>

			
				</div>
			</div>
			
		</div>
	</div>
	<!--JOIN IN-->
	<div class='row no-gutter h-100 bg-light justify-content-center' style='display:none;' id='join_form'>
		<div class='align-self-center'>
			<div class='card p-4'>
				<div class="alert alert-danger" role="alert" id='alerting_bar' style='display:none;'>ALERT BAR</div>
				<button type="button" class="close align-self-end" aria-label="Close" onclick='login_display()'><span aria-hidden="true">&times;</span></button>
				<p class='h2 font-weight-bold mb-3'>SIGN UP</p>
				
				<form action='/' method='post' enctype='multipart/form-data'>
					<div class='form-row'>
						<div class='form-group col-sm-6'>
							<label for='id_input'>Username</label>
							<input type='text' class='form-control' id='id_input' name='new_id'>
						</div>
						<div class='form-group col-sm-6'>
							<label for='pw_input'>Password</label>
							<input type='password' class='form-control' id='pw_input' aria-describedby='pwhelp' name='new_pw'>
						</div>
					</div>
					
					<div class='form-row'>
						<div class='form-group col-sm-6'>
							<label for='name_input'>Name</label>
							<input type='text' class='form-control' id='name_input' name='new_name'>
						</div>
					</div>
					<div class='form-row'>
						<div class='form-group col-sm-6'>
							<p class='h6'>Profile Picture</p>
							<div class="custom-file">
						  		<input type="file" class="custom-file-input" id="customFile">
						  		<label class="custom-file-label" for="customFile" aria-describedby='file_help'></label>
						  		<small id='file_help' class='form-text text-muted ml-1'>500x500 JPG ONLY</small>
							</div>
						</div>
					</div>

					<div class='form-row mt-3 ml-1'>
						<div class='form group'>
							<p class='h6'>Team Ranking</p>
							<table class='table table-bordered table-sm' style='width:65rem;table-layout: fixed;' cellpadding='0'>
									<thead class='border-info thead-dark'>
										<tr class='table'><th scope='col'>순위</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>
									</thead>
									<tr class='table'><th scope='col'>예상</th>
										<th id='rith1'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri1' id='ri1'></th>
										<th id='rith2'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri2' id='ri2'></th>
										<th id='rith3'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri3' id='ri3'></th>
										<th id='rith4'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri4' id='ri4'></th>
										<th id='rith5'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri5' id='ri5'></th>
										<th id='rith6'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri6' id='ri6'></th>
										<th id='rith7'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri7' id='ri7'></th>
										<th id='rith8'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri8' id='ri8'></th>
										<th id='rith9'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri9' id='ri9'></th>
										<th id='rith10'><input type='text' size='4' maxlength='1' style='border:0;background: transparent;' name='ri10' id='ri10'></th></tr>
							</table>
							<p class='h6 text-muted' id='teamrank_input_info'>입력 예시) 킅/엘/롯/기/엔/넥/한/두/슼/삼</p>
						</div>
					</div>
					<div class='form-row mt-2'>

						<div class='form-group col-sm-6'>
						<input type='button' class='btn btn-primary align-self-end' value='JOIN' id='submit_ysm'>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>

</html>
