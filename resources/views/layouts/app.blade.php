<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Switcher</title>
    <link href="{{ asset("themes/{$theme}/style.css") }}" rel="stylesheet">
</head>
<body>

<nav class="navbar bg-body-tertiary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://www.svgrepo.com/show/236691/switch-swap.svg" alt="Bootstrap" width="30" height="24">
        </a>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-3">
                <a class="nav-link" href="{{ route('home') }}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
            </li>
        </ul>

        <form action="{{ route('set-theme') }}" method="POST" class="d-flex ms-auto">
            @csrf
            <label for="theme-select" class="me-2">Выберите&nbsp;тему:</label>
            <select
                name="theme"
                id="theme-select"
                onchange="this.form.submit()"
                class="form-select form-select-sm"
                aria-label="Theme select"
            >
                <option value="classic" {{ $theme == 'classic' ? 'selected' : '' }}>Classic</option>
                <option value="cuba" {{ $theme == 'cuba' ? 'selected' : '' }}>Cuba</option>
            </select>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
