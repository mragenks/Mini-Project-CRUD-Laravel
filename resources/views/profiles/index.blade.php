@extends('profiles.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>List Profile</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('profiles.create') }}"> Create New Profile</a>
            </div>
            <br>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Image Profile</th>
            <th class="text-center">Nomor Induk Mahasiswa</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Email</th>
            <th class="text-center">Nomor HP</th>
            <th class="text-center">Jurusan</th>
            <th  class="text-center" width="280px">Action</th>
        </tr>
        @foreach ($profiles as $profile)
        <tr>
            <td class="text-center"><img src="/images/{{ $profile->image }}" width="100px"></td>
            <td class="text-center">{{ $profile->nim }}</td>
            <td class="text-center">{{ $profile->nama }}</td>
            <td class="text-center">{{ $profile->email }}</td>
            <td class="text-center">{{ $profile->noHp }}</td>
            <td class="text-center">{{ $profile->jurusan }}</td>
            <td  class="text-center">
                <form action="{{ route('profiles.destroy',$profile->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('profiles.show',$profile->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('profiles.edit',$profile->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection