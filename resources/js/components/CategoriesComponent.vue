<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" v-for="category in categories">
                    <div class="card-header" >
                        <h3>Title: {{category.name}}</h3>
                    </div>

                    <div class="card-body">                                  
                       <h3  v-if="category.over18"> Only adults can see it </h3>
                       <h3  v-if="category.over18 == false"> Everyone can see it</h3>

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
            categories : "",

        }
        },
        mounted() {
            axios.get('api/categories').then(response => {

                console.log(response.data);
                this.categories = response.data.data;

            }).catch(error => {
                console.log(error);
                
            });
        
        }

    }
</script>
