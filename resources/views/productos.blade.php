<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>

    <!--Cargando Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="uk-container">
        <h3>Productos</h3>
        <button class="uk-button uk-button-primary" id="agregar">Agregar Producto</button>
        <table class="uk-table uk-table-hover uk-table-divider">
            <thead>
                <tr>
                    <th>Id Producto</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                    <td>Table Data</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Formulario Modal-->
    <div id="formProductos" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div uk-height-viewport>
                <form class="uk-width-1-2@m uk-align-center">
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Formlario de Producto</legend>
                        <div class="uk-margin">
                            <label>Id de producto</label>
                            <input class="uk-input" type="number" id="idProducto" placeholder="Id de producto">
                        </div>
                        <div class="uk-margin">
                            <label>Nombre</label>
                            <input class="uk-input" type="text" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="uk-margin">
                            <label>Categoria</label>
                            <input class="uk-input" type="text" id="categoria" placeholder="Categoria">
                        </div>

                        <div class="uk-margin">
                            <label>Estado</label>
                            <select class="uk-select">
                                <option value="a">Activo</option>
                                <option value="i">Inactivo</option>
                            </select>
                        </div>
                        <button class="uk-button uk-button-primary" id="guardar">Guardar</button>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!--JavaScripts Para funcionalidad o interaccion -->
    <script>
        $('#agregar').click(function(e) {
            UIkit.modal('#formProductos').show();
        })

    </script>

</body>

</html>
