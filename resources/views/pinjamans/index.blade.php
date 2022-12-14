@extends('pinjamans.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Pinjaman</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('pinjamans.create') }}"> Create New Pinjaman</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
                            <th>NAME</th>
                            <th>REGION</th>
                            <th>PURPROSES</th>
                            <th>KET</th>
                            <th>DATE</th>
                            <th>RETURN DATE</th>
                            <th>TEACHER</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pinjamans as $pinjaman)
        <tr>
            <td>{{ ++$i }}</td>
                                <td>{{ $pinjaman->name }}</td>
                                <td>{{ $pinjaman->region }}</td>
                                <td>{{ $pinjaman->purproses }}</td>
                                <td>{{ $pinjaman->ket }}</td>
                                <td>{{ $pinjaman->date }}</td>
                                <td style="color: red">{{ $pinjaman->return_date }}</td>
                                <td>{{ $pinjaman->teacher }}</td>
            <td>
                <form action="{{ route('pinjamans.destroy',$pinjaman->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pinjamans.show',$pinjaman->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pinjamans.edit',$pinjaman->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $pinjamans->links() !!}
    </div>
      
@endsection