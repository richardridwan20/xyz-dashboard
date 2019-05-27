<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css" media="all">
    /* @font-face {
        font-family: 'epolis';
        font-style: normal;
        font-weight: bold;
        src: url({{ public_path('fonts/OpenSans-Bold.ttf') }}) format('truetype');
    }
    @font-face {
        font-family: 'epolis-reg';
        font-style: normal;
        font-weight: normal;
        src: url({{ public_path('fonts/OpenSans-Regular.ttf') }}) format('truetype');
    }
    @font-face {
        font-family: 'epolis-italic';
        /* No need to specify font-style and font-weight for Italic */
        src: url({{ public_path('fonts/OpenSans-Italic.ttf') }}) format('truetype');
    } */

    body {
        margin: 0;
        padding: 50 50;
        width: 100%;
    }

    .page {
        margin: 0;
        width: 100%;
        background: white;
        page-break-after: always;
    }

    .page img {
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .page.dark {
        background: rgb(0, 170, 174);
        margin: 0px;
    }

    .page-inner {
        margin-top: 0px;
        padding: 0 60px;
        clear: both;
    }

    .page-inner.with-image img {
        width: 55%;
    }

    h1 {
        font-family: epolis !important;
        font-size: 36px;
        font-weight: 700;
        margin: 0;
    }

    h1.light-weight {
        font-family: epolis-reg !important;
        font-weight: 400;
    }

    h1.light-size {
        font-size: 35px;
    }

    h2 {
        font-family: epolis-reg !important;
        font-size: 24px;
        margin: 0;
    }

    h2.light-weight {
        font-family: epolis-reg !important;
        font-weight: 300;
    }

    h2.section-title {
        font-family: epolis !important;
    }

    h3 {
        font-family: epolis-reg !important;
        font-size: 14px;
        font-weight: 200;
        margin: 0;
    }

    h4 {
        font-family: epolis-reg !important;
        font-size: 11.5px;
        font-weight: 400;
        margin: 0;
    }

    h4.italic {
        font-family: epolis-italic !important;
        font-size: 11.5px;
        margin: 0;
    }

    h5 {
        font-family: epolis-reg !important;
        font-size: 10px;
        font-weight: 400;
        margin: 0;
    }

    .default-font {
        font-family: epolis !important;
        font-weight: 700;
    }

    .small-font {
        font-family: epolis !important;
        font-weight: 700;
        font-size: 10px;
    }

    #spaj-data tr td {
        font-family: epolis-reg;
        line-height: .9;
        padding-bottom: 6px;
        border-collapse: collapse;
        clear: both;
    }

    .text-light {
        color: rgb(254, 255, 255);
    }

    .text-dark {
        color: rgb(9, 41, 74);
    }

    .text-gray {
        color: rgb(112, 135, 150);
    }

    .text-primary {
        color: rgb(0, 170, 174);
    }

    .bg-dark {
        background-color: rgb(9, 41, 74)
    }

    .border-right-gray {
        border-right: 1px solid rgb(112, 135, 150) !important;
    }

    .border-bottom-gray {
        border-bottom: 1px solid rgb(112, 135, 150) !important;
    }

    /*align*/
    .has-center {
        text-align: center !important;
    }

    .text-right {
        text-align: right;
    }

    .align-left {
        float: left;
        padding-left: 1px;
    }

    .align-right {
        float: right;
        padding-right: 2px;
    }

    .align-justify {
        text-align: justify;
    }

    .vertical-top {
        vertical-align: top;
    }

    .margin-top-10 {
        margin-top: 10px;
    }

    .margin-top-20 {
        margin-top: 20px;
    }

    .padding-top-10 {
        padding-top: 10px;
    }

    .padding-top-20 {
        padding-top: 20px;
    }

    hr {
        border: 1px solid #0d294a;
        border-top-left-radius: 1.1px;
        border-top-right-radius: 1.1px;
        border-bottom-left-radius: 1.1px;
        border-bottom-right-radius: 1.1px;
    }

    hr.light {
        border: 3.5px solid rgb(254, 255, 255);
    }

    table {
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
        margin: 0px;
    }

    #policy-data tr td {
        padding: 0 10px;
    }

    .box {
        border: .5px solid rgb(130, 130, 130);
        color: rgb(130, 130, 130);
        width: 50%;
        margin: 0 auto;
        font-size: 8px;
        display: block;
        padding: 25px 10px;
    }

    .box-input {
        font-size: 12px;
        margin-left: 7px;
        border: 1px solid rgb(130,130,130);
        padding: 7px 10px;
        font-family: epolis-reg;
    }

    .has-bold {
        font-family: epolis !important;
        font-weight: 700;
    }

    .has-italic {
        font-family: epolis-italic !important;
    }

    .has-capitalize {
        text-transform: capitalize;
    }

    .has-uppercase {
        text-transform: uppercase;
    }

    @page {
        size: A4;
        margin: .5px;
    }

    ul {
        list-style: none;
        margin-left: -17px;
    }

    ul li::before {
        content: "\2022";
        color: #00aaae;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 10px;
        width: 16px;
        margin-left: -20px;
        font-size: 20px;
    }

    ul li.light::before {
        content: "\2022";
        color: rgb(254, 255, 255);
        font-weight: bold;
        display: inline-block;
        margin-bottom: 5px;
        width: 16px;
        margin-left: -20px;
        font-size: 20px;
    }

    ul.light {
        margin: 0;
    }

    ul li.light {
        display: inline-flex;
    }

    ul li.primary::before {
        content: "\2022";
        color: #00aaae;
        font-weight: bold;
        display: inline-block;
        margin-bottom: 10px;
        width: 16px;
        margin-left: -20px;
        font-size: 20px;
    }

    ul.primary {
        margin: 0;
    }

    ul li.primary {
        display: inline-flex;
    }

    td>table {
        font-size: 11px;
    }

    .bullet::before {
        content: "\2022";
        color: #00aaae;
        font-weight: bold;
        display: inline;
        margin-bottom: 0px;
        width: 16px;
        font-size: 24px;
    }
    .divider-tbody {
        font-weight: 700;
        font-size: 13px !important;
        margin-top: 3px !important;
        margin-bottom: 6px !important;
    }
    .footer {
        font-size: 12px;
        position: absolute;
        width: 100%;
        bottom: 0;
    }

    .footer .footer-title {
        font-family: epolis-reg;
        position: relative;
        float: right;
        margin-right: 95px;
    }

