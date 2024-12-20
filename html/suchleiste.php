<div class="max-h-20 bg-white">
    <nav class="shadow-sm h-full">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-blue-600">MyBlog</a>
            <div id="menu" class="hidden md:flex items-center">
                <form action="searchresults.php" method="GET" class="relative">
                    <input type="text" name="query" placeholder="Suche..."
                        class="bg-gray-100 border border-gray-300 rounded-full py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M17 11a6 6 0 1 0-12 0 6 6 0 0 0 12 0z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="hidden md:flex space-x-6">
                <?php
                if (isset($_SESSION['userid'])) {
                    echo ('<a href="account.php" class="text-gray-700 hover:text-blue-600">Account</a>');
                } else {
                    echo ('<a href="login.php" class="text-gray-700 hover:text-blue-600">Anmelden</a>');
                }
                if (isset($_SESSION['userid'])) {
                    if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'mod') {
                        echo ('<a href="posteditor.php" class="text-gray-700 hover:text-blue-600">Neuer Post</a>');
                    }
                }
                ?>
            </div>
            <button id="menu-btn" class="block md:hidden text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="md:hidden px-4 py-4 hidden">
            <?php
            if (isset($_SESSION['userid'])) {
                echo ('<a href="account.php" class="block py-2 text-gray-700 hover:text-blue-600">Account</a>');
            } else {
                echo ('<a href="login.php" class="block py-2 text-gray-700 hover:text-blue-600">Anmelden</a>');
            }
            if (isset($_SESSION['userid'])) {
                if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'mod') {
                    echo ('<a href="account.php" class="block py-2 text-gray-700 hover:text-blue-600">Post erstellen</a>');
                }
            }
            ?>
            <form action="searchresults.php" method="GET" class="mt-4">
                <input type="text" name="query" placeholder="Suche..."
                    class="w-full bg-gray-100 border border-gray-300 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </form>
        </div>
    </nav>
</div>
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>