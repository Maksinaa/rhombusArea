<nav class="navbar navbar-expand-lg navbar-light bg-white border border-secondary border-top-0 mb-3">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">
      {{ config('app.name', 'Laravel') }}
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('index') }}">Input</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="{{ route('order') }}">Order</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
