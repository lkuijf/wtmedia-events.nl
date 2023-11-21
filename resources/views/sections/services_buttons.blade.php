<div class="servicesBtns">
    <article class="serviceBtnWrap serOnMar">
        <div>
            <h3>Online marketing</h3>
            <p class="serIcon"></p>
        </div>
        <div>
            <p>{{ $data['website_options']->service_om_text }}</p>
            <a href="{{ url('diensten/online-marketing') }}">Lees meer</a>
        </div>
    </article>
    <article class="serviceBtnWrap serWebDev">
        <div>
            <h3>Webdevelopment</h3>
            <p class="serIcon"></p>
        </div>
        <div>
            <p>{{ $data['website_options']->service_wd_text }}</p>
            <a href="{{ url('diensten/webdevelopment') }}">Lees meer</a>
        </div>
    </article>
    <article class="serviceBtnWrap serEv">
        <div>
            <h3>Events</h3>
            <p class="serIcon"></p>
        </div>
        <div>
            <p>{{ $data['website_options']->service_e_text }}</p>
            <a href="{{ url('diensten/events') }}">Lees meertest</a>
        </div>
    </article>
</div>