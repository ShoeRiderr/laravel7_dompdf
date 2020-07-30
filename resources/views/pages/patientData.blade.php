@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            @if (count($patients) > 1)
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Forname</th>
                    <th>Surname</th>
                    <th>Pesel</th>
                    <th>Residence address</th>
                    <th>Corresponding address</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
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
                @endforeach
            </table>
            @else

            @endif
        </div>
    </div>
@endsection