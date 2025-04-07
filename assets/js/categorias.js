
fetch('produto.json')
.then(responde => response.json())
.then(data => {
buscarProduto(data)
})

function buscarProduto (data){
    let inputBuscar = documentquerySelector ('.submitBuscar')
    submitBuscar.addEventListener ('submit', (event) => {
        console.log(ViewTransition.target.value)
        let termoBuscado = event.target.value.toLowerCase()
        console.log(termoBuscado)

        let dadosFiltrados = data.filter (card => produtosFiltrar == termoBuscado)
        console.log(dadosFiltrados)

        let produtosFiltrar = document.querySelectorAll('.submitBuscar')
    })
}

function ocultarTodosProdutos (produtosFiltrar){
    produtosFiltrar.forEach(() => {
        produtosFiltrar[indice].classList.add('ocultar')
    })
}

