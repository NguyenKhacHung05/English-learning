<div class="container-flude mt-5">
    <div class="container">
        <div class="d-block d-md-flex gap-5">
            <table class="table table-striped table-bordered border-secondary table-hover rounded">
                <thead>
                    <tr class="table-light bg-light">
                        <th scope="col" class="text-center">All Sentances</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-hover rounded">
                    <?php $i = 1;
                    foreach ($getSentences as $items) :
                    ?>
                            <tr>
                                <td>
                                    <span class="align-middle"><?php echo $items['sentence']; ?></span>
                                    <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high align-middle"></i>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-body-secondary">
                                    <i class="align-middle text-wrap"><?php echo $items['meaning']; ?></i>
                                </td>
                            </tr>
                    <?php
                        $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>