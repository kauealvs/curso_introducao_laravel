<h3>Essa é a view de contatos</h3>

<table border="2">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Telefone</b></td>
    </tr>
@foreach($contatos as $contato)
        <tr>
            <td>{{$contato ->nome}}</td>
            <td>{{$contato ->tel}}</td>
        </tr> 
@endforeach
<table border="2">