<script>
window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
                backgroundColor:"transparent",
				animationEnabled: true,
				title: {
					text: "Product Quantity Visualization"
				},
				axisY: {
					title: "Quantity",
					titleFontColor: "#4F81BC",
					lineColor: "#4F81BC",
					labelFontColor: "#4F81BC",
					tickColor: "#4F81BC"
				},
				toolTip: {
					shared: true
				},
				data: [{
					type: "column",
					name: "Total stock",
					legendText: "Total stock",
					showInLegend: false,
					dataPoints: [
						{ label: "JANUARY", y: 266.21, color: " #1a405b" },
						{ label: "FEBRUARY", y: 302.25 ,color:" #1a405b"},
						{ label: "MARCH", y: 157.20 ,color:" #1a405b"},
						{ label: "APRIL", y: 148.77,color:" #1a405b" },
						{ label: "MAY", y: 101.50 ,color:" #1a405b"},
						{ label: "JUNE", y: 97.8,color:" #1a405b" }
					]
				},
				{
					type: "column",
					name: "Stock returned",
					legendText: "Stock Returned",
					showInLegend: false,
					dataPoints: [
						{ label: "JANUARY", y: 110.46,color:"#f7a400" },
						{ label: "FEBRUARY", y: 42.27,color:"#f7a400" },
						{ label: "MARCH", y: 123.99,color:"#f7a400" },
						{ label: "APRIL", y: 14.45,color:"#f7a400" },
						{ label: "MAY", y: 238.92,color:"#f7a400" },
						{ label: "JUNE", y: 138.1,color:"#f7a400" }
					]
				},
				{
					type: "column",
					name: "Stock Failed",
					legendText: "Stock Failed",
					showInLegend: false,
					dataPoints: [
						{ label: "JANUARY", y: 125.47 ,color:"#be1204"},
						{ label: "FEBRUARY", y: 133.20,color:"#be1204"},
						{ label: "MARCH", y: 243.41 ,color:"#be1204"},
						{ label: "APRIL", y: 233.44 ,color:"#be1204"},
						{ label: "MAY", y: 254.77 ,color:"#be1204"},
						{ label: "JUNE", y: 131.55 ,color:"#be1204"}
					]
				}]
			});
			chart.render();
		}
</script>
