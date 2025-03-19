<?php include 'Data/Data.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $curriculo['nome']; ?></h1>
        <p><strong>Email:</strong> <?php echo $curriculo['email']; ?></p>
        <p><strong>Telefone:</strong> <?php echo $curriculo['telefone']; ?></p>

        <h2>Resumo</h2>
        <p><?php echo $curriculo['resumo']; ?></p>

        <h2>Experiência Profissional</h2>
        <?php foreach ($curriculo['experiencia'] as $exp): ?>
            <p><strong><?php echo $exp['empresa']; ?></strong> - <?php echo $exp['cargo']; ?> (<?php echo $exp['periodo']; ?>)</p>
            <p><?php echo $exp['descricao']; ?></p>
        <?php endforeach; ?>

        <h2>Educação</h2>
        <?php foreach ($curriculo['educacao'] as $edu): ?>
            <p><strong><?php echo $edu['instituicao']; ?></strong> - <?php echo $edu['curso']; ?> (<?php echo $edu['periodo']; ?>)</p>
        <?php endforeach; ?>

        <h2>Habilidades</h2>
        <ul>
            <?php foreach ($curriculo['habilidades'] as $habilidade): ?>
                <li><?php echo $habilidade; ?></li>
            <?php endforeach; ?>
        </ul>

        <button class="btn-print" onclick="printCurriculo()">Imprimir Currículo</button>
    </div>
    <script src="script.js"></script>
</body>
</html>