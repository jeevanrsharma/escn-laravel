@extends('layout.common.header')

@section('title', 'Users List')

@section('content')

<div class="ecommerce-widget">

    <div class="row">
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->

        <!-- recent orders  -->
        <!-- ============================================================== -->
        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Recent Registers</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">UserName</th>
                                    <th class="border-0">Email-ID</th>
                                    <th class="border-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($usersList as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->userName}}</td>
                                    <td>{{$user->email}} </td>
                                    <td><span class="badge-dot badge-brand mr-1"></span>{{$user->password}}</td>                                    
                                </tr>
                            @endforeach
                                
                                <tr>
                                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end recent orders  -->
    </div>
</div>

@endsection