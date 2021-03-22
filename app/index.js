// Require express and body-parser
const express = require("express");
const bodyParser = require("body-parser");

// Initialize express and define a port
const app = express();
const PORT = 3000;

// 
app.use(bodyParser.json());

// Llamo verb post
app.post('/webhook', function(req, res) {
	
	console.log(req.body);
	

	if (!req.body.tema) {
		return res.status(400).json({
	      status: 'error',
	      error: 'req body cannot be empty',
	    });
	  } else if (req.body.tema === 'enviarAlertaAlApp') {
		  console.log('Conectar al app');
	  res.status(200).json({
	    status: 'appNotificada',
	    data: req.body,
	  })
	  }	
});

// Start express on the defined port
app.listen(PORT, () => console.log(` Servidor en puerto ${PORT}`))
