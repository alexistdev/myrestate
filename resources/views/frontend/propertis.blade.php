@extends('frontend.template')
@section('konten')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark">Properties <p class="lead mb-0">Listings for Sale or Rent - 123 properties</p>
                </h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="demo-real-estate.html">Home</a></li>
                    <li class="active">PROPERTIES</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <form id="propertiesForm" action="propertis/cari" method="GET">
                    <div class="form-row">

                        <div class="form-group col-lg-2 mb-0">
                            <div class="form-control-custom mb-3">
                                <input type="text" name="lokasi" value="{{old('lokasi')}}" placeholder="Lokasi" />
                            </div>
                        </div>
                        <div class="form-group col-lg-2 mb-0">
                            <div class="form-control-custom mb-3">
                                <select class="form-control text-uppercase text-2" name="jmlKamar" data-msg-required="This field is required." id="propertiesMinBeds2" required="">
                                    <option value="">KAMAR</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-2 mb-0">
                            <div class="form-control-custom mb-3">
                                <select class="form-control text-uppercase text-2" name="jmlKamar" data-msg-required="This field is required." id="propertiesMinBeds2" required="">
                                    <option value="">KAMAR MANDI</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-2 mb-0">
                            <div class="form-control-custom mb-3">
                                <select class="form-control text-uppercase text-2" name="jmlKamar" data-msg-required="This field is required." id="propertiesMinBeds2" required="">
                                    <option value="">TIPE</option>
                                    <option value="1">36/72</option>
                                    <option value="2">80/108</option>
                                    <option value="3">90/120</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-2 mb-0">
                            <input type="submit" value="Search Now" class="btn btn-secondary btn-lg btn-block text-uppercase text-2">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<div class="container">
    <!-- <Form action="propertis/cari" method="GET">
        <input type="text" name="cari" value="{{old('cari')}}" />
        <input type="submit" value="CARI" />
    </Form> -->
    <div class="row mb-4 properties-listing sort-destination p-0">
        @if(!empty($rumahku))
        @foreach ($rumahku as $rumahlist)
        <div class="col-md-6 col-lg-4 p-3 isotope-item">
            <div class="listing-item">
                <a href="{{ 'rumah/'.$rumahlist->id_rumah}}" class="text-decoration-none">
                    <div class="thumb-info thumb-info-lighten border">
                        <div class="thumb-info-wrapper m-0">
                            <img src="{{asset('storage/rumah/'.$rumahlist->gambar_rumah)}}" class="img-fluid" alt="">
                            <div class="thumb-info-listing-type bg-color-secondary text-uppercase text-color-light font-weight-semibold p-1 pl-3 pr-3">
                                {{$rumahlist->nama_unit}}
                            </div>
                        </div>
                        <div class="thumb-info-price bg-color-primary text-color-light text-4 p-2 pl-4 pr-4">
                            {{ $rumahlist->harga_unit}}
                            <i class="fas fa-caret-right text-color-secondary float-right"></i>
                        </div>
                        <div class="custom-thumb-info-title b-normal p-4">
                            <div class="thumb-info-inner text-3">{{ $rumahlist->detailrumahmodel->desa }}</div>
                            <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
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
        @endforeach
    </div>

    <div class="row my-5">
        <div class="col">
            <ul class="pagination justify-content-center">
                {{$rumahku->links()}}
            </ul>
        </div>
    </div>
    @else
    <p>Data kosong</p>
    @endif
</div>
@stop