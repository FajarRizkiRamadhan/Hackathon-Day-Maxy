var xValues = [
  "Januari",
  "Febuari",
  "Maret",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember",
];

var yValues = [4, 7, 2, 8, 6, 9, 1, 7, 3, 2, 9, 4];

//Line Chart
new Chart("chart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        backgroundColor: "rgba(255,0,0,1)",
        data: yValues,
        fill: false,
        lineTension: 0,
        borderColor: "rgba(255,0,0,0.2)",
      },
    ],
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: "Jumlah Blog Di buka (2023)",
    },
    scales: {
      yAxes: [
        {
          min: 6,
          max: 16,
        },
      ],
    },
  },
});