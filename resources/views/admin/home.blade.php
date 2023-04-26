@extends('admin.admin_layouts')

@section('admin_content')
    @php
        $total_post = DB::table('blogs')->count();
        $total_projects = DB::table('projects')->count();
        $total_services = DB::table('services')->count();
        $total_team_members = DB::table('team_members')->count();
        $total_photos = DB::table('photos')->count();
        $total_videos = DB::table('videos')->count();
        $total_completed_orders = DB::table('orders')
            ->where('payment_status', 'Completed')
            ->count();
        $total_pending_orders = DB::table('orders')
            ->where('payment_status', 'Pending')
            ->count();

            
            
            $admin = \App\Helper\Helper::auth_admin();
            
        
     
    @endphp

    <div class="row">
        <div class="col-xl-6 col-md-6 mb-2">
            <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>
        </div>
        <div class="col-xl-6 col-md-6 mb-2 " >
           
            <div style="float: right;"">
            <span style="color:black;font-weight:bold;">GUID:</span> @if(!empty($admin->guid)) <span style="color:rgb(27, 99, 244);float:right"> {{$admin->guid}} </span> @else <span style="color:rgb(212, 9, 16);"> Not Assigned Yet </span> @endif
            </div>
        </div>
    </div>
    @if (session('role_id') == 1)
    <!-- Box Start -->
    <div class="row dashboard-page">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Total Posts</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_post }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_projects }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Services</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_services }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Team Members</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_team_members }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Photos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_photos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-award fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Videos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_videos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Completed Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_completed_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-globe fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">Pending Orders</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_pending_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endif
    <!-- // Box End -->
    @if (session('role_id') != 1)
        

        @if ($admin->role->role_name == 'Consumer')
            @include('admin.includes.cards.consumer')
        @endif
        @if ($admin->role->role_name == 'Merchant')
            @include('admin.includes.cards.merchent')
        @endif
        @if ($admin->role->role_name == 'Bank')
            @include('admin.includes.cards.bank')
        @endif
        @if ($admin->role->role_name == 'Govt')
            @include('admin.includes.cards.govt')
        @endif
        @if ($admin->role->role_name == 'Healthcare')
            @include('admin.includes.cards.healthcare')
        @endif
        @if ($admin->role->role_name == 'Education')
            @include('admin.includes.cards.education')
        @endif
    @endif
@endsection
