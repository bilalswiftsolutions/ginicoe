@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$dynamic_page_detail->dynamic_page_banner) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $dynamic_page_detail->dynamic_page_name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $dynamic_page_detail->dynamic_page_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div @if($slug != 'donate') class="page-content" @endif>
        <div class="container">
            <div class="row">
                <div @if($slug == 'donate') class="col-md-9" @else class="col-md-12" @endif>
                    {!! $dynamic_page_detail->dynamic_page_content !!}
                </div>
                @if($slug == 'donate')
                <div  class="col-md-3">
                    
                    
                      
                       
                        <div class=" mt_20">
                            <h5>Online Payment | check | Trekker Volunteer</h5>
    
                           <a href="https://donate.stripe.com/test_4gweVvdnda34bgQcMM" target="_blank" class="btn btn-primary" >Click to Donate</a>
                            @php
                                $cents = 0;
                            @endphp
    
                  
                        </div>
    
                    
                </div>
                @endif
            </div>
        </div>
    </div>

     
@endsection

