@if ($secData->_type == 'tekst')
    @include('sections.2column_text', [
    'text' => str_replace('---', '<hr>', $secData->text),
    ])
@endif
@if ($secData->_type == 'afbeelding')
    @include('sections.2column_afbeelding', [
    'imgUrlMedium' => $secData->image[0]['sizes']['medium_large'],
    'imgUrlLarge' => $secData->image[0]['sizes']['large'],
    'imgAlt' => $secData->image[0]['alt'],
    ])
@endif
@if ($secData->_type == 'button')
    @include('sections.2column_button', ['url' => $secData->url, 'title' => $secData->title])
@endif
{{-- @if ($secData->_type == 'bestand')
    @include('sections.2column_bestand', [
    'file' => $secData->file,
    'title' => $secData->title,
    ])
@endif
@if ($secData->_type == 'nieuws-items')
    @foreach ($secData->news_associations as $newsItem)
        @include('sections.2column_news', [
        'title' => $newsItem->title,
        'site_title' => $newsItem->site_title,
        'news_url' => $newsItem->news_url,
        'text' => $newsItem->text,
        'image' => $newsItem->image,
        ])
    @endforeach
@endif --}}
