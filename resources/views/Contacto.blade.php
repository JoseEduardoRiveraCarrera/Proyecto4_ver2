

@extends('layaut');

@section('title')
Contacto
@endsection

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1>Contacto</h1>



    <form method="POST" action="{{ route('Contacto')}}">
        @csrf
        <input name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input name="tel" placeholder="Telefono" pattern="[0-9]{10}" value="{{old('tel')}}"><br>
        {!! $errors->first('tel', '<small>:message</small><br>') !!}

        <input type="email" name="email" placeholder="Email..." value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Mensaje..." value="{{old('content')}}"></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>Enviar</button>

    </form>
</div>
@endsection