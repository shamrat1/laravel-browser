@extends('admin.layouts.fixed')

@section('title',"Setup Page")

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="m-0 text-dark">{{$page != null ? 'Edit' : 'New'}} Page</h1> &nbsp;
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.page.index') }}">Page</a></li>
                    <li class="breadcrumb-item active">{{$page != null ? 'Edit' : 'New'}} Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="col-12 card rounded shadow">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ ucwords($error) }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if($page != null)
                     <form action="{{ route('admin.page.update',$page) }}" method="POST">
                     @method('PUT')
                @else
                    <form action="{{ route('admin.page.store') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $page->name ?? old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $page->title ?? old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" cols="30" rows="5" class="form-control">{{ $page->description ?? old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="drafted" @if(($page->status ?? old('status')) == 'drafted') selected @endif>drafted</option>
                            <option value="live" @if(($page->status ?? old('status')) == 'live') selected @endif>live</option>
                            <option value="deleted" @if(($page->status ?? old('status')) == 'deleted') selected @endif>deleted</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Priority</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority" id="exampleRadios1" value="0" @if(($page->priority ?? old('priority')) == 0) checked @endif>
                            <label class="form-check-label" for="exampleRadios1">
                                0
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority" id="exampleRadios2" value="1" @if(($page->priority ?? old('priority')) == 1) checked @endif>
                            <label class="form-check-label" for="exampleRadios2">
                                1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="priority" id="exampleRadios2" value="2" @if(($page->priority ?? old('priority')) == 2) checked @endif>
                            <label class="form-check-label" for="exampleRadios2">
                                2
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Meta Key</label>
                        <input type="text" name="meta_key" class="form-control" value="{{ $page->meta_key ?? old('meta_key') }}">
                    </div>
                    <div class="form-group">
                        <label for="">MEta Description</label>
                        <textarea name="meta_description" cols="30" rows="5" class="form-control">{{ $page->meta_description ?? old('meta_description') }}</textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-right">
                            <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> {{$page != null ? 'Update' : 'Save'}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
