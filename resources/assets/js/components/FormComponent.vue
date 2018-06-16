<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-5 mb-5">Practice - Form</h1>

                <p>Test</p>
            </div>
        </div>
    </div>
</template>

<script>
    import swal from 'sweetalert';

    export default {
        data() {
            return {

            }
        },

        mounted() {
            swal('Hello World', 'My name is Riki!', 'success');

            // swal("Are you sure you want to do this?", {
            //     buttons: ["Oh noez!", "Aww yiss!"],
            // });

            // swal("Oops!", "Something went wrong!", "error")
        }
    }
</script>
