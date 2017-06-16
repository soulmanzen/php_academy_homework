x = prompt('number1');
y = prompt('number2');

console.log(typeof x);
console.log(y);

if (isNaN(x) || isNaN(y) || !x || !y) {
    alert('Ошибка: Данные должны быть числами. Перегрузите страницу и введите числа.')
} else {
    alert(+x + +y);
}