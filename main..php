
<!DOCTYPE>
<html>
<head>
<title>Solar Basic Computations</title>
<link href="css/stylesheets.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="script/bootstrap.min.js"></script>
  <script src="script/plotly-latest.min.js"></script>
  <script src="script/jquery-3.1.7.min.js"></script>
</head>  
  <script>
function message() {
var s = document.getElementById('item1');
var item1 = s.options[s.selectedIndex].value;
var sys_size = document.getElementById('system_size').value;
var month=12;
var price_perkwh = parseInt(document.getElementById('price_perkwh').value);

var no_panels= sys_size/0.26;//This is for the executing the command for no. of panels
document.getElementById('no_panels_output').innerHTML=no_panels;
//This is the formula in getting the approximated system cost
var approx_ss_constant=110000;
var approx_system_cost=sys_size*approx_ss_constant;
document.getElementById('approx_ss_output').innerHTML=approx_system_cost;

//this is the constant value for co2_reduction
var co2_const=0.5045;
var ct_divisor=14;
var litres_const=0.227;

if (item1 == 1) {
    var ncr_janu=108.91*sys_size;
	var ncr_jan = ncr_janu.toFixed(2);
	var ncr_febr=107.28*sys_size;
	var ncr_feb = ncr_febr.toFixed(2);
	var ncr_marc=141.82*sys_size;
	var ncr_mar = ncr_marc.toFixed(2);
	var ncr_apri=142.24*sys_size;
	var ncr_apr = ncr_apri.toFixed(2);
	var ncr_mayy=119.36*sys_size;
	var ncr_may = ncr_mayy.toFixed(2);
	var ncr_june=121.86*sys_size;
	var ncr_jun = ncr_june.toFixed(2);
	var ncr_july=111.25*sys_size;
	var ncr_jul = ncr_july.toFixed(2);
	var ncr_augu=98.65*sys_size;
	var ncr_aug = ncr_augu.toFixed(2);
	var ncr_sept=110.62*sys_size;
	var ncr_sep = ncr_sept.toFixed(2);
	var ncr_octo=106.67*sys_size;
	var ncr_oct = ncr_octo.toFixed(2);
	var ncr_nove=107.46*sys_size;
	var ncr_nov = ncr_nove.toFixed(2);
	var ncr_dece=108.12*sys_size;
	var ncr_dec = ncr_dece.toFixed(2);
	document.getElementById('result1').innerHTML=ncr_jan;
	document.getElementById('result2').innerHTML=ncr_feb;
	document.getElementById('result3').innerHTML=ncr_mar;
	document.getElementById('result4').innerHTML=ncr_apr;
	document.getElementById('result5').innerHTML=ncr_may;
	document.getElementById('result6').innerHTML=ncr_jun;
	document.getElementById('result7').innerHTML=ncr_jul;
	document.getElementById('result8').innerHTML=ncr_aug;
	document.getElementById('result9').innerHTML=ncr_sep;
	document.getElementById('result10').innerHTML=ncr_oct;
	document.getElementById('result11').innerHTML=ncr_nov;
	document.getElementById('result12').innerHTML=ncr_dec;
	var ncr_total = ncr_janu+ncr_febr+ncr_marc+ncr_apri+ncr_mayy+ncr_june+ncr_july+ncr_augu+ncr_sept+ncr_octo+ncr_nove+ncr_dece;
	var monthly_aver = ncr_total/month; 	
	var monthly_ave = monthly_aver.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_ave;
	//This is for the Monthly
	var avoided_cost=price_perkwh*monthly_aver;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
	//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*ncr_total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*ncr_total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	
	
	var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [ncr_jan, ncr_feb, ncr_mar, ncr_apr, ncr_may, ncr_jun, ncr_jul, ncr_aug, ncr_sep, ncr_oct, ncr_nov, ncr_dec],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);

}
else if (item1 == 2) {
    var reg1_jan=134.42*sys_size;
	var reg1_january=reg1_jan.toFixed(2);
	var reg1_feb=120.81*sys_size;
	var reg1_february=reg1_feb.toFixed(2);
	var reg1_mar=161.56*sys_size;
	var reg1_march=reg1_mar.toFixed(2);
	var reg1_apr=145.7*sys_size;
	var reg1_april=reg1_apr.toFixed(2);
	var reg1_may=116.8*sys_size;
	var reg1_May=reg1_may.toFixed(2);
	var reg1_jun=116.41*sys_size;
	var reg1_june=reg1_jun.toFixed(2);
	var reg1_jul=114.59*sys_size;
	var reg1_july=reg1_jul.toFixed(2);
	var reg1_aug=104.68*sys_size;
	var reg1_august=reg1_aug.toFixed(2);
	var reg1_sep=113.15*sys_size;
	var reg1_september=reg1_sep.toFixed(2);
	var reg1_oct=119.36*sys_size;
	var reg1_october=reg1_oct.toFixed(2);
	var reg1_nov=122*sys_size;
	var reg1_november=reg1_nov.toFixed(2);
	var reg1_dec=129.83*sys_size;
	var reg1_december=reg1_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg1_january;
	document.getElementById('result2').innerHTML=reg1_february;
	document.getElementById('result3').innerHTML=reg1_march;
	document.getElementById('result4').innerHTML=reg1_april;
	document.getElementById('result5').innerHTML=reg1_May;
	document.getElementById('result6').innerHTML=reg1_june;
	document.getElementById('result7').innerHTML=reg1_july;
	document.getElementById('result8').innerHTML=reg1_august;
	document.getElementById('result9').innerHTML=reg1_september;
	document.getElementById('result10').innerHTML=reg1_october;
	document.getElementById('result11').innerHTML=reg1_november;
	document.getElementById('result12').innerHTML=reg1_december;
	var total = reg1_jan+reg1_feb+reg1_mar+reg1_apr+reg1_may+reg1_jun+reg1_jul+reg1_aug+reg1_sep+reg1_oct+reg1_nov+reg1_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
		
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg1_january, reg1_february, reg1_march, reg1_april, reg1_May, reg1_june, reg1_july, reg1_august, reg1_september, reg1_october, reg1_november, reg1_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==3) {
    var car_jan=120.42*sys_size;
	var car_january=car_jan.toFixed(2);
	var car_feb=109.38*sys_size;
	var car_february=car_feb.toFixed(2);
	var car_mar=148.83*sys_size;
	var car_march=car_mar.toFixed(2);
	var car_apr=131.23*sys_size;
	var car_april=car_apr.toFixed(2);
	var car_may=118.18*sys_size;
	var car_May=car_may.toFixed(2);
	var car_jun=117.08*sys_size;
	var car_june=car_jun.toFixed(2);
	var car_jul=113.27*sys_size;
	var car_july=car_jul.toFixed(2);
	var car_aug=97.98*sys_size;
	var car_august=car_aug.toFixed(2);
	var car_sep=109.52*sys_size;
	var car_september=car_sep.toFixed(2);
	var car_oct=108.82*sys_size;
	var car_october=car_oct.toFixed(2);
	var car_nov=115.48*sys_size;
	var car_november=car_nov.toFixed(2);
	var car_dec=119.07*sys_size;
	var car_december=car_dec.toFixed(2);
	document.getElementById('result1').innerHTML=car_january;
	document.getElementById('result2').innerHTML=car_february;
	document.getElementById('result3').innerHTML=car_march;
	document.getElementById('result4').innerHTML=car_april;
	document.getElementById('result5').innerHTML=car_May;
	document.getElementById('result6').innerHTML=car_june;
	document.getElementById('result7').innerHTML=car_july;
	document.getElementById('result8').innerHTML=car_august;
	document.getElementById('result9').innerHTML=car_september;
	document.getElementById('result10').innerHTML=car_october;
	document.getElementById('result11').innerHTML=car_november;
	document.getElementById('result12').innerHTML=car_december;
	var total = car_jan+car_feb+car_mar+car_apr+car_may+car_jun+car_jul+car_aug+car_sep+car_oct+car_nov+car_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	
			var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [car_january, car_february, car_march, car_april, car_May, car_june, car_july, car_august, car_september, car_october, car_november, car_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==4) {
    var reg2_jan=89.87*sys_size;
	var reg2_january=reg2_jan.toFixed(2);
	var reg2_feb=87.17*sys_size;
	var reg2_february=reg2_feb.toFixed(2);
	var reg2_mar=126.81*sys_size;
	var reg2_march=reg2_mar.toFixed(2);
	var reg2_apr=132.91*sys_size;
	var reg2_april=reg2_apr.toFixed(2);
	var reg2_may=122.12*sys_size;
	var reg2_May=reg2_may.toFixed(2);
	var reg2_jun=126.14*sys_size;
	var reg2_june=reg2_jun.toFixed(2);
	var reg2_jul=120.97*sys_size;
	var reg2_july=reg2_jul.toFixed(2);
	var reg2_aug=110.69*sys_size;
	var reg2_august=reg2_aug.toFixed(2);
	var reg2_sep=110.23*sys_size;
	var reg2_september=reg2_sep.toFixed(2);
	var reg2_oct=98.86*sys_size;
	var reg2_october=reg2_oct.toFixed(2);
	var reg2_nov=92.74*sys_size;
	var reg2_november=reg2_nov.toFixed(2);
	var reg2_dec=83.74*sys_size;
	var reg2_december=reg2_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg2_january;
	document.getElementById('result2').innerHTML=reg2_february;
	document.getElementById('result3').innerHTML=reg2_march;
	document.getElementById('result4').innerHTML=reg2_april;
	document.getElementById('result5').innerHTML=reg2_May;
	document.getElementById('result6').innerHTML=reg2_june;
	document.getElementById('result7').innerHTML=reg2_july;
	document.getElementById('result8').innerHTML=reg2_august;
	document.getElementById('result9').innerHTML=reg2_september;
	document.getElementById('result10').innerHTML=reg2_october;
	document.getElementById('result11').innerHTML=reg2_november;
	document.getElementById('result12').innerHTML=reg2_december;
	var total = reg2_jan+reg2_feb+reg2_mar+reg2_apr+reg2_may+reg2_jun+reg2_jul+reg2_aug+reg2_sep+reg2_oct+reg2_nov+reg2_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg2_january, reg2_february, reg2_march, reg2_april, reg2_May, reg2_june, reg2_july, reg2_august, reg2_september, reg2_october, reg2_november, reg2_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==5) {
    var reg3_jan=106.05*sys_size;
	var reg3_january=reg3_jan.toFixed(2);
	var reg3_feb=101.79*sys_size;
	var reg3_february=reg3_feb.toFixed(2);
	var reg3_mar=138.5*sys_size;
	var reg3_march=reg3_mar.toFixed(2);
	var reg3_apr=138.03*sys_size;
	var reg3_april=reg3_apr.toFixed(2);
	var reg3_may=117.68*sys_size;
	var reg3_May=reg3_may.toFixed(2);
	var reg3_jun=112.99*sys_size;
	var reg3_june=reg3_jun.toFixed(2);
	var reg3_jul=106.11*sys_size;
	var reg3_july=reg3_jul.toFixed(2);
	var reg3_aug=98.06*sys_size;
	var reg3_august=reg3_aug.toFixed(2);
	var reg3_sep=103.06*sys_size;
	var reg3_september=reg3_sep.toFixed(2);
	var reg3_oct=102.5*sys_size;
	var reg3_october=reg3_oct.toFixed(2);
	var reg3_nov=102.8*sys_size;
	var reg3_november=reg3_nov.toFixed(2);
	var reg3_dec=104.3*sys_size;
	var reg3_december=reg3_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg3_january;
	document.getElementById('result2').innerHTML=reg3_february;
	document.getElementById('result3').innerHTML=reg3_march;
	document.getElementById('result4').innerHTML=reg3_april;
	document.getElementById('result5').innerHTML=reg3_May;
	document.getElementById('result6').innerHTML=reg3_june;
	document.getElementById('result7').innerHTML=reg3_july;
	document.getElementById('result8').innerHTML=reg3_august;
	document.getElementById('result9').innerHTML=reg3_september;
	document.getElementById('result10').innerHTML=reg3_october;
	document.getElementById('result11').innerHTML=reg3_november;
	document.getElementById('result12').innerHTML=reg3_december;
	var total = reg3_jan+reg3_feb+reg3_mar+reg3_apr+reg3_may+reg3_jun+reg3_jul+reg3_aug+reg3_sep+reg3_oct+reg3_nov+reg3_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg3_january, reg3_february, reg3_march, reg3_april, reg3_May, reg3_june, reg3_july, reg3_august, reg3_september, reg3_october, reg3_november, reg3_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==6) {
    var reg4_jan=107.48*sys_size;
	var reg4_january=reg4_jan.toFixed(2);
	var reg4_feb=106.9*sys_size;
	var reg4_february=reg4_feb.toFixed(2);
	var reg4_mar=139.94*sys_size;
	var reg4_march=reg4_mar.toFixed(2);
	var reg4_apr=139.46*sys_size;
	var reg4_april=reg4_apr.toFixed(2);
	var reg4_may=115.31*sys_size;
	var reg4_May=reg4_may.toFixed(2);
	var reg4_jun=114.35*sys_size;
	var reg4_june=reg4_jun.toFixed(2);
	var reg4_jul=106.56*sys_size;
	var reg4_july=reg4_jul.toFixed(2);
	var reg4_aug=97.36*sys_size;
	var reg4_august=reg4_aug.toFixed(2);
	var reg4_sep=105.5*sys_size;
	var reg4_september=reg4_sep.toFixed(2);
	var reg4_oct=103.61*sys_size;
	var reg4_october=reg4_oct.toFixed(2);
	var reg4_nov=104.9*sys_size;
	var reg4_november=reg4_nov.toFixed(2);
	var reg4_dec=105.57*sys_size;
	var reg4_december=reg4_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg4_january;
	document.getElementById('result2').innerHTML=reg4_february;
	document.getElementById('result3').innerHTML=reg4_march;
	document.getElementById('result4').innerHTML=reg4_april;
	document.getElementById('result5').innerHTML=reg4_May;
	document.getElementById('result6').innerHTML=reg4_june;
	document.getElementById('result7').innerHTML=reg4_july;
	document.getElementById('result8').innerHTML=reg4_august;
	document.getElementById('result9').innerHTML=reg4_september;
	document.getElementById('result10').innerHTML=reg4_october;
	document.getElementById('result11').innerHTML=reg4_november;
	document.getElementById('result12').innerHTML=reg4_december;
	var total = reg4_jan+reg4_feb+reg4_mar+reg4_apr+reg4_may+reg4_jun+reg4_jul+reg4_aug+reg4_sep+reg4_oct+reg4_nov+reg4_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
	var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg4_january, reg4_february, reg4_march, reg4_april, reg4_May, reg4_june, reg4_july, reg4_august, reg4_september, reg4_october, reg4_november, reg4_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==7) {
    var reg4b_jan=107.31*sys_size;
	var reg4b_january=reg4b_jan.toFixed(2);
	var reg4b_feb=105.52*sys_size;
	var reg4b_february=reg4b_feb.toFixed(2);
	var reg4b_mar=137.95*sys_size;
	var reg4b_march=reg4b_mar.toFixed(2);
	var reg4b_apr=137.81*sys_size;
	var reg4b_april=reg4b_apr.toFixed(2);
	var reg4b_may=117.52*sys_size;
	var reg4b_May=reg4b_may.toFixed(2);
	var reg4b_jun=111.94*sys_size;
	var reg4b_june=reg4b_jun.toFixed(2);
	var reg4b_jul=104.72*sys_size;
	var reg4b_july=reg4b_jul.toFixed(2);
	var reg4b_aug=95.91*sys_size;
	var reg4b_august=reg4b_aug.toFixed(2);
	var reg4b_sep=103.66*sys_size;
	var reg4b_september=reg4b_sep.toFixed(2);
	var reg4b_oct=103.03*sys_size;
	var reg4b_october=reg4b_oct.toFixed(2);
	var reg4b_nov=104.38*sys_size;
	var reg4b_november=reg4b_nov.toFixed(2);
	var reg4b_dec=105.67*sys_size;
	var reg4b_december=reg4b_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg4b_january;
	document.getElementById('result2').innerHTML=reg4b_february;
	document.getElementById('result3').innerHTML=reg4b_march;
	document.getElementById('result4').innerHTML=reg4b_april;
	document.getElementById('result5').innerHTML=reg4b_May;
	document.getElementById('result6').innerHTML=reg4b_june;
	document.getElementById('result7').innerHTML=reg4b_july;
	document.getElementById('result8').innerHTML=reg4b_august;
	document.getElementById('result9').innerHTML=reg4b_september;
	document.getElementById('result10').innerHTML=reg4b_october;
	document.getElementById('result11').innerHTML=reg4b_november;
	document.getElementById('result12').innerHTML=reg4b_december;
	var total = reg4b_jan+reg4b_feb+reg4b_mar+reg4b_apr+reg4b_may+reg4b_jun+reg4b_jul+reg4b_aug+reg4b_sep+reg4b_oct+reg4b_nov+reg4b_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg4b_january, reg4b_february, reg4b_march, reg4b_april, reg4b_May, reg4b_june, reg4b_july, reg4b_august, reg4b_september, reg4b_october, reg4b_november, reg4b_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==8) {
    var reg5_jan=102.01*sys_size;
	var reg5_january=reg5_jan.toFixed(2);
	var reg5_feb=103.1*sys_size;
	var reg5_february=reg5_feb.toFixed(2);
	var reg5_mar=127.98*sys_size;
	var reg5_march=reg5_mar.toFixed(2);
	var reg5_apr=134.89*sys_size;
	var reg5_april=reg5_apr.toFixed(2);
	var reg5_may=120.7*sys_size;
	var reg5_May=reg5_may.toFixed(2);
	var reg5_jun=111.27*sys_size;
	var reg5_june=reg5_jun.toFixed(2);
	var reg5_jul=107.42*sys_size;
	var reg5_july=reg5_jul.toFixed(2);
	var reg5_aug=108.09*sys_size;
	var reg5_august=reg5_aug.toFixed(2);
	var reg5_sep=106.91*sys_size;
	var reg5_september=reg5_sep.toFixed(2);
	var reg5_oct=103.14*sys_size;
	var reg5_october=reg5_oct.toFixed(2);
	var reg5_nov=89.48*sys_size;
	var reg5_november=reg5_nov.toFixed(2);
	var reg5_dec=89.08*sys_size;
	var reg5_december=reg5_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg5_january;
	document.getElementById('result2').innerHTML=reg5_february;
	document.getElementById('result3').innerHTML=reg5_march;
	document.getElementById('result4').innerHTML=reg5_april;
	document.getElementById('result5').innerHTML=reg5_May;
	document.getElementById('result6').innerHTML=reg5_june;
	document.getElementById('result7').innerHTML=reg5_july;
	document.getElementById('result8').innerHTML=reg5_august;
	document.getElementById('result9').innerHTML=reg5_september;
	document.getElementById('result10').innerHTML=reg5_october;
	document.getElementById('result11').innerHTML=reg5_november;
	document.getElementById('result12').innerHTML=reg5_december;
	var total = reg5_jan+reg5_feb+reg5_mar+reg5_apr+reg5_may+reg5_jun+reg5_jul+reg5_aug+reg5_sep+reg5_oct+reg5_nov+reg5_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg5_january, reg5_february, reg5_march, reg5_april, reg5_May, reg5_june, reg5_july, reg5_august, reg5_september, reg5_october, reg5_november, reg5_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==9) {
    var reg6_jan=111.42*sys_size;
	var reg6_january=reg6_jan.toFixed(2);
	var reg6_feb=105.65*sys_size;
	var reg6_february=reg6_feb.toFixed(2);
	var reg6_mar=139.87*sys_size;
	var reg6_march=reg6_mar.toFixed(2);
	var reg6_apr=135.82*sys_size;
	var reg6_april=reg6_apr.toFixed(2);
	var reg6_may=107.6*sys_size;
	var reg6_May=reg6_may.toFixed(2);
	var reg6_jun=107.32*sys_size;
	var reg6_june=reg6_jun.toFixed(2);
	var reg6_jul=107.45*sys_size;
	var reg6_july=reg6_jul.toFixed(2);
	var reg6_aug=117.16*sys_size;
	var reg6_august=reg6_aug.toFixed(2);
	var reg6_sep=114.41*sys_size;
	var reg6_september=reg6_sep.toFixed(2);
	var reg6_oct=117.05*sys_size;
	var reg6_october=reg6_oct.toFixed(2);
	var reg6_nov=116.2*sys_size;
	var reg6_november=reg6_nov.toFixed(2);
	var reg6_dec=110.9*sys_size;
	var reg6_december=reg6_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg6_january;
	document.getElementById('result2').innerHTML=reg6_february;
	document.getElementById('result3').innerHTML=reg6_march;
	document.getElementById('result4').innerHTML=reg6_april;
	document.getElementById('result5').innerHTML=reg6_May;
	document.getElementById('result6').innerHTML=reg6_june;
	document.getElementById('result7').innerHTML=reg6_july;
	document.getElementById('result8').innerHTML=reg6_august;
	document.getElementById('result9').innerHTML=reg6_september;
	document.getElementById('result10').innerHTML=reg6_october;
	document.getElementById('result11').innerHTML=reg6_november;
	document.getElementById('result12').innerHTML=reg6_december;
	var total = reg6_jan+reg6_feb+reg6_mar+reg6_apr+reg6_may+reg6_jun+reg6_jul+reg6_aug+reg6_sep+reg6_oct+reg6_nov+reg6_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg6_january, reg6_february, reg6_march, reg6_april, reg6_May, reg6_june, reg6_july, reg6_august, reg6_september, reg6_october, reg6_november, reg6_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==10) {
    var reg7_jan=105.22*sys_size;
	var reg7_january=reg7_jan.toFixed(2);
	var reg7_feb=109.21*sys_size;
	var reg7_february=reg7_feb.toFixed(2);
	var reg7_mar=141.1*sys_size;
	var reg7_march=reg7_mar.toFixed(2);
	var reg7_apr=130.24*sys_size;
	var reg7_april=reg7_apr.toFixed(2);
	var reg7_may=112.65*sys_size;
	var reg7_May=reg7_may.toFixed(2);
	var reg7_jun=106.23*sys_size;
	var reg7_june=reg7_jun.toFixed(2);
	var reg7_jul=111.83*sys_size;
	var reg7_july=reg7_jul.toFixed(2);
	var reg7_aug=113.26*sys_size;
	var reg7_august=reg7_aug.toFixed(2);
	var reg7_sep=112.24*sys_size;
	var reg7_september=reg7_sep.toFixed(2);
	var reg7_oct=114.14*sys_size;
	var reg7_october=reg7_oct.toFixed(2);
	var reg7_nov=112.97*sys_size;
	var reg7_november=reg7_nov.toFixed(2);
	var reg7_dec=105.14*sys_size;
	var reg7_december=reg7_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg7_january;
	document.getElementById('result2').innerHTML=reg7_february;
	document.getElementById('result3').innerHTML=reg7_march;
	document.getElementById('result4').innerHTML=reg7_april;
	document.getElementById('result5').innerHTML=reg7_May;
	document.getElementById('result6').innerHTML=reg7_june;
	document.getElementById('result7').innerHTML=reg7_july;
	document.getElementById('result8').innerHTML=reg7_august;
	document.getElementById('result9').innerHTML=reg7_september;
	document.getElementById('result10').innerHTML=reg7_october;
	document.getElementById('result11').innerHTML=reg7_november;
	document.getElementById('result12').innerHTML=reg7_december;
	var total = reg7_jan+reg7_feb+reg7_mar+reg7_apr+reg7_may+reg7_jun+reg7_jul+reg7_aug+reg7_sep+reg7_oct+reg7_nov+reg7_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg7_january, reg7_february, reg7_march, reg7_april, reg7_May, reg7_june, reg7_july, reg7_august, reg7_september, reg7_october, reg7_november, reg7_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==11) {
    var reg8_jan=92.12*sys_size;
	var reg8_january=reg8_jan.toFixed(2);
	var reg8_feb=89.85*sys_size;
	var reg8_february=reg8_feb.toFixed(2);
	var reg8_mar=121.1*sys_size;
	var reg8_march=reg8_mar.toFixed(2);
	var reg8_apr=113.72*sys_size;
	var reg8_april=reg8_apr.toFixed(2);
	var reg8_may=104.06*sys_size;
	var reg8_May=reg8_may.toFixed(2);
	var reg8_jun=107.16*sys_size;
	var reg8_june=reg8_jun.toFixed(2);
	var reg8_jul=105.85*sys_size;
	var reg8_july=reg8_jul.toFixed(2);
	var reg8_aug=108.47*sys_size;
	var reg8_august=reg8_aug.toFixed(2);
	var reg8_sep=110.26*sys_size;
	var reg8_september=reg8_sep.toFixed(2);
	var reg8_oct=108.91*sys_size;
	var reg8_october=reg8_oct.toFixed(2);
	var reg8_nov=92.77*sys_size;
	var reg8_november=reg8_nov.toFixed(2);
	var reg8_dec=97.85*sys_size;
	var reg8_december=reg8_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg8_january;
	document.getElementById('result2').innerHTML=reg8_february;
	document.getElementById('result3').innerHTML=reg8_march;
	document.getElementById('result4').innerHTML=reg8_april;
	document.getElementById('result5').innerHTML=reg8_May;
	document.getElementById('result6').innerHTML=reg8_june;
	document.getElementById('result7').innerHTML=reg8_july;
	document.getElementById('result8').innerHTML=reg8_august;
	document.getElementById('result9').innerHTML=reg8_september;
	document.getElementById('result10').innerHTML=reg8_october;
	document.getElementById('result11').innerHTML=reg8_november;
	document.getElementById('result12').innerHTML=reg8_december;
	var total = reg8_jan+reg8_feb+reg8_mar+reg8_apr+reg8_may+reg8_jun+reg8_jul+reg8_aug+reg8_sep+reg8_oct+reg8_nov+reg8_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg8_january, reg8_february, reg8_march, reg8_april, reg8_May, reg8_june, reg8_july, reg8_august, reg8_september, reg8_october, reg8_november, reg8_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==12) {
    var reg9_jan=115.8*sys_size;
	var reg9_january=reg9_jan.toFixed(2);
	var reg9_feb=107.02*sys_size;
	var reg9_february=reg9_feb.toFixed(2);
	var reg9_mar=144.51*sys_size;
	var reg9_march=reg9_mar.toFixed(2);
	var reg9_apr=127.14*sys_size;
	var reg9_april=reg9_apr.toFixed(2);
	var reg9_may=106.12*sys_size;
	var reg9_May=reg9_may.toFixed(2);
	var reg9_jun=104.03*sys_size;
	var reg9_june=reg9_jun.toFixed(2);
	var reg9_jul=111.83*sys_size;
	var reg9_july=reg9_jul.toFixed(2);
	var reg9_aug=116.32*sys_size;
	var reg9_august=reg9_aug.toFixed(2);
	var reg9_sep=116.74*sys_size;
	var reg9_september=reg9_sep.toFixed(2);
	var reg9_oct=117.2*sys_size;
	var reg9_october=reg9_oct.toFixed(2);
	var reg9_nov=119.19*sys_size;
	var reg9_november=reg9_nov.toFixed(2);
	var reg9_dec=124.24*sys_size;
	var reg9_december=reg9_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg9_january;
	document.getElementById('result2').innerHTML=reg9_february;
	document.getElementById('result3').innerHTML=reg9_march;
	document.getElementById('result4').innerHTML=reg9_april;
	document.getElementById('result5').innerHTML=reg9_May;
	document.getElementById('result6').innerHTML=reg9_june;
	document.getElementById('result7').innerHTML=reg9_july;
	document.getElementById('result8').innerHTML=reg9_august;
	document.getElementById('result9').innerHTML=reg9_september;
	document.getElementById('result10').innerHTML=reg9_october;
	document.getElementById('result11').innerHTML=reg9_november;
	document.getElementById('result12').innerHTML=reg9_december;
	var total = reg9_jan+reg9_feb+reg9_mar+reg9_apr+reg9_may+reg9_jun+reg9_jul+reg9_aug+reg9_sep+reg9_oct+reg9_nov+reg9_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg9_january, reg9_february, reg9_march, reg9_april, reg9_May, reg9_june, reg9_july, reg9_august, reg9_september, reg9_october, reg9_november, reg9_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==13) {
    var reg10_jan=99.22*sys_size;
	var reg10_january=reg10_jan.toFixed(2);
	var reg10_feb=96.82*sys_size;
	var reg10_february=reg10_feb.toFixed(2);
	var reg10_mar=138.34*sys_size;
	var reg10_march=reg10_mar.toFixed(2);
	var reg10_apr=124.16*sys_size;
	var reg10_april=reg10_apr.toFixed(2);
	var reg10_may=109.28*sys_size;
	var reg10_May=reg10_may.toFixed(2);
	var reg10_jun=104.56*sys_size;
	var reg10_june=reg10_jun.toFixed(2);
	var reg10_jul=115.03*sys_size;
	var reg10_july=reg10_jul.toFixed(2);
	var reg10_aug=117.14*sys_size;
	var reg10_august=reg10_aug.toFixed(2);
	var reg10_sep=115.69*sys_size;
	var reg10_september=reg10_sep.toFixed(2);
	var reg10_oct=115.43*sys_size;
	var reg10_october=reg10_oct.toFixed(2);
	var reg10_nov=112.3*sys_size;
	var reg10_november=reg10_nov.toFixed(2);
	var reg10_dec=115.88*sys_size;
	var reg10_december=reg10_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg10_january;
	document.getElementById('result2').innerHTML=reg10_february;
	document.getElementById('result3').innerHTML=reg10_march;
	document.getElementById('result4').innerHTML=reg10_april;
	document.getElementById('result5').innerHTML=reg10_May;
	document.getElementById('result6').innerHTML=reg10_june;
	document.getElementById('result7').innerHTML=reg10_july;
	document.getElementById('result8').innerHTML=reg10_august;
	document.getElementById('result9').innerHTML=reg10_september;
	document.getElementById('result10').innerHTML=reg10_october;
	document.getElementById('result11').innerHTML=reg10_november;
	document.getElementById('result12').innerHTML=reg10_december;
	var total = reg10_jan+reg10_feb+reg10_mar+reg10_apr+reg10_may+reg10_jun+reg10_jul+reg10_aug+reg10_sep+reg10_oct+reg10_nov+reg10_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg10_january, reg10_february, reg10_march, reg10_april, reg10_May, reg10_june, reg10_july, reg10_august, reg10_september, reg10_october, reg10_november, reg10_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==14) {
    var reg11_jan=102.48*sys_size;
	var reg11_january=reg11_jan.toFixed(2);
	var reg11_feb=92.55*sys_size;
	var reg11_february=reg11_feb.toFixed(2);
	var reg11_mar=125.79*sys_size;
	var reg11_march=reg11_mar.toFixed(2);
	var reg11_apr=126.09*sys_size;
	var reg11_april=reg11_apr.toFixed(2);
	var reg11_may=107.26*sys_size;
	var reg11_May=reg11_may.toFixed(2);
	var reg11_jun=104.78*sys_size;
	var reg11_june=reg11_jun.toFixed(2);
	var reg11_jul=121.11*sys_size;
	var reg11_july=reg11_jul.toFixed(2);
	var reg11_aug=110.54*sys_size;
	var reg11_august=reg11_aug.toFixed(2);
	var reg11_sep=119.74*sys_size;
	var reg11_september=reg11_sep.toFixed(2);
	var reg11_oct=124.96*sys_size;
	var reg11_october=reg11_oct.toFixed(2);
	var reg11_nov=103.89*sys_size;
	var reg11_november=reg11_nov.toFixed(2);
	var reg11_dec=106.36*sys_size;
	var reg11_december=reg11_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg11_january;
	document.getElementById('result2').innerHTML=reg11_february;
	document.getElementById('result3').innerHTML=reg11_march;
	document.getElementById('result4').innerHTML=reg11_april;
	document.getElementById('result5').innerHTML=reg11_May;
	document.getElementById('result6').innerHTML=reg11_june;
	document.getElementById('result7').innerHTML=reg11_july;
	document.getElementById('result8').innerHTML=reg11_august;
	document.getElementById('result9').innerHTML=reg11_september;
	document.getElementById('result10').innerHTML=reg11_october;
	document.getElementById('result11').innerHTML=reg11_november;
	document.getElementById('result12').innerHTML=reg11_december;
	var total = reg11_jan+reg11_feb+reg11_mar+reg11_apr+reg11_may+reg11_jun+reg11_jul+reg11_aug+reg11_sep+reg11_oct+reg11_nov+reg11_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg11_january, reg11_february, reg11_march, reg11_april, reg11_May, reg11_june, reg11_july, reg11_august, reg11_september, reg11_october, reg11_november, reg11_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==15) {
    var reg12_jan=108.72*sys_size;
	var reg12_january=reg12_jan.toFixed(2);
	var reg12_feb=98.46*sys_size;
	var reg12_february=reg12_feb.toFixed(2);
	var reg12_mar=130.58*sys_size;
	var reg12_march=reg12_mar.toFixed(2);
	var reg12_apr=124.32*sys_size;
	var reg12_april=reg12_apr.toFixed(2);
	var reg12_may=107.44*sys_size;
	var reg12_May=reg12_may.toFixed(2);
	var reg12_jun=104.78*sys_size;
	var reg12_june=reg12_jun.toFixed(2);
	var reg12_jul=119.5*sys_size;
	var reg12_july=reg12_jul.toFixed(2);
	var reg12_aug=109.49*sys_size;
	var reg12_august=reg12_aug.toFixed(2);
	var reg12_sep=121.65*sys_size;
	var reg12_september=reg12_sep.toFixed(2);
	var reg12_oct=125.02*sys_size;
	var reg12_october=reg12_oct.toFixed(2);
	var reg12_nov=110.37*sys_size;
	var reg12_november=reg12_nov.toFixed(2);
	var reg12_dec=112.94*sys_size;
	var reg12_december=reg12_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg12_january;
	document.getElementById('result2').innerHTML=reg12_february;
	document.getElementById('result3').innerHTML=reg12_march;
	document.getElementById('result4').innerHTML=reg12_april;
	document.getElementById('result5').innerHTML=reg12_May;
	document.getElementById('result6').innerHTML=reg12_june;
	document.getElementById('result7').innerHTML=reg12_july;
	document.getElementById('result8').innerHTML=reg12_august;
	document.getElementById('result9').innerHTML=reg12_september;
	document.getElementById('result10').innerHTML=reg12_october;
	document.getElementById('result11').innerHTML=reg12_november;
	document.getElementById('result12').innerHTML=reg12_december;
	var total = reg12_jan+reg12_feb+reg12_mar+reg12_apr+reg12_may+reg12_jun+reg12_jul+reg12_aug+reg12_sep+reg12_oct+reg12_nov+reg12_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg12_january, reg12_february, reg12_march, reg12_april, reg12_May, reg12_june, reg12_july, reg12_august, reg12_september, reg12_october, reg12_november, reg12_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==16) {
    var reg13_jan=84.66*sys_size;
	var reg13_january=reg13_jan.toFixed(2);
	var reg13_feb=85.25*sys_size;
	var reg13_february=reg13_feb.toFixed(2);
	var reg13_mar=112.93*sys_size;
	var reg13_march=reg13_mar.toFixed(2);
	var reg13_apr=103.3*sys_size;
	var reg13_april=reg13_apr.toFixed(2);
	var reg13_may=100.19*sys_size;
	var reg13_May=reg13_may.toFixed(2);
	var reg13_jun=97.92*sys_size;
	var reg13_june=reg13_jun.toFixed(2);
	var reg13_jul=105.37*sys_size;
	var reg13_july=reg13_jul.toFixed(2);
	var reg13_aug=100.72*sys_size;
	var reg13_august=reg13_aug.toFixed(2);
	var reg13_sep=105.66*sys_size;
	var reg13_september=reg13_sep.toFixed(2);
	var reg13_oct=102.78*sys_size;
	var reg13_october=reg13_oct.toFixed(2);
	var reg13_nov=93.32*sys_size;
	var reg13_november=reg13_nov.toFixed(2);
	var reg13_dec=95.22*sys_size;
	var reg13_december=reg13_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg13_january;
	document.getElementById('result2').innerHTML=reg13_february;
	document.getElementById('result3').innerHTML=reg13_march;
	document.getElementById('result4').innerHTML=reg13_april;
	document.getElementById('result5').innerHTML=reg13_May;
	document.getElementById('result6').innerHTML=reg13_june;
	document.getElementById('result7').innerHTML=reg13_july;
	document.getElementById('result8').innerHTML=reg13_august;
	document.getElementById('result9').innerHTML=reg13_september;
	document.getElementById('result10').innerHTML=reg13_october;
	document.getElementById('result11').innerHTML=reg13_november;
	document.getElementById('result12').innerHTML=reg13_december;
	var total = reg13_jan+reg13_feb+reg13_mar+reg13_apr+reg13_may+reg13_jun+reg13_jul+reg13_aug+reg13_sep+reg13_oct+reg13_nov+reg13_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg13_january, reg13_february, reg13_march, reg13_april, reg13_May, reg13_june, reg13_july, reg13_august, reg13_september, reg13_october, reg13_november, reg13_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==17) {
    var reg14_jan=106.31*sys_size;
	var reg14_january=reg14_jan.toFixed(2);
	var reg14_feb=99.36*sys_size;
	var reg14_february=reg14_feb.toFixed(2);
	var reg14_mar=136.49*sys_size;
	var reg14_march=reg14_mar.toFixed(2);
	var reg14_apr=126.92*sys_size;
	var reg14_april=reg14_apr.toFixed(2);
	var reg14_may=110.59*sys_size;
	var reg14_May=reg14_may.toFixed(2);
	var reg14_jun=107.22*sys_size;
	var reg14_june=reg14_jun.toFixed(2);
	var reg14_jul=114.89*sys_size;
	var reg14_july=reg14_jul.toFixed(2);
	var reg14_aug=119.42*sys_size;
	var reg14_august=reg14_aug.toFixed(2);
	var reg14_sep=115.83*sys_size;
	var reg14_september=reg14_sep.toFixed(2);
	var reg14_oct=118.73*sys_size;
	var reg14_october=reg14_oct.toFixed(2);
	var reg14_nov=111.52*sys_size;
	var reg14_november=reg14_nov.toFixed(2);
	var reg14_dec=109.18*sys_size;
	var reg14_december=reg14_dec.toFixed(2);
	document.getElementById('result1').innerHTML=reg14_january;
	document.getElementById('result2').innerHTML=reg14_february;
	document.getElementById('result3').innerHTML=reg14_march;
	document.getElementById('result4').innerHTML=reg14_april;
	document.getElementById('result5').innerHTML=reg14_May;
	document.getElementById('result6').innerHTML=reg14_june;
	document.getElementById('result7').innerHTML=reg14_july;
	document.getElementById('result8').innerHTML=reg14_august;
	document.getElementById('result9').innerHTML=reg14_september;
	document.getElementById('result10').innerHTML=reg14_october;
	document.getElementById('result11').innerHTML=reg14_november;
	document.getElementById('result12').innerHTML=reg14_december;
	var total = reg14_jan+reg14_feb+reg14_mar+reg14_apr+reg14_may+reg14_jun+reg14_jul+reg14_aug+reg14_sep+reg14_oct+reg14_nov+reg14_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [reg14_january, reg14_february, reg14_march, reg14_april, reg14_May, reg14_june, reg14_july, reg14_august, reg14_september, reg14_october, reg14_november, reg14_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
else if (item1 ==18) {
    var armm_jan=117.43*sys_size;
	var armm_january=armm_jan.toFixed(2);
	var armm_feb=109.87*sys_size;
	var armm_february=armm_feb.toFixed(2);
	var armm_mar=141.69*sys_size;
	var armm_march=armm_mar.toFixed(2);
	var armm_apr=136.66*sys_size;
	var armm_april=armm_apr.toFixed(2);
	var armm_may=110.7*sys_size;
	var armm_May=armm_may.toFixed(2);
	var armm_jun=110.34*sys_size;
	var armm_june=armm_jun.toFixed(2);
	var armm_jul=120.74*sys_size;
	var armm_july=armm_jul.toFixed(2);
	var armm_aug=121.59*sys_size;
	var armm_august=armm_aug.toFixed(2);
	var armm_sep=122.27*sys_size;
	var armm_september=armm_sep.toFixed(2);
	var armm_oct=125.06*sys_size;
	var armm_october=armm_oct.toFixed(2);
	var armm_nov=120.82*sys_size;
	var armm_november=armm_nov.toFixed(2);
	var armm_dec=125.18*sys_size;
	var armm_december=armm_dec.toFixed(2);
	document.getElementById('result1').innerHTML=armm_january;
	document.getElementById('result2').innerHTML=armm_february;
	document.getElementById('result3').innerHTML=armm_march;
	document.getElementById('result4').innerHTML=armm_april;
	document.getElementById('result5').innerHTML=armm_May;
	document.getElementById('result6').innerHTML=armm_june;
	document.getElementById('result7').innerHTML=armm_july;
	document.getElementById('result8').innerHTML=armm_august;
	document.getElementById('result9').innerHTML=armm_september;
	document.getElementById('result10').innerHTML=armm_october;
	document.getElementById('result11').innerHTML=armm_november;
	document.getElementById('result12').innerHTML=armm_december;
	var total = armm_jan+armm_feb+armm_mar+armm_apr+armm_may+armm_jun+armm_jul+armm_aug+armm_sep+armm_oct+armm_nov+armm_dec;
	var monthly_ave = total/month; 	
	var monthly_average = monthly_ave.toFixed(2);
	document.getElementById('result_total').innerHTML=monthly_average;
	var avoided_cost=price_perkwh*monthly_ave;
	var monthly_avoided_cost=avoided_cost.toFixed(2);
	document.getElementById('avoided_cost_monthly').innerHTML=monthly_avoided_cost;
	
		//This is for the Corporate Social Responsibility
	var co2_reduct=co2_const*total;
	var sumtotal_reduction=co2_reduct.toFixed(0);
	document.getElementById('total_reduction').innerHTML=sumtotal_reduction;
	
	//This is for cedar trees computation
	var cedar_trees=co2_reduct/ct_divisor;
	var cedar_trees_output=cedar_trees.toFixed(0);
	document.getElementById('cedar_trees_display').innerHTML=cedar_trees_output;
	
	//This is for the Litres
	var oil_consumption=litres_const*total;
	var oil_consumption_total=oil_consumption.toFixed(0);
	document.getElementById('oil_consumption_display').innerHTML=oil_consumption_total;
	
		var trace1 = {
  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
  y: [armm_january, armm_february, armm_march, armm_april, armm_May, armm_june, armm_july, armm_august, armm_september, armm_october, armm_november, armm_december],
  type: 'bar',
  name: 'Primary Product',
  marker: {
    color: 'rgb(49,130,189)',
    opacity: 0.7,
  }
};

var data = [trace1];

var layout = {
  title: 'Energy Production Graph Monthly',
  xaxis: {
    tickangle: -45
  },
  barmode: 'group'
};

Plotly.newPlot('myDiv', data, layout);
}
//This is for the ROI
var approx_roi_compute = approx_system_cost / monthly_avoided_cost / month;
var approx_roi_total = approx_roi_compute.toFixed(2);
document.getElementById('approx_roi_output').innerHTML=approx_roi_total;


}

</SCRIPT>

<div class="logo">
<img src="images/logo.png">
</div>
<div class = "menu-wrap">
<nav class="menu">
	<ul>
		<li><a href="index.php">Solar Calculator</a></li>
		<li><a href="#">Home</a></li>
		<li><a href="#">Product</a></li>
		<li><a href="#">Sample Project</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Downloads</a></li>
		<li><a href="#">Contact Us</a></li>
		<li><a href="#">Feedback</a></li>
	</ul>
</nav>
</div>
<div class="container">
<form>
<div class="row">
<h1 id="title">Basic Grid Tie System Computation</h1>
<div class="col-sm-5">

<div class="con">
<h3>I. Basic System Information</h3>

<div class="type">
	<div class="left">1. Type of Installation : <span class="r-side">Rooftop</span></div>
</div>
<br>
<div>2. Desired System Size:
		<div class="r-side">
			<select Id="system_size" onChange="message()">
			  <option selected value="1.04">1.04</option>
				<option value="1.82">1.82</option>
				<option value="3.38">3.38</option>
				<option value="5.72">5.72</option>
				<option value="11.44">11.44</option>
			</select> kWh
		</div>

		<div>
		<br>
			No. of Panels <span class="r-side"><span id="no_panels_output">4</span> <span>of 260 W</span></span> 
			</div>
			<br>
		<div>
			PV Model:<span class="r-side">RJI60</span>
			</div>
			
			</div>
			<br>
<div>Note
<ol>
<li>1kWp requires 10m<sup>2</sup> of the area</li>
<li>Grid Tie System </li>
<li>Other System Requirements, please contact Us</li>
</ol>
</div>
<br>
			<!--Thi starts for Region Division-->
<div>
3. Region <select id="item1" name="Item 1" onChange="message()">
      <option>Choose Region</option>
      <option value="1">NCR</option>
      <option value="2">Region 1</option>
      <option value="3">CAR</option>
	  <option value="4">Region II</option>
	  <option value="5">Region III</option>
	  <option value="6">Region IV-A</option>
	  <option value="7">MIMAROPA</option>
	  <option value="8">Region V</option>
	  <option value="9">Region VI</option>
	  <option value="10">Region VII</option>
	  <option value="11">Region VIII</option>
	  <option value="12">Region IX</option>
	  <option value="13">Region X</option>
	  <option value="14">Region XI</option>
	  <option value="15">Region XII</option>
	  <option value="16">Region XIII</option>
	  <option value="17">Region XIV</option>
	  <option value="18">ARMM</option>
    </select>
	</div><!-- Region Division ends here-->
	<!--This starts the No. 4-->
<!--Thi starts the Energy Production Division-->
	<div>4. Energy Production <br>
	Average Monthly: <div class="r-side"><span id="result_total">0</span>kWh</div>
	</div>
	
</div>
	<div class="con"><h3>II. Approximate Avoided Cost (Zero Export)</h3>
	<div>1. Price Per kWh (from your Electric utility)<br>
	<input class="perkwh" type ="text" id="price_perkwh" value="10" onChange="message()"/><span> php/Kwh</span>
	</div>
	<br>
	<span>2. Avoided Cost Monthly </span><div class="r-side"><span id="avoided_cost_monthly">0</span>PHP</div>
	</div>
	<div class="con">
	<h3>III. Approximate Project Cost (On-Grid)</h3><br>
	<span>1. System Cost</span> <div class="r-side"><span id="approx_ss_output">0</span>PHP/kWh</div>

	<div><br>Note</div>
	<p>Basic Equipments, Installation and Commisioning Only</p>
	</div>
	<div class="con">
	<h3>IV. Approximate Return of Investment</h3><br>
	<span>1. Approximate ROI</span> <div class="r-side"><span id="approx_roi_output">0</span>Years</div>
	<div><br>Note</div>
	<p>Basic Equipments, Installation and Commisioning Only</p>
	</div>


</div>
	

	<!--This starts the right column-->
	<div class="col-sm-7">
	

	<center>
	<div class="row"id="monthly_data">
	<div class="graph">
	<h2>Data for Graph</h2>
	<h3>Energy Production Graph Monthly</h3>
	
	  <div id="myDiv" style="width: 630px; height: 420px;"><!-- Plotly chart will be drawn inside this DIV --></div>
	<!--This starts the viewing of Data-->
	<div>
	<span id="result1" hidden></span>
	<span id="result2" hidden></span>
	<span id="result3" hidden></span>
	<span id="result4" hidden></span>
	<span id="result5" hidden></span>
	<span id="result6" hidden></span>
	<span id="result7" hidden></span>
	<span id="result8" hidden></span>
	<span id="result9" hidden></span>
	<span id="result10" hidden></span>
	<span id="result11" hidden></span>
	<span id="result12" hidden></span>
	</div>
	</div>
	</center>
	<div class="l-con">
	<div> <h3>IV. Corporate Social Responsibility</h3>
	<span>1. Reduction of CO<sub>2</sub></span> <div class="m-side"><span id="total_reduction">0</span>kg</div>
	<div class="ct"><span id="cedar_trees_display">0</span> Cedar trees</div>
	<div class="oc"><br><span>2. Reduction of Oil Consumption</span><div class="oc-side"><span id="oil_consumption_display">0</span> Litres</div></div>
	</div>
	</div>
	<div class="gen-note">
		<h3>General Notes</h3>
		<ol>
			<li>Above computation is based in our previous simple project, diferent site
   			conditions/requirements will give different result.</li>
			<li>Energy production is based on PVSyst software.</li>
 			<li>The system cost will vary depend on the requirement of the customers, design,
    		location and utility interconnection.</li>
		</ol>
	</div>
	</form>
	</div>
	<div class="footer">
	<footer>
		<!--<span>2017©www.japansolar-ph.com</span>-->
	</footer>
	</div>
	</body>
	</html>