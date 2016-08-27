function Loading() {
	var timestamp = Date.parse(new Date());
	var name = "load"+timestamp;
	var start = function (msg) {
		var style_loading = "position:absolute;top:40%;bottom:60%;left:0;right:0;margin:auto;width:115px;height:90px;background-color:rgba(0,0,0,0.5);border-radius:10px;";
		var style_pimg = "width:30px;height:auto;margin:15px auto 0;";
		var style_pimg_img = "width:100%;height:100%;";
		var style_pmsg = "font-size: 20px;color:#1d353b;font-family:\"microsoft yahei,微软雅黑\";text-align:center;width:100%;font-weight:800'"
		var load_tag =
				"<div style='"+style_loading+"' id='"
				+name+
				"'><p style='"+style_pimg+"'><img style='"+style_pimg_img+"' src='/td/loading.gif'></p><p style='"+style_pmsg+"'>"
				+msg+
				"</p></div>";
		$('input').prop('disabled', true);
		$("body").append(load_tag);
	};

	var cancel = function () {
		$("#"+name).remove();
		$('input').prop('disabled', false);
	};

	return {"start":start, "cancel":cancel};
}

function test(msg) {
	var loading = Loading();

	loading.start(msg);
	setTimeout(function(){
		loading.cancel();
	}, 2000)
}
