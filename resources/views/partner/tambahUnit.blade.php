@extends('partner.template')
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Unit Rumah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/beranda')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/unit')}}">Unit Rumah</a></li>
                        <li class="breadcrumb-item active">Tambah Data</li>
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
                            <h3 class="card-title">Detail Informasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- START FORM -->
                            {!! Form::open(['url'=>'/unit/store', 'files' => 'true'])!!}

                            @csrf
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group">
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama Unit<span class="text-danger"> *</span></label>
                                    <div class="col-md-6">
                                        <!-- Nama Unit -->
                                        @if ($errors->has('namaUnit'))
                                        {!! Form::text('namaUnit',null,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::text('namaUnit',null,['class'=>'form-control', 'required' => 'required']) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Harga Unit<span class="text-danger"> *</span></label>
                                    <div class="col-md-3">
                                        <!-- Harga Unit -->
                                        @if ($errors->has('hargaUnit'))
                                        {!! Form::number('hargaUnit',null,['class'=>'form-control is-invalid','required' => 'required']) !!}
                                        @else
                                        {!! Form::number('hargaUnit',null,['class'=>'form-control','required' => 'required']) !!}
                                        @endif
                                    </div>
                                    <label class="offset-md-2 col-form-label ml-2"> Tipe<span class="text-danger"> *</span></label>
                                    <div class="col-md-3">
                                        <!-- Tipe Unit -->
                                        @if ($errors->has('tipe'))
                                        {!! Form::text('tipe',null,['class'=>'form-control is-invalid','required' => 'required']) !!}
                                        @else
                                        {!! Form::text('tipe',null,['class'=>'form-control','required' => 'required']) !!}
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alamat Lengkap<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <!-- Alamat Lengkap -->
                                        @if ($errors->has('alamatLengkap'))
                                        {!! Form::textarea('alamatLengkap',null,['rows'=>3,'class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::textarea('alamatLengkap',null,['rows'=>3,'class'=>'form-control','required' => 'required']) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Desa<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        <!-- Desa -->
                                        @if($errors->has('desa'))
                                        {!! Form::text('desa',null,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::text('desa',null,['class'=>'form-control', 'required' => 'required']) !!}
                                        @endif
                                    </div>
                                    <label class="offset-md-1 col-md-2 col-form-label">Kecamatan<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        <!-- Kecamatan -->
                                        @if($errors->has('kecamatan'))
                                        {!! Form::text('kecamatan',null,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::text('kecamatan',null,['class'=>'form-control', 'required' => 'required']) !!}
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kabupaten<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        <!-- Kabupaten -->
                                        @if($errors->has('kabupaten'))
                                        {!! Form::text('kabupaten',null,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::text('kabupaten',null,['class'=>'form-control', 'required' => 'required']) !!}
                                        @endif
                                    </div>
                                    <label class="offset-md-1 col-md-2 col-form-label">Provinsi<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        <!-- Provinsi -->
                                        @if($errors->has('provinsi'))
                                        {!! Form::text('provinsi',null,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                        @else
                                        {!! Form::text('provinsi',null,['class'=>'form-control', 'required' => 'required']) !!}
                                        @endif
                                    </div>
                                </div>
                                <!-- Gambar 1 -->
                                <div class="form-group row">
                                    <!-- Upload Gambar -->
                                    <label class="col-md-2 col-form-label">Gambar<span class="text-danger"> *</span></label>
                                    <div class="file-field col-md-6">
                                        <div class="btn btn-primary btn-sm float-left">
                                            <span>Choose file</span>
                                            <input name='gambar1' type="file" required='required'>
                                        </div>
                                    </div>
                                </div>
                                <!-- ACCORDION -->
                                <div id="accordion">
                                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                                    <div class="offset-md-2 col-md-4">
                                        <div class="card card-warning">
                                            <div class="card-header">
                                                <h4 class="card-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Upload Gambar lain (optional) <i class="fas fa-plus-square ml-3"></i>
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="card-body">
                                                    <!-- Upload Gambar 2 -->
                                                    <div class="row mt-3">
                                                        <div class="file-field col-md-12">
                                                            <div class="btn btn-primary btn-sm float-left">
                                                                <input name='gambar2' type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <!-- Upload Gambar 3 -->
                                                        <div class="file-field col-md-12">
                                                            <div class="btn btn-primary btn-sm float-left">
                                                                <input name='gambar3' type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <!-- Upload Gambar 4 -->
                                                        <div class="file-field col-md-12">
                                                            <div class="btn btn-primary btn-sm float-left">
                                                                <input name='gambar4' type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <!-- Upload Gambar 5 -->
                                                        <div class="file-field col-md-12">
                                                            <div class="btn btn-primary btn-sm float-left">
                                                                <input name='gambar5' type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /card -body accordion -->
                                            </div>
                                            <!-- /collapse -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END ACCORDION -->
                                <!-- END GAMBAR -->
                                <p class="text-danger"><small>* (Wajib diisi)</small></p>
                                <hr>
                                <h4>Fasilitas</h4>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Kamar<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        {!! Form::select('kamar', array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10'
                                        ),null,['class'=>'form-control'] ) !!}
                                    </div>
                                    <label class="offset-md-1 col-md-2 col-form-label">Kamar Mandi<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        {!! Form::select('kamarMandi', array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5'
                                        ),null,['class'=>'form-control'] ) !!}
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Garasi<span class="text-danger"> *</span></label>
                                    <div class="col-md-2">
                                        {!! Form::select('garasi', array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3'
                                        ),null,['class'=>'form-control'] ) !!}
                                    </div>

                                </div>
                                <div class="row mt-5">
                                    <!-- KIRI -->
                                    <div class="offset-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('ac', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('ac', 'AC' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('pemanas', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('pemanasAir', 'Pemanas Air' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('laundry', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('laundry', 'Laundry' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('gym', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('gym', 'Gym' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /KIRI -->
                                    <!-- KANAN -->
                                    <div class="offset-md-2">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('internet', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('internet', 'Internet' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('tvKabel', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('tvkabel', 'Tv Kabel' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    {!! Form::checkbox('layananSampah', 1,false,['class' => 'form-check-input']) !!}
                                                    {!! Form::label('layananSampah', 'Layanan Sampah' ,['class' => 'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /KANAN -->
                                </div>
                                <!-- END ROW FASILITAS -->
                                <p class="text-danger"><small>* (Wajib diisi)</small></p>
                                <hr>
                                <h4>Informasi Tambahan</h4>
                                <div class="form-group row">
                                    {!! Form::label('Judul_deskripsi', 'Judul Deskripsi' ,['class' => 'col-md-2 col-form-label']) !!}
                                    <div class="col-md-6">
                                        <!-- JUDUL -->
                                        @if($errors->has('judul'))
                                        {!! Form::text('judul',null,['class'=>'form-control is-invalid']) !!}
                                        @else
                                        {!! Form::text('judul',null,['class'=>'form-control']) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('deskripsi_lengkap', 'Deskripsi Lengkap' ,['class' => 'col-md-2 col-form-label']) !!}
                                    <div class="col-md-6">
                                        <!-- DESKRIPSI -->
                                        @if($errors->has('deskripsiLengkap'))
                                        {!! Form::textarea('deskripsiLengkap',null,['rows'=>3,'class'=>'form-control is-invalid']) !!}
                                        @else
                                        {!! Form::textarea('deskripsiLengkap',null,['rows'=>3,'class'=>'form-control']) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-2">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                                </form>
                                <!-- END FORM -->
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