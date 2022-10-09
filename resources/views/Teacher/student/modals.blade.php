<div class="modal fade" role="dialog" id="student-add">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-md">
				<h5 class="title">Add Students</h5>
				<ul class="nk-nav nav nav-tabs mt-n2">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#admin-student-info">Student Infomation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#admin-address-info">Address</a>
					</li>
				</ul><!-- .nav-tabs -->

				<form action="{{ route('teacher.studentStore') }}" method="post" class="mt-3">
					@csrf

					<div class="tab-content">
						<div class="tab-pane active" id="admin-student-info">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="full-name">Full Name</label>
										<input type="text" class="form-control" id="full-name" name="name" placeholder="Full name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="display-name">Display Name</label>
										<input type="text" class="form-control" id="display-name" name="displayName" placeholder="Last name">
									</div>
								</div>
								{{-- <div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Course to Enroll</label>
										<div class="form-control-wrap">
											<select class="form-select js-select2"
												data-placeholder="Select multiple options">
												<option value="default_option">UI/UX Design with Adobe XD</option>
												<option value="option_select_name">Front-end Web Development with React
												</option>
												<option value="option_select_name">Learn Android Development with project
												</option>
												<option value="option_select_name">Learn PHP Basic to Advance</option>
												<option value="option_select_name">Learn Android Development with project
												</option>
											</select>
										</div>
									</div>
								</div> --}}

								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="email">Email Address</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="phone-no">Phone Number</label>
										<input type="text" class="form-control" id="phone-no" name="phone" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="birth-day">Date of Birth</label>
										<input type="text" class="form-control date-picker" id="birth-day" name="dateOfBirth" placeholder="Date of Birth">
									</div>
								</div>

								{{-- <div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Payment Methods</label>
										<ul class="custom-control-group g-3 align-center">
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="pay-card">
													<label class="custom-control-label" for="pay-card">Card</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="pay-bitcoin">
													<label class="custom-control-label" for="pay-bitcoin">Bitcoin</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="pay-cash">
													<label class="custom-control-label" for="pay-cash">Cash</label>
												</div>
											</li>
										</ul>
									</div>
								</div> --}}

							</div>
						</div><!-- .tab-pane -->

						<div class="tab-pane" id="admin-address-info">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-l1">Address Line 1</label>
										<input type="text" class="form-control" id="address-l1" name="addressLine1">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-l2">Address Line 2</label>
										<input type="text" class="form-control" id="address-l2" name="addressLine2">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-st">State</label>
										<input type="text" class="form-control" id="address-st" name="state">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-county">Country</label>
										<select class="form-select js-select2" id="address-county" name="country" data-ui="lg">
											<option value="Canada">Canada</option>
											<option value="United State">United State</option>
											<option value="United Kindom">United Kindom</option>
											<option value="Australia">Australia</option>
											<option value="Japan">Japan</option>
											<option value="Bangladesh">Bangladesh</option>
										</select>
									</div>
								</div>
							</div>
						</div><!-- .tab-pane -->

						<div class="row mt-4">
							<div class="col-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<button type="submit" class="btn btn-primary">Save Student</button>
									</li>
									<li>
										<a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .tab-content -->
				</form>
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->



