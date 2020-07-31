@extends('layouts.app')

@section('title', 'Registration Panel')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
           {{--  @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('succes'))
                <div class="alert alert-succes">
                    <p>{{ \Session::get('succes') }}</p>
                </div>
            @endif
            --}}
            <form method="POST" action="{{ route('registration.store') }}">
                {{--  !!!!!!!!!!!!!!PATIENTS DATA!!!!!!!!!!!!!!!!!  --}}
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Patient informations</h4>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="forname">Name</label>
                      <input value="asd" type="text" class="form-control" id="forname" name="forname" placeholder="Name">
                      @error('forname')
                      <div class="alert alert-danger">{{ $errorMessage }}</div>
                      @enderror
                  </div>
                  <div class="form-group col-md-6">
                      <label for="Surname">Surname</label>
                      <input value="asd" type="text" class="form-control" id="Surname" name="surname" placeholder="Surname">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="Pesel">Pesel</label>
                    <input value="asd" type="text" class="form-control" id="Pesel" name="pesel" placeholder="Pesel">
                </div>
            </div>
            {{-- !!!!!!!!!RESIDENCE ADDRESS!!!!!!!!!!!!!  --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h4>Place of residence</h4>
                </div>
                <div class="form-group col-md-8">
                    <label for="StreetRes">Street</label>
                    <input value="asd" type="text" class="form-control" id="StreetRes" name="streetRes" placeholder="Street">
                </div>
                <div class="form-group col-md-2">
                    <label for="BuildNumRes">Building number</label>
                    <input value="asd" type="text" class="form-control" id="BuildNumRes" name="buildNumRes" placeholder="Building number">
                </div>
                <div class="form-group col-md-2">
                    <label for="ApartNumRes">Apartment number</label>
                    <input value="asd" type="text" class="form-control" id="ApartNumRes" name="apartNumRes" placeholder="Apartment number">
                </div>
                <div class="form-group col-md-6">
                    <label for="CityRes">City</label>
                    <input value="asd" type="text" class="form-control" id="CityRes" name="cityRes" placeholder="City">
                </div>
                <div class="form-group col-md-4">
                    <label for="InputProvinceRes">Province</label>
                    <select id="InputProvinceRes" name="provinceRes" class="form-control">
                        <option >--Choose your province</option>
                        <option selected="selected">dolnośląskie</option>
                        <option>kujawsko-pomorskie</option>
                        <option>lubelskie</option>
                        <option>lubuskie</option>
                        <option>łódzkie</option>
                        <option>małopolskie</option>
                        <option>mazowieckie</option>
                        <option>opolskie</option>
                        <option>podkarpackie</option>
                        <option>podlaskie</option>
                        <option>pomorskie</option>
                        <option>śląskie</option>
                        <option>świętokrzyskie</option>
                        <option>warmińsko-mazurskie</option>
                        <option>wielkopolskie</option>
                        <option>zachodniopomorskie</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                 <label for="PostCodeRes">Post code</label>
                 <input value="asd" type="text" class="form-control" id="PostCodeRes" name="postCodeRes" placeholder="Post Code">
             </div>
         </div>
         {{--  !!!!!!!!!!!!!!CORRESPONDING ADDRESS!!!!!!!!!!!!!!!  --}}
         <div class="form-row">
            <div class="form-group col-md-12">
                <h4>Corresponding address</h4>
            </div>
            {{--  !!!!!!!!!!!!!!!!!!!CHECKBOXES!!!!!!!!!!!!!!!  --}}
            <div class="form-group col-md-12">
                <div class="form-check form-check-inline">
                    <input value="asd" type="checkbox" class="form-check-input" id="CorrespondAsLiving" name="correspondAsLiving">
                    <label for="CorrespondAsLiving" class="form-check-label">The same as residence address</label>
                </div>
                <div class="form-check form-check-inline">
                    <input value="asd" type="checkbox" class="form-check-input" id="CorrespondDiff" name="correspond_Diff">
                    <label for="CorrespondDiff" class="form-check-label">Diffrent</label>
                </div>
            </div>
            {{--  !!!!!!!!!!!!!!!CHECKBOXES END!!!!!!!!!!!!!!!!!  --}}
            <div class="form-group col-md-8">
                <label for="StreetCor">Street</label>
                <input value="asd" type="text" class="form-control" id="StreetCor" name="streetCor" placeholder="Street">
            </div>
            <div class="form-group col-md-2">
                <label for="BuildNumCor">Building number</label>
                <input value="asd" type="text" class="form-control" id="BuildNumCor" name="buildNumCor" placeholder="Building number">
            </div>
            <div class="form-group col-md-2">
                <label for="ApartNumCor">Apartment number</label>
                <input value="asd" type="text" class="form-control" id="ApartNumCor" name="apartNumCor" placeholder="Apartment number">
            </div>
            <div class="form-group col-md-6">
                <label for="CityCor">City</label>
                <input value="asd" type="text" class="form-control" id="CityCor" name="cityCor" placeholder="City">
            </div>
            <div class="form-group col-md-4">
                <label for="InputProvinceCor">Province</label>
                <select id="InputProvinceCor" name="provinceCor" class="form-control">
                    <option>--Choose your province</option>
                    <option selected="selected">dolnośląskie</option>
                    <option>kujawsko-pomorskie</option>
                    <option>lubelskie</option>
                    <option>lubuskie</option>
                    <option>łódzkie</option>
                    <option>małopolskie</option>
                    <option>mazowieckie</option>
                    <option>opolskie</option>
                    <option>podkarpackie</option>
                    <option>podlaskie</option>
                    <option>pomorskie</option>
                    <option>śląskie</option>
                    <option>świętokrzyskie</option>
                    <option>warmińsko-mazurskie</option>
                    <option>wielkopolskie</option>
                    <option>zachodniopomorskie</option>
                </select>
            </div>
            <div class="form-group col-md-2">
             <label for="PostCodeCor">Post code</label>
             <input value="asd" type="text" class="form-control" id="PostCodeCor" name="postCodeCor" placeholder="Post Code">
         </div>
     </div>
     {{--  !!!!!!!!!!!!!!CONTACT!!!!!!!!!!!!!!  --}}
     <div class="form-row">
        <div class="form-group col-md-12">
            <h4>Contact</h4>
        </div>
        <div class="form-group col-md-8">
            <label for="Email">Email</label>
            <div class="input-group">
                <input value="asd" type="text" class="form-control" id="Email" name="email" placeholder="Email">
                <div class="input-group-append">
                 <span class="input-group-text">@example.com</span>
             </div>
         </div>
     </div>
     <div class="form-group col-md-4">
         <label for="Phone">Phone</label>
         <input value="asd" type="text" class="form-control" id="Phone" name="phone" placeholder="Phone">
     </div>
 </div>
 <div class="row">
     <div class="col">
         <input type="submit" class="float-right btn btn-primary" id="Register" name="register" value="Register">
     </div>
 </div>
</form>
</div>
</div>
</div>

@endsection