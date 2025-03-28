@extends('admin.layouts.master')

@section('content')
<section class="section">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dashboard</h5>
                            <p class="card-text">8 tareas completadas de 10</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lunes, 17 de Marzo</h5>
                            <div class="row">
                                <div class="col">Sun 16</div>
                                <div class="col">Mon 17</div>
                                <div class="col">Tue 18</div>
                                <div class="col">Wed 19</div>
                                <div class="col">Thu 20</div>
                                <div class="col">Fri 21</div>
                                <div class="col">Sat 22</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="task">
                                <p>Revisión de Campaña de Febrero</p>
                                <p>Fecha Fin: Marzo 17, 2025</p>
                                <p>Mario Campos - Contabilidad</p>
                                <button class="btn btn-success">Completado</button>
                            </div>
                            <div class="task">
                                <p>Reunión para sorteos de Abril</p>
                                <p>Fecha Fin: Marzo 16, 2025</p>
                                <p>Rebecca Molina - Contabilidad</p>
                                <button class="btn btn-warning">En Progreso</button>
                            </div>
                            <div class="task">
                                <p>Termino de campaña "Hora Atlantic"</p>
                                <p>Fecha Fin: Marzo 16, 2025</p>
                                <p>Lindsey Stroud</p>
                                <button class="btn btn-success">Completado</button>
                            </div>
                            <button class="btn btn-link">Mostrar más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Campañas</h5>
                    <div id="chart"></div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Tareas</h5>
                    <div class="pie-chart">
                        <div class="pie-slice" style="--percentage: 60"></div>
                        <div class="pie-label">60%</div>
                    </div>
                    <div class="chart-legend">
                        <div>Activas</div>
                        <div>Completadas</div>
                        <div>Terminadas</div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Hola {{Auth::user()->name}}</h5>
                    <p id="fecha-actual"></p>
                    <p id="hora-actual"></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
  </section>
@endsection

