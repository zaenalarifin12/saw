@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card w-25">
      <p class="px-5 py-6 ">
        Jumlah Restoran : {{ $jumlah_resto}}</p>
    </div>
    <canvas id="myChart"></canvas>
</div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      function getRandomRgb() {
      var num = Math.round(0xffffff * Math.random());
      var r = num >> 16;
      var g = num >> 8 & 255;
      var b = num & 255;
      return 'rgb(' + r + ', ' + g + ', ' + b + ')';
    }

        const labels = [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
          'August',
          'September',
          'Oktober',
          'November',
          'Desember',
        ];
      
        const dataResto = [];
        
        @if(!empty($restoran))
          @foreach($restoran as $key => $value)
            dataResto.push(
              {'label'            : '{{ $value["resto"] }}',
              'backgroundColor'  : '{{ $value["color"] }}',
              'borderColor'      : '{{ $value["color"] }}',
              'data'             : {{ json_encode([$value["bulan"]["january"], $value["bulan"]["february"], $value["bulan"]["maret"], $value["bulan"]["april"], $value["bulan"]["mei"], $value["bulan"]["juni"], $value["bulan"]["july"], $value["bulan"]["agustus"], $value["bulan"]["september"],$value["bulan"]["oktober"], $value["bulan"]["november"], $value["bulan"]["desember"]]) }} }
            );
          @endforeach
        @endif
        
        
        const data = {
          labels: labels,
          datasets: dataResto
        //   [
        //     {
        //       label: 'My First dataset',
        //       backgroundColor: 'rgb(255, 99, 132)',
        //       borderColor: 'rgb(255, 99, 132)',
        //       data: [0, 10, 5, 2, 20, 30, 45],
        //     }
        // ]
        };
      
        const config = {
          type: 'line',
          data: data,
          options: {}
        };
      </script>

<script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
  
@endsection