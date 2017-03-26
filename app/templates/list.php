
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Сущности</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
              integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="<?= TEMP_PATH ?>/style.css">
        <script src="https://use.fontawesome.com/35f65baac5.js"></script>
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
        </script>
        <script src="<?= TEMP_PATH ?>/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div class="main">
        <h2 class="task-headline">
            Список сущностей
        </h2>
        <ul id="list">
            <? foreach ( $resultArr as $value ):?>
            <li data-id="<?= $value['id']?>" class="one-tile">
                <a href="<?= SITE_PATH.'detail/'.$value['id']?> ">
                    <div class="flex center">
                        <div data-area="first_name_ed"><?= $value['first_name']?></div>
                        <div data-area="last_name_ed"><?= $value['last_name']?></div>
                        <div data-area="birthdate_ed"><?= $value['birthdate']?></div>
                        <div data-area="language_ed"><?= $value['language']?></div>
                        <div>
                            <button type="button" class="btn btn-primary btn-sm edit-entity" data-toggle="modal" data-target="#editModal">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="description" data-area="description_ed">
                        <?= $value['description']?>
                    </div>
                    <div class="flex">
                        <div>
                            marital_status: <span data-area="marital_status"><? echo ($value['marital_status'])? 'Женат': 'Не женат' ?></span>
                        </div>
                        <div data_area="quantity">
                            quantity: <span><?= $value['quantity']?></span>
                        </div>
                    </div>
                </a>
            </li>
            <? endforeach; ?>
        </ul>
        <div>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addModal">Добавить экземпляр сущности</button>
        </div>
    </div>

    <!--Модалки-->

    <!-- Modal edit-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <form action="#" id="updateForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Редактировать экземпляр</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group row">
                            <label for="first_name" class="col-4 col-form-label">Имя: </label>
                            <div class="col-8">
                                <input class="form-control" type="text" name="first_name" id="first_name_ed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-4 col-form-label">Фамилия: </label>
                            <div class="col-8">
                                <input class="form-control" type="text" name="last_name" id="last_name_ed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthdate" class="col-4 col-form-label">Дата рождения: </label>
                            <div class="col-8">
                                <input class="form-control" type="date" name="birthdate" id="birthdate_ed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marital_status" class="col-5 col-form-label">Семейное положения: </label>
                            <div class="col-7 flex center left">
                                <input class="form-control" type="checkbox" name="marital_status" id="marital_status_ed" checked>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Язык: </label>
                            <fieldset class="form-group col-8">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" id="en" value="en" checked>
                                        EN
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" id="fr" value="fr">
                                        FR
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" id="de" value="de">
                                        DE
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-form-label col-4">Количество: </label>
                            <div class="col-8 flex center">
                                <select class="form-control quantity" name="quantity[]" multiple="multiple" id="quantity_ed">
                                    <option>1</option>
                                    <option>2</option>
                                    <option selected="selected">2+1</option>
                                    <option>3+2</option>
                                    <option>5+3</option>
                                    <option>8+5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description_ed" rows="3" name="description"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary" id="update">Редактировать</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    <!-- Modal add-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <form id="addForm" action="javascript:void(0);">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Добавить</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group row">
                            <label for="first_name" class="col-4 col-form-label">Имя: </label>
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="Введите имя" id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-4 col-form-label">Фамилия: </label>
                            <div class="col-8">
                                <input class="form-control" type="text" placeholder="Введите фамилию" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthdate" class="col-4 col-form-label">Дата рождения: </label>
                            <div class="col-8">
                                <input class="form-control" type="date" placeholder="Дата рождения" id="birthdate" name="birthdate">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="marital_status" class="col-5 col-form-label">Семейное положения: </label>
                            <div class="col-7 flex center left">
                                <input class="form-control" type="checkbox" placeholder="Дата рождения" id="marital_status" name="marital_status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label">Язык: </label>
                            <fieldset class="form-group col-8">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" value="en" checked>
                                        EN
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" value="fr">
                                        FR
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="lang" value="de">
                                        DE
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-form-label col-4">Количество: </label>
                            <div class="col-8 flex center">
                                <select class="form-control quantity" multiple id="quantity" name="quantity[]">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>2+1</option>
                                    <option>3+2</option>
                                    <option>5+3</option>
                                    <option>8+5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="addSend" class="btn btn-primary" value="Сохранить">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!--Конец Модалки-->

    <script src="<?= TEMP_PATH ?>/js/main.js"></script>
    </body>
</html>



