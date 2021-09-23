 <div id="contenido">
        <h1>Contacto</h1>
        <br>
        <p>Estos son los datos de contacto</p>
        <br>
        <!-- <div id="redes">
          <b>Redes sociales</b>
          
          <ul>
            <li><a href="www.fb.com">Facebook</a></li>
            <li><a href="www.twitter.com">Twitter</a></li>
            <li><a href="www.instagram.com">Instagram</a></li>
          </ul>
        </div> -->
        
        <br>

        <b>Telefono:</b>
        <span><p>3834101010</p></span>

        <b>Correo:</b>
        <span><p>Hernan.diiaz@gmail.com</p></span>
        <br><br>
      
        <h2>Formulario de contacto</h2><br>
        <h3>Contactame:</h3>
        <form action="formContacto.php" method="POST">
        <label for="nombre">Ingresa tu Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="email">Ingresa tu email:</label>
        <input type="email" name="email" pattern=".+@gmail.com" size="30" required><br>
        
        <textarea name="consulta" id="consulta" 
        cols="50" rows="10" placeholder="Tu consulta..."></textarea>
        <br>
        <button type="submit" value="Enviar">Enviar</button>
        </form>

      </div>