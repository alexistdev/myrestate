@extends('frontend.template')
@section('konten')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark">{{$dataAgen->detailuser->nama_lengkap}}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="demo-real-estate.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="{{url('agen')}}">Agents</a></li>
                    <li class="active">{{$dataAgen->detailuser->nama_lengkap}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <div class="row">
        <div class="col">
            <div class="agent-item agent-item-detail">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{asset('storage/user_photo/'.$dataAgen->detailuser->gambar)}}" class="img-fluid" alt="agen photo">
                    </div>
                    <div class="col-lg-5">
                        <h2 class="mt-0 mb-1 font-weight-normal text-uppercase">{{$dataAgen->detailuser->nama_lengkap}}</h2>
                        <h6 class="mb-1"><?= ($dataAgen->agen->level == 1) ? 'Junior Real Estate Broker' : 'Senior Real Estate Broker'; ?></h6>
                        <div class="text-4 mt-3 mb-3">
                            {{$dataAgen->agen->detail_agen}}

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list list-icons m-sm ml-5">
                            <li>
                                <a href="mailto:{{$dataAgen->email}}">
                                    <i class="icon-envelope-open icons"></i> {{$dataAgen->email}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-call-out icons"></i> {{$dataAgen->detailuser->notelp}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-linkedin icons"></i> Lindekin
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-facebook icons"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram icons"></i> Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="mt-4">Contact Me</h4>

                        <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Send Message" class="btn btn-secondary" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h4 class="mt-3 mb-0">Agent Properties</h4>
            <div class="row mb-5 properties-listing sort-destination p-0">
                <div class="col-lg-4 p-3 isotope-item">
                    <div class="listing-item">
                        <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                            <div class="thumb-info thumb-info-lighten border">
                                <div class="thumb-info-wrapper m-0">
                                    <img src="img/demos/real-estate/listings/listing-1.jpg" class="img-fluid" alt="">
                                    <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                        for sale
                                    </div>
                                </div>
                                <div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                    $ 530,000
                                    <i class="fas fa-caret-right text-color-secondary float-right"></i>
                                </div>
                                <div class="custom-thumb-info-title b-normal p-4">
                                    <div class="thumb-info-inner text-3">South Miami</div>
                                    <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                        <li>
                                            <span class="accomodation-title">
                                                Beds:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                3
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Baths:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                2
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Sq Ft:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                500
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 p-3 isotope-item">
                    <div class="listing-item">
                        <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                            <div class="thumb-info thumb-info-lighten border">
                                <div class="thumb-info-wrapper m-0">
                                    <img src="img/demos/real-estate/listings/listing-2.jpg" class="img-fluid" alt="">
                                    <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                        for sale
                                    </div>
                                </div>
                                <div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                    $ 320,000
                                    <i class="fas fa-caret-right text-color-secondary float-right"></i>
                                </div>
                                <div class="custom-thumb-info-title b-normal p-4">
                                    <div class="thumb-info-inner text-3">Sunny Isles Beach</div>
                                    <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                        <li>
                                            <span class="accomodation-title">
                                                Beds:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                3
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Baths:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                2
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Sq Ft:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                500
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 p-3 isotope-item">
                    <div class="listing-item">
                        <a href="demo-real-estate-properties-detail.html" class="text-decoration-none">
                            <div class="thumb-info thumb-info-lighten border">
                                <div class="thumb-info-wrapper m-0">
                                    <img src="img/demos/real-estate/listings/listing-3.jpg" class="img-fluid" alt="">
                                    <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                        for rent
                                    </div>
                                </div>
                                <div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                                    $ 3000 / month
                                    <i class="fas fa-caret-right text-color-secondary float-right"></i>
                                </div>
                                <div class="custom-thumb-info-title b-normal p-4">
                                    <div class="thumb-info-inner text-3">Miami</div>
                                    <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                        <li>
                                            <span class="accomodation-title">
                                                Beds:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                3
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Baths:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                2
                                            </span>
                                        </li>
                                        <li>
                                            <span class="accomodation-title">
                                                Sq Ft:
                                            </span>
                                            <span class="accomodation-value custom-color-1">
                                                500
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop