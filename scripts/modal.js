// Script modal para adicionar
let close = document.querySelector('#close');
let add = document.querySelector('#add');
let open = document.querySelector('#adicionar');

open.addEventListener('click', () => {

    add.style.display = 'flex';
    formulario.reset();
});

close.addEventListener('click', () => {
    add.style.display = 'none'
})

// Script modal para editar
let btnEdit = document.querySelectorAll('#editar');
let edd = document.querySelector('#edd');

// Campos do modal para UPDATE
let id = document.querySelector('#Eid')
let nome = document.querySelector('#Enome')
let cpf = document.querySelector('#Ecpf')
let cel = document.querySelector('#Ecelular')
let rua = document.querySelector('#Erua')
let num = document.querySelector('#Enumero')

// Botões de editar e salvar
let suco = document.querySelector('#suco');
let lapis = document.querySelector('#lapis')


// Para abrir o modal para cada button criado
for (let btn of btnEdit) {

    let btnId = btn.value;

    btn.addEventListener('click', () => {
        add.style.display = 'flex'
        lapis.style.display = 'flex'
        suco.style.display = 'none'

        let api = `http://localhost/dash/php/api.php?id=${btnId}`

        fetch(api).then(function (response) {
            let data = response.json();
            return data
        }).then(function (data) {

            id.value = data[0]['id']
            nome.value = data[0]['nome']
            cpf.value = data[0]['cpf']
            cel.value = data[0]['celular']
            rua.value = data[0]['rua']
            num.value = data[0]['numero']

        })
    })
}


// Validação dos campos do formulario
let formulario = document.querySelector('form')

formulario.onsubmit = event => {

    if (cpf.value.length <= 13) {
        event.preventDefault()
        cpf.style.borderColor = 'red'
        setTimeout(() => {
            cpf.style.borderColor = '#68A7AD'
        }, 3000)
    }

    if (cel.value.length <= 13) {
        event.preventDefault()
        cel.style.borderColor = 'red'
        setTimeout(() => {
            cel.style.borderColor = '#68A7AD'
        }, 3000)
    }

    if (nome.value == "") {
        event.preventDefault()
        nome.style.borderColor = 'red'
        setTimeout(() => {
            nome.style.borderColor = '#68A7AD'
        }, 3000)
    }

    if (rua.value == "") {
        event.preventDefault()
        rua.style.borderColor = 'red'
        setTimeout(() => {
            rua.style.borderColor = '#68A7AD'
        }, 3000)
    }

    if (num.value == "") {
        event.preventDefault()
        num.style.borderColor = 'red'
        setTimeout(() => {
            num.style.borderColor = '#68A7AD'
        }, 3000)
    }

}

// Funções para confirmações de Delete
let modalDelete = document.querySelector('#modalDelete')
let spanName = document.querySelector('span')
let cancel = document.querySelector('#cancel')
let confirm = document.querySelector('#confirm')

function Delete(id, nome) {
    modalDelete.style.display = 'flex'
    spanName.innerHTML = `${nome}`

    confirm.addEventListener('click', () => {
        window.location.href = `php/delete_patients?id=${id}`
    })

    cancel.addEventListener('click', () => {
        modalDelete.style.display = 'none'
    })

}

// Função para confirmação de registros adicionados
let modalInsert = document.querySelector('#modalInsert');
let adicionado = document.querySelector('#adicionado');

function Insert() {
    modalInsert.style.display = 'flex'
    adicionado.innerHTML = nome.value
    setTimeout(() => {
        modalInsert.style.display = 'none'
        window.location = '/dash/index.php'
    }, 2000)
}

// Função para confirmação de registros alterados
let modalUpdate = document.querySelector('#modalUpdate');
let editado = document.querySelector('#editado');

function Update(nome) {
    modalUpdate.style.display = 'flex'
    editado.innerHTML = nome.value
}   

// Funções para o search
let search = document.querySelector('#search');

search.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        Search();
    }
})

function Search() {
    window.location = `/dash/index.php?search=${search.value}`
}





