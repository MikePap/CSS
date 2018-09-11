<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Le Liste</title>
<style type="text/css">
html,body{margin: 0;padding:0}
body{font-family: arial,sans-serif;font-size: 76%; } 

h1{ color:#009933; font-size:36px; font-weight:bold;}
h3 { color:#0000FF; font-size:24px; font-weight:bold;}

/* li{ list-style-image:url(bullet3.gif); }  /* list-style-image:url(bullet3.gif);  
.bullet1{list-style-image:url(bullet_1.gif);}
/* ul{list-style-type:square;} 
ol{list-style:decimal;}
ul.lista4 li {
list-style : square inside; color:#FF0000; }
li.cerchio{ list-style-type:circle !important;}  /*  non funziona  */

/*li{list-style-type:disc;  } */

#barraOrizzontale{ margin:0 auto; padding:0;}
#barraOrizzontale li{ display:  inline; 
/*width:100%;  */ 
padding:0;
margin:0; 
list-style-type:none;
list-style-position:inside;}

#barraOrizzontale li a{    
/*width:6em; */ 
text-decoration:none;
color:white;
background-color:purple;
padding:0.2em 0.6em; margin:1px;
border-right:1px solid white;}
#barraOrizzontale li a:hover{background-color:#ff3300}


</style>
</head>

<body>
<h1>Le Liste </h1>

Le proprietà dedicate alla formattazione delle liste sono quattro. tre definiscono singoli aspetti, l'ultima, list-style, è una proprietà a sintassi abbreviata. 
<p><b>Mozzilla non supporta le liste</b></p>
<h3>list-style-image</h3>
Definisce l'URL di un'immagine da usare come marcatore di un list-item. Proprietà ereditata. Si applica agli elementi LI e a quelli per i quali si imposti la proprietà display sul valore list-item. <br />
<b> selettore {list-style-image: url(url_immagine);} </b>
Nella definizione della sintassi per tutte queste proprietà avete a disposizione diverse strade. La prima e più semplice è quella di definire lo stile alivello degli elementi lista o list-item: <br />

<ol class="bullet1"> ul {list-style-image: url(immagine.gif);}</ol>
<li> ol {list-style-image: url(immagine.gif);} </li>
<li> li {list-style-image: url(immagine.gif);}</li>
<li>La sintassi consigliata è questa: </li>
<b> ul.nome_della_classe li {list-style-image: url(immagine.gif);} </b>

<h3>list-style-position</h3>
Imposta la posizione del marcatore rispetto al testo del list-item. Proprietà ereditata. <b>Si applica agli elementi LI </b>e a quelli per i quali si imposti la proprietà display sul valore list-item.<br />
<b> selettore {list-style-position: &lt;valore&gt;;} </b>
Valori: <br />
<li> <b>outside</b>. Valore di default. E' il comportamento standard: il marcatore è piazzato all'esterno del testo. <br />
<li> <b>inside</b>. Il marcatore diventa parte integrante del testo e ne rappresenta in un certo senso il primo carattere. Se il testo va a capo il marcatore apparirà all'interno del box. <br />
Esempi: <br />
ul li {list-style-position: inside;}<br />
#lista li {list-style-position: outside;}

<h3>list-style-type</h3>
Definisce l'aspetto del marcatore. Proprietà ereditata. Si applica agli elementi LI e a quelli per i quali si imposti la proprietà display sul valore list-item.<br />
<b> selettore {list-style-type: &lt;valore&gt;;}</b><br />
Valori:<br />

La scelta dei valori possibili è lunghissima. Tali valori sono stati inseriti per venire incontro alle esigenze di numerazione di lingue come l'ebraico o il giapponese, che usano sistemi diversi dal nostro. <br />

<ul class="lista4"><b>disc</b>: un cerchietto pieno colorato. Il colore può essere modificato per tutti i tipi con la proprietà color. </ul>
<li class="cerchio"><b>circle</b>: un cerchietto vuoto. </li>
<li><b>square</b>: un quadratino </li>
<li><b>decimal</b>: sistema di conteggio decimale 1, 2, 3, .... </li>
<li><b>decimal-leading-zero</b>: sistema di conteggio decimale ma con la prima cifra preceduta da 0. 01, 02, 03 da applicarsi sul tag &lt;OL&gt; o &lt;UL&gt;</li>
<li><b>lower-roman</b>: cifre romane in minuscolo. i, ii, iii, iv, ....... </li>
<li><b>upper-roman</b>: cifre romane in maiuscolo. I, II, III, IV, .... </li>
<li><b>lower-alpha</b>: lettere ASCII minuscole. a, b, c, ...... </li>
<li><b>upper-alpha</b>: lettere ASCII maiuscole. A, B, C, ..... </li>
<li><b>lower-latin</b>: simile a lower-alpha </li>
<li><b>upper-latin</b>: simile a upper-alpha 
<li><b>lower-greek</b>: lettere minuscole dell'alfabeto greco antico. </li>

<h3>list-style</h3>
Proprietà a sintassi abbreviata con cui si definiscono tutti gli aspetti e gli stili di un list-item. Proprietà ereditata.<br />
<b>selettore {list-style: &lt;valore tipo&gt; &lt;valore posizione&gt; &lt;valore immagine&gt;;}</b><br />
A rigor di logica solo due delle tre proprietà singole dovrebebro trovare posto in questa dichiarazione abbreviata: per definire l'aspetto del marcatore, infatti, o decido di usare un'immagine o propendo per un marcatore a carattere<br />
Esempi<br />
ul li {list-style: square inside;} <br />
ul.lista1 li {list-style: outside url(imamgine.gif);}

<br /> <br />


<div id="barraOrizzontale">
<ul>
<li><a href="Pseudo_Classi.php" target="_blank">Link one</a></li>
<li><a href="#">Link two</a></li>
<li><a href="#">Link three</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>


<br /> <br /> <br /> <br />







</body>
</html>
