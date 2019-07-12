<div class="row">
    <div class="block-content col-sm-12">
        <div class="col-12">
            <h3 class="h2">Insured Data</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-6">
                            <select type="dropdown" class="form-control" id="igender" name="igender">
                                <option  readonly selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('igender')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="col-6">
                            <select type="dropdown" class="form-control" id="irelation" name="irelation" onchange="myselfRelation()">
                                <option  disabled selected>Select Relation</option>
                                <option value="Myself" class="Myself">Myself</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother / Sister">Brother / Sister</option>
                                <option value="Child">Child</option>
                                <option value="Husband / Wife">Husband / Wife</option>
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
                    <div class="form-group row">
                        <div class="form-material ">
                            <input type="name" class="form-control @error('iname') is-invalid @enderror" id="iname" name="iname" required autocomplete="iname">
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
                    <div class="form-group row">
                        <div class="form-material">
                            <input type="date" class="form-control @error('idob') is-invalid @enderror" id="idob" name="idob" required autocomplete="idob">
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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="form-material ">
                            <input type="name" class="form-control @error('icitizen_id') is-invalid @enderror" id="icitizen_id" name="icitizen_id" required autocomplete="icitizen_id">
                            <label for="name">Citizen Id</label>
                            @error('icitizen_id')
                                <p style="color:red">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="form-material ">
                            <input type="email" class="form-control @error('iemail') is-invalid @enderror" id="iemail" name="iemail" required autocomplete="iemail">
                            <label for="name">Email</label>
                            @error('iemail')
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

