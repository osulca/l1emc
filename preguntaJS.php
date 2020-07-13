<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<input type="text" id="frase"/>
<button onclick="procesar()">Procesar</button>
</body>
<script>
    function procesar() {
        var frase = document.getElementById("frase").value;
        frase = frase.toLowerCase();
        var fraseArray = Array.from(frase);
        var contador = 0;
        for(var i=0; i<fraseArray.length; i++){
            if((fraseArray[i]=="a") || (fraseArray[i]=="e") || (fraseArray[i]=="i") || (fraseArray[i]=="o") || (fraseArray[i]=="u")){
                contador++;
            }
        }
        alert("la frase tiene " + contador + " vocales");
    }
</script>
</html>
