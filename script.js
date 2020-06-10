
document.addEventListener('DOMContentLoaded', () => {
    function get () {
        fetch('./server.php')
        .then(response => {
            console.log('response:', response);
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
            
            const el = `<a id="${element.id}" href="#" class="companies__item">
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

    document.querySelector('.add').addEventListener('click',event => {
        console.log(event.target)
    })
    function addCompany () {

    }

})