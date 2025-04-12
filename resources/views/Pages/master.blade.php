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

  @yield('scripts')

</body>
</html>
