<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Policy Holder Data</b></h3>
            </div>
            <div class="block-content">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <select type="dropdown" class="form-control" id="phgender" name="phgender" onchange="myselfRelation()">
                                    <option  disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('phgender')
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
                            <div class="form-material">
                                <input type="name" class="form-control @error('phname') is-invalid @enderror" id="phname" name="phname" required autocomplete="phname" onchange="myselfRelation()">
                                <label for="name">Name</label>
                                @error('phname')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="phdob" name="phdob" required autocomplete="phdob" onchange="myselfRelation()">
                                <label for="name">Date of Birth</label>
                                @error('phdob')
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
                                <input type="name" class="form-control @error('icitizen_id') is-invalid @enderror" id="phcitizen_id" name="phcitizen_id" required autocomplete="phcitizen_id" onchange="myselfRelation()">
                                <label for="name">Citizen Id</label>
                                @error('phcitizen_id')
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
                                <input type="email" class="form-control @error('name') is-invalid @enderror" id="phemail" name="phemail" required autocomplete="phemail" onchange="myselfRelation()">
                                <label for="name">Email</label>
                                @error('phemail')
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

