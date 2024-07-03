@extends('templates.template')

@section('content')
    <h2 class="text-center">Editar Usuário</h2>
    <div class="container">
        @if(isset($msg) && !empty($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
        @endif
        <form action="{{route('usuario.update', ['id' => $user->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-5 mt-3 p-2">
                <input type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder="Nome" class="form-control">
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="text" name="email" value="{{$user->email ?? old('email')}}" placeholder="Email" class="form-control">
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="password" name="password" value="" placeholder="Senha" class="form-control">
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirme a Senha" class="form-control">
                <div class="text-center">
                @error('password_confirm')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                    <input type="submit" value="Enviar" class="btn btn-primary mt-3">
                </div>
            </div>
        </form>
    </div>
@endsection
