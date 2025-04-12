<!-- Navbar Responsive -->
<nav class="bg-white shadow-md">
  <div class="container mx-auto px-4 py-2 flex justify-between items-center">
    <!-- Logo -->
    <div class="text-2xl font-bold text-blue-600 flex items-center">
      <img src="{{ asset('assets/assets/logogereja.jpeg') }}" alt="Logo Gereja" class="w-7 h-7 mr-2">
      Gereja<span class="text-yellow-500">Info</span>
    </div>

    <!-- Hamburger Menu (Mobile) -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-blue-600 focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

    <!-- Menu Items -->
    <div id="menu-items" class="hidden md:flex md:space-x-4 flex-col md:flex-row absolute md:static top-16 left-4 right-4 bg-white md:bg-transparent shadow-md md:shadow-none rounded-lg md:rounded-none z-50 md:z-auto p-4 md:p-0">
      <a href="{{ url('/') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('/') ? 'text-yellow-500 font-semibold' : 'text-blue-600 hover:text-blue-800' }}">
        <i class="fas fa-home mr-1"></i>Beranda
      </a>
      <a href="{{ url('/profile') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('profile') ? 'text-yellow-500 font-semibold' : 'text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-user mr-1"></i>Profil
      </a>
      <a href="{{ url('/jadwal') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('jadwal') ? 'text-yellow-500 font-semibold' : 'text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-calendar-alt mr-1"></i>Jadwal
      </a>
      <a href="{{ url('/berita') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('berita') ? 'text-yellow-500 font-semibold' : 'text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-newspaper mr-1"></i>Berita
      </a>
      <a href="{{ url('/galeri') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('galeri') ? 'text-yellow-500 font-semibold' : 'text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-images mr-1"></i>Galeri
      </a>
      <a href="{{ url('/konten') }}" class="flex items-center mb-2 md:mb-0
        {{ Request::is('konten') ? 'text-yellow-500 font-semibold' : 'text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-file-alt mr-1"></i>Konten
      </a>
      <a href="#kontak"  class="flex items-center text-gray-600 hover:text-gray-800' }}">
        <i class="fas fa-envelope mr-1"></i>Kontak
      </a>
    </div>
  </div>
</nav>
