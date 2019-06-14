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
    {{-- Cover Page --}}
    <div class="page">
        <img src="{{ public_path('assets/media/photos/cover.png') }}">
    </div>

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
    <div class="page">
        {{-- @include('pdf.layout.header') --}}
        <div class="page-inner with-image">
            <table class="text-primary" style="width: 100%; clear: both; line-height: .7">
                <tr>
                    <td width="70%">
                        <h1>Policy Data Page</h1>
                    </td>
                    <td width="30%"><img src="{{ public_path('img/pdf/common/epolis-logo.jpg') }}" class="align-right" style="clear: both"></td>
                </tr>
            </table>
            <hr />
            <br />
            <table id="policy-data" style="width: 100%; clear: both; line-height: 1">
                <col width="50%">
                <col width="50%">
                <tbody id="personal-data">
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">PT Asuransi Jiwa Sequis Life</h3>
                            <h3 class="text-primary text-right">(Hereinafter referred to as Insurer)</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Policy Number</h3>
                            <br />
                        </td>
                        <td>
                            <h3 class="text-dark">1234567892</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Based on Insurance<br>Request Letter (SPA) from </h3>
                            <br />
                        </td>
                        <td>
                            <h3 class="text-dark"><span class="has-bold">Carol</span><br>(Hereinafter referred to as Policy
                                Holder)</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Date of Birth - Age</h3>
                            <br />
                        </td>
                        <td>
                            <h3 class="text-dark">10-10-1993 - 27 Years old</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">hereby enters into a life insurance agreement on the life of
                            </h3>
                            <br />
                        </td>
                        <td>
                            <h3 class="text-dark"><span class="has-bold">Kyaroru Bear</span><br>(Hereinafter referred to as
                                Insurer)</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <h3 class="text-primary">with terms and conditions as follow</h3>
                            <br />
                        </td>
                    </tr>
                </tbody>
                <tbody id="insurence-detail">
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Product Type</h3>
                        </td>
                        <td>
                            <h3 class="text-dark has-bold">
                                Super Safe Protection (Basic Insurance)
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Selected Plan</h3>
                        </td>
                        <td>
                            <h3 class="text-dark has-bold">
                                Gold Plan
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Contract Start Date</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                25 April 2019
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Insurance Coverage Period</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                1 Year
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Contract End Date</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                25 April 2020
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Premium Payment Method</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                Credit Card
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Payment Due Date</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                25 May 2019
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-primary has-bold text-right">Premium Payment Duration</h3>
                        </td>
                        <br />
                        </td>
                        <td>
                            <h3 class="text-dark">
                                Monthly
                            </h3>
                            <br />
                        </td>
                    </tr>
                </tbody>
                <tbody id="premi">
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <h3 class="text-primary">PREMI</h3>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-dark has-bold text-right">Basic Insurance Premium</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                Rp. 45.000 <span style="font-size: 10px; position: relative;">1)</span>
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-dark has-bold text-right">Total Premium</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                Rp. 45.000
                            </h3>
                        </td>
                    </tr>
                    <tr class="vertical-top">
                        <td>
                            <h3 class="text-dark has-bold text-right">Beneficiary</h3>
                        </td>
                        <td>
                            <h3 class="text-dark">
                                Carol<br>Sister
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 class="text-dark has-bold text-right">Date of Birth of Beneficiary</h3>
                            <br />
                            <br />
                        </td>
                        <td>
                            <h3 class="text-dark">
                                22 June 1993
                            </h3>
                            <br />
                            <br />
                        </td>
                    </tr>
                </tbody>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <h4 class="text-dark">This agreement has complied with the provisions of the law,
                            including the regulations of Otoritas Jasa Keuangan.</h4>
                        <br />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <h4 class="text-dark">Issued in Jakarta, 25 April 2019</h4>
                    </td>
                </tr>
            </table>

            <table style="width: 100%; clear: both; text-align: center; margin-top: -10px">
                <col width="33%">
                <col width="33%">
                <col width="33%">
                <tr>
                    <td>
                        <img style="width: 80px" src="{{ public_path('img/pdf/common/signature-tw.png') }}">
                    </td>
                    <td rowspan="2">
                        <div class="box">
                            <h4>BEA MATERAI LUNAS RP.6000,-</h4>
                        </div>
                    </td>
                    <td>
                        <img style="width: 100px" src="{{ public_path('img/pdf/common/signature-ed.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="text-primary has-bold">Tatang Widjaja</h4>
                        <h4 class="text-primary">CEO and President Director</h4>
                        <br />
                    </td>
                    <td>
                        <h4 class="text-primary has-bold">Edisjah</h4>
                        <h4 class="text-primary">Director</h4>
                        <br />
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="has-center" style="line-height: .7;">
                        <h5>
                            1) For Additional Insurance with Yearly Renewable Term (Policy is reneable annually),
                            premium amount will be adjusted on Policy Birthday and premium shall be paid during the Coverage Period of
                            the Basic Insurance
                        </h5>
                        <br />
                        <br />
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
