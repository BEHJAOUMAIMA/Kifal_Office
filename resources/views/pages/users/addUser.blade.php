@extends('pages.default')
@section('content')

 <!-- Offcanvas to add new user -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Ajouter Utilisateur</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
        <div class="mb-3">
            <label class="form-label" for="add-user-fullname">Nom Complet</label>
            <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="add-user-email">Adresse Email</label>
            <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="add-user-contact">Mobile</label>
            <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+212 6 XX XX XX XX" aria-label="john.doe@example.com" name="userContact" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="add-user-company">Entreprise</label>
            <input type="text" id="add-user-company" class="form-control" placeholder="Kiafl Auto" aria-label="jdoe1" name="companyName" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="country">Ville</label>
            <select id="country" class="select2 form-select">
                <option value="">Select</option>
                <option value="Australia">Casablanca</option>
                <option value="Bangladesh">Marrakech</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="user-role">Role</label>
            <select id="user-role" class="form-select">
                <option value="maintainer">Utilisateur</option>
                <option value="author">Modérateur</option>
                <option value="admin">Administrateur</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="form-label" for="user-plan">Mot de passe</label>
            <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            aria-describedby="password" />
        </div>
        <div class="mb-4">
            <label class="form-label" for="user-plan">Confirmer le mot de passe</label>
            <input
            type="password"
            id="password"
            class="form-control"
            name="password"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            aria-describedby="password" />
        </div>
      <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
      <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
    </form>
  </div>
</div>


@endsection
