@extends('admin.layouts.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('admin.layouts.pagehead')

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Role</h3>
                    </div>
                    @include('includes.messages')

                    <!-- form start -->
                    <form role="form" action="{{ route('role.update', $role->id) }}" method="post">
                        @csrf @method("PUT")

                        <div class="box-body">

                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Role title</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Role title"
                                    value="{{ $role->name }}">
                                </div>

                                <div class="col-lg-4">
                                    <label for="name">Posts Permissions</label> @foreach ($permissions as $permission)
                                    @if($permission->for == 'user')
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                                                @foreach ($role->permissions as $role_permi)
                                                    @if ($role_permi->id == $permission->id)
                                                        checked
                                                    @endif
                                                @endforeach

                                            >{{ $permission->name }}
                                        </label>
                                    </div>
                                    @endif @endforeach
                                </div>

                                <div class="col-lg-4">
                                    <label for="name">User Permissions</label> @foreach ($permissions as $permission)

                                    @if($permission->for == 'post')
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                                                    @foreach ($role->permissions as $role_permi)
                                                        @if ($role_permi->id == $permission->id)
                                                            checked
                                                        @endif
                                                    @endforeach

                                                >{{ $permission->name }}
                                            </label>
                                        </div>
                                    @endif @endforeach
                                </div>

                                <div class="col-lg-4">
                                    <label for="name">Other Permissions</label>
                                    @foreach ($permissions as $permission)
                                        @if($permission->for == 'other')
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                                                        @foreach ($role->permissions as $role_permi)
                                                            @if ($role_permi->id == $permission->id)
                                                                checked
                                                            @endif
                                                        @endforeach

                                                    >{{ $permission->name }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('role.index') }}" class="btn btn-default">Back</a>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@endsection
