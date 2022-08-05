// const horas = new Date();
// console.log( horas.getHours());

// const members = ['João', 'Cintia', 'Itamar', 'Wynaman', 'Rodrigo']

let divElementKitchen = document.querySelector('.person-kitchen')
let divElementEggs = document.querySelector('.person-eggs')

function checkUser() {
  const userName = localStorage.getItem('name')

  if (userName != '') {
    h1.style.display = 'block'
  }
}

const h1 = document.createElement('h1')
localStorage.getItem('name')
h1.innerHTML = memberInit
divElementKitchen.appendChild(h1)

function checkHours() {
  localStorage.clear()

  switch (memberInit) {
    case 'João':
      h1.innerHTML = memberInit
      divElementKitchen.appendChild(h1)
      localStorage.setItem('name', memberInit)
      memberInit = 'Cintia'
      break

    case 'Cintia':
      h1.innerHTML = memberInit
      divElementKitchen.appendChild(h1)
      localStorage.setItem('name', memberInit)
      memberInit = 'João'
      break
    default:
      console.log('Encerrou o ciclo')
  }
}

// checkHours()
setInterval(checkHours, 2000)
