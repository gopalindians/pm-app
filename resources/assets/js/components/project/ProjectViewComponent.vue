<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 960px;">
            <div class="panel sheet project active isnt_client_project" data-behavior=" "
                 :data-creator-id="project.project_owner_id"
                 data-status="active">
                <title>{{projectName}}</title>
                <header>
                    <div class="header_links">
                        <a :href="home_page+'project/'+projectId+'/'+projectName+'/accesses'">
                            <span class="link">Invite more people</span><br>
                            <span class="detail">11 people on this project</span>
                        </a>
                        <a :href="'/project/'+projectId+'/'+projectName+'/summary'">
                            <span class="link">Catch up</span><br>
                            <span class="detail">on recent changes</span>
                        </a>
                    </div>

                    <h1>{{projectName}}</h1>

                    <div data-behavior="edit_project_header expandable">
                        <div class="collapsed_content">
                            <div class="position_reference">
                                <h1 class="field" data-behavior="editable_field_prompt">
                                    {{projectName}}
                                </h1>
                                <div class="star" data-behavior="project_star" :data-project-id="projectId"
                                     data-refresh-project-view="false"
                                     title="Starring a project will highlight it on the projects index page"></div>
                            </div>
                        </div>
                    </div>


                    <div id="project_toolbar_6590988" class="project_toolbar" data-autoview="">
                        <div class="tools has_tools_in_project">
                            <div class="group in_project">
                                <a :href="'/project/'+projectId+'/'+projectName+'/topics'" data-tool-name="topics">
                                    <span class=""><strong>{{totalTopics}} Discussions</strong></span>
                                </a>
                                <a :href="'/project/'+projectId+'/'+projectName+'/todolists'"
                                   data-tool-name="todolists">
                                    <span class=""><strong>3 To-dos</strong></span>
                                </a>
                                <a :href="'/project/'+projectId+'/'+projectName+'/attachments'"
                                   data-tool-name="attachments">
                                    <span class=""><strong>657 Files</strong></span>
                                </a>
                                <a :href="'/project/'+projectId+'/'+projectName+'/documents'"
                                   data-tool-name="documents">
                                    <span class=""><strong>24 Text documents</strong></span>
                                </a>
                                <a :href="'/project/'+projectId+'/'+projectName+'/calendar_events'"
                                   data-tool-name="calendar_events">
                                    <span class=""><strong>Events</strong></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>


                <div class="sheet_body">
                    <div data-role="project_dates">
                        <div id="project_dates_Project_6590988" class="project_dates" data-autoview="">
                        </div>
                    </div>

                    <section class="topics " data-collection-name="topics">
                        <header class="has_buttons">
                            <h1><a :href="'/project/'+projectId+'/'+projectName+'/topics'">Discussions</a></h1>
                            <a class="action_button button"
                               :href="'/project/'+projectId+'/'+projectName+'/messages/new'">Post a new message</a>
                        </header>

                        <table class="inbox">
                            <tbody>
                            <tr class="topic todo_289596969" id="topic_152633325" v-for="p in project.topic_detail">
                                <td class="avatar">
                                    <a :href="'/project/'+projectId+'/'+projectName+'/todos/todoid'">
                                        <img :alt="p.latest_comment_by.name"
                                             class="avatar" height="30"
                                             src="https://asset1.basecamp.com/2501285/people/15531397/photo/avatar.40.gif"
                                             :title="p.latest_comment_by.name"
                                             width="30">
                                    </a>
                                </td>

                                <td class="who">
                                    <a :href="'/project/'+projectId+'/'+projectName+'/todos/todoid'">{{p.latest_comment_by.name}}</a>
                                </td>

                                <td class="what">
                                    <div class="attachments">
                                        <!--<figure>
                                            <img alt="" border="0" class="file_icon" data-attachment-id="266310498"
                                                 data-audio-codec="null" data-behavior="enlargeable" data-classes="file"
                                                 data-container-id="comment_491152654"
                                                 data-content-type="application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                                 data-created-at="2017-01-09T12:44:55Z" data-creator-id="6581649"
                                                 data-creator="Deepanshu T." data-description="file"
                                                 data-details-path="/2501285/projects/6590988/attachments/266310498/details"
                                                 data-download-path="/2501285/projects/6590988/attachments/266310498/download"
                                                 data-embeddable="false" data-extension="DOCX" data-file-or-image="file"
                                                 data-filename="ONE CALL CAMEROON Website Structure.docx"
                                                 data-filesize="54 KB" data-height="18" data-image-id="266310498"
                                                 data-large-height="200"
                                                 data-large-src="https://bcx.basecamp-static.com/assets/file_icons/icon_DOCX_enormous-e555b3a17e14721bc0744b059a60a9f9.png"
                                                 data-large-width="160" data-linked="null" data-max-size="700"
                                                 data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/266310498"
                                                 data-path="/2501285/projects/6590988/attachments/266310498"
                                                 data-perma-path="/2501285/projects/6590988/todos/289596969?enlarge=266310498#attachment_266310498"
                                                 data-previewable="false"
                                                 data-storage-key="bd9755e9b7c48833541991a5d9cb24bf0010"
                                                 data-thumbnail="false"
                                                 data-trash-path="/2501285/projects/6590988/attachments/266310498/trash"
                                                 data-trashed="false" data-type="file" data-video-codec="null"
                                                 data-width="24" height="18"
                                                 src="https://bcx.basecamp-static.com/assets/file_icons/icon_DOCX_small-fb18170e86c12fa567104f8082ae1d92.png"
                                                 title="ONE CALL CAMEROON Website Structure.docx" width="24">
                                        </figure>-->
                                    </div>

                                    <a :href="'/project/'+projectId+'/'+projectName+'todos/todoid'">
                                        <strong data-role="live_filter_highlight">{{p.topic_name}}</strong>
                                        <span class="bucket_name">({{projectName}})</span>
                                        <span class="excerpt"
                                              v-if="p.latest_comment != null "> - {{p.latest_comment.comment}}</span>
                                        <span class="excerpt"
                                              v-if="p.latest_comment == null "> - {{p.topic_body}}</span>
                                    </a>
                                </td>

                                <td class="when">
                                    <a :href="'/project/'+projectId+'/'+projectName+'/todos/todoid'">
                                        <time data-local="time-or-date" :datetime="p.updated_at"
                                              :title="p.updated_at_noob" v-if="p.latest_comment != null ">
                                            {{p.latest_comment.updated_at_human}}
                                        </time>
                                        <time data-local="time-or-date" :datetime="p.updated_at"
                                              :title="p.updated_at_noob" v-if="p.latest_comment == null ">
                                            {{p.updated_at_human}}
                                        </time>
                                    </a>
                                </td>

                                <td class="comments">
                                    <a :href="'/project/'+projectId+'/'+projectName+'/todos/'">
                                        <span class="pill comments circle">{{p.total_comments}}</span>
                                    </a>
                                </td>

                                <td class="actions"></td>
                            </tr>
                            </tbody>
                        </table>

                        <p class="more_topics">
                            <a class="decorated"
                               :href="'/project/'+projectId+'/'+projectName+'/topics'">{{project.total_topics}} open
                                discussions</a>
                            •
                            <a class="decorated" :href="'/project/'+projectId+'/'+projectName+'/topics/archived'">1
                                archived discussion</a>
                        </p>
                    </section>


                    <section class="todos " data-collection-name="todolists">
                        <header class="has_buttons">
                            <h1><a :href="'/project/'+projectId+'/'+projectName+'/todolists'">To-do lists</a></h1>
                            <button data-behavior="new_todolist" class="action_button">Add a to-do list</button>
                        </header>

                        <article class="todolist new" data-behavior="expandable hide_buttons_on_expand">
                            <header class="expanded_content">
                                <form accept-charset="UTF-8" :action="'/project/'+projectId+'/'+projectName+'todolists'"
                                      class="new_todolist" data-remote="true" id="new_todolist" method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                    <header class="text_entry">
                                        <h3><input id="todolisfewft_name" name="todolist[name]" size="10" type="text"
                                                   value="Give the list a title"></h3>
                                    </header>


                                    <span class="privacy_toggle" data-role="privacy_toggle" style="display:none;">
                                        <label for="new_todolist_privacy_toggle"><input name="todolist[private]"
                                                                                        type="hidden" value="0">
                                            <input
                                                    data-behavior="toggle_private_visibility"
                                                    id="new_todolist_privacy_toggle" name="todolist[private]"
                                                    type="checkbox" value="1"> Don’t show this to-do list to the client
                                            <span data-behavior="client_list"></span>
                                        </label>

                                        <span class="position_reference" data-behavior="expandable expand_exclusively"> –
                                            <a class="decorated" data-behavior="expand_on_click"
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
                                             data-url="/2501285/projects/6590988/subscribers?subscribable_type=Todolist"></div>
                                    </span>

                                    <p class="submit">
                                        <input name="commit" type="submit" value="Save and start adding to-dos"> or
                                        <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                    </p>
                                </form>
                            </header>
                        </article>


                        <ul class="todolists" data-autoload-url="false" data-behavior="sortable_container"
                            data-sortable-type="todolist">
                            <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_48308664">
                                <article class="todolist" id="todolist_48308664"
                                         data-url="/2501285/projects/6590988/todolists/48308664"
                                         data-behavior="expandable">
                                    <header class="collapsed_content" data-behavior="has_hover_content">
                                        <div class="nubbin" data-behavior="nubbin hover_content">
                                            <div class="spacer"></div>
                                            <a class="image delete"
                                               data-confirm="Are you sure you want to delete this to-do list?"
                                               data-method="post" data-remote="true"
                                               href="/2501285/projects/6590988/todolists/48308664/trash" rel="nofollow">Delete</a>
                                            <a class="edit" data-behavior="edit" href="#">Edit</a>
                                        </div>

                                        <h3 data-behavior="sortable_handle">
                                            <a class="linked_title" href="/2501285/projects/6590988/todolists/48308664">
                                                <span class="project_name">Random Projects —</span>
                                                Joomla Website Tasks (bestessayhub.com)
                                            </a>
                                            <span class="unlinked_title">Joomla Website Tasks (bestessayhub.com)</span>


                                        </h3>

                                        <p><em></em></p>
                                    </header>

                                    <header class="expanded_content">
                                        <form accept-charset="UTF-8"
                                              action="/2501285/projects/6590988/todolists/48308664"
                                              class="edit_todolist" data-remote="true" id="edit_todolist_48308664"
                                              method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓">
                                                <input name="_method" type="hidden" value="patch"></div>
                                            <header class="text_entry">
                                                <h3>
                                                    <input id="todweweeweolist_name" name="todolist[name]" size="10"
                                                           type="text" value="Joomla Website Tasks (bestessayhub.com)">
                                                </h3>

                                                <p><em>
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todolist_description" name="todolist[description]"
                                                              placeholder="Optional: describe this list"
                                                              rows="1"></textarea>
                                                </em></p>
                                            </header>

                                            <span class="privacy_toggle" data-role="privacy_toggle">

                                                <label for="todolist_48308664_privacy_toggle">
                                                    <input name="todolist[private]" type="hidden" value="0">
                                                    <input data-behavior="toggle_private_visibility"
                                                           id="todolist_48308664_privacy_toggle"
                                                           name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client
                                                    <span data-behavior="client_list"></span>
                                                </label>
                                                <span class="position_reference"
                                                      data-behavior="expandable expand_exclusively">
                                                    <a class="decorated" data-behavior="expand_on_click" href="#">what's this?</a>
                                                    <div class="balloon right_side expanded_content">
                                                        <span class="arrow"></span>
                                                        <span class="arrow"></span>
                                                        <span class="close"><a class="decorated"
                                                                               data-behavior="collapse_on_click"
                                                                               href="#">Close</a></span>
                                                        <h5>Working with clients?</h5>
                                                        <p>You can hide certain messages, to-dos, files, events, and text documents from people invited to this project as clients. This is great for sharing unfinished work with your team before getting client feedback.</p>

                                                        <p>
                                                            <a class="decorated"
                                                               href="/2501285/projects/6590988/accesses#client">Invite your first client to this project...</a>
                                                        </p>
                                                    </div>
                                                </span>
                                            </span>

                                            <span style="display:none;">
                                                <div data-behavior="lazy_load_subscribers"
                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=48308664&amp;subscribable_type=Todolist"></div>
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
                                            <div class="nubbin" data-behavior="nubbin hover_content">
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
                                                          action="/2501285/projects/6590988/todos/324566530"
                                                          class="edit_todo"
                                                          data-remote="true" id="edit_todo_324566530" method="post">
                                                        <div style="display:none"><input name="utf8" type="hidden"
                                                                                         value="✓">
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
                                                                    <label><b>Assign this to-do to:</b>

                                                                        <select data-assignee-code="p15316135"
                                                                                data-behavior="assignee_options"
                                                                                data-original-assignee-code="p15316135"
                                                                                data-private="false"
                                                                                data-project-id="6590988"
                                                                                id="todo_assignee_code"
                                                                                name="todo[assignee_code]">
                                                                            <option value="⎈">Loading...</option>
                                                                        </select>
                                                                    </label>

                                                                    <div data-display="email-warning-confirmation-on"
                                                                         class="email_notice confirmation">
                                                                        <p class="email_warning">
                                                                            <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
                                                                        </p>
                                                                        <p class="email_warning">Assign it anyway?</p>
                                                                        <p class="submit">
                                                                            <a class="action_button button"
                                                                               data-behavior="confirm_assignee_change"
                                                                               href="#">Yes, assign it</a>
                                                                            <a data-behavior="cancel_assignee_change"
                                                                               href="#">Cancel</a>
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
                                            <a class="decorated" data-behavior="expand_on_click load_assignee_options"
                                               href="#">Add a to-do</a>
                                        </li>

                                        <li class="expanded_content edit_mode">
                                            <article data-behavior="file_drop_target">
                                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos"
                                                      class="new_todo" data-behavior="new_todo" data-remote="true"
                                                      id="nefwefw_todo" method="post">
                                                    <div style="display:none"><input name="utf8" type="hidden"
                                                                                     value="✓"></div>
                                                    <input id="todfwefo_todolist_id" name="todo[todolist_id]"
                                                           type="hidden"
                                                           value="48308664">

                                                    <input disabled="disabled" name="todo[completed]" type="hidden"
                                                           value="0"><input disabled="disabled"
                                                                            id="todo_cewfefwompleted"
                                                                            name="todo[completed]" type="checkbox"
                                                                            value="1">
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todo_fwefwfcontent" name="todo[content]"
                                                              placeholder="Add a new to-do..." rows="1"></textarea>

                                                    <div class="details">
                                                        <label>
                                                            <strong>Assigned to:</strong>
                                                            <select data-behavior="assignee_options"
                                                                    data-private="false" data-project-id="6590988"
                                                                    id="todo_fwfwfeassignee_code"
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
                                                                        <span data-with-features="files_api">
                                                                            To attach files drag &amp; drop here or
                                                                        </span>

                                                                        <span class="file_input_container">
                                                                            <input name="file" type="file" multiple=""
                                                                                   onchange="$(document).trigger('ie:change', this)"
                                                                                   tabindex="-1">
                                                                            <a class="decorated"
                                                                               data-behavior="local_file_picker"
                                                                               href="#" tabindex="-1">select files from your computer…</a>
                                                                        </span>

                                                                        <span data-behavior="load_google_client"
                                                                              style="">
                                                                            or <a class="decorated"
                                                                                  data-behavior="google_file_picker"
                                                                                  href="#"
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
                            </li>
                            <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_43978505">
                                <article class="todolist" id="todolist_43978505"
                                         data-url="/2501285/projects/6590988/todolists/43978505"
                                         data-behavior="expandable">
                                    <header class="collapsed_content" data-behavior="has_hover_content">
                                        <div class="nubbin" data-behavior="nubbin hover_content">
                                            <div class="spacer"></div>
                                            <a class="image delete"
                                               data-confirm="Are you sure you want to delete this to-do list?"
                                               data-method="post" data-remote="true"
                                               href="/2501285/projects/6590988/todolists/43978505/trash" rel="nofollow">Delete</a>
                                            <a class="edit" data-behavior="edit" href="#">Edit</a>
                                        </div>

                                        <h3 data-behavior="sortable_handle">
                                            <a class="linked_title" href="/2501285/projects/6590988/todolists/43978505">
                                                <span class="project_name">Random Projects —</span>
                                                we have to make logo for this site .. http://beyourtherapist.com
                                            </a>
                                            <span class="unlinked_title">we have to make logo for this site .. http://beyourtherapist.com</span>

                                            <span class="pill comments">
                                                <a href="/2501285/projects/6590988/todolists/43978505">6 comments</a>
                                            </span>

                                        </h3>

                                        <p><em></em></p>
                                    </header>

                                    <header class="expanded_content">
                                        <form accept-charset="UTF-8"
                                              action="/2501285/projects/6590988/todolists/43978505"
                                              class="edit_todolist" data-remote="true" id="edit_todolist_43978505"
                                              method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                    name="_method" type="hidden" value="patch"></div>
                                            <header class="text_entry">
                                                <h3>
                                                    <input id="teweodofsdfxcvlist_name" name="todolist[name]" size="10"
                                                           type="text"
                                                           value="we have to make logo for this site .. http://beyourtherapist.com">
                                                </h3>

                                                <p><em>
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="teefcxvodolist_description"
                                                              name="todolist[description]"
                                                              placeholder="Optional: describe this list"
                                                              rows="1"></textarea>
                                                </em></p>
                                            </header>

                                            <span class="privacy_toggle" data-role="privacy_toggle">
                                                <label for="todolist_43978505_privacy_toggle"><input
                                                        name="todolist[private]" type="hidden" value="0">
                                                    <input
                                                            data-behavior="toggle_private_visibility"
                                                            id="todolist_43978505_privacy_toggle"
                                                            name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client
                                                    <span data-behavior="client_list"></span>
                                                </label>
                                                <span class="position_reference"
                                                      data-behavior="expandable expand_exclusively">
                                                    – <a class="decorated" data-behavior="expand_on_click" href="#">what's this?</a>

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
                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=43978505&amp;subscribable_type=Todolist"></div>
                                            </span>

                                            <p class="submit">
                                                <input name="commit" type="submit" value="Save changes"> or
                                                <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                            </p>
                                        </form>
                                    </header>

                                    <ul class="todos empty" data-behavior="sortable_container"
                                        data-sortable-type="todo">
                                    </ul>


                                    <ul class="new" data-behavior="expandable load_assignee_options">
                                        <li class="collapsed_content">
                                            <a class="decorated" data-behavior="expand_on_click load_assignee_options"
                                               href="#">Add a to-do</a>
                                        </li>

                                        <li class="expanded_content edit_mode">
                                            <article data-behavior="file_drop_target">
                                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos"
                                                      class="new_todo" data-behavior="new_todo" data-remote="true"
                                                      id="newwww_todo" method="post">
                                                    <div style="display:none"><input name="utf8" type="hidden"
                                                                                     value="✓"></div>
                                                    <input id="toqqdo_todolist_id" name="todo[todolist_id]"
                                                           type="hidden"
                                                           value="43978505">

                                                    <input disabled="disabled" name="todo[completed]" type="hidden"
                                                           value="0"><input disabled="disabled" id="todovcvcv_completed"
                                                                            name="todo[completed]" type="checkbox"
                                                                            value="1">
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todoccvvc_content" name="todo[content]"
                                                              placeholder="Add a new to-do..." rows="1"></textarea>

                                                    <div class="details">
                                                        <label>
                                                            <strong>Assigned to:</strong>
                                                            <select data-behavior="assignee_options"
                                                                    data-private="false" data-project-id="6590988"
                                                                    id="todo_assivcvvgnee_code"
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

                                                                    <input data-behavior="alt_date_field"
                                                                           name="todo[due_at]" type="hidden">
                                                                    <div data-behavior="date_picker"
                                                                         class="notranslate"></div>
                                                                    <footer><a class="no_date"
                                                                               data-behavior="no_due_date" href="#">No due date</a></footer>
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
                                                                        <span data-with-features="files_api">
                                                                            To attach files drag &amp; drop here or
                                                                        </span>

                                                                        <span class="file_input_container">
                                                                            <input name="file" type="file" multiple=""
                                                                                   onchange="$(document).trigger('ie:change', this)"
                                                                                   tabindex="-1">
                                                                            <a class="decorated"
                                                                               data-behavior="local_file_picker"
                                                                               href="#" tabindex="-1">select files from your computer…</a>
                                                                        </span>

                                                                        <span data-behavior="load_google_client"
                                                                              style="">
                                                                            or <a class="decorated"
                                                                                  data-behavior="google_file_picker"
                                                                                  href="#"
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
                            </li>
                            <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_49401648">
                                <article class="todolist" id="todolist_49401648"
                                         data-url="/2501285/projects/6590988/todolists/49401648"
                                         data-behavior="expandable">
                                    <header class="collapsed_content" data-behavior="has_hover_content">
                                        <div class="nubbin" data-behavior="nubbin hover_content">
                                            <div class="spacer"></div>
                                            <a class="image delete"
                                               data-confirm="Are you sure you want to delete this to-do list?"
                                               data-method="post" data-remote="true"
                                               href="/2501285/projects/6590988/todolists/49401648/trash" rel="nofollow">Delete</a>
                                            <a class="edit" data-behavior="edit" href="#">Edit</a>
                                        </div>

                                        <h3 data-behavior="sortable_handle">
                                            <a class="linked_title" href="/2501285/projects/6590988/todolists/49401648">
                                                <span class="project_name">Random Projects —</span>
                                                Shopify Website Replica
                                            </a>
                                            <span class="unlinked_title">Shopify Website Replica</span>


                                        </h3>

                                        <p><em></em></p>
                                    </header>

                                    <header class="expanded_content">
                                        <form accept-charset="UTF-8"
                                              action="/2501285/projects/6590988/todolists/49401648"
                                              class="edit_todolist" data-remote="true" id="edit_todolist_49401648"
                                              method="post">
                                            <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                    name="_method" type="hidden" value="patch"></div>
                                            <header class="text_entry">
                                                <h3>
                                                    <input id="todolist_name" name="todolist[name]" size="10"
                                                           type="text" value="Shopify Website Replica">
                                                </h3>

                                                <p><em>
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="tfefefodolist_description"
                                                              name="todolist[description]"
                                                              placeholder="Optional: describe this list"
                                                              rows="1"></textarea>
                                                </em></p>
                                            </header>

                                            <span class="privacy_toggle" data-role="privacy_toggle">
                                                <label for="todolist_49401648_privacy_toggle">
                                                    <input name="todolist[private]" type="hidden" value="0">
                                                    <input
                                                            data-behavior="toggle_private_visibility"
                                                            id="todolist_49401648_privacy_toggle"
                                                            name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client
                                                    <span data-behavior="client_list"></span>
                                                </label>
                                                <span class="position_reference"
                                                      data-behavior="expandable expand_exclusively">
                                                    – <a class="decorated" data-behavior="expand_on_click" href="#">what's this?</a>

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
                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=49401648&amp;subscribable_type=Todolist"></div>
                                            </span>

                                            <p class="submit">
                                                <input name="commit" type="submit" value="Save changes"> or
                                                <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                            </p>
                                        </form>
                                    </header>

                                    <ul class="todos " data-behavior="sortable_container" data-sortable-type="todo">

                                        <li class="todo show" data-behavior="has_hover_content sortable"
                                            data-sortable-type="todo"
                                            data-url="/2501285/projects/6590988/todos/332901436" id="todo_332901436">
                                            <div class="nubbin" data-behavior="nubbin hover_content">
                                                <div class="spacer"></div>
                                                <a class="image delete"
                                                   data-confirm="Are you sure you want to delete this to-do?"
                                                   data-method="post" data-remote="true"
                                                   href="/2501285/projects/6590988/todos/332901436/trash"
                                                   rel="nofollow">Delete</a>
                                                <a class="edit" data-remote="true"
                                                   data-url="/2501285/projects/6590988/todos/332901436/edit" href="#">Edit</a>
                                            </div>

                                            <div class="">
                                                <span class="wrapper">
                                                    <input data-behavior="toggle"
                                                           data-url="/2501285/projects/6590988/todos/332901436/toggle"
                                                           name="todo_complete" type="checkbox" value="1">

                                                    <span class="content" data-behavior="sortable_handle">
                                                        <a href="/2501285/projects/6590988/todos/332901436">Login Details</a>
                                                        <span class="content_for_perma">Login Details</span>
                                                    </span>


                                                    <span class="pill comments" data-comments-counter="">
                                                        <a href="/2501285/projects/6590988/todos/332901436">1 comment</a>
                                                    </span>

                                                    <form accept-charset="UTF-8"
                                                          action="/2501285/projects/6590988/todos/332901436"
                                                          class="edit_todo"
                                                          data-remote="true" id="edit_todo_332901436" method="post">
                                                        <div style="display:none">
                                                        <input name="utf8" type="hidden" value="✓">
                                                        <input name="_method" type="hidden" value="patch">
                                                    </div>

                                                        <span style="position:relative">
                                                            <span class="pill has_balloon blank"
                                                                  data-behavior="expandable expand_exclusively load_assignee_options hover_content">
                                                                <a data-behavior="expand_on_click" href="#">
                                                                    <span data-behavior="assignee_name"
                                                                          data-blank-text="Unassigned">Unassigned</span>



                                                                    <time data-behavior="due_date"
                                                                          data-blank-text="No due date"></time>
                                                                </a>
                                                                <span class="balloon right_side expanded_content">
                                                                    <span class="arrow"></span>
                                                                    <span class="arrow"></span>
                                                                    <label>
                                                                        <b>Assign this to-do to:</b>
                                                                        <select data-behavior="assignee_options"
                                                                                data-private="false"
                                                                                data-project-id="6590988"
                                                                                id="todo_assignee_code"
                                                                                name="todo[assignee_code]"><option
                                                                                value="⎈">Loading...</option>
                                                                        </select>
                                                                    </label>

                                                                    <div data-display="email-warning-confirmation-on"
                                                                         class="email_notice confirmation">
                                                                        <p class="email_warning">
                                                                            <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
                                                                        </p>
                                                                        <p class="email_warning">Assign it anyway?</p>
                                                                        <p class="submit">
                                                                            <a class="action_button button"
                                                                               data-behavior="confirm_assignee_change"
                                                                               href="#">Yes, assign it</a>
                                                                            <a data-behavior="cancel_assignee_change"
                                                                               href="#">Cancel</a>
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
                                        <li class="todo show" data-behavior="has_hover_content sortable"
                                            data-sortable-type="todo"
                                            data-url="/2501285/projects/6590988/todos/332901246" id="todo_332901246">
                                            <div class="nubbin" data-behavior="nubbin hover_content">
                                                <div class="spacer"></div>
                                                <a class="image delete"
                                                   data-confirm="Are you sure you want to delete this to-do?"
                                                   data-method="post" data-remote="true"
                                                   href="/2501285/projects/6590988/todos/332901246/trash"
                                                   rel="nofollow">Delete</a>
                                                <a class="edit" data-remote="true"
                                                   data-url="/2501285/projects/6590988/todos/332901246/edit" href="#">Edit</a>
                                            </div>

                                            <div class="">
                                                <span class="wrapper">
                                                    <input data-behavior="toggle"
                                                           data-url="/2501285/projects/6590988/todos/332901246/toggle"
                                                           name="todo_complete"
                                                           type="checkbox" value="1">

                                                    <span class="content" data-behavior="sortable_handle">
                                                        <a href="/2501285/projects/6590988/todos/332901246">Site Details</a>
                                                        <span class="content_for_perma">Site Details</span>
                                                    </span>

                                                     <span class="pill comments" data-comments-counter="">
                                                         <a href="/2501285/projects/6590988/todos/332901246">3 comments</a>
                                                     </span>

                                                    <form accept-charset="UTF-8"
                                                          action="/2501285/projects/6590988/todos/332901246"
                                                          class="edit_todo"
                                                          data-remote="true" id="edit_todo_332901246" method="post">
                                                        <div style="display:none">
                                                            <input name="utf8" type="hidden" value="✓">
                                                            <input name="_method" type="hidden" value="patch">
                                                        </div>
                                                        <span style="position:relative">
                                                            <span class="pill has_balloon blank"
                                                                  data-behavior="expandable expand_exclusively load_assignee_options hover_content">
                                                                <a data-behavior="expand_on_click" href="#">
                                                                    <span data-behavior="assignee_name"
                                                                          data-blank-text="Unassigned">Unassigned</span>



                                                                    <time data-behavior="due_date"
                                                                          data-blank-text="No due date"></time>

                                                                </a>
                                                                <span class="balloon right_side expanded_content">
                                                                    <span class="arrow"></span>
                                                                    <span class="arrow"></span>
                                                                    <label>
                                                                        <b>Assign this to-do to:</b>
                                                                        <select data-behavior="assignee_options"
                                                                                data-private="false"
                                                                                data-project-id="6590988"
                                                                                id="todo_assignee_code"
                                                                                name="todo[assignee_code]"><option
                                                                                value="⎈">Loading...</option>
                                                                        </select>
                                                                    </label>

                                                                    <div data-display="email-warning-confirmation-on"
                                                                         class="email_notice confirmation">
                                                                        <p class="email_warning">
                                                                            <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
                                                                        </p>
                                                                        <p class="email_warning">Assign it anyway?</p>
                                                                        <p class="submit">
                                                                            <a class="action_button button"
                                                                               data-behavior="confirm_assignee_change"
                                                                               href="#">Yes, assign it</a>
                                                                            <a data-behavior="cancel_assignee_change"
                                                                               href="#">Cancel</a>
                                                                        </p>
                                                                    </div>
                                                                    <div data-display="email-warning-confirmation-off">
                                                                        <div class="email_notice">
                                                                            <p data-display="email-warning-on"
                                                                               style="display: none" class="alert">This person won’t get an email because they turned off email notifications</p>
                                                                            <p data-display="email-warning-off"
                                                                               style="display: none">The person you select will be notified by email</p>
                                                                        </div>

                                                                        <label class="due_date"><b>Set the due date:</b>
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
                                                           value="49401648">

                                                    <input disabled="disabled" name="todo[completed]" type="hidden"
                                                           value="0"><input disabled="disabled" id="todo_completed"
                                                                            name="todo[completed]" type="checkbox"
                                                                            value="1">
                                                    <textarea data-behavior="autoresize submit_on_enter"
                                                              id="todo_content" name="todo[content]"
                                                              placeholder="Add a new to-do..." rows="1"></textarea>

                                                    <div class="details">
                                                        <label>
                                                            <strong>Assigned to:</strong>
                                                            <select data-behavior="assignee_options"
                                                                    data-private="false" data-project-id="6590988"
                                                                    id="todo_asvcvcvcvsignee_code"
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
                                                                        <span data-with-features="files_api">
                                                                            To attach files drag &amp; drop here or
                                                                        </span>

                                                                        <span class="file_input_container">
                                                                            <input name="file" type="file" multiple=""
                                                                                   onchange="$(document).trigger('ie:change', this)"
                                                                                   tabindex="-1">
                                                                            <a class="decorated"
                                                                               data-behavior="local_file_picker"
                                                                               href="#" tabindex="-1">select files from your computer…</a>
                                                                        </span>

                                                                        <span data-behavior="load_google_client"
                                                                              style="">
                                                                            or <a class="decorated"
                                                                                  data-behavior="google_file_picker"
                                                                                  href="#"
                                                                                  tabindex="-1">Google Docs…</a>
                                                                        </span>
                                                                    </div>

                                                                    <ul class="pending_attachments ui-sortable"
                                                                        data-role="accept_as_input">

                                                                    </ul>
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
                                                                              href="#">Cancel</a>
                                                                    </p>
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
                            </li>
                        </ul>

                        <div class="more_lists">

                            <p class="completed">
                                <a class="decorated" href="/2501285/projects/6590988/todolists/completed">56 completed
                                    to-dos</a>

                                across 26 to-do lists
                            </p>

                            <p class="completed">
                                Completed lists: <a class="decorated"
                                                    href="/2501285/projects/6590988/todolists/46596032">
                                Gymreapers.com</a>, <a class="decorated"
                                                       href="/2501285/projects/6590988/todolists/43680349">Akal
                                Transport site updates</a>
                            </p>
                        </div>
                    </section>

                    <section class="project_attachments " data-collection-name="attachments">
                        <header class="has_buttons">
                            <h1><a href="/2501285/projects/6590988/attachments">Files</a></h1>
                            <button data-behavior="new_upload file_drop_target" class="action_button">Add files</button>
                        </header>

                        <article class="upload new" data-behavior="expandable file_drop_target hide_buttons_on_expand">
                            <div class="expanded_content bubble">
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/uploads"
                                      class="new_upload" data-behavior="no_reset toggle_file_label require_input"
                                      data-remote="true" data-role="account_upgrade_wrapper" id="new_upload"
                                      method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                    <header class="text_entry">


                                        <div class="limit storage prod notify" data-hidden-from="accountManager"
                                             data-behavior="link_to_notify_owner_thanks" style="display: block;">
                                            <p>You're almost out of storage space! <a
                                                    data-behavior="link_to_notify_owner" data-method="post"
                                                    data-remote="true" href="/2501285/account/notification?type=storage"
                                                    rel="nofollow">Notify your account owner</a></p>
                                        </div>

                                        <div data-behavior="pending_attachments file_drop_target" data-sortable="true"
                                             class="attachments">
                                            <span class="prompt_graphic"></span>
                                            <div class="file_input_button">
    <span data-without-features="files_api">
      To attach files
    </span>
                                                <span data-with-features="files_api">
      To attach files drag &amp; drop here or
    </span>

                                                <span class="file_input_container">
      <input name="file" type="file" multiple="" onchange="$(document).trigger('ie:change', this)" tabindex="-1">
      <a class="decorated" data-behavior="local_file_picker" href="#" tabindex="-1">select files from your computer…</a>
    </span>

                                                <span data-behavior="load_google_client" style="">
      or <a class="decorated" data-behavior="google_file_picker" href="#" tabindex="-1">Google Docs…</a>
    </span>
                                            </div>

                                            <ul class="pending_attachments ui-sortable"
                                                data-role="accept_as_input"></ul>
                                        </div>


                                        <div data-behavior="picker_account_switcher" class="picker_account_switcher">
                                            <strong>You’re signed in to Google as <span
                                                    data-role="picker_account_email"></span></strong>
                                            <a data-behavior="google_account_switcher" href="#">Sign out and use a
                                                different Google account</a>
                                        </div>

                                        <div data-behavior="google_connector" class="google_connector">
                                            <p>
                                                <b>Connect your Google account</b><br>
                                                Before you can attach Google Docs in Basecamp, we’ll need your OK first.
                                                Do you want to connect your account now?
                                            </p>
                                            <p class="submit">
                                                <button class="action_button" data-behavior="create_google_file_picker">
                                                    Yes, connect my Google account
                                                </button>
                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a></p>
                                        </div>

                                        <div data-behavior="google_connector_access_denied" class="google_connector">
                                            <p>
                                                <b>Basecamp couldn’t access your Google account</b><br>
                                                To attach Google Docs, you’ll need to give Basecamp permission. Do you
                                                want to try again?
                                            </p>
                                            <p class="submit">
                                                <button class="action_button" data-behavior="create_google_file_picker">
                                                    Connect a Google account
                                                </button>
                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a></p>
                                        </div>

                                    </header>

                                    <footer>
    <span data-role="privacy_toggle" style="display:none;">
      <label for="new_upload_privacy_toggle"><input name="upload[private]" type="hidden" value="0"><input
              data-behavior="toggle_private_visibility" id="new_upload_privacy_toggle" name="upload[private]"
              type="checkbox" value="1"> Don’t show <span data-behavior="pluralize_subscribable_label">this file</span> to the client <span
              data-behavior="client_list"></span></label>

      <span class="position_reference" data-behavior="expandable expand_exclusively">
  – <a class="decorated" data-behavior="expand_on_click" href="#">what's this?</a>

  <div class="balloon right_side expanded_content">
    <span class="arrow"></span>
    <span class="arrow"></span>

    <span class="close"><a class="decorated" data-behavior="collapse_on_click" href="#">Close</a></span>

    <h5>Working with clients?</h5>
    <p>You can hide certain messages, to-dos, files, events, and text documents from people invited to this project as clients. This is great for sharing unfinished work with your team before getting client feedback.</p>
    <p><a class="decorated"
          href="/2501285/projects/6590988/accesses#client">Invite your first client to this project...</a></p>
  </div>
