<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Policy Holder Data</b></h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="name" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" name="customer_name" required autocomplete="customer_name" onchange="myselfRelation()" value="{{ old('customer_name') }}">
                                <label for="name">Name</label>
                                @error('customer_name')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="date" class="form-control @error('customer_dob') is-invalid @enderror" id="customer_dob" name="customer_dob" required autocomplete="customer_dob" onchange="myselfRelation()" value="{{ old('customer_dob') }}">
                                <label for="name">Date of Birth</label>
                                @error('customer_dob')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-material ">
                                <input type="name" class="form-control @error('customer_citizen_id') is-invalid @enderror" id="customer_citizen_id" name="customer_citizen_id" required autocomplete="customer_citizen_id" onchange="myselfRelation()" value="{{ old('customer_citizen_id') }}" maxlength=16>
                                <label for="name">Citizen Id</label>
                                @error('customer_citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-material ">
                                <input type="email" class="form-control @error('customer_email') is-invalid @enderror" id="customer_email" name="customer_email" required autocomplete="customer_email" onchange="myselfRelation()" value="{{ old('customer_email') }}">
                                <label for="name">Email</label>
                                @error('customer_email')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

