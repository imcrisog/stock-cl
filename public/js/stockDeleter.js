const buttonForDelete = document.getElementById('buttonForDelete');
const deleter = document.getElementById('deleter');
const backDeleter = document.getElementById('backDeleter');
const background = document.getElementById('background');
const formDeleter = document.getElementById('formDeleter');

buttonForDelete.addEventListener('click', function(e) {
    e.preventDefault();
    deleter.classList.remove('hidden');
    background.classList.remove('hidden');
    formDeleter.classList.replace('opacity-0', 'opacity-100');
});

backDeleter.addEventListener('click', function(e) {
    e.preventDefault();
    formDeleter.classList.replace('opacity-100', 'opacity-0')
    deleter.classList.add('hidden');
    background.classList.add('hidden');
});

background.addEventListener('click', function(e) {
    e.preventDefault();
    formDeleter.classList.replace('opacity-100', 'opacity-0')
    deleter.classList.add('hidden')
    background.classList.add('hidden');
});