<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label>título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
      <span>Imagem</span>
      <input type="file">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>
  </div>
@if(isset($registro->imagem))
<div class="input-field">
<img width="150" src="{{asset($registro->imagem)}}">

</div>
@endif
  <div class="input-field">
    <p>
        <label>
            <input name="publicar" type="checkbox" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked':""}} value="true" id="test5" style="opacity:100; pointer-events: auto" />
            <br>
            <label for="test5">Publicar?</label>
        </label>
    </p>
  </div>