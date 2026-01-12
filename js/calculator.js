const display = document.getElementById('result')
console.log('entro en calculator')

window.addEventListener('DOMContentLoaded', function () {
  display.value = '0'
})
function addToExpression(num) {
  console.log(display.value, num)
  if (!display.value || display.value === '0' || display.value === 'Error') {
    display.value = num
  } else {
    display.value += num
  }
}
function clearResult() {
  console.log('clear')
  display.value = '0'
}

function back() {
  if (display.value.length > 1) {
    display.value = display.value.slice(0, -1)
  } else {
    display.value = '0'
  }
}

function solve() {
  try {
    let expresstioToSolve = display.value.replace(/x/g, '*').replace(/÷/g, '/')
    display.value = eval(expresstioToSolve)
  } catch (e) {
    display.value = 'Error'
  }
}
