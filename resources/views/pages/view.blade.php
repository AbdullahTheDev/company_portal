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
    </style>
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
        <h2 class="thank-you">AGREEMENT CONSENT</h2>


        <form class="mt-4">
            <div class="row">
                <div class="col-md-6 text-center">
                    <label class="form-label">Zach O’Connor</label>
                    <p>Manager Compliance</p>
                </div>
                <div class="col-md-6 text-center">
                    <label class="form-label">Client Name</label>
                    <input type="text" class="form-control text-center" placeholder="Enter Client Name" required>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 text-center">
                    <label class="form-label">Signature</label>
                    <p class="signature-box">Zach O’Connor</p>
                </div>
                <div class="col-md-6 text-center">
                    <label class="form-label">Signature</label>
                    <canvas id="signatureCanvas" class="signature-box"></canvas>
                    <button type="button" class="btn btn-danger mt-2" onclick="clearCanvas()">Clear</button>
                </div>
            </div>

            <div class="text-center mt-4">
                <label class="form-label">Date:</label>
                <span class="fw-bold">9<sup>th</sup> January 2025</span>
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


<script>
    let canvas = document.getElementById('signatureCanvas');
    let ctx = canvas.getContext('2d');
    let drawing = false;

    canvas.addEventListener('mousedown', () => drawing = true);
    canvas.addEventListener('mouseup', () => {
        drawing = false;
        ctx.beginPath();
    });
    canvas.addEventListener('mousemove', draw);

    function draw(event) {
        if (!drawing) return;
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.strokeStyle = 'black';
        ctx.lineTo(event.offsetX, event.offsetY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(event.offsetX, event.offsetY);
    }

    function clearCanvas() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>

</html>
