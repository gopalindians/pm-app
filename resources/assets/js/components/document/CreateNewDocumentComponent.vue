<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 980px;">
            <div class="panel sheet project inactive isnt_client_project" data-behavior=" "
                 data-creator-id="6581649" data-status="active"
                 data-path="/2501285/project/6590988">
                <header><h1><a :href="home_page+'/project/'+projectId+'/'+projectName">{{projectName}}</a></h1></header>
                <div class="panel sheet has_sidebar document" data-behavior="sidebar_follower_container"
                     style="margin-left: 20px; margin-bottom: -20px;">
                    <title>{{projectName}}: New document</title>

                    <header>
                        <h1 style="display: none;">Text Document</h1>
                        <p class="reference_to_project">Project: <a data-stacker="false"
                                                                    :href="home_page+'/project/'+projectId+'/'+projectName">{{projectName}}</a>
                        </p>
                    </header>

                    <div class="sheet_body">
                        <section class="perma">
                            <article class="document">
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/documents"
                                      class="new_document" data-remote="true" id="new_document" method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                    <div class="formatted_content hidden"
                                         style="position: absolute; left: -9999px; top: 0; word-wrap: break-word; font-size: 20px; font-family: &quot;Segoe UI&quot;, helvetica, arial, sans-serif; font-weight: 700; letter-spacing: 0px; line-height: 26px; text-decoration: none solid rgb(0, 0, 0); padding: 40px 40px 26px 20px; text-rendering: auto; max-width: 505px;"></div>
                                    <textarea autofocus="autofocus" class="name" data-behavior="autosave autoresize"
                                              id="document_title" name="document[title]" placeholder="Untitled" rows="1"
                                              data-autoresize="true"
                                              style="resize: none; overflow: hidden; min-height: 27px;"
                                              required
                                              v-model="documentTitle"></textarea>
                                    <textarea class="body" data-behavior="autosave autoresize"
                                              id="document_content2"
                                              name="document[content]" rows="32"
                                              style="resize: none; overflow: hidden; min-height: 27px;margin-left: 33px;font-weight: 100;border-left: 1px solid #fce3b0;line-height: 26px;padding-left:20px"
                                              required
                                              placeholder="Write here" v-model="documentBody"></textarea>

                                    <div class="document_body" data-behavior="wysiwyg_container wysiwyg_follow_always"
                                         style="">
                                        <!-- <div data-behavior="wysiwyg_toolbar" style="display: inline-block;">
                                             <a tabindex="-1" data-wysihtml5-command="bold" title="CTRL+B"
                                                href="javascript:;" unselectable="on">Bold</a>
                                             <a tabindex="-1" data-wysihtml5-command="italic" title="CTRL+I"
                                                href="javascript:;" unselectable="on">Italic</a>
                                             <a tabindex="-1" data-wysihtml5-command="insertUnorderedList"
                                                href="javascript:;" unselectable="on">Bullets</a>
                                             <a tabindex="-1" data-wysihtml5-command="insertOrderedList"
                                                href="javascript:;" unselectable="on">Numbers</a>
                                             <a tabindex="-1" data-wysihtml5-command="pre" href="javascript:;"
                                                unselectable="on">Quote</a>
                                         </div>-->
                                        <textarea class="body" data-behavior="autosave autoresize wysiwyg"
                                                  data-wysiwyg-class="document" id="document_content"
                                                  name="document[content]" rows="32" required
                                                  style=""></textarea>
                                        <input type="hidden" name="_wysihtml5_mode" value="1">
                                        <div class="formatted_content hidden"
                                             style="position: absolute; left: -9999px; top: 0px; word-wrap: break-word; font-size: 14px; font-family: &quot;Segoe UI&quot;, helvetica, arial, sans-serif; font-weight: 400; letter-spacing: 0px; line-height: 20px; text-decoration: none solid rgb(0, 0, 0); padding: 1px 0px 0px; text-rendering: auto; max-width: 525px;"></div>

                                    </div>

                                    <input data-behavior="private_flag" id="document_private" name="document[private]"
                                           type="hidden" value="false">
                                </form>
                            </article>
                        </section>
                    </div>

                    <aside class="tools noresize wide" data-behavior="perma_tools">
                        <div class="tool save">
                            <div class="notice">
                                <h3>Type away! Be sure to save this document when you’re all done.</h3>
                                <form accept-charset="UTF-8" :action="home_page+'/project/'+projectId+'/'+projectName+'/document'"
                                      class="new_document" data-remote="true" method="post">
                                    <p>
                                        <input type="hidden" name="_token" :value="csrf_token" required>
                                        <input type="hidden" name="document_title" :value="documentTitle" required>
                                        <input type="hidden" name="document_body" :value="documentBody">
                                        <button class="action_button button" data-behavior="create_document"
                                                type="submit" @click="saveDocument">Save this document
                                        </button>
                                    </p>

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
        name: 'CreateNewDocumentComponent',
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
                csrf_token: '',
                home_page: ''
            }
        },
        methods: {
            saveDocument() {
                console.log('saving');
            }
        },
        mounted() {
            let self = this;
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.csrf_token = document.querySelector("meta[name=\"csrf-token\"]").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
        }
    }
</script>