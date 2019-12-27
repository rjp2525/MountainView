<template>
    <!-- HTML Template -->
    <div>
        <form action="#" @form.prevent="onSubmit" method="POST" enctype="multipart/form-data"></form>
    </div>

    <!--<div class="row">
        <div class="vol-12 error-message">
            <p v-show="!email.valid">Please enter a valid email address.</p>
        </div>
        <div class="col-md-6">
            <div class="form-group name">
                <input type="text" name="name" class="form-control" placeholder="Name" v-model="name" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group email">
                <input
                    type="email"
                    name="email"
                    :class="{ email, form-control, error: !email.valid }"
                    placeholder="Email"
                    v-model="email.value"
                />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group subject">
                <input type="text" name="subject" class="form-control" placeholder="Subject" v-model="subject" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group number">
                <input type="text" name="phone" class="form-control" placeholder="Phone number" v-model="phone" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group type">
                <select class="form-control" id="request-type" name="request-type" v-model="selection.servicetype">
                    <option value="" selected disabled>Please select a service...</option>
                    <option value="lawn_care">Lawn Care (Mowing)</option>
                    <option value="fertilization">Fertilization</option>
                    <option value="irrigation">Irrigation</option>
                    <option value="clean_up">Seasonal Clean-up</option>
                    <option value="hydroseed_sod">Hydroseeding or sod installation</option>
                    <option value="snow_removal">Snow Plowing</option>
                    <option value="dethatch_aerate">Dethatching and Aerating</option>
                    <option value="hardscaping">Hardscapes and retaining walls</option>
                    <option value="tree_shrubs">Tree and shrub trimming</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group message">
                <textarea
                    class="form-control"
                    name="message"
                    placeholder="Enter any specific information about your request here"
                    v-model="message.text"
                ></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="send-btn text-center">
                <button type="submit" class="btn-md button-theme">Send Message</button>
            </div>
        </div>
    </div>-->
</template>

<script>
/** Javascript Logic */
let emailRegExp = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

export default {
    methods: {
        onSubmit() {
            // Submit ajax request
        },
    },
};
</script>
