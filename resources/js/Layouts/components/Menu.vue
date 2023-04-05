

<template>
    <div class="text-center">
        <button class="" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
            data-drawer-placement="right" aria-controls="drawer-right-example">
            <img class="w-10 h-10 rounded-full  " src="assets/images/avatar.jpg" alt="">

        </button>
    </div>

    <!-- drawer component -->
    <div id="drawer-right-example"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-full dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">

        <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="flex flex-col space-y-4 mt-4">

            <div class="flex flex-row">
                <div class="mx-2">
                    <Link href="#"> <!-- link to the profile here -->
                    <img class="w-[70px] h-[70px] rounded-full  " src="assets/images/avatar.jpg" alt="">
                    </Link>
                </div>
                <div class="flex flex-col mt-4">
                    <Link href="#"><!-- link to the profile here -->
                    <div class="text-gray-800 dark:text-white text-xl"><strong
                            class="font-semibold text-gray-900 dark:text-white">Name</strong></div>
                    <div class="text-gray-800 dark:text-white">name@example.com</div>
                    </Link>
                </div>
            </div>

            <!-- link to the profile here -->
            <Link herf="#"
                class="bg-green-20  text-green-800 rounded-full flex justify-center items-center View profile w-full h-[40px] dark:text-white">
            View profile
            </Link>
        </div>


        <div class="py-4 overflow-y-auto">
            <ul class="space-y-6 font-medium">
                <li>
                    <!--error when enter home can't open the menu again ??? -->
                    <Link herf="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-3">home</span>
                    </Link>
                </li>
                <li>
                    <Link herf="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="ml-3">Search</span>
                    </Link>
                </li>
                <li>
                    <Link herf="/myrecipes"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">My Recipes</span>
                    </Link>
                </li>
                <li>
                    <Link href="/categories"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6 6h.008v.008H6V6z" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Categories</span>
                    </Link>
                </li>
                <li>
                    <Link href="/savedrecipes"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">

                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Saved Recipes</span>
                    </Link>
                </li>
                <li>
                    <Link href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                    </Link>
                </li>
                <li>
                    <div class="w-full h-[2px] bg-gray-100 rounded-full"></div>
                </li>
                <li>
                    <Link href="/aboutus"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">About Us</span>
                    </Link>
                </li>
                <li>
                    <Link href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Contact Us</span>
                    </Link>
                </li>
                <li>
                    <Link href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="h-[24px] w-[24px]" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>