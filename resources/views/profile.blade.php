@extends('layouts.general')
@section('content')
<section class="account-section">
    <div class="row">
        <div class="account">
            <div class="acc">
                <p>account</p>
            </div>
            <div class="my-content">
                <div class="name">
                    <h4>{{Auth::user()->name}}</h4>
                </div>
                <div class="post">
                    <div class="image">
                        <img src="{{asset('asset/')}}/resource/image/account.png" alt="image">
                    </div>
                    <div class="button">
                       <a href="{{action('User\AdController@upload_page')}}">Post your ad now!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="account">
            <table class="table" id="ads">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th class="text-right">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $i = 1;
                  @endphp
  
                  @foreach($table as $item)
                      <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>
                        @if($item->image=='default.jpg')
                        <img width="50" height="40" src="{{asset('img/default.png')}}" alt="ad-image">
                        @else
                        <img width="50" height="40" src="{{asset('uploads/add/'.$item->image)}}" alt="blog-image">
                        @endif
                      </td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->address}}</td>
                    <td class="text-right">
                    <a onclick="return confirm('Are you sure to delete?')" href="{{action('User\AdController@del_ad',$item->id)}}" class="btn btn-sm btn-danger">Del</a>
                    </td>
                  </tr>
                  @endforeach
                      
                </tbody>
              </table>
        </div>

    </div>

</section>
@endsection