<template>

    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="2" style="width: 980px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active">
                <header>
                    <h1>
                        <a data-restore-position=""
                           :href="'/project/'+projectId+'/'+projectName+'/topics'">{{projectName}}</a>
                    </h1>
                </header>
                <div class="panel sheet topics has_sorting" style="margin-left: 20px; margin-bottom: -20px;"
                     data-behavior="">
                    <title>Random Projects: Discussions</title>

                    <header class="has_buttons">
                        <h1 class="inactive_title">Discussions</h1>

                        <div class="active_title with_facets">
                            <h1>
                                <span data-role="topics_status_options">Show discussions</span>

                                <span class="sort_options">sorted by
                                    <div class="facet" data-behavior="expandable collapse_on_clickoutside"
                                         data-role="facet">
  <a data-behavior="expand_on_click" data-role="toggle" href="#">newest</a>
  <div class="expanded_content balloon top_left_side">
    <div class="arrow"></div>
    <div class="arrow"></div>
    <div class="contents">
        <span class="type selected" data-role="option"><a data-replace-sheet="true" data-sort="newest"
                                                          href="/2501285/projects/6590988/topics?sort=newest">newest</a></span>
        <span class="type " data-role="option"><a data-replace-sheet="true" data-sort="oldest"
                                                  href="/2501285/projects/6590988/topics?sort=oldest">oldest</a></span>
    </div>
  </div>
</div>

                                </span>and filter by
                                <input class="live_filter" data-behavior="live_filter"
                                       data-filter-url="/2501285/projects/6590988/filter?sort=newest&amp;type=topics"
                                       data-index-url="/2501285/projects/6590988/topics.js?sort=newest"
                                       data-type="topics" id="" placeholder="title…" type="text">

                            </h1>
                        </div>

                        <div class="actions">
                            <span class="position_reference">
                                <a class="action_button button"
                                   :href="'/project/'+projectId+'/'+projectName+'/messages/new'">Post a new message</a>
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
                                        <a href="/2501285/projects/6590988/messages/74066242">
                                            <img :alt="topic.topic_comment_latest_posted_by.comment_poster_name"
                                                 class="avatar"
                                                 height="30"
                                                 src="https://asset1.basecamp.com/2501285/people/13182570/photo/avatar.40.gif"
                                                 width="30"
                                                 :title="topic.topic_comment_latest_posted_by.comment_poster_name">
                                        </a>
                                    </td>

                                    <td class="who">
                                        <a href="/2501285/projects/6590988/messages/74066242">{{topic.topic_comment_latest_posted_by.comment_poster_name}}</a>
                                    </td>

                                    <td class="what">
                                        <div class="attachments">
                                            <figure>
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
                                            </figure>
                                        </div>

                                        <a :href="'/project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id">
                                            <strong data-role="live_filter_highlight">{{topic.topic_name}}</strong>
                                            <span class="bucket_name">({{projectName}})</span>
                                            <span class="excerpt"> - {{topic.topic_comment_latest.comment}}</span>
                                        </a>
                                    </td>

                                    <td class="when">
                                        <a :href="'/project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id">
                                            <time data-local="time-or-date" :datetime="topic.topic_updated_at_human"
                                                  :title="topic.topic_updated_at_noob">{{topic.topic_updated_at_human}}
                                            </time>
                                        </a></td>

                                    <td class="comments">
                                        <a :href="'/project/'+projectId+'/'+projectName+'/messages/'+topic.topic_id"
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
                showError: ''
            }
        },
        mounted() {
            let self = this;
            let segment = window.location.href.split('/');
            self.projectId = segment[4];
            self.projectName = segment[5];
            axios.get('/api/project/' + self.projectId + '/' + self.projectName + '/topics')
                .then(function (response) {
                    console.log(response.data);
                    self.topics = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {}
    }
</script>