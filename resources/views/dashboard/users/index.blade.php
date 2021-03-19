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
              <div class="col-sm-6">
            <ol class="breadcrumb flaot-sm-right">
              <li class="breadcrumb-item flaot-sm-right" ><a href="{{route('dashboard.index')}}">@lang('site.dashboard')</a></li>
              <li class="breadcrumb-item active"> <a href="dashboard/users">@lang('site.users')</a></li>
            </ol>
          </div><!-- /.col -->
        </div>
          <table class="table table-bordered">
          	<thead>
          		<tr>
          			<th>ID</th>
          			<th>@lang('site.name')</th>
          			<th>@lang('site.email')</th>
          			<th>@lang('site.opretion')</th>    			
          		</tr>
          	</thead>
          	<tbody>
          		<tr>
                @if($users)
          			<!-- display users info -->
          			@foreach($users as $user)
          				<th>{{$user->id}}</th>
          				<th>{{$user->name}}</th>
          				<th>{{$user->email}}</th>
          				<th>
          					<!-- edit opreation -->
          					<a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-info">@lang('site.edit')</a>
          					<!-- delete opreatio -->
          					<form action="{{route('users.destroy',$user->id)}}" method="post" style="display: inline;">
          						@csrf
                		  @method('delete')
          						<button class="btn btn-sm btn-danger">@lang('site.delete')</button>
          					</form>
          				</th>
          			@endforeach
                @else
                  <div>@lang('site.not-found')</div>
                @endif
          		</tr>
          	</tbody>

          </table>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>

@endsection