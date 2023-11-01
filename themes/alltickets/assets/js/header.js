document.querySelector('.abrir').addEventListener('click', function () {
    const myTimeout = setTimeout(myGreeting, 1000);

    function myGreeting() {
        document.querySelector('main').style.display = 'none';
        document.querySelector('footer').style.display = 'none';
        document.querySelector('body').style.backgroundColor = '#1d1d22';
    }
})

document.querySelector('.abrir').addEventListener('click', function () {
    document.querySelector('.menu').classList.add('mostrar');
})

document.querySelector('.cerrar').addEventListener('click', function () {
    // const myTimeout = setTimeout(myGreeting, 500);
    document.querySelector('.menu').classList.remove('mostrar');
    
    // function myGreeting() {
        document.querySelector('main').style.display = 'block';
        document.querySelector('footer').style.display = 'block';
        document.querySelector('body').style.backgroundColor = 'transparent';
    // }

})

var cont = document.querySelectorAll('.coll').length;

for (let i = 1; i <= cont; i++) {
    if (!document.getElementById('sub' + i).classList.contains('active')) {
        var content = document.getElementById('sub' + i).nextElementSibling;
        content.style.display = 'none';
    }

    document.getElementById('sub' + i).addEventListener('click', function () {
        this.innerHTML = '<i class="bi bi-chevron-up"></i>'
        this.classList.add('active');
        this.previousElementSibling.style.color = "#3ec7c5";
        this.style.color = "#3ec7c5";
        var content = this.nextElementSibling;
        content.style.display = 'block';
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.style.padding = '0 0.5em';
            this.innerHTML = '<i class="bi bi-chevron-down"></i>'
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

        for (let j = 1; j <= cont; j++) {
            if (j != i) {
                if (document.getElementById('sub' + j).classList.contains('active')) {
                    document.getElementById('sub' + j).innerHTML = '<i class="bi bi-chevron-down"></i>';
                    document.getElementById('sub' + j).classList.remove('active');
                    document.getElementById('sub' + j).previousElementSibling.style.color = "white";
                    var content = document.getElementById('sub' + j).nextElementSibling;
                    content.style.padding = '0 0.5em';
                    content.style.maxHeight = null;
                }
            }
        }
    })
}

