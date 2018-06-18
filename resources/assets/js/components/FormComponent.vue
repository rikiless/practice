<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-5 mb-5">Practice - Form, Swal & Modal</h1>
            </div>
        </div>
    </div>
</template>

<script>
    import swal from 'sweetalert';
    import Tooltip from 'tooltip.js';

    Vue.directive('tooltip', {
        bind(el, bindings) {
            new Tooltip(el, {
                placement: bindings.arg || 'top',
                title: bindings.value,
                template: '<div class="tooltip-custom" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
            });
        }
    });

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
