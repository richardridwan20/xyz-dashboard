<div class="row">
    <div class="block-content bg-gray-light col-12">
        <div class="col-6">
                <h3 class="h2"> Beneficiary Data</h3>
        </div>
    </div>
    <div class="block-content bg-gray-light col-6">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 1</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b1gender" name="b1gender">
                                    <option  disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('b1gender')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b1relation" name="b1relation" onchange="myselfRelation()">
                                    <option  disabled selected>Select Relation</option>
                                    <option value="Myself" class="Myself">Myself</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Brother / Sister">Brother / Sister</option>
                                    <option value="Child">Child</option>
                                    <option value="Husband / Wife">Husband / Wife</option>
                                </select>
                                @error('b1relation')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b1name" name="b1name" required autocomplete="b1name">
                                <label for="name">Name</label>
                                @error('b1name')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="b1dob" name="b1dob" required autocomplete="b1dob">
                                <label for="name">Date of Birth</label>
                                @error('b1dob')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b1citizen_id" name="b1citizen_id" required autocomplete="b1citizen_id" >
                                <label for="name">Citizen Id</label>
                                @error('b1citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="form-material floating">
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="b1email" name="b1email" required autocomplete="b1email" >
                                <label for="name">Email</label>
                                @error('b1email')
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
    <div class="block-content bg-gray-light col-6">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 2</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b2gender" name="b2gender">
                                    <option  disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('b2gender')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b2relation" name="b2relation" onchange="myselfRelation()">
                                    <option  disabled selected>Select Relation</option>
                                    <option value="Myself" class="Myself">Myself</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Brother / Sister">Brother / Sister</option>
                                    <option value="Child">Child</option>
                                    <option value="Husband / Wife">Husband / Wife</option>
                                </select>
                                @error('b2relation')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b2name" name="b2name" required autocomplete="b2name" >
                                <label for="name">Name</label>
                                @error('b2name')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="b2dob" name="b2dob" required autocomplete="b2dob" >
                                <label for="name">Date of Birth</label>
                                @error('b2dob')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b2citizen_id" name="b2citizen_id" required autocomplete="b2citizen_id" >
                                <label for="name">Citizen Id</label>
                                @error('b2citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="form-material floating">
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="b2email" name="b2email" required autocomplete="b2email" >
                                <label for="name">Email</label>
                                @error('b2email')
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
    <div class="block-content bg-gray-light col-6">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 3</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b3gender" name="b3gender">
                                    <option  disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('b3gender')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b3relation" name="b3relation" onchange="myselfRelation()">
                                        <option  disabled selected>Select Relation</option>
                                        <option value="Myself" class="Myself">Myself</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother / Sister">Brother / Sister</option>
                                        <option value="Child">Child</option>
                                        <option value="Husband / Wife">Husband / Wife</option>
                                </select>
                                @error('b3relation')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b3name" name="b3name" required autocomplete="b3name" >
                                <label for="name">Name</label>
                                @error('b3name')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="b3dob" name="b3dob" required autocomplete="b3dob" >
                                <label for="name">Date of Birth</label>
                                @error('b3dob')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b3citizen_id" name="b3citizen_id" required autocomplete="b3citizen_id" >
                                <label for="name">Citizen Id</label>
                                @error('b3citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="form-material floating">
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="b3email" name="b3email" required autocomplete="b3email" >
                                <label for="name">Email</label>
                                @error('b3email')
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
    <div class="block-content bg-gray-light col-6">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 4</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b4gender" name="b4gender">
                                    <option  disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('b4gender')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <select type="dropdown" class="form-control" id="b4relation" name="b4relation" onchange="myselfRelation()">
                                    <option  disabled selected>Select Relation</option>
                                    <option value="Myself" class="Myself">Myself</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Brother / Sister">Brother / Sister</option>
                                    <option value="Child">Child</option>
                                    <option value="Husband / Wife">Husband / Wife</option>
                                </select>
                                @error('b4relation')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b4name" name="b4name" required autocomplete="b4name" >
                                <label for="name">Name</label>
                                @error('b4name')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="b4dob" name="b4dob" required autocomplete="b4dob" >
                                <label for="name">Date of Birth</label>
                                @error('b4dob')
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
                            <div class="form-material floating">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="b4citizen_id" name="b4citizen_id" required autocomplete="b4citizen_id" >
                                <label for="name">Citizen Id</label>
                                @error('b4citizen_id')
                                    <p style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="form-material floating">
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="b4email" name="b4email" required autocomplete="b4email" >
                                <label for="name">Email</label>
                                @error('b4email')
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

