<template>
    <div class="app-body">
        <app-header></app-header>
        <main>
            <router-view></router-view>
        </main>
        <app-footer></app-footer>
    </div>
</template>

<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

export default{
    components:{
        'app-header': Header,
        'app-footer': Footer
    }
}
</script>

<style lang="scss">
*{
    box-sizing:border-box;
}

.app-body{
    max-width:1000px;
    margin:0 auto;
}
main{
    padding-bottom: 10px;
}
button{
    padding:8px 10px;
    border-radius:0;
    border:0;
    background-color:lightslategray;
    color:white;
}
li{
    margin:25px 0;
}
a{
    color:slategray;
    text-decoration: none;
}
hr{
    border:0;
    height:1px;
    background-color:#eee;
}
</style>