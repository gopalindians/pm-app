<template>
   <!-- <section class="all_project">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
            </div>
        </div>
    </section>-->
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
