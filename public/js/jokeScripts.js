const langueAuchat = document.querySelector('#langue-au-chat');

langueAuchat.addEventListener('click', (event) => {
    document.querySelector('#delivery').style.display = 'block';
    document.querySelector('#blague-suivante').style.display = 'block';
})