{{-- Edit student --}}
<div class="modal fade" role="dialog" id="profile-edit">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-md">
				<h5 class="title">Update Students</h5>
				<ul class="nk-nav nav nav-tabs mt-n2">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#admin-student-info-update">Student Infomation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#admin-address-info-update">Address</a>
					</li>
				</ul><!-- .nav-tabs -->

				<form action="/teacher/student/{{$student->id}}" method="POST" class="mt-2">
					@csrf
					@method('PATCH')

					<div class="tab-content">
						<div class="tab-pane active" id="admin-student-info-update">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="full-name">Full Name</label>
										<input 
											type="text" 
											class="form-control" 
											id="full-name" 
											value="{{ old('name', $student->name) }}" 
											name="name" 
											placeholder="Enter Full name"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="display-name">Display Name</label>
										<input 
											type="text" 
											class="form-control" 
											id="display-name" 
											value="{{old('displayName', $student->displayName)}}"
											name="displayName"
											placeholder="Enter display name"
										>
									</div>
								</div>
								{{-- <div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Course to Enroll</label>
										<div class="form-control-wrap">
											<select class="form-select js-select2"
												data-placeholder="Select multiple options">
												<option value="default_option">UI/UX Design with Adobe XD</option>
												<option value="option_select_name">Front-end Web Development with React
												</option>
												<option value="option_select_name">Learn Android Development with
													project
												</option>
												<option value="option_select_name">Learn PHP Basic to Advance</option>
												<option value="option_select_name">Learn Android Development with
													project
												</option>
											</select>
										</div>
									</div>
								</div> --}}

								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="email">Email Address</label>
										<input 
											type="email" 
											class="form-control" 
											id="email" 
											value="{{old('email', $student->email)}}" 
											name="email"
											placeholder="Email Address"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password"
											placeholder="Password">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="phone-no">Phone Number</label>
										<input 
											type="text" 
											class="form-control" 
											id="phone-no" 
											value="{{old('phone', $student->phone)}}" 
											name="phone"
											placeholder="Phone Number"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="birth-day">Date of Birth</label>
										<input 
											type="text" 
											class="form-control date-picker" 
											id="birth-day" 
											value="{{old('dateOfBirth', $student->dateOfBirth)}}"
											name="dateOfBirth"
											placeholder="Date of Birth"
										>
									</div>
								</div>

								{{-- <div class="col-md-12">
									<div class="form-group">
										<label class="form-label">Payment Methods</label>
										<ul class="custom-control-group g-3 align-center">
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="pay-card">
													<label class="custom-control-label" for="pay-card">Card</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input"
														id="pay-bitcoin">
													<label class="custom-control-label"
														for="pay-bitcoin">Bitcoin</label>
												</div>
											</li>
											<li>
												<div class="custom-control custom-control-sm custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="pay-cash">
													<label class="custom-control-label" for="pay-cash">Cash</label>
												</div>
											</li>
										</ul>
									</div>
								</div> --}}

							</div>
						</div><!-- .tab-pane -->

						<div class="tab-pane" id="admin-address-info-update">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-l1">Address Line 1</label>
										<input 
											type="text" 
											class="form-control" 
											id="address-l1" 
											name="addressLine1"
											value="{{old('addressLine1', $student->addressLine1)}}"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-l2">Address Line 2</label>
										<input 
											type="text" 
											class="form-control" 
											id="address-l2" 
											name="addressLine2"
											value="{{old('addressLine2', $student->addressLine2)}}"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-st">State</label>
										<input type="text" class="form-control" id="address-st" name="state" value="{{old('state', $student->state)}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-county">Country</label>
										<select class="form-select js-select2" id="address-county" name="country" data-ui="lg">
											<option value="{{old('country', $student->country)}}" {{ old('country', $student->country) == $student->country ?
												'selected' : '' }}>{{$student->country}}</option>
											<option Canada>Canada</option>
											<option value="United State">United State</option>
											<option value="United Kindom">United Kindom</option>
											<option value="Australia">Australia</option>
											<option value="Japan">Japan</option>
											<option value="Bangladesh">Bangladesh</option>
										</select>
									</div>
								</div>
							</div>
						</div><!-- .tab-pane -->

						<div class="row mt-4">
							<div class="col-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
									<li>
										<button type="submit" class="btn btn-primary">Save Student</button>
									</li>
									<li>
										<a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .tab-content -->
				</form>
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->

<!-- Password modal -->
<div class="modal fade" id="modalstdpass">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
			<div class="modal-body">
				<h5 class="title mb-4">Update Password</h5>

				<form action="/teacher/studentpass/{{$student->id}}" method="post">
					@csrf
					@method('PATCH')

					<div class="form-group">
						<label class="form-label" for="password">New Password</label>
						<input type="password" class="form-control" name="password" value="">
					</div>
					<div class="form-group">
						<button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

