@extends('layouts.app')

@section('content')
	 <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
		
        <a href="/clients/add" class="btn btn-primary ml-auto">+ Create Client</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Company Logo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->address }}</td>
                        <td>
                            @if ($client->company_logo)
                                <img src="{{ asset('storage/' . $client->company_logo) }}" alt="Company Logo" width="100" height="100">
                            @else
                                No Logo
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
