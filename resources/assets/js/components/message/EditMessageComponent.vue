<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 1000px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active">
                <header>
                    <h1>
                        <a data-restore-position="" :href="home_page+'project/'+projectId">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet topics has_sorting inactive" style="margin-left: 20px; margin-bottom: -20px;"
                     data-behavior=" prevent_reload_when_stacked">
                    <header>
                        <h1>
                            <a data-restore-position="" :href="home_page+'project/'+projectId+'/'+projectName+'/topics'">Discussions</a>
                        </h1>
                    </header>
                    <div class="panel sheet message new" style="margin-left: 20px; margin-bottom: -20px;">
                        <title>{{projectName}}: Post a new message</title>

                        <header>
                            <h1 style="display: none">Post a new message</h1>
                        </header>

                        <div class="sheet_body">
                            <article class="message new expanded" data-behavior="expandable">
                                <form accept-charset="UTF-8"
                                      :action="home_page+'project/'+projectId+'/'+projectName+'/messages/'+messageId+'/edit'"
                                      class="edit_message"
                                       method="POST">

                                    <input type="hidden" name="_token" :value="csrf">

                                    <div style="display:none">
                                        <input name="utf8" type="hidden" value="✓">
                                    </div>
                                    <header>
                                        <h3>
                                            <div class="formatted_content hidden"
                                                 style="position: absolute; left: -9999px; top: 0;
                                                  word-wrap: break-word; font-size: 28px; font-family:Segue UI, helvetica, arial, sans-serif;
                                                   font-weight: 400; letter-spacing: 0; line-height: 36px; text-decoration: none solid rgb(0, 0, 0);
                                                    padding: 0 0 2px; text-rendering: auto;
                                                  max-width: 830px;">
                                                {{messageName}}
                                            </div>
                                            <textarea autofocus="autofocus"
                                                      data-behavior="autosave autoresize dirty_tracking"
                                                      data-role="accept_as_input" id="message_subject"
                                                      name="message_name"
                                                      placeholder="Type the subject of this message..." rows="1"
                                                      data-autoresize="true"
                                                      style="resize: none; overflow: hidden; min-height: 37px;"

                                                      required
                                                      data-autosave-storage-key="autosave:ffffc0cb84516d6caf679d9e37086802">
                                                {{messageName}}</textarea>
                                        </h3>


                                    </header>

                                    <div data-behavior="wysiwyg_container" data-wysiwyg-follow-threshold="116" style="">
                                        <div  data-behavior="wysiwyg_toolbar"  style="display: block;">

                                            <!--    <a tabindex="-1" data-wysihtml5-command="bold" title="CTRL+B"
                                                   href="javascript:;" unselectable="on">Bold</a>
                                                <a tabindex="-1" data-wysihtml5-command="italic" title="CTRL+I"
                                                   href="javascript:;" unselectable="on">Italic</a>
                                                <a tabindex="-1" data-wysihtml5-command="insertUnorderedList"
                                                   href="javascript:;" unselectable="on">Bullets</a>
                                                <a tabindex="-1" data-wysihtml5-command="insertOrderedList"
                                                   href="javascript:;" unselectable="on">Numbers</a>
                                                <a tabindex="-1" data-wysihtml5-command="pre" href="javascript:;"
                                                   unselectable="on">Quote</a>-->
                                        </div>

                                        <textarea  class="body" rows="7" name="message_body" required></textarea>

                                        <textarea class="body"
                                                  data-behavior="autosave autoresize wysiwyg dirty_tracking submit_on_control_enter"
                                                  data-role="accept_as_input" id="message_content"
                                                  name="message[body]" rows="7"
                                                  data-autosave-storage-key="autosave:342232010cc2b9de5642e5a53f0edba5"
                                                  style="display: none;"
                                                  placeholder="Type your message here...">{{messageName}}</textarea>
                                        <input type="hidden"
                                               name="_wysihtml5_mode"
                                               value="1">
                                        <div class="formatted_content hidden"
                                             style="position: absolute; left: -9999px; top: 0;
                                              word-wrap: break-word; font-size: 17px; font-family: Segue UI, helvetica, arial, sans-serif; font-weight: 400; letter-spacing: 0; line-height: 25px;
                                              text-decoration: none solid rgb(0, 0, 0); padding: 1px 0 0; text-rendering: auto; max-width: 830px;">
                                            {{messageName}}
                                        </div>

                                        <!--<iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true"
                                                frameborder="0" width="0" height="0" marginwidth="0" marginheight="0"
                                                style="display: inline-block; background-color: rgb(255, 255, 255); border-collapse: separate;
                                                 border: 0 none rgb(0, 0, 0);clear: none; float: none; margin: 0; outline: rgb(0, 0, 0) none 0; outline-offset: 0; padding: 0 65px;
                                                 position: static; top: auto; left: auto;
                                                 right: auto; bottom: auto; z-index: auto;
                                                 vertical-align: baseline; text-align: start;
                                                 box-sizing: content-box;
                                                 box-shadow: none; border-radius: 0;
                                                 width: 830px; height: 175px; resize: none; min-height: 176px;"
                                                data-behavior=" autoresize" data-autoresize="true"></iframe>-->
                                    </div>




                                    <footer data-behavior="compose_footer expandable">
                                        <span data-role="privacy_toggle" style="display:none;">
                                            <label for="message_74076148_privacy_toggle">
                                                <input name="message[private]" type="hidden" value="0">
                                                <input data-behavior="toggle_private_visibility"
                                                       id="message_74076148_privacy_toggle" name="message[private]"
                                                       type="checkbox" value="1" title="overall type: UNKNOWN_TYPE
                                                       server type: NO_SERVER_DATA
                                                       heuristic type: UNKNOWN_TYPE
                                                       label: Don’t show this message to the client
                                                       parseable name: message[private]
                                                       field signature: 1649888584
                                                       form signature: 11015918875615214810"
                                                       autofill-prediction="UNKNOWN_TYPE"> Don’t show this message to the client
                                                <span data-behavior="client_list"></span>
                                            </label>
                                            <span class="position_reference"
                                                  data-behavior="expandable expand_exclusively">
                                                – <a class="decorated" data-behavior="expand_on_click" href="#">what's this?</a>

                                                <div class="balloon right_side expanded_content">
                                                    <span class="arrow"></span>
                                                    <span class="arrow"></span>
                                                    <span class="close"><a class="decorated"
                                                                           data-behavior="collapse_on_click" href="#">Close</a></span>
                                                    <h5>Working with clients?</h5>
                                                    <p>You can hide certain messages, to-dos, files, events, and text documents from people invited to this project as clients. This is great for sharing unfinished work with your team before getting client feedback.</p>
                                                    <p><a class="decorated"
                                                          href="/2501285/projects/6590988/accesses#client">Invite your first client to this project...</a></p>
                                                </div>
                                            </span>
                                            <br><br>
                                        </span>

                                        <span style="display:none;">
                                            <div data-behavior="lazy_load_subscribers"
                                                 data-url="/2501285/projects/6590988/subscribers?subscribable_id=74076148&amp;subscribable_type=Message">
                                                <div class="subscribable"
                                                     data-subscribers="[{&quot;id&quot;:13361242,&quot;name&quot;:&quot;Aditi Mehra&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:14779244,&quot;name&quot;:&quot;Ankush development&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:15316135,&quot;name&quot;:&quot;Ashish Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:6581649,&quot;name&quot;:&quot;Deepanshu Thakral&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:11648374,&quot;name&quot;:&quot;Deepika Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:13182570,&quot;name&quot;:&quot;Harishanker .&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:13489389,&quot;name&quot;:&quot;Prabhjot Kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:13772519,&quot;name&quot;:&quot;Rupali&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:13182577,&quot;name&quot;:&quot;Surinder kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:15159411,&quot;name&quot;:&quot;Yograj&quot;,&quot;wants_notifications&quot;:true}]">

                                                    <div class="expanded_content">
                                                        <span data-behavior="multiple_subscribers" style="">
                                                            <div data-behavior="subscriber_list"
                                                                 data-subscribable="message"
                                                                 data-new-subscribable="false"
                                                                 data-people="[{&quot;id&quot;:&quot;person_6581649&quot;,&quot;person_id&quot;:6581649,&quot;name&quot;:&quot;Deepanshu Thakral&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_11648374&quot;,&quot;person_id&quot;:11648374,&quot;name&quot;:&quot;Deepika Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13182570&quot;,&quot;person_id&quot;:13182570,&quot;name&quot;:&quot;Harishanker .&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13182577&quot;,&quot;person_id&quot;:13182577,&quot;name&quot;:&quot;Surinder kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13361242&quot;,&quot;person_id&quot;:13361242,&quot;name&quot;:&quot;Aditi Mehra&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13489389&quot;,&quot;person_id&quot;:13489389,&quot;name&quot;:&quot;Prabhjot Kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13772519&quot;,&quot;person_id&quot;:13772519,&quot;name&quot;:&quot;Rupali&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_14779244&quot;,&quot;person_id&quot;:14779244,&quot;name&quot;:&quot;Ankush development&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15159411&quot;,&quot;person_id&quot;:15159411,&quot;name&quot;:&quot;Yograj&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15316135&quot;,&quot;person_id&quot;:15316135,&quot;name&quot;:&quot;Ashish Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15531397&quot;,&quot;person_id&quot;:15531397,&quot;name&quot;:&quot;Gopal Sharma&quot;,&quot;wants_notifications&quot;:true}]"
                                                                 data-client-ids="[]" data-private="false"
                                                                 data-groups="[{&quot;id&quot;:&quot;group_1202686&quot;,&quot;group_id&quot;:1202686,&quot;parent_id&quot;:null,&quot;name&quot;:&quot;Leading Edge Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_11651333&quot;,&quot;person_13182570&quot;,&quot;person_13182577&quot;,&quot;person_13361242&quot;,&quot;person_13489389&quot;,&quot;person_13772519&quot;]},{&quot;id&quot;:&quot;group_1623490&quot;,&quot;group_id&quot;:1623490,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;BD Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1623491&quot;,&quot;group_id&quot;:1623491,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Seo Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1623492&quot;,&quot;group_id&quot;:1623492,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;HR Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1697479&quot;,&quot;group_id&quot;:1697479,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;QA Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1794085&quot;,&quot;group_id&quot;:1794085,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Design Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1794086&quot;,&quot;group_id&quot;:1794086,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Php team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13182570&quot;,&quot;person_13489389&quot;]},{&quot;id&quot;:&quot;group_1943115&quot;,&quot;group_id&quot;:1943115,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;BD Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13361242&quot;]},{&quot;id&quot;:&quot;group_1954781&quot;,&quot;group_id&quot;:1954781,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Design Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13182577&quot;,&quot;person_13772519&quot;]},{&quot;id&quot;:&quot;group_1954782&quot;,&quot;group_id&quot;:1954782,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Seo Team&quot;,&quot;member_ids&quot;:[&quot;person_11651333&quot;]},{&quot;id&quot;:&quot;group_1954783&quot;,&quot;group_id&quot;:1954783,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;hr team&quot;,&quot;member_ids&quot;:[]}]"
                                                                 data-subscriber-ids="[13361242,14779244,15316135,6581649,11648374,13182570,13489389,13772519,13182577,15159411]"><table>
                                                                <tbody>
                                                                <tr>
                                                                    <td class="subscribers">
                                                                        <h4>Email <span
                                                                                data-behavior="pluralize_subscribable_label">this message</span> to people on the project:</h4>
                                                                        <div class="select_all_or_none">
                                                                            <a href="#"
                                                                               class="decorated select_everyone"
                                                                               data-behavior="subscriber_select_all">Select all</a> |
                                                                            <a href="#"
                                                                               class="decorated select_everyone"
                                                                               data-behavior="subscriber_select_none">Select none</a>
                                                                            <a href="#"
                                                                               class="decorated select_everyone"
                                                                               data-behavior="subscriber_select_remembered"
                                                                               style="display:none">
                                                                                Select remembered (only included as a gateway for the label click)
                                                                            </a>
                                                                        </div>
                                                                        <div class="subscribers"><div>

                                                                            <div class="column">
                                                                                <label data-subscriber-id="13361242"
                                                                                       title="Aditi Mehra">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="13361242">
                                                                                    Aditi Mehra
                                                                                </label>

                                                                                <label data-subscriber-id="14779244"
                                                                                       title="Ankush development">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="14779244">
                                                                                    Ankush development
                                                                                </label>
                                                                                <label data-subscriber-id="15316135"
                                                                                       title="Ashish Sharma">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="15316135">Ashish Sharma</label>
                                                                                <label data-subscriber-id="6581649"
                                                                                       title="Deepanshu Thakral">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="6581649">Deepanshu Thakral</label>
                                                                            </div>
                                                                            <div class="column">
                                                                                <label data-subscriber-id="11648374"
                                                                                       title="Deepika Sharma">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="11648374">
                                                                                    Deepika Sharma
                                                                                </label>

                                                                                <label data-subscriber-id="13182570"
                                                                                       title="Harishanker .">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="13182570">
                                                                                    Harishanker .
                                                                                </label>

                                                                                <label data-subscriber-id="13489389"
                                                                                       title="Prabhjot Kaur">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="13489389">
                                                                                    Prabhjot Kaur
                                                                                </label>
                                                                            </div>

                                                                            <div class="column">

                                                                                <label data-subscriber-id="13772519"
                                                                                       title="Rupali">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="13772519">
                                                                                    Rupali
                                                                                </label>
                                                                                <label data-subscriber-id="13182577"
                                                                                       title="Surinder kaur">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="13182577">
                                                                                    Surinder kaur
                                                                                </label>

                                                                                <label data-subscriber-id="15159411"
                                                                                       title="Yograj">
                                                                                    <input name="message[subscribers][]"
                                                                                           type="checkbox"
                                                                                           value="15159411">
                                                                                    Yograj
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        </div>

                                                                    </td>



                                                                    <td class="groups">
                                                                        <h4>Select people from:</h4>
                                                                        <div class="group_options">
                                                                            <a href="#"
                                                                               data-member-ids="[6581649,13182570,13182577,13361242,13489389,13772519]"
                                                                               data-group-id="group_1202686"
                                                                               class="activated">
                                                                                <span>Leading Edge Team</span>
                                                                            </a>

                                                                            <div class="subgroup_options">
                                                                                <a href="#" class="subgroup activated"
                                                                                   data-member-ids="[6581649,13361242]"
                                                                                   data-group-id="group_1943115"
                                                                                   data-parent-group-id="group_1202686">
                                                                                    <span>BD Team</span>
                                                                                </a>

                                                                                <a href="#" class="subgroup activated"
                                                                                   data-member-ids="[6581649,13182577,13772519]"
                                                                                   data-group-id="group_1954781"
                                                                                   data-parent-group-id="group_1202686">
                                                                                    <span>Design Team</span>
                                                                                </a>
                                                                                <a href="#" class="subgroup activated"
                                                                                   data-member-ids="[6581649,13182570,13489389]"
                                                                                   data-group-id="group_1794086"
                                                                                   data-parent-group-id="group_1202686">
                                                                                    <span>Php team</span>
                                                                                </a>
                                                                            </div>

                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        </span>

                                                        <div class="share_note" data-behavior="single_subscriber"
                                                             style="display:none;">
                                                            <h4>You can share this with others:</h4>
                                                            <span><a class="decorated"
                                                                     href="/2501285/projects/6590988/accesses">Invite people to the project</a></span>
                                                            so they can collaborate with you
                                                        </div>

                                                        <div class="subscribers ad-hoc" data-behavior="expandable">
                                                            <div class="collapsed_content">
                                                                <span>
                                                                    <a class="decorated" data-behavior="expand_on_click"
                                                                       href="#">Loop-in someone who isn't on the project</a> to share this by email only
                                                                    <a class="watch" data-behavior="open_videobox"
                                                                       data-video-src="//fast.wistia.net/embed/iframe/ne85k8gw8w"
                                                                       href="#">(What is this?)</a>
                                                                </span>
                                                            </div>


                                                            <div class="expanded_content">
                                                                <h4>Loop-in someone who isn't on the project to share this by email only:</h4>

                                                                <div class="note">
                                                                    They’ll see the whole discussion, and they can reply via email, but they can’t see anything else in the project.</div>

                                                                <div class="fieldset" data-behavior="adhoc_subscribers"
                                                                     data-subscribable="message"
                                                                     data-disabled-people-ids="[&quot;person_6581649&quot;,&quot;person_11648374&quot;,&quot;person_13182570&quot;,&quot;person_13182577&quot;,&quot;person_13361242&quot;,&quot;person_13489389&quot;,&quot;person_13772519&quot;,&quot;person_14779244&quot;,&quot;person_15159411&quot;,&quot;person_15316135&quot;,&quot;person_15531397&quot;]"
                                                                     data-outside-subscribers="[]">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                        <div class="submit">
                                            <input class="action_button green" data-role="uploader" name="commit"
                                                   type="submit" value="Save changes"> or
                                            <a class="cancel" data-replace-sheet="true"
                                               :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+messageId">Cancel</a>
                                        </div>
                                    </footer>
                                </form>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: 'EditMessageComponent',
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

            axios.get(this.home_page+'api/project/' + this.projectId + '/' + this.projectName + '/messages' + '/' + this.messageId)
                .then(function (response) {
                    console.log(response.data);
                    self.messageName = response.data.topic_name;
                    self.messageBody = response.data.topic_body;
                    self.messageCreatorName = response.data.creater_name;
                    self.messageCreatedAt = response.data.topic_created_at;
                    self.messageCreatedAtHuman = response.data.topic_created_at_human;
                    self.messageCreatedAtNoob = response.data.topic_created_at_noob;
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