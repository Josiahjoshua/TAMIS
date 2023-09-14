@extends('layouts.store_keeper')
@section('storecontent')
<form>
	<div class="card-body" style="margin-top: 30px; margin-left:20px" >

		<h2></h2>
		<div class="row form-group">
			<div class="col-lg-1"><label for="assetno">Asset Code.</label></div>
			<div class="col-lg-4"><input class="form-control" type="text" name="assetno" id="assetno" required></div>
			<div class="col-lg-1"><label for="assetnodesc">Asset Description.</label></div>
			<div class="col-lg-4"><input class="form-control" name="assetnodesc" id="assetnodesc" required></div>
		</div>
		<div class="row form-group">
			<div class="col-lg-1"><label for="asstype">Condition</label></div>
			<div class="col-lg-4">
				<select class="form-control" name="asstype" id="asstype" required>
					<option value="" selected disabled>Condition</option>
					<option value="type1">EXCELLENT</option>
					<option value="type2">GOOD</option>
					<option value="type3">FAIR</option>
					<option value="type4">POOR</option>
					<option value="type5">VERY POOR</option>

				</select>
			</div>
			<div class="col-lg-1"><label for="regdate">Date Assigned</label></div>
			<div class="col-lg-4"><input class="form-control" name="acqdate" id="acqdate" type="date" required></div>

		</div>



		<div class="row form-group">
			<div class="col-lg-1"><label for="acqdate">Employee</label></div>
			<div class="col-lg-4"><input class="form-control" name="acqdate" id="acqdate"  required></div>
			<div class="col-lg-1"><label for="acqtype">Department</label></div>
			<div class="col-lg-4"><input class="form-control" name="acqtype" id="acqtype" required></div>
		</div>


	<!-- /.card-body -->

	<div class="card-footer">
		<div class="text-left"><input class="btn btn-primary" type="submit" value="Submit"></div>

	</div>
  </form>
@endsection
