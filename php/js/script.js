const app = new Vue({
    el : "#app",

    data: {
        apiUrl : "",
        discs: []
    },

    methods: {
        getApi(){
            axios.get(this.apiUrl)
            .then((result) => {
                this.discs = result.data
                console.log(result.data)   
            })
        }
    },

    mounted() {
        this.getApi()
    },
})