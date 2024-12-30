var options = {
    series: (series.monthDataSeries1.prices, [{
       name: "Income",
       data: [31, 40, 28, 51, 31, 40, 28, 51, 31, 40, 28, 51]
    }, {
       name: "Expenses",
       data: [0, 30, 10, 40, 30, 60, 50, 80, 70, 100, 90, 130]
    }]),
    chart: {
       height: 280,
       type: "area",
       toolbar: {
          show: !1
       },
       dropShadow: {
          enabled: !0,
          top: 12,
          left: 0,
          bottom: 0,
          right: 0,
          blur: 2,
          color: "rgba(132, 145, 183, 0.3)",
          opacity: .35
       }
    },
    // annotations: {
    //    xaxis: [{
    //       x: 312,
    //       strokeDashArray: 4,
    //       borderWidth: 1,
    //       borderColor: ["var(--bs-secondary)"]
    //    }],
    //    points: [{
    //       x: 550,
    //       y: 52,
    //       marker: {
    //          size: 6,
    //          fillColor: ["var(--bs-primary)"],
    //          strokeColor: ["var(--bs-card-bg)"],
    //          strokeWidth: 4,
    //          radius: 5
    //       },
    //       label: {
    //          borderWidth: 1,
    //          offsetY: -110,
    //          text: "98,509.87",
    //          style: {
    //             background: ["var(--bs-primary)"],
    //             fontSize: "14px",
    //             fontWeight: "600"
    //          }
    //       }
    //    }]
    // },
    colors: ["#22c55e", "rgba(106, 155, 155, 0.3)"],
    dataLabels: {
       enabled: !1
    },
    stroke: {
       show: !0,
       curve: "smooth",
       width: [3, 3],
       dashArray: [0, 0],
       lineCap: "round"
    },
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    yaxis: {
       labels: {
          offsetX: -12,
          offsetY: 0,
          formatter: function (e) {
             return "$" + e
          }
       }
    },
    grid: {
       strokeDashArray: 3,
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
    legend: {
       show: !1
    },
    fill: {
       type: "gradient",
       gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: !1,
          opacityFrom: .05,
          opacityTo: .05,
          stops: [45, 100]
       }
    }
 },
 chart = new ApexCharts(document.querySelector("#audience_overview"), options),
 options = (chart.render(), {
    series: [{
       name: "Visitors",
       data: [20, 38, 38, 72, 55, 63, 43]
    }],
    chart: {
       height: 232,
       type: "bar",
       toolbar: {
          show: !1
       }
    },
    fill: {
       type: "gradient",
       gradient: {
          shadeIntensity: 1,
          opacityFrom: .7,
          opacityTo: 1,
          colorStops: [{
             offset: 0,
             color: "rgba(106, 155, 155, 0.4)",
             opacity: 1
          }, {
             offset: 100,
             color: "rgba(106, 155, 155, 0.4)",
             opacity: 1
          }]
       }
    },
    plotOptions: {
       bar: {
          columnWidth: "55%",
          endingShape: "rounded",
          borderRadius: 5
       }
    },
    dataLabels: {
       enabled: !1
    },
    legend: {
       show: !1
    },
    yaxis: {
       labels: {
          show: !1
       }
    },
    grid: {
       strokeDashArray: 3,
       xaxis: {
          lines: {
             show: !1
          }
       },
       yaxis: {
          lines: {
             show: !1
          }
       }
    },
    xaxis: {
       type: "week",
       categories: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
       axisBorder: {
          show: !1,
          color: "rgba(119, 119, 142, 0.05)",
          offsetX: 0,
          offsetY: 0
       },
       axisTicks: {
          show: !1,
          borderType: "solid",
          color: "rgba(119, 119, 142, 0.05)",
          width: 6,
          offsetX: 0,
          offsetY: 0
       },
       labels: {
          rotate: -90,
          style: {
             colors: "rgb(107 ,114 ,128)",
             fontSize: "12px"
          }
       }
    }
 }),
 chart1 = new ApexCharts(document.querySelector("#visitors_report"), options),
 map_2 = (chart1.render(), new jsVectorMap({
    map: "world",
    selector: "#map_2",
    mapBgColor: "#F7F8F9",
    zoomOnScroll: !1,
    zoomButtons: !1,
    markers: [{
       name: "Greenland",
       coords: [72, -42]
    }, {
       name: "Canada",
       coords: [56.1304, -106.3468]
    }, {
       name: "Brazil",
       coords: [-14.235, -51.9253]
    }, {
       name: "Egypt",
       coords: [26.8206, 30.8025]
    }, {
       name: "Russia",
       coords: [61, 105]
    }, {
       name: "China",
       coords: [35.8617, 104.1954]
    }, {
       name: "United States",
       coords: [37.0902, -95.7129]
    }, {
       name: "Norway",
       coords: [60.472024, 8.468946]
    }, {
       name: "Ukraine",
       coords: [48.379433, 31.16558]
    }],
    lines: [{
       from: "Canada",
       to: "Egypt"
    }, {
       from: "Russia",
       to: "Egypt"
    }, {
       from: "Greenland",
       to: "Egypt"
    }, {
       from: "Brazil",
       to: "Egypt"
    }, {
       from: "United States",
       to: "Egypt"
    }, {
       from: "China",
       to: "Egypt"
    }, {
       from: "Norway",
       to: "Egypt"
    }, {
       from: "Ukraine",
       to: "Egypt"
    }],
    labels: {
       markers: {
          render: e => e.name
       }
    },
    lineStyle: {
       animation: !0,
       strokeDasharray: "6 3 6"
    },
    regionStyle: {
       initial: {
          fill: "rgba(169,183,197, 0.3)",
          fillOpacity: 1
       }
    },
    markerStyle: {
       initial: {
          r: 5,
          fill: "#22c55e",
          fillOpacity: 1,
          stroke: "#FFF",
          strokeWidth: 1,
          strokeOpacity: .65
       },
       hover: {
          stroke: "black",
          cursor: "pointer",
          strokeWidth: 2
       },
       selected: {
          fill: "blue"
       },
       selectedHover: {
          fill: "red"
       }
    }
 })),
 options = {
    series: [76],
    chart: {
       height: "325",
       type: "radialBar",
       offsetY: -20,
       sparkline: {
          enabled: !0
       }
    },
    plotOptions: {
       radialBar: {
          startAngle: -90,
          endAngle: 90,
          hollow: {
             size: "75%",
             position: "front"
          },
          track: {
             background: ["rgba(42, 118, 244, .18)"],
             strokeWidth: "80%",
             opacity: .5,
             margin: 5
          },
          dataLabels: {
             name: {
                show: !1
             },
             value: {
                offsetY: -2,
                fontSize: "20px"
             }
          }
       }
    },
    stroke: {
       lineCap: "butt"
    },
    colors: ["#95a0c5"],
    grid: {
       padding: {
          top: -10
       }
    },
    labels: ["Average Results"],
    responsive: [{
       breakpoint: 1150,
       options: {
          chart: {
             height: "150"
          }
       }
    }]
 };
(chart = new ApexCharts(document.querySelector("#traffic_sources"), options)).render();