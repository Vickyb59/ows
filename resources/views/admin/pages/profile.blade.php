@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">
    <div class="col-lg-6">
        <div class="card"><br><br>
            <div class="card-body">
                <h4 class="card-title">Name : {{ $adminData->name }} </h4>
                <hr>
                <h4 class="card-title">User Email : {{ $adminData->email }} </h4>
                <hr>
                <h4 class="card-title">Last Updated : {{ $adminData->updated_at }} </h4>
                <hr>
                <div class="group-buttons">                    
                    <a href="{{ route('edit.profile') }}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                    <a href="{{ route('change.password') }}" class="btn btn-warning btn-rounded waves-effect waves-light" > Change Password</a>
                </div>
            </div>
        </div>
    </div> 
                            
        
                        </div> 


</div>
</div>

@endsection 