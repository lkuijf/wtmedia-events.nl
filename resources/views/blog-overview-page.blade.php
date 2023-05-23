@extends('templates.wtme')
@section('content')
    @include('snippets.contentSections')
    {{-- <div class="standardPage"> --}}
    {{-- </div> --}}
    <div class="blogWrap">
    @foreach ($data['blog_items'] as $blogItem)
        <article>
            <h2>{{ $blogItem->title }}</h2>
            <p>{{ $blogItem->date }}</p>
            <p>{{ $blogItem->slug }}</p>
            <p>{{ $blogItem->card_text }}</p>
            @if (isset($blogItem->gallery[0]))
                <img src="{{ $blogItem->gallery[0]['sizes']['medium'] }}" alt="{{ $blogItem->gallery[0]['alt'] }}">
            @endif
        </article>
    @endforeach
    </div>
@endsection