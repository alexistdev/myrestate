@extends('frontend.template')
@section('konten')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark">Agents</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-right">
                    <li><a href="demo-real-estate.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="active">Agents</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    @if(!empty($tampilAgen))
    @foreach ($tampilAgen as $row)
    <div class="row agent-item">
        <div class="col-lg-2">
            <img src="{{asset('storage/user_photo/'.$row->detailuser->gambar)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6">
            <h3 class="mt-1 mb-1">{{$row->detailuser->nama_lengkap}}</h3>
            <h6 class="mb-1"><?= ($row->agen->level == 1) ? 'Junior Real Estate Broker' : 'Senior Real Estate Broker'; ?></h6>
            <p>{{$row->agen->detail_agen}}</p>
            <a class="btn btn-secondary btn-sm mt-1" href="{{url('agen/'.$row->agen->id_agent)}}">VIEW PROFILE</a>
        </div>
        <div class="col-lg-4">
            <ul class="list list-icons m-sm ml-5">
                <li>
                    <a href="mailto:{{$row->email}}">
                        <i class="icon-envelope-open icons"></i> {{$row->email}}
                    </a>
                </li>
                <li>
                    <i class="icon-call-out icons"></i> {{$row->detailuser->notelp}}
                </li>
                <li>
                    <i class="icon-social-linkedin icons"></i> Lindekin
                </li>
                <li>
                    <i class="icon-social-facebook icons"></i> Facebook
                </li>
                <li>
                    <i class="icon-social-instagram icons"></i> Instagram
                </li>
            </ul>
        </div>
    </div>
    @endforeach
    @else
    <p>Data kosong</p>
    @endif
</div>
@stop