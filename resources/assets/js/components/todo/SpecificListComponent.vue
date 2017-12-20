<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 1000px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=""
                 data-creator-id="6581649" data-status="active" data-assignee-options-loaded-6590988="true">
                <header>
                    <h1>
                        <a data-restore-position=""
                           :href="home_page+'/project/'+projectId+'/'+projectName">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet todolists has_sidebar inactive"
                     style="margin-left: 20px; margin-bottom: -20px;">
                    <header>
                        <h1>
                            <a data-restore-position=""
                               :href="home_page+'/project/'+projectId+'/'+projectName+'/todolists'">See all to-do lists</a>
                        </h1>
                    </header>
                    <div class="panel sheet todolist" style="margin-left: 20px; margin-bottom: -20px;">
                        <title>{{projectName}}: test</title>
                        <header>
                            <h1 class="inactive_title">Back to the to-do list</h1>
                            <p class="reference_to_project">Project:
                                <a data-stacker="false" href="/2501285/projects/6590988">Random Projects</a>
                            </p>
                            <p>
                                <a class="reference_to_index" data-replace-sheet="true"
                                   href="/2501285/projects/6590988/todolists">See all to-do lists</a>
                            </p>
                        </header>

                        <div class="sheet_body">
                            <section class="todos perma has_tools" data-creator-id="15531397">

                                <article class="todolist" id="todolist_49777835"
                                         data-url="/2501285/projects/6590988/todolists/49777835"
                                         data-behavior="expandable">
                                    <header class="collapsed_content" data-behavior="has_hover_content">
                                        <div class="nubbin" data-behavior="nubbin hover_content">
                                            <div class="spacer"></div>
                                            <a class="image delete"
                                               data-confirm="Are you sure you want to delete this to-do list?"
                                               data-method="post" data-remote="true"
                                               href="/2501285/projects/6590988/todolists/49777835/trash" rel="nofollow">Delete</a>
                                            <a class="edit" data-behavior="edit" href="#">Edit</a>
                                        </div>

                                        <h3 data-behavior="sortable_handle">
                                            <a class="linked_title" href="/2501285/projects/6590988/todolists/49777835">
                                                <span class="project_name">Random Projects —</span>
                                                test
                                            </a>
                                            <span class="unlinked_title">test</span>


                                        </h3>

                                        <p><em></em></p>
                                    </header>

                                    <header class="expanded_content">
                                        <form accept-charset="UTF-8"
                                              action="/2501285/projects/6590988/todolists/49777835"
                                              class="edit_todolist" data-remote="true" id="edit_todolist_49777835"
                                              method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                    name="_method" type="hidden" value="patch"></div>
                                            <header class="text_entry">
                                                <h3>
                                                    <input id="todolist_name" name="todolist[name]" size="10"
                                                           type="text" value="test">
                                                </h3>

                                                <p>
                                                    <em>
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todolist_description" name="todolist[description]"
                                                              placeholder="Optional: describe this list"
                                                              rows="1"></textarea>
                                                    </em>
                                                </p>
                                            </header>

                                            <span class="privacy_toggle" data-role="privacy_toggle">
                                        <label for="todolist_49777835_privacy_toggle">
                                            <input name="todolist[private]" type="hidden" value="0">
                                            <input data-behavior="toggle_private_visibility"
                                                   id="todolist_49777835_privacy_toggle" name="todolist[private]"
                                                   type="checkbox" value="1"> Don’t show this to-do list to the client
                                            <span data-behavior="client_list"></span>
                                        </label>
                                        <span class="position_reference" data-behavior="expandable expand_exclusively">
                                            – <a class="decorated" data-behavior="expand_on_click"
                                                 href="#">what's this?</a>
                                            <div class="balloon right_side expanded_content">
                                                <span class="arrow"></span>
                                                <span class="arrow"></span>
                                                <span class="close"><a class="decorated"
                                                                       data-behavior="collapse_on_click"
                                                                       href="#">Close</a></span>

                                                <h5>Working with clients?</h5>
                                                <p>You can hide certain messages, to-dos, files, events, and text documents from people invited to this project as clients. This is great for sharing unfinished work with your team before getting client feedback.</p>
                                                <p><a class="decorated"
                                                      href="/2501285/projects/6590988/accesses#client">Invite your first client to this project...</a></p>
                                            </div>
                                        </span>
                                    </span>

                                            <span style="display:none;">
                                        <div data-behavior="lazy_load_subscribers"
                                             data-url="/2501285/projects/6590988/subscribers?subscribable_id=49777835&amp;subscribable_type=Todolist"></div>
                                    </span>

                                            <p class="submit">
                                                <input name="commit" type="submit" value="Save changes"> or
                                                <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                            </p>
                                        </form>
                                    </header>

                                    <ul class="todos empty" data-behavior="sortable_container"
                                        data-sortable-type="todo"></ul>


                                    <ul class="new" data-behavior="expandable load_assignee_options">
                                        <li class="collapsed_content">
                                            <a class="decorated" data-behavior="expand_on_click load_assignee_options"
                                               href="#">Add a to-do</a>
                                        </li>

                                        <li class="expanded_content edit_mode">
                                            <article data-behavior="file_drop_target">
                                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos"
                                                      class="new_todo" data-behavior="new_todo" data-remote="true"
                                                      id="new_todo" method="post">
                                                    <div style="display:none"><input name="utf8" type="hidden"
                                                                                     value="✓"></div>
                                                    <input id="todo_todolist_id" name="todo[todolist_id]" type="hidden"
                                                           value="49777835">

                                                    <input disabled="disabled" name="todo[completed]" type="hidden"
                                                           value="0">
                                                    <input disabled="disabled" id="todo_completed"
                                                           name="todo[completed]" type="checkbox" value="1">
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todo_content" name="todo[content]"
                                                              placeholder="Add a new to-do..." rows="1"></textarea>

                                                    <div class="details">
                                                        <label>
                                                            <strong>Assigned to:</strong>
                                                            <select data-behavior="assignee_options"
                                                                    data-private="false" data-project-id="6590988"
                                                                    id="todo_assignee_code" name="todo[assignee_code]">
                                                                <option value="⎈">Loading...</option>
                                                            </select>
                                                        </label>

                                                        <label>
                                                            <strong>Due on:</strong>
                                                            <span class="pill has_balloon"
                                                                  data-behavior="expandable expand_exclusively">

                                                        <a data-behavior="expand_on_click" href="#">
                                                            <time data-behavior="due_date"
                                                                  data-blank-text="No due date">No due date</time>
                                                        </a>
                                                        <span class="balloon right_side expanded_content">
                                                            <span class="arrow"></span>
                                                            <span class="arrow"></span>

                                                            <input data-behavior="alt_date_field" name="todo[due_at]"
                                                                   type="hidden">
                                                            <div data-behavior="date_picker" class="notranslate"></div>
                                                            <footer><a class="no_date" data-behavior="no_due_date"
                                                                       href="#">No due date</a></footer>
                                                        </span>
                                                    </span>
                                                        </label>

                                                        <div class="notification_info"
                                                             data-display="email-warning-confirmation-off">
                                                            <p class="warning" data-display="email-warning-on"
                                                               style="display: none">
                                                                <span data-role="assignee_first_name">This person</span>
                                                                won’t get an email because they turned off email
                                                                notifications.
                                                            </p>
                                                            <p data-display="email-warning-off email-message-on"
                                                               style="display: none">
                                                                <span data-role="assignee_first_name">This person</span>
                                                                will be notified by email.
                                                            </p>
                                                        </div>

                                                        <div class="" data-behavior="expandable todo_attachments">
                                                            <div class="collapsed_content">
                                                                <a class="decorated expand_attachments"
                                                                   data-behavior="expand_on_click" href="#">Attach
                                                                    files...</a>
                                                            </div>
                                                            <div class="expanded_content">
                                                                <div data-behavior="pending_attachments file_drop_target"
                                                                     data-sortable="true" class="attachments">
                                                                    <span class="prompt_graphic"></span>
                                                                    <div class="file_input_button">
                                                                <span data-without-features="files_api">
                                                                    To attach files
                                                                </span>
                                                                        <span data-with-features="files_api">To attach files drag &amp; drop here or</span>

                                                                        <span class="file_input_container">
                                                                    <input name="file" type="file" multiple=""
                                                                           onchange="$(document).trigger('ie:change', this)"
                                                                           tabindex="-1">
                                                                    <a class="decorated"
                                                                       data-behavior="local_file_picker" href="#"
                                                                       tabindex="-1">select files from your computer…</a>
                                                                </span>

                                                                        <span data-behavior="load_google_client"
                                                                              style="">
                                                                    or <a class="decorated"
                                                                          data-behavior="google_file_picker" href="#"
                                                                          tabindex="-1">Google Docs…</a>
                                                                </span>
                                                                    </div>

                                                                    <ul class="pending_attachments ui-sortable"
                                                                        data-role="accept_as_input"></ul>
                                                                </div>


                                                                <div data-behavior="picker_account_switcher"
                                                                     class="picker_account_switcher">
                                                                    <strong>You’re signed in to Google as <span
                                                                            data-role="picker_account_email"></span></strong>
                                                                    <a data-behavior="google_account_switcher" href="#">Sign
                                                                        out and use a different Google account</a>
                                                                </div>

                                                                <div data-behavior="google_connector"
                                                                     class="google_connector">
                                                                    <p>
                                                                        <b>Connect your Google account</b><br>
                                                                        Before you can attach Google Docs in Basecamp,
                                                                        we’ll need your OK first. Do you want to connect
                                                                        your account now?
                                                                    </p>
                                                                    <p class="submit">
                                                                        <button class="action_button"
                                                                                data-behavior="create_google_file_picker">
                                                                            Yes, connect my Google account
                                                                        </button>
                                                                        or <a data-behavior="cancel_google_connect"
                                                                              href="#">Cancel</a></p>
                                                                </div>

                                                                <div data-behavior="google_connector_access_denied"
                                                                     class="google_connector">
                                                                    <p>
                                                                        <b>Basecamp couldn’t access your Google
                                                                            account</b><br>
                                                                        To attach Google Docs, you’ll need to give
                                                                        Basecamp permission. Do you want to try again?
                                                                    </p>
                                                                    <p class="submit">
                                                                        <button class="action_button"
                                                                                data-behavior="create_google_file_picker">
                                                                            Connect a Google account
                                                                        </button>
                                                                        or <a data-behavior="cancel_google_connect"
                                                                              href="#">Cancel</a></p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <p class="submit">
                                                        <input class="action_button" data-role="uploader" name="commit"
                                                               type="submit" value="Add this to-do"> or
                                                        <a class="decorated" data-behavior="cancel" data-role="cancel"
                                                           href="#">I'm done adding to-dos</a>
                                                    </p>
                                                </form>
                                            </article>
                                        </li>
                                    </ul>


                                    <ul class="completed truncated">
                                    </ul>
                                </article>

                                <section class="comments" id="comments_for_todolist_49777835" data-comments-count="0">
                                    <h4>Discuss this to-do list</h4>
                                    <article class="comment new" data-behavior="expandable file_drop_target">
                                        <img alt="" class="avatar" data-current-person-avatar="true"
                                             src="https://asset1.basecamp.com/people/15531397/photo/avatar.96.gif"
                                             title="Gopal Sharma">

                                        <div class="collapsed_content">
                                            <header class="text_entry no_shadow">
                                                <div class="prompt" data-behavior="expand_on_click" role="button">Add a
                                                    comment or upload a file…
                                                </div>
                                            </header>
                                        </div>

                                        <div class="expanded_content">
                                            <form accept-charset="UTF-8" action="/2501285/projects/6590988/comments"
                                                  class="new_comment" data-behavior="no_reset require_input"
                                                  data-remote="true" id="new_comment" method="post">
                                                <div style="display:none"><input name="utf8" type="hidden" value="✓">
                                                </div>
                                                <header class="text_entry">
                                                    <input id="comment_commentable_type"
                                                           name="comment[commentable_type]" type="hidden"
                                                           value="Todolist">
                                                    <input id="comment_commentable_id" name="comment[commentable_id]"
                                                           type="hidden" value="49777835">

                                                    <div data-behavior="wysiwyg_container"
                                                         data-wysiwyg-follow-threshold="136">
                                                        <textarea autofocus="autofocus" class="comment_content"
                                                                  data-behavior="autosave autoresize wysiwyg dirty_tracking submit_on_control_enter"
                                                                  data-role="accept_as_input" id="comment_content"
                                                                  name="comment[content]"
                                                                  placeholder="Type your comment here…" rows="4"
                                                                  data-autosave-storage-key="autosave:c7e7ae408a6c6d411338f7348a459dde"></textarea>
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
                                                        <a class="decorated" data-behavior="local_file_picker" href="#"
                                                           tabindex="-1">select files from your computer…</a></span>

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
                                                                data-role="picker_account_email"></span></strong>
                                                        <a data-behavior="google_account_switcher" href="#">Sign out and
                                                            use a different Google account</a>
                                                    </div>

                                                    <div data-behavior="google_connector" class="google_connector">
                                                        <p>
                                                            <b>Connect your Google account</b><br>
                                                            Before you can attach Google Docs in Basecamp, we’ll need
                                                            your OK first. Do you want to connect your account now?
                                                        </p>
                                                        <p class="submit">
                                                            <button class="action_button"
                                                                    data-behavior="create_google_file_picker">Yes,
                                                                connect my Google account
                                                            </button>
                                                            or <a data-behavior="cancel_google_connect"
                                                                  href="#">Cancel</a></p>
                                                    </div>

                                                    <div data-behavior="google_connector_access_denied"
                                                         class="google_connector">
                                                        <p>
                                                            <b>Basecamp couldn’t access your Google account</b><br>
                                                            To attach Google Docs, you’ll need to give Basecamp
                                                            permission. Do you want to try again?
                                                        </p>
                                                        <p class="submit">
                                                            <button class="action_button"
                                                                    data-behavior="create_google_file_picker">Connect a
                                                                Google account
                                                            </button>
                                                            or <a data-behavior="cancel_google_connect"
                                                                  href="#">Cancel</a></p>
                                                    </div>

                                                </header>

                                                <footer>
                                                    <div data-subscribers="/2501285/projects/6590988/subscribers?new_comment=true&amp;subscribable_id=49777835&amp;subscribable_type=Todolist"></div>

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

                                <section class="event_stream" id="events_todolist_49777835">
                                    <a data-behavior="reveal_event_history"
                                       data-recordable-sgid="BAhJIhZUb2RvbGlzdC00OTc3NzgzNQY6BkVU--8c3e2d3d2086c982d2e6a3c1a7a6925fd0697b6a"
                                       href="#">By-the-minute history for this to-do list...</a>
                                </section>


                                <aside class="tools" data-behavior="perma_tools">
                                    <div class="tool" data-behavior="tool">
                                        <a data-behavior="edit" href="#">Edit</a>
                                    </div>

                                    <div class="tool" data-behavior="tool expandable">
                                        <a data-behavior="expand_on_click hide_on_expand" href="#">Delete…</a>

                                        <span class="confirm" data-role="confirm_view">
                                    <a data-behavior="tool_action" data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todolists/49777835/trash" rel="nofollow">Delete this to-do list?</a>
                                    <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                </span>
                                    </div>


                                    <div class="tool" data-visible-to="creator admin" data-skip_busy=""
                                         data-behavior="tool bucket_operation_tool expandable" data-label="Copy"
                                         data-new-bucket-operation-path="/2501285/copy_operations/new"
                                         data-bucket-operation-type="CopyOperation" data-source-resource-type="Todolist"
                                         data-source-resource-id="49777835"
                                         data-source-resource-human-name="to-do list">
                                        <a data-behavior="expand_on_click hide_on_expand" href="#">Copy…</a>

                                        <div class="confirm" data-role="confirm_view">
                                            <div class="change" data-role="form">
                                                <form accept-charset="UTF-8" action="/2501285/copy_operations"
                                                      class="new_copy_operation" id="new_copy_operation" method="post">
                                                    <div style="display:none">
                                                        <input name="utf8" type="hidden" value="✓">
                                                        <input name="authenticity_token" type="hidden" value="j2ptbJPQFcVvIzd6aGeGEwPv74v/63d3GdCH4yrgdas=">
                                                    </div>
                                                    <strong>Copy this to-do list</strong>

                                                    <select data-role="destination_bucket_select" disabled="disabled"
                                                            id="copy_operation_destination_bucket"
                                                            name="copy_operation[destination_bucket]">
                                                        <option value="">Loading…</option>
                                                    </select>

                                                    <p class="explanation">We’ll add a copy of this to-do list to the
                                                        project you choose above. Changes you make to the copy won’t
                                                        affect the original.</p>


                                                    <p class="copy_options todolist">
                                                        <label style="display: none;" data-role="keep_comments_label">
                                                            <input name="copy_operation[keep_comments]" type="hidden" value="0">
                                                            <input data-role="keep_comments_option" id="copy_operation_keep_comments" name="copy_operation[keep_comments]" type="checkbox" value="1">
                                                            Include original comments
                                                        </label>

                                                        <label style="display: none;"
                                                               data-role="preserve_todo_assignments_label">
                                                            <input name="copy_operation[preserve_todo_assignments]"
                                                                   type="hidden" value="0"><input
                                                                data-role="preserve_todo_assignments_option"
                                                                id="copy_operation_preserve_todo_assignments"
                                                                name="copy_operation[preserve_todo_assignments]"
                                                                type="checkbox" value="1">
                                                            Include assignees (if they're on the destination project)
                                                        </label>
                                                    </p>


                                                    <div class="submit">
                                                        <input class="action_button" data-behavior="tool_action"
                                                               disabled="disabled" name="commit" type="submit"
                                                               value="Copy this to-do list">
                                                        <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="confirm conflict" data-role="conflict"></div>
                                        </div>
                                    </div>
                                </aside>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SpecificListComponent',
        data() {
            return {
                open: true,
                clicked: false,
                todoListName: '',

                todoLists: [],

                home_page: '',
                projectId: '',
                projectName: '',

                todoListsId: ''
            }
        },
        mounted() {
            console.log('Component mounted.');

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
            this.todoListsId = document.querySelector("meta[name='todo-lists-id']").getAttribute("content");


            let self = this;
            axios.get(this.home_page + '/api/project/' + this.projectId + '/' + this.projectName + '/todolist/' + this.todoListsId)
                .then((response) => {
                    console.log(response.data);
                    //self.todoLists.push(response.data);
                }).catch((error) => {
                console.log(error);
            });

        },

        methods: {
            createNewTodoList() {
                console.log('clicked');
                this.clicked = true;

            },
            cancelNewTodo() {
                this.clicked = false;
            },
            saveTodoList() {
                console.log('saving todo');
                console.log(this.todoListName);

                let self = this;
                axios.post(this.home_page + '/api/project/' + this.projectId + '/' + this.projectName + '/todolist/new', {
                    listName: this.todoListName
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                })
            }

        }
    }
</script>
