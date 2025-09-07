<!-- Vue admin/pages/edit -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Modifier la page</h2>
    <form action="{{ route('admin.pages.update', $page) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="title" value="{{ $page->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $page->slug }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contenu</label>
            <textarea name="body" class="form-control" rows="8">{{ $page->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
