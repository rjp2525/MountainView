<template>
    <div class="card">
        <modal id="create-new-address-modal" name="Add Address" form="add-new-address=form">
            <create-address-form @created="updateAddressList"></create-address-form>
        </modal>

        <div class="card-header card-header-large d-flex list-group-align-items-center">
            <h4 class="card-header-title flex">My Addresses</h4>
            <a href="#" @click.prevent="" data-toggle="modal" data-target="#create-new-address-modal">
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div v-for="address in dataset" class="list-group list-group-flush list-group-align-items-center">
            <div href="#" class="list-group-item list-group-item-action d-flex">
                <div class="list-group-title">
                    <div class="flex">
                        <strong>{{ address.street }}</strong>
                    </div>
                    <small class="text-muted d-sm-none d-md-block"
                        >{{ address.city }}, {{ address.state.toUpperCase() }} {{ address.postal_code }}</small
                    >
                </div>
                <div v-if="address.is_primary" class="d-sm-none d-md-block">
                    <span class="badge badge-light">Primary</span>
                </div>
                <div v-if="address.is_billing" class="d-sm-none d-md-block">
                    <span class="badge badge-light">Billing</span>
                </div>
                <div class="icon-view">
                    <a href="#" class="btn btn-success btn-sm">
                        View or Edit
                    </a>
                </div>
            </div>
        </div>

        <!--<div class="list-group list-group-flush list-group-align-items-center">
            <div href="#" class="list-group-item list-group-item-action d-flex">
                <div class="list-group-title">
                    <div class="flex">
                        <strong>2 Main Street</strong>
                    </div>
                    <small class="text-muted d-sm-none d-md-block">Fremont, NH 03044</small>
                </div>
                <div class="d-sm-none d-md-block">
                    <span class="badge badge-light">Primary</span>
                </div>
                <div class="icon-view">
                    <a href="#" class="btn btn-success btn-sm">
                        View or Edit
                    </a>
                </div>
            </div>
        </div>
        <div class="list-group list-group-flush list-group-align-items-center">
            <div href="#" class="list-group-item list-group-item-action d-flex">
                <div class="list-group-title">
                    <div class="flex">
                        <strong>64 Olde Bridge Lane</strong>
                    </div>
                    <small class="text-muted d-sm-none d-md-block">Epping, NH 03042</small>
                </div>
                <div class="icon-view">
                    <a href="#" class="btn btn-success btn-sm">
                        View or Edit
                    </a>
                </div>
            </div>
        </div>-->
    </div>
</template>

<script>
import Modal from "../Modal.vue";
import CreateNewAddressForm from "../forms/CreateNewAddressForm.vue";
import collection from "../../mixins/collection.js";

export default {
    components: { Modal, CreateNewAddressForm },

    mixins: [collection],

    data() {
        return { dataset: false };
    },

    created() {
        this.fetch();
    },

    methods: {
        fetch() {
            let endpoint = "/portal/api/address";

            axios
                .get(endpoint, { withCredentials: true })
                .then(({ data }) => {
                    //console.log(response.data);
                    this.dataset = data;
                })
                .catch(error => {
                    /**this.loaded = true;

                    this.submit_button_text = "Send Message";

                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }**/
                    console.log(error);
                });
        },

        updateAddressList() {
            $("#create-new-address-modal").modal("hide");
            this.fetch();
        },
    },
};
</script>
