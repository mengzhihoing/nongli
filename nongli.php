

<script language='javascript' src="G.js"></script>


<script>

  var date = new Date();

var nongli = G.date.formatLunar(date.getFullYear(),date.getMonth()+1,date.getDate());

document.write('农历：'+nongli.gy + nongli.gm+nongli.gd);

 // document.write( "1983-10-20返回结果: {y: " + api13.y + ", m: " + api13.m + ", d: " + api13.d + ", w: " + api13.w + ", W: " + api13.W + ", cm: " + api13.cm + ", cd: " + api13.cd + ", CM: " + api13.CM + ", CD: " + api13.CD + ", gy: " + api13.gy + ", gm: " + api13.gm + ", gd: " + api13.gd + ", so: " + api13.so + ", cf: " + api13.cf + ", gf: " + api13.gf + ", sx: " + api13.sx + ", isleap: " + api13.isleap + "}");
//arguments: (y, m, d) [y: 年, m: 月, d: 日]
/*    
result = {
    y: 年
    m: 月
    d: 日    
    w: 星期（数字）
    W: 星期（中文）
    
    cm: 农历月（数字）
    cd: 农历日（数字）
    CM: 农历月（中文）
    CD: 农历日（中文）
    
    gy: 干支纪年
    gm: 干支纪月
    gd: 干支纪日
    
    so: 节气
    cf: 农历节日
    gf: 公历节日
    sx: 生肖
    isleap: 是否闰月
};
*/    
</script>