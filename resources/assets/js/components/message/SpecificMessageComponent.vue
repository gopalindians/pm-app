<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 1000px;">
            <div class="panel sheet project inactive isnt_client_project" data-behavior=" " data-creator-id="6581649"
                 data-status="active" data-path="/2501285/projects/6590988">
                <header>
                    <h1>
                        <a data-restore-position=""
                           :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet topics has_sorting inactive" style="margin-left: 20px; margin-bottom: -20px;"
                     data-behavior=" prevent_reload_when_stacked">
                    <header>
                        <h1>
                            <a data-restore-position=""
                               :href="home_page+'project/'+projectId+'/'+projectName+'/topics'">Discussions</a>
                        </h1>
                    </header>
                    <div class="panel sheet message" style=" margin-left: 20px; margin-bottom: -20px;">
                        <div class="moved_notice">
                            <div class="body">
                                <div data-role="just_moved" style="display:none">
                                    <h1>
                                        <span data-role="move_operation_creator"></span> just moved this page<span
                                            data-role="destination_project_name"></span>.
                                    </h1>
                                    <p style="display:none" data-behavior="show_link_if_accessible">
                                        <a data-default-stack="true" href="" style="text-decoration: underline">See it
                                            in its new location</a> →
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="copied_notice">
                            <div class="body">
                                <div data-role="just_copied" style="display:none">
                                    <h1>
                                        <span data-role="copy_operation_creator"></span> just copied this page<span
                                            data-role="copy_destination_project_name"></span>.
                                    </h1>
                                    <p>
                                        <a data-behavior="close_copied_notice" href="#"
                                           style="text-decoration: underline">Go back to the original</a>
                                        <span style="display:none" data-behavior="show_copied_link_if_accessible">or <a
                                                data-default-stack="true" href="" style="text-decoration: underline">See it in its new location</a> →</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <header>
                            <h1 style="display: none;">Message</h1>
                            <p class="reference_to_project">Project:
                                <a data-stacker="false" :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a>
                            </p>
                        </header>

                        <div class="sheet_body">
                            <section class="perma">
                                <div id="message" class="has_tools" data-creator-id="15531397">
                                    <article class="message">
                                        <header>
                                            <h3>{{messageName}}</h3>
                                            <p>Posted by {{messageCreatorName}}
                                                <time data-local="time-ago" :datetime="messageCreatedAt"
                                                      :title="messageCreatedAtNoob">{{messageCreatedAtHuman}}
                                                </time>
                                            </p>
                                        </header>

                                        <a data-replace-stack="true" href="/2501285/people/15531397">
                                            <img :alt="messageCreatorName" class="avatar" height="59"
                                                 src="https://asset1.basecamp.com/2501285/people/15531397/photo/avatar.96.gif"
                                                 :title="messageCreatorName" width="59">
                                        </a>
                                        <div class="formatted_content" data-embeddable="" data-skip-stacker-links="">
                                            {{messageBody}}
                                        </div>

                                        <div class="attachments">
                                            <div id="attachments_for_message_74076213" class="partitioned_attachments ">
                                                <div class="attachments_actions">
                                                </div>
                                            </div>

                                        </div>

                                        <footer>
                                            <section class="comments" id="comments_for_message_74076213"
                                                     data-comments-count="0">
                                                <h4>Discuss this message</h4>


                                                <article class="comment" id="comment_579199320"
                                                         data-creator-id="15531397" v-for="comment in messageComments">
                                                    <a data-replace-stack="true" href="/2501285/people/15531397">
                                                        <img alt="Gopal Sharma" class="avatar" height="96"
                                                             src="https://asset1.basecamp.com/2501285/people/15531397/photo/avatar.96.gif"
                                                             :title="comment.comment_poster.name" width="96">
                                                    </a>

                                                    <div class="formatted_content" data-embeddable=""
                                                         data-skip-stacker-links="">
                                                        <strong>{{comment.comment_poster.name}}</strong> <br>
                                                        {{comment.comment}}
                                                    </div>

                                                    <footer class="time">
                                                        <a data-stacker="false"
                                                           href="/2501285/projects/6590988/messages/74076193#comment_579199320">Posted
                                                            <time data-local="time-ago" :datetime="comment.created_at"
                                                                  :title="comment.created_at_noob">
                                                                {{comment.created_at_human}}
                                                            </time>
                                                        </a>
                                                    </footer>

                                                    <div id="attachments_for_comment_579199320"
                                                         class="partitioned_attachments ">
                                                        <div class="attachments_actions">
                                                        </div>
                                                    </div>

                                                </article>


                                                <article class="comment new expanded"
                                                         data-behavior="expandable file_drop_target">
                                                    <img alt="" class="avatar" data-current-person-avatar="true"
                                                         src="https://asset1.basecamp.com/people/15531397/photo/avatar.96.gif"
                                                         :title="messageCreatorName">

                                                    <textarea name="topic_comment" width></textarea>
                                                </article>
                                            </section>
                                        </footer>
                                    </article>

                                    <aside class="tools" data-visible-to="creator admin" data-behavior="perma_tools">
                                        <div class="tool" data-behavior="tool">
                                            <a data-behavior="tool_action" data-replace-sheet="true"
                                               :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+messageId+'/edit'">Edit
                                            </a>
                                        </div>

                                        <div class="tool" data-behavior="tool expandable">
                                            <a data-behavior="expand_on_click hide_on_expand" href="#">Delete…</a>

                                            <span class="confirm" data-role="confirm_view">
                                                <a data-behavior="tool_action" data-method="post" data-remote="true"
                                                   href="/2501285/projects/6590988/messages/74076213/trash"
                                                   rel="nofollow">Delete this message?</a>
                                                <a class="cancel" data-behavior="collapse_on_click"
                                                   href="#">Never mind</a></span>
                                        </div>


                                        <div class="tool" data-visible-to="creator admin" data-skip_busy=""
                                             data-behavior="tool bucket_operation_tool expandable" data-label="Copy"
                                             data-new-bucket-operation-path="/2501285/copy_operations/new"
                                             data-bucket-operation-type="CopyOperation"
                                             data-source-resource-type="Message" data-source-resource-id="74076213"
                                             data-source-resource-human-name="message">
                                            <a data-behavior="expand_on_click hide_on_expand" href="#">Copy…</a>

                                            <div class="confirm" data-role="confirm_view">
                                                <div class="change" data-role="form">
                                                    <form accept-charset="UTF-8" action="/2501285/copy_operations"
                                                          class="new_copy_operation" id="new_copy_operation"
                                                          method="post">
                                                        <div style="display:none">
                                                            <input name="utf8" type="hidden"
                                                                   value="✓"><input
                                                                name="authenticity_token" type="hidden"
                                                                value="j2ptbJPQFcVvIzd6aGeGEwPv74v/63d3GdCH4yrgdas=">
                                                        </div>
                                                        <strong>Copy this message</strong>

                                                        <select data-role="destination_bucket_select"
                                                                disabled="disabled"
                                                                id="copy_operation_destination_bucket"
                                                                name="copy_operation[destination_bucket]">
                                                            <option value="">Loading…</option>
                                                        </select>


                                                        <p class="explanation">We’ll add a copy of this message to the
                                                            project you choose above. Changes you make to the copy won’t
                                                            affect the original.</p>


                                                        <p class="copy_options todolist">
                                                            <label style="display: none;"
                                                                   data-role="keep_comments_label">
                                                                <input name="copy_operation[keep_comments]"
                                                                       type="hidden" value="0"><input
                                                                    data-role="keep_comments_option"
                                                                    id="copy_operation_keep_wcomments"
                                                                    name="copy_operation[keep_comments]" type="checkbox"
                                                                    value="1">
                                                                Include original comments
                                                            </label>

                                                        </p>


                                                        <div class="submit">
                                                            <input class="action_button" data-behavior="tool_action"
                                                                   disabled="disabled" name="commit" type="submit"
                                                                   value="Copy this message">
                                                            <a class="cancel" data-behavior="collapse_on_click"
                                                               href="#">Never mind</a>
                                                        </div>
                                                    </form>
                                                    <div class="no_destinations" data-role="no_destinations_notice">
                                                        <p>We can’t copy this message because there’s nowhere else to
                                                            put it! You’ll be able to move it if you make more projects
                                                            or calendars.</p>
                                                        <a class="cancel" data-behavior="collapse_on_click" href="#">OK,
                                                            close this</a>
                                                    </div>
                                                </div>

                                                <div class="change" data-role="form_for_new_project"
                                                     style="display: none;">
                                                    <form accept-charset="UTF-8" action="/2501285/copy_operations"
                                                          class="new_copy_operation" id="new_copy_operation"
                                                          method="post">
                                                        <div style="display:none"><input name="utf8" type="hidden"
                                                                                         value="✓"><input
                                                                name="authenticity_token" type="hidden"
                                                                value="j2ptbJPQFcVvIzd6aGeGEwPv74v/63d3GdCH4yrgdas=">
                                                        </div>
                                                        <strong>Copy this to a new project</strong>

                                                        <input data-role="new_project_name"
                                                               id="copy_operation_new_project_name"
                                                               name="copy_operation[new_project_name]"
                                                               placeholder="Name the project" type="text">


                                                    </form>
                                                </div>

                                                <div class="confirm conflict" data-role="conflict">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tool" data-visible-to="creator admin" data-skip_busy=""
                                             data-behavior="tool bucket_operation_tool expandable" data-label="Move"
                                             data-new-bucket-operation-path="/2501285/move_operations/new"
                                             data-bucket-operation-type="MoveOperation"
                                             data-source-resource-type="Message" data-source-resource-id="74076213"
                                             data-source-resource-human-name="message">
                                            <a data-behavior="expand_on_click hide_on_expand" href="#">Move…</a>

                                            <div class="confirm" data-role="confirm_view">
                                                <div class="change" data-role="form">
                                                    <form accept-charset="UTF-8" action="/2501285/move_operations"
                                                          class="new_move_operation" id="new_move_operation"
                                                          method="post">
                                                        <div style="display:none"><input name="utf8" type="hidden"
                                                                                         value="✓"><input
                                                                name="authenticity_token" type="hidden"
                                                                value="j2ptbJPQFcVvIzd6aGeGEwPv74v/63d3GdCH4yrgdas=">
                                                        </div>
                                                        <strong>Move this message</strong>

                                                        <select data-role="destination_bucket_select"
                                                                disabled="disabled"
                                                                id="move_operation_destination_bucket"
                                                                name="move_operation[destination_bucket]">
                                                            <option value="">Loading…</option>
                                                        </select>


                                                        <div class="submit">
                                                            <input class="action_button" data-behavior="tool_action"
                                                                   disabled="disabled" name="commit" type="submit"
                                                                   value="Move this message">
                                                            <a class="cancel" data-behavior="collapse_on_click"
                                                               href="#">Never mind</a>
                                                        </div>
                                                    </form>

                                                </div>

                                                <div class="change" data-role="form_for_new_project"
                                                     style="display: none;">
                                                    <form accept-charset="UTF-8" action="/2501285/move_operations"
                                                          class="new_move_operation" id="new_move_operation"
                                                          method="post">
                                                        <div style="display:none"><input name="utf8" type="hidden"
                                                                                         value="✓"><input
                                                                name="authenticity_token" type="hidden"
                                                                value="j2ptbJPQFcVvIzd6aGeGEwPv74v/63d3GdCH4yrgdas=">
                                                        </div>
                                                        <strong>Move this to a new project</strong>

                                                        <input data-role="new_project_name"
                                                               id="move_operation_new_project_name"
                                                               name="move_operation[new_project_name]"
                                                               placeholder="Name the project" type="text">


                                                        <div class="submit">
                                                            <input class="action_button" data-behavior="tool_action"
                                                                   disabled="disabled" name="commit" type="submit"
                                                                   value="Move and create project">
                                                            <a class="cancel" data-behavior="collapse_on_click"
                                                               href="#">Never mind</a>
                                                        </div>

                                                        <div class="projects_limit_reached"
                                                             data-role="projects_limit_reached_notice">

                                                            <div class="limit projects reached notify"
                                                                 data-hidden-from="accountManager">

                                                                <h1>You're out of projects!</h1>

                                                                <p>To create more projects, ask your Basecamp account
                                                                    owner to upgrade the account.<br>
                                                                    Just click the button below and we'll send them a
                                                                    quick reminder.</p>

                                                                <a class="action_button green button"
                                                                   data-behavior="link_to_notify_owner"
                                                                   data-method="post" data-remote="true"
                                                                   href="/2501285/account/notification?type=projects"
                                                                   rel="nofollow">Notify your account owner</a> or
                                                                <a class="decorated" data-behavior="cancel_new_project"
                                                                   data-role="cancel" href="#">Never mind</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </aside>

                                </div>


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
        name: 'SpecificMessageComponent',
        data() {
            return {
                open: true,
                showError: '',
                projectId: '',
                projectName: '',
                csrf: '',
                clicked: false,

                messageId: '',
                messageName: '',
                messageBody: '',
                messageCreatorName: '',
                messageCreatedAt: '',
                messageCreatedAtHuman: '',
                messageCreatedAtNoob: '',

                messageComments: '',
                home_page: ''
            }
        },
        mounted() {


            let self = this;

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.csrf = document.querySelector("meta[name='csrf-token']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");
            this.messageId = document.querySelector("meta[name='message-id']").getAttribute("content");

            axios.get(this.home_page + 'api/project/' + this.projectId + '/' + this.projectName + '/messages' + '/' + this.messageId)
                .then(function (response) {
                    console.log(response.data);
                    self.messageName = response.data.topic_name;
                    self.messageBody = response.data.topic_body;
                    self.messageCreatorName = response.data.creater_name;
                    self.messageCreatedAt = response.data.topic_created_at;
                    self.messageCreatedAtHuman = response.data.topic_created_at_human;
                    self.messageCreatedAtNoob = response.data.topic_created_at_noob;
                    self.messageComments = response.data.topic_comments;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {
            toggle() {
                if (self.clicked) {
                    self.clicked = false;
                } else {
                    self.clicked = true;
                }
            }
        }
    }

</script>