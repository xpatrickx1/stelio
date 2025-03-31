const resultPricePop = document.getElementById('resultPricePop');

let parameters = [
    { name: 'squarePop', unit: 'м2', value: 3 },
    { name: 'lightingPointsPop', value: 1 },
    { name: 'material', value: 'classic' },
];

function createParamEl(parameter) {
    parameters.forEach( (parameter) => {
        const param = document.getElementById(parameter.name);
        
        if (param) {
            const itemGroup = param.closest('.input-group');

            itemGroup.querySelector('.decrement').addEventListener('click', () => {
                parameter.value = Math.max(0, parameter.value - 1);
                document.getElementById(parameter.name).value = parameter.value;
                updResult();
            });
    
            itemGroup.querySelector('.increment').addEventListener('click', () => {
                parameter.value++;
                document.getElementById(parameter.name).value = parameter.value;
                updResult();
            });
    
            itemGroup.querySelector('input').addEventListener('change', () => {
                parameter.value = document.getElementById(parameter.name).value;
                updResult();
            });
        }
    });
}

function updResult() {
    const totalPrice = Math.round(calculatePrice(parameters));
    wrongPrice.textContent = Math.round(totalPrice / 100 * 50);
    resultPricePop.textContent = Math.round(totalPrice);
}

function getValueByName(name) {
    for (let i = 0; i < parameters.length; i++) {
        if (parameters[i].name === name) {
            return parameters[i].value;
        }
    }
    return null; 
}

function calculatePrice(parameters) {
    const basePrice = 1000;
    const areaPrice = getValueByName('squarePop') * 500;
    const lightingPointsPrice = getValueByName('lightingPointsPop') * 350;
    return basePrice + areaPrice + lightingPointsPrice;
}

createParamEl();

updResult();