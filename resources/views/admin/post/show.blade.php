@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('adm/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('admin.layouts.pagehead')

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Title</h3>
                @can('posts.create', Auth::user())
                    <a class="col-lg-offset-5 btn btn-success" href="{{ route('post.create') }}">Add new Post</a>
                @endcan

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        @include('includes.messages')
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Slug</th>
                                    <th>Create At</th>

                                    @can('posts.update', Auth::user())
                                        <th>Edit</th>
                                    @endcan

                                    @can('posts.delete', Auth::user())
                                        <th>Delete</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->subtitle }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ $post->created_at }}</td>

                                    @can('posts.update', Auth::user())
                                        <td><a href="{{ route('post.edit', $post->id) }}" class="fa fa-pencil" aria-hidden="true"></a></td>
                                    @endcan

                                    @can('posts.delete', Auth::user())
                                        <td>
                                            <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="post" style="display: none">
                                                @csrf @method("DELETE")

                                            </form>

                                            <a href="" onclick="
                                                if(confirm('Are you sure, You Want to delete this?'))
                                                {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $post->id }}').submit();
                                                }
                                                else{
                                                    event.preventDefault();
                                                }">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    @endcan
                                </tr>

                                @empty
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Slug</th>
                                    <th>Create At</th>

                                    @can('posts.update', Auth::user())
                                        <th>Edit</th>
                                    @endcan

                                    @can('posts.delete', Auth::user())
                                        <th>Delete</th>
                                    @endcan
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('adm/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adm/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
@endsection
