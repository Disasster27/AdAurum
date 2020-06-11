
document.addEventListener('DOMContentLoaded', () => {
    function get () {
        fetch('./server.php')
        .then(response => {
            // console.log('response:', response);
            return response.json();
        })
        .then(data => render(data))
        .catch(er => console.log('er:', er));
    };

    get();
    function render (data) {
        for (const key in data) {
            const element = data[key];
            console.log('element:', element)
            
            const el = `<a id="${element.id}" href="page.php?id=${element.id}" class="companies__item">
                        <div class=" company">
                            <div class="company__title">
                                <h3 class="title">${element.title} </h3>
                            </div>
                            <div class="company__address">
                                ${element.address} 
                            </div>
                            <div class="company__tel">
                                ${element.tel} 
                            </div>
                        </div>
                    </a>`;
            document.querySelector('.add').insertAdjacentHTML('beforebegin', el);
        };
    };
    const modal = document.querySelector('.fixed');
    document.querySelector('.add').addEventListener('click',event => {
        modal.classList.remove('invisible');
    });
    modal.addEventListener('click', event => {
        if (event.target.classList.contains('fixed')) {
            modal.classList.add('invisible');
        };

        
    });
    modal.querySelector('.modal__button').addEventListener('click', event => {
        
        
        const object = {
            title: modal.querySelector('#title').value.trim(),
            inn: modal.querySelector('#inn').value.trim(),
            info: modal.querySelector('#info').value,
            gd: modal.querySelector('#gd').value.trim(),
            address: modal.querySelector('#address').value.trim(),
            tel: modal.querySelector('#tel').value.trim(),
        };
        console.log('object:', object);
        addCompany (object);
        modal.classList.add('invisible');
    })
    function addCompany (companyInfo) {
        console.log('companyInfo:', companyInfo)
        let data = new FormData();
                data.append("saveData", JSON.stringify(companyInfo));
                console.log('data:', data);
                fetch("./server.php",
                    {
                        method: "POST",
                        // headers: {
                        //     'Content-Type': 'application/json;charset=utf-8'
                        // },
                        // body: JSON.stringify(companyInfo),
                        body: data,
                    }
                )
                .then(response => console.log('Сообщение отправлено'))
                .catch(error => console.error(error));
    };



});