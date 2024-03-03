@include('componentes.header')

<section class="ContainerCompleto">
    <div class="btn-total">
        <a class="btn btn-outline-primary" href="{{ route('welcome.totalcontratos')}}" role="button">📄 CONTRATOS</a>
    </div>
    <br><br><br>
    <div class="tituloPesquisa">
        <h2>Pesquisar contratos</h2>
    </div>


    <form class="row g-3" action="{{ route('welcome.resultado')}}" method="POST" id="formulario">
        @csrf
        <div class="col-md">
            <label class="form-label">Contrato n°</label>
            <input type="number" class="form-control" name="numcontrato" id="InputForm">
        </div>
        <div class="col-md">
            <label for="inputPassword4" class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="InputForm">
        </div>

        <div class="div-teste">
            <div class="col">
                <label class="form-label" for="selectFormDiretoria">Diretoria</label>
                <select class="form-select" name="diretoria" id="selectFormDiretoria">
                    <option value="" selected>Selecione...</option>
                    @foreach ($diretoria as $dire)
                        <option value="{{ $dire->id }}">{{ $dire->diretoria }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col">
                <label class="form-label" for="selectFormStatus">Status</label>
                <select class="form-select" name="status" id="selectFormStatus">
                    <option value="" selected>Selecione...</option>
                    @foreach ($status as $tus)
                        <option value="{{ $tus->id }}">{{ $tus->status }}</option>
                    @endforeach
                </select>
            </div>            
            
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
            <a href="{{ route('welcome.home') }}" class="btn btn-outline-success" role="button">Novo contrato +</a>
        </div>
    </form>
</section>

{{-- @include('footer.footer') --}}
