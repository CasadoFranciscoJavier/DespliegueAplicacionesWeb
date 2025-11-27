<?php
$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT nombre, tipo, edad, disponible FROM mascotas");
    $mascotas = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Mascotas</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        h1 { color: #333; }
        table { border-collapse: collapse; width: 100%; max-width: 600px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f0f0f0; }
        .no-disponible { color: #888; text-decoration: line-through; }
    </style>
</head>
<body>
    <h1>Listado de Mascotas</h1>

    <?php if (empty($mascotas)): ?>
        <p>No hay mascotas registradas.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Edad</th>
                <th>Disponible</th>
            </tr>
            <?php foreach ($mascotas as $m): ?>
                <tr>
                    <td><?php echo htmlspecialchars($m['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($m['tipo']); ?></td>
                    <td><?php echo (int)$m['edad']; ?> años</td>
                    <td class="<?php echo $m['disponible'] ? '' : 'no-disponible'; ?>">
                        <?php echo $m['disponible'] ? 'Sí' : 'No'; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>