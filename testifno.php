<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>testifno</title>
</head>
<SCRIPT type="text/javascript">
       <!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {
                <!-- 若<form>屬性name值為reg裡的文字方塊值為空字串，則顯示「未輸入姓名」 -->
                if(reg.username.value == "") 
                {
                        alert("未輸入姓名");
                }
                <!-- 若<form>屬性name值為reg裡的核取方塊沒有選擇，則顯示「未選擇性別」 -->
                else if(!reg.sex[0].checked && !reg.sex[1].checked)
                {
                         alert("未選擇性別");
                }
                <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
                else reg.submit();
         }
</SCRIPT>
<body>
<form name="reg" method="post" action="index.html">

姓名：<input name="username" type="text" size="16" /><br>
     
<input type="radio" name="sex" value="男" />男  &nbsp;&nbsp;&nbsp; 
<input type="radio" name="sex" value="女" />女 <br>

<!-- type值為button而非submit，另外要加上onClick="check()"來判斷以上的表單資料是否有填寫 -->
<input type="button" value="傳送" onClick="check()" /> &nbsp;&nbsp;&nbsp;
<input type="reset" value="清除" />
</form>
</body>
</html>