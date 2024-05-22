{{ $slot }}

<form action="{{ route('site.recover') }}" method="GET">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>

    <button type="submit" class="btn btn-primary">Recuperar</button>
</form>