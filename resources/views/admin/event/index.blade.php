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
                  Add Event
                </button>
                <div class="modal fade" id="myModalone" role="dialog">
                  <div class="modal-dialog modals-default">
                    <form action="{{ route('event.store') }}" method="post">
                      {{ csrf_field() }}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 align="center">Add Event</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Event Name:</label>
                              <div class="nk-int-st">
                                <input type="text" name="name" required class="form-control input-sm" placeholder="Enter event name">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Starting Date:</label>
                              <div class="nk-int-st">
                                <input type="date" name="start_date" required class="form-control input-sm" placeholder="Enter start date">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Ending Date:</label>
                              <div class="nk-int-st">
                                <input type="date" name="end_date" required class="form-control input-sm" placeholder="Enter end date">
                              </div>
                            </div>
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
                <form action="{{ route('event.index') }}" method="get">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" name="s" placeholder="Search by event name" value="{{ isset($s) ? $s : '' }}">
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
                  <th>Event Name</th>
                  <th>Starting Date</th>
                  <th>Ending Date</th>
                  <th width="12%">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($events as $event)
                <tr>
                  <td>{{ $event->name }}</td>
                  <td>{{ $event->start_date }}</td>
                  <td>{{ $event->end_date }}</td>
                  <td>
                    {{-- edit button --}}
                    <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#{{$event->id}}"></button>
                    <div class="modal fade" id="{{$event->id}}" role="dialog">
                      <div class="modal-dialog modals-default">
                        <form action="{{ route('event.update',$event->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 align="center">Edit Event</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Event Name:</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="name" required class="form-control input-sm" value="{{ $event->name }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Starting Date:</label>
                                  <div class="nk-int-st">
                                    <input type="date" name="start_date" required class="form-control input-sm" value="{{ $event->start_date }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Ending Date:</label>
                                  <div class="nk-int-st">
                                    <input type="date" name="end_date" required class="form-control input-sm" value="{{ $event->end_date }}">
                                  </div>
                                </div>
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
                    <form method="post" id="delete-form-{{$event->id}}" action="{{route('event.destroy', $event->id)}}"
                      style="display: none;">

                      {{csrf_field()}}

                      {{method_field('DELETE')}}

                    </form>

                    <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$event->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                      class="fa fa-trash-o btn btn-danger"></a>
                  </td>
                </tr>
                @empty
                  No event available!
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="pull-right">
            {{ $events->appends(['s'=>$s])->links() }}
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