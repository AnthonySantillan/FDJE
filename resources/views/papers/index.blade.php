@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Blogs</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @can('crear-paper')
                        <a class="btn btn-warning" href="{{ route('papers.create') }}">Nuevo</a>
                        @endcan

                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">
                                <th style="display: none;">ID</th>

                                <th style="color:#fff;">Dia</th>

                                <th style="color:#fff;">AYUNAS</th>
                                <th style="color:#fff;">NPH_LANTUS</th>
                                <th style="color:#fff;">RAPIDA_ULTRA_RAP </th>
                                <th style="color:#fff;">CORRECCION</th>

                                <th style="color:#fff;">MEDIA_MAÑANA</th>
                                <th style="color:#fff;">RAPIDA_ULTRA_RAP</th>
                                <th style="color:#fff;">CORRECCION</th>

                                <th style="color:#fff;">ALMUERZO</th>
                                <th style="color:#fff;">RAPIDA_ULTRA_RAP</th>
                                <th style="color:#fff;">CORRECCION</th>

                                <th style="color:#fff;">MEDIA_TARDE</th>
                                <th style="color:#fff;">RAPIDA_ULTRA_RAP</th>
                                <th style="color:#fff;">CORRECCION</th>

                                <th style="color:#fff;">MERIENDA</th>
                                <th style="color:#fff;">RAPIDA_ULTRA_RAP</th>
                                <th style="color:#fff;">CORRECCION</th>
                                <th style="color:#fff;">NPH_LANTUS</th>

                                <th style="color:#fff;">DORMIR</th>
                                <th style="color:#fff;">MADRUGADA</th>
                            </thead>
                            <tbody>
                                @foreach ($papers as $paper)
                                <tr>
                                    <td style="display: none;">{{ $paper->id }}</td>
                                    <td>{{ $paper->titulo }}</td>
                                    <td>{{ $paper->contenido }}</td>
                                    <td>
                                        <form action="{{ route('papers.destroy',$paper->id) }}" method="POST">
                                            @can('editar-paper')
                                            <a class="btn btn-info" href="{{ route('papers.edit',$paper->id) }}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-paper')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $papers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection