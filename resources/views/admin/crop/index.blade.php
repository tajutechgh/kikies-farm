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
                  Add Crop
                </button>
                <div class="modal fade" id="myModalone" role="dialog">
                  <div class="modal-dialog modals-default">
                    <form action="{{ route('crop.store') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 align="center">Add Crop</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Name:</label>
                              <div class="nk-int-st">
                                <input type="text" name="name" required class="form-control input-sm" placeholder="Enter crop name">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Cost:</label>
                              <div class="nk-int-st">
                                <input type="number" name="cost" required class="form-control input-sm" placeholder="Enter crop cost">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Planting Date:</label>
                              <div class="nk-int-st">
                                <input type="date" name="planting_date" required class="form-control input-sm"
                                  placeholder="Enter planting date">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Harvesting Date:</label>
                              <div class="nk-int-st">
                                <input type="date" name="harvesting_date" required class="form-control input-sm"
                                  placeholder="Enter harvesting date">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Quantity(acre):</label>
                              <div class="nk-int-st">
                                <input type="text" name="quantity" required class="form-control input-sm" placeholder="Enter quantity">
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Category:</label>
                              <div class="nk-int-st">
                                <select name="category_id" required class="form-control">
                                  <option selected disabled>Select category</option>
                                  @foreach ($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-example-int">
                            <div class="form-group">
                              <label>Description:</label>
                              <div class="nk-int-st">
                                <textarea name="description" class="form-control input-sm" required cols="30" rows="5"
                                  placeholder="Type here.............."></textarea>
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
                <form action="{{ route('crop.index') }}" method="get">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" name="s" placeholder="Search by crop name" value="{{ isset($s) ? $s : '' }}">
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
                  <th>Planting Date</th>
                  <th>Harvesting Date</th>
                  <th>Cost(GH₵)</th>
                  <th>Quantity(acre)</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($crops as $crop)
                <tr>
                  <td><img src="{{Storage::disk('local')->url($crop->image)}}" width="100%" height="50cm"></td>
                  <td>{{ $crop->name }}</td>
                  <td>{{ $crop->planting_date }}</td>
                  <td>{{ $crop->harvesting_date }}</td>
                  <td>{{ $crop->cost }}</td>
                  <td>{{ $crop->quantity }}</td>
                  <td>{{ $crop->category['name'] }}</td>
                  <td>
                    {{-- edit button --}}
                    <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#{{$crop->id}}"></button>
                    <div class="modal fade" id="{{$crop->id}}" role="dialog">
                      <div class="modal-dialog modals-default">
                        <form action="{{ route('crop.update',$crop->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 align="center">Edit Crop</h5>
                            </div>
                            <div class="modal-body">
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Name:</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="name" required class="form-control input-sm" value="{{ $crop->name }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Cost:</label>
                                  <div class="nk-int-st">
                                    <input type="number" name="cost" required class="form-control input-sm" value="{{ $crop->cost }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Planting Date:</label>
                                  <div class="nk-int-st">
                                    <input type="date" name="planting_date" required class="form-control input-sm" value="{{ $crop->planting_date }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Harvesting Date:</label>
                                  <div class="nk-int-st">
                                    <input type="date" name="harvesting_date" required class="form-control input-sm" value="{{ $crop->harvesting_date }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Quantity(acre):</label>
                                  <div class="nk-int-st">
                                    <input type="text" name="quantity" required class="form-control input-sm" value="{{ $crop->quantity }}">
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Category:</label>
                                  <div class="nk-int-st">
                                    <select name="category_id" required class="form-control">
                                      <option value="{{ $crop->category['id'] }}">
                                        {{ $crop->category['name'] }}
                                      </option>
                                      @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-example-int">
                                <div class="form-group">
                                  <label>Description:</label>
                                  <div class="nk-int-st">
                                    <textarea name="description" class="form-control input-sm" required cols="30" rows="5">{{ $crop->description }}</textarea>
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
                    <form method="post" id="delete-form-{{$crop->id}}" action="{{route('crop.destroy', $crop->id)}}" style="display: none;">

                      {{csrf_field()}}

                      {{method_field('DELETE')}}

                    </form>

                    <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$crop->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                      class="fa fa-trash-o btn btn-danger"></a>
                  </td>
                </tr>
                @empty
                No crop available!
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="pull-right">
            {{ $crops->appends(['s'=>$s])->links() }}
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