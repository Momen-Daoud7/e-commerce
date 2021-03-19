@extends('layouts.app')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@lang('site.users')</h1>
          </div><!-- /.col -->
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"> <a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
              <li class="breadcrumb-item"> <a href="{{route('dashboard.users.index')}}">@lang('site.users')</a></li>
              <li class="breadcrumb-item active">@lang('site.add')</li>
            </ol>
          </div><!-- /.col -->
        </div>
      </div>
            @include('partials.errors')

              <!-- form start -->
              <form action="{{route('dashboard.users.store')}}" method="post">
              	@csrf
              	@method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">@lang('site.name')</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"name='name' value="{{old('name')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">@lang('email')</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id='exampleInputPassword1' name="password">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword2">@lang('site.password_confirm')</label>
                    <input type="password" class="form-control" id='exampleInputPassword2' name="password_confirm">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">@lang('site.submit')</button>
                </div>
                          <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">@lang('site.presmissions')</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  @php
                    $models = ['users' , 'catgeories' ,'products'];
                  @endphp
                  @foreach($models as $index=>$model)
                  <li class="nav-item"><a class="nav-link {{$index == 0 ? 'active' : ''}}" href="#{{$model}}" data-toggle="tab">{{$model}}</a></li>
                  @endforeach
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                      Dropdown <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                      <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                    </div>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  @foreach($models as $model)

                  <div class="tab-pane {{$index == 0 ? 'active' : ''}}" id="{{$model}}">
                    <label><input type="checkbox" name="permissions[]" value="create.{{$model}}">@lang('site.create')</label>
                    <label><input type="checkbox" name="permissions[]" value="read.{{$model}}">@lang('site.read')</label>
                    <label><input type="checkbox" name="permissions[]" value="update.{{$model}}">@lang('site.update')</label>
                    <label><input type="checkbox" name="permissions[]" value="delete.{{$model}}">@lang('site.delete')</label>
                  </div>
                  @endforeach
                                   <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->

              </form>
            
            <!-- /.card -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>

@endsection