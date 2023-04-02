
<template >
    <body class="bg-white dark:bg-gray-800">
        <Header class="mt-4">

            <div class=" flex container mx-auto px-4 h-full">
                <div class="navbar-start flex">
                    <!--mobile-->
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden border-none outline-none ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" class="dark:stroke-white"/>
                            </svg>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-white dark:bg-gray-800  rounded-box w-52">
                            <li class="text-gray dark:text-white"><a>Home</a></li>
                            <!-- <li><a>Search</a></li> -->
                            <li class="text-gray dark:text-white"><a>Categories</a></li>
                            <li class="text-gray dark:text-white"><a>Top Recipes</a></li>
                            <li class="text-gray dark:text-white"><a>My Recipes</a></li>
                            <li class="text-gray dark:text-white" ><a>Saved Recipes</a></li>
                            <li class="text-gray dark:text-white"><a>About Us</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-xl dark:text-white border-none outline-none">Recipe Hunter</a>
                    
                </div>
                <!--windowed-->
                <div class="navbar-center hidden lg:flex px-4">
                    <ul class="menu menu-horizontal px-1">
                        <li class="text-gray dark:text-white">
                            <Link href="#">Home</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="#">Categories</Link>
                        </li >
                        <li class="text-gray dark:text-white">
                            <Link href="#">Top Recipes</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="#">My Recipes</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="#">Saved Recipes</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="#">About Us</Link>
                        </li>
                    </ul>
                </div>
                <div class="navbar-end  flex px-4">
                    <div class="form-control hidden lg:flex mr-2">
                        <!-- <button class="border border-2 bg-gradient-to-r from-blue-400 to-green-400 text-white font-bold py-2 px-4 rounded-full">Click me</button> -->

                        <div class="relative">
                            <input type="text" placeholder="Search..."
                            class="input input-bordered border-2 border-transparent bg-green-20 rounded-full placeholder-gray-600 rounded-full text-gray-600 dark:text-white">
                    
                        </div>
                    </div>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar ">
                            <div class="w-10 rounded-full ">
                                <img class="w-10 h-10 rounded-full  " src="assets/images/avatar.jpg" alt="">

                            </div>
                        </label>
                        <ul tabindex="0"
                            class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52 bg-white dark:bg-gray-800 text">
                            <li>
                                <a class="justify-between text-gray-800 dark:text-white">
                                Profile
                                <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span>
                            </a>
                        </li>
                        <li class="text-gray dark:text-white"><a>Settings</a></li>
                        <li class="text-gray dark:text-white"><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Header>

    <main>

    </main>

    </body>
    <footer />  
</template>
<style>
    .relative:before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      z-index: -1;
      background: linear-gradient(to right, bg-lemon, bg-green);
      border-radius: 9999px;
    }
  </style>