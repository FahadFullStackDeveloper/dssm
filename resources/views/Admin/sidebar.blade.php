<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
	<div class="nk-sidebar-element nk-sidebar-head">
		<div class="nk-sidebar-brand">

			<a href="{{ url('/admin/dashboard') }}" class="logo-link nk-sidebar-logo">

				<img 
					class="logo-light logo-img" 
					src="./images/logo.png" 
					srcset="./images/logo2x.png 2x" 
					alt="logo"
				>

				<img 
					class="logo-dark logo-img" 
					src="./images/logo-dark.png" 
					srcset="./images/logo-dark2x.png 2x"
					alt="logo-dark"
				>

				<img 
					class="logo-small logo-img logo-img-small" 
					src="./images/logo-small.png"
					srcset="./images/logo-small2x.png 2x" 
					alt="logo-small"
				>

			</a>
		</div>

		<div class="nk-menu-trigger me-n2">
			<a 
				href="#" 
				class="nk-nav-toggle nk-quick-nav-icon d-xl-none" 
				data-target="sidebarMenu">
				<em class="icon ni ni-arrow-left"></em>
			</a>
			<a 
				href="#" 
				class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" 
				data-target="sidebarMenu">
				<em class="icon ni ni-menu"></em>
			</a>
		</div>
	</div><!-- .nk-sidebar-element -->

	<div class="nk-sidebar-element">
		<div class="nk-sidebar-content">
			<div class="nk-sidebar-menu" data-simplebar>
				<ul class="nk-menu">

					<li class="nk-menu-item">
						<a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
							<span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
							<span class="nk-menu-text">Dashboard</span>
						</a>
					</li><!-- .nk-menu-item -->

					{{-- <li class="nk-menu-item has-sub">
						<a href="#" class="nk-menu-link nk-menu-toggle">
							<span class="nk-menu-icon"><em class="icon ni ni-book-fill"></em></span>
							<span class="nk-menu-text">Courses</span>
						</a>
						<ul class="nk-menu-sub">
							<li class="nk-menu-item">
								<a href="html/lms/category.html" class="nk-menu-link"><span
										class="nk-menu-text">Catagories</span></a>
							</li>
							<li class="nk-menu-item">
								<a href="html/lms/courses.html" class="nk-menu-link"><span class="nk-menu-text">Course
										List</span></a>
							</li>
						</ul><!-- .nk-menu-sub -->
					</li><!-- .nk-menu-item --> --}}

					<li class="nk-menu-item has-sub">

						<a href="#" class="nk-menu-link nk-menu-toggle">
							<span class="nk-menu-icon">
								<em class="icon ni ni-user-fill"></em>
							</span>
							<span class="nk-menu-text">Instructors</span>
						</a>

						<ul class="nk-menu-sub">

							{{-- <li class="nk-menu-item">
								<a href="html/lms/instructor-dashborad.html" class="nk-menu-link">
									<span class="nk-menu-text">Instructor Overview</span>
								</a>
							</li> --}}

							<li class="nk-menu-item">
								<a href="{{ route('admin.instructor') }}" class="nk-menu-link">
									<span class="nk-menu-text">Instructor List</span>
								</a>
							</li>

							{{-- <li class="nk-menu-item">
								<a href="html/lms/instructor-payment.html" class="nk-menu-link">
									<span class="nk-menu-text">Instructor Payment</span>
								</a>
							</li> --}}

						</ul><!-- .nk-menu-sub -->
					</li><!-- .nk-menu-item -->

					<li class="nk-menu-item">
						<a href="{{ route('admin.student') }}" class="nk-menu-link">
							<span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
							<span class="nk-menu-text">Students</span>
						</a>
					</li><!-- .nk-menu-item -->

					{{-- <li class="nk-menu-item has-sub">

						<a href="#" class="nk-menu-link nk-menu-toggle">
							<span class="nk-menu-icon">
								<em class="icon ni ni-property-add"></em>
							</span>
							<span class="nk-menu-text">Enrolment</span>
						</a>

						<ul class="nk-menu-sub">

							<li class="nk-menu-item">
								<a href="html/lms/enroll-history.html" class="nk-menu-link">
									<span class="nk-menu-text">Enroll History</span>
								</a>
							</li>

							<li class="nk-menu-item">
								<a href="html/lms/enroll-student.html" class="nk-menu-link">
									<span class="nk-menu-text">Enroll a Student</span>
								</a>
							</li>

						</ul><!-- .nk-menu-sub -->
					</li><!-- .nk-menu-item --> --}}


					<li class="nk-menu-item">
						<a href="{{ route('admin.profile') }}" class="nk-menu-link">
							<span class="nk-menu-icon"><em class="icon ni ni-account-setting-fill"></em></span>
							<span class="nk-menu-text">Admin profile</span>
						</a>
					</li><!-- .nk-menu-item -->

					{{-- <li class="nk-menu-item has-sub">
						<a href="#" class="nk-menu-link nk-menu-toggle">
							<span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
							<span class="nk-menu-text">Invoice</span>
						</a>
						<ul class="nk-menu-sub">
							<li class="nk-menu-item">
								<a href="html/lms/student-invoice-list.html" class="nk-menu-link"><span
										class="nk-menu-text">Invoice List</span></a>
							</li>
							<li class="nk-menu-item">
								<a href="html/lms/student-invoice-details.html" class="nk-menu-link"><span
										class="nk-menu-text">Invoice Details</span></a>
							</li>
						</ul><!-- .nk-menu-sub -->
					</li><!-- .nk-menu-item --> --}}

					<li class="nk-menu-item">
						<a href="{{ route('admin.settings')}}" class="nk-menu-link">
							<span class="nk-menu-icon"><em class="icon ni ni-setting-alt-fill"></em></span>
							<span class="nk-menu-text">Settings</span>
						</a>
					</li><!-- .nk-menu-item -->

					<li class="nk-menu-heading">
						<h6 class="overline-title text-primary-alt">Return to</h6>
					</li><!-- .nk-menu-item -->

					<li class="nk-menu-item">
						<a href="/" class="nk-menu-link">
							<span class="nk-menu-icon">
								<em class="icon ni ni-dashlite-alt"></em>
							</span>
							<span class="nk-menu-text">Home</span>
						</a>
					</li><!-- .nk-menu-item -->

				</ul><!-- .nk-menu -->
			</div><!-- .nk-sidebar-menu -->
		</div><!-- .nk-sidebar-content -->
	</div><!-- .nk-sidebar-element -->
</div>