<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSS tabelle </title>
<style type="text/css">

h1{ font-size:24px; font-weight:bold; color:rgb(50,50,250); }
h2{ font-size:18px; font-weight:bold; color:rgb(250,50,150);}
h3{ font-size:14px; font-weight:bold; color:rgb(200,20,20);}

.nota{ color:rgb(250,120,0);}
.codice{ color:rgb(30,120,30);}


thead {color:green}
tbody {color:blue;height:50px}
tfoot {color:red}


</style>
</head>

<h2>tbody - thead - tfoot</h2>
<p>
Sono utlizzati per specificare una parte specifica della tabella pertanto sono elementi figli di &lt;table&gt;. I browsers, per esempio, possono usare il &lt;tbody&gt; per abilitare lo scrolling dellle righe indipendentemente dalla parte 'head' e 'footer'  
</p>

<p class="nota"> 
Questi tre tag vanno usati insieme. &lt;tfoot&gt; deve apparire prima del tag &lt;tbody&gt;. Naturalmente &lt;thead&gt; deve apparire prima di &lt;tfoot&gt;
</p>


<body>

<table border="1">
  <thead>
    <tr>
      <th>Month</th>
      <th>Savings</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
  </tbody>
</table>










</body>
</html>
