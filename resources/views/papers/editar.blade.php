@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear Dato</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form action="{{ route('papers.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="dia">Dia</label>
                                        <input type="text" name="dia" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="ayunas">Ayunas</label>
                                        <input type="text" name="ayunas" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nph_lantus">Nph_lantus</label>
                                        <input type="text" name="nph_lantus" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="rapida_ultra_rap">Rapida_ultra_rap</label>
                                        <input type="text" name="rapida_ultra_rap" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correcion">Correción</label>
                                        <input type="text" name="correcion" class="form-control">
                                    </div>
                                </div>
                                <!-- Media mañana -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="media_mañana">Media Mañana</label>
                                        <input type="text" name="media_mañana" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="rapida_ultra_rap_m">Rapida_ultra_rap</label>
                                        <input type="text" name="rapida_ultra_rap_m" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correcion_m">Correción</label>
                                        <input type="text" name="correcion_m" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="almuerzo">Almuerzo</label>
                                        <input type="text" name="almuerzo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="rapida_ultra_rap_a">Rapida_ultra_rap</label>
                                        <input type="text" name="rapida_ultra_rap_a" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correcion_a">Correción</label>
                                        <input type="text" name="correcion_a" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="media_tarde">Media tarde</label>
                                        <input type="text" name="media_tarde" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="rapida_ultra_rap_t">Rapida_ultra_rap</label>
                                        <input type="text" name="rapida_ultra_rap_t" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correcion_t">Correción</label>
                                        <input type="text" name="correcion_t" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="merienda">Merienda</label>
                                        <input type="text" name="merienda" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="rapida_ultra_rap_md">Rapida_ultra_rap</label>
                                        <input type="text" name="rapida_ultra_rap_md" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="correcion_md">Correción</label>
                                        <input type="text" name="correcion_md" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nph_lantus_md">Nph_lantus</label>
                                        <input type="text" name="nph_lantus_md" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="dormir">dormir</label>
                                        <input type="text" name="dormir" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="madrugada">Madrugada</label>
                                        <input type="text" name="madrugada" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection