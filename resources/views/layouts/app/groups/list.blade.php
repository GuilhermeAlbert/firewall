@extends('base')

@section('content')

<style>
    .center{ text-align: center; }
    .card-border{ border-color: #fff; border-width: 2px; }
    .colored{ color: #4e73df;}
    .card-selected{ border-color: #4e73df; border-width: 2px; }
    .card-link{ text-decoration: none; }
    .card-effect:hover{ color: #858796 !important; border-color: #858796; border-width: 2px; }
</style>

<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">{{ __('groups.groups') }}</h1>
  	<p class="mb-4">{{ __('groups.groups_list') }}</p>

    <div class="row">
        @foreach($groups as $group)
            
            <div class="col-md-4">
            <a class="card-link" href="{{ route('groups.select_group', ['id' => $group->id]) }}">
                <div class="card card-effect @if($group->selected == 'true') card-selected @endif card-border shadow mb-4">        
                    <div class="card-img-top center">
                        <p>&nbsp;</p>
                        <h1 class="colored"><i class="{{ $group->html_icon }}"></i></h1>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title center">{{ $group->title }}</h5>
                        <!-- <p class="card-text">{{ $group->description }}</p> -->
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>        
                </div>    
                </a>
            </div>
            
        @endforeach
    </div>


</div>
@stop