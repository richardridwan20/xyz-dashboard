<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Beneficiary Data</b></h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="block block-bordered">
                            <div class="block-header">
                                <h3 class="block-title"><b>Beneficiary 1</b></h3>
                            </div>
                            <div class="block-content block-content-light">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12">
                                            <select type="dropdown" class="form-control" id="1_bene_relation" name="1_bene_relation" onchange="myselfRelation()">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('1_bene_relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('1_bene_relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('1_bene_relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('1_bene_relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('1_bene_relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('1_bene_relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('1_bene_relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="text" class="form-control" id="1_bene_name" name="1_bene_name" required autocomplete="1_bene_name" value="{{ old('1_bene_name') }}">
                                                <label for="1_bene_name">Name</label>
                                                @error('1_bene_name')
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
                    {{-- Beneficiary 2 --}}
                    <div class="col-md-3">
                        <div class="block block-bordered">
                            <div class="block-header">
                                <h3 class="block-title"><b>Beneficiary 2</b></h3>
                            </div>
                            <div class="block-content block-content-light">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12">
                                            <select type="dropdown" class="form-control" id="2_bene_relation" name="2_bene_relation" onchange="myselfRelation()" value="{{ old('2_bene_relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('2_bene_relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('2_bene_relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('2_bene_relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('2_bene_relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('2_bene_relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('2_bene_relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('2_bene_relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="2_bene_name" name="2_bene_name" required autocomplete="2_bene_name" value="{{ old('2_bene_name') }}">
                                                <label for="name">Name</label>
                                                @error('2_bene_name')
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
                    {{-- Beneficiary 3 --}}
                    <div class="col-md-3">
                        <div class="block block-bordered">
                            <div class="block-header">
                                <h3 class="block-title"><b>Beneficiary 3</b></h3>
                            </div>
                            <div class="block-content block-content-light">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12">
                                            <select type="dropdown" class="form-control" id="3_bene_relation" name="3_bene_relation" onchange="myselfRelation()" value="{{ old('3_bene_relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('3_bene_relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('3_bene_relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('3_bene_relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('3_bene_relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('3_bene_relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('3_bene_relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('3_bene_relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="3_bene_name" name="3_bene_name" required autocomplete="3_bene_name">
                                                <label for="name">Name</label>
                                                @error('3_bene_name')
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
                    {{-- Beneficiary 4 --}}
                    <div class="col-md-3">
                        <div class="block block-bordered">
                            <div class="block-header">
                                <h3 class="block-title"><b>Beneficiary 4</b></h3>
                            </div>
                            <div class="block-content block-content-light">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-12">
                                            <select type="dropdown" class="form-control" id="4_bene_relation" name="4_bene_relation" onchange="myselfRelation()" value="{{ old('4_bene_relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('4_bene_relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('4_bene_relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('4_bene_relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('4_bene_relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('4_bene_relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('4_bene_relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('4_bene_relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="4_bene_name" name="4_bene_name" required autocomplete="4_bene_name" value="{{ old('4_bene_name') }}">
                                                <label for="name">Name</label>
                                                @error('4_bene_name')
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
            </div>
        </div>
    </div>
</div>

