<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATRICK TA BEAUTY</title>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --rosa-dorado: #e8a598;
            --rosa-pastel: #fbdada;
            --dorado: #d4af37;
            --dorado-oscuro: #aa8c2c;
            --texto-oscuro: #333333;
            --blanco: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #faf5f5;
            color: var(--texto-oscuro);
        }

        /* Barra de navegación en dorado */
        nav {
            background: linear-gradient(135deg, var(--dorado), var(--dorado-oscuro));
            padding: 15px 30px;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        nav .logo {
            font-family: 'Alex Brush', cursive;
            font-size: 2.2rem;
            color: var(--blanco);
            text-decoration: none;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav ul li a {
            color: var(--blanco);
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--rosa-pastel);
        }

        /* Título con Lettering Rosa */
        header {
            text-align: center;
            padding: 40px 20px 20px 20px;
            background-color: var(--rosa-pastel);
            border-bottom: 3px solid var(--rosa-dorado);
        }

        header h1 {
            font-family: 'Alex Brush', cursive;
            font-size: 4.5rem;
            color: var(--rosa-dorado);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 5px;
        }

        header p {
            letter-spacing: 3px;
            font-weight: 600;
            color: var(--dorado-oscuro);
            font-size: 1.1rem;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Sección Bienvenida */
        .bienvenida-section {
            background: var(--blanco);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 40px;
            border: 1px solid var(--rosa-pastel);
        }

        .bienvenida-img-main {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .grid-bienvenida {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 20px;
            align-items: center;
        }

        .grid-bienvenida img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .texto-bienvenida {
            text-align: center;
            padding: 0 15px;
        }

        .texto-bienvenida h2 {
            color: var(--rosa-dorado);
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* Sección Catálogo */
        .seccion-titulo {
            text-align: center;
            font-size: 2.2rem;
            color: var(--dorado-oscuro);
            margin: 40px 0 20px 0;
            position: relative;
        }

        .seccion-titulo::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background: var(--rosa-dorado);
            margin: 10px auto 0 auto;
        }

        .catalogo-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }

        .card-catalogo {
            background: var(--blanco);
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            text-align: center;
            border: 1px solid var(--rosa-pastel);
        }

        .card-catalogo img {
            width: 100%;
            height: 350px;
            object-fit: contain;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        /* Formularios */
        .form-section {
            background: var(--blanco);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 40px;
            border-top: 4px solid var(--rosa-dorado);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--texto-oscuro);
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #fafafa;
        }

        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none;
            border-color: var(--rosa-dorado);
            background-color: var(--blanco);
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--rosa-dorado), var(--dorado));
            color: var(--blanco);
            border: none;
            padding: 14px 28px;
            font-size: 1rem;
            font-weight: 700;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: opacity 0.3s;
        }

        .btn-submit:hover {
            opacity: 0.9;
        }

        .total-box {
            background-color: var(--rosa-pastel);
            padding: 15px;
            border-radius: 6px;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dorado-oscuro);
            text-align: center;
            margin-top: 15px;
        }

        /* Footer Rosa */
        footer {
            background-color: #f7a8b8;
            color: var(--blanco);
            text-align: center;
            padding: 25px 15px;
            margin-top: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 -4px 10px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <!-- Barra de Navegación Dorado -->
    <nav>
        <a href="#" class="logo">Patrick Ta</a>
        <ul>
            <li><a href="#bienvenida">Inicio</a></li>
            <li><a href="#catalogo">Catálogo</a></li>
            <li><a href="#seleccion">Comprar</a></li>
            <li><a href="#entrega">Entrega</a></li>
            <li><a href="#registro">Registro</a></li>
        </ul>
    </nav>

    <!-- Encabezado con Lettering Rosa -->
    <header>
        <h1>Patrick Ta Beauty</h1>
        <p>MAJOR HEADLINES COLLECTION</p>
    </header>

    <div class="container">

        <!-- Sección Bienvenida -->
        <section id="bienvenida" class="bienvenida-section">
            <img src="img/banner.jpg" alt="Patrick Ta Banner" class="bienvenida-img-main">
            <div class="grid-bienvenida">
                <img src="img/patrick_photo.jpg" alt="Patrick Ta Portrait">
                <div class="texto-bienvenida">
                    <h2>Bienvenidos al Arte del Maquillaje</h2>
                    <p>Descubre la línea exclusiva de rubores cremosos y en polvo diseñados para resaltar la belleza natural de tu piel con acabados radiantes y de alta pigmentación.</p>
                </div>
                <img src="img/colection.jpg" alt="Colección Patrick Ta">
            </div>
        </section>

        <!-- Sección Catálogo de Rubores -->
        <h2 id="catalogo" class="seccion-titulo">Catálogo de Rubores Disponibles</h2>
        <div class="catalogo-grid">
            <div class="card-catalogo">
                <img src="img/swatches.png" alt="Muestras de Tonos">
                <h3>Guía de Tonos Disponibles</h3>
                <p>Amplia gama de colores: tonos neutros, rosados, melocotón y pigmentos intensos.</p>
                <p><strong>Precio: $850 MXN c/u</strong></p>
            </div>
            <div class="card-catalogo">
                <img src="img/brazos.jpg" alt="Aplicación en Brazos">
                <h3>Demostración de Acabado</h3>
                <p>Fórmula dúo: Crema para dar luminosidad y Polvo para sellar con larga duración.</p>
                <p><strong>Precio: $850 MXN c/u</strong></p>
            </div>
        </div>

        <!-- Sección Selección / Agregar al Carrito -->
        <div id="seleccion" class="form-section">
            <h2 class="seccion-titulo">Selecciona tu Rubor</h2>
            <div class="form-group">
                <label for="rubor_select">Elige tu Tono Preferido:</label>
                <select id="rubor_select" onchange="calcularTotal()">
                    <option value="She's That Girl">She's That Girl (Soft Pink) - $850</option>
                    <option value="Do We Know Her?">Do We Know Her? (Neutral Peach) - $850</option>
                    <option value="Oh She's Different">Oh She's Different (Deep Plum) - $850</option>
                    <option value="She's A Doll">She's A Doll (Bright Pink) - $850</option>
                    <option value="She's Baked">She's Baked (Rich Terracotta) - $850</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad_input">Cantidad:</label>
                <input type="number" id="cantidad_input" value="1" min="1" max="10" onchange="calcularTotal()" onkeyup="calcularTotal()">
            </div>
            <div class="total-box" id="total_display">Total a pagar: $850 MXN</div>
        </div>

        <!-- Sección Formulario de Entrega -->
        <div id="entrega" class="form-section">
            <h2 class="seccion-titulo">Datos de Entrega y Compra</h2>
            <form action="pedido.php" method="POST">
                <input type="hidden" name="rubor" id="form_rubor" value="She's That Girl">
                <input type="hidden" name="cantidad" id="form_cantidad" value="1">
                
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre completo">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección de Envío:</label>
                    <textarea id="direccion" name="direccion" rows="3" required placeholder="Calle, número, colonia, ciudad y C.P."></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono de Contacto:</label>
                    <input type="tel" id="telefono" name="telefono" required placeholder="10 dígitos">
                </div>
                <div class="form-group">
                    <label for="metodo_pago">Método de Pago:</label>
                    <select id="metodo_pago" name="metodo_pago" required>
                        <option value="Tarjeta de Crédito/Débito">Tarjeta de Crédito / Débito</option>
                        <option value="Transferencia SPEI">Transferencia SPEI</option>
                        <option value="Efectivo en OXXO">Pago en Efectivo (OXXO)</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit">Confirmar y Finalizar Pedido</button>
            </form>
        </div>

        <!-- Sección Iniciar Sesión / Registro -->
        <div id="registro" class="form-section">
            <h2 class="seccion-titulo">Registro de Usuario</h2>
            <form action="registro.php" method="POST">
                <div class="form-group">
                    <label for="reg_nombre">Nombre:</label>
                    <input type="text" id="reg_nombre" name="nombre" required placeholder="Tu nombre">
                </div>
                <div class="form-group">
                    <label for="reg_email">Correo Electrónico:</label>
                    <input type="email" id="reg_email" name="email" required placeholder="correo@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="reg_password">Contraseña:</label>
                    <input type="password" id="reg_password" name="password" required placeholder="Contraseña segura">
                </div>
                <button type="submit" class="btn-submit">Registrarse</button>
            </form>
        </div>

    </div>

    <!-- Pie de Página -->
    <footer>
        Génesis López Martínez 5°I
    </footer>

    <script>
        function calcularTotal() {
            const precio = 850;
            const cantidad = parseInt(document.getElementById('cantidad_input').value) || 1;
            const total = precio * cantidad;
            const ruborSeleccionado = document.getElementById('rubor_select').value;

            document.getElementById('total_display').innerText = 'Total a pagar: $' + total.toLocaleString() + ' MXN';
            
            // Actualizar campos ocultos para el envío del pedido
            document.getElementById('form_rubor').value = ruborSeleccionado;
            document.getElementById('form_cantidad').value = cantidad;
        }
    </script>
</body>
</html>