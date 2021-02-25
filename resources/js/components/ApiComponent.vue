<template>
   
        <div class="container flex">

                <div class="col-md-6 tags"  v-if="body == 'tags'">
                <div class="card" v-for="(body,index) in apiList" :key="index">
                    
                    <div class="card-header" >
                        <h3 v-if="body.arguments">Argument: {{body.arguments}}</h3>
                    </div>

                    <div class="card-body">                                  
                        <h3 v-if="body.shares">Share: {{body.shares}}</h3>
                    </div>

                    <div class="card-footer" v-if="body.views">                                  
                        <h3>Views: {{body.views}}</h3>
                    </div>                    

                </div>
         </div>


                <div class="col-md-6 categories"  v-if="body == 'categories'">
                <div class="card" v-for="(body,index) in apiList" :key="index">
                    
                    <div class="card-header" >
                        <h3>Name: {{body.name}}</h3>
                    </div>

                    <div class="card-body">                                  

                        <h3 v-if="body.over18"> Only adults can see it </h3>
                        <h3 v-if="body.over18 == false"> Only adults can see it </h3>
                    </div> 
                    

                </div>
         </div>

            <div class="col-md-6 articles"  v-if="body == 'articles'">
                <div class="card" v-for="(body,index) in apiList" :key="index">              
                    <div class="card-header" >
                        <h3>Title: {{body.title}}</h3>
                        <h3>Category: {{body.category_name}}</h3>

                    </div>
                    <div class="card-body">                                  
                        <h3>{{body.content}}</h3>
                    </div>

                    <div class="card-footer">
                        <h3>Author: {{ body.author }}
                    </h3>
                    </div>   
                    
                    
                        
                </div>
            </div>
        </div>

</template>

<script>
    export default {
        
        props : ['api'],
        data(){
            
            return{
            apiList : "",
            categoriesList : "",
            body : this.api,
            
        }
        },
        mounted() {
            axios.get(`api/${this.body}`).then(response => {

                // console.log(response.data);
                this.apiList = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        

            axios.get(`api/categories`).then(response => {

                // console.log(response.data);
                this.categoriesList = response.data.data;

                this.apiList.forEach(article=> {

                    console.log(article);
                    this.categoriesList.forEach(category=> {
                        // console.log(category.id)
                        if(article.category_id == category.id){
                            console.log(category.name)
                            // article.category_name = category.name
                            Vue.set(article, 'category_name', category.name);
                        }
                    })
                })

            }).catch(error => {
                console.log(error);
            });


        }

    }
</script>
