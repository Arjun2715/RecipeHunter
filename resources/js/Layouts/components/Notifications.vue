<template>
    <div
        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
        <div class="flow-root">
            <h3 class="text-xl font-semibold dark:text-white">Email Notifications</h3>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400">You can set up
                Themesberg to get email notifications </p>
            <div class="divide-y divide-gray-200 dark:divide-gray-700">
                <!-- Item 1 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Rating
                            reminders</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send an
                            email reminding me to rate an item a week after purchase</div>
                    </div>
                    <label for="rating-reminders" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="rating-reminders" class="sr-only">
                        <span
                            class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 2 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item update
                            notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send
                            user and product notifications for you</div>
                    </div>
                    <label for="item-update" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="item-update" class="sr-only" checked>
                        <span
                            class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 3 -->
                <div class="flex items-center justify-between py-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Item
                            comment notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me
                            an email when someone comments on one of my items</div>
                    </div>
                    <label for="item-comment" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="item-comment" class="sr-only" checked>
                        <span
                            class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
                <!-- Item 4 -->
                <div class="flex items-center justify-between pt-4">
                    <div class="flex flex-col flex-grow">
                        <div class="text-lg font-semibold text-gray-900 dark:text-white">Buyer
                            review notifications</div>
                        <div class="text-base font-normal text-gray-500 dark:text-gray-400">Send me
                            an email when someone leaves a review with their rating</div>
                    </div>
                    <label for="buyer-rev" class="relative flex items-center cursor-pointer">
                        <input type="checkbox" id="buyer-rev" class="sr-only">
                        <span
                            class="h-6 bg-gray-200 border border-gray-200 rounded-full w-11 toggle-bg dark:bg-gray-700 dark:border-gray-600"></span>
                    </label>
                </div>
            </div>
            <div class="mt-6">
                <button
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save
                    all</button>
            </div>
        </div>
    </div>
</template>