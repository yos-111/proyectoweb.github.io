<!-- registro.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Visitantes</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- CONTENEDOR -->
    <section class="visitor-section">

        <div class="visitor-card">

            <h1>Registro de Visitantes</h1>

           <form action="guardar.php" method="POST">

                <!-- NOMBRE -->
                <div class="form-group">

                    <label for="nombre">
                        Nombre:
                    </label>

                   <input type="text" id="nombre" name="nombre">

                </div>

                <!-- CORREO -->
                <div class="form-group">

                    <label for="correo">
                        Correo electrónico:
                    </label>

                    <input type="email" id="correo" name="correo">

                </div>

                <!-- COMENTARIOS -->
                <div class="form-group textarea-group">

                    <label for="comentarios">
                        Comentarios del visitante:
                    </label>
					

                    <textarea 
                        id="comentarios" 
                        name="comentarios">
                    </textarea>

                </div>

                <!-- BOTÓN -->
                <button type="submit" class="visitor-btn">
                    Registrar Visitante
                </button>

            </form>

        </div>

    </section>

</body>
</html>
