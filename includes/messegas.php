<?php
            if (isset($_SESSION["errors"])) { ?>
                <div class="container col-md-8 mp-8">
                    <div class="row">
                        <div class="alert mx-auto mb-4 alert-danger">
                            <?php foreach ($_SESSION["errors"] as $err) {
                                print "<li>$err</li>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php }elseif(isset($_SESSION["success"])){ ?>
                 <div class="container col-md-8 mp-8">
                 <div class="row">
                     <div class="alert mx-auto mb-4 alert-success">
                         <?php 
                             print "<li>{$_SESSION["success"]}</li>";
                         ?>
                     </div>
                 </div>
             </div>
            <?php } ?>