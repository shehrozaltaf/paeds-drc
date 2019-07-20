<div id="page_content">
    <div id="page_content_inner"><!-- statistics (small charts) -->
        <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show"
             data-uk-sortable data-uk-grid-margin>

            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <a href="<?= base_url('form_view/newforms') ?>">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                        class="peity_sale peity_data uk-text-primary">5,3,9,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">New Applications</span>
                            <h2 class="uk-margin-remove"><span
                                        class="countUpMe"><?= count($New_Applications) ?></span>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                    class="peity_visitors peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                        <span class="uk-text-muted uk-text-small">Applications (last 7d)</span>
                        <h2 class="uk-margin-remove"><span
                                    class="countUpMe"><?= (isset($LastSevenDays[0]->cntApplications) ? $LastSevenDays[0]->cntApplications : 0) ?></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show"
             data-uk-sortable data-uk-grid-margin>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <a href="<?= base_url('form_view') ?>">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                        class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">All Applications</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe"> <noscript>
                                    <?= (isset($All_Applications[0]->cntApplications) ? $All_Applications[0]->cntApplications : 0) ?>
                                </noscript></span>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card">
                    <div class="md-card-content">
                        <a href="<?= base_url('form_view') ?>">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span
                                        class="peity_sale peity_data">10,15,20,35</span></div>
                            <span class="uk-text-muted uk-text-small">Drafts Application</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">
                                <?= (isset($Drafts_Application[0]->cntApplications) ? $Drafts_Application[0]->cntApplications : 0) ?></span>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- circular charts -->
        <div class="uk-grid uk-grid-width-small-1-2 uk-grid-width-large-1-2 uk-grid-width-xlarge-1-2 uk-text-center uk-sortable sortable-handler"
             id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        <div class="epc_chart" data-percent="100" data-bar-color="#009688">
                            <a href="<?= base_url('form_view') ?>">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE0BE;</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="md-card-overlay-content">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                View Applications
                            </h3>
                        </div>
                        View All Applications
                    </div>
                </div>
            </div>
            <div>
                <div class="md-card md-card-hover md-card-overlay">
                    <div class="md-card-content">
                        <div class="epc_chart" data-percent="100" data-bar-color="#607d8b">
                            <a href="<?= base_url('form') ?>">
                                <span class="epc_chart_icon"><i class="material-icons">&#xE7FE;</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="md-card-overlay-content">
                        <div class="uk-clearfix md-card-overlay-header">
                            <i class="md-icon material-icons md-card-overlay-toggler">&#xE5D4;</i>
                            <h3>
                                Submit Application
                            </h3>
                        </div>
                        Submit new application.
                    </div>
                </div>
            </div>
        </div>


        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <div class="md-card uk-margin-medium-bottom">
                    <div class="md-card-content">

                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}"
                                     aria-haspopup="true"
                                     aria-expanded="false">
                                    <i class="md-icon material-icons"></i>
                                    <div class="uk-dropdown uk-dropdown-bottom" aria-hidden="true" tabindex=""
                                         style="min-width: 200px; top: 32px; left: -168px;">
                                        <div class="dt_colVis_buttons"></div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Application
                            </h3>
                        </div>
                        <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Application</th>
                                <th>Title</th>
                                <th>Principal Investigator</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Reviewer</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Application</th>
                                <th>Title</th>
                                <th>Principal Investigator</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Reviewer</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            if (isset($getData) && $getData != '') {
                                $sno = 0;
                                foreach ($getData as $data) {
                                    $statusClass = '';
                                    if ($data->status == 'New') {
                                        $statusClass = 'uk-badge-success';
                                    } elseif ($data->status == 'Open') {
                                        $statusClass = 'uk-badge-primary';
                                    } elseif ($data->status == 'Completed') {
                                        $statusClass = '';
                                    } elseif ($data->status == 'Rejected') {
                                        $statusClass = 'uk-badge-danger';
                                    }


                                    if ($data->AimsProject == 'Yes') {
                                        $AimsProject = 'AIMS';
                                        $AimsClass = 'uk-badge-success';
                                    } else {
                                        $AimsProject = 'DRC';
                                        $AimsClass = 'uk-badge-primary';
                                    }

                                    $td = '<tr> 
                             <td>' . $data->idApplication . '-' . $data->ReviewNo . '</td>  
                             <td>' . $data->title_of_study . '</td>   
                             <td>' . $data->PID_title . ' ' . $data->PID_first_name . ' ' . $data->PID_surname . '</td>';
                                    /*if (isset($data->attach_files) && $data->attach_files != '') {
                                        $td .= ' <td><a href="' . base_url($data->attach_files) . '" target="_blank"> ' . base_url($data->attach_files) . '</a></td>';
                                    } else {
                                        $td .= ' <td>---</td>';
                                    }*/
                                    $td .= '
                                    <td> <select id="PID_title" name="PID_title" class="uk-badge ' . $statusClass . '" > 
                                        <option value="New" ' . ($data->status == 'New' ? 'selected' : '') . '>New</option>
                                        <option value="Open"  ' . ($data->status == 'Open' ? 'selected' : '') . '>Open</option>
                                        <option value="Completed"  ' . ($data->status == 'Completed' ? 'selected' : '') . '>Completed</option>
                                        <option value="Rejected"  ' . ($data->status == 'Rejected' ? 'selected' : '') . '>Rejected</option>
                                    </select>  </td>
                                    <td><span  class="uk-badge ' . $AimsClass . '">' . $AimsProject . '</td>
                                    <td>' . $data->assignedTo . '</td>
                                    <td>' . $data->full_name . '</td>
                                    <td>' . date('d-m-Y h:i:s', strtotime($data->createdDateTime)) . '</td>
                                    <td> ';
                                    if (isset($permission[0]->CanView) && $permission[0]->CanView == 1) {
                                        $td .= '<a href="' . base_url('project_detail/' . $data->idApplication) . '"   ><i class="md-icon material-icons">visibility</i></a>';
                                    }
                                    if (isset($permission[0]->CanEdit) && $permission[0]->CanEdit == 1 && $data->createdBy == $_SESSION['login']['idUser']) {
                                        $td .= '<a href="' . base_url('form_edit/' . $data->idApplicationGuid) . '"   >
<i class="md-icon material-icons">edit</i></a>';
                                    }
                                    $td .= '</td>
                                </tr>';
                                    echo $td;
                                }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- d3 -->
<!--<script src="--><? //= base_url()?><!--assets/bower_components/d3/d3.min.js"></script>-->
<!-- metrics graphics (charts) -->
<!--<script src="--><? //= base_url()?><!--assets/bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>-->
<!-- chartist (charts) -->
<script src="<?= base_url() ?>assets/bower_components/chartist/dist/chartist.min.js"></script>
<!-- peity (small charts) -->
<script src="<?= base_url() ?>assets/bower_components/peity/jquery.peity.min.js"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="<?= base_url() ?>assets/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- countUp -->
<script src="<?= base_url() ?>assets/bower_components/countUp.js/dist/countUp.min.js"></script>
<!-- handlebars.js -->
<!--<script src="--><? //= base_url()?><!--assets/bower_components/handlebars/handlebars.min.js"></script>-->
<!--<script src="--><? //= base_url()?><!--assets/js/custom/handlebars_helpers.min.js"></script>-->
<!--  dashbord functions -->
<script src="<?= base_url() ?>assets/js/pages/dashboard.min.js"></script>