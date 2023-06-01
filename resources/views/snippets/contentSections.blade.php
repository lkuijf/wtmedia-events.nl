@foreach ($data['content_sections'] as $section)
    @if ($section->_type == '_anchor')
        <a id="{{ $section->value }}" class="anchorPoint"></a>
    @endif
    @if($section->_type == 'hero')
        {{-- @php
            if(!isset($section->show_logo)) $section->show_logo = false;
        @endphp --}}
        @include('sections.hero', [
            'images' => $section->crb_media_gallery,
            'title' => $section->hero_title,
            'text' => $section->text,
            'email' => $section->btn_email,
            'phone' => $section->btn_phone,
            ])
    @endif
    {{-- @if($section->_type == 'text')
        @php
            if(!isset($section->cta_button)) $section->cta_button = [];
            if(!isset($section->cta_button_2)) $section->cta_button_2 = [];
        @endphp
        @include('sections.text', [
            // 'header' => $section->header,
            'text' => str_replace('---', '<hr>', $section->text),
            // 'imageUrl' => $section->image[0]['url'],
            // 'imageAlt' => $section->image[0]['alt'],
            // 'buttons' => $section->cta_button,
            // 'header_2' => $section->header_2,
            // 'text_2' => $section->text_2,
            // 'imageUrl_2' => $section->image_2[0]['url'],
            // 'imageAlt_2' => $section->image_2[0]['alt'],
            // 'buttons_2' => $section->cta_button_2,
            ])
    @endif --}}
    {{-- @if($section->_type == 'office_boxes')
    <div class="introTextContent gridBoxes">
        <h2>GLOMAR <strong>OFFICES</strong></h2>
        <div class="inner">
            @foreach ($section->office_associations as $office)
                @include('sections.text_office_boxes', [
                    'header' => $office->country,
                    'phone' => $office->phone,
                    'email' => $office->email,
                    'address_line_1' => $office->address1,
                    'address_line_2' => $office->address2,
                    'address_line_3' => $office->address3,
                    'address_line_4' => $office->address4,
                    'gm_address' => $office->google_maps_address,
                    ])
            @endforeach
        </div>
    </div>
    @endif
    @if($section->_type == 'working_with' && $section->show_working_with)
        @include('sections.working_with')
    @endif
    @if($section->_type == 'get_in_touch' && $section->show_get_in_touch)
        @include('sections.get_in_touch')
    @endif
    @if($section->_type == 'statistics')
        @include('sections.statistics', ['statistics' => $section->stats])
    @endif
    @if($section->_type == 'professional_boxes')
        @include('sections.professionals', ['professionals' => $section->professional_associations])
    @endif
    @if($section->_type == 'vessel_boxes')
        @include('sections.vessels', ['vessels' => $section->vessels_associations])
    @endif
    @if($section->_type == 'news_boxes')
        @include('sections.news', ['news' => $section->news_associations])
    @endif --}}
        @if($section->_type == 'packages' && $section->show_packages)
            @include('sections.packages')
        @endif
        @if($section->_type == 'working_with' && $section->show_working_with)
            @include('sections.working_with')
        @endif
        @if($section->_type == 'events' && $section->show_events)
            @include('sections.events')
        @endif
        @if ($section->_type == '1column')
        <div class="fullw">
            @foreach ($section->fullwidth as $secData)
                @include('snippets.dynamicSections', ['secData' => $secData, 'layout' => 'fullwidth'])
            @endforeach
        </div>
        @endif
        @if ($section->_type == '2column')
            <div class="twoColumns">
                <div class="inner">
                <div class="columns @if($section->column_direction == 'reverse'){{ 'colReverse' }}@endif">
                    <div>
                        @foreach ($section->left as $secData)
                            @include('snippets.dynamicSections', ['secData' => $secData, 'layout' => '2column'])
                        @endforeach
                    </div>
                    <div>
                        @foreach ($section->right as $secData)
                            @include('snippets.dynamicSections', ['secData' => $secData, 'layout' => '2column'])
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        @endif
    {{-- @if ($section['type'] == 'banner')
        @include('sections.banner', [
            'image' => $section['img'], 
            'extraPadding' => $section['checked'],
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            't_align' => $section['text_align'],
            't_color' => $section['text_color'],
            'i_opacity' => $section['image_opacity'],
            'text' => $section['text'],
            'buttons' => $section['links'],
            ])
    @endif
    @if ($section['type'] == 'text')
        @include('sections.text', [
            // 'image' => $section['img'], 
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            // 'vAlign' => $section['valign_center'],
            'text' => $section['text'],
            // 'bg_color' => $section['background_color'],
            // 'orientation' => $section['orientation'],
            // 'margin' => $section['margin'],
            ])
    @endif
    @if ($section['type'] == 'text_flex')
        @include('sections.text_flex', [
            // 'image' => $section['img'], 
            // 'wl' => $section['wl_header'],
            // 'bl' => $section['bl_header'],
            // 'vAlign' => $section['valign_center'],
            'header' => $section['hdr'],
            'text_left' => $section['text_l'],
            'text_right' => $section['text_r'],
            'bg_color' => $section['background_color'],
            'column_stretch' => $section['stretch'],
            'buttons_l' => $section['links_l'],
            'buttons_r' => $section['links_r'],
            // 'orientation' => $section['orientation'],
            // 'margin' => $section['margin'],
            ])
    @endif
    @if ($section['type'] == 'text_grid')
        @include('sections.text_grid', [
            'gridItems' => $section['grid_items'], 
            ])
    @endif
    @if ($section['type'] == 'info_icons')
        @include('sections.info_icons', [
            'infoItems' => $section['info_icons'], 
            ])
    @endif
    @if ($section['type'] == 'testimonials')
        @include('sections.testimonials', [
            'testimonials' => $section['testimonials'], 
            ])
    @endif
    @if ($section['type'] == 'colleagues')
        @include('sections.colleagues', [
            'colleagues' => $section['people'], 
            ])
    @endif
    @if ($section['type'] == 'joboffers')
        <div id="jobOffersHomepage">
            <div class="inner">
                @include('sections.jobOffers', [
                    'jobOffers' => $section['jobOffers'], 
                    ])
                <div role="tablist" class="jobOfferDots"></div>
            </div>
        </div>
        @section('before_closing_body_tag')
        <script>
            makeResultsClickable();
        </script>
        @endsection
    @endif
    @if ($section['type'] == 'information_blocks_holder')
        @include('sections.information_blocks', ['info_blocks' => $section['blocks']])
    @endif
    @if ($section['type'] == 'person_wraps')
        @include('sections.people_blocks', ['person_blocks' => $section['people']])
    @endif --}}
@endforeach
