<nav class="navbar navbar-expand-lg sticky-top"
  style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/" style="color: var(--primary-color);">
      <i class="bi bi-mortarboard-fill me-2"></i>EduManage
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link px-3 {{ request()->is('/') ? 'active fw-bold text-primary' : '' }}" aria-current="page"
            href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 {{ request()->is('student*') ? 'active fw-bold text-primary' : '' }}"
            href="/student">Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>