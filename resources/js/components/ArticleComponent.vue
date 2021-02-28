<template>

    <div class="flex wrapper_api">
        <div class="card" v-for="(article, index) in articlesList" :key="index">
            <h3>Title: {{article.title}}</h3>
            <p>{{article.content}}</p>
            <h4>Author: {{article.author}}</h4>
            <h4>Category: {{article.category_name}}</h4>

        </div>
        

    </div>





</template>

<script>
    export default {
        
        data(){
            
            return{

            articlesList : "",
            categoriesList: "",
            
        }
        },
        mounted() {
            axios.get(`api/articles`).then(response => {

                // console.log(response.data);
                this.articlesList = response.data.data;
            }).catch(error => {
                console.log(error);
                
            });
        

            axios.get(`api/categories`).then(response => {
                // console.log(response.data);
                this.categoriesList = response.data.data;

                this.articlesList.forEach(article=> {

                    console.log(article);
                    this.categoriesList.forEach(category=> {
                        // console.log(category.id)
                        if(article.category_id == category.id){
                            console.log(category.name)
                            // article.category_name = category.name
                            Vue.set(article, 'category_name', category.name);
                            // this.$set(article, 'category_name', category.name);

                        }
                    })
                })

            }).catch(error => {
                console.log(error);
            });


        }

    }
</script>
