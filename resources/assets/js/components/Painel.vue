<template>
    <div v-bind:class="defineCor">
        <div class="card-header">{{ titulo }}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed: {
            defineCor: function() {
                return "card " + (this.cor || "card-default");
            }
        }
    }
</script>

<style>
    .bg-success {
        background-color: #38c172 !important;
    }
</style>
