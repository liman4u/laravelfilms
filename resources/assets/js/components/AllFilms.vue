<template>
    <div>
        <h1>Films</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'CreateFilm' }" class="btn btn-primary">Create Film</router-link>
            </div>
        </div><br />
        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Ticket Price</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="film in films">
                <td>{{ film.id }}</td>
                <td>{{ film.name }}</td>
                <td>{{ film.ticket_price }}</td>
                <td><router-link :to="{name: 'ViewFilm', params: { id: film.id }}" class="btn btn-primary">View</router-link></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                films: []
            }
        },
        created: function()
        {
            this.fetchFilms();
        },
        methods: {
            fetchFilms()
            {
                let uri = 'http://127.0.0.1:8000/films';
                this.axios.get(uri).then((response) => {
                    this.films = response.data;
                });
            },
            deleteFilm(id)
            {
                let uri = `http://localhost:8000/films/${id}`;
                this.films.splice(id, 1);
                this.axios.delete(uri);
            }
        }
    }
</script>