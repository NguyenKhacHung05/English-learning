<?php 
if(isset($_POST['word']))
    $word = $_POST['word'];
?>

<div class="container-flude" style="overflow-Y: scroll;">
<div class="container" style="min-height: calc(100vh - 8rem); min-width: 14rem; ">
    <div class="search w-100">
                <form action="" class="border-secondary mx-auto p-3 d-flex"
                    method="post">
                    <style>
                    .form-control {
                        background-color: transparent;
                        border: 1px solid #fff;
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
                    <div class="form-input w-100 d-flex position-relative">
                        <input type="text" id="name" name="word" class="form-control border-none w-100" placeholder=" ">
                        <span class="position-absolute"
                            style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none;">Search</span>
                        <button class="btn btn-light position-absolute rounded-end" name="search-word"
                            style="right: 0; border-radius: 0;">Search
                        </button>
                    </div>
                </form>
            </div>
            <?php if(isset($_POST['word']) && $word!=''){?>
    <h2 class="text-center m-3 text-light"><span class="bg-light px-3 pb-2 rounded-5 text-center bold" style="color: var(--primary-color);"><?php echo $word; ?></span></h2>
<?php } ?>
    <?php if(count($getSearch)>0){?>
    <table class="table table-striped table-bordered border-secondary container table-hover rounded">
      <thead class="rouded">
        <tr class="table-light bg-light">
        <th scope="col"></th>
          <th scope="col">TỪ VỰNG</th>
          <th scope="col" class="d-none d-sm-table-cell">LOẠI TỪ</th>
          <th scope="col" class="d-none d-sm-table-cell">PHIÊN ÂM</th>
          <th scope="col">NGHĨA</th>
          <th class="d-none d-sm-block" scope="col">CHỦ ĐỀ</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
     <?php foreach ($getSearch as $items) : ?>
      <tr>
                    <th scope="row" class="text-center"><?php echo ++$i; ?></th>
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
                    <td class="d-none d-sm-table-cell">
                        <span><?php echo $items['topic_name']; ?></span>
                        <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i>
                    </td>
                </tr>
        <tr>
          <th scope="row" class="text-center text-secondary">Ex</th>
          <td colspan="5" class="text-body-secondary">
            <span><?php echo $items['example_sentence']; ?></span>
            <i id="speaking" onclick="speak(this)" class="fa-solid fa-volume-high"></i>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php } else { ?>
  <?php if(isset($_POST['word'])){?>
    <h2 class="text-center mt-5 text-light">
      <div><span class="text-danger border border-danger px-3 rounded-2 p-3 bold">Không có kết quả</span></div>
    </h2>
      <?php }} ?>
  </div>
</div>

