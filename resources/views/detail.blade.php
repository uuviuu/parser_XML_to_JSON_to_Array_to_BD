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
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title"> Информация по id {{ $id->id }} </h4>
                    </div>
                    <div class="card-body">
                        <p>Дилер: {{ $id->dealer }}</p>
                        <p>Категория: {{ $id->category }}</p>
                        <p>Тип: {{ $id->type }}</p>
                        <p>Год выпуска: {{ $id->year }}</p>
                        <p>Марка: {{ $id->brand }}</p>
                        <p>Модель: {{ $id->model }}</p>
                        <p>Поколение: {{ $id->generation }}</p>
                        <p>Конфигурация кузова: {{ $id->bodyconfiguration }}</p>
                        <p>Модификация: {{ $id->modification }}</p>
                        <p>Тип двигателя: {{ $id->enginetype }}</p>
                        <p>Объем двигателя: {{ $id->enginevolume }}</p>
                        <p>Мощность двигателя: {{ $id->enginepower }}</p>
                        <p>Тип кузова: {{ $id->bodytype }}</p>
                        <p>Тип дверей: {{ $id->bodydoorcount }}</p>
                        <p>Цвет кузова: {{ $id->bodycolor }}</p>
                        <p>Цвет металла кузова: {{ $id->bodycolormetallic }}</p>
                        <p>Тип привода: {{ $id->drivetype }}</p>
                        <p>Тип коробки передач: {{ $id->gearboxtype }}</p>
                        <p>Рулевое колесо: {{ $id->steeringwheel }}</p>
                        <p>Пробег: {{ $id->mileage }}</p>
                        <p>Единица измерения пробега: {{ $id->mileageunit }}</p>
                        <p>Цена: {{ $id->price }}</p>
                        <p>Специальное предложение: {{ $id->specialoffer }}</p>
                        <p>Доступность: {{ $id->availability }}</p>
                        <p>Тип ПТС: {{ $id->ptstype }}</p>
                        <p>Коилчество фото: {{ $id->photocount }}</p>
                        <p>Количество владельцев: {{ $id->ownerscount }}</p>
                        <p>Состояние транспортного средства: {{ $id->vehiclecondition }}</p>
                        <p>Источник получения: {{ $id->acquisitionsource }}</p>
                        <p>Дата приобретения: {{ $id->acquisitiondate }}</p>
                        <p>Комплектация: {{ $id->complectation }}</p>
                        <p>Количество передач: {{ $id->country }}</p>
                        <p>Страна: {{ $id->gearboxgearcount }}</p>
                        <p>Максимально допустипая масса: {{ $id->maximumpermittedmass }}</p>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mb-2"><a class="text" href="{{ route('edit', $id->id) }}">Изменить</a> </button>
                        <form class='mb-2' action="{{ route('delete', $id->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><a class="text">Удалить</a></button>
                        </form>
                        <button type="button" class="btn btn-primary mb-2"><a class="text"  href="{{ route('index') }}">Вернуться</a></button>
                    </div>
                </div>
            </div>
        </div>
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
