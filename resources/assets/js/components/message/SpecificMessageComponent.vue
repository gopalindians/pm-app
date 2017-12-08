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
                            <a data-restore-position="" :href="home_page+'project/'+projectId+'/'+projectName+'/topics'">Discussions</a>
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
                                <a data-stacker="false" :href="home_page+'project/'+projectId+'/'+projectName">{{projectName}}</a></p>
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

                                                    <div @click="toggle" class="expanded_content"
                                                         v-bind:class="{ collapsed_content: clicked }">
                                                        <header class="text_entry no_shadow">
                                                            <div class="prompt" data-behavior="expand_on_click"
                                                                 role="button">Add a comment or upload a file…
                                                            </div>
                                                        </header>
                                                    </div>

                                                    <div class="collapsed_content"
                                                         v-bind:class="{ expanded_content: clicked }">
                                                        <form accept-charset="UTF-8"
                                                              action="/2501285/projects/6590988/comments"
                                                              class="new_comment" data-behavior="no_reset require_input"
                                                              data-remote="true" id="new_comment" method="post">
                                                            <div style="display:none"><input name="utf8" type="hidden"
                                                                                             value="✓"></div>
                                                            <header class="text_entry">
                                                                <input id="comment_commentable_type"
                                                                       name="comment[commentable_type]" type="hidden"
                                                                       value="Message">
                                                                <input id="comment_commentable_id"
                                                                       name="comment[commentable_id]" type="hidden"
                                                                       value="74076213">

                                                                <div data-behavior="wysiwyg_container"
                                                                     data-wysiwyg-follow-threshold="136">
                                                                    <div data-behavior="wysiwyg_toolbar" style="">
                                                                        <!--<a tabindex="-1" data-wysihtml5-command="bold"
                                                                           title="CTRL+B" href="javascript:;"
                                                                           unselectable="on">Bold</a>
                                                                        <a tabindex="-1" data-wysihtml5-command="italic"
                                                                           title="CTRL+I" href="javascript:;"
                                                                           unselectable="on">Italic</a>
                                                                        <a tabindex="-1"
                                                                           data-wysihtml5-command="insertUnorderedList"
                                                                           href="javascript:;"
                                                                           unselectable="on">Bullets</a>
                                                                        <a tabindex="-1"
                                                                           data-wysihtml5-command="insertOrderedList"
                                                                           href="javascript:;"
                                                                           unselectable="on">Numbers</a>
                                                                        <a tabindex="-1" data-wysihtml5-command="pre"
                                                                           href="javascript:;"
                                                                           unselectable="on">Quote</a>-->
                                                                    </div>
                                                                    <textarea autofocus="autofocus"
                                                                              class="comment_content"
                                                                              data-behavior="autosave autoresize wysiwyg dirty_tracking submit_on_control_enter"
                                                                              data-role="accept_as_input"
                                                                              id="comment_content"
                                                                              name="comment[content]" rows="4"
                                                                              data-autosave-storage-key="autosave:6d5a5119bfd361ab50cfb09df8050ebe"
                                                                              style="display: none;"
                                                                              placeholder="Type your comment here…"></textarea><input
                                                                        type="hidden" name="_wysihtml5_mode" value="1">
                                                                    <div class="formatted_content hidden"
                                                                         style="position: absolute; left: -9999px; top: 0px; word-wrap: break-word; font-size: 16px; font-family: &quot;Segoe UI&quot;, helvetica, arial, sans-serif; font-weight: 400; letter-spacing: 0px; line-height: 21px; text-decoration: none solid rgb(0, 0, 0); padding: 1px 0px 0px; text-rendering: auto; max-width: 535px;">
                                                                        <br></div>
                                                                    <iframe class="wysihtml5-sandbox"
                                                                            security="restricted"
                                                                            allowtransparency="true" frameborder="0"
                                                                            width="0" height="0" marginwidth="0"
                                                                            marginheight="0"
                                                                            style="display: inline-block; resize: none; min-height: 85px; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(0, 0, 0); border-style: none; border-width: 0px; clear: none; float: none; margin: 0px; outline: rgb(0, 0, 0) none 0px; outline-offset: 0px; padding: 0px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 0px; width: 534.594px; height: 84px;"
                                                                            data-behavior=" autoresize"
                                                                            data-autoresize="true"></iframe>
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
      <input name="file" type="file" multiple="" onchange="$(document).trigger('ie:change', this)" tabindex="-1">
      <a class="decorated" data-behavior="local_file_picker" href="#" tabindex="-1">select files from your computer…</a>
    </span>

                                                                        <span data-behavior="load_google_client"
                                                                              style="">
      or <a class="decorated" data-behavior="google_file_picker" href="#" tabindex="-1">Google Docs…</a>
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

                                                            </header>

                                                            <footer>
                                                                <div data-subscribers="/2501285/projects/6590988/subscribers?new_comment=true&amp;subscribable_id=74076213&amp;subscribable_type=Message"
                                                                     style="display: block;">
                                                                    <div class="subscribable" data-subscribers="[]">

                                                                        <div class="expanded_content">
                                                                            <span data-behavior="multiple_subscribers"
                                                                                  style="">
                                                                                <div
                                                                                        data-behavior="subscriber_list"
                                                                                        data-subscribable="comment"
                                                                                        data-new-subscribable="true"
                                                                                        data-people="[{&quot;id&quot;:&quot;person_6581649&quot;,&quot;person_id&quot;:6581649,&quot;name&quot;:&quot;Deepanshu Thakral&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_11648374&quot;,&quot;person_id&quot;:11648374,&quot;name&quot;:&quot;Deepika Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13182570&quot;,&quot;person_id&quot;:13182570,&quot;name&quot;:&quot;Harishanker .&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13182577&quot;,&quot;person_id&quot;:13182577,&quot;name&quot;:&quot;Surinder kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13361242&quot;,&quot;person_id&quot;:13361242,&quot;name&quot;:&quot;Aditi Mehra&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13489389&quot;,&quot;person_id&quot;:13489389,&quot;name&quot;:&quot;Prabhjot Kaur&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_13772519&quot;,&quot;person_id&quot;:13772519,&quot;name&quot;:&quot;Rupali&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_14779244&quot;,&quot;person_id&quot;:14779244,&quot;name&quot;:&quot;Ankush development&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15159411&quot;,&quot;person_id&quot;:15159411,&quot;name&quot;:&quot;Yograj&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15316135&quot;,&quot;person_id&quot;:15316135,&quot;name&quot;:&quot;Ashish Sharma&quot;,&quot;wants_notifications&quot;:true},{&quot;id&quot;:&quot;person_15531397&quot;,&quot;person_id&quot;:15531397,&quot;name&quot;:&quot;Gopal Sharma&quot;,&quot;wants_notifications&quot;:true}]"
                                                                                        data-client-ids="[]"
                                                                                        data-private="false"
                                                                                        data-groups="[{&quot;id&quot;:&quot;group_1202686&quot;,&quot;group_id&quot;:1202686,&quot;parent_id&quot;:null,&quot;name&quot;:&quot;Leading Edge Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_11651333&quot;,&quot;person_13182570&quot;,&quot;person_13182577&quot;,&quot;person_13361242&quot;,&quot;person_13489389&quot;,&quot;person_13772519&quot;]},{&quot;id&quot;:&quot;group_1623490&quot;,&quot;group_id&quot;:1623490,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;BD Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1623491&quot;,&quot;group_id&quot;:1623491,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Seo Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1623492&quot;,&quot;group_id&quot;:1623492,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;HR Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1697479&quot;,&quot;group_id&quot;:1697479,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;QA Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1794085&quot;,&quot;group_id&quot;:1794085,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Design Team&quot;,&quot;member_ids&quot;:[]},{&quot;id&quot;:&quot;group_1794086&quot;,&quot;group_id&quot;:1794086,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Php team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13182570&quot;,&quot;person_13489389&quot;]},{&quot;id&quot;:&quot;group_1943115&quot;,&quot;group_id&quot;:1943115,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;BD Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13361242&quot;]},{&quot;id&quot;:&quot;group_1954781&quot;,&quot;group_id&quot;:1954781,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Design Team&quot;,&quot;member_ids&quot;:[&quot;person_6581649&quot;,&quot;person_13182577&quot;,&quot;person_13772519&quot;]},{&quot;id&quot;:&quot;group_1954782&quot;,&quot;group_id&quot;:1954782,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;Seo Team&quot;,&quot;member_ids&quot;:[&quot;person_11651333&quot;]},{&quot;id&quot;:&quot;group_1954783&quot;,&quot;group_id&quot;:1954783,&quot;parent_id&quot;:1202686,&quot;name&quot;:&quot;hr team&quot;,&quot;member_ids&quot;:[]}]"
                                                                                        data-subscriber-ids="[]">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td class="subscribers">
                                                                                            <h4>Email
                                                                                                <span data-behavior="pluralize_subscribable_label">this comment</span> to people on the project:</h4><div
                                                                                                class="select_all_or_none"><a
                                                                                                href="#"
                                                                                                class="decorated select_everyone"
                                                                                                data-behavior="subscriber_select_all">Select all</a> |<a
                                                                                                href="#"
                                                                                                class="decorated select_everyone"
                                                                                                data-behavior="subscriber_select_none">Select none</a><a
                                                                                                href="#"
                                                                                                class="decorated select_everyone"
                                                                                                data-behavior="subscriber_select_remembered"
                                                                                                style="display:none">Select remembered (only included as a gateway for the label click)</a>
                                                                                        </div>
                                                                                            <div class="subscribers">
                                                                                                <div>
                                                                                                    <div class="column">
                                                                                                        <label data-subscriber-id="13361242"
                                                                                                               title="Aditi Mehra">
                                                                                                            <input name="comment[subscribers][]"
                                                                                                                   type="checkbox"
                                                                                                                   value="13361242">Aditi Mehra
                                                                                                        </label>
                                                                                                        <label data-subscriber-id="14779244"
                                                                                                               title="Ankush development"><input
                                                                                                                name="comment[subscribers][]"
                                                                                                                type="checkbox"
                                                                                                                value="14779244">Ankush development</label>
                                                                                                        <label data-subscriber-id="15316135"
                                                                                                               title="Ashish Sharma"><input
                                                                                                                name="comment[subscribers][]"
                                                                                                                type="checkbox"
                                                                                                                value="15316135">Ashish Sharma
                                                                                                        </label>
                                                                                                        <label data-subscriber-id="6581649"
                                                                                                               title="Deepanshu Thakral">
                                                                                                            <input name="comment[subscribers][]"
                                                                                                                   type="checkbox"
                                                                                                                   value="6581649">Deepanshu Thakral
                                                                                                        </label>
                                                                                                        <label data-subscriber-id="11648374"
                                                                                                               title="Deepika Sharma">
                                                                                                            <input name="comment[subscribers][]"
                                                                                                                   type="checkbox"
                                                                                                                   value="11648374">Deepika Sharma
                                                                                                        </label>
                                                                                                    </div>
                                                                                                    <div class="column">
                                                                                                        <label data-subscriber-id="13182570"
                                                                                                               title="Harishanker ."><input
                                                                                                                name="comment[subscribers][]"
                                                                                                                type="checkbox"
                                                                                                                value="13182570">Harishanker .</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="groups">
                                                                                            <h4>Select people from:</h4>
                                                                                            <div class="group_options">
                                                                                                <a href="#"
                                                                                                   data-member-ids="[6581649,13182570,13182577,13361242,13489389,13772519]"
                                                                                                   data-group-id="group_1202686">
                                                                                                    <span>Leading Edge Team</span>
                                                                                                </a>
                                                                                                <div class="subgroup_options">
                                                                                                    <a href="#"
                                                                                                       class="subgroup"
                                                                                                       data-member-ids="[6581649,13361242]"
                                                                                                       data-group-id="group_1943115"
                                                                                                       data-parent-group-id="group_1202686">
                                                                                                        <span>BD Team</span>
                                                                                                    </a>
                                                                                                    <a href="#"
                                                                                                       class="subgroup"
                                                                                                       data-member-ids="[6581649,13182577,13772519]"
                                                                                                       data-group-id="group_1954781"
                                                                                                       data-parent-group-id="group_1202686">
                                                                                                        <span>Design Team</span>
                                                                                                    </a>
                                                                                                    <a href="#"
                                                                                                       class="subgroup"
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

                                                                            <div class="share_note"
                                                                                 data-behavior="single_subscriber"
                                                                                 style="display:none;">
                                                                                <h4>You can share this with others:</h4>
                                                                                <span><a class="decorated"
                                                                                         href="/2501285/projects/6590988/accesses">Invite people to the project</a></span>
                                                                                so they can collaborate with you
                                                                            </div>

                                                                            <div class="subscribers ad-hoc"
                                                                                 data-behavior="expandable">
                                                                                <div class="collapsed_content">
                                                                                    <span><a class="decorated"
                                                                                             data-behavior="expand_on_click"
                                                                                             href="#">Loop-in someone who isn't on the project</a> to share this by email only<a
                                                                                            class="watch"
                                                                                            data-behavior="open_videobox"
                                                                                            data-video-src="//fast.wistia.net/embed/iframe/ne85k8gw8w"
                                                                                            href="#">(What is this?)</a></span>
                                                                                </div>

                                                                                <div class="expanded_content">
                                                                                    <h4>Loop-in someone who isn't on the
                                                                                        project to share this by email
                                                                                        only:</h4>

                                                                                    <div class="note">
                                                                                        They’ll see the whole
                                                                                        discussion, and they can reply
                                                                                        via email,
                                                                                        but they can’t see anything else
                                                                                        in the project.
                                                                                    </div>

                                                                                    <div class="fieldset"
                                                                                         data-behavior="adhoc_subscribers"
                                                                                         data-subscribable="comment"
                                                                                         data-disabled-people-ids="[&quot;person_6581649&quot;,&quot;person_11648374&quot;,&quot;person_13182570&quot;,&quot;person_13182577&quot;,&quot;person_13361242&quot;,&quot;person_13489389&quot;,&quot;person_13772519&quot;,&quot;person_14779244&quot;,&quot;person_15159411&quot;,&quot;person_15316135&quot;,&quot;person_15531397&quot;]"
                                                                                         data-outside-subscribers="[]">
                                                                                        <div class="person field blank">
                                                                                            <div class="autocomplete_people">
                                                                                                <label class="focused placeholder">Type
                                                                                                    a name or email
                                                                                                    address...</label>
                                                                                                <label class="blurred placeholder">Add
                                                                                                    another
                                                                                                    person...</label>
                                                                                                <input type="text"
                                                                                                       data-behavior="input_change_emitter"
                                                                                                       data-role="human_input"
                                                                                                       value="">
                                                                                                <input type="hidden"
                                                                                                       data-role="email_address_input"
                                                                                                       name="comment[new_subscriber_emails][]"
                                                                                                       value=""
                                                                                                       disabled="disabled">
                                                                                                <input type="hidden"
                                                                                                       data-role="person_id_input"
                                                                                                       name="comment[subscribers][]"
                                                                                                       value=""
                                                                                                       disabled="disabled">
                                                                                                <div class="suggestions"
                                                                                                     data-role="suggestions_view"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="submit">
                                                                    <input class="action_button green"
                                                                           data-role="uploader" name="commit"
                                                                           type="submit" value="Add this comment">
                                                                    <span class="hidden_from_client inactive">The client won’t see your comment</span>
                                                                </div>
                                                            </footer>
                                                        </form>
                                                    </div>
                                                </article>

                                                <span style="" data-role="topic_archiving_tool">
                                                    <a class="decorated"
                                                       data-creator-id="15531397"
                                                       data-method="put"
                                                       data-remote="true"
                                                       data-visible-to="admin creator"
                                                       href="/2501285/projects/6590988/topics/175663637/archive"
                                                       rel="nofollow">Archive this discussion</a>
                                                </span>
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


                                                        <p class="explanation">We’ll add a copy of this message to the
                                                            project you choose above. Changes you make to the copy won’t
                                                            affect the original.</p>


                                                        <p class="copy_options todolist">
                                                            <label style="display: none;"
                                                                   data-role="keep_comments_label">
                                                                <input name="copy_operation[keep_comments]"
                                                                       type="hidden" value="0"><input
                                                                    data-role="keep_comments_option"
                                                                    id="copy_operation_keep_comments"
                                                                    name="copy_operation[keep_comments]" type="checkbox"
                                                                    value="1">
                                                                Include original comments
                                                            </label>

                                                        </p>


                                                        <div class="submit">
                                                            <input class="action_button" data-behavior="tool_action"
                                                                   disabled="disabled" name="commit" type="submit"
                                                                   value="Copy and create project">
                                                            <a class="cancel" data-behavior="collapse_on_click"
                                                               href="#">Never mind</a>
                                                        </div>
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
                                                    <div class="no_destinations" data-role="no_destinations_notice">
                                                        <p>We can’t move this message because there’s nowhere else to
                                                            put it! You’ll be able to move it if you make more projects
                                                            or calendars.</p>
                                                        <a class="cancel" data-behavior="collapse_on_click" href="#">OK,
                                                            close this</a>
                                                    </div>
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
                home_page:''
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