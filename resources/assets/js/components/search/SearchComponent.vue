<template>
    <div>
        <div class="search_view">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <!--<div class="grid_list pull-right">
                            <div class="grid_view pull-left"><a href="#"><img src="images/grid_view.png" /></a></div>
                            <div class="list_view pull-left"><a href="#"><img src="images/list_view.png" /></a></div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="search_list">
                <div class="search_title">
                    <h1>Searching for <span><a :href="home_page+'search?q='+query">{{query}}</a></span>
                    </h1>
                    <p><span>All matches </span>by <span>anyone</span> in <span>all projects and calendars</span></p>
                </div>

                <div v-if="resultEmpty">
                    No matches!
                    Try searching for something less specific.
                </div>
                <div class="search_res" v-for="result in results" v-if="!resultEmpty">


                    <div class="row">
                        <div class="col-md-2">
                            <div class="emp_img">
                                <!--<img v-if="result.profile_image_from_topic" :src="asset_url+'images/employee_img.jpg'" class="img-responsive">-->
                                <img v-if="result.profile_image_from_topic"
                                     :src="asset_url+'/storage/'+result.profile_image_from_topic"
                                     class="img-responsive">


                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="search_discription">
                                <h2>

                                    <a v-if="result.project_name_from_topic"
                                       :href="home_page+'/project/'+result.project_id+'/'+result.project_name_from_topic+'/messages/'+result.id">{{result.topic_name | truncate(40)}}</a>
                                    <a v-if="result.project_name_from_document"
                                       :href="home_page+'/project/'+result.project_id+'/'+result.project_name_from_document+'/document/'+result.id">{{result.document_title | truncate(40)}}</a>
                                    <a v-if="result.project_name_from_topic_comments"
                                       :href="home_page+'/project/'+result.project_id+'/'+result.project_name_from_topic_comments+'/messages/'+result.id">{{result.project_name_from_topic_comments | truncate(40)}}</a>
                                    <p>
                                        <span>
                                            <i class="fa fa-calendar"
                                               aria-hidden="true"></i> {{result.updated_at}}</span><span>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> </span>
                                    </p>
                                </h2>
                                <div class="row">
                                    <div class="col-md-9">
                                        <p class="single_dis pull-left">
                                            {{result.document_body?result.document_body:(result.topic_body?result.topic_body:result.comment)
                                            | truncate(100)}}</p>
                                        <p class="search_projectName">
                                        <span>Project:
                                            <span v-if="result.project_name_from_topic" class="single_projectName">{{result.project_name_from_topic}}</span>
                                            <span v-if="result.project_name_from_document" class="single_projectName">{{result.project_name_from_document}}</span>
                                            <span v-if="result.project_name_from_topic_comments"
                                                  class="single_projectName">{{result.project_name_from_topic_comments}}</span>

                                        </span>
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="search_cmt">
                                            <!-- <a href="#">See all <span>99</span> Comments</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SearchComponent',
        data() {
            return {
                open: true,
                clicked: false,
                projectId: '',
                projectName: '',
                query: '',
                csrf_token: '',
                results: '',
                resultEmpty: false,
                home_page: '',
                asset_url: '',
            }
        },
        mounted() {
            let self = this;

            this.csrf_token = document.querySelector("meta[name=\"csrf-token\"]").getAttribute("content");
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.asset_url = document.querySelector("meta[name='asset-url']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");

            self.query = self.getParameterByName('q') ? self.getParameterByName('q') : '';

            axios.get(this.home_page + 'api/search?q=' + self.query)
                .then(function (response) {
                    self.results = response.data;
                    self.resultEmpty = self.results.length <= 0;
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
        },
        filters: {
            truncate: function (string,value) {
                if(value=='') {
                    value = 35;
                }
                return string.substring(0, value) + '...';
            }

        }
    }
</script>
