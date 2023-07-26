@extends('templates.wtme')
@section('page_title', $data['head_title'])
@section('meta_description', $data['meta_description'])
@section('content')
    <div class="standardPage">
    @include('snippets.contentSections')
    </div>
@endsection
@section('before_closing_body_tag')
    <script>
        const events = document.querySelectorAll('.eventCases a');
        const toggleEventsBtn = document.querySelector('.toggleEvents a');
        if(events.length) {
            hideEvents(events);
        }
        if(toggleEventsBtn) {
            toggleEventsBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if(toggleEventsBtn.classList.contains("eventsVisible")) {
                    hideEvents(events);
                    toggleEventsBtn.innerHTML = 'Bekijk meer';
                } else {
                    showEvents(events);
                    toggleEventsBtn.innerHTML = 'Bekijk minder';
                }
                toggleEventsBtn.classList.toggle('eventsVisible');
            });
        }
        function hideEvents(events) {
            events.forEach((ev,k) => {
                ev.classList.remove('hoverEffectFullList');
                if(k > 3) {
                    ev.style.display = 'none';
                }
            });
        }
        function showEvents(events) {
            events.forEach((ev,k) => {
                ev.style.display = 'block';
                ev.classList.add('hoverEffectFullList');
            });
        }
    </script>
@endsection
