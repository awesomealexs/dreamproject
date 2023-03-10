@extends('layout.app')
@section('title', 'патентный реквест')
@section('content')
    <div class="wrapper block">
        <h2 class="title title--h2">
            Создать заявку
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form" action="{{route('save_patent_request')}}" method="POST" autocomplete="off" data-form="patent-request">
            <fieldset>
                <legend>
                    Общая информация
                </legend>

                <div class="form__fields-wrapper form__fields-wrapper--grid">
                    <label class="form__text-wrapper">
                        <span>Товарный знак</span>
                        <input class="form__input-text" type="text" name="trade_mark">
                    </label>

                    <label class="form__text-wrapper">
                        <span>Название организации</span>
                        <input class="form__input-text" type="text" name="client_name">
                    </label>

                    <label class="form__text-wrapper">
                        <span>ИНН:<sup>*</sup></span>
                        <input class="form__input-text" type="text" name="INN" required>
                    </label>

                    <label class="form__text-wrapper">
                        <span>Юр. адрес:</span>
                        <input class="form__input-text" type="text" name="legal_address">
                    </label>

                    <label class="form__text-wrapper">
                        <span>Ген. директор:</span>
                        <input class="form__input-text" type="text" name="ceo_name" placeholder="ФИО">
                    </label>

                    <label class="form__text-wrapper">
                        <span>Бренд:</span>
                        <input class="form__input-text" type="text" name="request_brand">
                    </label>
                </div>
            </fieldset>

            <fieldset class="mt-8">
                <legend>
                    Инфрмация о заявке
                </legend>

                <div class="flex justify-between items-center" style="justify-content: space-between">
                    <label class="form__text-wrapper items-center">
                        <span>Номер заявки:</span>
                        <input class="form__input-text" type="text" name="application_number">
                    </label>

                    <label class="form__text-wrapper items-center">
                        <span>Дата подачи:</span>
                        <input class="form__input-text" type="date" name="date_of_application">
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    Риски
                </legend>

                <div class="form__fields-wrapper risks">
                    <div class="risks__inner">
                        <div class="risks__items">
                        <div>
                            <label>
                                <span class="visually-hidden">Название</span>
                                <input type="text" class="form__input-text" name="risk_name[]" placeholder="Название">
                            </label>

                            <label>
                                <span class="visually-hidden">Номер</span>
                                <input type="text" class="form__input-text" name="risk_number[]" placeholder="Номер">
                            </label>
                        </div>
                    </div>

                    <button class="button--icon" type="button" aria-label="Добавить ешё" title="Добавить" data-action="add">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                            <path d="M3 15.5H28" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.5 28V3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    </div>

                    <label class="form__text-wrapper">
                        <span>Описание рисков:</span>
                        <textarea class="form__textarea" name="descriptiveness_text" placeholder="Общее заключение по рискам"></textarea>
                    </label>

                    <label class="form__text-wrapper">
                        <span>Ложность:</span>
                        <textarea class="form__textarea" name="falsity_text" placeholder="Опишите ложность рисков"></textarea>
                    </label>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    Перспективы
                </legend>

                <div class="progress">
                    <input class="visually-hidden" type="radio" name="perspective_forecast" value="25" id="twenty_five" checked>
                    <label for="twenty_five" class="progress__label">25%</label>

                    <input class="visually-hidden" type="radio" name="perspective_forecast" value="50" id="fifty">
                    <label for="fifty" class="progress__label">50%</label>

                    <input class="visually-hidden" type="radio" name="perspective_forecast" value="75" id="seventy_five">
                    <label for="seventy_five" class="progress__label">75%</label>

                    <input class="visually-hidden" type="radio" name="perspective_forecast" value="95" id="ninety_five">
                    <label for="ninety_five" class="progress__label">95%</label>

                    <div class="progress__bar">
                        <div class="progress__thumb"></div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    Задачи
                </legend>

                <div class="form__checkboxes">
                    @foreach($tasks as $task)
                    <label class="form__checkbox">
                        <input class="visually-hidden" id="task_{{$task->id}}" type="checkbox" name="task[{{$task->id}}]">
                        <span>{{$task->name}}</span>
                    </label>
                    @endforeach
                </div>
            </fieldset>

            <button type="submit" class="form__submit button">
                Сохранить
            </button>
        </form>
    </div>

@endsection
