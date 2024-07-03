@extends('templates.template')
@section('content')
<h1 class="text-body-emphasis">Olá devs <img src="https://media1.tenor.com/m/bJFntadGN1sAAAAd/cat.gif" width="42"></h1>
<p class="fs-5 col-md-8">
    Sejam bem vindo(a)s. Aqui é o projeto de aprendizagem do sinajuve, caso você esteja 
    vendo esta tela, significa que seu projeto está configurado corretamente.
</p>


<hr class="col-6 col-md-6 mb-5">

<div class="row g-5">
    <div class="col-md-6">
        <h2 class="text-body-emphasis">Links Úteis</h2>
        <p>Abaixo temos alguns link para testar a o projeto ou coisas do tipo</p>
        <ul class="list-unstyled ps-0">
            <li>
                <a class="icon-link mb-1" href="http://localhost:8080/" target="_blank">phpMyAdmin</a>
                 - usuario: root, senha: root
            </li>
            <li>
                <a class="icon-link mb-1" href="http://localhost:5173/" target="_blank">Vite</a>
            </li>
            <li>
                <a class="icon-link mb-1" href="/ping">REST Ping</a>
            </li>
        </ul>
    </div>

    <div class="col-md-6">
        <h2 class="text-body-emphasis">Comandos Úteis</h2>
        <p>Alguns comandos recomendados para decorar</p>
        <ul>
            <li>
                docker-compose up --build -d
            </li>
            <li>
                php artisan make:controller MeuController
            </li>
            <li>
                php artisan migrate
            </li>
            <li>
                php artisan migrate:rollback
            <li>
                npm run dev
            </li>
        </ul>
    </div>
</div>
@endsection
