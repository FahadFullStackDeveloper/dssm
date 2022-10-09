<div class="nk-block nk-block-lg">
	<div class="card card-bordered">
		<form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="#" id="stepper-create-profile">
			<div class="row g-0 col-sep col-sep-md col-sep-xl">
				<div class="col-md-4 col-xl-4">
					<div class="card-inner">
						<ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Floorplan Design</div>
										<div class="sub-text">Lorem ipsum, </div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Basic 4 Styles</div>
										{{-- <div class="sub-text">Enter the profile info</div> --}}
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Color Scheme</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Color Scheme Split </div>
										<div class="sub-text">60/30/10</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Color5Plus</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Design Approaches ©</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">4 Space Components ©</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Enclosure</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Functional Areas</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Decorating Deco</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Utilities</div>
									</div>
								</div>
							</li>

							<li>
								<div class="step-item">
									<div class="step-text">
										<div class="lead-text">Final</div>
									</div>
								</div>
							</li>							
						</ul>
					</div>
				</div>

				<div class="col-md-8 col-xl-8">
					<div class="card-inner">
						<div class="nk-stepper-content">
							<div class="nk-stepper-steps stepper-steps">

								{{-- first step --}}
								@include('student.apply.formsteps.firstStep')								
								
								{{-- Second step --}}
								@include('student.apply.formsteps.secondStep')
								
								{{-- third step --}}
								@include('student.apply.formsteps.thirdStep')
								
								{{-- fourth step --}}
								@include('student.apply.formsteps.fourthStep')
								
								{{-- fifth step --}}
								@include('student.apply.formsteps.fifthStep')
								
								{{-- sixth step --}}
								@include('student.apply.formsteps.sixthStep')
								
								{{-- seventh step --}}
								@include('student.apply.formsteps.seventhStep')
								
								{{-- eight step --}}
								@include('student.apply.formsteps.eightStep')
								
								{{-- ninth step --}}
								@include('student.apply.formsteps.ninthStep')
								
								{{-- tenth step --}}
								@include('student.apply.formsteps.tenthStep')

								{{-- eleventh step --}}
								@include('student.apply.formsteps.eleventhStep')

								{{-- final Step --}}
								@include('student.apply.formsteps.finalStep')

							</div>
							<ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
								<li class="step-prev">
									<button class="btn btn-dim btn-primary">Back</button>
								</li>
								<li class="step-next">
									<button class="btn btn-primary">Continue</button>
								</li>
								<li class="step-submit">
									<button class="btn btn-primary">Submit</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>