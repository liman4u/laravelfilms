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
                item:{}
            }
        },
        methods: {
            addFilm(){
                let uri = 'http://localhost:8000/films';
                this.axios.post(uri, this.item).then((response) => {
                    this.$router.push({name: 'DisplayFilm'})
                })
            }
        }
    }
</script>