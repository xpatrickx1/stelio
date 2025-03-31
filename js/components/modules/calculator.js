const parametersContainer = document.getElementById('parameters');
const resultPriceFrom = document.getElementById('resultPriceFrom');
const resultPriceTo = document.getElementById('resultPriceTo');
const wrongPrice = document.getElementById('wrongPrice');
const resultDetails = document.getElementById('result-details');

let parameters = [
    { name: 'square', unit: 'м2', value: 17 },
    { name: 'angles', value: 4 },
    { name: 'lightingPoints', value: 0 },
    { name: 'chandeliers', value: 0 },
    { name: 'pipes', value: 0 },
];

function createParameterElement(parameter) {
    parameters.forEach( (parameter) => {
        const itemGroup = document.getElementById(parameter.name).closest('.input-group');

        itemGroup.querySelector('.decrement').addEventListener('click', () => {
            parameter.value = Math.max(0, parameter.value - 1);
            document.getElementById(parameter.name).value = parameter.value;
            updateResult();
        });

        itemGroup.querySelector('.increment').addEventListener('click', () => {
            parameter.value++;
            document.getElementById(parameter.name).value = parameter.value;
            updateResult();
        });

        itemGroup.querySelector('input').addEventListener('change', () => {
            parameter.value = document.getElementById(parameter.name).value;
            updateResult();
        });
    });
}

function updateResult() {
    const totalPrice = Math.round(calculatePrice(parameters));
    wrongPrice.textContent = Math.round(totalPrice / 100 * 50);
    resultPriceFrom.textContent = Math.round(totalPrice);
    resultPriceTo.textContent = Math.round(totalPrice / 100 * 120);
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
    const areaPrice = getValueByName('square') * 500;
    const cornersPrice = getValueByName('angles') * 70;
    const lightingPointsPrice = getValueByName('lightingPoints') * 350;
    const chandeliersPrice = getValueByName('chandeliers') * 500;
    const rodPrice = getValueByName('pipes') * 250;
    return basePrice + areaPrice + cornersPrice + lightingPointsPrice + chandeliersPrice + rodPrice; // Повернути розраховану ціну
}

createParameterElement();

updateResult();