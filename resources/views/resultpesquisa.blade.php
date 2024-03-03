@include('componentes.header')

<section class="ContainerCompleto">
    <div class="tituloPesquisa">
        <h2>Resultados da Pesquisa</h2>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Contrato n°</th>
                    <th>Empresa</th>
                    <th>Diretoria</th>
                    <th>Status</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{ $resultado->numcontrato }}</td>
                        <td>{{ $resultado->empresa }}</td>
                        <td>{{ $resultado->Auxdiretoria->diretoria }}</td>
                        <td>{{ $resultado->Auxstatus->status }}</td>
                        <!-- Substitua diretoria e status pelos nomes corretos dos relacionamentos -->
                        <!-- Adicione mais colunas conforme necessário -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br><br>
        <div class="col-12">
            <a href="{{ route('welcome.pesquisa') }}" class="btn btn-outline-primary">Nova Pesquisa</a>
        </div>
    </div>
</section>


