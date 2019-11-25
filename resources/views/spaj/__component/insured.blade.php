<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Insured Data</b></h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="insured_relation" name="insured_relation" onchange="myselfRelation()">
                                    <option  disabled selected>Select Relation</option>
                                    <option value="Myself" class="Myself" @if(old('insured_relation') == "Myself") selected @endif>Myself</option>
                                    <option value="Father" @if(old('insured_relation') == "Father") selected @endif>Father</option>
                                    <option value="Mother" @if(old('insured_relation') == "Mother") selected @endif>Mother</option>
                                    <option value="Brother / Sister" @if(old('insured_relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                    <option value="Child" @if(old('insured_relation') == "Child") selected @endif>Child</option>
                                    <option value="Husband / Wife" @if(old('insured_relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                </select>
                                @error('insured_relation')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-material ">
                                <input type="name" class="form-control @error('insured_name') is-invalid @enderror" id="insured_name" name="insured_name" required autocomplete="insured_name" value="{{ old('insured_name') }}">
                                <label for="name">Name</label>
                                @error('insured_name')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="date" class="form-control @error('insured_dob') is-invalid @enderror" id="insured_dob" name="insured_dob" required autocomplete="insured_dob" value="{{ old('insured_dob') }}" required >
                                <label for="name">Date of Birth</label>
                                @error('insured_dob')
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

