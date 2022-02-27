<template>
    <v-app>
    <v-card class="mx-auto" color="#FAFAFA" light max-width="600">
        <v-card-title> IOS Developer </v-card-title>
        <v-card-subtitle> Tutoroot Tech </v-card-subtitle>
        <v-card-text>
            <v-row>
                <v-icon class="mr-1"> mdi-google-maps </v-icon>
                <span class="subheading mr-2">Hyderabad</span>
                <span class="mr-1"></span>
                <v-icon class="mr-1"> mdi-arrow-expand </v-icon>
                <span class="subheading mr-2">2-3 Years </span>
                <span class="mr-1"></span>
                <v-icon class="mr-1"> mdi-cash-multiple </v-icon>
                <span class="subheading mr-2"> 30,000 - 90,000 </span>
            </v-row>
        </v-card-text>
        <v-card-text class="text-h8 font-weight-bold">
            <h4>Job Description</h4>
            Required descent and fast learner for e commerce platforms.
            Education is not important for this role but he should read the item
            by seeing on item description.
        </v-card-text>

        <v-card-actions>
            <v-list-item class="grow">
                <v-btn color="red darken-1" text @click="apply">
                    Apply Now
                </v-btn>

                <v-row align="center" justify="end">
                    <v-icon class="mr-1"> mdi-calendar-clock </v-icon>
                    <span class="subheading mr-2">Full Time</span>
                    <v-icon class="mr-1"> mdi-share-variant </v-icon>
                    <span class="subheading">1 Day Ago </span>
                </v-row>
            </v-list-item>
        </v-card-actions>
    </v-card>
    </v-app>

</template>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script>
export default {
    data: () => ({
        items: [],
    }),
    methods: {
        apply() {
            console.log("Apply Action Has been Called");
        },
    },
};
</script>
