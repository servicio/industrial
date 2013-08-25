

<html>
    <head>
        <script type="text/javascript" src="../bootsTrap/js/jquery.min.js"></script>
        <script>
//            function  recargar() {
                $(document).ready(function() {
                    var refreshId = setInterval(refrescarTablaEstadoSala, 3000);
                    $.ajaxSetup({cache: false});
                    
                    function refrescarTablaEstadoSala() {
                        $('#noticias').load('avisos.php');
//                        alert("recarga");
                        //  $("#rolling").toggle();
                        //  $("#salastatus").css('opacity', 0.4);
                        //   $("#salastatus").load('estadoSala.do?randval=' + Math.random() + " #resulttable", function() {
                        //   //aquí puedes meter más código si necesitas;
                        //    $("#salastatus").css('opacity', 1);
                        //    $("#rolling").toggle();
                        //  });
                    }
                });
//            }

        </script>
    </head>
    <body onload="recargar();">
    <center>
        <div style="width: 960px">

            <h1>Pruebas</h1>
            <br>

            <div id="noticias">

            </div>
        </div>
    </center>
</body>
</html>