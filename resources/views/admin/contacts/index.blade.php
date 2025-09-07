<!-- Vue admin/contacts/index -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Messages reçus</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ Str::limit($contact->message, 50) }}</td>
                <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
</div>
@endsection
