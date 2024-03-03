@include('componentes.header')

<section class="ContainerCompleto">
    <div class="tituloPesquisa">
        <h2>Cadastrar contratos</h2>
    </div>

    @if (session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
                document.querySelector('.alert-primary').style.display = 'none';
            }, {{ session('display_time', 5000) }});
        </script>
    @endif


    <form class="row g-3" action="{{ route('welcome.store') }}" method="POST" id="formulario">
        @csrf
        <div class="ContainerCadastroPrimeiro">
            <div class="col-md">
                <label class="form-label">Contrato n°</label>
                <input type="number" class="form-control" name="numcontrato" id="InputForm" required>
            </div>
            <div class="col-md">
                <label for="inputPassword4" class="form-label">Empresa</label>
                <input type="text" class="form-control" name="empresa" id="InputForm" required>
            </div>
        </div>


        <div class="col-md-3">
            <label class="form-label">Processos</label>
            <input type="text" class="form-control" name="processos" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Data homologação</label>
            <input type="date" class="form-control" name="homologacao" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Data ajudicação</label>
            <input type="date" class="form-control" name="ajudicacao" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Nr da decisão executiva</label>
            <input type="text" class="form-control" name="executiva" id="InputForm" required>
        </div>
        {{--  --}}
        <div class="col-md-3">
            <label class="form-label">SIGGO</label>
            <input type="text" class="form-control" name="siggo" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Valor contrato</label>
            <input type="number" class="form-control" name="valor" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Licitação</label>
            <input type="text" class="form-control" name="licitacao" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Modalidade</label>
            <input type="text" class="form-control" name="modalidade" id="InputForm" required>
        </div>
        {{--  --}}
        <div class="col-md-3">
            <label class="form-label">Inicio vigência</label>
            <input type="date" class="form-control" name="inivigencia" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Fim vigência</label>
            <input type="date" class="form-control" name="fimvigencia" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Inicio execução</label>
            <input type="date" class="form-control" name="iniexecucao" id="InputForm" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Fim execução</label>
            <input type="date" class="form-control" name="fimexecucao" id="InputForm" required>
        </div>
        {{--  --}}

        <div class="col">
            <label class="form-label" for="inlineFormSelectPref">Situação de contrato</label>
            <select class="form-select" name="auxsituacao" id="selectForm">
                <option selected>Selecione...</option>
                @foreach ($situacao as $situ)
                    <option value="{{ $situ->id }}">{{ $situ->situacao }}</option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <label class="form-label" for="inlineFormSelectPref">Diretoria</label>
            <select class="form-select" name="auxdiretoria" id="selectForm">
                <option selected>Selecione...</option>
                @foreach ($diretoria as $dire)
                    <option value="{{ $dire->id }}">{{ $dire->diretoria }}</option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <label class="form-label" for="inlineFormSelectPref">Status</label>
            <select class="form-select" name="auxstatus" id="selectForm">
                <option selected>Selecione...</option>
                @foreach ($status as $tus)
                    <option value="{{ $tus->id }}">{{ $tus->status }}</option>
                @endforeach
            </select>
        </div>

        <div class="butao">
            <button type="submit" class="btn btn-outline-success">Salvar</button>
            <a href="{{ route('welcome.pesquisa') }}" class="btn btn-outline-primary" role="button">Buscar contrato</a>
        </div>
    </form>
</section>
