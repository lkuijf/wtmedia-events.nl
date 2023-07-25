<div class="inner">
    <div class="teamSpecialistsContent">
        @foreach ($specialists as $teamMember)
        <article>
            <div>[foto]</div>
            <div>{{ $teamMember->title->rendered }}</div>
        </article>
        @endforeach
    </div>
</div>
