@extends('layouts.master')
@section('content')
@php
$planValue = [];
    foreach($productOfPartners as $productOfPartner){
       array_push($planValue, $productOfPartner['plan']['id']."|".$productOfPartner['plan']['duration']."|".$productOfPartner['plan']['premium']);
    }
@endphp
<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700">
                    <img src="{{asset('assets\media\photos\logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">SPAJ Mikro Sequis Sejahtera</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Surat Permintaan Asuransi Jiwa</h2>
                <br>
                <h2 class="h6 font-w400 text-muted mb-0"><span class="text-danger">*</span> : Harus diisi</h2>
            </div>


            <form action="{{ route('dashboard.input_transaction') }}" method="POST" id="spajform" novalidate>
            @csrf
                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Produk Asuransi</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan tiap plan asuransi, harap diisikan sesuai dengan yang dibeli oleh customer.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="name">Produk Asuransi <span class="text-danger">*</span></label>
                                <select type="dropdown" class="form-control" id="plan_id" name="plan_id" onchange="durationManager()">
                                    <option disabled selected>Pilih Produk</option>
                                    @for($i=0;$i<count($productOfPartners);$i++)
                                    <option value="{{$productOfPartners[$i]['plan']['id']."|".$productOfPartners[$i]['plan']['duration']."|".$productOfPartners[$i]['plan']['premium']}}"
                                        @if(old('plan_id') == $productOfPartners[$i]['plan']['id']."|".$productOfPartners[$i]['plan']['duration']."|".$productOfPartners[$i]['plan']['premium']) selected @endif>
                                        {{$productOfPartners[$i]['plan']['product_id']['name']}} {{$productOfPartners[$i]['plan']['name']}} {{$productOfPartners[$i]['plan']['duration']}}
                                    </option>
                                    @endfor
                                </select>
                                @error('plan_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Durasi Perlindungan <span class="text-danger">*</span></label>
                                <select type="dropdown" class="form-control" id="protection_duration" name="protection_duration" >
                                    <option value="select" disabled selected>Pilih Durasi</option>
                                    <option value=1 @if(old('protection_duration') == 1) selected @endif hidden="">1 Bulan</option>
                                    <option value=12 @if(old('protection_duration') == 12) selected @endif>1 Tahun</option>
                                    <option value=24 @if(old('protection_duration') == 24) selected @endif>2 Tahun</option>
                                    <option value=36 @if(old('protection_duration') == 36) selected @endif>3 Tahun</option>
                                    <option value=48 @if(old('protection_duration') == 48) selected @endif>4 Tahun</option>
                                    <option value=60 @if(old('protection_duration') == 60) selected @endif>5 Tahun</option>
                                </select>
                                @error('protection_duration')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Pemegang Polis</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan data-data pribadi pemegang polis, harap diisikan sesuai dengan Kartu Tanda Penduduk (KTP)
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="name">Nama Pemegang Polis <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" name="customer_name" required autocomplete="customer_name" onchange="myselfRelation()" value="{{ old('customer_name') }}" placeholder="contoh: Budi Darmawan">
                                @error('customer_name')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Lahir Pemegang Polis <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('customer_dob') is-invalid @enderror datepicker" id="customer_dob" name="customer_dob" required autocomplete="customer_dob" onchange="myselfRelation()" value="{{ old('customer_dob') }}" placeholder="dd/mm/yyyy">
                                @error('customer_dob')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Nomor KTP Pemegang Polis <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('customer_citizen_id') is-invalid @enderror" id="customer_citizen_id" name="customer_citizen_id" required autocomplete="customer_citizen_id" onchange="myselfRelation()" value="{{ old('customer_citizen_id') }}" placeholder="contoh: 1234123412341234 (16 digit angka)" maxlength=16>
                                @error('customer_citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Alamat Email Pemegang Polis <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('customer_email') is-invalid @enderror" id="customer_email" name="customer_email" required autocomplete="customer_email" onchange="myselfRelation()" value="{{ old('customer_email') }}" placeholder="contoh: budidarmawan@gmail.com">
                                @error('customer_email')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Tertanggung -->
                    <h2 class="content-heading text-black">Informasi Tertanggung</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan data-data pribadi tertanggung, harap diisikan sesuai dengan aslinya.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group row">
                                <div class="col-md-8">
                                        <label for="name">Hubungan dengan Pemegang Polis <span class="text-danger">*</span></label>
                                        <select type="dropdown" class="form-control" id="insured_relation" name="insured_relation" onchange="myselfRelation()">
                                            <option  disabled selected value=0>Pilih Hubungan</option>
                                            <option value="Myself" class="Myself" @if(old('insured_relation') == "Myself") selected @endif>Diri Sendiri / Myself</option>
                                            <option value="Father" @if(old('insured_relation') == "Father") selected @endif>Ayah Kandung / Father</option>
                                            <option value="Mother" @if(old('insured_relation') == "Mother") selected @endif>Ibu Kandung / Mother</option>
                                            <option value="Brother / Sister" @if(old('insured_relation') == "Brother / Sister") selected @endif>Kakak Kandung / (Brother / Sister)</option>
                                            <option value="Child" @if(old('insured_relation') == "Child") selected @endif>Anak Kandung / Child</option>
                                            <option value="Husband / Wife" @if(old('insured_relation') == "Husband / Wife") selected @endif>Pasangan Suami / Istri (Husband / Wife)</option>
                                        </select>
                                        @error('insured_relation')
                                            <p style="color:red">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Tertanggung <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('insured_name') is-invalid @enderror" id="insured_name" name="insured_name" required autocomplete="insured_name" value="{{ old('insured_name') }}" placeholder="contoh: Siska Darmawan">
                                @error('insured_name')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Lahir Tertanggung <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('insured_dob') is-invalid @enderror datepicker" id="insured_dob" name="insured_dob" required autocomplete="insured_dob" value="{{ old('insured_dob') }}" required placeholder="dd/mm/yyyy">
                                @error('insured_dob')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Tertanggung -->
                    <h2 class="content-heading text-black">Informasi Ahli Waris</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan data-data pribadi ahli waris, harap diisikan sesuai dengan aslinya. Ahli waris juga dapat ditambahkan sampai dengan maksimal 4 (empat) ahli waris.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <div class="row">
                                    {{-- Ahli Waris ke-1 --}}
                                    <div class="col-md-12">
                                        <h3 class="content-heading text-black">Informasi Ahli Waris ke-1 </h3>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                    <label for="name">Hubungan dengan Tertanggung <span class="text-danger">*</span></label>
                                                    <select type="dropdown" class="form-control" id="1_bene_relation" name="1_bene_relation" onchange="myselfRelation()">
                                                       <option  disabled selected value=0>Pilih Hubungan</option>
                                                        {{-- <option value="Myself" class="Myself" @if(old('1_bene_relation') == "Myself") selected @endif>Diri Sendiri / Myself</option> --}}
                                                        <option value="Father" @if(old('1_bene_relation') == "Father") selected @endif>Ayah Kandung / Father</option>
                                                        <option value="Mother" @if(old('1_bene_relation') == "Mother") selected @endif>Ibu Kandung / Mother</option>
                                                        <option value="Brother / Sister" @if(old('1_bene_relation') == "Brother / Sister") selected @endif>Kakak Kandung / (Brother / Sister)</option>
                                                        <option value="Child" @if(old('1_bene_relation') == "Child") selected @endif>Anak Kandung / Child</option>
                                                        <option value="Husband / Wife" @if(old('1_bene_relation') == "Husband / Wife") selected @endif>Pasangan Suami / Istri (Husband / Wife)</option>
                                                    </select>
                                                    @error('1_bene_relation')
                                                        <p style="color:red">
                                                            <strong>{{ $message }}</strong>
                                                        </p>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="1_bene_name">Nama Ahli Waris ke-1 <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="1_bene_name" name="1_bene_name" required autocomplete="1_bene_name" value="{{ old('1_bene_name') }}" placeholder="contoh: Andrea Darmawan">

                                            @error('1_bene_name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-noborder btn-primary pull-right col-md-3" onclick="addBene(this.id)" style="color:white" id="addbene2"><i class="fa fa-plus-circle"></i> tambah ahli waris</a>
                                        </div>
                                    </div>
                                    {{-- END Ahli Waris ke-1 --}}
                                </div>
                                <div class="row" id="b2" hidden=true>
                                    {{-- Ahli Waris ke-2 --}}
                                    <div class="col-md-12">
                                        <h3 class="content-heading text-black">Informasi Ahli Waris ke-2 <a class="pull-right" onclick="removeBene(this.id)" style="color: red; cursor: pointer" id="removebene2"><i class="fa fa-md fa-trash"></i></a> </h3>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                    <label for="name">Hubungan dengan Tertanggung</label>
                                                    <select type="dropdown" class="form-control" id="2_bene_relation" name="2_bene_relation" onchange="myselfRelation()" value="{{ old('2_bene_relation') }}">
                                                       <option  disabled selected value=0>Pilih Hubungan</option>
                                                        {{-- <option value="Myself" class="Myself" @if(old('2_bene_relation') == "Myself") selected @endif>Diri Sendiri / Myself</option> --}}
                                                        <option value="Father" @if(old('2_bene_relation') == "Father") selected @endif>Ayah Kandung / Father</option>
                                                        <option value="Mother" @if(old('2_bene_relation') == "Mother") selected @endif>Ibu Kandung / Mother</option>
                                                        <option value="Brother / Sister" @if(old('2_bene_relation') == "Brother / Sister") selected @endif>Kakak Kandung / (Brother / Sister)</option>
                                                        <option value="Child" @if(old('2_bene_relation') == "Child") selected @endif>Anak Kandung / Child</option>
                                                        <option value="Husband / Wife" @if(old('2_bene_relation') == "Husband / Wife") selected @endif>Pasangan Suami / Istri (Husband / Wife)</option>
                                                    </select>
                                                    @error('2_bene_relation')
                                                        <p style="color:red">
                                                            <strong>{{ $message }}</strong>
                                                        </p>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="2_bene_name">Nama Ahli Waris ke-2</label>
                                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="2_bene_name" name="2_bene_name" required autocomplete="2_bene_name" value="{{ old('2_bene_name') }}" placeholder="contoh: Budi Doremi">

                                            @error('2_bene_name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-noborder btn-primary pull-right col-md-3" onclick="addBene(this.id)" style="color:white" id="addbene3"><i class="fa fa-plus-circle"></i> tambah ahli waris</a>
                                        </div>
                                    </div>
                                    {{-- END Ahli Waris ke-2 --}}
                                </div>
                                <div class="row" id="b3" hidden=true>
                                    {{-- Ahli Waris ke-3 --}}
                                    <div class="col-md-12">
                                        <h3 class="content-heading text-black">Informasi Ahli Waris ke-3 <a class="pull-right" onclick="removeBene(this.id)" style="color: red; cursor: pointer" id="removebene3"><i class="fa fa-md fa-trash"></i></a></h3>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                    <label for="name">Hubungan dengan Tertanggung</label>
                                                    <select type="dropdown" class="form-control" id="3_bene_relation" name="3_bene_relation" onchange="myselfRelation()" value="{{ old('3_bene_relation') }}">
                                                       <option  disabled selected value=0>Pilih Hubungan</option>
                                                        {{-- <option value="Myself" class="Myself" @if(old('3_bene_relation') == "Myself") selected @endif>Diri Sendiri / Myself</option> --}}
                                                        <option value="Father" @if(old('3_bene_relation') == "Father") selected @endif>Ayah Kandung / Father</option>
                                                        <option value="Mother" @if(old('3_bene_relation') == "Mother") selected @endif>Ibu Kandung / Mother</option>
                                                        <option value="Brother / Sister" @if(old('3_bene_relation') == "Brother / Sister") selected @endif>Kakak Kandung / (Brother / Sister)</option>
                                                        <option value="Child" @if(old('3_bene_relation') == "Child") selected @endif>Anak Kandung / Child</option>
                                                        <option value="Husband / Wife" @if(old('3_bene_relation') == "Husband / Wife") selected @endif>Pasangan Suami / Istri (Husband / Wife)</option>
                                                    </select>
                                                    @error('3_bene_relation')
                                                        <p style="color:red">
                                                            <strong>{{ $message }}</strong>
                                                        </p>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="3_bene_name">Nama Ahli Waris ke-3</label>
                                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="3_bene_name" name="3_bene_name" required autocomplete="3_bene_name"  value="{{ old('3_bene_name') }}" placeholder="contoh: Arthur Fleck">

                                            @error('3_bene_name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-noborder btn-primary pull-right col-md-3" onclick="addBene(this.id)" style="color:white" id="addbene4"><i class="fa fa-plus-circle"></i> tambah ahli waris</a>
                                        </div>
                                    </div>
                                    {{-- END Ahli Waris ke-3 --}}
                                </div>
                                <div class="row" id="b4" hidden=true>
                                    {{-- Ahli Waris ke-4 --}}
                                    <div class="col-md-12">
                                        <h3 class="content-heading text-black">Informasi Ahli Waris ke-4 <a class="pull-right" onclick="removeBene(this.id)" style="color: red; cursor: pointer" id="removebene4"><i class="fa fa-md fa-trash"></i></a></h3>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                    <label for="name">Hubungan dengan Tertanggung</label>
                                                    <select type="dropdown" class="form-control" id="4_bene_relation" name="4_bene_relation" onchange="myselfRelation()" value="{{ old('4_bene_relation') }}">
                                                       <option  disabled selected value=0>Pilih Hubungan</option>
                                                        {{-- <option value="Myself" class="Myself" @if(old('4_bene_relation') == "Myself") selected @endif>Diri Sendiri / Myself</option> --}}
                                                        <option value="Father" @if(old('4_bene_relation') == "Father") selected @endif>Ayah Kandung / Father</option>
                                                        <option value="Mother" @if(old('4_bene_relation') == "Mother") selected @endif>Ibu Kandung / Mother</option>
                                                        <option value="Brother / Sister" @if(old('4_bene_relation') == "Brother / Sister") selected @endif>Kakak Kandung / (Brother / Sister)</option>
                                                        <option value="Child" @if(old('4_bene_relation') == "Child") selected @endif>Anak Kandung / Child</option>
                                                        <option value="Husband / Wife" @if(old('4_bene_relation') == "Husband / Wife") selected @endif>Pasangan Suami / Istri (Husband / Wife)</option>
                                                    </select>
                                                    @error('4_bene_relation')
                                                        <p style="color:red">
                                                            <strong>{{ $message }}</strong>
                                                        </p>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="4_bene_name">Nama Ahli Waris ke-4</label>
                                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="4_bene_name" name="4_bene_name" required autocomplete="4_bene_name" value="{{ old('4_bene_name') }}" placeholder="contoh: Fredy Hudiono">

                                            @error('4_bene_name')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- END Ahli Waris ke-4 --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Tambahan</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Disini bisa ditambahkan remarks atau catatan mengenai SPAJ yang akan disubmit. (Diisi bila perlu)
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="name">Catatan Tambahan</label>
                                <textarea class="form-control @error('note') is-invalid @enderror" id="note" name="note" required autocomplete="note" value="{{ old('note') }}" maxlength="150" placeholder="contoh: Notes Pembayaran">{{ old("note") }}</textarea>
                                @error('note')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Syarat dan Ketentuan SPAJ</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Harap untuk membaca dengan seksama syarat dan ketentuan serta persetujuan sebelum mengklik 'Submit'.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label class="css-control css-control-primary css-checkbox">
                                    <div style="height:100px;border:1px solid #ccc;overflow:auto;padding-left:10px;padding-right:10px;padding-top:5px">
                                        Demikian pertanyaan di halaman sebelumnya telah saya jawab dengan lengkap dan sebenar - benarnya tanpa menyembunyikan atau menghindarkan jawaban secara tidak semestinya dan saya memahami serta menyetujui sepenuhnya bahwa polis menjadi batal dan PT. Asuransi Jiwa Sequis Life dibebaskan dari segala kewajiban membayar uang pertanggungan atau bagian itu sekiranya jawaban - jawaban saya ternyata tidak/kurang lengkap atau tidak/kurang benar.
                                    </div>
                                        <br>
                                        <div class="row">
                                        <div class="col-1">
                                            <input required type="checkbox" class="css-control-input @error('c1') is-invalid @enderror" name="c1" id="c1" onclick="submitPermission()"> <span class="css-control-indicator"></span>
                                        </div>
                                        <div class="col-11">
                                            Saya telah membaca dan setuju dengan <b>Syarat dan Ketentuan</b> yang berlaku.
                                            <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                </label>
                                @error('note')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-checkbox">
                                    <div class="row">
                                        <div class="col-1">
                                            <input required type="checkbox" class="css-control-input @error('c2') is-invalid @enderror" name="c2" id="c2" onclick="submitPermission()"> <span class="css-control-indicator"></span>
                                        </div>
                                        <div class="col-11">
                                            Saya setuju untuk menerima Polis Asuransi, Data Polis (Ikhtisar Polis), dan setiap surat pemberitahuan yang berkaitan dengan Produk Asuransi ini dalam bentuk media elektronik
                                            <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                </label>
                                @error('note')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-checkbox">
                                    <div class="row">
                                        <div class="col-1">
                                            <input required type="checkbox" class="css-control-input @error('c3') is-invalid @enderror" name="c3" id="c3" onclick="submitPermission()"> <span class="css-control-indicator"></span>
                                        </div>
                                        <div class="col-11">
                                            Saya telah menerima informasi sehubungan dengan hal di atas dan telah memahami ilustrasi di atas sebelum menyetujui Kontrak ini
                                            <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                </label>
                                @error('note')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-checkbox">
                                    <div class="row">
                                        <div class="col-1">
                                            <input required type="checkbox" class="css-control-input @error('c4') is-invalid @enderror" name="c4" id="c4" onclick="submitPermission()"> <span class="css-control-indicator"></span>
                                        </div>
                                        <div class="col-11">
                                            Saya menyadari bahwa pembayaran klaim hanya dapat dilakukan melalui Rekening Bank yang beroperasi di Republik Indonesia
                                            <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                </label>
                                @error('note')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <br><br><br>
                    <div class="form-group row gutters-tiny align-items-center">
                        <div class="col-12 mb-10">
                            <button type="button" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" onclick="confirmation()" disabled=true id="btnsubmit">
                                <i class="si si-register mr-10"></i>  Submit SPAJ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Header -->
            </form>
        </div>
    </div>
    <!-- END Page Content -->
</div>


{{-- <!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary">
                    <h3 class="block-title">Syarat dan Ketentuan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Demikian pertanyaan di halaman sebelumnya telah saya jawab dengan lengkap dan sebenar - benarnya tanpa menyembunyikan atau menghindarkan jawaban secara tidak semestinya dan saya memahami serta menyetujui sepenuhnya bahwa polis menjadi batal dan PT. Asuransi Jiwa Sequis Life dibebaskan dari segala kewajiban membayar uang pertanggungan atau bagian itu sekiranya jawaban - jawaban saya ternyata tidak/kurang lengkap atau tidak/kurang benar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Modal --> --}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    var plan = document.getElementById('plan_id');
    var duration = document.getElementById('protection_duration');
    var irelation = document.getElementById('insured_relation');
    var iname = document.getElementById('insured_name');
    var icitizen_id = document.getElementById('icitizen_id');
    var idob = document.getElementById('insured_dob');
    var phrelation = document.getElementById('phrelation');
    var phname = document.getElementById('customer_name');
    var phcitizen_id = document.getElementById('customer_citizen_id');
    var phdob = document.getElementById('customer_dob');
    var phemail = document.getElementById('customer_email');
    var b1relation = document.getElementById('1_bene_relation');
    var b2relation = document.getElementById('2_bene_relation');
    var b3relation = document.getElementById('3_bene_relation');
    var b4relation = document.getElementById('4_bene_relation');
    var bene2row = document.getElementById('b2');
    var bene3row = document.getElementById('b3');
    var bene4row = document.getElementById('b4');
    var bene2add = document.getElementById('addbene2');
    var bene3add = document.getElementById('addbene3');
    var bene4add = document.getElementById('addbene4');
    var b1name = document.getElementById('1_bene_name');
    var b2name = document.getElementById('2_bene_name');
    var b3name = document.getElementById('3_bene_name');
    var b4name = document.getElementById('4_bene_name');
    var myself = document.getElementsByClassName('Myself');
    var c1 = document.getElementById('c1');
    var c2 = document.getElementById('c2');
    var c3 = document.getElementById('c3');
    var c4 = document.getElementById('c4');
    var submit = document.getElementById('btnsubmit');
    var flag = "";

    var relationArray = [irelation, b1relation, b2relation, b3relation, b4relation];

    window.onload = start;
    function myselfRelation(){
        if(irelation.value == 'Myself' || b1relation.value == 'Myself' || b2relation.value == 'Myself' || b3relation.value == 'Myself' || b4relation.value == 'Myself'){
            for(var i=0; i<relationArray.length; i++){
                if(relationArray[i].value == 'Myself'){
                    if(i == 0){
                        myself[i].disabled = false;
                        iname.value = phname.value;
                        idob.value = phdob.value;
                        iname.disabled = true;
                        idob.disabled = true;
                        }else{
                        myself[i].disabled = false;
                        document.getElementById('b'+i+'name').value = phname.value;
                        document.getElementById('b'+i+'name').readOnly = true;
                    }
                }
                // else{
                //     myself[i].disabled = true;
                // }
            }
        }else{
            for(var i=0; i<myself.length; i++){
                if(i==0){
                    myself[i].disabled = false;
                    iname.disabled = false;
                    idob.disabled = false;
                }
                // else{
                //     myself[i].disabled = false;
                //     document.getElementById('b'+i+'name').readOnly = false;
                // }
            }
        }
    }

    function addBene(id){
        if(id == "addbene2"){
            bene2row.hidden = false;
            b2relation.disabled = false;
            b2relation.value = 0;
            b2name.value = "";
            bene2add.hidden = true;
        }else if(id == "addbene3"){
            bene3row.hidden = false;
            b3relation.disabled = false;
            b3relation.value = 0;
            b3name.value = "";
            bene3add.hidden = true;
        }else if(id == "addbene4"){
            bene4row.hidden = false;
            b4relation.disabled = false;
            b4relation.value = 0;
            b4name.value = "";
            bene4add.hidden = true;
        }
    }

    function removeBene(id){
        for(i=2;i<5;i++){
            if(id == "removebene"+i){
                if(i != 4){
                    for(j=i;j<=3;j++){
                        flag = j+1;
                        if(document.getElementById('b'+flag).hidden == false){
                            document.getElementById(j+'_bene_name').value = document.getElementById(flag+'_bene_name').value;
                            document.getElementById(j+'_bene_relation').value = document.getElementById(flag+'_bene_relation').value;
                            if(j == 3){
                                document.getElementById('4_bene_name').value = "";
                                document.getElementById('4_bene_relation').value = 0;
                                document.getElementById('b4').hidden = true;
                                bene4add.hidden = false;
                                break;
                            }
                        }else{
                            document.getElementById(j+'_bene_name').value = "";
                            document.getElementById(j+'_bene_relation').value = 0;
                            document.getElementById('b'+j).hidden = true;
                            document.getElementById('addbene'+j).hidden = false;
                            break;
                        }
                    }
                }else{
                    document.getElementById('4_bene_name').value = "";
                    document.getElementById('4_bene_relation').value = 0;
                    document.getElementById('b4').hidden = true;
                    bene4add.hidden = false;
                }
                break;
            }
        }
    }

    function submitPermission(){
        if(c1.checked == true && c2.checked == true && c3.checked == true && c4.checked == true){
            submit.disabled = false;
        }else{
            submit.disabled = true;
        }
    }


    var session1 = "{{Session::get('notify')}}"
    if (session1 == 'success') {
            Swal.fire(
            'Sukses!',
            'Transaksi berhasil! Silahkan cek email untuk mendapatkan polis anda.',
            'success'
            )
    }else if(session1 == '5 insurance'){
            Swal.fire(
            'Error!',
            'Maaf, nasabah masih memiliki 5 produk asuransi yang aktif saat ini.',
            'error'
            )
    }

    function confirmation(){
        Swal.fire({
            title: 'Anda yakin?',
            text: 'Pastikan data yang dimasukkan sudah benar, karena polis akan segera dibuat berdasarkan data tersebut.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                duration.disabled = false;
                idob.disabled = false;
                iname.disabled = false;
                document.getElementById("spajform").submit();
                }
        })
    }

    function durationManager(){
       var planArray = plan.value.split("|")
        if(planArray[1] == "Monthly"){
            duration.disabled = true;
            duration.value = 1;
        }else {
            duration.disabled = false;
            duration.value = "select";
        }
    }

    function start(){
        $('#insured_dob').datepicker({
            format: "dd/mm/yyyy",
            startDate: '-55y',
            endDate: '-18y'
        });

        $('#customer_dob').datepicker({
            format: "dd/mm/yyyy",
            startDate: '-150y',
            endDate: '-17y'
        });

        for(i=2;i<=4;i++){
            var after = i+1;
            if(document.getElementById(i+'_bene_relation').value != 0 || document.getElementById(i+'_bene_name').value != 0){
                document.getElementById('b'+i).hidden = false;
                document.getElementById('addbene2').hidden = true;
                if(i != 4){
                    if(document.getElementById(after+'_bene_relation').value != 0 || document.getElementById(after+'_bene_name').value != 0){
                        document.getElementById('addbene'+after).hidden = true;
                    }
                }
            }
        }

        if(irelation.value == 'Myself'){
            iname.disabled = true;
            idob.disabled = true;
        }
        if(duration.value == 1){
            duration.disabled = true;
        }
    }

</script>
@endsection

