@extends('layouts.app')

@section('title','Bienvenido a App Shop')

@section('bodyClass','product-page')

@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title">Nuevo Producto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ URL('/admin/products') }}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre Producto</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio del producto </label>
                            <input type="number" step="0.01" value="{{ old('price') }}" name="price" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Descripción corta </label>
                    <input type="text"  value="{{ old('description') }}" name="description" class="form-control">
                </div>

            
                <textarea class="form-control" placeholder="Aquí ingresará la descripcion larga del producto" name="long_description" rows="5">{{ old('long_description') }}</textarea>

                <button class="btn btn-primary">Registrar producto</button>
                <a href="{{ URL('/admin/products') }}" class="btn btn-default">Cancelar</a>

            </form>
                
                

        </div>
    </div>

</div>

@include('include.footer')
@endsection
