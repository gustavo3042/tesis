<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta  http-equiv="X-UA-Compatible"  content="ie=edge">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"
    integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
  </head>
  <body>

    <div style="height: 400px; width:900px; margin:auto;">
<canvas id="barChart"></canvas>
    </div>

    <script>
      $(function (){
      var datas = <?php echo json_encode($datas); ?>;
      var barCanvas = $("#barChart");
      var barChart = new Chart(barCanvas,{
type: 'bar',
data:{

  labels: ['Ene','Feb','Maz','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
  datasets: [

{

label: 'Incremento de nuevos usuarios',
data: datas,
backgroundColor: ['green','green','green','green','green','green','green','green','green','green','green','green']

}


  ]


},

options:{
scales:{
yAxes: [{
ticks: {

  beginAtZero: true
}

}]

}

}

      })

      })
    </script>

  </body>
</html>
