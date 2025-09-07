<!-- Vue admin/pages/create -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Créer une page</h2>
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Slug (ex: a-propos, fibrociment)</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contenu</label>
            <textarea name="body" class="form-control" rows="8"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
    </form>
</div>
@endsection
