@extends('layout.site')

@section('titulo', 'contatos')


@section('conteudo')
    <h3>Essa é a view de contatos</h3>
    <table border="2">
        <Tr>
            <td>
                Nome
            </td>
            <td>
                Telefone
            </td>
        </Tr>
    @foreach ($contatos as $contato)
        
        <tr>
            <td>
                {{$contato -> nome}}
            </td>
            <td>
                {{$contato -> tel}}
            </td>
        </tr>

    @endforeach
    </table>
@endsection




