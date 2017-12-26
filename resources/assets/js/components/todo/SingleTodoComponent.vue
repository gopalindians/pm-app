<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 1000px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active" data-assignee-options-loaded-6590988="true">
                <header>
                    <h1>
                        <a data-restore-position="" :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet todo has_sidebar inactive"
                     style="margin-left: 20px; margin-bottom: -20px;">
                    <header>
                        <h1>
                            <a data-restore-position=""
                               :href="home_page+'project/'+projectId+'/'+projectName+'/todolists'">See
                                all to-do lists</a>
                        </h1>
                    </header>
                    <div class="panel sheet todo" data-movable-parent-id="todolist_48308664"
                         style="margin-left: 20px; margin-bottom: -20px;">
                        <title>{{projectName}}</title>

                        <header>
                            <h1 style="display: none;">To-do item</h1>
                            <p class="reference_to_project">Project:
                                <a data-stacker="false" href="/2501285/projects/6590988">Random Projects</a></p>
                            <p>
                                From the to-do list:
                                <a data-replace-sheet="true"
                                   :href="home_page+'project/'+projectId+'/'+projectName+'/todolists/'">{{todo.todo_list_name}}</a>
                            </p>
                        </header>

                        <div class="sheet_body">
                            <section class="perma has_tools" data-creator-id="13182570">
                                <article class="todolist">
                                    <ul>
                                        <li class="todo show" data-assignee-code="p15316135"
                                            data-behavior="has_hover_content sortable" data-sortable-type="todo"
                                            data-url="/2501285/projects/6590988/todos/324566530" id="todo_324566530">
                                            <div class="nubbin" data-behavior="nubbin hover_content"
                                                 style="display: none; left: -61px;">
                                                <div class="spacer"></div>
                                                <a class="image delete"
                                                   data-confirm="Are you sure you want to delete this to-do?"
                                                   data-method="post" data-remote="true"
                                                   href="/2501285/projects/6590988/todos/324566530/trash"
                                                   rel="nofollow">Delete</a>
                                                <a class="edit" data-remote="true"
                                                   data-url="/2501285/projects/6590988/todos/324566530/edit" href="#">Edit</a>
                                            </div>

                                            <div class="">
                                        <span class="wrapper">
                                            <input data-behavior="toggle"
                                                   data-url="/2501285/projects/6590988/todos/324566530/toggle"
                                                   name="todo_complete" type="checkbox" value="1">

                                            <span class="content" data-behavior="sortable_handle">
                                                <a href="/2501285/projects/6590988/todos/324566530">{{todo.todo_name}}</a>
                                                <span class="content_for_perma">{{todo.todo_name}}</span>
                                            </span>


                                            <span class="pill comments" data-comments-counter="">
                                                <a href="/2501285/projects/6590988/todos/324566530">1 comment</a>
                                            </span>

                                            <form accept-charset="UTF-8"
                                                  action="/2501285/projects/6590988/todos/324566530" class="edit_todo"
                                                  data-remote="true" id="edit_todo_324566530" method="post">
                                                <div style="display:none">
                                                <input name="utf8" type="hidden" value="✓">
                                                <input name="_method" type="hidden" value="patch">
                                                </div>
                                                <span style="position:relative">
                                                    <span class="pill has_balloon ignore_hover"
                                                          data-behavior="expandable expand_exclusively load_assignee_options">
                                                        <a data-behavior="expand_on_click" href="#">
                                                            <span data-behavior="assignee_name"
                                                                  data-blank-text="Unassigned">
                                                                <span data-behavior="todo_assignee_present">Ashish Sharma</span>
                                                            </span>

                                                            <time data-behavior="due_date"
                                                                  data-blank-text="No due date"></time>
                                                        </a>
                                                        <span class="balloon right_side expanded_content">
                                                            <span class="arrow"></span>
                                                            <span class="arrow"></span>

                                                            <label>
                                                                <b>Assign this to-do to:</b>
                                                                <select data-assignee-code="p15316135"
                                                                        data-behavior="assignee_options"
                                                                        data-original-assignee-code="p15316135"
                                                                        data-private="false" data-project-id="6590988"
                                                                        id="todo_assignee_code"
                                                                        name="todo[assignee_code]"><option value="⎈">Loading...</option></select>
                                                            </label>

                                                            <div data-display="email-warning-confirmation-on"
                                                                 class="email_notice confirmation">
                                                                <p class="email_warning">
                                                                    <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
                                                                </p>
                                                                <p class="email_warning">Assign it anyway?</p>
                                                                <p class="submit">
                                                                    <a class="action_button button"
                                                                       data-behavior="confirm_assignee_change" href="#">Yes, assign it</a>
                                                                    <a data-behavior="cancel_assignee_change" href="#">Cancel</a>
                                                                </p>
                                                            </div>

                                                            <div data-display="email-warning-confirmation-off">
                                                                <div class="email_notice">
                                                                    <p data-display="email-warning-on"
                                                                       style="display: none" class="alert">This person won’t get an email because they turned off email notifications</p>
                                                                    <p data-display="email-warning-off"
                                                                       style="display: none">The person you select will be notified by email</p>
                                                                </div>

                                                                <label class="due_date">
                                                                    <b>Set the due date:</b>
                                                                    <hr>
                                                                    <input data-behavior="alt_date_field"
                                                                           name="todo[due_at]" type="hidden">
                                                                    <div data-behavior="date_picker"
                                                                         class="notranslate"></div>
                                                                </label>

                                                                <footer><a class="no_date decorated"
                                                                           data-behavior="no_due_date" href="#">No due date</a></footer>
                                                            </div>

                                                        </span>
                                                    </span>
                                                </span>

                                            </form>
                                        </span>
                                            </div>
                                        </li>
                                    </ul>


                                    <section class="comments" id="comments_for_todo_324566530" data-comments-count="3">
                                        <h4>Discuss this to-do</h4>

                                        <article class="comment" id="comment_561378765" data-creator-id="13182570"  v-for="comment in todo.todo_comments">
                                            <a data-replace-stack="true" href="/2501285/people/13182570"><img
                                                    alt="Harishanker ." class="avatar" height="96"
                                                    src="https://asset1.basecamp.com/2501285/people/13182570/photo/avatar.96.gif"
                                                    title="Harishanker ." width="96"></a>

                                            <div class="formatted_content" data-embeddable=""
                                                 data-skip-stacker-links="">

                                                {{comment.comment_text}}
                                            </div>

                                            <footer class="time">
                                                <a data-stacker="false"
                                                   href="/2501285/projects/6590988/todos/324566530#comment_561378765">Posted
                                                    <time data-local="time-ago" datetime="2017-09-19T05:14:17Z"
                                                          title="September 19, 2017 at 10:44am ">on Sep 19
                                                    </time>
                                                </a>
                                            </footer>

                                        </article>


                                        <article class="comment new" data-behavior="expandable file_drop_target">
                                            <img alt="" class="avatar" data-current-person-avatar="true"
                                                 src="https://asset1.basecamp.com/people/15531397/photo/avatar.96.gif"
                                                 title="Gopal Sharma">

                                            <div class="collapsed_content">
                                                <header class="text_entry no_shadow">
                                                    <textarea placeholder="Add a comment"
                                                              v-model="commentText"></textarea>
                                                </header>
                                                <button type="button" class="btn btn-primary" @click="saveComment()">
                                                    Submit
                                                </button>
                                            </div>

                                            <div class="expanded_content">
                                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/comments"
                                                      class="new_comment" data-behavior="no_reset require_input"
                                                      data-remote="true" id="new_comment" method="post">
                                                    <div style="display:none"><input name="utf8" type="hidden"
                                                                                     value="✓"></div>
                                                    <header class="text_entry">
                                                        <input id="comment_commentable_type"
                                                               name="comment[commentable_type]" type="hidden"
                                                               value="Todo">
                                                        <input id="comment_commentable_id"
                                                               name="comment[commentable_id]" type="hidden"
                                                               value="324566530">

                                                        <div data-behavior="wysiwyg_container"
                                                             data-wysiwyg-follow-threshold="136">
                                                            <textarea autofocus="autofocus" class="comment_content"
                                                                      data-behavior="autosave autoresize wysiwyg dirty_tracking submit_on_control_enter"
                                                                      data-role="accept_as_input" id="comment_content"
                                                                      name="comment[content]"
                                                                      placeholder="Type your comment here…" rows="4"
                                                                      data-autosave-storage-key="autosave:c2679f1b0b25b1baf6cc749e111507da"></textarea>
                                                        </div>
                                                    </header>

                                                    <footer>
                                                        <div data-subscribers="/2501285/projects/6590988/subscribers?new_comment=true&amp;subscribable_id=324566530&amp;subscribable_type=Todo"></div>
                                                        <div class="submit">
                                                            <input class="action_button green" data-role="uploader"
                                                                   name="commit" type="submit" value="Add this comment">
                                                            <span class="hidden_from_client inactive">The client won’t see your comment</span>
                                                        </div>
                                                    </footer>
                                                </form>
                                            </div>
                                        </article>
                                    </section>
                                </article>

                                <aside class="tools" data-behavior="perma_tools">
                                    <div class="tool" data-behavior="tool">
                                        <a class="edit" data-remote="true"
                                           data-url="/2501285/projects/6590988/todos/324566530/edit" href="#">Edit</a>
                                    </div>

                                    <div class="tool" data-behavior="tool expandable">
                                        <a data-behavior="expand_on_click hide_on_expand" href="#">Delete…</a>

                                        <span class="confirm" data-role="confirm_view">
                                    <a data-behavior="tool_action" data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todos/324566530/trash" rel="nofollow">Delete this to-do?</a>
                                    <a class="cancel" data-behavior="collapse_on_click" href="#">Never mind</a>
                                </span>
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
        name: 'SingleTodoComponent',
        data() {
            return {
                open: true,
                clicked: false,
                todo: '',

                home_page: '',
                projectId: '',
                projectName: '',

                todoId: '',
                commentText: ''
            }
        },
        mounted() {

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
            this.todoId = document.querySelector("meta[name='todo-id']").getAttribute("content");

            let self = this;
            axios.get(this.home_page + 'api/project/' + this.projectId + '/' + this.projectName + '/todo/' + this.todoId)
                .then((response) => {
                    self.todo = response.data[0];
                }).catch((error) => {
                console.log(error);
            });
        },

        methods: {
            saveComment() {
                let self = this;
                axios.post(this.home_page + 'api/project/' + this.projectId + '/' + this.projectName + '/todo/' + this.todoId + '/comment', {
                    todoId: this.todoId,
                    todoListId: this.todo.todo_list_id,
                    comment: this.commentText,
                }).then((response) => {
                    //self. t do = response.data[0];
                }).catch((error) => {
                    console.log(error);
                });
            }
        }
    }
</script>
