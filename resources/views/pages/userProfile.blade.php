@extends('pages.default')
@section('content')
 <!-- Content wrapper -->
 <head>
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-profile.css" />
 </head>
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profil d'Utilisateur /</span> Profil</h4>

      <!-- Header -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="user-profile-header-banner">
              <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
              <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                <img
                  src="../../assets/img/avatars/utilisateur.png"
                  alt="user image"
                  class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img border-0" />
              </div>
              <div class="flex-grow-1 mt-3 mt-sm-5">
                <div
                  class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                  <div class="user-profile-info">
                    <h4>John Doe</h4>
                    <ul
                      class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                      <li class="list-inline-item"><i class="ti ti-color-swatch"></i> Administrateur</li>
                      <li class="list-inline-item"><i class="ti ti-map-pin"></i>  Casablanca, Maroc</li>
                      <li class="list-inline-item"><i class="ti ti-calendar"></i> Membre depuis avril 2021</li>
                    </ul>
                  </div>
                  <a href="javascript:void(0)" class="btn btn-primary">
                    <i class="ti ti-user-check me-1"></i>Connecté
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Header -->

      <!-- Navbar pills -->
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-sm-row mb-4">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"
                ><i class="ti-xs ti ti-user-check me-1"></i> Profil</a
              >
            </li>
          </ul>
        </div>
      </div>
      <!--/ Navbar pills -->

      <!-- User Profile Content -->
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
          <!-- About User -->
          <div class="card mb-4">
            <div class="card-body">
              <small class="card-text text-uppercase">A propos</small>
              <ul class="list-unstyled mb-4 mt-3">
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-user"></i><span class="fw-bold mx-2">Non Complet:</span> <span>John Doe</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-check"></i><span class="fw-bold mx-2">Status:</span> <span>Active</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-crown"></i><span class="fw-bold mx-2">Role:</span> <span>Administrateur</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-flag"></i><span class="fw-bold mx-2">Ville:</span> <span> Casablanca</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-file-description"></i><span class="fw-bold mx-2">Entreprise:</span>
                  <span>Kifal Auto</span>
                </li>
              </ul>
              <small class="card-text text-uppercase">Contacts</small>
              <ul class="list-unstyled mb-4 mt-3">
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-phone-call"></i><span class="fw-bold mx-2">Mobile:</span>
                  <span>+212 745 34 21 33</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-brand-skype"></i><span class="fw-bold mx-2">Skype:</span>
                  <span>john.doe</span>
                </li>
                <li class="d-flex align-items-center mb-3">
                  <i class="ti ti-mail"></i><span class="fw-bold mx-2">Adresse Email:</span>
                  <span>john.doe@example.com</span>
                </li>
              </ul>

            </div>
          </div>
          <!--/ About User -->

        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
          <!-- Activity Timeline -->
          <div class="card card-action mb-4">
            <div class="card-header align-items-center">
              <h5 class="card-action-title mb-0">Historique d'activités</h5>
              <div class="card-action-element">
                <div class="dropdown">
                  <button
                    type="button"
                    class="btn dropdown-toggle hide-arrow p-0"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical text-muted"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body pb-0">
              <ul class="timeline ms-1 mb-0">
                <li class="timeline-item timeline-item-transparent">
                  <span class="timeline-point timeline-point-primary"></span>
                  <div class="timeline-event">
                    <div class="timeline-header">
                      <h6 class="mb-0">Client Meeting</h6>
                      <small class="text-muted">Today</small>
                    </div>
                    <p class="mb-2">Project meeting with john @10:15am</p>
                    <div class="d-flex flex-wrap">
                      <div class="avatar me-2">
                        <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div class="ms-1">
                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                        <span>CEO of Infibeam</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="timeline-item timeline-item-transparent">
                  <span class="timeline-point timeline-point-success"></span>
                  <div class="timeline-event">
                    <div class="timeline-header">
                      <h6 class="mb-0">Create a new project for client</h6>
                      <small class="text-muted">2 Day Ago</small>
                    </div>
                    <p class="mb-0">Add files to new design folder</p>
                  </div>
                </li>
                <li class="timeline-item timeline-item-transparent">
                  <span class="timeline-point timeline-point-danger"></span>
                  <div class="timeline-event">
                    <div class="timeline-header">
                      <h6 class="mb-0">Shared 2 New Project Files</h6>
                      <small class="text-muted">6 Day Ago</small>
                    </div>
                    <p class="mb-2">
                      Sent by Mollie Dixon
                      <img
                        src="../../assets/img/avatars/4.png"
                        class="rounded-circle me-3"
                        alt="avatar"
                        height="24"
                        width="24" />
                    </p>
                    <div class="d-flex flex-wrap gap-2 pt-1">
                      <a href="javascript:void(0)" class="me-3">
                        <img
                          src="../../assets/img/icons/misc/doc.png"
                          alt="Document image"
                          width="15"
                          class="me-2" />
                        <span class="fw-semibold text-heading">App Guidelines</span>
                      </a>
                      <a href="javascript:void(0)">
                        <img
                          src="../../assets/img/icons/misc/xls.png"
                          alt="Excel image"
                          width="15"
                          class="me-2" />
                        <span class="fw-semibold text-heading">Testing Results</span>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="timeline-item timeline-item-transparent border-0">
                  <span class="timeline-point timeline-point-info"></span>
                  <div class="timeline-event">
                    <div class="timeline-header">
                      <h6 class="mb-0">Project status updated</h6>
                      <small class="text-muted">10 Day Ago</small>
                    </div>
                    <p class="mb-0">Woocommerce iOS App Completed</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--/ Activity Timeline -->
        </div>
      </div>
      <!--/ User Profile Content -->
    </div>
    <!-- / Content -->
  <!-- Content wrapper -->
@endsection
