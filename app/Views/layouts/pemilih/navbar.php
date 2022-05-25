<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="#"><img src="/img/logo_election.svg"></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="/">The Electionn</a>
        </li>
      </ul>

      <span>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 right-side">
          <li class="nav-item me-3">
            <a class="nav-link active <?= $active1; ?>" aria-current="page" href="/paslon">Pasangan calon</a>
          </li>
          <li class="nav-item me-4">
            <a class="nav-link active <?= $active2; ?>" aria-current="page" href="/paslon/countdown">Hasil pemilihan</a>
          </li>
          <!-- check login session is exist then load this -->
          <?php if (session()->get('login')) : ?>
            <li class="nav-item">
              <form action="/logout" method="POST">
                <button class="nav-link active text-white btn bg-secondary px-3" aria-current="page" type="submit"><i class='bx bx-log-out'></i></button>
              </form>
            </li>
          <?php endif; ?>

        </ul>
      </span>

    </div>
  </div>
</nav>