<!-- @@ Profile Edit Modal @e -->
<div class="modal fade" role="dialog" id="admin-profile-edit">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
			<div class="modal-body modal-body-md">
				<h5 class="title">Update Profile</h5>
				<ul class="nk-nav nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
					</li>
				</ul><!-- .nav-tabs -->
				
				<form action="{{ route('update')}}" method="post" class="mt-1" enctype="multipart/form-data">
					@csrf

					<div class="tab-content">
						<div class="tab-pane active" id="personal">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="default-06">Image Upload</label>
										<div class="form-control-wrap">
											<div class="form-file">
												<input type="file" multiple="" class="form-file-input" name="thumbnail" id="customFile">
												<label class="form-file-label" for="customFile">Choose file</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="full-name">Full Name</label>
										<input type="hidden" name="id" value="{{ $authInfo->id }}">
										<input 
											type="text" 
											class="form-control @error('name') error @enderror" 
											id="full-name" 
											value="{{old('name', $authInfo->name)}}" 
											name="name" 
											placeholder="Enter Full name"
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
										<label class="form-label" for="display-name">Display Name</label>
										<input 
											type="text" 
											class="form-control" 
											id="display-name" 
											value="{{old('displayName', $authInfo->displayName)}}" 
											name="displayName"  
											placeholder="Enter display name"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="personal-email">Email</label>
										<input 
											type="email" 
											class="form-control @error('email') error @enderror" 
											id="personal-email" 
											name="email" 
											value="{{old('email', $authInfo->email)}}"
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
										<label class="form-label" for="phone-no">Phone Number</label>
										<input 
											type="text"
											class="form-control" 
											id="phone-no" 
											name="phone" 
											value="{{old('phone', $authInfo->phone)}}" 
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
											name="dateOfBirth" 
											value="{{old('dateOfBirth', $authInfo->dateOfBirth)}}"
											placeholder="02/24/2021"
										>
									</div>
								</div>
							</div>
						</div><!-- .tab-pane -->
						<div class="tab-pane" id="address">
							<div class="row gy-4">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-l1">Address Line 1</label>
										<input 
											type="text" 
											class="form-control" 
											id="address-l1" 
											name="addressLine1" 
											value="{{old('addressLine1', $authInfo->addressLine1)}}"
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
											value="{{old('addressLine2', $authInfo->addressLine2)}}"
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
											value="{{old('state', $authInfo->state)}}"
										>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label" for="address-county">Country</label>
										<select class="form-select js-select2" id="address-county" name="country">
											<option 
												value="{{$authInfo->country}}" 
												{{ old('country', $authInfo->country) == $authInfo->country ? 'selected' : '' }}
											>
												{{$authInfo->country}}
											</option>
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

						<div class="row gy-4">
							<div class="col-12">
								<ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2 mt-1">
									<li>
										{{-- <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update Profile</a> --}}
										<button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update Profile</button>
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
<div class="modal fade" id="modaladminpass">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<a href="#" class="close" data-bs-dismiss="modal">
				<em class="icon ni ni-cross"></em>
			</a>
			<div class="modal-body">
				<h5 class="title mb-4">Update Password</h5>

				<form action="{{ route('updatePass') }}" method="post">
					@csrf					
					{{-- <input type="hidden" name="id" value="{{ $authInfo->id }}"> --}}

					<div class="form-group">
						<label class="form-label" for="password">New Password</label>
						<input 
							type="password" 
							class="form-control @error('password') error @enderror" 
							name="password" 
							value=""
						>																
						<span class="text-danger">
							@error('password')
								{{$errors->first('password')}}
							@enderror
						</span>
					</div>
					<div class="form-group">
						<button data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@push('scripts')
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
