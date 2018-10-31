
<div class="content">

    <!-- Button to trigger modal -->
<!--     <a href="#modalLoginForm" role="button" class="btn" data-toggle="modal" data-target="#modalLoginForm">Launch demo modal</a>
 -->     
				<!-- model -->
				<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog" role="document">
				        <div class="modal-content">
				            <div class="modal-header text-center">
				                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                    <span aria-hidden="true">&times;</span>
				                </button>
				            </div>
				            <div class="modal-body mx-3">
				                <div class="md-form mb-5">
				                    <i class="fa fa-envelope prefix grey-text"></i>
				                    <input type="email" id="defaultForm-email" class="form-control validate">
				                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
				                </div>

				                <div class="md-form mb-4">
				                    <i class="fa fa-lock prefix grey-text"></i>
				                    <input type="password" id="defaultForm-pass" class="form-control validate">
				                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
				                </div>

				            </div>
				            <div class="modal-footer d-flex justify-content-center">
				                <button class="btn btn-default">Login</button>
				            </div>
				        </div>
				    </div>
				</div>



			<div class="text-center">
			    <button class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch Modal Login Form</button>
			</div>

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


