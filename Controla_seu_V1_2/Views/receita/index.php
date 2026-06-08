<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Receitas - Controla$EU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon_io/favicon.ico">
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
<?php require_once "Views/header_logado.php"; ?>

<main class="container section-padding">
  <?php if (isset($_SESSION["mensagem_sucesso"])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $_SESSION["mensagem_sucesso"]; unset($_SESSION["mensagem_sucesso"]); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>
  <?php if (isset($_SESSION["mensagem_erro"])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $_SESSION["mensagem_erro"]; unset($_SESSION["mensagem_erro"]); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h1 class="mb-1">Receitas</h1>
      <p class="text-muted mb-0">Cadastre e acompanhe suas entradas financeiras</p>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-lg-5">
      <div class="card border-0 rounded-4 shadow-card p-4">
        <h5 class="mb-3"><?= isset($editarReceita) ? 'Editar Receita' : 'Nova Receita' ?></h5>
        <?php if (isset($erro)): ?>
          <div class="alert alert-danger py-2"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>
        <form method="POST" action="index.php?controle=ReceitaController&metodo=<?= isset($editarReceita) ? 'atualizar' : 'criar' ?>">
          <?php if (isset($editarReceita)): ?>
            <input type="hidden" name="id" value="<?= $editarReceita->id_transacao ?>">
          <?php endif; ?>
          <div class="mb-3">
            <label for="descricao" class="form-label fw-semibold">Descricao</label>
            <input type="text" name="descricao" class="form-control form-control-lg rounded-3" id="descricao" placeholder="Ex: Salario" value="<?= htmlspecialchars($editarReceita->descricao ?? '') ?>" required>
          </div>
          <div class="mb-3">
            <label for="valor" class="form-label fw-semibold">Valor</label>
            <input type="number" step="0.01" name="valor" class="form-control form-control-lg rounded-3" id="valor" placeholder="0,00" value="<?= $editarReceita->valor ?? '' ?>" required>
          </div>
          <div class="mb-3">
            <label for="data" class="form-label fw-semibold">Data</label>
            <input type="date" name="data" class="form-control form-control-lg rounded-3" id="data" value="<?= $editarReceita->data_movimentacao ?? date('Y-m-d') ?>">
          </div>
          <div class="mb-3">
            <label for="categoria_id" class="form-label fw-semibold">Categoria</label>
            <div class="d-flex gap-2">
              <select name="categoria_id" class="form-select form-select-lg rounded-3" id="categoria_id" required>
                <option value="">Selecione...</option>
                <?php if (isset($categorias)): ?>
                <?php foreach ($categorias as $cat): ?>
                  <option value="<?= $cat->id_categoria ?>" <?= (isset($editarReceita) && $editarReceita->categoria_id == $cat->id_categoria) ? 'selected' : '' ?>><?= htmlspecialchars($cat->nome) ?></option>
                <?php endforeach; ?>
                <?php endif; ?>
              </select>
              <a href="index.php?controle=CategoriaController&metodo=index" class="btn btn-outline-primary rounded-3 flex-shrink-0 d-flex align-items-center" title="Criar categoria">
                <i data-lucide="plus" class="icon-sm"></i>
              </a>
            </div>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select name="status" class="form-select form-select-lg rounded-3" id="status">
              <option value="Recebido" <?= (isset($editarReceita) && $editarReceita->status_transacao == 'Recebido') ? 'selected' : '' ?>>Recebido</option>
              <option value="Pendente" <?= (isset($editarReceita) && $editarReceita->status_transacao == 'Pendente') ? 'selected' : '' ?>>Pendente</option>
            </select>
          </div>
          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-<?= isset($editarReceita) ? 'primary' : 'success' ?> w-100">
              <?= isset($editarReceita) ? 'Atualizar Receita' : 'Cadastrar Receita' ?>
            </button>
            <?php if (isset($editarReceita)): ?>
              <a href="index.php?controle=ReceitaController&metodo=index" class="btn btn-outline-secondary flex-shrink-0">Cancelar</a>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>

    <div class="col-lg-7">
      <div class="card border-0 rounded-4 shadow-card p-4">
        <h5 class="mb-3">Historico de Receitas</h5>
        <?php if (count($receitas) > 0): ?>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Data</th>
                <th>Descricao</th>
                <th>Categoria</th>
                <th>Status</th>
                <th class="text-end">Valor</th>
                <th class="text-end">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($receitas as $r): ?>
              <tr>
                <td><?= date('d/m/Y', strtotime($r->data_movimentacao)) ?></td>
                <td class="fw-medium"><?= htmlspecialchars($r->descricao) ?></td>
                <td><?= htmlspecialchars($r->categoria_nome ?? '-') ?></td>
                <td>
                  <?php if ($r->status_transacao === 'Recebido'): ?>
                    <span class="badge bg-success text-dark">Recebido</span>
                  <?php else: ?>
                    <span class="badge bg-warning text-dark">Pendente</span>
                  <?php endif; ?>
                </td>
                <td class="text-end text-success fw-bold">+ R$ <?= number_format($r->valor, 2, ',', '.') ?></td>
                <td class="text-end">
                  <a href="index.php?controle=ReceitaController&metodo=editar&id=<?= $r->id_transacao ?>" class="btn btn-sm btn-outline-primary">
                    <i data-lucide="pencil" class="icon-sm"></i>
                  </a>
                  <a href="index.php?controle=ReceitaController&metodo=deletar&id=<?= $r->id_transacao ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Excluir esta receita?')">
                    <i data-lucide="trash-2" class="icon-sm"></i>
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <?php else: ?>
          <p class="text-muted mb-0">Nenhuma receita cadastrada ainda.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
