<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">



                    <div class="panel panel-default">
                        <div class="panel-heading">Create your awesome new project below</div>
                        <div class="panel-body">
                            <form action="/createProject" method="post">


                                <div class="form-group">
                                    <label for="project_name">Project name</label>
                                    <input type="text" class="form-control" name="project_name" id="project_name"
                                           value='project_name'>
                                </div>


                                <div class="form-group">
                                    <label for="project_description">Project description</label>
                                    <input type="text" class="form-control" name="project_description"
                                           id="project_description"
                                           value='project_description'>
                                </div>

                                <button type="submit" class="btn btn-primary"> Create</button>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
