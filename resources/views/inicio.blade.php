@extends('layouts.superior')

@section('centralPagina')


<div class="tarjetas-categoria _Tarjetas">

     <div class="row">
        @foreach($productos as $producto)
        <div class="col-sm-4">
            <div class="card _contenidoTarjeta ">
            <img src="/storage/productos/{{$producto->img_producto}}"  width="200px" height="200px">
                <div class="card-body  w-100 text-center">
                    <h5 class="card-title">{{$producto->nombre_producto}}</h5>
                    <p class="card-text">$ {{$producto->precio_producto}}</p>
                    <a href="/producto/{{$producto->producto_id}}" class="btn btn-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
