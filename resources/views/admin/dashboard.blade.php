@extends('layouts.admin')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
            <p>Selamat datang, {{ Auth::user()->name }}!</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
                <div class="info">
                    <a href="mahasiswa">
                        <p class="btn btn-light   mt-2">Manajemen Mahasiswa</p>
                    </a></br>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalMahasiswa"
                        class="btn btn-warning font-extrabold mt-1 mb-2 purecounter" data-purecounter-start="0"
                        data-purecounter-end="{{ $data_mahasiswa }}" data-purecounter-duration="1"
                        style="color: rgb(20, 0, 73)"></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small success coloured-icon"><i class="icon bi bi-award fs-1"></i>
                <div class="info">
                    <a href="lomba">
                        <p class="btn btn-light  mt-2">Manajemen Lomba</p>
                    </a></br>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalLomba"
                        class="btn btn-warning font-extrabold mt-1 mb-2 purecounter" data-purecounter-start="0"
                        data-purecounter-end="{{ $data_lomba }}" data-purecounter-duration="1"
                        style="color: rgb(20, 0, 73)"></button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="widget-small danger coloured-icon"><i class="icon bi bi-trophy fs-1"></i>
                <div class="info">
                    <a href="prestasi">
                        <p class="btn btn-light mt-2">Manajemen Prestasi</p>
                    </a></br>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modalPrestasi"
                        class="btn btn-warning font-extrabold mt-1 mb-2 purecounter" data-purecounter-start="0"
                        data-purecounter-end="{{ $data_prestasi }}" data-purecounter-duration="1"
                        style="color: rgb(20, 0, 73)"></button>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.dashboard.modalMahasiswa')
    @include('admin.includes.dashboard.modalLomba')
    @include('admin.includes.dashboard.modalPrestasi')


    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Grafik Data Lomba dan Prestasi</h3>
                <div class="ratio ratio-16x9">
                    <div id="grafikContainer"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Diagram Data Lomba dan Prestasi</h3>
                <div class="ratio ratio-16x9">
                    <div id="supportRequestChart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- Datatables --}}
    <script type="text/javascript" src=" {{ asset('admins/js/plugins/jquery.dataTables.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#tabelMahasiswa').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    <script type="text/javascript">
        $('#tabelLomba').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    <script type="text/javascript">
        $('#tabelPrestasi').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>

    {{-- Line Chart --}}
    <script type="text/javascript">
        // Mengambil data grafik dari variabel PHP
        var dataGrafik = @json($dataGrafik);

        // Inisialisasi grafik dengan DOM container
        var grafikContainer = document.getElementById('grafikContainer');
        var grafik = echarts.init(grafikContainer);

        // Set data ke dalam grafik
        grafik.setOption(dataGrafik);
    </script>

    {{-- Pie Chart --}}
    <script type="text/javascript">
        const supportRequests = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [{
                name: 'Jumlah Data Lomba dan Prestasi',
                type: 'pie',
                radius: '50%',
                color: ['#31bd7c', '#f03a4b'],
                data: [{
                        value: {{ $data_lomba }},
                        name: 'Lomba'
                    },
                    {
                        value: {{ $data_prestasi }},
                        name: 'Prestasi'
                    }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        };
        const supportChartElement = document.getElementById("supportRequestChart")
        const supportChart = echarts.init(supportChartElement, null, {
            renderer: 'svg'
        });
        supportChart.setOption(supportRequests);
        new ResizeObserver(() => supportChart.resize()).observe(supportChartElement);
    </script>

    {{-- Pure Counter --}}
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();
    </script>
@endpush
