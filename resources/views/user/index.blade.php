
@extends('templates.template')

@section('content')

<h2 class="text-center">Cadastrar Usuário</h2>
<div class="container">
    @if(isset($msg) && !empty($msg))
        <div class="alert alert-success">
            {{ $msg }}
        </div>
    @endif
    <form action="{{route('usuario.store')}}" method="POST">
        @csrf
        <div class="mb-5 mt-3 p-2">
            <input type="text" name="name" value="{{old('name')}}" placeholder="Nome" class="form-control">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" name="email" value="{{old('email')}}" placeholder="Email" class="form-control">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="password" name="password" placeholder="Senha" class="form-control">
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
<hr>
<div>
    <h2 class="text-center mb-3">Registros</h2>
    <div class=" mt-3 p-4">
        <table class="table table-hover">
            <thead>
                <tr class="text-left">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td scope="row">{{$user->name}}</td>
                        <td scope="row">{{$user->email}}</td>
                        <td>
                            <a href="{{route('usuario.edit',['id'=>$user->id])}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                        </td>
                        <td>
                            <form method="post" action="{{route('usuario.destroy', ['id' => $user->id])}}">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Excluir" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
