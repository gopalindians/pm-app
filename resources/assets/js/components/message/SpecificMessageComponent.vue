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
                                            <a data-behavior="expand_on_click hide_on_expand" @click="del()" v-if="!showBeforeDelete"
                                               href="#">Delete…</a>

                                            <span data-role="confirm_view" v-if="showBeforeDelete">
                                                <a data-behavior="tool_action" data-method="post" data-remote="true"
                                                   :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+messageId+'/trash'"
                                                   rel="nofollow">Delete this message?</a>
                                                <a class="cancel" data-behavior="collapse_on_click" @click="undo()"
                                                   href="#">Never mind</a></span>
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
                home_page: '',
                showBeforeDelete: false
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
            },
            del() {
                this.showBeforeDelete = true;
            },
            undo(){
                this.showBeforeDelete = false;
            }
        }
    }

</script>