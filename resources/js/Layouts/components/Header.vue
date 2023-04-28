<script scope>
// import Menu from "../Layouts/components/Menu.vue";

export default {
    components: {
        // Menu,
    },
    data() {
        return {
            prevScrollPos: 0
        };
    },

    mounted() {
        window.addEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll() {
            const btmNav = document.querySelector('.top-nav');

            if (window.pageYOffset > this.prevScrollPos) {
                // Scrolling down
                btmNav.style.transform = 'translateY(-180%)';
            } else {
                // Scrolling up
                btmNav.style.transform = 'translateY(0)';
            }

            this.prevScrollPos = window.pageYOffset;
        }
    },
    beforeDestroy() {
        window.removeEventListener('scroll', this.handleScroll);
    },


}

</script>
<style>
.top-nav {
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    display: flex;
    width: 100%;
    flex-direction: row;
    /* align-items: center; */
    justify-content: space-around;
    padding-bottom: env(safe-area-inset-top);
    height: 4rem;
    transition: transform 0.3s;
    z-index: 99;
}

.top-nav.hidden {
    transform: translateY(-100%);
}
</style>
<template >
    <div class="top-nav bg-white dark:bg-gray-700 pt-2">
        <div class=" flex container mx-auto  h-full ">
            <div class="navbar-start flex">

                <a class="btn btn-ghost normal-case text-xl dark:text-white border-none outline-none">Recipe Hunter</a>

            </div>
            <!--windowed-->
            <div class="navbar-center hidden lg:flex px-4">
                <ul class="menu menu-horizontal">
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                        <Link href="/home">Home</Link>
                    </li>
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                        <Link href="/categories">Categories</Link>
                    </li>
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                        <Link href="/myrecipes">Add Recipe</Link>
                    </li>
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                        <Link href="/savedrecipes">Saved Recipes</Link>
                    </li>
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
                        <Link href="/contactus">Contact Us</Link>
                    </li>
                    <li class="text-gray dark:text-white p-0 mb-6
                                    relative before:content-[''] before:absolute before:block before:w-full before:h-[2px] 
                                    before:bottom-0 before:left-0 before:bg-gradient-to-r from-lemon to-green cursor-pointer
                                    before:hover:scale-x-100 before:scale-x-0 before:origin-top-left
                                    before:transition before:ease-in-out before:duration-300">
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
                            class=" bg-gradient-to-r outline-none from-lemon-20 to-green-20 border-2 border-gray-300 text-gray-900 text-sm  
                                               focus:ring-green focus:border-green rounded-full w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 
                                               dark:placeholder-gray-200 dark:text-white dark:focus:ring-green dark:text-gray-00 "
                            placeholder="Search... ">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 cursor-pointer ">
                            <svg aria-hidden="true" class=" w-5 h-5 text-gray-600 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="dropdown dropdown-end flex">

                    <label tabindex="0" class="btn btn-ghost btn-circle avatar outline-none border-none">
                        <div class="w-10 rounded-full ">
                            <img class="w-10 h-10 rounded-full  " src="assets/images/avatar.jpg" alt="">

                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-12 p-2 shadow menu menu-compact dropdown-content rounded-box w-52 bg-white dark:bg-gray-500 text">
                        <li
                            class="  text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/home" class="justify-start ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            Home
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li
                            class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/categories" class="justify-start ">
                            <svg class="h-5 w-5  " fill="none" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.24 2H5.34C3.15 2 2 3.15 2 5.33V7.23C2 9.41 3.15 10.56 5.33 10.56H7.23C9.41 10.56 10.56 9.41 10.56 7.23V5.33C10.57 3.15 9.42 2 7.24 2Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M18.6695 2H16.7695C14.5895 2 13.4395 3.15 13.4395 5.33V7.23C13.4395 9.41 14.5895 10.56 16.7695 10.56H18.6695C20.8495 10.56 21.9995 9.41 21.9995 7.23V5.33C21.9995 3.15 20.8495 2 18.6695 2Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M18.6695 13.4302H16.7695C14.5895 13.4302 13.4395 14.5802 13.4395 16.7602V18.6602C13.4395 20.8402 14.5895 21.9902 16.7695 21.9902H18.6695C20.8495 21.9902 21.9995 20.8402 21.9995 18.6602V16.7602C21.9995 14.5802 20.8495 13.4302 18.6695 13.4302Z"
                                    fill="currentColor"></path>
                                <path opacity="0.4"
                                    d="M7.24 13.4302H5.34C3.15 13.4302 2 14.5802 2 16.7602V18.6602C2 20.8502 3.15 22.0002 5.33 22.0002H7.23C9.41 22.0002 10.56 20.8502 10.56 18.6702V16.7702C10.57 14.5802 9.42 13.4302 7.24 13.4302Z"
                                    fill="currentColor"></path>

                            </svg>
                            Categories
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li
                            class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/myrecipes" class="justify-start ">
                            <svg class="h-5 w-5  " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M 6 1 L 6 4 L 7 4 L 7 2 L 9 2 L 9 1 L 6 1 z M 11 1 L 11 2 L 14 2 L 14 1 L 11 1 z M 16 1 L 16 2 L 18 2 L 18 4 L 19 4 L 19 1 L 16 1 z M 1 6 L 1 19 L 14 19 L 14 6 L 1 6 z M 18 6 L 18 9 L 19 9 L 19 6 L 18 6 z M 2 7 L 13 7 L 13 18 L 2 18 L 2 7 z M 7 9 L 7 12 L 4 12 L 4 13 L 7 13 L 7 16 L 8 16 L 8 13 L 11 13 L 11 12 L 8 12 L 8 9 L 7 9 z M 18 11 L 18 13 L 16 13 L 16 14 L 19 14 L 19 11 L 18 11 z ">
                                </path>
                            </svg>
                            Add New Recipe
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li
                            class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/savedrecipes" class="justify-start ">
                            <svg class="h-5 w-5  " fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 19.2674V7.84496C19 5.64147 17.4253 3.74489 15.2391 3.31522C13.1006 2.89493 10.8994 2.89493 8.76089 3.31522C6.57467 3.74489 5 5.64147 5 7.84496V19.2674C5 20.6038 6.46752 21.4355 7.63416 20.7604L10.8211 18.9159C11.5492 18.4945 12.4508 18.4945 13.1789 18.9159L16.3658 20.7604C17.5325 21.4355 19 20.6038 19 19.2674Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            Saved Recipes
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li
                            class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/contactus" class="justify-start ">
                            <svg class="h-4 w-4  " fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xml:space="preserve">
                                <path d="M4,24v-5H0V0h23v19h-9.3L4,24z M2,17h4v3.7l7.3-3.7H21V2H2V17z"></path>

                                <rect x="5" y="8" width="3" height="3"></rect>

                                <rect x="10" y="8" width="3" height="3"></rect>

                                <rect x="15" y="8" width="3" height="3"></rect>

                            </svg>
                            Contact Us
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>

                        <li
                            class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full lg:hidden">
                            <Link href="/aboutus" class="justify-start ">
                            <svg class="h-5 w-5  " viewBox="0 0 512 512" fill="currentColor">
                                <path
                                    d="M213.333333,3.55271368e-14 C95.51296,3.55271368e-14 3.55271368e-14,95.51168 3.55271368e-14,213.333333 C3.55271368e-14,331.153707 95.51296,426.666667 213.333333,426.666667 C331.154987,426.666667 426.666667,331.153707 426.666667,213.333333 C426.666667,95.51168 331.154987,3.55271368e-14 213.333333,3.55271368e-14 Z M213.333333,384 C119.227947,384 42.6666667,307.43872 42.6666667,213.333333 C42.6666667,119.227947 119.227947,42.6666667 213.333333,42.6666667 C307.44,42.6666667 384,119.227947 384,213.333333 C384,307.43872 307.44,384 213.333333,384 Z M240.04672,128 C240.04672,143.46752 228.785067,154.666667 213.55008,154.666667 C197.698773,154.666667 186.713387,143.46752 186.713387,127.704107 C186.713387,112.5536 197.99616,101.333333 213.55008,101.333333 C228.785067,101.333333 240.04672,112.5536 240.04672,128 Z M192.04672,192 L234.713387,192 L234.713387,320 L192.04672,320 L192.04672,192 Z"
                                    id="Shape"> </path>

                            </svg>
                            About Us
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li class="text-gray-800 dark:text-white hover:bg-gray-300  hover:text-gray-800 rounded-full ">
                            <Link href="/dashboard" class="justify-start ">
                            <svg class="h-5 w-5  " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.1"
                                    d="M8.976 3C4.05476 3 3 4.05476 3 8.976V15.024C3 19.9452 4.05476 21 8.976 21H9V9H21V8.976C21 4.05476 19.9452 3 15.024 3H8.976Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M3 8.976C3 4.05476 4.05476 3 8.976 3H15.024C19.9452 3 21 4.05476 21 8.976V15.024C21 19.9452 19.9452 21 15.024 21H8.976C4.05476 21 3 19.9452 3 15.024V8.976Z"
                                    stroke="currentColor" stroke-width="2"></path>
                                <path d="M21 9L3 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M9 21L9 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            Dashboard
                            <!-- <span class="badge bg-gray-800 dark:bg-white text-white dark:text-gray-800 border-none outline-none">New</span> -->
                            </Link>
                        </li>
                        <li class="text-gray dark:text-white hover:bg-gray-300 rounded-full hover:text-gray-800">
                            <Link href="/account">
                            <svg class="h-5 w-5  " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.3499 8.92293L19.9837 8.7192C19.9269 8.68756 19.8989 8.67169 19.8714 8.65524C19.5983 8.49165 19.3682 8.26564 19.2002 7.99523C19.1833 7.96802 19.1674 7.93949 19.1348 7.8831C19.1023 7.82677 19.0858 7.79823 19.0706 7.76998C18.92 7.48866 18.8385 7.17515 18.8336 6.85606C18.8331 6.82398 18.8332 6.79121 18.8343 6.72604L18.8415 6.30078C18.8529 5.62025 18.8587 5.27894 18.763 4.97262C18.6781 4.70053 18.536 4.44993 18.3462 4.23725C18.1317 3.99685 17.8347 3.82534 17.2402 3.48276L16.7464 3.1982C16.1536 2.85658 15.8571 2.68571 15.5423 2.62057C15.2639 2.56294 14.9765 2.56561 14.6991 2.62789C14.3859 2.69819 14.0931 2.87351 13.5079 3.22396L13.5045 3.22555L13.1507 3.43741C13.0948 3.47091 13.0665 3.48779 13.0384 3.50338C12.7601 3.6581 12.4495 3.74365 12.1312 3.75387C12.0992 3.7549 12.0665 3.7549 12.0013 3.7549C11.9365 3.7549 11.9024 3.7549 11.8704 3.75387C11.5515 3.74361 11.2402 3.65759 10.9615 3.50224C10.9334 3.48658 10.9056 3.46956 10.8496 3.4359L10.4935 3.22213C9.90422 2.86836 9.60915 2.69121 9.29427 2.62057C9.0157 2.55807 8.72737 2.55634 8.44791 2.61471C8.13236 2.68062 7.83577 2.85276 7.24258 3.19703L7.23994 3.1982L6.75228 3.48124L6.74688 3.48454C6.15904 3.82572 5.86441 3.99672 5.6517 4.23614C5.46294 4.4486 5.32185 4.69881 5.2374 4.97018C5.14194 5.27691 5.14703 5.61896 5.15853 6.3027L5.16568 6.72736C5.16676 6.79166 5.16864 6.82362 5.16817 6.85525C5.16343 7.17499 5.08086 7.48914 4.92974 7.77096C4.9148 7.79883 4.8987 7.8267 4.86654 7.88237C4.83436 7.93809 4.81877 7.96579 4.80209 7.99268C4.63336 8.26452 4.40214 8.49186 4.12733 8.65572C4.10015 8.67193 4.0715 8.68752 4.01521 8.71871L3.65365 8.91908C3.05208 9.25245 2.75137 9.41928 2.53256 9.65669C2.33898 9.86672 2.19275 10.1158 2.10349 10.3872C2.00259 10.6939 2.00267 11.0378 2.00424 11.7255L2.00551 12.2877C2.00706 12.9708 2.00919 13.3122 2.11032 13.6168C2.19979 13.8863 2.34495 14.134 2.53744 14.3427C2.75502 14.5787 3.05274 14.7445 3.64974 15.0766L4.00808 15.276C4.06907 15.3099 4.09976 15.3266 4.12917 15.3444C4.40148 15.5083 4.63089 15.735 4.79818 16.0053C4.81625 16.0345 4.8336 16.0648 4.8683 16.1255C4.90256 16.1853 4.92009 16.2152 4.93594 16.2452C5.08261 16.5229 5.16114 16.8315 5.16649 17.1455C5.16707 17.1794 5.16658 17.2137 5.16541 17.2827L5.15853 17.6902C5.14695 18.3763 5.1419 18.7197 5.23792 19.0273C5.32287 19.2994 5.46484 19.55 5.65463 19.7627C5.86915 20.0031 6.16655 20.1745 6.76107 20.5171L7.25478 20.8015C7.84763 21.1432 8.14395 21.3138 8.45869 21.379C8.73714 21.4366 9.02464 21.4344 9.30209 21.3721C9.61567 21.3017 9.90948 21.1258 10.4964 20.7743L10.8502 20.5625C10.9062 20.5289 10.9346 20.5121 10.9626 20.4965C11.2409 20.3418 11.5512 20.2558 11.8695 20.2456C11.9015 20.2446 11.9342 20.2446 11.9994 20.2446C12.0648 20.2446 12.0974 20.2446 12.1295 20.2456C12.4484 20.2559 12.7607 20.3422 13.0394 20.4975C13.0639 20.5112 13.0885 20.526 13.1316 20.5519L13.5078 20.7777C14.0971 21.1315 14.3916 21.3081 14.7065 21.3788C14.985 21.4413 15.2736 21.4438 15.5531 21.3855C15.8685 21.3196 16.1657 21.1471 16.7586 20.803L17.2536 20.5157C17.8418 20.1743 18.1367 20.0031 18.3495 19.7636C18.5383 19.5512 18.6796 19.3011 18.764 19.0297C18.8588 18.7252 18.8531 18.3858 18.8417 17.7119L18.8343 17.2724C18.8332 17.2081 18.8331 17.1761 18.8336 17.1445C18.8383 16.8247 18.9195 16.5104 19.0706 16.2286C19.0856 16.2007 19.1018 16.1726 19.1338 16.1171C19.166 16.0615 19.1827 16.0337 19.1994 16.0068C19.3681 15.7349 19.5995 15.5074 19.8744 15.3435C19.9012 15.3275 19.9289 15.3122 19.9838 15.2818L19.9857 15.2809L20.3472 15.0805C20.9488 14.7472 21.2501 14.5801 21.4689 14.3427C21.6625 14.1327 21.8085 13.8839 21.8978 13.6126C21.9981 13.3077 21.9973 12.9658 21.9958 12.2861L21.9945 11.7119C21.9929 11.0287 21.9921 10.6874 21.891 10.3828C21.8015 10.1133 21.6555 9.86561 21.463 9.65685C21.2457 9.42111 20.9475 9.25526 20.3517 8.92378L20.3499 8.92293Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M8.00033 12C8.00033 14.2091 9.79119 16 12.0003 16C14.2095 16 16.0003 14.2091 16.0003 12C16.0003 9.79082 14.2095 7.99996 12.0003 7.99996C9.79119 7.99996 8.00033 9.79082 8.00033 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>

                            </svg>
                            Settings</Link>
                        </li>
                        <li class="text-gray dark:text-white hover:bg-gray-300 rounded-full hover:text-gray-800">
                            <Link href="/login">
                            <svg fill="currentColor" width="16px" height="24px" viewBox="0 0 1024 1024"
                                xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M116.832 543.664H671.28c17.696 0 32-14.336 32-32s-14.304-32-32-32H118.832l115.76-115.76c12.496-12.496 12.496-32.752 0-45.248s-32.752-12.496-45.248 0l-189.008 194 189.008 194c6.256 6.256 14.432 9.376 22.624 9.376s16.368-3.12 22.624-9.376c12.496-12.496 12.496-32.752 0-45.248zM959.664 0H415.663c-35.36 0-64 28.656-64 64v288h64.416V103.024c0-21.376 17.344-38.72 38.72-38.72h464.72c21.391 0 38.72 17.344 38.72 38.72l1.007 818.288c0 21.376-17.328 38.72-38.72 38.72H454.816c-21.376 0-38.72-17.344-38.72-38.72V670.944l-64.416.08V960c0 35.344 28.64 64 64 64h543.984c35.36 0 64.016-28.656 64.016-64V64c-.015-35.344-28.671-64-64.015-64z">
                                    </path>
                            </svg>
                            Logout
                            </Link>
                        </li>
                    </ul>
                </div>
                <!-- <div class=" lg:hidden  md:flex sm:flex">
                        <Menu />
                    </div> -->
        </div>
    </div>
    <!-- <footer /> -->

</div></template>

