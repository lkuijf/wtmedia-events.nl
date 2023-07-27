<div class="inner">
    {{-- <div class="casesContentDiensten webDevelopmentCases"> --}}
        {{-- @include('sections.cases', ['cases' => $cases, 'type' => 'web-development']) --}}
    {{-- </div> --}}

    <div class="webDevCasesContent">
        <div class="webDevNumbers">
            <div>
                <span>234</span>
                <span>happy clients</span>
            </div>
            <div>
                <span>12</span>
                <span>projects</span>
            </div>
        </div>
        <div class="webDevGallery">
            @include('sections.cases', ['cases' => $cases, 'type' => 'web-development'])
        </div>
    </div>

    {{-- <div class="webDevCasesContent">
        <div class="webDevNumber"><div>234</div></div>
        <div class="webDevNumber"><div>12</div></div>
        <div class="webDevGallery">
            @include('sections.cases', ['cases' => $cases, 'type' => 'web-development'])
        </div>
    </div> --}}
    
</div>