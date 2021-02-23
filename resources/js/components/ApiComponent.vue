<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" v-for="(body,index) in apiList" :key="index">
                    
                    <div class="card-header" >
                        <h3 v-if="body.arguments">Argument: {{body.arguments}}</h3>
                        <h3 v-if="body.name">Name: {{body.name}}</h3>
                        <h3 v-if="body.title">Article: {{body.title}}</h3>

                    </div>

                    <div class="card-body">                                  
                        <h3 v-if="body.shares">Share: {{body.shares}}</h3>
                        <h3 v-if="body.over18"> Only adults can see it </h3>
                        <h3 v-if="body.over18 == false"> Only adults can see it </h3>
                        <h3 v-if="body.content">{{body.content}}</h3>



                    </div>

                    <div class="card-footer" v-if="body.views">                                  
                        <h3>Views: {{body.views}}</h3>
                    </div>
                    <div class="card-footer" v-if="body.author">
                        <h3>Author: {{ body.author }}
                    </h3>
                    </div>   
                    

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
            body : this.api,
            
        }
        },
        mounted() {
            axios.get(`api/${this.body}`).then(response => {

                console.log(response.data);
                this.apiList = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        
        }

    }
</script>
