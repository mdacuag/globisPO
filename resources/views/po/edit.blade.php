@extends('layouts.master')
@section('title')
@section('content')
 <h1>Update PO Status<span>({{$po->code}} - {{$po->client}})</span></h1>
<hr/>
<form class="form-horizontal" action="{{route('po.update', $po->poid)}}" method="post" enctype="multipart/form-data">
	<input name="_method" type="hidden" value="PATCH">
	{{csrf_field()}}

	<fieldset>

		<div class="col-lg-offset-3 col-md-6 col-sm-6">
			<label class="col-lg-12"></label>
			<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
				<label for="status" class="col-lg-4 control-label">*Status: </label>
				<div class="col-lg-8">
					<select id="status" name="status" class="form-control">
						@if ($po->status == 'Pending')
						<option value="Pending" style="display:none;" selected>Pending</option>
						@elseif ($po->status == 'Approved')
						<option value="Approved" style="display:none;" selected>Approved</option>
						@elseif ($po->status == 'Change')
						<option value="Change" style="display:none;" selected>Change</option>
						@elseif ($po->status == 'Cancelled')
						<option value="Cancelled" style="display:none;" selected>Cancelled</option>
						@elseif ($po->status == 'Completed')
						<option value="Completed" style="display:none;" selected>Completed</option>
						@endif
						<option value="Pending" >Pending</option>
						<option value="Change">Change</option>
						<option value="Approved" >Approved</option>
						<option value="Cancelled" >Cancelled</option>
						<option value="Completed" >Completed</option>


					</select>
					@if ($errors->has('vat'))
					<span class="help-block">
						<strong>{{ $errors->first('status') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
			<label for="remarks" class="col-lg-4 control-label">Remarks: </label>
				<div class="col-lg-8">
					<textarea class="form-control" rows="3" id="remarks" name="remarks" >{{ $po->remarks }}</textarea>

					@if ($errors->has('remarks'))
					<span class="help-block">
						<strong>{{ $errors->first('remarks') }}</strong>
					</span>
					@endif
				</div>
			</div>

			<div class="col-lg-9 col-lg-offset-3">
				<div class="form-group" align="center">
					<input type="submit" class="btn btn-primary space" value="UPDATE">
					<a href="{{route('po.index')}}" class="btn btn-default space">CANCEL</a>
				</div>
			</div>
		</div>


	</fieldset>
</form>
@stop