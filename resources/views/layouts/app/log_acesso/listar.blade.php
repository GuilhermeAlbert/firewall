@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">Log de atividades</h1>
  	<p class="mb-4">Tenha o controle das suas atividades realizadas no sistema</p>

  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>Descrição</th>
		              		<th>Data</th>
		            	</tr>
		          	</thead>
	          		<tbody>
	          			@foreach ($log_acessos as $key => $log_acesso) 
				            <tr>
				              	<td>{{ $log_acesso->id }}</td>
				              	<td>Foi efetuado {{ $log_acesso->tipo }} no endereço IP {{ $log_acesso->endereco_ip }}</td>
                                <td>{{ date( 'd/m/Y H:m' , strtotime($log_acesso->created_at)) }}</td>
				            </tr>
			            @endforeach
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@stop