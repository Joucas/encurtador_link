{{ $slot }}


<form action="{{ route('site.register') }}" method="GET">
    @csrf
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <div class="mb-3">
        <label for="confirm">Confirme sua senha</label>
        <input type="password" class="form-control" name="senha-conf" id="senha-conf">
    </div>

    <button type="submit" class="btn btn-primary">Registrar-se</button>
</form>