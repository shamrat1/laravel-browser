@extends('layout.master')
@section('title',(ucwords($setting->site_name) ?? 'Your Site')." | ".$page->name)
@section('content')
    <div class="row my-3">
        <div class="col-2"></div>
        <div class="col-8">
        {!! $page->description !!}
        </div>
        <div class="col-2"></div>
    </div>
@endsection