let data = [
    {id: 0, items: 'amader text prothom line'},
    {id: 1, items: 'adsfsad text prothom line'},
    {id: 2, items: 'amader text prothom line'},
    
]

let lisitems = document.querySelector('.lisitems')
let idata = document.querySelector('.idata')
let add = document.querySelector('.add')

update()

add.addEventListener('click', function () {
    let newItem = { id: data.length, items: idata.value }
    data.push(newItem)

    update()
    
})



function update() {
    let items = ''

    for (let x = 0; x < data.length; x++) {

        items = items + `<li class="list-group-item">${x+1}.  ${data[x].items}</li>`
    }

    lisitems.innerHTML = items
}



