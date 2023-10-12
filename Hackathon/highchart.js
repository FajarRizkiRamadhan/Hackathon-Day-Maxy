//Pie Chart
Highcharts.chart("chart1", {
  chart: {
    type: "pie",
  },
  title: {
    text: "Detail Lokasi, 2023",
    align: "left",
  },
  accessibility: {
    announceNewData: {
      enabled: true,
    },
    point: {
      valueSuffix: "%",
    },
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: "{point.name}: {point.y:1f}%",
      },
    },
  },
  tooltip: {
    headerFormat: '<span style="font-size: 11px">{series.name}</span><br>',
    pointFormat:
      '<span style="color: {point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br>',
  },
  series: [
    {
      name: "Lokasi",
      data: [
        {
          name: "Clapham",
          y: 55.04,
          drilldown: "Clapham",
        },
        {
          name: "Kalingga",
          y: 9.47,
          drilldown: "Kalingga",
        },
        {
          name: "Yufurni",
          y: 9.32,
          drilldown: "Yufurni",
        },
        {
          name: "The 101",
          y: 8.15,
          drilldown: "The 101",
        },
        {
          name: "Spasi",
          y: 11.02,
          drilldown: "Spasi",
        },
      ],
    },
  ],
  drilldown: {
    series: [
      {
        name: "Clapham",
        id: "Clapham",
        data: [
          ["Januari", 32.41],
          ["Febuari", 15.91],
          ["Maret", 0.47],
          ["April", 0.61],
          ["Mei", 0.69],
          ["Juni", 0.35],
          ["Juli", 0.27],
          ["Agustus", 0.11],
          ["September", 0.12],
          ["Oktober", 0.09],
          ["November", 0.32],
          ["Desember", 0.16],
        ],
      },
      {
        name: "Kalingga",
        id: "Kalingga",
        data: [
          ["Januari", 1.01],
          ["Febuari", 20.21],
          ["Maret", 22.95],
          ["April", 4.95],
          ["Mei", 24.85],
          ["Juni", 6.45],
          ["Juli", 11.75],
          ["Agustus", 1.31],
          ["September", 1.64],
        ],
      },
      {
        name: "Yufurni",
        id: "Yufurni",
        data: [
          ["Januari", 73.14],
          ["Febuari", 26.72],
          ["Maret", 0.14],
        ],
      },
      {
        name: "The 101",
        id: "The 101",
        data: [
          ["Januari", 55.54],
          ["Maret", 44.21],
          ["April", 0.14],
          ["Mei", 0.29],
          ["Juni", 0.2],
          ["Juli", 0.19],
        ],
      },
      {
        name: "Spasi",
        id: "Spasi",
        data: [
          ["Januari", 25.72],
          ["Maret", 73.65],
          ["April", 0.63],
          ["Mei", 0.12],
        ],
      },
    ],
  },
});
