<h7>Selecciona la ubicacion del reporte en el mapa</h7>
<div id='map' ></div>
<div class="coordenadas">
<p >
  <b>Posición del marcador:</b><br><span id="currentPosition"></span>
</p>
</div>
<form id="report_form">
        <h6>Reporte</h6>
        <br>
        <label>Titulo</label>
        <input type="text" placeholder="Titulo" id="titulo" />
        <label>Descripcion del problema</label>
        <textarea placeholder="Describe el problema" id="descripcion"></textarea>
        <label>Agrega una foto</label>
        <input type="file" id="foto">
        <input type="hidden" value=" <?php echo $idusuario?> " id="idusuario">
        <button type="submit" value="Reportar" id="enviar">Reportar</button> 
</form>
<script type="text/javascript" src="/src/js/mapform.js"></script>
<script type="text/javascript" src="/src/js/registroR.js"></script>