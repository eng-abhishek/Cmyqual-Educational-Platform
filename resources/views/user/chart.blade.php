<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var options = {
	animationEnabled: true,  
	title:{
		text: "Monthly Sales - 2017"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Sales (in USD)",
		prefix: "$"
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2017, 0), y: 50060 },
			{ x: new Date(2017, 1), y: 27980 },
			{ x: new Date(2017, 2), y: 33800 },
			{ x: new Date(2017, 3), y: 49400 },
			{ x: new Date(2017, 4), y: 40260 },
			{ x: new Date(2017, 5), y: 33900 },
			{ x: new Date(2017, 6), y: 48000 },
			{ x: new Date(2017, 7), y: 31500 },
			{ x: new Date(2017, 8), y: 32300 },
			{ x: new Date(2017, 9), y: 42000 },
			{ x: new Date(2017, 10), y: 52160 },
			{ x: new Date(2017, 11), y: 49400 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>