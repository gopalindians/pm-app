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
                               :href="home_page+'/project/'+projectId+'/'+projectName+'/todolists'">See all to-do
                                lists</a>
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
                                                <!-- {{todoLists[0]}}-->
                                            </a>
                                            <span class="unlinked_title">{{todoLists.todo_name}}</span>


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
                                                           id="todolist_49777835_privacy_toggle"
                                                           name="todolist[private]"
                                                           type="checkbox" value="1"> Don’t show this to-do list to the client
                                                    <span data-behavior="client_list"></span>
                                        </label>

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
                                                    <div style="display:none">
                                                        <input name="utf8" type="hidden" value="✓">
                                                    </div>
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
                                                                    <input data-behavior="alt_date_field"
                                                                           name="todo[due_at]" type="hidden">
                                                                    <div data-behavior="date_picker"
                                                                         class="notranslate"></div>
                                                                    <footer><a class="no_date"
                                                                               data-behavior="no_due_date" href="#">No due date</a></footer>
                                                                </span>
                                                            </span>
                                                        </label>
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
                                                <textarea v-model="commentText"></textarea>
                                            </header>
                                            <input type="button" class="btn btn-primary" value="Submit"
                                                   @click="submitComment()"/>
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


                                <aside class="tools" data-behavior="perma_tools">
                                    <div class="tool" data-behavior="tool">
                                        <a data-behavior="edit" href="#">Edit</a>
                                    </div>

                                    <div class="tool" data-behavior="tool expandable">
                                        <a data-behavior="expand_on_click hide_on_expand" href="#">Delete…</a>
                                        <span class="confirm" data-role="confirm_view">
                                            <a data-behavior="tool_action" data-method="post" data-remote="true"
                                               href="/2501285/projects/6590988/todolists/49777835/trash" rel="nofollow">
                                                Delete this to-do list?</a>
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
        name: 'SpecificListComponent',
        data() {
            return {
                open: true,
                clicked: false,
                todoListName: '',

                todoLists: '',

                home_page: '',
                projectId: '',
                projectName: '',

                todoListsId: '',
                commentText: ''
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
                    self.todoLists = response.data[0];
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
            submitComment() {
                console.log('Hello');

                let self = this;
                axios.post(this.home_page + '/api/project/' + this.projectId + '/' + this.projectName + '/todolist/' + this.todoListsId + '/comment', {
                    commentText: this.commentText
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });
            }


        }
    }
</script>
