@extends('layouts.app')

@section('title', 'PdfConverter')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="text-center mb-3">
                <a href="/pdf-create"><button type="button" class="btn btn-success">Download PDF</button></a>
            </div>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

@endsection