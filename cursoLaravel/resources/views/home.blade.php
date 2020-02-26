@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <div class="center">
            <h3>Lista de Cursos</h3>
        </div>
          <div class="row">
            @foreach($cursos as $curso)
              <div class="col s12 m3">
                <div class="card">
                  <div class="card-image">
                    <img src="{{ asset($curso->imagem)}}" height="120" width="60">
                  </div>
                  <div class="card-content" >
                    <h4>{{ $curso->titulo}}</h4>
                    <p>{{ $curso->descricao}}</p>
                  </div>
                  <div class="card-action">
                    <a href="#">Ver Mais...</a>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          
    </div>
    
@endsection