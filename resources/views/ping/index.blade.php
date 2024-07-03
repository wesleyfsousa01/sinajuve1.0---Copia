@extends('templates.template')
@section('content')
@vite('/resources/js/ping.js')

<h1>Ping pong com REST FULL API</h1>
<h5>Clicke em algum dos botões abaixo para fazer um tipo de request http.</h5>

<ul>
    <li class="mb-1">
        <button class="btn btn-success" id="get">GET</button>
    </li>
    <li class="mb-1">
        <button class="btn btn-primary" id="post">POST</button>
    </li>
    <li class="mb-1">
        <button class="btn btn-danger" id="delete">DELETE</button>
    </li>
    <li class="mb-1">
        <button class="btn btn-secondary" id="put">PUT</button>
    </li>
    <li class="mb-1">
        <button class="btn btn-warning" id="patch">PATHC</button>
    </li>
</ul>


<div class="border border-dark p-3">
    <h1>Response:</h1>
    <pre id="response"></pre>
</div>

@endsection