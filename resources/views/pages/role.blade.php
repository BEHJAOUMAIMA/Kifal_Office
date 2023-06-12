@extends('pages.default')
@section('content')
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-semibold mb-4">Liste des Roles</h4>
        <p class="mb-4">
            Un rôle fournit l'accès à des menus et des fonctionnalités prédéfinis de manière à ce qu'un administrateur puisse  <br />
            avoir accès à ce dont l'utilisateur a besoin, en fonction du rôle qui lui a été attribué.
        </p>
        <div class="mb-5">
            @if (Session::has('success'))
               <p class="alert alert-success mt-2 mb-3">{{session('success')}}</p>
           @endif
        </div>
        <!-- Role cards -->
        <div class="row g-4 mb-5">
        
            @foreach ($roles as $role)
            {{-- @dd($role->permissions()) --}}
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold">
                                    Total  {{
                                             DB::table('roles')
                                                ->leftJoin('users', 'roles.id', '=', 'users.role_id')
                                                ->select('roles.role_category')
                                                ->where('roles.role_category', $role->role_category)
                                                ->selectRaw('COUNT(users.id) as total_users')
                                                ->groupBy('roles.role_category')
                                                ->count()
                                        }} Utilisateurs 
                                </h6>
                                <img src="{{asset('/images/admin.png')}}" alt="" style="width: 40px;">
                            </div>
                            <div class=" mt-1">
                                <div class="role-heading">
                                    <h4 class="mb-3">{{$role->role_name}}</h4>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <a href="{{ route('permissions', ['role' => $role->id]) }}" class="">
                                    <span> Voir Permissions </span>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 p-3">
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
                        <form id="addRoleForm" class="row g-3" method="POST" action="{{route('roles.store')}}">
                            @csrf
                            <div class="col-12 mb-4">
                                <label class="form-label mb-3" for="role_name" style="font-size: 1.125rem;font-weight:600;">Nom du Rôle</label>
                                <input type="text" id="role_name" name="role_name"class="form-control" placeholder="Entrer un nom pour le rôle" tabindex="-1" />
                                @error('role_name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <label class="form-label mb-3" for="role_category" style="font-size: 1.125rem;font-weight:600;">Catégorie du Rôle</label>
                                <input type="text" id="role_category" name="role_category"class="form-control" placeholder="Ex : Administrateur, Modérateur, Vendeur, Utilisateur" tabindex="-1" />

                                {{-- <select class="form-select" name="role_category" id="role_category">
                                    <option value="0" selected>Choisir une Catégorie</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->role_category}}">{{$role->role_category}}</option>
                                    @endforeach
                                </select> --}}
                                @error('role_category')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                            <h5>Les Permissions du Rôle</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <thead>
                                        <thead>
                                            <tr>
                                                @foreach ($permissions_category as $th)
                                                    <th class="text-center">{{ $th }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                    </thead>
                                    <tbody>
                                        @foreach($permissions as $permission)
                                        <tr>
                                            <td class="text-center">
                                                {{ $permission['module'] }}
                                            </td>
                                            @php
                                                $filteredCategories = collect($permissions_category)->slice(1);
                                            @endphp

                                            @foreach ($filteredCategories as $th)

                                                @php
                                                    $permissionExists = collect($permission['data'])->contains('permission_category', $th);
                                                    $hasPermission = collect($permission['data'])->contains(function ($value) use ($th, $permissions_role) {
                                                        return $permissions_role->contains('id', $value['id']) && $value['permission_category'] === $th;
                                                    });
                                                    $idPermission = collect($permission['data'])->where('permission_category', $th)->first()['id'] ?? null;
                                                @endphp
                                                <td class="text-center">
                                                    
                                                    @if ($permissionExists)
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $idPermission }}" @if ($hasPermission) checked @endif>
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-2 pt-5">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Sauvegarder</button>
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
