
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue, cond;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (j = 0; j < 9; j++) {
    for (i = 0; i < tr.length; i++) {

            td = tr[i].getElementsByTagName("td")[j];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                cond=1;
            } else {
                tr[i].style.display = "none";
            }
            }
        }
        if (cond==1)
            break;
    }
    } 



