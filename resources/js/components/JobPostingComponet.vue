<template>
    <v-app>
        <v-row class="justify-center" style="margin-top: 50px">
            <v-card
                v-for="post in posts"
                :key="post.id"
                class="col-md-12 mb-4 justify-center"
                color="#FFFFFF"
                light
                max-width="600"
                max-height="600"
            >
                <v-row>
                    <v-col class="v-col-md-11">
                        <v-card-title> {{ post.job_title }} </v-card-title>
                        <v-card-subtitle>
                            {{ post.company_name }}
                        </v-card-subtitle>
                    </v-col>
                    <v-col class="v-col-md-1">
                        <v-img
                            class="ml-auto"
                            :src="`${post.company_logo}`"
                            :max-height="80"
                            :max-width="120"
                        ></v-img>
                    </v-col>
                </v-row>
                <v-card-text>
                    <v-row>
                        <v-icon class="mr-1"> mdi-google-maps </v-icon>
                        <span class="subheading mr-2">{{
                            post.job_location
                        }}</span>
                        <span class="mr-1"></span>
                        <v-icon class="mr-1"> mdi-briefcase </v-icon>
                        <span class="subheading mr-2"
                            >{{ post.education_experiance }}
                        </span>
                        <span class="mr-1"></span>
                        <v-icon class="mr-1"> mdi-cash-multiple </v-icon>
                        <span class="subheading mr-2">
                            {{ post.sal_package }}
                        </span>
                    </v-row>
                </v-card-text>
                <v-card-text class="text-h8 font-weight-bold">
                    <h4>Skills :</h4>
                    <h5>{{ post.skills }}</h5>
                </v-card-text>
                <v-card-text
                    class="text-h8 font-weight-bold"
                    style="margin-top: -25px"
                >
                    <h4>Job Description :</h4>
                    <h5>{{ post.job_description }}</h5>
                </v-card-text>

                <v-card-actions>
                    <v-list-item class="grow">
                        <v-btn color="red darken-1" text @click="apply">
                            Apply Now
                        </v-btn>
                        <v-row align="center" justify="end">
                            <v-icon class="mr-1"> mdi-calendar-clock </v-icon>
                            <span class="subheading mr-2">{{
                                post.job_type
                            }}</span>
                            <v-icon class="mr-1"> mdi-share-variant </v-icon>
                            <span class="subheading">Today </span>
                        </v-row>
                    </v-list-item>
                </v-card-actions>
            </v-card>
             <v-alert type="success" v-if="show_alert" max-height="400px" max-width="600px">
            I'm a success alert.
        </v-alert>
        </v-row>
    </v-app>
</template>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script>
import axios from "axios";
export default {
    mounted() {
        this.fetchingJobsData();
    },
    data: () => ({
        posts: [],
        show_alert: false,
    }),
    methods: {
        apply() {
            if(this.show_alert == true){
                this.show_alert = false;
            }
             if(this.show_alert == false){
                this.show_alert = true;
            }
            console.log("Apply Action Has been Called");
        },
        fetchingJobsData() {
            axios
                .get("/jobPosting")
                .then((response) => {
                    this.posts = response.data;
                    console.log("Getting Jobs data", this.posts);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
};
</script>
