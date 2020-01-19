<template>
    <div class="modal fade" tabindex="-1" role="dialog" :id="id">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <slot></slot>
                </div>
                <div class="modal-footer">
                    <button v-if="form" type="submit" class="btn btn-primary" :form="form">
                        Save changes
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["id", "form", "name"],
    //{
    //showModal: {
    //    type: Boolean,
    //    default: false,
    //},
    //},
};
</script>
