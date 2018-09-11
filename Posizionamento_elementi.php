<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Posizionamento  elementi</title>
<style type="text/css">

.nota{ color:rgb(100%, 30%,20%);}
.bianco{ color:rgb(255,255,255);}
h3{color:rgb(20%,20%,100%); }

#div1 { position:relative; background: Silver; width: 500px; /* height:50px; */ border: solid 1px; }
#div2 { background: Silver; width: 300px;  position: absolute; top: 140px; left: 700px; } 
#div3 { background: red; width: 400px;  position: relative;  top: 10px;  left: 30px; border:solid 1px; } 
#div4 {background: teal; width: 250px; height:50px;  position: absolute; top: 50px; left: 300px; z-index: 2; }
#div5{background: silver; width: 250px; height:50px; position: absolute; top: 30px; left:350px; z-index: 1; }
div#div6 { position:absolute; top: 20px; left: 10px; width: 200px; border: 1px solid black; background : Teal; z-index:1; }
#div7 { position: absolute; width: 400px; height:100px; left:200px; top:150px; background: silver; border: 2px solid black; z-index:3; }
#div8{background:#CC99FF; }
.posRel{ position:relative; top:80px; left:100px; background:#00FF00; color:#000099; border:#CC0000; display:inline; }

#nascosto{ visibility: hidden; width:100px; height:400px; background:#0033CC;} /*questo div non viene visualizzato, ma è più esatto dire che rimane invisibile in quanto le sue dimensioni continuano ad occupare posto nel documento a differenza delle regola "display:none" (vedi riga successiva)  */
/* #nascosto{ display:none;  width:100px; height:400px; background:#0033CC;}  */
#apDiv1 { position:absolute; left:114px; 	top:1468px;	width:105px; height:80px; 	z-index:3; }

#div_fixed{ position:fixed; top:20px; right:50px;  padding:10px; width:200px; height:150px; background:#CC3; z-index:100; }


</style>
</head>

<body>
<h2>Posizionamento degli elementi</h2>
<h3>position</h3>
position è la proprietà fondamentale per la gestione della posizione degli elementi, di cui determina la modalità di presentazione sulla pagina. Si applica a tutti gli elementi e non è ereditata.<br />
Sintassi: <b>selettore {position: &lt;valore&gt;;}</b>
Valori: <br />
&bull; <b>static</b><br />
&bull; <b>absolute </b><br />
&bull; <b>fixed </b><br />
&bull; <b>relative </b><br />
<p>&nbsp;</p>
<p><b>static</b> E' il valore di default, quello predefinito per tutti gli elementi non posizionati secondo un altro metodo. Rappresenta la posizione normale che ciascuno di essi occupa nel flusso del documento</p>

<h3>absolute</h3>
L'elemento, o meglio, il box dell'elemento viene rimosso dal flusso del documento ed è posizionato in base alle coordinate fornite con le proprietà top, left, right o bottom. Il posizionamento avviene sempre rispetto al box contenitore dell'elemento. Questo è rappresentato dal primo elemento antenato (ancestor) che abbia un posizionamento diverso da static. Se tale elemento non esiste il posizionamento avviene in base all'elemento radice HTML, che in condizioni standard coincide con l'area del browser che contiene il documento e che ha inizio dall'angolo superiore sinistro di tale area.Un elemento posizionato in modo assoluto scrorre insieme al resto del documento. <br /><span class="nota">Un div che viene inserito in un altro div con posizione assoluta assume le posizione assolute rispetto al div contenitore(genitore) solo se quest'ultimo è anch'esso con posizione assoluta</span> .


<div id="div2"> box (div2). Il valore di position è settato su absolute.Le coordinate sono relative all'angolo superiore sinistro del box</div>

<div id="div7">questo è #div7 absolute rispetto alla finestra del browser. 
               <div id="div6"> e questo è #div6 absolute rispetto a #div7</div>
</div>

<h3>fixed</h3> 
<div id="div_fixed">Sono il "fixed"</div>
Usando questo valore il box dell'elemento viene, come per absolute, sottratto al normale flusso del documento. La differenza sta nel fatto che per fixed il box contenitore è sempre il cosiddetto viewport. Con questo termine si intende la finestra principale del borwser, ovvero l'area del contenuto. Altra differenza fondamentale: un box posizionato con fixed non scorre con il resto del documento. Rimane, appunto, fisso al suo post. L'effetto è lo stesso che si può ottenere con l'uso dei frame, in cui una parte della pagina rimane fissa e il resto scorre. Solo che qui il documento è solo uno. Purtroppo, <b>il valore non è supportato da Explorer su Windows.</b>

<h3>relative</h3>
<p align="center" style="background:#00CCCC">L'elemento viene posizionato relativamente al suo box contenitore. In questo caso il box contenitore è il posto che l'elemento avrebbe occupato nel normale flusso del documento. La posizione viene anche qui impostata con le proprietà top, left, bottom, right. Ma qui esse non indicano un punto preciso, ma l'ammontare dello spostamento in senso orizzontale e verticale rispetto al box contenitore. </p>

<div id="div1"> questo è div 1: position relative; width:500px; height non impostata. Neanche il top è impostato</div>
<div id="div1"> Questo è div 1. Occupa il suo posto normale nel documento. Da notare che il testo essendo più lungo della larghezza impostata(500px) va a continuare sotto aumentando l'altezza del blocco che non è stata impostata; se l'altezza viene impostata ed il testo risulta più lungo, quest'ultimo sarà comunque visualizzato ma uscirà fuori dal blocco ed andrà ad invadere la zona sottostante; impostare il background per capire l'esempio </div>

<div id="div3">Questo è un blocco div 3. position relative. Il top è impostato a 10px: ecco perchè si distanzia di 10px dal div1 che sta sopra.</div>
<div id="div3"> altro div3 piazzato sotto un suo simile. <span class="bianco">E' importante notare che a differenza del suo simile (sopra) non si distanzia di 10px.   </span></div>


<p class="nota"> 
 <strong>Per fare in modo che i sottodiv (posizionati in absolute) all'interno del div genitore (posizionato in relative), oppure i susseguenti elementi di blocco(tag p, h, ecc..), vengano posizionati regolarmente bisogna fissare l'altezza al div genitore(relative); altezza che deve naturalmente essere pari all'altezza del sottodiv più alto. </strong>
 </p>
<div id="div3"> questo è il #div3 posizionato in base al blocco precedente. Il blocco precedente è il blocco paragrafo</div>
<p>&nbsp; </p>
<p>&nbsp; </p>

<h3>top - bottom - left - right</h3>


Per gli elementi posizionati con absolute o fixed definisce la distanza verticale rispetto al bordo superiore dell'elemento contenitore. Per gli elementi posizionati con relative stabilisce invece l'ammontare dello spostamento rispetto al lato superiore della posizione originaria. In questo caso, usando valori positivi il box viene spostato sotto, mentre con valori negativi lo spostamento avviene verso l'alto .

<h3>visibility</h3>
Questa proprietà determina se un elemento debba essere visibile <div id="nascosto"></div> o nascosto. Si applica a tutti gli elementi e non è ereditata.<br />
Sintassi: <b>selettore {visibility: &lt;valore&gt;;} </b>
Valori: <br />
&bull; <b>visible</b>. L'elemento è visibile. Valore di default.  <br />
&bull; <b>hidden</b>. L'elemento è nascosto, ma mantiene il suo posto nel layout dove apparirà come una zona vuota. <span class="nota"> Può essere utile per creare uno spazio </span>In ciò è diverso dal valore none della proprietà display (esempio). <br />
Esempi: <br />
 div.box {visibility: hidden;}<br />
p {visibility: visible;}

<h3>z-index</h3>
Con questa proprietà si imposta l'ordine di posizionamento dei vari elementi sulla base di una scala di livelli. E' un meccanismo simile a quello dei layer sovrapposti di Photoshop ed è utile nel contesto del posizionamento dinamico. In seguito ad un posizionamento, infatti, è possibile che un elemento si sovrapponga ad un altro rendendolo illeggibile. Impostando lo z-index è possibile modificare l'ordine di tutti gli elementi. <span class="nota">Il numero più piccolo sta  sotto. Note: z-index only <b>works on positioned elements </b>(position:absolute, position:relative, or position:fixed).</span><br />
Sintassi: <b>selettore {z-index: &lt;valore&gt;;} </b>
Valori: <br />
&bull; <b>auto</b>. L'ordine dei livelli è uguale per tutti gli elementi.  <br />
&bull; <b>un valore numerico</b>. Un valore superiore indica un livello superiore <br />
Esempi: <b>div#box1 {z-index: 34;} </b>

<div id="div4"> questo è il #div4 con z-index=2 che si sovrappone a #div5 con z-index=1 </div>
<div id="div5"> questo è il #div5 con z-index=1 </div><br /><br />
<div align="center" id="div8"> questo è un div posizionato al centro pagina </div>




<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
