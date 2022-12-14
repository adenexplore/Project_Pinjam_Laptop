@extends('pinjamans.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Pinjaman</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('pinjamans.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('pinjamans.update',$pinjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="name" value="{{$pinjaman->name>}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Region</strong>
                        <br>
                        <select class="form-control" name="region" aria-label="Default select example" id="">
                            <option value=""> -- Pilih Region -- </option>
                            <option value="Cibedug 1" @if ($pinjaman->region == 'Cibedug 1') selected @endif>Cibedug 1</option>
                            <option value="Cibedug 2" @if ($pinjaman->region == 'Cibedug 2') selected @endif>Cibedug 2</option>
                            <option value="cibedug 3" @if ($pinjaman->region == 'Cibedug 3') selected @endif>Cibedug 3</option>
                            <option value="cibedug 4" @if ($pinjaman->region == 'Cibedug 4') selected @endif>Cibedug 4</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Purproses</strong>
                        <input type="text" name="purproses" class="form-control" placeholder="Purpeoses" value="{{$pinjaman->region }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <input type="text" name="ket" class="form-control" placeholder="keterangan" value="{{$pinjaman->ket}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Date</strong>
                        <input type="date" name="date" class="form-control" placeholder="Date" value="{{$pinjaman->date}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Return Date</strong>
                        <input type="date" name="return_date" class="form-control" placeholder="return date" value="{{$pinjaman->return_date}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Teacher</strong>
                        <select class="form-control" name="teacher" aria-label="Default select example" id="">
                            <option value=""> -- Pilih Teacher -- </option>
                            <option value="Riska" @if ($pinjaman->teacher == 'Riska') selected @endif>Riska</option>
                            <option value="Juliana Mansur" @if ($pinjaman->teacher == 'Juliana Mansur') selected @endif>Juliana Mansur</option>
                            <option value="iqbal" @if ($pinjaman->teacher == 'iqbal') selected @endif>Iqbal</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
   
    </form>
@endsection