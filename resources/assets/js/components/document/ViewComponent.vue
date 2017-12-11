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
                                    <div class="disabled body formatted_content" data-skip-stacker-links="">{{documentBody}}</div>
                                </div>
                            </article>

                            <section class="comments" id="comments_for_document_12992150" data-comments-count="0">
                                <h4>Discuss this document</h4>


                                <article class="comment new" data-behavior="expandable file_drop_target">
                                    <img alt="" class="avatar" data-current-person-avatar="true"
                                         src="https://asset1.basecamp.com/people/15531397/photo/avatar.96.gif"
                                         title="Gopal Sharma">

                                    <div class="collapsed_content">
                                        <header class="text_entry no_shadow">
                                            <div class="prompt" data-behavior="expand_on_click" role="button">
                                                Add a comment or upload a file…
                                            </div>
                                        </header>
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
                                                    <a data-behavior="google_account_switcher" href="#">Sign out and use a different Google account</a>
                                                </div>

                                                <div data-behavior="google_connector" class="google_connector">
                                                    <p>
                                                        <b>Connect your Google account</b><br>
                                                        Before you can attach Google Docs in Basecamp, we’ll need your OK first. Do you want to connect your account now?
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
                                                        To attach Google Docs, you’ll need to give Basecamp permission. Do you want to try again?
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

                                <span style="" data-role="topic_archiving_tool">

                                </span>

                            </section>

                            <section class="event_stream" id="events_document_12992150">
                                <a data-behavior="reveal_event_history"
                                   data-recordable-sgid="BAhJIhZEb2N1bWVudC0xMjk5MjE1MAY6BkVU--26ab10761fbd44346a1a682d6cf0b7357acc5fcb"
                                   href="#">By-the-minute history for this document...</a>
                            </section>

                        </section>
                    </div>

                    <aside class="tools noresize wide" id="document_sidebar_document_12992150"
                           data-behavior="perma_tools" data-creator-id="15531397">
                        <div class="tool save">
                            <div class="notice">
                                <h3>Want to make changes?</h3>
                                <p></p>
                                <form action="/2501285/projects/6590988/documents/12992150/edit" class="button_to"
                                      data-remote="true" method="get">
                                    <div><input class="action_button button" type="submit" value="Edit this document">
                                    </div>
                                </form>
                                <p></p>
                                <p>
                                    Gopal Sharma created this document
                                    <time data-local="time-ago" datetime="2017-11-27T12:18:40Z"
                                          title="November 27, 2017 at 5:48pm ">an hour ago
                                    </time>
                                    .
                                </p>
                            </div>


                        </div>

                        <div class="tool" data-behavior="tool expandable">
                            <a data-behavior="expand_on_click hide_on_expand" href="#">Delete…</a>

                            <span class="confirm" data-role="confirm_view">
                                <a data-behavior="tool_action" data-method="post" data-remote="true"
                                   href="/2501285/projects/6590988/documents/12992150/trash" rel="nofollow">Delete this document?</a>
                                <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                            </span>
                        </div>


                        <div class="tool" data-visible-to="creator admin" data-skip_busy=""
                             data-behavior="tool bucket_operation_tool expandable" data-label="Copy"
                             data-new-bucket-operation-path="/2501285/copy_operations/new"
                             data-bucket-operation-type="CopyOperation" data-source-resource-type="Document"
                             data-source-resource-id="12992150" data-source-resource-human-name="document">
                            <a data-behavior="expand_on_click hide_on_expand" href="#">Copy…</a>

                            <div class="confirm" data-role="confirm_view">
                                <div class="change" data-role="form">
                                    <form accept-charset="UTF-8" action="/2501285/copy_operations"
                                          class="new_copy_operation" id="new_copy_operation" method="post">
                                        <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="authenticity_token" type="hidden"
                                                value="p2+xyRwllS3GNFYKfgiIZEt0CcL2CDnoCYaQDIuzzCQ="></div>
                                        <strong>Copy this document</strong>

                                        <select data-role="destination_bucket_select" disabled="disabled"
                                                id="copy_operation_destination_bucket"
                                                name="copy_operation[destination_bucket]">
                                            <option value="">Loading…</option>
                                        </select>


                                        <p class="explanation">
                                            We’ll add a copy of this document to the project you choose above. Changes you make to the copy won’t affect the original.</p>

                                        <p class="explanation">
                                            No previous versions of this document will be copied over. Just the latest version.</p>

                                        <p class="copy_options todolist">
                                            <label style="display: none;" data-role="keep_comments_label">
                                                <input name="copy_operation[keep_comments]" type="hidden"
                                                       value="0">
                                                <input data-role="keep_comments_option"
                                                       id="copy_operation_keep_comments"
                                                       name="copy_operation[keep_comments]"
                                                       type="checkbox" value="1">
                                                Include original comments
                                            </label>

                                        </p>


                                        <div class="submit">
                                            <input class="action_button" data-behavior="tool_action" disabled="disabled"
                                                   name="commit" type="submit" value="Copy this document">
                                            <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                        </div>
                                    </form>
                                    <div class="no_destinations" data-role="no_destinations_notice">
                                        <p>
                                            We can’t copy this document because there’s nowhere else to put it! You’ll be able to move it if you make more projects or calendars.</p>
                                        <a class="cancel" data-behavior="collapse_on_click" href="#">OK, close this</a>
                                    </div>
                                </div>

                                <div class="change" data-role="form_for_new_project" style="display: none;">
                                    <form accept-charset="UTF-8" action="/2501285/copy_operations"
                                          class="new_copy_operation" id="new_copy_operation" method="post">
                                        <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="authenticity_token" type="hidden"
                                                value="p2+xyRwllS3GNFYKfgiIZEt0CcL2CDnoCYaQDIuzzCQ="></div>
                                        <strong>Copy this to a new project</strong>

                                        <input data-role="new_project_name" id="copy_operation_new_project_name"
                                               name="copy_operation[new_project_name]" placeholder="Name the project"
                                               type="text">


                                        <p class="explanation">
                                            We’ll add a copy of this document to the project you choose above. Changes you make to the copy won’t affect the original.</p>

                                        <p class="explanation">
                                            No previous versions of this document will be copied over. Just the latest version.</p>

                                        <p class="copy_options todolist">
                                            <label style="display: none;" data-role="keep_comments_label">
                                                <input name="copy_operation[keep_comments]" type="hidden"
                                                       value="0"><input data-role="keep_comments_option"
                                                                        id="copy_operation_keep_comments"
                                                                        name="copy_operation[keep_comments]"
                                                                        type="checkbox" value="1">
                                                Include original comments
                                            </label>

                                        </p>


                                        <div class="submit">
                                            <input class="action_button" data-behavior="tool_action" disabled="disabled"
                                                   name="commit" type="submit" value="Copy and create project">
                                            <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                        </div>

                                        <div class="projects_limit_reached" data-role="projects_limit_reached_notice">

                                            <div class="limit projects reached notify"
                                                 data-hidden-from="accountManager">

                                                <h1>You're out of projects!</h1>

                                                <p>
                                                    To create more projects, ask your Basecamp account owner to upgrade the account.<br>
                                                    Just click the button below and we'll send them a quick reminder.
                                                </p>

                                                <a class="action_button green button"
                                                   data-behavior="link_to_notify_owner" data-method="post"
                                                   data-remote="true" href="/2501285/account/notification?type=projects"
                                                   rel="nofollow">Notify your account owner</a> or
                                                <a class="decorated" data-behavior="cancel_new_project"
                                                   data-role="cancel" href="#">Never mind</a>

                                            </div>


                                            <div class="limit projects reached" style="display:none"
                                                 data-role="account_upgrade_notice">
                                                <form>
                                                    <h1>Thanks, you're all set!</h1>
                                                    <p>You've upgraded to the <strong>100 projects</strong>
                                                        plan with <strong>40 GB</strong> storage space.</p>
                                                    <a class="action_button green button"
                                                       data-behavior="account_upgrade_confirmation" href="#">Continue starting a new project</a>
                                                    or
                                                    <a data-behavior="cancel_new_project" data-role="cancel" href="#">Go back to the projects page</a>
                                                </form>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                                <div class="confirm error" data-role="error">
                                    <p><b>We couldn't copy this page</b><br>
                                        <a data-behavior="reload_current_sheet" href="#">Try again</a> or <a
                                                href="mailto:support@basecamp.com?body=Reference%3A%20Document%20ID%20%2312992150&amp;subject=Couldn%27t%20copy%20a%20document">Email support</a>.
                                    </p>
                                </div>

                                <div class="confirm conflict" data-role="conflict">
                                </div>
                            </div>
                        </div>
                        <div class="tool" data-visible-to="creator admin" data-skip_busy=""
                             data-behavior="tool bucket_operation_tool expandable" data-label="Move"
                             data-new-bucket-operation-path="/2501285/move_operations/new"
                             data-bucket-operation-type="MoveOperation" data-source-resource-type="Document"
                             data-source-resource-id="12992150" data-source-resource-human-name="document">
                            <a data-behavior="expand_on_click hide_on_expand" href="#">Move…</a>

                            <div class="confirm" data-role="confirm_view">
                                <div class="change" data-role="form">
                                    <form accept-charset="UTF-8" action="/2501285/move_operations"
                                          class="new_move_operation" id="new_move_operation" method="post">
                                        <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="authenticity_token" type="hidden"
                                                value="p2+xyRwllS3GNFYKfgiIZEt0CcL2CDnoCYaQDIuzzCQ="></div>
                                        <strong>Move this document</strong>

                                        <select data-role="destination_bucket_select" disabled="disabled"
                                                id="move_operation_destination_bucket"
                                                name="move_operation[destination_bucket]">
                                            <option value="">Loading…</option>
                                        </select>


                                        <div class="submit">
                                            <input class="action_button" data-behavior="tool_action" disabled="disabled"
                                                   name="commit" type="submit" value="Move this document">
                                            <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                        </div>
                                    </form>
                                    <div class="no_destinations" data-role="no_destinations_notice">
                                        <p>
                                            We can’t move this document because there’s nowhere else to put it! You’ll be able to move it if you make more projects or calendars.</p>
                                        <a class="cancel" data-behavior="collapse_on_click" href="#">OK, close this</a>
                                    </div>
                                </div>

                                <div class="change" data-role="form_for_new_project" style="display: none;">
                                    <form accept-charset="UTF-8" action="/2501285/move_operations"
                                          class="new_move_operation" id="new_move_operation" method="post">
                                        <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="authenticity_token" type="hidden"
                                                value="p2+xyRwllS3GNFYKfgiIZEt0CcL2CDnoCYaQDIuzzCQ="></div>
                                        <strong>Move this to a new project</strong>

                                        <input data-role="new_project_name" id="move_operation_new_project_name"
                                               name="move_operation[new_project_name]" placeholder="Name the project"
                                               type="text">


                                        <div class="submit">
                                            <input class="action_button" data-behavior="tool_action" disabled="disabled"
                                                   name="commit" type="submit" value="Move and create project">
                                            <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                        </div>

                                        <div class="projects_limit_reached" data-role="projects_limit_reached_notice">

                                            <div class="limit projects reached notify"
                                                 data-hidden-from="accountManager">

                                                <h1>You're out of projects!</h1>

                                                <p>
                                                    To create more projects, ask your Basecamp account owner to upgrade the account.<br>
                                                    Just click the button below and we'll send them a quick reminder.
                                                </p>

                                                <a class="action_button green button"
                                                   data-behavior="link_to_notify_owner" data-method="post"
                                                   data-remote="true" href="/2501285/account/notification?type=projects"
                                                   rel="nofollow">Notify your account owner</a> or
                                                <a class="decorated" data-behavior="cancel_new_project"
                                                   data-role="cancel" href="#">Never mind</a>

                                            </div>


                                            <div class="limit projects reached" style="display:none"
                                                 data-role="account_upgrade_notice">
                                                <form>
                                                    <h1>Thanks, you're all set!</h1>
                                                    <p>You've upgraded to the <strong>100 projects</strong>
                                                        plan with <strong>40 GB</strong> storage space.</p>
                                                    <a class="action_button green button"
                                                       data-behavior="account_upgrade_confirmation" href="#">Continue starting a new project</a>
                                                    or
                                                    <a data-behavior="cancel_new_project" data-role="cancel" href="#">Go back to the projects page</a>
                                                </form>
                                            </div>

                                        </div>
                                    </form>
                                </div>


                                <div class="confirm conflict" data-role="conflict">
                                </div>
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
                csrf_token: '',
                home_page:''
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
            this.csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
            this.documentId = document.querySelector("meta[name='document-id']").getAttribute("content");


            axios.get(this.home_page+'api/project/' + this.projectId + '/' + this.projectName + '/document' + '/' + this.documentId)
                .then(function (response) {
                    console.log(response.data);
                    self.documentTitle = response.data.document_title;
                    self.documentBody = response.data.document_body;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
</script>