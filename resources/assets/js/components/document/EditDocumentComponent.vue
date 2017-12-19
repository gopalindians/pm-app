<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 980px;">
            <div class="panel sheet project inactive isnt_client_project" data-behavior=" "
                 data-creator-id="6581649" data-status="active" data-path="/2501285/projects/6590988">
                <header><h1><a :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a></h1></header>

                <div class="panel sheet has_sidebar document" style="margin-left: 20px; margin-bottom: -20px;">
                    <title>{{projectName}} : {{documentTitle}}</title>


                    <header>
                        <h1 style="display: none;">Text Document</h1>
                        <p class="reference_to_project">Project:
                            <a data-stacker="false" :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a>
                        </p>
                    </header>

                    <div class="sheet_body">
                        <section class="perma" data-role="perma">
                            <article class="document" id="document_12992150">
                                <div class="disabled name formatted_content">
                                    <input type="text" v-model="documentTitle" :placeholder="documentTitle" /></div>

                                <div class="document_body">
                                    <div class="disabled body formatted_content" data-skip-stacker-links="">
                                        <textarea  v-model="documentBody" :placeholder="documentBody"></textarea>
                                    </div>
                                </div>
                            </article>

                        </section>
                    </div>

                    <aside class="tools noresize wide" id="document_sidebar_document_12992150"
                           data-behavior="perma_tools" data-creator-id="15531397">
                        <div class="tool save">
                            <div class="notice">
                                <h3>Want to make changes?</h3>
                                <p></p>
                                <form :action="home_page+'project/'+projectId+'/'+projectName+'/document/'+documentId+'/edit/'"
                                      class="button_to"
                                      data-remote="true" method="post">

                                    <input type="hidden" name="_token" :value="csrf_token"/>
                                    <input type="hidden" name="document_title" :value="documentTitle"/>
                                    <input type="hidden" name="document_body" :value="documentBody"/>
                                    <div><input class="action_button button" type="submit" value="Save this document">
                                    </div>
                                </form>

                            </div>


                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: 'EditDocumentComponent',
        data() {
            return {
                open: true,
                projects: '',
                showError: '',
                projectId: '',
                projectName: '',
                project: '',

                documentTitle: '',
                documentBody: '',
                documentId: '',
                documentComments: '',
                csrf_token: '',
                home_page: '',


                document_comment: ''
            }
        },
        methods: {


        },
        mounted() {
            let self = this;
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
            this.documentId = document.querySelector("meta[name='document-id']").getAttribute("content");


            axios.get(this.home_page + 'api/project/' + this.projectId + '/' + this.projectName + '/document' + '/' + this.documentId)
                .then(function (response) {
                    console.log(response.data);
                    self.documentTitle = response.data.document_title;
                    self.documentBody = response.data.document_body;
                    self.documentComments = response.data.comments;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
</script>