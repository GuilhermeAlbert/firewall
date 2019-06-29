@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">{{ __('domains.domains') }}</h1>
		<a href="{{ route('deny.domains.add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i></a>
	</div>  

	<p class="mb-4">{{ __('domains.description') }}</p>

  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
							<th>{{ __('domains.domain') }}</th>
							<th>{{ __('domains.group') }}</th>
							@if (Auth::user()->permission_id != 2)
								<th>{{ __('domains.actions') }}</th>
			              	@endif	
		            	</tr>
		          	</thead>
	          		<tbody>
					  @foreach ($domains as $domain)
                        <tr>
                            <td>{{ $domain->id }}</td>
							<td>{{ $domain->description }}</td>
							<td>{{ $domain->group_id }}</td>
							@if (Auth::user()->permission_id == 3)
								<td>
									<a href="{{ route('deny.domains.edit', ['id' => $domain->id]) }}">
										<button class="btn btn-success">
											<i class="fas fa-pen"></i>
										</button>
									</a>
								</td>
							@elseif (Auth::user()->permission_id == 1 || Auth::user()->permission_id == 4)
								<td>
										<a href="{{ route('deny.domains.edit', ['id' => $domain->id]) }}">
											<button class="btn btn-success">
												<i class="fas fa-pen"></i>
											</button>
										</a>
										<a href="{{ route('deny.domains.delete_domain', ['id' => $domain->id] ) }}">
											<button class="btn btn-danger" type="submit" title="{{ __('domains.delete') }}">
												<i class="fas fa-trash-alt"></i>
											</button>
										</a>
									
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
@stop