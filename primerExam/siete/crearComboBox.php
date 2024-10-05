<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
        <h2 class="text-center mb-4">Agregar Catastro</h2>
        <form action="../dos/catastro/insertar_catastro.php" method="post">
            <div class="form-group">
                <label for="cod">Cod Catastro:</label>
                <input type="number" class="form-control" name="cod" required>
            </div>
            <div class="form-group">
                <label for="zona">Zona:</label>
                <select id="zona" name="zona" class="form-control" required>
                    <option value="">Seleccione una zona</option>
                </select>
            </div>
            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <select id="distrito" name="distrito" class="form-control" required>
                    <option value="">Seleccione un distrito</option>
                </select>
            </div>
            <div class="form-group">
                <label for="superficie">Superficie (m²):</label>
                <input type="number" step="0.01" class="form-control" name="superficie" required>
            </div>
            <div class="form-group">
                <label for="xini">X Inicial:</label>
                <input type="number" step="0.000001" class="form-control" name="xini" required>
            </div>
            <div class="form-group">
                <label for="yini">Y Inicial:</label>
                <input type="number" step="0.000001" class="form-control" name="yini" required>
            </div>
            <div class="form-group">
                <label for="xfin">X Final:</label>
                <input type="number" step="0.000001" class="form-control" name="xfin" required>
            </div>
            <div class="form-group">
                <label for="yfin">Y Final:</label>
                <input type="number" step="0.000001" class="form-control" name="yfin" required>
            </div>
            <div class="form-group">
                <label for="ciDuenio">CI del Dueño:</label>
                <input type="text" class="form-control" name="ciDuenio" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='../dos/catastro/index.php'">Cancelar</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "get_distritos.php",
            dataType: "json",
            success: function(data) {
                $.each(data, function(index, value) {
                    $('#distrito').append('<option value="' + value + '">' + value + '</option>');
                });
            }
        });

        $('#distrito').change(function() {
            var distrito = $(this).val();
            $.ajax({
                type: "POST",
                url: "get_zonas.php",
                data: { distrito: distrito },
                dataType: "json",
                success: function(data) {
                    $('#zona').empty();
                    $('#zona').append('<option value="">Seleccione una zona</option>');
                    $.each(data, function(index, value) {
                        $('#zona').append('<option value="' + value + '">' + value + '</option>');
                    });
                }
            });
        });
    });
</script>
