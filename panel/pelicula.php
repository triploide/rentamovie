<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Película</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>body{padding: 30px 0}</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Cargar Película</h2>
                <form action="/php/controllers/pelicula.controller.php" method="post">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="">
                    </div>
                    <div class="form-group">
                        <label for="genero">Género</label>
                        <select class="form-control" id="genero" name="genero_id" value="">
                            <option value="1">Acción</option>
                            <option value="2">Ciencia Ficción</option>
                            <option value="3">Comedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estreno">Estreno</label>
                        <input type="date" class="form-control" id="estreno" name="estreno" placeholder="Estreno">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary pull-right" type="submit" name="enviador" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>