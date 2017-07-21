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
 <h1>List of Products</h1>
<hr/>
<form action="{{url('/PDF')}}" method="put">
	{{ csrf_field() }}
	
	<div class="col-lg-10">
		<a href="product/create" class="btn btn-success" >Add Product <i class="fa fa-plus fa-lg" aria-hidden="true" title="Add New Product"></i></a>

		<button type="submit" class="btn btn-primary" onclick="return confirm('You will be redirected to PDF page.');" value="">Generate PDF <i class="fa fa-file-pdf-o  fa-lg" aria-hidden="true"></i></button>
	</div>


</form>


<form action="{{url('/select')}}" method="put">

	<div class="col-lg-2">
		<button type="submit" class="btn btn-info" onclick="return confirm('Create IPO?');" value="">Select Products <i class="fa fa-file-pdf-o  fa-lg" aria-hidden="true"></i></button>
	</div>

	<br/>
	<br/>
	<br/>
	<table id="productTable" class="table table-bordered table-hover" align="center">
		<thead class="thcustom">
			<tr>
				<th width="2%"></th>
				<th width="3%">ID</th>
				<th width="15%">CODE</th>
				<th width="40%">DESCRIPTION</th>
				<th width="10%">PRICE</th>
				<th width="7%" style="text-align:center">
					<a href="{{route('product.create')}}"><i class="fa fa-plus fa-2x" aria-hidden="true" title="Add New Product"></i></a>
				</th>
			</tr>
		</thead>
		<tbody>
			@php $no = 1; @endphp
			@forelse($products as $product)
			<tr>
				<td>
					<input type="checkbox" class="" name="selected[]" value="{{$product->id}}" />
				</td>
				<td>{{$no++}}</td>
				<td><a href="{{route('product.edit',$product->id)}}">{{$product->code}}</a></td>
				<td>{{$product->description}} </td>
				<td>{{$product->price}}</td>
				<td class="row">


					<a href="{{route('product.show',$product->id)}}" class="btn btn-primary btn-xs">Edit</a>
					<!-- <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete?')">Delete</a> -->
<button data-id="{{ $product->id }}" data-token="{{ csrf_token() }}" class="deleteProduct btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete?')">Delete </button>

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

</form>

@stop