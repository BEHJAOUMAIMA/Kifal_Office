@extends('pages.default')
@section('content')
<div class="container">
    <div class="row mt-5 mb-4 d-flex justify-content-between align-items-center">
        <div class="col-md-9">
            <h4>Permissions</h4>
            <p class="">
                Bienvenue sur la plateforme de gestion des autorisations et des permissions dédiée à la configuration précise<br/>
                des privilèges accordés à un rôle spécifique au sein de notre système.
            </p>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
            <a href="{{url('/Roles')}}" class="btn btn-primary"> Retour </a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <h5 class="card-header">Permissions</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Permessions</th>
                            <th class="text-center">Lecture</th>
                            <th class="text-center">Ecriture</th>
                            <th class="text-center">Création</th>
                            <th class="text-center">Supression</th>
                            <th class="text-center">Validation</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td class="text-center">
                                <strong>Gestion des Utilisateurs</strong>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">
                                <strong>Gestion des Annonces</strong>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">
                                <strong>Gestion des Véhicules</strong>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">
                                <strong>Gestion du Catalogue</strong>
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" checked="">
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
