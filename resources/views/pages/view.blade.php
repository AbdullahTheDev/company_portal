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
        .form-btn{
            background-color: #E67E22;
            color: #fff;
        }
        .form-btn:hover{
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
    </style>
</head>
<div class="container py-5">
    <p>
        <span
            style="font-size:18.0pt;font-family:&quot;Calibri&quot;,sans-serif; mso-fareast-font-family:Calibri;color:#E36C0A;mso-themecolor:accent6; mso-themeshade:191;mso-ansi-language:EN-US;mso-fareast-language:EN-US; mso-bidi-language:AR-SA;font-weight:bold;">To&nbsp;</span>
        <span
            style="font-size:18.0pt;font-family:
                            &quot;Calibri&quot;,sans-serif;mso-fareast-font-family:Calibri;color:#EC6F16;mso-ansi-language:
                            EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"></span><strong
            style="color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);"><span
                style="font-size:18.0pt;font-family:
                            &quot;Calibri&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
                            mso-fareast-language:EN-US;mso-bidi-language:AR-SA;font-weight:normal">{{ $page->name }},</span></strong>
    </p>
    {!! $page->content_1 !!}
    {!! $page->content_2 !!}
    {!! $page->content_3 !!}

    <div class="py-5 mt-2">
        <h2 class="thank-you mb-5">AGREEMENT CONSENT</h2>
        <form method="POST" action="{{ route('user.agreement.submit') }}" class="mt-4 form-class">
            @csrf
            <input type="hidden" name="page_id" value="{{ $page->id }}">
            <div class="row">
                <div class="col-md-6 text-center">
                    <div style="border-bottom: 1px solid #000;">
                        <label class="form-label">Zach O’Connor</label>
                    </div>
                    <p>Manager Compliance</p>
                </div>
                <div class="col-md-6 text-center">
                    <div style="border-bottom: 1px solid #000;">
                        <input type="text" class="text-center form-label" style="border: none;"
                            placeholder="Enter Client Name" required>
                    </div>
                    <p>Client Name</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 text-center">
                    <div style="border-bottom: 1px solid #000;">
                        <label class="form-label">Signature</label>
                    </div>
                    <p>Zach O’Connor</p>
                </div>
                <div class="col-md-6 text-center">
                    <label class="form-label">Signature</label>
                    <canvas id="signatureCanvas" width="300" height="150" style="border: 3px solid #e67e22;"></canvas>
                    <button id="clearCanvas" type="button" class="btn btn-sm btn-secondary">Clear</button>
                    <input type="hidden" name="signature" id="signatureInput">
                </div>
            </div>
            <div class="text-center mt-4">
                <label class="form-label">Date:</label>
                <span class="fw-bold">{{ now()->format('jS F Y') }}</span>
            </div>
            <div class="my-2 text-center">
                <button type="submit" class="btn mx-auto form-btn">Submit</button>
            </div>
            <h2 class="thank-you">THANK YOU</h2>
        </form>
        <div class="text-center mt-3">
            <p>Phone: (713) 936-5277</p>
            <p><a href="#" class="footer-text">Head Office: 2121 Huffines Blvd, Carrollton, TX 75010, USA</a></p>
            <p>Email: <a href="mailto:support@infinitywebcoders.com"
                    class="footer-text">support@infinitywebcoders.com</a>
            </p>
            <p><a href="#" class="footer-text">*terms & conditions</a></p>
        </div>
    </div>
</div>


    <!-- jQuery (Required for Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let canvas = document.getElementById("signatureCanvas");
        let ctx = canvas.getContext("2d");
        let drawing = false;

        function startDrawing(e) {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        }

        function draw(e) {
            if (!drawing) return;
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }

        function stopDrawing() {
            drawing = false;
            saveSignature();
        }

        function saveSignature() {
            let signatureData = canvas.toDataURL("image/png");
            document.getElementById("signatureInput").value = signatureData;
        }

        function clearCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            document.getElementById("signatureInput").value = "";
        }

        canvas.addEventListener("mousedown", startDrawing);
        canvas.addEventListener("mousemove", draw);
        canvas.addEventListener("mouseup", stopDrawing);
        canvas.addEventListener("mouseleave", stopDrawing);

        document.getElementById("clearCanvas").addEventListener("click", clearCanvas);
    });
</script>


<script>
    $(document).ready(function() {
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif

        @if (session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    });
</script>

</html>
