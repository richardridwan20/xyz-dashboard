<div class="row">
    <div class="block-content bg-gray-light col-12">
        <div class="col-6">
                <h3 class="h2"> Beneficiary Data</h3>
        </div>
    </div>
    <div class="block-content bg-gray-light col-3">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 1</h4>
                <div class="row">
                    <div class="col-12">
                            <div class="col-12">
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
                        <div class="col-12">
                                <div class="form-material ">
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
                </div>
            </div>
        </div>
    </div>
    <div class="block-content bg-gray-light col-3">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 2</h4>
                <div class="row">
                    <div class="col-12">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="b2relation" name="b2relation" onchange="myselfRelation()">
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
                        <div class="col-12">
                                <div class="form-material ">
                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="b2name" name="b2name" required autocomplete="b2name">
                                    <label for="name">Name</label>
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
    <div class="block-content bg-gray-light col-3">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 3</h4>
                <div class="row">
                    <div class="col-12">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="b3relation" name="b3relation" onchange="myselfRelation()">
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
                        <div class="col-12">
                                <div class="form-material ">
                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="b3name" name="b3name" required autocomplete="b3name">
                                    <label for="name">Name</label>
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
    <div class="block-content bg-gray-light col-3">
        <div class="block">
            <div class="block-content block-content-light col-md-12">
                <h4>Beneficiary 4</h4>
                <div class="row">
                    <div class="col-12">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="b4relation" name="b4relation" onchange="myselfRelation()">
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
                        <div class="col-12">
                                <div class="form-material ">
                                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="b4name" name="b4name" required autocomplete="b41name">
                                    <label for="name">Name</label>
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
</div>

