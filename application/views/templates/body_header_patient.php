<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">


						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?php echo $page_title?></span></h4>

								<div><button type="button" style="margin-left:30px;" class="btn bg-blue-300" id="left-panel-link" data-toggle="modal" data-target="#myModal">See Doctor</button></div>

						</div>

						<!-- <div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div> -->
					</div>


					<?php
						if(isset($breadcrumb)&&  !is_null($breadcrumb)){
					?> 
						<div class="breadcrumb-line breadcrumb-line-component">
							<ul class="breadcrumb">
								<li><a href="<?php echo base_url() ?>"><i class="icon-home2 position-left"></i> Home</a></li>

								<?php
								     foreach ($breadcrumb as $key => $value) {
									      if($value!=''){
									     ?>
									         <li><a href="<?=$value; ?>"><?=$key; ?></a> <span class="divider"></span></li>
									     <?php }else{
									     ?>
									         <li class="active"><?=$key; ?></li>
									     <?php }
								     }
							     ?>   
							</ul>

<!-- 							<ul class="breadcrumb-elements">
								<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-gear position-left"></i>
										Partners Sales
										<span class="caret"></span>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-user-lock"></i>Pioneer</a></li>
										<li><a href="#"><i class="icon-statistics"></i> Liberty Life</a></li>
										<li><a href="#"><i class="icon-accessibility"></i> Sydlink</a></li>
									</ul>
								</li>
							</ul>
 -->						</div>
					<?php 
						}
					?>
				</div>
				<!-- /page header -->
