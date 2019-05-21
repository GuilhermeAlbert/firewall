@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">{{ __('permissions.permissions') }}</h1>
  	<p class="mb-4">{{ __('permissions.permissions_list') }}</p>

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>{{ __('permissions.description') }}</th>
		              		<th>{{ __('permissions.access_level') }}</th>
		              		<th>{{ __('permissions.status') }}</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($permissions as $key => $permission) 
				            <tr>
				              	<td>{{ $permission->id }}</td>
				              	<td>{{ $permission->description }}</td>
				              	<td>
				              		@if ($permission->access_level_id == 1) 
										{{ __('permissions.system') }}
				              		@else
										{{ __('permissions.user') }}
				              		@endif
				              	</td>
				              	<td>
				              		@if ($permission->status_id == 1) 
										{{ __('permissions.active') }}
				              		@else
									  	{{ __('permissions.inactive') }}
				              		@endif
				              	</td>
				            </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@endsection