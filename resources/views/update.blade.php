<!doctype html>
<html lang="ru">

<head>
    <title> {{ $id->id }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('update', $id->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title"> Изменить информацию по id {{ $id->id }} </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <p>Дилер: </p>
                                <input type="text" class="form-control" name="dealer" value="{{ $id->dealer }}">
                            </div>
                            <div class="form-group">
                                <label>Категория: </label>
                                <input type="text" class="form-control" name="category" value="{{ $id->category }}">
                            </div>
                            <div class="form-group">
                                <label>Тип: </label>
                                <input type="text" class="form-control" name="type" value="{{ $id->type }}">
                            </div>
                            <div class="form-group">
                                <label>Год выпуска: </label>
                                <input type="text" class="form-control" name="year" value="{{ $id->year }}">
                            </div>
                            <div class="form-group">
                                <label>Марка: </label>
                                <input type="text" class="form-control" name="brand" value="{{ $id->brand }}">
                            </div>
                            <div class="form-group">
                                <label>Модель: </label>
                                <input type="text" class="form-control" name="model" value="{{ $id->model }}">
                            </div>
                            <div class="form-group">
                                <label>Поколение: </label>
                                <input type="text" class="form-control" name="generation"
                                    value="{{ $id->generation }}">
                            </div>
                            <div class="form-group">
                                <label>Конфигурация кузова: </label>
                                <input type="text" class="form-control" name="bodyconfiguration"
                                    value="{{ $id->bodyconfiguration }}">
                            </div>
                            <div class="form-group">
                                <label>Модификация: </label>
                                <input type="text" class="form-control" name="modification"
                                    value="{{ $id->modification }}">
                            </div>
                            <div class="form-group">
                                <label>Тип двигателя: </label>
                                <input type="text" class="form-control" name="enginetype"
                                    value="{{ $id->enginetype }}">
                            </div>
                            <div class="form-group">
                                <label>Объем двигателя: </label>
                                <input type="text" class="form-control" name="enginevolume"
                                    value="{{ $id->enginevolume }}">
                            </div>
                            <div class="form-group">
                                <label>Мощность двигателя: </label>
                                <input type="text" class="form-control" name="enginepower"
                                    value="{{ $id->enginepower }}">
                            </div>
                            <div class="form-group">
                                <label>Тип кузова: </label>
                                <input type="text" class="form-control" name="bodytype"
                                    value="{{ $id->bodytype }}">
                            </div>
                            <div class="form-group">
                                <label>Тип дверей: </label>
                                <input type="text" class="form-control" name="bodydoorcount"
                                    value="{{ $id->bodydoorcount }}">
                            </div>
                            <div class="form-group">
                                <label>Цвет кузова: </label>
                                <input type="text" class="form-control" name="bodycolor"
                                    value="{{ $id->bodycolor }}">
                            </div>
                            <div class="form-group">
                                <label>Цвет металла кузова: </label>
                                <input type="text" class="form-control" name="bodycolormetallic"
                                    value="{{ $id->bodycolormetallic }}">
                            </div>
                            <div class="form-group">
                                <label>Тип привода: </label>
                                <input type="text" class="form-control" name="drivetype"
                                    value="{{ $id->drivetype }}">
                            </div>
                            <div class="form-group">
                                <label>Тип коробки передач: </label>
                                <input type="text" class="form-control" name="gearboxtype"
                                    value="{{ $id->gearboxtype }}">
                            </div>
                            <div class="form-group">
                                <label>Рулевое колесо: </label>
                                <input type="text" class="form-control" name="steeringwheel"
                                    value="{{ $id->steeringwheel }}">
                            </div>
                            <div class="form-group">
                                <label>Пробег: </label>
                                <input type="text" class="form-control" name="mileage" value="{{ $id->mileage }}">
                            </div>
                            <div class="form-group">
                                <label>Единица измерения пробега: </label>
                                <input type="text" class="form-control" name="mileageunit"
                                    value="{{ $id->mileageunit }}">
                            </div>
                            <div class="form-group">
                                <label>Цена: </label>
                                <input type="text" class="form-control" name="price" value="{{ $id->price }}">
                            </div>
                            <div class="form-group">
                                <label>Специальное предложение: </label>
                                <input type="text" class="form-control" name="specialoffer"
                                    value="{{ $id->specialoffer }}">
                            </div>
                            <div class="form-group">
                                <label>Доступность: </label>
                                <input type="text" class="form-control" name="availability"
                                    value="{{ $id->availability }}">
                            </div>
                            <div class="form-group">
                                <label>Тип ПТС: </label>
                                <input type="text" class="form-control" name="ptstype" value="{{ $id->ptstype }}">
                            </div>
                            <div class="form-group">
                                <label>Коилчество фото: </label>
                                <input type="text" class="form-control" name="photocount"
                                    value="{{ $id->photocount }}">
                            </div>
                            <div class="form-group">
                                <label>Количество владельцев: </label>
                                <input type="text" class="form-control" name="ownerscount"
                                    value="{{ $id->ownerscount }}">
                            </div>
                            <div class="form-group">
                                <label>Состояние транспортного средства: </label>
                                <input type="text" class="form-control" name="vehiclecondition"
                                    value="{{ $id->vehiclecondition }}">
                            </div>
                            <div class="form-group">
                                <label>Источник получения: </label>
                                <input type="text" class="form-control" name="acquisitionsource"
                                    value="{{ $id->acquisitionsource }}">
                            </div>
                            <div class="form-group">
                                <label>Дата приобретения: </label>
                                <input type="text" class="form-control" name="acquisitiondate"
                                    value="{{ $id->acquisitiondate }}">
                            </div>
                            <div class="form-group">
                                <label>Комплектация: </label>
                                <input type="text" class="form-control" name="complectation"
                                    value="{{ $id->complectation }}">
                            </div>
                            <div class="form-group">
                                <label>Количество передач: </label>
                                <input type="text" class="form-control" name="country" value="{{ $id->country }}">
                            </div>
                            <div class="form-group">
                                <label>Страна: </label>
                                <input type="text" class="form-control" name="gearboxgearcount"
                                    value="{{ $id->gearboxgearcount }}">
                            </div>
                            <div class="form-group">
                                <label>Максимально допустипая масса: </label>
                                <input type="text" class="form-control" name="maximumpermittedmass"
                                    value="{{ $id->maximumpermittedmass }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"><a class="text">Сохранить </button>
                            <button type="button" class="btn btn-primary"><a class="text"
                                    href="{{ route('detail', $id->id) }}">Вернуться</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
