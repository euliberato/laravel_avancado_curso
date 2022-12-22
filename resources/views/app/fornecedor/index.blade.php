<h3>Fornecedor</h3>

@php 

@endphp

@isset($fornecedores)

    @forelse($fornecedores as $i => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj']  ?? 'Não Informado' }}
        <br>
        Telefone: {{ $fornecedor['ddd']  ?? 'Não Informado' }}
        {{ $fornecedor['telefone']  ?? 'Não Informado' }}
        <br>

        @if($loop->first)
            Primeira iteração do Loop
        @endif

        @if($loop->last)
            Ultima iteração do Loop
            <br>
            Total de Fornecedores: {{ $loop->count }}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse

@endisset