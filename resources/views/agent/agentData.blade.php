<div class="row">
    <div class="col-md-12">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><b>Agent Data</b></h3>
            </div>
            <div class="block-content">
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-material ">
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="aname" name="aname" required autocomplete="aname">
                                <label for="aname">Agent / Branch Name</label>
                                @error('aname')
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
                                <input type="name" class="form-control @error('ausername') is-invalid @enderror" id="ausername" name="ausername" required autocomplete="ausername">
                                <label for="name">Username</label>
                                @error('ausername')
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
                                <input type="date" class="form-control @error('name') is-invalid @enderror" id="adob" name="adob" required autocomplete="adob">
                                <label for="name">Date of Birth</label>
                                @error('adob')
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
                                <input type="password" class="form-control @error('apassword') is-invalid @enderror" id="apassword" name="apassword" required autocomplete="apassword">
                                <label for="password">Password</label>
                                @error('apassword')
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
                                <input type="phone" class="form-control @error('name') is-invalid @enderror" id="aphone" name="aphone" required autocomplete="aphone">
                                <label for="name">Phone Number</label>
                                @error('aphone')
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
                                <input type="password" class="form-control @error('acpassword') is-invalid @enderror" id="acpassword" name="acpassword" required autocomplete="acpassword">
                                <label for="cpassword">Confirm Password</label>
                                @error('acpassword')
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
                                <input type="name" class="form-control @error('acitizen_id') is-invalid @enderror" id="acitizen_id" name="acitizen_id" required autocomplete="acitizen_id">
                                <label for="name">Citizen Id</label>
                                @error('acitizen_id')
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

