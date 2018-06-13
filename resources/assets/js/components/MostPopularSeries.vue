<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
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

        mounted() {
            axios.get('/data')
                .then(response => this.series = response.data);

            console.log('Component mounted.')
        }
    }
</script>
