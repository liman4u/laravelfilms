<template>
    <div>
        <h1>Update Film</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2"><router-link :to="{ name: 'AllFilms' }" class="btn btn-success">Return to Films</router-link></div>
        </div>
        <form v-on:submit.prevent="updateItem">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" v-model="film.name">
            </div>
            <div class="form-group">
                <label name="product_price">Item Price</label>
                <input type="text" class="form-control" v-model="film.ticket_price">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                film:{}
            }
        },
        created: function(){
            this.getFilm();
        },
        methods: {
            getFilm()
            {
                let uri = `http://localhost:8000/films/${this.$route.params.id}/edit`;
                this.axios.get(uri).then((response) => {
                    this.film = response.data;
                });
            },
            updateFilm()
            {
                let uri = 'http://localhost:8000/films/'+this.$route.params.id;
                this.axios.patch(uri, this.item).then((response) => {
                    this.$router.push({name: 'AllFilms'});
                });
            }
        }
    }
</script>