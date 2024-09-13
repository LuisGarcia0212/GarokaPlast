<form action="{{ route('admin.login.submit') }}" method="POST">
    @csrf
    <!-- Campos de login de administrador -->
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Ingresar</button>
</form>
