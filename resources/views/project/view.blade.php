@extends('layouts.app')

@section('title',  'Project xyz')

@section('content')

    <project-view-component></project-view-component>
   {{-- <div class="panel sheet project active isnt_client_project" data-behavior=" " data-creator-id="6581649"
         data-status="active">
        <title>{{$project[0]->project_name}}</title>

        <div class="archived_notice"><span>This project is locked and archived.</span>


        </div>
        <header>
            <div class="header_links">
                <a href="/2501285/projects/6590988/accesses">
                    <span class="link">Invite more people</span><br>
                    <span class="detail">11 people on this project</span>
                </a>
                <a href="/2501285/projects/6590988/summary">
                    <span class="link">Catch up</span><br>
                    <span class="detail">on recent changes</span>
                </a>
            </div>

            <h1>{{$project[0]->project_name}}</h1>

            <div data-behavior="edit_project_header expandable">
                <div class="collapsed_content">
                    <div class="position_reference">
                        <h1 class="field" data-behavior="editable_field_prompt"
                            style="width: auto; border-color: transparent;">
                            {{$project[0]->project_name}}
                        </h1>

                        <div class="star" data-behavior="project_star" data-project-id="6590988"
                             data-refresh-project-view="false"
                             title="Starring a project will highlight it on the projects index page"></div>
                    </div>

                </div>


            </div>


            <div id="project_toolbar_6590988" class="project_toolbar" data-autoview="">
                <div class="tools has_tools_in_project">


                    <div class="group in_project">


                        <a href="/2501285/projects/6590988/topics" data-tool-name="topics">
                            <span class=""><strong>334 Discussions</strong></span>
                        </a>


                        <a href="/2501285/projects/6590988/todolists" data-tool-name="todolists">
                            <span class=""><strong>3 To-dos</strong></span>
                        </a>


                        <a href="/2501285/projects/6590988/attachments" data-tool-name="attachments">
                            <span class=""><strong>656 Files</strong></span>
                        </a>


                        <a href="/2501285/projects/6590988/documents" data-tool-name="documents">
                            <span class=""><strong>24 Text documents</strong></span>
                        </a>

                        <a href="/2501285/projects/6590988/calendar_events" data-tool-name="calendar_events">
                            <span class=""><strong>Events</strong></span>
                        </a>


                    </div>


                </div>
            </div>
        </header>

        <article class="blank_slate">
            <div class="blank_slate_arrow"></div>
            <div class="blank_slate_body">
                <h1>Welcome to your project!</h1>
                <p>Basecamp is great for all kinds of projects, large and small. Kick things off by starting your first
                    discussion, creating a to-do list, or writing a new document.</p>
                <p><a class="watch videothumb" data-behavior="open_videobox"
                      data-video-src="//fast.wistia.net/embed/iframe/k13cmq87gw" href="#">Watch a quick video about how
                        Projects work</a></p>
            </div>
        </article>


        <div class="sheet_body">


            <div data-role="project_dates">
                <div id="project_dates_Project_6590988" class="project_dates" data-autoview="">
                </div>
            </div>


            <section class="events">
                <header>
                    <h1><a href="/2501285/projects/6590988/events">Latest project updates</a></h1>
                </header>

                <section id="events_project_6590988" class="activity project_events grouped_by_date"
                         data-behavior="project_events">
                    <div class="event_container" style="">
                        <div class="project chiral" style="display: none">
                            <a data-default-stack="true" href="/2501285/projects/6590988">Random Projects</a>
                        </div>

                        <article class="event chiral" data-bucket-identifier="project_6590988"
                                 data-datetime="2017-11-24T10:56:30Z" datetime="2017-11-24T10:56:30Z"
                                 data-event-id="1649884719" data-behavior="format_timeline group_by_date">

                            <div class="time">
                                <span class="time_only">
                                    <time data-format="%l:%M%P" data-local="time"
                                                              datetime="2017-11-24T10:56:30Z"
                                                              title="November 24, 2017 at 4:26pm "
                                                              data-localized="true">4:26pm</time>
                                </span>
                                <span class="time_ago"><time data-local="time-or-date" datetime="2017-11-24T10:56:30Z"
                                                             title="November 24, 2017 at 4:26pm ">4:26pm</time></span>
                            </div>

                            <div class="avatar">
                                <a data-stacker="false" href="/2501285/people/6581649"><img alt="Deepanshu Thakral"
                                                                                            class="avatar" height="48"
                                                                                            src="https://asset1.basecamp.com/2501285/people/6581649/photo/avatar.96.gif"
                                                                                            title="Deepanshu Thakral"
                                                                                            width="48"></a>
                            </div>

                            <div class="action"><span class="creator" data-creator-id="6581649">Deepanshu T.</span>

                                <span class="in_timeline">gave gopalindians@gmail.com access to the project<span
                                            class="suffix">:</span> Random Projects</span>
                                <span class="in_project">gave gopalindians@gmail.com access to the project<span
                                            class="suffix">:</span> Random Projects</span>

                                <span class="bucket hide_from_single_project_accounts"> in <a data-replace-stack="true" href="/2501285/projects/6590988">Random Projects</a></span>


                            </div>
                        </article>
                    </div>
                    <div class="event_container" style="">
                        <div class="project chiral" style="display: none">
                            <a data-default-stack="true" href="/2501285/projects/6590988">Random Projects</a>
                        </div>

                        <article class="event chiral" data-bucket-identifier="project_6590988"
                                 data-datetime="2017-11-24T10:17:37Z" datetime="2017-11-24T10:17:37Z"
                                 data-event-id="1649870730" data-behavior="format_timeline group_by_date">

                            <div class="time">
                                <span class="time_only"><time data-format="%l:%M%P" data-local="time"
                                                              datetime="2017-11-24T10:17:37Z"
                                                              title="November 24, 2017 at 3:47pm "
                                                              data-localized="true">3:47pm</time></span>
                                <span class="time_ago"><time data-local="time-or-date" datetime="2017-11-24T10:17:37Z"
                                                             title="November 24, 2017 at 3:47pm ">3:47pm</time></span>
                            </div>

                            <div class="avatar">
                                <a data-stacker="false" href="/2501285/people/13182577"><img alt="Surinder kaur"
                                                                                             class="avatar" height="48"
                                                                                             src="https://asset1.basecamp.com/2501285/people/13182577/photo/avatar.96.gif"
                                                                                             title="Surinder kaur"
                                                                                             width="48"></a>
                            </div>

                            <div class="action">
        <span class="creator" data-creator-id="13182577">
          Surinder k.
        </span>

                                <span class="in_timeline">commented on <a class="decorated" data-default-stack="true"
                                                                          href="/2501285/projects/6590988/todos/332901246#comment_579055299">Site Details</a></span>
                                <span class="in_project">commented on <a class="decorated"
                                                                         href="/2501285/projects/6590988/todos/332901246#comment_579055299">Site Details</a></span>

                                <span class="bucket hide_from_single_project_accounts">
            in <a data-replace-stack="true" href="/2501285/projects/6590988">Random Projects</a>
        </span>


                                <div class="excerpt">
                                    <div class="in_timeline comment">Task Completed: I have designed home page as per
                                        your requirement.. 1- Homepage banner add headline and call to action. Response:
                                        DONE, S...
                                    </div>
                                    <div class="in_project comment">Task Completed: I have designed home page as per
                                        your requirement.. 1- Homepage banner add headline and call to action. Response:
                                        DONE, See Screenshot: https://prnt.sc/helvlt 2- Products categories in a nice
                                        colour similar to website Response: DONE, I have added three collections same
                                        like reference website.. See Screenshot: https://prnt.sc/helwkq 3- Section below
                                        on homepage for content add text Response: DONE, See Screenshot:
                                        https://prnt.sc/helx8l 4- Add instagram feed on homepage Response: DONE, See
                                        Screenshot: https://prnt.sc/helxy0 5- ...
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="event_container" style="">
                        <div class="project chiral" style="display: none">
                            <a data-default-stack="true" href="/2501285/projects/6590988">Random Projects</a>
                        </div>

                        <article class="event chiral" data-bucket-identifier="project_6590988"
                                 data-datetime="2017-11-23T13:11:02Z" datetime="2017-11-23T13:11:02Z"
                                 data-event-id="1649582229" data-behavior="format_timeline group_by_date">

                            <div class="time">
                                <span class="time_only"><time data-format="%l:%M%P" data-local="time"
                                                              datetime="2017-11-23T13:11:02Z"
                                                              title="November 23, 2017 at 6:41pm "
                                                              data-localized="true">6:41pm</time></span>
                                <span class="time_ago"><time data-local="time-or-date" datetime="2017-11-23T13:11:02Z"
                                                             title="November 23, 2017 at 6:41pm ">Nov 23</time></span>
                            </div>

                            <div class="avatar">
                                <a data-stacker="false" href="/2501285/people/13182577"><img alt="Surinder kaur"
                                                                                             class="avatar" height="48"
                                                                                             src="https://asset1.basecamp.com/2501285/people/13182577/photo/avatar.96.gif"
                                                                                             title="Surinder kaur"
                                                                                             width="48"></a>
                            </div>

                            <div class="action">
        <span class="creator" data-creator-id="13182577">
          Surinder k.
        </span>

                                <span class="in_timeline">commented on <a class="decorated" data-default-stack="true"
                                                                          href="/2501285/projects/6590988/todos/332901246#comment_578935748">Site Details</a></span>
                                <span class="in_project">commented on <a class="decorated"
                                                                         href="/2501285/projects/6590988/todos/332901246#comment_578935748">Site Details</a></span>

                                <span class="bucket hide_from_single_project_accounts">
            in <a data-replace-stack="true" href="/2501285/projects/6590988">Random Projects</a>
        </span>


                                <div class="excerpt">
                                    <div class="in_timeline comment">Task Completed: Theme: I have currently used
                                        "Debut" theme and also renamed this theme with the name of "otheruk" Header:
                                        Customized and ...
                                    </div>
                                    <div class="in_project comment">Task Completed: Theme: I have currently used "Debut"
                                        theme and also renamed this theme with the name of "otheruk" Header: Customized
                                        and designed header according to reference.. - Added "call to action" button on
                                        header - Added top banner from reference website Please check:
                                        https://otheruk.myshopify.com/ Thanks
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>

                </section>


                <p class="more_events">
                    <a class="decorated" href="/2501285/projects/6590988/events">See all updates</a>
                </p>
            </section>

            <section class="topics " data-collection-name="topics">
                <header class="has_buttons">
                    <h1><a href="/2501285/projects/6590988/topics">Discussions</a></h1>
                    <a class="action_button button" href="/2501285/projects/6590988/messages/new">Post a new message</a>
                    <a class="watch videothumb" data-behavior="open_videobox"
                       data-video-src="//fast.wistia.net/embed/iframe/9y3mhq1gez" href="#">Watch a quick video about
                        Discussions</a>
                </header>

                <table class="inbox">
                    <tbody>
                    <tr class="topic todo_332901246" id="topic_175602683">
                        <td class="avatar">
                            <a href="/2501285/projects/6590988/todos/332901246"><img alt="Surinder kaur" class="avatar"
                                                                                     height="30"
                                                                                     src="https://asset1.basecamp.com/2501285/people/13182577/photo/avatar.40.gif"
                                                                                     title="Surinder kaur"
                                                                                     width="30"></a>
                        </td>

                        <td class="who">
                            <a href="/2501285/projects/6590988/todos/332901246">Surinder k.</a>
                        </td>

                        <td class="what">

                            <a href="/2501285/projects/6590988/todos/332901246">
                                <strong data-role="live_filter_highlight">Site Details</strong>
                                <span class="bucket_name">(Random Projects)</span>
                                <span class="excerpt"> - Task Completed: I have designed home page as per your requirement.. 1- Homepage banner add headline and call to action. Response: DONE, See Screenshot: https://prnt.sc/helvlt 2- Products categories in a nice colour similar to website Response: DONE, I have added three collections same like refere...</span>
                            </a>
                        </td>

                        <td class="when">
                            <a href="/2501285/projects/6590988/todos/332901246">
                                <time data-local="time-or-date" datetime="2017-11-24T10:17:37Z"
                                      title="November 24, 2017 at 3:47pm ">3:47pm
                                </time>
                            </a></td>

                        <td class="comments">
                            <a href="/2501285/projects/6590988/todos/332901246"><span
                                        class="pill comments circle">3</span></a>
                        </td>

                        <td class="actions">

                        </td>
                    </tr>
                    <tr class="topic todo_332901436" id="topic_175602894">
                        <td class="avatar">
                            <a href="/2501285/projects/6590988/todos/332901436"><img alt="Harishanker ." class="avatar"
                                                                                     height="30"
                                                                                     src="https://asset1.basecamp.com/2501285/people/13182570/photo/avatar.40.gif"
                                                                                     title="Harishanker ."
                                                                                     width="30"></a>
                        </td>

                        <td class="who">
                            <a href="/2501285/projects/6590988/todos/332901436">Harishanker ..</a>
                        </td>

                        <td class="what">

                            <a href="/2501285/projects/6590988/todos/332901436">
                                <strong data-role="live_filter_highlight">Login Details</strong>
                                <span class="bucket_name">(Random Projects)</span>
                                <span class="excerpt"> - Store URL : https://otheruk.myshopify.com/admin/ user : thakral.deepanshu@gmail.com Password : bkVm!BUN~n3z,}/]</span>
                            </a>
                        </td>

                        <td class="when">
                            <a href="/2501285/projects/6590988/todos/332901436">
                                <time data-local="time-or-date" datetime="2017-11-23T12:04:49Z"
                                      title="November 23, 2017 at 5:34pm ">Nov 23
                                </time>
                            </a></td>

                        <td class="comments">
                            <a href="/2501285/projects/6590988/todos/332901436"><span
                                        class="pill comments circle">1</span></a>
                        </td>

                        <td class="actions">

                        </td>
                    </tr>
                    <tr class="topic message_73906579" id="topic_175200057">
                        <td class="avatar">
                            <a href="/2501285/projects/6590988/messages/73906579"><img alt="Harishanker ."
                                                                                       class="avatar" height="30"
                                                                                       src="https://asset1.basecamp.com/2501285/people/13182570/photo/avatar.40.gif"
                                                                                       title="Harishanker ." width="30"></a>
                        </td>

                        <td class="who">
                            <a href="/2501285/projects/6590988/messages/73906579">Harishanker ..</a>
                        </td>

                        <td class="what">

                            <a href="/2501285/projects/6590988/messages/73906579">
                                <strong data-role="live_filter_highlight">Multiple asana project</strong>
                                <span class="bucket_name">(Random Projects)</span>
                                <span class="excerpt"> - Offline : 5hrs ------------------------ wordpress details : http://phoenixsiding.ca/wp-admin/ User : LeadAdmin Pass : welcome@123 I removed unwanted files, plugins &amp; themes. Updated wordpress from 4.6 to 4.9 It was very old version. Hopefully malware removed permanently. If still having same issu...</span>
                            </a>
                        </td>

                        <td class="when">
                            <a href="/2501285/projects/6590988/messages/73906579">
                                <time data-local="time-or-date" datetime="2017-11-17T12:01:57Z"
                                      title="November 17, 2017 at 5:31pm ">Nov 17
                                </time>
                            </a></td>

                        <td class="comments">
                            <a href="/2501285/projects/6590988/messages/73906579"><span
                                        class="pill comments circle">3</span></a>
                        </td>

                        <td class="actions">

                        </td>
                    </tr>
                    <tr class="topic message_73915727" id="topic_175223804">
                        <td class="avatar">
                            <a href="/2501285/projects/6590988/messages/73915727"><img alt="Ashish Sharma"
                                                                                       class="avatar" height="30"
                                                                                       src="https://asset1.basecamp.com/2501285/people/15316135/photo/avatar.40.gif"
                                                                                       title="Ashish Sharma" width="30"></a>
                        </td>

                        <td class="who">
                            <a href="/2501285/projects/6590988/messages/73915727">Ashish S.</a>
                        </td>

                        <td class="what">
                            <div class="attachments">
                                <figure>
                                    <img alt="" class="thumbnail" data-attachment-id="311348045" data-audio-codec="null"
                                         data-behavior="enlargeable" data-classes="image"
                                         data-container-id="comment_577469510" data-content-type="image/jpeg"
                                         data-created-at="2017-11-17T11:08:08Z" data-creator-id="15316135"
                                         data-creator="Ashish S." data-description="image"
                                         data-details-path="/2501285/projects/6590988/attachments/311348045/details"
                                         data-download-path="/2501285/projects/6590988/attachments/311348045/download"
                                         data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                                         data-filename="mock-up.jpg" data-filesize="2 MB" data-height="3522"
                                         data-image-id="311348045"
                                         data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045/91c1c5d2-cb87-11e7-a2d6-047d7be9fa86/large.jpg"
                                         data-linked="null" data-max-size="700"
                                         data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045"
                                         data-path="/2501285/projects/6590988/attachments/311348045"
                                         data-perma-path="/2501285/projects/6590988/messages/73915727?enlarge=311348045#attachment_311348045"
                                         data-previewable="true" data-storage-key="91c1c5d2-cb87-11e7-a2d6-047d7be9fa86"
                                         data-thumbnail="true"
                                         data-trash-path="/2501285/projects/6590988/attachments/311348045/trash"
                                         data-trashed="false" data-type="image" data-video-codec="null"
                                         data-width="1400"
                                         src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045/91c1c5d2-cb87-11e7-a2d6-047d7be9fa86/thumbnail.jpg">
                                </figure>

                            </div>

                            <a href="/2501285/projects/6590988/messages/73915727">
                                <strong data-role="live_filter_highlight">Need Mockup for
                                    https://www.casupplements.com/</strong>
                                <span class="bucket_name">(Random Projects)</span>
                                <span class="excerpt"> - Offline: 3.30hours I have Designed a mockup for www.casupplements.com Please check this mockup Thanks !</span>
                            </a>
                        </td>

                        <td class="when">
                            <a href="/2501285/projects/6590988/messages/73915727">
                                <time data-local="time-or-date" datetime="2017-11-17T11:08:08Z"
                                      title="November 17, 2017 at 4:38pm ">Nov 17
                                </time>
                            </a></td>

                        <td class="comments">
                            <a href="/2501285/projects/6590988/messages/73915727"><span
                                        class="pill comments circle">1</span></a>
                        </td>

                        <td class="actions">

                        </td>
                    </tr>
                    <tr class="topic message_73611012" id="topic_174398707">
                        <td class="avatar">
                            <a href="/2501285/projects/6590988/messages/73611012"><img alt="Ashish Sharma"
                                                                                       class="avatar" height="30"
                                                                                       src="https://asset1.basecamp.com/2501285/people/15316135/photo/avatar.40.gif"
                                                                                       title="Ashish Sharma" width="30"></a>
                        </td>

                        <td class="who">
                            <a href="/2501285/projects/6590988/messages/73611012">Ashish S.</a>
                        </td>

                        <td class="what">
                            <div class="attachments">
                                <figure>
                                    <img alt="" class="thumbnail" data-attachment-id="310543980" data-audio-codec="null"
                                         data-behavior="enlargeable" data-classes="image pdf"
                                         data-container-id="comment_575887321" data-content-type="application/pdf"
                                         data-created-at="2017-11-12T17:03:17Z" data-creator-id="6581649"
                                         data-creator="Deepanshu T." data-description="file"
                                         data-details-path="/2501285/projects/6590988/attachments/310543980/details"
                                         data-download-path="/2501285/projects/6590988/attachments/310543980/download"
                                         data-embeddable="true" data-extension="PDF" data-file-or-image="file"
                                         data-filename="Website Menu items draft v1.2 (1).pdf" data-filesize="215 KB"
                                         data-height="1240" data-image-id="310543980"
                                         data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/large.png"
                                         data-linked="null" data-max-size="700"
                                         data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980"
                                         data-path="/2501285/projects/6590988/attachments/310543980"
                                         data-perma-path="/2501285/projects/6590988/messages/73611012?enlarge=310543980#attachment_310543980"
                                         data-previewable="true" data-storage-key="5c57be52-c7cb-11e7-b971-047d7be9fbd4"
                                         data-thumbnail="true"
                                         data-trash-path="/2501285/projects/6590988/attachments/310543980/trash"
                                         data-trashed="false" data-type="pdf" data-video-codec="null" data-width="1754"
                                         src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/thumbnail.png">
                                </figure>
                                <figure>
                                    <img alt="" border="0" class="file_icon" data-attachment-id="310032422"
                                         data-audio-codec="null" data-behavior="enlargeable" data-classes="file"
                                         data-container-id="comment_574904535"
                                         data-content-type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                         data-created-at="2017-11-08T14:13:20Z" data-creator-id="6581649"
                                         data-creator="Deepanshu T." data-description="file"
                                         data-details-path="/2501285/projects/6590988/attachments/310032422/details"
                                         data-download-path="/2501285/projects/6590988/attachments/310032422/download"
                                         data-embeddable="false" data-extension="XLSX" data-file-or-image="file"
                                         data-filename="Menu items.xlsx" data-filesize="10 KB" data-height="18"
                                         data-image-id="310032422" data-large-height="200"
                                         data-large-src="https://bcx.basecamp-static.com/assets/file_icons/icon_XLSX_enormous-f5fb8f52562225be9d377dd63af0c4fa.png"
                                         data-large-width="160" data-linked="null" data-max-size="700"
                                         data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310032422"
                                         data-path="/2501285/projects/6590988/attachments/310032422"
                                         data-perma-path="/2501285/projects/6590988/messages/73611012?enlarge=310032422#attachment_310032422"
                                         data-previewable="false"
                                         data-storage-key="f7376e44-c48e-11e7-a7b1-e89a8fbdc1bb" data-thumbnail="false"
                                         data-trash-path="/2501285/projects/6590988/attachments/310032422/trash"
                                         data-trashed="false" data-type="file" data-video-codec="null" data-width="24"
                                         height="18"
                                         src="https://bcx.basecamp-static.com/assets/file_icons/icon_XLSX_small-039c4ac94a2ebac2002345080bbeccf0.png"
                                         title="Menu items.xlsx" width="24">
                                </figure>

                            </div>

                            <a href="/2501285/projects/6590988/messages/73611012">
                                <strong data-role="live_filter_highlight">ExSSA UK (WP-Site)</strong>
                                <span class="bucket_name">(Random Projects)</span>
                                <span class="excerpt"> - - Slider Remove: I have remove the slider from home page - Static pic: I have attached a static picture at slider portion Screenshot: http://prntscr.com/hb7jwx - Navigation Will be red background: i have changed the navigation background color with red Screenshot: http://prntscr.com/hb7kg1 - Drop...</span>
                            </a>
                        </td>

                        <td class="when">
                            <a href="/2501285/projects/6590988/messages/73611012">
                                <time data-local="time-or-date" datetime="2017-11-16T12:42:14Z"
                                      title="November 16, 2017 at 6:12pm ">Nov 16
                                </time>
                            </a></td>

                        <td class="comments">
                            <a href="/2501285/projects/6590988/messages/73611012"><span
                                        class="pill comments circle">11</span></a>
                        </td>

                        <td class="actions">

                        </td>
                    </tr>

                    </tbody>
                </table>

                <p class="more_topics">
                    <a class="decorated" href="/2501285/projects/6590988/topics">329 more discussions</a>
                </p>
            </section>


            <section class="todos " data-collection-name="todolists">
                <header class="has_buttons">
                    <h1><a href="/2501285/projects/6590988/todolists">To-do lists</a></h1>
                    <button data-behavior="new_todolist" class="action_button">Add a to-do list</button>
                    <a class="watch videothumb" data-behavior="open_videobox"
                       data-video-src="//fast.wistia.net/embed/iframe/mdat8c2onl" href="#">Watch a quick video about
                        To-Do Lists</a>
                </header>

                <article class="todolist new" data-behavior="expandable hide_buttons_on_expand">
                    <header class="expanded_content">
                        <form accept-charset="UTF-8" action="/2501285/projects/6590988/todolists" class="new_todolist"
                              data-remote="true" id="new_todolist" method="post">
                            <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                            <header class="text_entry">
                                <h3><input id="todolist_name" name="todolist[name]" size="10" type="text"
                                           value="Give the list a title"></h3>
                            </header>

                            <span class="privacy_toggle" data-role="privacy_toggle" style="display:none;">
        <label for="new_todolist_privacy_toggle"><input name="todolist[private]" type="hidden" value="0"><input
                    data-behavior="toggle_private_visibility" id="new_todolist_privacy_toggle" name="todolist[private]"
                    type="checkbox" value="1"> Don’t show this to-do list to the client <span
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

      </span>

                            <span style="display:none;"><div data-behavior="lazy_load_subscribers"
                                                             data-url="/2501285/projects/6590988/subscribers?subscribable_type=Todolist"></div></span>

                            <p class="submit">
                                <input name="commit" type="submit" value="Save and start adding to-dos"> or
                                <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                            </p>
                        </form>
                    </header>
                </article>


                <ul class="todolists" data-autoload-url="false" data-behavior="sortable_container"
                    data-sortable-type="todolist">
                    <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_49401648">
                        <article class="todolist" id="todolist_49401648"
                                 data-url="/2501285/projects/6590988/todolists/49401648" data-behavior="expandable">
                            <header class="collapsed_content" data-behavior="has_hover_content">
                                <div class="nubbin" data-behavior="nubbin hover_content">
                                    <div class="spacer"></div>
                                    <a class="image delete"
                                       data-confirm="Are you sure you want to delete this to-do list?"
                                       data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todolists/49401648/trash"
                                       rel="nofollow">Delete</a>
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
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todolists/49401648"
                                      class="edit_todolist" data-remote="true" id="edit_todolist_49401648"
                                      method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="_method" type="hidden" value="patch"></div>
                                    <header class="text_entry">
                                        <h3>
                                            <input id="todolist_name" name="todolist[name]" size="10" type="text"
                                                   value="Shopify Website Replica">
                                        </h3>

                                        <p><em>
                                                <textarea data-behavior="autoresize submit_on_enter"
                                                          id="todolist_description" name="todolist[description]"
                                                          placeholder="Optional: describe this list"
                                                          rows="1"></textarea>
                                            </em></p>
                                    </header>

                                    <span class="privacy_toggle" data-role="privacy_toggle">
          <label for="todolist_49401648_privacy_toggle"><input name="todolist[private]" type="hidden" value="0"><input
                      data-behavior="toggle_private_visibility" id="todolist_49401648_privacy_toggle"
                      name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client <span
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

        </span>

                                    <span style="display:none;"><div data-behavior="lazy_load_subscribers"
                                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=49401648&amp;subscribable_type=Todolist"></div></span>

                                    <p class="submit">
                                        <input name="commit" type="submit" value="Save changes"> or
                                        <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                    </p>
                                </form>
                            </header>

                            <ul class="todos " data-behavior="sortable_container" data-sortable-type="todo">

                                <li class="todo show" data-behavior="has_hover_content sortable"
                                    data-sortable-type="todo" data-url="/2501285/projects/6590988/todos/332901246"
                                    id="todo_332901246">
                                    <div class="nubbin" data-behavior="nubbin hover_content">
                                        <div class="spacer"></div>
                                        <a class="image delete"
                                           data-confirm="Are you sure you want to delete this to-do?" data-method="post"
                                           data-remote="true" href="/2501285/projects/6590988/todos/332901246/trash"
                                           rel="nofollow">Delete</a>
                                        <a class="edit" data-remote="true"
                                           data-url="/2501285/projects/6590988/todos/332901246/edit" href="#">Edit</a>
                                    </div>

                                    <div class="">
      <span class="wrapper">
        <input data-behavior="toggle" data-url="/2501285/projects/6590988/todos/332901246/toggle" name="todo_complete"
               type="checkbox" value="1">

        <span class="content" data-behavior="sortable_handle">
          <a href="/2501285/projects/6590988/todos/332901246">Site Details</a>
          <span class="content_for_perma">Site Details</span>
        </span>


          <span class="pill comments" data-comments-counter="">
            <a href="/2501285/projects/6590988/todos/332901246">3 comments</a>
          </span>

          <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos/332901246" class="edit_todo"
                data-remote="true" id="edit_todo_332901246" method="post"><div style="display:none"><input name="utf8"
                                                                                                           type="hidden"
                                                                                                           value="✓"><input
                          name="_method" type="hidden" value="patch"></div>
            <span style="position:relative">
  <span class="pill has_balloon blank"
        data-behavior="expandable expand_exclusively load_assignee_options hover_content">
    <a data-behavior="expand_on_click" href="#">
      <span data-behavior="assignee_name" data-blank-text="Unassigned">
          Unassigned
      </span>



      <time data-behavior="due_date" data-blank-text="No due date">
      </time>
</a>
    <span class="balloon right_side expanded_content">
      <span class="arrow"></span>
      <span class="arrow"></span>

      <label>
        <b>Assign this to-do to:</b>
        <select data-behavior="assignee_options" data-private="false" data-project-id="6590988" id="todo_assignee_code"
                name="todo[assignee_code]"><option value="⎈">Loading...</option></select>
      </label>

      <div data-display="email-warning-confirmation-on" class="email_notice confirmation">
        <p class="email_warning">
          <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
        </p>
        <p class="email_warning">Assign it anyway?</p>
        <p class="submit">
          <a class="action_button button" data-behavior="confirm_assignee_change" href="#">Yes, assign it</a>
          <a data-behavior="cancel_assignee_change" href="#">Cancel</a>
        </p>
      </div>

      <div data-display="email-warning-confirmation-off">
        <div class="email_notice">
            <p data-display="email-warning-on" style="display: none" class="alert">This person won’t get an email because they turned off email notifications</p>
            <p data-display="email-warning-off"
               style="display: none">The person you select will be notified by email</p>
        </div>

          <label class="due_date">
            <b>Set the due date:</b>
            <hr>
            <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
            <div data-behavior="date_picker" class="notranslate"></div>
          </label>

          <footer><a class="no_date decorated" data-behavior="no_due_date" href="#">No due date</a></footer>
      </div>

    </span>
</span></span>

</form>      </span>
                                    </div>
                                </li>
                                <li class="todo show" data-behavior="has_hover_content sortable"
                                    data-sortable-type="todo" data-url="/2501285/projects/6590988/todos/332901436"
                                    id="todo_332901436">
                                    <div class="nubbin" data-behavior="nubbin hover_content">
                                        <div class="spacer"></div>
                                        <a class="image delete"
                                           data-confirm="Are you sure you want to delete this to-do?" data-method="post"
                                           data-remote="true" href="/2501285/projects/6590988/todos/332901436/trash"
                                           rel="nofollow">Delete</a>
                                        <a class="edit" data-remote="true"
                                           data-url="/2501285/projects/6590988/todos/332901436/edit" href="#">Edit</a>
                                    </div>

                                    <div class="">
      <span class="wrapper">
        <input data-behavior="toggle" data-url="/2501285/projects/6590988/todos/332901436/toggle" name="todo_complete"
               type="checkbox" value="1">

        <span class="content" data-behavior="sortable_handle">
          <a href="/2501285/projects/6590988/todos/332901436">Login Details</a>
          <span class="content_for_perma">Login Details</span>
        </span>


          <span class="pill comments" data-comments-counter="">
            <a href="/2501285/projects/6590988/todos/332901436">1 comment</a>
          </span>

          <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos/332901436" class="edit_todo"
                data-remote="true" id="edit_todo_332901436" method="post"><div style="display:none"><input name="utf8"
                                                                                                           type="hidden"
                                                                                                           value="✓"><input
                          name="_method" type="hidden" value="patch"></div>
            <span style="position:relative">
  <span class="pill has_balloon blank"
        data-behavior="expandable expand_exclusively load_assignee_options hover_content">
    <a data-behavior="expand_on_click" href="#">
      <span data-behavior="assignee_name" data-blank-text="Unassigned">
          Unassigned
      </span>



      <time data-behavior="due_date" data-blank-text="No due date">
      </time>
</a>
    <span class="balloon right_side expanded_content">
      <span class="arrow"></span>
      <span class="arrow"></span>

      <label>
        <b>Assign this to-do to:</b>
        <select data-behavior="assignee_options" data-private="false" data-project-id="6590988" id="todo_assignee_code"
                name="todo[assignee_code]"><option value="⎈">Loading...</option></select>
      </label>

      <div data-display="email-warning-confirmation-on" class="email_notice confirmation">
        <p class="email_warning">
          <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
        </p>
        <p class="email_warning">Assign it anyway?</p>
        <p class="submit">
          <a class="action_button button" data-behavior="confirm_assignee_change" href="#">Yes, assign it</a>
          <a data-behavior="cancel_assignee_change" href="#">Cancel</a>
        </p>
      </div>

      <div data-display="email-warning-confirmation-off">
        <div class="email_notice">
            <p data-display="email-warning-on" style="display: none" class="alert">This person won’t get an email because they turned off email notifications</p>
            <p data-display="email-warning-off"
               style="display: none">The person you select will be notified by email</p>
        </div>

          <label class="due_date">
            <b>Set the due date:</b>
            <hr>
            <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
            <div data-behavior="date_picker" class="notranslate"></div>
          </label>

          <footer><a class="no_date decorated" data-behavior="no_due_date" href="#">No due date</a></footer>
      </div>

    </span>
</span></span>

</form>      </span>
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
                                                   value="49401648">

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
        <time data-behavior="due_date" data-blank-text="No due date">
            No due date
        </time>
</a>
      <span class="balloon right_side expanded_content">
        <span class="arrow"></span>
        <span class="arrow"></span>

          <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
          <div data-behavior="date_picker" class="notranslate"></div>
        <footer><a class="no_date" data-behavior="no_due_date" href="#">No due date</a></footer>
      </span>
    </span>
                                                </label>

                                                <div class="notification_info"
                                                     data-display="email-warning-confirmation-off">
                                                    <p class="warning" data-display="email-warning-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> won’t
                                                        get an email because they turned off email notifications.
                                                    </p>
                                                    <p data-display="email-warning-off email-message-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> will be
                                                        notified by email.
                                                    </p>
                                                </div>

                                                <div class="" data-behavior="expandable todo_attachments">
                                                    <div class="collapsed_content">
                                                        <a class="decorated expand_attachments"
                                                           data-behavior="expand_on_click" href="#">Attach files...</a>
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


                                                        <div data-behavior="picker_account_switcher"
                                                             class="picker_account_switcher">
                                                            <strong>You’re signed in to Google as <span
                                                                        data-role="picker_account_email"></span></strong>
                                                            <a data-behavior="google_account_switcher" href="#">Sign out
                                                                and use a different Google account</a>
                                                        </div>

                                                        <div data-behavior="google_connector" class="google_connector">
                                                            <p>
                                                                <b>Connect your Google account</b><br>
                                                                Before you can attach Google Docs in Basecamp, we’ll
                                                                need your OK first. Do you want to connect your account
                                                                now?
                                                            </p>
                                                            <p class="submit">
                                                                <button class="action_button"
                                                                        data-behavior="create_google_file_picker">Yes,
                                                                    connect my Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
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
                                                                        data-behavior="create_google_file_picker">
                                                                    Connect a Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
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
                    <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_48308664">
                        <article class="todolist" id="todolist_48308664"
                                 data-url="/2501285/projects/6590988/todolists/48308664" data-behavior="expandable">
                            <header class="collapsed_content" data-behavior="has_hover_content">
                                <div class="nubbin" data-behavior="nubbin hover_content">
                                    <div class="spacer"></div>
                                    <a class="image delete"
                                       data-confirm="Are you sure you want to delete this to-do list?"
                                       data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todolists/48308664/trash"
                                       rel="nofollow">Delete</a>
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
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todolists/48308664"
                                      class="edit_todolist" data-remote="true" id="edit_todolist_48308664"
                                      method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="_method" type="hidden" value="patch"></div>
                                    <header class="text_entry">
                                        <h3>
                                            <input id="todolist_name" name="todolist[name]" size="10" type="text"
                                                   value="Joomla Website Tasks (bestessayhub.com)">
                                        </h3>

                                        <p><em>
                                                <textarea data-behavior="autoresize submit_on_enter"
                                                          id="todolist_description" name="todolist[description]"
                                                          placeholder="Optional: describe this list"
                                                          rows="1"></textarea>
                                            </em></p>
                                    </header>

                                    <span class="privacy_toggle" data-role="privacy_toggle">
          <label for="todolist_48308664_privacy_toggle"><input name="todolist[private]" type="hidden" value="0"><input
                      data-behavior="toggle_private_visibility" id="todolist_48308664_privacy_toggle"
                      name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client <span
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

        </span>

                                    <span style="display:none;"><div data-behavior="lazy_load_subscribers"
                                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=48308664&amp;subscribable_type=Todolist"></div></span>

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
                                           data-confirm="Are you sure you want to delete this to-do?" data-method="post"
                                           data-remote="true" href="/2501285/projects/6590988/todos/324566530/trash"
                                           rel="nofollow">Delete</a>
                                        <a class="edit" data-remote="true"
                                           data-url="/2501285/projects/6590988/todos/324566530/edit" href="#">Edit</a>
                                    </div>

                                    <div class="">
      <span class="wrapper">
        <input data-behavior="toggle" data-url="/2501285/projects/6590988/todos/324566530/toggle" name="todo_complete"
               type="checkbox" value="1">

        <span class="content" data-behavior="sortable_handle">
          <a href="/2501285/projects/6590988/todos/324566530">Responsive of website</a>
          <span class="content_for_perma">Responsive of website</span>
        </span>


          <span class="pill comments" data-comments-counter="">
            <a href="/2501285/projects/6590988/todos/324566530">1 comment</a>
          </span>

          <form accept-charset="UTF-8" action="/2501285/projects/6590988/todos/324566530" class="edit_todo"
                data-remote="true" id="edit_todo_324566530" method="post"><div style="display:none"><input name="utf8"
                                                                                                           type="hidden"
                                                                                                           value="✓"><input
                          name="_method" type="hidden" value="patch"></div>
            <span style="position:relative">
  <span class="pill has_balloon" data-behavior="expandable expand_exclusively load_assignee_options">
    <a data-behavior="expand_on_click" href="#">
      <span data-behavior="assignee_name" data-blank-text="Unassigned">
          <span data-behavior="todo_assignee_present">Ashish Sharma</span>
      </span>



      <time data-behavior="due_date" data-blank-text="No due date">
      </time>
</a>
    <span class="balloon right_side expanded_content">
      <span class="arrow"></span>
      <span class="arrow"></span>

      <label>
        <b>Assign this to-do to:</b>
        <select data-assignee-code="p15316135" data-behavior="assignee_options" data-original-assignee-code="p15316135"
                data-private="false" data-project-id="6590988" id="todo_assignee_code" name="todo[assignee_code]"><option
                    value="⎈">Loading...</option></select>
      </label>

      <div data-display="email-warning-confirmation-on" class="email_notice confirmation">
        <p class="email_warning">
          <span data-role="assignee_first_name">This person</span> turned off email notifications and won’t get an email about this to-do.
        </p>
        <p class="email_warning">Assign it anyway?</p>
        <p class="submit">
          <a class="action_button button" data-behavior="confirm_assignee_change" href="#">Yes, assign it</a>
          <a data-behavior="cancel_assignee_change" href="#">Cancel</a>
        </p>
      </div>

      <div data-display="email-warning-confirmation-off">
        <div class="email_notice">
            <p data-display="email-warning-on" style="display: none" class="alert">This person won’t get an email because they turned off email notifications</p>
            <p data-display="email-warning-off"
               style="display: none">The person you select will be notified by email</p>
        </div>

          <label class="due_date">
            <b>Set the due date:</b>
            <hr>
            <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
            <div data-behavior="date_picker" class="notranslate"></div>
          </label>

          <footer><a class="no_date decorated" data-behavior="no_due_date" href="#">No due date</a></footer>
      </div>

    </span>
</span></span>

</form>      </span>
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
        <time data-behavior="due_date" data-blank-text="No due date">
            No due date
        </time>
</a>
      <span class="balloon right_side expanded_content">
        <span class="arrow"></span>
        <span class="arrow"></span>

          <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
          <div data-behavior="date_picker" class="notranslate"></div>
        <footer><a class="no_date" data-behavior="no_due_date" href="#">No due date</a></footer>
      </span>
    </span>
                                                </label>

                                                <div class="notification_info"
                                                     data-display="email-warning-confirmation-off">
                                                    <p class="warning" data-display="email-warning-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> won’t
                                                        get an email because they turned off email notifications.
                                                    </p>
                                                    <p data-display="email-warning-off email-message-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> will be
                                                        notified by email.
                                                    </p>
                                                </div>

                                                <div class="" data-behavior="expandable todo_attachments">
                                                    <div class="collapsed_content">
                                                        <a class="decorated expand_attachments"
                                                           data-behavior="expand_on_click" href="#">Attach files...</a>
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


                                                        <div data-behavior="picker_account_switcher"
                                                             class="picker_account_switcher">
                                                            <strong>You’re signed in to Google as <span
                                                                        data-role="picker_account_email"></span></strong>
                                                            <a data-behavior="google_account_switcher" href="#">Sign out
                                                                and use a different Google account</a>
                                                        </div>

                                                        <div data-behavior="google_connector" class="google_connector">
                                                            <p>
                                                                <b>Connect your Google account</b><br>
                                                                Before you can attach Google Docs in Basecamp, we’ll
                                                                need your OK first. Do you want to connect your account
                                                                now?
                                                            </p>
                                                            <p class="submit">
                                                                <button class="action_button"
                                                                        data-behavior="create_google_file_picker">Yes,
                                                                    connect my Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
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
                                                                        data-behavior="create_google_file_picker">
                                                                    Connect a Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
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
                    <li data-behavior="sortable" data-sortable-type="todolist" id="sortable_todolist_43978505">
                        <article class="todolist" id="todolist_43978505"
                                 data-url="/2501285/projects/6590988/todolists/43978505" data-behavior="expandable">
                            <header class="collapsed_content" data-behavior="has_hover_content">
                                <div class="nubbin" data-behavior="nubbin hover_content">
                                    <div class="spacer"></div>
                                    <a class="image delete"
                                       data-confirm="Are you sure you want to delete this to-do list?"
                                       data-method="post" data-remote="true"
                                       href="/2501285/projects/6590988/todolists/43978505/trash"
                                       rel="nofollow">Delete</a>
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
                                <form accept-charset="UTF-8" action="/2501285/projects/6590988/todolists/43978505"
                                      class="edit_todolist" data-remote="true" id="edit_todolist_43978505"
                                      method="post">
                                    <div style="display:none"><input name="utf8" type="hidden" value="✓"><input
                                                name="_method" type="hidden" value="patch"></div>
                                    <header class="text_entry">
                                        <h3>
                                            <input id="todolist_name" name="todolist[name]" size="10" type="text"
                                                   value="we have to make logo for this site .. http://beyourtherapist.com">
                                        </h3>

                                        <p><em>
                                                <textarea data-behavior="autoresize submit_on_enter"
                                                          id="todolist_description" name="todolist[description]"
                                                          placeholder="Optional: describe this list"
                                                          rows="1"></textarea>
                                            </em></p>
                                    </header>

                                    <span class="privacy_toggle" data-role="privacy_toggle">
          <label for="todolist_43978505_privacy_toggle"><input name="todolist[private]" type="hidden" value="0"><input
                      data-behavior="toggle_private_visibility" id="todolist_43978505_privacy_toggle"
                      name="todolist[private]" type="checkbox" value="1"> Don’t show this to-do list to the client <span
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

        </span>

                                    <span style="display:none;"><div data-behavior="lazy_load_subscribers"
                                                                     data-url="/2501285/projects/6590988/subscribers?subscribable_id=43978505&amp;subscribable_type=Todolist"></div></span>

                                    <p class="submit">
                                        <input name="commit" type="submit" value="Save changes"> or
                                        <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                    </p>
                                </form>
                            </header>

                            <ul class="todos empty" data-behavior="sortable_container" data-sortable-type="todo">


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
                                                   value="43978505">

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
        <time data-behavior="due_date" data-blank-text="No due date">
            No due date
        </time>
</a>
      <span class="balloon right_side expanded_content">
        <span class="arrow"></span>
        <span class="arrow"></span>

          <input data-behavior="alt_date_field" name="todo[due_at]" type="hidden">
          <div data-behavior="date_picker" class="notranslate"></div>
        <footer><a class="no_date" data-behavior="no_due_date" href="#">No due date</a></footer>
      </span>
    </span>
                                                </label>

                                                <div class="notification_info"
                                                     data-display="email-warning-confirmation-off">
                                                    <p class="warning" data-display="email-warning-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> won’t
                                                        get an email because they turned off email notifications.
                                                    </p>
                                                    <p data-display="email-warning-off email-message-on"
                                                       style="display: none">
                                                        <span data-role="assignee_first_name">This person</span> will be
                                                        notified by email.
                                                    </p>
                                                </div>

                                                <div class="" data-behavior="expandable todo_attachments">
                                                    <div class="collapsed_content">
                                                        <a class="decorated expand_attachments"
                                                           data-behavior="expand_on_click" href="#">Attach files...</a>
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


                                                        <div data-behavior="picker_account_switcher"
                                                             class="picker_account_switcher">
                                                            <strong>You’re signed in to Google as <span
                                                                        data-role="picker_account_email"></span></strong>
                                                            <a data-behavior="google_account_switcher" href="#">Sign out
                                                                and use a different Google account</a>
                                                        </div>

                                                        <div data-behavior="google_connector" class="google_connector">
                                                            <p>
                                                                <b>Connect your Google account</b><br>
                                                                Before you can attach Google Docs in Basecamp, we’ll
                                                                need your OK first. Do you want to connect your account
                                                                now?
                                                            </p>
                                                            <p class="submit">
                                                                <button class="action_button"
                                                                        data-behavior="create_google_file_picker">Yes,
                                                                    connect my Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
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
                                                                        data-behavior="create_google_file_picker">
                                                                    Connect a Google account
                                                                </button>
                                                                or <a data-behavior="cancel_google_connect" href="#">Cancel</a>
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
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

                <div class="more_lists">

                    <p class="completed">
                        <a class="decorated" href="/2501285/projects/6590988/todolists/completed">56 completed
                            to-dos</a>

                        across 26 to-do lists
                    </p>

                    <p class="completed">
                        Completed lists: <a class="decorated" href="/2501285/projects/6590988/todolists/46596032">
                            Gymreapers.com</a>, <a class="decorated"
                                                   href="/2501285/projects/6590988/todolists/43680349">Akal Transport
                            site updates</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/41462649">Amit
                            Site</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/42493730">Design
                            banner for VT Technologies </a>, <a class="decorated"
                                                                href="/2501285/projects/6590988/todolists/45860007">Elephant
                            Craze</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/40194504">Fix
                            responsiveness on https://noowavesupplements.com</a>, <a class="decorated"
                                                                                     href="/2501285/projects/6590988/todolists/41480146">Learn
                            today champion tomorrow car site http://www.eguards.org.uk/</a>, <a class="decorated"
                                                                                                href="/2501285/projects/6590988/todolists/40292811">Mockup
                            for Digital marketing website : http://brainsonrent.com/</a>, <a class="decorated"
                                                                                             href="/2501285/projects/6590988/todolists/38957683">MyWay
                            Logo Designing</a>, <a class="decorated"
                                                   href="/2501285/projects/6590988/todolists/38437800">NGO website from
                            scratch - HSPG ( Wordpress )</a>, <a class="decorated"
                                                                 href="/2501285/projects/6590988/todolists/41311047">One
                            Call Camroon</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/31554006">Random
                            Tasks</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/39273630">Redesign
                            Wordpress Site : http://allcodersofttech.com/mani/songhailabs/</a>, <a class="decorated"
                                                                                                   href="/2501285/projects/6590988/todolists/39566096">Redesign
                            of www.akaltrans.com</a>, <a class="decorated"
                                                         href="/2501285/projects/6590988/todolists/40142763">Shopify
                            Customization Tasks</a>, <a class="decorated"
                                                        href="/2501285/projects/6590988/todolists/39283739">Stephen
                            Electiric Website (Review)</a>, <a class="decorated"
                                                               href="/2501285/projects/6590988/todolists/42533398">Telecomsoftwares.com</a>,
                        <a class="decorated" href="/2501285/projects/6590988/todolists/37087524">To Do List</a>, <a
                                class="decorated" href="/2501285/projects/6590988/todolists/40448295">Updates :
                            countrycarpetcleanng.com.au</a>, <a class="decorated"
                                                                href="/2501285/projects/6590988/todolists/40292913">Website
                            Hack Error on Google for http://idealtherapypractice.com/</a>, <a class="decorated"
                                                                                              href="/2501285/projects/6590988/todolists/40771650">WordPress
                            MemberPress &amp; Header Task</a>, <a class="decorated"
                                                                  href="/2501285/projects/6590988/todolists/40476400">WordPress
                            Template Customization </a>, <a class="decorated"
                                                            href="/2501285/projects/6590988/todolists/40112638">boostrap
                            4 page website</a>, <a class="decorated"
                                                   href="/2501285/projects/6590988/todolists/39635201">http://merksonelectric.com/</a>,
                        <a class="decorated" href="/2501285/projects/6590988/todolists/41571236">mobile rendering fix
                            up</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/34632608">test
                            tasks</a>, <a class="decorated" href="/2501285/projects/6590988/todolists/39993001">window
                            fish site</a>
                    </p>
                </div>
            </section>

            <section class="project_attachments " data-collection-name="attachments">
                <header class="has_buttons">
                    <h1><a href="/2501285/projects/6590988/attachments">Files</a></h1>
                    <button data-behavior="new_upload file_drop_target" class="action_button">Add files</button>
                    <a class="watch videothumb" data-behavior="open_videobox"
                       data-video-src="//fast.wistia.net/embed/iframe/psi99hz46t" href="#">Watch a quick video about
                        Files</a>
                </header>

                <article class="upload new" data-behavior="expandable file_drop_target hide_buttons_on_expand">
                    <div class="expanded_content bubble">
                        <form accept-charset="UTF-8" action="/2501285/projects/6590988/uploads" class="new_upload"
                              data-behavior="no_reset toggle_file_label require_input" data-remote="true"
                              data-role="account_upgrade_wrapper" id="new_upload" method="post">
                            <div style="display:none"><input name="utf8" type="hidden" value="✓"></div>
                            <header class="text_entry">


                                <div class="limit storage prod notify" data-hidden-from="accountManager"
                                     data-behavior="link_to_notify_owner_thanks" style="display: block;">
                                    <p>You're almost out of storage space! <a data-behavior="link_to_notify_owner"
                                                                              data-method="post" data-remote="true"
                                                                              href="/2501285/account/notification?type=storage"
                                                                              rel="nofollow">Notify your account
                                            owner</a></p>
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

                                    <ul class="pending_attachments ui-sortable" data-role="accept_as_input"></ul>
                                </div>


                                <div data-behavior="picker_account_switcher" class="picker_account_switcher">
                                    <strong>You’re signed in to Google as <span data-role="picker_account_email"></span></strong>
                                    <a data-behavior="google_account_switcher" href="#">Sign out and use a different
                                        Google account</a>
                                </div>

                                <div data-behavior="google_connector" class="google_connector">
                                    <p>
                                        <b>Connect your Google account</b><br>
                                        Before you can attach Google Docs in Basecamp, we’ll need your OK first. Do you
                                        want to connect your account now?
                                    </p>
                                    <p class="submit">
                                        <button class="action_button" data-behavior="create_google_file_picker">Yes,
                                            connect my Google account
                                        </button>
                                        or <a data-behavior="cancel_google_connect" href="#">Cancel</a></p>
                                </div>

                                <div data-behavior="google_connector_access_denied" class="google_connector">
                                    <p>
                                        <b>Basecamp couldn’t access your Google account</b><br>
                                        To attach Google Docs, you’ll need to give Basecamp permission. Do you want to
                                        try again?
                                    </p>
                                    <p class="submit">
                                        <button class="action_button" data-behavior="create_google_file_picker">Connect
                                            a Google account
                                        </button>
                                        or <a data-behavior="cancel_google_connect" href="#">Cancel</a></p>
                                </div>

                            </header>

                            <footer>
    <span data-role="privacy_toggle" style="display:none;">
      <label for="new_upload_privacy_toggle"><input name="upload[private]" type="hidden" value="0"><input
                  data-behavior="toggle_private_visibility" id="new_upload_privacy_toggle" name="upload[private]"
                  type="checkbox" value="1"> Don’t show <span
                  data-behavior="pluralize_subscribable_label">this file</span> to the client <span
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
                                    <a class="cancel" data-behavior="cancel" data-role="cancel" href="#">Cancel</a>
                                </div>
                            </footer>
                        </form>

                        <div class="limit storage reached notify" data-hidden-from="accountManager"
                             style="display: none;">
                            <form>
                                <h1>You're out of storage space!</h1>
                                <p>
                                    To upload more files, ask your Basecamp account owner to upgrade the account.<br>
                                    Just click the button below and we'll send them a quick reminder.
                                </p>
                                <a class="action_button green button" data-behavior="link_to_notify_owner"
                                   data-method="post" data-remote="true"
                                   href="/2501285/account/notification?type=storage" rel="nofollow">Notify your account
                                    owner</a> or
                                <a class="decorated" data-behavior="cancel" data-role="cancel" href="#">Never mind</a>
                            </form>
                        </div>


                        <div class="limit storage reached thanks" style="display:none"
                             data-role="account_upgrade_notice">
                            <form>
                                <h1>Thanks, you're all set!</h1>

                                <p>You've upgraded to the <strong>100 projects</strong> plan with <strong>40 GB</strong>
                                    storage space.</p>

                                <a class="action_button green button" data-behavior="account_upgrade_confirmation"
                                   href="#">Continue uploading files</a>
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
                        <h3>Share files, documents, images, movies, screenshots, presentations, designs, or any other
                            type of file with your entire team.</h3>
                        <p><a class="watch videothumb" data-behavior="open_videobox"
                              data-video-src="//fast.wistia.net/embed/iframe/psi99hz46t" href="#">Watch a quick video
                                about Files</a></p>
                    </div>
                </article>


                <section class="attachments">

                    <div class="grid_view in_3_columns" data-columns="3" data-role="index" data-type="attachments"
                         data-scaled="true">
                        <div class="cell image" id="attachment_311348045" data-container-id="comment_577469510">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 356px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="311348045" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045/mock-up.jpg">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail" data-attachment-id="311348045" data-audio-codec="null"
                           data-classes="image" data-container-id="comment_577469510" data-content-type="image/jpeg"
                           data-created-at="2017-11-17T11:08:08Z" data-creator-id="15316135" data-creator="Ashish S."
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/311348045/details"
                           data-download-path="/2501285/projects/6590988/attachments/311348045/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="mock-up.jpg" data-filesize="2 MB" data-height="3522" data-image-id="311348045"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045/91c1c5d2-cb87-11e7-a2d6-047d7be9fa86/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045"
                           data-path="/2501285/projects/6590988/attachments/311348045"
                           data-perma-path="/2501285/projects/6590988/messages/73915727?enlarge=311348045#attachment_311348045"
                           data-previewable="true" data-storage-key="91c1c5d2-cb87-11e7-a2d6-047d7be9fa86"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/311348045/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="1400"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/311348045/91c1c5d2-cb87-11e7-a2d6-047d7be9fa86/thumbnail.jpg"
                           data-scaled="true" style="width: 109px; height: 276px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">mock-up</span>.<span class="file_extension">jpg</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Ashish S. on <time
                                                                data-local="date" datetime="2017-11-17T11:08:08Z"
                                                                title="November 17, 2017 at 4:38pm "
                                                                data-localized="true">Nov 17</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this image"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/311348045/download">
                    2 MB
                  </span>
                                                </div>

                                            </a>
                                            <div class="tags_and_comments">
                                                <a href="/2501285/projects/6590988/messages/73915727">
                  <span class="pill comments">
                    1 comment
                  </span>
                                                </a>
                                                <div class="taggings" data-behavior="taggings"
                                                     data-url="/2501285/projects/6590988/taggings"
                                                     data-taggable-type="Attachment" data-taggable-id="311348045"
                                                     data-role="tags_for_attachment_311348045">
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
                                            <time data-local="date" datetime="2017-11-17T11:08:08Z"
                                                  title="November 17, 2017 at 4:38pm " data-localized="true">Nov 17
                                            </time>
                                        </div>

                                        <div class="list_column filesize">
                                            2 MB
                                        </div>

                                        <div class="list_column creator">
                                            Ashish S.
                                        </div>

                                        <div class="list_column actions">
                                            <a class="button download" data-behavior="direct_download"
                                               data-download-path="/2501285/projects/6590988/attachments/311348045/download"
                                               href="#">Download</a>


                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="cell image pdf" id="attachment_310543980" data-container-id="comment_575887321">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 356px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="310543980" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/Website%2520Menu%2520items%2520draft%2520v1.2%2520%25281%2529.pdf">
              <span class="thumbnail_wrap image pdf">
                <span><img alt="" class="thumbnail" data-attachment-id="310543980" data-audio-codec="null"
                           data-classes="image pdf" data-container-id="comment_575887321"
                           data-content-type="application/pdf" data-created-at="2017-11-12T17:03:17Z"
                           data-creator-id="6581649" data-creator="Deepanshu T." data-description="file"
                           data-details-path="/2501285/projects/6590988/attachments/310543980/details"
                           data-download-path="/2501285/projects/6590988/attachments/310543980/download"
                           data-embeddable="true" data-extension="PDF" data-file-or-image="file"
                           data-filename="Website Menu items draft v1.2 (1).pdf" data-filesize="215 KB"
                           data-height="1240" data-image-id="310543980"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/large.png"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980"
                           data-path="/2501285/projects/6590988/attachments/310543980"
                           data-perma-path="/2501285/projects/6590988/messages/73611012?enlarge=310543980#attachment_310543980"
                           data-previewable="true" data-storage-key="5c57be52-c7cb-11e7-b971-047d7be9fbd4"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/310543980/trash"
                           data-trashed="false" data-type="pdf" data-video-codec="null" data-width="1754"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310543980/5c57be52-c7cb-11e7-b971-047d7be9fbd4/thumbnail.png"
                           data-scaled="true" style="width: 276px; height: 195px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">Website Menu items draft v1.2 (1)</span>.<span
                                                            class="file_extension">pdf</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Deepanshu T. on <time
                                                                data-local="date" datetime="2017-11-12T17:03:17Z"
                                                                title="November 12, 2017 at 10:33pm "
                                                                data-localized="true">Nov 12</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this file"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/310543980/download">
                    215 KB
                  </span>
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
                                                     data-taggable-type="Attachment" data-taggable-id="310543980"
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
                                                  title="November 12, 2017 at 10:33pm " data-localized="true">Nov 12
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
                        <div class="cell image" id="attachment_310400873" data-container-id="comment_575629119">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 356px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="310400873" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400873/final-logo_eng.jpg">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail" data-attachment-id="310400873" data-audio-codec="null"
                           data-classes="image" data-container-id="comment_575629119" data-content-type="image/jpeg"
                           data-created-at="2017-11-10T13:17:21Z" data-creator-id="13772519" data-creator="Rupali"
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/310400873/details"
                           data-download-path="/2501285/projects/6590988/attachments/310400873/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="final-logo_eng.jpg" data-filesize="36 KB" data-height="360"
                           data-image-id="310400873"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400873/6751fd9e-c619-11e7-8b42-e89a8fbdc1e4/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400873"
                           data-path="/2501285/projects/6590988/attachments/310400873"
                           data-perma-path="/2501285/projects/6590988/messages/73572563?enlarge=310400873#attachment_310400873"
                           data-previewable="true" data-storage-key="6751fd9e-c619-11e7-8b42-e89a8fbdc1e4"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/310400873/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="800"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400873/6751fd9e-c619-11e7-8b42-e89a8fbdc1e4/thumbnail.jpg"
                           data-scaled="true" style="width: 276px; height: 124px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">final-logo_eng</span>.<span
                                                            class="file_extension">jpg</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Rupali on <time data-local="date"
                                                                                                     datetime="2017-11-10T13:17:21Z"
                                                                                                     title="November 10, 2017 at 6:47pm "
                                                                                                     data-localized="true">Nov 10</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this image"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/310400873/download">
                    36 KB
                  </span>
                                                </div>

                                            </a>
                                            <div class="tags_and_comments">
                                                <a href="/2501285/projects/6590988/messages/73572563">
                  <span class="pill comments">
                    4 comments
                  </span>
                                                </a>
                                                <div class="taggings" data-behavior="taggings"
                                                     data-url="/2501285/projects/6590988/taggings"
                                                     data-taggable-type="Attachment" data-taggable-id="310400873"
                                                     data-role="tags_for_attachment_310400873">
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
                                            <time data-local="date" datetime="2017-11-10T13:17:21Z"
                                                  title="November 10, 2017 at 6:47pm " data-localized="true">Nov 10
                                            </time>
                                        </div>

                                        <div class="list_column filesize">
                                            36 KB
                                        </div>

                                        <div class="list_column creator">
                                            Rupali
                                        </div>

                                        <div class="list_column actions">
                                            <a class="button download" data-behavior="direct_download"
                                               data-download-path="/2501285/projects/6590988/attachments/310400873/download"
                                               href="#">Download</a>


                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="cell image" id="attachment_310400874" data-container-id="comment_575629119">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 204px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="310400874" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400874/final-logo_hindi.jpg">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail" data-attachment-id="310400874" data-audio-codec="null"
                           data-classes="image" data-container-id="comment_575629119" data-content-type="image/jpeg"
                           data-created-at="2017-11-10T13:17:21Z" data-creator-id="13772519" data-creator="Rupali"
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/310400874/details"
                           data-download-path="/2501285/projects/6590988/attachments/310400874/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="final-logo_hindi.jpg" data-filesize="52 KB" data-height="360"
                           data-image-id="310400874"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400874/67c69082-c619-11e7-8067-e89a8fb23f07/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400874"
                           data-path="/2501285/projects/6590988/attachments/310400874"
                           data-perma-path="/2501285/projects/6590988/messages/73572563?enlarge=310400874#attachment_310400874"
                           data-previewable="true" data-storage-key="67c69082-c619-11e7-8067-e89a8fb23f07"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/310400874/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="800"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400874/67c69082-c619-11e7-8067-e89a8fb23f07/thumbnail.jpg"
                           data-scaled="true" style="width: 276px; height: 124px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">final-logo_hindi</span>.<span
                                                            class="file_extension">jpg</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Rupali on <time data-local="date"
                                                                                                     datetime="2017-11-10T13:17:21Z"
                                                                                                     title="November 10, 2017 at 6:47pm "
                                                                                                     data-localized="true">Nov 10</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this image"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/310400874/download">
                    52 KB
                  </span>
                                                </div>

                                            </a>
                                            <div class="tags_and_comments">
                                                <a href="/2501285/projects/6590988/messages/73572563">
                  <span class="pill comments">
                    4 comments
                  </span>
                                                </a>
                                                <div class="taggings" data-behavior="taggings"
                                                     data-url="/2501285/projects/6590988/taggings"
                                                     data-taggable-type="Attachment" data-taggable-id="310400874"
                                                     data-role="tags_for_attachment_310400874">
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
                                            <time data-local="date" datetime="2017-11-10T13:17:21Z"
                                                  title="November 10, 2017 at 6:47pm " data-localized="true">Nov 10
                                            </time>
                                        </div>

                                        <div class="list_column filesize">
                                            52 KB
                                        </div>

                                        <div class="list_column creator">
                                            Rupali
                                        </div>

                                        <div class="list_column actions">
                                            <a class="button download" data-behavior="direct_download"
                                               data-download-path="/2501285/projects/6590988/attachments/310400874/download"
                                               href="#">Download</a>


                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="cell image" id="attachment_310400875" data-container-id="comment_575629119">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 204px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="310400875" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400875/final-logo_hindi_1.jpg">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail" data-attachment-id="310400875" data-audio-codec="null"
                           data-classes="image" data-container-id="comment_575629119" data-content-type="image/jpeg"
                           data-created-at="2017-11-10T13:17:21Z" data-creator-id="13772519" data-creator="Rupali"
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/310400875/details"
                           data-download-path="/2501285/projects/6590988/attachments/310400875/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="final-logo_hindi_1.jpg" data-filesize="50 KB" data-height="360"
                           data-image-id="310400875"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400875/683aa56c-c619-11e7-92c5-e89a8f741044/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400875"
                           data-path="/2501285/projects/6590988/attachments/310400875"
                           data-perma-path="/2501285/projects/6590988/messages/73572563?enlarge=310400875#attachment_310400875"
                           data-previewable="true" data-storage-key="683aa56c-c619-11e7-92c5-e89a8f741044"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/310400875/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="800"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400875/683aa56c-c619-11e7-92c5-e89a8f741044/thumbnail.jpg"
                           data-scaled="true" style="width: 276px; height: 124px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">final-logo_hindi_1</span>.<span
                                                            class="file_extension">jpg</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Rupali on <time data-local="date"
                                                                                                     datetime="2017-11-10T13:17:21Z"
                                                                                                     title="November 10, 2017 at 6:47pm "
                                                                                                     data-localized="true">Nov 10</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this image"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/310400875/download">
                    50 KB
                  </span>
                                                </div>

                                            </a>
                                            <div class="tags_and_comments">
                                                <a href="/2501285/projects/6590988/messages/73572563">
                  <span class="pill comments">
                    4 comments
                  </span>
                                                </a>
                                                <div class="taggings" data-behavior="taggings"
                                                     data-url="/2501285/projects/6590988/taggings"
                                                     data-taggable-type="Attachment" data-taggable-id="310400875"
                                                     data-role="tags_for_attachment_310400875">
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
                                            <time data-local="date" datetime="2017-11-10T13:17:21Z"
                                                  title="November 10, 2017 at 6:47pm " data-localized="true">Nov 10
                                            </time>
                                        </div>

                                        <div class="list_column filesize">
                                            50 KB
                                        </div>

                                        <div class="list_column creator">
                                            Rupali
                                        </div>

                                        <div class="list_column actions">
                                            <a class="button download" data-behavior="direct_download"
                                               data-download-path="/2501285/projects/6590988/attachments/310400875/download"
                                               href="#">Download</a>


                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="cell image" id="attachment_310400707" data-container-id="upload_40081997">
                            <article class="attachment">
                                <figure class="thumbnail proportional">
                                    <div class="background " data-role="content_container"
                                         style="height: 204px; width: 277px;">
                                        <div class="image_details list_column">
                                            <a data-attachment-id="310400707" data-behavior="enlargeable"
                                               data-stacker="false"
                                               href="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400707/final-logo_eng.jpg">
              <span class="thumbnail_wrap image">
                <span><img alt="" class="thumbnail" data-attachment-id="310400707" data-audio-codec="null"
                           data-classes="image" data-container-id="upload_40081997" data-content-type="image/jpeg"
                           data-created-at="2017-11-10T13:15:55Z" data-creator-id="13772519" data-creator="Rupali"
                           data-description="image"
                           data-details-path="/2501285/projects/6590988/attachments/310400707/details"
                           data-download-path="/2501285/projects/6590988/attachments/310400707/download"
                           data-embeddable="false" data-extension="JPG" data-file-or-image="image"
                           data-filename="final-logo_eng.jpg" data-filesize="36 KB" data-height="360"
                           data-image-id="310400707"
                           data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400707/408c8756-c619-11e7-b89d-e89a8fbdc1bb/large.jpg"
                           data-linked="null" data-max-size="700"
                           data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400707"
                           data-path="/2501285/projects/6590988/attachments/310400707"
                           data-perma-path="/2501285/projects/6590988/uploads/40081997?enlarge=310400707#attachment_310400707"
                           data-previewable="true" data-storage-key="408c8756-c619-11e7-b89d-e89a8fbdc1bb"
                           data-thumbnail="true" data-trash-path="/2501285/projects/6590988/attachments/310400707/trash"
                           data-trashed="false" data-type="image" data-video-codec="null" data-width="800"
                           src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/310400707/408c8756-c619-11e7-b89d-e89a8fbdc1bb/thumbnail.jpg"
                           data-scaled="true" style="width: 276px; height: 124px;"></span>
              </span>

                                                <figcaption data-role="live_filter_highlight" style="width: 277px;">
                                                    <span class="file_name">final-logo_eng</span>.<span
                                                            class="file_extension">jpg</span>
                                                </figcaption>


                                                <div class="bucket">
                                                    Project: Random Projects
                                                </div>

                                                <div class="metadata_for_grid">
                                                    <span class="meta date">Added by Rupali on <time data-local="date"
                                                                                                     datetime="2017-11-10T13:15:55Z"
                                                                                                     title="November 10, 2017 at 6:45pm "
                                                                                                     data-localized="true">Nov 10</time></span>
                                                    <span class="meta"> · </span>
                                                    <span class="meta filesize" title="Download this image"
                                                          data-behavior="direct_download"
                                                          data-download-path="/2501285/projects/6590988/attachments/310400707/download">
                    36 KB
                  </span>
                                                </div>

                                            </a>
                                            <div class="tags_and_comments">

                                                <div class="taggings" data-behavior="taggings"
                                                     data-url="/2501285/projects/6590988/taggings"
                                                     data-taggable-type="Attachment" data-taggable-id="310400707"
                                                     data-role="tags_for_attachment_310400707">
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
                                            <time data-local="date" datetime="2017-11-10T13:15:55Z"
                                                  title="November 10, 2017 at 6:45pm " data-localized="true">Nov 10
                                            </time>
                                        </div>

                                        <div class="list_column filesize">
                                            36 KB
                                        </div>

                                        <div class="list_column creator">
                                            Rupali
                                        </div>

                                        <div class="list_column actions">
                                            <a class="button download" data-behavior="direct_download"
                                               data-download-path="/2501285/projects/6590988/attachments/310400707/download"
                                               href="#">Download</a>


                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                    </div>

                </section>

                <p class="more_files">
                    <a class="decorated" href="/2501285/projects/6590988/attachments">650 more files</a>
                </p>
            </section>

            <section class="documents " data-collection-name="documents">
                <header class="has_buttons">
                    <h1><a href="/2501285/projects/6590988/documents">Text Documents</a></h1>

                    <a class="action_button button" href="/2501285/projects/6590988/documents/new">Create a text
                        document</a>
                </header>

                <p class="blank_slate">Keep notes and important information in Text Documents</p>

                <section class="documents in_project project_documents">
                    <article class="document" id="document_12905846" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/12905846">
                                                <h3 data-role="live_filter_highlight">TTHAIRSOLUTIONS :- local and live
                                                    details</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content">
                                            <div>
                                                <b>LOCAL DETAILS :-&nbsp;<br></b><b>Link:</b>&nbsp;<a
                                                        href="http://116.193.163.162:4074/tthairsolutions">http://116.193.163.162:4074/tthairsolutions</a><br><br><b>Wordpress
                                                    login details<br></b>URL :&nbsp;<a
                                                        href="http://116.193.163.162:4074/tthairsolutions">http://116.193.163.162:4074/tthairsolutions</a>/wp-admin/&nbsp;<br>User
                                                : HairSolutions&nbsp;<br>Pass : 9sW)D@lTT6qEdQ)d)T<br><b><br></b>
                                            </div>
                                            <div>
                                                <div><b>FTP Detail:</b></div>
                                                <div>Server: 192.168.0.78</div>
                                                <div>User: tthairsoluftpuser</div>
                                                <div>Pass: ji0&amp;6yhv!@J92</div>
                                                <div><br></div>
                                                <div><b>DB Detail:</b></div>
                                                <div>Server: localhost</div>
                                                <div>DBName: tthairsoludb</div>
                                                <div>DBUser: tthairsoludb</div>
                                                <div>Pass: kj09^h1v2g@cw</div>
                                                <b>*****************************************************************************<br><br>Live
                                                    login details</b><br>URL :&nbsp;<a data-behavior="truncate"
                                                                                       href="http://tthairsolutions.com/wp-admin/"
                                                                                       target="_blank">http://tthairsolutions.com/wp-admin/</a>
                                                <br>User : HairSolutions <br>Pass : 9sW)D@lTT6qEdQ)d)T<br>
                                            </div>
                                            <div><br></div>
                                            <div>
                                                <b>godaddy details :</b><br>52893053
                                            </div>
                                            <div>Pinkietwo3243</div>
                                            <div><br></div>
                                            <div>
                                                <div><b>FTP Detail:</b></div>
                                                <div>Server: <a
                                                            href="http://tthairsolutions.com">tthairsolutions.com</a>
                                                </div>
                                                <div>User: tthairfinal</div>
                                                <div>Pass: knYh32!@lkh</div>
                                                <div><br></div>
                                                <div>
                                                    <b>DB Details : </b><br>
                                                </div>
                                                <div>DB Name :&nbsp;&nbsp;&nbsp;&nbsp; tthairDBuser<br>
                                                </div>
                                                <div>DB User :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tthairDBuser<br>
                                                </div>
                                                DB Pass :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nazipunks1!
                                            </div>
                                            <br>
                                            <div>
                                                <b>DB Server:</b> <a
                                                        href="http://tthairDBuser.db.9411954.hostedresource.com"
                                                        title="Link: http://tthairDBuser.db.9411954.hostedresource.com">tthairDBuser.db.9411954.hostedresource.com</a>
                                            </div>
                                            <div><br></div>
                                            <div>
                                                <b>phpMyAdmin Link: </b><a
                                                        href="https://sg2nlsmysqladm1.secureserver.net/grid55/5"
                                                        title="Link: https://sg2nlsmysqladm1.secureserver.net/grid55/5">https://sg2nlsmysqladm1.secureserver.net/grid55/5</a>
                                            </div>
                                            <br></div>
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
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Harishanker ..

            <span class="description">
              on <time data-local="date" datetime="2017-11-09T07:20:04Z" title="November 9, 2017 at 12:50pm "
                       data-localized="true">Nov 9</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/12905846/edit">Edit…</a>

                            </div>
                        </div>
                    </article>
                    <article class="document" id="document_12940214" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/12940214">
                                                <h3 data-role="live_filter_highlight">Exssa uk Local</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content"><b>URL:</b>&nbsp;<a data-behavior="truncate"
                                                                                           href="http://116.193.163.162:4077/exssauk"
                                                                                           target="_blank">http://116.193.163.162:4077/exssauk</a><br><br><b>Admin
                                                Details:</b><br><a data-behavior="truncate"
                                                                   href="http://116.193.163.162:4077/exssauk/wp-admin"
                                                                   target="_blank">http://116.193.163.162:4077/exssauk/wp-admin</a><br>username:&nbsp;exssa-admin<br>Password:&nbsp;(sI7YW4$cx&amp;Z4fsYdH<br><br>
                                            <div><b>FTP Details:</b></div>
                                            <div>Server: 192.168.0.78</div>
                                            <div>User: exssaukftpuser</div>
                                            <div>Pass: jy09^y1f2$21l</div>
                                            <div><br></div>
                                            <div><b>DB Detail:</b></div>
                                            <div>Server: localhost</div>
                                            <div>DBName: exssaukdb</div>
                                            <div>DBUser: exssaukdb</div>
                                            <div>Pass: ij98%h12v21</div>
                                        </div>
                                    </div>

                                    <div class="truncated"></div>
                                </div>
                            </div>

                            <div class="column date">
                                <span class="description">on </span>
                                <time data-local="date" datetime="2017-11-07T04:47:35Z"
                                      title="November 7, 2017 at 10:17am " data-localized="true">Nov 7
                                </time>
                            </div>

                            <div class="column updater">
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Ankush d.

            <span class="description">
              on <time data-local="date" datetime="2017-11-07T04:47:35Z" title="November 7, 2017 at 10:17am "
                       data-localized="true">Nov 7</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/12940214/edit">Edit…</a>

                            </div>
                        </div>
                    </article>
                    <article class="document" id="document_12771266" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/12771266">
                                                <h3 data-role="live_filter_highlight">www.millennium-trading.com</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content"><b>Site url&nbsp;</b>:-&nbsp;<a
                                                    href="http://www.millennium-trading.com/">http://www.millennium-trading.com</a><br><br><b>Wordpress
                                                details:-&nbsp;</b><br><b>Admin url :</b>-&nbsp;<a
                                                    href="http://www.millennium-trading.com/trading-developers"
                                                    title="Link: http://www.millennium-trading.com/trading-developers">http://www.millennium-trading.com/</a>wp-admin<br>
                                            <div>
                                                <b>Username:</b>&nbsp;admin-millennium
                                            </div>
                                            <div>
                                                <b>Password:</b>&nbsp;E43ygyrfRQb*jI88IbPdy*yu<p></p>
                                                <br>
                                                <div><b>FTP Details :</b></div>
                                                <div>Host : &nbsp; ftp.millennium-trading.com</div>
                                                <div>U : &nbsp; <a data-behavior="truncate"
                                                                   href="mailto:developers@millennium-trading.com"
                                                                   target="_blank">developers@millennium-trading.com</a>
                                                </div>
                                                <div>P : &nbsp; Rs9WF=Cxiuqx<br><br>
                                                    <div><b>New Cpanel Details : (BlueHost)</b></div>
                                                    <div>Link : <a data-behavior="truncate"
                                                                   href="https://my.bluehost.com/web-hosting/cplogin"
                                                                   target="_blank">https://my.bluehost.com/web-hosting/cplogin</a>
                                                    </div>
                                                    <div>User : &nbsp; Millennium-trading.com</div>
                                                    <div>Pass : &nbsp; Football30!!!</div>
                                                </div>
                                                <br><b>New User<br><br>username :&nbsp;</b>lead-admin<br><b>Password :&nbsp;</b>6kj10^jj0kzEMd%ynBQ7YP)2<br><br><b>two
                                                    step authentication credentials :</b><br>username
                                                :admin-millennium<br>password :-&nbsp;new-pdc&amp;G8G-J~,S
                                            </div>
                                        </div>
                                    </div>

                                    <div class="truncated"></div>
                                </div>
                            </div>

                            <div class="column date">
                                <span class="description">on </span>
                                <time data-local="date" datetime="2017-10-14T05:24:43Z"
                                      title="October 14, 2017 at 10:54am " data-localized="true">Oct 14
                                </time>
                            </div>

                            <div class="column updater">
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Ankush d.

            <span class="description">
              on <time data-local="date" datetime="2017-10-14T05:24:43Z" title="October 14, 2017 at 10:54am "
                       data-localized="true">Oct 14</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/12771266/edit">Edit…</a>

                            </div>
                        </div>
                    </article>
                    <article class="document" id="document_12752982" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/12752982">
                                                <h3 data-role="live_filter_highlight">design-office.online</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content"><a data-behavior="truncate"
                                                                          href="http://www.design-office.online/office-login.php"
                                                                          target="_blank">http://www.design-office.online/office-login.php</a><br>&nbsp;&nbsp;&nbsp;
                                            User :&nbsp; kmsxxk<br>&nbsp;&nbsp;&nbsp; Pass :&nbsp; Z=2gs$frC=TxnH9%<br>&nbsp;&nbsp;&nbsp;
                                            <br><b>&nbsp;&nbsp;&nbsp; DB Details : </b><br>&nbsp;&nbsp;&nbsp; DB Name :
                                            i3949569_wp1<br>&nbsp;&nbsp;&nbsp; DB User : i3949569_wp1<br>&nbsp;&nbsp;&nbsp;
                                            DB Pass : I#&amp;7o54ZfKFi1bl&amp;4f&amp;81##7<br><br><b>&nbsp;&nbsp;&nbsp;
                                                FTP Details : </b><br>&nbsp;&nbsp;&nbsp; FTP Host : design-office.online<br>&nbsp;&nbsp;&nbsp;
                                            FTP U : <a data-behavior="truncate"
                                                       href="mailto:developers@design-office.online" target="_blank">developers@design-office.online</a><br>&nbsp;&nbsp;&nbsp;
                                            FTP P : cG$TvsST8k~H<br><br><br><br></div>
                                    </div>

                                    <div class="truncated"></div>
                                </div>
                            </div>

                            <div class="column date">
                                <span class="description">on </span>
                                <time data-local="date" datetime="2017-09-08T08:04:34Z"
                                      title="September 8, 2017 at 1:34pm " data-localized="true">Sep 8
                                </time>
                            </div>

                            <div class="column updater">
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Ashish S.

            <span class="description">
              on <time data-local="date" datetime="2017-09-08T08:04:34Z" title="September 8, 2017 at 1:34pm "
                       data-localized="true">Sep 8</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/12752982/edit">Edit…</a>

                            </div>
                        </div>
                    </article>
                    <article class="document" id="document_12544404" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/12544404">
                                                <h3 data-role="live_filter_highlight">Lindsey Royce</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content">Site URL : <a href="http://lindseyroyce.com">http://lindseyroyce.com</a><br><br><br>Admin
                                            URL : <a href="http://lindseyroyce.com/?developers-lindsey">http://lindseyroyce.com/?developers-lindsey</a><br>User
                                            :&nbsp;&nbsp; lindsey-site-developers<br>Pass :&nbsp;&nbsp;
                                            eg$25IGSBu$0(Qh%%kE56cfj<br><br><br><b>FTP Details : </b><br>Host :&nbsp;&nbsp;&nbsp;
                                            192.168.0.78<br>User :&nbsp;&nbsp;&nbsp; lindseyftpuser<br>Pass :&nbsp;&nbsp;&nbsp;
                                            l)9^h1v2)12kkb9<br><br><b>DB Details : </b><br>DB Name : &nbsp;&nbsp; &nbsp;
                                            lindseydb<br>DB User :&nbsp;&nbsp;&nbsp; lindseydb<br>DB Pass :&nbsp;&nbsp;&nbsp;
                                            iyb)9^h1v2!2c1<br><br></div>
                                    </div>

                                    <div class="truncated"></div>
                                </div>
                            </div>

                            <div class="column date">
                                <span class="description">on </span>
                                <time data-local="date" datetime="2017-09-06T09:51:23Z"
                                      title="September 6, 2017 at 3:21pm " data-localized="true">Sep 6
                                </time>
                            </div>

                            <div class="column updater">
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Harishanker ..

            <span class="description">
              on <time data-local="date" datetime="2017-09-06T09:51:23Z" title="September 6, 2017 at 3:21pm "
                       data-localized="true">Sep 6</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/12544404/edit">Edit…</a>

                            </div>
                        </div>
                    </article>
                    <article class="document" id="document_11942398" data-behavior="link_container">
                        <div class="wrapper">
                            <div class="column icon">
                                <span class="text-doc-icon"></span>
                            </div>

                            <div class="column content">
                                <div class="document_page">
                                    <div class="wrap">
                                        <header>
                                            <a href="/2501285/projects/6590988/documents/11942398">
                                                <h3 data-role="live_filter_highlight">Akal Transport Live</h3>
                                            </a>
                                            <p class="project">From the project: <a data-default-stack="true"
                                                                                    href="/2501285/projects/6590988">Random
                                                    Projects</a></p>


                                        </header>

                                        <div class="formatted_content"><b>Site URL :&nbsp;</b>&nbsp;&nbsp; <a
                                                    href="http://www.akaltrans.com">www.akaltrans.com</a>
                                            <br><br><b>Admin Details : </b><br>User :&nbsp;&nbsp; deliver<br>Pass :&nbsp;&nbsp;
                                            D@185office3jSBI5<br><br><br>
                                            <div>
                                                <b>DB Details : </b><br>
                                            </div>
                                            <a data-behavior="truncate"
                                               href="https://p3nlmysqladm002.secureserver.net/grid55/271"
                                               target="_blank">https://p3nlmysqladm002.secureserver.net/grid55/271</a><br>DB
                                            Name :&nbsp;&nbsp; akaltrans<br>DB U :&nbsp;&nbsp;&nbsp; akaltrans<br>DB P :&nbsp;&nbsp;&nbsp;
                                            T@74office3jWqS5<br>Hostname = akaltrans.db.7652960.hostedresource.com
                                            <br><br><br><b>FTP Details : </b><br>FTP Host :&nbsp; 184.168.185.1<br>FTP U
                                            :&nbsp;&nbsp; akaltrans<br>FTP P :&nbsp;&nbsp; M@74fB3jWqS5<br><br></div>
                                    </div>

                                    <div class="truncated"></div>
                                </div>
                            </div>

                            <div class="column date">
                                <span class="description">on </span>
                                <time data-local="date" datetime="2017-07-13T08:26:56Z" title="July 13, 2017 at 1:56pm "
                                      data-localized="true">Jul 13
                                </time>
                            </div>

                            <div class="column updater">
                                <p class="project">From the project: Random Projects</p>

                                <span class="action">
          <span class="description">Saved by</span> Harishanker ..

            <span class="description">
              on <time data-local="date" datetime="2017-07-13T08:26:56Z" title="July 13, 2017 at 1:56pm "
                       data-localized="true">Jul 13</time>
            </span>
        </span>

                            </div>

                            <div class="column actions">
                                <a class="button edit"
                                   href="/2501285/projects/6590988/documents/11942398/edit">Edit…</a>

                            </div>
                        </div>
                    </article>


                </section>

                <p class="more_documents">
                    <a class="decorated" href="/2501285/projects/6590988/documents">18 more documents</a>
                </p>
            </section>

            <section class="forwards" data-collection-name="forwards" style="display: none;">
                <header class="has_buttons">
                    <h1><a href="/2501285/projects/6590988/forwards">Forwarded emails</a></h1>

                    <a class="action_button button" href="/2501285/projects/6590988/dropbox#emails">Forward an email</a>
                </header>

                <p class="blank_slate">Forward emails into this project for safekeeping.</p>

                <section class="forwards grouped_by_date">

                </section>

            </section>
            <section class="project_settings">
                <div class="project_settings_links">
                    <a class="mail" href="/2501285/projects/6590988/dropbox">Email content to this project...</a>
                    <a class="ical skip_busy" data-stacker="false"
                       href="webcal://basecamp.com/2501285/calendar_feeds/p6590988.ics?token=NTJXRVYrM0ovdUZjRG5BOGdxSzAxdz09LS1vOFM0NVdoeUtFNDJ3YlJ6TmZzNGhRPT0%3D--46ccaed012e544dc682251bc4ec49c11905fc6b9-15531397">iCal</a>
                    <a class="feed skip_busy" data-stacker="false" href="/2501285/projects/6590988.atom">RSS</a>
                </div>

                <div id="project_settings"></div>
            </section>

        </div>
    </div>--}}
@endsection