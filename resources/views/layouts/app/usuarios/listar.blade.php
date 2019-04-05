@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
        <a href="{{ route('usuarios.cadastrar') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i></a>
	</div>  

	<p class="mb-4">Verifique a <a href="{{ route('permissoes.listar') }}">listagem de permissões no sistema</a>.</p>

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
        <div class="card-header py-3">
          	<h6 class="m-0 font-weight-bold text-primary">Tabela</h6>
        </div>  		
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
				              	<td>{{ $usuario->permissao_descricao }}</td>
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