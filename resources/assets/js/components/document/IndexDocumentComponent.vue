<template>

    <div id="workspace" class="workspace">
        <div class="container stack_container" data-container-id="1" style="width: 980px;">
            <div class="panel sheet project active isnt_client_project inactive" data-behavior=" "
                 data-creator-id="6581649" data-status="active">
                <header><h1><a data-restore-position=""
                               :href="home_page+'/project/'+projectId+'/'+projectName">{{projectName}}</a></h1>
                </header>
                <div class="panel sheet documents has_sorting" data-role="toggleable_view"
                     data-behavior=" prevent_reload_when_stacked" style="margin-left: 20px; margin-bottom: -20px;">
                    <title>{{projectName}}: Text Docs</title>

                    <header class="has_buttons">
                        <h1 class="inactive_title">See all text documents</h1>

                        <!--<div class="active_title with_facets">
                            <h1>
                                Show text documents
                                <span class="sort_options">sorted by

                            <div class="facet" data-behavior="expandable collapse_on_clickoutside" data-role="facet">
                                <a data-behavior="expand_on_click" data-role="toggle" href="#">last updated</a><div
                                    class="expanded_content balloon top_left_side">
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="contents">
                                    <span class="type selected" data-role="option">
                                        <a data-replace-sheet="true" data-sort="newest"
                                           :href="'/project/'+projectId+'/'+projectName+'/documents?sort=newest'">last updated</a>
                                    </span>
                                    <span class="type " data-role="option">
                                        <a data-replace-sheet="true" data-sort="oldest"
                                           :href="'/project/'+projectId+'/'+projectName+'/documents?sort=oldest'">oldest</a>
                                    </span>
                                    <span class="type " data-role="option">
                                        <a data-replace-sheet="true" data-sort="az"
                                           :href="'/project/'+projectId+'/'+projectName+'/documents?sort=az'">title A-Z</a></span>

                                    <span class="type " data-role="option">
                                        <a data-replace-sheet="true" data-sort="za"
                                           :href="'/project/'+projectId+'/'+projectName+'/documents?sort=za'">title Z-A</a>
                                    </span>

                                </div>
                            </div>
                            </div>

                        </span>
                                and filter by
                                <input class="live_filter" data-behavior="live_filter"
                                       data-filter-url="/2501285/projects/6590988/filter?sort=newest&amp;type=documents"
                                       data-index-url="/2501285/projects/6590988/documents.js?sort=newest"
                                       data-type="documents" id="" placeholder="title…" type="text">

                            </h1>
                        </div>-->

                        <div class="actions">
                           <!-- <a class="grid toggle_view selected" data-behavior="toggle_view" data-type="documents"
                               data-view="grid" href="#">Grid view</a>
                            <a class="list toggle_view" data-behavior="toggle_view" data-type="documents"
                               data-view="list" href="#">List view</a>-->

                            <span class="position_reference">
                        <a class="action_button button" :href="home_page+'/project/'+projectId+'/'+projectName+'/document/new'">Create a text document</a>
                        <div class="blank_slate_arrow"></div>
                    </span>
                        </div>
                    </header>

                    <div class="sheet_body">
                        <section class="documents in_project  grid_view" data-behavior="infinite_page"
                                 data-role="index live_filter_results" data-type="documents" data-infinite-page="3">
                            <article class="document" id="document_12992150" data-behavior="link_container"
                                     v-for="doc in documents">

                                <a :href="home_page+'/project/'+projectId+'/'+projectName+'/document/'+doc.id">
                                <div class="wrapper">
                                    <div class="column icon">
                                        <span class="text-doc-icon"></span>
                                    </div>

                                    <div class="column content">
                                        <div class="document_page">
                                            <div class="wrap">
                                                <header>
                                                    <a :href="home_page+'/project/'+projectId+'/'+projectName+'/document/'+doc.id">
                                                        <h3 data-role="live_filter_highlight">
                                                            {{doc.document_title}}</h3>
                                                    </a>
                                                    <p class="project">From the project:
                                                        <a data-default-stack="true" href="/2501285/projects/6590988">Random Projects</a>
                                                    </p>
                                                </header>

                                                <div class="formatted_content">{{doc.document_body}}</div>
                                            </div>

                                            <div class="truncated"></div>
                                        </div>
                                    </div>

                                    <div class="column date">
                                        <span class="description">on </span>
                                        <time data-local="date" :datetime="doc.created_at"
                                              :title="doc.created_at_noob" data-localized="true">{{doc.created_at_human}}
                                        </time>
                                    </div>

                                    <div class="column updater">
                                        <p class="project">From the project: Random Projects</p>

                                        <span class="action">
                                    <span class="description">Saved by</span> {{doc.created_by.name}}

                                    <span class="description">
                                        on <time data-local="date" :datetime="doc.created_at"
                                                 :title="doc.created_at_noob"
                                                 data-localized="true">{{doc.created_at_human}}</time>
                                    </span>
                                </span>
                                    </div>

                                    <div class="column actions">
                                        <a class="button edit"
                                           :href="home_page+'/project/'+projectId+'/document/'+doc.id+'/edit'">Edit…</a>
                                        <a class="button delete" data-creator-id="15531397" data-method="post"
                                           data-remote="true" data-visible-to="admin creator"
                                           :href="home_page+'/project/'+projectId+'/'+projectName+'/document/'+doc.id+'/trash'"
                                           rel="nofollow"
                                           title="Delete this document">Delete</a>
                                    </div>
                                </div>
                                </a>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'IndexDocumentComponent',
        data() {
            return {
                open: true,
                projects: '',
                showError: '',
                projectId: '',
                projectName: '',
                project: '',
                documents: '',

                csrf_token: '',
                home_page: ''
            }
        },
        methods: {
            saveDocument() {
                console.log('saving');
            }
        },
        mounted() {
            let self = this;
            this.home_page = document.querySelector("meta[name='home-page']").getAttribute("content");
            this.csrf_token = document.querySelector("meta[name=\"csrf-token\"]").getAttribute("content");

            this.projectName = document.querySelector("meta[name='project-name']").getAttribute("content");
            this.projectId = document.querySelector("meta[name='project-id']").getAttribute("content");


            axios.get(this.home_page+'/api/project/' + this.projectId + '/' + this.projectName + '/documents')
                .then(function (response) {
                    console.log(response.data);
                    self.documents = response.data.data;
                    self.documentTitle = response.data.document_title;
                    self.documentBody = response.data.document_body;
                })
                .catch(function (error) {
                    console.log(error);
                });

        }
    }
</script>