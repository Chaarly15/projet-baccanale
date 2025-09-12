<!-- Vue admin/faqs/index -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>FAQ</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-success">Ajouter une question</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Question</th>
                <th>Réponse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faqs as $faq)
            <tr>
                <td>{{ $faq->question }}</td>
                <td>{{ Str::limit($faq->answer, 60) }}</td>
                <td>
                    <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    {{ $faqs->links() }}
</div>
@endsection
