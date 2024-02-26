<?php
include_once("templates/header.php");

?>
    <div class="container">
         <?php if(isset($printmsg) && $printmsg != ''): ?>
            <p id="msg"><?= $printmsg ?></p>

            <?php endif; ?>
            <h1 id="main-title">Minha Agenda</h1>
            <?php if(count($contacts ) > 0): ?>
                <table class="table" id="contacts-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contacts): ?>
                            <tr>
                                <td scope="row"><?= $contacts["id"] ?></td>
                                <td scope="row"><?= $contacts["name"] ?></td>
                                <td scope="row"><?= $contacts["phone"] ?></td>
                                <td class="action">
                                    <a href="#"> <i class="fas fa-eye check-icon"></i></a>
                                    <a href="#"> <i class="far fa-edit edit-icon"></i></a>
                                    <button type="submit"><i class="fas fa-times delete-icon"></i>
                                    </button>

                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p id="empty-list-text">Ainda não há contatos na sua agenda, <a href="<?= $BASE_URL ?>creater.php">clique aqui para adicionar</a></p>
            <?php endif; ?>
    </div>


<?php
include_once("templates/footer.php");

?>