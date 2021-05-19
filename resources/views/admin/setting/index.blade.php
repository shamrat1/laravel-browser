@extends('admin.layouts.fixed')

@section('title','Setting')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="m-0 text-dark">Setting</h1> &nbsp;
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Setting</li>
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
                <form enctype="multipart/form-data" action="{{ route('admin.setting.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $setting->id ?? '' }}">
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="">Site Name</label>
                                    <input type="text" name="site_name" class="form-control" value="{{ $setting->site_name ?? '' }}">
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col form-group">
                                            <label for="">Site Logo</label>
                                            <input type="file" name="logo" class="form-control">
                                        </div>
                                        <div class="col form-group">
                                            <label for="">Number of windows allowed</label>
                                            <input type="text" name="number_of_windows" class="form-control" value="{{ $setting->number_of_windows ?? 0 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <img class="img rounded shadow" src="{{ asset($setting->site_logo) }}" alt="" height="150" width="150">
                        </div>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Site Description</label>
                        <textarea name="site_description" cols="30" rows="5" class="form-control">{{ $setting->site_description ?? '' }}</textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-right">
                            <button class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
