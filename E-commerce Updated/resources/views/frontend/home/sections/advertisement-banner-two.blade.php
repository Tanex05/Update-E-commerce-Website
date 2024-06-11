<section id="wsus__single_banner" class="wsus__single_banner_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                @if (isset($homepage_section_banner_two->banner_one) && $homepage_section_banner_two->banner_one->status == 1)
                    <div class="wsus__single_banner_content">
                        <a href="{{$homepage_section_banner_two->banner_one->banner_url}}">
                            <img class="img-fluid" src="{{asset($homepage_section_banner_two->banner_one->banner_image)}}" alt="" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-xl-6 col-lg-6">
                @if (isset($homepage_section_banner_two->banner_two) && $homepage_section_banner_two->banner_two->status == 1)
                    <div class="wsus__single_banner_content">
                        <a href="{{$homepage_section_banner_two->banner_two->banner_url}}">
                            <img class="img-fluid" src="{{asset($homepage_section_banner_two->banner_two->banner_image)}}" alt="" style="max-width: 100%; height: auto;">
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>