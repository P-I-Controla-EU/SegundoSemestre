<section class="panel">
    <h1>Cadastro</h1>
    <form method="post" action="/auth/cadastro">
        <p>
            <label>
                Nome<br>
                <input type="text" name="nome" required>
            </label>
        </p>
        <p>
            <label>
                Email<br>
                <input type="email" name="email" required>
            </label>
        </p>
        <p>
            <label>
                Senha<br>
                <input type="password" name="senha" required>
            </label>
        </p>
        <button type="submit">Criar conta</button>
    </form>
</section>
