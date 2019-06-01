@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('users.users') }}</h1>
	</div>
	<p class="mb-4">{{ __('users.check_the') }} <a href="{{ route('permissions.list') }}">{{ __('users.permissions_list') }}</a>.</p>

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          	<div class="col-lg-12">
            	<div class="p-5">
					<form class="user" method="post" name="form_user_add" action="{{ route('users.edit_user') }}">
						@csrf

						<input type="hidden" name="id" value="{{ $id }}">

						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="name">{{ __('users.name') }}</label>
								<input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" placeholder="{{ __('users.name') }}" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="email">{{ __('users.mail') }}</label>
								<input type="text" class="form-control" value="{{ $user->email }}" name="email" id="email" placeholder="{{ __('users.mail') }}" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="password">{{ __('users.password') }}</label>
								<input type="password" class="form-control" value="{{ $user->password }}" name="password" id="password" placeholder="{{ __('users.password') }}" autocomplete="off">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="permission_id">{{ __('users.permission_access_level') }}</label>
								<select class="form-control" name="permission_id" id="permission_id">
									@foreach($permissions as $permission)
										<option value="{{ $permission->id }}" @if($user->permission_id == $permission->id) selected @endif>
											<?php $permission_description = "permissions.$permission->description"; ?>{{ __($permission_description) }}
										</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<button type="submit" class="btn btn-primary btn-user btn-block">
									{{ __('users.save') }}
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