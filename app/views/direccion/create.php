<form action="../../controllers/DireccionController.php?action=create" method="POST">
    <label for="idpersona">Persona:</label>
    <select name="idpersona" id="idpersona" required>
        <?php foreach ($personas as $persona): ?>
            <option value="<?= $persona['idpersona'] ?>">
                <?= htmlspecialchars($persona['nombres'] . ' ' . $persona['apellidos']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="nombre">Dirección:</label>
    <input type="text" name="nombre" id="nombre" required>

    <input type="submit" value="Crear">
</form>
