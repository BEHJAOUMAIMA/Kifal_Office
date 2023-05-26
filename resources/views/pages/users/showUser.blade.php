@extends('pages.default')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Utilisateur /</span> Informations</h4>
    <div class="row">
      <!-- User Sidebar -->
      <div class="col-xl-12 col-lg-12 col-md-12 order-1 order-md-0">
        <!-- User Card -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="user-avatar-section">
              <div class="d-flex align-items-center flex-column">
                <img
                  class="img-fluid rounded mb-3 pt-1 mt-4"
                  src="../../assets/img/avatars/15.png"
                  height="100"
                  width="100"
                  alt="User avatar" />
                <div class="user-info text-center">
                  <h4 class="mb-2">Boutaina El Atbaoui</h4>
                  <span class="badge bg-label-secondary mt-1">Utilisateur</span>
                </div>
              </div>
            </div>

            <p class="mt-4 small text-uppercase text-muted text-center my-4">Détails</p>
            <div class="info-container d-flex flex-column justify-content-center text-center">
              <ul class="list-unstyled">
                <li class="mb-2">
                  <span class="fw-semibold me-1"> Nom Complet</span>
                  <span>Boutaina El Atbaoui</span>
                </li>
                <li class="mb-2 pt-1">
                  <span class="fw-semibold me-1">Adresse email:</span>
                  <span>Elatbaoui.Boutaina@gmail.com</span>
                </li>
                <li class="mb-2 pt-1">
                  <span class="fw-semibold me-1">Status:</span>
                  <span class="badge bg-label-success">Active</span>
                </li>
                <li class="mb-2 pt-1">
                  <span class="fw-semibold me-1">Role:</span>
                  <span>Utilisateur</span>
                </li>
                <li class="mb-2 pt-1">
                  <span class="fw-semibold me-1">Mobile:</span>
                  <span>+212 634 63 56 63</span>
                </li>
                <li class="mb-2 pt-1">
                  <span class="fw-semibold me-1"> Entreprise</span>
                  <span>Kia</span>
                </li>
                <li class="pt-1">
                  <span class="fw-semibold me-1">Ville:</span>
                  <span>Rabat</span>
                </li>
              </ul>

            </div>
            <div class="d-flex justify-content-center mt-4">
                <a
                  href="javascript:;"
                  class="btn btn-primary me-3"
                  data-bs-target="#editUser"
                  data-bs-toggle="modal">Modifier</a>
                <a href="javascript:;" class="btn btn-label-danger suspend-user">Supprimer</a>
              </div>
          </div>
        </div>
        <!-- /User Card -->

      </div>
      <!--/ User Sidebar -->

    </div>

    <!-- Modal -->
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
          <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
              <h3 class="mb-4">Modifier Les Informations d'Utilisateur</h3>
            </div>
            <form id="editUserForm" class="row g-3" onsubmit="return false">
              <div class="col-12 col-md-12">
                <label class="form-label" for="modalEditUserFullName"> Nom Complet</label>
                <input
                  type="text"
                  id="modalEditUserFullName"
                  name="modalEditUserFullName"
                  class="form-control"
                  placeholder="Boutaina El Atbaoui" />
              </div>

              <div class="col-12">
                <label class="form-label" for="modalEditUserEmail">Adresse Email</label>
                <input
                  type="text"
                  id="modalEditUserEmail"
                  name="modalEditUserEmail"
                  class="form-control"
                  placeholder="example@domain.com" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserEmail">Mobile</label>
                <input
                  type="text"
                  id="modalEditUserPhone"
                  name="modalEditUserPhone"
                  class="form-control"
                  placeholder="+212 6XX XX XX XX" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserStatus">Status</label>
                <select
                  id="modalEditUserStatus"
                  name="modalEditUserStatus"
                  class="form-select"
                  aria-label="Default select example">
                  <option selected>Choisir</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                  <option value="3">Suspended</option>
                </select>
              </div>
              <div class="col-12 col-md-12">
                <label class="form-label" for="modalEditUserRole">Role</label>
                <select
                  id="modalEditUserRole"
                  name="modalEditUserRole"
                  class="form-select"
                  aria-label="Default select example">
                  <option selected>choisir</option>
                  <option value="1">Utilisateur</option>
                  <option value="2">Modérateur</option>
                  <option value="3">Administrateur</option>
                </select>
              </div>

              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserCompany">Entreprise</label>
                <input
                  type="text"
                  id="modalEditUserCompany"
                  name="modalEditUserCompany"
                  class="form-control"
                  placeholder="Nom d'Entreprise Actuelle" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="modalEditUserCountry">Ville</label>
                <select
                  id="modalEditUserCountry"
                  name="modalEditUserCountry"
                  class=" form-select"
                  data-allow-clear="true">
                  <option value="">Choisir</option>
                  <option value="">Rabat</option>
                  <option value="">Casablanca</option>
                  <option value="">Marrakech</option>
                  <option value="">Agadir</option>
                  <option value="">Tanger</option>
                  <option value="">Fes</option>
                  <option value="">Meknes</option>
                  <option value="">El Jadida</option>
                </select>
              </div>

              <div class="col-12 text-center mt-5">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Sauvegarder</button>
                <button
                  type="reset"
                  class="btn btn-label-secondary"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  Quitter
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--/ Edit User Modal -->
    <!-- /Modal -->
  </div>

@endsection
