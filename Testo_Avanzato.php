<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Testo Avanzato</title>
<style type="text/css">

h3{ color:#990000; font-size:24px;}
.everyfirst{ text-transform:capitalize}
.allmaiusc{ text-transform:uppercase}
.allminusc{ text-transform:lowercase}
.pvariant{ font-variant:small-caps}
#vert{ vertical-align: text-bottom; background:#999999; height:200px}
.rientro{text-indent:30px; background:#00CCFF;}
.spazio{ white-space: pre; color:#3333FF;}
.distanza_righe{ 
font-size: 14px;
line-height:2;				/*	L'interlinea sarà quindi uguale a 28px */
}

</style>
</head>

<body>
<h3>font-size-adjust</h3>
Questa proprietà può servire a migliorare la leggibilità di un carattere alternativo tra quelli indicati con la proprietà font-family. La proprietà è supportata solo dai browser Gecko-based (Mozilla, Netscape 6/7) ed è ereditata.

<h3>font-stretch</h3>

Consente di rendere il testo più o meno espanso del normale. Proprietà non supportata da nessun browser. Ereditata.<br />
Valori: <br />
&bull;<b>normal</b>. Valore di default. <br />
&bull;<b>parole chiave </b>che indicano diversi gradi di espansione del testo. <br />
Nell'ordine, dal grado di maggiore espansione al minore sono: <br />
<b>ultra-expanded, extra-expanded, expanded, semi-expanded, normal, semi-condensed, condensed, extra-condensed, ultra-condensed</b><br />
Oltre a queste abbiamo due parole chiave con funzione relativa: <b>wider e narrower</b>.<br />
Esempi: p {font-stretch: ultra-expanded;}

<h3>font-variant</h3>
<p class="pvariant">Consente di trasformare il testo in maiuscoletto (lettere in maiuscolo rese con dimensioni uguali ai caratteri minuscoli ). Proprietà ben supportata ed ereditata.</p>

<h3>text-transform</h3>
La proprietà serve a cambiare gli attributi del testo relativamente a tre aspetti: <b>maiuscolo, minuscolo, prima lettera maiuscola</b>. Proprietà ben supportata e comodissima se avete lunghe porzioni di testo tutto in maiuscolo da trasformare (o viceversa). Ereditata.<br /> 
<b>selettore {text-transform: &lt;valore&gt;;}</b><br />
Valori: <br />
&bull;<b>none</b>. Valore di default. Nessuna trasformazine viene applicata. <br />
&bull;<b>capitalize</b>. <p class="everyfirst">La prima lettera di ogni parola viene trasformata in maiuscolo.</p> 
&bull;<b>uppercase</b>.<p class="allmaiusc"> Tutto il testo è maiuscolo. </p>
&bull;<b>lowercase</b>. <p class="allminusc">Tutto il testo è minuscolo. </p>
Esempi:<br />
p {text-transform: capitalize;} <br />
h1 {text-transform: uppercase;}

<h3> Line-height </h3>
<p class="distanza_righe">Questa proprietà stabilisce la distanza fra le righe di un paragrafo <br />
Questa proprietà stabilisce la distanza fra le righe di un paragrafo <br />
Questa proprietà stabilisce la distanza fra le righe di un paragrafo </p>


<h3>letter-spacing</h3>
Aumenta lo spazio tra le lettere di una parola. Proprietà ben supportata ed ereditata.<br />
<b>selettore { letter-spacing: &lt;valore&gt;; }</b>
Valori: <br />
&bull;<b>normal</b>. Valore di default. Le lettere mantengono il loro spazio normale. <br />
&bull;<b>un valore numerico con unità di misura</b>. Le lettere saranno spaziate secondo la distanza impostata. <br />
E' possibile anche impostare valori negativi. Ciò farà sì che le lettere appaiano sempre più compresse, con il rischio ovvio dell'illegibilità.<br />
Esempi: h1 { letter-spacing: 5px; }

<h3>word-spacing</h3>
Proprietà complementare a letter-spacing. Serve ad aumentare lo spazio tra le parole comprese in un elemento. Proprietà ben supportata ed ereditata.<br />
<b>selettore { word-spacing: &lt;valore&gt;; }</b>
Valori: <br />
&bull;<b>normal</b>. Valore di default. Le parole mantengono il loro spazio normale. <br />
&bull;<b>un valore numerico con unità di misura</b>. Le parole saranno spaziate secondo la distanza impostata. <br />
Esempi: p { word-spacing: 1.2em; } //// div.testo { word-spacing: 5px; }

<h3>vertical-align</h3>
<p>questo è un paragrafo normale </p>
<div id="vert">  Elements often appear on the same line, or lined up horizontally across a page. The vertical-align property gives control over how elements align vertically across the page.<br />
vertical-align can be specified using one of a set of keywords. These keywords work in one of two distinct ways. One group of keywords works relative to the parent element, while the other works relative to the line on which an element appears. In many cases this is essentially the same thin. <br />I DON'T KNOW
</div>

<h3>text-indent</h3>

<p class="rientro"> Questo paragrafo ha la prima linea rientrata grazie alla regola text-indent. Traditionally, in many documents, the first line of every paragraph is slightly indented. text-indent enables you to control how the first line of any element is indented, or outdented. You can control outdent by giving text-indent negative values, however, different browsers may handle negative values in different ways.
</p>

<h3>white-space</h3>

<p class="spazio">
  The white-space property applies only to block elements, and specifies what should be done by the browser with extraneous whitespace 
     (tabs, returns, extra spaces and so on). Whitespace characters in HTML should not affect the appearance of a web page, rather, browsers should ignore 
     returns and tabs, and collapse more than one whitespace character to a single space for display purposes. With the white-space property, 
     you can specify how the browser in fact handles whitespace characters.

Possible values
The white-space property can take one of the following keyword value: <b>normal, pre, and nowrap</b>.
A white-space of <b>normal</b> means that whitespace will be handled in the traditional manner. Any tabs, returns and extraneous spacing will be ignored.
A white-space of <b>pre </b>keeps all whitespace as it appears in the element. This is the equivalent to the HTML element &lt;pre&gt;.
 Essentially, the element is treated as being preformatted.
A whitespace of <b>nowrap </b>means that the contents of the element will only wrap (break to a new line) when an explicit line break - &lt;br&gt;- is in the contents. 
The content of the element will not wrap to a new line simply because the line does not fit in the page horizontally.
Default values
If no white-space value is specified, the white-space of an element is normal.
Is it inherited?
An element does inherit the white-space value of its parent element.
</p>










</body>
</html>
