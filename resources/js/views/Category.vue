<template>
	<div>
		<h1>{{catName}}</h1>
        <p>{{catDescription}}</p>
        <div class="recipes">
            <div v-for="post in posts" :key="post.id">
                <h2>{{post.title.rendered}}</h2>
            </div>
        </div>
	</div>
</template>

<script>
export default{
    data: function () {
    return {
      catName: '',
      catDescription: '',
      catId: '',
      posts: []
    }
  },
    methods:{
        getCat: function(){
            var self = this;
            $.ajax({
                url: '/wp-json/wp/v2/categories?slug=' + self.$route.params.category,
                success: function(data){
                    self.catName = data[0].name;
                    self.catDescription = data[0].description;
                    self.catId = data[0].id;
                },
                complete: function(){
                    self.getPosts();
                }
            });
        },
        getPosts: function(){
            var self = this;
            $.ajax({
                url: '/wp-json/wp/v2/posts/?per_page=100&categories=' + self.catId,
                success: function(data){
                    self.posts = data;
                    console.log(data);
                }
            });
        }
    },
    mounted(){
        this.getCat();
        
    },
    watch:{
        $route (to, from){
            this.getCat();
        }
    } 
}
</script>