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
                            {!! Form::open(['url'=>'/unit/'.$rumahku->id_rumah, 'enctype'=>'multipart/form-data','files' => 'true', 'method' => 'PATCH'])!!}

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

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Nama Unit<span class="text-danger"> *</span></label>
                                <div class="col-md-6">
                                    <!-- Nama Unit -->
                                    @if ($errors->has('namaUnit'))
                                    {!! Form::text('namaUnit',$rumahku->nama_unit,['class'=>'form-control is-invalid']) !!}
                                    @else
                                    {!! Form::text('namaUnit',$rumahku->nama_unit,['class'=>'form-control']) !!}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Harga Unit<span class="text-danger"> *</span></label>
                                <div class="col-md-3">
                                    <!-- Harga Unit -->
                                    @if ($errors->has('hargaUnit'))
                                    {!! Form::number('hargaUnit',filter_var($rumahku->harga_unit, FILTER_SANITIZE_NUMBER_INT),['class'=>'form-control is-invalid','required' => 'required']) !!}
                                    @else
                                    {!! Form::number('hargaUnit',filter_var($rumahku->harga_unit, FILTER_SANITIZE_NUMBER_INT),['class'=>'form-control','required' => 'required']) !!}
                                    @endif
                                </div>
                                <label class="offset-md-2 col-form-label ml-2"> Tipe<span class="text-danger"> *</span></label>
                                <div class="col-md-3">
                                    <!-- Tipe Unit -->
                                    @if ($errors->has('tipe'))
                                    {!! Form::text('tipe',$rumahku->tipe,['class'=>'form-control is-invalid','required' => 'required']) !!}
                                    @else
                                    {!! Form::text('tipe',$rumahku->tipe,['class'=>'form-control','required' => 'required']) !!}
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Alamat Lengkap<span class="text-danger"> *</span></label>
                                <div class="col-md-8">
                                    <!-- Alamat Lengkap -->
                                    @if ($errors->has('alamatLengkap'))
                                    {!! Form::textarea('alamatLengkap',$rumahku->detailrumahmodel->alamat_lengkap,['rows'=>3,'class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                    @else
                                    {!! Form::textarea('alamatLengkap',$rumahku->detailrumahmodel->alamat_lengkap,['rows'=>3,'class'=>'form-control','required' => 'required']) !!}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Desa<span class="text-danger"> *</span></label>
                                <div class="col-md-2">
                                    <!-- Desa -->
                                    @if($errors->has('desa'))
                                    {!! Form::text('desa',$rumahku->detailrumahmodel->desa,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                    @else
                                    {!! Form::text('desa',$rumahku->detailrumahmodel->desa,['class'=>'form-control', 'required' => 'required']) !!}
                                    @endif
                                </div>
                                <label class="offset-md-1 col-md-2 col-form-label">Kecamatan<span class="text-danger"> *</span></label>
                                <div class="col-md-2">
                                    <!-- Kecamatan -->
                                    @if($errors->has('kecamatan'))
                                    {!! Form::text('kecamatan',$rumahku->detailrumahmodel->kecamatan,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                    @else
                                    {!! Form::text('kecamatan',$rumahku->detailrumahmodel->kecamatan,['class'=>'form-control', 'required' => 'required']) !!}
                                    @endif
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Kabupaten<span class="text-danger"> *</span></label>
                                <div class="col-md-2">
                                    <!-- Kabupaten -->
                                    @if($errors->has('kabupaten'))
                                    {!! Form::text('kabupaten',$rumahku->detailrumahmodel->kabupaten,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                    @else
                                    {!! Form::text('kabupaten',$rumahku->detailrumahmodel->kabupaten,['class'=>'form-control', 'required' => 'required']) !!}
                                    @endif
                                </div>
                                <label class="offset-md-1 col-md-2 col-form-label">Provinsi<span class="text-danger"> *</span></label>
                                <div class="col-md-2">
                                    <!-- Provinsi -->
                                    @if($errors->has('provinsi'))
                                    {!! Form::text('provinsi',$rumahku->detailrumahmodel->provinsi,['class'=>'form-control is-invalid', 'required' => 'required']) !!}
                                    @else
                                    {!! Form::text('provinsi',$rumahku->detailrumahmodel->provinsi,['class'=>'form-control', 'required' => 'required']) !!}
                                    @endif
                                </div>
                            </div>
                            <!-- Percobaan Preview -->

                            <fieldset class="form-group">
                                <div class="offset-md-2 col-md-6">
                                    <p class="text-danger" id="pesanUpload"></p>
                                    <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="btn btn-primary">Upload Gambar</a>
                                    <input type="file" id="pro-image" name="gambarku" class="form-control">

                                </div>
                            </fieldset>
                            <div class="preview-images-zone offset-md-2 col-md-8">
                                <!-- Gambar Utama  -->
                                <div class="preview-image preview-show-1">
                                    <div class="image-cancel" data-no="1">x</div>
                                    <div class="image-zone"><img id="pro-img-1" src="{{asset('storage/rumah/'.$rumahku->gambar_rumah)}}"></div>

                                </div>
                                <!-- Gambar Tambahan -->
                                <?php $counter = 2 ?>
                                @foreach($rumahku->gambar as $rows)
                                <div class="preview-image preview-show-{{$counter}}">
                                    <div class="image-cancel" data-no="{{$counter}}" data-id="{{$rows->id_gambar}}">x</div>
                                    <div class="image-zone"><img id="pro-img-{{$counter}}" src="{{asset('storage/rumah/'.$rows->gambar_unit)}}"></div>
                                </div>
                                <?php $counter++ ?>
                                @endforeach
                            </div>

                            <!-- /preview -->
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