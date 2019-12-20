<a class="btn btn-alt-info back-btn" href="{{url()->previous()}}"><i class="fa fa-arrow-circle-left"></i> Back to Manage Product & Plan</a>

@extends('layouts.master')

@section('content')
<div class="content">
    <!-- Page Content -->
    <div class="bg-gd-primary">
        <div class="hero-static content content-full bg-white" data-toggle="appear">
            <!-- Header -->
            <div class="py-30 px-5 text-center">
                <a class="link-effect font-w700">
                    <img src="{{asset('assets\media\photos\logo.png')}}" alt="">
                </a>
                <h1 class="h2 font-w700 mt-50 mb-10">Add Product Baru</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Silahkan masukkan data-data mengenai product baru yang akan dibuat.</h2>
                <br>
                <h2 class="h6 font-w400 text-muted mb-0"><span class="text-danger">*</span> : Harus diisi</h2>
            </div>

            <form action="{{ route('product.create') }}" method="POST" id="productform" novalidate>
            @csrf
                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Produk Asuransi</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan data produk asuransi yang akan dibuat.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="product_name">Nama Produk <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" required autocomplete="product_name" value="{{ old('product_name') }}" placeholder="contoh: Asuransi Sequis Sejahtera Bersama">
                                @error('product_name')
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
                                <i class="si si-register mr-10"></i>  Add Product
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
    var session1 = "{{Session::get('notify')}}"
    if (session1 == 'success') {
            Swal.fire(
            'Success!',
            'Plan berhasil ditambahkan!',
            'success'
            )
    } else if (session1 == 'error') {
            Swal.fire(
            'Error!',
            'Maaf mohon cek kembali data yang dimasukkan!',
            'error'
            )
    }

    function confirmation(){
        Swal.fire({
            title: 'Anda yakin?',
            text: 'Pastikan data yang dimasukkan sudah benar.',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                document.getElementById("productform").submit();
            }
        })
    }

</script>
@endsection

