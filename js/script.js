var app = new Vue({
    el: '#root',

    data: {

        genreSelected: "",
        cds: []

    },

    methods: {

        getDischi: function() {

            axios
            .get('http://localhost/classe-31/dischi/recap/server.php', {
                params: {
                    genere: this.genreSelected
                }
            })
            .then( (response) => {

                this.cds = response.data;

            });
        }
    },

    mounted() {

        this.getDischi();

    }

})