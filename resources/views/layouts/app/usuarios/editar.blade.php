@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuários</h1>
	</div>
	<p class="mb-4">Verifique a <a href="{{ route('permissoes.listar') }}">listagem de permissões no sistema</a>.</p>

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          	<div class="col-lg-12">
            	<div class="p-5">
					<form class="user" method="post" name="form_user_add" action="{{ route('usuarios.editar_usuario') }}">
						@csrf

						<input type="hidden" name="id" value="{{ $id }}">

						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="name">Nome</label>
								<input type="text" class="form-control" value="{{ $usuario->name }}" name="name" id="name" placeholder="Nome" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="email">E-mail</label>
								<input type="text" class="form-control" value="{{ $usuario->email }}" name="email" id="email" placeholder="E-mail" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="password">Password</label>
								<input type="password" class="form-control" value="{{ $usuario->password }}" name="password" id="password" placeholder="Password" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="id_permissao">Permissão: Nível de acesso</label>
								<select class="form-control" name="id_permissao" id="id_permissao">
									@foreach($permissoes as $permissao)
										<option value="{{ $permissao->id }}">{{ $permissao->descricao }}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Salvar
								</button>						
							</div>
						</div>
						
					</form>
        		</div>
      		</div>
    	</div>
  	</div>
</div>
@endsection