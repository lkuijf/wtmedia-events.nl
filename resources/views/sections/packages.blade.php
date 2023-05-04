<div class="inner">
    <div class="pricing3Column">
        <article>
            <div>
                <h3>{{ $data['website_options']->package1_title }}</h3>
                {!! $data['website_options']->package1_text !!}
                <div>
                    <p></p>
                    <p><span>{{ Str::replace('€', '&euro;', $data['website_options']->package1_price)  }}</span></p>
                </div>
            </div>
        </article>
        <article>
            <div>
                <h3>{{ $data['website_options']->package2_title }}</h3>
                {!! $data['website_options']->package2_text !!}
                <div>
                    <p></p>
                    <p><span>{{ Str::replace('€', '&euro;', $data['website_options']->package2_price)  }}</span></p>
                </div>
            </div>
        </article>
        <article>
            <div>
                <h3>{{ $data['website_options']->package3_title }}</h3>
                {!! $data['website_options']->package3_text !!}
                <div>
                    <p></p>
                    <p><span>{{ Str::replace('€', '&euro;', $data['website_options']->package3_price)  }}</span></p>
                </div>
            </div>
        </article>
    </div>
</div>
