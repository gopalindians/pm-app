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
                                <div class="disabled name formatted_content">{{documentTitle}}</div>

                                <div class="document_body">
                                    <div class="disabled body formatted_content" data-skip-stacker-links="">
                                        {{documentBody}}
                                    </div>
                                </div>
                            </article>

                            <section class="comments" id="comments_for_document_12992150" data-comments-count="0">
                                <h4>Discuss this document</h4>


                                <article class="comment" id="comment_584232109" data-creator-id="15531397" style=""
                                         v-for="comment in documentComments">
                                    <a data-replace-stack="true" :href="home_page+'/people/'+comment.poster_id">


                                        <img v-if="comment.profile_image!=null" :alt="comment.user_name" class="avatar"
                                             height="96"
                                             :src="asset_url+'/storage/'+comment.profile_image"
                                             :title="comment.user_name" width="96">

                                        <img v-if="comment.profile_image==null" :alt="comment.user_name" class="avatar"
                                             height="96"
                                             src="https://asset1.basecamp.com/2501285/people/15531397/photo/avatar.96.gif"
                                             :title="comment.user_name" width="96">


                                    </a>
                                    <div class="formatted_content" data-embeddable="" data-skip-stacker-links="">
                                        <strong>{{comment.user_name}}</strong> <br>
                                        {{comment.comment}}
                                    </div>

                                    <footer class="time">
                                        <!--<a data-stacker="false"
                                           href="#">Posted
                                            <time data-local="time-ago" datetime="2017-12-15T13:33:57Z"
                                                  title="December 15, 2017 at 7:03pm ">a second ago
                                            </time>
                                        </a>-->
                                        <!-- <span data-available-until="2017-12-15T13:48:57Z"
                                               data-visible-to="admin creator">
                                             –<a class="edit"
                                                 :href="home_page+'project/'+projectId+'/'+projectName+'/document/'+documentId+'/edit'">Edit</a> or
                                             <a class="delete"
                                                data-confirm="Are you sure you want to delete this comment?"
                                                data-method="post" data-remote="true"
                                                href="/2501285/projects/12880198/comments/584232109/trash"
                                                rel="nofollow">Delete
                                             </a>
                                             for <span data-display="available_time_left">14 minutes</span>
                                         </span>-->
                                    </footer>

                                    <div id="attachments_for_comment_584232109" class="partitioned_attachments ">
                                        <div class="attachments_actions">
                                        </div>
                                    </div>
                                </article>


                                <article class="comment new" data-behavior="expandable file_drop_target">

                                    <img v-if="current_user.profile_image==null" alt="" class="avatar"
                                         data-current-person-avatar="true"
                                         src="https://asset1.basecamp.com/people/15531397/photo/avatar.96.gif"
                                         :title="current_user.user_name">

                                    <img v-if="current_user.profile_image!=null" alt="" class="avatar"
                                         data-current-person-avatar="true"
                                         :src="asset_url+'/storage/'+current_user.profile_image"
                                         :title="current_user.user_name">
                                    <div class="collapsed_content">


                                        <header class="text_entry no_shadow">
                                            <textarea v-model="document_comment"></textarea>
                                        </header>
                                        <button type="button" class="btn btn-primary" @click="submitComment()">Submit
                                        </button>
                                    </div>

                                    <div class="expanded_content">
                                        <form accept-charset="UTF-8" action="/2501285/projects/6590988/comments"
                                              class="new_comment" data-behavior="no_reset require_input"
                                              data-remote="true" id="new_comment" method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                            <header class="text_entry">
                                                <input id="comment_commentable_type" name="comment[commentable_type]"
                                                       type="hidden" value="Document">
                                                <input id="comment_commentable_id" name="comment[commentable_id]"
                                                       type="hidden" value="12992150">

                                                <div data-behavior="wysiwyg_container"
                                                     data-wysiwyg-follow-threshold="136">
                                                    <textarea autofocus="autofocus" class="comment_content"
                                                              data-behavior="autosave autoresize wysiwyg dirty_tracking submit_on_control_enter"
                                                              data-role="accept_as_input" id="comment_content"
                                                              name="comment[content]"
                                                              placeholder="Type your comment here…" rows="4"
                                                              data-autosave-storage-key="autosave:f0fb1479bce392279342fb9b07fcfde4"></textarea>
                                                </div>

                                                <div data-behavior="pending_attachments file_drop_target"
                                                     data-sortable="true" class="attachments">
                                                    <span class="prompt_graphic"></span>
                                                    <div class="file_input_button">


                                                        <span data-without-features="files_api">
                                                            To attach files
                                                        </span>

                                                        <span data-with-features="files_api">
                                                            To attach files drag &amp; drop here or
                                                        </span>

                                                        <span class="file_input_container">
                                                            <input name="file" type="file" multiple=""
                                                                   onchange="$(document).trigger('ie:change', this)"
                                                                   tabindex="-1">
                                                            <a class="decorated" data-behavior="local_file_picker"
                                                               href="#"
                                                               tabindex="-1">select files from your computer…</a>
                                                        </span>

                                                        <span data-behavior="load_google_client" style="">
                                                            or <a class="decorated" data-behavior="google_file_picker"
                                                                  href="#" tabindex="-1">Google Docs…</a>
                                                        </span>
                                                    </div>

                                                    <ul class="pending_attachments ui-sortable"
                                                        data-role="accept_as_input"></ul>
                                                </div>


                                                <div data-behavior="picker_account_switcher"
                                                     class="picker_account_switcher">
                                                    <strong>You’re signed in to Google as <span
                                                            data-role="picker_account_email"></span>
                                                    </strong>
                                                    <a data-behavior="google_account_switcher" href="#">Sign out and use
                                                        a different Google account</a>
                                                </div>

                                                <div data-behavior="google_connector" class="google_connector">
                                                    <p>
                                                        <b>Connect your Google account</b><br>
                                                        Before you can attach Google Docs in Basecamp, we’ll need your
                                                        OK first. Do you want to connect your account now?
                                                    </p>
                                                    <p class="submit">
                                                        <button class="action_button"
                                                                data-behavior="create_google_file_picker">
                                                            Yes, connect my Google account
                                                        </button>
                                                        or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                    </p>
                                                </div>

                                                <div data-behavior="google_connector_access_denied"
                                                     class="google_connector">
                                                    <p>
                                                        <b>Basecamp couldn’t access your Google account</b><br>
                                                        To attach Google Docs, you’ll need to give Basecamp permission.
                                                        Do you want to try again?
                                                    </p>
                                                    <p class="submit">
                                                        <button class="action_button"
                                                                data-behavior="create_google_file_picker">
                                                            Connect a Google account
                                                        </button>
                                                        or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                    </p>
                                                </div>

                                            </header>

                                            <footer>
                                                <div data-subscribers="/2501285/projects/6590988/subscribers?new_comment=true&amp;subscribable_id=12992150&amp;subscribable_type=Document"></div>

                                                <div class="submit">
                                                    <input class="action_button green" data-role="uploader"
                                                           name="commit" type="submit" value="Add this comment">
                                                    <span class="hidden_from_client inactive">The client won’t see your comment</span>
                                                </div>
                                            </footer>
                                        </form>
                                    </div>
                                </article>
                                <span style="" data-role="topic_archiving_tool"></span>
                            </section>
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
                                      data-remote="true" method="get">
                                    <div><input class="action_button button" type="submit" value="Edit this document">
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
        name: 'ViewDocumentComponent',
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
                asset_url: '',


                document_comment: '',
                current_user: ''
            }
        },
        methods: {
            saveDocument() {
                console.log('saving');
            },
            submitComment() {
                let self = this;
                if (this.document_comment.length != 0) {
                    axios.post(this.home_page + 'api/project/' + this.projectId + '/' + this.projectName + '/document' + '/' + this.documentId, {
                        document_comment: this.document_comment
                    }).then(function (response) {
                        if (response.data.type === 'SUCCESS') {
                            self.documentComments.push(response.data.data);
                            self.document_comment = '';

                        }
                    }).catch(function (error) {
                        console.log(error);

                    });
                }
            }
        },
        mounted() {
            let self = this;
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.asset_url = document.querySelector("meta[name='asset-url']").getAttribute("content");
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
                    self.current_user = response.data.current_user;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
</script>