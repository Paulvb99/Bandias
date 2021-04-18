function duration_update (div_id,div_bar,seconds,totalSeconds,mode,countUp,showDiv,width) { 
	//alert(width);
	if (seconds < 1  && countUp != 'true') {
		if(document.getElementById(div_id) != null) document.getElementById(div_id).innerHTML = "0 seconds";
		//refresh ();
	}
	else {
		result = hum_read_duration(seconds,totalSeconds,mode,showDiv,width);
		if(document.getElementById(div_id) != null) document.getElementById(div_id).innerHTML = result[0];
		if(document.getElementById(div_bar) != null) document.getElementById(div_bar).innerHTML = result[1];
		if (countUp == 'true') {
			seconds += 1;
		}
		else {
			seconds -= 1;
		}
		
		setTimeout("duration_update('"+div_id+"','"+div_bar+"',"+seconds+","+totalSeconds+","+mode+",'"+countUp+"','"+showDiv+"','"+width+"')", 1000);
	}
}

function refresh() {
    window.location.reload( false );
}

// mode = 0	[normal]					 x hours x minutes x seconds
// mode = 1	[short]						 x hrs x mins x secs
// mode = 2	[shortest]					 x h x m x s
// mode = 3	[digits]					 HH:mm:ss
function hum_read_duration (seconds,totalSeconds,mode,showDiv,width) {
	// Prepare div.
	usePixels = width;
	height = 20;
	percentageFinished = ((totalSeconds-seconds) / totalSeconds)*usePixels;
	// Prepare calculator
	mode = (mode == null) ? 0 : mode;
	hours = Math.floor(seconds/3600);
	seconds -= hours*3600;
	minutes = Math.floor(seconds/60);
	seconds -= minutes*60;
	ret_val = "";
	if (hours == 1) {
		if (mode == 0) {
			ret_val = "1 hour ";
			if ((minutes == 0 && seconds > 0) || (seconds == 0 && minutes > 0)) {
				ret_val += "and ";
			}
		}
		else if (mode == 1) {
			ret_val = "1 hr ";
		}
		else if (mode == 2) {
			ret_val = "1 h ";
		}
		else {
			ret_val = "01:";
		}
	}
	else if (hours > 1) {
		if (mode == 0) {
			ret_val = hours + " hours ";
			if ((minutes == 0 && seconds > 0) || (seconds == 0 && minutes > 0)) {
				ret_val += "and ";
			}
		}
		else if (mode == 1) {
			ret_val = hours + " hrs ";
		}
		else if (mode == 2) {
			ret_val = hours + " h ";
		}
		else if (hours > 9) {
			ret_val = hours + ":";
		}
		else {
			ret_val = "0" + hours + ":";
		}
	}
	else if (mode == 3) {
		ret_val = "00:";
	}
	if (minutes == 1) {
		if (mode == 0) {
			ret_val += "1 minute ";
			if (seconds > 0) {
				ret_val += "and ";
			}
		}
		else if (mode == 1) {
			ret_val += "1 min ";
		}
		else if (mode == 2) {
			ret_val += "1 m ";
		}
		else {
			ret_val += "01:";
		}
	}
	else if (minutes > 1) {
		if (mode == 0) {
			ret_val += minutes + " minutes ";
			if (seconds > 0) {
				ret_val += "and ";
			}
		}
		else if (mode == 1) {
			ret_val += minutes + " mins ";
		}
		else if (mode == 2) {
			ret_val += minutes + " m ";
		}
		else if (minutes > 9) {
			ret_val += minutes + ":";
		}
		else {
			ret_val += "0" + minutes + ":";
		}
	}
	else if (mode == 3) {
		ret_val += "00:";
	}
	if (seconds == 1) {
		if (mode == 0) {
			ret_val += "1 second";
		}
		else if (mode == 1) {
			ret_val += "1 sec";
		}
		else if (mode == 2) {
			ret_val += "1 s";
		}
		else {
			ret_val += "01";
		}
	}
	else if (seconds > 1) {
		if (mode == 0) {
			ret_val += seconds + " seconds ";
		}
		else if (mode == 1) {
			ret_val += seconds + " secs";
		}
		else if (mode == 2) {
			ret_val += seconds + " s";
		}
		else if (seconds > 9) {
			ret_val += seconds;
		}
		else {
			ret_val += "0" + seconds;
		}
	}
	else if (mode == 3) {
		ret_val += "00";
	}
	if (showDiv == 'true') {
		ret_val_div = '<div style="float:left;margin-left:10px;background-color:green;height:'+height+'px;width:'+percentageFinished+'px;border-left:1px solid white;border-top:1px solid white;border-bottom:1px solid white;';
		if (percentageFinished == usePixels) {
			ret_val_div+='border-right:1px solid white';
		}
		ret_val_div+='"></div>';
		if (percentageFinished < usePixels) {
			ret_val_div+='<div style="float:left;height:'+height+'px;width:'+(usePixels-percentageFinished)+'px;border-right:1px solid white;border-top:1px solid white;border-bottom:1px solid white;"></div>';
		}
	}
	
	var result = new Array(ret_val,ret_val_div);
	
	return result;
}