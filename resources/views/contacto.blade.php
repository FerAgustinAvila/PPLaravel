

@include('head');
    <title> Contact </title>

@include('cabecera');

    <body class="content">
        
        <h1 class="title content"> Contáctame </h1>
        <div class="cont-form">
            <form action="envia.php" method="post" class="form-consulta"> 
                <label>Nombre y apellido:
                    <input type="text" name="nombre" placeholder="Nombre y apellido..." class="campo-form" required>
                </label>
                
                <label>Email:
                    <input type="email" name="email" placeholder="Email..." class="campo-form" required>
                </label>
                
                <label>Consulta:
                    <textarea name="consulta" class="campo-form"></textarea>
                </label>

                <input type="submit" value="Enviar" class="btn-form">
            </form>
        </div>
        
    </body>
</html>
