$(document).ready(function() {
  $('#dataTable').DataTable(
  	{
	  "language": {
		"decimal":        "",
	    "emptyTable":     "Não há dados na tabela.",
	    "info":           "Exibindo _START_ até _END_ de _TOTAL_ registros",
	    "infoEmpty":      "Exibindo 0 até 0 de 0 registros",
	    "infoFiltered":   "(Filtrado de _MAX_ registros totais)",
	    "infoPostFix":    "",
	    "thousands":      ",",
	    "lengthMenu":     "Mostrar _MENU_ registros por página",
	    "loadingRecords": "Carregando...",
	    "processing":     "Processando...",
	    "search":         "Buscar:",
	    "zeroRecords":    "Não há combinações.",	  	
	    "paginate": {
	      "previous": "Anterior",
	      "next" : "Próximo"
	    }
	  }
	}
  );
});
