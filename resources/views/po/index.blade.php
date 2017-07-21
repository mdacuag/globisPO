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

<!-- <form action="{{url('/PoPDF')}}" method="put">
	{{ csrf_field() }}
	
	<div class="col-lg-10">

		<button type="submit" class="btn btn-primary" onclick="return confirm('You will be redirected to PDF page.');" value="">Generate PO PDF <i class="fa fa-file-pdf-o  fa-lg" aria-hidden="true" ></i></button>
		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
	</div>


</form>
 -->
 <h1>List of PO</h1>
<hr/>

	<br/>
	<br/>
	<br/>
	<table id="poTable" class="table table-bordered table-hover" align="center">
		<thead >
			<tr>
				<th width="2%">ID</th>
				<th width="10%">CODE</th>
				<th width="10%">CLIENT</th>
				<th width="10%">STATUS</th>
				<th width="30%">REMARKS</th>
				<th width="15%">DATE</th>
				<th width="15%" style="text-align:center">
					Action
				</th>
			</tr>
		</thead>
		<tbody>
			@php $no = 1; @endphp
			@forelse($po as $po)
			<tr>

				<td>{{$no++}}</td>
				<td><a href="{{route('po.edit',$po->poid)}}">{{$po->code}}</a></td>
				<td>{{$po->client}} </td>
				<td>{{$po->status}}</td>
				<td>{{$po->remarks}}</td>
				@if($po->datemodified == null)
				<td>
				{{$po->dateadded}}
				</td>
				@else
				<td>
				{{$po->datemodified}}
				</td>
				@endif
				<td class="row" align="center">


					<a href="{{route('po.show',$po->poid)}}" class="btn btn-primary btn-xs">Change Status</a>
					<a href="{{url('/editPO',$po->poid)}}" class="btn btn-danger btn-xs">Edit PO</a>


				</td>

			</tr>
			@empty
			<tr>
				<td colspan="7" align="center">
					<h3>No Po Found</h3>
				</td>
			</tr>
			@endforelse
		</tbody>
	</table>

@stop