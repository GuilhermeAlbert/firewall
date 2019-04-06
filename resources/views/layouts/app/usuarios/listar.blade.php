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
			              		@if (Auth::user()->id_permissao != 2)
			              			<th>Ações</th>
			              		@endif
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
									@if (Auth::user()->id_permissao == 3 && $usuario->nivel == "U")
						                <td>
						                    <a href="{{ route('usuarios.editar', ['id' => $usuario->id]) }}">
						                    	<button class="btn btn-success">
							                    	Editar
						                		</button>
						                	</a>
						                </td>
						            @elseif (Auth::user()->id_permissao == 4 && $usuario->nivel == "U")
						                <td>
						                    <a href="{{ route('usuarios.editar', ['id' => $usuario->id]) }}">
						                    	<button class="btn btn-success">
							                    	Editar
						                		</button>
						                	</a>
						                    <button class="btn btn-danger" type="submit" title="Excluir" data-toggle="modal" data-target="#excluirModal">
						                    	<i class="fa fa-trash-o m-r-10" aria-hidden="true"></i>
						                    	Excluir
						                    </button>
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

	@foreach($usuarios as $usuario)
		<!-- Modal exclusão -->
	    <div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="excluirModalLabel" aria-hidden="true">
	        <div class="modal-dialog" role="document">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title" id="excluirModal">Atenção!</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
	                    Deseja realmente excluir o registro?
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	                    <form action="{{ route('usuarios.excluir', ['id' => $usuario->id]) }}" method="POST">
	                        @csrf
	                        <button class="btn btn-primary" title="Excluir" type="submit">Excluir</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
		<!-- Modal exclusão -->
	@endforeach

@endsection