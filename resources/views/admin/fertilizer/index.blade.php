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
                  Add Fertilizer
                </button>
                <div class="modal fade" id="myModalone" role="dialog">
                  <div class="modal-dialog modals-default">
                    <form action="{{ route('fertilizer.store') }}" method="post" 
                    enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 align="center">Add Fertilizer</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Name:</label>
                              <div class="nk-int-st">
                                <input type="text" name="name" required class="form-control input-sm" placeholder="Enter fertilizer name">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Cost:</label>
                              <div class="nk-int-st">
                                <input type="number" name="cost" required class="form-control input-sm" placeholder="Enter fertilizer cost">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Description:</label>
                              <div class="nk-int-st">
                                <textarea name="description" class="form-control input-sm" required cols="30" rows="5" placeholder="Type here.............."></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <div class="nk-int-st">
                                <input type="file" name="image" required>
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
                <form action="{{ route('fertilizer.index') }}" method="get">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" name="s" placeholder="Search by fertilizer name" value="{{ isset($s) ? $s : '' }}">
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
                  <th width="10%">Image</th>
                  <th>Name</th>
                  <th>Cost(GH₵)</th>
                  <th>Description</th>
                  <th width="12%">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($fertilizers as $fertilizer)
                <tr>
                  <td><img src="{{Storage::disk('local')->url($fertilizer->image)}}" width="100%" height="50cm"></td>
                  <td>{{ $fertilizer->name }}</td>
                  <td>{{ $fertilizer->cost }}</td>
                  <td>{{ $fertilizer->description }}</td>
                  <td>
                    {{-- edit button --}}
                    <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#{{$fertilizer->id}}"></button>
                    <div class="modal fade" id="{{$fertilizer->id}}" role="dialog">
                      <div class="modal-dialog modals-default">
                        <form action="{{ route('fertilizer.update',$fertilizer->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 align="center">Edit Fertilizer</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Name:</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="name" required class="form-control input-sm" value="{{$fertilizer->name}}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Cost:</label>
                                  <div class="nk-int-st">
                                    <input type="number" name="cost" required class="form-control input-sm" value="{{$fertilizer->cost}}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Description:</label>
                                  <div class="nk-int-st">
                                    <textarea name="description" class="form-control input-sm" required cols="30" rows="5">{{ $fertilizer->description }}</textarea>
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
                    <form method="post" id="delete-form-{{$fertilizer->id}}" action="{{route('fertilizer.destroy', $fertilizer->id)}}"
                      style="display: none;">

                      {{csrf_field()}}

                      {{method_field('DELETE')}}

                    </form>

                    <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$fertilizer->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                      class="fa fa-trash-o btn btn-danger"></a>
                  </td>
                </tr>
                @empty
                No fertilizers available!
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="pull-right">
            {{ $fertilizers->appends(['s'=>$s])->links() }}
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