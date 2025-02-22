<div class="container-flude">
    <article class="d-flex gap-3">
        <aside class="d-none d-md-block text-light bg-dark bd-sidebar position-sticky mask"
            style="min-width: 14rem; height: calc(100vh - 5rem); top: 5rem; overflow-Y: auto;">
            <div class="d-flex flex-column position-sticky pt-3 px-3 bg-dark pb-1" style="top: 0; z-index: 10;">
                <div class="d-flex align-items-center gap-3">
                    <i class="fa-solid fa-book-open text-light"
                    style="font-size: 1.5rem; transform: translateY(-15%);"></i>
                    <h5 class="bold">CHỌN CHỦ ĐỀ</h5>
                </div>
                <div class="search w-100 z-1">
                <form action="" class="w-100 border-secondary mx-auto d-none d-md-flex"
                    method="post">
                    <style>
                    .form-control {
                        border: 1px solid #fff;
                        background-color: transparent;
                    }

                    .form-control:focus {
                        box-shadow: none;
                        border: 1px solid #fff;
                        background-color: transparent;
                        
                    }

                    .form-control:not(:placeholder-shown)+span,
                    .form-control:focus+span {
                        display: none;
                    }
                    </style>
                    <div class="form-input w-100 d-none d-sm-flex position-relative">
                        <input type="text" id="name" name="topic" class="form-control border-none w-100" placeholder=" ">
                        <span class="position-absolute"
                            style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none;">Search</span>
                        <button name="submit" class="btn btn-light position-absolute rounded-end"
                            style="right: 0; border-radius: 0;">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
            </div>
        
            <ul>
                <style>
                aside ul li{
                    width: calc(100% - 1.5rem);
                    cursor: pointer;
                }
                aside ul li a {
                    color: #dfe2e6;
                    font-size: 1.2rem;
                }

                aside ul li:hover {
                    background-color: #2b2f33;
                }
                aside ul li:hover a {
                    color: #fff;
                }
                </style>
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Kiểm tra nếu có kết quả tìm kiếm
    if (!empty($searchTopics)) {
        foreach ($searchTopics as $topics) : ?>
            <li onclick="scrollToElementY('<?php echo '#' . str_replace(' ', '',$topics['topic_name']); ?>', -110, event);" class="mx-3 p-2 rounded-3">
            <a  href="#"
                ><?php echo $topics['topic_name']; ?></a>
        </li>
        <?php endforeach;
    } else { ?>
        <p class="text-center text-light">
            <div><span class="text-danger border border-danger rounded-2 bold p-2">Không có kết quả</span></div>
        </p>
    <?php $_POST['topic'] = ' '; }
} else {
    // Nếu không có POST, hiển thị tất cả các chủ đề
    foreach ($getTopics as $topics) : ?>
        <li onclick="scrollToElementY('<?php echo '#' . str_replace(' ', '',$topics['topic_name']); ?>', -110, event);" class="mx-3 p-2 rounded-3">
            <a  href="#"
                ><?php echo $topics['topic_name']; ?></a>
        </li>
    <?php endforeach;
} ?>
            </ul>
        </aside>
        <main class="container" style="min-width: 14rem;">
            <?php
      foreach ($getTopics as $topics) :
        $topic = $topics['topic_name'];
      ?>
            <table class="table table-striped table-bordered border-secondary table-hover rounded">
                <h2 class="text-center m-3 text-light" id="<?php echo str_replace(' ', '',$topic); ?>">
                    <span><?php echo $topic; ?></span>
                    <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i>
                </h2>
                <thead>
                    <tr class="table-light bg-light">
                        <th scope="col"></th>
                        <th scope="col">TỪ VỰNG</th>
                        <th scope="col" class="d-none d-sm-table-cell">LOẠI TỪ</th>
                        <th scope="col" class="d-none d-sm-table-cell">PHIÊN ÂM</th>
                        <th scope="col">NGHĨA</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
            $i = 1;
            foreach ($getWordsTopics as $items) :
              if ($items['topic_name'] == $topic) {
            ?>
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
                                            <div class="d-flex align-items-center gap-1 dropdown-item-text"><span><?php echo $items['word']; ?></span><i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i></div>
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
                </tr>
                <tr>
                    <th scope="row" class="text-center text-secondary">Ex</th>
                    <td colspan="5" class="text-body-secondary">
                        <i class="align-middle text-wrap"><?php echo $items['example_sentence']; ?></i>
                        <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high align-middle"></i>
                    </td>
                </tr>
                    <?php } ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endforeach; ?>
        </main>
    </article>
</div>