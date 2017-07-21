@extends('layouts.master')
@section('title')
@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissable fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('status') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-dismissable fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('error') }}
</div>
@endif

 <h1>Edit PO <span>({{$po->code}} - {{$po->client}})</span></h1>
<hr/>

<form action="{{url('/updatePO',$po->poid)}}" class="form-horizontal"  method="put">
	{{ csrf_field() }}
<!-- 					<div class="col-lg-3">
						<button type="submit" class="btn btn-success" onclick="return confirm('Create IPO?');" value="">Refresh <i class="fa fa-refresh fa-lg" aria-hidden="true"></i></button>
						<a href="{{route('product.index')}}" class="btn btn-default space">CANCEL</a>
					</div>
					<div class="col-lg-3">
						
					</div> -->
					


					<table class="table 
					table-bordered table-hover" align="center">
					<thead class="thcustom">
						<tr>
							<th width="2%"></th>
							<th width="3%">NO</th>
							<th width="15%">CODE</th>
							<th width="40%">DESCRIPTION</th>
							<th width="7%">QTY</th>
							<th width="10%">UOM</th>
							<th width="10%">PRICE</th>

						</tr>
					</thead>
					<tbody>
						@php $no = 1; @endphp
						@forelse($storeproducts as $product)
						<tr>
							<td>
								<input type="checkbox" name="selected[]" value="{{$product->id}}" checked/>
							</td>
							<td>{{$no++}}</td>
							<td><a href="{{route('product.edit',$product->id)}}">{{$product->code}}</a></td>
							<td>{{$product->description}} </td>
							<td>
								
								<input name="quantity[]" class="form-control" type="number" value="{{$product->quantity}}">
								@if ($errors->has('quantity'))
								<span class="help-block">
									<strong>{{ $errors->first('quantity') }}</strong>
								</span>
								@endif
							</td>
							<td>
								<select class="form-control" name="uom[]" id="uom">
									@if ($product->uom == 'box')
									<option value="box" style="display:none;" selected>Box</option>
									@elseif ($product->uom == 'pack')
									<option value="pack" style="display:none;" selected>Pack</option>
									@elseif ($product->uom == 'piece')
									<option value="piece" style="display:none;" selected>Piece</option>
									@elseif ($product->uom == 'roll')
									<option value="roll" style="display:none;" selected>Roll</option>
									@endif
									<option value="box">Box</option>
									<option value="pack">Pack</option>
									<option value="piece">Piece</option>
									<option value="roll">Roll</option>
								</select>
								@if ($errors->has('uom'))
								<span class="help-block">
									<strong>{{ $errors->first('uom') }}</strong>
								</span>
								@endif
							</td>
							<td>
								<input name="price[]" class="form-control" type="number" value="{{$product->price}}" >
								@if ($errors->has('price'))
								<span class="help-block">
									<strong>{{ $errors->first('price') }}</strong>
								</span>
								@endif
								
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="6" align="center">
								<h3>No Products Found</h3>
							</td>
						</tr>
						@endforelse
					</tbody>
				</table>
				<div class="col-lg-offset-1 col-md-8 col-sm-6">
					<div class="form-group{{ $errors->has('client') ? ' has-error' : '' }}">
						<label for="client" class="col-lg-5 control-label">*Client: </label>
						<div class="col-lg-7">
							<input id="client"  type="text" class="form-control" name="client" value="{{ $po->client }}">
							@if ($errors->has('client'))
							<span class="help-block">
								<strong>{{ $errors->first('client') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-lg-5 control-label">*Name: </label>
						<div class="col-lg-7">
							<input id="name"  type="text" class="form-control" name="name" value="{{ $po->name }}">
							@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
						<label for="position" class="col-lg-5 control-label">*Position: </label>
						<div class="col-lg-7">
							<input id="position"  type="text" class="form-control" name="position" value="{{ $po->position }}">
							@if ($errors->has('position'))
							<span class="help-block">
								<strong>{{ $errors->first('position') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('vat') ? ' has-error' : '' }}">
						<label for="vat" class="col-lg-5 control-label">*Tax: </label>
						<div class="col-lg-7">
							<select id="vat" name="vat" class="form-control">
							@if ($po->vat == 'VAT')
								<option value="VAT" style="display:none;" selected>VAT</option>
								@elseif ($po->vat == 'NON-VAT')
								<option value="NON-VAT" style="display:none;" selected>NON-VAT</option>
								@endif
								<option value="VAT">VAT</option>
								<option value="NON-VAT">NON-VAT</option>


							</select>
							@if ($errors->has('vat'))
							<span class="help-block">
								<strong>{{ $errors->first('vat') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
						<label for="terms" class="col-lg-5 control-label">*Terms: </label>
						<div class="col-lg-7">
							<input id="terms"  type="text" class="form-control" name="terms" value="{{ $po->terms }}">
							@if ($errors->has('terms'))
							<span class="help-block">
								<strong>{{ $errors->first('terms') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('instruc') ? ' has-error' : '' }}">
						<label for="instruc" class="col-lg-5 control-label">Additional Instructions: </label>
						<div class="col-lg-7">
							<textarea class="form-control" rows="3" id="instruc" name="instruc">{{ $po->instruc }}</textarea>

							@if ($errors->has('instruc'))
							<span class="help-block">
								<strong>{{ $errors->first('instruc') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
						<label for="discount" class="col-lg-5 control-label">Discount: </label>
						<div class="col-lg-7">
							<input name="discount" class="form-control" type="number"  step=0.01 value="{{ $po->discount }}">
							@if ($errors->has('discount'))
							<span class="help-block">
								<strong>{{ $errors->first('discount') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="col-lg-7 col-lg-offset-5">
						<hr/>

					</div>
					<div class="form-group{{ $errors->has('approved') ? ' has-error' : '' }}">
						<label for="approved" class="col-lg-5 control-label">*Approved by: </label>
						<div class="col-lg-7">
							<input id="approved"  type="text" class="form-control" name="approved" value="{{ $po->approved }}">
							@if ($errors->has('approved'))
							<span class="help-block">
								<strong>{{ $errors->first('approved') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<div class="form-group{{ $errors->has('aposition') ? ' has-error' : '' }}">
						<label for="aposition" class="col-lg-5 control-label">*A. Position: </label>
						<div class="col-lg-7">
							<input id="aposition"  type="text" class="form-control" name="aposition" value="{{ $po->aposition }}">
							@if ($errors->has('aposition'))
							<span class="help-block">
								<strong>{{ $errors->first('aposition') }}</strong>
							</span>
							@endif
						</div>
					</div>


					<div class="col-lg-7 col-lg-offset-5">
						
						<div class="form-group" align="center">
							<button type="submit" class="btn btn-danger" onclick="return confirm('Create IPO?');" id="btnIPOSubmit" value="">Create IPO <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
							<a href="{{route('product.index')}}" class="btn btn-default space">CANCEL</a>
						</div>
					</div>
				</div>
	<!-- 				<div class="form-group" align="center">
								<button type="submit" class="btn btn-danger" onclick="return confirm('Create IPO?');" value="">Create IPO <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
								<a href="{{route('product.index')}}" class="btn btn-default space">CANCEL</a>
							</div> -->
						</form>

						@stop