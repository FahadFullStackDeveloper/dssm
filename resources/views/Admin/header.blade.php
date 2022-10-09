
<div class="nk-header nk-header-fixed is-light">
	<div class="container-fluid">
		<div class="nk-header-wrap">
			<div class="nk-menu-trigger d-xl-none ms-n1">
				<a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
					<em class="icon ni ni-menu"></em>
				</a>
			</div>

			<div class="nk-header-brand d-xl-none">
				<a href="html/index.html" class="logo-link">
					<img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
					<img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x"
						alt="logo-dark">
				</a>
			</div><!-- .nk-header-brand -->

			<div class="nk-header-tools">
				<ul class="nk-quick-nav">
					<li class="dropdown user-dropdown">
						<a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
							<div class="user-toggle">
								<div class="user-avatar sm">
									<em class="icon ni ni-user-alt"></em>
								</div>
								<div class="user-info d-none d-xl-block">
									<div class="user-status user-status-active">{{$title}}</div>
									<div class="user-name dropdown-indicator">{{ $authInfo->name }}</div>
								</div>
							</div>
						</a>

						<div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
							<div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
								<div class="user-card">
									<div class="user-avatar">
										<span> {{ Str::limit($authInfo->name, 2, '') }} </span>
									</div>
									<div class="user-info">
										<span class="lead-text">{{ $authInfo->name }}</span>
										<span class="sub-text">{{ $authInfo->email }}</span>
									</div>
								</div>
							</div>

							<div class="dropdown-inner">
								<ul class="link-list">
									<li>
										<a href="{{ route('admin.profile')}}">
											<em class="icon ni ni-user-alt"></em>
											<span>View Profile</span>
										</a>
									</li>
									<li>
										<a href="{{ route('admin.profile') }}">
											<em class="icon ni ni-setting-alt"></em>
											<span>Account Setting</span>
										</a>
									</li>
									{{-- <li>
										<a href="html/lms/admin-profile-activity.html">
											<em class="icon ni ni-activity-alt"></em>
											<span>Login Activity</span>
										</a>
									</li> --}}
								</ul>
							</div>

							<div class="dropdown-inner">
								<ul class="link-list">
									<li>
										<a 
											href="{{ url('/admin/admin-logout') }}"
											onclick="event.preventDefault(); 
											document.getElementById('logout-form').submit();"
										
										>
											<em class="icon ni ni-signout"></em>
											<span>Sign out</span>
										</a>
										<form id="logout-form" action="{{ url('/admin/admin-logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div><!-- .nk-header-wrap -->
	</div><!-- .container-fliud -->
</div>
