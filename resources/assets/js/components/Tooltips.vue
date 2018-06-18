<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mt-5 mb-5">Practice - Tooltips</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto consequatur deserunt dolorem dolorum libero maiores molestiae nesciunt nisi nulla obcaecati odio odit omnis quam quod suscipit, vel, velit, voluptatibus? <span data-tooltip="Hello World!" data-tooltip-placement="bottom">Hover over me</span>.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci architecto consequatur deserunt dolorem dolorum libero maiores molestiae nesciunt nisi nulla obcaecati odio odit omnis quam quod suscipit, vel, velit, voluptatibus? <span v-tooltip:bottom="'Here is another way to make a tooltip.'">Hover over me</span>.</p>
            </div>
        </div>
    </div>
</template>

<script>
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
        mounted() {
            document.querySelectorAll('[data-tooltip]').forEach(el => {
                new Tooltip(el, {
                    placement: el.dataset.tooltipPlacement || 'top',
                    title: el.dataset.tooltip,
                    template: '<div class="tooltip-custom" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                });
            });
        }
    }

</script>

<style>
    .tooltip-custom {
        background: #000;
        color: #fff;
        padding: 5px 10px;
        border-radius: 25px;
        margin: 5px;
    }
</style>
