
    <!-- AppSeed Edit panel -->

    <?php if ( TRUE == $assets->IS_EDITABLE ) { ?>

        <div id="edit_panel_wrapper" class="row">

            <div class="col-sm-12 header-edit">

                <button id="clear_history" type="button" class="btn btn-default">Undo Changes</button>
                &nbsp;&nbsp;
                <button id="edit_logout" type="button" class="btn btn-default">Logout</button>
                &nbsp;&nbsp;
                <button id="edit_html"   type="button" class="btn btn-default">Edit</button>
                &nbsp;&nbsp;
                <button id="edit_save"   style="display:none" type="button" class="btn btn-default">Save</button>
                &nbsp;&nbsp;
                <button id="edit_cancel" style="display:none" type="button" class="btn btn-default">Cancel</button>
                &nbsp;&nbsp;
                <span id="notif"></span>
                &nbsp;&nbsp;Current theme: 
                <?php 
                    echo $theme; 

                    if ( isset( $note ) ) {
                        echo ' ' . $note;
                    }
                ?> 
            </div>    

        </div>

    <?php } else { ?>
        
        <!-- THEME NOT EDITABLE via cfg settings -->

    <?php } ?> 

