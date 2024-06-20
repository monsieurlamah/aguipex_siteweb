$(document).ready(function() {
      $('.datatable').DataTable({
        "order": [[ 2, "desc" ]],
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, 100, -1],
          [10, 25, 50, 100, "Tous"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Rechercher...",
        }

      });

      var table = $('.datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

      // Menu Row btn collapse plus
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });

    });
