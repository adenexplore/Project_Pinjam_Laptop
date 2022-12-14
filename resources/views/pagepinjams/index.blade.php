@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Page Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pagepinjams.create') }}">Tambah Pinjam</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pinjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAME</th>
                            <th>REGION</th>
                            <th>PURPROSES</th>
                            <th>KET</th>
                            <th>DATE</th>
                            <th>RETURN DATE</th>
                            <th>TEACHER</th>
                            <th width="112px">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pagepinjams as $pagepinjam)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $pagepinjam->name }}</td>
                                <td>{{ $pagepinjam->region }}</td>
                                <td>{{ $pagepinjam->purproses }}</td>
                                <td>{{ $pagepinjam->ket }}</td>
                                <td>{{ $pagepinjam->date }}</td>
                                <td  style="color:red;">{{ $pagepinjam->return_date }}</td>
                                <td>{{ $pagepinjam->teacher }}</td>
                                <td>
                                    <form action="{{ route('pagepinjams.destroy',$pagepinjam->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('pagepinjams.edit',$pagepinjam->id) }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

@endsection