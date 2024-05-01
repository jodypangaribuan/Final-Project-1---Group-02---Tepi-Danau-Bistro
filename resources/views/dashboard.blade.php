{{-- Extends the layout for authenticated users --}}
@extends('layouts.user_type.auth')

{{-- Content section --}}
@section('content')

    {{-- Link to the CSS for the datepicker --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
          rel="stylesheet"/>

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

    {{--    <div class="pb-6">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-6">--}}
    {{--                <div--}}
    {{--                    class="bg-white dark:bg-zinc-800 rounded rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto mt-4">--}}
    {{--                    <img src="{{ asset('assets/img/cicak.jpg') }}" alt="Developer" class="w-full">--}}
    {{--                    <div class="p-3">--}}
    {{--                        <h2 class="text-lg font-bold text-zinc-800 dark:text-white">Jody</h2>--}}
    {{--                        <p class="text-sm text-zinc-600 dark:text-zinc-400">Project Manager</p>--}}
    {{--                        <p class="text-sm text-zinc-700 dark:text-zinc-300 mt-2">Baik, Rendah hati, Tidak Keras Kepala,--}}
    {{--                            Rajin Menabung, Suka Menolong dan Rajin ke Gereja</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-6">--}}
    {{--                <div--}}
    {{--                    class="bg-white dark:bg-zinc-800 rounded rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto mt-4">--}}
    {{--                    <img src="{{ asset('assets/img/cicak.jpg') }}" alt="Developer" class="w-full">--}}
    {{--                    <div class="p-3">--}}
    {{--                        <h2 class="text-lg font-bold text-zinc-800 dark:text-white">Jody</h2>--}}
    {{--                        <p class="text-sm text-zinc-600 dark:text-zinc-400">Project Manager</p>--}}
    {{--                        <p class="text-sm text-zinc-700 dark:text-zinc-300 mt-2">Baik, Rendah hati, Tidak Keras Kepala,--}}
    {{--                            Rajin Menabung, Suka Menolong dan Rajin ke Gereja</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-6">--}}
    {{--                <div--}}
    {{--                    class="bg-white dark:bg-zinc-800 rounded rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto mt-4">--}}
    {{--                    <img src="{{ asset('assets/img/cicak.jpg') }}" alt="Developer" class="w-full">--}}
    {{--                    <div class="p-3">--}}
    {{--                        <h2 class="text-lg font-bold text-zinc-800 dark:text-white">Jody</h2>--}}
    {{--                        <p class="text-sm text-zinc-600 dark:text-zinc-400">Project Manager</p>--}}
    {{--                        <p class="text-sm text-zinc-700 dark:text-zinc-300 mt-2">Baik, Rendah hati, Tidak Keras Kepala,--}}
    {{--                            Rajin Menabung, Suka Menolong dan Rajin ke Gereja</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-md-6">--}}
    {{--                <div--}}
    {{--                    class="bg-white dark:bg-zinc-800 rounded rounded-lg shadow-lg overflow-hidden max-w-sm mx-auto mt-4">--}}
    {{--                    <img src="{{ asset('assets/img/cicak.jpg') }}" alt="Developer" class="w-full">--}}
    {{--                    <div class="p-3">--}}
    {{--                        <h2 class="text-lg font-bold text-zinc-800 dark:text-white">Jody</h2>--}}
    {{--                        <p class="text-sm text-zinc-600 dark:text-zinc-400">Project Manager</p>--}}
    {{--                        <p class="text-sm text-zinc-700 dark:text-zinc-300 mt-2">Baik, Rendah hati, Tidak Keras Kepala,--}}
    {{--                            Rajin Menabung, Suka Menolong dan Rajin ke Gereja</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

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
