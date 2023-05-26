@extends('pages.default')
<head>
    <script src="https://kit.fontawesome.com/a251bf8edf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
     <!-- Row Group CSS -->
     <link rel="stylesheet" href="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
</head>
@section('content')
<div class="container">
    <h4 class="py-1 my-4 text-dark">Les Voirures D'occasion au Maroc</h4>
   @include('components.cars-table')
</div>
<style>

</style>
@endsection
