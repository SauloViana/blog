@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Artigos">
            <div class="row">
                <div class="col-md-12">
                    <a href="#">Criar</a>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Autor</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Título...</td>
                                <td>Descrição...</td>
                                <td>Autor ..</td>
                                <td>00/00/0000</td>
                                <td>
                                    <a href="#">Editar</a> |
                                    <a href="#">Deletar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Título...</td>
                                <td>Descrição...</td>
                                <td>Autor ..</td>
                                <td>00/00/0000</td>
                                <td>
                                    <a href="#">Editar</a> |
                                    <a href="#">Deletar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Título...</td>
                                <td>Descrição...</td>
                                <td>Autor ..</td>
                                <td>00/00/0000</td>
                                <td>
                                    <a href="#">Editar</a> |
                                    <a href="#">Deletar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Título...</td>
                                <td>Descrição...</td>
                                <td>Autor ..</td>
                                <td>00/00/0000</td>
                                <td>
                                    <a href="#">Editar</a> |
                                    <a href="#">Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </painel>
    </pagina>
@endsection