</style>
<body>
    <table style="width: 20%; clear: both;">
        <tr class="vertical-top">
            <td width="50%">
                <img src="{{ public_path('assets/media/photos/sequis-online-logo.png') }}" alt="">
            </td>
        </tr>
    </table>
    <center>
        {!! __('pdf.title', [], $locale) !!}
    </center>
    <div class="page">
        <hr>
        <div class="page-inner">
            <table style="width: 100%; clear: both;">
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.core_policy_holder', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">{{ $data['data']['partner_id']['name'] }}</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.certificate_number', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">{{ $data['data']['certificate_number'] }}</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.policy_holder_name', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">{{ $data['data']['customer_id']['name'] }}</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.age', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">{{ $data['age'] }} tahun</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.sum_assured', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">Rp. {{ $data['data']['product_id']['plan_id']['sum_assured'] }},- </td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.premium', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">Rp. {{ $data['data']['product_id']['plan_id']['premi'] }},-</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.policy_start', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">15/05/2020</td>
                </tr>
                <tr class="vertical-top">
                    <td width="50%">{!! __('pdf.policy_end', [], $locale) !!}</td>
                    <td width="3%">:</td>
                    <td width="47%" style="text-align: left;">15/05/2020</td>
                </tr>
            </table>
        </div>
        <table style="width: 100%; clear: both;">
            <tr>
                <td style="text-align: justify">
                    {!! __('pdf.policy_description', [], $locale) !!}
                </td>
            </tr>
        </table>
        <div class="page-inner">
            <table style="width: 100%; clear: both; text-align: center; margin-top: 50px;">
                <tr class="vertical-top">
                    <td width="100%">{!! __('pdf.sign_date', [], $locale) !!}</td>
                </tr>
                <tr class="vertical-top">
                    <td width="100%">{!! __('pdf.sign_company', [], $locale) !!}</td>
                </tr>
                <br>
                <tr class="vertical-top">
                    <td width="100%">{!! __('pdf.sign_name', [], $locale) !!}</td>
                </tr>
                <tr class="vertical-top">
                    <td width="100%">{!! __('pdf.sign_position', [], $locale) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
