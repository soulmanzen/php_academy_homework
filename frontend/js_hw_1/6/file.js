var login = prompt('login');

if (login === 'валера') {
    var password = prompt('password');
    if (password === 'самый лучший Валера') {
        alert('Добро пожаловать');
    } else {
        alert('Пароль неверен');
    }
} else {
    alert('ты кто такой?');
}