@extends('frontend.template')

@section('konten')
<div role="main" class="main">

    <div class="slider-container light rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'arrows': {'enable': true, 'left':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':-80},'right':{'container':'slider','h_align':'right','v_align':'center','h_offset':20,'v_offset':80}}}}">
            <div class="slides-number d-none d-sm-block">
                <span class="atual">1</span>
                <span class="total">3</span>
            </div>
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('gambar/banner1.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme skrollable skrollable-after" id="slide-529-layer-2" data-x="left" data-hoffset="15" data-y="center" data-voffset="0" data-width="360" data-height="360" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1200;e:Power3.easeInOut;" data-start="500" data-responsive_offset="on" style="background-color: rgb(255, 255, 255); padding: 30px; overflow: hidden;">
                        <span class="featured-border" style="border: 2px solid #dcdde0; width: 90%; position: absolute; height: 90%; top: 5%; left: 5%;"></span>
                        <span class="feature-tag" data-width="50" data-height="50" style="background: #2bca6e; color: #FFF; text-transform: uppercase; padding: 15px 102px; position: absolute; right: -24%; top: 6%; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); transform: rotate(45deg);">
                            FEATURED
                        </span>
                    </div>

                    <div class="tp-caption main-label" data-x="left" data-hoffset="35" data-y="center" data-voffset="-50" data-start="1500" data-whitespace="nowrap" data-transform_in="y:[-100%];s:500;" data-transform_out="opacity:0;s:500;" data-textAlign="center" style="z-index: 5; font-size: 1.9em; color: #000; text-transform: uppercase; font-weight: 900; text-shadow: none; width: 27vw; max-width: 320px;" data-mask_in="x:0px;y:0px;">MAWAR CLUSTER</div>

                    <div class="tp-caption" data-x="left" data-hoffset="35" data-y="center" data-voffset="0" data-start="1500" data-height="44" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1200;e:Power3.easeInOut;" data-textAlign="center" style="z-index: 5; font-size: 2em; font-weight: 400; text-transform: uppercase; color: #219cd2; line-height: 0.8em; width: 27vw; max-width: 320px;" data-mask_in="x:0px;y:0px;">Rp.175.000.000</div>

                    <a class="tp-caption slide-button btn" href="demo-real-estate-properties-detail.html" data-x="left" data-hoffset="108" data-y="center" data-voffset="60" data-start="1500" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" style="z-index: 5; font-size: 1em; text-transform: uppercase; background: #219cd2; padding: 12px 35px; color: #FFF;" data-mask_in="x:0px;y:0px;">VIEW PROPERTY</a>
                </li>


            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-normal mb-2">
                            Listing for <strong class="text-color-secondary font-weight-extra-bold">Sale</strong> <span class="font-weight-light">or</span> <strong class="text-color-secondary font-weight-extra-bold">Rent</strong>
                        </h2>
                    </div>
                </div>
                <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
                    @if(!empty($rumahku))
                    @foreach ($rumahku as $rumahlist)
                    <!-- PRODUK HOME START -->
                    <div class="col-md-6 col-lg-4 p-3 isotope-item">
                        <div class="listing-item">
                            <a href="{{ 'rumah/'.$rumahlist->id_rumah}}" class="text-decoration-none">
                                <div class="thumb-info thumb-info-lighten border">
                                    <div class="thumb-info-wrapper m-0">
                                        <img src="{{asset('storage/rumah/'.$rumahlist->gambar_rumah)}}" height="250px" width="auto" alt="gambar rumah">
                                        <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                            {{ $rumahlist->nama_unit }}
                                        </div>
                                    </div>
                                    <div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                        {{ $rumahlist->harga_unit }}
                                        <i class="fas fa-caret-right text-color-secondary float-right"></i>
                                    </div>
                                    <div class="custom-thumb-info-title b-normal p-4">
                                        <div class="thumb-info-inner text-3">{{ $rumahlist->detailrumahmodel->desa }}</div>
                                        <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-1">
                                            <li>
                                                <span class="accomodation-title">
                                                    Kamar:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    {{ $rumahlist->fasilitas->kamar }}
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    KM:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    {{$rumahlist->fasilitas->kamar_mandi }}
                                                </span>
                                            </li>
                                            <li>
                                                <span class="accomodation-title">
                                                    Tipe:
                                                </span>
                                                <span class="accomodation-value custom-color-1">
                                                    {{ $rumahlist->tipe }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END PRODUK HOME -->
                    @endforeach
                    @else
                    <p>Data kosong</p>
                    @endif
                </div>
                <div id="listingLoadMoreBtnWrapper" class="row align-items-center" style="min-height: 140px;">
                    <div class="col text-center">
                        <div id="listingLoadMoreLoader" class="listing-load-more-loader">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>

                        <button id="listingLoadMore" type="button" class="btn btn-secondary btn-xs text-3 text-uppercase outline-none custom-padding-1">Load More...</button>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col">
                        <h2 class="font-weight-normal mt-1 mb-0">Exclusive Locations</h2>
                    </div>
                </div>
                @if(!empty($ekslusif))

                <div class="row pb-4 mb-4">
                    @foreach ($ekslusif as $eksrow)
                    <div class="col-md-4 mt-3">
                        <div class="special-offer-item text-center text-color-light">
                            <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                <span class="special-offer-wrapper">
                                    <img src="{{ asset('porto/img/demos/real-estate/listings/listing-exclusive-location-1.jpg')}}" class="img-fluid" alt="">
                                    <span class="special-offer-infos text-color-light">
                                        <span class="special-offer-title font-weight-normal text-5 p-1 mb-2">
                                            {{$eksrow->area}}
                                        </span>
                                        <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">{{ $eksrow->detailrumah->count() }} Properties</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                @endif
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-normal mb-4">
                                Special offers
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="special-offer-item text-center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="img/demos/real-estate/offers/special-offer-1.jpg" class="img-fluid" alt="">
                                        <span class="special-offer-infos text-color-light">
                                            <span class="special-offer-description font-weight-light text-5">
                                                Amazing Houses <br>Collection
                                            </span>
                                            <span class="special-offer-title font-weight-bold text-uppercase text-3 pb-5 mb-3">
                                                from: $100,000
                                            </span>
                                            <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">view more</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="special-offer-item text-center text-color-light">
                                <a href="demo-real-estate-properties.html" class="text-decoration-none">
                                    <span class="special-offer-wrapper">
                                        <img src="img/demos/real-estate/offers/special-offer-2.jpg" class="img-fluid" alt="">
                                        <span class="special-offer-infos text-color-light pt-4">
                                            <span class="special-offer-description font-weight-light text-5">
                                                Exclusive Comdominium
                                            </span>
                                            <span class="special-offer-title font-weight-bold text-uppercase text-3 mb-3">
                                                Miami Beach
                                            </span>
                                            <span class="btn btn-secondary text-uppercase custom-padding-1 d-inline-block">view more</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="agents text-color-light text-center">
                                <h4 class="text-light pt-4 m-0">Our Agents</h4>

                                <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">

                                    @if (!empty($ourAgen))
                                    @foreach($ourAgen as $row)
                                    <!-- START OUR AGENT -->
                                    <div class="pr-2 pl-2">
                                        <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid" src="{{asset('storage/user_photo/'.$row->detailuser->gambar)}}" alt="our Agents" />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">{{$row->detailuser->nama_lengkap}}</strong>
                                                <span class="font-weight-light">{{$row->detailuser->notelp}}</span>
                                                <span class="font-weight-light">{{$row->email}}</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- END OUR AGENT -->
                                    @endforeach
                                    <!-- Start Dummy Profile -->
                                    <div class="pr-2 pl-2">
                                        <a href="#" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid" src="{{asset('porto/img/team/team-11.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">bruno@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- End Dummy Profile -->
                                    @else
                                    <div class="pr-2 pl-2">
                                        <a href="#" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid" src="{{asset('porto/img/team/team-11.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">bruno@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="pr-2 pl-2">
                                        <a href="#" class="text-decoration-none">
                                            <span class="agent-thumb">
                                                <img class="img-fluid" src="{{asset('porto/img/team/team-11.jpg')}}" alt />
                                            </span>
                                            <span class="agent-infos text-light pt-3">
                                                <strong class="text-uppercase font-weight-bold">Bruno Doe</strong>
                                                <span class="font-weight-light">123-456-789</span>
                                                <span class="font-weight-light">bruno@domain.com</span>
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="newsletter box-shadow-custom p-4 text-center">
                                <i class="icon-envelope-letter icons"></i>
                                <h4 class="mt-1 mb-1">
                                    Newsletter
                                </h4>
                                <p>
                                    Subscribe and be the first to know about our best offers
                                </p>

                                <div class="alert alert-success d-none" id="newsletterSuccess">
                                    <strong>Success!</strong> You've been added to our email list.
                                </div>

                                <div class="alert alert-danger d-none" id="newsletterError"></div>

                                <form id="newsletterForm" class="text-black pt-2" action="php/newsletter-subscribe.php" method="POST">
                                    <input class="form-control" placeholder="Your Name *" name="newsletterName" id="newsletterName" type="text">
                                    <input class="form-control" placeholder="Your Email Address *" name="newsletterEmail" id="newsletterEmail" type="text">
                                    <button class="btn btn-light btn-block text-uppercase bg-color-secondary mt-4 text-light custom-padding-1" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    @stop