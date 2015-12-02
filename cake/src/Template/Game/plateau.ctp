 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" >
<script type='text/javascript' src='/js/d6.js'></script>
<link rel="stylesheet" href="/css/deco.css" />
<title>Qwinto</title>
</head>
<body>

<script type="text/javascript">
    var totalDices = 0;
    var goesInDices = 0;

    function putValuesInDices() {
      var idOfTD = "txt";
      var inner = '';
      var x = document.getElementById("txt0_3");
      for(var i = 0; i < 12; i++) {
        for(var j = 0; j < 2; j++) {
            idOfTD += i + "_" + j;
            inner = document.getElementById(idOfTD);
            if(inner.innerHTML == "") {
                if(i == 3 && j == 0) {
                    if(document.getElementByid("txt1_3").innerHTML == doesInDices || document.getElementByid("txt2_3").innerHTML == doesInDices)
                        alert("Cannot put that value there");
                    else
                        x.innerHTML = goesInDices;
                }
            } else {
                alert("There is already a value there!");
            }
        }
      }
      goesInDices = 0;
    }

    function roll(n) {
        var dice = ['\u2680', '\u2681', '\u2682', '\u2683', '\u2684', '\u2685'];
        var results = '';
        var rand = '';
        var val1;
        var val2;
        var val3;
        for (var i=0; i<n; i++) {
            rand = Math.floor(Math.random()*6);
            results += dice[rand] + ' ';
            totalDices += rand + 1;
            if (i == 0)
                val1 = rand + 1;
            if (i == 1)
                val2 = rand + 1;
            if (i == 2)
                val3 = rand + 1;
        }
        document.getElementById("dice0_0").innerHTML = val1;
        document.getElementById("dice0_1").innerHTML = val2;
        document.getElementById("dice0_2").innerHTML = val3;
        results += totalDices;
        goesInDices = totalDices;
        totalDices = 0;
        return results;
    }
    
    function doRoll(countElem, resultElem) {
        document.getElementById(resultElem).innerHTML = roll(countElem);
    }
</script>

<!--plateau -->
</br>
<table height="200" cellspacing="0" cellpadding="5">
   <tr id="ligne_rouge">
     <td id="c0_0"></td>
     <td id="c0_1"></td>
     <td type="button" onclick="putValuesInDices()" id="c0_2">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39" id="txt0_2"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_3">
       <svg>
	 <polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_4">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c0_5"></td>
     <td onclick="putValuesInDices()" id="c0_6">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_7">
       <svg>
	 <polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_8">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_9">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_10">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td onclick="putValuesInDices()" id="c0_11">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles0"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
   </tr>
   <tr>
     <td class="break"></td>
   </tr>
   <tr id="ligne_jaune">
     <td id="c1_0"></td>
     <td id="c1_1">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_2">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_3">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_4">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_5">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_6"></td>
     <td id="c1_7">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_8">
       <svg>
	 <polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_9">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_10">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles1"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c1_11"></td>
   </tr>
   <tr><td class="break"></td></tr>
   <tr id="ligne_bleu">
     <td id="c2_0">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_1">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_2">
       <svg>
	 <polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_3">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_4"></td>
     <td id="c2_5">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_6">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_7">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_8">
       <svg>
	 <circle cx="28" cy="28" r="26" class="circles2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_9">
       <svg>
	 <polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons2"/>
	 <text x="28" y="39"></text>
       </svg>
     </td>
     <td id="c2_10"></td>
     <td id="c2_11"></td>
   </tr>
</table>
</br>




<!--coups manqués -->
<table cellspacing="10">
  <tr>
    <td id="manque_txt">Coup manqué -5</td>
    <td id="m0_0">
       <svg>
	<line x1="10" y1="10" x2="46" y2="46"/>
	<line x1="46" y1="10" x2="10" y2="46"/>
      </svg>
    </td>
    <td id="m0_1">
      <svg>
	<line x1="10" y1="10" x2="46" y2="46"/>
	<line x1="46" y1="10" x2="10" y2="46"/>
      </svg>
    </td>
    <td id="m0_2">
      <svg>
	<line x1="10" y1="10" x2="46" y2="46"/>
	<line x1="46" y1="10" x2="10" y2="46"/>
      </svg>
    </td>
    <td id="m0_3">
      <svg>
	<line x1="10" y1="10" x2="46" y2="46"/>
	<line x1="46" y1="10" x2="10" y2="46"/>
      </svg>
    </td>
    <td id="m0_4">
      <svg>
	<line x1="10" y1="10" x2="46" y2="46"/>
	<line x1="46" y1="10" x2="10" y2="46"/>
      </svg> 
    </td>
  </tr>
</table>

<button onclick="doRoll(3, 'dice-roll-result')">Roll</button></br>
<span style="font-size: 64px; line-height: normal; color:#FF601D" id="dice-roll-result">&#x2680 &#x2680 &#x2680</span>

<!--total -->
<table cellspacing="10" id="total">
  <tr>
    <td id="t0_0">
      <svg>
	<text id="dice0_0" x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_1">
      <svg>
	<text id="dice0_1" x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_2">
      <svg>
	<text id="dice0_2" x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_3"><b><font color="white">+</font></b></td>
    <td id="t0_4">
      <svg>
	<polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons3"/>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_5">
      <svg>
	<polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons3"/>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_6">
      <svg>
	<polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons3"/>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_7">
      <svg>
	<polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons3"/>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_8">
      <svg>
	<polygon points="28,1,55,24,43,55,14,55,1,24" class="polygons3"/>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_9"><b><font color="white">-</font></b></td>
    <td id="t0_10">
      <svg>
	<text x="28" y="39"></text>
      </svg>
    </td>
    <td id="t0_11"><b><font color="white">=</font></b></td>
    <td id="t0_12">
      <svg>
	<text x="28" y="39"></text>
      </svg>
    </td>
  </tr>
</table>
<span>&#x2115&#x2148&#x2102&#x2365</span>
</body>
</html> 
