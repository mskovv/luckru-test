const addBtn = document.querySelector('#addBtn')
const addRow = document.querySelector('.row')

function showHideAddingRow(){
  addRow.style.opacity === '0' ? addRow.style.opacity = '1' : addRow.style.opacity = '0'
}