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
    <div class="col-md-6">
        <table class="table table-bordered">
            <tr>
                <th>NIM:</th>
                <td>{{ $profile->nim }}</td>
            </tr>
            <tr>
                <th>Nama:</th>
                <td>{{ $profile->nama }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $profile->email }}</td>
            </tr>
            <tr>
                <th>Nomor HP:</th>
                <td>{{ $profile->noHp }}</td>
            </tr>
            <tr>
                <th>Jurusan:</th>
                <td>{{ $profile->jurusan }}</td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><img src="/images/{{ $profile->image }}" width="500px"></td>
            </tr>
        </table>
    </div>
</div>
@endsection