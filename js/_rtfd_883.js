/* Read HTML fields */
var hf_to_r = document.querySelectorAll(".hf_to_r");
hf_to_r = hf_to_r[0].getAttribute("data-field-type");

var hf_to_maxrows = document.querySelectorAll(".hf_to_maxrows");
hf_to_maxrows = hf_to_maxrows[0].getAttribute("data-field-type");

var hf_to_jason = document.querySelectorAll(".hf_to_jason");
hf_to_jason = hf_to_jason[0].getAttribute("data-field-type");


jQuery(document).ready(function($) {
  
  /* Table creation */
    var htmltable = $('.datatable').DataTable( {
	  	rowReorder: false,
        responsive: hf_to_r === 'on' ? true : false,
	  	pageLength: Number(hf_to_maxrows),
	  	language: { url: hf_to_jason},
	  	columnDefs: [
            {
			  	type: 'natural', targets: '_all'
			},
		  	
        ]
    } );
  
} );
