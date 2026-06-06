<?php
if (!isset($totalReceitas)) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Controla$EU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/lucide@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      <h1 class="mb-1">Olá, <?= htmlspecialchars($_SESSION["nome"] ?? '') ?>!</h1>
      <p class="text-muted mb-0">Resumo financeiro</p>
    </div>
  </div>

  <div class="row g-4 mb-5">
    <div class="col-md-3">
      <a href="index.php?controle=ReceitaController&metodo=index" class="text-decoration-none">
        <div class="card border-0 rounded-4 shadow-card p-4 h-100 card-link-hover">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="icon-box gradient-sky shadow-glow" style="width: 48px; height: 48px;">
              <i data-lucide="trending-up" class="text-white"></i>
            </div>
            <div>
              <small class="text-muted">Receitas do mês</small>
              <h3 class="mb-0 text-success">R$ <?= number_format($totalReceitas, 2, ',', '.') ?></h3>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="index.php?controle=DespesaController&metodo=index" class="text-decoration-none">
        <div class="card border-0 rounded-4 shadow-card p-4 h-100 card-link-hover">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="icon-box gradient-primary shadow-glow" style="width: 48px; height: 48px;">
              <i data-lucide="trending-down" class="text-white"></i>
            </div>
            <div>
              <small class="text-muted">Despesas do mês</small>
              <h3 class="mb-0 text-danger">R$ <?= number_format($totalDespesas, 2, ',', '.') ?></h3>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <div class="card border-0 rounded-4 shadow-card p-4 h-100">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="icon-box <?= $saldoMes >= 0 ? 'gradient-primary' : 'bg-danger' ?> shadow-glow" style="width: 48px; height: 48px;">
            <i data-lucide="wallet" class="text-white"></i>
          </div>
          <div>
            <small class="text-muted">Saldo do mês</small>
            <h3 class="mb-0 <?= $saldoMes >= 0 ? 'text-success' : 'text-danger' ?>">R$ <?= number_format($saldoMes, 2, ',', '.') ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card border-0 rounded-4 shadow-card p-4 h-100" style="cursor: pointer;" onclick="openModalSaldo()">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="icon-box <?= $saldoGeral >= 0 ? 'gradient-sky' : 'bg-danger' ?> shadow-glow" style="width: 48px; height: 48px;">
            <i data-lucide="piggy-bank" class="text-white"></i>
          </div>
          <div>
            <small class="text-muted">
              Saldo Geral
              <i data-lucide="pencil" style="width: 14px; height: 14px; vertical-align: middle; opacity: 0.5;"></i>
            </small>
            <h3 class="mb-0 <?= $saldoGeral >= 0 ? 'text-success' : 'text-danger' ?>">R$ <?= number_format($saldoGeral, 2, ',', '.') ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4 mb-5">
    <div class="col-lg-8">
      <div class="card border-0 rounded-4 shadow-card p-4">
        <h5 class="mb-4">Receitas vs Despesas (este mês)</h5>
        <canvas id="graficoMensal" height="250"></canvas>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card border-0 rounded-4 shadow-card p-4 h-100">
        <h5 class="mb-4">Resumo</h5>
        <div style="height: 200px;">
          <canvas id="graficoResumo"></canvas>
        </div>
        <div class="mt-3">
          <div class="d-flex justify-content-between mb-2">
            <span><span class="badge bg-success me-2">&nbsp;</span> Receitas</span>
            <strong>R$ <?= number_format($totalReceitas, 2, ',', '.') ?></strong>
          </div>
          <div class="d-flex justify-content-between">
            <span><span class="badge bg-danger me-2">&nbsp;</span> Despesas</span>
            <strong>R$ <?= number_format($totalDespesas, 2, ',', '.') ?></strong>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4 mb-5">
    <div class="col-md-6">
      <div class="card border-0 rounded-4 shadow-card p-4 h-100">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="mb-0">Últimas Receitas</h5>
          <a href="index.php?controle=ReceitaController&metodo=index" class="btn btn-sm btn-outline-success">Ver todas</a>
        </div>
        <?php if (count($ultimasReceitas) > 0): ?>
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th class="text-end">Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ultimasReceitas as $r): ?>
              <tr>
                <td><?= date('d/m/Y', strtotime($r->data_movimentacao)) ?></td>
                <td><?= htmlspecialchars($r->descricao) ?></td>
                <td><?= htmlspecialchars($r->categoria_nome ?? '-') ?></td>
                <td class="text-end text-success">+ R$ <?= number_format($r->valor, 2, ',', '.') ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <?php else: ?>
          <p class="text-muted mb-0 small">Nenhuma receita registrada.</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-0 rounded-4 shadow-card p-4 h-100">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="mb-0">Últimas Despesas</h5>
          <a href="index.php?controle=DespesaController&metodo=index" class="btn btn-sm btn-outline-danger">Ver todas</a>
        </div>
        <?php if (count($ultimasDespesas) > 0): ?>
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th>Data</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th class="text-end">Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($ultimasDespesas as $d): ?>
              <tr>
                <td><?= date('d/m/Y', strtotime($d->data_movimentacao)) ?></td>
                <td><?= htmlspecialchars($d->descricao) ?></td>
                <td><?= htmlspecialchars($d->categoria_nome ?? '-') ?></td>
                <td class="text-end text-danger">- R$ <?= number_format($d->valor, 2, ',', '.') ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <?php else: ?>
          <p class="text-muted mb-0 small">Nenhuma despesa registrada.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="card border-0 rounded-4 shadow-card p-4">
    <h5 class="mb-4">Transações Recentes</h5>
    <?php if (count($transacoesRecentes) > 0): ?>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>Data</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th class="text-end">Valor</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($transacoesRecentes as $t): ?>
          <tr>
            <td><?= date('d/m/Y', strtotime($t->data_movimentacao)) ?></td>
            <td><?= htmlspecialchars($t->descricao) ?></td>
            <td><?= htmlspecialchars($t->categoria_nome ?? '-') ?></td>
            <td>
              <?php if ($t->tipo === 'Receita'): ?>
                <span class="badge bg-success bg-opacity-10 text-dark">Receita</span>
              <?php else: ?>
                <span class="badge bg-danger bg-opacity-10 text-danger">Despesa</span>
              <?php endif; ?>
            </td>
            <td class="text-end <?= $t->tipo === 'Receita' ? 'text-success' : 'text-danger' ?>">
              <?= $t->tipo === 'Receita' ? '+' : '-' ?> R$ <?= number_format($t->valor, 2, ',', '.') ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php else: ?>
      <p class="text-muted mb-0">Nenhuma transação encontrada. <a href="index.php?controle=ReceitaController&metodo=index" class="text-primary">Cadastre sua primeira receita</a>.</p>
    <?php endif; ?>
  </div>
