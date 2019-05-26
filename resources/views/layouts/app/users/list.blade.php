@extends('base')

@section('content')
	<div class="container-fluid">

		<div class="d-sm-flex align-items-center justify-content-between mb-4">
	        <h1 class="h3 mb-0 text-gray-800">{{ __('users.users') }}</h1>
	        <a href="{{ route('users.add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i></a>
		</div>  

		<p class="mb-4">{{ __('users.check_the') }} <a href="{{ route('permissions.list') }}">{{ __('users.permissions_list') }}</a>.</p>

	  	<!-- DataTales Example -->
	  	<div class="card shadow mb-4">
	        <div class="card-header py-3">
	          	<h6 class="m-0 font-weight-bold text-primary">{{ __('users.users_table') }}</h6>
	        </div>  		
			<div class="card-body">
		      	<div class="table-responsive">
		        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			          	<thead>
			            	<tr>
			              		<th>#</th>
			              		<th>{{ __('users.name') }}</th>
			              		<th>{{ __('users.mail') }}</th>
			              		<th>{{ __('users.permission') }}</th>
			              		<th>{{ __('users.status') }}</th>
			              		@if (Auth::user()->permission_id != 2)
			              			<th>{{ __('users.actions') }}</th>
			              		@endif
			            	</tr>
			          	</thead>
		          		<tbody>
		          			@foreach ($users as $key => $user)
					            <tr>
					              	<td>{{ $user->id }}</td>
					              	<td>{{ $user->name }}</td>
					              	<td>{{ $user->email }}</td>
					              	<td>{{ $user->permission }}</td>
					              	<td>
					              		@if ($user->status_id == 1) 
					              			{{ __('users.active') }}
					              		@else
					              			{{ __('users.inactive') }}
					              		@endif
					              	</td>
									@if (Auth::user()->permission_id == 3)
						                <td>
						                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">
						                    	<button class="btn btn-success">
							                    	<i class="fas fa-pen"></i>
						                		</button>
						                	</a>
						                </td>
						            @elseif (Auth::user()->permission_id == 1 || Auth::user()->permission_id == 4)
						                <td>
						                	@if($user->id != 1)
							                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">
							                    	<button class="btn btn-success">
								                    	<i class="fas fa-pen"></i>
							                		</button>
							                	</a>
												<a href="{{ route('users.delete_user', ['id' => $user->id]) }}">
													<button class="btn btn-danger" type="submit" title="{{ __('users.delete') }}">
														<i class="fas fa-trash-alt"></i>
													</button>
												</a>
						                    @endif
						                </td>					                					            

									@endif
					            </tr>
				            @endforeach
				        </tbody>
		        	</table>
		      	</div>
		    </div>
	  	</div>
	</div>
@endsection