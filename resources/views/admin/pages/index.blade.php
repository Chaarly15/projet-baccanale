<!-- Vue admin/pages/index -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Pages</h2>
    <a href="{{ route('admin.pages.create') }}" class="btn btn-success mb-3">Ajouter une page</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $pages->links() }}
</div>
@endsection
