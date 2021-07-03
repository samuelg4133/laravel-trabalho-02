@extends("layouts.header")

@section('content')
    <section class="content-wrapper">
        <form action="{{ route('views.times.store') }}" method="POST">
            @csrf
            <fieldset>
                <legend>Formulário</legend>
                <div class="input-field">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome" />
                </div>
                @error('nome')
                    <span><small>{{ $message }}</small></span>
                @enderror
                <div class="input-field">
                    <label for="arquirrival">Arquirrival: </label>
                    <input type="text" id="arquirrival" name="arquirrival" />
                </div>
                @error('arquirrival')
                    <span><small>{{ $message }}</small></span>
                @enderror
                <div class="input-field">
                    <label for="data_de_fundacao">Data de Fundação: </label>
                    <input type="date" id="data_de_fundacao" name="data_de_fundacao" />
                </div>
                @error('data_de_fundacao')
                    <span><small>{{ $message }}</small></span>
                @enderror
                <div class="form-bttns">
                    <button type="submit" class="button-primary">Salvar</button>
                    <a id="btn-cancel" href="{{ url()->previous() }}">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </section>
@endsection
