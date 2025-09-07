<!-- Vue fontend/pages/show -->
@extends('layouts.frontend')

@section('content')
<div class="container">
    <h2>{{ $page->title }}</h2>
    <div class="mt-3">
        {!! nl2br(e($page->body)) !!}
    </div>
</div>
@endsection
