<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">Create your awesome new project below</div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="project_name">Project name</label>
                                <input type="text" class="form-control" name="project_name" id="project_name"
                                       value='project_name' v-model="projectName">
                            </div>
                            <div class="form-group">
                                <label for="project_description">Project description</label>
                                <input type="text" class="form-control" name="project_description"
                                       id="project_description"
                                       value='project_description' v-model="projectDescription">
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
                showError: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            submit() {
                if (this.projectName.length === 0) {
                } else if (this.projectDescription.length === 0) {
                } else {
                    console.log(this.projectName);

                    axios.post('/createProject', {
                        project_name: this.projectName,
                        project_description: this.projectDescription
                    }).then(function (response) {
                        console.log(response);
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },
        }

    }
</script>
