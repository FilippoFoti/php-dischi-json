const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],
            clicked: false,
            curCard: ""
        }
    },
    mounted() {
        axios
            .get("http://localhost/booleanPHP/php-dischi-json/server.php")
            .then((resp) => {
                this.dischi = resp.data.results;
            })
    },
    methods: {
        details(index) {
            this.clicked = true;
            this.curCard = this.dischi[index];
        }
    }
}).mount("#app");