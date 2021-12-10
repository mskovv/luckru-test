const addBtn = document.querySelector('#addBtn')
const addRow = document.querySelector('.row')

// addBtn.addEventListener('click', ()=> {
//   if(addRow.style.opacity = '0'){
//     addRow.style.opacity = '1';
//   }
// })

function showHideAddingRow(){
  addRow.style.opacity === '0' ? addRow.style.opacity = '1' : addRow.style.opacity = '0'
}