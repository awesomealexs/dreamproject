class RequestForm {
    constructor(form) {
        this.form = form;
        this.addRiskButton = this.form.querySelector('.risks [data-action="add"]');
        this.risksWrapper = this.form.querySelector('.risks__items');
        this._init();
    }

    _init() {
        this.addRiskButton.addEventListener('click', this._renderRisk);
    }

    _renderRisk = () => {
        const template = `<div>
                            <label>
                                <span class="visually-hidden">Название</span>
                                <input type="text" class="form__input-text" name="risk_name[]" placeholder="Название">
                            </label>

                            <label>
                                <span class="visually-hidden">Номер</span>
                                <input type="text" class="form__input-text" name="risk_number[]" placeholder="Номер">
                            </label>
                        </div>`;
        this.risksWrapper.insertAdjacentHTML('beforeend', template);
    }
}

const form = document.querySelector('[data-form="patent-request"]');
new RequestForm(form);