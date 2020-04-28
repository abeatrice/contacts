<template>
    <button @click="this.trackClick" class="btn btn-secondary mr-2">Track Click</button>
</template>

<script>
    export default {
        props: ["id"],
        methods: {
            trackClick() {
                axios.post('/api/track/'+this.id)
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        }
    }
</script>
