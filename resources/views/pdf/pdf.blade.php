<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        <style>body {
            font-family: Arial, sans-serif;
        }

        .agreement-title {
            color: #E67E22;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
        }

        .form-btn {
            background-color: #E67E22;
            color: #fff;
        }

        .form-btn:hover {
            background-color: #d35400;
            color: #fff;
        }

        .thank-you {
            color: #E67E22;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            margin-top: 30px;
        }

        .form-label {
            font-weight: bold;
            color: black;
        }

        .signature-box {
            border: 1px solid black;
            width: 100%;
            height: 50px;
        }

        .footer-text {
            color: blue;
            text-decoration: underline;
        }

        .form-class {
            width: 50%;
            margin: auto;
        }

        @media (max-width: 777px) {
            .form-class {
                width: 80%;
            }
        }

        .row {
            width: 100%;
            height: 120px;
            overflow: hidden;
        }

        .col-6 {
            width: 50%;
            float: left;
            /* Makes them align side by side */
            text-align: center;
        }

        .col-7 {
            width: 50%;
            float: right;
            /* Makes them align side by side */
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .border-bottom {
            border-bottom: 1px solid #000;
            display: inline-block;
            width: 80%;
            padding: 5px;
        }

        .mt-4 {
            margin-top: 20px;
        }

        .fw-bold {
            font-weight: bold;
        }

        /* Signature Image */
        img {
            max-width: 150px;
            height: auto;
            display: block;
            margin: 10px auto;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<h1>
    <span style="color: #E36C0A;">To</span>
    <span>{{ $page->name }},</span>
</h1>

{!! $page->content_1 !!}
{!! $page->content_2 !!}
{!! $page->content_3 !!}

<div class="py-5 mt-2">
    <h2 class="thank-you mb-5">AGREEMENT CONSENT</h2>
    <div class="row">
        <div class="col-6">
            <div class="border-bottom">
                <label class="form-label">Zach O’Connor</label>
            </div>
            <p>Manager Compliance</p>
        </div>
        <div class="col-7">
            <div class="border-bottom">
                <span>{{ $submission->name }}</span>
            </div>
            <p>Client Name</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="border-bottom">
                <label class="form-label">Signature</label>
            </div>
            <img width="200px" src="{{ public_path('assets/images/our-signature.png') }}" alt="">
        </div>
        <div class="col-7">
            <div class="border-bottom">
                <label class="form-label">Signature</label>
            </div>
            <img width="200px" src="{{ $submission->signature }}" alt="">
        </div>
    </div>

    <div class="text-center">
        <label class="form-label">Date:</label>
        <span class="fw-bold">{{ $submission->created_at->format('jS F Y') }}</span>
    </div>

    <h2 class="thank-you">THANK YOU</h2>
    <div class="text-center mt-3">
        <p>Phone: (713) 936-5277</p>
        <p><a href="#" class="footer-text">Head Office: 2121 Huffines Blvd, Carrollton, TX 75010, USA</a></p>
        <p>Email: <a href="mailto:support@infinitywebcoders.com" class="footer-text">support@infinitywebcoders.com</a>
        </p>
        <p><a href="#" class="footer-text">*terms & conditions</a></p>
    </div>
</div>

</html>
