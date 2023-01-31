@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-12">

                <div class="card"><br><br>
    <center>
    <img  class="rounded-circle avatar-xl" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.png') }}" alt="Card image cap">
    </center>

			<div class="card-body">

    <h5 class="card-title">Name : {{$admindata->name}}</h5>
    <hr>
    <h5 class="card-title">Username : {{$admindata->username}}</h5>
    <hr>
    <h5 class="card-title">Email : {{$admindata->email}}</h5>
    <hr>
    <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                                    </div>
                                </div>
                            </div>

    </div>
</div>

@endsection
