@extends('rfoutlet::layouts.master')

@section('content')
    <h1>Example Module</h1>

    <p>
        This view is loaded from module: {!! config('rfoutlet.name') !!}
    </p>
@stop
