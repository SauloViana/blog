@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            <div class="row">
                <div class="col-md-4">
                    <caixa qtd="60" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="950" titulo="Usuários" url="#usuarios" cor="darkblue" icone="ion ion-person-stalker"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="4" titulo="Autores" url="#autores" cor="darkred" icone="ion ion-person"></caixa>
                </div>
            </div>
        </painel>
    </pagina>
@endsection