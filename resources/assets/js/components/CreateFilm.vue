<template>
    <div>
        <h1>Create A Film</h1>
        <form v-on:submit.prevent="addFilm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" v-model="film.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" class="form-control" v-model="film.description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Release Date:</label>
                        <input type="text" class="form-control" v-model="film.release_date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Rating:</label>
                        <input type="text" class="form-control" v-model="film.rating">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Photo:</label>
                        <input type="text" class="form-control" v-model="film.photo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Genre:</label>
                        <input type="text" class="form-control" v-model="film.genre">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" class="form-control" v-model="film.country">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ticket Price:</label>
                        <input type="text" class="form-control col-md-6" v-model="film.ticket_price" />
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Add Film</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        data(){
            return{
                film:{}
            }
        },
        methods: {
            addFilm(){
                let uri = 'http://127.0.0.1:8000/films';
                this.axios.post(uri, this.film).then((response) => {
                    this.$router.push({name: 'AllFilms'})
                })
            }
        }
    }
</script>