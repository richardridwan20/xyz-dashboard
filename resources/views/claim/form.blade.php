@extends('layouts.master')
@section('content')
@php
    $claimDate = '';
    $hospitalIn = '';
    $hospitalOut = '';
    $eventDate = '';
    $decisionDate = '';
    if(old('claim_date')){
        $claimDate = \Carbon\Carbon::parse(old('claim_date'))->format('d/m/Y');
    }
    if(old('event_date')){
        $eventDate = \Carbon\Carbon::parse(old('event_date'))->format('d/m/Y');
    }
    if(old('hospital_in')){
        $hospitalIn = \Carbon\Carbon::parse(old('hospital_in'))->format('d/m/Y');
    }
    if(old('hospital_out')){
        $hospitalOut = \Carbon\Carbon::parse(old('hospital_out'))->format('d/m/Y');
    }
    if(old('decision_date')){
        $decisionDate = \Carbon\Carbon::parse(old('decision_date'))->format('d/m/Y');
    }
@endphp
<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700">
                    <img class="main-logo" src="{{asset('assets\media\photos\sovera-logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Form Klaim</h1>
                <br>
                <h2 class="h6 font-w400 text-muted mb-0"><span class="text-danger">*</span> : Harus diisi</h2>
            </div>

            <form action="{{route('claim.create')}}" method="POST" id="claimform" novalidate>
            @csrf
                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Klaim</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan informasi klaim, harap diisikan sesuai klaim yang dilakukan oleh nasabah.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="name">ID Transaksi yang dipilih</label>
                                <input type="text" readonly class="form-control" id="transaction_id" name="transaction_id" value="{{$transactionId}}">
                                @error('transaction_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cause_of_claim">Jenis Klaim <span class="text-danger">*</span></label>
                                <select type="dropdown" class="form-control @error('cause_of_claim') is-invalid @enderror" id="cause_of_claim" name="cause_of_claim" >
                                    <option value="select" disabled selected>Pilih Tipe Klaim</option>
                                    <option value=AC @if(old('cause_of_claim') == 'AC') selected @endif>AC (Accidental)</option>
                                    <option value=TPD @if(old('cause_of_claim') == 'TPD') selected @endif>TPD (Total Permanent Disablity)</option>
                                    <option value=ND @if(old('cause_of_claim') == 'ND') selected @endif>ND (Natural Death)</option>
                                    <option value=HL @if(old('cause_of_claim') == 'HL') selected @endif>SR (Surgery)</option>
                                </select>
                                @error('cause_of_claim')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Klaim <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('claim_date') is-invalid @enderror datepicker" id="claim_date" name="claim_date" required autocomplete="claim_date" value="{{ $claimDate }}" placeholder="dd/mm/yyyy">
                                @error('claim_date')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Kejadian <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('event_date') is-invalid @enderror datepicker" id="event_date" name="event_date" required autocomplete="event_date" value="{{ $eventDate }}" placeholder="dd/mm/yyyy">
                                @error('event_date')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="diagnose">Alasan Klaim (Diagnosa)<span class="text-danger">*</span></label>
                                <input type="diagnose" class="form-control @error('diagnose') is-invalid @enderror" id="diagnose" name="diagnose" required autocomplete="diagnose" value="{{ old('diagnose') }}" placeholder="contoh: Kecelakaan Sepeda Motor">
                                @error('diagnose')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="claim_amount">Jumlah Klaim <span class="text-danger">*</span></label>
                                <input type="claim_amount" class="form-control @error('claim_amount') is-invalid @enderror" id="claim_amount" name="claim_amount" required autocomplete="claim_amount" value="{{ old('claim_amount') }}" placeholder="contoh: 150.000">
                                @error('claim_amount')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="claim_decision">Keputusan Klaim<span class="text-danger">*</span></label>
                                <select type="dropdown" class="form-control @error('claim_decision') is-invalid @enderror" id="claim_decision" name="claim_decision" >
                                    <option value="select" disabled selected>Pilih Keputusan Klaim</option>
                                    <option value=Approve @if(old('claim_decision') == 'Accept') selected @endif>Approve</option>
                                    <option value=Reject @if(old('claim_decision') == 'Reject') selected @endif>Reject</option>
                                    <option value="Ex Gratia" @if(old('claim_decision') == 'Ex Gratia') selected @endif>Ex Gratia</option>
                                    <option value=Cancel @if(old('claim_decision') == 'Cancel') selected @endif>Cancel</option>
                                </select>
                                @error('claim_decision')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Keputusan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('decision_date') is-invalid @enderror datepicker" id="decision_date" name="decision_date" required autocomplete="decision_date" value="{{ $decisionDate }}" placeholder="dd/mm/yyyy">
                                @error('decision_date')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Rumah Sakit (khusus Surgery)</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan informasi tanggal masuk dan keluar rumah sakit.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="name">Tanggal Masuk Rumah Sakit </label>
                                <input type="text" class="form-control @error('hospital_in') is-invalid @enderror datepicker" id="hospital_in" name="hospital_in" required autocomplete="hospital_in" value="{{ $hospitalIn }}" placeholder="dd/mm/yyyy">
                                @error('hospital_in')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Tanggal Keluar Rumah Sakit</label>
                                <input type="text" class="form-control @error('hospital_out') is-invalid @enderror datepicker" id="hospital_out" name="hospital_out" required autocomplete="hospital_out" value="{{ $hospitalOut }}" placeholder="dd/mm/yyyy">
                                @error('hospital_out')
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
                            <button type="button" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary" onclick="confirmation()" id="btnsubmit">
                                <i class="si si-register mr-10"></i>  Submit Klaim
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

    window.onload = start;

    var session1 = "{{Session::get('notify')}}"
    if (session1 == 'success') {
        Swal.fire(
            'Sukses!',
            'Klaim berhasil dimasukkan!',
            'success'
        )
    } else if (session1 == 'error') {
        Swal.fire(
            'Error!',
            'Maaf, mohon cek kembali data anda.',
            'error'
        )
    }

    function confirmation(){
        Swal.fire({
            title: 'Anda yakin?',
            text: 'Pastikan data yang dimasukkan sudah benar..',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                document.getElementById("claimform").submit();
            }
        })
    }

    function start(){
        $('#hospital_in').datepicker({
            format: "dd/mm/yyyy",
        });

        $('#hospital_out').datepicker({
            format: "dd/mm/yyyy",
        });

        $('#claim_date').datepicker({
            format: "dd/mm/yyyy",
        });

        $('#event_date').datepicker({
            format: "dd/mm/yyyy",
        });

        $('#decision_date').datepicker({
            format: "dd/mm/yyyy",
        });

    }

</script>
@endsection

