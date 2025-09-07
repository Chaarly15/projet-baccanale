<!-- Vue frontend/faq -->
@extends('layouts.frontend')

@section('content')
<div class="container">
    <h2>Foire Aux Questions</h2>

    <div class="accordion mt-4" id="faqAccordion">
        @foreach($faqs as $index => $faq)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $index }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                    {{ $faq->question }}
                </button>
            </h2>
            <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                 aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    {!! nl2br(e($faq->answer)) !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
