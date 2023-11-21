<div class="inner">
    <div class="teamSpecialistsContent">
        @foreach ($specialists as $teamMember)
        <article>
            <div><img src="{!! $teamMember->image[0]['sizes']['medium_large'] !!}" alt="{{ $teamMember->image[0]['alt'] }}"></div>
            <div>
                <h3>{{ $teamMember->title->rendered }}</h3>
                <p>{{ $teamMember->function }}</p>
                {{-- {!! $teamMember->text !!} --}}
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt eget nullam non nisi. Rutrum quisque non tellus orci ac auctor augue mauris augue.</p>
                <p><a href="">Lees meer</a></p>
            </div>
        </article>
        @endforeach
    </div>
</div>
