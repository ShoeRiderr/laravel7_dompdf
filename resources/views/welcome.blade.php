@extends('layouts.app')

@section('title', 'Registration Panel')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <p>Hello {!! $name !!}</p>
            <form method="POST" action="{{ url('patient') }}">
                {{--  !!!!!!!!!!!!!!PATIENTS DATA!!!!!!!!!!!!!!!!!  --}}
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Patient informations</h4>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="forname">Name</label>
                      <input type="text" class="form-control" id="forname" name="forname" placeholder="Name">
                      @error('forname')
                      <div class="alert alert-danger">{{ $errorMessage }}</div>
                      @enderror
                  </div>
                  <div class="form-group col-md-6">
                      <label for="Surname">Surname</label>
                      <input type="text" class="form-control" id="Surname" name="surname" placeholder="Surname">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="Pesel">Pesel</label>
                    <input type="text" class="form-control" id="Pesel" name="pesel" placeholder="Pesel">
                </div>
            </div>
            {{-- !!!!!!!!!RESIDENCE ADDRESS!!!!!!!!!!!!!  --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h4>Place of residence</h4>
                </div>
                <div class="form-group col-md-8">
                    <label for="Street">Street</label>
                    <input type="text" class="form-control" id="Street" name="street" placeholder="Street">
                </div>
                <div class="form-group col-md-2">
                    <label for="BuildNum">Building number</label>
                    <input type="text" class="form-control" id="BuildNum" name="buildNum" placeholder="Building number">
                </div>
                <div class="form-group col-md-2">
                    <label for="ApartNum">Apartment number</label>
                    <input type="text" class="form-control" id="ApartNum" name="apartdNum" placeholder="Apartment number">
                </div>
                <div class="form-group col-md-6">
                    <label for="City">City</label>
                    <input type="text" class="form-control" id="City" name="city" placeholder="City">
                </div>
                <div class="form-group col-md-4">
                    <label for="InputProvince">Province</label>
                    <select id="InputProvince" class="form-control">
                        <option selected="selected">--Choose your province</option>
                        <option>dolnośląskie</option>
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
                 <label for="PostCode">Post code</label>
                 <input type="text" class="form-control" id="PostCode" name="postCode" placeholder="Post Code">
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
                    <input type="checkbox" class="form-check-input" id="CorrespondAsLiving" name="correspondAsLiving">
                    <label for="CorrespondAsLiving" class="form-check-label">The same as residence address</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="CorrespondDiff" name="correspondAsLiving">
                    <label for="CorrespondDiff" class="form-check-label">Diffrent</label>
                </div>
            </div>
            <div class="form-group col-md-8">
                <label for="Street">Street</label>
                <input type="text" class="form-control" id="Street" name="street" placeholder="Street">
            </div>
            <div class="form-group col-md-2">
                <label for="BuildNum">Building number</label>
                <input type="text" class="form-control" id="BuildNum" name="buildNum" placeholder="Building number">
            </div>
            <div class="form-group col-md-2">
                <label for="ApartNum">Apartment number</label>
                <input type="text" class="form-control" id="ApartNum" name="apartdNum" placeholder="Apartment number">
            </div>
            <div class="form-group col-md-6">
                <label for="City">City</label>
                <input type="text" class="form-control" id="City" name="city" placeholder="City">
            </div>
            <div class="form-group col-md-4">
                <label for="InputProvince">Province</label>
                <select id="InputProvince" class="form-control">
                    <option selected="selected">--Choose your province</option>
                    <option>dolnośląskie</option>
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
             <label for="PostCode">Post code</label>
             <input type="text" class="form-control" id="PostCode" name="postCode" placeholder="Post Code">
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
                <input type="email" class="form-control" id="Email" name="email" placeholder="Email">
                <div class="input-group-append">
                 <span class="input-group-text">@example.com</span>
             </div>
         </div>
     </div>
     <div class="form-group col-md-4">
         <label for="Phone">Phone</label>
         <input type="text" class="form-control" id="Phone" name="phone" placeholder="Phone">
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