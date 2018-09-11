<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gli Pseudo-elementi </title>

<style type="text/css">

p:first-letter {color: red; font-weight: bold;}
p:first-line {color: blue;}
h1:before {content: "Il titolo è...";}
h2:before{ content:url(bullet3.gif);   }

.nota{color:#FF0000; font-weight:600; }



</style>

</head>

<body>


<h1>Gli Pseudo-elementi </h1>
Vi sono parti in un documento (X)HTML che non sono rappresentate da nessun tag in particolare, ma che è possibile comunque modificare e formattare secondo i propri desideri con i CSS grazie ai cosiddetti pseudo-elementi <br />
Il supporto di questo tipo speciale di selettore è garantito solo dai <b>browser più recenti</b>

<h3>:first-letter </h3>

Con questo selettore è possibile formattare la <b>prima lettera di qualunque elemento contenente del testo</b>. Le proprietà modificabili sono ovviamente tutte quelle relative al carattere e al testo, ma anche quelle legate al colore, allo sfondo, ai margini e al padding.

<p>La sintassi di tutti gli pseudo-elementi è soggetta alla stesse regole. La più importante è che essi non possono essere dichiarati da soli, ma <b>vanno sempre collegati ad altri selettori</b>. Non importa di che tipo essi siano. La definizione più semplice è quella che prevede l'applicazione di uno pseudo-elemento a un selettore semplice: <br />
<b> p:first-letter {color: red; font-weight: bold;} </b> <br />
È possibile anche usare classi: <b> p.nome_classe:first-letter {color: red; font-weight: bold;} </b><br />
O selettori di tipo ID: <b> #nome_id:first-letter {color: red; font-weight: bold;}  </b> <br />
Per tutte le regole usate negli esempi il testo degli elementi presenterà la prima lettera rossa e in grassetto</p>

<h3>:first-line </h3>
<p>Imposta lo stile della prima riga di un elemento contenente del testo.<br />
Valgono le stesse regole generali viste per :first-letter. <br />
Esempi: <br />
p:first-line {color: blue;} <br />
p.nome_classe:first-letter {color: blue;} <br />
td#nome_id:first-letter {color: blue;} </p>

<h3>:before</h3>
<p> Grazie allo pseudo-elemento :before è possibile inserire nel documento un contenuto non presente nello stesso. Più esattamente, con <b>:before </b>si inserisce contenuto prima dell'elemento definito nel selettore. Il contenuto da inserire si definisce tramite la proprietà <b>content </b>e può essere una semplice <b>stringa di testo, un URL che punti a un'immagine o ad un'altro documento</b>, un contatore numerico, semplici virgolette. <br />
Immaginiamo di voler inserire un'immagine particolare prima di ogni titolo &lt;h1&gt;. Useremo in questo modo lo pseudo-elemento <b>:before</b><br />
<b>h1:before {content: url(immagine.gif);} </b><br />

Volendo inserire una stringa essa va racchiusa tra virgolette:<br />
<b> h1:before {content: "Il titolo è...";}</b> <br />
<h1> Sound Market </h1>
<h2> Questo è il secondo titolo </h2>
<font class="nota">before non è supportato da Explorer per Windows (almeno fino alla versione 6) </font>

<h3>:after </h3>

Pseudo-elemento complementare a :before. L'unica differenza è che il contenuto viene inserito dopo l'elemento specificato nel selettore.<br />

<b>h1:after {content: url(immagine.gif);} </b><br />
<b> h1#nome_id {content: "Testo del titolo";}  </b>
















</body>
</html>

