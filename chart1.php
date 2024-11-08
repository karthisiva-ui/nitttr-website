<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart.js Smooth Animation with Mild Colors</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    canvas {
      max-width: 600px;
      margin: 35px auto;
      display: block;
    }
  </style>
</head>
<body>
  <canvas id="myMildChart"></canvas>

  <script>
    const ctx = document.getElementById('myMildChart').getContext('2d');
    const myMildChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
          label: 'Mild Color Data',
          data: [10, 15, 12, 18, 14, 22],
          borderColor: 'rgba(153, 102, 255, 0.5)',
          backgroundColor: 'rgba(153, 102, 255, 0.2)',
          borderWidth: 2,
          fill: true,
        }]
      },
      options: {
        animation: {
          duration: 1000,
          easing: 'easeInOutQuad'
        },
        scales: {
          x: {
            title: {
              display: true,
              text: 'Months'
            }
          },
          y: {
            title: {
              display: true,
              text: 'Value'
            }
          }
        }
      }
    });
  </script>
</body>
</html>
