
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestione del testo</title>
<style type="text/css">
.verdana{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:22px;
}
.italic {font-style: italic;}
.spessoRosso {font-weight:bold; color:#990000;}
.altezzaRighe { line-height: 30px; }
h3{ font-family:"Courier New", Courier, monospace; font-size:18px; font-weight:bold; color:#3366FF } 
.lieatop{text-decoration:overline; color:#009900; } 
.lineagiù{text-decoration:underline; color:#990000; }
.lineatra{text-decoration:line-through; color:#FF00CC; }
.lampeggiante{text-decoration:blink; color:#FF6666; }
p.lampex{text-decoration:blink; color:#99CC00; }
/*   */ 
</style>
</head>

<body>
<h3>proprietà</h3>

* <b>il font da usare  </b> <br />
* <b>la sua dimensione </b><br />
* <b>la sua consistenza </b><br />
* <b> l'interlinea tra i paragrafi </b><br />
* <b>l'allineamento del testo </b><br />
* <b>la sua decorazione (sottolineature e simili) </b><br />

<h3>font-family </h3>

<p>La proprietà font-family serve a <font class="verdana">impostare il tipo di carattere di una qualunque porzione di testo</font>. Si applica a tutti gli elementi ed è ereditata. <br />
<span class="verdana">E' possibile anche usare lo span </span>Gli uomini del W3C hanno creato un meccanismo che consente all'autore di impostare nei CSS non un font singolo e unico, ma un elenco di caratteri alternativi. Il meccanismo funziona così: <br />
<b>p {font-family: arial, Verdana, sans-serif;}</b><br />
Quando la pagina verrà caricata, il browser tenterà di usare il primo font della lista. Se questo non è disponibile userà il secondo. In mancanza anche di questo verrà utilizzato il font principale della famiglia sans-serif presente sul sistema. La spiegazione di tutto ciò è semplice: ovviare al problema dei diversi font presenti sulle piattaforme software<br />
Dunque: quando si imposta la proprietà font-family si possono usare tutti i font che si vuole, ma non dimenticate mai di inserire alla fine l'indicazione di una famiglia generica. Esse sono cinque <br />
I nomi dei font della lista vanno separati dalla virgola. I caratteri con nomi composti da più parole vanno inseriti tra virgolette. Se usate famiglie strane e poco comuni come fantasy o cursive usate più di una famiglia generica. Questa andrebbe sempre messa alla fine, altrimenti risulta praticamente inutile la definizione di font specifici. <br />
Sintassi: <b> selettore {font-family: &lt;font 1&gt;, &lt;font2&gt;, ....,&lt;famiglia generica&gt;;} </b><br />
Esempio: <b> div {font-family: Georgia, "Times New Roman", serif;} </b></p>

<h3>font-size</h3>
I valori delle dimensioni del testo possono essere espressi in vari modi. I diversi sistemi si possono distinguere a seconda che definiscano le dimensioni in senso assoluto o relativo. <b>Dimensione assoluta </b>significa che essa non dipende da nessun altro elemento ed è quella definita dall'unità di misura usata. <b>Dimensione relativa </b>significa che essa viene calcolata in base alla dimensione del testo dell'elemento parente.<br />

* Sono valori assoluti: le sette parole chiave <b>xx-small, x-small, small, medium, large, x-large, xx-large </b><br />
quelli espressi con le seguenti unità di misura: <b>pixel (px), centimetri (cm), millimetri (mm), punti (pt), picas (pc), pollici (in), x-height(ex).</b> Di tutte queste unità le uniche proponibili per il testo sono punti e pixel. Si consiglia di usare la prima solo per CSS destinati alla stampa. <br />
* Sono valori relativi: le parole chiave <b>smaller e larger </b><br />
quelli espressi in <b>em (em-height)</b><br /> 
quelli espressi in percentuale 

<h3>font-weight</h3>
<p class="spessoRosso">Serve a definire la consistenza o "peso" visivo del testo. Si applica a tutti gli elementi ed è ereditata.</p>
<b>selettore {font-weight: &lt;valore&gt;;}</b><br />
Valori: <br />
Il "peso" visivo di un carattere può essere espresso con una scala numerica o con parole chiave: <br />
&bull;<b>valori numerici</b> 100 - 200 - 300 - 400 - 500 - 600 - 700 - 800 - 900 ordinati in senso crescente (dal leggero al pesante) 
&bull; <b>normal</b>. Valore di default. E' l'aspetto normale del font ed equivale al valore 400 <br />
&bull; <b>bold</b>. Il carattere acquista l'aspetto che definiamo in genere grassetto. Equivale a 700 <br />
&bull; <b>bolder</b>. <cite>Misura relativa</cite>. Serve a specificare che una determinata porzione di testo dovrà apparire più pesante rispetto al testo dell'elemento parente <br />
&bull; <b>lighter</b>. <cite>Misura relativa</cite>. Il testo sarà più leggero di quello dell'elemento parente 
 
<h3>font-style</h3>
<p class="italic">Imposta le caratteristiche del testo in base ad uno di questi tre valori:</p>
&bull; <b>normal</b>: il testo mantiene il suo aspetto normale  <br />
&bull; <b>italic</b>: formatta il testo in corsivo  <br />
&bull; <b>oblique</b>: praticamente simile a italic <br />
La proprietà si applica a tutti gli elementi ed è ereditata.
<b>selettore {font-style: &lt;valore&gt;;} </b> <br />
Esempi: <b>p {font-style: italic;}</b>

<h3>Line-height</h3>
<p class="altezzaRighe">Grazie a line-height è possibile finalmente usare nelle nostre pagine un sistema di interlinea degno di questo nome. La proprietà, in realtà, serve a definire l'altezza di una riga di testo all'interno di un elemento blocco. Ma l'effetto ottenuto è appunto quello tanto agognato da tutti i web designer: <b>un modo per impostare uno spazio tra le righe</b>. La proprietà si applica a tutti gli elementi ed è ereditata.</p>
<b>selettore {line-height: &lt;valore&gt;;}</b><br />
Valori: <br />
&bull; <b>normal</b>. Il browser separerà le righe con uno spazio ritenuto "ragionevole". Dovrebbe corrispondere a un valore numerico compreso tra 1 e 1.2 <br />
&bull; <b>valore numerico</b>. Usando valori numerici tipo 1.2, 1.3, 1.5 si ottiene questo risultato: l'altezza della riga sarà uguale alla dimensione del font moltiplicata per questo valore.<br /> 
&bull; <b>un valore numerico con unità di misura</b>. L'altezza della riga sarà uguale alla dimensione specificata. <br />
&bull; <b>percentuale</b>. L'altezza della riga viene calcolata come una percentuale della dimensione del font. (sconsigliato)<br />
Esempi: <br />
p {line-height: 1.5;}<br />
body {line-height: 15px;}

<h3>font</h3>
La proprietà font può essere paragonata a background. Si tratta di una proprietà a sintassi abbreviata che serve a impostare con una sola dichiarazione tutte le principali caratteristiche del testo. Le proprietà definibili in forma abbreviata con font sono quelle su sescritte <br /> 
<b>selettore {font: &lt;valori&gt;;}</b><br />
I valori relativi alle singole proprietà non vanno separati da virgole. Virgola che deve invece separare i valori definiti per la font-family. Anche in questo caso i nomi dei font costituiti da più parole vanno racchiusi tra virgolette. Per quanto riguarda l'ordine, la dichiarazione dovrebbe sempre finire con la coppia font-size &gt; font-family.<br />
Il valore della proprietà line-height si imposta invece così, facendo seguire il suo valore a quello di font-size e separando i due con una slash:<br />
<b>font-size/line-height</b><br />
Esempi: <br />
<b> p {font: bold 12px/1.5 Georgia, "Times New Roman", serif;}</b><br />
Nell'ordine abbiamo definito: font-weight, dimensione/ interlinea, font-family.

<h3>Usare i font di sistema</h3>
All'interno della proprietà font è possibile impostare, invece della normale lista di caratteri, un valore corrispondente ai cosiddetti font di sistema. Si tratta del tipo di carattere che usiamo sul nostro sistema operativo per definire l'aspetto di elementi dell'interfaccia come barre dei menu, icone o barra di stato. In particolare, le parole chiave relative ai font di sistema sono 6 e riguardano: <br />

&bull; <b>caption</b>: carattere usato per pulsanti e menu a tendina <br />
&bull;<b>icon</b>: carattere usato per la descrizione delle icone <br />
&bull;<b>menu</b>: carattere usato nei menu delle varie finestre <br />
&bull;<b>message-box</b>: usato per i gli alert e gli altri box con messaggi di sistema <br />
&bull;<b>small-caption</b>: carattere per i controlli più piccoli <br />
&bull;<b>status-bar</b>: il font usato per la barra di stato <br />
Se si intende usare uno dei font di sistema non è necessario specificare altri valori oltre alla keyword. Il nostro testo, in pratica, erediterà le impostazioni definite nel sistema operativo relative a carattere e dimensione.<br />
Esempi: <br />
<b>p {font: menu;}</b><br />
<b>div {font: status-bar;}</b>

<h3>Text-align</h3>
La proprietà serve a impostare l'allineamento del testo. E' ereditata e si applica a tutti gli elementi.<br />
<b>selettore { text-align: &lt;valore&gt;; }</b>
Valori: <br />
&bull; <b>left</b>. Allinea il testo a sinistra <br />
&bull;<b>right</b>. Allinea il testo a destra <br />
&bull;<b>center</b>. Centra il testo <br />
&bull;<b>justify</b>. Giustifica il testo 

<h3>Text-decoration</h3>
<p>Imposta particolari decorazioni e stili per il testo. Ereditabile e applicabile a tutti gli elementi.</p>
<b>p {text-decoration: &lt;valore&gt; o &lt;valori&gt;;}</b>
Valori: <br />
&bull;<b>none</b>. Il testo non avrà alcuna decorazione particolare <br />
&bull;<b>underline</b>. <font class="lineagiù">Il testo sarà sottolineato </font><br />
&bull;<b>overline</b><font class="lieatop">  Il testo avrà una linea superiore </font><br />
&bull;<b>line-through</b>. <font class="lineatra">Il testo sarà attraversato da una linea orizzontale al centro </font><br />
&bull;<b>blink</b>. <font class="lampeggiante">Testo lampeggiante </font>(I Explorer non supporta)
<p class="lampex">Esempi:</p> 
<b>p {text-decoration: none;}</b>
<b>a {text-decoration: underline;}</b>

























</body>
</html>
