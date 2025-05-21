<nav class="bg-white border-b border-gray-200 shadow-md">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <a href="#" class="text-2xl font-bold text-blue-600">MyWeb</a>
      
      {{-- Toggle button for mobile --}}
      <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      {{-- Menu Items --}}
      <div id="menu" class="hidden md:flex md:items-center md:space-x-8">
        <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">About</a>
        <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Contact</a>
      </div>
    </div>

    {{-- Dropdown Menu Mobile --}}
    <div id="mobile-menu" class="md:hidden hidden flex-col space-y-2 mt-4">
      <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-100 rounded">Home</a>
      <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-100 rounded">About</a>
      <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-blue-100 rounded">Contact</a>
    </div>
  </div>
</nav>

<script>
  // Script untuk toggle menu di mobile
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggle.addEventListener('click', function () {
      menu.classList.toggle('hidden');
    });
  });
</script>
