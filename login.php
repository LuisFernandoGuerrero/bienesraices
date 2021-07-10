<?php 
    // COnectar la db
    require 'includes/config/database.php';
    $db = conectarDB();

    // Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        
        $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['contraseña']);

        if (!$email) {
            $errores[] = "El Email es obligatorio o no es válido";
        }
        if (!$password) {
            $errores[] = "Contraseña incorrecta";
        }

        if (empty($errores)) {
            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);


            if ($resultado->num_rows) {
                // Revisar si la contraseña es correcta
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si la contraseña es correcta o no
                $auth = password_verify($password, $usuario['password']);

                if ($auth) {
                    // El usuario está autenticado
                    session_start();

                    // Llenar el arreglo de la sesión
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: /admin');
                
                } else {
                    $errores[] = "Contraseña incorrecta segunda";
                }
            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }

    // Incluye el header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach;?>

        <form method="POST" class="formulario" novalidate>
        <fieldset>
            <legend>Email y Contraseña</legend>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" required>

                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" placeholder="Tu contraseña" required>
            
        </fieldset>

        <input type="submit" value="Iniciar Sesión", class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>