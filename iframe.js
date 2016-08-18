function resetiframe(){
	var iframe = document.getElementById("video");
	var width = document.body.clientWidth;//Brower目前寬度
	var height = width/16*9;//調比例
	iframe.style.width = width+"px";
	iframe.style.height = height+"px";
}