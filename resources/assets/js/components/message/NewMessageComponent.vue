<template>
    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="2" style="width: 1000;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active">
                <header>
                    <h1>
                        <a data-restore-position="" :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet message new" style="margin-left: 20; margin-bottom: -20;">
                    <title>{{projectName}}: Post a new message</title>
                    <header>
                        <h1 style="display: none">Post a new message</h1>
                    </header>
                    <div class="sheet_body">
                        <article class="message new expanded" data-behavior="expandable">
                            <form accept-charset="UTF-8"
                                  :action="home_page+'project/'+projectId+'/'+projectName+'/messages'"
                                  class="new_message" data-behavior="require_input" data-remote="true"
                                  id="new_message" method="post">
                                <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                                <input type="hidden" name="_token" :value="csrf"/>
                                <header>
                                    <h3>
                                        <div class="formatted_content hidden"
                                             style="position: absolute; left: -9999px;
                                              top: 0; word-wrap: break-word; font-size: 28px; font-family: Segue UI, helvetica, arial, sans-serif; font-weight: 400;
                                               letter-spacing: 0; line-height: 36px; text-decoration: none solid rgb(0, 0, 0);
                                              padding: 0 0 2px; text-rendering: auto; max-width: 830px;">
                                            Test
                                        </div>
                                        <textarea autofocus="autofocus"
                                                  data-behavior="autosave autoresize dirty_tracking"
                                                  data-role="accept_as_input" id="message_subject"
                                                  name="message[subject]"
                                                  placeholder="Type the subject of this message..." rows="1"
                                                  data-autoresize="true"
                                                  required
                                                  style="resize: none; overflow: hidden; min-height: 37px;"
                                                  data-autosave-storage-key="autosave:04e35ae58879813172c08ecfa54742f2"></textarea>
                                    </h3>
                                </header>
                                <div data-behavior="wysiwyg_container" data-wysiwyg-follow-threshold="116">
                                    <div data-behavior="wysiwyg_toolbar" style="">
                                        <!--<a tabindex="-1" data-wysihtml5-command="bold" title="CTRL+B"
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
                                    <textarea class="body"
                                              data-role="accept_as_input" id="message_content"
                                              name="message[content]" rows="7" placeholder="Type your message here..."
                                              data-dirty="true" required></textarea>
                                    <input type="hidden" name="_wysihtml5_mode" value="1">
                                    <div class="formatted_content hidden"
                                         style="position: absolute; left: -9999px; top: 0; word-wrap: break-word; font-size: 17px; font-family: Segue UI, helvetica, arial, sans-serif; font-weight: 400; letter-spacing: 0; line-height: 25px; text-decoration: none solid rgb(0, 0, 0); padding: 0; text-rendering: auto; max-width: 830;">
                                        Test message
                                    </div>
                                </div>

                                <footer data-behavior="compose_footer expandable">


                                    <br>



                                    <br>

                                    <div class="submit">
                                        <input class="action_button green" data-role="uploader" name="commit"
                                               type="submit" value="Post this message">
                                    </div>
                                </footer>
                            </form>
                        </article>
                    </div>
                </div>

            </div>
        </div>
    </div>

</template>
<script>
    export default {
        name: 'NewMessageComponent',
        data() {
            return {
                open: true,
                showError: '',
                projectId: '',
                projectName: '',
                csrf: '',


                home_page: '',
                result: '',
            }
        },
        mounted() {
            let self = this;

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.csrf = document.querySelector("meta[name='csrf-token']").getAttribute("content");
            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");

            /*axios.get(this.home_page+'api/projects')
                .then(function (response) {
                    self.projects = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });*/
        },
        methods: {}
    }

</script>