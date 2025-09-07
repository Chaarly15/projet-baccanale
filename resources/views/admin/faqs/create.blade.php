<!-- Vue admin/faqs/create -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Ajouter une question FAQ</h2>
    <form action="{{ route('admin.faqs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Réponse</label>
            <textarea name="answer" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
@endsection
