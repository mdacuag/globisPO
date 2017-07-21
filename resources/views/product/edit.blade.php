@extends('layouts.master')
@section('title')
@section('content')
 <h1>Edit Product</h1>
<hr/>
    <form class="form-horizontal" action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
        <input name="_method" type="hidden" value="PATCH">
        {{csrf_field()}}

		<fieldset>

			<div class="col-lg-offset-3 col-md-6 col-sm-6">
				
				<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
					<label for="code" class="col-lg-3 control-label">*Code: </label>
					<div class="col-lg-9">
						<input id="code"  type="text" class="form-control" name="code" value="{{$product->code}}">
						@if ($errors->has('code'))
						<span class="help-block">
							<strong>{{ $errors->first('code') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
					<label for="description" class="col-lg-3 control-label">*Product: </label>
					<div class="col-lg-9">
						<!-- <textarea id="description" required type="text" class="form-control" name="description" value="{{ old('description') }}" rows="3" ></textarea> -->
						<input id="description"  type="text" class="form-control" name="description" value="{{$product->description}}">
						@if ($errors->has('description'))
						<span class="help-block">
							<strong>{{ $errors->first('description') }}</strong>
						</span>
						@endif
					</div>
				</div>
				
				<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
					<label for="price" class="col-lg-3 control-label">*Price: </label>
					<div class="col-lg-9">
						<div class="input-group">
							<span class="input-group-addon">₱</span>
							<input id="price"  type="number" class="form-control" name="price" value="{{$product->price}}">
						</div>
						@if ($errors->has('price'))
						<span class="help-block">
							<strong>{{ $errors->first('price') }}</strong>
						</span>
						@endif
					</div>
				</div>
				
				<div class="col-lg-9 col-lg-offset-3">
					<div class="form-group" align="center">
						<input type="submit" class="btn btn-primary space" value="UPDATE">
						<a href="{{route('product.index')}}" class="btn btn-default space">CANCEL</a>
					</div>
				</div>
			</div>
			
			
		</fieldset>
	</form>
@stop