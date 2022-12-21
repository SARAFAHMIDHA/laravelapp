<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Laravel App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('parent')}}">Parent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('student')}}">Student</a>
         <li class="nav-item">
          <a class="nav-link" href="{{ url('course')}}">Course</a>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('optedcourse')}}">Opted Course</a>
        
        
        </li>
      </ul>
    </div>
  </div>
</nav>