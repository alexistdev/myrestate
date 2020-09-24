@extends('frontend.template')
@section('konten')
<div role="main" class="main">
    @if(!empty($rumahku))
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1 class="text-dark">{{ $rumahku->nama_unit}}
                        <p class="lead mb-0">{{ $rumahku->detailrumahmodel->desa}} <a href="#map" data-hash data-hash-offset="100">(Map Location)</a></p>
                    </h1>
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb d-block text-md-right">
                        <li><a href="demo-real-estate.html">Home</a></li>
                        <li><a href="demo-real-estate-properties.html">Properties</a></li>
                        <li class="active">Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row pb-5 pt-3">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-7">
                        <span class="thumb-info-listing-type thumb-info-listing-type-detail bg-color-secondary text-uppercase text-color-light font-weight-semibold p-2 pl-3 pr-3">
                            for sale
                        </span>
                        <div class="thumb-gallery">
                            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                                <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
                                    <div>
                                        <a href="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}">
                                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                                <span class="thumb-info-wrapper text-4">
                                                    <!-- Gambar Utama -->
                                                    <img alt="Property Detail" src="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}" class="img-fluid">
                                                    <span class="thumb-info-title text-4">
                                                        <span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Corousel -->
                                    @foreach($rumahku->gambar as $rows)
                                    <div>
                                        <a href="{{asset('storage/rumah/'.$rows->gambar_unit)}}">
                                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders text-4">
                                                <span class="thumb-info-wrapper text-4">
                                                    <img alt="Property Detail" src="{{asset('storage/rumah/'.$rows->gambar_unit)}}" class="img-fluid">
                                                    <span class="thumb-info-title text-4">
                                                        <span class="thumb-info-inner text-4"><i class="icon-magnifier icons text-4"></i></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    @endforeach
                                    <!-- /Corousel -->
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
                                <div>
                                    <img alt="Property Detail" src="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}" class="img-fluid cur-pointer">
                                </div>
                                @foreach($rumahku->gambar as $rows)
                                <div>
                                    <img alt="Property Detail" src="{{asset('storage/rumah/'.$rows->gambar_unit)}}" class="img-fluid cur-pointer">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <table class="table table-striped">
                            <colgroup>
                                <col width="35%">
                                <col width="65%">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <td class="bg-color-primary text-light align-middle">
                                        Harga
                                    </td>
                                    <td class="text-4 font-weight-bold align-middle bg-color-primary text-light">
                                        {{ $rumahku->harga_unit }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ID
                                    </td>
                                    <td>
                                        #{{$rumahku->id_rumah}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Viewer
                                    </td>
                                    <td>
                                        {{$statistik->viewer}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Alamat
                                    </td>
                                    <td>
                                        {{ $rumahku->detailrumahmodel->alamat_lengkap}}, {{ $rumahku->detailrumahmodel->desa}},{{ $rumahku->detailrumahmodel->kecamatan}},{{ $rumahku->detailrumahmodel->kabupaten}},{{ $rumahku->detailrumahmodel->provinsi}}<br><a href="#map" class="text-2" data-hash data-hash-offset="100">(Map Location)</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kamar
                                    </td>
                                    <td>
                                        {{ $rumahku->fasilitas->kamar}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kamar Mandi
                                    </td>
                                    <td>
                                        {{ $rumahku->fasilitas->kamar_mandi}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Garasi
                                    </td>
                                    <td>
                                        {{ $rumahku->fasilitas->garasi}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tipe
                                    </td>
                                    <td>
                                        {{ $rumahku->tipe}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="mt-3 mb-3">{{ $rumahku->deskripsirumah->judul}}</h4>
                        <p>{{ $rumahku->deskripsirumah->deskripsi}}</p>
                        <hr class="solid my-5">
                        <h4 class="mt-3 mb-3">Fasilitas</h4>
                        <ul class="list list-icons list-secondary row m-0">
                            <!-- AC -->
                            @if(!empty($rumahku->fasilitas->ac))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="{{$rumahku->fasilitas->ac}} unit"><i class="fas fa-info-circle"></i></a></li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Air conditioning</li>
                            @endif
                            <!-- Pemanas Air -->
                            @if(!empty($rumahku->fasilitas->pemanas_air))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Water Heater</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Water Heater</li>
                            @endif
                            <!-- Laundry -->
                            @if(!empty($rumahku->fasilitas->laundry))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Laundry</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Laundry</li>
                            @endif
                            <!-- Gym -->
                            @if(!empty($rumahku->fasilitas->gym))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Gym</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Gym</li>
                            @endif
                            <!-- Internet -->
                            @if(!empty($rumahku->fasilitas->internet))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Internet</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Internet</li>
                            @endif
                            <!-- Tv Kabel -->
                            @if(!empty($rumahku->fasilitas->tv_kabel))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Tv Kabel</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Tv Kabel</li>
                            @endif
                            <!-- Layanan Sampah -->
                            @if(!empty($rumahku->fasilitas->layanan_sampah))
                            <li class="col-sm-6 col-lg-4"><i class="fas fa-check"></i> Layanan Sampah</li>
                            @else
                            <li class="col-sm-6 col-lg-4 custom-list-item-disabled"><i class="fas fa-check"></i> Layanan Sampah</li>
                            @endif
                        </ul>
                        <hr class="solid my-5">
                        <h4 class="mt-3 mb-3" id="map">Map Location</h4>
                        <div id="googlemaps" class="google-map mb-0"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="agents text-color-light text-center">
                        <h4 class="text-light pt-3 m-0">Property Agents</h4>
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1 pt-3 m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true}">
                            <div class="pr-2 pl-2">
                                <a href="demo-real-estate-agents-detail.html" class="text-decoration-none">
                                    <span class="agent-thumb">
                                        <img class="img-fluid" src="{{asset('storage/user_photo/'.$getDetail->detailuser->gambar)}}" alt />
                                    </span>
                                    <span class="agent-infos text-light pt-1 mb-3">
                                        <strong class="text-uppercase font-weight-bold">{{$getDetail->detailuser->nama_lengkap}}</strong>
                                        <span class="font-weight-light">{{$getDetail->detailuser->notelp}}</span>
                                        <span class="font-weight-light">{{$getDetail->email}}</span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <h4 class="pt-4 mb-3 text-color-dark">Request Information</h4>
                    <p>Contact us or give us a call to request more information</p>
                    <form id="contactForm" class="contact-form mb-4" action="php/contact-form.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-secondary mb-lg-5" data-loading-text="Loading...">
                                <div class="contact-form-success alert alert-success d-none" id="contactSuccess">
                                    Message has been sent to us.
                                </div>
                                <div class="contact-form-error alert alert-danger d-none" id="contactError">
                                    Error sending your message.
                                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </aside>
            </div>
        </div>

    </div>
    @else
    <p>Data kosong</p>
    @endif
</div>
</div>
@stop