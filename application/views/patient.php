
<div class="content">

			<!-- Quick stats boxes -->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-flat">
						<h6 align="center">Body Temperature</h6>
					    <div>
					        <canvas id="myChart"></canvas>
					    </div>
					</div>
				</div>


				<div class="col-lg-6">
					<div class="panel panel-flat">
						<h6 align="center">Heart Rate</h6>
					    <div>
					        <canvas id="myChart2"></canvas>
					    </div>
					</div>
				</div>
			</div>

			<!-- Quick stats boxes -->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-flat">
						<h6 align="center">Blood Pressure</h6>
					    <div>
					        <canvas id="myChart3"></canvas>
					    </div>
					</div>
				</div>


				<div class="col-lg-6">
					<div class="panel panel-flat">
						<h6 align="center">Weight</h6>
					    <div>
					        <canvas id="myChart4"></canvas>
					    </div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-lg-12">
					<div class="panel panel-flat">
						<h6 align="center">Cover types</h6>
					    <div>
					        <canvas id="myChart4"></canvas>
					    </div>
					</div>
				</div>
			</div> -->

		<!-- </div> -->

 <script>
 	//button click



 	window.onload = function(){
 		var ctx = document.getElementById("myChart").getContext("2d");

		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: <?php // echo $topups_time; ?>,
		        datasets: [{
		            label: '# Body Temperature for the last '+ <?php //echo $topup_months; ?>'' +' months',
		            data: <?php// echo $topups; ?>
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx2 = document.getElementById("myChart2").getContext("2d");

		var myChart2 = new Chart(ctx2, {
		    type: 'line',
		    data: {
		        labels: <?php //echo $transactions_time; ?>,
		        datasets: [{
		            label: '# Heart Rate in the last '+ <?php //echo $transactions_months; ?> +' months',
		            data: <?php //echo $transactions; ?>
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});


		var ctx3 = document.getElementById("myChart3").getContext("2d");

		var myChart3 = new Chart(ctx3, {
		    type: 'line',
		    data: {
		        labels: <?php //echo $users_time; ?>,
		        datasets: [{
		            label: '# Signups for the last '+ <?php //echo $users_months; ?> +' months',
		            data: <?php //echo $users; ?>
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		var ctx4 = document.getElementById("myChart4").getContext("2d");

		var myChart4 = new Chart(ctx4, {
		    type: 'doughnut',
		    data: {
		      labels: ["White Covers", "Yellow Covers", "Red Covers"],
		      datasets: [{
		        label: "Population (millions)",
		        backgroundColor: ["#eeeeee", "#f6e000","#ff2929"],
		        data: <?php //echo $covers_result; ?>
		      }]
		    }
		});
 	}
	
</script>


