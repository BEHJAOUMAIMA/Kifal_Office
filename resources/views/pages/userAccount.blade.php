@extends('pages.default')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paramètres du Compte /</span> {{auth()->user()->getUserFullName()}}</h4>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-users me-1"></i> {{$user->lastname." ".$user->firstname}}</a>
                        </li>
                    </ul>
                </div>
                @if(isset($message))
                    <div class="mt-3 mb-5">
                        <p class="alert alert-success mt-2 mb-3">{{ $message }}</p>
                    </div>
                @endif
                <div class="row g-3 align-items-center border shadow mb-5 mt-3">
                    <div class="col-7 d-flex flex-column ">
                        <h5 class="mx-auto text-primary fw-bold">Est-ce que vous souhaitez actualiser votre profil ?</h5>
                        <p class="mx-auto fw-bold text-muted">Merci de prendre le temps de mettre à jour vos informations. Votre attention aux détails</p>
                        <p class="mx-auto fw-bold text-muted">contribue à maintenirnotre base de données précise et à jour. Nous apprécions</p>
                        <p class="mx-auto fw-bold text-muted"> votre engagement à fournir des données fiables. Merci pour votre contribution !</p>
                    </div>
                    <div class="col-5 d-flex justify-content-center rounded pt-4">
                      <img
                        src="../../assets/img/illustrations/page-misc-under-maintenance.png"
                        alt="wizard-create-deal"
                        data-app-light-img="illustrations/page-misc-under-maintenance.png"
                        data-app-dark-img="illustrations/page-misc-under-maintenance.png"
                        width="300"
                        class="img-fluid" />
                    </div>
                </div>
                <div class="card mb-4 border-0 p-4">
                    <h5>Changer Mes Informations Personnelles</h5>
                    <hr>
                    <div class="card-body p-0">
                        <form method="POST" action="{{route('myAccount.edit',['user'=>$user->id])}}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="lastname" class="form-label">Nom</label>
                                    <input class="form-control" type="text" id="lastname" name="lastname" value="{{$user->lastname}}"/>
                                    @error('lastname')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="firstname" class="form-label">Prénom</label>
                                    <input class="form-control" type="text" name="firstname" id="firstname" value="{{$user->firstname}}"/>
                                    @error('firstname')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Adresse Mail</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{$user->email}}"/>
                                    @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" value="{{$user->mobile}}"/>
                                    @error('mobile')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary me-3">Sauvegarder Les Changements</button>
                                <a href="{{url('/Acceuil')}}" type="reset" class="btn btn-label-secondary">Quitter</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-4 border-0 p-4">
                    <h5>Changer Mon Mot de Passe</h5>
                    <hr>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="current_password" class="form-label">Mot de passe actuel</label>
                                    <input class="form-control"  id="current_password" type="password" name="current_password"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="new_password"  class="form-label">Nouveau mot de passe</label>
                                    <input class="form-control" id="new_password" type="password" name="new_password"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="new_password_confirmation" class="form-label">Confirmation du nouveau mot de passe</label>
                                    <input class="form-control" id="new_password_confirmation" type="password" name="new_password_confirmation"  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-start">
                                <button class="btn btn-primary me-3" type="submit">Modifier le mot de passe</button>
                                <a href="{{url('/Acceuil')}}" type="reset" class="btn btn-label-secondary">Quitter</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Supprimer Mon Compte</h5>
                    @if ($errors->has('accountActivation'))
                        <div class="alert alert-danger">
                            {{ $errors->first('accountActivation') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h5 class="alert-heading mb-1">Êtes-vous sûr(e) de vouloir supprimer votre compte ? </h5>
                                <p class="mb-0">
                                    Une fois que vous aurez supprimé votre compte, il n'y aura aucun retour en arrière possible. Veuillez être certain(e) de votre décision.
                                </p>
                            </div>
                         </div>
                        <form id="formAccountDeactivation" method="POST" action="{{route('delete.account')}}">
                            @csrf
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" value="1"/>
                                <label class="form-check-label" for="accountActivation">
                                    Je confirme la suppression de mon compte.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account"> Supprimer Mon Compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
