<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <h3 class="heading_b uk-margin-bottom">Active Application</h3>
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
                                        <option value="New" ' . ($data->status == 'New' ? 'selected' : ' class="hidden-print"') . '
                                        >New</option>
                                        <option value="Open"  ' . ($data->status == 'Open' ? 'selected' : ' class="hidden-print"') . '>Open</option>
                                        <option value="Completed"  ' . ($data->status == 'Completed' ? 'selected' : ' class="hidden-print"') . '>Completed</option>
                                        <option value="Rejected"  ' . ($data->status == 'Rejected' ? 'selected' : ' class="hidden-print"') . '>Rejected</option>
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
                                        if ($data->AimsProject == 'Yes') {
                                            $baseurl = base_url('aims/form_edit/' . $data->idApplicationGuid);
                                        } else {
                                            $baseurl = base_url('form_edit/' . $data->idApplicationGuid);
                                        }
                                        $td .= '<a href="' . $baseurl . '"   >
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