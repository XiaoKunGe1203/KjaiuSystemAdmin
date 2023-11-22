    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.min.js"></script>
<!--引入chart插件js-->
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	var $dashChartBarsCnt = jQuery('.js-chartjs-bars')[0].getContext('2d'),
		$dashChartLinesCnt = jQuery('.js-chartjs-lines')[0].getContext('2d');

	var $dashChartBarsData = {
		labels: ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
		datasets: [{
			label: '注册用户',
			borderWidth: 1,
			borderColor: 'rgba(0, 0, 0, 0)',
			backgroundColor: 'rgba(0, 123, 255,0.5)',
			hoverBackgroundColor: "rgba(0, 123, 255, 0.7)",
			hoverBorderColor: "rgba(0, 0, 0, 0)",
			data: [2500, 1500, 1200, 3200, 4800, 3500, 1500]
		}]
	};
	var $dashChartLinesData = {
		labels: ['2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013',
			'2014'
		],
		datasets: [{
			label: '交易资金',
			data: [20, 25, 40, 30, 45, 40, 55, 40, 48, 40, 42, 50],
			borderColor: '#007bff',
			backgroundColor: 'rgba(0, 123, 255, 0.175)',
			borderWidth: 1,
			fill: false,
			lineTension: 0.5
		}]
	};

	new Chart($dashChartBarsCnt, {
		type: 'bar',
		data: $dashChartBarsData
	});

	var myLineChart = new Chart($dashChartLinesCnt, {
		type: 'line',
		data: $dashChartLinesData,
	});
});
</script>
</body>
</html>
