(function($) {
	"use strict";


	new Chart(document.getElementById("btc-chart"), {
	  type: 'line',
	  data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
		datasets: [{ 
			data: [20, 18, 35, 60, 38, 40, 70],
			label: "Africa",
			backgroundColor: "#fff",
			borderColor: "#F6BB42",
			borderWidth: 1.5,
			strokeColor: "#F6BB42",
			pointRadius: 0
		  }
		]
	  },
	 options: {
      responsive: !0,
      maintainAspectRatio: !1,
      datasetStrokeWidth: 3,
      pointDotStrokeWidth: 4,
      tooltipFillColor: "rgba(255, 145, 73,0.8)",
      legend: {
        display: !1
      },
      hover: {
        mode: "label"
      },
      scales: {
        xAxes: [{
          display: !1
        }],
        yAxes: [{
          display: !1,
          ticks: {
            min: 0,
            max: 100
          }
        }]
      },
      title: {
        display: !1,
        fontColor: "#FFF",
        fullWidth: !1,
        fontSize: 30,
        text: "52%"
      }
    },
	});
	
	new Chart(document.getElementById("etc-chart"), {
	  type: 'line',
	  data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
		datasets: [{ 
			data: [30, 18, 75, 40, 38, 80, 70],
			label: "Africa",
			backgroundColor: "#fff",
			borderColor: "#967ADC",
			borderWidth: 1.5,
			strokeColor: "#967ADC",
			pointRadius: 0
		  }
		]
	  },
	 options: {
      responsive: !0,
      maintainAspectRatio: !1,
      datasetStrokeWidth: 3,
      pointDotStrokeWidth: 4,
      tooltipFillColor: "rgba(255, 145, 73,0.8)",
      legend: {
        display: !1
      },
      hover: {
        mode: "label"
      },
      scales: {
        xAxes: [{
          display: !1
        }],
        yAxes: [{
          display: !1,
          ticks: {
            min: 0,
            max: 100
          }
        }]
      },
      title: {
        display: !1,
        fontColor: "#FFF",
        fullWidth: !1,
        fontSize: 30,
        text: "52%"
      }
    },
	});
	
	new Chart(document.getElementById("ltc-chart"), {
	  type: 'line',
	  data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
		datasets: [{ 
			data: [70, 28, 35, 65, 38, 40, 25],
			label: "Africa",
			backgroundColor: "#fff",
			borderColor: "#909fa7",
			borderWidth: 1.5,
			strokeColor: "#909fa7",
			pointRadius: 0
		  }
		]
	  },
	 options: {
      responsive: !0,
      maintainAspectRatio: !1,
      datasetStrokeWidth: 3,
      pointDotStrokeWidth: 4,
      tooltipFillColor: "rgba(255, 145, 73,0.8)",
      legend: {
        display: !1
      },
      hover: {
        mode: "label"
      },
      scales: {
        xAxes: [{
          display: !1
        }],
        yAxes: [{
          display: !1,
          ticks: {
            min: 0,
            max: 100
          }
        }]
      },
      title: {
        display: !1,
        fontColor: "#FFF",
        fullWidth: !1,
        fontSize: 30,
        text: "52%"
      }
    },
	});
	
	
    $(function () {
		"use strict";

		$("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#f4516c',
            fillColor: ''
        });
		
		$("#sparkline2").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
            fillColor: ''
        });
		
		$("#sparkline3").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
            fillColor: ''
        });
		
        $("#sparkline4").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
           fillColor: ''
        });
		
		$("#sparkline5").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#f4516c',
            fillColor: ''
        });
		
		$("#sparkline6").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#f4516c',
            fillColor: ''
        });
		
		$("#sparkline7").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
            fillColor: ''
        });
		
		$("#sparkline8").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
            fillColor: ''
        });
		
		$("#sparkline9").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#37BC9B',
            fillColor: ''
        });
		
		$("#sparkline10").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
            type: 'line',
            lineColor: '#f4516c',
            fillColor: ''
        });


    });



	
})(jQuery);