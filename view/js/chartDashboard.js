

/*
    FIRST CHART
*/
  const labels = [
    '2016',
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Total de votre patrimoine en k/€',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 25, 40, 70, 130],
    }]
  };

const config = {
    type: 'line',
    data,
    options: {
        responsive: true,
        maintainAspectRatio: false,
    }
  };



/*
    SECONDE CHART  
*/
const dataPie = {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };

const configPie = {
    type: 'pie',
    data: dataPie,
    options: {
      responsive: true,
      maintainAspectRatio: false,
  }
  };