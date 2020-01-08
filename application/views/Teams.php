<div id="page_content">
    <div id="page_content_inner">
        <div class="uk-grid" data-uk-grid-margin>

            <div class="uk-width-medium-1-1">
                <h3 class="heading_b uk-margin-bottom">Teams</h3>
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
                                Teams
                            </h3>
                        </div>
                        <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>SNo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            if (isset($getData) && $getData != '') {
                                $sno = 0;
                                foreach ($getData as $data) {
                                    $sno++;

                                    $td = '<tr>
                             <td>' . $sno . '</td> 
                             <td>' . $data->team_name . '</td>   
                             <td >  ';
                                    if (isset($permission[0]->CanEdit) && $permission[0]->CanEdit == 1) {
                                        $td .= '<a href="javascript:void(0)"   onclick="getEdit(this);"
                                        data-teamid="' . $data->idTeam . '"><i class="md-icon material-icons">edit</i></a>';
                                    }

                                    if (isset($permission[0]->CanDelete) && $permission[0]->CanDelete == 1) {
                                        $td .= '<a href="javascript:void(0)" onclick="getDelete(this);"
                                         data-teamid="' . $data->idTeam . '"><i class="md-icon material-icons">delete</i></a>';
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
<?php
if (!isset($permission[0]->CanAdd) || $permission[0]->CanAdd == 1) {
    echo '<div class="md-fab-wrapper">
    <a class="md-fab md-fab-accent md-fab-wave-light waves-effect waves-button waves-light" href="javascript:void(0)"
       data-uk-modal="{target:\'#addModal\'}" id="invoice_add">
        <i class="material-icons">add</i>
    </a>
</div>';
}
?>

<div class="uk-modal" id="addModal" aria-hidden="true" style="display: none; overflow-y: auto;">
    <div class="uk-modal-dialog" style="top: 97px;">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Add Teams</h3>
        </div>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
                <div class="md-input-wrapper md-input-filled">
                    <label for="team_name">Team Name</label>
                    <input type="text" id="team_name" name="team_name" class="md-input label-fixed"
                           required>
                    <span class="md-input-bar "></span>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
            <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="addTeams()">
                Save
            </button>
        </div>
    </div>
</div>
<div class="uk-modal" id="editModal" aria-hidden="true" style="display: none; overflow-y: auto;">
    <div class="uk-modal-dialog" style="top: 97px;">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Edit Page</h3>
            <input type="hidden" id="edit_idTeam" name="edit_idTeam" value="">
        </div>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
                <div class="md-input-wrapper md-input-filled">
                    <label for="edit_team_name">Team Name</label>
                    <input type="text" id="edit_team_name" name="edit_team_name" class="md-input label-fixed" required>
                    <span class="md-input-bar "></span>
                </div>
            </div>
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
            <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="editPage()">
                Save
            </button>
        </div>
    </div>
</div>
<div class="uk-modal" id="deleteModal" aria-hidden="true" style="display: none; overflow-y: auto;">
    <div class="uk-modal-dialog" style="top: 97px;">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Delete Page</h3>
            <input type="hidden" id="delete_idTeam" name="delete_idTeam" value="">
        </div>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
                <p>Are you sure, you want to delete this Team?</p>
            </div>
        </div>


        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
            <button type="button" class="md-btn md-btn-flat md-btn-flat-primary" onclick="deletePage()">
                Delete
            </button>
        </div>
    </div>
</div>
<script>


    function addTeams() {
        $('#team_name').removeClass('md-input-danger');
        var flag = 0;
        var data = {};
        data['team_name'] = $('#team_name').val();
        if (data['team_name'] == '' || data['team_name'] == undefined || data['team_name'] < 1) {
            $('#team_name').addClass('md-input-danger');
            flag = 1;
            return false;
        }
        if (flag === 0) {
            CallAjax('<?= base_url('Teams/addData')?>', data, 'POST', function (res) {
                console.log(res);
                if (res != '' && JSON.parse(res).length > 0) {
                    var response = JSON.parse(res);
                    try {
                        console.log(response);
                        notificatonShow(response[0], response[1]);
                        if (response[1] === 'success') {
                            hideModal('addModal');
                            window.location.reload();
                        }
                    } catch (e) {
                    }
                }
            });
        }
    }

    function getEdit(obj) {
        var data = {};
        data['id'] = $(obj).attr('data-teamid');
        if (data['id'] != '' && data['id'] != undefined) {
            CallAjax('<?= base_url('Teams/getEdit')?>', data, 'POST', function (result) {
                if (result != '' && JSON.parse(result).length > 0) {
                    var a = JSON.parse(result);
                    console.log(a);
                    try {
                        $('#edit_idTeam').val(data['id']);
                        $('#edit_team_name').val(a[0]['team_name']);
                    } catch (e) {
                    }
                    showModal('editModal');
                }
            });
        } else {
            notificatonShow('Something went wrong, Try again', 'danger');
        }
    }

    function editPage() {
        $('#edit_team_name').removeClass('md-input-danger');
        var flag = 0;
        var data = {};
        data['idTeam'] = $('#edit_idTeam').val();
        data['team_name'] = $('#edit_team_name').val();
        if (data['team_name'] == '' || data['team_name'] == undefined || data['team_name'] == 0) {
            $('#edit_team_name').addClass('md-input-danger');
            flag = 1;
            return false;
        }
        if (flag === 0) {
            CallAjax('<?= base_url('Teams/editData')?>', data, 'POST', function (res) {
                if (res == 1) {
                    hideModal('editModal');
                    notificatonShow('Successfully Edited', 'success');
                    window.location.reload();
                } else {
                    notificatonShow('Something went wrong, Try again', 'danger');
                }
            });
        }
    }

    function getDelete(obj) {
        var id = $(obj).attr('data-teamid');
        $('#delete_idTeam').val(id);
        showModal('deleteModal');
    }

    function deletePage() {
        var flag = 0;
        var data = {};
        data['id'] = $('#delete_idTeam').val();
        if (data['id'] == '' || data['id'] == undefined || data['id'] == 0) {
            notificatonShow('Something went wrong, Try again', 'danger');
            flag = 1;
            return false;
        }
        if (flag === 0) {
            CallAjax('<?= base_url('Teams/deleteData')?>', data, 'POST', function (res) {
                if (res == 1) {
                    hideModal('deleteModal');
                    notificatonShow('Successfully Deleted', 'success');
                    window.location.reload();
                } else {
                    notificatonShow('Something went wrong, Try again', 'danger');
                }
            });
        }
    }


</script>
