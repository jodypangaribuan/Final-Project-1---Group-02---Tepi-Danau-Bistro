{{-- Extends the layout for authenticated users --}}
@extends('layouts.user_type.auth')

{{-- Content section --}}
@section('content')

{{-- Link to the CSS for the datepicker --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />

{{-- Main content of the page --}}
<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div id="container">
                    {{-- Dashboard title --}}
                    Dashboard Resto Tepi Danau Bistro
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End of content section --}}
@endsection

{{-- Pushes scripts to the stack named 'dashboard' --}}
@push('dashboard')

{{-- Highcharts scripts --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{-- jQuery and Bootstrap scripts --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- End of script stack --}}
@endpush