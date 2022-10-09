<tr>
	<th scope="row" class="bg-gray-100"><h6>Floorplan Design</h6> </th>
	<td class="w-min-200px">
		<div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac1-area1" name="ac1-area1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area2">Area 2</label>
				</div>
				<select class="form-control" id="ac1-area2" name="ac1-area2">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td class="w-min-200px">
		<div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac2-shape">Shape</label>
				</div>
				<select class="form-control" id="ac2-shape" name="ac2-shape">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td class="w-min-140px">
		<strong>Item in Space:</strong>
	</td>
	<td>

		<ul class="custom-control-group g-3 align-center flex-wrap">
			<label class="w-150px" for="ac3-60-70-occupied-yes">60-70% occupied</label>
			<li>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" value="yes" name="ac4-60-70-occupied"
						id="ac4-60-70-occupied-yes">
					<label class="custom-control-label" for="ac4-60-70-occupied-yes">Yes</label>
				</div>
			</li>
			<li>
				<div class="custom-control custom-radio checked">
					<input type="radio" class="custom-control-input" value="no" name="ac4-60-70-occupied"
						id="ac4-60-70-occupied-no">
					<label class="custom-control-label" for="ac4-60-70-occupied-no">No</label>
				</div>
			</li>
		</ul>
	</td>
	<td class="w-min-250px">
		<ul class="custom-control-group g-3 align-center flex-wrap">
			<label for="ac5-30-40-vacant-yes">30-40 vacant or open space</label>
			<li>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" value="yes" name="ac5-30-40-vacant"
						id="ac5-30-40-vacant-yes">
					<label class="custom-control-label" for="ac5-30-40-vacant-yes">Yes</label>
				</div>
			</li>
			<li>
				<div class="custom-control custom-radio checked">
					<input type="radio" class="custom-control-input" value="no" name="ac5-30-40-vacant"
						id="ac5-30-40-vacant-no">
					<label class="custom-control-label" for="ac5-30-40-vacant-no">No</label>
				</div>
			</li>
		</ul>
	</td>
	<td class="w-min-150px">
		<strong>Item Groupings:</strong>
	</td>
	<td class="w-min-175px">
		<ul class="custom-control-group g-3 align-center flex-wrap">
			<label for="ac6-6-11-feet-radius-yes">6 to 11 feet radius</label>
			<li>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" value="yes" name="ac7-6-11-feet-radius"
						id="ac7-6-11-feet-radius-yes">
					<label class="custom-control-label" for="ac7-6-11-feet-radius-yes">Yes</label>
				</div>
			</li>
			<li>
				<div class="custom-control custom-radio checked">
					<input type="radio" class="custom-control-input" value="no" name="ac7-6-11-feet-radius"
						id="ac7-6-11-feet-radius-no">
					<label class="custom-control-label" for="ac7-6-11-feet-radius-no">No</label>
				</div>
			</li>
		</ul>
	</td>
	<td class="w-min-220px">
		<ul class="custom-control-group g-3 align-center flex-wrap">
			<label for="">Good Circulation Patterns</label>
			<li>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" value="yes" name="ac8-good-circulation"
						id="ac8-good-circulation-yes">
					<label class="custom-control-label" for="ac8-good-circulation-yes">Yes</label>
				</div>
			</li>
			<li>
				<div class="custom-control custom-radio checked">
					<input type="radio" class="custom-control-input" value="no" name="ac8-good-circulation"
						id="ac8-good-circulation-no">
					<label class="custom-control-label" for="ac8-good-circulation-no">No</label>
				</div>
			</li>
		</ul>
	</td>
</tr>

<tr>
	<th scope="row" class="bg-gray-100"class="bg-gray-100"><h6>Basic 4 Styles</h6> </th>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac2_basic4styles" name="ac2_basic4styles">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>
		<b>Style 70/30 Split:</b>
	</td>
	<td>70% Style</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac2_70styles" name="ac2_70styles">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>30% Style</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac2_30styles" name="ac2_30styles">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>Other Style</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac2_otherStyle" name="ac2_otherStyle">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
</tr>

<tr>
	<th scope="row" class="bg-gray-100"><h6>Color Scheme</h6> </th>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac3_color_scheme_1" name="ac3_color_scheme_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac3_color_scheme_2" name="ac3_color_scheme_2">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac3_color_scheme_3" name="ac3_color_scheme_3">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac3_color_scheme_4" name="ac3_color_scheme_4">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>Metal</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div>
				<select class="form-control" id="ac3_metal_1" name="ac3_metal_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>Wood</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div>
				<select class="form-control" id="ac3_metal_1" name="ac3_metal_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
</tr>

<tr>
	<th scope="row" class="bg-gray-100"><h6>Color Scheme Split 60/30/10</h6> </th>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_1" name="ac3_color_scheme_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}
		60.0%
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac4_60prs_1" name="ac4_60prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_3" name="ac3_color_scheme_3">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}

		30.0%
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				<select class="form-control" id="ac3_30prs_1" name="ac3_30prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>10.0%</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				<select class="form-control" id="ac4_10prs_1" name="ac4_10prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
	<td>Other Colors:</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				<select class="form-control" id="ac4_otherColors_1" name="ac4_otherColors_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div>
	</td>
</tr>


<tr>
	<th scope="row" class="bg-gray-100"><h6>Color5Plus</h6> </th>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_1" name="ac3_color_scheme_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}
		Choosing Priority Items:
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_60prs_1" name="ac4_60prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Focal Point
			</div>
		</div>
	</td>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_3" name="ac3_color_scheme_3">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}

		Important Item 1
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				{{-- <select class="form-control" id="ac3_30prs_1" name="ac3_30prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Important Item 1
			</div>
		</div>
	</td>
	<td>Important Item 1</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_10prs_1" name="ac4_10prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Unusual or Unique item
			</div>
		</div>
	</td>
	<td>Support Items</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_otherColors_1" name="ac4_otherColors_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Support Items
			</div>
		</div>
	</td>
</tr>


<tr>
	<th scope="row" class="bg-gray-100"><h6>4 Space Components ©</h6> </th>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_1" name="ac3_color_scheme_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}
		Enclosure:
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_60prs_1" name="ac4_60prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Inside of the building structure
			</div>
		</div>
	</td>
	<td>
		{{-- <div class="form-control-wrap">
			<div class="input-group">
				<div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div>
				<select class="form-control" id="ac3_color_scheme_3" name="ac3_color_scheme_3">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select>
			</div>
		</div> --}}

		Functional Areas:
	</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac1-area1">Area 1</label>
				</div> --}}
				{{-- <select class="form-control" id="ac3_30prs_1" name="ac3_30prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Areas when the homeowner uses the items
			</div>
		</div>
	</td>
	<td>Decorating Decor:</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_10prs_1" name="ac4_10prs_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Space accents for use and beauty
			</div>
		</div>
	</td>
	<td>Utilities:</td>
	<td>
		<div class="form-control-wrap">
			<div class="input-group">
				{{-- <div class="input-group-prepend">
					<label class="input-group-text" for="ac3_metal_1">Name</label>
				</div> --}}
				{{-- <select class="form-control" id="ac4_otherColors_1" name="ac4_otherColors_1">
					<option selected="">Choose...</option>
					<option value="1">One</option>
					<option value="2">Two</option>
					<option value="3">Three</option>
				</select> --}}

				Items needed for the space use
			</div>
		</div>
	</td>
</tr>