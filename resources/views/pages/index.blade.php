@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @if (count($patients) > 1)
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Forname</th>
                    <th>Surname</th>
                    <th>Pesel</th>
                    <th>Residence address</th>
                    <th>Corresponding address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                        <tr>
                                <td>{{ $patient->id }}</td>
                                <td>{{ $patient->forname}}</td>
                                <td>{{ $patient->surname}}</td>
                                <td>{{ $patient->pesel}}</td>
                                <td>{{ $patient->Address}}</td>
                                <td>{{ $patient->Corraddress }}</td>
                                <td>{{ $patient->phone}}</td>
                                <td>{{ $patient->email}}</td>
                                <td><a href="/pages/patientData/{{ $patient->id }}"><input type="button" class="btn btn-info" name="edit_btn" value="Edit"></a></td>
                                <td><a href="delete/{{ $patient->id }}"><input type="button" class="btn btn-danger" name="delete_btn" value="Delete"></a></td>
                        </tr>
                @endforeach
            </tbody>
            </table>
            @else

            @endif
        </div>
    </div>
@endsection