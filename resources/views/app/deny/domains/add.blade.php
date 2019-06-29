@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('domains.title') }}</h1>
	</div>
	<p class="mb-4">{{ __('users.check_the') }} <a href="{{ route('permissions.list') }}">{{ __('users.permissions_list') }}</a>.</p>

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          	<div class="col-lg-12">
            	<div class="p-5">
				<form class="user" method="post" name="form_user_add" action="">
						@csrf

						<input type="hidden" name="id" value="">

						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="name"></label>
								<input type="text" class="form-control" value="" name="domain" id="domain" placeholder="{{ __('users.name') }}" autocomplete="off">
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