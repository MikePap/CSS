<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pseudo-classi</title>
<style type="text/css">

h3{ color:#0066CC;}

b{ color:#663333; }

a:focus{ color:#996600;}

textarea:focus {  border: 5px solid blue;  background:#00FF66; }

input:focus{ background:#99FF00;}

.nota{ color:rgb(80%,10%,0%);}
</style>
</head>

<body>

<h3>Le pseudo-classi </h3>

Una pseudo-classe non definisce infatti un elemento ma un particolare stato di quest'ultimo. In buona sostanza imposta uno stile per un elemento al verificarsi di certe condizioni <br />
Esempio:  <b> a:link {color: blue;}  </b><br />
La regola vuol dire: i collegamenti ipertestuali (<a>) che non siano stati visitati (:link) avranno il colore blue. Da qui risulta più chiaro il concetto espresso all'inizio: la pseudo-classe :link definisce lo stile (colore blue) solo in una determinata situzione, ovvero quando il link non è stato attivato. Appena ciò dovesse avvenire, il testo non sarà più blue, perchè la condizione originaria è venuta meno.
<p> La pseudo-classe (<b>tutte iniziano con i due punti</b>) segue senza spazi l'elemento. Subito dopo si crea nel modo consueto il blocco delle dichiarazioni.</p>
<p> Una pseudo-classe può anche essere associata a selettori di tipo classe. I costrutti possibili sono due. Il primo è quello sancito nella specifica CSS1. La pseudo-classe doveva seguire la dichiarazione della classe: <br />

<b> a.collegamento:link {color: green;} </b><br />
Avranno il testo verde (green) solo i link non visitati che abbiano come attributo class="collegamento". <br />
Sarà verde questo collegamento: <b> &lt;a href="pagina.htm" class="collegamento"&gt;</b> <br />
Ma non questo:<b> &lt;a href="pagina2.htm"&gt; </b> <br /> </p>
 
<p>A partire dalla specifica CSS2 è consentita anche questa sintassi: <br />
<b> a:link.collegamento </b> <br />
in cui la classe segue la pseudo-classe. Significato e risultati sono comunque identici al primo esempio. Il primo tipo di sintassi garantisce una maggiore compatibilità con i browser più datati. Gli esempi e la sintassi presentati valgono per tutte le pseudo-classi. </p>

<h3>:link </h3>
Si applica solo all'elemento (X)HTML <a> che abbia anche l'attributo href. Quindi, non alle cosiddete ancore invisibili ma solo ai link ipertestuali. Definisce lo stile per questo elemento quando il collegamento punta ad un sito o ad una <b>pagina non ancora visitati.</b>

<h3>:hover</h3>
Con questa regola si definisce lo stato dell'elemento <b>quando si passa il mouse sopra</b>.

<h3>:visited</h3>
Con questa regola si definisce lo stato dell'elemento <b>dopo che è stato visitato</b>(cliccato).

<h3>:focus</h3>
Con questa regola si definisce lo stato dell'elemento <b>dopo che si è cliccato sopra</b>: Può essere utile per i link all'interno della pagina   <a href="#"> focus </a> ;<br />
 è anche interessante usarlo con i campi input e textarea: <br />
Es. <input type="text" name="fuck" /><br />

<p class="nota">Note: a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective!!<br />
 Note: a:active MUST come after a:hover in the CSS definition in order to be effective!!</p>

<h3>:first-child </h3>
È supportata solo dai browser Gecko-based (Mozilla e Netscape 6/7) e da Explorer 5 Mac (probabilmente sarà supportato anche nelle versioni di Explorer dalla 7 in poi<br />
Sintassi : &lt;elemento&gt;:first-child {&lt;dichiarazioni&gt;;} <br />
Esempi : <b> p:first-child {color:red;} </b><br />
Chiariamo a partire dall'esempio il significato di questa pseudo-classe. La regola va così interpretata: assegna il colore rosso solo ai paragrafi che siano il primo elemento figlio di qualsiasi altro elemento. Esaminando questa porzione di codice: <br />

&lt;div&gt;<br />
&lt;p&gt;blah blah blah &lt;/p&gt;  (" Sarà rosso") <br />  <!--sarà rosso-->
&lt;p&gt;blah blah blah &lt;/p&gt; <br />
&lt;table&gt; <br />
  &lt;tr&gt; <br />
    &lt;td&gt; <br />
      &lt;p&gt;blah blah blah &lt;/p&gt; (" Sarà rosso") <br />  <!--sarà rosso-->
      &lt;p&gt;blah blah blah &lt;/p&gt; <br />
    &lt;/td&gt; <br />
  &lt;/tr&gt; <br />
&lt;/table&gt; <br />
si capisce che solo i paragrafi indicati saranno rossi, perchè sono primi figli, rispettivamente, di un elemento &lt;div&gt; e di un altro elemento &lt;td&gt;.

















</body>
</html>
