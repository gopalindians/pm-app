<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-heading">Create your awesome new project below</div>
                        <div class="panel-body">
                            <div class="alert alert-success" v-if="result.type==='success'"> {{result.message}}</br> <a target="_blank" :href="result.project_url">{{result.project_url}}</a></div>
                            <div class="alert alert-info" v-if="result.type==='error'"> {{result.message}}</div>

                            <div class="form-group">
                                <label for="project_name">Project name</label>
                                <input type="text" class="form-control" name="project_name" id="project_name"
                                       value='project_name' v-model="projectName" required>
                            </div>
                            <div class="form-group">
                                <label for="project_description">Project description</label>
                                <input type="text" class="form-control" name="project_description"
                                       id="project_description"
                                       value='project_description' v-model="projectDescription" required>
                            </div>
                            <button type="button" class="btn btn-primary" @click="submit"> Create</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'CreateProjectComponent',
        data() {
            return {
                open: true,
                projectName: '',
                projectDescription: '',
                home_page: '',
                result: '',
            }
        },
        mounted() {
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
        },

        methods: {
            submit() {
                if (this.projectName.length === 0) {
                } else if (this.projectDescription.length === 0) {
                } else {
                    let self = this;
                    axios.post(this.home_page + 'api/createProject', {
                        project_name: this.projectName,
                        project_description: this.projectDescription
                    }).then(function (response) {
                        self.result = response.data.data;
                        console.log(response.data.data);

                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },
        }

    }
</script>
