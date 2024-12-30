var chart = {
    series: [{
       name: "2024",
       data: [2.7, 2.2, 1.3, 2.5, 1, 2.5, 1.2, 1.2, 2.7, 1, 3.6, 2.1]
    }, {
       name: "2023",
       data: [-2.3, -1.9, -1, -2.1, -1.3, -2.2, -1.1, -2.3, -2.8, -1.1, -2.5, -1.5]
    }],
    chart: {
       toolbar: {
          show: !1
       },
       type: "bar",
       fontFamily: "inherit",
       foreColor: "#adb0bb",
       height: 292,
       stacked: !0,
       offsetX: -15
    },
    colors: ["var(--bs-primary)", "var(--bs-secondary)"],
    plotOptions: {
       bar: {
          horizontal: !1,
          barHeight: "80%",
          columnWidth: "12%",
          borderRadius: [3],
          borderRadiusApplication: "end",
          borderRadiusWhenStacked: "all"
       }
    },
    dataLabels: {
       enabled: !1
    },
    legend: {
       show: !1
    },
    grid: {
       show: !0,
       strokeDashArray: 3,
       padding: {
          top: 0,
          bottom: 0,
          right: 0
       },
       borderColor: "rgba(0,0,0,0.05)",
       xaxis: {
          lines: {
             show: !0
          }
       },
       yaxis: {
          lines: {
             show: !1
          }
       }
    },
    yaxis: {
       tickAmount: 4
    },
    xaxis: {
       axisBorder: {
          show: !1
       },
       axisTicks: {
          show: !1
       },
       categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"]
    }
 };
 (chart = new ApexCharts(document.querySelector("#reports-bar"), chart)).render();