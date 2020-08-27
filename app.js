let data = [
    { id: 0, text: ' Lorem, ipsum dolor sit amet consectetur.' },
    { id: 1, text: ' amet consectetur. Lorem, ipsum dolor sit ' },
    { id: 2, text: 'ipsum dolor sit amet Lorem, consectetur.' },
    { id: 3, text: 'consectetur. Lorem, ipsum dolor sit amet ' },
    { id: 4, text: 'consectetur. Lorem, ipsum dolor sit amet ' },
]

let items = document.querySelector('.items')
let idata = document.querySelector('.idata')
let add = document.querySelector('.add')

update()

console.log(idata.value);

add.addEventListener('click', function () {

    let ourdata = {
        id: data.length,
        text: idata.value
    }
    idata.value = ''

    data.push(ourdata)
    update()
    
})











































    
function update() {
    let list = '';

    for (let a = 0; a < data.length; a++) {
        list = list + `<li class="list-group-item">${a+1}.  ${data[a].text}</li>`
    }
    items.innerHTML = list
}










