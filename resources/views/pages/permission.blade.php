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
            <a href="{{route('roles')}}" class="btn btn-primary"> Retour </a>
        </div>
    </div>
    <div class="mb-5">
        @if (Session::has('success'))
           <p class="alert alert-success mt-2 mb-3">{{session('success')}}</p>
       @endif
   </div>
    <div class="row">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Permissions</h5>
                <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#editRoleModal" class="role-edit-modal">Mettre à jour</a>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-flush-spacing">
                    <thead>
                        <tr>
                            @foreach ($permissions_category as $th)
                                <th class="text-center">{{ $th }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td class="text-center">
                                    {{$permission['module']}}
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
                                    @endphp
                                    <td class="text-center">
                                        @if ($hasPermission)
                                            <input class="form-check-input" type="checkbox" checked style="pointer-events: none;">
                                        @elseif ($permissionExists)
                                            <input class="form-check-input" type="checkbox" style="pointer-events: none;">
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

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
                   <!-- ... -->
                    <form id="editRoleForm" class="row g-3" method="POST" action="{{ route('roles.updatePermissions', ['role' =>$role->id]) }}">
                        @csrf
                        <!-- ... -->
                        <div class="col-12">
                        <h5>Les Permissions du Rôle</h5>
                        <!-- Permission table -->
                        <div class="table-responsive">
                            <table class="table table-flush-spacing">
                                <thead>
                                    <tr>
                                    @foreach ($permissions_category as $th)
                                        <th class="text-center">{{ $th }}</th>
                                    @endforeach
                                    </tr>
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
                                                    @if ($hasPermission)
                                                        <input class="form-check-input" type="checkbox" checked  name="permissions[]" value="{{ $idPermission }}" @if ($hasPermission) checked @endif>
                                                    @elseif ($permissionExists)
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
                        <!-- ... -->
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
                    <!-- ... -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
