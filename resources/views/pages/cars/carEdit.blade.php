@extends('pages.default')
@section('content')
<head>
    <link rel="stylesheet" href="../../assets/vendor/libs/dropzone/dropzone.css" />
</head>
<div class="container mx-auto mt-5">
    <h3 class="modal-title text-center my-4" id="exampleModalLabel4">Modifier Les Informations du véhicule</h3>

    <div class="modal-content">
        <div class="modal-body py-5">
            <div class="row justify-content-around align-items-center" style="margin-left: 0 !important; margin-right:0 !important;">
                <div class="col-md-5">
                    <h6 class="">Informations Générales sur le Véhicule</h6>
                    <hr class="mb-4 mt-0" style="">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="marque" class="form-label">Marque</label>
                            <select name="marque" id="marque" class="form-select" data-allow-clear="true">
                                <option value="" selected>Choisir une marque</option>
                                <option value="ABARTH">ABARTH</option>
                                <option value="ACURA">ACURA</option>
                                <option value="ALFA ROMEO">ALFA ROMEO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="dateMEC" class="form-label">Date MEC</label>
                            <input type="date" id="dateMEC" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="modele" class="form-label">Modèle</label>
                            <select name="modele" id="modele" class="form-select" data-allow-clear="true">
                                <option value="">4C</option>
                                <option value="">4C Spider</option>
                                <option value="">Stelvio</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="carburant" class="form-label">Carburant</label>
                            <select name="carburant" id="carburant" class="form-select" data-allow-clear="true">
                                <option value="">Diesel</option>
                                <option value="">Essence</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="transmission" class="form-label">Transmission</label>
                            <select name="transmission" id="transmission" class="form-select" data-allow-clear="true">
                                <option value="">Automatique</option>
                                <option value="">Manuelle</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="puissance-fiscale" class="form-label">Puissance Fiscale</label>
                            <input type="number" class="form-control" id="puissance-fiscale" name="puissance-fiscale">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="finition" class="form-label">Finition</label>
                            <select name="finition" id="finition" class="form-select" data-allow-clear="true">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-0">
                            <label for="kilometrage" class="form-label">Kilomètrage</label>
                            <input type="number" class="form-control" id="kilometrage" name="kilometrage">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h6 class="">Informations sur l'Annonce</h6>
                    <hr class="mb-4 mt-0" style="">
                    <div class="row">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <select name="ville" id="ville" class="form-select" data-allow-clear="true">
                                    <option value="">Casablanca</option>
                                    <option value="">Rabat</option>
                                    <option value="">Marrakech</option>
                                    <option value="">Tanger</option>
                                    <option value="">Agadir</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="kilometrage" class="form-label">Origine</label>
                                <input type="number" class="form-control" id="kilometrage" name="kilometrage">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="kilometrage" class="form-label">Type</label>
                                <input type="number" class="form-control" id="kilometrage" name="kilometrage">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Première Main</label>
                                <select name="" id="" class="form-select" data-allow-clear="true">
                                    <option value="1">Oui</option>
                                    <option value="0">Non</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="prix" class="form-label">Prix</label>
                                <input type="number" class="form-control" id="prix" name="prix">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-0">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Sauvegarder Les Changements</button>
            <a href="{{url('/Voitures')}}" type="button" class="btn btn-label-secondary me-2">
                Quitter
            </a>
        </div>
    </div>
</div>
@endsection
