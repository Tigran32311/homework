const btn = document.querySelector('#add');
//Функция отправляет данные с формы методом post на файл test.php
btn.addEventListener('click', () => setData());
//Получение данных с формы
var inputid = document.getElementById('id').value;
var inputName = document.getElementById('name').value;
var inputAge = document.getElementById('age').value;
async function setData() {
    const data = await axios({
        method: 'post',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        url: 'test.php',
        data: {
            'id': inputid,
            'name': inputName,
            'age': inputAge
        }
    });
}