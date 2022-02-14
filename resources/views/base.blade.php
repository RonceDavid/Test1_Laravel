<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Test</title>
</head>
<body>

<div class="min-h-full">
    <nav class="
  relative
  w-full
  flex flex-wrap
  items-center
  justify-between
  py-4
  bg-gray-100
  text-gray-500
  hover:text-gray-700
  focus:text-gray-700
  shadow-lg
  navbar navbar-expand-lg navbar-light
  ">
  <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
  <button class="
      navbar-toggler
      text-gray-500
      border-0
      hover:shadow-none hover:no-underline
      py-2
      px-2.5
      bg-transparent
      focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline
    " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
    class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
    <path fill="currentColor"
      d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
    </path>
  </svg>
  </button>
  <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
  <a class="
        flex
        items-center
        text-gray-900
        hover:text-gray-900
        focus:text-gray-900
        mt-2
        lg:mt-0
        mr-1
      " href="#">
    {{-- <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" style="height: 15px" alt="" loading="lazy" /> --}}
  </a>
  <!-- Left links -->
  <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="{{ route('Plant.index') }}">Plants</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="{{ route('Farmer.index') }}">Farmers</a>
    </li>
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="{{ route('Project.index') }}">Projects</a>
    </li>
  </ul>
  <!-- Left links -->
  </div>
  <!-- Collapsible wrapper -->

  <!-- Right elements -->
  <div class="flex items-center relative">
  <!-- Icon -->
  <div class="dropdown relative">
    <a class="
          text-gray-500
          hover:text-gray-700
          focus:text-gray-700
          mr-4
          dropdown-toggle
          hidden-arrow
          flex items-center
        " href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
        </svg>
      {{-- <span class="text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-2 py-0 px-1.5">1</span> --}}
    </a>
    <ul class="
      dropdown-menu
      min-w-max
      absolute
      hidden
      bg-white
      text-base
      z-50
      float-left
      py-2
      list-none
      text-left
      rounded-lg
      shadow-lg
      mt-1
      hidden
      m-0
      bg-clip-padding
      border-none
      left-auto
      right-0
    " aria-labelledby="dropdownMenuButton1">
      <li>
        <a class="
          dropdown-item
          text-sm
          py-2
          px-4
          font-normal
          block
          w-full
          whitespace-nowrap
          bg-transparent
          text-gray-700
          hover:bg-gray-100
        " href="/">Home</a>
      </li>
      </li>
    </ul>
  </div>
  </div>
  <!-- Right elements -->
  </div>
</nav>

  @yield('content')
  
</div>
  

</body>
</html>