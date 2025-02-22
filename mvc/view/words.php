<div class="container-flude">
    <div class="container">
        <h2 class="text-center m-3 text-light">All Vocabulary</h2>
        <table class="table table-striped table-bordered border-secondary table-hover rounded">
            <thead>
                <tr class="table-light bg-light">
                    <th scope="col"></th>
                    <th scope="col">TỪ VỰNG</th>
                    <th scope="col" class="d-none d-sm-table-cell">LOẠI TỪ</th>
                    <th scope="col" class="d-none d-sm-table-cell">PHIÊN ÂM</th>
                    <th scope="col">NGHĨA</th>
                    <th class="d-none d-sm-block" scope="col">CHỦ ĐỀ</th>
                </tr>
            </thead>
            <tbody class="table-group-divider table-hover rounded">
                <?php $i=1; foreach($getWordsTopics as $items) : ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $i++; ?></th>
                    <td>
                        <span hidden><?php echo $items['word']; ?></span>
                        <div class="btn-group dropup">
                                    <div class="d-flex align-items-center flex-wrap gap-1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <span class="align-middle"><?php echo $items['word']; ?></span>
                                        <span class="d-sm-none align-middle">(<?php echo $items['acronym'];?>)</span>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="d-flex align-items-center flex-wrap gap-1 dropdown-item-text"><span><?php echo $items['word']; ?></span><i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i></div>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><span class="dropdown-item-text"><?php echo $items['part_of_speech_name']; ?></span></li>
                                        <li><span class="dropdown-item-text"><?php echo $items['transcription']; ?></span></li>
                                        <li><span class="dropdown-item-text"><?php echo $items['meaning']; ?></span></li>
                                        <li><span class="dropdown-item-text"><?php echo $items['topic_name']; ?></span></li>
                                    </ul>
                                </div>
                        
                        <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high align-middle"></i>
                    </td>
                    <td class="d-none d-sm-table-cell"><?php echo $items['part_of_speech_name']; ?></td>
                    <td class="d-none d-sm-table-cell"><?php echo $items['transcription']; ?></td>
                    <td><?php echo $items['meaning']; ?></td>
                    <td class="d-none d-sm-table-cell">
                        <span><?php echo $items['topic_name']; ?></span>
                        <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-center text-secondary">Ex</th>
                    <td colspan="5" class="text-body-secondary">
                        <i class="align-middle text-wrap"><?php echo $items['example_sentence']; ?></i>
                        <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high align-middle"></i>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>