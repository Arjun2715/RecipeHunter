<script scope>
import Footer from "../Layouts/components/Footer.vue";
import Header from "../Layouts/components/Header.vue";
import RecentlyUpdated from "../Layouts/components/RecentlyUpdated.vue";
export default {
    components: {
        Header,
        Footer,
        RecentlyUpdated,
    },
    
}
</script>
<template>
    <Header />
    <div class="flex flex-col lg:mt-8">
        <div>
            <div class=" flex flex-col w-full ">
                <div class="container mx-auto px-4 w-full h-full ">
                    <div class="h-auto">
                        <div class="flex flex-row justify-between">
                            <div
                                class="font-bold text-transparent lg:text-4xl md:text-xl bg-clip-text bg-gradient-to-r from-lemon to-green">
                                About Us</div>
                            <div class="flex flex-row w-auto  ">
                            </div>
                        </div>
                        <div class="dark:text-white"><br>
                            Recipe Hunter is a powerful and intuitive recipe search and discovery app that aims to help you
                            find the perfect meal for any occasion. Whether you are a seasoned cook or a newbie in the
                            kitchen, this app is perfect for anyone who loves to explore new recipes and experiment with
                            different cuisines.<br><br>
                            The app is designed to provide a seamless and intuitive user experience, with a clean and
                            user-friendly interface that makes it easy to find the perfect recipe quickly. With Recipe
                            Hunter, you can search for recipes based on ingredients, dietary requirements, cooking time, and
                            more, making it the perfect tool for meal planning and grocery shopping.<br><br>
                            One of the standout features of Recipe Hunter is its advanced search algorithms that make it
                            easy to find recipes that suit your preferences. The app offers a wide variety of filters and
                            search criteria, allowing you to refine your search and find the perfect recipe that meets your
                            needs. For example, if you are looking for a vegan recipe that can be made in under 30 minutes,
                            Recipe Hunter will filter out any recipes that don't fit those criteria, making it easy to find
                            the perfect recipe quickly.<br><br>
                            In addition to its powerful search capabilities, Recipe Hunter also offers a range of other
                            features that make it a must-have app for any food lover. The app includes a personal recipe box
                            where you can save your favorite recipes and access them easily whenever you need them. You can
                            also create and share your own recipes with the Recipe Hunter community, making it easy to
                            connect with other food enthusiasts and get inspired by their creations.<br><br>
                            Another great feature of Recipe Hunter is its integration with popular grocery apps, such as
                            Instacart and Walmart. This allows you to easily add the ingredients you need for your chosen
                            recipe to your online shopping cart, making grocery shopping a breeze.<br><br>
                            Recipe Hunter also offers a range of helpful cooking tips and tricks, as well as instructional
                            videos that guide you through the cooking process step by step. Whether you are an experienced
                            cook or a beginner, these resources can help you improve your skills and create delicious meals
                            that you and your family will love.<br><br>
                            Overall, Recipe Hunter is the perfect app for anyone who loves to cook and is looking for an
                            easy and efficient way to discover new recipes, plan meals, and shop for groceries. With its
                            advanced search algorithms, personal recipe box, and integration with popular grocery apps,
                            Recipe Hunter is the ultimate tool for food enthusiasts everywhere.
                            Thank you for choosing our app! We appreciate your support and trust in our product. We hope
                            that our app has made your life easier and more enjoyable. If you have any feedback or
                            suggestions, please don't hesitate to reach out to us. Thanks again for using our app!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
