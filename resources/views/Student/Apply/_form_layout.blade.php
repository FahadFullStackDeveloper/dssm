@push('styles')
	<style>
		table.steelBlueCols {
			border: 0px solid #555555;
			width: 400px;
			text-align: center;
			border-collapse: collapse;
		}

		table.steelBlueCols td, table.steelBlueCols th {
			border: 1px solid #505050;
			padding: 5px 10px;
		}

		table.steelBlueCols tbody td {
			font-size: 12px;
			font-weight: bold;
			color: #FFFFFF;
		}
		table.steelBlueCols thead {
			background: #858585;
		}
		table.steelBlueCols thead th {
			font-size: 15px;
			font-weight: bold;
			color: #FFFFFF;
			text-align: left;
		}
		table.steelBlueCols tfoot td {
			font-size: 13px;
		}
		table.steelBlueCols tfoot .links {
			text-align: right;
		}

		table.steelBlueCols tfoot .links a{
			display: inline-block;
			background: #FFFFFF;
			color: #398AA4;
			padding: 2px 8px;
			border-radius: 5px;
		}

		.table td:first-child, .table th:first-child {
			padding-left: .6rem;
		}
		.table-bordered td, .table-bordered th {
			padding-left: .6rem;
			padding-right: .6rem;
		}
		.table-bordered td, .table-bordered th {
			padding-left: .6rem;
			padding-right: .6rem;
		}
	</style>
@endpush

<div class="nk-block nk-block-lg">
	<div class="card card-bordered">
		<form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="#" id="stepper-create-profile">
			<div class="row g-0 col-sep col-sep-md col-sep-xl">


				<div class="table-responsive">
					<table class="table table-bordered">
						<thead class="bg-gray-100">
							<tr>
								<th scope="col" colspan="3" class="align-top">
									<h4>Design Spread Sheet Method ©</h4>
								</th>
								<th scope="col" class="align-top">Core5Plus ©</th>
								<th scope="col" class="align-top w-min-220px">A Framework for Design ©</th>
								<th scope="col" colspan="3" class="w-min-350px">
									____ Fine Tune Approach Proposal
									<br>
									____ Create Superior Approach Proposal
									<br>
									____ Challenge Existing Approach Proposal
									<br>
									____ Limited Approach Proposal ©

								</th>
								<th scope="col" class="align-middle">Office/Study</th>
							</tr>
						</thead>
						<thead class="bg-gray-100">
							<tr>
								<th scope="col" class="align-middle w-min-220px">
									<small class="fs-11px">Copyright 2022 by Boyd Wichman</small>
								</th>
								<th scope="col" colspan="3" class="w-min-400px">																											
									<div class="form-group">
										<div class="form-control-wrap">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="decorator">Decorator/Contractor ©</span>
												</div>
												<input type="text" class="form-control" id="decorator" name="decorator">
											</div>
										</div>
									</div>
								</th>
								<th scope="col" colspan="3">																		
									<div class="form-group">
										<div class="form-control-wrap">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="customer">Customer</span>
												</div>
												<input type="text" class="form-control" id="customer" name="customer">
											</div>
										</div>
									</div>
								</th>
								<th scope="col" colspan="2">									
									<div class="form-group">
										<div class="form-control-wrap">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="project">Project</span>
												</div>
												<input type="text" class="form-control" id="project" name="project">
											</div>
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>

							@include('student.apply.formsteps.tr_1')
							@include('student.apply.formsteps.tr_2_enclosure')
							@include('student.apply.formsteps.tr_3_functional_areas')
							@include('student.apply.formsteps.tr_4_decorating_deco')
							@include('student.apply.formsteps.tr_5_utilites')
							
						</tbody>
					</table>
				</div>
			</div>
		</form>
	</div>
</div>