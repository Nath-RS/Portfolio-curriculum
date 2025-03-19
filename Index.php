<?php include 'dados.php'; ?>
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
        <div class="header">
            <h1><?php echo $curriculo['nome']; ?></h1>
            <p><?php echo $curriculo['endereco']; ?></p>
        </div>
        
        <div class="content">
                <div class="left">
                <h2>Perfil</h2>
                <p><?php echo $curriculo['resumo']; ?></p>
                    <h2>Contato</h2>
                <p><strong>Telefone:</strong> <?php echo $curriculo['telefone']; ?></p>
                <p><strong>Email:</strong> <?php echo $curriculo['email']; ?></p>
                <p><strong>Github:</strong> <a href="<?php echo $curriculo['github']; ?>"><?php echo $curriculo['github']; ?></a></p>
                <p><strong>LinkedIn:</strong> <a href="<?php echo $curriculo['linkedin']; ?>"><?php echo $curriculo['linkedin']; ?></a></p>
                
                <h2>Passatempos</h2>
                <ul>
                    <?php foreach ($curriculo['passatempos'] as $passatempo): ?>
                        <li><?php echo $passatempo; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="right">
            <h2>Experiência</h2>
                <?php foreach ($curriculo['experiencia'] as $edu): ?>
                    <p><strong><?php echo $edu['empresa']; ?></strong> - <?php echo $edu['funcao']; ?> (<?php echo $edu['periodo']; ?>)</p>
                <?php endforeach; ?>
                
                <h2>Formação</h2>
                <?php foreach ($curriculo['educacao'] as $edu): ?>
                    <p><strong><?php echo $edu['instituicao']; ?></strong> - <?php echo $edu['curso']; ?> (<?php echo $edu['periodo']; ?>)</p>
                <?php endforeach; ?>
                
                <h2>Cursos</h2>
                <ul>
                    <?php foreach ($curriculo['cursos'] as $curso): ?>
                        <li><?php echo $curso; ?></li>
                    <?php endforeach; ?>
                </ul>
                
                <h2>Habilidades</h2>
                <ul>
                    <?php foreach ($curriculo['habilidades'] as $habilidade): ?>
                        <li><?php echo $habilidade; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <button class="btn-print" onclick="printCurriculo()">Imprimir Currículo</button>
    </div>
    <script src="script.js"></script>
</body>
</html>