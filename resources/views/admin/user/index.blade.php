@extends('admin.layouts.master')

@section('header')

@endsection

@section('content')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcomb-list">
          <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
              {{-- add modal button --}}
              <div class="modals-default-cl">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalone">
                  Add User
                </button>
                <div class="modal fade" id="myModalone" role="dialog">
                  <div class="modal-dialog modals-default">
                    <form action="{{ route('user.store') }}" method="post">
                      {{ csrf_field() }}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 align="center">Add User</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Name:</label>
                              <div class="nk-int-st">
                                <input type="text" name="name" required class="form-control input-sm" placeholder="Enter name">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Username:</label>
                              <div class="nk-int-st">
                                <input type="text" name="username" required class="form-control input-sm" placeholder="Enter username">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Password:</label>
                              <div class="nk-int-st">
                                <input type="password" name="password" required class="form-control input-sm"
                                  placeholder="Enter password">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Confirm Password:</label>
                              <div class="nk-int-st">
                                <input type="password" name="password_confirmation" required class="form-control input-sm"
                                  placeholder="Confirm password">
                              </div>
                            </div>
                          </div>
                          <label>Assign Role:</label>
                          <div class="row">
                            @foreach ($roles as $role)
                            <div class="col-lg-4">
                              <div class="fm-checkbox">
                                <label><input type="checkbox" name="role[]" class="i-checks" value="{{$role->id}}"><i></i> {{$role->name}}</label>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-default">Save</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-3">
              {{-- search area --}}
              <div class="pull-right">
                <form action="{{ route('user.index') }}" method="get">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" name="s" placeholder="Search by user name" value="{{ isset($s) ? $s : '' }}">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcomb area End-->
<!-- Table area Start-->
<div class="normal-table-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="normal-table-list">
          @include('include.message')
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Assigned Role</th>
                  <th width="12%">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($users as $user)
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->username }}</td>
                  <td>
                    @foreach($user->roles as $role)
                    {{$role->name}},
                    @endforeach
                  </td>
                  <td>
                    {{-- edit button --}}
                    <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#{{$user->id}}"></button>
                    <div class="modal fade" id="{{$user->id}}" role="dialog">
                      <div class="modal-dialog modals-default">
                        <form action="{{ route('user.update',$user->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 align="center">Edit User</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Name:</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="name" required class="form-control input-sm" value="{{$user->name}}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Username:</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="username" required class="form-control input-sm" value="{{$user->username}}">
                                  </div>
                                </div>
                              </div>
                              <label>Assign Role:</label>
                              <div class="row">
                                @foreach ($roles as $role)
                                <div class="col-lg-4">
                                  <div class="fm-checkbox">
                                    <label><input type="checkbox" name="role[]" class="i-checks" 
                                      value="{{$role->id}}"
                                      @foreach ($user->roles as $user_role)
                                        @if ($user_role->id == $role->id)
                                          checked
                                        @endif
                                      @endforeach
                                      ><i></i> {{$role->name}}</label>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-default">Save</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    {{-- delete button --}}
                    <form method="post" id="delete-form-{{$user->id}}" action="{{route('user.destroy', $user->id)}}" style="display: none;">

                      {{csrf_field()}}

                      {{method_field('DELETE')}}

                    </form>

                    <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                      class="fa fa-trash-o btn btn-danger">
                    </a>
                  </td>
                </tr>
                @empty
                  No user available!
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="pull-right">
            {{ $users->appends(['s'=>$s])->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Table area End-->
@endsection

@section('footer')

@endsection