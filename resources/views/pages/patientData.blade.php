@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('registration.update', $patient->id) }}" method="POST">
                @csrf
                @method('PATCH')
            <h4>Patient Data</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Forname</th>
                    <th>Surname</th>
                    <th>Pesel</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td><input type="text" name="forname" value="{{ $patient->forname}}"></td>
                            <td><input type="text" name="surname" value="{{ $patient->surname}}"></td>
                            <td><input type="text" name="pesel" value="{{ $patient->pesel}}"></td>
                            <td><input type="text" name="phone" value="{{ $patient->phone}}"></td>
                            <td><input type="text" name="email" value="{{ $patient->email}}"></td>
                        </tr>
            </tbody>
            </table>
            <h4>Ressidence address</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Street</th>
                        <th>Build num</th>
                        <th>Apart Num</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Post Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="streetRes" value="{{ $patient->streetRes}}"></td>
                        <td><input type="text" name="buildNumRes" value="{{ $patient->buildNumRes}}"></td>
                        <td><input type="text" name="apartNumRes" value="{{ $patient->apartNumRes}}"></td>
                        <td><input type="text" name="cityRes" value="{{ $patient->cityRes}}"></td>
                        <td><input type="text" name="provinceRes" value="{{ $patient->provinceRes}}"></td>
                        <td><input type="text" name="postCodeRes" value="{{ $patient->postCodeRes}}"></td>
                    </tr>
                </tbody>
            </table>
            <h4>Corresponding address</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <th>Street</th>
                    <th>Build num</th>
                    <th>Apart Num</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Post Code</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="streetCor" value="{{ $patient->streetCor}}"></td>
                        <td><input type="text" name="buildNumCor" value="{{ $patient->buildNumCor}}"></td>
                        <td><input type="text" name="apartNumCor" value="{{ $patient->apartNumCor}}"></td>
                        <td><input type="text" name="cityCor" value="{{ $patient->cityCor}}"></td>
                        <td><input type="text" name="provinceCor" value="{{ $patient->provinceCor}}"></td>
                        <td><input type="text" name="postCodeCor" value="{{ $patient->postCodeCor}}"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" class="btn btn-primary float-right" id="edit" name="Edit" value="Edit data">
        </form>
        </div>
    </div>
@endsection