{{-- {{ var_dump($cases) }} --}}
@foreach ($cases as $case)
    @if (isset($case->gallery[0]['sizes']))
        <img src="{{ $case->gallery[0]['sizes']['medium_large'] }}" alt="{{ $case->gallery[0]['alt'] }}">
    @else
        <img src="{{ $case->gallery[0]['url'] }}" alt="{{ $case->gallery[0]['alt'] }}">
    @endif
@endforeach