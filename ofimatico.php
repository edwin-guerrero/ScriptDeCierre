<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Script de Cierre Ofimática</title>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            $(function(){
                $("#buscador").autocomplete({
                    source: 'buscador.php',
                    select: function(event,iu){
                            $("#buscador").prop("disabled",true);    
                        }
                    });
                });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row" id="contenedor"> 
                <div class="card-panel teal lighten-2 col s12 white-text" align="center" ><h5 class="center-align">SCRIPT DE CIERRE OFIMÁTICA</div>
                <form id="form_LimpiarOF">
                    <div class="col s6" id="buscar">                        
                        <div class="input-field">
                            <textarea class="materialize-textarea" name="Diagnostico" id="inp_diagnostico"></textarea>
                            <label for="inp_diagnostico" id="L_diagnostico">Diagnóstico:</label>
                        </div>
                        <div class="input-field"> 
                            <textarea class="materialize-textarea" name="Pruebas" id="inp_pruebas"></textarea>
                            <label for="inp_pruebas" id="L_pruebas">Pruebas:</label>
                        </div>
                        <div class="input-field">
                            <label id="L_solucion">Solución:</label>
                            <textarea class="materialize-textarea" name="Solucion" id="inp_solucion"></textarea>
                        </div>
                        <div class="input-field">
                            <input type='text' name='buscador' value='' id='buscador'>
                            <label for="buscador" id="L_error">Tipo de error: </label>
                        </div>
                    </div>
                </form>
                <div class="col s6" id="div_boton">
                        <h7 class="indigo-text darken-3">Presione  copiar para ver script de cierre y llevar al portapapeles
                        <!-- textbox que me recibe la concatenación-->    
                        <textarea id="bar" class="materialize-textarea" style="height:250px"></textarea><br>
                        <!-- Concatenación del script-->
                        <script>
                            $("#boton").click(function(){
                            });
                            function resultados(){
                                
                                var va_saludo = "Buen día Sr. Usuario, según el error o fallo reportado se realizaron los siguientes procesos: ";
                                var va_diagnostico =document.getElementById('inp_diagnostico').value;
                                var va_pruebas =document.getElementById('inp_pruebas').value;
                                var va_solucion =document.getElementById('inp_solucion').value;
                                var va_buscar =document.getElementById('buscador').value;
                                var despedida = "Agradecemos su atención. Portal Tecnología";
                                //validar si los campos se encuentran nullos
                                if ($("#inp_diagnostico").val()===""||$("#inp_pruebas").val()===""||$("#inp_solucion").val()===""||$("#buscador").val()===""){
                                    alert("Rellene Todos los campos");
                                }else if (va_buscar.match(/Otros:/)) {
                                    /*popup tipologia Otro"*/
                                        var va_otro = prompt("Digite el motivo de selección Otros:");
                                    //concatenación de las variables con tipologia "Otro:"
                                    $("#bar").text(va_saludo+'\r'+"Diagnostico: "+'\r'+va_diagnostico+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+" "+va_otro+"."+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#bar");
                                    $temp.val($("#bar").text()).select();
                                    document.execCommand("copy");                                
                                
                                // parametro de variables del formulario y la variable va_otro
                                var parametros={Diagnostico:va_diagnostico,Pruebas:va_pruebas,Solucion:va_solucion,buscador:va_buscar,va_otro:va_otro};
                                //quitar comentario para validar datos de parametro
                                //alert (parametros);
                                //return false;
                                $.ajax({
                                    type:"POST",
                                    url:"registro.php",
                                    data: parametros,
                                    // esta funcion me indica por consola si es agregado a la base de datos, partiendo del echo del PHP
                                    success:function(r){
                                        if (r==1){
                                            console.log("Registro Agregado");
                                        }else{
                                            console.log("Registro No Agregado");
                                        }
                                    }

                                });
                                return false;                                

                                }else{
                                    //concatenación de las variables sin "Otro:"
                                    $("#bar").text(va_saludo+'\r'+"Diagnostico: "+'\r'+va_diagnostico+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#bar");
                                    $temp.val($("#bar").text()).select();
                                    document.execCommand("copy");

                                // parametro de variables del formulario
                                var parametros={Diagnostico:va_diagnostico,Pruebas:va_pruebas,Solucion:va_solucion,buscador:va_buscar,va_otro:""};
                                //quitar comentario para validar datos de parametro
                                //alert (parametros);
                                //return false;
                                $.ajax({
                                    type:"POST",
                                    url:"registro.php",
                                    data: parametros,
                                    // esta funcion me indica por consola si es agregado a la base de datos, partiendo del echo del PHP
                                    success:function(r){
                                        if (r==1){
                                            console.log("Registro Agregado");
                                        }else{
                                            console.log("Registro No Agregado");
                                        }
                                    }

                                });
                                return false;
                                                                    
                                }
                            }
                        </script>
                        <script >
                            $('#bar').trigger('autoresize');
                        </script>
                        <!-- botón copiar -->
                        <button class="btn" type="submit" onclick="resultados()" data-clipboard-action="cut" data-clipboard-target="#bar" id="boton">
                            Copiar
                        </button>
                        <button class="btn" type="submit" onclick="Limpiar2()" id="btn_LimpiarOF">Limpiar</button>
                            <script >
                              $("#btn_LimpiarOF").click(function(event) {
                              $("#form_LimpiarOF")[0].reset();
                              $("#inp_diagnostico").focus();
                                });
                            </script> 
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>