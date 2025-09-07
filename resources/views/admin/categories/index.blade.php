<!-- Vue admin/categories/index -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Catégories</h2>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Ajouter une catégorie</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ Str::limit($category->description, 50) }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
</div>
@endsection
