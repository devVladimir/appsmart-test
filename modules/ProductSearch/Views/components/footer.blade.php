    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script>
      
        $('.btn-save').on('click', function() {
          let btn = this;
          let row = btn.closest('tr');
          let data = row.dataset;
          data._token = $("input[name='_token']").val();
          $.ajax({
            type: 'PUT',
            url: '/save_product',
            data: data,
            success: function(resp) {
              if(resp.saved) {
                $(btn).attr('disabled', true);
                $(btn).html('Saved');
              }
            },
            error: function(resp) {
              btn.classList.remove('btn-primary');
              btn.classList.add('btn-danger');
              $(btn).html('Error');
            }
          });

        });
    </script>
</body>
</html>