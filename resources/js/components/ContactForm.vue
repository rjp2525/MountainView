<template>
    <form @submit.prevent="submitContactForm">
        <div class="row">
            <div v-if="success" class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Your message has been sent and we will be in touch shortly.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div v-if="Object.keys(errors).length != 0" class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There were some problems with the information you provided.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group name">
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.name,
                        }"
                        placeholder="Name"
                        v-model="name"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.name" class="invalid-feedback">{{ errors.name[0] }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group email">
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.email,
                        }"
                        placeholder="Email"
                        v-model="email"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.email" class="invalid-feedback">{{ errors.email[0] }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group subject">
                    <input
                        type="text"
                        name="subject"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.subject,
                        }"
                        placeholder="Subject"
                        v-model="subject"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.subject" class="invalid-feedback">{{ errors.subject[0] }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group number">
                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.phone,
                        }"
                        placeholder="Phone Number"
                        v-model="phone"
                        :readonly="!this.loaded"
                    />
                    <div v-if="errors && errors.phone" class="invalid-feedback">{{ errors.phone[0] }}</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group type">
                    <select
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.type,
                        }"
                        id="request-type"
                        name="request-type"
                        v-model="type"
                        :readonly="!this.loaded"
                    >
                        <option value="" selected disabled>Please select a service...</option>
                        <option value="Lawncare">Lawn Care (Mowing)</option>
                        <option value="Fertilize">Fertilization</option>
                        <option value="Irrigation">Irrigation</option>
                        <option value="Cleanup">Seasonal Clean-up</option>
                        <option value="Hydroseed">Hydroseeding or sod installation</option>
                        <option value="Snow">Snow Plowing</option>
                        <option value="Dethatch">Dethatching and Aerating</option>
                        <option value="Hardscaping">Hardscapes and retaining walls</option>
                        <option value="ShrubTrimming">Tree and shrub trimming</option>
                        <option value="Other">Other</option>
                    </select>
                    <div v-if="errors && errors.type" class="invalid-feedback">{{ errors.type[0] }}</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group message">
                    <textarea
                        class="form-control"
                        v-bind:class="{
                            'is-invalid': errors && errors.message,
                        }"
                        name="message"
                        placeholder="Enter any specific information about your request here"
                        v-model="message"
                        :readonly="!this.loaded"
                    >
                    </textarea>
                    <div v-if="errors && errors.message" class="invalid-feedback">{{ errors.message[0] }}</div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="send-btn text-center">
                    <button
                        class="btn-md button-theme"
                        v-bind:class="{ disabled: !this.loaded }"
                        :disabled="!this.loaded"
                        type="submit"
                    >
                        {{ submit_button_text }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
/** Javascript Logic */
let emailRegExp = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

export default {
    data() {
        return {
            errors: {},
            success: false,
            loaded: true,
            name: "",
            email: "",
            subject: "",
            phone: "",
            type: "",
            message: "",
            endoint: "/contact",
            submit_button_text: "Send Message",
        };
    },

    methods: {
        submitContactForm() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                this.submit_button_text = "Sending...";

                axios
                    .post("/contact", {
                        name: this.name,
                        email: this.email,
                        subject: this.subject,
                        phone: this.phone,
                        type: this.type,
                        message: this.message,
                    })
                    .then(({ data }) => {
                        this.name = "";
                        this.email = "";
                        this.subject = "";
                        this.phone = "";
                        this.message = "";

                        //flash(data.message);
                        console.log(data);

                        this.loaded = true;
                        this.success = true;
                        this.submit_button_text = "Send Message";

                        this.$emit("submitted", data);
                    })
                    .catch(error => {
                        this.loaded = true;

                        this.submit_button_text = "Send Message";

                        if (error.response.status === 422) {
                            this.errors = error.response.data.errors || {};
                        }
                    });
            }
        },

        //onSubmit() {
        // Submit ajax request
        //},
    },
};
</script>
