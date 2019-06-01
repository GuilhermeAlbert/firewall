@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">{{ __('activity_logs.activity_logs') }}</h1>
  	<p class="mb-4">{{ __('activity_logs.have_a_control') }}</p>

  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>{{ __('activity_logs.description') }}</th>
							<th>{{ __('activity_logs.object') }}</th>
		              		<th>{{ __('activity_logs.date') }}</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($modification_logs as $key => $modification_log) 
				            <tr>
				              	<td>{{ $modification_log->id }}</td>
								<td><?php $log_description = "operations.$modification_log->operation"; ?>{{ __($log_description) }}</td>
								<td>{{ $modification_log->object }}</td>
                                <td>{{ date( 'd/m/Y H:m' , strtotime($modification_log->created_at)) }}</td>
				            </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@stop