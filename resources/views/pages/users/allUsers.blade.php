@extends('pages.default')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-3 align-items-center">
            <div class="col-6 d-flex flex-column">
                <h5>Bonjour, {{" ". auth()->user()->getUserFullName()}} 🎉</h5>
                <p>Comment allez-vous aujourd'hui ?</p>
                <p>Explorez La liste complète d'utilisateurs et gérez facilement leur accès et leurs informations. </p>
            </div>
            <div class="col-6 d-flex justify-content-center border rounded pt-4">
              <img
                src="../../assets/img/illustrations/wizard-create-deal-girl-with-laptop-light.png"
                alt="wizard-create-deal"
                data-app-light-img="illustrations/wizard-create-deal-girl-with-laptop-light.png"
                data-app-dark-img="illustrations/wizard-create-deal-girl-with-laptop-dark.png"
                width="650"
                class="img-fluid" />
            </div>
        </div>
        <div class="mt-3 mb-5">
            @if (Session::has('success'))
               <p class="alert alert-success mt-2 mb-3">{{session('success')}}</p>
           @endif
        </div>
        <div class="card">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-3">Liste des Utilisateurs</h5>
                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser" aria-controls="offcanvasAddUser">
                    <i class="menu-icon tf-icons ti ti-plus"></i> Ajouter un nouveau utilisateur
                </button>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatable table border-top">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">Nom </th>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Adresse Mail</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Rôle</th>
                            <th class="text-center">Membre Depuis</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th class="text-center">{{$user->id}}</th>
                                <th class="text-center">{{$user->lastname}}</th>
                                <th class="text-center">{{$user->firstname}}</th>
                                <th class="text-lowercase text-center">{{$user->email}}</th>
                                <th class="text-center">{{$user->mobile}}</th>
                                @if ($user->role->role_category == 'Administrateur')
                                    <th class="text-center"> <span class="badge bg-label-success">{{$user->role->role_name}}</span></th>
                                @elseif($user->role->role_category == 'Modérateur')
                                    <th class="text-center"> <span class="badge bg-label-warning">{{$user->role->role_name}}</span></th>
                                @elseif($user->role->role_category == 'Vendeur')
                                    <th class="text-center"> <span class="badge bg-label-primary">{{$user->role->role_name}}</span></th>
                                @elseif($user->role->role_category == 'Utilisateur')
                                    <th class="text-center"> <span class="badge bg-label-info">{{$user->role->role_name}}</span></th>
                                @endif
                                <th class="text-center">{{$user->created_at}}</th>
                                <th class="text-center">
                                    <a href="{{route('user.show', ['user'=>$user->id])}}"> <i class="menu-icon tf-icons ti ti-eye text-dark"></i> </a>
                                    <a href="#"> <i class="menu-icon tf-icons ti ti-trash text-danger"></i> </a>
                                </th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- Offcanvas to add new user -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Ajouter Un Nouveau Utilisateur</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                    <form method="POST" action="{{route('user.add')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="lastname">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Veuiller Enter un Nom d'Utilisateur" name="lastname"/>
                            @error('lastname')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="firstname">Prénom d'utilisateur</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Veuiller Enter un Pénom d'Utilisateur" name="firstname"/>
                            @error('firstname')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Adresse Mail</label>
                            <input type="text" id="email" class="form-control" placeholder="Exemple : john.doe@example.com" name="email"/>
                            @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input type="text" id="mobile" class="form-control phone-mask" placeholder="Exemple : +212 6 XX XX XX XX" name="mobile"/>
                            @error('mobile')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="role_id">Categorie du Role</label>
                            <select id="role_id" class="form-select" name="role_id">
                                <option selected>Veuiller Choisir une catégorie</option>
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->role_category}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="password">Mot de passe</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                            @error('password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
                            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                            @error('password_confirmation')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Sauvegarder</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Annuler</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
