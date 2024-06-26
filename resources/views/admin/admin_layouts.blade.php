<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel</title>

    @include('admin.includes.styles')


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        @php
        $admin = App\Models\Admin\Admin::where('role_id',session('role_id'))->first();
        $url = Request::path();
        $conName = explode('/',$url);
        if(!isset($conName[3]))
        {
            $conName[3] = '';
        }
        if(!isset($conName[2]))
        {
            $conName[2] = '';
        }
        @endphp

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            <div class="sidebar-brand-text mx-3">
                <i class="fas fa-fw fa-home"></i>
                User Dashboard</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Dashboard -->
        <li class="nav-item @if($conName[1] == 'dashboard') active @endif">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>@if(session('role_id') ==  1) Admin @else @if(substr(session('name'), -1) != 's')  {{session('name')}}'s @else {{session('name')}}'  @endif @endif Dashboard - Welcome Back</span>

            </a>
        </li>

        @if(!empty($admin->role->role_name))
        @if ($admin->role->role_name == 'Consumer')

        <li class="nav-item @if($conName[2] == 'this-is-me') active @endif">
            <a class="nav-link" href="{{ route('admin.consumer.this_is_me') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Update My Info</span>

            </a>
        </li>
        @if($conName[2] == 'this-is-me')
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;"  onclick="switchFieldsetFromSideBar('fieldset_one','pedigree_bar')">
                
                <span class="ml-1">1. My Pedigree Info</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_two','find_me_here_bar')">
                <span class="ml-1">2. Find Me Here</span>

            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_three','gender_identity_bar')">
                <span class="ml-1">3. Gender Identity</span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_four','enthnicity_bar')">
                <span class="ml-1">4. Ethnicity Information</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_five','neighborhood_bar')">
                <span class="ml-1">5. My Neighborhood is</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_six','employment_bar')">
                <span class="ml-1">6. Employment Information</span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_seven','protect_cards_bar')">
                <span class="ml-1">7. Protect Charge Cards</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_eight','facial_image_upload_bar')">
                <span class="ml-1">8. Facial Image Upload</span>

            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_nine','head_n_face_bar')">
                <span class="ml-1">9. Head & Face Info</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_ten','hair_bar')">
                <span class="ml-1">10. Hair</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_eleven','distinguish_bar')">
                <span class="ml-1">11. Distinguishing Identifiers</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_twelve','twin_identifier_bar')">
                <span class="ml-1">12. Twin Identifier</span>

            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_thirteen','open_bar')">
                <i class="fas fa-fw fa-user"></i>
                <span class="ml-1">Open</span>

            </a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_fourteen','medical_info_bar')">
                <span class="ml-1">14. Medical Info</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_fifteen','family_history_bar')">
                <span class="ml-1">15. Family & Medical History</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_sixteen','travel_info_bar')">
                <span class="ml-1">16. Travel Info</span>

            </a>
        </li>

         <li class="nav-item">
            <a class="nav-link"href="javascript:void;" onclick="switchFieldsetFromSideBar('fieldset_seventeen','attestation_bar')">
               
                <span class="ml-1">17. Attestation</span>

            </a>
        </li>
        @endif

        @endif
        @endif
        @if(!empty($admin->role->role_name))
        @if ($admin->role->role_name == 'Merchant')

        <li class="nav-item @if($conName[2] == 'update-my-info') active @endif">
            <a class="nav-link" href="{{ route('admin.merchant.update_my_info') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Update My Info</span>

            </a>
        </li>

        @endif
        @endif
        {{-- Bank::form page --}}
        @if(!empty($admin->role->role_name))
        @if ($admin->role->role_name == 'Bank')

        <li class="nav-item @if($conName[2] == 'update-my-info') active @endif">
            <a class="nav-link" href="{{ route('admin.bank.update_my_info') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Update My Info</span>

            </a>
        </li>

        @endif
        @endif
        {{-- Bank::form page --}}
          {{-- GOVT::form page --}}
          @if(!empty($admin->role->role_name))
          @if ($admin->role->role_name == 'Govt')
  
          <li class="nav-item @if($conName[2] == 'update-my-info') active @endif">
              <a class="nav-link" href="{{ route('admin.govt.update_my_info') }}">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Update My Info</span>
  
              </a>
          </li>
  
          @endif
          @endif
          {{-- GOVT::form page --}}

           {{-- Education::form page --}}
          @if(!empty($admin->role->role_name))
          @if ($admin->role->role_name == 'Education')
  
          <li class="nav-item @if($conName[2] == 'update-my-info') active @endif">
              <a class="nav-link" href="{{ route('admin.education.update_my_info') }}">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Update My Info</span>
  
              </a>
          </li>
  
          @endif
          @endif
          {{-- Healthcare::form page --}}

          @if(!empty($admin->role->role_name))
          @if ($admin->role->role_name == 'Healthcare')
  
          <li class="nav-item @if($conName[2] == 'update-my-info') active @endif">
              <a class="nav-link" href="{{ route('admin.healthcare.update_my_info') }}">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Update My Info</span>
  
              </a>
          </li>
  
          @endif
          @endif
          {{-- Healthcare::form page --}}
        @php $arr_one = array(); @endphp
        @if(session('role_id')!=1)
            @php
                $row = array();
                $access_data = DB::table('role_permissions')
        ->join('role_pages', 'role_permissions.role_page_id', 'role_pages.id')
        ->where('role_id', session('role_id'))
        ->get();
            @endphp
            @foreach($access_data as $row)
                @php
                    if($row->access_status == 1):
                    $arr_one[] = $row->page_title;
                    endif;
                @endphp
            @endforeach
        @endif



        <!-- General Settings -->
        @php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
                <i class="fas fa-cog"></i>
                <span>General Settings</span>
            </a>
            <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
                    <a class="collapse-item @if($conName[3] == 'video') active @endif" href="{{ route('admin.general_setting.video') }}">Video</a>
                    <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
                    <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">SignIn Background</a>
                    <a class="collapse-item @if($conName[3] == 'topbar') active @endif" href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
                    <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Banner</a>
                    <a class="collapse-item @if($conName[3] == 'footer') active @endif" href="{{ route('admin.general_setting.footer') }}">Footer</a>
                    <a class="collapse-item @if($conName[3] == 'sidebar') active @endif" href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
                    <a class="collapse-item @if($conName[3] == 'color') active @endif" href="{{ route('admin.general_setting.color') }}">Color</a>
                    <a class="collapse-item @if($conName[3] == 'preloader') active @endif" href="{{ route('admin.general_setting.preloader') }}">Preloader</a>
                    <a class="collapse-item @if($conName[3] == 'stickyheader') active @endif" href="{{ route('admin.general_setting.stickyheader') }}">Sticky Header</a>
                    <a class="collapse-item @if($conName[3] == 'googleanalytic') active @endif" href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a>
                    <a class="collapse-item @if($conName[3] == 'googlerecaptcha') active @endif" href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
                    <a class="collapse-item @if($conName[3] == 'tawklivechat') active @endif" href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
                    <a class="collapse-item @if($conName[3] == 'cookieconsent') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a>
                </div>
            </div>
        </li>
        @endif


        <!-- Page Settings -->
        @php if( in_array('Page Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'page') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings" aria-expanded="true" aria-controls="collapsePageSettings">
                <i class="fas fa-paste"></i>
                <span>Page Settings</span>
            </a>
            <div id="collapsePageSettings" class="collapse @if($conName[1] == 'page') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if($conName[2] == 'home') active @endif" href="{{ route('admin.page_home.edit') }}">Home</a>
                    <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">About</a>
                    <a class="collapse-item @if($conName[2] == 'service') active @endif" href="{{ route('admin.page_service.edit') }}">Service</a>
                    <a class="collapse-item @if($conName[2] == 'shop') active @endif" href="{{ route('admin.page_shop.edit') }}">Shop</a>
                    <a class="collapse-item @if($conName[2] == 'blog') active @endif" href="{{ route('admin.page_blog.edit') }}">Blog</a>
                    <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">Project</a>
                    <a class="collapse-item @if($conName[2] == 'faq') active @endif" href="{{ route('admin.page_faq.edit') }}">FAQ</a>
                    <a class="collapse-item @if($conName[2] == 'team') active @endif" href="{{ route('admin.page_team.edit') }}">Team Member</a>
                    <a class="collapse-item @if($conName[2] == 'photo-gallery') active @endif" href="{{ route('admin.page_photo_gallery.edit') }}">Photo Gallery</a>
                    <a class="collapse-item @if($conName[2] == 'video-gallery') active @endif" href="{{ route('admin.page_video_gallery.edit') }}">Video Gallery</a>
                    <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">Contact</a>
                    <a class="collapse-item @if($conName[2] == 'career') active @endif" href="{{ route('admin.page_career.edit') }}">Career</a>
                    <a class="collapse-item @if($conName[2] == 'term') active @endif" href="{{ route('admin.page_term.edit') }}">Term</a>
                    <a class="collapse-item @if($conName[2] == 'privacy') active @endif" href="{{ route('admin.page_privacy.edit') }}">Privacy</a>
                    <a class="collapse-item @if($conName[2] == 'other') active @endif" href="{{ route('admin.page_other.edit') }}">Other</a>
                </div>
            </div>
        </li>
        @endif

        
        <!-- Dynamic Pages -->
        @php if( in_array('Dynamic Pages', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'dynamic-page') active @endif">
            <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                <i class="fas fa-cube"></i>
                <span>Dynamic Pages</span>
            </a>
        </li>
        @endif



        <!-- Admin Users Section -->
        @php if( in_array('Admin User Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'role' || $conName[1] == 'admin-user') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminUser" aria-expanded="true" aria-controls="collapseAdminUser">
                <i class="fas fa-user-secret"></i>
                <span>Admin User Section</span>
            </a>
            <div id="collapseAdminUser" class="collapse @if($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.role.index') }}">Roles</a>
                    <a class="collapse-item" href="{{ route('admin.role.user') }}">Users</a>
                </div>
            </div>
        </li>
        @endif



        <!-- Footer Columns -->
        @php if( in_array('Footer Columns', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'footer') active @endif">
            <a class="nav-link" href="{{ route('admin.footer.index') }}">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Footer Columns</span>
            </a>
        </li>
        @endif




        <!-- Sliders -->
        @php if( in_array('Sliders', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'slider') active @endif">
            <a class="nav-link" href="{{ route('admin.slider.index') }}">
                <i class="fas fa-sliders-h"></i>
                <span>Sliders</span>
            </a>
        </li>
        @endif



        <!-- Blog Section -->
        @php if( in_array('Blog Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-cubes"></i>
                <span>Blog Section</span>
            </a>
            <div id="collapseBlog" class="collapse @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.category.index') }}">Categories</a>
                    <a class="collapse-item" href="{{ route('admin.blog.index') }}">Blogs</a>
                    <a class="collapse-item" href="{{ route('admin.comment.approved') }}">Approved Comments</a>
                    <a class="collapse-item" href="{{ route('admin.comment.pending') }}">Pending Comments</a>
                </div>
            </div>
        </li>
        @endif




        <!-- Menu Manage -->
        @php if( in_array('Menu Manage', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'menu') active @endif">
            <a class="nav-link" href="{{ route('admin.menu.index') }}">
                <i class="fas fa-bars"></i>
                <span>Menu Manage</span>
            </a>
        </li>
        @endif

        <!-- Project -->
        @php if( in_array('Project', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'project') active @endif">
            <a class="nav-link" href="{{ route('admin.project.index') }}">
                <i class="fas fa-umbrella"></i>
                <span>Project</span>
            </a>
        </li>
        @endif

        <!-- 
            er Section -->
        @php if( in_array('Career Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'job' || $conName[1] == 'job-application') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="true" aria-controls="collapseCareer">
                <i class="fas fa-user-secret"></i>
                <span>Career Section</span>
            </a>
            <div id="collapseCareer" class="collapse @if($conName[1] == 'job' || $conName[1] == 'job-application') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.job.index') }}">Jobs</a>
                    <a class="collapse-item" href="{{ route('admin.job.view_application') }}">Job Applications</a>
                </div>
            </div>
        </li>
        @endif


        <!-- Photo Gallery -->
        @php if( in_array('Photo Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'photo-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.photo.index') }}">
                <i class="fas fa-camera"></i>
                <span>Photo Gallery</span>
            </a>
        </li>
        @endif

        <!-- Video Gallery -->
        @php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'video-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.video.index') }}">
                <i class="fas fa-video"></i>
                <span>Video Gallery</span>
            </a>
        </li>
        @endif

        <!-- Product Section -->
        @php if( in_array('Product Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-shopping-cart"></i>
                <span>Product Section</span>
            </a>
            <div id="collapseProduct" class="collapse @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.product.index') }}">Product</a>
                    <a class="collapse-item" href="{{ route('admin.shipping.index') }}">Shipping</a>
                    <a class="collapse-item" href="{{ route('admin.coupon.index') }}">coupon</a>
                </div>
            </div>
        </li>
        @endif

        <!-- Order -->
        @php if( in_array('Order Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'order') active @endif">
            <a class="nav-link" href="{{ route('admin.order.index') }}">
                <i class="fas fa-bookmark"></i>
                <span>Order Section</span>
            </a>
        </li>
        @endif

        <!-- Customer -->
        {{-- @php if( in_array('Customer Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'customer') active @endif">
            <a class="nav-link" href="{{ route('admin.customer.index') }}">
                <i class="fas fa-users"></i>
                <span>Customer Section</span>
            </a>
        </li>
        @endif --}}

     

        <!-- Services -->
        @php if( in_array('Service', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'service') active @endif">
            <a class="nav-link" href="{{ route('admin.service.index') }}">
                <i class="fas fa-certificate"></i>
                <span>Service</span>
            </a>
        </li>
        @endif

           <!-- Why Choose Us -->
           @php if( in_array('Why Choose Us', $arr_one) || session('role_id')==1 ): @endphp
           <li class="nav-item @if($conName[1] == 'why-choose') active @endif">
               <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
                   <i class="fas fa-arrows-alt"></i>
                   <span>Why Choose Us</span>
               </a>
           </li>
           @endif

        <!-- Testimonials -->
        @php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'testimonial') active @endif">
            <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                <i class="fas fa-award"></i>
                <span>Testimonial</span>
            </a>
        </li>
        @endif

        <!-- Team Members -->
        @php if( in_array('Team Member', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'team-member') active @endif">
            <a class="nav-link" href="{{ route('admin.team_member.index') }}">
                <i class="fas fa-user-plus"></i>
                <span>Team Member</span>
            </a>
        </li>
        @endif

        <!-- FAQ -->
        @php if( in_array('FAQ', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'faq') active @endif">
            <a class="nav-link" href="{{ route('admin.faq.index') }}">
                <i class="fas fa-question-circle"></i>
                <span>FAQ</span>
            </a>
        </li>
        @endif

        <!-- Email Template -->
        @php if( in_array('Email Template', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'email-template') active @endif">
            <a class="nav-link" href="{{ route('admin.email_template.index') }}">
                <i class="fas fa-envelope"></i>
                <span>Email Template</span>
            </a>
        </li>
        @endif

        <!-- Subscriber -->
        @php if( in_array('Subscriber Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'subscriber') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
                <i class="fas fa-share-alt-square"></i>
                <span>Subscriber Section</span>
            </a>
            <div id="collapseSubscriber" class="collapse @if($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
                    <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">Send Email to Subscribers</a>
                </div>
            </div>
        </li>
        @endif

        <!-- Social Media -->
        @php if( in_array('Social Media', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'social-media') active @endif">
            <a class="nav-link" href="{{ route('admin.social_media.index') }}">
                <i class="fas fa-basketball-ball"></i>
                <span>Social Media</span>
            </a>
        </li>
        @endif


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    @if(session('id') == 1)
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <button class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#chart_modal">
                            Make Graph
                        </button>
                    </li>
                    @endif

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="btn btn-info btn-sm mt-3" href="{{ url('/') }}" target="_blank">
                            Visit Website
                        </a>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('public/uploads/'.session('photo')) }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            @if(session('id') == 1)
                            <a class="dropdown-item" href="{{ route('admin.profile_change') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Change Profile
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('admin.password_change') }}">
                                <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i> Change Password
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.photo_change') }}">
                                <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i> Change Photo
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('admin_content')

                <div class="modal fade" id="chart_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Make Chart</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="container">
                                    <div class="form-group">
                                        <label for="">Label Values</label>
                                        <input type="text" id="label_values" name="label_values" class="form-control"  autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Data Values</label>
                                        <input type="text" id="data_values" name="data_values" class="form-control"  >
                                    </div>

                                    <div class="form-group">
                                         <button type="button" class="btn btn-success btn-sm float-right" onclick="updateChart()">Make Chart</button>
                                     
                                    </div>
                                    
                                    <canvas id="myChart" style="display: none;background-color:white"></canvas>

                                    
                                </div>

                             
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="downloadChart()">Download Jpg</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.includes.scripts-footer')
<script>
    // initial chart data and options
    const data = {
        labels: [],
        datasets: [{
            label: 'chart',
            data: [],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    };

    

    // create chart instance
    const ctx = document.getElementById('myChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: data,
    
    });

    // update chart data and options
    function updateChart() {
        $('#myChart').show();
        let label_values = document.getElementById('label_values').value;
			 label_values = label_values.split(',');
			chart.data.labels = label_values;

            let data_values = document.getElementById('data_values').value;
            data_values = data_values.split(',');
			chart.data.datasets[0].data  = data_values;
            if(label_values.length == data_values.length)
			chart.update();
            else
            toastr.error('Lenght of Labels and values are not same')

    }
    function downloadChart() {
        const hiddenCanvas = document.createElement('canvas');
			hiddenCanvas.width = chart.width;
			hiddenCanvas.height = chart.height;
			const hiddenContext = hiddenCanvas.getContext('2d');
			hiddenContext.drawImage(chart.canvas, 0, 0, chart.width, chart.height);
			const url = hiddenCanvas.toDataURL('image/jpeg', 0.8);
			const link = document.createElement('a');
			link.download = 'chart.jpg';
			link.href = url;
			document.body.appendChild(link);
			link.click();
			document.body.removeChild(link);
            }
</script>

</body>
</html>
