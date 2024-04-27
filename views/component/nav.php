<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-3 shadow-md">
    <div class="flex-1 flex justify-between items-center">
        <img src="/public/images/logo.png" alt="logo" class="h-12">
    </div>
    <label id="menu-open" for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <label id="menu-close" for="menu-toggle" class="pointer-cursor hidden md:hidden block">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-current text-gray-900 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </label>

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu-list">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li>
                    <a class="flex md:p-4 py-3 px-0 block <?= IsUrl('/dashboard?page=home.php') ? 'font-bold' : '' ?> " href="/dashboard?page=home.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a class="flex md:p-4 py-3 px-0 block <?= IsUrl('/dashboard?page=shop.php') ? 'font-bold' : '' ?> " href="/dashboard?page=shop.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        Shop
                    </a>
                </li>
                <li>
                    <a class="flex md:p-4 py-3 px-0 block <?= IsUrl('/dashboard?page=profile.php') ? 'font-bold' : '' ?> " href="/dashboard?page=profile.php">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Profile
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<script>
    $('#menu-open').click(() => {
        $('#menu-list').removeClass('hidden')
        $('#menu-open').addClass('hidden')
        $('#menu-close').removeClass('hidden')
        $('#profile').removeClass('hidden')
    })
    $('#menu-close').click(() => {
        $('#menu-list').addClass('hidden')
        $('#menu-open').removeClass('hidden')
        $('#menu-close').addClass('hidden')
        $('#profile').addClass('hidden')
    })
</script>