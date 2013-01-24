$(document).ready(function() { 
    $('#table').trigger('click');
    // call the tablesorter plugin
    $("#table").tablesorter({sortList: [[2,1]],});
    $("#table2").tablesorter({sortList: [[2,1]],});
    $("#table3").tablesorter({sortList: [[2,1]],});
}); 
