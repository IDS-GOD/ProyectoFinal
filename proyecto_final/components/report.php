
<form id ="report_form">
        <h6>Reporte</h6>
        <br>
        <label>Titulo</label>
        <input type="text" placeholder="Titulo" id="titulo" required/>
        <label>Descripcion del problema</label>
        <textarea placeholder="Describe el problema" id="descripcion" required></textarea>
        <label>Agrega una foto</label>
        <input type="file" id="foto">
        <label>Selecciona la ubicacion en el <a href="/perfil.php">mapa</a> </label>
        <button type="submit" value="Reportar" id="enviar">Reportar</button> 
        
</form>