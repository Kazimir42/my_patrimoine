

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

  labels: [],
  datasets: [{
    label: 'Bourse',
    data: [],
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


getNamePortefeuille();
getValeurTotalPortefeuille();




//function qui recup les nom du portefeuille et les ajoute dans le chart pie 
function getNamePortefeuille(){
  let nom = document.getElementsByClassName('nomPortefeuille');
  for (let index = 0; index < nom.length; index++) {
     unNom = nom[index].textContent;
     dataPie.labels[index] = unNom;
  }
}


//function qui recup les valeurs du portefeuille et les ajoute dans le chart pie 
function getValeurTotalPortefeuille(){
  let value = document.getElementsByClassName('totalPortefeuille');
  for (let index = 0; index < value.length; index++) {
    uneValue = value[index].textContent;
    dataPie.datasets[0].data[index] = uneValue;
  }
}

