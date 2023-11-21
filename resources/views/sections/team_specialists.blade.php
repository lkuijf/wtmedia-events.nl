<div class="inner">
    <div class="teamSpecialistsContent">
        @foreach ($specialists as $teamMember)
        <article>
            <div><img src="{!! $teamMember->image[0]['sizes']['medium_large'] !!}" alt="{{ $teamMember->image[0]['alt'] }}"></div>
            <div>
                <h3>{{ $teamMember->title->rendered }}</h3>
                <p class="tmFunc">{{ $teamMember->function }}</p>
                <p>{{ $teamMember->card_text }}</p>
                <p><a href="{{ url('over-wt-media-events#') }}{{ $teamMember->slug }}">Lees meer</a></p>
            </div>
        </article>
        @endforeach
    </div>
</div>
