@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">Permissões</h1>
  	<p class="mb-4">Listagem de permissões no sistema</p>

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>Nome</th>
		              		<th>E-mail</th>
		              		<th>Permissão</th>
		              		<th>Nível de acesso</th>
		              		<th>Status</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($usuarios as $key => $usuario): 
				            <tr>
				              	<td>{{ $usuario->id }}</td>
				              	<td>{{ $usuario->name }}</td>
				              	<td>{{ $usuario->email }}</td>
				              	<td>{{ $usuario->id_permissao }}</td>
				              	<td>
				              		@if ($usuario->nivel == 'U') 
				              			Usuário
				              		@else
				              			Sistema
				              		@endif
				              	</td>
				              	<td>
				              		@if ($usuario->status == 'A') 
				              			Ativo
				              		@else
				              			Inativo
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