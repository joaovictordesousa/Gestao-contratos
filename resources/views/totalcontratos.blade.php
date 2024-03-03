@include('componentes.header')

<section class="ContainerCompleto">
    <div class="tituloPesquisa">
        <h2>Contratos</h2>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Contrato n°</th>
                    <th>Empresa</th>
                    <th>Diretoria</th>
                    <th>Status</th>
                    <th>Ações</th>
                    <!-- Adicione mais colunas conforme necessário -->
                </tr>
            </thead>
            <tbody>
                @foreach ($total as $resultado)
                    <tr>
                        <td>{{ $resultado->numcontrato }}</td>
                        <td>{{ $resultado->empresa }}</td>
                        <td>{{ $resultado->Auxdiretoria->diretoria }}</td>
                        <td>{{ $resultado->Auxstatus->status }}</td>
                        <td>@include('componentes.modalexcluir')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br><br>
        <div class="col-12">
            <a href="{{ route('welcome.pesquisa') }}" class="btn btn-outline-primary">Voltar a pesquisa</a>
        </div>
    </div>
</section>




@include('componentes.footer')