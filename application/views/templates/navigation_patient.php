<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo ucfirst($this->session->username); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php //echo ucfirst($this->session->user_data->home_address); ?>
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="<?php echo site_url('home'); ?>"><i class="icon-home4"></i> <span>Home</span></a></li>
								<!-- /page kits -->

								<li><a href="<?php echo site_url('home/profile'); ?>"><i class="icon-profile"></i> <span>Profile</span></a></li>

								<li><a href="<?php echo site_url('home/transaction'); ?>"><i class="icon-cash"></i> <span>Transactions</span></a></li>

								<li><a href="<?php echo site_url('home/prescription'); ?>"><i class="icon-cash3"></i> <span>Prescriptions</span></a>

								<li><a href="<?php echo site_url('home/med_reports'); ?>"><i class="icon-cash3"></i> <span>Medical Report</span></a>

								</li>


							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->