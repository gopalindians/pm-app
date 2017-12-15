<template>
    <div>
        <section class="my_profile">
            <div class="container">
                <div class="profile_head">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile_img">
                                        <transition name="fade" mode="out-in">
                                            <img v-if="result.profile_image!==null"
                                                 :src="asset_url+'storage/'+result.profile_image" alt="Profile">
                                        </transition>

                                        <transition name="fade" mode="out-in">
                                            <img v-if="result.profile_image==null"
                                                 :src="asset_url+'images/employee_img_2.jpg'" alt="Profile">
                                        </transition>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="profile_info">

                                        {{result.position}}
                                        <h2 v-if="result.position!= null">
                                            {{result.name}}<span> ({{result.position}})</span></h2>
                                        <h2 v-if="result.position==null || result.position==''">{{result.name}}</h2>
                                        <ul>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> : {{result.email}}
                                            </li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i> :
                                                {{result.created_at}}
                                            </li>
                                            <li><i class="fa fa-birthday-cake" aria-hidden="true"></i> : {{result.dob}}
                                            </li>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> : {{result.phone}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right_side text-right">
                                <ul v-if="author">
                                    <!-- <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></li>-->
                                    <li><a :href="home_page+'profile/edit/'+result.id"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i>Edit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="profile_activities">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile_project_activity">
                                    <h2>Latest project activity <span class="see_ll_activity pull-right"><a href="#">See all Projects activity</a></span>
                                    </h2>
                                    <ul>
                                        <li><strong>11:53am</strong> You commented on updates in<a href="#"> Website
                                            Design
                                            and Landing Pages stan</a></li>
                                        <li><strong>11:53am</strong> You commented on updates in<a href="#"> Website
                                            Design
                                            and Landing Pages stan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile_project_activity">
                                    <h2>Events <span class="see_ll_activity pull-right"><a
                                            href="#">See Yearly Events</a></span></h2>
                                    <ul>
                                        <li><strong>Christmas</strong> Christmas being celebrated on December 25th</li>
                                        <li><strong>Christmas</strong> Christmas being celebrated on December 25th</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="shared_files">
                        <h2>Your shared files</h2>
                        <div class="media_row">
                            <div class="row">
                                <div class="col-md-3" style="margin-bottom: 10px;">
                                    <div class="media_file">
                                        <div class="media_detail">
                                            <a href="#">
                                                <div class="media_img">
                                                    <img :src="asset_url+'images/employee_img_2.jpg'"
                                                         class="img-thumbnail">
                                                </div>
                                                <span>feb_icon.png</span>
                                                <span>Added by Ashish S. on Dec 1</span>
                                            </a>
                                            <div class="media_comment">
                                                <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 10
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" style="margin-bottom: 10px;">
                                    <div class="media_file">
                                        <div class="media_detail">
                                            <a href="#">
                                                <div class="media_img">
                                                    <img :src="asset_url+'images/employee_img_2.jpg'"
                                                         class="img-thumbnail">
                                                </div>
                                                <span>feb_icon.png</span>
                                                <span>Added by Ashish S. on Dec 1</span>
                                            </a>
                                            <div class="media_comment">
                                                <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 10
                                                    Comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: 'PeopleComponent',
        data() {
            return {
                open: true,
                projectId: '',
                projectName: '',
                result: '',
                resultEmpty: false,
                home_page: '',
                asset_url: '',
                routePath: '',
                routeParameter: '',
                authUserId: '',
                author: false

            }
        },
        mounted() {
            let self = this;
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.asset_url = document.querySelector("meta[name='asset-url']").getAttribute("content");
            this.authUserId = document.querySelector("meta[name='auth-user-id']").getAttribute("content");

            axios.get(this.home_page + 'api/people/' + this.authUserId)
                .then(function (response) {
                    self.result = response.data;
                    if (self.result.id == self.authUserId) {
                        self.author = true;
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {
            getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }
        }
    }
</script>

<style>
    .component-fade-enter-active, .component-fade-leave-active {
        transition: opacity .3s ease;
    }
    .component-fade-enter, .component-fade-leave-to
        /* .component-fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
