@extends('layouts.app')

@section('content')
@if ($slug === 'prices')
   <style>
        .pricing_p {
            margin: 40px 0px;
        }

        .pricing_p .table {
            border-top: 1px solid #ddd;
            background: #fff;
        }

        .pricing_p .table th,
        .pricing_p .table {
            text-align: center;
        }

        .pricing_p .table th,
        .pricing_p .table td {
            padding: 20px 10px;
            border: 1px solid #ddd;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .pricing_p .table th {
            width: 20%;
            font-size: 25px;
            font-weight: bold;
            border-bottom: 0;
            background: #f0f8ff;
            color: #101010;
            text-transform: uppercase;
        }

        .pricing_p .table th.highlight {
            border-top: 4px solid #4caf50 !important;
        }

        .pricing_p .table tr:nth-child(odd) {
            background: #f0f8ff;
        }

        .pricing_p .table td:first-child {

            text-align: left;

            background: #f0f8ff;
        }

        .pricing_p tr td .ptable-title {
            font-size: 18px;
            font-weight: bold;

        }

        .pricing_p tr td .ptable-title i {
            width: 23px;
            line-height: 25px;
            text-align: right;
            margin-right: 5px;
        }

        .pricing_p .ptable-star {
            position: relative;
            display: block;
            text-align: center;
        }

        .pricing_p .ptable-star.red {
            color: #e91e63;
        }

        .pricing_p .ptable-star.green {
            color: #4caf50;
        }

        .pricing_p .ptable-star.lblue {
            color: #03a9f4;
        }

        .pricing_p .ptable-star i {
            width: 8px;
            /* font-size: 13px; */
        }

        .pricing_p .ptable-price {
            display: block;
            font-size: 16px;
        }

        .pricing_p tr td {
            /* font-size: 16px; */
            line-height: 32px;
            text-transform: uppercase;
        }

        .pricing_p tr td.bg-red {
            background: #e91e63;
        }

        .pricing_p tr td.bg-green {
            background: #4caf50;
        }

        .pricing_p tr td.bg-lblue {
            background: #03a9f4;
        }

        .pricing_p tr td.bg-red a,
        .pricing_p tr td.bg-green a,
        .pricing_p tr td.bg-lblue a {
            color: #fff;
        }

        .pricing_p tr td i {
            display: block;
            margin-bottom: 12px;
            /* font-size: 30px; */
        }

        .pricing_p tr td i.red {
            color: #e91e63;
        }

        .pricing_p tr td i.green {
            color: #4caf50;
        }

        .pricing_p tr td i.lblue {
            color: #03a9f4;
        }

        .pricing_p tr td:first-child i {
            display: inline;
            margin-bottom: 0px;
            /* font-size: 22px; */
        }

        .bg_essential: {
            background-color: #23E89C;
        }

        .bg_standard: {
            background-color: #E8B923;
        }

        .bg_elite: {
            background-color: #800080;
        }

        .bg_plus: {
            background-color: #E5E4E2;
        }
    </style>
