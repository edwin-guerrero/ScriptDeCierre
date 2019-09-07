<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Script de Cierre Soporte en Sitio</title>
        <meta charset="utf-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            //buscador de soporte en sitio
            $(function(){
                $("#buscador").autocomplete({
                    source: 'buscador_ss.php'                    
                    }
                );  
            });
        </script>
        <script>
            //buscador de Ofimática
            $(function(){
                $("#buscador2").autocomplete({
                    source: 'buscador.php'                    
                    }
                );  
            });
        </script>
    </head>
    <body>
        <div class="container">
        <ul class="collapsible" data-collapsible="accordion">
            <li> <!--sitio-->
            <div class="collapsible-header">
                <i class="material-icons">chat</i>
                Script Cierre Soporte en Sitio
            </div>
            <div class="collapsible-body">    
            <div class="row" id="contenedor"> 
                <div class="card-panel teal lighten-2 col s12 white-text" align="center" ><h5 class="center-align">SCRIPT DE CIERRE SOPORTE EN SITIO</div>
                <form id="form_Limpiar">
                    <div class="col s6" id="buscar">
                        <div class="input-field">
                            <input id="inp_nombre_ss" type="text" class="validate">
                            <label for="inp_nombre_ss">Nombre Usuario/a</label>
                        </div> 
                        <div class="input-field">
                            <textarea class="materialize-textarea" name="Diagnostico" id="inp_problema"></textarea>
                            <label for ="inp_problema">Descripción del problema:</label>
                        </div>
                        <div class="input-field">
                            <textarea class="materialize-textarea" name="Pruebas" id="inp_pruebas_ss"></textarea>
                            <label id="L_pruebas" for="inp_pruebas_ss">Pruebas:</label>
                        </div>
                        <div class="input-field">
                            <textarea class="materialize-textarea" name="Solucion" id="inp_solucion_ss"></textarea>
                            <label id="L_solucion" for="inp_solucion_ss">Solución:</label>
                        </div>
                        <div class="input-field">
                            <input type='text' name='buscador' value='' id='buscador'>
                            <label id="L_error" for="buscador">Tipo de error: </label>                                
                        </div>
                    </div>
                </form>
                <div class="col s6" id="div_boton">
                        <h7 class="indigo-text darken-3">Presione  copiar para ver script de cierre y llevar al portapapeles<br>
                        <!-- textbox que me recibe la concatenación-->    
                        <textarea id="bar" class="materialize-textarea" style="height:250px"></textarea><br>
                        <!-- Concatenación del script-->
                        <script>
                            $("#boton").click(function(){
                            });
                            function resultados(){
                                
                                var va_saludo = "Estimado Usuario: ";
                                var va_nombre=document.getElementById('inp_nombre_ss').value;
                                var va_problema =document.getElementById('inp_problema').value;
                                var va_pruebas =document.getElementById('inp_pruebas_ss').value;
                                var va_solucion =document.getElementById('inp_solucion_ss').value;
                                var va_buscar =document.getElementById('buscador').value;
                                var despedida = "Agradecemos su atención. Portal Tecnología";
                                //validar si los campos se encuentran nullos
                                if ($("#inp_problema").val()===""||$("#inp_pruebas_ss").val()===""||$("#inp_solucion_ss").val()===""||$("#buscador").val()===""||$("#input_nombre").val()===""){
                                    alert("Rellene Todos los campos");
                                }else if (va_buscar.match(/Otros:/)) {
                                    /*popup tipologia Otro"*/
                                        var va_otro = prompt("Digite el motivo de selección Otros:");
                                    //concatenación de las variables con tipologia "Otro:"
                                    $("#bar").text(va_saludo+va_nombre+", los procedimientos de su caso fueron los siguientes: "+'\r'+"Descripción del problema: "+'\r'+va_problema+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+" "+va_otro+"."+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#bar");
                                    $temp.val($("#bar").text()).select();
                                    document.execCommand("copy");                                
                                }else{
                                    //concatenación de las variables sin "Otro:"
                                    $("#bar").text(va_saludo+va_nombre+",los procedimientos de su caso fueron los siguientes: "+'\r'+"Descripción del problema: "+'\r'+va_problema+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#bar");
                                    $temp.val($("#bar").text()).select();
                                    document.execCommand("copy");                                
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
                        <button class="btn" type="submit" onclick="Limpiar2()" id="btn_Limpiar">Limpiar</button>
                            <script >
                              $("#btn_Limpiar").click(function(event) {
                              $("#form_Limpiar")[0].reset();
                              $("#inp_nombre_ss").focus();
                                });
                            </script> 
                    <br>
                </div>
            </div>
            </div>
        </li><!--Script de cierre soporte en sitio-->
            <li><!--Script de cierre ofimática-->
                <div class="collapsible-header">
                    <i class="material-icons">chat</i>
                    Script Cierre Ofimática
                </div>
                <div class="collapsible-body"> 
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
                            <textarea class="materialize-textarea" name="Solucion" id="inp_solucion"></textarea>
                            <label for="inp_solucion" id="L_solucion">Solución:</label>
                        </div>
                        <div class="input-field">
                            <input type='text' name='buscador' value='' id='buscador2'>
                            <label for="buscador2" id="L_error">Tipo de error: </label>
                        </div>
                    </div>
                </form>
                <div class="col s6" id="div_boton">
                        <h7 class="indigo-text darken-3">Presione  copiar para ver script de cierre y llevar al portapapeles
                        <!-- textbox que me recibe la concatenación-->    
                        <textarea id="textarea_bar" class="materialize-textarea" style="height:250px"></textarea><br>
                        <!-- Concatenación del script-->
                        <script>
                            $("#boton").click(function(){
                            });
                            function resultadosOF(){                                
                                var va_saludo = "Buen día Sr. Usuario, según el error o fallo reportado se realizaron los siguientes procesos: ";
                                var va_diagnostico =document.getElementById('inp_diagnostico').value;
                                var va_pruebas =document.getElementById('inp_pruebas').value;
                                var va_solucion =document.getElementById('inp_solucion').value;
                                var va_buscar =document.getElementById('buscador2').value;
                                var despedida = "Agradecemos su atención. Portal Tecnología";
                                //validar si los campos se encuentran nullos
                                if ($("#inp_diagnostico").val()===""||$("#inp_pruebas").val()===""||$("#inp_solucion").val()===""||$("#buscador2").val()===""){
                                    alert("Rellene Todos los campos");
                                }else if (va_buscar.match(/Otros:/)) {
                                    /*popup tipologia Otro"*/
                                        var va_otro = prompt("Digite el motivo de selección Otros:");
                                    //concatenación de las variables con tipologia "Otro:"
                                    $("#textarea_bar").text(va_saludo+'\r'+"Diagnostico: "+'\r'+va_diagnostico+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+" "+va_otro+"."+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#textarea_bar");
                                    $temp.val($("#textarea_bar").text()).select();
                                    document.execCommand("copy");                                
                                }else{
                                    //concatenación de las variables sin "Otro:"
                                    $("#textarea_bar").text(va_saludo+'\r'+"Diagnostico: "+'\r'+va_diagnostico+'\r'+"Pruebas: "+'\r'+va_pruebas+'\r'+"Solución: "+'\r'+va_solucion+'\r'+"Tipo de Error: "+va_buscar+'\r'+"Agradecemos su comprensión"+'\r'+'\r'+"Portal Tecnología");
                                    // copiado del script
                                    var $temp = $("#textarea_bar");
                                    $temp.val($("#textarea_bar").text()).select();
                                    document.execCommand("copy");                                
                                }
                            }
                        </script>
                        <script >
                            $('#textarea_bar').trigger('autoresize');
                        </script>
                        <!-- botón copiar -->
                        <button class="btn" type="submit" onclick="resultadosOF()" data-clipboard-action="cut" data-clipboard-target="#textarea_bar" id="boton">
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
            </li>
        </ul>
        </div>
    </body>
</html>