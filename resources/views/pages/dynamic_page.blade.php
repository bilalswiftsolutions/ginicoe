@extends('layouts.app')

@section('content')
    <style>
        .bg-orange {
            background-color: rgb(255, 106, 0)
        }
        .bg_essential{
            background-color:  #23E89C
        }
        .bg_elite{
            background-color: #800080;
        }
        .bg_plus{
            background-color: #E5E4E2;
        }
        .bg_standard{
            background-color:  #E8B923 ;
        }
    </style>

    <div class="page-banner"
        style="background-image: url({{ asset('public/uploads/' . $dynamic_page_detail->dynamic_page_banner) }})">
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

    <div @if ($slug != 'donate') class="page-content" @endif>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    {!! $dynamic_page_detail->dynamic_page_content !!}
                </div>

            </div>
            <div class="table-responsive">
                <table class="table table-striped text-successtable-border border-light">
                    <thead class="border-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" class="bg_essential"><strong>ESSENTIAL</strong></th>
                            <th scope="col" class="bg_standard"><strong>STANDARD</strong></th>
                            <th scope="col" class="bg_plus"><strong>PLUS</strong></th>
                            <th scope="col" class="bg_elite text-white"><strong>ELITE</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Sign Up is FREE </th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr class="bg_essential">
                            <th scope="row text-white">BEGIN USING OUR SERVICE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th scope="row">Government Benefits, All<br>
                                DMV<br>
                                e-Verify<br>
                                Medicaid<br>
                                Medicare<br>
                                SNAP<br>
                                SSI<br>
                                INS Border<br>
                                IRS Refunds<br>
                                Law Enforcement<br>
                                Voter ID<br>
                                Educational Assistance<br>
                                Housing Assistance
                            </th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">Landlord / Tenant</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr style="background-color: rgb(255, 106, 0)">
                            <th ></th>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td >Bronze<br>
                                $25</td>

                        </tr>
                        <tr>
                            <th scope="row">Credit Card Transactions, Physical Store Only </th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">5.Debit Card Transactions, Physical Store Only</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>

                        <tr>
                            <th scope="row">Credit Repair</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>


                        <tr>
                            <th scope="row">e-Health Records</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>


                        <tr>
                            <th scope="row">e-Health Records </th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>


                        <tr>
                            <th scope="row">Defacto ID Card / Real - ID</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>


                        <tr>
                            <th scope="row">Missing Person of Self</th>
                            <td class="bg_essential"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_standard"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_plus"><i class="fas fa-check text-success"></i></td>
                            <td class="bg_elite text-white"><i class="fas fa-check text-success"></i></td>
                        </tr>


                        <tr>
                            <td></td>
                            <td class="fw-bold bg_essential">$60.00 p/mo or $720 p/yr = $1.92 p/day</td>
                            <td class="fw-bold bg_standard">$40.00 p/mo or $480 p/yr = $1.31 p/day</td>
                            <td class="fw-bold bg_plus">$25.00 p/mo or $300.00 p/yr = 82¢ p/day</td>
                            <td class="fw-bold bg_elite">$20.00 p/mo or $60.00 p/year = 65¢ p/day</td>
                        </tr>
                        {{-- <tr>
                      <th class=""></th>
                      <th class=""><button class="btn btn-primary">Sign-up</button></th>
                      <th class=""><button class="btn btn-primary">Buy Now</button></th>
                      <th class=""><button class="btn btn-primary">Buy Now</button></th>
                      <th class=""></th>
                    </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
