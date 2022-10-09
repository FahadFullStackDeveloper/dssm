@extends('layouts.studentApp')

@section('content')
	<div class="nk-block-head nk-block-head-lg">
		<div class="nk-block-head-content">
			<div class="nk-block-head-sub">
				<a class="back-to" href="{{ route('dashboard') }}">
					<em class="icon ni ni-arrow-left"></em>
					<span>Dashboard</span>
				</a>
			</div>
			<h2 class="nk-block-title fw-normal">DSSM LMS</h2>
			<div class="nk-block-des">
				{{-- <p class="lead">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, 
					cumque! Nisi aliquam voluptatibus enim accusamus est quos ipsa ratione quod.
				</p> --}}
			</div>
		</div>

	@include('student.apply._form_layout')
</div>
@endsection