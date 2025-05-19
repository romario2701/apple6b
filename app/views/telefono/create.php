<form action="../../app/controllers/TelefonoController.php?action=create" method="POST">                                                                              
    <label for="idpersona">Persona:</label>
    <select name="idpersona" id="idpersona" required>
        <option value="">Seleccione una persona</option>
        <?php foreach ($personas as $persona): ?>
            <option value="<?= $persona['idpersona'] ?>">
                <?= $persona['apellidos'] . ' ' . $persona['nombres'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="numero">Número de Teléfono:</label>
    <input type="text" name="numero" id="numero" required>

    <input type="submit" value="Guardar Teléfono">
</form>
