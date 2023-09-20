﻿//play点击事件
function play() {
	var rul = document.getElementById("url").value; //获取input链接
	if(rul == "") {
		alert("飞哥解析：请输入视频链接");
	} else {
		var jxApi = document.getElementById("jk"); //获取选择按钮
		var jxurl = document.getElementById("jk").selectedIndex; //获取选中的
		var jkv = jxApi.options[jxurl].value; //获取选择接口链接
		var paly = document.getElementById("palybox"); //获取播放窗口位置
		paly.src = jkv + rul; //接口赋值

		//ajax数据传递

		var tittext = document.getElementById("video-title");
		//1,create ajax核心对象：
		var xhr = getxhr();
		//2,以post的方式与服务器建立连接；
		xhr.open("post", "title.php", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		//3,发送一个http请求:
		xhr.send("titurl=" + rul);
		//获取服务器状态码
		xhr.onreadystatechange = function() {
			
			if(xhr.readyState == 4 && xhr.status == 200) {
				tittext.innerHTML = xhr.responseText; //获取服务器响应数据
				console.log(title.php);
			}
		}

		function getxhr() {
			var xhr = null;
			if(window.XMLHttpRequest) {
				xhr = new XMLHttpRequest();
			} else {
				xhr = new ActiveXObject("Microsoft.XMLHttp");
			}
			return xhr;
		}
	}
}
