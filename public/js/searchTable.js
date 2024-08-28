/***
 ========================================================================
                      Search from the table
 ========================================================================
 ***/
 function filterTable() {
    let input = document.querySelector('.searchTerm').value.toLowerCase();
    
    // all table rows
    let rows = document.querySelectorAll('.global_table_search tbody tr');
    
    // hide and show
    rows.forEach(row => {
        // Get all the cell text in the current row
        let cells = row.getElementsByTagName('td');
        let found = false;
        
        // Check if any cell contains the search input
        for (let cell of cells) {
            if (cell.textContent.toLowerCase().includes(input)) {
                found = true;
                break;
            }
        }
        
        // found row
        row.style.display = found ? '' : 'none';
    });
  }
  
// Add event listener for the search input field
document.querySelector('.searchTerm').addEventListener('input', filterTable);
  