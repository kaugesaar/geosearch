@extends('layouts.default')
@section('content')
<div class="row search-box">
    <div class="search-holder center-block">
        <h1>GeoSearch</h1>
        <h2 class="hidden-xs">Se vad Umeåbor* ser när de Googlar Cyklar.</h2>
        <div class="row">
            <div class="col-sm-5 col-sm-push-6">
                <p class="text-right text-fade hidden-xs">*Eller hela världen för den delen med.</p>
            </div>
        </div>
        @include('layouts._partials.errors')
        @include('layouts._partials.form')
    </div>
</div>

@stop