</span>

      <br><br>
    </span>

                                        <div style="">
                                            <div data-behavior="lazy_load_subscribers"
                                                 data-url="/2501285/projects/6590988/subscribers?subscribable_type=Upload"></div>
                                        </div>

                                        <div class="submit">
                                            <input class="action_button green" data-role="uploader" disabled="disabled"
                                                   name="commit" type="submit" value="Add this file"> or
                                            <a class="cancel" data-behavior="cancel" data-role="cancel"
                                               href="#">Cancel</a>
                                        </div>
                                    </footer>
                                </form>

                                <div class="limit storage reached notify" data-hidden-from="accountManager"
                                     style="display: none;">
                                    <form>
                                        <h1>You're out of storage space!</h1>
                                        <p>
                                            To upload more files, ask your Basecamp account owner to upgrade the
                                            account.<br>
                                            Just click the button below and we'll send them a quick reminder.
                                        </p>
                                        <a class="action_button green button" data-behavior="link_to_notify_owner"
                                           data-method="post" data-remote="true"
                                           href="/2501285/account/notification?type=storage" rel="nofollow">Notify your
                                            account owner</a> or
                                        <a class="decorated" data-behavior="cancel" data-role="cancel" href="#">Never
                                            mind</a>
                                    </form>
                                </div>


                                <div class="limit storage reached thanks" style="display:none"
                                     data-role="account_upgrade_notice">
                                    <form>
                                        <h1>Thanks, you're all set!</h1>

                                        <p>You've upgraded to the <strong>100 projects</strong> plan with <strong>40
                                            GB</strong> storage space.</p>

                                        <a class="action_button green button"
                                           data-behavior="account_upgrade_confirmation" href="#">Continue uploading
                                            files</a>
                                    </form>
                                </div>

                            </div>
                        </article>

                        <article class="blank_slate">
                            <header>
                                <img alt="Files" height="270"
                                     src="https://bcx.basecamp-static.com/assets/blank_slates/blank_slate_icon_files@2x-b7d234f97b1aa678c32d2ab1f3e38dbf.png"
                                     width="254">
                            </header>

                            <div class="blank_slate_body">
                                <h1>Upload the first file to share with the team.</h1>
                                <h3>Share files, documents, images, movies, screenshots, presentations, designs, or any
                                    other type of file with your entire team.</h3>
                                <p><a class="watch videothumb" data-behavior="open_videobox"
                                      data-video-src="//fast.wistia.net/embed/iframe/psi99hz46t" href="#">Watch a quick
                                    video about Files</a></p>
                            </div>
                        </article>


                        <section class="attachments">

                            <div class="grid_view in_3_columns" data-columns="3" data-role="index"
                                 data-type="attachments" data-scaled="true">
                                <div class="cell image" id="attachment_312251476" data-container-id="comment_579184130">
                                    <article class="attachment">
                                        <figure class="thumbnail proportional">
                                            <div class="background " data-role="content_container"
                                                 style="height: 373px; width: 277px;">
                                                <div class="image_details list_column">
                                                    <a data-attachment-id="312251476" data-behavior="enlargeable"
                                                       data-stacker="false"
                                                       href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/312251476/c4dca50987bca80d6f42449e97dd96fe.jpg"
                                                       class="hoverZoomLink">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail hoverZoomLink" data-attachment-id="312251476" data-audio-codec="null"
                           data-classes="image" data-container-id="comment_579184130" data-content-type="image/jpeg"
                           data-created-at="2017-11-25T15:36:41Z" data-creator-id="15531397" data-creator="Gopal S."
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/312251476/details"
                           data-download-path="/2501285/projects/6590988/attachments/312251476/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="c4dca50987bca80d6f42449e97dd96fe.jpg" data-filesize="34 KB" data-height="564"
                           data-image-id="312251476"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/312251476/6cf05226-d1f6-11e7-aa21-089e019fd4bb/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/312251476"
                           data-path="/2501285/projects/6590988/attachments/312251476"
                           data-perma-path="/2501285/projects/6590988/messages/74076213?enlarge=312251476#attachment_312251476"
                           data-previewable="true" data-storage-key="6cf05226-d1f6-11e7-aa21-089e019fd4bb"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/312251476/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="564"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/312251476/6cf05226-d1f6-11e7-aa21-089e019fd4bb/thumbnail.jpg"
                           data-scaled="true" style="width: 276px; height: 276px;"></span>
              </span>

                                                        <figcaption data-role="live_filter_highlight"
                                                                    style="width: 277px;">
                                                            <span class="file_name">c4dca50987bca80d6f42449e97dd96fe</span>.<span
                                                                class="file_extension">jpg</span>
                                                        </figcaption>


                                                        <div class="bucket">
                                                            Project: Random Projects
                                                        </div>

                                                        <div class="metadata_for_grid">
                                                            <span class="meta date">Added by Gopal S. on <time
                                                                    data-local="date" datetime="2017-11-25T15:36:41Z"
                                                                    data-localized="true"
                                                                    title="November 25, 2017 at 9:06pm ">Nov 25</time></span>
                                                            <span class="meta"> · </span>
                                                            <span class="meta filesize" data-behavior="direct_download"
                                                                  data-download-path="/2501285/projects/6590988/attachments/312251476/download"
                                                                  title="Download this image">34 KB
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="tags_and_comments">
                                                        <a href="/2501285/projects/6590988/messages/74076213">
                                                            <span class="pill comments">1 comment</span>
                                                        </a>
                                                        <div class="taggings" data-behavior="taggings"
                                                             data-url="/2501285/projects/6590988/taggings"
                                                             data-taggable-type="Attachment"
                                                             data-taggable-id="312251476"
                                                             data-role="tags_for_attachment_312251476">
                                                            <ul class="tags">

                                                            </ul>

                                                            <div class="edit_taggings"
                                                                 data-behavior="expandable expand_exclusively edit_taggings">
                                                                <a data-behavior="expand_on_click" href="#">Label...</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="list_column date">
                                                    <time data-local="date" datetime="2017-11-25T15:36:41Z"
                                                          data-localized="true" title="November 25, 2017 at 9:06pm ">Nov
                                                        25
                                                    </time>
                                                </div>

                                                <div class="list_column filesize">
                                                    34 KB
                                                </div>

                                                <div class="list_column creator">
                                                    Gopal S.
                                                </div>

                                                <div class="list_column actions">
                                                    <a class="button download" data-behavior="direct_download"
                                                       data-download-path="/2501285/projects/6590988/attachments/312251476/download"
                                                       href="#">Download</a>

                                                    <a class="button delete" data-creator-id="15531397"
                                                       data-method="post" data-remote="true"
                                                       data-visible-to="admin creator"
                                                       href="/2501285/projects/6590988/attachments/312251476/trash"
                                                       rel="nofollow" title="Delete this file">Delete</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                                <div class="cell image pdf" id="attachment_310543980"
                                     data-container-id="comment_575887321">
                                    <article class="attachment">
                                        <figure class="thumbnail proportional">
                                            <div class="background " data-role="content_container"
                                                 style="height: 373px; width: 277px;">
                                                <div class="image_details list_column">
                                                    <a data-attachment-id="310543980" data-behavior="enlargeable"
                                                       data-stacker="false"
                                                       href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/Website%2520Menu%2520items%2520draft%2520v1.2%2520%25281%2529.pdf">
                                                        <span class="thumbnail_wrap image pdf">
                                                            <span>
                                                                <img alt="" class="thumbnail"
                                                                     data-attachment-id="310543980"
                                                                     data-audio-codec="null"
                                                                     data-classes="image pdf"
                                                                     data-container-id="comment_575887321"
                                                                     data-content-type="application/pdf"
                                                                     data-created-at="2017-11-12T17:03:17Z"
                                                                     data-creator-id="6581649"
                                                                     data-creator="Deepanshu T." data-description="file"
                                                                     data-details-path="/2501285/projects/6590988/attachments/310543980/details"
                                                                     data-download-path="/2501285/projects/6590988/attachments/310543980/download"
                                                                     data-embeddable="true" data-extension="PDF"
                                                                     data-file-or-image="file"
                                                                     data-filename="Website Menu items draft v1.2 (1).pdf"
                                                                     data-filesize="215 KB"
                                                                     data-height="1240" data-image-id="310543980"
                                                                     data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/large.png"
                                                                     data-linked="null" data-max-size="700"
                                                                     data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980"
                                                                     data-path="/2501285/projects/6590988/attachments/310543980"
                                                                     data-perma-path="/2501285/projects/6590988/messages/73611012?enlarge=310543980#attachment_310543980"
                                                                     data-previewable="true"
                                                                     data-storage-key="5c57be52-c7cb-11e7-b971-047d7be9fbd4"
                                                                     data-thumbnail="true"
                                                                     data-trash-path="/2501285/projects/6590988/attachments/310543980/trash"
                                                                     data-trashed="false" data-type="pdf"
                                                                     data-video-codec="null" data-width="1754"
                                                                     src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/thumbnail.png"
                                                                     data-scaled="true"
                                                                     style="width: 276px; height: 195px;">
                                                            </span>
                                                        </span>

                                                        <figcaption data-role="live_filter_highlight"
                                                                    style="width: 277px;">
                                                            <span class="file_name">Website Menu items draft v1.2 (1)</span>.<span
                                                                class="file_extension">pdf</span>
                                                        </figcaption>


                                                        <div class="bucket">
                                                            Project: Random Projects
                                                        </div>

                                                        <div class="metadata_for_grid">
                                                            <span class="meta date">Added by Deepanshu T. on <time
                                                                    data-local="date" datetime="2017-11-12T17:03:17Z"
                                                                    data-localized="true"
                                                                    title="November 12, 2017 at 10:33pm ">Nov 12</time></span>
                                                            <span class="meta"> · </span>
                                                            <span class="meta filesize" data-behavior="direct_download"
                                                                  data-download-path="/2501285/projects/6590988/attachments/310543980/download"
                                                                  title="Download this file">215 KB</span>
                                                        </div>

                                                    </a>
                                                    <div class="tags_and_comments">
                                                        <a href="/2501285/projects/6590988/messages/73611012">
                                                            <span class="pill comments">
                                                                11 comments
                                                            </span>
                                                        </a>
                                                        <div class="taggings" data-behavior="taggings"
                                                             data-url="/2501285/projects/6590988/taggings"
                                                             data-taggable-type="Attachment"
                                                             data-taggable-id="310543980"
                                                             data-role="tags_for_attachment_310543980">
                                                            <ul class="tags">

                                                            </ul>

                                                            <div class="edit_taggings"
                                                                 data-behavior="expandable expand_exclusively edit_taggings">
                                                                <a data-behavior="expand_on_click" href="#">Label...</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="list_column date">
                                                    <time data-local="date" datetime="2017-11-12T17:03:17Z"
                                                          data-localized="true" title="November 12, 2017 at 10:33pm ">
                                                        Nov 12
                                                    </time>
                                                </div>

                                                <div class="list_column filesize">
                                                    215 KB
                                                </div>

                                                <div class="list_column creator">
                                                    Deepanshu T.
                                                </div>

                                                <div class="list_column actions">
                                                    <a class="button download" data-behavior="direct_download"
                                                       data-download-path="/2501285/projects/6590988/attachments/310543980/download"
                                                       href="#">Download</a>


                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>

                        </section>

                        <p class="more_files">
                            <a class="decorated" href="/2501285/projects/6590988/attachments">651 more files</a>
                        </p>
                    </section>

                    <section class="documents " data-collection-name="documents">
                        <header class="has_buttons">
                            <h1><a :href="'/project/'+projectId+'/'+projectName+'/documents'">Text Documents</a></h1>
                            <a class="action_button button"
                               :href="'/project/'+projectId+'/'+projectName+'/document/new'">Create a text document</a>
                        </header>

                        <p class="blank_slate">Keep notes and important information in Text Documents</p>

                        <section class="documents in_project project_documents">
                            <article class="document" id="document_12905846" data-behavior="link_container"
                                     v-for="doc in project.document_detail">

                                <div v-for="document in project.document_detail">

                                    <div class="wrapper">
                                        <div class="column icon">
                                            <span class="text-doc-icon"></span>
                                        </div>

                                        <div class="column content">
                                            <div class="document_page">
                                                <div class="wrap">
                                                    <header>

                                                        <a href="/2501285/projects/6590988/documents/12905846">
                                                            <h3 data-role="live_filter_highlight">
                                                                {{doc.document_title}}</h3>
                                                        </a>
                                                        <p class="project">From the project:
                                                            <a data-default-stack="true"
                                                               href="/2501285/projects/6590988">{{projectName}}</a>
                                                        </p>
                                                    </header>

                                                    <div class="formatted_content">{{doc.document_body}}</div>

                                                    <a :href="'/project/'+projectId+'/'+projectName+'/document/'+document.id">
                                                        <h3 data-role="live_filter_highlight">
                                                            {{document.document_title}}</h3>
                                                    </a>
                                                    <p class="project">From the project:
                                                        <a data-default-stack="true"
                                                           :href="'/project/'+projectId+'/'+projectName">{{projectName}}</a>
                                                    </p>


                                                    <div class="formatted_content">
                                                        {{document.document_body}}
                                                    </div>
                                                </div>

                                                <div class="truncated"></div>
                                            </div>
                                        </div>

                                        <div class="column date">
                                            <span class="description">on </span>
                                            <time data-local="date" datetime="2017-11-09T07:20:04Z"
                                                  title="November 9, 2017 at 12:50pm " data-localized="true">Nov 9
                                            </time>
                                        </div>

                                        <div class="column updater">
                                            <p class="project">From the project: {{projectName}}</p>

                                            <span class="action">

                                            <span class="description">Saved by</span> {{doc.created_by.name}}
                                            <span class="description">on
                                                <time data-local="date"
                                                      :datetime="doc.created_at"
                                                      :title="doc.created_at_noob"
                                                      data-localized="true">{{doc.created_at_human}}</time>
                                                <span class="description">Saved by</span> {{document.user_name}}
                                                <span class="description">on
                                                    <time data-local="date"
                                                          :datetime="document.created_at"
                                                          :title="document.created_at_noob"
                                                          data-localized="true">{{document.created_at_human}}</time>
                                                </span>
                                            </span>
                                        </span>
                                        </div>


                                        <div class="column actions">
                                            <a class="button edit"
                                               href="/2501285/projects/6590988/documents/12905846/edit">Edit…</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>

                        <p class="more_documents">
                            <a class="decorated" :href="home_page+'project/'+projectId+'/'+projectName+'/documents'">{{project.total_documents}}
                                &nbsp; more documents</a>
                        </p>
                    </section>

                    <section class="forwards" data-collection-name="forwards" style="display: none;">
                        <header class="has_buttons">
                            <h1><a :href="'/project/'+projectId+'/'+projectName+'/forwards'">Forwarded emails</a></h1>

                            <a class="action_button button" href="/2501285/projects/6590988/dropbox#emails">Forward an
                                email</a>
                        </header>

                        <p class="blank_slate">Forward emails into this project for safekeeping.</p>

                        <section class="forwards grouped_by_date">

                        </section>

                    </section>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'ProjectViewComponent',
        data() {
            return {
                open: true,
                projects: '',
                showError: '',
                projectId: '',
                projectName: '',
                totalTopics: '',
                project: '',

                home_page: '',
                result: '',
            }
        },
        mounted() {
            let self = this;

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");

            axios.get(this.home_page+'api/project/' + this.projectId + '/' + this.projectName)
                .then(function (response) {
                    console.log(response.data);
                    self.project = response.data;
                    self.projectId = response.data.project_id;
                    self.projectName = response.data.project_name;
                    self.totalTopics = response.data.total_topics;
                })
                .catch(function (error) {
                    console.log(error);
                });


            window.onscroll = function (ev) {
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                    // you're at the bottom of the page
                    console.log('you reached end');
                }
            };

        }
    }
</script>