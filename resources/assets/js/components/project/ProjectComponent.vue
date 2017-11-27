<template>
    <section class="all_project">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
            </div>
            <div class="alert alert-danger">
                status
            </div>
            <div class="col-md-3">
                <div class="start_porject">
                    <a href="/createProject">
                        <div class="plus_icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
                        <p>Add new project</p></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" v-for="project in projects">
                    <div class="project_grid">
                        <h1>
                            <a :href="'/project/'+project.project_id+'/'+project.project_name">{{project.project_name}}</a>
                        </h1>
                        <p class="bill_team"><span>Description :</span> {{project.project_description}}</p>
                        <div class="last_update">
                            <p>Last updated on : <span>{{project.project_updated_at}}</span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
    export default {
        name: 'ProjectComponent',
        data() {
            return {
                open: true,
                projects: '',
                showError: ''
            }
        },
        mounted() {
            let self = this;
            console.log('Component mounted.');
            axios.get('/api/projects')
                .then(function (response) {
                    console.log(response.data.data);
                    self.projects = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
</script>
