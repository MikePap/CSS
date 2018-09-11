<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML Element  tag</title>
<style type="text/css">
h1{ color:#990000;}
h3{ color:#0033FF;}
h4{ color:#CC6600;}
.nota{ color: #CC0099;}

#div1{ position:absolute; top:200px; right:200px; }
#div2{ position:absolute; top:200px; right:240px; }
#div3{position:absolute; top:200px; right:280px;}
#div4{position:absolute; top:240px; right:220px;}
#div5{position:absolute; top:240px; right:260px;}

#div_xa{ width:100px; height:50px; background:#00FF33; border:1px solid;}
#div_fieldset{ width:350px; height:100px; /* border:1px solid; */ background:rgb(255,50,40); }

/*
var text = document.getElementById('lyric').firstChild;
text.splitText(28);
*/
blockquote{ color:#996600; margin:5px 10px; padding:0;}

 fieldset{  -moz-border-radius:5px; width:500px; margin:10px; /*margin:5px; padding:5px; */  } 
legend{ color:#660033;}
button{ /*width:600px; height:200px; */ }
.campo_field{ width:400px; background:#CCFF99; }
.in_div{ width:300px; }

dt{ margin-left:70px; font-size:24px; color:#0000FF;}

.jkp{ font-size:24px; color:#063;;}

</style>
</head>

<body>

<dfn>sono dfn</dfn>


<br /><br />

<span class="jkp">  &lsaquo; &rsaquo;  > &dagger; &rarr;  &larr; &uarr; &darr; &radic; &infin;  &hearts; &spades; &clubs; &diams;  &and; &or; &times; &lowast; &oplus; &otimes; &sup3; &times;</span>

<h3>bdo</h3>

<p>Permette di stabilire la direzione del testo; <br  />
Richiede l'impostazione dell'attributo <strong>dir</strong> che può avere due valori: <br />
<strong>ltr</strong>: da sinistra verso destra <br />
<strong>rtl</strong>: da destra verso sinistra.
</p>

<bdo dir="rtl">Ecco un esempio di testo da destra verso sinistra</bdo> <br />
<bdo dir="ltr">Non è un elemento di blocco</bdo>


<h3>blockquote</h3>
<p>
Il tag <b>blockquote</b> <blockquote> assegna al testo contenuto in tale tag una riga indipendente (lo rende un elemento di blocco)</blockquote> ed inoltre tale testo viene spostato a destra (viene indentato). Naturalmente lo può anche personalizzarlo con i CSS
</p>

<p>Per una valutazione corretta come <q>strict HTML/XHTML</q> l'elemento &lt;blockquote&gt; deve contenere solo altri elementi di blocco, es: <br />
<blockquote>
<p>Sono un paragrafo contenuto in un elemento <q>blockquote</q> cosi come vuole Ms strict</p>
</blockquote>
</p>

<h1>Liste</h1>
<h3>dl - dt - dd</h3>

<dl>
    <dd>Se non ci fosse l'utilità di specificarlo il "dt" può anche non essere presente: non succede nulla</dd>
    <dd>I margini (cosi come gli altri stili) dei "dt" e "dd" possono tranquillamente impostarli nel CSS</dd>
</dl>

<dl>
  <dt>Spam</dt>
  <dd>unsolicited email sent in the hope of increasing sales
        of some product</dd>
  <dd>a brand name for tinned meat comprising pork and ham</dd>
</dl>



<h3>dir</h3>
<dir>
<li>shrubs</li>
<li>conifers</li>
<li>hedges</li>
</dir>

<br />


<h3> ul - ol - li </h3>
<p class="nota">ul e ol sono simili. L'unica differenza sta nel fatto che ol visualizza una lista di numeri decimali e ul dei punti; ma questi possono essere entrambi cambiati con il valore "type";  <br /><b>a li, quando è associato con ol,  può essere applicato il valore ("value") che cambia i numeri della lista</b> </p>

<ol>
  <li>Eggs</li>
  <li>Cheese</li>
  <li>Milk</li>
  <li value="99">Papadums</li>
  <li>Tickle-me Elmo</li>
  <li>Dr Who Remote Control Dalek</li>
</ol>
<p class="nota"> con ol si può decidere anche da che numero incominciare con l'uso dell'atributo "start"</p>
<ol type="i" start="4">
  <li>Remove the outer casing by pushing the plastic rivets
      through.</li>
  <li>Disconnect the main power harness from the inner unit
      (unclip).</li>
  <li>Remove connection to the glow plug.</li>
  <li>Extract unit, keeping upright at all times.</li>

</ol>

<h1>Text formatting Elements</h1>
<h3> a </h3>
<a href="#" accesskey="c">lovely range of cakes
    [access key = c]</a>
<br />
The accesskey  attribute allows the user to activate a control on a page using a keyboard shortcut. <br />
<a href="Liste.php" id="div_xa" target="_blank"> L'attributo target con valore '_blank' fa caricare una nuova pagina</a>

<br />
<h4> Rollover del link con l'attributo "title" </h4>
<p> L'attributo "title" crea un Rollover quando si passa il puntatore sull'link: <a href="#" title="Osserva il Rollover">Osserva</a></p>


<p>I went over to <a href="#"
    rel="friend">Matt</a>'s house. He was spinning some weird Cuban
    music for a mix he was putting together.</p>

<h3>abbr - acronym</h3>
<p class="nota"> abbr e acronym sono simili</p>
<p> Applicato ad una parte di testo gli da una <abbr title="carina">sottolineatura small-punteggiata molto carina</abbr>; è necessario l'attributo title
<br />Ma non è supportato in My Internet explorer </p> 

<p>He marvelled at how fluid the <acronym title="Graphical User
    Interface">GUI</acronym> was. It truly was a gooey GUI.</p>

<br />


<h3>big - small</h3>
<p>
     <big>questo è una stringa "big"</big> mentre
     <small>questa è una stringa "small"</small>. Queta è una stringa nornale
</p> 



<h3>bdo</h3>
<span class="nota"> è necessario l'attributo "dir" </span>
<p>bdo ha la capacità di cambiare il verso di una parola o più parole al contrario. amare la vita e  <bdo dir="rtl"> amare la vita </bdo>;  

<p>The sequence was reversed as <bdo dir="rtl">1-2-3-4-5</bdo></p>

<h3>cite</h3>
<p>Da un punto di vista semantico il tag cite serve ad evidenziare un <cite>titolo di un lavoro</cite> (es: di un libro o canzone o film ecc.. ). Il risultato offre uno stile simile all'<b>italic</b>.
</p>



<h3>ins</h3>
<p><ins>"ins" crea una sottolineatura al testo.</ins> E' supportato in XHTML Strict. </p>


<h3>kbd - samp</h3>
<p>sono due maiuscoletti.<kbd> QUESTO E' "KBD" MAIUSCOLO.</kbd> E QUESTO NON LO E' </p>

<p><samp>QUESTO E' "SAMP" IN MAIUSCOLO</samp> MA QUESTO NON è SAMP</p>


<h3> &lt;hr /&gt;  </h3>
<span class="nota"> Serve a creare una linea continua che può essere personalizzata. Gli attributi non sono supportati nell'HTML5 e vanno invece dichiarati nei CSS </span>
<hr />
<hr width="80%" align="left" style="border:dotted" />
<p>And with that the actress and the bishop made their
    eventful departure.</p>
<hr color="#FF0000" size="50"  width="50" align="left" noshade="noshade"   />
<hr color="yellow"  size="50"  width="50" align="left" noshade="noshade"   />
<p> **Fortissimo: dando un valore di size uguale a quello di width si ottiene un cerchio. Bisogna impostare anche "noshade=noshade" <b>TROPPO BELLO MA</b> non è supportato da IE</p>

<hr color="#0066CC" width="800" align="center" noshade="noshade"  />

<div id="footer">&copy; All content copyright 2007. Even
    the unfunny stuff. &copy;</div>

<hr size="50" width="50" align="left" style="list-style-type:square"  />
<hr size="50" width="50" align="left"    />
<hr size="80" width="80" style="border:dashed;background-color:#00CCFF"    align="left"  />


<div id="div1">  <hr color="#FF0000" size="50"  width="50" align="left" noshade="noshade"   />  </div>
<div id="div2">  <hr color="#006600" size="50"  width="50" align="left" noshade="noshade"   /> </div>
<div id="div3">  <hr color="#FFFF00" size="50"  width="50" align="left" noshade="noshade"   /> </div>
<div id="div4">  <hr color="#0000CC" size="50"  width="50" align="left" noshade="noshade"   /> </div>
<div id="div5">  <hr color="#000000"  size="50"  width="50" align="left" noshade="noshade"   /> </div>


<h3>em</h3>

<p>serve a rendere <var>del testo </var> in forma <em>italic</em> </p>




<h3>marquee</h3>

<p><marquee direction="right" align="right" vspace="50" behavior="alternate" width="250" loop="1">Bouncy bouncy!</marquee></p>

<marquee width="100" height="200" direction="down" bgcolor="#00FF99" behavior="slide"  > su e giù </marquee>


<h3>q</h3>
<p>Un testo compreso nel tag <b>q</b> viene <q>racchiuso dalle virgolette</q></p>
<p>The man said <q>Things that are impossible just take longer</q>. I disagreed with him.</p>



<h3>strong - b</h3>
<span class="nota"> b e strong sono due bold </span>

<p>Look <b>for the sign </b>that says
    <strong>turn left</strong>, then turn left!</p>

<h3>sub</h3>
<span class="nota"> sub fa <sub>abbassare il testo</sub> o una singola lettera: es H<sub>2</sub>O</span> 

<h3>sup</h3>
<span class="nota"> sup è il contrario si sub che fa alzare il testo: es. m<sup>3</sup> 10 </span>

<h3>tt</h3>
<p><tt>Testo con carattere monospazio</tt> Confrontalo con questa stringa che è normale </p>




<h1>Form Elements</h1>

<h3>Button</h3>
<p class="nota"> Button è un tentativo di miglioramento dell'input type submit. Quindi vi si può applicare il nome il valore e il type 
<br />In explorer è buggy </p> 

  <button  type="reset" name="pulsante_reset" value="reset">  I am <em>really</em> sure I want to proceed </button>

<br />

<form>

  <button accesskey="b" name="cmdsubmitter1"
      type="submit" value="blue">
      Take the <strong style="color:blue;">blue</strong> pill
  </button>
  <button accesskey="r" name="cmdsubmitter2"
      type="submit" value="red">
      Take the <strong style="color:red;">red</strong> pill
  </button>
</form>


<h3>fieldset</h3>
<p class="nota"> l'aggiunta di "legend" al suo interno crea una didascalia che si piazza sulla linea che crea il campo e che può essere piazzato a sinistra destra o centralmente
<br /> Al campo si possono applicare i diversi stili con i CSS. In Explorer gli angoli sono arrotondati ma in Firefox no. Tale incoveniente si supera impostando nel CSS una regola per i bordi dei fieldset (-moz-border-radius) che è una regola del livello 3 dei CSS supportata da Firefox(non da IE) .</p>


<form>
  <fieldset>
      <legend align="left">Friendship</legend>
      <input type="radio" name="radFriendship" value="Not_Applicable"  id="radFriendNot_Applicable"/>
      <label for="radFriendNot_Applicable">Not_Applicable</label> 
       <input type="radio" name="radFriendship" value="acquaintance" id="radFriendaquaintence"/>
      <label for="radFriendaquaintence">acquaintance</label>
      <input type="radio" name="radFriendship" value="friend" id="radFriendfriend"/>
     <label for="radFriendfriend">friend</label>
  </fieldset>
</form>

<br />
<fieldset class="campo_field"> <!--  -->
<legend align="center"> legend al centro </legend>
<p> Da Notare che nei fieldset l'unico valore impostabile è <u><em>legend</em></u>. Però si possono usare le regole del CSS per impostare i vari stili.le". Ma impostando le regole CSS (es: il background) in IE si perde il bordo arrotondato.  
   <br />
 </fieldset>

<br /><br />

<div id="div_fieldset">
<fieldset class="in_div">
<legend align="left" style="color:#333333;"> Fieldset in div </legend>
Questo fieldset sta all'interno di un div 
</fieldset>

</div>


</div>

<h3>label</h3>
<span class="nota"> l'uso di questo tag è quello di collegare, con l'attributo "for", il testo contenuto nel tag al form <br />
C'è un altro metodo invece di usare l'attributo "for" che è quello di racchiudere il form nel tag label </span> 
<br />
<label for="b" accesskey="b"><input type="radio"
    name="radFriendship" value="Not_Applicable" id="b"/>
    Not_Applicable</label>

<br />

<input type="radio" name="radFriendship" value="Not_Applicable"
    id="b"/>
<label for="b" accesskey="b">Not_Applicable</label>

<h3>select</h3>
<span class="nota"> La select ha l'attributo "multiple" che permette di fare più selezioni e inviarle col form;<br />
inoltre il "size" stabilisce l'altezza del campo  </span>

<form>
  <select name="favoritefood" size="1">
      <option>Cheese</option>
      <option>Egg</option>
      <option>Cabbage</option>
      <option>Lettuce</option>
      <option>fasuul</option>
      <option>cipodd</option>
      <option>papruss</option>
      <option  selected="selected">Onions</option>
      <option>Courgettes</option>
  </select>
</form>





<h3>optgroup</h3>

<form>
  <select name="favoritefood">
    <optgroup label="Dairy products">
      <option>Cheese</option>
      <option>Egg</option>
    </optgroup>
    <optgroup label="Vegetables">
      <option>Cabbage</option>
      <option>Lettuce</option>
      <option>fasuul</option>
      <option selected="selected">Onions</option>
      <option>Courgettes</option>
    </optgroup>
  </select>
</form>

<br />

<h3>option</h3>
<span class="nota"> le voci di option all'interno di select possono anche  essere disabilitate </span>
<br />
<form>
  <label for="favoritefood">Favorite food</label>
  <select name="favoritefood" id="favoritefood">
    <option>Cheese</option>
    <option>Egg</option>
    <option disabled="disabled">Cabbage</option>
    <option disabled="disabled">Lettuce</option>
  </select>

<br />
<span class="nota"> l'attributo "value" in option raprresenta il valore che avrà riscontro nel database associato. </span>
<br />
<form>
  <label for="favoritefood">Favorite food</label>
  <select name="favoritefood" id="favoritefood" >
    <option value="1">Cheese</option>
    <option value="2">Egg</option>
    <option value="3">Cabbage</option>
  </select>
</form>

<h3>textarea</h3>
<span class="nota"> l'attributo "cols" stabilisce la larghezza del campo: cls=20 vuoil dire che il campo sarà largo tanto quanto a contenere 20 caratteri. <br />
l'attributo "rows" stabilisce l'altezza del campo in base rapportata al numero di caratteri che vale il discorso come per "cols"  </span>
l'attributo "readonly" toglie all'user la possibilità di cambiare il testo, qualora, contenuto nel campo; <br />

<form>
  <label for="perfectday">Describe your perfect day:</label>
  <textarea id="perfectday" accesskey="d" cols="40" rows="5"></textarea>
  <input type="submit" value="Tell us"/>
</form>

<br /><br />



<h3>pre</h3>

<pre> 
questo è un esempio col tag pre. 
  Qui sono andato a capo  
</pre>




































</body>
</html>
