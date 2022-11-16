<h3>Fornecedor</h3>

{{--Recursos do blade --}}
@if($fornecedores)
@dd($fornecedores)
@else
<h3>Não a fornecedores</h3>
@endif

@unless($fornecedores)
    <h3>Não há fornecedores</h3>
@endunless

@if(@isset($fornecedores))
    <h3>Foi declarada</h3>
@else
    <h3>Não declarada</h3>
@endif

@if(@empty($fornecedores))
    <h3>Sem valor</h3>
@else
    <h3>Com valor</h3>
@endif

Fornecedor: {{$fornecedores[1] ??'Não cadastrado'}}