@extends('partner.template')
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA : <span class="text-success">{{ strtoupper($rumahku->nama_unit)}}</span></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/beranda')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/unit')}}">Unit Rumah</a></li>
                        <li class="breadcrumb-item active">Detail Rumah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- CARD -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Gambar di Ruas Kiri -->
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <img src="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}" class="product-image" alt="Product Image">
                                    </div>
                                    <div class="col-12 product-image-thumbs">
                                        <div class="product-image-thumb active"><img src="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}" alt="Product Image"></div>
                                        @foreach($rumahku->gambar as $rows)
                                        <div class="product-image-thumb"><img src="{{asset('storage/rumah/'.$rows->gambar_unit)}}" alt="Product Image"></div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Gambar di ruas kanan -->
                                <div class="col-md-6">


                                    <table class="table table-striped">
                                        <colgroup>
                                            <col width="35%">
                                            <col width="65%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bg-dark text-light align-middle">
                                                    Harga
                                                </td>
                                                <td class="text-4 font-weight-bold align-middle bg-dark text-light">
                                                    {{$rumahku->harga_unit }}
                                                    <a href="{{url('unit/'.$rumahku->id_rumah.'/edit')}}" class="btn btn-danger  btn-sm float-right">EDIT</a>
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
                                <!-- END KANAN -->
                            </div>
                            <!-- ROW TAB -->
                            <div class="row mt-4">

                                <div class="col-md-12">
                                    <!-- TAB -->

                                    <nav class="w-100">
                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Fasilitas</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content p-3" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                            @if(!empty($rumahku->deskripsirumah->deskripsi))
                                            <h4 class="mt-3 mb-3">{{ $rumahku->deskripsirumah->deskripsi}}</h4>
                                            <p>{{ $rumahku->deskripsirumah->deskripsi}}</p>
                                            @else
                                            <p> ===== Tidak ada Deskripsi =====</p>
                                            @endif

                                        </div>
                                        <!-- TAB 2 -->
                                        <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                                            <ul class="list list-icons list-secondary row m-0">
                                                <!-- AC -->
                                                @if(!empty($rumahku->fasilitas->ac))
                                                <li class="col-sm-6 col-lg-4"> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="{{$rumahku->fasilitas->ac}} unit"><i class="fas fa-info-circle"></i></a></li>
                                                @else
                                                @endif
                                                <!-- Pemanas Air -->
                                                @if(!empty($rumahku->fasilitas->pemanas_air))
                                                <li class="col-sm-6 col-lg-4"> Water Heater</li>
                                                @else
                                                @endif
                                                <!-- Laundry -->
                                                @if(!empty($rumahku->fasilitas->laundry))
                                                <li class="col-sm-6 col-lg-4"> Laundry</li>
                                                @else
                                                @endif
                                                <!-- Gym -->
                                                @if(!empty($rumahku->fasilitas->gym))
                                                <li class="col-sm-6 col-lg-4"> Gym</li>
                                                @else
                                                @endif
                                                <!-- Internet -->
                                                @if(!empty($rumahku->fasilitas->internet))
                                                <li class="col-sm-6 col-lg-4"> Internet</li>
                                                @else
                                                @endif
                                                <!-- Tv Kabel -->
                                                @if(!empty($rumahku->fasilitas->tv_kabel))
                                                <li class="col-sm-6 col-lg-4"> Tv Kabel</li>
                                                @else
                                                @endif
                                                <!-- Layanan Sampah -->
                                                @if(!empty($rumahku->fasilitas->layanan_sampah))
                                                <li class="col-sm-6 col-lg-4"> Layanan Sampah</li>
                                                @else
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END TAB -->
                                </div>
                            </div>
                            <!-- /ROW TAB -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop