<template>

    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="2" style="width: 980px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active">
                <header>
                    <h1>
                        <a data-restore-position=""
                           :href="home_page+'project/'+projectId+'/'+projectName+'/topics'">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet topics has_sorting" style="margin-left: 20px; margin-bottom: -20px;"
                     data-behavior="">
                    <title>{{projectName}}: Discussions</title>

                    <header class="has_buttons">
                        <h1 class="inactive_title">Discussions</h1>

                        <div class="active_title with_facets">
                            <h1>
                                <!--<span data-role="topics_status_options">Show discussions</span>-->

                                <!-- <span class="sort_options">sorted by
                                     <div class="facet" data-behavior="expandable collapse_on_clickoutside" data-role="facet">

                                         <a data-behavior="expand_on_click" data-role="toggle" href="#">newest</a>

                                         <div class="expanded_content balloon top_left_side">

                                             <div class="arrow"></div>

                                             <div class="arrow"></div>

                                             <div class="contents">

                                                 <span class="type selected" data-role="option">
                                                     <a data-replace-sheet="true" data-sort="newest"
                                                           href="/2501285/projects/6590988/topics?sort=newest">newest</a>
                                                 </span>
                                                 <span class="type " data-role="option">
                                                     <a data-replace-sheet="true"
                                                        data-sort="oldest"
                                                        href="/2501285/projects/6590988/topics?sort=oldest">oldest</a>
                                                 </span>
                                             </div>
                                         </div>
                                     </div>

                                 </span>and filter by
                                 <input class="live_filter" data-behavior="live_filter"
                                        data-filter-url="/2501285/projects/6590988/filter?sort=newest&amp;type=topics"
                                        data-index-url="/2501285/projects/6590988/topics.js?sort=newest"
                                        data-type="topics" id="" placeholder="title…" type="text">-->

                            </h1>
                        </div>

                        <div class="actions">
                            <span class="position_reference">
                                <a class="action_button button"
                                   :href="home_page+'project/'+projectId+'/'+projectName+'/messages/new'">Post a new message</a>
                                    <div class="blank_slate_arrow"></div>
                            </span>
                        </div>
                    </header>

                    <div class="sheet_body">
                        <section class="topics active" data-collection-name="topics">
                            <table class="inbox infinite_page" data-behavior="infinite_page file_drop_target"
                                   data-role="live_filter_results" data-infinite-page-reload="" data-infinite-page="2">

                                <tr class="topic message_74066242" id="topic_175636030" v-for="topic in topics">
                                    <td class="avatar">

                                        <a :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id">

                                            <img v-if="topic.creater_profile_image!=null"
                                                 class="avatar"
                                                 height="30"
                                                 :title="topic.creater_name"
                                                 :src="asset_url+'/storage/'+topic.creater_profile_image"
                                                 width="30">

                                            <img v-if="topic.creater_profile_image==null"
                                                 class="avatar"
                                                 height="30"
                                                 :title="topic.creater_name"
                                                 src="//asset1.basecamp.com/2501285/people/13182570/photo/avatar.40.gif"
                                                 width="30">
                                        </a>
                                    </td>

                                    <td class="who">
                                        <a v-if="topic.topic_comment_latest==null"
                                           :href="home_page+'project/'+projectId+'/'+projectName+'/people/'+topic.creater_id"></a>
                                        <a v-if="topic.topic_comment_latest!==null"
                                           :href="home_page+'project/'+projectId+'/'+projectName+'/people/'+topic.topic_comment_latest_posted_by.comment_poster_id"></a>
                                    </td>

                                    <td class="what">
                                        <div class="attachments">
                                            <!--  <figure>
                                                  <img alt="" class="thumbnail hoverZoomLink"
                                                       data-attachment-id="309624226" data-audio-codec="null"
                                                       data-behavior="enlargeable" data-classes="image"
                                                       data-container-id="comment_574119436"
                                                       data-content-type="image/jpeg"
                                                       data-created-at="2017-11-06T09:54:34Z" data-creator-id="13772519"
                                                       data-creator="Rupali" data-description="image"
                                                       data-details-path="/2501285/projects/6590988/attachments/309624226/details"
                                                       data-download-path="/2501285/projects/6590988/attachments/309624226/download"
                                                       data-embeddable="false" data-extension="JPG"
                                                       data-file-or-image="image" data-filename="version-2.jpg"
                                                       data-filesize="58 KB" data-height="360" data-image-id="309624226"
                                                       data-large-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/309624226/78f81a0e-c2d8-11e7-b10a-e89a8fbdc1e0/large.jpg"
                                                       data-linked="null" data-max-size="700"
                                                       data-original-src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/309624226"
                                                       data-path="/2501285/projects/6590988/attachments/309624226"
                                                       data-perma-path="/2501285/projects/6590988/messages/73572563?enlarge=309624226#attachment_309624226"
                                                       data-previewable="true"
                                                       data-storage-key="78f81a0e-c2d8-11e7-b10a-e89a8fbdc1e0"
                                                       data-thumbnail="true"
                                                       data-trash-path="/2501285/projects/6590988/attachments/309624226/trash"
                                                       data-trashed="false" data-type="image" data-video-codec="null"
                                                       data-width="800"
                                                       src="https://asset1.basecamp.com/2501285/projects/6590988/attachments/309624226/78f81a0e-c2d8-11e7-b10a-e89a8fbdc1e0/thumbnail.jpg">
                                              </figure>-->
                                        </div>

                                        <a :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id">
                                            <strong data-role="live_filter_highlight">{{topic.topic_name}}</strong>
                                            <span class="bucket_name">({{projectName}})</span>
                                            <span class="excerpt" v-if="topic.topic_comment_latest!==null"> - {{topic.topic_comment_latest.comment}}</span>
                                            <span class="excerpt" v-if="topic.topic_comment_latest===null"> - {{topic.topic_body}}</span>
                                        </a>
                                    </td>

                                    <td class="when">
                                        <a :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id">
                                            <time data-local="time-or-date" :datetime="topic.topic_updated_at_human"
                                                  :title="topic.topic_updated_at_noob">{{topic.topic_updated_at_human}}
                                            </time>
                                        </a></td>

                                    <td class="comments">
                                        <a :href="home_page+'project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id"
                                           v-if="topic.topic_comments_total>0">
                                            <span class="pill comments circle">{{topic.topic_comments_total}}</span>
                                        </a>
                                    </td>

                                    <td class="actions">

                                    </td>
                                </tr>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'TopicComponent',
        data() {
            return {
                open: true,
                projectId: '',
                projectName: '',
                topics: '',
                showError: '',

                home_page: '',
                asset_url: '',
                result: '',
            }
        },
        mounted() {
            let self = this;

            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.asset_url = document.querySelector("meta[name='asset-url']").getAttribute("content");

            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");

            axios.get(this.home_page + 'api/project/' + this.projectId + '/' + self.projectName + '/topics')
                .then(function (response) {
                    self.topics = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {}
    }
</script>