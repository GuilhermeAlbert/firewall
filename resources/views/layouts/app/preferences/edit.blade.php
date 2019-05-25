@extends('base')

@section('content')
<div class="container-fluid">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('preferences.preferences') }}</h1>
	</div>
	<p class="mb-4">{{ __('preferences.preferences_message') }}</p>

    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          	<div class="col-lg-12">
            	<div class="p-5">
					<form class="user" method="post" id="form_preferences_edit" name="form_preferences_edit" action="{{ route('preferences.edit_preferences') }}">
						@csrf
						
                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <p>{{ __('preferences.locale_preferences') }}</p>
                            </div>
                        </div>
                        
                        <div class="form-group row">

							<div class="col-sm-12 mb-12 mb-sm-0">
								<label for="locale">{{ __('preferences.locale') }}</label>								
                                <select class="form-control" name="locale" id="locale">
                                    @foreach($languages as $language)
                                        <option value="{{ $language->initials }}" @if($language->initials == $preferences->locale) selected @endif>{{ $language->description }}</option>
                                    @endforeach
                                </select>                                
							</div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <hr><p>{{ __('preferences.mail_preferences') }}</p>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <label for="receive_log_mails">{{ __('preferences.receive_log_mails') }}</label>								
                                <select class="form-control" name="receive_log_mails" id="receive_log_mails">
                                    <option value="false" @if($preferences->receive_log_mails == 'false') selected @endif>{{ __('preferences.receive_log_mails_false') }}</option>
                                    <option value="true" @if($preferences->receive_log_mails == 'true') selected @endif>{{ __('preferences.receive_log_mails_true') }}</option>
                                </select>                                
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <div class="col-sm-12 mb-12 mb-sm-0">
                                <p>&nbsp;</p>
                            </div>
                        </div>

						<div class="form-group row">
							<div class="col-sm-12 mb-12 mb-sm-0">
								<button type="submit" class="btn btn-primary btn-setting btn-block">
									{{ __('preferences.save') }}
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