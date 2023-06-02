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
                            @foreach ($permissions_category as $th)
                                <th class="text-center">{{$th}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                       @foreach($permissions as $permission)
                            <tr>
                                <td class="text-center">
                                    {{$permission['module']}}
                                </td>
                                {{-- @foreach ($permissions_category as $th)
                                    @if ($loop->index > 0)
                                        remove this loop
                                        @foreach ($permission['data'] as $permission_data)
                                            @if ( $permission_data['permission_category'] == $th)
                                                <td><input type="checkbox"></td>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach --}}
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
                                            <input type="checkbox" checked style="pointer-events: none;">
                                        @elseif ($permissionExists)
                                            <input type="checkbox" style="pointer-events: none;">
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

</div>
@endsection
