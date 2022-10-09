@extends('layouts.teacherApp')

@section('content')

	<div class="nk-block-head nk-block-head-sm">
		<div class="nk-block-between g-3">
			<div class="nk-block-head-content">
				<h3 class="nk-block-title page-title">Students / 
					<strong class="text-primary small"> {{ $student->name }} </strong>
				</h3>
			</div>
			<div class="nk-block-head-content">
				<a href="{{ url()->previous() }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
					<em class="icon ni ni-arrow-left"></em>
					<span>Back</span>
				</a>
				<a href="{{ url()->previous() }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
					<em class="icon ni ni-arrow-left"></em>
				</a>
			</div>
		</div>
	</div><!-- .nk-block-head -->
	
	<div class="nk-block">
		<div class="card">
			<div class="card-aside-wrap">
				<div class="card-inner card-inner-lg">
					<div class="tab-content">
						<div class="tab-pan active" id="admin-student-info-1">

							<div class="nk-block-head">
								<div class="nk-block-between d-flex justify-content-between">
									<div class="nk-block-head-content">
										<h4 class="nk-block-title">Students Information</h4>
										<div class="nk-block-des">
											<p>Basic info, like students name and address, that you use on Nio Platform.</p>
										</div>
									</div>
									<div class="nk-tab-actions me-n1">
										<a class="btn btn-icon btn-trigger" data-bs-toggle="modal" href="#profile-edit">
											<em class="icon ni ni-edit"></em>
										</a>
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
											<span class="data-value">{{ $student->name }}</span>
										</div>
									</div><!-- data-item -->
									<div class="data-item">
										<div class="data-col">
											<span class="data-label">Display Name</span>
											<span class="data-value">{{ $student->name}}</span>
										</div>
									</div><!-- data-item -->
									<div class="data-item">
										<div class="data-col">
											<span class="data-label">Email</span>
											<span class="data-value">{{ $student->email }}</span>
										</div>
									</div><!-- data-item -->
									<div class="data-item">
										<div class="data-col">
											<span class="data-label">Phone Number</span>
											<span class="data-value text-soft">
												{{$student->phone ? $student->phone : 'Not add yet'}} 
											</span>
										</div>
									</div><!-- data-item -->
									<div class="data-item">
										<div class="data-col">
											<span class="data-label">Date of Birth</span>
											<span class="data-value">
												{{ $student->dateOfBirth ? $student->dateOfBirth : 'Not add yet'}}
											</span>
										</div>
									</div><!-- data-item -->

									{{-- <div class="data-item">
										<div class="data-col">
											<span class="data-label">Nationality</span>
											<span class="data-value">Canadian</span>
										</div>
									</div><!-- data-item --> --}}

									<div class="data-item" data-tab-target="#address">
										<div class="data-col">
											<span class="data-label">Address</span>
											<span class="data-value">
												{{ $student->addressLine1 || $student->addressLine2 || $student->dateOfBirth || $student->country ? '' : 'Not add
												yet'}}
												{{ old('addressLine1', $student->addressLine1) ? old('addressLine1', $student->addressLine1) .', ' : '' }}
												<br>
												{{ old('addressLine2', $student->addressLine2) ? old('addressLine2', $student->addressLine2) . ', ' : '' }}
												
												{{ old('state', $student->dateOfBirth) ? old('state', $student->state . ', ') : '' }}
												{{ old('country', $student->country) ? old('country', $student->country) : '' }}
											</span>
										</div>
									</div><!-- data-item -->
								</div><!-- data-list -->
							</div><!-- .nk-block -->
						</div><!-- .tab-pan -->

						<div class="tab-pan" id="admin-student-info-2">
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
															<a href="#modalstdpass" data-bs-toggle="modal" class="btn btn-primary">Change Password</a>
														</li>
														<li>
															<em class="text-soft text-date fs-12px">
																Last changed: <span> {{ '' }} Oct 2, 2019</span>
															</em>
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
					</div><!-- .tab-content -->
				</div><!-- .card-inner -->

				<div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
					data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
					<div class="card-inner-group" data-simplebar>
						<div class="card-inner">
							<div class="user-card">
								<div class="user-avatar bg-primary">
									@isset($student->image)
										<img src="./images/avatar/a-sm.jpg" alt="">
									@else
										<span>{{ Str::limit($student->name, 2, '') }}</span>
									@endisset
								</div>
								<div class="user-info">
									<span class="lead-text">{{ $student->name }}</span>
									<span class="sub-text">{{ $student->email }}</span>
								</div>
							</div><!-- .user-card -->
						</div><!-- .card-inner -->

						<div class="card-inner">
							{{-- <div class="user-account-info py-0">
								<h6 class="overline-title-alt">Total Bill</h6>
								<div class=" h5 text-primary"> Paid <span>19</span> <small
										class="currency currency-btc">USD</small></div>
								<div class="text-danger">
									Due <span>10 <span class="currency currency-btc">USD</span></span>
								</div>
							</div> --}}
						</div><!-- .card-inner -->

						<div class="card-inner p-0">
							<ul class="link-list-menu nk-nav nav-tabs">
								<li>
									<a class="active" id="acustTab1" href="#">
										<em class="icon ni ni-user-fill-c"></em>
										<span>Personal Infomation</span>
									</a>
								</li>

								<li>
									<a class="" id="acustTab2" href="#">
										<em class="icon ni ni-lock-alt-fill"></em>
										<span>Security Settings</span>
									</a>
								</li>

								{{-- <li>
									<a href="#">
										<em class="icon ni ni-book-fill"></em>
										<span>Courses</span>
									</a>
								</li>
								<li>
									<a href="html/lms/students-details-activity.html">
										<em class="icon ni ni-activity-round-fill"></em>
										<span>Account Activity</span>
									</a>
								</li> --}}
							</ul>
						</div><!-- .card-inner -->

						<div class="card-inner">
							<div class="user-account-info py-0">
								<h6 class="overline-title-alt">Last Login</h6>
								<p>06-29-2020 02:39pm</p>
								<h6 class="overline-title-alt">Login IP</h6>
								<p>192.129.243.28</p>
							</div>
						</div><!-- .card-inner -->
					</div><!-- .card-inner-group -->
				</div><!-- .card-aside -->
			</div><!-- .card-aside-wrap -->
		</div><!-- .card -->
	</div><!-- .nk-block -->

	@include('teacher.student.modals')


	@push('scripts')
		<script>
			$(document).ready( function() {

				const tab1 = document.getElementById('acustTab1');
				const tab2 = document.getElementById('acustTab2');
				document.getElementById('admin-student-info-2').style.display = "none";
				
				tab1.addEventListener('click', () => {
					document.getElementById('admin-student-info-1').style.display = "block";
					document.getElementById('admin-student-info-2').style.display = "none";

					const el = document.querySelector('#acustTab2');
					el.classList.remove("active");
				});
				
				tab2.addEventListener('click', () => {

					document.getElementById('admin-student-info-2').style.display = "block";
					document.getElementById('admin-student-info-1').style.display = "none";

					const el = document.querySelector('#acustTab1');
					el.classList.remove("active");

					const e2 = document.querySelector('#acustTab2');
					e2.classList.add("active");
				});

			});
		</script>
	@endpush
@endsection