@extends('pages.default')
@section('content')
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold mb-4">Liste des Roles</h4>
        <p class="mb-4">
            Un rôle fournit l'accès à des menus et des fonctionnalités prédéfinis de manière à ce qu'un administrateur puisse  <br />
            avoir accès à ce dont l'utilisateur a besoin, en fonction du rôle qui lui a été attribué.
        </p>
        <!-- Role cards -->
        <div class="row g-4 mb-5">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-normal">Total 4 users</h6>
                            <img src="{{asset('/images/admin.png')}}" alt="" style="width: 40px;">
                        </div>
                        <div class=" mt-1">
                            <div class="role-heading">
                                <h4 class="mb-3">Administrateur</h4>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="" class="">
                                <span> Voir Permissions </span>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 p-4">
                    <div class="row h-100">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                <img
                                    src="../../assets/img/illustrations/add-new-roles.png"
                                    class="img-fluid mt-sm-4 mt-md-0"
                                    alt="add-new-roles"
                                    width="83" />
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body text-sm-end text-center ps-sm-0">
                                <button
                                    data-bs-target="#addRoleModal"
                                    data-bs-toggle="modal"
                                    class="btn btn-primary mb-2 text-nowrap add-new-role">
                                    Ajouter un Rôle
                                </button>
                                <p class="mb-0 mt-1">Ajouter un rôle, s'il n'existe pas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/ Role cards -->

        <!-- Add Role Modal -->
        <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-add-new-role">
                <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <h3 class="role-title mb-2">Ajouter un nouveau Rôle</h3>
                            <p class="text-muted"> Et Définir les autorisations du Rôle</p>
                        </div>
                        <!-- Add role form -->
                        <form id="addRoleForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 mb-4">
                                <label class="form-label" for="modalRoleName">Nom du Rôle</label>
                                <input
                                    type="text"
                                    id="modalRoleName"
                                    name="roleName"
                                    class="form-control"
                                    placeholder="Entrer un nom pour le rôle"
                                    tabindex="-1" />
                                </div>
                            <div class="col-12">
                            <h5>Les Permissions du Rôle</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Utilisateurs</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userRead" />
                                                        <label class="form-check-label" for="userRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userWrite" />
                                                        <label class="form-check-label" for="userWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userCreate" />
                                                        <label class="form-check-label" for="userCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userDelete" />
                                                        <label class="form-check-label" for="userDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="userValidate" />
                                                        <label class="form-check-label" for="userValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Annonces</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceRead" />
                                                        <label class="form-check-label" for="annonceRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceWrite" />
                                                        <label class="form-check-label" for="annonceWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceCreate" />
                                                        <label class="form-check-label" for="annonceCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceDelete" />
                                                        <label class="form-check-label" for="annonceDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="annonceValidate" />
                                                        <label class="form-check-label" for="annonceValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Véhicules</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleRead" />
                                                        <label class="form-check-label" for="vehicleRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleWrite" />
                                                        <label class="form-check-label" for="vehicleWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleCreate" />
                                                        <label class="form-check-label" for="vehicleCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleDelete" />
                                                        <label class="form-check-label" for="vehicleDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="vehicleValidate" />
                                                        <label class="form-check-label" for="vehicleValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion du Catalogue</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueRead" />
                                                        <label class="form-check-label" for="catalogueRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueWrite" />
                                                        <label class="form-check-label" for="catalogueWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueCreate" />
                                                        <label class="form-check-label" for="catalogueCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueDelete" />
                                                        <label class="form-check-label" for="catalogueDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="catalogueValidate" />
                                                        <label class="form-check-label" for="catalogueValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-2 pt-5">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                        <!--/ Add role form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editRoleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-add-new-role">
                <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <h3 class="role-title mb-2">Mettre à jour le Rôle</h3>
                            <p class="text-muted"> Et ses autorisations</p>
                        </div>
                        <!-- Add role form -->
                        <form id="addRoleForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 mb-4">
                                <label class="form-label" for="modalRoleName">Nom du Rôle</label>
                                <input
                                    type="text"
                                    id="modalRoleName"
                                    name="roleName"
                                    class="form-control"
                                    placeholder="Entrer un nom pour le rôle"
                                    tabindex="-1" />
                                </div>
                            <div class="col-12">
                            <h5>Les Permissions du Rôle</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Utilisateurs</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userRead" />
                                                        <label class="form-check-label" for="userRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userWrite" />
                                                        <label class="form-check-label" for="userWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userCreate" />
                                                        <label class="form-check-label" for="userCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userDelete" />
                                                        <label class="form-check-label" for="userDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="userValidate" />
                                                        <label class="form-check-label" for="userValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Annonces</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceRead" />
                                                        <label class="form-check-label" for="annonceRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceWrite" />
                                                        <label class="form-check-label" for="annonceWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceCreate" />
                                                        <label class="form-check-label" for="annonceCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="annonceDelete" />
                                                        <label class="form-check-label" for="annonceDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="annonceValidate" />
                                                        <label class="form-check-label" for="annonceValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion des Véhicules</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleRead" />
                                                        <label class="form-check-label" for="vehicleRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleWrite" />
                                                        <label class="form-check-label" for="vehicleWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleCreate" />
                                                        <label class="form-check-label" for="vehicleCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="vehicleDelete" />
                                                        <label class="form-check-label" for="vehicleDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="vehicleValidate" />
                                                        <label class="form-check-label" for="vehicleValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Gestion du Catalogue</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueRead" />
                                                        <label class="form-check-label" for="catalogueRead"> Lecture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueWrite" />
                                                        <label class="form-check-label" for="catalogueWrite"> Ecriture </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueCreate" />
                                                        <label class="form-check-label" for="catalogueCreate"> Création </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="catalogueDelete" />
                                                        <label class="form-check-label" for="catalogueDelete"> Suppression </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="catalogueValidate" />
                                                        <label class="form-check-label" for="catalogueValidate"> Validation </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-2 pt-5">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                        <!--/ Add role form -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection
