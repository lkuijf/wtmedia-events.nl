@extends('templates.wtme')
@section('content')
    @include('snippets.contentSections')
    {{-- <div class="standardPage"> --}}
    {{-- </div> --}}
    <div class="blogWrap">
    @foreach ($data['blog_items'] as $blogItem)
        <article>
            @if (isset($blogItem->gallery[0]))
                <img src="{{ $blogItem->gallery[0]['sizes']['medium'] }}" alt="{{ $blogItem->gallery[0]['alt'] }}">
            @endif
            <div>
                <h2>{{ $blogItem->title }}</h2>
                <p>{{ $blogItem->date }}</p>
                <p>{!! $blogItem->card_text !!}</p>
                <p><a href="{{ url('blog/' . $blogItem->slug) }}">Lees verder ></a></p>
            </div>
        </article>
    @endforeach
    </div>
@endsection