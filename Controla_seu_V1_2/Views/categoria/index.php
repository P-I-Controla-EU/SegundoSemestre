<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categorias - Controla$EU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
<?php require_once "Views/header_logado.php"; ?>

<main class="container section-padding">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h1 class="mb-1">Categorias</h1>
      <p class="text-muted mb-0">Gerencie as categorias usadas nas receitas e despesas</p>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-lg-5">
      <div class="card border-0 rounded-4 shadow-card p-4">
        <h5 class="mb-3">Nova Categoria</h5>
        <?php if (isset($erro)): ?>
          <div class="alert alert-danger py-2"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>
        <form method="POST" action="index.php?controle=CategoriaController&metodo=criar">
          <div class="mb-3">
            <label for="nome" class="form-label fw-semibold">Nome</label>
            <input type="text" name="nome" class="form-control form-control-lg rounded-3" id="nome" placeholder="Ex: Alimentacao" required>
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label fw-semibold">Descricao (opcional)</label>
            <textarea name="descricao" class="form-control rounded-3" id="descricao" rows="2" placeholder="Descricao da categoria"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Criar Categoria</button>
        </form>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="card border-0 rounded-4 shadow-card p-4">
        <h5 class="mb-3">Categorias Cadastradas</h5>
        <?php if (count($categorias) > 0): ?>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th class="text-end">Acoes</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categorias as $cat): ?>
              <tr>
                <td class="fw-medium"><?= htmlspecialchars($cat->nome) ?></td>
                <td class="text-muted"><?= htmlspecialchars($cat->descricao ?? '-') ?></td>
                <td class="text-end">
                  <a href="index.php?controle=CategoriaController&metodo=deletar&id=<?= $cat->id_categoria ?>"
                     class="btn btn-sm btn-outline-danger"
                     onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">
                    <i data-lucide="trash-2" class="icon-sm"></i>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <?php else: ?>
          <p class="text-muted mb-0">Nenhuma categoria cadastrada. Crie uma ao lado.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
