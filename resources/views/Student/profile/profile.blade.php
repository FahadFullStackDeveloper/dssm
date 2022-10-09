@extends('layouts.studentApp')

@section('content')
<div class="nk-block">
	<div class="card">
		<div class="card-aside-wrap">

			<div class="card-inner card-inner-lg" id="admin-student-info-1">

				<div class="nk-block-head">
					<div class="nk-block-between d-flex justify-content-between">
						<div class="nk-block-head-content">
							<h4 class="nk-block-title">Personal Information</h4>
							<div class="nk-block-des">
								<p>Basic info, like your name and address, that you use on Nio Platform.</p>
							</div>
						</div>
						<div class="d-flex align-center">
							<div class="nk-tab-actions me-n1">
								<a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#admin-profile-edit">
									<em class="icon ni ni-edit"></em>
								</a>
							</div>
							<div class="nk-block-head-content align-self-start d-lg-none">
								<a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside">
									<em class="icon ni ni-menu-alt-r"></em>
								</a>
							</div>
						</div>
					</div>
				</div><!-- .nk-block-head -->


				<div class="nk-block">
					<div class="nk-data data-list">
						<div class="data-head">
							<h6 class="overline-title">Basics</h6>
						</div>
						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Full Name</span>
								<span class="data-value">{{ old('name', $authInfo->name) }}</span>
							</div>
						</div><!-- data-item -->
						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Display Name</span>
								<span class="data-value">
									{{ old('displayName', $authInfo->displayName) ? old('displayName', $authInfo->displayName) : 'Not add yet' }}
								</span>
							</div>
						</div><!-- data-item -->
						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Email</span>
								<span class="data-value">
									{{ old('email', $authInfo->email) }}
								</span>
							</div>
						</div><!-- data-item -->
						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Phone Number</span>
								<span class="data-value text-soft">
									{{ old('phone', $authInfo->phone) ?  old('phone', $authInfo->phone) : 'Not add yet' }}
								</span>
							</div>
						</div><!-- data-item -->
						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Date of Birth</span>
								<span class="data-value">
									{{ old('dateOfBirth', $authInfo->dateOfBirth) ? old('dateOfBirth', $authInfo->dateOfBirth) : 'Not add yet' }}
								</span>
							</div>
						</div><!-- data-item -->
						<div class="data-item" data-tab-target="#address">
							<div class="data-col">
								<span class="data-label">Address</span>
								<span class="data-value">
									{{ $authInfo->addressLine1 || $authInfo->addressLine2 || $authInfo->dateOfBirth || $authInfo->country ? '' : 'Not add yet'}}
									{{ old('addressLine1', $authInfo->addressLine1) ? old('addressLine1', $authInfo->addressLine1) .', ' : '' }}
									<br>
									{{ old('addressLine2', $authInfo->addressLine2) ? old('addressLine2', $authInfo->addressLine2) . ', ' : '' }} 
									
									{{ old('state', $authInfo->dateOfBirth) ? old('state', $authInfo->state . ', ') : '' }}
									{{ old('country', $authInfo->country) ? old('country', $authInfo->country) : '' }}
								</span>
							</div>
						</div><!-- data-item -->
					</div><!-- data-list -->

					{{-- <div class="nk-data data-list">
						<div class="data-head">
							<h6 class="overline-title">Preferences</h6>
						</div>

						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Language</span>
								<span class="data-value">English (United State)</span>
							</div>
							<div class="data-col data-col-end">
								<a data-bs-toggle="modal" href="#modalLanguage"class="link link-primary">
									Change Language
								</a>
							</div>
						</div><!-- data-item -->

						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Date Format</span>
								<span class="data-value">M, D, YYYY</span>
							</div>
							<div class="data-col data-col-end">
								<a data-bs-toggle="modal" href="#modalDate" class="link link-primary">
									Change
								</a>
							</div>
						</div><!-- data-item -->

						<div class="data-item">
							<div class="data-col">
								<span class="data-label">Timezone</span>
								<span class="data-value">Bangladesh (GMT +6:00)</span>
							</div>

							<div class="data-col data-col-end">
								<a data-bs-toggle="modal" href="#modalTimezone" class="link link-primary">
									Change
								</a>
							</div>
						</div><!-- data-item -->
					</div><!-- data-list -->
					 --}}
				</div><!-- .nk-block -->
			</div>

			<div class="card-inner card-inner-lg d-none" id="admin-student-info-2">
				<div class="nk-block-head">
					<div class="nk-block-between d-flex justify-content-between">
						<div class="nk-block-head-content">
							<h4 class="nk-block-title">Security Settings</h4>
							<div class="nk-block-des">
								<p>These settings are helps you keep your account secure.</p>
							</div>
						</div>
						{{-- <div class="d-flex align-center">
							<div class="nk-tab-actions me-n1">
								<a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit">
									<em class="icon ni ni-edit"></em>
								</a>
							</div>
							<div class="nk-block-head-content align-self-start d-lg-none">
								<a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside">
									<em class="icon ni ni-menu-alt-r"></em>
								</a>
							</div>
						</div> --}}
					</div>
				</div><!-- .nk-block-head -->
			
				<div class="nk-block">
					<div class="card border border-light">
						<div class="card-inner-group">
							<div class="card-inner">
								<div class="between-center flex-wrap g-3">
									<div class="nk-block-text">
										<h6>Change Password</h6>
										<p>Set a unique password to protect your account.</p>
									</div>
									<div class="nk-block-actions flex-shrink-sm-0">
										<ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
											<li class="order-md-last">
												<a href="#modaladminpass" data-bs-toggle="modal" class="btn btn-primary">Change
													Password</a>
											</li>
											<li>
												<em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em>
											</li>
										</ul>
									</div>
								</div>
							</div>
			
							{{-- <div class="card-inner">
								<div class="between-center flex-wrap flex-md-nowrap g-3">
									<div class="nk-block-text">
										<h6>2 Factor Auth &nbsp; <span class="badge bg-success ms-0">Enabled</span>
										</h6>
										<p>Secure your account with 2FA security. When it is activated you will need to enter not
											only
											your password, but also a special code using app. You can receive this code by in mobile
											app. </p>
									</div>
									<div class="nk-block-actions">
										<a href="#" class="btn btn-primary">Disable</a>
									</div>
								</div>
							</div> --}}
			
						</div><!-- .card-inner-group -->
					</div><!-- .card -->
				</div><!-- .nk-block -->
			</div>

			<div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
				data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
				<div class="card-inner-group" data-simplebar>

					<div class="card-inner">
						<div class="user-card">
							<div class="user-avatar bg-primary">								
								@isset($authInfo->thumbnail)
									<img src="{{ asset('storage/'.$authInfo->thumbnail )}}" alt="">
								@else
									<span>{{ Str::limit($authInfo->name, 2, '') }}</span>
								@endisset
							</div>
							<div class="user-info">
								<span class="lead-text">{{ $authInfo->name }}</span>
								<span class="sub-text">{{ $authInfo->email }}</span>
							</div>
							<div class="user-action">
								<div class="dropdown">
									<a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#">
										<em class="icon ni ni-more-v"></em>
									</a>
									{{-- <div class="dropdown-menu dropdown-menu-end">
										<ul class="link-list-opt no-bdr">
											<li>
												<a href="#">
													<em class="icon ni ni-camera-fill"></em>
													<span>Change Photo</span>
												</a>
											</li>
											<li>
												<a href="#">
													<em class="icon ni ni-edit-fill"></em>
													<span>Update Profile</span>
												</a>
											</li>
										</ul>
									</div> --}}
								</div>
							</div>
						</div><!-- .user-card -->
					</div><!-- .card-inner -->

					<div class="card-inner">
						<div class="user-account-info py-0">
							<h6 class="overline-title-alt">Account </h6>
							{{-- <div class="user-balance">
								12.395769 <small class="currency currency-btc">USD</small>
							</div>
							<div class="user-balance-sub">
								Pending 
								<span>0.344939 
									<span class="currency currency-btc">USD</span>
								</span>
							</div> --}}
						</div>
					</div><!-- .card-inner -->

					<div class="card-inner p-0">
						<ul class="link-list-menu">
							<li>
								<a class="active" id="acustTab1" href="#">
									<em class="icon ni ni-user-fill-c"></em>
									<span>Personal Infomation</span>
								</a>
							</li>

							{{-- <li>
								<a href="html/lms/admin-profile-notification.html">
									<em class="icon ni ni-bell-fill"></em>
									<span>Notifications</span>
								</a>
							</li> --}}

							{{-- <li>
								<a href="html/lms/admin-profile-activity.html">
									<em class="icon ni ni-activity-round-fill"></em>
									<span>Account Activity</span>
								</a>
							</li> --}}

							<li>
								<a class="" id="acustTab2" href="#">
									<em class="icon ni ni-lock-alt-fill"></em>
									<span>Security Settings</span>
								</a>
							</li>
						</ul>
					</div><!-- .card-inner -->

					<div class="card-inner">
						<div class="user-account-info py-0">
							<h6 class="overline-title-alt">Last Login</h6>
							<p> 06-29-2022 02:39pm </p>
							<h6 class="overline-title-alt">Login IP</h6>
							<p> 192.129.243.28 </p>
						</div>
					</div><!-- .card-inner -->
				</div><!-- .card-inner-group -->
			</div><!-- card-aside -->
		</div><!-- .card-aside-wrap -->
	</div><!-- .card -->
</div><!-- .nk-block -->


@include('student.profile.edit-modals')

@push('scripts')
	<script>
		$(document).ready( function() {
	
			const tab1 = document.getElementById('acustTab1');
			const tab2 = document.getElementById('acustTab2');
			
			tab1.addEventListener('click', () => {
				const sdiv1 = document.querySelector('#admin-student-info-1');
				const sdiv2 = document.querySelector('#admin-student-info-2');
				const el = document.querySelector('#acustTab2');
				
				sdiv1.classList.remove("d-none");
				sdiv2.classList.add('d-none');
				el.classList.remove("active");			
			});
			
			tab2.addEventListener('click', () => {			
				const sdiv2 = document.querySelector('#admin-student-info-2');
				const sdiv1 = document.querySelector('#admin-student-info-1');
				const el = document.querySelector('#acustTab1');
				const e2 = document.querySelector('#acustTab2');
				
				sdiv2.classList.remove("d-none");
				sdiv1.classList.add("d-none");
				el.classList.remove("active");
				e2.classList.add("active");
			});

		});
	</script>
	@endpush
@endsection