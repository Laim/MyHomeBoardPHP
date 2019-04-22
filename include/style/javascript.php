  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
  <script>
  function SearchEnabled() {
	 if(document.getElementById("ext_search_txt").value==="") {
            document.getElementById('ext_search').disabled = true;
        } else {
            document.getElementById('ext_search').disabled = false;
        }
  }
  </script>