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
                                <select type="dropdown" class="form-control" id="irelation" name="irelation" onchange="myselfRelation()">
                                    <option  disabled selected>Select Relation</option>
                                    <option value="Myself" class="Myself" @if(old('irelation') == "Myself") selected @endif>Myself</option>
                                    <option value="Father" @if(old('irelation') == "Father") selected @endif>Father</option>
                                    <option value="Mother" @if(old('irelation') == "Mother") selected @endif>Mother</option>
                                    <option value="Brother / Sister" @if(old('irelation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                    <option value="Child" @if(old('irelation') == "Child") selected @endif>Child</option>
                                    <option value="Husband / Wife" @if(old('irelation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                </select>
                                @error('irelation')
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
                                <input type="name" class="form-control @error('iname') is-invalid @enderror" id="iname" name="iname" required autocomplete="iname" value="{{ old('iname') }}">
                                <label for="name">Name</label>
                                @error('iname')
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
                                <input type="date" class="form-control @error('idob') is-invalid @enderror" id="idob" name="idob" required autocomplete="idob" value="{{ old('idob') }}" required >
                                <label for="name">Date of Birth</label>
                                @error('idob')
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

