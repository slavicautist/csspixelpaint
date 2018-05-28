
<?php

$picwidth = 50;
$picheight = 50;

echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>CSSPixelPaint</title><link rel="stylesheet" href="styl.css" type="text/css"><link rel="shortcut icon" href="favicon.ico"></head><body>';
echo '<script> function doit(p) { var q = document.getElementById(p); var qq = document.getElementById("exm"); q.style.backgroundColor = qq.style.backgroundColor; } function dothat(p) { var q = document.getElementById(p); var qqq = document.getElementById("exmtw"); q.style.backgroundColor = qqq.style.backgroundColor; } function delet(el) { document.getElementById(el).outerHTML = ""; } </script><table border="0" width="100%" class="cent"><tr valign="top"><td class="left" width="25%"></td><td class="main" height="800" align="left"><div id="exmpl"><table><tr><td id="exm" style="background-color: #FFAAAA;" width="20" height="20" onclick="delet(\'exm\')">&nbsp;</td><td style="background-color: #FFFFFF;" width="20" height="20">&nbsp;</td><td id="exmtw" style="background-color: #AAAAFF;" width="20" height="20">&nbsp;</td></tr></table></div><div id="cntnt"><table border="0">';

$radeksta = '<tr height="20" bgcolor="#FFFFFF">';
$radekend = '</tr>';

$pixelsta = '<td width="20" height="20" id="';
$pixelmid = '" onmouseenter="doit(\''; 
$pixelmiw = '\')" onclick="dothat(\''; 
$pixelend = '\')">&nbsp;</td>';

$rcount = 0;
$pcount = 0;

while($rcount < $picheight) {
    
    echo $radeksta;
    while($pcount < $picwidth) {
       $ident = "r" . $rcount . "p" . $pcount;
       echo $pixelsta . $ident . $pixelmid . $ident . $pixelmiw . $ident . $pixelend;
       $pcount++;    
    
    } 
    echo $radekend;
    $rcount++; 
    $pcount = 0;
}
echo '</table></div><td class="right" width="25%"></td></tr></table></body></html>';
?>
