<template>
    <div class="flex flex-col h-full w-[300px] shadow-2xl w-full rounded-2xl px-8 py-4 justify-start items-center">
        <div class="font-bold text-xl">Settings</div>
        <div
            class="flex flex-row w-[200px] h-[80px] justify-start items-center px-8 rounded-2xl hover:shadow-xl active:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            My Details
        </div>
        <div
            class="flex flex-row w-full h-[80px] justify-start items-center px-8 active:shadow-xl rounded-2xl hover:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Profile
        </div>
        <div
            class="flex flex-row w-full h-[80px] justify-start items-center px-8 active:shadow-xl rounded-2xl hover:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Password
        </div>
        <div
            class="flex flex-row w-full h-[80px] justify-start items-center px-8 active:shadow-xl rounded-2xl hover:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Email
        </div>
        <div
            class="flex flex-row w-full h-[80px] justify-start items-center px-8 active:shadow-xl rounded-2xl hover:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"
                    stroke-linecap="round" stroke-linejoin="round"></path>

            </svg>
            Notifications
        </div>
        <div
            class="flex flex-row w-full h-[80px] justify-start items-center px-8 active:shadow-xl rounded-2xl hover:shadow-xl">
            <svg class="w-[24px] h-[24px] mr-2" aaria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"
                stroke-linecap="round" stroke-linejoin="round"></path>

        </svg>
        Sigh Out
    </div>

</div></template>