<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Centrar el formulario */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Borde del formulario */
        .form-card {
            padding: 2rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Sombras en los inputs al escribir (focus) */
        input:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }

        /* Sombras más ligeras cuando el input está activo */
        input {
            transition: box-shadow 0.3s ease-in-out;
        }

        /* Efecto al hacer clic en el botón */
        button:active {
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.7);
            transform: scale(0.98);
        }

        /* Efecto al pasar el mouse sobre el botón */
        button:hover {
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
        }

        /* Transición suave para el botón */
        button {
            transition: all 0.2s ease-in-out;
        }

        /* Modo oscuro */
        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        .dark-mode .form-card {
            background-color: #333;
            border-color: #555;
        }

        /* Botón de modo oscuro */
        .dark-mode-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }

        /* Botón para mostrar/ocultar contraseña */
        .password-toggle {
            cursor: pointer;
            margin-top: 0.5rem;
            font-size: 0.9rem;
            color: #007bff;
            display: inline-block;
        }

    </style>
</head>
<body>

    <button class="btn btn-secondary dark-mode-toggle">Modo Oscuro</button>

    <div class="form-container">
        <div class="form-card">
            <h1 class="text-center mb-4">Regístrate aquí</h1>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                    <span class="password-toggle" onclick="togglePassword()">Mostrar contraseña</span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para cambiar entre modo oscuro y claro
        const toggleButton = document.querySelector('.dark-mode-toggle');
        toggleButton.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            toggleButton.textContent = document.body.classList.contains('dark-mode') ? 'Modo Claro' : 'Modo Oscuro';
        });

        // Función para mostrar/ocultar la contraseña
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.textContent = 'Ocultar contraseña';
            } else {
                passwordInput.type = 'password';
                passwordToggle.textContent = 'Mostrar contraseña';
            }
        }
    </script>
</body>
</html>
