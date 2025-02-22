
<style>
    #content{
        margin: 500px auto;
    }
    #header, #footer{
        display: none !important;
    }
    
</style>
<form action="" method="post" class="m-5">
        <div class="d-flex justify-content-center">
        <div class="form-input position-relative d-flex" style="max-width: 20rem;">
            <input type="number" name="start" class="form-control rounded-3 py-2 px-3 border border-light"
                id="inputNumber" placeholder=" " value="<?php if(isset($_POST['start'])){
                    $start = $_POST['start'] + 10;
                    echo $start;
                    } ?>">
            <span class="position-absolute"
                style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none;">
                <?php 
                if(isset($_POST['start'])){
                    echo $_POST['start'];
                }else{ 
                    echo 'Start?';} ?>
            </span>
            <input type="submit" name="btn-submit" class="btn btn-light position-absolute rounded-end bold h-100" value="Xác nhận"
            style="right: 0; border-radius: 0;">
        </div>
        </div>
    </form>
    <style>
                    .form-control {
                        border: 1px solid #fff;
                    }

                    .form-control:focus {
                        box-shadow: none;
                        border: 1px solid #fff;
                    }

                    .form-control:not(:placeholder-shown)+span,
                    .form-control:focus+span {
                        display: none;
                    }
                    </style>
<?php
if(!isset($_POST['start'])){?>
<?php }else{ ?>
<div id="content" class="container-flude bg-dark">
    <div class="container">
        <h2 class="text-center m-3 text-light">Chủ đề: <?php echo $getTiktok[0]['topic_name']; ?></h2>
        <table class="table table-striped table-bordered border-secondary rounded">
            <thead>
                <tr class="table-light bg-light">
                    <th scope="col"></th>
                    <th scope="col">TỪ VỰNG</th>
                    <th scope="col">NGHĨA</th>
                </tr>
            </thead>
            <tbody class="table-group-divider table-hover rounded">
                <?php $i=1; foreach($getTiktok as $items) : ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $i++; ?></th>
                    <td><?php echo $items['word']; ?></td>
                    <td><?php echo $items['meaning']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>