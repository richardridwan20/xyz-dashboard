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
                <h1 class="h2 font-w700 mt-50 mb-10">Add Plan Baru</h1>
                <h2 class="h4 font-w400 text-muted mb-0">Silahkan masukkan data-data mengenai plan yang akan dibuat.</h2>
                <br>
                <h2 class="h6 font-w400 text-muted mb-0"><span class="text-danger">*</span> : Harus diisi</h2>
            </div>

            <form action="{{ route('product.create_plan') }}" method="POST" id="planform" novalidate>
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
                                <select type="dropdown" class="form-control" id="product_id" name="product_id">
                                    <option disabled selected>Pilih Produk</option>
                                    @for($i=0;$i<count($products);$i++)
                                        <option value="{{$products[$i]['id']}}" @if(old('product_id') == $products[$i]['id']) selected @endif>{{$products[$i]['name']}}</option>
                                    @endfor
                                </select>

                                @error('product_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Durasi Produk <span class="text-danger">*</span></label>
                                <select type="dropdown" class="form-control" id="duration" name="duration">
                                    <option disabled selected>Pilih Durasi Produk</option>
                                    <option value="Monthly" @if(old('duration') == "Monthly") selected @endif>Monthly / Bulanan</option>
                                    <option value="Yearly" @if(old('duration') == "Yearly") selected @endif>Yearly / Tahunan</option>
                                </select>

                                @error('duration')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- END Vital Info -->

                    <!-- Vital Info -->
                    <h2 class="content-heading text-black">Informasi Plan Produk</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
                                Berisikan data-data plan dari produk.
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <label for="plan_name">Nama Plan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('plan_name') is-invalid @enderror" id="plan_name" name="plan_name" required autocomplete="plan_name" value="{{ old('plan_name') }}" placeholder="contoh: Standard">
                                @error('plan_name')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sum_assured">Total Pertanggungan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('sum_assured') is-invalid @enderror" id="sum_assured" name="sum_assured" required autocomplete="sum_assured" value="{{ old('sum_assured') }}" placeholder="contoh: 23000000">
                                @error('sum_assured')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="accident_benefit">Manfaat Meninggal karena Kecelakaan <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('accident_benefit') is-invalid @enderror" id="accident_benefit" name="accident_benefit" required autocomplete="accident_benefit" value="{{ old('accident_benefit') }}" placeholder="contoh: 15000000">
                                @error('accident_benefit')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="natural_death_benefit">Manfaat Meninggal bukan karena Kecelakaan <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('natural_death_benefit') is-invalid @enderror" id="natural_death_benefit" name="natural_death_benefit" required autocomplete="natural_death_benefit" value="{{ old('natural_death_benefit') }}" placeholder="contoh: 20000000">
                                @error('natural_death_benefit')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tpd_benefit">Manfaat Cacat Permanen <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('tpd_benefit') is-invalid @enderror" id="tpd_benefit" name="tpd_benefit" required autocomplete="tpd_benefit" value="{{ old('tpd_benefit') }}" placeholder="contoh: 20000000">
                                @error('tpd_benefit')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="health_benefit">Manfaat Pembedahan <span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('health_benefit') is-invalid @enderror" id="health_benefit" name="health_benefit" required autocomplete="health_benefit" value="{{ old('health_benefit') }}" placeholder="contoh: 20000000">
                                @error('health_benefit')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi Plan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required autocomplete="description" value="{{ old('description') }}" placeholder="contoh: Plan Standard Terpercaya">
                                @error('description')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="premium">Premi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('premium') is-invalid @enderror" id="premium" name="premium" required autocomplete="description" value="{{ old('premium') }}" placeholder="contoh: 75000 ">
                                @error('premium')
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
                                <i class="si si-register mr-10"></i>  Add Plan
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
                document.getElementById("planform").submit();
            }
        })
    }

</script>
@endsection

