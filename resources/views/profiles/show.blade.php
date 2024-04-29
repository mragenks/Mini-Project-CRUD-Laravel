@extends('profiles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Profile</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('profiles.index') }}"> Back</a>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-6 text-center">
        <div class="card">
            <img src="/images/{{ $profile->image }}" class="card-img-top " alt="Profile Image">
            <div class="card-body">
                <h4 class="card-title">{{ $profile->nama }}</h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">NIM:</th>
                            <td>{{ $profile->nim }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor HP:</th>
                            <td>{{ $profile->noHp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jurusan:</th>
                            <td>{{ $profile->jurusan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-center">
                <p>Pengguna {{ $profile->id }}</p>
            </div>
        </div>
    </div>
</div>
@endsection