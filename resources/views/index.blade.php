@extends("layouts.header")

@section('content')
    <section class="content-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de Fundação</th>
                    <th>Arquirrival</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($times as $time)
                    <tr>
                        <td>{{ $time->nome }}</td>
                        <td>{{ $time->data_de_fundacao }}</td>
                        <td>{{ $time->arquirrival }}</td>
                    </tr>
                @empty
                    <tr>
                        <td>Erro!</td>
                        <td>Erro!</td>
                        <td>Erro!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div id="action-btn">
            <a href="{{ route('views.times.create') }}">
                Adicionar um Time
            </a>
        </div>
        @if (session('success'))
            <div class="session-flash">
                {{ session('success') }}
            </div>
        @endif
    </section>
@endsection
