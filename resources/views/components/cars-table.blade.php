<head>
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
    {{-- <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" /> --}}
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    {{-- <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" /> --}}
</head>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Voitures /</span> Tous Les Voitures</h4>
        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exLargeModal"><i class="ti ti-plus me-1"></i>  Ajouter une Voiture</button>
    </div>

    <div class="card">
        <h5 class="card-header">Mes Voitures</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Prix</th>
                        <th>Référence</th>
                        <th>Finition</th>
                        <th>Année</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <i class="ti ti- ti-lg text-danger me-3"></i> <strong>LAND-ROVER Evoque</strong>
                        </td>
                        <td>SUV / 4x4 </td>
                        <td>245 000 MAD</td>
                        <td><span class="badge bg-label-primary me-1">#VEH0000OMT </span></td>
                        <td>Evoque I - Ph1 - 2.0 TD4 HSE BVA 180ch</td>
                        <td>2016</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('/voitures/informations')}}"><i class="ti ti-eye me-1"></i> Détails</a>
                                    <a class="dropdown-item" href="{{url('/voiture/Modifier')}}"><i class="ti ti-pencil me-1"></i> Modifier</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Supprimer</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel4">Ajouter une Voiture</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12 mb-4">
                    <div class="bs-stepper wizard-numbered mt-2">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#car-informations">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Informations Générales </span>
                                        <span class="bs-stepper-subtitle">Détails du véhicule</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="ti ti-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#annonce-informations">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Annonce</span>
                                        <span class="bs-stepper-subtitle">Ajouter Les détails d'annonce</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="ti ti-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#add-pictures">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Images du véhicule</span>
                                        <span class="bs-stepper-subtitle">Ajouter des images</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <form onSubmit="">
                                <div id="car-informations" class="content">
                                    <div class="content-header mb-3">
                                        <h6 class="mb-0">Détails du véhicule</h6>
                                        <small>Entrer Les différentes informations du véhicule</small>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="marque">Marque</label>
                                            <select name="marque" id="marque" class="form-select" data-allow-clear="true">
                                                <option value="ABARTH">ABARTH</option>
                                                <option value="ACURA">ACURA</option>
                                                <option value="ALFA ROMEO">ALFA ROMEO</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="dateMEC" class="form-label">Date MEC</label>
                                            <input type="date" id="dateMEC" class="form-control" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="modele" class="form-label">Modèle</label>
                                            <select name="modele" id="modele" class="form-select" data-allow-clear="true">
                                                <option value="">4C</option>
                                                <option value="">4C Spider</option>
                                                <option value="">Stelvio</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="carburant" class="form-label">Carburant</label>
                                            <select name="carburant" id="carburant" class="form-select" data-allow-clear="true">
                                                <option value="">Diesel</option>
                                                <option value="">Essence</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="transmission" class="form-label">Transmission</label>
                                            <select name="transmission" id="transmission" class="form-select" data-allow-clear="true">
                                                <option value="">Automatique</option>
                                                <option value="">Manuelle</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="puissance-fiscale" class="form-label">Puissance Fiscale</label>
                                            <input type="number" class="form-control" id="puissance-fiscale" name="puissance-fiscale">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="finition" class="form-label">Finition</label>
                                            <select name="finition" id="finition" class="form-select" data-allow-clear="true">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="kilometrage" class="form-label">Kilomètrage</label>
                                            <input type="number" class="form-control" id="kilometrage" name="kilometrage">
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id="annonce-informations" class="content">
                                    <div class="content-header mb-3">
                                        <h6 class="mb-0">Informations d'Annonce</h6>
                                        <small>Entrer les Détails de Votre Annonce</small>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="ville" class="form-label">Ville</label>
                                            <select name="ville" id="ville" class="form-select" data-allow-clear="true">
                                                <option value="">Casablanca</option>
                                                <option value="">Rabat</option>
                                                <option value="">Marrakech</option>
                                                <option value="">Tanger</option>
                                                <option value="">Agadir</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="origine" class="form-label">Origine</label>
                                            <input type="text" class="form-control" id="origine" name="origine">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col mb-3">
                                                <label for="car-type" class="form-label">Type</label>
                                                <input type="text" class="form-control" id="car-type" name="car-type">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="" class="form-label">Première Main</label>
                                            <select name="" id="" class="form-select" data-allow-clear="true">
                                                <option value="1">Oui</option>
                                                <option value="0">Non</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 mt-0">
                                            <label for="prix" class="form-label">Prix</label>
                                            <input type="number" class="form-control" id="prix" name="prix">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" rows="7"></textarea>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </button>
                                        </div>
                                     </div>
                                </div>

                                <div id="add-pictures" class="content">

                                    <div class="row g-3">
                                        <div class="col-sm-4">
                                            <h6>Image Principale</h6>
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <form action="" class="dropzone needsclick" id="dropzone-basic">
                                                        <div class="dz-message needsclick fs-6">
                                                            Drop files here or click to upload
                                                        </div>
                                                        <div class="fallback">
                                                        <input name="file" type="file" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev">
                                                <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-success btn-submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


