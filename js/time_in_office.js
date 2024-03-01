function time_in_office(this_div, hour, minute)
{
	if (hour < 0) {hour = 23};
	if (hour > 23) {hour = 0};
	h = hour;
	m = minute;
	if (hour < 10) {h = "0" + hour};
	if (minute < 10) {m = "0" + minute};
	document.getElementById(this_div).innerHTML=h + ':' + m;
	minute = minute + 1;
	if (minute > 59) {minute = 0; hour = hour + 1};
	var t = setTimeout(function(){ time_in_office(this_div, hour, minute)}, 60000); // ошибка too much recursion вылечена обертыванием
}
