<!-- Vue admin/faqs/edit -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Modifier une question FAQ</h2>
    <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Question</label>
            <input type="text" name="question" value="{{ $faq->question }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Réponse</label>
            <textarea name="answer" class="form-control" rows="5" required>{{ $faq->answer }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
