{{ $slot }}

<form action="{{ route('site.login') }}" method="GET">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <div class="mb-3">
        <a href="#">Registrar-se</a>
        <button type="submit" class="btn btn-primary">Acessar</button>
    </div>
</form>