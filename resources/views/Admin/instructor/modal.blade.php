<div class="modal fade" role="dialog" id="instructor-add">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-md">
				<h5 class="title">Add Instructor</h5>
				<form action="{{ route('admin.instructorStore') }}" method="POST" class="pt-2" enctype="multipart/form-data">
					@csrf

					<div class="row gy-4">
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="default-06">Image Upload</label>
								<div class="form-control-wrap">
									<div class="form-file">
										<input 
											type="file" 
												multiple="" 
												class="form-file-input" 
												name="thumbnail" 
												id="customFile"
												value="{{old('thumbnail')}}"
											>
										<label class="form-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="first-name">Full Name</label>
								<input 
									type="text" 
									class="form-control @error('name') error @enderror" 
									id="first-name" 
									name="name" 
									placeholder="First name"
									value="{{old('name')}}"
								>
								<span class="text-danger">
									@error('name')
										{{$errors->first('name')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="last-name">Display Name</label>
								<input 
									type="text" 
									class="form-control" 
									id="last-name" 
									name="displayName" 
									placeholder="Last name"
									value="{{old('displayName')}}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="email">Email Address</label>
								<input 
									type="email" 
									class="form-control @error('email') error @enderror" 
									id="email" 
									name="email" 
									placeholder="Email Address"
									value="{{old('email')}}"
								>
								<span class="text-danger">
									@error('email')
										{{$errors->first('email')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="password">Password</label>
								<input 
									type="password" 
									class="form-control @error('password') error @enderror" 
									id="password" 
									name="password" 
									placeholder=""
									value="{{old('password')}}"
								>
								<span class="text-danger">
									@error('password')
										{{$errors->first('password')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="phone-no">Phone Number</label>
								<input 
									type="text" 
									class="form-control" 
									id="phone-no"
									name="phone" 
									placeholder="Phone Number"
									value="{{old('phone')}}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-l1">Address Line 1</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-l1" 
									name="addressLine1"
									value="{{old('addressLine1')}}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-line2">Address Line 2</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-line2" 
									name="addressLine2"
									value="{{old('addressLine2')}}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-st">State</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-st" 
									name="state"
									value="{{old('state')}}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="country">Country</label>
								<select class="form-select js-select2" name="country" id="country">
									@if (old('country'))												
										<option value="{{old('country')}}" {{ old('country') == old('country') ? 'selected' : '' }}>
											{{old('country')}}
										</option>
									@endif
									<option value="Canada">Canada</option>
									<option value="United State">United State</option>
									<option value="United Kindom">United Kindom</option>
									<option value="Australia">Australia</option>
									<option value="Japan">Japan</option>
									<option value="Bangladesh">Bangladesh</option>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label class="form-label" for="about-instractor">About Instractor</label>
								<textarea class="form-control textarea-sm" id="about-instractor"
									placeholder="Discribe a little bit" name="about">{{old('about')}}</textarea>
							</div>
						</div>
						<div class="col-md-12">
							<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
								<li>
									<button type="submit" class="btn btn-primary">Add Instructor</button>
								</li>
								<li>
									<a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
								</li>
							</ul>
						</div>
					</div>
				</form>
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->


<div class="modal fade" role="dialog" id="instructor-update">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-md">
				<h5 class="title">Update Instructor</h5>

				<form action="/admin/instructor/{{$instructor->id}}" method="POST" class="pt-2" enctype="multipart/form-data">
					@csrf
					@method('PATCH')

					<div class="row gy-4">
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="default-06">Image Upload</label>
								<div class="form-control-wrap">
									<div class="form-file">
										<input 
											type="file" 
												multiple="" 
												class="form-file-input" 
												name="thumbnail" 
												id="customFile"
												value="{{old('thumbnail')}}"
											>
										<label class="form-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="first-name">First Name</label>
								<input 
									type="text" 
									class="form-control @error('name') error @enderror" 
									id="first-name" 
									name="name" 
									placeholder="First name" 
									value="{{ old('name', $instructor->name) }}"
								>
								<span class="text-danger">
									@error('name')
										{{$errors->first('name')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="last-name">Display Name</label>
								<input 
									type="text" 
									class="form-control" 
									id="last-name" 
									name="displayName"
									placeholder="Last name"
									value="{{ old('displayName', $instructor->displayName) }}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="email">Email Address</label>
								<input 
									type="email" 
									class="form-control @error('password') error @enderror" 
									id="email"
									name="email" 
									placeholder="Email Address"
									value="{{ old('email', $instructor->email) }}"
								>
								<span class="text-danger">
									@error('password')
										{{$errors->first('password')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="password">Password</label>
								<input 
									type="password" 
									class="form-control @error('password') error @enderror" 
									id="password" 
									name="password"
								>
								<span class="text-danger">
									@error('password')
										{{$errors->first('password')}}
									@enderror
								</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="phone-no">Phone Number</label>
								<input 
									type="text" 
									class="form-control" 
									id="phone-no" 
									name="phone" 
									placeholder="Phone Number"
									value="{{ old('phone', $instructor->phone) }}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-l1">Address Line 1</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-l1" 
									name="addressLine1" 
									value="{{ old('addressLine1', $instructor->addressLine1) }}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-line2">Address Line 2</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-line2" 
									name="addressLine2" 
									value="{{ old('addressLine2', $instructor->addressLine2) }}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="address-st">State</label>
								<input 
									type="text" 
									class="form-control" 
									id="address-st" 
									name="state" 
									value="{{ old('state', $instructor->state) }}"
								>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label" for="country">Country</label>
								<select class="form-select js-select2" name="country" id="country">
									<option value="{{old('country', $instructor->country)}}" {{ old('country', $instructor->country) == $instructor->country ?
									'selected' : '' }}>{{$instructor->country}}</option>
									<option Canada>Canada</option>
									<option value="United State">United State</option>
									<option value="United Kindom">United Kindom</option>
									<option value="Australia">Australia</option>
									<option value="Japan">Japan</option>
									<option value="Bangladesh">Bangladesh</option>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label class="form-label" for="about-instractor">About Instractor</label>
								<textarea class="form-control textarea-sm" id="about-instractor" name="about"
									placeholder="Discribe a little bit">{{$instructor->about}}</textarea>
							</div>
						</div>
						<div class="col-md-12">
							<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
								<li>
									<button type="submit" class="btn btn-primary">Update Instructor</button>
								</li>
								<li>
									<a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
								</li>
							</ul>
						</div>
					</div>
				</form>
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- .modal -->


@push('adminScript')
@if ($errors->any())

@foreach ($errors->all() as $error)

<script>
	NioApp.Toast('{{ $error }}', 'error', {
		position: 'top-right',
		timeOut: 5000,
		progressBar: 'true',
		preventDuplicates: 'true',
		newestOnTop: 'true',
		closeButton: 'true',
	});
</script>

@endforeach
@endif
@endpush