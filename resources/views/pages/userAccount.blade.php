@extends('pages.default')
@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paramètres du Compte /</span> Compte</h4>

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item">
                  <a class="nav-link active" href="javascript:void(0);"
                    ><i class="ti-xs ti ti-users me-1"></i> Compte</a
                  >
                </li>
              </ul>
              <div class="card mb-4">
                <h5 class="card-header">Détails du Profil</h5>
                <!-- Account -->
                <div class="card-body">
                  <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img
                      src="../../assets/img/avatars/utilisateur.png"
                      alt="user-avatar"
                      class="d-block w-px-100 h-px-100 rounded border-0"
                      id="uploadedAvatar" />
                    <div class="button-wrapper">
                      <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                        <span class="d-none d-sm-block">Télécharger une nouvelle photo</span>
                        <i class="ti ti-upload d-block d-sm-none"></i>
                        <input
                          type="file"
                          id="upload"
                          class="account-file-input"
                          hidden
                          accept="image/png, image/jpeg" />
                      </label>
                      <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Rénitialiser</span>
                      </button>

                      <div class="text-muted">Autorisé : JPG, GIF ou PNG. Taille maximale de 800 Ko.</div>
                    </div>
                  </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                  <form id="formAccountSettings" method="POST" onsubmit="return false">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input
                          class="form-control"
                          type="text"
                          id="firstName"
                          name="firstName"
                          value="John"
                          autofocus />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Nom</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input
                          class="form-control"
                          type="text"
                          id="email"
                          name="email"
                          value="john.doe@example.com"
                          placeholder="john.doe@example.com" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="organization" class="form-label">Entreprise</label>
                        <input
                          type="text"
                          class="form-control"
                          id="organization"
                          name="organization"
                          value="Pixinvent" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Téléphone</label>
                        <div class="input-group input-group-merge">
                          <span class="input-group-text">MA (+212)</span>
                          <input
                            type="text"
                            id="phoneNumber"
                            name="phoneNumber"
                            class="form-control"
                            placeholder="06 22 34 44 23" />
                        </div>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Addresse" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">Ville</label>
                        <input class="form-control" type="text" id="state" name="state" placeholder="Casablanca" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="zipCode" class="form-label">Code Postal</label>
                        <input
                          type="text"
                          class="form-control"
                          id="zipCode"
                          name="zipCode"
                          placeholder="56987"
                          maxlength="6" />
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="Ville">Pays</label>
                        <select id="Ville" class="select2 form-select">
                          <option value="">Choisir</option>
                          <option value="Australia">Australia</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Brazil">Brazil</option>
                          <option value="Canada">Canada</option>
                          <option value="China">China</option>
                          <option value="France">France</option>
                          <option value="Germany">Germany</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea">Korea, Republic of</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Philippines">Philippines</option>
                          <option value="Russia">Russian Federation</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Emirates">United Arab Emirates</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                        </select>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="language" class="form-label">RoLe</label>
                        <select id="language" class=" form-select">
                          <option value="">Choisir</option>
                          <option value="">Utilisateur</option>
                          <option value="">Administrateur</option>
                          <option value="">Modérateur</option>
                        </select>
                      </div>

                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Sauvegarder Les Changements</button>
                      <button type="reset" class="btn btn-label-secondary">Quitter</button>
                    </div>
                  </form>
                </div>
                <!-- /Account -->
              </div>
              <div class="card">
                <h5 class="card-header">Supprimer Mon Compte</h5>
                <div class="card-body">
                  <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                      <h5 class="alert-heading mb-1">Êtes-vous sûr(e) de vouloir supprimer votre compte ? </h5>
                      <p class="mb-0">
                        Une fois que vous aurez supprimé votre compte, il n'y aura aucun retour en arrière possible. Veuillez être certain(e) de votre décision.</p>
                    </div>
                  </div>
                  <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="accountActivation"
                        id="accountActivation" />
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
        <!-- / Content -->

      </div>
      <!-- Content wrapper -->
@endsection
