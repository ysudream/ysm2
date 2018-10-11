<?php

?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--BOOTSTRAP SRC--><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!--CHART.JS SRC--><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
<script>
	
	// Navigation Menu Shift
	function dashboard_display(){
		document.getElementById('main-dashboard').style.display='block';
		document.getElementById('news-dashboard').style.display='none';
	}
	function news_display(){
		document.getElementById('main-dashboard').style.display='none';
		document.getElementById('news-dashboard').style.display='block';
	}
	function score_table_normal(){
		document.getElementById('score-normal').style.display='block';
		document.getElementById('score-normal-icon').style.display='block';
		document.getElementById('score-modify').style.display='none';
		document.getElementById('score-modify-icon').style.display='none';
	}
	function score_table_modify(){
		document.getElementById('score-normal').style.display='none';
		document.getElementById('score-normal-icon').style.display='none';
		document.getElementById('score-modify').style.display='block';
		document.getElementById('score-modify-icon').style.display='block';
	}

</script>
	
		<div class='row no-gutters h-100'>
			<nav class='col-sm-1 p-3 mb-2 bg-dark text-white h-100 sticky-top'>
				<ul class='nav flex-column'>
					<li class='nav-item'>
						<a class='nav-link active text-white font-weight-bold' href='#' onclick='dashboard_display()'>DAHSBOARD</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link active text-white font-weight-bold' href='#' onclick='news_display()'>GRAPH</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link active text-white font-weight-bold' href='#' onclick=''>NEWS</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link active text-white font-weight-bold' href='#' onclick=''>MYINFO</a> 
					</li>
				</ul>
			</nav>

	<!--MAIN CONTENT-->

			<!--MAIN DASHBOARD-->
			<main class='col-11 p-3 mb-2 bg-light text-dark h-100'>
			<div id='main-dashboard'>
				<div class='row'>
					<div class='col-4'>					
					<h3 class='m-3 font-weight-bold'>LEADERBOARD</h3>
					<div class='card m-3 p-3 border border-warning' style='max-width:26rem;'>
					<div class='container row align-items-center'><div class='col-3'><b>무위도식</b></div><img class='rounded-circle m-2' src='img/default.jpg' style='width:80px;'><div class='col-4'><h6>The 야잘알</h6><h5>홍길동</h5><h6 class='text-muted'>11pt</h6></div><div class='col-1 row'>▲&nbsp;1</div></div>
					</div>
					<div class='card m-3 p-3' style='max-width:26rem;'>
					<div class='container row align-items-center'><div class='col-3'><b>맥주구입</b></div><img class='rounded-circle m-2' src='img/default.jpg' style='width:80px;'><div class='col-4'><h6>좀잘알</h6><h5>홍길동</h5></div></div>
					</div>
					<div class='card m-3 p-3' style='max-width:26rem;'>
					<div class='container row align-items-center'><div class='col-3'><b>맥주구입</b></div><img class='rounded-circle m-2' src='img/default.jpg' style='width:80px;'><div class='col-4'><h6>평범한</h6><h5>홍길동</h5></div></div>
					</div>
					<div class='card m-3 p-3' style='max-width:26rem;'>
					<div class='container row align-items-center'><div class='col-3'><b>치킨대령</b></div><img class='rounded-circle m-2' src='img/default.jpg' style='width:80px;'><div class='col-4'><h6>좀알못</h6><h5>홍길동</h5></div></div>
					</div>
					<div class='card m-3 p-3' style='max-width:26rem;'>
					<div class='container row align-items-center'><div class='col-3'><b>치킨대령</b></div><img class='rounded-circle m-2' src='img/default.jpg' style='width:80px;'><div class='col-4'><h6>The 야알못</h6><h5>홍길동</h5></div></div>
					</div>
				</div>

				<div class='container col-8'>
					<div class='row'><h3 class='my-3 font-weight-bold'>SCORE TABLE</h3>
						<div class='card'>
							<!--Normal Mode icon-->
							<div id='score-normal-icon' class='mr-3 align-self-end'>
								<img src='svg/pencil.svg' class='mt-3 mr-3 align-self-end' style='width:15px;cursor:pointer;' onclick='score_table_modify()' data-toggle="tooltip" data-placement="top" title="경기 결과를 갱신합니다">
							</div>
							<!--Modifying Mode icon-->
							<div id='score-modify-icon' class='mr-3 align-self-end' style='display:none;'>
								<img src='svg/check.svg' class='mt-3 mr-3 align-self-end' style='width:15px;cursor:pointer;' onclick='score_table_normal()'>
							</div>
							<!--Modifying Mode-->
							<div id='score-modify' style='display:none;'>
							<table class='table table-bordered table-sm m-3 ' style='width:65rem;table-layout: fixed;' cellpadding='0'>
									<thead class='border-info'>
										<tr class='table-danger'><th scope='col'>순위</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>
									</thead>
									<tr class='table-danger'><th scope='col'>현재</th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th><th><input type='text' size='4' maxlength='1' style='border:0;background: transparent;'></th></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>

							</table><span class='m-3 text-muted'> Last Update:</span><input type='text' style='border: 0;' value='33'></div>
							<!--Modifying Mode END-->
							<!--Normal Mode-->
							<div id='score-normal'>
							<table class='table table-bordered table-sm m-3' style='width:65rem;table-layout:fixed;' cellpadding='0'>
									<thead class='thead-dark'>
										<tr><th scope='col'>순위</th><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th></tr>
									</thead>
									<tr class='table-danger'><th scope='col'>현재</th><th>기</th><th>엔</th><th>두</th><th>슼</th><th>엘</th><th>넥</th><th>롯</th><th>킅</th><th>한</th><th>삼</th></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>
									<tr><th>홍길동</th><td>기</td><td>엔</td><td>두</td><td>슼</td><td>엘</td><td>넥</td><td>롯</td><td>킅</td><td>한</td><td>삼</td><td class='table-success'>10</td></tr>

							</table><span class='m-3 text-muted'> Last Update:33</span></div>
							<!--Normal Mode END-->
						</div>
					</div>

					<div class='row'><h3 class='my-3 font-weight-bold'>HISTORY</h3>
						<div class='card col-11 p-3'>
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-10 align-self-center'><input type='text' class='form-control' style='width:50rem;border:0;' placeholder='What will you write?'></div><input type='submit' class='btn btn-priamry btn-sm' value='send'>
							</div>					
						</div>
						<div class='card col-11 mt-3 p-3'>
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-9 align-self-center'><h6>Start of KBO, finally!</h6></div>
								<div class='col align-self-center'><h6 class='text-center text-muted'>3/24</h6></div>				
							</div>
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-9 align-self-center'><h6>Start of KBO, finally!</h6></div>
								<div class='col align-self-center'><h6 class='text-center text-muted'>3/24</h6></div>				
							</div>	
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-9 align-self-center'><h6>Start of KBO, finally!</h6></div>
								<div class='col align-self-center'><h6 class='text-center text-muted'>3/24</h6></div>				
							</div>
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-9 align-self-center'><h6>Start of KBO, finally!</h6></div>
								<div class='col align-self-center'><h6 class='text-center text-muted'>3/24</h6></div>				
							</div>	
							<div class='container row'>
								<div class='col'><img class='rounded-circle m-1' src='img/default.jpg' style='width:40px;'></div>
								<div class='col-9 align-self-center'><h6>Start of KBO, finally!</h6></div>
								<div class='col align-self-center'><h6 class='text-center text-muted'>3/24</h6></div>				
							</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--MAIN DASHBOARD END-->
			<!--NEWS DASHBOARD-->
			<div class='container'>
				<div id='news-dashboard' style='display: none;'>
					<h4 class='font-weight-bold'>RANKING PROGRESS</h4>
					
					<div class='row card'>
						
							<canvas id='myChart' width='700' height='400'></canvas>
							<script>
								// Chart.js
								var ctx = document.getElementById('myChart').getContext('2d');
								var chart = new Chart(ctx, {
								    // The type of chart we want to create
								    type: 'line',

								    // The data for our dataset
								    data: {
								        labels: ["January", "February", "March", "April", "May", "June", "July"],
								        datasets: [{
								            label: "My First dataset",
								            backgroundColor: 'rgb(255, 99, 132)',
								            borderColor: 'rgb(255, 99, 132)',
								            data: [0, 10, 5, 2, 20, 30, 45],
								        }]
								    },

								    // Configuration options go here
								    options: {}
									});
							</script>
						
					</div>
				
				</div>
			</div>



			<!--NEWS DASHBOARD END-->
			</main>
		</div>
	

</body>

</html>