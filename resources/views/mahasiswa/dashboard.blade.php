@extends('layouts.mahasiswa')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Dashboard </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
        </ul>
    </div>

    <div class="row">

        <div class="">
            <div class="widget-small warning coloured-icon"><i style="color: black" class="icon bi bi-chat-right-quote fs-1"></i>
                <div class="info">
                    <h1>Selamat Datang, {{ Auth::user()->name }}! 👋🤙</h1>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small success coloured-icon"><i class="icon bi bi-award fs-1"></i>
                <div class="info">
                    <a href="{{ route('user_lomba') }}">
                        <p class="btn btn-light">Manajemen Lomba</p>
                    </a></br>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small danger coloured-icon"><i class="icon bi bi-trophy fs-1"></i>
                <div class="info">
                    <a href="{{ route('user_prestasi') }}">
                        <p class="btn btn-light">Perolehan Prestasi</p>
                    </a></br>

                </div>
            </div>
        </div>
    </div>
@endsection
