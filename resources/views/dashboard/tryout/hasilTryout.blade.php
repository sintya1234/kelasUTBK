@extends('layouts.main')

@section('container')
    <div class="row">
        <h1 class="h1 mt-4 text-center">Ini hasil tryoutmu!</h1>
        <div class="mt-4">
            <h3 class="h3 ms-5 fw-bold">Nilai</h3>
            <div class="border-2 rounded-corners px-5 py-4 border-black mx-3">
                @for ($i = 0; $i < 2; $i++)
                    <div class="my-4 row align-items-center">
                        <div class="col d-flex">
                            <h2 class="h5 fw-bold">Try Out {{ $i + 1 }}</h2>
                            <p class="ms-3">Telah dikerjakan pada 12/12/2012</p>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="bg-warning rounded-corners p-3 px-5">
                                Skor: 100
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <h3 class="h3 ms-5 fw-bold align-items-center mt-4">
                Grafik 
                <i class="bi bi-bar-chart-line-fill"></i>
            </h3>
            <div class="border-2 rounded-corners px-5 py-4 border-black mx-3 mb-3">
                <canvas id="myChart" width="400" height="150"></canvas>
                <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const xLabels = ["Tryout 1", "Tryout 2", "Tryout 3", "Tryout 4", 
                                    "Tryout 5", "Tryout 6", "Tryout 7", 
                                    "Tryout 8", "Tryout 9", "Tryout 10"]
                const yLabels = [100, 90]

                const myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: xLabels,
                        datasets: [{
                            label: 'Nilai Tryout',
                            data: yLabels,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>

@endsection