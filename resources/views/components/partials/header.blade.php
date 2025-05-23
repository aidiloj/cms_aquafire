<header class="header">
  <nav class="navbar container">
    <!-- logo -->
    <div class="order-0">
      <a href="index.html">
        <img src="images/logo.svg" height="30" width="147" alt="logo" />
      </a>
    </div>
    <!-- navbar toggler -->
    <input id="nav-toggle" type="checkbox" class="hidden" />
    <label
      id="show-button"
      for="nav-toggle"
      class="order-1 flex cursor-pointer items-center lg:order-1 lg:hidden"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Open</title>
        <path d="M0 3h20v2H0V3z m0 6h20v2H0V9z m0 6h20v2H0V0z"></path>
      </svg>
    </label>
    <label
      id="hide-button"
      for="nav-toggle"
      class="order-2 hidden cursor-pointer items-center lg:order-1"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Close</title>
        <polygon
          points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2"
          transform="rotate(45 10 10)"
        ></polygon>
      </svg>
    </label>
    <!-- /navbar toggler -->
    <ul
      id="nav-menu"
      class="navbar-nav order-2 hidden w-full flex-[0_0_100%] lg:order-1 lg:flex lg:w-auto lg:flex-auto lg:justify-center lg:space-x-5"
    >
      <li class="nav-item">
        <a href="" class="nav-link active">Blog</a>
      </li>
      <li class="nav-item mt-3.5 lg:hidden">
        <a class="btn btn-white btn-sm border-border" href="signin.html"
          >Sing Up Now</a
        >
      </li>
    </ul>
    <div class="order-1 ml-auto hidden items-center md:order-2 md:ml-0 lg:flex">
      <a class="btn btn-white btn-sm" href="signin.html">Sign In</a>
    </div>
  </nav>
</header>
