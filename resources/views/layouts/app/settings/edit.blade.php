@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('settings.settings') }}</h1>
	</div>
	<p class="mb-4">{{ __('settings.settings_message') }}</p>

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          	<div class="col-lg-12">
            	<div class="p-5">
					<form class="user" method="post" name="form_settings_edit" action="#">
						@csrf

                        @foreach($settings as $setting)
						
                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <p>{{ __('settings.locale_settings') }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group row">

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="locale">{{ __('settings.locale') }}</label>								
                                <select class="form-control" name="locale" id="locale">
                                    @foreach($languages as $language)
                                        <option value="{{ $language->initials }}">{{ $language->description }}</option>
                                    @endforeach
                                </select>                                
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="locale">{{ __('settings.fallback_locale') }}</label>								
                                <select class="form-control" name="fallback_locale" id="fallback_locale">
                                    @foreach($languages as $language)
                                        <option value="{{ $language->initials }}">{{ $language->description }}</option>
                                    @endforeach
                                </select>                                
							</div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <hr><p>{{ __('settings.debug_settings') }}</p>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-6 mb-6 mb-sm-0">
                                <label for="debug">{{ __('settings.debug') }}</label>								
                                <select class="form-control" name="debug" id="debug">
                                    <option value="false">{{ __('settings.debug_false') }}</option>
                                    <option value="true">{{ __('settings.debug_true') }}</option>
                                </select>                                
                            </div>

                            <div class="col-sm-6 mb-6 mb-sm-0">
                                <label for="debugbar">{{ __('settings.debugbar') }}</label>								
                                <select class="form-control" name="debugbar" id="debugbar">
                                    <option value="true">{{ __('settings.debugbar_false') }}</option>
                                    <option value="true">{{ __('settings.debugbar_true') }}</option>                                    
                                </select>                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <hr><p>{{ __('settings.mail_settings') }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_driver">{{ __('settings.mail_driver') }}</label>
								<input type="text" class="form-control" value="" name="mail_driver" id="mail_driver" placeholder="{{ __('settings.mail_driver') }}" autocomplete="off">
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_port">{{ __('settings.mail_port') }}</label>
								<input type="text" class="form-control" value="" name="mail_port" id="mail_port" placeholder="{{ __('settings.mail_port') }}" autocomplete="off">
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_host">{{ __('settings.mail_host') }}</label>
								<input type="text" class="form-control" value="" name="mail_host" id="mail_host" placeholder="{{ __('settings.mail_host') }}" autocomplete="off">
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_username">{{ __('settings.mail_username') }}</label>
								<input type="text" class="form-control" value="" name="mail_username" id="mail_username" placeholder="{{ __('settings.mail_username') }}" autocomplete="off">
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_password">{{ __('settings.mail_password') }}</label>
								<input type="text" class="form-control" value="" name="mail_password" id="mail_password" placeholder="{{ __('settings.mail_password') }}" autocomplete="off">
							</div>

							<div class="col-sm-6 mb-6 mb-sm-0">
								<label for="mail_encryption">{{ __('settings.mail_encryption') }}</label>
								<input type="text" class="form-control" value="" name="mail_encryption" id="mail_encryption" placeholder="{{ __('settings.mail_encryption') }}" autocomplete="off">
							</div>
						</div>                          
                        @endforeach
						
                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <p>&nbsp;</p>
                            </div>
                        </div>

						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<button type="submit" class="btn btn-primary btn-setting btn-block">
									{{ __('settings.save') }}
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