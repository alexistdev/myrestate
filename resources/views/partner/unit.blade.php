@extends('partner.template')
@section('zoom')

<!-- CSS ZOOM PHOTO PROFILE -->
<style>
    .zoom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
        cursor: zoom-in;
    }

    .zoom:hover,
    .zoom:active,
    .zoom:focus {
        /* Pengaturan skala zoom gambar */
        -ms-transform: scale(5.5);
        -moz-transform: scale(5.5);
        -webkit-transform: scale(5.5);
        -o-transform: scale(5.5);
        transform: scale(5.5);
        position: relative;
        z-index: 100;
    }
</style>
@stop
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Unit Rumah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/beranda')}}">Home</a></li>
                        <li class="breadcrumb-item active">Unit Rumah</li>
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
                        <div class="card-header">
                            <h3 class="card-title">Detail List Unit Rumah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{url('/unit/tambah')}}" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama Unit</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tipe</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach($unitRumah as $rows)
                                    <tr>
                                        <td class="text-center" width="5%">{{$no++}}</td>
                                        <td class="text-center" width="15%">{{$rows->nama_unit}}</td>
                                        <td class="text-center" width="10%"><img class="thumbnail zoom" src="{{asset('storage/rumah').'/'.$rows->gambar_rumah}}" width='100px' alt='gambar unit' /></td>
                                        <td width="20%">{{$rows->alamat_lengkap}}
                                        </td>
                                        <td class="text-center" width="10%">{{$rows->tipe}}</td>
                                        <td class="text-center" width="15%">{{$rows->harga_unit}}</td>
                                        <td class="text-center" width="10%">
                                            {{link_to('unit/'.$rows->id_rumah, 'EDIT', ['class' =>'btn btn-primary btn-sm'])}}
                                            {!! Form::open(['method'=>'DELETE', 'action'=>['partner\UnitController@destroy', $rows->id_rumah]]) !!}
                                            {!! Form::submit('DELETE', ['class'=>'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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