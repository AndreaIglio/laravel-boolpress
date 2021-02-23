<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" v-for="tag in tags">
                    <div class="card-header" >
                        <h3>Argument: {{tag.arguments}}</h3>
                    </div>

                    <div class="card-body">                                  
                        <h3>Share: {{tag.shares}}</h3>
                       

                    </div>

 <div class="card-footer">                                  
                        <h3>Views: {{tag.views}}</h3>
                       

                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
                return{
            tags : "",

        }
        },
        mounted() {
            axios.get('api/tags').then(response => {

                console.log(response.data);
                this.tags = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        
        }

    }
</script>
