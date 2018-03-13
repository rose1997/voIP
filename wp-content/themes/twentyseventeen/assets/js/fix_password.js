
function check_item(){ 
if (document.getElementById('text[0]').value=="" || document.getElementById('text[1]').value==""){ 
alert("門號或密碼欄位不能空白"); 
return false;
} else if(document.getElementById('text[0]').value.length < 8){
	alert("門號請輸入8碼");
	return false;
  }else{
      return true;
   }
}
