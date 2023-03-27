
<script setup>
// import RecipeHunterLayout from "../Layouts/RecipeHunterLayout.vue";
defineProps({
    articles: Object,
});



</script>

<template>
    <Header>
        <div class="navbar bg-base-100">
            <div class="navbar-start w-40">
                <!--mobile-->
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>Search</a></li>
                        <li><a>Categories</a></li>
                        <li><a>Top Recipes</a></li>
                        <li><a>My Recipes</a></li>
                        <li><a>Saved Recipes</a></li>
                        <li><a>About Us</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-xl">Recipe Hunter</a>
                
            </div>
            <!--windowed-->
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                <li><Link href="#">Home</Link></li>
                <li><Link href="#">Categories</Link></li>
                <li><Link href="#">Top Recipes</Link></li>
                <li><Link href="#">My Recipes</Link></li>
                <li><Link href="#">Saved Recipes</Link></li>
                <li><Link href="#">About Us</Link></li>
                </ul>
            </div>
            <div class="navbar-end ">
                <div class="form-control hidden lg:flex">
                    <input type="text" placeholder="Search" class="input input-bordered" />
                </div>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img class="w-10 h-10 rounded-full" src="/images/Layout/Ellipse_7.jpg" alt="Rounded avatar">
                            
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </Header>

    <main>

    </main>

    <footer>

    </footer>
</template>