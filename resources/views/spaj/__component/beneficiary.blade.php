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
                                            <select type="dropdown" class="form-control" id="b1relation" name="b1relation" onchange="myselfRelation()">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('b1relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('b1relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('b1relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('b1relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('b1relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('b1relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('b1relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="text" class="form-control" id="b1name" name="b1name" required autocomplete="b1name" value="{{ old('b1name') }}">
                                                <label for="b1name">Name</label>
                                                @error('b1name')
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
                                            <select type="dropdown" class="form-control" id="b2relation" name="b2relation" onchange="myselfRelation()" value="{{ old('b2relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('b2relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('b2relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('b2relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('b2relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('b2relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('b2relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('b2relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b2name" name="b2name" required autocomplete="b2name" value="{{ old('b2name') }}">
                                                <label for="name">Name</label>
                                                @error('b2name')
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
                                            <select type="dropdown" class="form-control" id="b3relation" name="b3relation" onchange="myselfRelation()" value="{{ old('b3relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('b3relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('b3relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('b3relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('b3relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('b3relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('b3relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('b3relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b3name" name="b3name" required autocomplete="b3name">
                                                <label for="name">Name</label>
                                                @error('b3name')
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
                                            <select type="dropdown" class="form-control" id="b4relation" name="b4relation" onchange="myselfRelation()" value="{{ old('b4relation') }}">
                                                <option  disabled selected>Select Relation</option>
                                                <option value="Myself" class="Myself" @if(old('b4relation') == "Myself") selected @endif>Myself</option>
                                                <option value="Father" @if(old('b4relation') == "Father") selected @endif>Father</option>
                                                <option value="Mother" @if(old('b4relation') == "Mother") selected @endif>Mother</option>
                                                <option value="Brother / Sister" @if(old('b4relation') == "Brother / Sister") selected @endif>Brother / Sister</option>
                                                <option value="Child" @if(old('b4relation') == "Child") selected @endif>Child</option>
                                                <option value="Husband / Wife" @if(old('b4relation') == "Husband / Wife") selected @endif>Husband / Wife</option>
                                            </select>
                                            @error('b4relation')
                                                <p style="color:red">
                                                    <strong>{{ $message }}</strong>
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-material ">
                                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b4name" name="b4name" required autocomplete="b4name" value="{{ old('b4name') }}">
                                                <label for="name">Name</label>
                                                @error('b4name')
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

