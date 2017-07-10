@extends('base')

@section('custom_styles')
    <style>
        * {
            font-size: 2em;
        }
    </style>
@endsection

@section('content')
    {{ $html }}

@endsection