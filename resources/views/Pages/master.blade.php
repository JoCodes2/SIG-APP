<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GerejaInfo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    /* Mobile menu */
    @media (max-width: 768px) {
      .desktop-menu {
        display: none;
      }
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
    @include('Pages.navbar')

  <!-- Hero Section -->
  <main>
    @yield('content')
  </main>


  <!-- Footer -->
  @include('Pages.footer')


    <!-- Toggle Script -->
    <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu-items');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
    </script>
    <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
            behavior: 'smooth'
            });
        }
        });
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"
     integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('scripts')

</body>
</html>
