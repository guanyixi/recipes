<template>
    <header>
        <h2><router-link to="/">Yixi's Recipes</router-link></h2>
        <nav>
            <ul>
                <li><router-link to="/category/appetizers">Appetizers</router-link></li>
                <li><router-link to="/category/bread-and-grains">Bread and Grains</router-link></li>
                <li><router-link to="/category/deserts">Deserts</router-link></li>
                <li><router-link to="/category/eggs-and-tofu">Eggs and Tofu</router-link></li>
                <li><router-link to="/category/meat">Meat</router-link></li>
                <li><router-link to="/category/seafood">Seafood</router-link></li>
                <li><router-link to="/category/seasonal">Seasonal</router-link></li>
                <li><router-link to="/category/stews-and-soup">Stews and Soup</router-link></li>
                <li><router-link to="/category/vegetables">Vegetables</router-link></li>
            </ul>
        </nav>
        <hr>
    </header>
</template>


<style lang="scss">
    header{
        ul{
            display:flex;
            margin:15px 0;
            padding:0;
            li{
                list-style-type: none;
                margin:0 15px 0 0;
            }
        } 
    } 
</style>