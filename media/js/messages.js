;(function($,window){
var docCookies = {
getItem: function (sKey) {
    if (!sKey) { return null; }
    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
  },
  removeItem: function (sKey, sPath, sDomain) {
    if (!this.hasItem(sKey)) { return false; }
    document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
    return true;
  },
  keys: function () {
    var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
    for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
    return aKeys;
  }
};

var values = ["alert", "delete", "edit", "complete"];
var cookies = docCookies.keys();
for (var i = 0; i < cookies.length;  i++){
	for (var j = 0; j < values.length;  j++) {
		if(cookies[i] === values[j]){
			$("#msj").attr("class",values[j]+"_msj");
			$("#msj img").attr("src","/media/img/"+values[j]+".png");
			var texto = String(docCookies.getItem(values[j]));
			var patron = "+";
			texto = texto.replace(/\+/g," ");
			$("#msj p").text(texto);
			$(".hide").css("display","block")
		}
	}
}
})($,window)