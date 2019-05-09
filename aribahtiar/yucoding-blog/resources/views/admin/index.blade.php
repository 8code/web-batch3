@extends('layouts.admin')

@section('title')
  Dashboard
@endsection

@section('content')
  Ini Dashboard
@endsection

@push('js-after')
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
@endpush