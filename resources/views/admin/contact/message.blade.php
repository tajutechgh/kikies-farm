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
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcomb-wp">
                <div class="breadcomb-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="breadcomb-ctn"><br>
                  <h2>Inbox Messages</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcomb area End-->
<!-- Inbox area Start-->
<div class="inbox-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-9 col-sm-9 col-xs-12">
        <div class="inbox-text-list sm-res-mg-t-30">
          @include('include.message')
          <div class="table-responsive">
            <table class="table table-hover table-inbox">
              <tbody>
                @foreach ($messages as $message)
                <tr class="unread">
                  <td>
                    {{-- delete button --}}
                    <form method="post" id="delete-form-{{$message->id}}" action="{{route('message.destroy', $message->id)}}" style="display: none;">

                      {{csrf_field()}}

                      {{method_field('DELETE')}}

                    </form>

                    <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$message->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                      class="fa fa-trash-o btn btn-danger">
                    </a>
                  </td>
                  <td><a href="{{ route('message.show', $message->id) }}">{{ $message->name }}</a></td>
                  <td><a href="{{ route('message.show', $message->id) }}">{{ $message->title }}</td>
                  <td class="text-right mail-date">{{Carbon\Carbon::parse($message->created_at)->format('h:i:s')}}</td>
                  <td class="text-right mail-date">{{Carbon\Carbon::parse($message->created_at)->format('d-m-y')}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="pagination-inbox">
              <ul class="wizard-nav-ac">
                {{ $messages->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inbox area End-->
@endsection

@section('footer')

@endsection