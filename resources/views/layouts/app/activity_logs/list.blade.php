@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">{{ __('activity_logs.activity_logs') }}</h1>
  	<p class="mb-4">{{ __('activity_logs.have_a_control') }}</p>

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>{{ __('activity_logs.description') }}</th>
		              		<th>{{ __('activity_logs.date') }}</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($access_logs as $key => $access_log) 
				            <tr>
				              	<td>{{ $access_log->id }}</td>
				              	<td>{{ __('activity_logs.description_access_log') }}</td>
                                <td>{{ date( 'd/m/Y H:m' , strtotime($access_log->created_at)) }}</td>
				            </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@stop