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
                            <a href="{{url('/Permissions')}}" class="">
                                <span> Voir Permissions </span>
                            </a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
                                <span>Modifier le Role </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-normal">Total 7 users</h6>
                            <img src="{{asset('/images/vendeur.png')}}" alt="" style="width: 40px;">
                        </div>
                        <div class=" mt-1">
                            <div class="role-heading">
                                <h4 class="mb-3">Vendeur</h4>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="{{url('/Permissions')}}" class="">
                                <span> Voir Permissions </span>
                            </a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
                                <span>Modifier le Role </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-normal">Total 2 users</h6>
                            <img src="{{asset('/images/moderateur.png')}}" alt="" style="width: 40px;">
                        </div>
                        <div class=" mt-1">
                            <div class="role-heading">
                                <h4 class="mb-3">Modérateur</h4>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="{{url('/Permissions')}}" class="">
                                <span> Voir Permissions </span>
                            </a>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal">
                                <span>Modifier le Role </span>
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
        <!-- Add Role Modal -->
        <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <h3 class="role-title mb-2">Add New Role</h3>
                            <p class="text-muted">Set role permissions</p>
                        </div>
                        <!-- Add role form -->
                        <form id="addRoleForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 mb-4">
                                <label class="form-label" for="modalRoleName">Role Name</label>
                                <input
                                    type="text"
                                    id="modalRoleName"
                                    name="modalRoleName"
                                    class="form-control"
                                    placeholder="Enter a role name"
                                    tabindex="-1" />
                                </div>
                            <div class="col-12">
                            <h5>Role Permissions</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">
                                                Administrator Access
                                                <i
                                                class="ti ti-info-circle"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Allows a full access to the system"></i>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAll" />
                                                    <label class="form-check-label" for="selectAll"> Select All </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">User Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userManagementRead" />
                                                        <label class="form-check-label" for="userManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="userManagementWrite" />
                                                        <label class="form-check-label" for="userManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="userManagementCreate" />
                                                        <label class="form-check-label" for="userManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Content Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="contentManagementRead" />
                                                        <label class="form-check-label" for="contentManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="contentManagementWrite" />
                                                        <label class="form-check-label" for="contentManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="contentManagementCreate" />
                                                        <label class="form-check-label" for="contentManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Disputes Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="dispManagementRead" />
                                                        <label class="form-check-label" for="dispManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="dispManagementWrite" />
                                                        <label class="form-check-label" for="dispManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dispManagementCreate" />
                                                        <label class="form-check-label" for="dispManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Database Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="dbManagementRead" />
                                                        <label class="form-check-label" for="dbManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="dbManagementWrite" />
                                                        <label class="form-check-label" for="dbManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dbManagementCreate" />
                                                        <label class="form-check-label" for="dbManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Financial Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="finManagementRead" />
                                                        <label class="form-check-label" for="finManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="finManagementWrite" />
                                                        <label class="form-check-label" for="finManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="finManagementCreate" />
                                                        <label class="form-check-label" for="finManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Reporting</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="reportingRead" />
                                                        <label class="form-check-label" for="reportingRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox" id="reportingWrite" />
                                                        <label class="form-check-label" for="reportingWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="reportingCreate" />
                                                        <label class="form-check-label" for="reportingCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-4">
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

    <!-- Add Role Modal -->
    <div id="add_role" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('roleName') is-invalid @enderror" id="roleName" name="roleName" value="{{ old('roleName') }}" placeholder="Enter role name">
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Role Modal -->

    <!-- Edit Role Modal -->
    <div id="edit_role" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="e_id" value="">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="e_roleNmae" name="roleName" value="">
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Role Modal -->

    <!-- Delete Role Modal -->
    <div class="modal custom-modal fade" id="delete_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Role</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="id" class="e_id" value="">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Role Modal -->

<!-- /Page Wrapper -->

@endsection
