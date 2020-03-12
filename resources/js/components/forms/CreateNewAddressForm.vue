<template>
    <form @submit.prevent="submitForm" id="add-new-address=form">
        <div class="row">
            <div v-if="Object.keys(errors).length != 0" class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There were some problems with the information you provided.
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="text"
                        name="label"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.label,
                        }"
                        placeholder="Address Label"
                        v-model="label"
                        :readonly="!this.loaded"
                        required
                    />
                    <div v-if="errors && errors.label" class="invalid-feedback">{{ errors.label[0] }}</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="text"
                        name="company"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.company,
                        }"
                        placeholder="Business Name (if applicable)"
                        v-model="company"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.company" class="invalid-feedback">{{ errors.company[0] }}</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="text"
                        name="street"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.street,
                        }"
                        placeholder="123 Street Name"
                        v-model="street"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.street" class="invalid-feedback">{{ errors.street[0] }}</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group row">
                    <div class="col-md-8">
                        <input
                            type="text"
                            name="city"
                            class="form-control"
                            v-bind:class="{
                                'is-invalid': errors && errors.city,
                            }"
                            placeholder="Town/City"
                            v-model="city"
                            :readonly="!this.loaded"
                        />
                        <div v-if="errors && errors.city" class="invalid-feedback">{{ errors.city[0] }}</div>
                    </div>
                    <div class="col-md-4">
                        <input
                            type="text"
                            name="state"
                            class="form-control"
                            v-bind:class="{
                                'is-invalid': errors && errors.state,
                            }"
                            placeholder="State"
                            v-model="state"
                            :readonly="!this.loaded"
                            maxlength="2"
                        />
                        <div v-if="errors && errors.state" class="invalid-feedback">{{ errors.state[0] }}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="text"
                        name="zip"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.zip,
                        }"
                        placeholder="Zip Code"
                        v-model="zip"
                        :readonly="!this.loaded"
                        maxlength="5"
                    />
                    <div v-if="errors && errors.zip" class="invalid-feedback">{{ errors.zip[0] }}</div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        name="primary"
                        id="primary"
                        v-bind:class="{
                            'is-invalid': errors && errors.primary,
                        }"
                        v-model="primary"
                        :readonly="!this.loaded"
                        value="1"
                    />
                    <label
                        for="primary"
                        class="form-check-label"
                        v-bind:class="{
                            'text-danger': errors && errors.primary,
                        }"
                    >
                        This is my primary address
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        name="billing"
                        id="billing"
                        v-bind:class="{
                            'is-invalid': errors && errors.billing,
                        }"
                        v-model="billing"
                        :readonly="!this.loaded"
                        value="1"
                    />
                    <label
                        for="billing"
                        class="form-check-label"
                        v-bind:class="{
                            'text-danger': errors && errors.billing,
                        }"
                    >
                        This is my billing address
                    </label>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            errors: {},
            success: false,
            loaded: true,
            label: "",
            company: "",
            street: "",
            city: "",
            state: "",
            zip: "",
            primary: "",
            billing: "",
        };
    },

    methods: {
        submitForm() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};

                axios("/portal/api/address/create", {
                    method: "POST",
                    data: {
                        label: this.label,
                        company: this.company,
                        street: this.street,
                        city: this.city,
                        state: this.state,
                        zip: this.zip,
                        primary: this.primary,
                        billing: this.billing,
                    },
                    withCredentials: true,
                })
                    .then(({ data }) => {
                        this.label = "";
                        this.company = "";
                        this.street = "";
                        this.city = "";
                        this.state = "";
                        this.zip = "";
                        this.primary = "";
                        this.billing = "";

                        //flash(data.message);
                        console.log(data);

                        this.loaded = true;
                        this.success = true;

                        this.$emit("created", data);
                    })
                    .catch(error => {
                        this.loaded = true;

                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            }
        },
    },
};
</script>
