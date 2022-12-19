@extends('pinjamans.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show Pinjaman</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('pinjamans.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br><br>
{{--    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $pinjaman->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Region:</strong>
                {{ $pinjaman->region }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Purproses</strong>
                {{ $pinjaman->purproses }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ket</strong>
                {{ $pinjaman->ket }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                {{ $pinjaman->date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Return Date</strong>
                {{ $pinjaman->retun_date }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Teacher</strong>
                {{ $pinjaman->teacher}}
            </div>
        </div>
    </div> --}}

    <table class="table table-bordered">
        <tr>
                            <th>NAME</th>
                            <th>REGION</th>
                            <th>PURPROSES</th>
                            <th>KET</th>
                            <th>DATE</th>
                            <th>RETURN DATE</th>
                            <th>TEACHER</th>
        </tr>
        {{-- @foreach ($pinjamans as $pinjaman) --}}
        <tr>
                                <td>{{ $pinjaman->name }}</td>
                                <td>{{ $pinjaman->region }}</td>
                                <td>{{ $pinjaman->purproses }}</td>
                                <td>{{ $pinjaman->ket }}</td>
                                <td>{{ $pinjaman->date }}</td>
                                <td style="color: red">{{ $pinjaman->return_date }}</td>
                                <td>{{ $pinjaman->teacher }}</td>
            </td>
        </tr>
        {{-- @endforeach --}}
    </table>
@endsection