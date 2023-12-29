@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DAFTAR FILM</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('films.create') }}"> Input Film</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Judul</th>
            <th width="280px"class="text-center">Rating</th>
            <th width="280px"class="text-center">Durasi</th>
        </tr>
        <?php $i=0 ?>
        @foreach ($films as $film)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $film->Judul }}</td>
            <td>{{ $film->Rating }}</td>
            <td>{{ $film->Durasi }}</td>
            <td class="text-center">
                <form action="{{ route('films.destroy',$film->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('films.show',$film->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('films.edit',$film->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $films->links() }}

@endsection