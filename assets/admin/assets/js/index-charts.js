'use strict';

window.chartColors = {
	green: '#75c181',
	gray: '#a9b5c9',
	text: '#252930',
	border: '#e7e9ed'
};

/* Random number generator for demo purpose */
var randomDataPoint = function () { return Math.round(Math.random() * 10000) };

//Chart.js Line Chart Example 
if (typeof getchartdata != 'undefined') {
	var labelss = [];
	var datass = [];
	$.each(getchartdata['saleschart'], function (key, val) {
		labelss.push(key);
		datass.push(val.toFixed(2));
	});

	var lineChartConfig = {
		type: 'line',

		data: {
			labels: labelss,
			datasets: [{
				label: 'Sales',
				fill: false,
				backgroundColor: window.chartColors.green,
				borderColor: window.chartColors.green,
				data: datass
			}]
		},
		options: {
			responsive: true,
			aspectRatio: 1.5,

			legend: {
				display: true,
				position: 'bottom',
				align: 'end',
			},

			title: {
				display: true,
				text: 'Total Sales',

			},
			tooltips: {
				mode: 'index',
				intersect: false,
				titleMarginBottom: 10,
				bodySpacing: 10,
				xPadding: 16,
				yPadding: 16,
				borderColor: window.chartColors.border,
				borderWidth: 1,
				backgroundColor: '#fff',
				bodyFontColor: window.chartColors.text,
				titleFontColor: window.chartColors.text,

				callbacks: {
					label: function (tooltipItem, data) {
						if (parseInt(tooltipItem.value) >= 1000) {
							return "$" + tooltipItem.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
						} else {
							return '$' + tooltipItem.value;
						}
					}
				},

			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
					scaleLabel: {
						display: false,

					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},
					scaleLabel: {
						display: false,
					},
					ticks: {
						beginAtZero: true,
						userCallback: function (value, index, values) {
							return '$' + value.toLocaleString();
						}
					},
				}]
			}
		}
	};


	var labels = [];
	var datas = [];
	$.each(getchartdata['orderchart'], function (key, val) {
		labels.push(key);
		datas.push(val);
	});
	// Chart.js Bar Chart Example 
	var barChartConfig = {
		type: 'bar',
		data: {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			datasets: [{
				label: 'Orders',
				backgroundColor: window.chartColors.green,
				borderColor: window.chartColors.green,
				borderWidth: 1,
				maxBarThickness: 16,
				data: datas
			}]
		},
		options: {
			responsive: true,
			aspectRatio: 1.5,
			legend: {
				position: 'bottom',
				align: 'end',
			},
			title: {
				display: true,
				text: 'Total Orders'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
				titleMarginBottom: 10,
				bodySpacing: 10,
				xPadding: 16,
				yPadding: 16,
				borderColor: window.chartColors.border,
				borderWidth: 1,
				backgroundColor: '#fff',
				bodyFontColor: window.chartColors.text,
				titleFontColor: window.chartColors.text,

			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.border,
					},

				}],
				yAxes: [{
					display: true,
					gridLines: {
						drawBorder: false,
						color: window.chartColors.borders,
					},
					ticks: {
						beginAtZero: true,
						stepSize: 1,
					}
				}]
			}

		}
	}

	// Generate charts on load
	window.addEventListener('load', function () {

		var lineChart = document.getElementById('canvas-linechart').getContext('2d');
		window.myLine = new Chart(lineChart, lineChartConfig);

		var barChart = document.getElementById('canvas-barchart').getContext('2d');
		window.myBar = new Chart(barChart, barChartConfig);


	});

}