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
		              		<th>Descrição</th>
		              		<th>Nível de acesso</th>
		              		<th>Status</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($permissoes as $key => $permissao): 
				            <tr>
				              	<td>{{ $permissao->id }}</td>
				              	<td>{{ $permissao->descricao }}</td>
				              	<td>
				              		@if ($permissao->nivel == 'U') 
				              			Usuário
				              		@else
				              			Sistema
				              		@endif
				              	</td>
				              	<td>
				              		@if ($permissao->status == 'A') 
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