</main>

<div class="modal fade" id="modalSaldo" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow-card">
      <div class="modal-header border-0">
        <h5 class="modal-title">Ajustar Saldo Geral</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="index.php?controle=DashboardController&metodo=definirSaldo" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="saldo" class="form-label">Valor do saldo</label>
            <div class="input-group">
              <span class="input-group-text">R$</span>
              <input type="text" class="form-control" id="saldo" name="saldo"
                     value="<?= number_format($saldoGeral, 2, ',', '.') ?>"
                     required>
            </div>
            <div class="form-text">Defina o saldo inicial ou ajuste o valor atual.</div>
          </div>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
function openModalSaldo() {
  var modal = new bootstrap.Modal(document.getElementById('modalSaldo'));
  modal.show();
}

document.addEventListener('DOMContentLoaded', function() {
  <?php if (count($dadosGrafico) > 0): ?>
  new Chart(document.getElementById('graficoMensal'), {
    type: 'bar',
    data: {
      labels: [<?php foreach ($dadosGrafico as $d) { echo "'" . date('d/m', strtotime($d->dia)) . "',"; } ?>],
      datasets: [
        {
          label: 'Receitas',
          data: [<?php foreach ($dadosGrafico as $d) { echo $d->receitas . ","; } ?>],
          backgroundColor: 'rgba(11, 199, 45, 0.7)',
          borderColor: '#0bc72d',
          borderWidth: 1
        },
        {
          label: 'Despesas',
          data: [<?php foreach ($dadosGrafico as $d) { echo $d->despesas . ","; } ?>],
          backgroundColor: 'rgba(220, 53, 69, 0.7)',
          borderColor: '#dc3545',
          borderWidth: 1
        }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'top' } },
      scales: { y: { beginAtZero: true } }
    }
  });
  <?php else: ?>
  document.getElementById('graficoMensal').parentElement.innerHTML = '<p class="text-muted mb-0">Nenhum dado para este mês.</p>';
  <?php endif; ?>

  new Chart(document.getElementById('graficoResumo'), {
    type: 'doughnut',
    data: {
      labels: ['Receitas', 'Despesas'],
      datasets: [{
        data: [<?= $totalReceitas ?: 1 ?>, <?= $totalDespesas ?: 1 ?>],
        backgroundColor: ['#0bc72d', '#dc3545'],
        borderWidth: 0
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      cutout: '70%'
    }
  });

  lucide.createIcons();
});
</script>
</body>
</html>
