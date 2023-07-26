<div class="inner">
    {{-- <div class="eventRelativeWrap"> --}}
        <div class="casesContentDiensten eventCases">
            @include('sections.cases', ['cases' => $cases, 'type' => 'events'])
        </div>
        <p class="toggleEvents"><a href="">Bekijk meer</a></p>
    {{-- </div> --}}
</div>