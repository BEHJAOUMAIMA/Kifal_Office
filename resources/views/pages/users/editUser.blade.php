@extends('pages.default')
@section('content')
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
@endsection
