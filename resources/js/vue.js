import VuePagination from './components/Pagination';

const  app = new Vue({
    el: '#app',
    data: {
        clientsAutos: {
            total: 0,
            per_page: 15,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 15,
    },
    mounted() {
        this.getPagination();
    },
    components: {
        VuePagination,
    },
    methods: {
        getPagination() {
            axios.get(`/clients/autos?page=${this.clientsAutos.current_page}`)
                .then((response) => {
                    this.clientsAutos = response.data;
                })
                .catch(() => {
                    console.log('handle server error from here');
                });
        },
        deleteClientAuto(autoId) {
            axios.delete(`/autos/${autoId}`)
                .then(() => {
                    this.getPagination();
                    console.log(`success delete ${autoId}`);
                }
                )
                .catch(() => {
                    console.log(`Error by delete ${autoId} car`);
                });
        }
    }
});
