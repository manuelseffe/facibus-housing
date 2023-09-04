@extends('layout.kyc')

@section('content')



<div class="auth__bg m-auto">
    <div class="auth__top-form">
        <h2>You're almost there!</h2>
        <p>Fill in the necessary information to finish setting up your ComeHouseMe account.</p><br>
    </div>
    <div class="auth__mid-form">
        <form action="" class="login-form">
            <div class="auth__form-group">
                <label for="Date of Birth" class="auth__heading">Date of Birth</label>
                <input type="date" name="BOD" id="BOD" class="form-control" placeholder="Date of Birth" />
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="gender" class="auth__heading">Gender</label>
                        <select name="gender" id="gender" class="form-control" placeholder="Gender">  
                            <option value="select">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="SOO" class="auth__heading">Employment Status</label>
                        <select name="SOO" id="SOO" class="form-control" placeholder="select status">  
                            <option value="select">Choose State of Origin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="gender" class="auth__heading">Nationality</label>
                        <select name="gender" id="gender" class="form-control" placeholder="Gender">  
                            <option value="select">Choose Country</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="auth__form-group">
                        <label for="SOO" class="auth__heading">State of origin</label>
                        <select name="SOO" id="SOO" class="form-control" placeholder="SOO">  
                            <option value="select">Choose State of Origin</option>
                        </select>
                    </div>
                </div>
            </div>
           
            <div class="auth__form-group mt-4">
                <label for="email-address" class="auth__heading">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" />
            </div>
            
            <div class="auth__form-group mt-4">
                <label for="password" class="auth__heading">Address</label>
                <textarea name="address" id="address" class="form-control" placeholder="Enter Address"></textarea>
                <span>Minimum 8 characters</span>
            </div><br>

            {{-- <input type="sumbit" value="Login" name="submit" class="btn btn__btnColor form-control mt-4 hasCenter"> --}}
            <a href="#" id="submit" class="btn btn__btnColor form-control mt-4 hasCenter">Continue</a>
            <div class="auth__bottom-form hasCenter mt-5">
                <p>By continuing, it means that you agree to our <a href="/tos">Terms of service,</a> and  <a href="/privacy">Privacy Policy</a></p>
            </div>
        </form>


    </div>
</div>

@endsection