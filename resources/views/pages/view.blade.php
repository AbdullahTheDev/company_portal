@extends('admin.layouts.app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Agreement </h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><span style="font-size:18.0pt;font-family:&quot;Calibri&quot;,sans-serif;
                        mso-fareast-font-family:Calibri;color:#E36C0A;mso-themecolor:accent6;
                        mso-themeshade:191;mso-ansi-language:EN-US;mso-fareast-language:EN-US;
                        mso-bidi-language:AR-SA;font-weight:bold;">To&nbsp;</span><span style="font-size:18.0pt;font-family:
                        &quot;Calibri&quot;,sans-serif;mso-fareast-font-family:Calibri;color:#EC6F16;mso-ansi-language:
                        EN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"></span><strong style="color: var(--bs-body-color); font-size: 1rem; text-align: var(--bs-body-text-align);"><span style="font-size:18.0pt;font-family:
                        &quot;Calibri&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-ansi-language:EN-US;
                        mso-fareast-language:EN-US;mso-bidi-language:AR-SA;font-weight:normal">{{ $page->name }},</span></strong></p>
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
