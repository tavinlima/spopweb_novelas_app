<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach ($registros as $item)
<item>
    <titulo>{{ $item->titulo }}</titulo>
    <descricao>{{ $item->descricao }}</descricao>
    <inicio_exibicao>{{ $item->inicio_exibicao }}</inicio_exibicao> 
    <fim_exibicao>{{ $item->fim_exibicao }}</fim_exibicao>
    <audiencia>{{ $item->topo_audiencia }}</audiencia>
    <capitulos>{{ $item->qtd_capitulos }}</capitulos> 
</item>
@endforeach
</data>