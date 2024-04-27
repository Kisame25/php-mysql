<script>
    $("title").text("Register");
</script>
<body>
    <div class="bg-gray-100 flex h-screen items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-md p-8">

                <img class="mx-auto h-12 w-auto" src="https://www.svgrepo.com/show/499664/user-happy.svg" alt="" />

                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">
                    Sign up an account
                </h2>
                <form class="space-y-6 mt-4" method="POST">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input name="email" type="email-address" autocomplete="email-address" required class="px-2 py-3 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" required class="px-2 py-3 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>

                    <div>
                        <label for="re_password" class="block text-sm font-medium text-gray-700">Re-Password</label>
                        <div class="mt-1">
                            <input id="re_password" name="re_password" type="password" required class="px-2 py-3 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
                        </div>
                    </div>
                    <div class="text-red-400"><?= $message ?></div>
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-sky-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
                            Sign up
                        </button>
                    </div>
                </form>
                <div class="mt-5">Already have an account? <a class="text-blue-400" href="/auth?page=login.php">Login</a></div>
            </div>
        </div>
    </div>
</body>
