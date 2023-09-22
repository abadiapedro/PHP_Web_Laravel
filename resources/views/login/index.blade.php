<x-layout title="Login" >
    <form method="post">
        @csrf
        <div class="form-group">
            <labe for="email" class="form-label">E-mail:</labe>
            <input for="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <labe for="password" class="form-label">Senha:</labe>
            <input for="password" name="password" id="password" class="form-control">
        </div>
        <butt class="btn btn-primary mt-3">
            Entrar
        </butt>
    </form>
</x-layout>
