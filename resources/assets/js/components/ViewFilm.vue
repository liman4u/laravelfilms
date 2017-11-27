<template>
    <div>
        <h1>View Film</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2"><router-link :to="{ name: 'AllFilms' }" class="btn btn-success">Return to Films</router-link></div>
        </div>
        <form >
            <div class="form-group">
                <label>Name</label>
                <input type="text" disabled class="form-control" v-model="film.name">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" disabled class="form-control" v-model="film.description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Release Date:</label>
                        <input type="text" disabled class="form-control" v-model="film.release_date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Rating:</label>
                        <input type="text" disabled class="form-control" v-model="film.rating">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Photo:</label>
                        <input type="text" disabled class="form-control" v-model="film.photo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Genre:</label>
                        <input type="text" disabled class="form-control" v-model="film.genre">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" disabled class="form-control" v-model="film.country">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ticket Price:</label>
                        <input type="text"  disabled class="form-control col-md-6" v-model="film.ticket_price" />
                    </div>
                </div>
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
            }

        }
    }
</script>