<script scope>
import Menu from "../Layouts/components/Menu.vue";
export default {
    components: {
        Menu,
    }
}
</script>
<template >
    <body class="bg-white dark:bg-gray-800">
    <Header class="mt-4">

        <div class=" flex container mx-auto  h-full">
            <div class="navbar-start flex">

                <a class="btn btn-ghost normal-case text-xl dark:text-white border-none outline-none">Recipe Hunter</a>
                <!-- <div class="dropdown">
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
                                    <li class="text-gray dark:text-white"><a>Categories</a></li>
                                    <li class="text-gray dark:text-white"><a>Top Recipes</a></li>
                                    <li class="text-gray dark:text-white"><a>My Recipes</a></li>
                                    <li class="text-gray dark:text-white" ><a>Saved Recipes</a></li>
                                    <li class="text-gray dark:text-white"><a>About Us</a></li>
                                </ul>
                                            </div> -->
                </div>
                <!--windowed-->
                <div class="navbar-center hidden lg:flex px-4">
                    <ul class="menu menu-horizontal px-1">
                        <li class="text-gray dark:text-white">
                            <Link href="/home">Home</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="/categories">Categories</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="/myrecipes">My Recipes</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="/savedrecipes">Saved Recipes</Link>
                        </li>
                        <li class="text-gray dark:text-white">
                            <Link href="/aboutus">About Us</Link>
                        </li>
                    </ul>
                </div>
                <div class="navbar-end  flex px-4">
                    <div class="form-control hidden lg:flex mr-2">
                        <!-- <button class="border border-2 bg-gradient-to-r from-blue-400 to-green-400 text-white font-bold py-2 px-4 rounded-full">Click me</button> -->

                        <div class="relative w-full">
                            <Link href="/filter"
                                class=" absolute m-1.5 w-[52px] text-white rounded-full shadow-sm hover:shadow-4xl text-sm inset-y-0 right-0 flex items-center pl-3 bg-gradient-to-r from-lemon to-green cursor-pointer">
                                Filter
                        </Link>
                            <input type="text" id=""
                                class=" bg-gradient-to-r from-lemon-20 to-green-20 border-2 border-gray-300 text-gray-900 text-sm rounded-full 
                                           focus:ring-green focus:border-green rounded-full w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                           dark:placeholder-gray-200 dark:text-white  dark:focus:ring-green dark:focus:ring-green dark:text-gray-00 "
                                placeholder="Search... ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 cursor-pointer ">
                                <svg aria-hidden="true" class=" w-5 h-5 text-gray-600 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <Link href="/dashboard" class="dropdown dropdown-end hidden lg:flex">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar ">
                            <div class="w-10 rounded-full ">
                                <img class="w-10 h-10 rounded-full  " src="assets/images/avatar.jpg" alt="">

                            </div>
                        </label>
                        <ul tabindex="0"
                            class="mt-12 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52 bg-white dark:bg-gray-800 text">
                            <li class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full">
                                <a class="justify-between ">
                                    Profile
                                    <span
                                        class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span>
                                </a>
                            </li>
                            <li class="text-gray dark:text-white hover:bg-gray-300 rounded-full hover:text-gray-800">
                                <a>Settings</a>
                            </li>
                            <li class="text-gray dark:text-white hover:bg-gray-300 rounded-full hover:text-gray-800">
                                <Link href="/login">
                                    Logout
                                </Link>
                            </li>
                        </ul>
                    </Link>
                    <div class=" lg:hidden  md:flex sm:flex">
                        <Menu />
                    </div>
                </div>
            </div>
        </Header>

        <main>

        </main>

    </body>
    <footer />
</template>