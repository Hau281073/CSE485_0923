<nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h2><strong>Home</strong></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('authors.index') }}"><h3>Authors</h3></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('books.index') }}"><h3>Books</h3></a>
        </li>
      </ul>
    </div>
  </div>
</nav>