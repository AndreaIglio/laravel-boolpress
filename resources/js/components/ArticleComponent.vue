<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" v-for="article in articles">
                    <div class="card-header" >
                        <h4>Article: {{article.id}}</h4>
                        <h3>Title: {{article.title}}</h3>
                    </div>

                    <div class="card-body">                                  
                       <h3>{{article.content}}</h3>
                    </div>

                    <div class="card-footer">
                        <h3>Author: {{article.author}}</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){

            return {
                articles: "",
            }

        },
        mounted() {
            axios.get('api/articles').then(response => {

                console.log(response.data.data);
                this.articles = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        
        }

    }
</script>
