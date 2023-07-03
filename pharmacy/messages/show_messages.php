    <?php
    include_once '../inc/user_data.php';
    include_once '../inc/controller.php';
    $add_user = new controller;
    $recicever_id = $add_user->get_request('cc');

    $echats = $add_user->echats_data($hos_key, $user_id, $recicever_id);

    foreach ($echats as $key => $dd) {
        ?>
        <div class="<?php if ($dd->me == $user_id) {
            echo 'chat-message left';
        } else {
            echo 'chat-message right';
        } ?>">
            <img class="message-avatar"
                 src="../admin/<?= $dd->photo;  ?>"
                 alt="">
            <div class="message">
                <a class="message-author" href="chat_view.html#"><?= $dd->fullname; ?></a>
                <span class="message-date"> <?= $add_user->timeAgo($dd->date_time); ?> </span>
                <span class="message-content">
                                                <?= $dd->message; ?>
                                                </span>
            </div>
        </div>


        <?php
    }
    ?>