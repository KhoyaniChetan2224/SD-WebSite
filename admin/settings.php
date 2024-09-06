<?php
    require('inc/essentials.php');
    // adminLogin()s;    
    // session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Setting </title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
<?php require('inc/hedar.php') ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4"> Setting </h3>             
            
            <!-- General setting section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#general-s">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg> Edit    
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                    <p class="card-text" id="site_title"></p>
                    <h6 class="card-subtitle mb-1 fw-bold">About as</h6>
                    <p class="card-text" id="site_about"></p>
                </div>
            </div> 
            
            <!-- General setting modal -->
            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="general_s_form ">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">General Settings</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label"> Site Title </label>
                                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"> About us </label>
                                    <textarea name="site_about" id="site_title_inp" class="form-control shadow-none" roes="6" required><textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" onclick="site_title.value = general_data.site_title" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn custom-bg text-white shadow-none">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Shudown Section -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">Shudown website</h5>
                        <div class="form-check form-switch">
                            <form>
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </form>
                        </div>
                    </div>
                    
                    <p class="card-text" id="site_about">
                        No customers will be allowed to book room, when shudown mode is turned on.

                    </p>
                </div>
            </div> 
            
        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>

<script>
    let general_data;

    let general_s_form = doument.getElementById('geeneral_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    function get_general()
    {
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');       

        let shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php" true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onread = function(){
            general_data = JSON.parse(this.responseText);

            site_title.innerText = genearl_data.site_title;
            site_about.innerText = genearl_data.site_about;

            site_title.inp.value = genearl_data.site_title;
            site_about.inp.value = genearl_data.site_about;

            if(general_data.shutdown == 0){
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
            }
        }

        xhr,send('get_general');
    }

    geeneral_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_imp.value);
    }) 

    function upd_general(site_title_val, site_about_val){
        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php" true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onread = function(){

            var myModal = document.getElementByID('general-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();
            
            if(this.responseText == 1){
                alert('success', 'Chenges saved!');
                get_general();
            }
            else{
                alert('error','No Chenges made!');
            }
            
        }

        xhr,send('site_title =' + site_title_val + '&site_about =' site_about_val +'&upd-generl');
    }

    window.onload = function(){
        get_general();
    }
</script>

</body>
</html>










0:14:28