@endif
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

            @if ($slug === 'prices')
            <div class="pricing_p">
                <h3 style="font-weight:bold" class="text-left">CONSUMER PRICES</h3>
                <div class="pricing_p-table table-responsive">
                    <table class="table">
                        <!-- Heading -->
                        <thead>
                            <tr>
                                <th>Features</th>
                                <th style="background-color: #23E89C;">ESSENTIAL<span class="ptable-price">$60.00 p/mo or
                                        $720 p/yr = $1.92 p/day</span>
                                </th>
                                <th style="background-color: #E8B923 ">STANDARD<span class="ptable-price">(recommended)<br>
                                        $40.00 p/mo or $480 p/yr =$1.31 p/day
                                    </span></th>
                                <th style="background-color: #E5E4E2;">PLUS<span class="ptable-price">$25.00 p/mo or $300.00
                                        p/yr = 82¢ p/day</span></th>
                                <th style="background-color: #800080 ;">ELITE<span class="ptable-price">$20.00 p/mo or
                                        $60.00 p/year = 65¢ p/day</span></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="ptable-title">1. SignUp for Free</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">2. Government Benefits, All

                                        DMV

                                        e-Verify

                                        Medicaid

                                        Medicare

                                        SNAP

                                        INS Border

                                        IRS Refunds

                                        Law Enforcement

                                        Voter ID

                                        Educational Assistance

                                        Housing Assistance</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>

                            <tr>
                                <td><span class="ptable-title">3. Landlord / Tenant</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #23E89C "><span class="ptable-title"></span></td>
                                <td style="background-color: #23E89C;">
                                </td>
                                <td style="background-color: #23E89C ">
                                </td>
                                <td style="background-color: #23E89C ">
                                </td>
                                <td style="background-color: #23E89C ">

                                </td>
                            </tr>

                            <tr>
                                <td><span class="ptable-title">4. Credit Card Transactions, Physical Stores ONLY.</span>
                                </td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>

                            <tr>
                                <td><span class="ptable-title">5. Credit Repair</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>

                            <tr>
                                <td><span class="ptable-title">6. Medical Facilities</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">7. e-Health Records</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">8. Medical Facilities</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">9. Defacto ID Card / Real-ID</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">10. Missing Person of Self</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">11. Missing Pets</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">12. Background Checks</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">13. Credit Card Transactions Online & Physical Stores</span>
                                </td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">14. Credit Card Transactions Online, Mobile, & Physical
                                        Stores.</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">15. Check Cashing Place</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">16. Credit Approval</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">17. Human Resources Hiring</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">18. Non-Bank Intermediaries e.g. Walmart Check cashing;
                                        Industrial loan org, etc. </span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="ptable-title">19. Payday Lenders</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>

                            <tr>
                                <td style="background-color: #E8B923 "><span class="ptable-title"></span></td>
                                <td style="background-color: #E8B923">
                                </td>
                                <td style="background-color: #E8B923">
                                </td>
                                <td style="background-color: #E8B923 ">
                                </td>
                                <td style="background-color: #E8B923 ">

                                </td>
                            </tr>

                            <tr>
                                <td><span class="ptable-title">
                                        20. Department Store Cards

                                        Amazon.com Store Card

                                        Belk’s

                                        Costco Anywhere Visa® Card by Citi

                                        Home Depot

                                        Kays Jewelers

                                        Lowes

                                        Lowe's Store Card

                                        Macy’s

                                        Nordstroms

                                        Saks Fifth Avenue Store Card

                                        Staples® Credit Card

                                        Target Credit Card

                                        TJX Store Card

                                        Victoria's Secret Credit Card

                                        Walmart® Store Card

                                        Don't see your store card listed? Drop us a line so we can add it
                                    </span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">21. Doppleganger Services for Self</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">22. Find a Twin or Look-a-Like</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">23. Insurance Companies</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">24. Loan Officer's Desk</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">25. Mortgage Fraud Prevention</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">
                                    26.  Oil Card Transactions, All

                                    AdBlue
                                    
                                    Amoco
                                    
                                    Bp
                                    
                                    Chevron
                                    
                                    Circle K
                                    
                                    ExxonMobil
                                    
                                    Marathon
                                    
                                    Texaco
                                    
                                    Shell
                                    
                                    Sheetz
                                    
                                    Sunoco
                                    
                                    Total Pass
                                    
                                    United Oil Fleet Card
                                    
                                    Don't see your gas card listed? Drop us a line so we can add it.    
                                </span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">27. Oil Debit Card Transactions</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">28. Prepaid & Gift Cards, All</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">29. Subscription Fraud Prevention</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">30. Real Estate Title Fraud Prevention</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-check green"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #E5E4E2 "><span class="ptable-title"></span></td>
                                <td style="background-color: #E5E4E2">
                                </td>
                                <td style="background-color: #E5E4E2">
                                </td>
                                <td style="background-color: #E5E4E2">
                                </td>
                                <td style="background-color: #E5E4E2">

                                </td>
                            </tr>

                              <tr>
                                <td ><span class="ptable-title">31. Analytics</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">32. Business & Commercial Credit Card Transactions, All</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">33. Business & Commercial Debit Card Transactions, All</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">34. New Account Fraud</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">35. Synthetic ID Fraud</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">
                                    36.  TSA - Transportation Security Administration, Airlines, All

                                    Aer Lingus
                                    
                                    Aeroneas Argentinas
                                    
                                    Aerosvit Ukranina
                                    
                                    Air Afrique
                                    
                                    Air Canada
                                    
                                    Air France
                                    
                                    Air Tran
                                    
                                    Alaska Airlines
                                    
                                    Allegiant Air
                                    
                                    American Eagle Airlines
                                    
                                    American Airlines
                                    
                                    British Airway
                                    
                                    Chautauqua Airlines
                                    
                                    Compass Airlines
                                    
                                    Continental
                                    
                                    Delta
                                    
                                    Delta Air Lines
                                    
                                    Delta Connection & US Helicopters
                                    
                                    Delta First Class/Medallion/Business Elite
                                    
                                    Envoy Air
                                    
                                    ExpressJet
                                    
                                    Frontier Airlines
                                    
                                    Frontier Airlines
                                    
                                    GoJet
                                    
                                    Hawaiian Airlines
                                    
                                    Japan Airlines
                                    
                                    JetBlue
                                    
                                    Korean Air
                                    
                                    Lufthansa
                                    
                                    Shuttle America
                                    
                                    Sky Regional’
                                    
                                    Southwest Airlines
                                    
                                    Spirit Airlines
                                    
                                    United Airlines
                                    
                                    United Express
                                    
                                    US Airways
                                    
                                    US Airways Express
                                    
                                    US Airways Shuttle
                                    
                                    Western Airlines
                                    
                                    
                                    WestJet
                                    
                                    Don't see your Airlines listed? Drop us a line so we can add it.    
                                </span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">37.  Trains Amtrak</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">38.  Hotels

                                    Hilton
                                    
                                    Holiday Inn
                                    
                                    Windyham
                                    
                                    Marriott
                                    
                                    Quality Inn
                                    
                                    </span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">39.  Motels Lodging Motel 6</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">40.  Rent-a-Cars

                                    Avis
                                    
                                    Hertz
                                    
                                    Alamo
                                    
                                    Enterprise
                                    
                                    Snappy</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">41.  Utilities Fraud Prevention

                                    Cable
                                    
                                    Cell Phones
                                    
                                    Gas Company
                                    
                                    Electric Company
                                    
                                    Internet
                                    
                                    Telephone</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">42.  U.S. - Visa</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td ><span class="ptable-title">43.  Global Entry</span></td>
                                <td style="background-color: #23E89C;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E8B923 ">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #E5E4E2;">
                                    <i class="fa fa-times red"></i>
                                </td>
                                <td style="background-color: #800080 ;">
                                    <i class="fa fa-check green"></i>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #800080 "><span class="ptable-title"></span></td>
                                <td style="background-color: #800080">
                                </td>
                                <td style="background-color: #800080">
                                </td>
                                <td style="background-color: #800080">
                                </td>
                                <td style="background-color: #800080">

                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td style="background-color: #23E89C;"><a class="btn" href="#">Buy</a></td>
                                <td style="background-color: #E8B923 "><a class="btn" href="#">Buy</a></td>
                                <td style="background-color: #E5E4E2;"><a class="btn" href="#">Buy</a></td>
                                <td style="background-color: #800080 ;"><a class="btn" href="#">Buy</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            @endif
        </div>

    </div>
@endsection
