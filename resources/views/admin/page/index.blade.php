@extends('admin.layouts.fixed')

@section('title','Setting')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <div class="row">
                    <h1 class="m-0 text-dark">Pages</h1> &nbsp;
                </div>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Pages</li>
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
        <div class="card-header">
            <a href="{{ route('admin.page.create') }}" class="pull-right btn btn-sm btn-success">New Page</a>
        </div>
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Page Title</th>
                            <th>Page Name</th>
                            <th>Priority</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pages as $item)
                            <tr>
                                <td>{{ $pages->total()-$loop->index)-(($pages->currentpage()-1) * $pages->perpage() }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->priority }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ ucfirst($item->status) }}</td>
                                <td>
                                <a href="{{ route('admin.page.edit',$item) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="{{ route('admin.page.delete',$item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure ?');"><i class="fa fa-trash"></i></button>
                                </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Pages Created Yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                    {{ $pages->links() }}
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
