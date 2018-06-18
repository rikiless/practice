<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-5 mb-5">Practice - Debounce</h1>

                <div class="card card-default">
                    <div class="card-header">Select Your Favorite TV Show</div>

                    <div class="card-body">
                        <div class="list-group">
                            <a v-for="show in series"
                               v-on:mouseover="featureShow(show)"
                               v-text="show.name"
                               class="list-group-item list-group-item-action"
                               href="#"></a>
                        </div>

                        <button type="button" class="btn btn-primary mt-3" v-on:click="cancelShow()" v-bind:disabled="! activeShow">Cancel</button>
                    </div>
                </div>

                <div class="mt-4 card card-default" v-if="activeShow">
                    <div class="card-header">
                        <div v-text="activeShow.name"></div>
                    </div>

                    <div class="card-body" v-if="activeShow">
                        <img :src="activeShow.image" alt="" class="img-thumbnail float-right">
                        <p><b>Status:</b> {{ activeShow.status }}</p>
                        <p><b>Network:</b> {{ activeShow.network }}</p>
                        <p><b>IMDB:</b> <a :href="activeShow.imdb" v-text="activeShow.imdb"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import bootstrap from 'bootstrap';

    export default {
        data() {
            return {
                series: [],
                activeShow: false,
            }
        },

        methods: {
            featureShow: _.debounce(function(show) {
                this.activeShow = show;
            }, 500),

            cancelShow() {
                this.activeShow = false;
            },
        },

        mounted() {
            axios.get('/data')
                .then(response => this.series = response.data);
        }
    }
</script>

<style>
    .card-body img {
        width: 200px;
    }
</style>
