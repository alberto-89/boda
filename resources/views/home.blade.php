@extends('templetes.main')
@section('titulo','Bienvedio')
@section('portada')
<header class="container-fluid dashCover d-flex align-items-center justify-content-center">
    @can('clientes.index')
        <article>
            <a href="{{route('clientes.index')}}" class="btn btn-outline-light btn-center">Panel de Control</a>
        </article>
    @endcan
    @can('admin.index')
        <article>
            <a href="{{route('admin.index')}}" class="btn btn-outline-light btn-center">Panel de Control Admin</a>
        </article>
    @endcan
</header>
@endsection
