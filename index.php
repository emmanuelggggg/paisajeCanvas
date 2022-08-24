<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paisaje</title>
</head>
<body>

    <style> canvas{ background-color:#89CFFD;}</style>
    <canvas id="mycanvas" width="1000px" height="600px">
    </canvas>

    <script>
        var cv = document.getElementById('mycanvas');
        var contexto = cv.getContext('2d');
        //casa
        contexto.fillStyle = '#FF7F3F';
        contexto.fillRect(100,400,350,250);

        //techo 
        contexto.moveTo(100,400);
        contexto.fillStyle = '#A62349'; 
        contexto.lineTo(280,300);
        contexto.lineTo(450,400);
        contexto.fill();
        //ventanas
        contexto.fillStyle = '#FFCB42';
        contexto.fillRect(130,460,30,30);
        contexto.fillStyle = '#FFCB42';
        contexto.fillRect(170,460,30,30);
        contexto.fillStyle = '#FFCB42';
        contexto.fillRect(130,500,30,30);
        contexto.fillStyle = '#FFCB42';
        contexto.fillRect(170,500,30,30);

        //puerta
        contexto.fillStyle = '#AC4425';
        contexto.fillRect(250,520,45,80);
        //sol
        contexto.beginPath();
        contexto.fillStyle = '#FBDF07';
        contexto.arc(0,0,100,0,2*Math.PI);
        contexto.fill();

        //nubes
        contexto.beginPath();
        contexto.fillStyle = 'white';
        contexto.arc(300,90,50,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = 'white';
        contexto.arc(350,50,50,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = 'white';
        contexto.arc(390,90,80,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = 'white';
        contexto.arc(450,90,50,0,2*Math.PI);
        contexto.fill();
        //tronco
        contexto.fillStyle = '#876445'
        contexto.fillRect(750,370,100,230);
        //hojas
        contexto.beginPath();
        contexto.fillStyle = '#7DCE13';
        contexto.arc(700,300,80,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = '#7DCE13';
        contexto.arc(900,300,80,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = '#7DCE13';
        contexto.arc(750,360,80,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = '#7DCE13';
        contexto.arc(860,360,80,0,2*Math.PI);
        contexto.fill();
        contexto.beginPath();
        contexto.fillStyle = '#7DCE13';
        contexto.arc(800,260,80,0,2*Math.PI);
        contexto.fill();
     

       
    </script>
</body>
</html>