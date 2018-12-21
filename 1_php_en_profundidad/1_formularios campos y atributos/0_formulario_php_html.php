<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron">
        <h1 class="display-4">Formularios PHP y html</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>
        Formularios PHP y html
        </p>
        <br>
        <ul>
            <li></li>
        </ul>
    </div>
      
    <div class="container">
        <div class="row">
     <div class="col-12">
     <form action="" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label> 
                <input type="text" name="nombre"> <br/>
                <!-- 
                    mas atributos de input
                autofocus => Foco al cargar la pagina.
                disabled => Bloquear input.
                maxlength="10" => maximo de caracteres.
                minlength=20 => numero minimo de caracteres
                pattern="A-Za-z " => Expresiones regulares  https://www.w3schools.com/tags/att_input_pattern.asp
                required => Campo requerido.
                placeholder="First name" => texto informativo q desaparece
                value="Doe" => testo en el input
                -->
                <label for="apellido">Apellido:</label> 
                <input type="text" name="apellido"> <br/>
                <input type="submit" value="Enviar">


               
            </form></div>

            <div class="col-12 col-sm-6">
         

 <!-- Tipos de campo -->
            <h1>Tipos de Campo</h1>
            <br>

            <h2>tipo button</h2>
            <input type="button" value="Click me">
            <br>

            <h2>tipo checkbox</h2>
            <input type="checkbox" name="hombre" value="Hobre">Hobre<br>
            <input type="checkbox" name="mujer" value="Mujer">Mujer<br>
            
            <h2>tipo color</h2>
            <input type="color" name="color" ><br>
            
            <h2>tipo fecha</h2>
            <input type="date" name="fecha" ><br>
            
            <h2>tipo email</h2>
            <input type="email" name="email" ><br>
            
            <h2>tipo archivo</h2>
            <input type="file" name="file" multiple><br>
            
           
            <?php
           
            ?>
            
        </div>
        <div class="col-12 col-sm-6">
        <h2>tipo numero</h2>
            <input type="number" name="number" multiple><br>
            
            <h2>tipo hidden</h2>
            <input type="hidden" name="hidden" ><br>
            
            <h2>tipo contraseña</h2>
            <input type="password" name="password" ><br>

            <h2>tipo radio</h2>
            <input type="radio" name="continente" value="America">America<br>
            <input type="radio" name="continente" value="Europa">Europa<br>

            <h2>tipo Telefono</h2>
            <input type="tel" name="telefono" ><br>

            <h2>tipo URL</h2>
            <input type="url" name="url" pattern="https://.*"><br>

            <h2>tipo rango</h2>
            <input type="range" name="b" value="50" />

            <h2>tipo textarea</h2>
            <textarea rows="4" cols="50">
                At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
            </textarea>
            
            
            <h2>tipo select</h2>
            <select>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>