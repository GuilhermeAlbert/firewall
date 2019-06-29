@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	        <h1 class="h3 mb-0 text-gray-800">{{ __('domains.title') }}</h1>
	        <a href="{{ route('deny.add_domains') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i></a>
	</div>  

  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
							<th>Domínio</th>
		              		<th>Ações</th>
		            	</tr>
		          	</thead>
	          		<tbody>
					  @foreach ($domains as $domain)
                        <tr>
                            <td>{{ $domain->id }}</td>
							<td>{{ $domain->description }}</td>
							<td>{{ $domain->id }}</td>
                        </tr>
					  @endforeach
					  
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@stop