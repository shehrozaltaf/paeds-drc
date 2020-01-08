<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <h3 class="heading_b uk-margin-bottom">Form Drafts</h3>
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
                                My Drafts
                            </h3>
                        </div>
                        <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Application - Review No</th>
                                <th>Title</th>
                                <th>Principal Investigator</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <?php if (isset($permission[0]->CanEdit) && $permission[0]->CanEdit == 1 && $getData[0]->createdBy == $_SESSION['login']['idUser']) {
                                    echo ' <th>Action</th>';
                                }
                                ?>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Application - Review No</th>
                                <th>Title</th>
                                <th>Principal Investigator</th>
                                <th>Created By</th>
                                <th>Created Date</th>
                                <?php if (isset($permission[0]->CanEdit) && $permission[0]->CanEdit == 1 && $getData[0]->createdBy == $_SESSION['login']['idUser']) {
                                    echo ' <th>Action</th>';
                                }
                                ?>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            if (isset($getData) && $getData != '') {
                                $sno = 0;
                                foreach ($getData as $data) {
                                    $sno++;

                                    $td = '<tr> 
                             <td>' . $data->idApplication . '-' . $data->ReviewNo . '</td>  
                             <td>' . $data->title_of_study . '</td>   
                             <td>' . $data->PID_title . ' ' . $data->PID_first_name . ' ' . $data->PID_surname . '</td>';
                                    /* if (isset($data->attach_files) && $data->attach_files != '') {
                                         $td .= ' <td><a href="' . base_url($data->attach_files) . '" target="_blank"> ' . base_url($data->attach_files) . '</a></td>';
                                     } else {
                                         $td .= ' <td>---</td>';
                                     }*/

                                    $td .= '
                                    <td>' . $data->full_name . '</td>
                                    <td>' . date('d-m-Y h:i:s', strtotime($data->createdDateTime)) . '</td>
                                    ';
                                    if (isset($permission[0]->CanEdit) && $permission[0]->CanEdit == 1 && $data->createdBy == $_SESSION['login']['idUser']) {
                                        if ($data->AimsProject == 'Yes') {
                                            $baseurl = base_url('aims/form_draft_edit/' . $data->idApplicationGuid);
                                        } else {
                                            $baseurl = base_url('form_draft_edit/' . $data->idApplicationGuid);
                                        }
                                        $td .= ' <td> <a href="' . $baseurl . '" ><i class="md-icon material-icons">edit</i></a></td>';
                                    }

                                    /* if (isset($permission[0]->CanDelete) && $permission[0]->CanDelete == 1) {
                                         $td .= '<a href="javascript:void(0)" onclick="getDelete(this);"
                                          data-Userid="' . $data->idUser . '"><i class="md-icon material-icons">delete</i></a>';
                                     }*/

                                    $td .= '
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