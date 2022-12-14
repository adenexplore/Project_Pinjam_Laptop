@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Pinjam</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pagepinjams.index') }}">Kembali</a>
        </div>
    </div>
</div>

<br>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('pagepinjams.update', $pagepinjam->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="name" value="{{$pagepinjam->name}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Region</strong>
                <br>
                <select class="form-control" name="region" aria-label="Default select example" id="">
                        <option value=""> -- Pilih Teacher -- </option>
                        <option value="cibedug1" @if ($pagepinjam->region == 'cibedug1') selected @endif>Cibedug 1</option>
                        <option value="cibedug2" @if ($pagepinjam->region == 'cibedug2') selected @endif>Cibedug 2</option>
                        <option value="cibedug3" @if ($pagepinjam->region == 'cibedug3') selected @endif>Cibedug 3</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Purproses</strong>
                <input type="text" name="purproses" class="form-control" placeholder="Purpeoses" value="{{$pagepinjam->region }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input type="text" name="ket" class="form-control" placeholder="keterangan" value="{{$pagepinjam->ket}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                <input type="text" name="date" class="form-control" placeholder="Date" value="{{$pagepinjam->date}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Return Date</strong>
                <input type="text" name="return_date" class="form-control" placeholder="return date" value="{{$pagepinjam->return_date}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teacher</strong>
                <select class="form-control" name="teacher" aria-label="Default select example" id="">
                    <option value=""> -- Pilih Teacher -- </option>
                    <option value="Riska" @if ($pagepinjam->teacher == 'Riska') selected @endif>Riska</option>
                    <option value="Juliana Mansur" @if ($pagepinjam->teacher == 'Juliana Mansur') selected @endif>Juliana Mansur</option>
                    <option value="iqbal" @if ($pagepinjam->teacher == 'iqbal') selected @endif>Iqbal</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"style="padding: 10px">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endsection