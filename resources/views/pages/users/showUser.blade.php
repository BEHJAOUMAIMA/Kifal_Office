@extends('pages.default')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-center justify-content-between my-5 py-3">
            <h4 class="fw-bold"><span class="text-muted fw-light">{{$user->lastname." ".$user->firstname}} /</span> Informations</h4>
            <a href="{{route('users.display')}}" class="text-decoration-none btn btn-outline-dark">Return</a>
        </div>
        <div class="mt-3 mb-5">
            @if (Session::has('success'))
               <p class="alert alert-success mt-2 mb-3">{{session('success')}}</p>
           @endif
        </div>
        <div class="row d-flex justify-content-center align-items-center" style="height: 400px">
            <div class="col col-lg-12 mb-4 mb-lg-0">
                <div class="card mb-3 border-0" style="border-radius:10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius:10px; border-bottom-left-radius: 10px">
                            <img src="../../assets/img/avatars/utilisateur.png" alt="" class="img-fluid my-5" style="width: 140px; border-radius:100%;" />
                            <h5 class="fs-2 fw-bold text-white">{{$user->lastname." ".$user->firstname}}</h5>
                            <p class="fs-4">
                                {{$user->role->role_name}}
                            </p>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="card-body p-4">
                                <h6 class="fs-4">Informations</h6>
                                <hr class="mt-0 mb-3">
                                <div class="row pt-1 mt-5">
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Nom :</h6>
                                        <p class="text-muted">{{$user->lastname}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Prénom :</h6>
                                        <p class="text-muted">{{$user->firstname}}</p>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Adresse Mail :</h6>
                                        <p class="text-muted">{{$user->email}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Mobile :</h6>
                                        <p class="text-muted">{{$user->mobile}}</p>
                                    </div>
                                </div>

                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Role :</h6>
                                        <p class="text-muted">{{$user->role->role_name}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6 class="fw-bold">Membre Depuis :</h6>
                                        <p class="text-muted">{{$user->created_at}}</p>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="d-flex mx-auto mt-4">
                                        <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Modifier Les informations</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-5">
                            <h3 class="mb-5">Modifier Les Informations de {{$user->lastname." ".$user->firstname}}</h3>
                        </div>
                        <form id="editUserForm" class="row g-3" method="POST" action="{{route('user.update',['user'=>$user->id])}}">
                            @csrf
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="lastname">Nom de l'utilisateur :</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" value="{{$user->lastname}}"/>
                                @error('lastname')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6  mb-3">
                                <label class="form-label" for="firstname">Prénom de l'utilisateur :</label>
                                <input type="text" id="firstname" name="firstname" class="form-control" value="{{$user->firstname}}"/>
                                @error('firstname')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label" for="email">Adresse Mail :</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}"/>
                                @error('email')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="mobile">Mobile :</label>
                                <input type="text" id="mobile" name="mobile" class="form-control" value="{{$user->mobile}}"/>
                                @error('mobile')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label" for="role_id">Role</label>
                                <select id="role_id" name="role_id" class="form-select">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->role_category }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="password">Nouveau Mot de passe</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                                @error('password')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"/>
                                @error('password_confirmation')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 text-center mt-5">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Sauvegarder Les Changements</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                    Quitter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->
    </div>
    <style>
        .gradient-custom {
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
@endsection
