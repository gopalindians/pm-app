<template>
    <div class="panel sheet todolists has_sidebar" style="margin-left: 20px; margin-bottom: -20px;">

        <header class="has_buttons">
            <h1 class="inactive_title">See all to-do lists</h1>
            <div class="active_title">
                <h1>To-do lists</h1>
            </div>

            <span class="position_reference">
                <button type="button" data-behavior="new_todolist" @click="createNewTodoList" v-show="!clicked"
                        class="action_button">Add a to-do list</button>
                <div class="blank_slate_arrow"></div>
            </span>
        </header>

        <div class="sheet_body">
            <section class="todos" data-collection-name="todolists">
                <h3 class="filtered_header" data-behavior="todo_filter_header">
                    Showing to-dos
                    <span data-behavior="assigned_to">assigned to <span data-behavior="value"></span></span>
                    <span data-behavior="filter_and">and</span>
                    <span data-behavior="filter_due">due
                        <span data-behavior="value"></span>
                    </span>–
                    <a class="decorated" data-behavior="show_all_todos" href="#">Show all to-dos</a>
                </h3>

                <article class="todolist new" data-behavior="expandable hide_buttons_on_expand">
                    <header class="expanded_content">
                        <form accept-charset="UTF-8" action="#" class="new_todolist"
                              data-remote="true" method="post">
                            <input name="utf8" type="hidden" value="✓">

                            <header class="text_entry">
                                <h3>
                                    <input id="todoliswert_name" name="todolist[name]" size="10" type="text"
                                           placeholder="Give the list a title" value="" autofocus
                                           v-model="todoListName">
                                </h3>
                            </header>

                            <span style="display:none;">
                                <div data-behavior="lazy_load_subscribers"
                                     data-url="/2501285/projects/6590988/subscribers?subscribable_type=Todolist"></div>
                            </span>

                            <p class="submit">
                                <input name="commit" type="submit" value="Save and start adding to-dos"
                                       @click="saveTodoList"> or
                                <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                            </p>
                        </form>
                    </header>
                </article>


                <ul class="todolists" data-autoload-url="false" data-behavior="sortable_container"
                    data-sortable-type="todolist">

                    <div v-show="clicked">
                        <article class="todolist new expanded" data-behavior="expandable hide_buttons_on_expand">
                            <header class="expanded_content">
                                <form accept-charset="UTF-8" action="#" class="new_todolist"
                                      data-remote="true" id="new_todolist" method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                    <header class="text_entry">
                                        <h3>
                                            <input name="todolist[name]" size="10" type="text" v-model="todoListName"
                                                   placeholder="Give the list a title" value=""/>
                                        </h3>
                                    </header>

                                    <p class="submit">
                                        <input name="commit" type="button" value="Save and start adding to-dos"
                                               @click="saveTodoList"> or
                                        <a class="cancel" data-behavior="cancel" data-role="cancel" href="#"
                                           @click="cancelNewTodo">Cancel</a>
                                    </p>
                                </form>
                            </header>
                        </article>
                    </div>


                    <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_48308664"
                        v-for="todoList in todoLists[0]">
                        <article class="todolist" id="todolist_48308664"
                                 :data-url="home_page+'/project/'+projectId+'/'+projectName+'/todolist/'+todoList.id"
                                 data-behavior="expandable">
                            <header class="collapsed_content" data-behavior="has_hover_content">
                                <div class="nubbin" data-behavior="nubbin hover_content"
                                     style="display: none; left: -61px;">
                                    <div class="spacer"></div>
                                    <a class="image delete"
                                       data-confirm="Are you sure you want to delete this to-do list?"
                                       data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todolists/48308664/trash"
                                       rel="nofollow">Delete</a>
                                    <a class="edit" data-behavior="edit" href="#">Edit</a>
                                </div>

                                <h3 data-behavior="sortable_handle">
                                    <a class="linked_title"
                                       :href="home_page+'/project/'+projectId+'/'+projectName+'/todolist/'+todoList.id">
                                        <span class="project_name">{{projectName}} —</span>
                                        {{todoList.todo_name}}
                                    </a>
                                    <span class="unlinked_title">{{todoList.todo_name}}</span>
                                </h3>
                            </header>

                            <header class="expanded_content">
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todolists/48308664"
                                      class="edit_todolist" data-remote="true" id="edit_todolist_48308664"
                                      method="post">
                                    <div style="display:none">
                                        <input name="utf8" type="hidden" value="✓">
                                        <input name="_method" type="hidden" value="patch">
                                    </div>
                                    <header class="text_entry">
                                        <h3>
                                            <input id="todolist_name" name="todolist[name]" size="10" type="text"
                                                   value="Joomla Website Tasks (bestessayhub.com)">
                                        </h3>
                                        <p>
                                            <em>
                                            <textarea data-behavior="autoresize submit_on_enter"
                                                      id="todolist_description" name="todolist[description]"
                                                      placeholder="Optional: describe this list" rows="1"></textarea>
                                            </em>
                                        </p>
                                    </header>

                                    <span style="display:none;">
                                        <div data-behavior="lazy_load_subscribers"
                                             data-url="/2501285/projects/6590988/subscribers?subscribable_id=48308664&amp;subscribable_type=Todolist">
                                        </div>
                                    </span>

                                    <p class="submit">
                                        <input name="commit" type="submit" value="Save changes"> or
                                        <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                    </p>
                                </form>
                            </header>

                            <ul class="todos " data-behavior="sortable_container" data-sortable-type="todo">

                                <li class="todo show" data-assignee-code="p15316135"
                                    data-behavior="has_hover_content sortable" data-sortable-type="todo"
                                    data-url="/2501285/projects/6590988/todos/324566530" id="todo_324566530">
                                    <div class="nubbin" data-behavior="nubbin hover_content"
                                         style="display: none; left: -61px;">
                                        <div class="spacer"></div>
                                        <a class="image delete"
                                           data-confirm="Are you sure you want to delete this to-do?" data-method="post"
                                           data-remote="true" href="/2501285/projects/6590988/todos/324566530/trash"
                                           rel="nofollow">Delete</a>
                                        <a class="edit" data-remote="true"
                                           data-url="/2501285/projects/6590988/todos/324566530/edit" href="#">Edit</a>
                                    </div>

                                    <div class="">
                                        <span class="wrapper">
                                            <input data-behavior="toggle"
                                                   data-url="/2501285/projects/6590988/todos/324566530/toggle"
                                                   name="todo_complete"
                                                   type="checkbox" value="1">

                                            <span class="content" data-behavior="sortable_handle">
                                                <a href="/2501285/projects/6590988/todos/324566530">Responsive of website</a>
                                                <span class="content_for_perma">Responsive of website</span>
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
                                                    <span class="pill has_balloon"
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
                                                                        name="todo[assignee_code]">
                                                                    <option value="⎈">Loading...</option></select>
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


                            <ul class="new" data-behavior="expandable load_assignee_options">
                                <li class="collapsed_content">
                                    <a class="decorated" data-behavior="expand_on_click load_assignee_options" href="#">Add
                                        a to-do</a>
                                </li>

                                <li class="expanded_content edit_mode">
                                    <article data-behavior="file_drop_target">
                                        <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos"
                                              class="new_todo" data-behavior="new_todo" data-remote="true" id="new_todo"
                                              method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                            <input id="todo_todolist_id" name="todo[todolist_id]" type="hidden"
                                                   value="48308664">

                                            <input disabled="disabled" name="todo[completed]" type="hidden"
                                                   value="0"><input disabled="disabled" id="todo_completed"
                                                                    name="todo[completed]" type="checkbox" value="1">
                                            <textarea data-behavior="autoresize submit_on_enter" id="todo_content"
                                                      name="todo[content]" placeholder="Add a new to-do..."
                                                      rows="1"></textarea>

                                            <div class="details">
                                                <label>
                                                    <strong>Assigned to:</strong>
                                                    <select data-behavior="assignee_options" data-private="false"
                                                            data-project-id="6590988" id="todo_assignee_code"
                                                            name="todo[assignee_code]">
                                                        <option value="⎈">Loading...</option>
                                                    </select>
                                                </label>

                                                <label>
                                                    <strong>Due on:</strong>
                                                    <span class="pill has_balloon"
                                                          data-behavior="expandable expand_exclusively">
                                                        <a data-behavior="expand_on_click" href="#">
                                                            <time data-behavior="due_date"
                                                                  data-blank-text="No due date">
                                                                No due date
                                                            </time>
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
                                            </div>


                                            <p class="submit">
                                                <input class="action_button" data-role="uploader" name="commit"
                                                       type="submit" value="Add this to-do"> or
                                                <a class="decorated" data-behavior="cancel" data-role="cancel" href="#">I'm
                                                    done adding to-dos</a>
                                            </p>
                                        </form>
                                    </article>
                                </li>
                            </ul>


                            <ul class="completed truncated">
                            </ul>
                        </article>
                    </li>

                </ul>
            </section>
        </div>

        <aside>
            <p>
                Show to-dos assigned to <br>
                <select data-behavior="todos_assignee_filter">
                    <option value="">Anyone</option>
                    <option value="unassigned">(Unassigned) (2)</option>
                    <option value="p15316135">Ashish Sharma (1)</option>
                </select>
            </p>

            <p>
                Show to-dos that are due <br>
                <select data-behavior="todos_date_filter"
                        data-options="[{&quot;value&quot;:&quot;today&quot;,&quot;option&quot;:&quot;Today&quot;},{&quot;value&quot;:&quot;tomorrow&quot;,&quot;option&quot;:&quot;Tomorrow&quot;},{&quot;value&quot;:&quot;week&quot;,&quot;option&quot;:&quot;This week&quot;},{&quot;value&quot;:&quot;nextweek&quot;,&quot;option&quot;:&quot;Next week&quot;},{&quot;value&quot;:&quot;later&quot;,&quot;option&quot;:&quot;Later&quot;},{&quot;value&quot;:&quot;past&quot;,&quot;option&quot;:&quot;In the past (overdue)&quot;}]">
                    <option value="">Anytime</option>
                </select>
            </p>


            <p><a class="decorated" href="/2501285/projects/6590988/todolists/completed">See completed to-dos</a></p>

            <h5>Current to-do lists</h5>

            <ul>
                <li><a class="decorated" href="/2501285/projects/6590988/todolists/48308664"
                       id="sidebar_todolist_48308664">Joomla Website Tasks (bestessayhub.com)</a></li>
            </ul>

            <h5>Completed to-do lists</h5>

            <ul>
                <li><a class="decorated" href="/2501285/projects/6590988/todolists/46596032"
                       id="sidebar_todolist_46596032"> Gymreapers.com</a></li>
            </ul>

        </aside>
    </div>
</template>

<script>
    export default {
        name: 'TodoListsComponent',
        data() {
            return {
                open: true,
                clicked: false,
                todoListName: '',

                todoLists: [],

                home_page: '',
                projectId: '',
                projectName: '',
            }
        },
        mounted() {
            console.log('Component mounted.');

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");


            let self = this;
            axios.get(this.home_page + '/api/project/' + this.projectId + '/' + this.projectName + '/todolists/')
                .then((response) => {
                    console.log(response.data);
                    self.todoLists.push(response.data);
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
                let self = this;
                axios.post(this.home_page + '/api/project/' + this.projectId + '/' + this.projectName + '/todolist/new', {
                    listName: this.todoListName
                }).then((response) => {
                    console.log(response.data[0]);
                    self.todoLists[0].unshift(response.data[0]);
                    self.clicked = false;
                }).catch((error) => {
                    console.log(error);
                })
            }

        }
    }
</script>
