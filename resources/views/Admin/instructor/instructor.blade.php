@extends('layouts.adminApp')

@section('content')
<div class="nk-block-head nk-block-head-sm">
	<div class="nk-block-between">
		<div class="nk-block-head-content">
			<h3 class="nk-block-title page-title">Instructors</h3>
		</div><!-- .nk-block-head-content -->

		<div class="nk-block-head-content">
			<div class="toggle-wrap nk-block-tools-toggle">
				<a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options">
					<em class="icon ni ni-more-v"></em>
				</a>

				<div class="toggle-expand-content" data-content="more-options">
					<ul class="nk-block-tools g-3">

						{{-- <li>
							<div class="form-control-wrap">
								<div class="form-icon form-icon-right">
									<em class="icon ni ni-search"></em>
								</div>
								<input type="text" class="form-control" id="default-04" placeholder="Search by name">
							</div>
						</li>
						<li>
							<div class="drodown">
								<a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
									data-bs-toggle="dropdown">Status</a>
								<div class="dropdown-menu dropdown-menu-end">
									<ul class="link-list-opt no-bdr">
										<li><a href="#"><span>Actived</span></a></li>
										<li><a href="#"><span>Inactived</span></a></li>
										<li><a href="#"><span>Blocked</span></a></li>
									</ul>
								</div>
							</div>
						</li> --}}

						<li class="nk-block-tools-opt">
							<a class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" href="#student-add">
								<em class="icon ni ni-plus"></em>
							</a>
							<a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal"
								href="#instructor-add">
								<em class="icon ni ni-plus"></em>
								<span>Add</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- .nk-block-head-content -->
	</div><!-- .nk-block-between -->
</div><!-- .nk-block-head -->

<div class="nk-block">
	<div class="card">
		<div class="card-inner-group">
			<div class="card-inner p-0">
				<div class="nk-tb-list nk-tb-ulist">
					<div class="nk-tb-item nk-tb-head">

						<div class="nk-tb-col nk-tb-col-check">
							<div class="custom-control custom-control-sm custom-checkbox notext">
								<input type="checkbox" class="custom-control-input" id="uid">
								<label class="custom-control-label" for="uid"></label>
							</div>
						</div>

						<div class="nk-tb-col"><span class="sub-text">User</span></div>
						{{-- <div class="nk-tb-col tb-col-mb">
							<span class="sub-text d-lg-flex d-none">Enrolled Courses</span>
						</div> --}}
						<div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
						<div class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></div>
						{{-- <div class="nk-tb-col tb-col-lg"><span class="sub-text">Payment</span></div> --}}
						<div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
						<div class="nk-tb-col nk-tb-col-tools">
							<ul class="nk-tb-actions gx-1 my-n1">
								<li>
									<div class="drodown">
										<a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown">
											<em class="icon ni ni-more-h"></em>
										</a>
										{{-- <div class="dropdown-menu dropdown-menu-end">
											<ul class="link-list-opt no-bdr">
												<li>
													<a href="#">
														<em class="icon ni ni-mail"></em>
														<span>Send Email to All</span>
													</a>
												</li>
												<li>
													<a href="#">
														<em class="icon ni ni-na"></em>
														<span>Suspend Selected</span>
													</a>
												</li>
												<li>
													<a href="#">
														<em class="icon ni ni-trash"></em>
														<span>Remove Seleted</span>
													</a>
												</li>												
											</ul>
										</div> --}}
									</div>
								</li>
							</ul>
						</div>
					</div><!-- .nk-tb-item -->


					@foreach ($instructors as $instructor)

						<div class="nk-tb-item">

							<div class="nk-tb-col nk-tb-col-check">
								<div class="custom-control custom-control-sm custom-checkbox notext">
									<input type="checkbox" class="custom-control-input" id="uid1">
									<label class="custom-control-label" for="uid1"></label>
								</div>
							</div>

							<div class="nk-tb-col">
								<a href="/admin/instructor/{{$instructor->id}}">
									<div class="user-card">
										<div class="user-avatar bg-primary">
											<span>{{ Str::limit($instructor->name, 2, '') }}</span>
											{{-- <img src="./images/avatar/a-sm.jpg" alt=""> --}}
										</div>
										<div class="user-info">
											<span class="tb-lead">{{ $instructor->name }} <span
													class="dot dot-success d-md-none ms-1"></span></span>
											<span>{{ $instructor->email }}</span>
										</div>
									</div>
								</a>
							</div>

							{{-- <div class="nk-tb-col tb-col-mb">
								<span class="tb-lead d-lg-flex d-none">Fornt-end Development</span>
								<div class="d-lg-flex d-none">
									<div class="drodown">
										<a href="#" class="dropdown-toggle pt-1 text-info" data-bs-toggle="dropdown">
											<span>View More</span> </a>
										<div class="dropdown-menu dropdown-menu-start">
											<ul class="link-list-opt no-bdr p-3">
												<li class="tb-lead p-1">Application Management</li>
												<li class="tb-lead p-1">Learn Android Development with project</li>
												<li class="tb-lead p-1">UI/UX Design with Adobe XD</li>
												<li class="tb-lead p-1">Learn Android Development with project</li>
											</ul>
										</div>
									</div>
								</div>
							</div> --}}

							<div class="nk-tb-col tb-col-md">
								<span>
									{{$instructor->phone}}
								</span>
							</div>

							<div class="nk-tb-col tb-col-lg">
								<span>{{$instructor->country}}</span>
							</div>

							{{-- <div class="nk-tb-col tb-col-lg">
								<span class="badge badge-dot badge-dot bg-warning">Due</span>
							</div> --}}

							<div class="nk-tb-col tb-col-md">
								<span class="tb-status text-success">Active</span>
							</div>

							<div class="nk-tb-col nk-tb-col-tools">
								<ul class="nk-tb-actions gx-1">
									<li class="nk-tb-action-hidden">
										<a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
											data-bs-placement="top" title="Send Email">
											<em class="icon ni ni-mail-fill"></em>
										</a>
									</li>
									<li class="nk-tb-action-hidden">
										<a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
											data-bs-placement="top" title="Suspend">
											<em class="icon ni ni-user-cross-fill"></em>
										</a>
									</li>
									<li>
										<div class="drodown">
											<a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
												data-bs-toggle="dropdown">
												<em class="icon ni ni-more-h"></em>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<ul class="link-list-opt no-bdr">
													<li>
														<a href="/admin/instructor/{{$instructor->id}}">
															<em class="icon ni ni-eye"></em>
															<span>View Details</span>
														</a>
													</li>
													<li>
														<a href="#">
															<em class="icon ni ni-activity-round"></em>
															<span>Activities</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div><!-- .nk-tb-item -->
						
					@endforeach

				</div><!-- .nk-tb-list -->
			</div>
			<div class="card-inner">
				<div class="nk-block-between-md g-3">
					<div class="g">
						<ul class="pagination justify-content-center justify-content-md-start">
							{{ $instructors->links() }}
						</ul><!-- .pagination -->
					</div>
				</div><!-- .nk-block-between -->
			</div>
		</div>
	</div>
</div><!-- .nk-block -->

@include('Admin.instructor.modal')

@endsection