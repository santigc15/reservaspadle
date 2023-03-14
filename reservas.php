<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reservas.css">
    <title>PadelPro</title>
</head>

<div class="grid">
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
  <div class="cell"></div>
</div>




<script>
const cells = document.querySelectorAll('.cell');
let selectedCells = [];

cells.forEach(cell => {
  cell.addEventListener('click', () => {
    const row = cell.parentNode;
    const rowIndex = Array.from(row.parentNode.children).indexOf(row);
    // check if the clicked cell is already selected
    const index = selectedCells.indexOf(cell);
    if (index === -1) {
      // check if another cell in the same row is already selected
      const rowSelected = Array.from(row.children).some(cell => {
        return selectedCells.indexOf(cell) !== -1;
      });
      if (!rowSelected) {
        // check if a cell in another row is already selected
        const otherRowSelected = selectedCells.some(selectedCell => {
          const selectedRow = selectedCell.parentNode;
          const selectedRowIndex = Array.from(selectedRow.parentNode.children).indexOf(selectedRow);
          return selectedRowIndex !== rowIndex;
        });
        // add the cell to the selected cells array if no other cell in another row is selected
        if (!otherRowSelected) {
          selectedCells.push(cell);
          cell.classList.add('selected');
        }
      }
    } else {
      // remove the cell from the selected cells array
      selectedCells.splice(index, 1);
      cell.classList.remove('selected');
    }
  });
});



</script>

